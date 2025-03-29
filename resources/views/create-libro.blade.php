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
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo">

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor">

            <button type="submit" class="update-btn">Guardar Libro</button>
        </form>

        <a href="{{ route('libros.index') }}" class="back-btn">Volver a Libros</a>
    </div>
</body>

</html>