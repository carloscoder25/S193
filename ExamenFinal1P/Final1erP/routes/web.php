<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('rutaPrincipal');

Route::get('/formularioContacto', function () {
    return view('formularioContacto');
})->name('rutaForm');

Route::get('/ListadoContactos', function () {
    return view('ListadoContactos');
})->name('rutaContactos');