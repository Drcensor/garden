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

Route::get('user/edituser', function () {
	return view('edituser');
});

Route::post('user/accounts', 'homeController@update');

Route::get('user/productdelete', 'ProductController@show')->name('user/productdelete');

Route::Post('user/productdelete', 'ProductController@delete')->name('user/productdelete');


Route::get('user/adminpanel', 'UserAdminController@index' )->name('user/adminpanel');

Route::get('user/adminpanelCharts', 'UserAdminController@charts' )->name('user/adminpanelCharts');

Route::get('user/adminEditUser', 'UserAdminController@editUser' )->name('user/adminEditUser');

Route::get('user/adminstock', 'UserAdminController@stock' )->name('user/adminstock');


// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "adminpanel";
// }]);