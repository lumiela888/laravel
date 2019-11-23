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

//Route::get('/', function () {
   // return ('Hello, World!');
//});
Route::get('/', 'WelcomeController@boot');
Route::get('/info', 'InfoController@boot');
Route::get('/video', 'VideoController@boot');
Route::get('/contact', 'ContactController@boot');