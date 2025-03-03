<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy("created_at","desc")->paginate(20);
        return view('partials.components.order.index',compact("orders"));
    }

    public function show($order_id){
        $order = Order::find($order_id);
        $order_items = OrderItem::where("order_id",$order_id)->orderBy('id')->paginate(20);
        $transaction = Transaction::where("order_id",$order_id)->first();
        return view('partials.components.order.order_details',compact("order","order_items","transaction"));
    }
}
