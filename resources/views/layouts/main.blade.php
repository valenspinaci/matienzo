<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>Matienzo</title>
</head>

<body>
    <!--Header-->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-transparent">
            <div class="container-fluid mx-3">
                <a class="navbar-brand text-decoration-none color-texto-navbar" href="{{route('/')}}">matienzo</a>
                <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="text-decoration-none color-texto-navbar" aria-current="page"
                                href="{{url('/')}}">Inicio</a>
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
                            <a class="text-decoration-none color-texto-navbar"
                                href="{{url('admin')}}">Administración</a>
                        </li>
                        <li class="nav-item mx-2 d-lg-none">
                            <a class="text-decoration-none color-texto-navbar" href="#">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav mx-2 d-none d-lg-flex flex-row">
                    <li class="nav-item dropdown align-self-center">
                        <a class="nav-link dropdown-toggle color-texto-navbar " href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu background-dropdown">
                            <li><a class="dropdown-item background-dropdown-item" href="{{url('perfil')}}">Mi perfil</a>
                            </li>
                            <li><a class="dropdown-item background-dropdown-item"
                                    href="{{url('admin')}}">Administración</a></li>
                            <li><a class="dropdown-item background-dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item align-self-center mx-2">
                        <a class="text-decoration-none color-texto-navbar" href="{{url('carrito')}}"><i
                                class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Contenido-->
    @yield('content')

    <div class="row w-100">
            <div class="contenedor-redes h-50 d-flex justify-content-center align-items-center gap-5 py-5">
                <i class="fa-brands fa-twitter fs-1 redes"></i>
                <i class="fa-brands fa-instagram fs-1 redes"></i>
                <i class="fa-brands fa-facebook fs-1 redes"></i>
            </div>
        </div>

    <!--Footer-->
    <footer class="mt-4">
        <div class="mx-5">
            <div class="d-flex flex-column flex-md-row align-items-md-center">
                <h3 class="col-12 col-md-4 col-lg-4">
                    ¿Tenés alguna duda?
                </h3>
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center col-12 col-md-8 col-lg-8">
                    <p class="col-lg-4">Consultános por alguno de nuestros canales y nuestro equipo te asesorará de la
                        mejor
                        manera para mejorar tu experiencia mate.</p>
                    <button type="button" class="btn boton-cta boton-footer col-12 col-md-4">Contactanos</button>
                </div>
            </div>
            <hr>
            <div class="col-12 d-flex flex-row flex-wrap col-12">
                <div class="col-6 col-md-4">
                    <h4>
                        Links
                    </h4>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a class="text-decoration-none color-texto-navbar" href="{{url('/')}}">Inicio</a></li>
                        <li><a class="text-decoration-none color-texto-navbar" href="{{url('products')}}">Productos</a>
                        </li>
                        <li><a class="text-decoration-none color-texto-navbar" href="{{url('contacto')}}">Contacto</a></li>
                        <li><a class="text-decoration-none color-texto-navbar" href="{{url('perfil')}}">Mi perfil</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h4>
                        Datos
                    </h4>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li>Email: matienzo@gmail.com</li>
                        <li>Teléfono: +54 9 11 1234 5678</li>
                        <li>Dirección: Gallo 1234, CABA, Buenos Aires</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 px-md-3">
                    <h4>
                        Redes Sociales
                    </h4>
                    <ul class="d-flex flex-row list-unstyled gap-4 justify-content-between col-lg-8">
                        <li><a class="redes-footer" href="https://twitter.com/?lang=es"><i
                                    class="fa-brands fa-twitter redes-footer"></i></a></li>
                        <li><a class="redes-footer" href="https://www.instagram.com/"><i
                                    class="fa-brands fa-instagram redes-footer"></i></a></li>
                        <li><a class="redes-footer" href="https://www.facebook.com/?locale=es_LA"><i
                                    class="fa-brands fa-facebook redes-footer"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 mt-2">
                    <h4>
                        Ubicación
                    </h4>
                    <iframe class="col-12"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3295534770873!2d-58.41413862403145!3d-34.59582725708191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca85feebf3a1%3A0x987885cb9893c9c7!2sGallo%201234%2C%20C1425EFB%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1714253041721!5m2!1ses!2sar"
                        width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row gap-md-5 align-items-center justify-content-center mt-3">
            <p>Políticas de cookies</p>
            <p>Términos y condiciones</p>
            <p>Políticas de privacidad</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/003e8723d4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>