<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function cart()
    {
        // dd('Hello Cart');
        return view('Frontend.Pages.Account.Cart');
    }

    public function add_to_cart($product_id)
    {
        $product = Product::find($product_id);
        // dd($product);
        $cart = session()->get('virtual_cart');
        if ($cart) {
            if (array_key_exists($product_id, $cart)) {
                $cart[$product_id]['quantity'] = $cart[$product_id]['quantity'] + 1;
                $cart[$product_id]['subtotal'] = $cart[$product_id]['price'] * $cart[$product_id]['quantity'];

                notify()->success('Quantity Update.');
                session()->put('virtual_cart', $cart);
                return redirect()->back();
            } else {
                $cart[$product_id] = [
                    'id' => $product_id,
                    'photo' => $product->photo,
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'subtotal' => 1 * $product->price,
                ];

                notify()->success('Added to new card.');
                session()->put('virtual_cart', $cart);
                return redirect()->back();
            };
        } else {
            $new_cart[$product_id] = [
                'id' => $product_id,
                'photo' => $product->photo,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'subtotal' => 1 * $product->price,
            ];

            notify()->success('First Added to new card.');
            session()->put('virtual_cart', $new_cart);
            return redirect()->back();
        };
        return view('Frontend.Pages.Account.Cart');
    }


    public function product_buy($product_id)
    {
        Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
        ]);
        notify()->success('Order Successfull.');
        return redirect()->back();
    }

    public function cancel_product($product_id)
    {
        $order = Order::find($product_id);
        if ($order) {
            $order->update([
                'status' => 'cancelled'
            ]);
            return redirect()->back();
        }
    }
}
