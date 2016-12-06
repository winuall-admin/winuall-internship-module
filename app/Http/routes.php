<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'Helper@DisplayQ');
Route::get('/home', 'Helper@DisplayQ');
Route::get('login', function(){
   return view('login'); 
});

Route::get('register', function(){
    return view('register');
});
Route::post('ask', 'Helper@Ask');
Route::get('profile', 'Helper@Profile');
Route::get('question/{id}', 'Helper@Question');
Route::get('myans', 'Helper@MyAns');
Route::get('myques', 'Helper@MyQues');
Route::get('answer/{id}', 'Helper@Answer');
