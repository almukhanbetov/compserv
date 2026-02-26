<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RunController;
use App\Http\Controllers\UserCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\RunnerProxyController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\RunnerController;

Route::get('/post', function () {
    return view('post');
});

// pages
Route::get('/learning', [LearningController::class,'index']);
Route::get('/learning/{slug}', [LearningController::class,'language']);
Route::get('/learning/{slug}/runner', [LearningController::class,'runner']);

// json for UI
Route::get('/api/program/{id}', [LearningController::class,'programJson']);
Route::get('/api/task/{id}', [LearningController::class,'taskJson']);

// proxy to runner (чтобы фронт не знал порт runner)
Route::post('/api/run', [RunnerProxyController::class,'run']);
Route::post('/api/check', [RunnerProxyController::class,'check']);

// admin (минимум)
Route::prefix('admin')->name('admin.')->group(function(){
  Route::resource('languages', LanguageController::class);
  Route::resource('programs', ProgramController::class);
  Route::resource('tasks', TaskController::class);
});
Route::get('/', [PageController::class, 'index'])->name("pages.home");
Route::get('/about', [PageController::class, 'about'])->name("pages.about");
Route::get('/services', [PageController::class, 'services'])->name("pages.services");
Route::get('/educations', [PageController::class, 'educations'])->name("pages.educations");
Route::get('/contacts', [PageController::class, 'contacts'])->name("pages.contacts");
Route::get('/lessons', [LessonController::class, 'index']);
Route::get('/lessons/{id}', [LessonController::class, 'show']);
Route::post('/run', [RunController::class, 'run']);
Route::post('/save-code', [UserCodeController::class, 'store'])->middleware('auth');
Route::prefix('editor')->name('editor.')->group(function () {
    Route::get('/', [EditorController::class, 'index'])->name('index');
    Route::prefix('file')->group(function () {
        Route::post('/save', [EditorController::class, 'save'])->name('save');
        Route::post('/load', [EditorController::class, 'load'])->name('load');
        
    });
});
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get("/index", [AdminController::class, "index"]);
        Route::resource('categories', CategoryController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('educations', EducationController::class);
        Route::resource('users', UserController::class);
        Route::resource('lessons', LessonController::class);
        Route::post('lessons/reorder', [LessonController::class, 'reorder'])->name('lessons.reorder');
        Route::post('categories/{category}/toggle', [CategoryController::class,'toggle'])->name('categories.toggle');
        Route::post('categories/reorder',[CategoryController::class,'reorder'])->name('categories.reorder');
});
Route::get('/editor/run/{file}', function ($file) {
    $path = storage_path('app/editor/' . $file);
    if (!file_exists($path)) {
        abort(404);    }
    ob_start();        // Буфер вывода
    include $path;     // Выполняем PHP
    $output = ob_get_clean();
    return $output;
});
Route::get('/dashboard', function () {  
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
