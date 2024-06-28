@extends('layouts.main')

@section('content')
        <!--Main-->
        <main class="d-flex flex-column">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img class="col-8 col-md-6 col-lg-5 my-5" src="{{asset('assets/images/foto-perfil.png')}}" alt="perfil">
        </div>
        <div class="col-12 d-flex flex-row justify-content-center align-items-center py-3 my-3">
            <div class="col-10 d-flex flex-column flex-md-row justify-content-center align-items-center">
                <div class="col-6 col-md-2">
                    <img class="w-100 rounded-circle" src="{{asset('assets/images/avatar.webp')}}" alt="test">
                </div>
                <div class="col-12 col-md-5">
                    <div class="col-12">
                        <form class="col-12 d-flex flex-column align-items-center">
                            <div class="col-8 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control inputs-background" id="nombre">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control inputs-background" id="apellido">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="mail" class="form-label">Mail</label>
                                <input type="email" class="form-control inputs-background" id="mail">
                            </div>
                        </form>
                    </div>                
                </div>
                <div class="col-12 col-md-5">
                    <div class="col-12">
                        <form class="col-12 d-flex flex-column align-items-center">
                            <div class="col-8 mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="phone" class="form-control inputs-background" id="telefono">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select class="form-select inputs-background" aria-label="sexo" id="sexo">
                                    <option selected></option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Otro</option>
                                    <option value="4">Prefiero no decir</option>
                                </select>
                            </div>
                            <button type="submit" class="btn boton-cta p-2 mt-4 col-8">Guardar</button>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
@endsection
