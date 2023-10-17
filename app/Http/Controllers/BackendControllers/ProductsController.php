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
}
