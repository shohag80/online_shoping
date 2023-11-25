<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminControllers extends Controller
{
    public function admin(){
        // dd('Hello admin');
        $admin_data=Admin::all();
        return view('Backend.Pages.Profiles.Admin.Admins',compact('admin_data'));
    }
    
    public function form(){
        // dd('Hello admin');
        return view('Backend.Pages.Profiles.Admin.Add');
    }
   
    public function store(Request $request){
        //dd($request);
        $valitator=Validator::make($request->all(),[
            'name'=>'required',
            'role'=>'required',
            'phone'=>'required|min:11|max:11',
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        if($valitator->fails()){
            notify()->error('Please, Input your valid data.');
            return redirect()->back()->withErrors($valitator)->withInput();
        }

        $file_name=null;
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $file_name=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('uploads/',$file_name);
        }

        Admin::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
            'photo'=>$file_name,
        ]);

        return redirect()->route('Admins');
        
    }
}
