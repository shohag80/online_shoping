<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function delivery_mans(){
        return view('Backend/Pages/Profiles/Delivery_Man');
    }
}
