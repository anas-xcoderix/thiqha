@php
    $partnerNavOpen = request()->routeIs('admin.partner.categories.*');
@endphp

<aside id="admin-sidebar"
       class="fixed inset-y-0 left-0 z-40 flex w-[280px] flex-col border-r border-white/10 bg-primary text-white shadow-panel transition-transform duration-200 lg:static lg:translate-x-0 -translate-x-full">
    <div class="flex h-16 shrink-0 items-center justify-between gap-3 border-b border-white/10 px-5">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 min-w-0">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/20 text-gold">
                <i class="fa-solid fa-shield-halved text-lg" aria-hidden="true"></i>
            </span>
            <span class="truncate font-semibold tracking-tight">{{ __('Admin') }}</span>
        </a>
        <button type="button" id="admin-sidebar-close" class="rounded-lg p-2 text-white/80 hover:bg-white/10 lg:hidden" aria-label="{{ __('Close menu') }}">
            <i class="fa-solid fa-xmark text-lg" aria-hidden="true"></i>
        </button>
    </div>

    <nav class="flex-1 space-y-1 overflow-y-auto px-3 py-4">
        @php
            $dashboardActive = request()->routeIs('admin.dashboard');
        @endphp
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition-colors {{ $dashboardActive ? 'bg-white/15 text-white shadow-inner' : 'text-white/75 hover:bg-white/10 hover:text-white' }}">
            <span class="flex w-8 justify-center text-gold/90"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
            {{ __('Dashboard') }}
        </a>

        <details class="group rounded-xl {{ $partnerNavOpen ? 'bg-white/10' : '' }}" @if($partnerNavOpen) open @endif>
            <summary class="flex cursor-pointer list-none items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/75 outline-none ring-white/0 transition-colors marker:content-none hover:bg-white/10 hover:text-white [&::-webkit-details-marker]:hidden">
                <span class="flex w-8 justify-center text-gold/90"><i class="fa-solid fa-handshake" aria-hidden="true"></i></span>
                <span class="flex-1 text-left">{{ __('Partner') }}</span>
                <i class="fa-solid fa-chevron-down text-xs text-white/50 transition-transform group-open:rotate-180" aria-hidden="true"></i>
            </summary>
            <div class="mt-1 space-y-0.5 border-l border-white/10 pl-4 ml-5 py-1">
                @php
                    $pcActive = request()->routeIs('admin.partner.categories.*');
                @endphp
                <a href="{{ route('admin.partner.categories.index') }}"
                   class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium transition-colors {{ $pcActive ? 'bg-white/15 text-white' : 'text-white/70 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-tags w-5 text-center text-gold/80" aria-hidden="true"></i>
                    {{ __('Categories') }}
                </a>
            </div>
        </details>

        @php
            $prodCatActive = request()->routeIs('admin.product-categories.*');
        @endphp
        <a href="{{ route('admin.product-categories.index') }}"
           class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition-colors {{ $prodCatActive ? 'bg-white/15 text-white shadow-inner' : 'text-white/75 hover:bg-white/10 hover:text-white' }}">
            <span class="flex w-8 justify-center text-gold/90"><i class="fa-solid fa-box" aria-hidden="true"></i></span>
            {{ __('Product categories') }}
        </a>

        <a href="{{ route('home.index') }}"
           class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/75 transition-colors hover:bg-white/10 hover:text-white">
            <span class="flex w-8 justify-center text-gold/90"><i class="fa-solid fa-house" aria-hidden="true"></i></span>
            {{ __('Public site') }}
        </a>
    </nav>

    <div class="border-t border-white/10 p-4">
        <div class="rounded-xl bg-white/5 px-3 py-3">
            <p class="truncate text-sm font-medium text-white">{{ auth()->user()->name }}</p>
            <p class="truncate text-xs text-white/60">{{ auth()->user()->email }}</p>
            <a href="{{ route('logout') }}" class="mt-3 flex items-center justify-center gap-2 rounded-lg border border-white/20 py-2 text-xs font-semibold text-white transition hover:bg-white/10">
                <i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i>
                {{ __('Log out') }}
            </a>
        </div>
    </div>
</aside>
