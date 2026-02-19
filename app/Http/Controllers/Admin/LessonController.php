<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Education;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::with('education')
            ->orderBy('position')
            ->get();

        return view('admin.lessons.index', compact('lessons'));
    }
    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $id) {
            \App\Models\Lesson::where('id', $id)
                ->update(['position' => $index + 1]);
        }

        return response()->json(['status' => 'ok']);
    }

    public function create()
    {
        $educations = Education::all();

        return view('admin.lessons.create', compact('educations'));
    }

    public function store(Request $request)
    {
        Lesson::create($request->all());

        return redirect()->route('lessons.index');
    }

    public function edit(Lesson $lesson)
    {
        $educations = Education::all();

        return view('admin.lessons.edit', compact('lesson', 'educations'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return redirect()->route('lessons.index');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return back();
    }
}
