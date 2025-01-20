<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class ProductMenu extends Component
{
    public function render()
    {
        $url = url()->current();
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', $path);
        $slug = end($segments);
        $menu = Menu::where('slug', $slug)->first();

        return view('livewire.product-menu', [
            'menu' => $menu
        ]);
    }
}
