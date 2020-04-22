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
Route::get('/freelancers', 'FrontController@freelancers')->name('freelancers');
Route::get('/freelancer/{id}', 'FrontController@profile')->name('freelancer/{id}');
/*Route::get('/profile', 'FrontController@profile');*/

Auth::routes();

Route::get('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::get('/home', 'HomeController@index')->name('home');

//user
Route::post('/upgrade-user', 'UserController@store')->name('upgrade-user');
Route::post('/upgrade-info', 'UserController@storeinfo')->name('upgrade-info');
Route::post('/edit-user', 'UserController@update')->name('edit-user');

Route::group(['middleware' => ['checkaccount']], function () 
{

    //admin
    Route::get('/admin-home', 'AdminController@index')->name('admin-home');

    //city
    Route::get('/admin-cities', 'CityController@index')->name('admin-cities');
    Route::get('/add-city', 'CityController@create')->name('add-city');
    Route::post('/create-city', 'CityController@store')->name('create-city');
    Route::get('/edit-city/{id}', 'CityController@edit')->name('edit-city');
    Route::post('/update-city/{id}', 'CityController@update')->name('update-city/{id}');
    Route::get('/delete-city/{id}', 'CityController@destroy')->name('delete-city');

    //country
    Route::get('/admin-countries', 'CountryController@index')->name('admin-countries');
    Route::get('/add-country', 'CountryController@create')->name('add-country');
    Route::post('/create-country', 'CountryController@store')->name('create-country');
    Route::get('/edit-country/{id}', 'CountryController@edit')->name('edit-country');
    Route::post('/update-country/{id}', 'CountryController@update')->name('update-country/{id}');
    //Route::get('/delete-country/{id}', 'CountryController@destroy')->name('delete-country');

    //category
    Route::get('/admin-categories', 'CategoryController@index')->name('admin-categories');
    Route::get('/add-category', 'CategoryController@create')->name('add-category');
    Route::post('/create-category', 'CategoryController@store')->name('create-category');
    Route::get('/edit-category/{id}', 'CategoryController@edit')->name('edit-category');
    Route::post('/update-category/{id}', 'CategoryController@update')->name('update-category/{id}');
    //Route::get('/delete-category/{id}', 'CategoryController@destroy')->name('delete-category');

   
});



//payment
Route::post('/active-pro', 'PaymentController@activepro')->name('active-pro');
Route::get('/status-pro', 'PaymentController@statuspro')->name('status-pro'); 

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/contact', 'EmailController@send')->name('contact');

//review
Route::post('/give-rate', 'ReviewController@rate')->name('give-rate');