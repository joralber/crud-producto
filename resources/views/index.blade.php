@extends('layouts.app')

@section('content')
<h1>Listado de Productos</h1>
<a class="btn btn-primary" href="{{ route('productos.create') }}">Crear Producto</a>
<a href="{{ route('productos.informe.pdf') }}" class="btn btn-secondary">Generar Informe PDF</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table class="table mt-3">
    <tr>
        <th>Nombre</th>
        <th>descrition</th>
        <th>Precio</th>

        <th>Acciones</th>
    </tr>
    @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->description }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                <a class="btn btn-success" href="{{route('productos.show', $producto->id)}}">Ver</a>
            </td>
        </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center">
    {{ $productos->links() }}
</div>
@endsection
