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

Route::get('/availables', 'AvailabilitiesController@index');
Route::post('/availables', 'AvailabilitiesController@store');
Route::get('/availables/{Availabilities}', 'AvailabilitiesController@show');
Route::patch('/availables/{Availabilities}', 'AvailabilitiesController@update');
Route::delete('/availables/{Availabilities}', 'AvailabilitiesController@destroy');

Route::get('/procurables', 'ProcurableController@index');
Route::post('/procurables', 'ProcurableController@store');
Route::get('/procurables/{procurabilities}', 'ProcurableController@show');
Route::patch('/procurables/{procurabilities}', 'ProcurableController@update');
Route::delete('/procurables/{procurabilities}', 'ProcurableController@destroy');

Route::get('/procurabletypes', 'ProcurableTypeController@index');
Route::post('/procurabletypes', 'ProcurableTypeController@store');
Route::get('/procurabletypes/{procurabletypes}', 'ProcurableTypeController@show');
Route::patch('/procurabletypes/{procurabletypes}', 'ProcurableTypeController@update');
Route::delete('/procurabletypes/{procurabletypes}', 'ProcurableTypeController@destroy');

//TODO:work on that
//Route::get('products.images','ProductImageController');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::get('/users/{user}', 'UserController@show');
Route::patch('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');


//placeholders remaining
Route::resource('cartitem', 'CartItemController');
Route::resource('order', 'OrderController');
Route::resource('orderdetails', 'OrderDetailsController');
Route::resource('procurable', 'ProcurableController');

Route::resource('shippinginfo', 'ShippingInfoController');
Route::resource('shoppingcart', 'ShoppingCartController');
Route::resource('image', 'ImageController');