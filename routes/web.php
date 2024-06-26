<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/productos', function () {
    $products = Product::all();
    return view('productos', compact('products'));
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

Route::resources([
    'users' => UserController::class,
    'products' => ProductController::class
]);