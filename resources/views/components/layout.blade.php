<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=joti-one:400" rel="stylesheet" />
    @vite('resources/css/app.css')

    @livewireStyles
</head>
<body class="antialiased font-sans">

<x-nav />

 {{ $slot }}

 @livewireScripts
</body>
</html>
