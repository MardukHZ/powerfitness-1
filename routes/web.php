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
    return view('pagina principal');
});

Route::get('/usuarios', function () {
    return view('pagina de ususarios');
});

Route::get('/usuarios/{id}', function ($id) {
    return "mostrando dettale de usuario: {$id}";
});


Route::get('/agregar', function () {
    return view('pagina para agregar');
});
