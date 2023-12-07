<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_Details;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function order()
    {
        $order = order::where('user_id',auth()->user()->id)->get();
        return view('Frontend.Pages.Account.Order.order', compact('order'));
    }

    public function continue_order(Request $request)
    {
        // dd($request);
        $cart = session()->get('virtual_cart');

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'total_price' => array_sum(array_column(session()->get('virtual_cart'), 'subtotal')),
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);

        $quantity = array_sum(array_column(session()->get('virtual_cart'), 'quantity'));
        $total_price = array_sum(array_column(session()->get('virtual_cart'), 'subtotal')) - 10;

        foreach ($cart as $item) {
            Order_Details::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'total_quantity' => $quantity,
                'subtotal' => $item['subtotal'] - 10, // 10 is discoutnt
                'total_price' => $total_price,
            ]);
        }
        session()->forget('virtual_cart');
        return redirect()->route('Order');
    }

    public function settings()
    {
        return view('Frontend.Pages.Account.Settings');
    }

    public function address()
    {
        return view('Frontend.Pages.Account.Address');
    }

    public function payment()
    {
        return view('Frontend.Pages.Account.Payment');
    }

    public function notification()
    {
        return view('Frontend.Pages.Account.Notification');
    }
}
