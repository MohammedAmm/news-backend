<?php

namespace App\Actions\Favorite;


class GetAllAction
{
    public function execute()
    {
        //Return all favorites for logged in user.
        $userFavorites = auth()->user()->favorites;

        return $userFavorites;
    }

}
