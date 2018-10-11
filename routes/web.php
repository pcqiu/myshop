<?php
/**
 * Auth::routes() 用户认证
 * Home 首页
 */
Auth::routes();
Route::get('/', 'HomeController@index');