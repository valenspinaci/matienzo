@extends('layouts.main')

@section('content')
    <!--Main-->
    <main class="d-flex flex-column">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="col-6" src="{{asset('assets/images/foto-carrito.png')}}" alt="">
        </div>
        <!--Sector ancho productos-->
        <div class="w-100 px-5 my-5 d-flex flex-row justify-content-between gap-3">
            <div class="sector-ancho w-75 d-flex flex-column gap-3">

                <!--Producto 1-->
                <div class="w-100 contenedor-oscuro rounded d-flex flex-row p-3">
                    <div class="d-flex flex-column align-items-center borde-producto-vertical">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row align-items-center col-4">                        
                                <img src="{{asset('assets/images/termo.png')}}" alt="" class="col-4">
                                <h4>Producto 1</h4>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-end col-4 pe-3">
                                <select class="form-select form-select-sm select-color w-50" aria-label="Small select example">
                                    <option selected>Cantidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <h4 class="ps-2">$1000</h4>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center col-12 pt-2 borde-producto-horizontal pe-3">
                            <h5 class="ps-4">Envío</h5>
                            <h5>$100</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-2 ps-4">
                        <h3>
                            $1100
                        </h3>
                    </div>
                </div>

                <!--Producto 2-->
                <div class="w-100 contenedor-oscuro rounded d-flex flex-row p-3">
                    <div class="d-flex flex-column align-items-center borde-producto-vertical">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row align-items-center col-4">                        
                                <img src="{{asset('assets/images/termo.png')}}" alt="" class="col-4">
                                <h4>Producto 1</h4>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-end col-4 pe-3">
                                <select class="form-select form-select-sm select-color w-50" aria-label="Small select example">
                                    <option selected>Cantidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <h4 class="ps-2">$1000</h4>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center col-12 pt-2 borde-producto-horizontal pe-3">
                            <h5 class="ps-4">Envío</h5>
                            <h5>$100</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-2 ps-4">
                        <h3>
                            $1100
                        </h3>
                    </div>
                </div>

                <!--Producto 3-->
                <div class="w-100 contenedor-oscuro rounded d-flex flex-row p-3">
                    <div class="d-flex flex-column align-items-center borde-producto-vertical">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row align-items-center col-4">                        
                                <img src="{{asset('assets/images/termo.png')}}" alt="" class="col-4">
                                <h4>Producto 1</h4>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-end col-4 pe-3">
                                <select class="form-select form-select-sm select-color w-50" aria-label="Small select example">
                                    <option selected>Cantidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <h4 class="ps-2">$1000</h4>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center col-12 pt-2 borde-producto-horizontal pe-3">
                            <h5 class="ps-4">Envío</h5>
                            <h5>$100</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-2 ps-4">
                        <h3>
                            $1100
                        </h3>
                    </div>
                </div>
            </div>

            <!--Sector angosto resumen-->
            <div class="sector-angosto w-25">
                <div class="w-100 p-3 contenedor-oscuro rounded">
                    <h4>Resumen</h4>
                    <div class="borde-producto-horizontal pt-2 d-flex flex-row justify-content-between">
                        <p>Productos (2)</p>
                        <p>$3500</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <p>Envío</p>
                        <p>$300</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <h5>Total</h5>
                        <h5>$3800</h5>
                    </div>
                </div>
                <div class="d-flex flex-column gap-2 my-2">
                    <button type="button" class="btn boton-cta">Continuar compra</button>
                    <button type="button" class="btn boton-oscuro">Vaciar carrito</button>
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