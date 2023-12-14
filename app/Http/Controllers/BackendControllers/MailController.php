<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Mail\Online_Shoping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){
        Mail::to('mdshohaghossain8080@gmail.com')->send(new Online_Shoping());
        return redirect()->back();
    }
}
