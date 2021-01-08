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

Route::get('/', 'HomeController@index')->name('home');

Route::get('about', function () {
    return view('web.about');
});

Route::get('shop', function () {
    return view('web.shop');
});



Route::get('singleproduct', function () {
    return view('web.singleproduct');
});
Route::get('halaman', function () {
    return view('admin.admin');
});
Route::get('produk', function () {
    return view('admin.produk');
});

Auth::routes();

Route::resource('market','ShopController');
Route::resource('cart','KeranjangController');
Route::resource('order','OrderController');
Route::get('/order_produk', 'OrderController@order_produk')->name('order.order_produk');

// Route::get('market', 'ShopController@index')->name('market');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'is_admin']] ,function()
{
	Route::get('admin/home', 'HomeController@adminHome')->name('admin.admin');

	Route::get('admin/pengguna', 'UserController@index')->name('admin.pengguna');
	Route::post('admin/pengguna', 'UserController@edit')->name('admin.edit');
	Route::get('admin/produk', 'AdminController@produk')->name('admin.produk');
	Route::get('admin/order', 'AdminController@order')->name('admin.order');

});




