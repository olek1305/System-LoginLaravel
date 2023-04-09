<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>@yield('title', 'AboutMe')</title>
</head>

<body class="bg-dark container-fluid">
    <div class="row g-0">
        <!--header-->
        <div class="p-4 col fixed text-white bg-dark nav flex-column">
            <p class="text-center animate__animated animate__backInLeft">@yield('mode', 'Mode - Guest')</p>
            <hr />
            <ul class="nav flex-column text-center">
                <div>
                    <a href="{{ route('home.index') }}"><img src="{{ asset('/image/skull.webp') }}" alt="Skull"
                            class="img-thumbnail rounded mx-auto d-block animate__animated animate__tada"></a>
                    <hr />
                </div>
                <li class="h2"><i class="bi bi-caret-right"></i><a href="{{ route('home.index') }}"> Home </a></li>
                <li class="h2"><i class="bi bi-caret-right"></i><a href="{{ route('about.index') }}"> About </a>
                </li>
                <li class="h2"><i class="bi bi-caret-right"></i><a href="{{ route('book.index') }}"> Recommend Books
                    </a></li>
            </ul>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" x-data="{ open: false }">
                    <div class="container-fluid justify-content-center">
                        <a class="navbar-brand" href="{{ route('home.index') }}">Arcylisz - AboutMe</a>
                        <button class="navbar-toggler" type="button" @click="open = !open" :aria-expanded="open ? 'true' : 'false'" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div :class="{ 'collapse': !open, 'navbar-collapse': true, 'collapse.show': open, 'justify-content-end': true }">
                            <ul class="navbar-nav">
                                @guest
                                    <li class="nav-item"><a class="nav-link active text-white btn btn-primary m-1"
                                            href="{{ route('login') }}" role="button">Login</a></li>
                                    <li class="nav-item"><a class="nav-link active text-white btn btn-primary m-1"
                                            href="{{ route('register') }}"role="button">Register</a></li>
                                @else
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a role="button" class="nav-link active"
                                            onclick="document.getElementById('logout').submit();">Logout</a>
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="g-0 m-2">
                @yield('content')
            </div>
        </div>
        
    <!-- footer -->
    <div class="copyright bg-dark py-4 text-center text-white fixed-bottom">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="">
                    Arcylisz
                </a> - <b>Po prostu Arcylisz</b>
            </small>
        </div>

    </div>
    <!--footer-->
</body>

</html>