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

Route::get('/users', 'UserController@index')->name('UserIndex');
Route::get('/user/{id}', 'UserController@view')->name('ViewUser');
Route::get('/addresses', 'AddressController@index')->name('AddressIndex');
Route::get('/address/{id}', 'AddressController@view')->name('ViewUAddress');

Route::group(['prefix' => 'admin'], function () {

    Route::Auth();

    Route::get('/users', 'Admin\UserController@index')->name('AdminIndexUser');
    Route::get('/users/{id}', 'Admin\UserController@view')->name('AdminViewUser');
    Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('AdminEditUser');
    Route::post('/user/{id}/update', 'Admin\UserController@update')->name('AdminUpdateUser');
    Route::get('/user/{id}/delete', 'Admin\UserController@delete')->name('AdminDeleteUser');

    Route::get('/addresses', 'Admin\AddressController@index')->name('AdminIndexAddress');
    Route::get('/addresses/{id}', 'Admin\AddressController@view')->name('AdminViewAddress');
    Route::get('/address/{id}/delete', 'Admin\AddressController@delete')->name('AdminDeleteAddress');

});


