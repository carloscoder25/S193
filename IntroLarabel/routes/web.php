<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('form');
})->name('rutaForm');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes');

Route::get('/component', function () {
    return view('componentes');
})->name('rutaComponentes');


/*Route::view('/','inicio'->name('rutaInicio'));
Route::view('/form','form'->name('rutaForm'));
Route::view('/consultar','Clientes'->name('rutaClientes'));*/