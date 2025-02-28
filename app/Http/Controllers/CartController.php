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

    public function increase_cart_quantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back()->with('success','cart updated');
    }

    public function decrease_cart_quantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back()->with('success','cart updated');
    }

    public function remove_cart_item($rowId){
        Cart::instance('cart')->remove($rowId);
        return redirect()->back()->with('success','cart removed');
    }

    public function destroy_cart(){
        Cart::instance('cart')->destroy();
        return redirect()->back()->with('success','cart destroyed');
    }
}
