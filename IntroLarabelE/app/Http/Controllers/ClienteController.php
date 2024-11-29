<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{
    
    public function home()
    {
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $consulta = cliente::all();
        return view('clientes', compact('consulta'));
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
        $addCliente= new cliente();
        $addCliente->nombre=$request->input('txtNombre');
        $addCliente->apellido=$request->input('txtApellido');
        $addCliente->email=$request->input('txtCorreo');
        $addCliente->telefono=$request->input('txtTelefono');
        $addCliente->save();

        $msj= $request->input('txtNombre');
        session()->flash('exito','Se guardo el cliente: ' .$msj);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {

        return view('forma',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidadorCliente $request, Cliente $cliente)
{
    // Actualizar atributos del cliente
    $cliente->nombre = $request->input('txtNombre');
    $cliente->apellido = $request->input('txtApellido');
    $cliente->email = $request->input('txtCorreo');
    $cliente->telefono = $request->input('txtTelefono');
    $cliente->save(); // Guarda los cambios en la base de datos

    // Mensaje de éxito
    session()->flash('exito', "Cliente '{$cliente->nombre}' actualizado exitosamente.");
    return redirect()->route('cliente.index'); // Redirige al listado de clientes
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        // Elimina el cliente
        $cliente->delete();
    
        // Mensaje de éxito
        session()->flash('exito', "Cliente '{$cliente->nombre}' eliminado exitosamente.");
        return redirect()->route('cliente.index'); // Redirige al listado de clientes
    }
}
