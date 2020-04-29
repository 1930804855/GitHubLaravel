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




Route::prefix('/login')->group(function(){
	Route::get('/',"LoginController@login");//登录
	Route::post('/logindo',"LoginController@logindo");
	Route::get('/logincreate','LoginController@logincreate');//管理员添加
	Route::post('/loginstroe','LoginController@loginstroe');//管理员执行添加
});

Route::prefix('/admin')->group(function(){
	Route::get('/','Admin\IndexController@index');
});

