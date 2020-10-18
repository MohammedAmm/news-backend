<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    //

    public function __invoke(Request $request)
    {
        //Check if passed
        if (!$token = auth()->attempt($request->only('email', 'password'))) {
            //Return with unauthenticated
            return response(null, 401);
        }

        //Return with jwt if success
        return response()->json(compact('token'));
    }
}
