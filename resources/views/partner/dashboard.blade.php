@extends('partner.layouts.app')

@section('title', __('Partner dashboard'))
@section('heading', __('Dashboard'))
@section('subheading', __('Manage your presence on Thiqah — same palette as the customer experience.'))

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Active requests') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('Quote & service requests') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-accent/10 text-accent">
                    <i class="fa-solid fa-inbox text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Projects') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('In progress') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-primary/10 text-primary">
                    <i class="fa-solid fa-diagram-project text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Rating') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('From verified clients') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/15 text-gold">
                    <i class="fa-solid fa-star text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Earnings') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('This month · placeholder') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/15 text-gold">
                    <i class="fa-solid fa-wallet text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="mt-6 grid gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2 rounded-2xl border border-gray-100 bg-white p-6 shadow-card">
            <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-4">
                <div>
                    <h2 class="text-base font-semibold text-navy">{{ __('Pipeline') }}</h2>
                    <p class="text-sm text-gray-500">{{ __('Visual placeholder — hook to your orders module.') }}</p>
                </div>
                <span class="rounded-full bg-cream px-3 py-1 text-xs font-semibold text-navy ring-1 ring-gold/30">{{ __('Preview') }}</span>
            </div>
            <div class="mt-8 space-y-4">
                @php $stages = [__('Lead'), __('Quoted'), __('Accepted'), __('In progress'), __('Done')]; @endphp
                @foreach ($stages as $i => $label)
                    <div class="flex items-center gap-4">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-xs font-bold text-gold">{{ $i + 1 }}</span>
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center justify-between gap-2">
                                <span class="text-sm font-medium text-navy">{{ $label }}</span>
                                <span class="text-xs text-gray-400">—</span>
                            </div>
                            <div class="mt-2 h-2 overflow-hidden rounded-full bg-gray-100">
                                <div class="h-full rounded-full bg-gradient-to-r from-gold to-primary" style="width: {{ min(100, ($i + 1) * 22) }}%"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-card">
            <h2 class="text-base font-semibold text-navy">{{ __('Quick links') }}</h2>
            <p class="mt-1 text-sm text-gray-500">{{ __('Same “leaf” buttons as the storefront.') }}</p>
            <div class="mt-5 flex flex-col gap-3">
                <a href="{{ route('profile.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    <i class="fa-solid fa-user" aria-hidden="true"></i>
                    {{ __('Account & security') }}
                </a>
                <a href="{{ route('home.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 border-2 border-primary/20 bg-white px-4 py-3 text-sm font-semibold text-primary transition hover:bg-cream">
                    <i class="fa-solid fa-store" aria-hidden="true"></i>
                    {{ __('Browse marketplace') }}
                </a>
                <button type="button" class="btn-leaf inline-flex cursor-not-allowed items-center justify-center gap-2 border-2 border-gold/40 bg-cream px-4 py-3 text-sm font-semibold text-navy opacity-70" disabled>
                    <i class="fa-solid fa-file-invoice" aria-hidden="true"></i>
                    {{ __('Invoices') }}
                </button>
            </div>
        </div>
    </div>

    <div class="mt-6 rounded-2xl border border-gray-100 bg-white shadow-card overflow-hidden">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-gray-100 bg-cream/50 px-6 py-4">
            <h2 class="text-base font-semibold text-navy">{{ __('Upcoming tasks') }}</h2>
            <span class="text-xs font-medium text-gray-400">{{ __('Sample') }}</span>
        </div>
        <ul class="divide-y divide-gray-100">
            <li class="flex flex-wrap items-center justify-between gap-3 px-6 py-4 hover:bg-cream/40">
                <div class="flex min-w-0 items-center gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold/15 text-gold">
                        <i class="fa-solid fa-clipboard-check" aria-hidden="true"></i>
                    </span>
                    <div class="min-w-0">
                        <p class="font-medium text-navy">{{ __('Complete company profile') }}</p>
                        <p class="text-sm text-gray-500">{{ __('Add documents in profile when available') }}</p>
                    </div>
                </div>
                <span class="shrink-0 rounded-full bg-amber-500/10 px-2.5 py-1 text-xs font-semibold text-amber-800">{{ __('Soon') }}</span>
            </li>
            <li class="flex flex-wrap items-center justify-between gap-3 px-6 py-4 hover:bg-cream/40">
                <div class="flex min-w-0 items-center gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <i class="fa-solid fa-bell" aria-hidden="true"></i>
                    </span>
                    <div class="min-w-0">
                        <p class="font-medium text-navy">{{ __('Review new requests') }}</p>
                        <p class="text-sm text-gray-500">{{ __('Connect notifications to your backend') }}</p>
                    </div>
                </div>
                <span class="shrink-0 rounded-full bg-gray-100 px-2.5 py-1 text-xs font-semibold text-gray-600">{{ __('Placeholder') }}</span>
            </li>
        </ul>
    </div>
@endsection
