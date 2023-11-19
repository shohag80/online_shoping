<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        'number'=>'required|numeric|min:11',
        'email'=>'required|email',
        'password'=>'required|min:6',
       ]);
       
       if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
       };

       User::create([
        'name'=>$request->full_name,
        'role'=>'Customer',
        'phone'=>$request->number,
        'email'=>$request->email,
        'password'=>$request->password,
        'photo'=>'Customer_Photo.jpg',
       ]);
       
       notify()->success('Your registration is successfully.');
       return redirect()->route('SignIn');  

    }
    

                                // Login Section


    public function login(){
        return view('Frontend.Pages.User_Pages.LogIn');
    }

    public function do_login(Request $request){
        //dd($request);
        $validate=validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required|min:6',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $filter=$request->except('_token');
        $login=auth()->attempt($filter);
        if($login){
            notify()->success('Login Successfully');
            return redirect()->route('User_Home');
        }
        notify()->warning('Incorrect Your Email or Password!');
        return redirect()->back()->withInput();

    }


    public function logout(){
        auth()->logout();
        notify()->success('Logout Succesfully.');
        return redirect()->route('User_Home');
    }
    

                                // Password Section


    public function forget_password(){
        return view('Frontend.Pages.User_Pages.forget_password');
    }
}
