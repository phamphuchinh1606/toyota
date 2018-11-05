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
    return view('guest.home.index');
});

Route::get('/products/{a?}', function () {
    return view('guest.product.product_detail');
});

Route::get('/collections/all', function () {
    return view('guest.collection.collection');
});

Route::get('/pages/lien-he', function () {
    return view('guest.contact.contact');
});

Route::get('/blogs/{gaitri?}', function () {
    return view('guest.blog.blog');
});

Route::get('/blogs/news/{sd?}', function () {
    return view('guest.blog.blog_detail');
});
