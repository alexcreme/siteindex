<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<div class="w-full bg-cyan-800 text-center text-sm text-black font-bold uppercase flex">
    <nav class="justify-start">
        <div class="gap-x-2 flex text-sm">
            <a
                href="{{ url('/dashboard') }}"
                class="flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                <x-far-house class="w-10 h-10 text-white"/>
                Acasa
            </a>


            <a
                href="{{ url('/adauga') }}"
                class=" flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                <x-far-plus class="w-10 h-10 text-white"/>
                Adauga
            </a>
            <a
                href="{{ url('/dashboard') }}"
                class="flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                <x-far-messages class="w-10 h-10 text-white"/>
                Contact
            </a>
        </div>
    </nav>

    @if (Route::has('login'))
        <nav class=" flex flex-1 justify-end">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    <x-far-user class="w-10 h-10 text-white"/>
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="flex flex-col items-center justify-center rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        <x-far-user-plus class="w-10 h-10 text-white"/>
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</div>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div
        class="relative min-h-screen flex flex-col items-center py-4 selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-full">
            <div class="flex flex-col mx-auto items-center justify-center">
                <x-far-signs-post class="w-14 h-14 text-white"/>
                SITEINDEX.RO
            </div>

            <main>

                <div class="w-full flex max-sm:flex-col mx-auto gap-x-4">

                    <div class="sm:w-1/5 flex flex-col">
                        <div
                            class="bg-cyan-800 rounded-t-md p-2 text-white uppercase font-bold text-center max-sm:my-4">
                            Categorii
                        </div>

                        <x-categories/>


                    </div>

                    <div class="sm:w-4/5 max-sm:my-6">
                        {{ $slot }}
                    </div>
                </div>

            </main>
            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</div>
</body>
</html>
