<?php

namespace App\Http\Controllers;
use App\models\Categories;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    public function add(Request $request)
    {
        $product = Categories::findOrFail($request->id);

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']++;
        } else {
            $cart[$product->id] = [
                'id'    => $product->id,
                'name'  => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'qty'   => 1,
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'count' => count($cart)
        ]);
    }

    // Get cart items for modal
    public function items()
    {
        $cart = session()->get('cart', []);
        return view('cart.items', compact('cart'));
    }

    // Remove item from cart
    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        session()->put('cart', $cart);

        return response()->json();
    }
}
