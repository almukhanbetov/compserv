<?php
namespace App\Http\Controllers;
use App\Models\Language;
use App\Models\Program;
use App\Models\Task;

class LearningController extends Controller
{
  public function index(){
    $languages = Language::orderBy('name')->get();
    return view('learning.index', compact('languages'));
  }

  public function language($slug){
    $language = Language::where('slug',$slug)->firstOrFail();
    $programs = $language->programs()->where('is_active',true)->orderBy('title')->get();
    $tasks = $language->tasks()->orderBy('title')->get();
    return view('learning.language', compact('language','programs','tasks'));
  }

  public function runner($slug){
    $language = Language::where('slug',$slug)->firstOrFail();
    return view('learning.runner', compact('language'));
  }

  public function programJson($id){
    return Program::findOrFail($id);
  }

  public function taskJson($id){
    return Task::findOrFail($id);
  }
}