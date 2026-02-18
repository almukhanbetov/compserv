<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunController extends Controller
{
    public function run(Request $request)
    {
        $code = $request->code;

        $file = storage_path('app/run.go');
        file_put_contents($file, $code);

        $output = shell_exec("go run $file");

        return response()->json([
            'output' => $output
        ]);
    }
}
