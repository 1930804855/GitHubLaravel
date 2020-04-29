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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/meeting')->group(function(){
    Route::get('create','Admin\meetingController@create');//添加
    Route::post('store','Admin\meetingController@store');//执行添加
    Route::get('/','Admin\meetingController@index');//展示
    Route::get('destroy/{id}','Admin\meetingController@destroy');//删除
    Route::get('edit/{id}','Admin\meetingController@edit');//编辑展示
    Route::post('update/{id}','Admin\meetingController@update');//执行更新
});