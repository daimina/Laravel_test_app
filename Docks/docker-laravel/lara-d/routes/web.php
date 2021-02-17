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

// HTTPメソッドが送られた時の処理
Route::get('/', 'PostsController@index')->name('top');
Route::get('/show/{post_id}', 'PostsController@show')->name('posts.show');
Route::get('/create', 'PostsController@create')->name('posts.create');
Route::post('/store', 'PostsController@store')->name('posts.store');
Route::get('/edit/{post_id}', 'PostsController@edit')->name('posts.edit');
Route::put('/update/{post_id}', 'PostsController@update')->name('posts.update');
