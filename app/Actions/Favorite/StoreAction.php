<?php

namespace App\Actions\Favorite;


class StoreAction
{
    public function execute(array $data)
    {
        //Store  new favorite for the logged in user.
        auth()->user()->favorites()->create($data);
    }

}
