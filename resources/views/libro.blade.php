<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar {{ $libro->titulo }}</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-4">Editar Libro</h1>

        <form action="{{ route('libros.update', $libro) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="autor" class="block text-sm font-medium text-gray-700">Autor</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="prestado" id="prestado" value="1" {{ $libro->prestado ? 'checked' : '' }}
                    class="mr-2">
                <label for="prestado" class="text-sm font-medium text-gray-700">Prestado</label>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">
                Guardar Cambios
            </button>
        </form>

        <form action="{{ route('libros.destroy', $libro) }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar este libro?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow-md">
                Eliminar Libro
            </button>
        </form>
    </div>
</body>

</html>
