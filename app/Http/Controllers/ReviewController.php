<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5'
        ]);

        $review = new Review([
            'comment' => $validated['comment'],
            'rating' => $validated['rating']
        ]);
        
        $review->product_id = $validated['product_id'];

        $review->save();

        $productId = $review->product_id;

        return redirect()->route('product.detail', ['id' => $productId])->with('success', 'Opinión enviada con éxito');
    }
}
