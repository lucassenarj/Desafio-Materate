<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User as User;
use App\Movie;

class UserTest extends TestCase
{
    /**
     * Create a authenticated user for tests
     *
     */
    protected function createAuthenticatedUser(){
        $this->user  = factory(User::class)->create();
        $this->token = JWTAuth::fromUser($this->user);
        JWTAuth::setToken($this->token);
    }


    /**
     * Test response of successful login
     *
     * @return void
     */
    public function testResponseValidLogin(){
        $response = $this->json('POST', 'api/users/login', [
            'email' => 'lucassena.rj@gmail.com', 
            'password' => 'admin'
        ]);
        $response->assertStatus(200);
    }

    /**
     * Test response of unsuccessful login
     *
     * @return void
     */
     public function testResponseInvalidLogin(){
        $response = $this->json('POST', 'api/users/login', [
            'email' => 'email@teste', 
            'password' => 'test'
        ]);

        $response->assertStatus(401);
    }

    /**
     * Test response of get all user
     *
     * @return void
     */
    public function testReponseGetAllUsers(){
        $token = $this->createAuthenticatedUser();
        $response = $this->get('api/users/all?token='.$this->token);
        $response->assertStatus(200);
    }
}
