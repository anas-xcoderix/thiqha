@extends('admin.layouts.app')

@section('title', __('Edit product'))
@section('heading', __('Edit product'))
@section('subheading', __('Update catalogue data and images. Adjust stock from Inventory if needed.'))

@section('content')
    <div class="mx-auto max-w-4xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <form action="{{ route('admin.products.update', $product) }}" method="post" enctype="multipart/form-data" class="space-y-2">
            @csrf
            @method('PUT')
            @include('admin.products.partials.form-fields', [
                'product' => $product,
                'productCategories' => $productCategories,
                'showStock' => false,
            ])
            <div class="flex flex-wrap gap-3 pt-6">
                <button type="submit" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    {{ __('Update') }}
                </button>
                <a href="{{ route('admin.products.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 border-2 border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
