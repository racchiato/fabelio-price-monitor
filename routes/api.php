<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', 'ProductApiController@getAllProducts');
Route::group(['prefix' => 'product'], function () {
    Route::post('{id}', 'BookController@getProductDetail');
    Route::get('update_price/{id}', 'ProductApiController@updatePrice');
    Route::post('add_image/{id}', 'ProductApiController@addImage');
    Route::delete('add/{id}', 'ProductApiController@addProduct');
});
