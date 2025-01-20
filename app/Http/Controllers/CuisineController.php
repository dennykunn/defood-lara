<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CuisineController extends Controller
{
    public function index()
    {
        $cuisines = Cuisine::all();

        return view('admin.management-menu.cuisine', compact('cuisines'));
    }

    public function store(Request $request)
    {
        $cuisine = new Cuisine();
        $cuisine->name = $request->input('name');

        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $cuisine->slug = $slug;

        $imagePath = $request->file('image')->store('public/cuisines/');
        $cuisine->image = $imagePath;

        $cuisine->save();

        return redirect()->back()->with('success', 'Cuisine created successfully!');;
    }

    public function update(Request $request, $id)
    {
        $cuisine = Cuisine::findOrFail($id);
        $cuisine->name = strtolower($request->input('name'));
        $name = strtolower(trim($request->input('name')));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $name);
        $cuisine->slug = $slug;

        if ($request->hasFile('image')) {
            Storage::delete($cuisine->image);
            $imagePath = $request->file('image')->store('public/cuisines/');
            $cuisine->image = $imagePath;
        } else {
            $cuisine->image = $cuisine->image;
        }
        $cuisine->save();

        return redirect()->back()->with('success', 'Cuisine Updated successfully!');;
    }

    public function destroy($id)
    {
        $cuisine = Cuisine::findOrFail($id);
        Storage::delete($cuisine->image);
        $cuisine->delete();

        return redirect()->back()->with('success', 'Cuisine deleted successfully!');;
    }
}
