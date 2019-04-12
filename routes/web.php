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

Route::get('/search', 'SearchController@index');
Route::get('/notelists','NoteController@index');

Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');


Route::middleware(['authenticated'])->group(function() {
	Route::get('/profile', 'AdminController@index');
});
