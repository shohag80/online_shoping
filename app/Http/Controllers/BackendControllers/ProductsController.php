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
        $productdata = Product::with(['brand', 'category'])->paginate(10);
        //dd($productdata);
        return view('Backend/Pages/Products', compact('productdata'));
    }

    public function product($id){
        $product_view=Product::find($id);
        //dd($product_view);
        return view('Backend.Pages.ProductView',compact('product_view'));
    }

    public function edit($id)
    {
        //dd($id);
        $editProduct = Product::find($id);
        $category = Category::all();
        $brand = Brand::all();
        return view('Backend.Pages.Edit_Product', compact('editProduct', 'category', 'brand'));
    }

    public function update(Request $request, $id)
    {
        $editProduct = Product::find($id);
        //dd($editProduct);
        $validator=Validator::make($request->all(),[
            'id'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'product_name'=>'required',
            'product_price'=>'required'
        ]);

        if($validator->fails()){
            notify()->error('Please Check Your Required Input Field.');
            return redirect()->back();
        }
        
        if ($editProduct) {
            $photo_name = $editProduct->photo;
            if ($request->hasFile('product_image')) {
                $photo = $request->file('product_image');
                $photo_name = date('Ymdhis') . '.' . $photo->getClientOriginalExtension();
                $photo->storeAs('/uploads', $photo_name);
                // echo($photo_name);
            }

            $editProduct->update([
                'id' => $request->id,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_name' => $request->product_name,
                'price' => $request->product_price,
                'discription' => $request->discription,
                'photo' => $photo_name,
            ]);
        }
        notify()->success('Product Update Successfully.');
        return redirect()->route('Products');
    }

    public function delete($id)
    {
        //dd($id);
        $editProduct = Product::find($id);
        if ($editProduct) {
            $editProduct->delete();
            notify()->success('Product Deleted Successfully.');
            return redirect()->back();
        }
    }

    public function form()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('Backend/Pages/Add_Product', compact('category', 'brand'));
    }

    public function form_data_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'discription' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $photo_name = null;
        if ($request->hasFile('product_image')) {
            $photo = $request->file('product_image');
            $photo_name = date('Ymdhis') . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('/uploads', $photo_name);
            // echo($photo_name);
        }

        Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'price' => $request->product_price,
            'discription' => $request->discription,
            'photo' => $photo_name,
        ]);


        notify()->success('your data store successfully.');
        return redirect()->route('Products');
    }




    // Pro Section

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
