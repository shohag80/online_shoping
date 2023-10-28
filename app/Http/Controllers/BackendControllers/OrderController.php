<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
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
        return view('Backend.Pages.Orders.All_Order');
    }
}
