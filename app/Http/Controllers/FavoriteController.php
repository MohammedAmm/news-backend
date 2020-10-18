<?php

namespace App\Http\Controllers;

use App\Actions\Favorite\DeleteAction;
use App\Actions\Favorite\GetAllAction;
use App\Actions\Favorite\StoreAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Favorite\DeleteRequest;
use App\Http\Requests\Favorite\StoreRequest;

class FavoriteController extends Controller
{
    //
    /**
     * Display All favorite for user.
     *
     * @return Response
     */
    public function index(GetAllAction $action)
    {
        //Get all logged in user 's favorites
        $favorites = $action->execute();

        return response()->json(['data' =>$favorites]);
    }

    /**
     * Store a newly facorite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, StoreAction $action)
    {
        //Store new favorite for current logged in user.
        $action->execute($request->validated());

        return response()->json(['message' => 'Successfully added to favorites']);
    }

    /**
     * Remove favorite from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteRequest $request, DeleteAction $action)
    {
        //Validate title to remove user's favorite using delete action.
        $action->execute($request->validated());

        return response()->json(['message' => 'Successfully deleted from favorites']);
    }

}
