<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    public function form(){
        //dd('Hello Add Brand ');
        return view('Backend.Pages.Brands.Add');
    }

    public function list(){
        //dd('Hello Backend Brands');
        $brand=Brand::all();
        return view('Backend.Pages.Brands.All_Brand',compact('brand'));
    }

    public function store(Request $request){
        //dd($request);
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'photo'=>'image|max:1024',
        ]);        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $fileName=null;
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $fileName=date('YmdHis').'.'.$photo->getClientOriginalExtension();
            $photo->storeAs('uploads/',$fileName);
        }

        Brand::create([
            'name'=>$request->name,
            'logo'=>$fileName,
            'description'=>$request->description,
        ]);

        return redirect()->route('brnad_list');
    }

}
