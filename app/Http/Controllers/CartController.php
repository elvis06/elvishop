<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart', array());
    }
    // Show cart
    public function show(){
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('tienda.cart', compact('cart', 'total'));
    }
    // Add item
    public function add(Product $product){
        $cart = \Session::get('cart');
        $product->cant = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    // Delete item
    public function delete(Product $product){
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    // Update item
    public function update(Product $product, $cant){
        $cart = \Session::get('cart');
        $cart[$product->slug]->cant = $cant;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    // Trash cart
    public function trash(){
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    // Total
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->precio_actual * $item->cant;
        }
        return $total;
    }
}
