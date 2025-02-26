<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data["categories"] = Category::all();
        return view('partials.components.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partials.components.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->status = $request->status;
        $category->user_id = Auth::id();
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/categories');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $category->image = 'uploads/categories/' . $imageName;
        }
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data["category"]  = Category::findOrFail($id);
        return view('partials.components.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $slug;
        $category->status = $request->status;
        $category->user_id = Auth::id();
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/categories');


            if ($category->image && File::exists(public_path($category->image))) {
                File::delete(public_path($category->image));
            }

            $image->move($imagePath, $imageName);
            $category->image = 'uploads/categories/' . $imageName;
        }
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category->image && File::exists(public_path($category->image))) {
            File::delete(public_path($category->image));
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
