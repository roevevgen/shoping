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
//Route::group(['namespace' => 'Shoping', 'prefix'=>'shoping',], function () {
//    Route::get('/', 'MainController@index')->name('/');
//    Route::get('/blog', 'MainController@blog')->name('shoping.blog');
//    Route::get('category', 'MainController@category')->name('shoping.category');
//    Route::get('/about', 'MainController@about')->name('shoping.about');
//    Route::get('/{list}', 'MainController@list')->name('shoping.list');
//    Route::get('list/{product?}', 'MainController@product')->name('shoping.product');
//});
Route::get('/', 'Shoping\MainController@index');
Route::get('/blog', 'Shoping\MainController@blog');
Route::get('/about','Shoping\MainController@about');
Route::get('/contact','Shoping\MainController@contact');
Route::get('/products','Shoping\MainController@products');
Route::get('/category','Shoping\MainController@category');
Route::get('/category/{list}','Shoping\MainController@list');
Route::get('/category/{list}/{product?}','Shoping\MainController@product');


