<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_Details;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function recent_order(){
        return view('Backend.Pages.Orders.Recent');
    }

    public function last_month(){
        return view('Backend.Pages.Orders.Last_Month');
    }

    public function all_orders(){
        $orders=Order::all();
        return view('Backend.Pages.Orders.All_Order',compact('orders'));
    }

    public function order_comfirm($order_id){
        $order_id=Order::find($order_id);
        $order_id->update([
            'status'=>'confirm',
        ]);
        return redirect()->route('All_Orders');
    }

    public function order_details($order_id){
        $order=Order::find($order_id);
        $order_details=Order_Details::with('product')->where('order_id',$order_id)->get();
        return view('Backend.Pages.Orders.Order_details',compact('order','order_details'));
    }

    public function order_cancel($order_id){
        $order_id=Order::find($order_id);
        $order_id->update([
            'status'=>'cancel',
        ]);
        return redirect()->route('Order');
    }
}
