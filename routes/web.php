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
Route::get('/home', function(){
     return view('home');
})->name('home');
Route::get('/services', function(){
    return view('services');
})->name('services');
Route::get('/pricelist', function(){
    return view('pricelist');
})->name('pricelist');
Route::get('/services/car_gallery_painting', function(){
    echo'car_gallery_painting will be here';
})->name('car_gallery_painting');
Route::get('/services/car_gallery_straightening', function(){
    echo'car_gallery_straightening will be here';
})->name('car_gallery_straightening');
Route::get('/services/car_gallery_bodyparts_replacement', function(){
    echo'car_gallery_bodyparts_replacement will be here';
})->name('car_gallery_bodyparts_replacement');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
