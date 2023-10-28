<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        //dd('Hello');
        return view('Backend/Pages/Profiles/Customers');
    }
}
