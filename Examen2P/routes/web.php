<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('registroDePrendas');
});

Route::post('/enviarPrenda',[Controlador::class,'procesarPrenda']);