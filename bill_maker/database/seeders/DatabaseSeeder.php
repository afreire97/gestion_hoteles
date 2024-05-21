<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\ClienteTipo;
use App\Models\Comercial;
use App\Models\Distribuidor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'is_admin' => true,
            'is_distribuidor' => false,
            'is_comercial' => false,
        ]);


        $distUser = User::factory()->create([
            'name' => 'Pepe',
            'email' => 'pepe@mail.com',
            'is_admin' => false,
            'is_distribuidor' => true,
            'is_comercial' => false,
        ]);



       $pepe= Distribuidor::factory()->create([

            'DIS_user_id' => $distUser->id,
        ]);


        $comUser = User::factory()->create([
            'name' => 'Juan',
            'email' => 'juan@mail.com',
            'is_admin' => false,
            'is_distribuidor' => false,
            'is_comercial' => true,
        ]);

        $juan = Comercial::factory()->create([
            'COM_user_id' => $comUser->id,
        ]);



        // Crear 30 clientes asociados a $pepe
        $clientesAsociadosDistribuidor = Cliente::factory(2)->create([
            'CLI_distribuidor_id' => $pepe->DIS_id,
        ]);

        // Crear 30 clientes sin asociar a ningún distribuidor
        $clientesSinAsociar = Cliente::factory(10)->create([
            'CLI_comercial_id' => $juan->COM_id,
        ]);


    }
}
