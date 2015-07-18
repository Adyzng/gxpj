<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Router for gxpj
Route::get('/', 'gxpj_main@index');
Route::get('index', 'gxpj_main@index');
Route::get('institude', 'gxpj_main@institude');
Route::get('analyst', 'gxpj_main@analyst');
Route::get('books', 'gxpj_main@books');
Route::get('course', 'gxpj_main@course');
Route::get('enrollment', 'gxpj_main@enrollment');
Route::get('model', 'gxpj_main@model');

