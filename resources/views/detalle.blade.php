@extends('layouts.main')

@section('content')
    <!--Main-->
    <main class="mt-4">
        <div class="col-12 d-none d-lg-flex flex-row justify-content-between">
            <div class="col-6 d-flex justify-content-center">
                <p class="col-9">Todos/Termos/Stanley</p>
            </div>
            <div class="d-flex flex-row col-6">
                <p class="col-6">ID Producto: aDfg35Op</p>
                <p class="col-6">Origen: Corrientes</p>
            </div>
        </div>

        <div class="d-lg-none col-12 d-flex flex-column align-items-center my-2">
            <h2 class="col-9">Termo Stanley 1lt</h2>
        </div>

        <div class="d-flex flex-column flex-lg-row">
            <div class="col-12 col-lg-6 d-flex flex-column flex-lg-row-reverse align-items-center">
                <img class="col-12 col-lg-10" src="{{asset('assets/images/termo.png')}}" alt="Principal-Producto">
                <div class="col-12 col-lg-2 d-flex flex-row flex-lg-column justify-content-around">
                    <img class="col-4 col-lg-12" src="{{asset('assets/images/termo.png')}}" alt="Producto2">
                    <img class="col-4 col-lg-12" src="{{asset('assets/images/termo.png')}}" alt="Producto3">
                    <img class="col-4 col-lg-12" src="{{asset('assets/images/termo.png')}}" alt="Producto4">
                </div>
            </div>
    
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start">
                <h2 class="d-none d-lg-flex">Termo Stanley 1lt</h2>
                <div class="d-flex flex-row col-9">
                    <div class="d-flex flex-row col-6 col-md-9">
                        <i class="fa-solid fa-star me-1"></i>
                        <p class="col-3 fw-semibold">5.0</p>
                    </div>
                    <p class="col-6 col-md-3">25 opiniones</p>
                </div>
                <div class="d-flex flex-row col-9">
                    <p class="col-6 col-md-9">15 vendidos</p>
                    <p class="col-6 col-md-3 text-alerta">En stock</p>
                </div>
                <div class="d-flex flex-column col-9 align-items-center justify-content-center">
                    <p class="col-12">Color: <span class="fw-semibold">Marron</span></p>
                    <div class="col-12 d-flex flex-row gap-1">
                        <button type="submit" class="btn boton-cta col-4">Marron</button>
                        <button type="submit" class="btn boton-cta col-4">Negro</button>
                        <button type="submit" class="btn boton-cta col-4">Blanco</button>
                    </div>
                </div>
                <div class="d-flex flex-column mt-2 col-9">
                    <p>Cantidad:</p>
                    <div class="d-flex flex-row col-12 gap-1">
                        <button type="submit" class="btn boton-cta p-2 col-4">-</button>
                        <p class="col-4 d-block text-center p-2 fw-semibold fs-5">1</p>
                        <button type="submit" class="btn boton-cta p-2 col-4">+</button>
                    </div>
                </div>
                <div class="col-9 mt-2 mb-5">
                    <div class="col-12 d-flex flex-row gap-2">
                        <button type="submit" class="btn boton-cta p-2 col-6"><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
                        <button type="submit" class="btn boton-cta p-2 col-6">Comprar ahora</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedor-redes h-50 d-flex justify-content-center align-items-center gap-5 py-5">
            <i class="fa-brands fa-twitter fs-1 redes"></i>
            <i class="fa-brands fa-instagram fs-1 redes"></i>
            <i class="fa-brands fa-facebook fs-1 redes"></i>
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
