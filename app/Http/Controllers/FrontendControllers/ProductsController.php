<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{    
    public function products(){
        $products=Product::all();
        //dd('Hello Frontend Products');
        return view('Frontend/Pages/Product/list',compact('products'));
    }


}
