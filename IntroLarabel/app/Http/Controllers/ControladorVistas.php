<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    
    public function form(){
        return view('form');
    }

    public function consulta(){
        return view('clientes');
    }

    public function procesarCliente( validadorCliente $peticion){
        //Respuestas de redireccion

        //redireccion usando ruta
        //return redirect('/');

        //redireccion con nombre de ruta
        //return redirect()->route('rutaconsulta');

        //redireccion al origen de peticion
        //return back();

        //$id= [['usuario'=>1],['usuario'=>2]];
        //return view('form',compact('id'));

      
        //redireccion con un mensaje flashb
        $usuario= $peticion->input('txtNombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

    
}
