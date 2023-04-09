<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
        integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <title>@yield('title', 'AboutMe')</title>
</head>

<body class="bg-dark container-fluid">
    <div class="row g-0">
        <!--header-->
        <div class="p-4 col fixed text-white bg-dark nav flex-column">
            <p class="text-center animate__animated animate__backInLeft text-danger">@yield('mode', 'Mode - Admin')</p>
            <hr />
            <ul class="nav flex-column text-center">
                <li class="h2"><a href="{{ route('home.index') }}"> Home </a></li>
                <li class="h2"><a href="{{ route('about.index') }}"> About </a></li>
                <li class="h2"><a href="{{ route('book.index') }}"> Recommend Books </a></li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-9">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center w-100">
                                <a class="navbar-brand" style="margin-left: 11%;"
                                    href="{{ route('home.index') }}">Arcylisz - AboutMe</a>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="collapse navbar-collapse">
                                    @guest
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><a class="nav-link active text-white btn btn-primary m-1"
                                                    href="{{ route('login') }}" role="button">Login</a></li>
                                            <li class="nav-item"><a class="nav-link active text-white btn btn-primary m-1"
                                                    href="{{ route('register') }}"role="button">Register</a></li>
                                        </ul>
                                    @else
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            <a role="button" class="nav-link active"
                                                onclick="document.getElementById('logout').submit();">Logout</a>
                                            @csrf
                                        </form>
                                    @endguest
                                </div>
                            </div>
                        </div>
                </nav>
            </div>
            <div class="g-0 m-2">
                @yield('content')
            </div>
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
