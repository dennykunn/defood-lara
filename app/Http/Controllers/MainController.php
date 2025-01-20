<?php

namespace App\Http\Controllers;

use App\Models\CategoryMenu;
use App\Models\Menu;
use App\Models\SeasonalMenu;

class MainController extends Controller
{
    public function index()
    {
        $categories = CategoryMenu::all();
        $seasonal_menus = SeasonalMenu::all();

        return view('index', compact('categories', 'seasonal_menus'));
    }
    public function about()
    {
        return view('about');
    }
    public function menu()
    {
        return view('menu');
    }

    public function menu_product($slug)
    {
        $menu = Menu::where('slug', $slug)->first();

        return view('menu-product', compact('menu'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
}
