<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryList(){
        //dd('Hello Categories');
        return view('Frontend/Pages/Category/List');
    }
}
