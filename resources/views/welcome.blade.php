<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Восстановление пароля</title>
    <title>Кинотеатр - Название вашего кинотеатра</title>
    <style>
        /* Здесь вы можете добавить стили для вашего заголовка */
        /* Например: */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        p {
            margin: 0;
            font-size: 16px;
        }
        cont_1 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-image: url('{{asset('images/GettyImages-904490726-62334a92c1186.webp')}}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
         movie-poster  {
            -o-object-fit: cover;
            top: 0;
            left: 0;
            width: 10%;
            height: 10%;
            object-fit: cover;
        }


    </style>
</head>
<body>

<header>
    <div class="cont_1">
    <h1>MAX Cinema</h1>
    <a href="#">Адреса кинотеатра </a>
    <a href="#"> контактная информация</a>
    <a href="#">дополнительная информация</a>

        <a href="{{route('register')}}">РЕГИСТРАЦИЯ</a>
        <a href="{{route('login')}}">ЛОГИН</a>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/ironman.jpg')}}">
                </div>
                <div class="movie_title">Железный человек 3</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/spider_1.jpg')}}">
                </div>
                <div class="movie_title">Человек паук</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/Spiderman2.jpg')}}">
                </div>
                <div class="movie_title">Человек паук 2</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/spider_3.jpg')}}">
                </div>
                <div class="movie_title">Человек паук 3</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/Black_Panther_film_poster.jpg')}}">
                </div>
                <div class="movie_title">Черная пантера</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/akva.jpg')}}">
                </div>
                <div class="movie_title">Аквамен</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/The_Avengers_Age_of_Ultron_poster.jpg')}}">
                </div>
                <div class="movie_title">Мстители Эра Альтрона</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/straji.jpg')}}">
                </div>
                <div class="movie_title">Стражи галактики 3</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/Человек-муравей_и_Оса_—_Квантомания.jpeg')}}">
                </div>
                <div class="movie_title">Человек муравей и Оса</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/tor.jpg')}}">
                </div>
                <div class="movie_title">Тор рагнарек</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster">
                    <img src="{{asset('images/1475116454_doktor-strendzh-0.jpg')}}">
                </div>
                <div class="movie_title">Доктор Стрэдж</div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div>
            <a class="movie_dummy" href="{{ route('booking') }}">
                <div class="movie_poster"></div>
                <div class="movie_title">Дэдпул 2</div>
            </a>
        </div>



        {{--    <img src="{{asset('images/photo_2023-06-14_00-10-25.jpg') }}" alt="heder">--}}
    </div>
</header>



<!-- Здесь можно добавить остальной контент вашего веб-сайта -->

</body>
</html>
