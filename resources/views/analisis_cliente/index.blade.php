<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analisis Clientes</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <a href="{{ route ('analisis-cliente.create')}}">Ir a analisis cliente </a>
    <ul>
        @foreach ($analisis_clientes as $analisis_cliente)
        <li>
            <a href="{{ route('analisis-cliente.show', $analisis_cliente->id) }}">{{ $analisis_cliente->Usuario}}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>
