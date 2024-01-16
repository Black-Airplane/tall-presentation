<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         @vite('resources/css/app.css')
         @livewireStyles
         @vite(['resources/js/app.js'])
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <title>{{ $title ?? 'Flight School' }}</title>
    </head>
    <body class="bg-black">
        {{ $slot }}
        @livewireScriptConfig
    </body>
</html>
