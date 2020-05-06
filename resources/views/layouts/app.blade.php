<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style media="screen">
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #48373e;
            color: #fff;
        }

        .sosha-bgcolor {
            background-color: #ff0031;
        }

        .soshalbox {
            max-width: 800px;
        }
    </style>
</head>
<body>
    <div id="app">
        <section class="px-10">
            <header class="container mx-auto py-2">
                <h1><img src="/gfx/soshabil.png" alt=""></h1>
            </header>
        </section>

        <section class="px-10 py-2">
            <main class="container mx-auto">
                @yield('content')
            </main>
        </section>

    </div>
</body>
</html>
