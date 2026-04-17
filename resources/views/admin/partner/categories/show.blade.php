@extends('admin.layouts.app')

@section('title', $category->name_en)
@section('heading', $category->name_en)
@section('subheading', __('Partner · service provider category'))

@section('content')
    <div class="mx-auto max-w-2xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-start">
            @if ($category->logoUrl())
                <img src="{{ $category->logoUrl() }}" alt="" class="h-28 w-28 shrink-0 rounded-2xl object-cover ring-1 ring-gray-100">
            @endif
            <div class="min-w-0 flex-1 space-y-3">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Name (EN)') }}</p>
                    <p class="text-lg font-semibold text-navy">{{ $category->name_en }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Name (AR)') }}</p>
                    <p class="text-lg text-navy" dir="rtl">{{ $category->name_ar }}</p>
                </div>
                <p class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">{{ $category->type->label() }}</p>
            </div>
        </div>
        <div class="mt-8 flex flex-wrap gap-3 border-t border-gray-100 pt-6">
            <a href="{{ route('admin.partner.categories.edit', $category) }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white hover:bg-navy">{{ __('Edit') }}</a>
            <a href="{{ route('admin.partner.categories.index') }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-gray-200 px-4 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Back to list') }}</a>
        </div>
    </div>
@endsection
