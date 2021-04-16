<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('agency/create', 'AgencyController@store');
Route::delete('agency/delete', 'AgencyController@delete');

Route::post('news/create','NewsController@store');
Route::delete('news/delete', 'NewsController@delete');

//Route::get('news/index', 'NewsController@index');
