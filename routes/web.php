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




// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('resource', 'Admin\ResourceCrudController');
  
  // [...] other routes
});

Route::get('contacto',function(){
	return view('themes.clean-blog.contact');
});
Route::post('contacto','HomeController@contact');
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
	    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

