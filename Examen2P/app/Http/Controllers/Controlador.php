<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{

    $validacion= $peticion->validate([
        'txtPrenda'=> 'required',
        'txtColor'=> 'required',
        'txtCantidad'=> 'required|numeric|min:0|max:100'
    ]);
    //
    public function procesarPrenda( Request $peticion){
        $prenda= $peticion->input('txtPrenda');
        session()->flash('exito','Se guardo la prenda'.$prenda);
        return to_route('/');
    }

}
