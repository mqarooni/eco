<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('brandings', BrandingController::class);
    $router->resource('landings', LandingController::class);
    $router->resource('footers', FooterController::class);
    $router->resource('popupsandcookies', popupsandcookiesController::class);
    $router->resource('languages', LanguageController::class);
    $router->resource('custom-pages', CustomPageController::class);



});
