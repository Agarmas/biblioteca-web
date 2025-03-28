<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Libros</title>
</head>

<body>
    <h1 class="title">Libros</h1>
    <table class="w-3/4 mx-auto border-collapse border border-gray-300 shadow-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">Título</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Autor</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Prestado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $libro->titulo }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $libro->autor }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="checkbox" {{ $libro->prestado ? 'checked' : '' }} disabled class="w-5 h-5">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>