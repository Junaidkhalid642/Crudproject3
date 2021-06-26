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
    return view('welcome');
});

Route::get('/login','App\Http\Controllers\Auth\LoginController@getLogin');
Route::get('/register','App\Http\Controllers\Auth\RegisterController@getRegister');

Route::post('/register','\App\Http\Controllers\Auth\RegisterController@postRegister');
Route::post('/login','App\Http\Controllers\Auth\LoginController@postLogin');

Route::group(['middleware' => 'userAuth'], function () {

	Route::get('/home', 'App\Http\Controllers\HomeController@home');
	//Route::get('/home', 'App\Http\Controllers\HomeController@getindex');

	//Route::get('users','App\Http\Controllers\UserController@getindex');

		Route::get('edit/{id}','App\Http\Controllers\UserController@getedit');

		Route::get('delete/{id}','App\Http\Controllers\UserController@getdelete');

		Route::post('/update','App\Http\Controllers\UserController@update');


Route::get('/logout','App\Http\Controllers\Auth\LoginController@logoutuser');

});

