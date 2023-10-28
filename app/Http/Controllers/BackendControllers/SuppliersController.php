<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function master_supplier(){
        //dd('Hello');
        return view('Backend/Pages/Profiles/Suppliers');
    }
}
