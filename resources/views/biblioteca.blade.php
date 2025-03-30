<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar {{ $biblioteca->nombre }}</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Editar Biblioteca</h1>

        <form action="{{ route('bibliotecas.update', $biblioteca) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $biblioteca->nombre }}">

            <label for="edad">Bibliotecario</label>
            <select name="bibliotecario_id" id="bibliotecario_id">
                @foreach ($bibliotecarios as $bibliotecario)
                    <option value="{{ $bibliotecario->id }}"
                        {{ $biblioteca->bibliotecario_id == $bibliotecario->id ? 'selected' : '' }}>
                        {{ $bibliotecario->persona->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <form action="{{ route('bibliotecas.destroy', $biblioteca) }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar esta biblioteca?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">
                Eliminar Bibliotecario
            </button>
        </form>

        <a href="{{ route('bibliotecas.index') }}" class="back-btn">
            Volver a Bibliotecas
        </a>
    </div>
</body>

</html>