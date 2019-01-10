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

Route::get('/','PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/login','PagesController@login');
Route::get('/forget-password','PagesController@forgetpassword');
Route::get('/dashboard','PagesController@dashboard');
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
// Authentication
Route::get('/authentication','PagesController@authentication');
// Logout
Route::get('/logout','PagesController@logout');
