@extends('layouts.app')

@section('content')
<div class="contener">
<h1>Detalles del producto</h1>
<div class="card">
    <div class="mb-3">
        <strong>Id:</strong> {{ $producto->id }}
    </div>
    <div class="mb-3">
        <strong>Nombre</strong> {{ $producto->nombre }}
    </div>
    <div class="mb-3">
        <strong>Descipcion:</strong> {{ $producto->description }}
    </div>
    <div class="mb-3">
        <strong>Precio:</strong> {{ $producto->precio }}
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>

</div>
</div>
@endsection
