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

Route::get('/info', function () {
    phpinfo();
});

Route::get('/test/redis','UserController@redisTest');       //测试
Route::get('/test/10k','TestController@insert10k');       //测试
Route::get('/test/10k2','TestController@insert10k2');       //测试
Route::get('/test/ssh','TestController@testSsh');       //测试


Route::get('/user/add','UserController@add');       //测试


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test/ss', 'TestController@ss');


Route::get('/prize','PrizeController@index');       //抽奖
Route::post('/prize','PrizeController@prizeDo');       //抽奖
//优惠券
Route::get('/coupon', 'CouponController@index');
Route::get('/coupon/get', 'CouponController@getCoupon');        //获取优惠券

