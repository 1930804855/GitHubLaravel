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


// Route::domain('www.team.com')->group(function(){

	Route::prefix('/login')->group(function(){

		Route::get('/',"LoginController@login");
		Route::post('/logindo',"LoginController@logindo");

	});


// )};
