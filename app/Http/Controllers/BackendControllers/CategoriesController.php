<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(){
        //dd('Hello Backend Category');
        $Categories=Category::all();
        return view('Backend/Pages/Categories', compact('Categories'));
        
    }

    public function add_category(){
        //dd('Hello');
        return view('Backend/Pages/Add_Category');
    }

    public function store (Request $request){
        //dd($request->all());
        Category::create([
            'category_name'=> $request->category_name,
            'discription'=> $request->discription,
        ]); 
        return redirect(url('/Category'));        
    }

    // Master_Pro

    public function add_category_pro(){
        //dd('Hello');
        return view('Backend/Pages/Categories/Add_Category');
    }


    public function category_list_pro(){
        //dd('Hello');
        return view('Backend/Pages/Categories/Category_List');
    }
}
