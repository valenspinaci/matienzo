@extends('layouts.main')

@section('content')
<!--Main-->
<main class="d-flex flex-column">
    <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-5 mt-3">
        <h1>Nuevo producto</h1>
        <form action="{{route('products.store')}}" class="col-10 col-md-6 col-lg-4 mt-3" method="POST" enctype="multipart/form-data">
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
                <input class="form-control inputs-background" type="file" id="imagen1" name="imagen1" required>
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
@endsection