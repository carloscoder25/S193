<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/*Route::get('/', function () {
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
*/


/*Route::view('/','inicio'->name('rutaInicio'));
Route::view('/form','form'->name('rutaForm'));
Route::view('/consultar','Clientes'->name('rutaClientes'));*/


/*Rutas para el controlador vistas*/
Route::get('/',[ControladorVistas::class, 'home'])->name ('rutainicio');


Route::get('/consulta',[ControladorVistas::class, 'consulta'])->name ('rutaconsulta');



//Rutas para controlador clienteController


Route::get('/cliente/create',[clienteController::class, 'create'])->name ('rutaform');


Route::post('/clientes',[clienteController::class, 'store'])->name('rutaEnviar');


Route::get('/clientes',[clienteController::class, 'index'])->name('rutaCliente');




Route::get('/clientes/editar/{Sid}',[clienteController::class,'edit'])->name('rutaEdit');

Route::put('/clientes/actualizar/{id}',[clienteController::class,'update'])->name('rutaUpdate');

Route::get('/clientes/eliminar',[clienteController::class,'destroy'])->name('rutaClienteD');