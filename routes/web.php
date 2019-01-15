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
        Route::get('/editmovie/{id?}','MoviesController@editmovie')->name('editmovie');
        Route::get('/viewmovies','MoviesController@viewmovies')->name('viewmovies');
        
        // Movies actions
        Route::post('/storemovie','MoviesController@storemovie')->name('storemovie');
        Route::post('/updatemovie/{id}','MoviesController@updatemovie')->name('updatemovie');
        Route::get('/deletemovie/{id?}','MoviesController@deletemovie')->name('deletemovie');
        
        // TV-Shows pages
        Route::get('/addtvshow','TVshowsController@addtvshow')->name('addtvshow');
        Route::get('/edittvshow/{id?}','TVshowsController@edittvshow')->name('edittvshow');
        Route::get('/viewtvshows','TVshowsController@viewtvshows')->name('viewtvshows');
        
         // TV-Shows actions
         Route::post('/storetvshow','TVshowsController@storetvshow')->name('storetvshow');
         Route::post('/updatetvshow/{id}','TVshowsController@updatetvshow')->name('updatetvshow');
         Route::get('/deletetvshow/{id?}','TVshowsController@deletetvshow')->name('deletetvshow');

        // Mega pages
        Route::get('/addmega','MegaAccountsController@addmegaaccount')->name('addmega');
        Route::get('/editmega/{id?}','MegaAccountsController@editmegaaccount')->name('editmega');
        Route::get('/viewmega','MegaAccountsController@viewmegaaccounts')->name('viewmega');
        
        // Mega actions
         Route::post('/storemega','MegaAccountsController@storemegaaccount')->name('storemega');
         Route::post('/updatemega/{id}','MegaAccountsController@updatemegaaccount')->name('updatemega');
         Route::get('/deletemega/{id?}','MegaAccountsController@deletemegaaccount')->name('deletemega');
        
        // Poster pages
       Route::get('/addposter','PostersController@addposter')->name('addposter');
       Route::get('/editposter/{id?}','PostersController@editposter')->name('editposter');
       Route::get('/viewposters','PostersController@viewposters')->name('viewposters');
       
        // Poster actions
        Route::post('/storeposter','PostersController@storeposter')->name('storeposter');
        Route::post('/updateposter/{id}','PostersController@updateposter')->name('updateposter');
        Route::get('/deleteposter/{id?}','PostersController@deleteposter')->name('deleteposter'); 
        
         // App pages
       Route::get('/addapp','AppsController@addapp')->name('addapp');
       Route::get('/editapp/{id?}','AppsController@editapp')->name('editapp');
       Route::get('/viewapps','AppsController@viewapps')->name('viewapps');
       
        // App actions
        Route::post('/storeapp','AppsController@storeapp')->name('storeapp');
        Route::post('/updateapp/{id}','AppsController@updateapp')->name('updateapp');
        Route::get('/deleteapp/{id?}','AppsController@deleteapp')->name('deleteapp');

        // Social 
        Route::get('/sociallinks','SociallinksController@sociallinks')->name('sociallinks');
        Route::post('/update_social_links','SociallinksController@update_social_links')->name('update_social_links');

        
        // Change Password
        Route::get('/changepassword','PagesController@changepassword')->name('changepassword');
        Route::post('/updatepassword','UsersController@updatepassword')->name('updatepassword');
    
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

    // App download
    Route::get('/android','AppsController@android')->name('android');
    Route::get('/iphone','AppsController@iphone')->name('iphone');
    Route::get('/windows','AppsController@windows')->name('windows');

});

// Logout 
Route::get('logout','UsersController@logout')->name('logout');
