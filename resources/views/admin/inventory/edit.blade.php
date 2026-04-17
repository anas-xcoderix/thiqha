@extends('admin.layouts.app')

@section('title', __('Edit inventory'))
@section('heading', __('Edit inventory'))
@section('subheading', $inventory->product?->name_en)

@section('content')
    <div class="mx-auto max-w-xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <div class="mb-6 rounded-xl border border-primary/15 bg-primary/5 px-4 py-3 text-sm text-navy">
            <p><span class="font-semibold">{{ __('Product') }}:</span> {{ $inventory->product?->name_en ?? '—' }}</p>
            <p class="mt-1 text-gray-600">{{ __('Category') }}: {{ $inventory->product?->category?->name_en ?? '—' }}</p>
        </div>

        <form action="{{ route('admin.inventory.update', $inventory) }}" method="post" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label for="stock" class="block text-sm font-medium text-navy">{{ __('Stock quantity') }}</label>
                <input type="number" name="stock" id="stock" min="0" step="1" value="{{ old('stock', $inventory->stock) }}" required
                       class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
                @error('stock')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-wrap gap-3 pt-2">
                <button type="submit" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    {{ __('Save') }}
                </button>
                <a href="{{ route('admin.inventory.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 border-2 border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
