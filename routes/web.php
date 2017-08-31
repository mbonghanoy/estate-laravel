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
Route::resource('employee', 'EmployeeController');
Route::resource('assets', 'AssetController');

Route::get('delete/{id}', 'AssetController@destroy');

Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
