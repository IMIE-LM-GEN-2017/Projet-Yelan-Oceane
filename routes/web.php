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

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/users', 'UserController@index')->name('UserIndex');

//Inscription
Route::get('/users/new', 'UserController@getForm')->name('UserGetForm');
Route::post('/users/post', 'UserController@postForm')->name('UserPostForm');

//Contact
Route::get('/contact', 'ContactController@getForm')->name('ContactGetForm');
Route::post('/contactpost', 'ContactController@postForm')->name('ContactPostForm');

//Images
Route::get('monimage', 'ImageController@getForm');
Route::post('monimage', 'ImageController@postForm');

// Route pour les Admin