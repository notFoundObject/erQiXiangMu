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

//后台登录
Route::get('/admin/login', 'admin\LoginController@index');
Route::post('/admin/login', 'admin\LoginController@dologin');
Route::get('/admin/captcha/{tmp}', 'admin\LoginController@captcha');

//后台没有权限跳转页面
Route::get('/admin/noauth', function(){
    return view('admin/noauth');
});

//后台注销
Route::get('/admin/exit', 'admin\LoginController@exit');

//后台路由群组
//Route::group(['prefix' => 'admin','namespace'=>'admin','middleware' => ['login']], function () {
Route::group(['prefix' => 'admin','namespace'=>'admin','middleware' => ['login','HasRole']], function () {
	
  //加载后台首页
  Route::get('/','AdminController@index');
  
   //卖车
  Route::get('Sell', 'sell\SellController@doShow');
   
   //广告添加
  Route::resource('Ad', 'ad\AddController');

   //return 车辆管理
   Route::resource('type', 'type\TypeController');
   Route::resource('type_at','type\TypeAtController');
   Route::resource('type_nk','type\TypeNkController');
   Route::post('type/add','type\TypeController@add');
   Route::get('type_nk/config/{id}','type\TypeNkController@config');
   Route::get('type_nk/config_trade/{id}','type\TypeNkController@trade');
   Route::get('type_nk/engine/{id}','type\TypeNkController@engine');
   Route::post('type_nk/add','type\TypeNkController@add');
   Route::post('type_nk/add_trade','type\TypeNkController@trade_add');
   Route::post('type_nk/config_engine','type\TypeNkController@config_engine');

   //用户管理
   Route::resource('admin_user','Admin_UserController');
   Route::resource('user_info','User_infoController');
   //状态
   Route::get('/admin_user/status/{id}&{status}','Admin_UserController@status');
   //角色管理
   Route::resource('/role','RoleController');
   //权限管理
   Route::resource('/auth','AuthController');
   //用户授权
   Route::get('showUserAuth/{id}','Admin_UserController@showUserAuth');
   Route::post('doUserAuth/{id}','Admin_UserController@doUserAuth');
   //角色授权
   Route::get('showRoleAuth/{id}','RoleController@showRoleAuth');
   Route::post('doRoleAuth/{id}','RoleController@doRoleAuth');

   //后台订单管理
   Route::resource('/seal','Seal\SealController');

});


//前台路由群组
Route::group(['namespace'=>'home'],function () {

//['middleware','login']
	//首页
	//Route::get('/', 'IndexController@index');
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
