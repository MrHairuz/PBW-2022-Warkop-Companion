<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Warkop Companion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/custom.css') }}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-xl" style="font-family: 'Comfortaa', cursive;">
            <a class="navbar-brand fs-4" href="{{ URL('/') }}" style="font-family: 'Lobster', cursive;">Warkop Companion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                <ul class="navbar-nav">
                    @yield("navbar")
                    <li class="nav-item">
                        <a class="btn btn-outline-coffee me-2" href={{ route('register') }} role="button">Daftar</a>
                        <a class="btn btn-coffee" href={{ route('login') }} role="button">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="min-vh-100 py-4">
        @yield('content')
    </main>

    <footer class="container-fluid bg-coffee text-white">
        <div class="row d-flex justify-content-center">
            <p class="text-center" style="font-family: 'Lobster', cursive; font-size: 1em">Copyright &copy; 2022
                Warkop Companion</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
