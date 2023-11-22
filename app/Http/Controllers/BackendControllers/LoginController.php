<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        // dd('Hello Login');
        return view('Backend/Pages/Login');
    }

    public function loginForm(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        $login = auth()->guard('admin')->attempt($credentials);

        if ($login) {
            notify()->success('Login Successfully.');
            return redirect()->route('Home_Page');
        }
        notify()->warning('Invalid Your User or Password');
        return redirect()->back()->withInput();
    }
    
    public function logout()
    {
        auth()->logout();
        notify()->success('Successfully Logout.');
        return redirect()->route('Login');
    }
}
