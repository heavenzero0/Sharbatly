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


Route::get('/administrator', function () {
    return view('user.dashboard');
});


Route::get('/', 'User\UserController@index')->name('login');
Route::post('/', 'User\UserController@checkID')->name('user.ID');

//Loading
Route::resource('loadings', 'Loading\LoadingController');


//Invoice
Route::resource('invoices', 'Invoice\InvoiceController');



Route::group(['middleware' => 'check'], function () {
	Route::resource('dashboard', 'User\UserController');
	//VAL
	Route::get('dashboard', 'User\LoadingController@dashboard')->name('docu_dashboard');
	Route::resource('loading', 'User\LoadingController');
	Route::get('loading', 'User\LoadingController@createloading')->name('create_loading');



});

