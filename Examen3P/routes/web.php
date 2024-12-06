<?php

use App\Http\Controllers\ControladorPrendas;
use Illuminate\Support\Facades\Route;


Route::get('/',[ControladorPrendas::class,'home'])->name('rutawelcome');


Route::post('/EnviarPrenda',[ControladorPrendas::class,'store'])->name('rutaEnviar');

Route::get('/Prendas',[ControladorPrendas::class,'index'])->name('rutaresultados');

Route::get('/prendas/editar/{Sid}',[ControladorPrendas::class,'edit'])->name('rutaEdit');



Route::put('/prendas/actualizar/{id}',[ControladorPrendas::class,'update'])->name('rutaUpdate');


Route::delete('/prendas/eliminar/{id}',[ControladorPrendas::class,'destroy'])->name('rutaEliminar');