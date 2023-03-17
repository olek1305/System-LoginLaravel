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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
        integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous">
    </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>@yield('title', 'AboutMe')</title>
</head>

<body class="bg-dark">
    <div class="row g-0">
        <!--header-->
        <div class="p-4 col fixed text-white bg-dark nav flex-column">
            <p class="text-center animate__animated animate__backInLeft"> Mode - Guest </p>
            <hr />
            <ul class="nav flex-column text-center">
                <div>
                    <img src="{{ asset('/image/skull.webp') }}" alt="Skull"
                        class="img-thumbnail rounded mx-auto d-block animate__animated animate__tada">
                    <hr />
                </div>
                <li class="h2"><a href="/"> Home </a></li>
                <li class="h2"><a href="/about"> About </a></li>
                <li class="h2"><a href="/book"> Recommend Books </a></li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-10 mb-2">
            <nav class="p-4 shadow text-center">
                <span class="profile-font text-white">Arcylisz - AboutMe</span>
            </nav>

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
