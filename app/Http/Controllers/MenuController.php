<?php

namespace App\Http\Controllers;

use App\Models\CategoryMenu;
use App\Models\Cuisine;
use App\Models\Menu;
use App\Models\TypeMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function create()
    {
        $cuisines = Cuisine::all();
        $types = TypeMenu::all();
        $categories = CategoryMenu::all();

        return view('admin.menus.create', compact('cuisines', 'types', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'price' => 'required',
            'cuisine_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
        ], [
            'name.required' => 'Name field is required.',
            'image.required' => 'Image field is required.',
            'image.max' => 'The maximum image size is 2MB.',
            'category.required' => 'Category field is required.',
            'price.required' => 'Price field is required.',
            'cuisine_id.required' => 'Cuisine field is required.',
            'type_id.required' => 'Type field is required.',
            'category_id.required' => 'Category field is required.',
        ]);

        $imagePath = $request->file('image')->store('public/menu/');

        $menu = new Menu();
        $menu->name = $request->input('name');

        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $menu->slug = $slug;

        $menu->price = $request->input('price');
        $menu->discount = $request->input('discount') == null ? 0 : $request->input('discount');
        $menu->category_id = $request->input('category');
        $menu->cuisine_id = $request->input('cuisine_id');
        $menu->category_id = $request->input('category_id');
        $menu->type_id = $request->input('type_id');
        $menu->image = $imagePath;
        $menu->save();

        return redirect()->route('list-menu')->with('success', 'Menu created successfully!');
    }

    public function list()
    {
        $menus = Menu::all();

        return view('admin.menus.list', compact('menus'));
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        $cuisines = Cuisine::all();
        $types = TypeMenu::all();
        $categories = CategoryMenu::all();

        return view('admin.menus.edit', compact('menu', 'cuisines', 'types', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'cuisine_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
        ], [
            'name.required' => 'Name field is required.',
            'category.required' => 'Category field is required.',
            'price.required' => 'Price field is required.',
            'cuisine_id.required' => 'Cuisine field is required.',
            'type_id.required' => 'Type field is required.',
            'category_id.required' => 'Category field is required.',
        ]);

        $menu = Menu::find($id);

        if ($menu) {
            $menu->name = $request->input('name');
            $name = strtolower(trim($request->input('name')));
            $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
            $menu->slug = $slug;
            $menu->price = $request->input('price');
            $menu->discount = $request->input('discount') == null ? 0 : $request->input('discount');
            $menu->category_id = $request->input('category');
            $menu->cuisine_id = $request->input('cuisine_id');
            $menu->category_id = $request->input('category_id');
            $menu->type_id = $request->input('type_id');

            if ($request->hasFile('image')) {
                Storage::delete($menu->image);
                $imagePath = $request->file('image')->store('public/menu/');
                $menu->image = $imagePath;
            } else {
                $menu->image = $menu->image;
            }
            $menu->save();

            return redirect()->route('list-menu')->with('success', 'Menu updated successfully!');
        }

        dd('tidak masuk');

        return redirect()->back();
    }
}
