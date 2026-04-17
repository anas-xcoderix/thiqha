@extends('admin.layouts.app')

@section('title', __('Product categories'))
@section('heading', __('Product categories'))
@section('subheading', __('Categories for the product catalogue — stored with type “product”.') )

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <p class="text-sm text-gray-600"></p>
        <a href="{{ route('admin.product-categories.create') }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>
            {{ __('Add category') }}
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-card">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-gray-100 bg-cream/50 text-xs font-semibold uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-5 py-3">{{ __('Logo') }}</th>
                        <th class="px-5 py-3">{{ __('Name (EN)') }}</th>
                        <th class="px-5 py-3">{{ __('Name (AR)') }}</th>
                        <th class="px-5 py-3 text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    @forelse ($categories as $category)
                        <tr class="hover:bg-cream/40">
                            <td class="px-5 py-3">
                                @if ($category->logoUrl())
                                    <img src="{{ $category->logoUrl() }}" alt="" class="h-10 w-10 rounded-lg object-cover ring-1 ring-gray-100">
                                @else
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-gray-100 text-gray-400">
                                        <i class="fa-solid fa-image" aria-hidden="true"></i>
                                    </span>
                                @endif
                            </td>
                            <td class="px-5 py-3 font-medium text-navy">{{ $category->name_en }}</td>
                            <td class="px-5 py-3" dir="rtl">{{ $category->name_ar }}</td>
                            <td class="px-5 py-3 text-right">
                                <div class="flex flex-wrap justify-end gap-2">
                                    <a href="{{ route('admin.product-categories.show', $category) }}" class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-xs font-semibold text-navy hover:bg-cream">{{ __('View') }}</a>
                                    <a href="{{ route('admin.product-categories.edit', $category) }}" class="rounded-lg border border-primary/25 bg-primary/5 px-2.5 py-1.5 text-xs font-semibold text-primary hover:bg-primary/10">{{ __('Edit') }}</a>
                                    <form action="{{ route('admin.product-categories.destroy', $category) }}" method="post" class="inline" onsubmit="return confirm(@json(__('Delete this category?')));">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg border border-red-200 bg-red-50 px-2.5 py-1.5 text-xs font-semibold text-red-700 hover:bg-red-100">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-5 py-12 text-center text-sm text-gray-500">{{ __('No categories yet.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($categories->hasPages())
            <div class="border-t border-gray-100 bg-white px-5 py-4">
                {{ $categories->links() }}
            </div>
        @endif
    </div>
@endsection
