<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome(){
        $products=Product::all();
        //dd('Hello Frontend');
        return view('Frontend.Pages.Home.home',compact('products'));
    }

    
}
