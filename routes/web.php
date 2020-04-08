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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories/create', 'CategoryController@create');

Route::post('/categories', 'CategoryController@store');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{category}/edit', 'CategoryController@edit');

Route::patch('/categories/{category}', 'CategoryController@update');

Route::get('/categories/{category}', 'CategoryController@show');

Route::get('/categories/{category}/sizes/create', 'SizeController@create');

Route::post('/categories/{category}/sizes', 'SizeController@store');

Route::get('/categories/{category}/sizes/{size}', 'SizeController@show');

Route::get('/sizes/{size}/items/create', 'ItemController@create');

Route::post('/sizes/{size}/items', 'ItemController@store');

Route::get('/sizes/{size}/items', 'ItemController@show');
