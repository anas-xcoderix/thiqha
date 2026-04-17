@extends('admin.layouts.app')

@section('title', __('Inventory'))
@section('heading', __('Inventory'))
@section('subheading', __('Stock levels for each product — one row per product.'))

@section('content')
    <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-card">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-gray-100 bg-cream/50 text-xs font-semibold uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-5 py-3">{{ __('Product') }}</th>
                        <th class="px-5 py-3">{{ __('Category') }}</th>
                        <th class="px-5 py-3">{{ __('Stock') }}</th>
                        <th class="px-5 py-3">{{ __('Price') }}</th>
                        <th class="px-5 py-3 text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    @forelse ($inventories as $row)
                        @php
                            $p = $row->product;
                        @endphp
                        <tr class="hover:bg-cream/40">
                            <td class="px-5 py-3 font-medium text-navy">{{ $p?->name_en ?? '—' }}</td>
                            <td class="px-5 py-3">{{ $p?->category?->name_en ?? '—' }}</td>
                            <td class="px-5 py-3 font-semibold">{{ $row->stock }}</td>
                            <td class="px-5 py-3 whitespace-nowrap">{{ $p ? number_format((float) $p->price, 2) : '—' }}</td>
                            <td class="px-5 py-3 text-right">
                                <div class="flex flex-wrap justify-end gap-2">
                                    <a href="{{ route('admin.inventory.show', $row) }}" class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-xs font-semibold text-navy hover:bg-cream">{{ __('View') }}</a>
                                    <a href="{{ route('admin.inventory.edit', $row) }}" class="rounded-lg border border-primary/25 bg-primary/5 px-2.5 py-1.5 text-xs font-semibold text-primary hover:bg-primary/10">{{ __('Edit') }}</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-5 py-12 text-center text-sm text-gray-500">{{ __('No inventory rows yet. Add a product to create stock records.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($inventories->hasPages())
            <div class="border-t border-gray-100 bg-white px-5 py-4">
                {{ $inventories->links() }}
            </div>
        @endif
    </div>
@endsection
