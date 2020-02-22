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

Route::get('/contact','ContactController@index')->name('contact.index');
Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
Route::delete('/contact/delete/{id}', 'ContactController@delete')->name('contact.delete');

Route::get('/customer-request', 'CustomerRequestPriceController@index')->name('customer_request.index');
Route::get('/customer-request/show/{id}', 'CustomerRequestPriceController@show')->name('customer_request.show');
Route::delete('/customer-request/delete/{id}', 'CustomerRequestPriceController@delete')->name('customer_request.delete');
Route::post('/customer-request/update-status/{id}/{status}', 'CustomerRequestPriceController@updateStatus')->name('customer_request.update_status');


