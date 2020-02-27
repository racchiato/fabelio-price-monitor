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

Route::view('/', 'home')->name('Homepage');

Route::get('/products', 'ProductApiController@getAllProducts')->name('All Products');
Route::get('/product/{id}', 'ProductApiController@getProductDetail')->name('Get Single Product');
Route::post('/product', 'ProductApiController@searchProduct')->name('Search Product');

Route::view('/add_product', 'add_product')->name('Add Product Form');
Route::post('/add_product', 'ProductApiController@addProduct')->name('Add Product');

Route::get('/update_price/{id}', 'ProductApiController@updatePriceForm')->name('Update Price Form');
Route::post('/update_price/{id}', 'ProductApiController@updatePrice')->name('Update Price');

Route::get('/add_image/{id}', 'ProductApiController@addImageForm')->name('Add Image Form');
Route::post('/add_image/{id}', 'ProductApiController@addImage')->name('Add Image');
