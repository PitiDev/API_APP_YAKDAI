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
//sudo chmod -R 777 storage/*

Route::post('/create-pro', 'ProductController@store');
Route::get('/list-pro', 'ProductController@index');
Route::post('/search-pro', 'ProductController@search');
Route::post('/delete-pro', 'ProductController@destroy');

Route::post('/add-user', 'UserController@add_user');
Route::post('/login', 'UserController@user_login');

Route::post('/add-cus', 'CustomerController@add_customer');
Route::get('/list-cus', 'CustomerController@index');
Route::post('/search-cus', 'CustomerController@search');

Route::post('/add-order', 'OrderController@add_order');
Route::post('/list-order', 'OrderController@index');
Route::post('/user-search-order', 'OrderController@user_search');
Route::post('/list-order-detail', 'OrderController@order_detail');
Route::post('/list-order-price', 'OrderController@order_detail_price');

Route::post('/list-order-success', 'OrderController@order_success');
Route::post('/delete-order', 'OrderController@destroy');

//Status Product
Route::post('/list-update', 'StatusController@list_update');
Route::post('/list-stock', 'StatusController@index');
Route::post('/update_pro_status', 'StatusController@update_pro_status');
Route::post('/update_status_order', 'StatusController@update_status_order');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
