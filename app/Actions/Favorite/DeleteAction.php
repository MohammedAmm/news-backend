<?php

namespace App\Actions\Favorite;


class DeleteAction
{
    public function execute(array $data)
    {
        //Delete favorite based on title for the logged in user.
        auth()->user()->favorites()->whereTitle($data['title'])->delete();
    }

}
