<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.authentication.login');
    }
    public function process_login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $admin = Admin::where('email', $request->input('email'))->first();

            $request->session()->put('admin_name', $admin->name);
            $request->session()->put('admin_mail', $admin->email);

            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
