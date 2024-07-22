<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $user = auth()->user();
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function viewCart()
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();
        $items = $cart ? $cart->items : collect();

        return view('carrito', compact('items'));
    }

    public function clearCart()
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();

        if ($cart) {
            $cart->items()->delete();
        }

        return redirect()->route('carrito')->with('success', 'Carrito vaciado');
    }
}
