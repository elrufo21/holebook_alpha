@extends('layouts.app-master')

<style>
    .flickity-button {

        background: transparent;
    }

    .flickity-button:hover {

        background: transparent;
        color: black;
    }

    .flickity-prev-next-button {
        width: 100px;
        height: 100px;
    }

    .flickity-button-icon {
        fill: white;
    }

    .flickity-button:disabled {
        display: none;
    }

    .carousel {
        font-family: Arial, Helvetica, sans-serif;
        margin: auto;
        max-width: 100%;
        height: 600px;
        background-color: transparent;
    }

    .carousel-cell {
        margin-top: 50px;
        margin-right: 35px;
        margin-bottom: 35px;
        float: right;
        max-width: 301px;
        width: 100%;
        height: 535px;
        border-radius: 15px;
        counter-increment: carousel-cell;
        transition: all .3s ease;
        opacity: 0.3;
        background: #3c2828;
        filter: blur(6px);

    }

    .carousel-cell.is-selected {
        filter: blur(0);
        opacity: 1;
        background: rgb(123, 117, 117);
        transform: scale(1.1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    /* titulo */
    .carousel-cell .n {
        font-size: 18px;
        margin-top: 15px;
        text-align: center;
        color: white;
        counter-increment: carousel-cell;
    }

    /*descripcion*/
    .carousel-cell .a {
        font-size: 15px;
        text-align: justify;
        margin-right: 8px;
        margin-left: 8px;
        color: white;
        counter-increment: carousel-cell;
    }

    /* button */
    .carousel-cell .b {
        cursor: pointer;
        margin: auto;
        width: 180px;
        padding: 1px;
        background: #d0003e;
        border: 1px solid #d0003e;
        border-radius: 15px;
        font-size: 15px;
        color: white;
        text-align: center;
        counter-increment: carousel-cell;
        transition: all .3s ease;
    }

    /* picture */
    .carousel-cell .p {
        width: 181px;
        height: 250px;
        display: block;
        margin: auto;
        margin-top: 15px;
        counter-increment: carousel-cell;
    }

    .carousel-cell .b:hover {
        background: #d0003e;
        transform: scale(1.03);
        font-size: 16px;
    }

    .carousel-cell .b:active {
        background: transparent;
        color: rgb(0, 0, 0);
        transform: scale(0.9);
        font-size: 16px;
    }

    .carousel-cell .b-selected {
        cursor: pointer;
        margin: auto;
        width: 180px;
        padding: 1px;
        background: green;
        border: 1px solid green;
        border-radius: 15px;
        font-size: 15px;
        color: white;
        text-align: center;
        counter-increment: carousel-cell;
        transition: all .3s ease;
    }

</style>

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            @if (auth()->user()->role == 'subs')
                <a id="banner">
                    <img src="img/banner.jpg" style="width: 100%;
                                    height: auto;
                                    margin-top: 20px; background-attachment: fixed;background-repeat: no-repeat;">
                </a>
            @else
                <a id="banner">
                    <img src="img/banner.jpg" style="width: 100%;
                                        height: auto;
                                        margin-top: 20px; background-attachment: fixed;background-repeat: no-repeat;">
                </a>
                <!--card slider-->
                <div class="carousel">
                    @foreach ($libros as $libro)
                        <div class="carousel-cell">
                            <img src="{{ $libro->img }}" class="p">
                            <p class="n">{{ $libro->name }}</p>
                            <p class="a">{{ $libro->description }}</p>
                            <a href="{{ route('sub.index') }}">
                                <p class="b">Suscribirse</p>
                            </a>
                            <p class="content"></p>
                        </div>
                    @endforeach
                </div>
            @endif
        @endauth

        @guest
            <h1>Para ver el contenido <a href="{{ route('login.show') }}">Inicia sesion</a></h1>
        @endguest
    </div>




    <!-- JavaScript slider-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--icono lupa-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".b").click(function() {
                $(this).toggleClass("b");
                $(this).toggleClass("b-selected");
            });
        });

        var elem = document.querySelector('.carousel');
        var flkty = new Flickity(elem, {

            cellalign: 'right',
            pageDots: false,
            groupCells: '20%',
            selectedAttraction: 0.03,
            friction: 0.15
        });
        var flkty = new Flickity('.carousel', {

        });
    </script>
@endsection
