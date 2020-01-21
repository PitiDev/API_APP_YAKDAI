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

// Route::get('/search', function () {
//     return view('search');
// });

Route::get('/search', 'SearchController@user_search')->name('search');

Route::post('/search', 'SearchController@user_search')->name('search');

Route::get('/type-car', 'TypeCarController@index')->name('type-car');
Route::get('/type-loan', 'TypeLoanController@index')->name('type-loan');

Route::post('/register', 'RegisterController@store')->name('register');
Route::post('/create-cus', 'CustomerController@store')->name('create-cus');