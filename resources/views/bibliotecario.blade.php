<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar {{ $bibliotecario->persona->nombre }}</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Editar Bibliotecario</h1>

        <form action="{{ route('bibliotecarios.update', $bibliotecario) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $bibliotecario->persona->nombre }}">

            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="{{ $bibliotecario->persona->edad }}">

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <form action="{{ route('bibliotecarios.destroy', $bibliotecario) }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar este bibliotecario?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">
                Eliminar Bibliotecario
            </button>
        </form>

        <a href="{{ route('bibliotecarios.index') }}" class="back-btn">
            Volver a Bibliotecarios
        </a>
    </div>
</body>

</html>