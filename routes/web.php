<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::name('book.')->prefix('book')->group(function(){
	Route::get('/all','BookController@index')->name('index');
	Route::get('/{detail}/show','BookController@show')->name('show');
	Route::get('/create','BookController@create')->name('create');
	Route::post('/store','BookController@store')->name('store');
	Route::get('/{id}/edit','BookController@edit')->name('edit');
	Route::post('/{id}/update','BookController@store')->name('update');
});

Route::get('/booklog/{booklog}/create','BookLogController@createLog')->name('booklog.create');
Route::post('/booklog/store','BookLogController@storeLog')->name('booklog.store');


