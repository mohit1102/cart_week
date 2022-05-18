<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\ProductController@index')->name('index');

Route::get('products','App\Http\Controllers\ProductController@getProduct')->name('products');

Route::post('product/store','App\Http\Controllers\ProductController@storeProduct')->name('product.store');

Route::get('edit/product/{id}','App\Http\Controllers\ProductController@editProduct');

Route::get('delete/product/{id}','App\Http\Controllers\ProductController@deleteProduct');
