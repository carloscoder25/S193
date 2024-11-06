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
    <div>
        <form action="/enviarPrenda" method="POST">
            <h1>Registro de prendas</h1>
            <label for="Prenda">Prenda</label>
            <input type="text" name="txtPrenda" id="prenda"><br>
            <small>{{ $errors->first('txtPrenda')}}</small>
            <label for="Color">Color</label>
            <input type="text" name="txtColor" id="color"><br>
            <small>{{ $errors->first('txtColor')}}</small>
            <label for="Cantidad">Cantidad</label>
            <input type="text" name="txtCantidad" id="cant"><br>
            <small>{{ $errors->first('txtCantidad')}}</small>
            <input type="submit">
        </form>
    </div>
</body>
</html>