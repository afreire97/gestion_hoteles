<x-app-layout>
    <div class="container mt-5">
        <h2>Editar precios</h2>
        <form action="{{ route('tarifas.store') }}" method="POST">
            @csrf
            <!-- Agrega un campo oculto para enviar el ID del cliente -->
            <input type="hidden" name="cliente_id" value="{{ $cliente->CLI_id }}">

            @foreach($productos as $producto)
                <div class="form-group">
                    <!-- Agrega un campo oculto para enviar el ID del producto -->
                    <input type="hidden" name="TAR_producto_id[]" value="{{ $producto->PRO_id }}">
                    <label for="precio_{{ $producto->PRE_id }}">{{ $producto->PRO_nombre }}</label>
                    <!-- Utiliza [] en el nombre del campo para enviar un array de valores -->
                    <input type="number" step="0.01" class="form-control" id="precio_{{ $producto->id }}" name="TAR_resultante[]" value="{{ $producto->PRO_cifra }}" placeholder="Precio por defecto: {{ $producto->PRO_cifra }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>

