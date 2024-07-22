@extends('layouts.main')

@section('content')
        <!--Main-->
        <main class="d-flex flex-column">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="col-8 col-md-6 col-lg-5 my-5" src="{{asset('assets/images/foto-perfil.png')}}" alt="perfil">
        </div>
        <div class="col-12 d-flex flex-row justify-content-center align-items-center py-3 my-3">
            <div class="col-10 d-flex flex-column flex-md-row justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                    <div class="col-12">
                        <form action="{{route('users.updateProfile')}}" method="POST" class="col-12 d-flex flex-column align-items-center">
                            @csrf
                            
                            <div class="col-8 mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control inputs-background" name="name" id="name" value="{{old('name', ucfirst($user->name))}}">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control inputs-background" id="lastname" name="lastname" value="{{old('lastname', ucfirst($user->lastname))}}">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="email" class="form-label">Mail</label>
                                <input type="email" class="form-control inputs-background" id="email" name="email" value="{{old('email', ucfirst($user->email))}}">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="phone" class="form-control inputs-background" id="phone" name="phone" value="{{old('phone', ucfirst($user->phone))}}">
                            </div>

                            <button type="submit" class="btn boton-cta p-2 mt-4 col-8">Guardar</button>
                        </form>
                    </div>                
                </div>
            </div>
        </div>
@endsection
