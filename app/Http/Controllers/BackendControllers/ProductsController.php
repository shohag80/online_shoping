<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public  function products()
    {
        // $productdata = Product::all();
        $productdata = Product::with(['brand','category'])->paginate(10);
        return view('Backend/Pages/Products', compact('productdata'));
    }

    public function form()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('Backend/Pages/Add_Product', compact('category', 'brand'));
    }

    public function form_data_store(Request $request)
    {

        $this->validate($request, [
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'discription' => 'required',
        ]);


        Product::create([
            'photo' => $request->product_image,
            'category_name' => $request->category_id,
            'brand_name' => $request->brand_id,
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
