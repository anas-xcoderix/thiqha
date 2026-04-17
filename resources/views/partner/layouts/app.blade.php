<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'THIQAH')) — {{ __('Partner') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#1a3a5c', accent: '#2563eb' },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                },
            },
        };
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50 font-sans text-gray-900">
@include('partner.partials.header')

<main class="mx-auto max-w-6xl px-4 py-8">
    @yield('content')
</main>

@include('partner.partials.footer')

<x-ui.flash-modal />
@stack('scripts')
</body>
</html>
