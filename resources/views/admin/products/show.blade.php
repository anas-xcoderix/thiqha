@extends('admin.layouts.app')

@section('title', $product->name_en)
@section('heading', $product->name_en)
@section('subheading', __('Product details'))

@section('content')
    <div class="mx-auto max-w-4xl space-y-6">
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
            <div class="flex flex-wrap gap-4 border-b border-gray-100 pb-6">
                @foreach ($product->images as $img)
                    <a href="{{ $img->url() }}" target="_blank" rel="noopener noreferrer" class="block">
                        <img src="{{ $img->url() }}" alt="" class="h-24 w-24 rounded-xl object-cover ring-1 ring-gray-100 hover:ring-primary/30">
                    </a>
                @endforeach
            </div>

            <dl class="mt-6 grid gap-4 sm:grid-cols-2">
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Category') }}</dt>
                    <dd class="mt-1 font-medium text-navy">{{ $product->category?->name_en ?? '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Stock') }}</dt>
                    <dd class="mt-1 font-medium text-navy">{{ $product->inventory?->stock ?? '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Price') }}</dt>
                    <dd class="mt-1 font-medium text-navy">{{ number_format((float) $product->price, 2) }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Discount') }}</dt>
                    <dd class="mt-1 font-medium text-navy">{{ number_format((float) $product->discount, 2) }} ({{ $product->discount_type->label() }})</dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Net unit price') }}</dt>
                    <dd class="mt-1 text-lg font-semibold text-primary">{{ number_format($product->finalUnitPrice(), 2) }}</dd>
                </div>
            </dl>

            <div class="mt-8 space-y-4">
                <div>
                    <h3 class="text-sm font-semibold text-navy">{{ __('Detail (EN)') }}</h3>
                    <div class="mt-2 whitespace-pre-wrap text-sm text-gray-700">{{ $product->detail_en }}</div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-navy">{{ __('Detail (AR)') }}</h3>
                    <div class="mt-2 whitespace-pre-wrap text-sm text-gray-700" dir="rtl">{{ $product->detail_ar }}</div>
                </div>
                @if ($product->specification_en)
                    <div>
                        <h3 class="text-sm font-semibold text-navy">{{ __('Specification (EN)') }}</h3>
                        <div class="mt-2 whitespace-pre-wrap text-sm text-gray-700">{{ $product->specification_en }}</div>
                    </div>
                @endif
                @if ($product->specification_ar)
                    <div>
                        <h3 class="text-sm font-semibold text-navy">{{ __('Specification (AR)') }}</h3>
                        <div class="mt-2 whitespace-pre-wrap text-sm text-gray-700" dir="rtl">{{ $product->specification_ar }}</div>
                    </div>
                @endif
            </div>

            <div class="mt-8 flex flex-wrap gap-3 border-t border-gray-100 pt-6">
                <a href="{{ route('admin.products.edit', $product) }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white hover:bg-navy">{{ __('Edit') }}</a>
                @if ($product->inventory)
                    <a href="{{ route('admin.inventory.edit', $product->inventory) }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-primary/25 bg-primary/5 px-4 py-2.5 text-sm font-semibold text-primary hover:bg-primary/10">{{ __('Edit inventory') }}</a>
                @endif
                <a href="{{ route('admin.products.index') }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-gray-200 px-4 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Back to list') }}</a>
            </div>
        </div>
    </div>
@endsection
