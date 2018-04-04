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


Route::get('/', 'InfoController@create')->middleware('auth');
Route::get('/information/create', 'InfoController@create')->middleware('auth');
Route::get('/information/eval', 'InfoController@evaluate')->middleware('auth');
Route::get('/information/save', 'InfoController@save')->middleware('auth');
Route::post('/information/print', 'InfoController@print')->middleware('auth');
Route::get('/knowledges', 'TipController@index')->middleware('auth');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authen');
Route::get('/logout', 'LoginController@logout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
