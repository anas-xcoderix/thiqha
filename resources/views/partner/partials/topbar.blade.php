<header class="sticky top-0 z-20 border-b border-gray-200/80 bg-white/90 px-4 py-4 shadow-panel backdrop-blur-sm sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <button type="button" id="partner-sidebar-open" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white text-navy shadow-sm hover:border-primary/20 hover:bg-cream lg:hidden" aria-label="{{ __('Open menu') }}">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>
            <div>
                <h1 class="text-lg font-semibold text-navy sm:text-xl">@yield('heading', __('Dashboard'))</h1>
                @hasSection('subheading')
                    <p class="mt-0.5 text-sm text-gray-500">@yield('subheading')</p>
                @endif
            </div>
        </div>
        <div class="flex items-center gap-2 sm:gap-3">
            <a href="{{ route('home.index') }}" class="hidden items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-navy shadow-sm transition hover:border-gold/40 hover:bg-cream sm:inline-flex">
                <i class="fa-solid fa-store text-xs text-gold" aria-hidden="true"></i>
                {{ __('View storefront') }}
            </a>
            <span class="hidden h-9 w-px bg-gray-200 sm:block" aria-hidden="true"></span>
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-cream/80 px-3 py-1.5 shadow-sm">
                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-xs font-bold text-gold">{{ strtoupper(\Illuminate\Support\Str::substr(auth()->user()->name, 0, 1)) }}</span>
                <span class="hidden max-w-[140px] truncate text-sm font-medium text-navy sm:inline">{{ auth()->user()->name }}</span>
            </div>
        </div>
    </div>
</header>
