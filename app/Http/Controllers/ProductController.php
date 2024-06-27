<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('productos', compact('products'));
    }

    public function home(){
        $products = Product::select(DB::raw('DISTINCT category'), 'id', 'name', 'description', 'price', 'imagen1')
        ->inRandomOrder()
        ->groupBy('category', 'id', 'name', 'description', 'origin', 'price', 'stock', 'imagen1')
        ->take(4)
        ->get();

        return view('home', compact('products'));
    }

    public function sort($sort)
    {
        if(!in_array($sort, ['asc', 'desc'])){
            $sort = 'asc';
        }

        $products = Product::orderBy('price', $sort)->get();
        return view('productos', compact('products'));
    }

    public function showCategory($category)
    {
        $products = Product::where('category', $category)->get();
        return view('productos', compact('products'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('detalle', compact('product'));
    }

    public function admin(){
        $products = Product::all();
        return view('admin', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required|min:3|max:100',
            'category' => 'required',
            'price'=> 'required|numeric',
            'stock'=> 'required|integer',
            'origin'=> 'required|string',
            'colour'=> 'required|string',
            'imagen1'=> 'required|string',
            'description'=> 'required|string'
        ]);
        Product::create($product);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:100',
            'price'=> 'required|numeric',
            'stock'=> 'required|integer',
            'colour'=> 'required|string',
            'description'=> 'required|string'
        ]);

        $product->update($data);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
