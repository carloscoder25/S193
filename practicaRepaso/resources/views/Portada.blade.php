<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portada</title>
        <style>
            h1{
                color: green;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body>
        <div class="d-flex flex-column justify-content-center align-items-center full-height">
            <h1 class="display-1" style="color:greenyellow">Bienvenido a la aplicación</h1>

        </div>
    
    </body>
</html>
