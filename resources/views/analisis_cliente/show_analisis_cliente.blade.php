<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>Detalles de usuarios</h1>
    <ul>
        <li><strong>Usuario:</strong> {{ $analisis_cliente->Usuario }}</li>
        <li><strong>Tiempo online</strong> {{ $analisis_cliente->Tiempo_online }}</li>
        <li><strong>Tiempo offline</strong> {{ $analisis_cliente->Tiempo_offline }}</li>
    </ul>

    <form action="{{ route('analisis-cliente.destroy', $analisis_cliente) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <a href="{{ route('analisis-cliente.index') }}">Ir al inicio</a>
        <br><br>
        <a href="{{ route('analisis-cliente.edit', $analisis_cliente) }}">Editar</a>
        <br><br>
        <button type="submit">Borrar</button>
    </form>

</body>
</html>