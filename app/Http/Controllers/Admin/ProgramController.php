<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Language;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('language')->ordered()->get();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('admin.programs.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required|string|max:255',
            'code' => 'required|string'
        ]);

        Program::create($request->all());

        return redirect()->route('admin.programs.index');
    }

    public function edit(Program $program)
    {
        $languages = Language::all();
        return view('admin.programs.edit', compact('program','languages'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required|string|max:255',
            'code' => 'required|string'
        ]);

        $program->update($request->all());

        return redirect()->route('admin.programs.index');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return back();
    }
}