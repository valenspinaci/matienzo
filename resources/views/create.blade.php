@extends('layouts.main')

@section('content')
<!--Main-->
<main class="d-flex flex-column">
    <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-5 mt-3">
        <h1>Nuevo producto</h1>
        <form action="{{route('products.store')}}" class="col-10 col-md-6 col-lg-4 mt-3" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de producto:</label>
                <input type="text" name="name" class="form-control inputs-background" id="name" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria:</label>
                <select class="form-select inputs-background" name="category" aria-label="Default select example"
                    id="category" required>
                    <option selected>Selecciona una categoria</option>
                    <option value="mate">Mate</option>
                    <option value="termo">Termo</option>
                    <option value="matera">Matera</option>
                    <option value="bombilla">Bombilla</option>
                    <option value="yerba">Yerba</option>
                    <option value="accesorio">Accesorio</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" name="price" class="form-control inputs-background" id="price" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" name="stock" class="form-control inputs-background" id="stock" required>
            </div>
            <div class="mb-3">
                <label for="origin" class="form-label">Origen:</label>
                <input type="text" name="origin" class="form-control inputs-background" id="origin" required>
            </div>
            <div class="mb-3">
                <label for="colour" class="form-label">Color:</label>
                <input type="text" name="colour" class="form-control inputs-background" id="colour" required>
            </div>
            <div class="mb-3">
                <label for="imagen1" class="form-label">Imagen:</label>
                <input type="text" name="imagen1" class="form-control inputs-background" id="imagen1" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripcion:</label>
                <textarea class="form-control inputs-background" name="description" id="description"
                    rows="3"></textarea>
            </div>
            @csrf
            <button type="submit" class="btn boton-cta p-2 w-100">Agregar</button>
        </form>
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
            <div
                class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center col-12 col-md-8 col-lg-8">
                <p class="col-lg-4">Consultános por alguno de nuestros canales y nuestro equipo te asesorará de la mejor
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
@endsection