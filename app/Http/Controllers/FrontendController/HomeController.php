<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //dd('Hello Dhaka');
        return view('Home');
    }
}
