<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>Matienzo</title>
</head>
<body>
    <!--Header-->
<header>
        <nav class="navbar navbar-expand-lg bg-body-transparent">
            <div class="container-fluid mx-3">
                <a class="navbar-brand text-decoration-none color-texto-navbar" href="{{route('/')}}">matienzo</a>
                <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="text-decoration-none color-texto-navbar" aria-current="page" href="{{url('/')}}">Inicio</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="text-decoration-none color-texto-navbar" href="{{url('products')}}">Productos</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="text-decoration-none color-texto-navbar" href="{{url('contacto')}}">Contacto</a>
                        </li>
                        <li class="nav-item mx-2 d-lg-none">
                            <a class="text-decoration-none color-texto-navbar" href="{{url('carrito')}}">Carrito</a>
                        </li>
                        <li class="nav-item mx-2 d-lg-none">
                            <a class="text-decoration-none color-texto-navbar" href="{{url('perfil')}}">Mi perfil</a>
                        </li>
                        <li class="nav-item mx-2 d-lg-none">
                            <a class="text-decoration-none color-texto-navbar" href="#">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav mx-2 d-none d-lg-flex flex-row">
                    <li class="nav-item dropdown align-self-center">
                        <a class="nav-link dropdown-toggle color-texto-navbar " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu background-dropdown">
                            <li><a class="dropdown-item background-dropdown-item" href="{{url('perfil')}}">Mi perfil</a></li>
                            <li><a class="dropdown-item background-dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item align-self-center mx-2">
                        <a class="text-decoration-none color-texto-navbar" href="{{url('carrito')}}"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="https://kit.fontawesome.com/003e8723d4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>