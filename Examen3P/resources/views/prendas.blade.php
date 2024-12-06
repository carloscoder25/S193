<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen2P</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
</script>
@if(session('exito'))
<script>
    Swal.fire({
        title: "¡Exito!",
        text: "{{{ session('exito') }}}",
        icon: "success",
        confirmButtonText: "Aceptar",
    });
</script>
@endif
@if(session('error'))
<script>
    Swal.fire({
        title: "¡Error!",
        text: "{{{ session('error') }}}",
        icon: "error",
        confirmButtonText: "Aceptar",
    });
</script>
@endif


@foreach($consultaprendas as $prenda )

<div class="card text-justify font-monospace mt-4">

    <div class="card-header fs-5 text-primary"> 
        {{$prenda->prenda}}
    </div>

    <div class="card-body">
        <h5 class="fw-bold">{{$prenda->color}}</h5>
        <h5 class="fw-medium">{{$prenda->cantidad}}</h5>
        <p class="card-text fw-lighter"> </p>
    </div>


    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">



                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
           
<div class="card-footer text-muted d-flex justify-content-between">
                
    <a href="{{route('rutaEdit',$prenda->id)}}" class="btn btn-warning">'Editar'</a>
    
    <form action="{{route ('rutaEliminar',$prenda->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar esta prenda')">'Eliminar'</button>
    </form>     
    

</div>
                
        </div>
@endforeach
 
  





















        