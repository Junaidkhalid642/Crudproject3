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
	//Route::get('/home','App\Http\Controllers\HomeController@gethome');
  Route::get('/home', 'HomeController@gethome');
		Route::get('edit/{id}','App\Http\Controllers\UserController@getedit');
   // Route::get('/edit/{id}', 'UserController@edit');
  //  Route::get('/delete/{id}', 'UserController@delete');
		Route::get('delete/{id}','App\Http\Controllers\UserController@getdelete');

    //Route::post('/update', 'UserController@update');
		Route::get('update/{id}','App\Http\Controllers\UserController@getupdate');

Route::get('/logout','App\Http\Controllers\Auth\LoginController@getuser');
   // Route::get('/logout', 'Auth\LoginController@logoutUser');
});