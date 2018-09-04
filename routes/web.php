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



Route::get('/dashboard', 'Dashboard@index')->name('dashboard');
Route::get('/','PageController@portal')->name('home');;
Route::get('/portal', 'PageController@portal');
Route::get('/crear', 'PostController@create')->middleware('auth')->name('crear');
Route::get('/ver/{id}', 'PostController@show')->name('ver_noticia');
Route::get('/del/{id}', 'PostController@delete')->name('del_noticia');
Route::get('/editar/{id}', 'PostController@edit')->name('editar');
Route::post('/publish', 'PostController@store')->name('publish');

Route::resource('posts','PostController');
Route::resource('tags','TagsController');

Auth::routes();