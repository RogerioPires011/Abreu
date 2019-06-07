<?php

use App\Http\Controllers\ControladorCliente;
use App\Http\Controllers\ControladorRoupa;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cliente', 'ControladorCliente@index');
Route::get('/cliente/novo', 'ControladorCliente@create');
Route::post('/cliente', 'ControladorCliente@store');
Route::get('/cliente/{id}', 'ControladorCliente@consulta');
Route::get('/cliente/editar/{id}', 'ControladorCliente@edit');
Route::post('/cliente/{id}', 'ControladorCliente@update');
Route::get('/cliente/destroy/{id}', 'ControladorCliente@destroy');

Route::get('/roupa', 'ControladorRoupa@index');
Route::get('/roupa/novo', 'ControladorRoupa@create');
Route::post('/roupa', 'ControladorRoupa@store');
Route::get('/roupa/{id}', 'ControladorRoupa@consulta');
Route::get('/roupa/editar/{id}', 'ControladorRoupa@edit');
Route::post('/roupa/{id}', 'ControladorRoupa@update');
Route::get('/roupa/destroy/{id}', 'ControladorRoupa@destroy');

Route::get('/venda', 'ControladorVenda@index');
Route::get('/venda/novo', 'ControladorVenda@create');
