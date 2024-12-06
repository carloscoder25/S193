<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Validador;
use Illuminate\Http\Request;

class ControladorPrendas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(){
        return view('welcome');
    }
    public function index()
    {
        $consultaprendas=DB::table('prendas')->get();
        return view('prendas',compact('consultaprendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Validador $request)
    {
        DB::table('prendas')->insert([
            "prenda"=>$request->input('txtPrenda'),
            "color"=>$request->input('txtColor'),
            "Cantidad"=>$request->input('txtCantidad'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),     
        ]);

        $prenda=$request->input('txtPrenda');
        $color=$request->input('txtColor');
        session()->flash('exito','Se guardo la Prenda :'.$prenda);
        return to_route('rutawelcome');
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
    public function edit($id)
    {
        $prenda = DB::table('prendas')->where('id',$id)->first();
        if(!$prenda){
            return redirect()->route('rutawelcome')-with('error','prenda no encontrada');

        }
        return view('welcome2',compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Validador $request,$id)
    {
        $updated = DB::table('clientes')
        ->where('id', $id)
        ->update([
            "prenda"=>$request->input('txtPrenda'),
            "color"=>$request->input('txtColor'),
            "Cantidad"=>$request->input('txtCantidad'),
            "updated_at"=>Carbon::now(),
        ]);

        if($updated){
            session()->flash('exito','Se actualizo la prenda con el id '.$id);
        }else{
            session()->flash('error','No se pudo actualizar la prenda con el id '.$id);
        }
        return to_route('rutaresultados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted=DB::table('prendas')->where('id',$id)->delete();
        if($deleted){
            session()->flash('exito','Se elimino la prenda con el id '.$id);
        }else{
            session()->flash('error','No se pudo eliminar la prenda con el id '.$id);
        }
        return to_route('rutaresultados');
    }
}
