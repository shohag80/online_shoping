<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands(){
        //dd('Hello Backend Brands');
        return view('Backend/Pages/Brands');
    }
}
