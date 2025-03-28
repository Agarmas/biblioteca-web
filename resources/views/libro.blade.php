<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $libro->titulo }}</title>
</head>
<body>
    <h1 class="title">{{ $libro->titulo }}</h1>
    <h2 class="text-center">{{ $libro->autor }}</h2>
</body>
</html>
