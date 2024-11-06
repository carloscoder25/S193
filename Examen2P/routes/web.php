<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;


Route::get('/',[Controlador::class,'registroDePrendas'])->name('registroDePrendas');



Route::post('/enviarPrenda',[Controlador::class,'procesarPrenda']);