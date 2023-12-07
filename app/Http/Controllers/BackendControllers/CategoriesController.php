<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function from()
    {
        //dd('Hello');
        return view('Backend/Pages/Categories/Add_Category');
    }

    public function list()
    {
        //dd('Hello');
        $category = Category::all();
        return view('Backend/Pages/Categories/Category_List', compact('category'));
    }

    public function update($category_id)
    {
        $category = Category::find($category_id);
        return view('Backend.Pages.Categories.Category_Update', compact('category'));
    }
    public function update_store(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'image|max:1024',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file_name = $category->photo;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }
        $category->update([
            'name' => $request->name,
            'photo' => $file_name,
            'description' => $request->description,
        ]);
        return redirect()->route('category_list');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'image|max:1024',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file_name = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        Category::create([
            'name' => $request->name,
            'photo' => $file_name,
            'description' => $request->description,
        ]);

        return redirect()->route('category_list');
    }
}
