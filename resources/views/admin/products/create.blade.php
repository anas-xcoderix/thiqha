@extends('admin.layouts.app')

@section('title', __('Add product'))
@section('heading', __('Add product'))
@section('subheading', __('Creates the product, gallery images, and the first inventory row.'))

@section('content')
    <div class="mx-auto max-w-4xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data" class="space-y-2">
            @csrf
            @include('admin.products.partials.form-fields', [
                'product' => null,
                'productCategories' => $productCategories,
                'showStock' => true,
            ])
            <div class="flex flex-wrap gap-3 pt-6">
                <button type="submit" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    {{ __('Save') }}
                </button>
                <a href="{{ route('admin.products.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 border-2 border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
