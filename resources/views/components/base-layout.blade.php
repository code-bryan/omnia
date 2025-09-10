@php
    $classes = "font-display w-full h-full $class";
@endphp

<!DOCTYPE html>
<html class="w-full h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
        onload="this.rel='stylesheet'" rel="stylesheet" />

    {{-- Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="{{ $classes }}">
    {{ $slot }}
</body>

</html>
