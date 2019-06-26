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
    return view('login');
});




Route::get('admin','ProductController@index')->middleware('auth');
Route::post('admin/store','ProductController@store');
Route::post('admin/update','ProductController@update');
Route::get('admin/{id}','ProductController@destroy');


Route::get('user','ProductController@user_index')->middleware('auth');

Route::post('card/store','CardController@card');
Route::get('card','CardController@index');

Route::get('login','UserController@index');
Route::get('logout','UserController@logout');
Route::post('checklogin','UserController@checklogin');

Route::post('checksign','UserController@checksign');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
