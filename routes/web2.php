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
    return 12312313;
});



Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
	//return 车辆管理
   Route::resource('type', 'type\TypeController');
   Route::resource('type_at','type\TypeAtController');
   Route::post('type/add','type\TypeController@add');
   // Route::post('type_del','type\TypeController@del');

   // Route::get('type/create',)
}); 




