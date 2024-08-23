<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        h1, h2 { text-align: center; }
    </style>
</head>
<body>
    <h1>Gobierno de El Salvador</h1>
    <h2>Secrtearía de Innovación</h2>
    <p>Fecha: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre </th>
                <th>Descripcion</th>
                <th>Precio</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->precio }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
