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

//显示前台首页
Route::get('/','Home\IndexController@index');





//后台路由群组
Route::group(['prefix' => 'admin','namespace'=>'admin'], function () {
  
  //加载后台首页
  Route::get('/', 'IndexController@index');
  Route::get('index','AdminController@index');
  
   //卖车
  Route::get('Sell', 'sell\SellController@doShow');
   
   //广告添加
  Route::resource('Ad', 'ad\AddController');


  //return 车辆管理
   Route::resource('type', 'type\TypeController');
   Route::resource('type_at','type\TypeAtController');
   Route::post('type/add','type\TypeController@add');


   //用户管理

     Route::resource('admin_user','Admin_UserController');
   Route::resource('user_info','User_infoController');


   //后台订单管理
   Route::resource('/seal','Seal\SealController');
});


//前台路由群组
Route::group(['prefix' => 'home','namespace'=>'home'],function () {

//['middleware','login']
  //首页
  Route::get('/', 'IndexController@index');
   //卖车
  Route::resource('Sell','sellcar\SellcarController');

  Route::get('index','HomeController@index');

  //点击注册留的路由
  Route::post('/register','Register\UserRegController@doRegister');
//ajax发送验证码路由
  Route::post('/register/send','Register\UserRegController@doSend');
  //登录注销路由
  Route::post('/login','Login\LoginController@doLogin');
  Route::get('/loginOut','Login\LoginController@doLoginOut');

});
