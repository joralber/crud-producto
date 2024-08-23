
@extends('layouts.app')
@section('content')
<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" name="description" >{{$producto->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" class="form-control" name="precio" value="{{$producto->precio}}" required>
    </div>
    <button type="submit" class="btn btn-primary ml-2">Modificar</button>
</form>



@endsection
