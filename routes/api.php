<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/register', 'RegisterController');
// Route::get('/login', 'LoginController');


//test: fucking cors and auth-api won't fucking work
// Route::get('/products', 'ProductController@index')->middleware('cors');
// Route::group(['middleware' => ['cors']], function () {
//     Route::get('/news', 'ProductController@news');
//     Route::get('/products', 'ProductController@index');
//     Route::post('/products', 'ProductController@store');
//     Route::get('/products/{product}', 'ProductController@show');
//     Route::patch('/products/{product}', 'ProductController@update');
//     Route::delete('/products/{product}', 'ProductController@destroy');
// });
Route::get('/news', 'ProductController@news');
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::patch('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');

//implemented, works; but good luck
Route::get('/images/{image}', 'imageController@show');
Route::post('/images', 'ImageController@store');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::post('/users/login', 'UserController@login');
Route::get('/users/{user}', 'UserController@show');
Route::patch('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');

Route::get('users/login', 'UserController@login');


// not implemented;
Route::post('process', function (Request $request) {
    $path = $request->file('photo')->store('photos');

    dd($path);
});

Route::post('/forgotpassword', 'UserController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');





//placeholders remaining
Route::resource('cartitem', 'CartItemController');
Route::resource('order', 'OrderController');
Route::resource('orderdetails', 'OrderDetailsController');
Route::resource('procurable', 'ProcurableController');

Route::resource('shippinginfo', 'ShippingInfoController');
Route::resource('shoppingcart', 'ShoppingCartController');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
