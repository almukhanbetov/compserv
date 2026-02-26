<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RunnerService;

class RunnerController extends Controller
{
    public function run(Request $request, RunnerService $runner)
    {
        $request->validate([
            'language' => 'required|string',
            'code' => 'required|string',
        ]);

        return response()->json(
            $runner->run(
                $request->language,
                $request->code
            )
        );
    }
}