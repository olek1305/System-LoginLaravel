<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>@yield('title', 'AboutMe')</title>
</head>

<body>
    <div class="row g-0">
        <!--header-->
        <div class="p-3 col fixed text-white bg-dark nav flex-column">
            <p class="text-center animate__animated animate__backInLeft"> Arcylisz - AboutMe </p>
            <hr />
            <ul class="nav flex-column text-center ">
                <div>
                    <img src="{{ asset('/image/skull.webp') }}" alt="Skull" class="img-thumbnail rounded mx-auto d-block animate__animated animate__tada">
                </div>
                <li> test1 </li>
                <li> test2 </li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-10 mb-2 content-grey">
            <nav class="p-4 shadow text-end">
                <span class="profile-font; text-center">Guest</span>
                
            </nav>

            <div class="g-0 m-2">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-black">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="">
                    Arcylisz
                </a> - <b>Po prostu Arcylisz</b>
            </small>
        </div>
        <!--footer-->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
