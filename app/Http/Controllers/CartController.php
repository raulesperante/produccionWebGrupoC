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
            'cart' => $cart,
        ]);
    }

    private function hasStock($request, $product)
    {
        if ($request->amountItems > $product->amount) {
            return false;
        }
        return true;
    }

    public function handleItem(Request $request)
    {
        $action = $request->input('submit_action');
        $cart = session('cart', []);
        $product = Product::find($request->id);
        if (!$product) return redirect()->back();

        if ($action === 'modify') {
            if ($this->hasStock($request, $product)) {
                $cart[$request->id]['amount'] = $request->amountItems;
                $request->session()->put('cart', $cart);
                return view('cart.index', [
                    'cart' => $cart,
                    'msg' => 'El producto ha sido modificado'
                ]);
            }
            return view('cart.index', [
                'cart' => $cart,
                'productIdError' => $request->id,
            ]);
        } elseif ($action === 'delete') {
            if (array_key_exists($product->id, $cart)) {
                unset($cart[$product->id]);
                $request->session()->put('cart', $cart);
                return view('cart.index', [
                    'cart' => $cart,
                    'msg' => 'El producto ha sido eliminado'
                ]);
            }
            return view('cart.index', [
                'cart' => $cart,
                'msgError' => 'El producto ha sido eliminado'
            ]);
        }
        return redirect()->back();
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

        if ($product) {
            $cart = $request->session()->get('cart', []);
            $cart[$product->id] = [
                'price' => $product->price,
                'name' => $product->name,
                'amount' => 1,
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
