<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_Details;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function order()
    {
        $order = order::where('user_id', auth()->user()->id)->get();
        $category = Category::all();
        return view('Frontend.Pages.Account.Order.order', compact('order', 'category'));
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
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'transaction_id' => 'empty',
            'currency' => 'BDT',
            'status' => 'pending',
        ]);
        if (session()->get('virtual_cart')) {
            $quantity = array_sum(array_column(session()->get('virtual_cart'), 'quantity'));
            // $total_price = array_sum(array_column(session()->get('virtual_cart'), 'subtotal')) - 10;


            foreach ($cart as $item) {
                Order_Details::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'total_quantity' => $quantity,
                    'subtotal' => $item['subtotal'],
                    'total_price' => $request->amount,
                ]);
            }
            session()->forget('virtual_cart');
        }
        return redirect()->route('Order');
    }

    public function order_with_pay(Request $request)
    {
        // dd($request);
        $cart = session()->get('virtual_cart');

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'amount' => array_sum(array_column(session()->get('virtual_cart'), 'subtotal')) - 10,
            'payment_method' => 'ePay',
            'transaction_id' => 'empty',
            'currency' => 'BDT',
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

        $this->online_pay($order);
        return redirect()->route('Order');
    }

    public function online_pay($order)  // This method is call by previous method.
    {
        // dd($order);
        $post_data = array();
        $post_data['total_amount'] = $order->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->name;
        $post_data['cus_email'] = $order->email;
        $post_data['cus_add1'] = $order->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $order->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        // dd( $post_data);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function settings()
    {
        $category = Category::all();
        return view('Frontend.Pages.Account.Settings', compact('category'));
    }

    public function address()
    {
        $category = Category::all();
        return view('Frontend.Pages.Account.Address', compact('category'));
    }

    public function payment()
    {
        $category = Category::all();
        return view('Frontend.Pages.Account.Payment', compact('category'));
    }

    public function notification()
    {
        $category = Category::all();
        return view('Frontend.Pages.Account.Notification', compact('category'));
    }
}
