<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        //dd('Hello Frontend Products');
        return view('Frontend/Pages/Product/list');
    }
}
