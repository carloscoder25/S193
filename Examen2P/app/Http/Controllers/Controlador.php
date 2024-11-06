<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validador;
use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function registroDePrendas(){
        return view('registroDePrendas');
    }
    public function procesarPrenda( Validador $peticion){
        $prenda= $peticion->input('txtPrenda');
        session()->flash('exito','Se guardo la prenda '.$prenda);
        return to_route('registroDePrendas');
    }

}
