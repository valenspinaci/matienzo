@extends('layouts.main')

@section('content')
    <!--Main-->
    <main class="d-flex flex-column">

        <div class="vh-100 w-100 d-flex flex-column justify-content-center align-items-center">    
            <div class="row h-75 col-12 d-flex justify-content-center align-items-center">
                <div class="flex-column col-12 col-md-10 col-lg-9 d-flex justify-content-center align-items-center">
                    <img class="col-12 col-lg-10" src="{{asset('assets/images/foto-inicio.png')}}" alt="inicio">
                    <button type="submit" class="btn boton-cta my-5 p-2 col-6 col-md-4 col-lg-2 "><a class="text-decoration-none color-texto-producto" href="{{route('productos')}}">Comprar</a></button>
                </div>
            </div>
        </div>


        <div class="contenedor-oscuro h-100 d-flex flex-column flex-lg-row justify-content-around px-4 col-12">
            <div class="my-0 pb-5 col-12 col-lg-4 d-flex flex-column justify-content-around">
                <h2>
                    Nuestros productos en tendencia
                </h2>
                <p>
                    Encuentra los diseños mas innovadores, materiales de alta calidad y accesorios imprescindibles para la experiencia mate. Descubre lo mejor del mundo del mate en un lugar.
                </p>
                <button type="button" class="btn boton-cta col-6 col-md-4">
                    Ver todos
                </button>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-around col-12 col-lg-8">
                <div class="w-100 mx-1 px-1 mx-md-2 px-md-2">
                    <div class="w-100 contenedor-oscuro d-flex flex-row justify-content-center rounded mb-2">
                        <img class=" py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                    </div>
                    <h4>Producto 1</h4>
                    <p class="mb-0">Breve descripción del producto para introducir al cliente</p>
                    <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                    <p class="fs-4 fw-semibold">$1234</p>
                </div>
    
                <div class="w-100 mx-2 px-2">
                    <div class="w-100 contenedor-oscuro d-flex flex-row justify-content-center rounded mb-2">
                        <img class=" py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                    </div>
                    <h4>Producto 1</h4>
                    <p class="mb-0">Breve descripción del producto para introducir al cliente</p>
                    <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                    <p class="fs-4 fw-semibold">$1234</p>
                </div>
    
                <div class="w-100 mx-2 px-2">
                    <div class="w-100 contenedor-oscuro d-flex flex-row justify-content-center rounded mb-2">
                        <img class=" py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                    </div>
                    <h4>Producto 1</h4>
                    <p class="mb-0">Breve descripción del producto para introducir al cliente</p>
                    <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                    <p class="fs-4 fw-semibold">$1234</p>
                </div>
    
                <div class="w-100 mx-2 px-2">
                    <div class="w-100 contenedor-oscuro d-flex flex-row justify-content-center rounded mb-2">
                        <img class=" py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                    </div>
                    <h4>Producto 1</h4>
                    <p class="mb-0">Breve descripción del producto para introducir al cliente</p>
                    <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                    <p class="fs-4 fw-semibold">$1234</p>
                </div>
            </div>
        </div>

        <div class="h-100 p-5 d-flex flex-column justify-content-around contenedor-claro">
            <h2>
                Nosotros
            </h2>
            <div class="d-flex flex-column flex-lg-row col-12">
                <div class="col-12 col-lg-6">
                    <h3>
                        ¿Quiénes somos?
                    </h3>
                    <p class="col-12 px-lg-2">
                        Somos apasionados del mate, dedicados a llevar la autenticidad y la excelencia a cada sorbo. Nuestra misión es ofrecerte no solo productos de calidad, sino también una experiencia única y enriquecedora en cada momento compartido con nuestro mate. Descubre quiénes somos y únete a nuestra comunidad de amantes del mate.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <h3>
                        ¿Cómo surgimos?
                    </h3>
                    <p class="col-12 px-lg-2">
                        Surgimos en 2023 a partir de nuestra pasión compartida por el mate y el deseo de ofrecer a otros esa misma experiencia enriquecedora. Inspirados en la tradición y la innovación, creamos este espacio para compartir lo mejor del mundo del mate. Nuestra historia es la búsqueda constante de calidad, autenticidad y conexión a través de esta bebida tan especial.
                    </p>
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
