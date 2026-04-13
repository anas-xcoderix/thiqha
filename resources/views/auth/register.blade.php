@extends('layouts.auth')

@section('body-class', 'm-0 p-0 font-[Inter,sans-serif]')

@section('title', 'THIQAH ? SIGNUP')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endpush

@section('content')
<div class="lg:flex lg:gap-8">

    <div class="hidden lg:block w-[60%] h-screen">
        <img src="{{ asset('images/auth/sidebar.png') }}" alt="" class="w-full h-full object-cover">
    </div>

    <input type="radio" name="step" id="r1" class="hidden" checked/>
    <input type="radio" name="step" id="r2" class="hidden"/>
    <input type="radio" name="step" id="r3" class="hidden"/>

    <div class="w-full my-5">
        <div class="lg:max-w-[90%] px-5 lg:px-0">

            <div class="mb-10 flex justify-center md:justify-start">
                <img src="{{ asset('images/auth/header.png') }}" alt="THIQAH" class="w-[200px] md:w-full md:max-w-[306px] md:aspect-[306/144.42]">
            </div>

            <h1 class="text-xl md:text-2xl font-bold text-gray-900 mb-8 text-center md:text-left">Create an Account</h1>

            @if ($errors->any() && old('_form') === 'user')
                <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-800">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="step-nav flex items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-full p-2 mb-10 w-full">
                <label for="r1" class="flex-1 py-3 rounded-full text-sm font-semibold text-center cursor-pointer transition-all text-gray-400">Step 1</label>
                <label for="r2" class="flex-1 py-3 rounded-full text-sm font-semibold text-center cursor-pointer transition-all text-gray-400">Step 2</label>
                <label for="r3" class="flex-1 py-3 rounded-full text-sm font-semibold text-center cursor-pointer transition-all text-gray-400">Step 3</label>
            </div>

            <div class="step-content-1 hidden">
                <div class="flex flex-col md:flex-row gap-5 mb-10">
                    <label for="r2" class="shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-xl flex flex-col items-center justify-center w-full md:h-[15.625rem] px-4 md:px-0 py-3 md:py-0 cursor-pointer hover:shadow-md transition-all">
                        <img src="{{ asset('images/auth/user.png') }}" alt="" class="size-[70px] md:size-[115.2px] mb-3">
                        <p class="font-bold text-md mb-1">User</p>
                        <p class="text-center font-bold text-md"> Become a partner </p>
                        <span class="text-md font-semibold underline text-[#1e2d5a]">Sign UP</span>
                    </label>

                    <label for="r3" class="shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-xl flex flex-col items-center justify-center w-full md:h-[15.625rem] px-4 md:px-0 py-3 md:py-0 cursor-pointer hover:shadow-md transition-all">
                        <img src="{{ asset('images/auth/shake.png') }}" class="size-[70px] md:size-[115.2px] mb-3" alt="">
                        <p class="font-bold text-center text-md mb-1 pt-7 ">Become a Partner</p>
                        <span class="text-md font-semibold underline text-[#1e2d5a]">Sign UP</span>
                    </label>
                </div>

                <p class="text-center text-sm text-gray-500">
                    Have an account?
                    <a href="{{ route('login') }}" class="font-bold text-[#1e2d5a] ml-1 border-b-2 border-[#1e2d5a]">Sign in</a>
                </p>
            </div>

            <div class="step-content-2 hidden">
                <h2 class="text-lg font-bold text-gray-800 mb-6">User</h2>
                <form method="post" action="{{ route('register.user') }}">
                    @csrf
                    <input type="hidden" name="_form" value="user">

                    <div class="px-">
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="reg_name">Full Name <span class="text-red-500">*</span></label>
                                <input id="reg_name" type="text" name="name" value="{{ old('name') }}" required placeholder="Enter Name"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400 @error('name') border-red-500 @enderror"/>
                                <x-auth.field-error name="name"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="reg_email">Email <span class="text-red-500">*</span></label>
                                <input id="reg_email" type="email" name="email" value="{{ old('email') }}" required placeholder="Enter Mail"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400 @error('email') border-red-500 @enderror"/>
                                <x-auth.field-error name="email"/>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="reg_phone">Phone Number <span class="text-red-500">*</span></label>
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden @error('phone') border-red-500 @enderror">
                                    <div class="flex items-center gap-2 px-3 py-3 border-r border-gray-300 bg-white">
                                        <img src="{{ asset('images/auth/flag.png') }}" alt="KW" class="w-5 h-4 object-cover"/>
                                        <span class="text-xs text-gray-700 font-medium">+965</span>
                                    </div>
                                    <input id="reg_phone" type="tel" name="phone" value="{{ old('phone') }}" required placeholder="Enter Phone"
                                           class="flex-1 px-4 py-3 text-sm outline-none placeholder-gray-400"/>
                                </div>
                                <x-auth.field-error name="phone"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="reg_password">Password</label>
                                <div class="relative">
                                    <input id="reg_password" type="password" name="password" required autocomplete="new-password" placeholder="Enter Password"
                                           class="w-full border border-gray-300 rounded-lg px-4 py-3 pr-10 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400 @error('password') border-red-500 @enderror"/>
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </span>
                                </div>
                                <x-auth.field-error name="password"/>
                            </div>
                        </div>

                        <div class="mb-5 w-full md:w-[calc(50%-10px)]">
                            <label class="block text-sm font-bold mb-1" for="reg_password_confirmation">Confirm Password</label>
                            <div class="relative">
                                <input id="reg_password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 pr-10 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-6">
                            <input type="checkbox" name="terms" id="terms" value="1" class="size-3 md:size-4 accent-[#1e2d5a]" {{ old('terms') ? 'checked' : '' }}/>
                            <label for="terms" class="text-xs md:text-sm text-gray-600 flex items-start">
                                I Agree To The
                                <a href="#" class="text-[#20395d] font-bold underline">Terms Of Use</a>
                                And
                                <a href="#" class="text-[#20395d] font-bold underline">Privacy Policy</a>
                            </label>
                        </div>
                        <x-auth.field-error name="terms"/>

                        <button type="submit" class="w-full bg-[#1e2d5a] hover:bg-[#162244] text-white font-semibold py-4 rounded-lg text-sm transition-colors mb-6">
                            Create Account
                        </button>

                        <p class="text-center text-sm text-gray-500">
                            Have an account?
                            <a href="{{ route('login') }}" class="font-bold text-[#1e2d5a] ml-1 border-b-2 border-[#1e2d5a]">Sign In</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="step-content-3 hidden">
                <h2 class="text-2xl font-extrabold text-gray-800 mb-5">Become a partner</h2>

                @if ($errors->any() && old('_form') === 'partner')
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-800">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('register.partner') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_form" value="partner">

                    <input type="radio" name="subtab" id="t1" class="hidden" checked/>
                    <input type="radio" name="subtab" id="t2" class="hidden"/>
                    <input type="radio" name="subtab" id="t3" class="hidden"/>

                    <div class="subtab-nav flex items-center gap-6 mb-10 w-full">
                        <label for="t1" class="flex-1 cursor-pointer border-none">
                            <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                <div class="bar-1 h-full w-full bg-[#20395d] transition-all"></div>
                            </div>
                            <p class="mt-2 text-[10px] md:text-sm text-gray-500 text-center">Mandatory Legal Information</p>
                        </label>
                        <label for="t2" class="flex-1 cursor-pointer">
                            <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                <div class="bar-2 h-full w-full bg-gray-200 transition-all"></div>
                            </div>
                            <p class="mt-2 text-[10px] md:text-sm text-gray-500 text-center lg:pl-[1.75rem] p-0 lg:w-[155px] xl:w-full">Operational Information</p>
                        </label>
                        <label for="t3" class="flex-1 cursor-pointer">
                            <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                <div class="bar-3 h-full w-full bg-gray-200 transition-all"></div>
                            </div>
                            <p class="mt-2 text-[10px] md:text-sm text-gray-500 text-center lg:pl-[1.75rem] lg:w-[138px] xl:w-full">Financial Information</p>
                        </label>
                    </div>

                    <div class="subtab-content-1 hidden">
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="p_name">Full Name <span class="text-red-500">*</span></label>
                                <input id="p_name" type="text" name="name" value="{{ old('name') }}" required placeholder="Enter Name"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="p_email">Email <span class="text-red-500">*</span></label>
                                <input id="p_email" type="email" name="email" value="{{ old('email') }}" required placeholder="Enter Mail"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="p_phone">Phone Number <span class="text-red-500">*</span></label>
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                    <div class="flex items-center gap-2 px-3 py-3 border-r border-gray-300 bg-white">
                                        <img src="{{ asset('images/auth/flag.png') }}" alt="KW" class="w-5 h-4 object-cover"/>
                                        <span class="text-xs text-gray-700 font-medium">+965</span>
                                    </div>
                                    <input id="p_phone" type="tel" name="phone" value="{{ old('phone') }}" required placeholder="Enter Phone"
                                           class="flex-1 px-4 py-3 text-sm outline-none placeholder-gray-400"/>
                                </div>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1" for="p_password">Password <span class="text-red-500">*</span></label>
                                <input id="p_password" type="password" name="password" required autocomplete="new-password" placeholder="Enter Password"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>
                        <div class="mb-5 w-full md:w-[calc(50%-10px)]">
                            <label class="block text-sm font-bold mb-1" for="p_password_confirmation">Confirm Password <span class="text-red-500">*</span></label>
                            <input id="p_password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Official Company Trade Name <span class="text-red-500">*</span></label>
                                <input type="text" name="official_company_trade_name" value="{{ old('official_company_trade_name') }}" required placeholder="Enter Name"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Commercial Registration Number <span class="text-red-500">*</span></label>
                                <input type="text" name="commercial_registration_number" value="{{ old('commercial_registration_number') }}" required placeholder="Enter Number"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Copy of Commercial Registration (valid) <span class="text-red-500">*</span></label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="commercial_registration_copy" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Chamber of Commerce Certificate <span class="text-red-500">*</span></label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="chamber_commerce_certificate" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Municipal License</label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="municipal_license" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Civil ID Number of Authorized Signatory <span class="text-red-500">*</span></label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="civil_id_signatory" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-8">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Copy of Authorized Signatory's Civil ID</label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="copy_signatory_civil_id" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Official Power of Attorney <span class="text-red-500">*</span></label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="official_power_of_attorney" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="r1" class="px-8 py-3 rounded-lg bg-gray-100 border border-gray-300 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition-colors cursor-pointer">Back</label>
                            <label for="t2" class="px-10 py-3 rounded-lg bg-[#1e2d5a] hover:bg-[#162244] text-white text-sm font-semibold transition-colors cursor-pointer">Next</label>
                        </div>
                    </div>

                    <div class="subtab-content-2 hidden">
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Account Manager's Name<span class="text-red-500">*</span></label>
                                <input type="text" name="account_manager_name" value="{{ old('account_manager_name') }}" required placeholder="Enter Name"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Number of Employees <span class="text-red-500">*</span></label>
                                <input type="number" name="number_of_employees" value="{{ old('number_of_employees') }}" required min="1" placeholder="Enter Number"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Phone Number <span class="text-red-500">*</span></label>
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                    <div class="flex items-center gap-2 px-3 py-3 border-r border-gray-300 bg-white">
                                        <img src="https://flagcdn.com/w20/kw.png" alt="KW" class="w-5 h-4 object-cover"/>
                                        <span class="text-sm text-gray-700 font-medium">+965</span>
                                    </div>
                                    <input type="tel" name="operations_phone" value="{{ old('operations_phone') }}" required placeholder="Enter Phone"
                                           class="flex-1 px-4 py-3 text-sm outline-none placeholder-gray-400"/>
                                </div>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Office Address</label>
                                <input type="url" name="office_address" value="{{ old('office_address') }}" placeholder="Enter Address"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block text-sm font-bold mb-1">Website Link</label>
                            <input type="url" name="website_link" value="{{ old('website_link') }}" placeholder="Enter Link"
                                   class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white w-full md:w-[calc(50%-10px)]"/>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="t1" class="px-8 py-3 rounded-lg bg-gray-100 border border-gray-300 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition-colors cursor-pointer">Back</label>
                            <label for="t3" class="px-10 py-3 rounded-lg bg-[#1e2d5a] hover:bg-[#162244] text-white text-sm font-semibold transition-colors cursor-pointer">Next</label>
                        </div>
                    </div>

                    <div class="subtab-content-3 hidden">
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Company Bank Account Name <span class="text-red-500">*</span></label>
                                <input type="text" name="company_bank_account_name" value="{{ old('company_bank_account_name') }}" required placeholder="Company Bank Account Name"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">IBAN <span class="text-red-500">*</span></label>
                                <input type="text" name="iban" value="{{ old('iban') }}" required placeholder="Enter IBAN"
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Bank Authorization Letter <span class="text-red-500">*</span></label>
                                <input type="text" name="bank_authorization_letter" value="{{ old('bank_authorization_letter') }}" required placeholder="Enter Bank Authorization Letter "
                                       class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400"/>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-bold mb-1">Declaration that Account Belongs to the Company <span class="text-red-500">*</span></label>
                                <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                                    <span>Upload File</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="file" name="declaration_account_file" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"/>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex-1">
                                <label class="block mb-1"><span class="text-sm font-bold"> Activity Classification</span> <span class="text-red-500">*</span>
                                    <select name="activity_classification" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400">
                                        <option value="Subcontractor" @selected(old('activity_classification', 'Subcontractor') === 'Subcontractor')>Subcontractor</option>
                                        <option value="Main Contractor" @selected(old('activity_classification') === 'Main Contractor')>Main Contractor</option>
                                        <option value="Subcontractor">Subcontractor</option>
                                        <option value="Designer" @selected(old('activity_classification') === 'Designer')>Designer</option>
                                        <option value="Supervisor/Consultant" @selected(old('activity_classification') === 'Supervisor/Consultant')>Supervisor/Consultant</option>
                                        <option value="Supplier" @selected(old('activity_classification') === 'Supplier')>Supplier</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label class="block mb-1"><span class="text-sm font-bold"> Specification</span> <span class="text-red-500">*</span>
                                    <select name="specification" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1e2d5a] placeholder-gray-400">
                                        <option value="">Choose specification</option>
                                        <option value="Electrical" @selected(old('specification') === 'Electrical')>Electrical</option>
                                        <option value="Plumbing" @selected(old('specification') === 'Plumbing')>Plumbing</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-8">
                            <input type="checkbox" name="partner_terms" id="partner-terms" value="1" class="w-4 h-4 accent-[#1e2d5a]" {{ old('partner_terms') ? 'checked' : '' }}/>
                            <label for="partner-terms" class="text-sm">
                                I Agree To The
                                <a href="#" class="text-[#20395d] font-bold underline">Terms Of Use</a>
                                And
                                <a href="#" class="text-[#20395d] font-bold underline">Privacy Policy</a>
                            </label>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="t2" class="px-8 py-3 rounded-lg bg-gray-100 border border-gray-300 text-sm font-semibold text-gray-500 hover:bg-gray-50 transition-colors cursor-pointer">Back</label>
                            <button type="submit" class="px-10 py-3 rounded-lg bg-[#1e2d5a] hover:bg-[#162244] text-white text-sm font-semibold transition-colors">Submit</button>
                        </div>
                    </div>
                </form>

                <p class="text-center text-sm text-gray-500 mt-8 hide-on-step3">
                    Have an account?
                    <a href="{{ route('login') }}" class="font-bold text-[#1e2d5a] ml-1 border-b-2 border-[#1e2d5a]">Sign in</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    @if(old('_form') === 'user')
    document.getElementById('r2').checked = true;
    @endif
    @if(old('_form') === 'partner')
    document.getElementById('r3').checked = true;
    @endif
});
</script>
@endpush
