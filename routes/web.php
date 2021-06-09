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

Route::get('/',function(){
    return view('website.home');

})->name('website');

Route::get('/about',function(){
    return view('website.about');

});

Route::get('/contact',function(){
    return view('website.contact');

});

Route::get('/category',function(){
    return view('website.category');

});


Route::get('/post',function(){
    return view('website.post');

});

//admin panel




Route::get('/test',function(){

	return view('admin.dashboard.index');

});

Route::resource('category', 'CategoryController');
