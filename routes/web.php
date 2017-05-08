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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', 'HomeController@show');
Auth::routes();

Route::post('/addToCart','HomeController@addToCart');

Route::get('/profile', 'ProfileController@index');

Route::get('/cart', 'CartController@index');
