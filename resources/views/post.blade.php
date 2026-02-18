@extends('layouts.app')

@section('title', 'Go Cookie Example')
@section('description', 'How to use cookies in Go')

@section('content')

    <h2>Go Cookie Example</h2>

    <p>Пример создания cookie в Go:</p>

    <pre><code class="language-go">
package main

import (
    "net/http"
)

func setCookie(w http.ResponseWriter) {
    cookie := http.Cookie{
        Name:  "user",
        Value: "Mukhtar",
    }

    http.SetCookie(w, &cookie)
}
</code></pre>

@endsection
