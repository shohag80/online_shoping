<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome(){
        //dd('Hello Frontend');
        return view('Frontend.Pages.Home.home');
    }
}
