<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sections'] = Section::latest()->get();
        return view('partials.components.section.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        // $categories = json_decode(json_encode($data['categories']), true);
        // echo "<pre>"; print_r($categories); die;
        return view('partials.components.section.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $sections = new Section();
        $sections->name = $request->name;
        $sections->status = $request->has('status') ? 1 : 0;
        $sections->category_id = $request->category_id;
        $sections->save();
        return redirect()->route('sections.index')->with('success', 'Section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {

        $data['section'] = $section;
        $data['categories'] = Category::all();

        return view('partials.components.section.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $section->name = $request->name;
        $section->status = $request->has('status') ? 1 : 0;
        $section->category_id = $request->category_id;
        $section->save();
        return redirect()->route('sections.index')->with('success', 'Section Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Section deleted successfully.');
    }
}
