<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function dairy(){
        //dd('Hello Dairy');
        $products=Product::all();
        return view('Frontend.Pages.All_Department.Dairy',compact('products'));
    }
}
