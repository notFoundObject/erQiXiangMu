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

Route::resource('/','admin\AdminController');
// Route::resource('/users','admin\UserController');

Route::group(['prefix'=> '/admin'],function(){
	Route::get('index','admin\AdminController@index');
	Route::resource('/admin_user','admin\Admin_UserController');
	Route::resource('/user_info','admin\User_infoController');
	Route::get('/admin_user/status/{id}&{status}','admin\Admin_UserController@status');
});

Route::group(['prefix'=> 'home'],function(){
	Route::get('index','home\HomeController@index');
});


