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

Route::get('/', ['uses'=>'PageController@getHome', 'as'=>'home']);
Route::get('/login', ['uses'=>'PageController@getLogin', 'as'=>'login']);
Route::get('/register', ['uses'=>'PageController@getRegistration', 'as'=>'register']);