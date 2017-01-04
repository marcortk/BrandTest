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
    return view('welcome');
});

Route::group(['domain' => '{category}.lvh.me'], function () {
    Route::get('/', ['as' => 'category', 'uses' => 'UserController@showCategory']);
});

Route::group(['prefix' => 'backend'], function () {
    Route::get('/', function () {
        return view('backend.dashboard');
    });

    Route::group(['prefix' => 'speakers'], function () {
        Route::get('/create', ['as' => 'create', 'uses' => 'SpeakerController@create']);
        Route::post('/save', ['as' => 'save', 'uses' => 'SpeakerController@save']);
    });
});

Route::get('send', ['as' => 'send', 'uses' => 'UserController@send']);
Route::get('parse', ['as' => 'parse', 'uses' => 'ParseController@parse']);
Route::get('youtube', ['uses' => 'YoutubeController@search', 'as' => 'youtube.search']);