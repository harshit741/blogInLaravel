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

Route::get('/', 'PagesController@getHome')->name('home');

Route::redirect('/home', '/');

Route::view('/contact', 'PostController@contact')->name('contact');

Route::view('/about', 'pages.about')->name('about');

Route::resource('/posts','PostController');
?>
