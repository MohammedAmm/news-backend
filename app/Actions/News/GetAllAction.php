<?php

namespace App\Actions\News;


class GetAllAction
{
    protected $url = 'https://newsapi.org/v2/top-headlines?';

    public function execute(array $data)
    {
        //Getting news from api based on parameters(country and catergory)
        $news = collect($this->getJson($this->url . 'country='.$data['country'].'&category='.$data['category'].'&apiKey='.getenv('NEWS_API_KEY')));

        return $news;
    }


    protected function getJson($url)
    {
        $response = file_get_contents($url, false);

        return json_decode( $response );
    }
}
