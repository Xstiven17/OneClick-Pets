<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empresa</title>
</head>
<body>
    <h1>Crear Empresa</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div>
            <label for="razon_social">Razón Social:</label>
            <input type="text" name="razon_social" id="razon_social" value="{{ old('razon_social') }}" required>
        </div>
        <div>
            <label for="nit">NIT:</label>
            <input type="text" name="nit" id="nit" value="{{ old('nit') }}" required>
        </div>
        <div>
            <label for="objeto_social">Objeto Social:</label>
            <textarea name="objeto_social" id="objeto_social" required>{{ old('objeto_social') }}</textarea>
        </div>
        <div>
            <button type="submit">Crear Empresa</button>
        </div>
    </form>
</body>
</html>
