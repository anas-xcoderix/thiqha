@extends('admin.layouts.app')

@section('title', __('Inventory'))
@section('heading', __('Inventory'))
@section('subheading', $inventory->product?->name_en)

@section('content')
    <div class="mx-auto max-w-xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <dl class="space-y-4">
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Product') }}</dt>
                <dd class="mt-1 font-medium text-navy">{{ $inventory->product?->name_en ?? '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Category') }}</dt>
                <dd class="mt-1">{{ $inventory->product?->category?->name_en ?? '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ __('Stock') }}</dt>
                <dd class="mt-1 text-2xl font-bold text-primary">{{ $inventory->stock }}</dd>
            </div>
        </dl>
        <div class="mt-8 flex flex-wrap gap-3 border-t border-gray-100 pt-6">
            <a href="{{ route('admin.inventory.edit', $inventory) }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white hover:bg-navy">{{ __('Edit stock') }}</a>
            @if ($inventory->product)
                <a href="{{ route('admin.products.show', $inventory->product) }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-gray-200 px-4 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('View product') }}</a>
            @endif
            <a href="{{ route('admin.inventory.index') }}" class="btn-leaf inline-flex items-center gap-2 border-2 border-gray-200 px-4 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Back to list') }}</a>
        </div>
    </div>
@endsection
