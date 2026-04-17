<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'THIQAH')) — {{ __('Admin') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a3a5c',
                        navy: '#20395d',
                        accent: '#2563eb',
                        gold: '#d4a843',
                        cream: '#FAF8F4',
                    },
                    fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
                    borderRadius: {
                        'leaf-tl': '2.5rem 0 0 0',
                        'leaf-br': '0 0 2.5rem 0',
                    },
                    boxShadow: {
                        panel: '0 0 10px 2px rgba(0,0,0,0.08)',
                        card: '0 4px 24px rgba(26, 58, 92, 0.06)',
                    },
                },
            },
        };
    </script>
    <style>
        body { font-family: Inter, ui-sans-serif, system-ui, sans-serif; }
        .btn-leaf {
            border-top-left-radius: 2.5rem;
            border-bottom-right-radius: 2.5rem;
        }
    </style>
    @stack('styles')
</head>
<body class="h-full bg-cream text-gray-800 antialiased">
<div class="flex min-h-full">
    @include('admin.partials.sidebar')

    <div id="admin-main" class="flex min-h-screen min-w-0 flex-1 flex-col transition-[margin] duration-200 lg:ml-0">
        @include('admin.partials.topbar')

        <main class="flex-1 px-4 py-6 pb-10 sm:px-6 lg:px-8">
            @yield('content')
        </main>

        <footer class="mt-auto border-t border-gray-200/80 bg-white/60 px-4 py-4 text-center text-xs text-gray-500 sm:px-6 lg:px-8">
            {{ config('app.name') }} — {{ __('Administration') }} · {{ now()->year }}
        </footer>
    </div>
</div>

<div id="admin-sidebar-backdrop" class="fixed inset-0 z-30 hidden bg-navy/40 lg:hidden" aria-hidden="true"></div>

<x-ui.flash-modal />
<script>
    (function () {
        var openBtn = document.getElementById('admin-sidebar-open');
        var closeBtn = document.getElementById('admin-sidebar-close');
        var sidebar = document.getElementById('admin-sidebar');
        var backdrop = document.getElementById('admin-sidebar-backdrop');
        function open() {
            if (!sidebar) return;
            sidebar.classList.remove('-translate-x-full');
            backdrop.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
        function close() {
            if (!sidebar) return;
            sidebar.classList.add('-translate-x-full');
            backdrop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
        openBtn && openBtn.addEventListener('click', open);
        closeBtn && closeBtn.addEventListener('click', close);
        backdrop && backdrop.addEventListener('click', close);
    })();
</script>
@stack('scripts')
</body>
</html>
