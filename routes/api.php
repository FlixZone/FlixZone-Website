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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Moives

    // List Movies
    Route::get('movies','MoviesController@index');

    // List Single Movie
    Route::get('movie/{id}','MoviesController@show');

// Posters

    // List Posters
    Route::get('posters','PostersController@index');