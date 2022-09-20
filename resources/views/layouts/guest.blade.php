<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-blueGray-700 antialiased">
<div class="font-sans text-gray-900 antialiased">
    <main>
        <section class="relative w-full h-full py-40 min-h-screen">
            <div class="absolute top-0 w-full h-full bg-gradient-to-r from-cyan-500 to-blue-500 bg-full bg-no-repeat"></div>

            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    {{ $slot }}
                </div>
            </div>

            <footer class="absolute w-full bottom-0 bg-gradient-to-r from-cyan-500 to-blue-500 pb-6">
                <div class="container mx-auto px-4">
                    <div
                        class="flex flex-wrap items-center md:justify-between justify-center"
                    >
                        <div class="w-full md:w-4/12 px-4">
                            <div
                                class="text-sm text-white font-semibold py-1 text-center md:text-left"
                            >
                                Copyright © <span id="get-current-year"></span>
                                <a
                                    href="https://www.creative-tim.com?ref=njs-login"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold py-1"
                                >Dartdroid</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</div>
</body>
</html>
