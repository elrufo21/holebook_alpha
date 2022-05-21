<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<div class="container">
    <h1>Subir un Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <br>
            <input type="text" name="name" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Genero</label>
            <br>
            <input type="text" name="genre" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">IMG</label>
            <br>
            <input type="text" name="img" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fecha de carga</label>
            <br>
            <input type="date" name="publication_date" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Autor</label>
            <br>
            <input type="text" name="Author" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link</label>
            <br>
            <input type="text" name="link" id="exampleFormControlInput1" placeholder="">
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
