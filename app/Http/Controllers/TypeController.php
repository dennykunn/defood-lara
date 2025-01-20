<?php

namespace App\Http\Controllers;

use App\Models\TypeMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    public function index()
    {
        $types = TypeMenu::all();

        return view('admin.management-menu.type', compact('types'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
        ], [
            'name.required' => 'Name field is required.',
            'image.required' => 'Image field is required.',
            'image.max' => 'The maximum image size is 2MB.',
        ]);

        $type = new TypeMenu();
        $type->name = $request->input('name');
        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $type->slug = $slug;

        $imagePath = $request->file('image')->store('public/types/');
        $type->image = $imagePath;

        $type->save();

        return redirect()->back()->with('success', 'Type created successfully!');;
    }

    public function update(Request $request, $id)
    {
        $type = TypeMenu::findOrFail($id);
        $type->name = strtolower($request->input('name'));
        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $type->slug = $slug;

        if ($request->hasFile('image')) {
            Storage::delete($type->image);
            $imagePath = $request->file('image')->store('public/types/');
            $type->image = $imagePath;
        } else {
            $type->image = $type->image;
        }

        $type->save();

        return redirect()->back()->with('success', 'Type Updated successfully!');;
    }

    public function destroy($id)
    {
        $type = TypeMenu::findOrFail($id);
        Storage::delete($type->image);
        $type->delete();

        return redirect()->back()->with('success', 'Type deleted successfully!');;
    }
}
