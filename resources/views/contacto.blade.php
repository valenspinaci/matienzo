@extends('layouts.main')

@section('content')
<!--Main-->
<main class="d-flex flex-column">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <img class="col-8 my-5" src="{{asset('assets/images/foto-contacto.png')}}" alt="contacto">
    </div>
    <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-5">
        <form action="{{route('contact.submit')}}" method="POST" class="col-10 col-md-6 col-lg-4">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control inputs-background" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control inputs-background" id="lastname" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Mail</label>
                <input type="email" class="form-control inputs-background" id="mail" name="mail" required>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comentario</label>
                <textarea class="form-control inputs-background" id="comment" name="comment" rows="3" required></textarea>
            </div>
            @csrf
            <button type="submit" class="btn boton-cta p-2 w-100">Enviar</button>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @endsection