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
        // Movies pages
        Route::get('/addmovie','MoviesController@addmovie')->name('addmovie');
        Route::get('/editmovie','MoviesController@editmovie')->name('editmovie');
        Route::get('/viewmovies','MoviesController@viewmovies')->name('viewmovies');
        // Movies actions
        Route::post('/storemovie','MoviesController@storemovie')->name('storemovie');
        Route::get('/editmovie','MoviesController@editmovie')->name('editmovie');
        // TV-Shows
        Route::get('/addtvshow','TVshowsController@addtvshow')->name('addtvshow');
        Route::get('/edittvshow','TVshowsController@edittvshow')->name('edittvshow');
        Route::get('/viewtvshows','TVshowsController@viewtvshows')->name('viewtvshows');
        // Mega
        Route::get('/addmega','MegaAccountsController@addmegaaccount')->name('addmega');
        Route::get('/editmega','MegaAccountsController@editmegaaccount')->name('editmega');
        Route::get('/viewmega','MegaAccountsController@viewmegaaccounts')->name('viewmega');
        // Social 
        Route::get('/sociallinks','PagesController@sociallinks')->name('sociallinks');
        // Change Password
        Route::get('/changepassword','PagesController@changepassword')->name('changepassword');
    
});


Route::prefix('/')->middleware('checklogin')->group(function(){

    // Home page
    Route::get('/','PagesController@index')->name('index');
    // Contact page
    Route::get('contact','PagesController@contact')->name('contact');
    // Login & Register page
    Route::get('login','PagesController@login')->name('login');
    // Forget Password page
    Route::get('forget-password','PagesController@forgetpassword')->name('forget-password');
    
    //  Store New User 
    Route::post('register','UsersController@register')->name('register');
    // Authenticate User
    Route::post('authenticate','UsersController@authenticate')->name('authenticate');

});

// Logout 
Route::get('logout','UsersController@logout')->name('logout');
