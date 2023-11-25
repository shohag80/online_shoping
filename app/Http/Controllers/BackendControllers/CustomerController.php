<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        //dd('Hello');
        $customer_data=User::all();
        return view('Backend/Pages/Profiles/Customer/Customers',compact('customer_data'));
    }
}
