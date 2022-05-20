<div class="form-create">
    <h1>Subir un Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label for="">
            Genero:
            <input type="text" name="genre">
        </label>
        <br>
        <label for="">
            IMG:
            <input type="text" name="img">
        </label>
        <br>
        <label for="">
            Fecha de carga:
            <input type="date" name="publication_date">
        </label>
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description" rows="10"></textarea>
        </label>
        <br>
        <label for="">
            Autor:
            <input type="text" name="Author">
        </label>
        <br>
        <label for="">
            Link:
            <input type="text" name="link">
        </label>
        <br>
        <button type="submit">Enviar</button>

    </form>
</div>
