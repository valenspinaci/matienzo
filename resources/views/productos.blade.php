@extends('layouts.main')

@section('content')
    <!--Main-->
    <main class="d-flex flex-column align-items-center justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="col-8 my-5" src="{{asset('assets/images/foto-productos.png')}}" alt="">
        </div>
        <ul class="d-flex col-8  flex-row flex-wrap justify-content-around list-unstyled col-md-12 py-3 py-md-5">
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{url('products')}}">Todo</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'mate')}}">Mates</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'bombilla')}}">Bombillas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'termo')}}">Termos</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'matera')}}">Materas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'yerba')}}">Yerbas</a>
            </li>
            <li>
                <a class="text-decoration-none color-texto-navbar" href="{{route('category.show', 'accesorio')}}">Accesorios</a>
            </li>
        </ul>

        <div class="col-12 d-flex flex-row justify-content-around px-4 px-md-5 py-2 py-md-5">
            @if ($products->count()>1)
                <h4 class="col-6 col-md-8 fs-5">{{$products->count()}} productos encontrados</h4>
            @elseif ($products->count()==1)
                <h4 class="col-6 col-md-8 fs-5">Un producto encontrado</h4>
            @else
                <h4 class="col-6 col-md-8 fs-5">No hay productos</h4>
            @endif

            <div class="dropdown col-6 col-md-4 d-flex flex-row justify-content-end">
                <button class="btn color-texto-navbar dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar por
                </button>
                <ul class="dropdown-menu background-dropdown">
                    <li><a class="dropdown-item background-dropdown-item" href="{{route('products.sort', ['sort' => 'asc'])}}">menor precio</a></li>
                    <li><a class="dropdown-item background-dropdown-item" href="{{route('products.sort', ['sort' => 'desc'])}}">mayor precio</a></li>
                </ul>
            </div>
        </div>

        <div class="d-flex col-11 row wrap pt-3 pb-5">

            @if ($products)
                @foreach ($products as $product)
                    <div class="h-auto col-12 col-md-4 col-lg-3 mb-4">
                        <div class="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                            <img class="mt-2 py-3 w-75" src="{{asset('assets/images/termo.png')}}" alt="">
                        </div>
                        <h4>{{$product->name}}</h4>
                        <p class="mb-0 w-75 card-text">{{$product->description}}</p>
                        <img class="w-25" src="{{asset('assets/images/5estrellas.png')}}" alt="">
                        <p class="fs-4 fw-semibold">${{$product->price}}</p>
                        <a class="text-decoration-none color-texto-producto" href="{{route('product.detail', $product->id)}}"><button type="submit" class="btn boton-cta p-2 w-100">Ver producto</button></a>
                    </div>
                @endforeach
            @endif

            @if ($products->count()==0)
                <div class="col-12 col-md-4 col-lg-3 mx-auto d-flex flex-column align-items-center justify-content-center">
                    <h3>¡Lo sentimos!</h3>
                    <p>No existen productos de esta categoria</p>
                    <a class="text-decoration-none color-texto-producto" href="{{url('products')}}"><button type="submit" class="btn boton-cta p-2 w-100">Ver otros</button></a>
                </div>
            @endif
        </div>
    </main>
@endsection
