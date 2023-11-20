<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('is_visible', true)->paginate(10);

        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:70',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'image' => 'required|mimes:jpg,png'
        ], [
            'nombre.required' => 'El nombre del producto es obligatorio'
        ]);

        $image_name = time() . '_' . $request->file('image')->getClientOriginalName();

        $image = $request->file('image')->storeAs('products', $image_name, 'public');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'amount' => $request->amount,
            'image' => $image
        ]);

        return redirect()
            ->route('products.index')
            ->with('status', 'El producto se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    private function getImage(Request $request, Product $product){
        if($request->image){
            $image_name = time() . '_' . $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->storeAs('products', $image_name, 'public');
            return $image;
        }
        return $product->image;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //dd($request->image);
        $request->validate([
            'name' => 'required|max:70',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'image' => 'mimes:jpg,png'
        ], [
            'nombre.required' => 'El nombre del producto es obligatorio'
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'amount' => $request->amount,
            'image' => $this->getImage($request, $product),
        ]);
        return redirect()
            ->route('products.index')
            ->with('status', 'El producto se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
