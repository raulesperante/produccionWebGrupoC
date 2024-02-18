<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = session('cart', []);

        return view('cart.index', [
            'cart' => $cart
        ]);
    }

    public function handleItem(Request $request)
    {
        $action = $request->input('submit_action');

        // Ahora $action contiene el valor del botón presionado
    
        if ($action === 'modify') {
            dd($action);
            // Lógica para la acción de modificar
        } elseif ($action === 'delete') {
            dd($action);
            // Lógica para la acción de eliminar
        } 
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
        $product = Product::find($request->id);
        
        if($product){
            $cart = $request->session()->get('cart', []);
            $cart[$product->id] = [
                'price' => $product->price,   
                'name' => $product->name,   
                'amount' => $product->amount,   
            ];
            $request->session()->put('cart', $cart);
            return redirect(route('cart.index'));
        }
        return redirect()->back();
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
