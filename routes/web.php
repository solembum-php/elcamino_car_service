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
    return view('welcome');
});
Route::auth();

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::resource('images', 'ImageController');
    Route::resource('cars', 'CarController');
    Route::resource('services', 'ServiceController');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pricelist', 'PricelistController@index')->name('pricelist');
Route::get('/contacts', 'ContactsController@index')->name('contacts');

//Route::group(['namespace' => 'Client', 'prefix' => 'client'], function() {
//    
//    Route::resource('services', 'ClientServiceController');
//    Route::resource('cars', 'ClientCarController');
//    Route::resource('images', 'ClientImageController');
//});

