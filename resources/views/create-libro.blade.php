<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Crear Libro</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Crear Libro</h1>

        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo">

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor">

            <label for="biblioteca_id">Biblioteca</label>
            <select name="biblioteca_id" id="biblioteca_id">
                <option value="">Ninguna biblioteca</option>
                @foreach ($bibliotecas as $biblioteca)
                    <option value="{{ $biblioteca->id }}">
                        {{ $biblioteca->nombre }}
                    </option>
                @endforeach
            </select>

            <label for="usuario_id">Prestado</label>
            <select name="usuario_id" id="usuario_id">
                <option value="">No prestado</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">
                        {{ $usuario->persona->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <a href="{{ route('libros.index') }}" class="back-btn">Volver a Libros</a>
    </div>
</body>

</html>