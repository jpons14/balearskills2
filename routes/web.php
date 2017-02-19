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


// Establishments

Route::get('/establishments', array('uses' => 'EstablishmentsController@index', 'as' => 'establishments.index'));
Route::get('/establishments/create', array('uses' => 'EstablishmentsController@create', 'as' => 'establishments.create'));
Route::post('/establishments/create', array('uses' => 'EstablishmentsController@store', 'as' => 'establishments.store'));
Route::get('/establishments/{establishment}', array('uses' => 'EstablishmentsController@show', 'as' => 'establishments.show'));
Route::get('/establishments/{establishment}/edit', array('uses' => 'EstablishmentsController@edit', 'as' => 'establishments.edit'));
Route::put('/establishments/{establishment}', array('uses' => 'EstablishmentsController@update', 'as' => 'establishments.update'));
Route::delete('/establishments/{establishment}', array('uses' => 'EstablishmentsController@destroy', 'as' => 'establishments.destroy'));

// cookingTypes
Route::get('/cookingTypes', array('uses' => 'CookingTypesController@index', 'as' => 'cookingTypes.index'));
Route::get('/cookingTypes/create', array('uses' => 'CookingTypesController@create', 'as' => 'cookingTypes.create'));
Route::post('/cookingTypes/create', array('uses' => 'CookingTypesController@store', 'as' => 'cookingTypes.store'));
Route::get('/cookingTypes/{cookingType}', array('uses' => 'CookingTypesController@show', 'as' => 'cookingTypes.show'));
Route::get('/cookingTypes/{cookingType}/edit', array('uses' => 'CookingTypesController@edit', 'as' => 'cookingTypes.edit'));
Route::put('/cookingTypes/{cookingType}', array('uses' => 'CookingTypesController@update', 'as' => 'cookingTypes.update'));
Route::delete('/cookingTypes/{cookingType}', array('uses' => 'CookingTypesController@destroy', 'as' => 'cookingTypes.destroy'));

// comments
Route::get('/comments', array('uses' => 'CommentsController@index', 'as' => 'comments.index'));
Route::get('/comments/create', array('uses' => 'CommentsController@create', 'as' => 'comments.create'));
Route::post('/comments/create', array('uses' => 'CommentsController@store', 'as' => 'comments.store'));
Route::get('/comments/{comment}', array('uses' => 'CommentsController@show', 'as' => 'comments.show'));
Route::get('/comments/{comment}/edit', array('uses' => 'CommentsController@edit', 'as' => 'comments.edit'));
Route::put('/comments/{comment}', array('uses' => 'CommentsController@update', 'as' => 'comments.update'));
Route::delete('/comments/{comment}', array('uses' => 'CommentsController@destroy', 'as' => 'comments.destroy'));

// photos
Route::get('/photos', array('uses' => 'PhotosController@index', 'as' => 'photos.index'));
Route::get('/photos/create', array('uses' => 'PhotosController@create', 'as' => 'photos.create'));
Route::post('/photos/create', array('uses' => 'PhotosController@store', 'as' => 'photos.store'));
Route::get('/photos/{photo}', array('uses' => 'PhotosController@show', 'as' => 'photos.show'));
Route::get('/photos/{photo}/edit', array('uses' => 'PhotosController@edit', 'as' => 'photos.edit'));
Route::put('/photos/{photo}', array('uses' => 'PhotosController@update', 'as' => 'photos.update'));
Route::delete('/photos/{photo}', array('uses' => 'PhotosController@destroy', 'as' => 'photos.destroy'));


Auth::routes();

Route::get( '/home', 'HomeController@index' );
