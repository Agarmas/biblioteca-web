<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Libros</title>
</head>

<body>
    @include('navbar')
    <h1 class="title">Libros</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Prestado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr onclick="window.location='{{ route('libros.edit', $libro) }}'">
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="checkbox" {{ $libro->prestado ? 'checked' : '' }} disabled class="w-5 h-5">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
