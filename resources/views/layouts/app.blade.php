<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Tayyab Sabir — PHP / Laravel Developer')</title>
  <meta name="description" content="@yield('description', 'PHP & Laravel developer building backend systems, REST APIs, and CMS platforms.')">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap (grid + utilities only — visual language comes from our own CSS) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Design system -->
  <link href="{{ asset('css/design-system.css') }}" rel="stylesheet">
  <link href="{{ asset('css/components.css') }}" rel="stylesheet">
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
  <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body>
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
