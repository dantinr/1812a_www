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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/add','UserController@add');       //测试
Route::get('/test/redis','UserController@redisTest');       //测试

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test/ss', 'TestController@ss');

//优惠券
Route::get('/coupon', 'CouponController@index');
Route::get('/coupon/get', 'CouponController@getCoupon');        //获取优惠券
