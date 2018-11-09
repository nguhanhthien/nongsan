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

    Route::prefix('san-pham-cua-chung-toi')->group(function () {
        Route::get('/', 'ProductController@index')->name('product');
    });

    Route::get('/san-pham-{slug}', 'ProductController@detail')->name('detail-product');
    Route::get('/deal', 'DealController@index')->name('deal-list');
    Route::get('/deal/san-pham-{slug}', 'DealController@detail')->name('detail-deal');

    Route::get('/gio-hang', 'ProductController@viewcart')->name('viewcart');
    Route::get('/thanh-toan', 'ProductController@checkout')->name('checkout');
    Route::get('/ve-chung-toi','AboutUsController@index')->name('aboutus');
    Route::get('/lien-he','ContactController@index')->name('contact');
    Route::prefix('kien-thuc')->group(function () {
        Route::get('/', 'BlogController@index')->name('blog');
        Route::get('/{slug}', 'BlogController@detail')->name('blog-detail');
    });
    Route::get('/dang-nhap', 'LoginController@getLogin')->name('getLogin');
    Route::get('/dang-ki', 'RegisterController@register')->name('register');

});

