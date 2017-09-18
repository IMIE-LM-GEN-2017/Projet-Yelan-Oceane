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

// Comment
Route::resource('comment', 'CommentController', ['except' => ['show', 'edit', 'update']]);

//Home
Route::get('/', 'HomeController@index')->name('Home');
Route::get('/conditions', 'HomeController@conditions')->name('Conditions');
Route::get('/story', 'HomeController@story')->name('Story');
//Contact
Route::get('/contact', 'ContactController@getForm')->name('ContactGetForm');
Route::post('/contact-post', 'ContactController@postForm')->name('ContactPostForm');

//Images
Route::get('my-image', 'ImageController@getForm')->name('getForm');
Route::post('my-image', 'ImageController@postForm')->name('postForm');

//Users
Route::get('/users', 'UserController@index')->name('UserIndex');
Route::get('/dashboard', 'UserController@dashboard')->name('Dashboard');
Route::get('/public-show', 'UserController@publicShow')->name('PublicShow');
Route::get('/{id}/show', 'UserController@show')->name('UserShow');
Route::get('/{id}/edit', 'UserController@edit')->name('UserEdit');
Route::post('/{id}/update', 'UserController@update')->name('UserUpdate');
Route::get('/confirm-delete', 'UserController@confirmDelete')->name('ConfirmDelete');
Route::get('/{id}/delete', 'UserController@delete')->name('UserDelete');
// function comments
Route::get('/comments', 'UserController@comments')->name('Comments');
// function SOS
Route::get('/sos-search', 'UserController@getFormSearch')->name('SosSearch');
Route::post('/sos-result', 'UserController@postFormSearch')->name('SosResult');


// Routes Admin
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\UserController@index')->name('AminUserIndex');
    Route::get('/dashboard', 'Admin\UserController@dashboard')->name('Dashboard');
    Route::get('/{id}/show', 'Admin\UserController@show')->name('AdminUserShow');
    Route::get('/{id}/edit', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::post('/{id}/update', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/{id}/delete', 'Admin\UserController@delete')->name('AdminUserDelete');
    Route::get('/comments', 'Admin\UserController@comments')->name('AdminComments');
});

// Route pour l'authentification
    Auth::routes();
