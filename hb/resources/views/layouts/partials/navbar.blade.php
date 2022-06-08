
<!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" href="#">
                <img src="img/logo_transparent.png" alt="logo" style="width:70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center me-auto mb-2 mb-lg-0" id="ul">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('libros.index') }}">Librería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>

                    <?php if(auth()->user()->role == 'subs'): ?>
                    <a href="{{ route('libros.create') }}" class="nav-link px-2">Publicar un libro</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactanos.index')}}">Contáctanos</a>
                    </li>
                    @auth

                    <a class="nav-link px-2 text-success my-2 my-sm-0" href="{{ route('user.index') }}">{{ auth()->user()->username }}</a>
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
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Busca tu libro" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </nav>