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
        $cart = session('cart', []);

        return view('checkout.index', [
            'cart' => $cart,
            'total' => $this->calculateCostCart($cart)
        ]);
    }

    private function calculateCostCart($cart)
    {
        $total = 0;
        foreach ($cart as $productId => $productData) {
            $total += $productData['price'] * $productData['amount'];
        }
        $formatMoney = number_format($total, 2, ',', '.');
        return $formatMoney;
    }

    public function calculateShippingCost(Request $request)
    {
        // Simulo cálculo de costo de envío
        try {
            $postalCode = $request->input('postalCode');
            if ($postalCode >= 1000 && $postalCode <= 3000) {
                $response = ['cost' => 5000];
            } else if ($postalCode >= 3001 && $postalCode <= 5000) {
                $response = ['cost' => 8000];
            } else {
                $response = ['cost' => 12000];
            }
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
