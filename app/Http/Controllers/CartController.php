<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Surfsidemedia\Shoppingcart\Cart;
use Surfsidemedia\Shoppingcart\Facades\Cart;
// use Cart;
class CartController extends Controller
{
    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('customer.compoents.cart', compact('items'));
    }

    public function add_to_cart(Request $request)
    {
        $cart = Cart::instance('cart')->add(
            $request->id,
            $request->name,
            $request->quantity,
            $request->price,
        )->associate('App\Models\Product');
        return redirect()->back()->with('success', 'cart added');
    }

    public function increase_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back()->with('success', 'cart updated');
    }

    public function decrease_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back()->with('success', 'cart updated');
    }

    public function remove_cart_item($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back()->with('success', 'cart removed');
    }

    public function destroy_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back()->with('success', 'cart destroyed');
    }



    public function apply_coupon_code(Request $request)
    {
        $coupon_code = $request->coupon_code;

        if (empty($coupon_code)) {
            return redirect()->back()->with('error', 'Invalid coupon code');
        }

        $coupon = Coupon::where('code', $coupon_code)
            ->where('expiry_date', '>=', Carbon::today())
            ->where('status', 'active')
            ->where('cart_value', '<=', (float) Cart::instance('cart')->subtotal())
            ->first();

        if (!$coupon) {
            return redirect()->back()->with('error', 'Invalid or expired coupon code');
        }

        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
        ]);
        $this->calculate_discount();
        return redirect()->back()->with('success', 'Coupon applied successfully');
    }



    public function calculate_discount(){
        $discount = 0;

        if(Session::has('coupon')){
            $discount = Session::get('coupon')['value'];
        }
        else{
            $discount = (Cart::instance('cart')->subtotal() * Session::get('coupon')['value']) / 100;
        }

        $subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $discount;
        $taxAfterDiscount = ($subtotalAfterDiscount * config('cart.tax')) / 100;
        $totalAfterDiscount = $subtotalAfterDiscount + $taxAfterDiscount;

        Session::put('discounts',[
            'discount' => number_format(floatval($discount),2,'.',''),
            'subtotal' => number_format(floatval($subtotalAfterDiscount),2,'.',''),
            'tax' => number_format(floatval($taxAfterDiscount),2,'.',''),
            'total' => number_format(floatval($totalAfterDiscount),2,'.',''),
        ]);
    }

    public function remove_coupon_code()
    {
        Session::forget('coupon');
        Session::forget('discounts');
        return redirect()->back()->with('success', 'Coupon removed successfully');
    }




}
