<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Portada</title>
       
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body,html{
                height: 100%
            }
            .full-height{
                height: 100vh;
            }
        </style> 
       
    </head>
    <body >
        <div class="d-flex flex-column justify-content-center align-items-center full-height" style="background-color: lightslategray">
            <h1 class="display-1" style="color:greenyellow">Bienvenido al Repaso</h1>
            <h3 class="display-4" style="color:greenyellow">Creado Por Carlos Saúl Muñoz Ibarra</h3>
            <p style="color:greenyellow">Grupo S193</p>
            <a href="/Repaso" class="btn btn-success">Ir al Repaso</a>

        </div>
    
    </body>
</html>
