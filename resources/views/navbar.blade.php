<nav class="bg-blue-600 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="space-x-4">
            <a href="{{ url('/') }}" class="text-white hover:text-blue-300">Bienvenida</a>
            <a href="{{ route('libros.index') }}" class="text-white hover:text-blue-300">Libros</a>
            <a href="{{ route('bibliotecarios.index') }}" class="text-white hover:text-blue-300">Bibliotecarios</a>
        </div>
    </div>
</nav>