<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portfolio — PHP Laravel Developer')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lucide-static/0.376.0/font/lucide.min.css">

    <!-- Styles -->
    {{-- @vite(['resources/css/portfolio.css']) --}}
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    
    @stack('styles')
</head>
<body class="grid-bg">
    @include('components.navigation')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
    
    <!-- Scripts -->
    {{-- @vite(['resources/js/portfolio.js']) --}}
    <script src="{{ asset('js/portfolio.js') }}"></script>
    @stack('scripts')
</body>
</html>