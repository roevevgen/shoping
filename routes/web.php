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

Route::get('/', 'Shoping\MainController@index');
Route::get('/blog', 'Shoping\MainController@blog');
Route::get('/category','Shoping\MainController@category');
Route::get('/about','Shoping\MainController@about');
Route::get('/contact','Shoping\MainController@contact');
Route::get('/{list}','Shoping\MainController@list');
Route::get('/list/{product?}','Shoping\MainController@product');


