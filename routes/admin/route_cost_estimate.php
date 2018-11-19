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

//Setting App Info
Route::get('/cost-estimate/estimate','CostEstimateController@index')->name('cost_estimate.estimate');
Route::post('/cost-estimate/update','CostEstimateController@update')->name('cost_estimate.estimate.update');


