
@if (auth()->user())
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: "Poppins", sans-serif;
        }

        body {
            width: 100%;
            height: auto;
            background-color: rgba(151, 151, 151, 0.03);
            background-image: linear-gradient(45deg, #f9f9f9 0%, #f9f9ff 100%);
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.04);
            background-color: #ffffff;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
        }

        .logo img {
            margin: 3px 10px 3px 3px;
            height: 80px;
        }

        .pricing {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            padding: 7rem;
        }

        .card-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 320px;
            height: auto;
            background-color: #f9f9f9;
            border-radius: 20px;
            box-shadow: 0 5px 14px rgba(0, 0, 0, 0.25), 0 5px 5px rgba(0, 0, 0, 0.22);
            padding: 2rem;
            margin: 1rem;
            transition: all 0.2s ease-in;
        }

        .card-wrapper:hover {
            transform: scale(1.1);
        }

        .card-header {
            margin: 1rem;
            text-align: center;
        }

        .card-wrapper:hover .card-header>h2 {
            transform: scale(1.1);
            color: #ec615b;
            letter-spacing: 2;
        }

        .card-header>img {
            width: 200px;
            display: block;
            margin: 0 auto;
        }

        .card-detail {
            width: 100%;
        }

        .card-detail>p {
            padding: 0.6rem 1.5rem;
            font-size: 0.8rem;
            border-bottom: 1px solid #d5d5d5;
        }

        .check {
            color: #5222d0;
        }

        .nocheck {
            color: #ec615b;
        }

        .card-detail>p:hover {
            background-color: #d5d5d5;
        }

        .card-price {
            display: flex;
            align-items: flex-start;
            margin: 1rem;
        }

        .card-price>p {
            font-size: 3rem;
            font-weight: 800;
        }

        .card-price>p>sup,
        .card-price>p>sub {
            font-size: 1rem;
        }

        .card-button {
            padding: 0.6rem 3rem;
            border: 2px solid #ec615b;
            background-color: #ec615b;
            color: #fff;
            border-radius: 30px;
            cursor: pointer;
            transition: all 50ms ease-in;
        }

        .card-button:hover {
            border: 2px solid #ec615b;
            background-color: transparent;
            color: #ec615b;
            font-weight: 800;

        }
        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            text-decoration: none;
            color: #ec615b;
        }

    </style>
    <div>
        <!--menu-->
        <nav>
            <!--logo-->
            <a href="#" class="logo">
                <img src="img/logo_transparent.png">
            </a>
    </div>
    </nav>
    <form action="{{route('user.subs',auth()->user())}}" method="POST">
        @csrf 
        @method('put')
        <section class="pricing">
            <div class="card-wrapper">
                <!-- card-header -->
                <div class="card-header">
                    <img src="img/graphic-design-6175679.svg">
                    <h2>ESTUDIANTE</h2>
                </div>
                <!-- card-detail -->
                <div class="card-detail">
                    <p><span class="fas fa-check check"></span> Libros Ilimitados</p>
                    <p><span class="fas fa-check check"></span> <b>0 </b> Anuncios</p>
                    <p><span class="fas fa-times nocheck"></span> Publicar su libro</p>
                    <p><span class="fas fa-times nocheck"></span> Descargar libros</p>
                    <p><span class="fas fa-times nocheck"></span> Monetizar libros</p>
                </div>
                <!-- card-price -->
                <div class="card-price">
                    <p><sup>$ </sup>5<sub>/mes</sub></p>
                </div>
                <!-- button -->
                <button class="card-button" type="submit"><a href="{{route('user.subs',auth()->user()->id)}}">COMPRAR</a></button>
            </div>
    
            <div class="card-wrapper">
                <!-- card-header -->
                <div class="card-header">
                    <img src="img/graphic-design-6175679.svg">
                    <h2>PREMIUM</h2>
                </div>
                <!-- card-detail -->
                <div class="card-detail">
                    <p><span class="fas fa-check check"></span> Libros Ilimitados</p>
                    <p><span class="fas fa-check check"></span> <b>0 </b> Anuncios</p>
                    <p><span class="fas fa-check check"></span> Publicar su libro</p>
                    <p><span class="fas fa-times nocheck"></span> Descargar libros</p>
                    <p><span class="fas fa-times nocheck"></span> Monetizar libros</p>
                </div>
                <!-- card-price -->
                <div class="card-price">
                    <p><sup>$ </sup>15<sub>/mes</sub></p>
                </div>
                <!-- button -->
                <button class="card-button" type="submit" ><a href="{{route('user.subs',auth()->user()->id)}}">COMPRAR</a></button>
            </div>
            <div class="card-wrapper">
                <!-- card-header -->
                <div class="card-header">
                    <img src="img/graphic-design-6175679.svg ">
                    <h2>PLATINIUM</h2>
                </div>
                <!-- card-detail -->
                <div class="card-detail">
                    <p><span class="fas fa-check check"></span> Libros Ilimitados</p>
                    <p><span class="fas fa-check check"></span> <b>0 </b> Anuncios</p>
                    <p><span class="fas fa-check check"></span> Publicar su libro</p>
                    <p><span class="fas fa-check check"></span> Descargar libros</p>
                    <p><span class="fas fa-check check"></span> Monetizar libros</p>
                </div>
                <!-- card-price -->
                <div class="card-price">
                    <p><sup>$ </sup>25<sub>/mes</sub></p>
                </div>
                <!-- button -->
                <button class="card-button" type="submit" ><a href="{{route('user.subs',auth()->user()->id)}}">COMPRAR</a></button>
                
            </div>
        </section>
    </form>
    
    </div>
    
@else
    <a href="{{route('login.show')}}">Inicia sesion para ver nuestros planes!!</a>
@endif
