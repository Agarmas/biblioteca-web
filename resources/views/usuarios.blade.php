<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Usuarios</title>
</head>

<body>
    @include('navbar')

    <h1 class="title">Usuarios</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr onclick="window.location='{{ route('usuarios.edit', $usuario) }}'">
                    <td>{{ $usuario->persona->nombre }}</td>
                    <td>{{ $usuario->persona->edad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>