<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function Orders($type=''){
        if ($type == 'pending'){
            $orders = Orders::where('delivered', '0')->get();
        }elseif($type == 'delivered'){
            $orders = Orders::where('delivered','1')->get();
        }else{
            $orders = Orders::all();

        }
        return view('admin.orders',compact('orders'));
    }
    public function toggledeliver(Request $request,$orderId){
        $order = Orders::find($orderId);
        if ($request->has('delivered')){
            Mail::to($request->user())->send(new OrderShipped($order));
            $order->delivered = $request->delivered;
        }else{
            $order->delivered = "0";
        }
        $order->save();
        return back()->with('message', 'Order status has been changed');
    }
}
