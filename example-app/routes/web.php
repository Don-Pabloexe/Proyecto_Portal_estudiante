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

Route::get('Inicio', function () {
    return view('Inicio');
});

Route::get('Obs_Ficha_Académica', function () {
    return view('Obs_Ficha_Académica');
});

Route::get('Documentos', function () {
    return view('Documentos');
});

Route::get('Información_Académica', function () {
    return view('Información_Académica');
});

Route::get('Solicitudes_Estudiantes', function () {
    return view('Solicitudes_Estudiantes');
});
