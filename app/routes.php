<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::resource('users', 'UsersController');

Route::post('/users/store', 'UsersController@store');
Route::post('/users/signin', 'UsersController@signin');

Route::get('/logout', 'UsersController@logout');
Route::get('/', 'BaseController@dashboard');
Route::get('/404', 'BaseController@dashboard');
Route::get('/dashboard', 'BaseController@dashboard');
Route::get('/login', 'UsersController@getLogin');
Route::get('/register', 'UsersController@getRegister');
Route::get('/profile', 'UsersController@getProfile');
Route::get('/profile/{id}', 'UsersController@getProfile');
Route::get('/profile/{id}/edit', 'UsersController@edit');
Route::get('/profile/{id}/update', 'UsersController@update');