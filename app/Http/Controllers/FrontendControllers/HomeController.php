<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome(){
        $products=Product::all();
        $category=Category::all();
        //dd('Hello Frontend');
        notify()->success('Welcome to Online Shop.');
        return view('Frontend.Pages.Home.home',compact('products','category'));
    }

    public function search(Request $request){
        //dd($request->all());
        if($request->search){
            $products=Product::where('name','LIKE','%'.$request->search.'%')->get();
            $category=Category::where('name','LIKE','%'.$request->search.'%')->get();
        }else{
            $products=Product::all();
            $category=Category::all();
        };

        return view('Frontend.Pages.Home.home',compact('products','category'));
    }

}
