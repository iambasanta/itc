<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('logo/favicon.ico') }}">

    <title> PITC @isset($title) | {{ $title }} @endisset</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind UI -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- alpinejs-slug -->
    <script src="https://unpkg.com/alpinejs-slug@1.x.x/dist/slug.min.js"></script>

    @stack('styles')

</head>

<body class="antialiased bg-gray-200" style="font-family: Open Sans, sans-serif;">

    {{ $slot }}

    @stack('scripts')

</body>

</html>
