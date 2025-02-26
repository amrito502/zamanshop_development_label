<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('partials.components.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partials.components.brand.create');
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

        while (Brand::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $brands = new Brand();
        $brands->name = $request->name;
        $brands->slug = $slug;
        $brands->status = $request->status;
        $brands->user_id = Auth::id();
        $brands->meta_title = $request->meta_title;
        $brands->meta_description = $request->meta_description;
        $brands->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/brands');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $brands->image = 'uploads/brands/' . $imageName;
        }
        $brands->save();

        return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('partials.components.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required|in:active,inactive',
        ]);


        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Brand::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = $slug;
        $brand->status = $request->status;
        $brand->user_id = Auth::id();
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;
        $brand->meta_keyword = $request->meta_keyword;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/brands');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            if ($brand->image && File::exists(public_path($brand->image))) {
                File::delete(public_path($brand->image));
            }

            $image->move($imagePath, $imageName);
            $brand->image = 'uploads/brands/' . $imageName;
        }
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        if ($brand->image && File::exists(public_path($brand->image))) {
            File::delete(public_path($brand->image));
        }

        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully.');
    }
}
