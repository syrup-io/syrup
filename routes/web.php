<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'HomeController@landing');
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'login'], function () {
    Route::get('/', function ()    {
        return view('login.index');
    });
});

Route::get('auth/social/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/social/callback/{provider}', 'Auth\LoginController@handleProviderCallback');
