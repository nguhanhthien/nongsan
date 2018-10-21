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

Route::get('/', 'MainController@index');

Route::middleware('web')
    ->prefix('san-pham')
    ->group(function () {
        Route::get('/', 'ProductController@index')->name('product');
        Route::get('/danh-muc/{slug}', 'ProductController@detail')->name('detail-product');
        // Route::get('/done', 'ProductsController@getDone');
        // Route::get('/cancel', 'ProductsController@getCancel');
    });
