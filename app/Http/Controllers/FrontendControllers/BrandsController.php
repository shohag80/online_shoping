<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
        public function brandsList(){
            //dd('Hello Bands List');
            return view('Frontend/Pages/Brands/List');
        }
}
