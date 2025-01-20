<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }

    public function process_register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ], [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.',
            'phone_number.required' => 'Phone Number field is required.',
            'address.required' => 'Address field is required.',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->save();

        return redirect()->route('home')->with('success', 'Account created successfully!');
    }

    public function login()
    {
        return view('authentication.login');
    }

    public function process_login(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();

            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_mail', $user->email);

            return redirect()->route('home')->with('success', 'Congratulations, you have successfully logged in.');
        } else {
            return redirect()->back()->with('error', 'The username or password you entered is incorrect.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('success', 'Congratulations, you have successfully logged out.');
    }

    public function wishlist()
    {
        $wishlists = Wishlist::where('user_id', session('user_id'))->get();

        return view('wishlist', compact('wishlists'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function delete_wishlist($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->back()->with('success', 'Wishlist deleted successfully!');
    }
    public function store_wishlist($menu_id)
    {
        $wistlist = new Wishlist();
        $wistlist->menu_id = $menu_id;
        $wistlist->user_id = session('user_id');
        $wistlist->save();

        return redirect()->back()->with('success', 'Wishlist added successfully!');
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', session('user_id'))->where('status', 0)->get();
        return view('checkout', compact('carts'));
    }

    public function payment(Request $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->zip_code = $request->zip_code;
        $order->shipping = $request->shipping;
        $order->payment = $request->payment;


        foreach ($request->cart as $cartId) {
            $cart = Cart::findOrFail($cartId);;
            $cart->status = true;
            $cart->save();
        }

        $order->cart = json_encode($request->cart);
        $order->user_id = session('user_id');
        $order->save();

        return redirect()->route('home')->with('success', 'Your order successfully!');
    }

    public function history()
    {
        $orders = Order::where('user_id', session('user_id'))->get();
        return view('history', compact('orders'));
    }
}
