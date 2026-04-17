@extends('admin.layouts.app')

@section('title', $service->name_en)
@section('heading', $service->name_en)
@section('subheading', __('Thiqah service'))

@section('content')
    <div class="mx-auto max-w-2xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-start">
            <div class="inline-flex shrink-0 items-center justify-center">
                <div class="flex h-[100px] w-[100px] rotate-45 items-center justify-center rounded-[22px] bg-[#816EA2] shadow-lg shadow-[#9381BB]/20">
                    <div class="-rotate-45">
                        <img src="{{ $service->iconForDisplay() }}" alt="" class="h-12 w-12 object-contain brightness-0 invert md:h-14 md:w-14">
                    </div>
                </div>
            </div>
            <div class="min-w-0 flex-1 space-y-3">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Name (EN)') }}</p>
                    <p class="text-lg font-semibold text-navy">{{ $service->name_en }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Name (AR)') }}</p>
                    <p class="text-lg text-navy" dir="rtl">{{ $service->name_ar }}</p>
                </div>
                <p class="text-xs text-gray-500">{{ __('Slug') }}: <code class="rounded bg-gray-100 px-1.5 py-0.5">{{ $service->slug }}</code></p>
                <p class="text-xs text-gray-500">{{ __('Sort order') }}: {{ $service->sort_order }}</p>
            </div>
        </div>
        <div class="mt-8 flex flex-wrap gap-3 border-t border-gray-100 pt-6">
            <a href="{{ route('admin.services.edit', $service) }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white hover:bg-navy">{{ __('Edit') }}</a>
            <a href="{{ route('admin.services.index') }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-gray-200 px-4 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Back to list') }}</a>
        </div>
    </div>
@endsection
