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

//user page
//user login & register
Route::get('/', 'Auth\UserLoginController@index')->name('user.login');
Route::get('/user-login/submit', 'Auth\UserLoginController@login_auth')->name('user.submit');
Route::get('/user-register', 'Auth\UserLoginController@register')->name('user.register');
Route::get('/user-register/save','Auth\UserLoginController@register_store')->name('user.register-akun');
Route::get('/user-logout', 'Auth\UserLoginController@userlogout')->name('user.logout');

//user menu
Route::get('/menu', 'UserController@menu_user')->name('user.menu');
Route::get('/cek-stock', 'UserController@cek_stock');
Route::get('/kosong', 'UserController@cek_stock');
Route::get('/minta-stock', 'UserController@minta_stock');
Route::get('/pencarian_stock', 'UserController@pencarian_stock');

//send
Route::get('/minta-stock/kirim', 'UserController@store_Mintastock');


//admin page
//Get admin login dan register
Route::get('/admin-login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('/admin-login/enter', 'Auth\AdminLoginController@login_auth')->name('admin.submit');
Route::get('/admin-register','Auth\AdminLoginController@register')->name('admin.register');
Route::post('/admin-register/save','Auth\AdminLoginController@register_store')->name('admin.register-data');
Route::get('/admin-logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//admin after login & register
Route::get('/admin-dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/error-upload', 'AdminController@error_upload')->name('admin.error');
Route::get('/admin-dashboard/get-data', 'AdminController@get_dataStock')->name('admin.getdata');
Route::post('/admin-dashboard/upload-data', 'AdminController@store_dataStock')->name('admin.upload-data');
Route::get('/admin-pesanan-stock', 'AdminController@pesanan_stock');
Route::get('/admin-pesanan-stock/get-data', 'AdminController@get_pesanStock')->name('admin.laporan');;
Route::get('/notif', 'AdminController@notif')->name('admin.notif');;
Route::get('/status-data', 'AdminController@status_data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
