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

Route::get('/', function () {
    return view('welcome');
});

Route::get('person','App\Http\Controllers\PersonController@index');
Route::get('person/find','App\Http\Controllers\PersonController@find');
Route::post('person/find','App\Http\Controllers\PersonController@search');
Route::get('person/add','App\Http\Controllers\PersonController@add');
Route::post('person/add','App\Http\Controllers\PersonController@create');
Route::get('person/edit','App\Http\Controllers\PersonController@showEdit');
Route::post('person/edit','App\Http\Controllers\PersonController@edit');
