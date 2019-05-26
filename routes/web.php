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

Route::post('order/add', 'OrderController@store')->middleware('cors');
Route::get('order/index', 'OrderController@index')->middleware('cors');
Route::get('menu/index', 'MenuController@index')->middleware('cors');
Route::post('order/clear', 'OrderController@clear')->middleware('cors');
Route::get('menu/get/{id}', 'MenuController@get')->middleware('cors');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
