@extends('admin.layouts.app')

@section('title', __('Edit partner category'))
@section('heading', __('Edit partner category'))
@section('subheading', __('Update names or replace the logo.'))

@section('content')
    <div class="mx-auto max-w-2xl rounded-2xl border border-gray-100 bg-white p-6 shadow-card sm:p-8">
        <form action="{{ route('admin.partner.categories.update', $category) }}" method="post" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')
            @include('admin.partner.categories.partials.fields', ['category' => $category])
            <div class="flex flex-wrap gap-3 pt-2">
                <button type="submit" class="btn-leaf inline-flex items-center justify-center gap-2 bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
                    {{ __('Update') }}
                </button>
                <a href="{{ route('admin.partner.categories.index') }}" class="btn-leaf inline-flex items-center justify-center gap-2 border-2 border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-navy hover:bg-cream">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
