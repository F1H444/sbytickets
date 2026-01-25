<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SBYTickets') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900 border-x-0">
    <div id="app" class="min-h-screen flex flex-col">
        @include('components.navbar')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')
    </div>
    
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.js"></script>
</body>
</html>
