<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased ">
    <div class="container p-4">
        <h1 class="text-3xl font-bold text-red-500">LARAVEL</h1>
        <h3 class="text-xl font-semibold text-white">Home</h3>

        <form action="/users" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input id="name" name="name" type="text"
                    class="block w-1/2 p-2 mt-1 text-sm border-gray-300 rounded-md focus:ring-1 focus:ring-red-500 focus:bg-slate-300 focus:outline-none bg-slate-200"
                    required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input id="email" name="email" type="email"
                    class="block w-1/2 p-2 mt-1 text-sm border-gray-300 rounded-md focus:ring-1 focus:ring-red-500 focus:bg-slate-300 focus:outline-none bg-slate-200"
                    required>
                <p class="text-sm text-gray-500">We'll never share your email with anyone else.</p>
            </div>

            <button class="px-4 py-2 text-sm text-white bg-black hover:bg-red-500">Submit</button>
        </form>
    </div>
</body>

</html>
