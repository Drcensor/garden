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
    return view('index');
});

Auth::routes();

Route::get('user', 'HomeController@index')->name('user');

Route::get('user/accounts', 'HomeController@show')->name('user/accounts');

Route::get('user/form1', 'ProductController@index')->name('user/form1');

Route::get('user/product', 'ProductController@link')->name('user/product');

Route::post('user/thankyou', 'QueryController@create')->name('user/thankyou');

Route::get('user/products', function () {
	return view('products');
});


