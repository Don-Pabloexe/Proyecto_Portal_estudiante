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

Route::get('nota_p', function () {
    return view('nota_p');
});

Route::get('hora_a', function () {
    return view('hora_a');
});

Route::get('certificado_a', function () {
    return view('certificado_a');
});