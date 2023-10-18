<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(){
        //dd('Hello Backend Category');
        return view('Backend/Pages/Categorys');
    }

    public function add_category(){
        //dd('Hello');
        return view('Backend/Pages/Add_Category');
    }

    public function store (Request $request){
        dd($request->all());
    }
}
