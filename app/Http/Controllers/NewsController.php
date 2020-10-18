<?php

namespace App\Http\Controllers;

use App\Actions\News\GetAllAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\FetchRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function __invoke(FetchRequest $request, GetAllAction $action)
    {
        //Fetch all news based on user's choice using getall action.
        $news = $action->execute($request->validated());

        return response()->json($news);
    }
}
