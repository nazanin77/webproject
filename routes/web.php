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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/new', 'khateratsController@create')->name('new');
Route::post('/new', 'khateratsController@store');
Route::get('/delete/{id}', 'khateratsController@destroy')->name('delete');
Route::get('/edit/{id}', 'khateratsController@edit')->name('edit');
Route::post('/edit/{id}', 'khateratsController@update')->name('update');
Route::get('/show/{id}', 'khateratsController@show')->name('show');

