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
}
