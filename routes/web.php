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
    return redirect()->route('home');
})->middleware('theme:default,layout');


// Route::get('/updater', 'HomeController@update')->name('version');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog/{post?}', 'HomeController@blog')->name('blog');


// Route login and register

// Route::get('/login', 'LoginController')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');