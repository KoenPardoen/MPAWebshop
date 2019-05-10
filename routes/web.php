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

Auth::routes();

Route::resource('/home', 'HomeController');
Route::resource('/', "ProductController");
Route::resource('/category', "CategoryController");

Route::resource('/product', "ProductController");