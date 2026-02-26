<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::ordered()->get();
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Language::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'monaco_mode' => $request->monaco_mode,
            'position' => $request->position ?? 0,
            'is_active' => $request->boolean('is_active')
        ]);

        return redirect()->route('admin.languages.index');
    }

    public function edit(Language $language)
    {
        return view('admin.languages.edit', compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $language->update([
            'name' => $request->name,
            'monaco_mode' => $request->monaco_mode,
            'position' => $request->position ?? 0,
            'is_active' => $request->boolean('is_active')
        ]);

        return redirect()->route('admin.languages.index');
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return back();
    }
}