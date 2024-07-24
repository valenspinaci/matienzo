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
                <a href="{{url('products')}}">
                    <button type="button" class="btn boton-cta col-6 col-md-4">
                        Ver todos
                    </button>
                </a>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-around col-12 col-lg-7 mb-3">
                @if ($products)
                    @foreach ($products as $product)
                        <div class="w-100 mx-1 px-1 mx-md-2 px-md-2 d-flex flex-column align-items-center justify-content-center">
                            <div class="col-8 col-lg-12 contenedor-oscuro d-flex flex-row justify-content-center rounded mb-2">
                                @if ($product->imagen1)
                                    <img class=" py-3 w-75" src="{{'storage/'.$product->imagen1}}" alt="">
                                @else
                                    <p>No hay imagen</p>
                                @endif
                            </div>
                            <h4 class="fw-semibold">{{ucfirst($product->name)}}</h4>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="h-100 p-5 d-flex flex-column justify-content-around contenedor-claro">
            <h2>
                Nosotros
            </h2>
            <div class="d-flex flex-column flex-lg-row gap-2 col-12">
                <div class="col-12 col-lg-6">
                    <h3>
                        ¿Quiénes somos?
                    </h3>
                    <p class="col-12">
                        Somos apasionados del mate, dedicados a llevar la autenticidad y la excelencia a cada sorbo. Nuestra misión es ofrecerte no solo productos de calidad, sino también una experiencia única y enriquecedora en cada momento compartido con nuestro mate. Descubre quiénes somos y únete a nuestra comunidad de amantes del mate.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <h3>
                        ¿Cómo surgimos?
                    </h3>
                    <p class="col-12">
                        Surgimos en 2023 a partir de nuestra pasión compartida por el mate y el deseo de ofrecer a otros esa misma experiencia enriquecedora. Inspirados en la tradición y la innovación, creamos este espacio para compartir lo mejor del mundo del mate. Nuestra historia es la búsqueda constante de calidad, autenticidad y conexión a través de esta bebida tan especial.
                    </p>
                </div>
            </div>
        </div>
@endsection
