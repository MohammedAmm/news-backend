<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    public function testRegisterationFailed()
    {
        $userData = [
            "email" => "dummy@dummy.com",
        ];
        $this->json('POST', 'api/auth/signin',$userData ,['Accept' => 'application/json'])
            ->assertStatus(401);
    }

}
