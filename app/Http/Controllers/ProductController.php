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

        return view('inicio', compact('products'));
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
        $reviews = $product->reviews;
        $puntajePromedio = $reviews->avg('rating');
        return view('detalle', compact('product', 'puntajePromedio'));
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
        // Validar los datos del producto
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:100',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'origin' => 'required|string',
            'colour' => 'required|string',
            'imagen1' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'description' => 'required|string|max:500'
        ]);
    
        // Crear el producto
        $product = Product::create([
            'name' => $validatedData['name'],
            'category' => $validatedData['category'],
            'price' => $validatedData['price'],
            'stock' => $validatedData['stock'],
            'origin' => $validatedData['origin'],
            'colour' => $validatedData['colour'],
            'description' => $validatedData['description'],
            'imagen1' => $request->hasFile('imagen1') ? $request->file('imagen1')->store('products', 'public') : null,
        ]);
    
        // Redirigir a la lista de productos
        return redirect()->route('products.index');
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
