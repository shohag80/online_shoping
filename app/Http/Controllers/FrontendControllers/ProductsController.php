<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{    
    public function products(){
        $products=Product::all();
        //dd('Hello Frontend Products');
        return view('Frontend/Pages/Product/list',compact('products'));
    }

    public function product($id){
        $single_product=Product::with('brand')->find($id);
        return view('Frontend.Pages.Product.single_view',compact('single_product'));
    }

}
