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

//Route::resource('product', 'ProductController'); was a placeholder
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::patch('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');

//TODO:work on that
//Route::get('products.images','ProductImageController');


//placeholders remaining
Route::resource('cartitem', 'CartItemController');
Route::resource('customer', 'CustomerController');
Route::resource('order', 'OrderController');
Route::resource('orderdetails', 'OrderDetailsController');
Route::resource('procurable', 'ProcurableController');

Route::resource('shippinginfo', 'ShippingInfoController');
Route::resource('shoppingcart', 'ShoppingCartController');
Route::resource('image', 'ImageController');