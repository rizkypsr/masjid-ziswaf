<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ziswaf') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="relative min-h-screen bg-gray-100">

        <livewire:navbar />

        @if ($header)
            <header class="relative">
                <div class="absolute w-full h-full bg-black opacity-30"></div>

                <img src="{{ url('storage/back.png') }}" alt="Background" class="object-cover h-screen md:h-full">
                <div class="absolute bottom-0 left-0 right-0 text-white top-1/2">
                    <div class="text-center ">
                        <h1 class="mb-4 text-3xl font-bold text-center md:text-6xl title-font">{{ $header }}</h1>
                        <p class="mx-auto text-xl leading-relaxed md:text-3xl xl:w-2/4 lg:w-3/4">{{ $subtitle }}</p>
                    </div>
                </div>
            </header>
        @endif


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    @livewireScripts
</body>

</html>
