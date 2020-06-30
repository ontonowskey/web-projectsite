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

Route::get('/index', 'ApiController@indexAction');

Route::get('/sorokodin', 'ApiController@sorokodinAction');

Route::get('/sorokdva', 'ApiController@sorokdvaAction');

Route::get('/soroktri', 'ApiController@soroktriAction');

Route::get('/sorokchetire', 'ApiController@sorokchetireAction');

Route::get('/sorokpyat', 'ApiController@sorokpyatAction');

Route::get('/getArticles', 'ApiController@getArticles');
