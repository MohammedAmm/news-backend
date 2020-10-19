<?php

namespace App\Actions\News;

use App\Actions\Favorite\GetAllAction as FavoriteGetAllAction;

class GetAllAction
{
    protected $url = 'https://newsapi.org/v2/top-headlines?';

    public function execute(array $data)
    {
        //Getting news from api based on parameters(country and catergory)
        $news = collect($this->getJson($this->url . 'country=' . $data['country'] . '&category=' . $data['category'] . '&apiKey=' . getenv('NEWS_API_KEY')));

        //Add favorited field to articles arrray.
        $news['articles'] = $this->addFavoritedField($news['articles']);

        return $news;
    }

    protected function getJson($url)
    {
        $response = file_get_contents($url, false);

        return json_decode($response);
    }

    private function addFavoritedField($news)
    {
        //Get all favorites
        $favObj = new FavoriteGetAllAction;
        $favorites = $favObj->execute()->toArray();

        //Get titles from arrays.
        $titles = array_column($favorites, 'title');

        foreach ($news as $new) {
            //initialize parameter with false
            $new->favorited = 'false';

            //if title exists in favorites make the flag true.
            if (in_array($new->title, $titles)) {
                $new->favorited = 'true';
            }
        }

        return $news;
    }
}
