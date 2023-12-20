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

    public function search(Request $request){
        if($request->search){
            $orders=Order::where('name','LIKE','%'.$request->search.'%')->get();
        }else{
            $orders=Order::all();
        }
        return view('Backend.Pages.Orders.All_Order',compact('orders'));
    }

    public function last_month(){
        return view('Backend.Pages.Orders.Last_Month');
    }

    public function all_orders(){
        $orders=Order::with('user')->paginate(20);
        return view('Backend.Pages.Orders.All_Order',compact('orders'));
    }

    public function order_delete($order_id){
        // dd($order_id);
        $order=Order::find($order_id);
        if($order){
            $order->delete();
        }
        notify()->success('Order Delete Successfully!');
        return redirect()->back();
    }

    public function order_comfirm($order_id){
        $order_id=Order::find($order_id);
        $order_id->update([
            'delivery_status'=>'confirm',
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
            'delivery_status'=>'cancel',
        ]);
        return redirect()->route('Order');
    }
}
