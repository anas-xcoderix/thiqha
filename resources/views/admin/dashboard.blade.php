@extends('admin.layouts.app')

@section('title', __('Admin dashboard'))
@section('heading', __('Dashboard'))
@section('subheading', __('Overview of your platform — aligned with the storefront look and feel.'))

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Total users') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('Connect your analytics later') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/15 text-gold">
                    <i class="fa-solid fa-users text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Partners') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('Pending & approved') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-primary/10 text-primary">
                    <i class="fa-solid fa-handshake text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Orders') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('This month') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-accent/10 text-accent">
                    <i class="fa-solid fa-cart-shopping text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-card">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-sm font-medium text-gray-500">{{ __('Revenue') }}</p>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-navy">—</p>
                    <p class="mt-1 text-xs text-gray-400">{{ __('KWD · placeholder') }}</p>
                </div>
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-leaf-tl rounded-leaf-br bg-gold/15 text-gold">
                    <i class="fa-solid fa-chart-column text-lg" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="mt-6 grid gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2 rounded-2xl border border-gray-100 bg-white p-6 shadow-card">
            <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-4">
                <div>
                    <h2 class="text-base font-semibold text-navy">{{ __('Activity overview') }}</h2>
                    <p class="text-sm text-gray-500">{{ __('Wire this chart to live metrics when ready.') }}</p>
                </div>
                <span class="rounded-full bg-cream px-3 py-1 text-xs font-semibold text-navy ring-1 ring-gold/30">{{ __('Preview') }}</span>
            </div>
            <div class="mt-6 flex h-48 items-end justify-between gap-2 px-2 sm:gap-3">
                @foreach ([40, 65, 45, 80, 55, 90, 70, 95, 60, 75, 50, 85] as $h)
                    <div class="flex-1 rounded-t-md bg-gradient-to-t from-primary/90 to-primary/30" style="height: {{ $h }}%"></div>
                @endforeach
            </div>
            <div class="mt-4 flex justify-between text-xs text-gray-400">
                <span>{{ __('Jan') }}</span>
                <span>{{ __('Dec') }}</span>
            </div>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-card">
            <h2 class="text-base font-semibold text-navy">{{ __('Quick actions') }}</h2>
            <p class="mt-1 text-sm text-gray-500">{{ __('Shortcuts styled like storefront CTAs.') }}</p>
            <div class="mt-5 flex flex-col gap-3">
                <a href="{{ route('home.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    <i class="fa-solid fa-house" aria-hidden="true"></i>
                    {{ __('Open storefront') }}
                </a>
                <button type="button" class="btn-leaf inline-flex cursor-not-allowed items-center justify-center gap-2 border-2 border-primary/20 bg-white px-4 py-3 text-sm font-semibold text-primary opacity-70" disabled>
                    <i class="fa-solid fa-user-plus" aria-hidden="true"></i>
                    {{ __('Invite user') }}
                </button>
                <button type="button" class="btn-leaf inline-flex cursor-not-allowed items-center justify-center gap-2 border-2 border-gold/40 bg-cream px-4 py-3 text-sm font-semibold text-navy opacity-70" disabled>
                    <i class="fa-solid fa-file-export" aria-hidden="true"></i>
                    {{ __('Export report') }}
                </button>
            </div>
        </div>
    </div>

    <div class="mt-6 rounded-2xl border border-gray-100 bg-white shadow-card overflow-hidden">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-gray-100 bg-cream/50 px-6 py-4">
            <h2 class="text-base font-semibold text-navy">{{ __('Recent activity') }}</h2>
            <span class="text-xs font-medium text-gray-400">{{ __('Sample rows') }}</span>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-gray-100 bg-white text-xs font-semibold uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-6 py-3">{{ __('Event') }}</th>
                        <th class="px-6 py-3">{{ __('User') }}</th>
                        <th class="px-6 py-3">{{ __('When') }}</th>
                        <th class="px-6 py-3">{{ __('Status') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    <tr class="hover:bg-cream/40">
                        <td class="px-6 py-4 font-medium text-navy">{{ __('Admin signed in') }}</td>
                        <td class="px-6 py-4">{{ auth()->user()->email }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ now()->format('M j, H:i') }}</td>
                        <td class="px-6 py-4"><span class="inline-flex rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">{{ __('Live') }}</span></td>
                    </tr>
                    <tr class="hover:bg-cream/40">
                        <td class="px-6 py-4 font-medium text-navy">{{ __('Dashboard viewed') }}</td>
                        <td class="px-6 py-4">—</td>
                        <td class="px-6 py-4 text-gray-500">—</td>
                        <td class="px-6 py-4"><span class="inline-flex rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-semibold text-gray-600">{{ __('Placeholder') }}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
