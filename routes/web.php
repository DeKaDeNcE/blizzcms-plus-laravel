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
    return redirect(app()->getLocale());
})->middleware('theme:default,layout');


Route::get('/updater', 'HomeController@update')->name('version');

Route::group([
    'prefix' => '{locale}', 
    'where' => ['locale' => '[a-zA-Z]{2}'], 
    'middleware' => 'setlocale'], function() {

        
    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/blog/{post?}', 'HomeController@blog')->name('blog');

    Route::get('/ucp/settings', 'UserController@settings')->name('ucp/settings');

    Route::get('/login', 'Auth\LoginController@login')->name('login');

    Route::get('register', 'Auth\RegisterController@register')->name('register');
});


/*
|--------------------------------------------------------------------------
| Internal Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('verify', 'Auth\LoginController@check_Login');
Route::post('createacc', 'Auth\RegisterController@Create');


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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
