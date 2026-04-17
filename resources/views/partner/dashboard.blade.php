@extends('partner.layouts.app')

@section('title', __('Partner dashboard'))

@section('content')
    <div class="container mx-auto px-4 py-16 max-w-3xl">
        <h1 class="text-2xl font-semibold text-gray-900">{{ __('Partner dashboard') }}</h1>
        <p class="mt-2 text-gray-600">{{ __('Welcome. Use this area for partner-specific tools as you build them out.') }}</p>
    </div>
@endsection
