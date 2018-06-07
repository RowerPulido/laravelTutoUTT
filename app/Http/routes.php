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

Route::group(['prefix' => 'movies'], function () {
    Route::get('/', [
        'uses' => 'MovieController@index'
    ]);
    Route::get('/{id}', [
        'uses' => 'MovieController@show'
    ]);
    Route::post('/','MovieController@store');
    Route::put('/{id}','MovieController@update');
    Route::post('/delete/','MovieController@delete');
    Route::get('/find/{name}','MovieController@byName');
});