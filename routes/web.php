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

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('auth/login');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('auth/register');

Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/services/create', 'ServiceController@create')->name('services.create');
Route::post('/services', 'ServiceController@store')->name('services.store');
Route::delete('/services/{service}', 'ServiceController@destroy')->name('services.destroy');
Route::get('/services/{service}/edit', 'ServiceController@edit')->name('services.edit');
Route::put('/services/{service}', 'ServiceController@update')->name('services.update');

//Route::get('/home', function(){
//     return view('home');
//})->name('home');
//Route::get('/services', function(){
//    return view('services');
//})->name('services');
//Route::get('/pricelist', function(){
//    return view('pricelist');
//})->name('pricelist');
//Route::get('/services/car_gallery_painting', function(){
//    echo'car_gallery_painting will be here';
//})->name('car_gallery_painting');
//Route::get('/services/car_gallery_straightening', function(){
//    echo'car_gallery_straightening will be here';
//})->name('car_gallery_straightening');
//Route::get('/services/car_gallery_bodyparts_replacement', function(){
//    echo'car_gallery_bodyparts_replacement will be here';
//})->name('car_gallery_bodyparts_replacement');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pricelist', 'PricelistController@index')->name('pricelist');

Route::get('/cars', 'CarController@index')->name('cars.index');
Route::get('/cars/create', 'CarController@create')->name('cars.create');
Route::post('/cars', 'CarController@store')->name('cars.store');
Route::delete('/cars/{car}', 'CarController@destroy')->name('cars.destroy');
Route::get('/cars/{car}/edit', 'CarController@edit')->name('cars.edit');
Route::put('/cars/{car}', 'CarController@update')->name('cars.update');
