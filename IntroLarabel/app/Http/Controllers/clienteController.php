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

        // Consultar el cliente específico por ID
    $cliente = DB::table('clientes')->where('id', $id)->first();

    // Verificar si el cliente existe
    if (!$cliente) {
        return redirect()->route('rutaClientes')->with('error', 'Cliente no encontrado.');
    }

    // Retornar la vista con los datos del cliente
    return view('forma', compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, $id)
    {
        
        $updated = DB::table('clientes')
            ->where('id', $id)
            ->update([
                "nombre"=>$request->input('txtNombre'),
                "apellido"=>$request->input('txtApellido'),
                "correo"=>$request->input('txtCorreo'),
                "telefono"=>$request->input('txtTelefono'),
                "updated_at"=>Carbon::now(),

        ]);

        if ($updated){
            session()->flash('exito','Se actualizao el cliente con el id: ' . $id);
        }else{
            session()->flash('error','Error al actualizar el cliente');
        }


        return to_route('rutaCliente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     
        $deleted = DB::table('clientes')->where('id', $id)->delete();


        if($deleted){
            session()->flash('exito','Se elimino el cliente con el id: ' . $id);
        }else{
            session()->flash('error','Error al eliminar el cliente');
        }
        return to_route('rutaCliente');

    }

}
