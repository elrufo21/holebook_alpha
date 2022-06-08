
<form action="{{route('user.update', $user)}}" method="POST">
    @csrf
    @method('put')
    <label for="">
        Imagen de perfil
        <input type="text" name="imgPerfil">
    </label>
    <br>
    <br>
    <label for="">
        Imagen de portada
        <input type="text" name="imgPortada">
    </label>
    <button type="submit">Enviar</button>
</form>