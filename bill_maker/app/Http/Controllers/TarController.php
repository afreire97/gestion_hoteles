<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;

class TarController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'cliente_id' => 'required', // Asegúrate de que el cliente_id esté presente
            'TAR_producto_id' => 'required|array', // TAR_producto_id debe ser un array
            'TAR_resultante' => 'required|array', // TAR_resultante también debe ser un array
            // Puedes agregar más reglas de validación según sea necesario
        ]);

        // Obtiene el cliente_id del formulario
        $cliente_id = $request->input('cliente_id');

        // Obtiene los arrays de TAR_producto_id y TAR_resultante del formulario
        $productos_ids = $request->input('TAR_producto_id');
        $resultantes = $request->input('TAR_resultante');

        // Itera sobre los arrays y crea una nueva tarifa para cada producto
        foreach ($productos_ids as $key => $producto_id) {
            // Crea una nueva instancia de Tarifa con los datos del formulario
            $tarifa = new Tarifa();
            $tarifa->TAR_producto_id = $producto_id;
            $tarifa->TAR_emisor_id = auth()->id(); // Suponiendo que el emisor es el usuario autenticado
            $tarifa->TAR_receptor_id = $cliente_id;
            $tarifa->TAR_resultante = $resultantes[$key];

            // Guarda la nueva tarifa en la base de datos
            $tarifa->save();
        }

        // Redirige a donde desees después de guardar las tarifas
        return redirect()->route('dashboard');
    }
}
