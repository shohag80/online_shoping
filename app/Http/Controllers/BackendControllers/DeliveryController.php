<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function delivery_mans(){
        return view('Backend/Pages/Profiles/Delivery_Man');
    }





    // Pro

    public function panding(){
        // dd('Hello Panding');
        return view('Backend.Pages.Delivery.Panding');
    }

    public function processing(){
        // dd('Hello Processing');
        return view('Backend.Pages.Delivery.Processing');
    }

    public function complete(){
        // dd('Hello Complete');
        return view('Backend.Pages.Delivery.Complete');
    }
}
