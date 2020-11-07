<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@create')->middleware('auth');
Route::post('/products/store', 'ProductsController@store')->middleware('auth')->name('productstore');
Route::post('/products/destroy/{id}', 'ProductsController@destroy')->middleware('auth')->name('productdestroy');
Route::get('/products/edit/{id}', 'ProductsController@edit')->middleware('auth')->name('productedit');
Route::post('/products/update/{id}', 'ProductsController@update')->middleware('auth')->name('productupdate');




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
