<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Language;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('language')->orderBy('difficulty')->get();
        return view('admin.tasks.index', compact('tasks'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('admin.tasks.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required|string|max:255',
            'tests_json' => 'required|json'
        ]);

        Task::create([
            'language_id' => $request->language_id,
            'title' => $request->title,
            'description' => $request->description,
            'starter_code' => $request->starter_code,
            'tests_json' => json_decode($request->tests_json, true),
            'difficulty' => $request->difficulty ?? 1,
            'is_active' => $request->boolean('is_active')
        ]);

        return redirect()->route('admin.tasks.index');
    }

    public function edit(Task $task)
    {
        $languages = Language::all();
        return view('admin.tasks.edit', compact('task','languages'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required|string|max:255',
            'tests_json' => 'required|json'
        ]);

        $task->update([
            'language_id' => $request->language_id,
            'title' => $request->title,
            'description' => $request->description,
            'starter_code' => $request->starter_code,
            'tests_json' => json_decode($request->tests_json, true),
            'difficulty' => $request->difficulty ?? 1,
            'is_active' => $request->boolean('is_active')
        ]);

        return redirect()->route('admin.tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}