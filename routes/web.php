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

Route::get('/information/create','InfoController@create');

Route::get('/information/eval','InfoController@evaluate');

Route::get('/information/save','InfoController@save');

Route::post('/information/print','InfoController@print');



Route::get('/knowledges','TipController@index');
