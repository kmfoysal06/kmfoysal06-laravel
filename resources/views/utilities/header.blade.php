<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] text-black flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 flex justify-between">
            <h3 class="text-2xl"><a href="/">kmfoysal06</a></h3>
            <nav>
                <ul class="flex items-center gap-4">
                    <li><a href="/">Home</a></li>
                    <li><a href="http://blog.kmfoysal06.com/">Blog</a></li>
                    <li><a href="http://portfolio.kmfoysal06.com/">About</a></li>
                    <li><a href="/create">Create</a></li>
                </ul>
            </nav>
        </header>