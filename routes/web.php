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


Route::resource('establishments', 'Backend\EstablishmentController');
Route::resource('comments', 'Backend\CommentsController');
Route::resource('cookingTypes', 'Backend\CookingTypesController');
Route::resource('photos', 'Backend\PhotosController');


// Frontend
Route::get('/', 'Frontend\FrontendController@index');
Route::get('/restaurants', 'Frontend\FrontendController@restaurants');

Auth::routes();

Route::get('/home', 'HomeController@index');
