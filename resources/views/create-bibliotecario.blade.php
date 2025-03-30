<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Crear Bibliotecario</title>
</head>

<body class="form-body">
    <div class="form-card">
        <h1 class="title">Crear Bibliotecario</h1>

        <form action="{{ route('bibliotecarios.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">

            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">

            <button type="submit" class="update-btn">
                Guardar Cambios
            </button>
        </form>

        <a href="{{ route('bibliotecarios.index') }}" class="back-btn">
            Volver a Bibliotecarios
        </a>
    </div>
</body>

</html>