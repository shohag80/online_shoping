<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Order;
use Termwind\Components\Ul;

class SslCommerzPaymentController extends Controller
{
    public function success(Request $request)
    {
        //dd($request);
        echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order = Order::where('transaction_id', $tran_id)->first();
        //dd($order);
        if ($order->payment_status == 'pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $order->update([
                    'payment_status' => 'successful',
                ]);
                echo "Transaction is Successful";
                session()->forget('virtual_cart');
                return redirect()->route('Order');
            }
        } else if ($order->status == 'Processing' || $order->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            echo "Transaction is successfully Completed";
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order = Order::where('transaction_id', $tran_id)->first();

        if ($order->payment_status == 'pending') {
            Order::where('transaction_id', $tran_id)
                ->update(['payment_status' => 'failed']);
            echo "Transaction is Falied";
            session()->forget('virtual_cart');
            return redirect()->route('Order');
        } else if ($order->status == 'Processing' || $order->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order = Order::where('transaction_id', $tran_id)->first();

        if ($order->payment_status == 'pending') {
            Order::where('transaction_id', $tran_id)
                ->update(['payment_status' => 'canceled']);
                echo "Transaction is Cancel";
            session()->forget('virtual_cart');
            return redirect()->route('Order');
        } else if ($order->status == 'Processing' || $order->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }
    }
}
