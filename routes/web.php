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


// Posts
Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('posts.comments.store');

// Auth
Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/login', 'SessionController@create')->name('session.login');
Route::post('/login', 'SessionController@store')->name('session.store');
Route::get('/logout', 'SessionController@destroy')->name('session.destroy');
