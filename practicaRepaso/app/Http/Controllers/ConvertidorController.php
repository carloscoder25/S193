<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    // Método para convertir las unidades
    public function convertir(Request $request)
    {
        // Recibe los valores de la petición
        $cantidad = $request->input('cantidad'); // Cantidad a convertir
        $unidad = $request->input('unidad');     // Unidad de origen (MB, GB, TB)
        $convertirA = $request->input('convertirA'); // Unidad de destino (GB, MB, TB)

        // Inicializar variable para el resultado
        $resultado = 0;

        // Lógica de conversión
        switch ($unidad) {
            case 'MB':
                if ($convertirA === 'GB') {
                    $resultado = $cantidad / 1024;
                }
                break;
            case 'GB':
                if ($convertirA === 'MB') {
                    $resultado = $cantidad * 1024;
                } elseif ($convertirA === 'TB') {
                    $resultado = $cantidad / 1024;
                }
                break;
            case 'TB':
                if ($convertirA === 'GB') {
                    $resultado = $cantidad * 1024;
                }
                break;
            default:
                return "Unidad no válida";
        }

        // Retorna el resultado en una cadena de texto
        return "La cantidad de $cantidad $unidad equivale a $resultado $convertirA.";
    }
}
