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

Route::get('/home', function(){
    return redirect()->route('home');});

Route::get('/contact', 'PagesController@getContact')->name('contact');

Route::get('/about', 'PagesController@getAbout')->name('about');

Route::get('/post', 'PagesController@getPost')->name('post');

Route::resource('/posts','PostController');
?>
