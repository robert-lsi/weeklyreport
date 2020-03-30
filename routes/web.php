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

Route::resource('report', 'ReportController');
Route::resource('date', 'DateController');
Route::post('date/report/{id}', 'DateController@storeReport')->name('date.storereport');

Route::get('/home', 'HomeController@index')->name('home');
