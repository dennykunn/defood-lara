<?php

namespace App\Http\Controllers;

use App\Models\CategoryMenu;
use App\Models\TypeMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryMenu::all();
        $types = TypeMenu::all();

        return view('admin.management-menu.category', compact('categories', 'types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'image' => 'required|image|max:2048',
        ], [
            'name.required' => 'Name field is required.',
            'type_id.required' => 'Type field is required.',
            'image.required' => 'Image field is required.',
            'image.max' => 'The maximum image size is 2MB.',
        ]);

        $category = new CategoryMenu();
        $category->name = $request->input('name');

        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $category->slug = $slug;
        $category->type_id = $request->input('type_id');

        $imagePath = $request->file('image')->store('public/categories/');
        $category->image = $imagePath;

        $category->save();

        return redirect()->back()->with('success', 'Category created successfully!');;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'image' => 'max:2048',
        ], [
            'name.required' => 'Name field is required.',
            'type_id.required' => 'Type field is required.',
            'image.max' => 'The maximum image size is 2MB.',
        ]);

        $category = CategoryMenu::findOrFail($id);
        $category->name = $request->input('name');

        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $category->slug = $slug;
        $category->type_id = $request->input('type_id');

        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $imagePath = $request->file('image')->store('public/categories/');
            $category->image = $imagePath;
        } else {
            $category->image = $category->image;
        }

        $category->save();

        return redirect()->back()->with('success', 'Category Updated successfully!');;
    }

    public function destroy($id)
    {
        $category = CategoryMenu::findOrFail($id);
        Storage::delete($category->image);
        $category->delete();

        return redirect()->back()->with('success', 'Type deleted successfully!');;
    }
}
