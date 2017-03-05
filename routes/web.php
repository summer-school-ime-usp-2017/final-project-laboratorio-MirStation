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

// Paciente
Route::get('/pacientes', 'PacienteController@index');
Route::get('/pacientes/cria', 'PacienteController@cria');
Route::post('/pacientes', 'PacienteController@armazena');
Route::get('/pacientes/{paciente}', 'PacienteController@show');
Route::get('/pacientes/{paciente}/remove', 'PacienteController@remove');
Route::get('/pacientes/{paciente}/edicao', 'PacienteController@edicao');
Route::patch('/pacientes/{paciente}', 'PacienteController@atualiza');

// Exame
Route::get('/exames', 'ExameController@index');
Route::get('/exames/cria', 'ExameController@cria');
Route::post('/exames', 'ExameController@armazena');
Route::get('/exames/{exame}', 'ExameController@show');
Route::get('/exames/{exame}/remove', 'ExameController@remove');
Route::get('/exames/{exame}/edicao', 'ExameController@edicao');
Route::patch('/exames/{exame}', 'ExameController@atualiza');

// Médico
Route::get('/medicos', 'MedicoController@index');
Route::get('/medicos/cria', 'MedicoController@cria');
Route::post('/medicos', 'MedicoController@armazena');
Route::get('/medicos/{medico}', 'MedicoController@show');
Route::get('/medicos/{medico}/remove', 'MedicoController@remove');
Route::get('/medicos/{medico}/edicao', 'MedicoController@edicao');
Route::patch('/medicos/{medico}', 'MedicoController@atualiza');

