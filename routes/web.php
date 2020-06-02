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


Route::get('/administradoras', 'Controller_Administradoras@index');
Route::get('/administradoras/delete/{id}', 'Controller_Administradoras@destroy');
Route::get('/administradoras/edit/{id}', 'Controller_Administradoras@edit');
Route::post('/administradoras/{id}', 'Controller_Administradoras@update');