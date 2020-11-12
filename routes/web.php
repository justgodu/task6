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

//TASK 7
Route::get('/user/onetone', [App\Http\Controllers\UserController::class, 'onetone'])->name('onatone');
Route::get('/user/onetomany', [App\Http\Controllers\UserController::class, 'onetomany'])->name('onetomany');
Route::get('/product/onetomanyinverse', [App\Http\Controllers\ProductsController::class, 'user'])->name('productuser');
Route::get('/product/categories', [App\Http\Controllers\ProductsController::class, 'categories'])->name('productcategories');
Route::get('/category/products', [App\Http\Controllers\CategoryController::class, 'products'])->name('categoryproducts');

//joins
Route::get('/user/productjoin', [App\Http\Controllers\UserController::class, 'productjoin'])->name('productjoin');
Route::get('/user/phonejoinleft', [App\Http\Controllers\UserController::class, 'phonejoinleft'])->name('phonejoinleft');
Route::get('/user/phonejoinright', [App\Http\Controllers\UserController::class, 'phonejoinright'])->name('phonejoinright');



