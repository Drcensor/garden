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
 
Route::get('user/test', 'NewsletterController@show'); 



Route::get('/2', function () {
    return view('index2');
});

Auth::routes();

Route::get('user', 'HomeController@index')->name('user');

Route::get('user/accounts', 'HomeController@show')->name('user/accounts'); 

Route::post('user/accounts', 'homeController@update');

Route::get('user/edituser', 'HomeController@edit')->name('user/edituser');



Route::get('user/basket', 'ProductController@index')->name('user/basket');

Route::get('user/product', 'ProductController@link')->name('user/product');


Route::get('user/productdelete', 'ProductController@show')->name('user/productdelete');

Route::Post('user/productdelete', 'ProductController@delete')->name('user/productdelete');

Route::Post('user/adminpurchases', 'ProductController@admindelete')->name('user/adminpurchases');



Route::get('user/adminpanel', 'UserAdminController@index' )->name('user/adminpanel');



Route::get('user/adminpaneledituser', 'UserAdminController@create' )->name('user/adminpaneledituser'); 

Route::get('user/adminDeleteuser', 'UserAdminController@adminUserDelete' )->name('user/adminDeleteUser');

Route::post('user/adminpaneledituser', 'UserAdminController@update' )->name('user/adminEditUser');

Route::get('user/adminEditUser', 'UserAdminController@editUser' )->name('user/adminEditUser'); 


Route::get('user/adminpanelCharts', 'UserAdminController@charts' )->name('user/adminpanelCharts');

Route::get('user/adminEditUser', 'UserAdminController@editUser' )->name('user/adminEditUser');

Route::get('user/adminstock', 'UserAdminController@stock' )->name('user/adminstock');

// Route::Post('user/adminstock', 'UserAdminController@stockinsert' );

Route::get('user/adminNewProduct', 'UserAdminController@productstock' )->name('user/adminNewProduct');

Route::post('user/adminNewProduct', 'UserAdminController@stockinsert' )->name('user/adminNewProduct');

Route::get('user/adminDeleteProduct', 'UserAdminController@productdelete' )->name('user/adminDeleteProduct');

Route::Post('user/adminDeleteProduct', 'UserAdminController@adminproductdelete' )->name('user/adminDeleteProduct');

Route::Post('user/adminDeleteUser', 'UserAdminController@userDelete' );  



 Route::Post('user/adminstock', 'OrderController@update')->name('user/adminstock');

Route::get('user/adminpurchases', 'OrderController@edit')->name('user/adminpurchases');



Route::post('user/thankyou', 'QueryController@create')->name('user/thankyou');

Route::get('user/products', 'QueryController@products')->name('user/products');



Route::post('user/basket', 'BasketController@destroy')->name('user/basket'); 

Route::post('user/products', 'BasketController@create')->name('user/products');

Route::post('user/form1redirect', 'BasketController@complete')->name('user/form1'); 


Route::post('user/edituser', 'ProfileController@uploads');

Route::get('user/profile', 'ProfileController@profile');

Route::post('user/profile', 'ProfileController@update_avatar');


Route::post('/sub', 'NewsletterController@store');

Route::post('/sub2', 'NewsletterController@newsStore');

Route::post('/email', 'CommentController@store');


Route::post('/editName', 'UserEditController@editFirstname');

Route::post('/editLastname', 'UserEditController@editLastname');

Route::post('/editEmail', 'UserEditController@editEmail');

Route::post('/editStreet', 'UserEditController@editStreet');

Route::post('/editCity', 'UserEditController@editCity');

Route::post('/editCounty', 'UserEditController@editCounty');

Route::post('/editPostcode', 'UserEditController@editPostcode');



Route::get('/action_page_users', 'SearchController@searchUser'); 

Route::get('/action_page_delete', 'SearchController@searchUserDelete'); 

Route::get('/action_page_edit', 'SearchController@searchUserEdit');

Route::get('user/searchUserEdit', 'SearchController@editPage');

Route::post('user/searchUserEdit', 'SearchController@userEdit');

Route::get('user/searchUserDelete', 'SearchController@deletePage');

Route::post('user/searchUserDelete', 'SearchController@userDelete');
 

// Route::get('user/edituser', function () {
// 	return view('edituser');
// });


// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "adminpanel";
// }]);