<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
 
class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = Cart::where('email', $request->user()->email)->first();
        return $cart;
    }

    public function show(Cart $cart)
    {
        return $cart;
    }

    public function store(Request $request)
    {
        $cart = Cart::create($request->all());

        return response()->json($cart, 201);
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->update($request->all());

        return response()->json($cart, 200);
    }

    public function delete(Cart $cart)
    {
        $cart->delete();

        return response()->json(null, 204);
    }
}