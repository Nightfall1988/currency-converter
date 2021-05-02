<?php

use App\Http\Controllers\ImportCurrencyController;
// use App\Http\Controllers\ShowCurrencyController;
// use App\Http\Controllers\CurrencyController;
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

Route::get('/', 'App\Http\Controllers\CurrencyController@home');
Route::post('/currency', 'App\Http\Controllers\CurrencyController@show');
Route::get('/currencies-import', ImportCurrencyController::class);

//