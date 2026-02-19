<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::with(['category','lessons'])
            ->orderBy('position')
            ->get();

        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('type','education')->get();

        return view('admin.educations.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'duration_days' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'level' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['position'] = 0;
        $data['is_active'] = true;

        Education::create($data);

        return redirect()->route('educations.index')
            ->with('success','Education created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        $categories = Category::where('type','education')->get();

        return view('admin.educations.edit', compact('education','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'duration_days' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'level' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $data['slug'] = Str::slug($data['title']);

        $education->update($data);

        return redirect()->route('educations.index')
            ->with('success','Education updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('educations.index')
            ->with('success','Education deleted');
    }
}
