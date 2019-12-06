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
    Route::redirect('/',route('admin.services.index'));
});


Route::group(['namespace' => 'Client'], function() {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('services', 'ServiceController@index')->name('services.index');
    Route::get('cars', 'CarController@index')->name('cars.index');;
    Route::get('images', 'ImageController@index')->name('images.index');;    
    Route::resource('contacts', 'ContactsController');
    Route::resource('pricelist', 'PricelistController');
});

