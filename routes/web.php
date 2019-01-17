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


Route::get('/', 'PagesController@getIndex');

Route::get('blog', 'PagesController@getBlog');

Route::get('about','PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');


/************************************************************************/

Route::resource('posts', 'PostController');

Route::get('/listposts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@edit');

Route::get('/posts/{post}', 'PostController@show');
	


Route::get('/home', 'PagesController@getIndex');
 

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/email', 'HomeController@email')->name('sendEmail');  
