@extends('layouts.app')

@section('title', __('Admin'))

@section('content')
    <div class="max-w-3xl mx-auto py-16 px-5">
        <h1 class="text-2xl font-bold text-primary mb-2">{{ __('Administration') }}</h1>
        <p class="text-gray-600">{{ __('Signed in as :name.', ['name' => auth()->user()->name]) }}</p>
        <p class="mt-4 text-sm text-gray-500">{{ __('Add admin-only routes here and protect them with the role middleware.') }}</p>
    </div>
@endsection
