<head>
    @extends('layouts.app-master')
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    
    @section('content')
    <br>
            <div class="form-wrapper">
                <div class="form" action="{{ route('contactanos.store') }}" method="POST">
                    <div class="header">
                        <h1>Déjanos un mensaje</h1>
                        <p class="intro">Contáctanos, nosotros te responderemos pronto!</p>
                    </div>

                    @csrf
                    <label for="">
                        <br>
                        <input class="message" placeholder="Nombre" type="text" name="name">
                    </label>
                    <br>
            
                    @error('name')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <label for="">
                        <br>
                        <input class="message" placeholder="Correo" name="correo" type="correo">
                    </label>
                    <br>
                    @error('correo')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <label for="">
                        
                        <br>
                        <textarea class="message" placeholder="Mensaje" name="mensaje" rows="4"></textarea>
                    </label>
                    <br>
                    @error('mensaje')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <button class="boton" type="submit">
                        <div class="inner">Enviar</div>
                    </button>
                </form>
            
                @if (session('info'))
                    <script>
                        alert('{{session('info')}}');
                    </script>
                @endif
                <!-- <textarea class="message" placeholder="Message" rows="1"></textarea> -->
            </div>
        </div>
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

        p.intro {
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-align: left;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.5em;
        font-size: 0.9em;
        letter-spacing: 0.1em;
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
</body>
    
@endsection
