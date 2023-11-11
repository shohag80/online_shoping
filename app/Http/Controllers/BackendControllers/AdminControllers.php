<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $admin_data=User::all();
        return view('Backend.Pages.Admin',compact('admin_data'));
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
            'phone'=>'required|min:11|max:11',
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
            // dd($valitator);
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


        User::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
            'photo'=>$file_name,
        ]);

        return redirect()->route('Admin');
        
    }
}
