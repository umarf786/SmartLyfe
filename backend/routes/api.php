<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('carts', 'App\Http\Controllers\CartController@index');
Route::get('carts/{cart}', 'App\Http\Controllers\CartController@show');
Route::post('carts', 'App\Http\Controllers\CartController@store');
Route::put('carts/{cart}', 'App\Http\Controllers\CartController@update');
Route::delete('carts/{cart}', 'App\Http\Controllers\CartController@delete');

Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');