<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditorController extends Controller
{
    private $basePath;

    public function __construct()
    {
        $this->basePath = storage_path('app/editor');
    }

    public function index()
    {
        return view('editor');
    }

    public function load(Request $request)
    {
        $path = $this->basePath . '/' . $request->filename;

        if (File::exists($path)) {
            return response()->json([
                'content' => File::get($path)
            ]);
        }

        return response()->json([
            'content' => ''
        ]);
    }

    public function save(Request $request)
    {
        $path = $this->basePath . '/' . $request->filename;

        File::put($path, $request->content);

        return response()->json([
            'status' => 'saved'
        ]);
    }
}
