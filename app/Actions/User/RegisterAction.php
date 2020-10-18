<?php

namespace App\Actions\User;

use App\Models\User;
use App\Mail\PasswordMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterAction
{

    public function execute(array $data)
    {
        //Generate random string and use bcrypt for hashing the string to be password, and add it to associative array to register new user.
        $password = $this->generatePassword();
        $data += ['password' => bcrypt($password)];

        $user = User::create($data);

        //Send Password after successfully creating a new user.
        $data['password'] = $password;
        $this->sendPassword($user->email, $data);

    }

    private function generatePassword(): string
    {
        //Generate randomg string.
        return Str::random(10);
    }

    private function sendPassword(string $email, array $data)
    {
        //Send mail to user after registeration with password.
        Mail::to($email)->send(new PasswordMail($data));
    }
}
