<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', [ProductController::class, 'home'])->name('/');
Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/{category}', [ProductController::class, 'showCategory'])->name('category.show');
Route::get('/producto/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/ordenar/{sort}', [ProductController::class, 'sort'])->name('products.sort');
Route::get('/admin', [ProductController::class, 'admin'])->name('products.admin');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::resources([
    'users' => UserController::class,
    'products' => ProductController::class
]);
