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
Route::get('/administradoras/new', 'Controller_Administradoras@create');
Route::post('/administradoras', 'Controller_Administradoras@store');
Route::post('/administradoras/{id}', 'Controller_Administradoras@update');
Route::get('/administradoras/search', 'Controller_Administradoras@search');



Route::get('/clientes', 'Controller_Pessoas@index');
Route::get('/clientes/delete/{id}', 'Controller_Pessoas@destroy');
Route::get('/clientes/new', 'Controller_Pessoas@create');
Route::post('/clientes', 'Controller_Pessoas@store');
Route::get('/clientes/edit/{id}', 'Controller_Pessoas@edit');
Route::post('/clientes/{id}', 'Controller_Pessoas@update');
Route::get('/clientes/search', 'Controller_Pessoas@search');



Route::get('/condominios', 'Controller_Condominios@index');
Route::get('/condominios/new', 'Controller_Condominios@create');
Route::post('/condominios', 'Controller_Condominios@store');
Route::get('/condominios/edit/{id}', 'Controller_Condominios@edit');
Route::get('/condominios/delete/{id}', 'Controller_Condominios@destroy');
Route::post('/condominios/{id}', 'Controller_Condominios@update');