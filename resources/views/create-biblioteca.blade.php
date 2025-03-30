<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Crear Biblioteca</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Crear Biblioteca</h1>

        <form action="{{ route('bibliotecas.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">

            <label for="edad">Bibliotecario</label>
            <select name="bibliotecario_id" id="bibliotecario_id">
                @foreach ($bibliotecarios as $bibliotecario)
                    <option value="{{ $bibliotecario->id }}">
                        {{ $bibliotecario->persona->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <a href="{{ route('bibliotecas.index') }}" class="back-btn">
            Volver a Bibliotecas
        </a>
    </div>
</body>

</html>