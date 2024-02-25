<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::with('category')->where('is_visible', true)->paginate(10);
        //return view('products.index', [
        //    'products' => $products
        //]);
        return view('checkout.index');
    }

    public function calculateShippingCost(Request $request)
    {
        // Lógica para procesar datos de la solicitud POST
        $datos = $request->all();

        // Realizar alguna lógica con los datos y devolver una respuesta
        $response = ['cost' => 1500];

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
