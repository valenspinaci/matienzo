@extends('layouts.main')

@section('content')
    <!--Main-->
    <main class="d-flex flex-column align-items-center justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="col-8 my-5" src="{{asset('assets/images/foto-productos.png')}}" alt="">
        </div>
        <ul class="d-flex col-8  flex-row flex-wrap justify-content-around list-unstyled col-md-12 py-3 py-md-5">
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Todo</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Mates</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Bombillas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Termos</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Materas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Yerbas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="#">Accesorios</a>
            </li>
        </ul>

        <div class="col-12 d-flex flex-row justify-content-around px-4 px-md-5 py-2 py-md-5">
            <h4 class="col-6 col-md-8 fs-5">123 productos encontrados en "Todo"</h4>
            <div class="dropdown col-6 col-md-4 d-flex flex-row justify-content-end">
                <button class="btn color-texto-navbar dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar por
                </button>
                <ul class="dropdown-menu background-dropdown">
                    <li><a class="dropdown-item background-dropdown-item" href="#">menor precio</a></li>
                    <li><a class="dropdown-item background-dropdown-item" href="#">mayor precio</a></li>
                    <li><a class="dropdown-item background-dropdown-item" href="#">mayor relevancia</a></li>
                    <li><a class="dropdown-item background-dropdown-item" href="#">menor relevancia</a></li>
                </ul>
            </div>
        </div>

        <div class="d-flex col-11 row wrap pt-3 pb-5">
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                    <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                </div>
                <h4>Producto 1</h4>
                <p class="mb-0 w-75">Breve descripción del producto para introducir al cliente</p>
                <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                <p class="fs-4 fw-semibold">$1234</p>
                <button type="submit" class="btn boton-cta p-2 w-100"><a class="text-decoration-none color-texto-producto" href="{{route('detalle')}}">Ver producto</a></button>
            </div>
        </div>

        <div class="row w-100">
            <div class="contenedor-redes h-50 d-flex justify-content-center align-items-center gap-5 py-5">
                <i class="fa-brands fa-twitter fs-1 redes"></i>
                <i class="fa-brands fa-instagram fs-1 redes"></i>
                <i class="fa-brands fa-facebook fs-1 redes"></i>
            </div>
        </div>
    </main>

    <!--Footer-->
    <footer class="mt-4">
        <div class="mx-5">
            <div class="d-flex flex-column flex-md-row align-items-md-center">
                <h3 class="col-12 col-md-4 col-lg-4">
                    ¿Tenés alguna duda?
                </h3>
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center col-12 col-md-8 col-lg-8">
                    <p class="col-lg-4">Consultános por alguno de nuestros canales y nuestro equipo te asesorará de la mejor manera para mejorar tu experiencia mate.</p>
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
                        <li><a class="text-decoration-none color-texto-navbar" href="./index.html">Inicio</a></li>
                        <li><a class="text-decoration-none color-texto-navbar" href="./productos.html">Productos</a></li>
                        <li><a class="text-decoration-none color-texto-navbar" href="./contacto.html">Contacto</a></li>
                        <li><a class="text-decoration-none color-texto-navbar" href="./perfil.html">Mi perfil</a></li>
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
                        <li><a class="redes-footer" href="https://twitter.com/?lang=es"><i class="fa-brands fa-twitter redes-footer"></i></a></li>
                        <li><a class="redes-footer" href="https://www.instagram.com/"><i class="fa-brands fa-instagram redes-footer"></i></a></li>
                        <li><a class="redes-footer" href="https://www.facebook.com/?locale=es_LA"><i class="fa-brands fa-facebook redes-footer"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 mt-2">
                    <h4>
                        Ubicación
                    </h4>
                    <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3295534770873!2d-58.41413862403145!3d-34.59582725708191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca85feebf3a1%3A0x987885cb9893c9c7!2sGallo%201234%2C%20C1425EFB%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1714253041721!5m2!1ses!2sar" width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row gap-md-5 align-items-center justify-content-center mt-3">
            <p>Políticas de cookies</p>
            <p>Términos y condiciones</p>
            <p>Políticas de privacidad</p>
        </div>
    </footer>
@endsection
