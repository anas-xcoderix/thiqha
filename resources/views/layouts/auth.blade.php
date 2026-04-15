<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'THIQAH'))</title>
    @stack('head-scripts')
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#1e2d5a',
                        brandDark: '#162244',
                        navy: '#20395D',
                        navyDark: '#1A2F4E',
                        purple: '#7C5CBF',
                        purpleLight: '#9B7FD4',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        arabic: ['Cairo', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    @stack('styles')
</head>
<body class="@yield('body-class', 'font-sans')">
@yield('content')
@stack('auth_scripts')
</body>
</html>
