@extends('layouts.main')

@section('content')
<main class="d-flex flex-column">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <img class="col-6" src="{{asset('assets/images/foto-carrito.png')}}" alt="">
    </div>
    <div class="w-100 px-5 my-5 d-flex flex-row justify-content-between gap-3">
        <div class="sector-ancho col-12 d-flex flex-column gap-3">
            @if ($items->isEmpty())
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-5">
                        <h3 class="text-center">Uh! El carrito esta vacio!</h3>
                        <p class="text-center">Recorre la tienda de Matienzo y seguramente la proxima vez que vengas vas a encontrar algo que te guste</p>
                        <a href="{{url('products')}}">
                            <button type="submit" class="btn boton-cta p-2 col-12">Ver productos</button>
                        </a>
                    </div>
                </div>
            @else
                <div class="d-flex flex-row col-9">
                    <div class="d-flex flex-column col-12">
                        @foreach($items as $item)
                        <div class="col-12 contenedor-oscuro rounded d-flex flex-row p-3">
                            <div class="d-flex flex-column align-items-between borde-producto-horizontal borde-producto-vertical col-12">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-row align-items-center col-4">                        
                                        <img src="{{ asset('assets/images/termo.png') }}" alt="" class="col-4 pt-2">
                                        <h4>{{ $item->product->name }}</h4>
                                    </div>
                                    <div class="d-flex flex-row align-items-center justify-content-end col-4 pe-3">
                                        <h4 class="ps-2">${{ $item->product->price }}</h4>
                                        <h5 class="ps-2">(x{{ $item->quantity }})</h5>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center col-12 pt-2 borde-producto-arriba pe-3">
                                    <h5 class="ps-4">Envío</h5>
                                    <h5>{{300/count($items)}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    <div class="sector-angosto col-3">
                        <div class="col-12 p-3 contenedor-oscuro rounded">
                            <h4>Resumen</h4>
                            <div class="borde-producto-horizontal pt-2 d-flex flex-row justify-content-between">
                                <p>Productos</p>
                                <p>${{ array_sum($items->map(fn($item) => $item->product->price * $item->quantity)->toArray()) }}</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p>Envío</p>
                                <p>300</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <h5>Total</h5>
                                <h5>${{ array_sum($items->map(fn($item) => $item->product->price * $item->quantity)->toArray()) + 300 }}</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-2 my-2">
                            <button type="button" class="btn boton-cta">Continuar compra</button>
                            <button type="button" class="btn boton-oscuro" onclick="event.preventDefault(); document.getElementById('clear-cart-form').submit();">Vaciar carrito</button>
                            <form id="clear-cart-form" action="{{ route('cart.clear') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</main>
@endsection
