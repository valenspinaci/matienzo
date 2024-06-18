<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/detalle', function () {
    return view('detalle');
})->name('detalle');

