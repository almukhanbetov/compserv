<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $type = $request->get('type');

        $query = Category::whereNull('parent_id')
            ->with('children')
            ->orderBy('position');

        if ($type) {
            $query->where('type', $type);
        }

        $categories = $query->get();

        return view('admin.categories.index', compact('categories', 'type'));
    }
    public function toggle(\App\Models\Category $category)
    {
        $category->update([
            'is_active' => !$category->is_active
        ]);

        return response()->json(['status' => 'ok']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
