<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class='card ms-3' style='width: 18rem;'>

      <div class='card-body'>
        <p class='card-text'>Gestiona tus cosas</p>


        @if (Auth::check() && Auth::user()->is_admin)
        <a class="btn btn-info mb-1" href="">Listar distribuidores</a>
        <a class="btn btn-info mb-1" href="{{route('listarClientes')}}">Gestión clientes</a>
    @endif

    @if (Auth::check() && Auth::user()->is_distribuidor)
        <a class="btn btn-info mb-1" href="{{route('listarClientes')}}">Gestión clientes</a>
        <a class="btn btn-info" href="">Precios por habitación</a>
    @endif





      </div>
    </div>


</x-app-layout>