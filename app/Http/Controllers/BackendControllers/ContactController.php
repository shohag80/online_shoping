<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function head_office(){
        return view('Backend.Pages.Contact.Head_Office');
    }

    public function customer_care(){
        return view('Backend.Pages.Contact.Customer_Care');
    }

    public function supplier_shops(){
        return view('Backend.Pages.Contact.Suppliers_Shops');
    }
}
