<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User as User;
use App\Movie;
use JWTAuth;

class MovieTest extends TestCase
{
    use DatabaseTransactions;

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
     * Test if status of response from movies is 200
     *
     * @return void
     */
     public function testResponseMovies(){
        $token = $this->createAuthenticatedUser();
        $response = $this->get('api/movies/?token='.$this->token);
        $response->assertStatus(200);
    }

    /**
     * Test if movies is not empty
     *
     * @depends testResponseMovies
     * @return void
     */
    public function testMovies(){
        $movies = Movie::all();
        $this->assertNotEmpty($movies);
    }

    /**
     * Test if status of response from movies/id is 200
     *
     * @return void
     */
    public function testResponseMovie(){
        $token = $this->createAuthenticatedUser();
        $response = $this->get('api/movies/1?token='.$this->token);
        $response->assertStatus(200);
    }

    /**
     * Test if return json contents the structure
     * Test only will be executed, if testResponseMovie return status 200
     *
     * @depends testResponseMovie
     * @return void
     */
    public function testMovieJsonContent(){
        $movie = json_decode(Movie::find(1), true);
        $this->assertArrayHasKey('id', $movie);
        $this->assertArrayHasKey('title', $movie);
        $this->assertArrayHasKey('overview', $movie);
        $this->assertArrayHasKey('poster', $movie);
        $this->assertArrayHasKey('year', $movie);
        $this->assertArrayHasKey('director', $movie);
        $this->assertArrayHasKey('genres', $movie);
    }    
}
