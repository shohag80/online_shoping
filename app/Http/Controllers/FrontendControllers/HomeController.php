<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //dd('Hello HomeController');
        return view('Frontend/Pages/Home');
    }
}
