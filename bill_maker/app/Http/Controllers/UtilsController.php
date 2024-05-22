<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Distribuidor;
use App\Models\Productos;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UtilsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listar_clientes()
    {


        $user = Auth::user();

        $clientes = null;

        if ($user->is_admin) {
            $clientes = Cliente::all();

        } if ($user->is_distribuidor) {


            $distribuidor = $user->distribuidor;
            $clientes = $distribuidor->clientes;


        }if ($user->is_comercial) {


            $comercial = $user->comercial;
            $clientes = $comercial->clientes;


        }


        return view('clientes.lista_clientes', ['clientes' => $clientes]);
    }



    public function listar_distribuidores()
    {


        $user = Auth::user();

        if ($user->is_admin) {

            $distribuidores = Distribuidor::all();

        }

        return view('distribuidores.lista_distribuidores', ['distribuidores' => $distribuidores]);
    }

    public function editar_precios($cliente_id)
    {
        // Obtener el cliente correspondiente al ID
        $cliente = Cliente::findOrFail($cliente_id);

        // Obtener los productos
        $productos = Productos::all();

        // Puedes pasar el cliente junto con los productos a la vista
        return view('productos.editar_precios', compact('cliente', 'productos'));
    }

}
