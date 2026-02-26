<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;

class RunnerProxyController extends Controller
{
  public function run(Request $r){
    $resp = Http::timeout(10)->post(config('services.runner.url').'/run', $r->all());
    return response()->json($resp->json(), $resp->status());
  }

  public function check(Request $r){
    $resp = Http::timeout(10)->post(config('services.runner.url').'/check', $r->all());
    return response()->json($resp->json(), $resp->status());
  }
}