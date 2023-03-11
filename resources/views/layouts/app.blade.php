<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')



            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <div class="bg-linear-pink-invert py-12 px-4">
            <div tabindex="0" aria-label="footer" class="focus:outline-none mx-auto container flex flex-col items-center justify-center">

                <div class="text-black flex flex-col md:items-center f-f-l pt-3">


                    <div class="my-6 text-base text-color f-f-l">
                        <ul class="md:flex items-center">
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none dark:text-white  focus:underline hover:text-gray-500">About </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none dark:text-white  focus:underline hover:text-gray-500">Features </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none dark:text-white  focus:underline hover:text-gray-500">Careers </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none dark:text-white  focus:underline hover:text-gray-500">Help </a></li>
                            <li class="cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline dark:text-white hover:text-gray-500">Privacy Policy </a></li>
                        </ul>
                    </div>
                    <div class="text-sm text-color mb-10 f-f-l">
                        <p tabindex="0" class="dark:text-white focus:outline-none">© 2023 Prodify. All rights reserved</p>
                    </div>
                </div>
                <div class="w-9/12 h-0.5 bg-gray-100 dark:bg-gray-700 rounded-full"></div>

            </div>
        </div>



        @livewireScripts
    </body>
</html>
