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


Route::get('/','HomeController@index')->name('home');
Route::post('/request-info-price','HomeController@requestInfoPrice')->name('home.request_info_pri');
Route::get('/thank-you','HomeController@thankYou')->name('home.thank_you');
