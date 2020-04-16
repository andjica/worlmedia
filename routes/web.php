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

Route::get('/', 'FrontController@index');
Route::get('/services', 'FrontController@services');
Route::get('/about', 'FrontController@about');
Route::get('/blog', 'FrontController@blog');
Route::get('/freelancers', 'FrontController@freelancers');
Route::get('/profile', 'FrontController@profile');

Auth::routes();

Route::get('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin-home', 'AdminController@index')->name('admin-home');
//user
Route::post('/upgrade-user', 'UserController@store')->name('upgrade-user');
Route::post('/upgrade-info', 'UserController@storeinfo')->name('upgrade-info');

Route::post('/active-pro', 'PaymentController@activepro')->name('active-pro');
Route::get('/status-pro', 'PaymentController@statuspro')->name('status-pro'); 

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
