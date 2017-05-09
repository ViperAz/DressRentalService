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
Route::get('/home', 'HomeController@show');
Route::get('/', 'HomeController@show');
Auth::routes();


// [][][]---------- Korn part start -----------------------[][][]
// Route::get('/admain', function () {
//     return view('admin_main');
// });

Route::get('/admain', [
    'middleware' => 'role:admin',
    'uses' => function () {
    return view('admin_main');
}]);

//--------------------add item page
// Route::get('/add_item', function () {
//     return view('add_item');
// });
Route::get('/add_item', [
    'middleware' => 'role:admin',
    'uses' => function () {
    return view('add_item');
}]);

Route::post('/item-create', [
    'middleware' => 'role:admin',
    'uses' => 'ItemController@store',
]);
//--------------------add product page
// Route::get('/add_product', function () {
//     return view('add_product');
// });
Route::get('/add_product', [
    'middleware' => 'role:admin',
    'uses' => function () {
    return view('add_product');
}]);

Route::post('/product-create', [
    'middleware' => 'role:admin',
    'uses' => 'ProductController@store',
]);
//--------------------add rental product page
// Route::get('/add_rental_product', function () {
//     return view('add_rental_product');
// });
Route::get('/add_rental_product', [
    'middleware' => 'role:admin',
    'uses' => function () {
    return view('add_rental_product');
}]);

Route::post('/rental_product-create', [
    'middleware' => 'role:admin',
    'uses' => 'RentalProductController@store',
]);
//--------------------add voucher page
// Route::get('/add_voucher', function () {
//     return view('add_voucher');
// });

Route::get('/add_voucher', [
    'middleware' => 'role:admin',
    'uses' => function () {
    return view('add_voucher');
}]);
Route::post('/voucher-create', [
    'middleware' => 'role:admin',
    'uses' => 'VoucherController@store',
]);
//--------------------add voucher page
Route::get('/add_promotion', [
    'middleware' => 'role:admin',
    'uses' => 'PromotionController@index',
]);

Route::post('/promotion-create', [
    'middleware' => 'role:admin',
    'uses' => 'PromotionController@store',
]);
//-------------------edit product page
Route::get('/edit_product', [
    'middleware' => 'role:admin',
    'uses' => 'ProductController@index',
]);

Route::post('/product_edit', [
    'middleware' => 'role:admin',
    'uses' => 'ProductController@update',
]);










// [][][]---------- Korn part end -----------------------[][][]

Route::get('/addToCart','HomeController@show');
Route::post('/addToCart','HomeController@addToCart');

Route::get('/profile', 'ProfileController@index');

Route::get('/cart',[
    'middleware' => 'group:default',
    'uses' => 'CartController@index',
]);

Route::post('/addTransaction','CartController@addTransaction');
