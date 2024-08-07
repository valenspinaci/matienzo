<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home'])->name('/');
Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::get('/productos/{category}', [ProductController::class, 'showCategory'])->name('category.show');
Route::get('/producto/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/ordenar/{sort}', [ProductController::class, 'sort'])->name('products.sort');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::resources([
    'users' => UserController::class,
    'products' => ProductController::class
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [ProductController::class, 'admin'])->name('products.admin');
    Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');

    Route::post('/carrito', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/carrito', [CartController::class, 'viewCart'])->name('carrito');
    Route::post('/carrito/vaciar', [CartController::class, 'clearCart'])->name('cart.clear');
    Route::post('/cart/buy', [CartController::class, 'buy'])->name('cart.buy');

    Route::get('/perfil', [UserController::class, 'profile'])->name('perfil');
    Route::post('/perfil/update', [UserController::class, 'updateProfile'])->name('users.updateProfile');

    Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});