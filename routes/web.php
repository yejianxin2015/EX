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
    return view('layouts.app');
});


Auth::routes();

//Route::get('/', 'HomeController@index');

Route::get('/','PagesController@index');
Route::get('t/{id}','PagesController@show');
Route::get('new','PagesController@create');