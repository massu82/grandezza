<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-stone-600">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <div class="bg-stone-800 pb-32">
        <nav class="bg-stone-800">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="border-b border-stone-700">
                    <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <a href="{{route('fest')}}">
                                    <img src="/img/grandezza-fest.webp"
                                         alt="Grandezza Fest" class="img-fluid h-10 md:h-12 mx-auto py-1"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-amber-50">@yield('title')</h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-stone-50 px-5 py-6 shadow sm:px-6">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
