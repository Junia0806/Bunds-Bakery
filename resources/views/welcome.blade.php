
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c6d8f06459.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/login.css') }}" rel="stylesheet"> --}}
    <title>Bund's Bakery</title>
</head>

<body>
    <nav class="navbar1">
            <a class="nav-item" href="{{ url('/') }}">
                <img src="{{ url('img/lg.png') }}" height="100">
            </a>
        <ul class="nav__links">
            <li class="link"><a href="#">Lezat</a></li>
            <li class="link"><a href="#">Inovatif</a></li>
            <li class="link"><a href="#">Hangat</a></li>
            <li class="link"><a href="#">Berkualitas</a></li>
        </ul>
        <a href="https://wa.me/6281333468527" class="button">Hubungi Kami</a>
    </nav>
    <header>

        <div class="section__container header__container">
            <div class="header__image">
                <img src="img/well (1).jpg" alt="header" />
                <img src="img/well (3).jpg" alt="header" />
            </div>
            <div class="header__content">
                <div>
                    <p class="sub__header"> </p>
                    {{-- <h1>Senyum Bunda😊<br />yang menyatu dengan rasa.</h1> --}}
                    <h1>Bund's Bakery</h1>
                    <p class="section__subtitle">
                        Selamat datang di Bund's Bakery, tempat di mana kelezatan dan inovasi bertemu dengan kehangatan dan kelembutan roti dan kue terbaik.
                    </p>

                    @if (Route::has('login'))
                        <div class="action__btns">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="btn" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                               
                                    <a class="btn1" href="{{ route('register') }}">Register <i class="fa-solid fa-arrow-right-to-bracket"></i> </a>
                                @endif
                                @endauth
                            </div>
                            @endif
                    </div>
                </div>
            </div>
        </header>

    </body>

    </html>
