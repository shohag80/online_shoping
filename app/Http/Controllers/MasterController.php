<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function Master(){
        //dd('Hello Master');
        return view('Frontend/Master');
    }
}
