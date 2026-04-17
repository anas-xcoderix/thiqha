@php
    $nav = [
        ['route' => 'partner.dashboard', 'label' => __('Dashboard'), 'icon' => 'fa-gauge-high'],
        ['route' => 'partner.categories.index', 'label' => __('Categories'), 'icon' => 'fa-tags'],
        ['route' => 'profile.index', 'label' => __('My profile'), 'icon' => 'fa-user'],
        ['route' => 'home.index', 'label' => __('Public site'), 'icon' => 'fa-house', 'external' => true],
    ];
@endphp

<aside id="partner-sidebar"
       class="fixed inset-y-0 left-0 z-40 flex w-[280px] flex-col border-r border-white/10 bg-primary text-white shadow-panel transition-transform duration-200 lg:static lg:translate-x-0 -translate-x-full">
    <div class="flex h-16 shrink-0 items-center justify-between gap-3 border-b border-white/10 px-5">
        <a href="{{ route('partner.dashboard') }}" class="flex items-center gap-3 min-w-0">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/20 text-gold">
                <i class="fa-solid fa-handshake text-lg" aria-hidden="true"></i>
            </span>
            <span class="truncate font-semibold tracking-tight">{{ __('Partner') }}</span>
        </a>
        <button type="button" id="partner-sidebar-close" class="rounded-lg p-2 text-white/80 hover:bg-white/10 lg:hidden" aria-label="{{ __('Close menu') }}">
            <i class="fa-solid fa-xmark text-lg" aria-hidden="true"></i>
        </button>
    </div>

    <nav class="flex-1 space-y-1 overflow-y-auto px-3 py-4">
        @foreach ($nav as $item)
            @php
                $isActive = ! empty($item['external'])
                    ? false
                    : ($item['route'] === 'profile.index'
                        ? request()->routeIs('profile.index', 'profile.update')
                        : ($item['route'] === 'partner.categories.index'
                            ? request()->routeIs('partner.categories.*')
                            : request()->routeIs($item['route'])));
            @endphp
            <a href="{{ route($item['route']) }}"
               class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition-colors {{ $isActive ? 'bg-white/15 text-white shadow-inner' : 'text-white/75 hover:bg-white/10 hover:text-white' }}">
                <span class="flex w-8 justify-center text-gold/90"><i class="fa-solid {{ $item['icon'] }}" aria-hidden="true"></i></span>
                {{ $item['label'] }}
            </a>
        @endforeach
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
