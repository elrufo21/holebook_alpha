<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home.index') }}"
                class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">HoleBook
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-secondary">Inicio</a></li>
                <li><a href="{{ route('libros.index') }}" class="nav-link px-2 text-white">Libreria</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Noticias</a></li>
                @if (auth()->user()->role == 'subs')
                    <a href="{{ route('libros.create') }}" class="nav-link px-2 text-white">Publicar un libro</a>
                @endif
                <li><a href="{{route('contactanos.index')}}" class="nav-link px-2 text-white">Contactanos</a></li>
            </ul>

            @auth

                <a class="nav-link px-2 text-success" href="{{ route('user.index') }}">{{ auth()->user()->username }}</a>
                <div class="text-end px-2">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Salir</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Ingresar</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Registrate</a>
                </div>
            @endguest
        </div>
    </div>
</header>
