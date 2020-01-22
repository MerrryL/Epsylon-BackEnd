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


Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::post('/users/login', 'UserController@login');
Route::get('/users/{user}', 'UserController@show');
Route::patch('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');

Route::get('users/login', 'UserController@login');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
