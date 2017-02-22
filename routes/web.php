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

Route::get( '/', function (){
    return view( 'welcome' );
} );
//tests
Route::get('/lang/{lan}', array('uses' => 'Controller@setLang', 'as' => 'lang'));

Route::resource('establishments', 'Backend\EstablishmentController');
Route::resource('comments', 'Backend\CommentsController');
Route::resource('cookingTypes', 'Backend\CookingTypesController');
Route::resource('photos', 'Backend\PhotosController');

Auth::routes();

Route::get( '/home', 'HomeController@index' );
