<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


Route::group([
    'prefix' => 'cart'
], function () {
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('', 'App\Http\Controllers\CartController@index');
        Route::get('{cart}', 'App\Http\Controllers\CartController@show');
        Route::post('', 'App\Http\Controllers\CartController@store');
        Route::put('{cart}', 'App\Http\Controllers\CartController@update');
        Route::delete('{cart}', 'App\Http\Controllers\CartController@delete');
    });
});



Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\AuthController@user');
    });
});