<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagementUserController extends Controller
{
    public function admin()
    {
        return view('admin.management-users.admin');
    }
    public function store_admin(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.',
        ]);

        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();

        return redirect()->back()->with('success', 'Admin account created successfully!');
    }
    public function update_admin(Request $request)
    {
        $admin = Admin::findOrFail($request->input('id'));
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $admin->password == $request->input('password') ? $admin->password : Hash::make($request->input('password'));
        $admin->save();

        return redirect()->back()->with('success', 'Admin account updated successfully!');;
    }

    public function customer()
    {
        return view('admin.management-users.customer');
    }
    public function update_customer(Request $request)
    {
        $user = User::findOrFail($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $user->password == $request->input('password') ? $user->password : Hash::make($request->input('password'));
        $user->address = $request->input('address');
        $user->save();

        return redirect()->back()->with('success', 'user account updated successfully!');;
    }
}
