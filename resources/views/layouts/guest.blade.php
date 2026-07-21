<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Pribadi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-pink-50">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-6">

                <a href="/" class="inline-block">
                    <h1 class="text-4xl font-bold text-pink-600">
                        Blog Pribadi
                    </h1>
                </a>

            </div>

            <!-- Card -->
            <div class="bg-white rounded-2xl shadow-xl border-t-4 border-pink-500 p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>
</html>