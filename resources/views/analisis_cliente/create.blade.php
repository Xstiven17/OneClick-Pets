<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analisis cliente</title>
</head>
<body>
        <h1>Añadir analisis de cliente</h1>
        <form action="{{route('analisis-cliente.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="Usuario" placeholder="Usuario">
            <input type="text" name="Tiempo_online" placeholder="Tiempo online">
            <input type="text" name="Tiempo_offline" placeholder="Tiempo offline">
            <br/>
            <button type="submit"> Enviar: </button>
        </form>

</body>
</html>
