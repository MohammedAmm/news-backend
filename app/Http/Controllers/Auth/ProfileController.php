<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Middleware to pass only authenticated users.
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function __invoke(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'email' => $user->email,
            'name'  => $user->name
        ]);
    }
}
