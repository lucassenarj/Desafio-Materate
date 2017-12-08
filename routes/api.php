<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(array('prefix' => '/'), function(){
    Route::get('/', function(){
        return response()->json(['message' => 'Movies API', 'status' => 'Connected']);
    });

    Route::resource('movies', 'MoviesController')->middleware('jwt.auth');

    Route::get('/', function(){
        return redirect('api');
    });
});

/*
 * Definindo rotas de usuário
 *
 */

Route::group(['middleware' => 'api', 'prefix' => 'users'], function ($router) {
    Route::post('login', 'UsersController@login');
    Route::post('logout', 'UsersController@logout');
    Route::post('refresh', 'UsersController@refresh');
    Route::post('me', 'UsersController@me');
    Route::get('all', 'UsersController@all');

});