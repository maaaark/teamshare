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

Route::get('/', 'BaseController@dashboard');
Route::get('/dashboard', 'BaseController@dashboard');
Route::get('/login', 'UsersController@getLogin');
Route::get('/register', 'UsersController@getRegister');

Route::controller('users', 'UsersController');