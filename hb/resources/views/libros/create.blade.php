@extends('layouts.app-master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@section('content')
    <style>
        .cont-title {
            padding: 8px;
            text-align: center;
            background: rgba(0, 0, 0, 0.5)
        }

        .h1 {
            display: inline-block;
            color: white;
        }

        .p {
            display: inline-block;
            color: red;
        }

        .container-cr {
            border: 2px solid rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 8px;
            margin-top: 3px;
            margin-bottom: 3px;
            box-shadow: 2px 4px 15px 0 #000000;
        }

    </style>
    <div class="container">
        <div class="container-cr">
            <div class="cont-title">
                <h1 class="h1">Subir un <p class="p">Libro</p>
                </h1>
            </div>
            <div class="cont-form">
                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre
                            <br>
                            <input type="text" name="name" id="exampleFormControlInput1" placeholder="" value="{{old('name')}}">
                        </label>
                        @error('name')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Genero
                            <br>
                            <input type="text" name="genre" id="exampleFormControlInput1" placeholder="" value="{{old('genre')}}">
                        </label>
                        @error('genre')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">IMG
                            <br>
                            <input type="text" name="img" id="exampleFormControlInput1" placeholder="" value="{{old('img')}}">
                        </label>
                        @error('img')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fecha de carga
                            <br>
                            <input type="date" name="publication_date" id="exampleFormControlInput1" placeholder="" value="{{old('publication_date')}}">
                        </label>
                        @error('publication_date')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="10"> {{old('description')}}</textarea>
                        </label>
                        @error('description')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Autor
                            <br>
                            <input type="text" name="Author" id="exampleFormControlInput1" placeholder="" value="{{old('Author')}}">
                        </label>
                        @error('Author')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Link
                            <br>
                            <input type="text" name="link" id="exampleFormControlInput1" placeholder="" value="{{old('link')}}">
                        </label>

                        @error('link')
                            <br>
                            <small>{{ $message }}</small>
                            <br>
                        @enderror

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
@endsection
