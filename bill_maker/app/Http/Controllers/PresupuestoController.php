<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\EstadoPresupuesto;
use App\Models\Presupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();

        $user = Auth::user();
        $distribuidor = $user->is_distribuidor ? $user->distribuidor : null;

        return view('presupuestos.create', [
            'clientes' => $clientes,
            'distribuidor' => $distribuidor,
        ]);
    }
    public function previsualizarPresupuesto(Request $request)
    {



        $data = $request->all();


        $distribuidor = Auth::user()->distribuidor;



        if(!$distribuidor->porcentajes){




        }










    }












    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Presupuesto $presupuesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presupuesto $presupuesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presupuesto $presupuesto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presupuesto $presupuesto)
    {
        //
    }
}
