@extends('layouts.plantilla')
@section('contenido')
    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        <div class="card text-justify font-monospace">

            @foreach ($consulta as $cliente)
                
            

            <div class="card-header fs-5 text-primary"> 
                {{$cliente->nombre}} - {{$cliente->apellido}}
            </div>

            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->email}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted d-flex justify-content-between">
                
                <a href="{{ route('cliente.edit', $cliente->id)}}" class="btn btn-warning">{{__('Editar') }}</a>
                
                <form action="{{route ('cliente.destroy',$cliente->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este cliente?')">{{__('Eliminar')}}</button>
                </form>     
                
            </div>
        </div>
        {{-- Finaliza tarjetaCliente --}}
        @endforeach

    </div>
    {{-- divcontainer --}}
@endsection