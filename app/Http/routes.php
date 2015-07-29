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

Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@index'
]);

Route::get('/video-player/{video}/{subtitle?}', [
    'as' => 'videoPlayer', 'uses' => 'HomeController@videoPlayer'
]);

Route::post('/add-subtitle', [
    'as' => 'addSubtitle', 'uses' => 'HomeController@addSubtitle'
]);

Route::post('/add-video', [
    'as' => 'addVideo', 'uses' => 'HomeController@addVideo'
]);
