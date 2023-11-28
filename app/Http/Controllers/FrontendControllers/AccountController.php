<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function order(){
        $order=Order::where('user_id',auth()->user()->id)->get();
        return view('Frontend.Pages.Account.Order',compact('order'));
    }

    public function settings(){
        return view('Frontend.Pages.Account.Settings');
    }

    public function address(){
        return view('Frontend.Pages.Account.Address');
    }

    public function payment(){
        return view('Frontend.Pages.Account.Payment');
    }
    
    public function notification(){
        return view('Frontend.Pages.Account.Notification');
    }
}
