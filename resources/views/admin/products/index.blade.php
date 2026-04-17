@extends('admin.layouts.app')

@section('title', __('Products'))
@section('heading', __('Products'))
@section('subheading', __('Catalogue items linked to product categories, pricing, and inventory.'))

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <p class="text-sm text-gray-600">{{ __('Each new product creates one inventory row for stock.') }}</p>
        <a href="{{ route('admin.products.create') }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>
            {{ __('Add product') }}
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-card">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-gray-100 bg-cream/50 text-xs font-semibold uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-5 py-3">{{ __('Image') }}</th>
                        <th class="px-5 py-3">{{ __('Name (EN)') }}</th>
                        <th class="px-5 py-3">{{ __('Category') }}</th>
                        <th class="px-5 py-3">{{ __('Price') }}</th>
                        <th class="px-5 py-3">{{ __('Discount') }}</th>
                        <th class="px-5 py-3">{{ __('Net') }}</th>
                        <th class="px-5 py-3">{{ __('Stock') }}</th>
                        <th class="px-5 py-3 text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    @forelse ($products as $product)
                        @php
                            $thumb = $product->images->first();
                        @endphp
                        <tr class="hover:bg-cream/40">
                            <td class="px-5 py-3">
                                @if ($thumb)
                                    <img src="{{ $thumb->url() }}" alt="" class="h-12 w-12 rounded-lg object-cover ring-1 ring-gray-100">
                                @else
                                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-400">
                                        <i class="fa-solid fa-image" aria-hidden="true"></i>
                                    </span>
                                @endif
                            </td>
                            <td class="px-5 py-3 font-medium text-navy">{{ $product->name_en }}</td>
                            <td class="px-5 py-3">{{ $product->category?->name_en ?? '—' }}</td>
                            <td class="px-5 py-3 whitespace-nowrap">{{ number_format((float) $product->price, 2) }}</td>
                            <td class="px-5 py-3 whitespace-nowrap">
                                {{ number_format((float) $product->discount, 2) }}
                                <span class="text-xs text-gray-500">({{ $product->discount_type->label() }})</span>
                            </td>
                            <td class="px-5 py-3 font-medium text-navy whitespace-nowrap">{{ number_format($product->finalUnitPrice(), 2) }}</td>
                            <td class="px-5 py-3">{{ $product->inventory?->stock ?? '—' }}</td>
                            <td class="px-5 py-3 text-right">
                                <div class="flex flex-wrap justify-end gap-2">
                                    <a href="{{ route('admin.products.show', $product) }}" class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-xs font-semibold text-navy hover:bg-cream">{{ __('View') }}</a>
                                    <a href="{{ route('admin.products.edit', $product) }}" class="rounded-lg border border-primary/25 bg-primary/5 px-2.5 py-1.5 text-xs font-semibold text-primary hover:bg-primary/10">{{ __('Edit') }}</a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="post" class="inline" onsubmit="return confirm(@json(__('Delete this product and its inventory?')));">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg border border-red-200 bg-red-50 px-2.5 py-1.5 text-xs font-semibold text-red-700 hover:bg-red-100">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-5 py-12 text-center text-sm text-gray-500">{{ __('No products yet.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($products->hasPages())
            <div class="border-t border-gray-100 bg-white px-5 py-4">
                {{ $products->links() }}
            </div>
        @endif
    </div>
@endsection
