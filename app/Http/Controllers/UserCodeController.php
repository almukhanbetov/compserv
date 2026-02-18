<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCode;
use Illuminate\Support\Facades\Auth;

class UserCodeController extends Controller
{
    // Сохранение кода
    public function store(Request $request)
    {
        UserCode::create([
            'user_id' => Auth::id(),
            'lesson_id' => $request->lesson_id,
            'code' => $request->code,
        ]);

        return back()->with('success', 'Код сохранён');
    }

    // 📌 МОИ СОХРАНЁННЫЕ КОДЫ
    public function myCodes()
    {
        $codes = UserCode::where('user_id', Auth::id())->get();

        return view('codes.index', compact('codes'));
    }
}
