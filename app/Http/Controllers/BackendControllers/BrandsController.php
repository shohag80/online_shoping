<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands(){
        //dd('Hello Backend Brands');
        $BrandData=Brand::all();
        return view('Backend/Pages/Brands', compact('BrandData'));
    }

    public function add_brand(){
        //dd('Hello Add Brand ');
        return view('Backend/Pages/Add_Brand');
    }

    public function brand_store(Request $request){
        //dd($request->all());
        Brand::create([
            'brand_name'=>$request->brand_name,
            'discription'=>$request->discription,
        ]);

        return redirect()->back();
    }

    public function add_brand_pro(){
        //dd('Hello Add Brand ');
        return view('Backend/Pages/Brands/Add');
    }
    
    public function all_brands_pro(){
        return view('Backend/Pages/Brands/All_Brand');
    }

}
