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

Route::post('user/accounts', 'homeController@update');


Route::get('user/form1', 'ProductController@index')->name('user/form1');

Route::get('user/product', 'ProductController@link')->name('user/product');


Route::get('user/productdelete', 'ProductController@show')->name('user/productdelete');

Route::Post('user/productdelete', 'ProductController@delete')->name('user/productdelete');

Route::Post('user/adminpurchases', 'ProductController@admindelete')->name('user/adminpurchases');



Route::get('user/adminpanel', 'UserAdminController@index' )->name('user/adminpanel');



Route::get('user/adminpaneledituser', 'UserAdminController@create' )->name('user/adminpaneledituser');

Route::post('user/adminpaneledituser', 'UserAdminController@update' )->name('user/adminpaneledituser');

Route::get('user/adminEditUser', 'UserAdminController@editUser' )->name('user/adminEditUser');


Route::get('user/adminpanelCharts', 'UserAdminController@charts' )->name('user/adminpanelCharts');

Route::get('user/adminEditUser', 'UserAdminController@editUser' )->name('user/adminEditUser');

Route::get('user/adminstock', 'UserAdminController@stock' )->name('user/adminstock');



Route::post('user/editproducts', 'OrderController@update');

Route::get('user/adminpurchases', 'OrderController@edit')->name('user/adminpurchases');

Route::post('user/thankyou', 'QueryController@create')->name('user/thankyou');

Route::get('user/products', function () {
	return view('products');
});

Route::get('user/edituser', function () {
	return view('edituser');
});


// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "adminpanel";
// }]);