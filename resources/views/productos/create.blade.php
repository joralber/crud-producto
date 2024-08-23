
@extends('layouts.app')
@section('content')
<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" class="form-control" name="precio" required>
    </div>
    <button type="submit" class="btn btn-primary ml-2">Crear</button>
</form>



@endsection
