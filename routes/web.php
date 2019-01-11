<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/dashboard')->middleware('isadmin')->group(function(){
        
        // Dashboard
        Route::get('/','PagesController@dashboard')->name('dashboard');
        // Movies
        Route::get('/addmovie','MoviesController@addmovie');
        Route::get('/editmovie','MoviesController@editmovie');
        Route::get('/viewmovies','MoviesController@viewmovies');
        // TV-Shows
        Route::get('/addtvshow','TVshowsController@addtvshow');
        Route::get('/edittvshow','TVshowsController@edittvshow');
        Route::get('/viewtvshows','TVshowsController@viewtvshows');
        // Mega
        Route::get('/addmega','MegaAccountsController@addmegaaccount');
        Route::get('/editmega','MegaAccountsController@editmegaaccount');
        Route::get('/viewmega','MegaAccountsController@viewmegaaccounts');
        // Social 
        Route::get('/sociallinks','PagesController@sociallinks');
        // Change Password
        Route::get('/changepassword','PagesController@changepassword');
    
});


Route::prefix('/')->middleware('checklogin')->group(function(){

    // Home page
    Route::get('/','PagesController@index')->name('index');
    // Contact page
    Route::get('contact','PagesController@contact');
    // Login & Register page
    Route::get('login','PagesController@login')->name('login');
    // Forget Password page
    Route::get('forget-password','PagesController@forgetpassword');
    
    //  Store New User 
    Route::post('register','UsersController@register')->name('register');
    // Authenticate User
    Route::post('authenticate','UsersController@authenticate')->name('authenticate');

});

// Logout 
Route::get('logout','UsersController@logout')->name('logout');
