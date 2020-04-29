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
    Route::get('create','Admin\MeetingController@create');//添加
    Route::post('getCustome/{id}','Admin\MeetingController@getCustome');//添加
    Route::post('store','Admin\MeetingController@store');//执行添加
    Route::get('/','Admin\MeetingController@index');//展示
    Route::get('destroy/{id}','Admin\MeetingController@destroy');//删除
    Route::get('edit/{id}','Admin\MeetingController@edit');//编辑展示
    Route::post('update/{id}','Admin\MeetingController@update');//执行更新
});
Route::prefix('/admin')->group(function(){
	Route::get('/','Admin\IndexController@index');
});