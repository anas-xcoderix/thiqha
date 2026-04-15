@extends('layouts.auth')


@section('title', 'THIQAH – Login')

@section('content')
<div class="flex w-full h-screen gap-[3.4rem]">
    <div class="lg:flex hidden w-[40%]">
        <img src="{{ asset('images/auth/sidebar.png') }}" alt="" class="h-full w-full object-cover">
    </div>
    <div class="lg:w-[40%] w-full px-4 lg:px-0 py-10">
        <div class="px-5 lg:px-0">

            <div class="mb-10 flex justify-center md:justify-start">
                <img src="{{ asset('images/auth/header.png') }}" alt="" class="w-[200px] md:w-full md:max-w-[306px] md:aspect-[306/144.42]">
            </div>

            <h1 class="text-xl md:text-2xl font-bold text-gray-900 mb-8 text-center md:text-left">{{ __('Welcome Back !') }}</h1>

            @if (session('status'))
                <p class="mb-4 text-sm font-medium text-green-700">{{ session('status') }}</p>
            @endif

            <form class="space-y-5" method="post" action="{{ route('login.store') }}">
                @csrf

                <div>
                    <label class="block text-sm font-bold mb-1 text-gray-900" for="email">
                        {{ __('Email') }} <span class="text-red-500">*</span>
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                           placeholder="{{ __('Enter Mail') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-700 placeholder-gray-400 outline-none focus:ring-2 focus:ring-brand transition @error('email') border-red-500 @enderror"/>
                    <x-auth.field-error name="email"/>
                </div>

                <div>
                    <label class="block text-sm font-bold mb-1 text-gray-900" for="password">{{ __('Password') }}</label>
                    <div class="relative">
                        <input id="passwordInput" type="password" name="password" required autocomplete="current-password"
                               placeholder="{{ __('Enter Password') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 pr-10 text-sm text-gray-700 placeholder-gray-400 outline-none focus:ring-2 focus:ring-brand transition @error('password') border-red-500 @enderror"/>
                        <button type="button" onclick="togglePassword()" class="eye-btn absolute right-3 top-1/2 -translate-y-1/2 text-gray-400" aria-label="{{ __('Toggle password visibility') }}">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-5 0-9-4-9-7s4-7 9-7a10.05 10.05 0 011.875.175M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                    <x-auth.field-error name="password"/>
                    <div class="flex justify-end mt-1">
                        <a href="#" class="text-xs font-bold text-brand uppercase tracking-wide hover:opacity-80">{{ __('Forget Password ?') }}</a>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <input id="remember" name="remember" value="1" type="checkbox" class="w-4 h-4 rounded border-gray-300 accent-brand cursor-pointer"/>
                    <label for="remember" class="text-sm text-gray-700 cursor-pointer select-none">{{ __('Remember me') }}</label>
                </div>

                <button type="submit" class="w-full bg-brand hover:bg-brandDark text-white font-semibold py-4 rounded-lg text-sm transition-colors duration-200">
                    {{ __('Log In') }}
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                {{ __("Don't have an account ?") }}
                <a href="{{ route('register') }}" class="font-bold text-brand ml-1 border-b-2 border-brand transition-opacity hover:opacity-80">{{ __('Create account') }}</a>
            </p>

        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
