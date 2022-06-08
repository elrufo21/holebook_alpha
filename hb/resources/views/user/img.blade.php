<div class="form-wrapper">
                <div class="form" action="{{route('user.update', $user)}}" method="POST">
                @csrf
                @method('put')
                <label for="">
                    
                    <input class="message" placeholder="Imagen de perfil" type="text" name="imgPerfil">
                </label>
                <br>
                <label for="">
                    
                    <input class="message" placeholder="Imagen de portada" type="text" name="imgPortada">
                </label>
                <button class="boton" type="submit">
                    <div class="inner">Enviar</div>
                </button>         
            </div>
<!-- <form action="{{route('user.update', $user)}}" method="POST">
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
</form> -->

<style>
        @import "https://fonts.googleapis.com/css?family=Raleway:300,400,500,900,700,300|Montserrat:300,400,700";
        body {
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #fff;
        background: linear-gradient(300deg, #dc3545, #726f6f, #c4b8e0, #443a3b);
        background-size: 500% 500%;
        transition: all 0.3s ease-in-out;
        animation: oscillateBG 10s ease infinite; 
        }

        .form-wrapper {
        padding: 0 5vw 6vw;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        
        
        }
        .form-wrapper .form {
        max-width: 468px;
        margin: auto;
        text-align: center;
        }
        .form-wrapper .form .header {
        padding: 0 30px;
        }
        .form-wrapper p {
        color: #aaa;
        font-weight: 300;
        margin-bottom: 30px;
        text-align: justify;
        }
        .form-wrapper h1 {
        color: #fff;
        font-weight: 700;
        font-size: 66px;
        line-height: 62px;
        text-align: left;
        }

        button {
        background: transparent;
        outline: none;
        user-select: none;
        cursor: not-allowed;
        display: block;
        color: #fff;
        border: 0;
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 24px;
        line-height: 1em;
        margin: 20px 0 50px;
        }
        button.boton {
        padding-left: 28px;
        }
        button.boton .inner {
        position: relative;
        display: block;
        }
        button.boton .inner:before {
        content: "";
        position: absolute;
        width: calc(100% - 8px);
        height: 3px;
        background-color: #fff;
        top: 0;
        left: 0;
        opacity: 0;
        transition: all 0.25s ease-in-out;
        }
        button.boton:hover .inner:before {
        opacity: 1;
        transform: translate(0, 30px);
        }

        .message {
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        width: 100%;
        box-sizing: border-box;
        color: inherit;
        padding: 18px 26px;
        position: relative;
        line-height: 1.2em;
        font-size: 18px;
        font-weight: 300;
        border: solid 5px rgba(0, 0, 0, 0.3);
        box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3);
        background: transparent;
        outline: none;
        user-select: none;
        margin-bottom: 30px;
        color: #fff;
        height: auto;
        border-radius: 50px;
        }
        .message:focus {
        border-color: #2cffce;
        }

        .message::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.65);
        }

        .message::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.65);
        }

        @keyframes oscillateBG {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
        }
    </style>