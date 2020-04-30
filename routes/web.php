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

Route::prefix('/kewu')->group(function(){
    Route::get('/','Admin\KewuController@index');//列表展示
    Route::get('create','Admin\KewuController@create');//添加
    Route::post('store','Admin\KewuController@store');//添加方法
    Route::get('edit/{id}','Admin\KewuController@edit');//编辑展示
    Route::post('update/{id}','Admin\KewuController@update');//执行编辑
    Route::get('destory/{id}','Admin\KewuController@destroy');//删除
});

Route::prefix('/admin')->group(function(){
	Route::get('/','Admin\IndexController@index');
});