<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Bibliotecarios</title>
</head>

<body>
    @include('navbar')

    <h1 class="title">Bibliotecarios</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bibliotecarios as $bibliotecario)
                <tr onclick="window.location='{{ route('bibliotecarios.edit', $bibliotecario) }}'">
                    <td>{{ $bibliotecario->persona->nombre }}</td>
                    <td>{{ $bibliotecario->persona->edad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>