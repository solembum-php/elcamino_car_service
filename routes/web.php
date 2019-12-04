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
    Route::resource('images', 'ImageController', [
	'as' => 'admin',
    ]);
    Route::resource('cars', 'CarController', [
	'as' => 'admin',
    ]);
    Route::resource('services', 'ServiceController', [
	'as' => 'admin',
    ]);
});


Route::group(['namespace' => 'Client', 'prefix' => 'client'], function() {

    Route::resource('services', 'ClientServiceController');
    Route::resource('cars', 'ClientCarController');
    Route::resource('images', 'ClientImageController');
    Route::resource('home', 'ClientHomeController');
    Route::resource('contacts', 'ClientContactsController');
    Route::resource('pricelist', 'ClientPricelistController');
});

