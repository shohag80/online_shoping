<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminControllers extends Controller
{
    public function master_admin(){
        //dd('Hello');
        return view('Backend/Pages/Profiles/Admins');
    }

    public function admin(){
        // dd('Hello admin');
        return view('Backend.Pages.Admin');
    }
    
    public function form(){
        // dd('Hello admin');
        return view('Backend.Pages.Add_Admin');
    }
   
    public function store(Request $request){
        // dd($request);
        $valitator=Validator::make($request->all(),[
            'name'=>'required',
            'role'=>'required',
            'phone'=>'required|min:11',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'photo'=>'required',
        ]);

        if($valitator->fails()){
            return redirect()->back()->withErrors($valitator)->withInput();
        }

        $fileName=null;
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            dd($file);
        }
        
    }
}
