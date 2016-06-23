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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('users', ['as'=> 'userall', 'uses' => 'UserController@allUser']);
    Route::get('user/{id}/detail', ['as'=> 'userdetail', 'uses' => 'UserController@show']);
});