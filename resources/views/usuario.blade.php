<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar {{ $usuario->persona->nombre }}</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Editar Usuario</h1>

        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $usuario->persona->nombre }}">

            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="{{ $usuario->persona->edad }}">

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">
                Eliminar Usuario
            </button>
        </form>

        <a href="{{ route('usuarios.index') }}" class="back-btn">
            Volver a Usuarios
        </a>
    </div>
</body>

</html>