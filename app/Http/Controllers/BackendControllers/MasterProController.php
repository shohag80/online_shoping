<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterProController extends Controller
{
    public function viewPro(){
        //dd('Hello Master Pro');
        return view("Backend/MasterPro");
    }
}
