<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Регистрация') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    @include('includes.header')
    @include('includes.navbar-area')
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-close">
                    <span class="search-close-line"></span>
                    <span class="search-close-line"></span>
                </div>
                <div class="search-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    @include('includes.footer')
    <div class="switch-box">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-go.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    {{-- <script src="https://unpkg.com/monaco-editor@latest/min/vs/loader.js"></script> --}}
    <script>
        // require.config({
        //     paths: {
        //         vs: 'https://unpkg.com/monaco-editor@0.45.0/min/vs'
        //     }
        // });
    //     require(['vs/editor/editor.main'], function() {
    //                 window.editor = monaco.editor.create(
    //                         document.getElementById('editor'), {
    //                             value: "<?php\n\n// Laravel IDE",
    //                             language: "php",
    //                             theme: "vs-dark",
    //                             automaticLayout: true
    //                         }
    //                     );
    //                 });
    // </script>
    // <script>
    //     function loadFile() {
    //         fetch('/editor/load', {
    //                 method: 'POST',
    //                 headers: {
    //                     'Content-Type': 'application/json',
    //                     'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //                 },
    //                 body: JSON.stringify({
    //                     filename: filename.value
    //                 })
    //             })
    //             .then(r => r.json())
    //             .then(data => {
    //                 editor.setValue(data.content);
    //             });
    //     }

    //     function saveFile() {
    //         fetch('/editor/save', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             },
    //             body: JSON.stringify({
    //                 filename: filename.value,
    //                 content: editor.getValue()
    //             })
    //         });
    //     }
    //     /* RUN */
    //     function runCode() {
    //         saveFile(); // сначала сохранить
    //         setTimeout(() => {
    //             document.getElementById('preview').src =
    //                 '/editor/run/' + filename.value + '?t=' + Date.now();
    //         }, 300);
    //     }
    // </script>
</body>

</html>
