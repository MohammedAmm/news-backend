<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Favorite extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title'       => $this->title,
            'author'      => $this->author,
            'content'     => $this->content,
            'favorited'   => 'true',
            'urlToImage'  => $this->url_to_image,
            'url'         => $this->url,
            'publishedAt' => $this->published_at,
        ];

    }
}
