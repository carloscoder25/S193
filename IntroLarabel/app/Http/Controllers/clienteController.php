<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Carbon;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consultaclientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {

        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtNombre'),
            "apellido"=>$request->input('txtApellido'),
            "correo"=>$request->input('txtCorreo'),
            "telefono"=>$request->input('txtTelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        //

            //redireccion con un mensaje flashb
            $usuario= $request->input('txtNombre');
            session()->flash('exito','Se guardo el usuario: '.$usuario);
            return to_route('rutaform');
        
    }

    
  
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
