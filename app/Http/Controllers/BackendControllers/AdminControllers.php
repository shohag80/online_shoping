<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminControllers extends Controller
{
    public function admin()
    {
        // dd('Hello admin');
        $admin_data = Admin::all();
        return view('Backend.Pages.Profiles.Admin.Admins', compact('admin_data'));
    }

    public function update($id)
    {
        // dd('Hello admin');
        $update = Admin::find($id);
        return view('Backend.Pages.Profiles.Admin.Update', compact('update'));
    }

    public function update_store(Request $request, $id)
    {
        $admin_update = Admin::find($id);

        $file_name = $admin_update->photo;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        $admin_update->update([
            'name' => $request->name,
            'role' => $request->role,
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $file_name,
        ]);

        return redirect()->route('Admins');
    }

    public function delete($id)
    {
        $admin_delete = Admin::find($id);
        if ($admin_delete) {
            $admin_delete->delete();
        }
        return redirect()->route('Admins');
    }

    public function form()
    {
        // dd('Hello admin');
        return view('Backend.Pages.Profiles.Admin.Add');
    }

    public function store(Request $request)
    {
        //dd($request);
        $valitator = Validator::make($request->all(), [
            'name' => 'required',
            'role' => 'required',
            'phone' => 'required|min:11|max:11',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($valitator->fails()) {
            notify()->error('Please, Input your valid data.');
            return redirect()->back()->withErrors($valitator)->withInput();
        }

        $file_name = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        Admin::create([
            'name' => $request->name,
            'role' => $request->role,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $file_name,
        ]);

        return redirect()->route('Admins');
    }
}
