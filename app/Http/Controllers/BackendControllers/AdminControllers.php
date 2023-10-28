<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function master_admin(){
        //dd('Hello');
        return view('Backend/Pages/Profiles/Admins');
    }
}
