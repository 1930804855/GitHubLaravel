<?php

use Illuminate\Support\Facades\Route;

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


Route::domain('www.team.com')->group(function(){

    // 业务员
    Route::prefix('/yewu')->group(function(){
        Route::get('/',"Admin\YewuController@index");   //列表展示
        Route::get('create',"Admin\YewuController@create"); //添加页面
        Route::post('store',"Admin\YewuController@store");  //执行添加
        Route::get('edit/{id}',"Admin\YewuController@edit");   //编辑展示
        Route::post('update/{id}',"Admin\YewuController@update");  //执行编辑
        Route::any('destroy/{id}',"Admin\YewuController@destroy");  //执行删除
    });
    Route::prefix('/admin')->group(function(){
        Route::get('/','Admin\IndexController@index');
    });

});