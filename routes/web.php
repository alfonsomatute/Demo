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

#Route::get('/', function () {
#    return view('themes.clean-blog.home');
#});

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('article/{id}/{slug}','ArticlesController@article');

