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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'DarwillController@index');
Route::get('/territory', 'DarwillController@territory');
Route::get('/customer', 'DarwillController@customer');
Route::get('/queryOne', 'DarwillController@queryOne');
Route::get('/queryTwo', 'DarwillController@queryTwo');
Route::get('/queryThree', 'DarwillController@queryThree');
Route::get('/queryFour', 'DarwillController@queryFour');
Route::get('/charts', 'HighchartController@index');
