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

//gender0
//listar genero
Route::get('/listg','GeneroController@list');
//formulario genero
Route::get('/formg', 'GeneroController@generoform');
//guardar genero
Route::post('/saveg', 'GeneroController@save')->name('saveg');

//estudiante
//listar estudiante
Route::get('/liste','EstudianteController@list');
//formulario Estudiante
Route::get('/forme', 'EstudianteController@estudianteform');
//guardar Estudiante
Route::post('/savee', 'EstudianteController@save')->name('savee');

