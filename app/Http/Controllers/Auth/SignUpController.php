<?php

namespace App\Http\Controllers\Auth;

use App\Actions\User\RegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;

class SignUpController extends Controller
{
    //

    public function __invoke(RegisterRequest $request, RegisterAction $action)
    {
        //Register a new user after validation using form request and passing validated data to register action.
        $action->execute($request->validated());

        return response(null, 200)->json();

    }
}
