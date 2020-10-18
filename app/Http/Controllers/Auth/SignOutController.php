<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class SignOutController extends Controller
{
    //

    public function __invoke()
    {
        //Logged out the current user.
        auth()->logout();

        return response(null, 200)->json();
    }
}