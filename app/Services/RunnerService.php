<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RunnerService
{
    protected string $url;

    public function __construct()
    {
        $this->url = config('runner.url');
    }

    public function run(string $language, string $code)
    {
        $response = Http::timeout(10)->post($this->url . '/run', [
            'language' => $language,
            'code' => $code,
        ]);

        return $response->json();
    }

    public function check(string $language, string $code, array $tests)
    {
        $response = Http::timeout(10)->post($this->url . '/check', [
            'language' => $language,
            'code' => $code,
            'tests' => $tests,
        ]);

        return $response->json();
    }
}