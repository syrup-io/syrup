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

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/', function ()    {
        return view('login.signin');
    });
    Route::get('register', function ()    {
        return view('login.register');
    });
    Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('auth/callback/{provider}', 'Auth\LoginController@handleProviderCallback');
});
