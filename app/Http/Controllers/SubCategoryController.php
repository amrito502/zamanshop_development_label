<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['subCategories'] = SubCategory::with('category')->get();
        return view('partials.components.sub_category.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('partials.components.sub_category.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:active,inactive',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->slug = $slug;
        $subcategory->status = $request->status;
        $subcategory->category_id = $request->category_id;
        $subcategory->user_id = Auth::id();
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/subcategories');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $subcategory->image = 'uploads/subcategories/' . $imageName;
        }

        $subcategory->save();

        return redirect()->route('subcategories.index')->with('success', 'SubCategory created successfully.');
    }

    public function edit($id)
    {
        $data['subCategory'] = SubCategory::findOrFail($id);
        $data['categories'] = Category::all();
        return view('partials.components.sub_category.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:active,inactive',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->slug = $slug;
        $subcategory->status = $request->status;
        $subcategory->category_id = $request->category_id;
        $subcategory->user_id = Auth::id();
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/subcategories');

            if ($subcategory->image && File::exists(public_path($subcategory->image))) {
                File::delete(public_path($subcategory->image));
            }

            $image->move($imagePath, $imageName);
            $subcategory->image = 'uploads/subcategories/' . $imageName;
        }

        $subcategory->save();

        return redirect()->route('subcategories.index')->with('success', 'SubCategory updated successfully.');
    }


    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);

        if ($subCategory->image && File::exists(public_path($subCategory->image))) {
            File::delete(public_path($subCategory->image));
        }

        $subCategory->delete();
        return redirect()->route('subcategories.index')->with('success', 'SubCategory deleted successfully.');
    }
}
