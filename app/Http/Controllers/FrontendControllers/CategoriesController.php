<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(){
        //dd('Hello Categories');
        $category=Category::all();
        return view('Frontend/Pages/Category/List',compact('category'));
    }

    
}
