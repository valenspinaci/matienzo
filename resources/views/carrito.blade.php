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
@endsection
