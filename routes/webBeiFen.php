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


Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'admin\IndexController@index');
  
   //卖车
  Route::get('Sell', 'admin\sell\SellController@doShow');
   
   //广告添加
  Route::resource('Ad', 'admin\ad\AddController');
});





Route::group(['prefix' => 'home'], function () {
	//首页
	Route::get('/', 'home\IndexController@index');
   //卖车
  Route::resource('Sell','home\sellcar\SellcarController');
});