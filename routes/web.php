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

Route::get('/', 'MainController@index')->name('index');

Route::group(['middleware' => ['web']], function () {
//    group routing san pham
    Route::prefix('san-pham-cua-chung-toi')->group(function () {
        Route::get('/', 'ProductController@index')->name('product');
        // Route::get('/done', 'ProductsController@getDone');
        // Route::get('/cancel', 'ProductsController@getCancel');
    });

    Route::get('/san-pham-{slug}', 'ProductController@detail')->name('detail-product');
    Route::get('/gio-hang', 'ProductController@viewcart')->name('viewcart');
    Route::get('/thanh-toan', 'ProductController@checkout')->name('checkout');
//    route About us
    Route::get('/ve-chung-toi','AboutUsController@index')->name('aboutus');
//    route contact
    Route::get('/lien-he','ContactController@index')->name('contact');
//    route Knowledge - blog
    Route::prefix('kien-thuc')->group(function () {
        Route::get('/', 'blogController@index')->name('blog');
        Route::get('/{slug}', 'blogController@detail')->name('blog-detail');
    });
//    route login - logout - register
    Route::get('/dang-nhap', 'LoginController@getLogin')->name('getLogin');
//    Route::post('/', 'LoginController@postLogin')->name('postLogin');
    Route::get('/dang-ki', 'RegisterController@register')->name('register');

});

