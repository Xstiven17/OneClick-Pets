<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar analisis usuario</title>
</head>
<body>
    <h1>Editar datos de usuarios</h1>

    <form action="{{ route('analisis-cliente.update',$analisis_cliente)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="usuario">
            Ususario
            <br>
            <input type="text" name="ususario" id="usuario-a-c" value="{{ old('usuario', $analisis_cliente->Usuario) }}">
        </label>

        <label for="tiempo_online">
            Tiempo online
            <br>
            <input type="text" name="tiempo_online" id="tiempo_online-a-c" value="{{ old('tiempo online', $analisis_cliente->Tiempo_online) }}">
        </label>
        <label for="tiempo_offline">
            Tiempo offline
            <br>
            <input type="text" name="tiempo_offline" id="tiempo_offline-a-c" value="{{ old('tiempo offline', $analisis_cliente->Tiempo_offline) }}">
        </label>

        <button type="submit">Actualizar</button>

    </form>
</body>

</body>
</html>