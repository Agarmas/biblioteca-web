<nav class="navbar">
    <a href="{{ url('/') }}" class="nav-link">Bienvenida</a>
    <a href="{{ route('libros.index') }}" class="nav-link">Libros</a>
    <a href="{{ route('bibliotecarios.index') }}" class="nav-link">Bibliotecarios</a>
    <a href="{{ route('usuarios.index') }}" class="nav-link">Usuarios</a>
</nav>