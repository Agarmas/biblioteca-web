<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar {{ $libro->titulo }}</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Editar Libro</h1>

        <form action="{{ route('libros.update', $libro) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}">

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" value="{{ $libro->autor }}">

            <label for="autor">Biblioteca</label>
            <select name="biblioteca_id" id="biblioteca_id">
                <option value="">Ninguna biblioteca</option>
                @foreach ($bibliotecas as $biblioteca)
                    <option value="{{ $biblioteca->id }}"
                        {{ $libro->biblioteca_id == $biblioteca->id ? 'selected' : '' }}>
                        {{ $biblioteca->nombre }}
                    </option>
                @endforeach
            </select>

            <label for="autor">Prestado</label>
            <select name="usuario_id" id="usuario_id">
                <option value="">No prestado</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}"
                        {{ $libro->usuario_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->persona->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="update-btn">Guardar Cambios</button>
        </form>

        <form action="{{ route('libros.destroy', $libro) }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar este libro?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Eliminar Libro</button>
        </form>

        <a href="{{ route('libros.index') }}" class="back-btn">Volver a Libros</a>
    </div>
</body>

</html>