<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased">
    <div class="container p-4">
        <header>
            @include('layout.nav')
        </header>

        <main>
            <div class="flex w-full">
                <div class="hidden md:block basis-1/6">
                    @section('sidebar')
                        <p>Master Sidebar</p>
                    @show
                </div>

                <div class="basis-5/6">
                    @yield('content')
                </div>
            </div>
        </main>

    </div>
</body>

</html>
