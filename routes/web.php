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

Route::prefix('/')->group(function(){
    Route::get('/','KewuController@index');//列表展示
    Route::get('create','KewuController@create');//添加
    Route::post('store','KewuController@store');//添加方法
    Route::get('edit/{id}','KewuController@edit');//编辑展示
    Route::post('update/{id}','KewuController@update');//执行编辑
    Route::get('destory/{id}','KewuController@destroy');//删除
});
