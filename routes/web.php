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

use Illuminate\Routing\Router;

// 前台首页
Route::group([
    'prefix'        => config('home.route.prefix'),
    'namespace'     => config('home.route.namespace'),
    'middleware'    => config('home.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
});


