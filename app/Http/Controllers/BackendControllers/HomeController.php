<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //dd('Hello Backend Home');
        return view('Backend/Pages/Home');
    }
}
