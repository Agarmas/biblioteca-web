<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Bibliotecas</title>
</head>

<body>
    @include('navbar')

    <h1 class="title">Bibliotecas</h1>

    <div class="flex justify-center mb-6">
        <a href="{{ route('bibliotecas.create') }}" class="create-btn text-center">
            Agregar Nueva Biblioteca
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Bibliotecario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bibliotecas as $biblioteca)
                <tr onclick="window.location='{{ route('bibliotecas.edit', $biblioteca) }}'">
                    <td>{{ $biblioteca->nombre }}</td>
                    <td>{{ $biblioteca->bibliotecario->persona->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>