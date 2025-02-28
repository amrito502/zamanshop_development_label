<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Surfsidemedia\Shoppingcart\Cart;
use Surfsidemedia\Shoppingcart\Facades\Cart;
// use Cart;
class CartController extends Controller
{
    public function index(){
        $items = Cart::instance('cart')->content();
        return view('customer.compoents.cart',compact('items'));
    }

    public function add_to_cart(Request $request){
        $cart = Cart::instance('cart')->add(
            $request->id,
            $request->name,
            $request->quantity,
            $request->price,
        )->associate('App\Models\Product');
        return redirect()->back()->with('success','cart added');
    }
}
