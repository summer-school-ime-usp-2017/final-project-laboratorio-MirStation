<?php

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

// Pacientes
Route::get('/pacientes', 'PacienteController@index');
Route::get('/pacientes/cria', 'PacienteController@cria');
Route::post('/pacientes', 'PacienteController@armazena');
Route::get('/pacientes/{paciente}', 'PacienteController@show');
Route::get('/pacientes/{paciente}/remove', 'PacienteController@remove');
Route::get('/pacientes/{paciente}/edicao', 'PacienteController@edicao');
Route::patch('/pacientes/{paciente}', 'PacienteController@atualiza');

