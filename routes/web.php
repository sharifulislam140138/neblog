<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about','FrontendController@home')->name('website');

Route::get('/category','FrontendController@home')->name('website');

Route::get('/contact','FrontendController@home')->name('website');

Route::get('/post','FrontendController@home')->name('website');



//admin panel




Route::get('/test',function(){

	return view('admin.dashboard.index');

});

Route::resource('category', 'CategoryController');
Route::resource('tag', 'TagController');
Route::resource('post', 'PostController');


