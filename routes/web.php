<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------   --------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/create', 'CategoryController@store')->name('category.store');
    Route::get('/category/{slug}', 'CategoryController@show')->name('category');

    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/create', 'ProductController@store')->name('product.store');
    Route::get('/product/{slug}', 'ProductController@show')->name('product');

    Route::get('/cart', 'CartController@show')->name('cart.show');
    Route::post('/cart', 'CartController@store')->name('cart.store');
    Route::get('/cart/clear', 'CartController@clear')->name('cart.clear');
    Route::get('/cart/delete/{id}', 'CartController@delete')->name('cart.delete');
});
