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

Route::get('/', 'AuthController@exibir_login');
Route::get('/cadastro', 'AuthController@exibir_cadastro');

Route::get('/agenda', 'AgendaController@exibir_tarefas');
Route::get('/agenda/adicionar', 'AgendaController@exibir_adicionar_tarefas');

