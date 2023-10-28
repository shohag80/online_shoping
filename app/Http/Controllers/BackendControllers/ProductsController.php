<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public  function products(){
        //dd('Hello Products');
        return view('Backend/Pages/Products');
    }

    public function add_product_pro(){
        return view('Backend/Pages/Products/Add_Product');
    }

    public function product_list_pro(){
        return view('Backend/Pages/Products/Product_List');
    }

    public function product_reviews(){
        return view('Backend/Pages/Products/Product_Reviews');
    }
}
