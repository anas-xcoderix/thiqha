<header class="border-b border-gray-200 bg-white shadow-sm">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-4 py-4">
        <div class="flex items-center gap-6">
            <a href="{{ route('partner.dashboard') }}" class="text-lg font-semibold text-primary">{{ __('Partner area') }}</a>
            <nav class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                <a href="{{ route('home.index') }}" class="hover:text-primary">{{ __('Site home') }}</a>
            </nav>
        </div>
        <div class="flex items-center gap-3 text-sm">
            @auth
                <span class="hidden text-gray-500 sm:inline">{{ auth()->user()->name }}</span>
                <a href="{{ route('logout') }}" class="rounded-lg border border-gray-300 px-3 py-1.5 font-medium text-gray-700 hover:bg-gray-100">{{ __('Log out') }}</a>
            @endauth
        </div>
    </div>
</header>
