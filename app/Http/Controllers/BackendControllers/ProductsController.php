<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public  function products()
    {
        // $productdata = Product::all();
        $productdata = Product::with(['brand','category'])->paginate(10);
        //dd($productdata);
        return view('Backend/Pages/Products',compact('productdata'));
    }

    public function form()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('Backend/Pages/Add_Product',compact('category', 'brand'));
    }

    public function form_data_store(Request $request)
    {

        // $this->validate($request, [
        //     'category_id' => 'required',
        //     'brand_id' => 'required',
        //     'product_name' => 'required',
        //     'product_price' => 'required',
        //     'product_image' => 'required',
        //     'discription' => 'required',
        // ]);

        $validator=Validator::make($request->all(),[
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'discription' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }


        Product::create([
            'photo' => $request->product_image,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'price' => $request->product_price,
            'discription' => $request->discription,
        ]);
        notify()->success('your data store successfully.');
        return redirect(url('/Products'));
    }






    public function add_product_pro()
    {
        return view('Backend/Pages/Products/Add_Product');
    }

    public function product_list_pro()
    {
        return view('Backend/Pages/Products/Product_List');
    }

    public function product_reviews()
    {
        return view('Backend/Pages/Products/Product_Reviews');
    }
}
