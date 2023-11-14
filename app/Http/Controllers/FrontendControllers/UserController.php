<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function signup(){
        return view('Frontend.Pages.User_Pages.SignUp');
    }
    
    public function do_signup(Request $request){
       //dd($request);
       $validate=Validator::make($request->all(),[
        'full_name'=>'required',
        'number'=>'required|numeric|min:11|max:11',
        'email'=>'required|email',
        'password'=>'required|min:6',
       ]);
       if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
       }

       

    }
    
    public function login(){
        return view('Frontend.Pages.User_Pages.LogIn');
    }
    
    public function forget_password(){
        return view('Frontend.Pages.User_Pages.forget_password');
    }
}
