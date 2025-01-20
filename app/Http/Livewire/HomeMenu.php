<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Wishlist;
use Livewire\Component;

class HomeMenu extends Component
{
    public function render()
    {
        $menus = Menu::limit(8)->get();

        return view('livewire.home-menu', compact('menus'));
    }

    public function addToWishlist($menu_id, $user_id)
    {
        $wistlist = new Wishlist();
        $wistlist->menu_id = $menu_id;
        $wistlist->user_id = $user_id;
        $wistlist->save();
    }
}
