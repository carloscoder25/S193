<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function procesarCliente( Request $peticion){
        //Respuestas de redireccion

        //redireccion usando ruta
        //return redirect('/');

        //redireccion con nombre de ruta
        //return redirect()->route('rutaconsulta');

        //redireccion al origen de peticion
        //return back();

        //$id= [['usuario'=>1],['usuario'=>2]];
        //return view('form',compact('id'));

        $validacion= $peticion->validate([
            'txtNombre'=> 'required|min:4|max:200',
            'txtApellido'=> 'required|min:5|max:20',
            'txtCorreo'=> 'required|min:5|max:20',
            'txtTelefono'=> 'required|numeric'
        ]);
        //redireccion con un mensaje flashb
        $usuario= $peticion->input('txtNombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

    
}
