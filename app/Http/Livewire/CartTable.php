<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartTable extends Component
{
    public function render()
    {
        $carts = Cart::where('user_id', session('user_id'))->where('status', 0)->get();
        $totalPrice = 0;

        foreach ($carts as $cart) {
            $discountedPrice = $cart->menu->price - $cart->menu->price * ($cart->menu->discount / 100);
            $totalPrice += $cart->menu->discount != 0 ? $discountedPrice * $cart->quantity : $cart->menu->price * $cart->quantity;
        }

        return view('livewire.cart-table', compact('carts', 'totalPrice'));
    }

    public function decreaseCart(Cart $cart)
    {
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        }
    }
    public function increaseCart(Cart $cart)
    {
        $cart->quantity += 1;
        $cart->save();
    }


    public function removeFromCart(Cart $cart)
    {
        $cart->delete();
    }
}
