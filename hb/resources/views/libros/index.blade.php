@extends('layouts.app-master')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap');

    
        .title{
            text-align: center;
            font-size: 40px;
            color: #6a6a6a;
            margin-top: 50px;
            font-weight: 100;
        }
        .containerlb{
            width: 100%;
            max-width: 1200px;
            height: 440px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }
        .containerlb .card{
            width: 300px;
            height: 430px;
            border-radius: 8px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            transition: all 0.25s;
        }
        .containerlb .card:hover{
            transform: translateY(-15px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }
        .containerlb .card img{
            width: 330px;
            height: 290px;
        }
        .containerlb .card h4{
            font-family: 'Exo', sans-serif;
            margin-top: 3px;
            font-weight: 600px;
        }
        .containerlb .card p{
            font-family: 'Exo', sans-serif;
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
        }
        .containerlb .card a{
            font-family: 'Exo', sans-serif;
            font-weight: 500;
            text-decoration: none;
            color: #3498db;
        }

    </style>
    <!--Insertar aqui el navbar-->
    <h1 class="title">Libros nuevos todas las semanas</h1>
    @auth
        @if (auth()->user()->role == 'subs')
        <div class="containerlb">
            @foreach ($libros as $libro )
                <div class="card">
                    <img src="{{$libro->img}}" alt="">
                    <h4>{{$libro->name}}</h4>
                    <p>{{$libro->Author}}</p>
                    <a href="{{route('libros.show',$libro->id)}}">Leer</a>
                </div>
            @endforeach
            {{$libros->links()}}
        </div>
        
        @else
        <div class="containerlb">
            @foreach ($libros as $libro )
                <div class="card">
                    <img src="{{$libro->img}}" alt="">
                    <h4>{{$libro->name}}</h4>
                    <p>{{$libro->Author}}</p>
                    <a href="{{route('sub.index')}}">Suscribirse</a>
                </div>
            @endforeach
            {{$libros->links()}}
        </div>
        @endif
    @endauth
    @guest
    <div class="containerlb">
        @foreach ($libros as $libro )
            <div class="card">
                <img src="{{$libro->img}}" alt="">
                <h4>{{$libro->name}}</h4>
                <p>{{$libro->Author}}</p>
                <a href="{{route('login.show')}}">Iniciar Sesion</a>
            </div>
        @endforeach
        {{$libros->links()}}
    </div>
    @endguest
    <br>
   
@endsection
