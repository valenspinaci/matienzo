@extends('layouts.main')

@section('content')
<!--Main-->
<main class="d-flex flex-column">
    <div class="admin">
        <div class="w-100 p-3 contenedor-oscuro rounded">
            <div class="d-flex flex-row justify-content-between">
                <h4>Administracion de Productos</h4>
                <a href="{{route('products.create')}}"><button type="button" class="btn boton-cta"><span
                            class="fw-bold">+</span> Agregar
                        producto</button></a>
            </div>

            @if ($products)
                @foreach ($products as $product)
                    <div class="accordion col-12 mt-3" id="accordion{{$product->id}}">
                        <div class="accordion-item bg-transparent color-texto-admin">
                            <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button bg-transparent collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{$product->id}}" aria-expanded="false"
                                    aria-controls="collapse{{$product->id}}">
                                    <div class=" col-8 pt-2 d-flex flex-row gap-4 color-texto-admin align-items-center">
                                        <img class="col-4 col-md-2" src="{{asset('assets/images/termo.png')}}" alt="">
                                        <p class="fw-bold">{{ucfirst($product->name)}}</p>
                                        <p>${{$product->price}}</p>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse{{$product->id}}" class="accordion-collapse collapse"
                                data-bs-parent="#accordion{{$product->id}}">
                                <div class="accordion-body d-flex flex-column flex-md-row align-items-center col-12 col-md-8">
                                    <form action="{{route('products.update', $product)}}" method="post" class="col-12 d-flex flex-column flex-md-row align-items-center">
                                        <div class="col-12 col-md-6">
                                            <div class="col-12 col-md-10 mb-3">
                                                <label for="name" class="form-label">Nombre</label>
                                                <input type="text" class="form-control inputs-background" id="name" name="name"
                                                    value="{{old('name', $product->name)}}">
                                            </div>
                                            <div class="col-12 col-md-10 mb-3">
                                                <label for="price" class="form-label">Precio</label>
                                                <input type="number" class="form-control inputs-background" id="price" name="price"
                                                    value="{{old('price', $product->price)}}">
                                            </div>
                                            <div class="col-12 col-md-10 mb-3">
                                                <label for="colour" class="form-label">Color</label>
                                                <input type="text" class="form-control inputs-background" id="colour" name="colour"
                                                    value="{{old('colour', $product->colour)}}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="col-12 col-md-10 mb-3">
                                                <label for="description" class="form-label">Descripcion</label>
                                                <textarea class="form-control inputs-background" id="description" name="description"
                                                    rows="3">{{old('description', $product->description)}}</textarea>
                                            </div>
                                            <div class="col-12 col-md-10 mb-3">
                                                <label for="stock" class="form-label">Stock</label>
                                                <input type="number" class="form-control inputs-background" id="stock" name="stock"
                                                    value="{{old('stock', $product->stock)}}">
                                            </div>
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn boton-cta col-12 col-md-10">Guardar
                                                cambios</button>
                                        </div>
                                    </form>
                                    <div class="col-12 col-md-4">
                                        <div class="d-flex flex-column gap-2 my-2">
                                            <form class="col-12" action="{{route('products.destroy', $product->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn boton-oscuro col-12">Eliminar producto</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
@endsection