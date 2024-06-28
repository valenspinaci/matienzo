@extends('layouts.main')

@section('content')
<!--Main-->
<main class="mt-4">
    <div class="col-12 d-none d-lg-flex flex-row justify-content-between">
        <div class="col-6 d-flex justify-content-center">
            <p class="col-9">Todos/{{ucfirst($product->category)}}</p>
        </div>
        <div class="d-flex flex-row col-6">
            <p class="col-6">ID Producto: {{$product->id}}</p>
            <p class="col-6">Origen: {{$product->origin}}</p>
        </div>
    </div>

    <div class="d-lg-none col-12 d-flex flex-column align-items-center my-2">
        <h2 class="col-9">{{ucfirst($product->name)}}</h2>
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
            <h2 class="d-none d-lg-flex">{{ucfirst($product->name)}}</h2>
            <div class="d-flex flex-row col-9">
                <div class="d-flex flex-row col-6 col-md-9">
                    <i class="fa-solid fa-star me-1"></i>
                    <p class="col-3 fw-semibold">5.0</p>
                </div>
                <p class="col-6 col-md-3">25 opiniones</p>
            </div>
            <div class="d-flex flex-row col-9">
                <p class="col-6 col-md-9">15 vendidos</p>
                <p class="col-6 col-md-3 text-alerta">
                    @if ($product->stock > 0)
                        En stock
                    @else
                        No hay stock
                    @endif
                </p>
            </div>
            <div class="d-flex flex-column col-9 align-items-center justify-content-center">
                <p class="col-12">Color: <span class="fw-semibold">Marron</span></p>
            </div>
            <div class="d-flex flex-column col-9 justify-content-center">
                <p class="col-12">Descripcion:</p>
                <p class="fw-bold">{{$product->description}}</p>
            </div>
            <div class="d-flex flex-column mt-2 col-3">
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad:</label>
                    <input name="cantidad" type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="Quedan {{$product->stock}} unidades">
                </div>
            </div>
            <div class="col-9 mt-2 mb-5">
                <div class="col-12 d-flex flex-row gap-2">
                    <button type="submit" class="btn boton-cta p-2 col-6"><i
                            class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
                    <button type="submit" class="btn boton-cta p-2 col-6">Comprar ahora</button>
                </div>
            </div>
        </div>
    </div>
@endsection