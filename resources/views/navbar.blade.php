<nav class="navbar">
    <a href="{{ url('/') }}" class="nav-link">Bienvenida</a>
    <a href="{{ route('usuarios.index') }}" class="nav-link">Usuarios</a>
    <a href="{{ route('bibliotecarios.index') }}" class="nav-link">Bibliotecarios</a>
    <a href="{{ route('bibliotecas.index') }}" class="nav-link">Bibliotecas</a>
    <a href="{{ route('libros.index') }}" class="nav-link">Libros</a>
</nav>