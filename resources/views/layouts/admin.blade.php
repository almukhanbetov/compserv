<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>DevOps Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="web/img/favicon.png">
    <link rel="stylesheet" href="web/css/main.css">
</head>

<body class="bg-gray-800">
    <div class="flex min-h-screen">
        <!-- SIDEBAR -->
        @include('includes-admin.aside')
        <!-- OVERLAY -->
        <div id="overlay" onclick="closeSidebar()" class="fixed inset-0 bg-black/50 hidden z-30 md:hidden">
        </div>

        <!-- CONTENT -->
        <div class="flex-1 flex flex-col">

            <!-- HEADER -->
            @include('includes-admin.header')

            <!-- MAIN -->
            <main class="flex-1 bg-gray-800 text-white pt-20 md:ml-64">
                @yield('content')
            </main>

        </div>
    </div>

    <!-- Scripts -->
    <script src="web/js/main.js"></script>
    @stack('scripts')
</body>

</html>
