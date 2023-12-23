<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function form()
    {
        $category = Category::all();
        $sub_category=Sub_Category::all();
        $brand = Brand::all();
        return view('Backend.Pages.Products.Add_Product', compact('category', 'brand','sub_category'));
    }

    public  function list()
    {
        $product = Product::with(['brand', 'category','sub_category'])->paginate(31);
        // dd($product);
        return view('Backend.Pages.Products.Product_list', compact('product'));
    }


    public function delete($id)
    {
        $delete = Product::find($id);
        if ($delete) {
            $delete->delete();
        }
        return redirect()->route('product_list');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $fileName = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $fileName = date('Ymdhis') . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('uploads/', $fileName);
        }

        Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'photo' => $fileName,
            'description' => $request->description,
        ]);
        notify()->success('your data store successfully.');
        return redirect()->route('product_list');
    }




    // public function product($id)
    // {
    //     $product_view = Product::find($id);
    //     //dd($product_view);
    //     return view('Backend.Pages.ProductView', compact('product_view'));
    // }

    // public function edit($id)
    // {
    //     //dd($id);
    //     $editProduct = Product::find($id);
    //     $category = Category::all();
    //     $brand = Brand::all();
    //     return view('Backend.Pages.Edit_Product', compact('editProduct', 'category', 'brand'));
    // }








    // public function update(Request $request, $id)
    // {
    //     $editProduct = Product::find($id);
    //     //dd($editProduct);
    //     $validator = Validator::make($request->all(), [
    //         'id' => 'required',
    //         'category_id' => 'required',
    //         'brand_id' => 'required',
    //         'product_name' => 'required',
    //         'product_price' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         notify()->error('Please Check Your Required Input Field.');
    //         return redirect()->back();
    //     }

    //     if ($editProduct) {
    //         $photo_name = $editProduct->photo;
    //         if ($request->hasFile('product_image')) {
    //             $photo = $request->file('product_image');
    //             $photo_name = date('Ymdhis') . '.' . $photo->getClientOriginalExtension();
    //             $photo->storeAs('/uploads', $photo_name);
    //             // echo($photo_name);
    //         }

    //         $editProduct->update([
    //             'id' => $request->id,
    //             'category_id' => $request->category_id,
    //             'brand_id' => $request->brand_id,
    //             'product_name' => $request->product_name,
    //             'price' => $request->product_price,
    //             'discription' => $request->discription,
    //             'photo' => $photo_name,
    //         ]);
    //     }
    //     notify()->success('Product Update Successfully.');
    //     return redirect()->route('Products');
    // }

    // public function delete($id)
    // {
    //     //dd($id);
    //     $editProduct = Product::find($id);
    //     if ($editProduct) {
    //         $editProduct->delete();
    //         notify()->success('Product Deleted Successfully.');
    //         return redirect()->back();
    //     }
    // }




}
