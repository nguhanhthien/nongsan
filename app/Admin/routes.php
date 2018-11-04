<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('box', BoxController::class);
    $router->resource('location', LocationController::class);
    $router->resource('category', CategoryController::class);
    $router->resource('tag', TagController::class);
    $router->resource('unit', UnitController::class);
    $router->resource('product', ProductController::class);
    $router->resource('deal', DealController::class);
});
