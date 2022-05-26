<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: poppins;
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            font-family: poppins;
            background-color: #909090;
        }

        .more-about-movie .quality {
            background-color: #e70634;
            color: black;
            font-weight: 600;
            padding: 0px 5px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .book-banner {
            width: 90%;
            max-width: 1400px;
            margin: 10px auto;
            min-height: 520px;
            padding: 60px 40px 40px 40px;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .book-banner::after {
            content: '';
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background: rgba(32, 32, 32, 0.7);
            background: linear-gradient(0deg, rgb(8, 8, 8) 0% rgba(0, 0, 0, 0.6) 100%);
        }

        .m-banner-img {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            overflow: hidden;

        }

        .book-banner::before {
            content: '';
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background: rgba(32, 32, 32, 0.7);
            background: linear-gradient(-90deg, rgba(37, 37, 37, 02) 0% rgba(15, 15, 15, 0.3) 100%);
        }

        .m-banner-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .banner-container {
            z-index: 100;
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 100%;
            position: relative;
        }

        .title-container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .movie-title h1 {
            color: #ffffff;
            font-weight: 600;
            font-size: 2.3rem;
            line-height: 50px;
            letter-spacing: 1px;
        }

        .more-about-movie {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 10px;
            flex-wrap: wrap;
            color: #e9e9e9;
        }

        .more-about-movie .rating,
        .more-about-movie span {
            margin-right: 20px;
            letter-spacing: 1px;
            font-size: 0.8rem;
        }

        .lenguage {
            margin-top: 20px;
        }

        .lenguage span {
            background-color: #dfdfdf0e;
            padding: 5px 10px;
            margin-right: 10px;
            color: #dfdfdf;
        }

        .title-bottom {
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
            flex-wrap: wrap;
        }

        .title-bottom .category {
            margin-right: 40px;
            font-size: 0.8rem;
        }

        .title-bottom .category strong {
            font-weight: 500;
            color: #d8d8d8;
        }

        a {
            text-decoration: none;
        }

        .title-bottom .category a {
            color: #e70634;
            margin-right: 5px;
        }

        .watch-btn {
            width: 220px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff09;
            border: 1px solid #ffffff2c;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: 0.9rem;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .watch-btn:hover {
            background-color: #e70634;
            transition: all ease 0.3s;
        }

        .book-details {
            max-width: 1000px;
            width: 100%;
            margin: 50px auto 20px auto;
            padding: 30px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .book-details strong {
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .movie-details p {
            color: #747474;
            margin: 10px 0px;
        }

        .image {
            width: 100%;
            max-width: 800px;
            margin: 0px auto 50px auto;
        }

        .image strong {
            color: #e70634;
            font-family: poppins;
            font-size: 2rem;
            font-weight: 400;
        }

        .image-s-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 100%;
        }

        .image-s-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

    </style>
</head>

<body>
    <section class="book-banner">
        <div class="m-banner-img">
            <img src="{{ $libro->img }}">
        </div>

        <div class="banner-container">
            <div class="title-container">   
                <div class="title-top">
                    <div class="movie-title">
                        <h1>{{ $libro->name }}</h1>
                    </div>
                    <div class="more-about-movie">
                        <span class="quality">{{ $libro->genre }}</span>
                        <div class="rating">
                            <span>9.1</span>
                        </div>
                    </div>
                    <div class="lenguage">
                        <span>Español</span>
                    </div>

                </div>

                <div class="title-bottom">
                    <div class="category">
                        <strong>Categoria</strong><br />
                        <a href="#">Aventura</a>,<a href="#">Thriller</a>,<a href="#">Psicologico</a>

                    </div>
                    <a href="{{ $libro->link }}" class="watch-btn">Leer</a>
                </div>
                
            </div>
        </div>
    </section>
    <section class="book-details">
        <strong>{{ $libro->name }}</strong>
        <p>{{ $libro->description }}</p>
        <a href="{{route('libros.edit',$libro)}}" class="watch-btn">Editar</a>
    </section>
</body>

</html>
