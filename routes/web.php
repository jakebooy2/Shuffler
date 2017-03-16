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
Route::get('/home', ['uses'=>'PageController@getHome', 'as'=>'home']);
Auth::routes();

Route::get('/logout', ['uses' => 'PageController@logout', 'as'=>'logout']);
Route::get('/account', ['uses'=>'PageController@getAccount', 'as'=>'account']);