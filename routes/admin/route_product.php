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

Route::get('/products','ProductController@index')->name('product.index');
Route::get('/products/load-info','ProductController@loadAllProduct')->name('product.load_info');
Route::get('/products/create','ProductController@showCreate')->name('product.create');
Route::post('/products/create','ProductController@store')->name('product.create');
Route::get('products/update/{id}','ProductController@showUpdate')->name('product.update');
Route::post('products/update/{id}','ProductController@update')->name('product.update');
Route::post('/products/image/add/{productId}','ProductController@addProductImage')->name('product.image.add');
Route::delete('/products/image/delete/{productId}/{id}','ProductController@deleteProductImage')->name('product.image.delete');
Route::delete('/products/delete/{id}','ProductController@delete')->name('product.delete');

Route::get('/product-type','ProductTypeController@index')->name('product_type.index');
Route::get('/product-type/create','ProductTypeController@showCreate')->name('product_type.create');
Route::post('/product-type/create','ProductTypeController@store')->name('product_type.create');
Route::get('/product-type/update/{id}','ProductTypeController@showUpdate')->name('product_type.update');
Route::post('/product-type/update/{id}','ProductTypeController@update')->name('product_type.update');

Route::post('/product-type/create-children/{id}','ProductTypeController@createProductTypeChildren')->name('product_type.create_children');
Route::delete('/product-type/delete-children/{id}/{childId}','ProductTypeController@deleteProductTypeChildren')->name('product_type.delete_children');

//Route Product Color
Route::get('/product-color','ProductColorController@index')->name('product_color.index');
Route::get('/product-color/create','ProductColorController@showCreate')->name('product_color.create');
Route::post('/product-color/create','ProductColorController@store')->name('product_color.create');
Route::get('/product-color/update/{id}','ProductColorController@showUpdate')->name('product_color.update');
Route::post('/product-color/update/{id}','ProductColorController@update')->name('product_color.update');

//Route Product Specification
Route::get('/product-specification','ProductSpecificationController@index')->name('product_specification.index');
Route::get('/product-specification/load-info','ProductSpecificationController@loadInfo')->name('product_specification.load_info');
Route::get('/product-specification/create','ProductSpecificationController@showCreate')->name('product_specification.create');
Route::post('/product-specification/create','ProductSpecificationController@store')->name('product_specification.create');
Route::get('/product-specification/update/{id}','ProductSpecificationController@showUpdate')->name('product_specification.update');
Route::post('/product-specification/update/{id}','ProductSpecificationController@update')->name('product_specification.update');

//Route Product SalientFeature
Route::get('/product-feature/create','ProductSalientFeatureController@showCreate')->name('product_feature.create');
Route::post('/product-feature/create','ProductSalientFeatureController@store')->name('product_feature.create');
Route::delete('/product-feature/delete/{id}','ProductSalientFeatureController@delete')->name('product_feature.delete');

