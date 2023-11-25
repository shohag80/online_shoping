<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function order(){
        return view('Frontend.Pages.Account.Order');
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
