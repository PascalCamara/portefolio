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


Route::get('/', 'Home\HomeController@show')->name('home');
Route::get('/CV', 'Home\HomeController@getDownload');
Route::post('/store', 'Home\HomeController@update');
