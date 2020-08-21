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
    return view('home/home');
});
    Route::get('/cpf', 'cpfController@consultaCPF');
    Route::get('/cpf/validaCPF', 'cpfController@validaCPF');
    
   
    Route::get('/cnpj', 'cnpjController@consultaCNPJ');
    Route::get('/cnpj/validaCNPJ', 'cnpjController@validaCNPJ');
    
    Route::get('/cep', 'cepController@consultaCEP');
    Route::get('/cep/InformaEndereco', 'cepController@InformaEndereco');