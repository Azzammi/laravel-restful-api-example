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
Route::get('/kontak','ControllerKontak@index');
Route::get('/kontak/{id}','ControllerKontak@show');
Route::post('/kontak/store','ControllerKontak@store');
Route::post('/kontak/update/{id}','ControllerKontak@update');
Route::post('/kontak/delete/{id}','ControllerKontak@destroy');

Route::get('/', function () {
    return view('welcome');
});
