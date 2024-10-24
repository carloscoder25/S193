@extends('layouts.plantilla')
@section('titulo','formulario')
@section('contenido')

{{-- Inicia Tarjeta con formulario --}}
        {{--@dump($id)--}}

    <div class="container mt-5 col-md-6">
        {{--@if(session('exito'))
        
        <x-Alert tipo="success"> {{session('exito')}}</x-Alert>
        @endif --}}
        {{--@session('exito')
        <x-Alert style="background-color: greenyellow;" tipo="warning" > {{ $value }}</x-Alert>
        @endsession--}}
        
        @session('exito')
        {!<script>
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"});
           </script>!}
        @endsession

        <div class="card font-monospace">

            <div class="card-header fs-5 text-center text-primary">
                Registro de Clientes
            </div>

            <div class="card-body text-justify">

                <form class="mb-3" action="/enviarCliente" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" id="nombre">
                        <small>{{ $errors->first('txtNombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApellido" id="apellidos">
                        <small>{{ $errors->first('txtApellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="txtCorreo" id="correo">
                        <small>{{ $errors->first('txtCorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" id="telefono">
                        <small>{{ $errors->first('txtTelefono') }}</small>
                    </div>
            </div>

            <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente </button>
            </div>

            </form>
            </div>
        </div>
    </div>

@endsection