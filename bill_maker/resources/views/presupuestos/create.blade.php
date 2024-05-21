<x-app-layout>


    <div class="container mt-5">
        <h2>Crear Presupuesto</h2>
        <form action="{{route('previsualizar')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="PRE_habitaciones">Habitaciones:</label>
                <input type="number" class="form-control" id="PRE_habitaciones" name="PRE_habitaciones" value="1" min="1">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="PRE_is_checkin" name="PRE_is_checkin" value="1">
                <label class="form-check-label" for="PRE_is_checkin">Check-in</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="PRE_is_pms" name="PRE_is_pms" value="1">
                <label class="form-check-label" for="PRE_is_pms">PMS</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="PRE_is_cerraduras" name="PRE_is_cerraduras" value="1">
                <label class="form-check-label" for="PRE_is_cerraduras">Cerraduras</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="PRE_is_gestion_cobros" name="PRE_is_gestion_cobros" value="1">
                <label class="form-check-label" for="PRE_is_gestion_cobros">Gestión de Cobros</label>
            </div>



            <div class="form-group">
                <label for="PRE_cliente_id">Cliente:</label>
                <select class="form-control" id="PRE_cliente_id" name="PRE_cliente_id">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->CLI_id }}">{{ $cliente->CLI_nombre }}</option>
                    @endforeach
                </select>
            </div>

            @if($distribuidor)
                <input type="hidden" id="PRE_distribuidor_id" name="PRE_distribuidor_id" value="{{ $distribuidor->DIS_id }}">
            @endif

            <button type="submit" class="btn btn-primary mt-3">Crear Presupuesto</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</x-app-layout>
