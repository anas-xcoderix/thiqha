
@extends('layouts.app')

@section('body-class', 'm-0 p-0 font-sans')

@section('title', 'THIQAH – Vendor')

@push('head-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush


@section('content')

    <section class="px-2 md:px-6 pt-4 pb-2 w-full">
        <div class="relative rounded-3xl overflow-hidden min-h-screen bg-gray-800">
            <img src="{{ asset('images/vendor/hero.png') }}" alt="Construction Site" class="absolute inset-0 w-full h-full object-cover opacity-90"/>
            <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2">
                <span class="w-[20px] h-[20px] rounded-full bg-white"></span>
                <span class="w-[20px] h-[20px] rounded-full bg-white"></span>
                <span class="w-[114px] h-[20px] rounded-full bg-[#20395D]"></span>
                <span class="w-[20px] h-[20px] rounded-full bg-white"></span>
            </div>
        </div>
    </section>

    <div class="w-full mx-auto lg:px-10 md:px-6 px-2 py-3">
        <p class="text-sm">
            <span class="cursor-pointer font-medium hover:text-navy">Home</span>
            <span class="mx-1 text-gray-400">&rsaquo;</span>
            <span class="cursor-pointer font-medium hover:text-navy">Service Providers</span>
            <span class="mx-1 text-gray-400">&rsaquo;</span>
            <span class="font-medium">Vendor Page</span>
        </p>
    </div>
    <section class="flex flex-col md:flex-row justify-between md:items-center lg:px-10 md:px-6 px-2 mx-auto">
        <div>
            <div class="flex items-start justify-between mb-1">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl md:text-2xl font-semibold text-gray-900 whitespace-nowrap">Provider Name</h1>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_7956)">
                            <path d="M30.0125 18.3467C29.518 17.6642 29.2518 16.8429 29.2518 16.0001C29.2518 15.1572 29.518 14.3359 30.0125 13.6534L31.0258 12.2534C31.1497 12.0824 31.2312 11.8845 31.2637 11.6759C31.2962 11.4673 31.2786 11.2539 31.2125 11.0534C31.1457 10.855 31.0339 10.6747 30.8859 10.5267C30.7378 10.3786 30.5576 10.2669 30.3591 10.2001L28.7191 9.66673C27.9158 9.40759 27.2155 8.89987 26.7194 8.21686C26.2233 7.53385 25.9571 6.71089 25.9591 5.86673V4.1334C25.959 3.92295 25.909 3.71553 25.8133 3.5281C25.7176 3.34067 25.5789 3.17855 25.4086 3.055C25.2382 2.93145 25.041 2.84999 24.8331 2.81727C24.6252 2.78454 24.4126 2.8015 24.2125 2.86674L22.5591 3.40007C21.7565 3.6598 20.8923 3.65911 20.09 3.39808C19.2878 3.13705 18.5886 2.62906 18.0925 1.94674L17.0791 0.546735C16.9498 0.38448 16.7855 0.253463 16.5985 0.163417C16.4115 0.0733711 16.2067 0.0266113 15.9991 0.0266113C15.7916 0.0266113 15.5868 0.0733711 15.3998 0.163417C15.2128 0.253463 15.0485 0.38448 14.9191 0.546735L13.9058 1.94674C13.4097 2.62906 12.7105 3.13705 11.9083 3.39808C11.106 3.65911 10.2418 3.6598 9.43915 3.40007L7.78582 2.86674C7.58574 2.8015 7.37305 2.78454 7.16517 2.81727C6.95728 2.84999 6.76009 2.93145 6.58972 3.055C6.41936 3.17855 6.28066 3.34067 6.18496 3.5281C6.08927 3.71553 6.0393 3.92295 6.03915 4.1334V5.86673C6.04119 6.71089 5.77496 7.53385 5.27889 8.21686C4.78281 8.89987 4.08254 9.40759 3.27915 9.66673L1.63915 10.2001C1.44074 10.2669 1.26047 10.3786 1.11243 10.5267C0.964396 10.6747 0.85261 10.855 0.785815 11.0534C0.719697 11.2539 0.702142 11.4673 0.734595 11.6759C0.767048 11.8845 0.84858 12.0824 0.972482 12.2534L1.98582 13.6534C2.48027 14.3359 2.7465 15.1572 2.7465 16.0001C2.7465 16.8429 2.48027 17.6642 1.98582 18.3467L0.972482 19.7467C0.84858 19.9177 0.767048 20.1156 0.734595 20.3242C0.702142 20.5329 0.719697 20.7462 0.785815 20.9467C0.85261 21.1451 0.964396 21.3254 1.11243 21.4735C1.26047 21.6215 1.44074 21.7333 1.63915 21.8001L3.27915 22.3334C4.08254 22.5926 4.78281 23.1003 5.27889 23.7833C5.77496 24.4663 6.04119 25.2893 6.03915 26.1334V27.8667C6.0393 28.0772 6.08927 28.2846 6.18496 28.472C6.28066 28.6595 6.41936 28.8216 6.58972 28.9451C6.76009 29.0687 6.95728 29.1501 7.16517 29.1829C7.37305 29.2156 7.58574 29.1986 7.78582 29.1334L9.42581 28.6001C10.2302 28.336 11.0977 28.3344 11.903 28.5957C12.7083 28.8569 13.4097 29.3674 13.9058 30.0534L14.9191 31.4534C15.0436 31.6229 15.2063 31.7607 15.3939 31.8557C15.5815 31.9507 15.7889 32.0002 15.9991 32.0002C16.2094 32.0002 16.4168 31.9507 16.6044 31.8557C16.792 31.7607 16.9547 31.6229 17.0791 31.4534L18.0925 30.0534C18.5894 29.3684 19.2909 28.8586 20.0959 28.5975C20.9009 28.3363 21.768 28.3372 22.5725 28.6001L24.2125 29.1334C24.4126 29.1986 24.6252 29.2156 24.8331 29.1829C25.041 29.1501 25.2382 29.0687 25.4086 28.9451C25.5789 28.8216 25.7176 28.6595 25.8133 28.472C25.909 28.2846 25.959 28.0772 25.9591 27.8667V26.1334C25.9571 25.2893 26.2233 24.4663 26.7194 23.7833C27.2155 23.1003 27.9158 22.5926 28.7191 22.3334L30.3591 21.8001C30.5576 21.7333 30.7378 21.6215 30.8859 21.4735C31.0339 21.3254 31.1457 21.1451 31.2125 20.9467C31.2786 20.7462 31.2962 20.5329 31.2637 20.3242C31.2312 20.1156 31.1497 19.9177 31.0258 19.7467L30.0125 18.3467ZM22.2791 14.2761L15.6125 20.9427C15.3624 21.1927 15.0234 21.3331 14.6698 21.3331C14.3163 21.3331 13.9772 21.1927 13.7271 20.9427L9.72715 16.9427C9.5998 16.8197 9.49823 16.6726 9.42835 16.5099C9.35847 16.3473 9.32169 16.1723 9.32015 15.9953C9.31861 15.8182 9.35234 15.6427 9.41939 15.4788C9.48643 15.3149 9.58543 15.1661 9.71062 15.0409C9.83581 14.9157 9.98468 14.8167 10.1485 14.7496C10.3124 14.6826 10.488 14.6489 10.665 14.6504C10.8421 14.6519 11.017 14.6887 11.1797 14.7586C11.3424 14.8285 11.4895 14.9301 11.6125 15.0574L14.6658 18.1147L20.3898 12.3907C20.6413 12.1479 20.9781 12.0135 21.3277 12.0165C21.6773 12.0195 22.0117 12.1598 22.2589 12.407C22.5061 12.6542 22.6463 12.9886 22.6494 13.3382C22.6524 13.6878 22.518 14.0246 22.2751 14.2761H22.2791Z" fill="#20395D"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_4_7956">
                                <rect width="32" height="32" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>

            </div>
            <p class="text-sm text-gray-400 mb-4">Building</p>
            <div class="flex flex-wrap gap-2 mb-8">
                <span class="px-5 py-1.5 bg-[#826ea3]/40 rounded-full text-sm font-bold">Bricks</span>
                <span class="px-5 py-1.5 bg-[#826ea3]/40 rounded-full text-sm font-bold">Electrical</span>
                <span class="px-5 py-1.5 bg-[#826ea3]/40 rounded-full text-sm font-bold">Lighting</span>
            </div>
        </div>
        <div class="flex md:flex-col flex-row-reverse items-center md:items-end gap-10 md:gap-0 mb-6 md:mb-0">
            <div class="flex justify-end gap-5 md:mb-10">
                <button>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9213 4.1333C19.508 4.1333 17.348 5.30663 16.0013 7.10663C14.6546 5.30663 12.4946 4.1333 10.0813 4.1333C5.98797 4.1333 2.66797 7.46663 2.66797 11.5866C2.66797 13.1733 2.9213 14.64 3.3613 16C5.46797 22.6666 11.9613 26.6533 15.1746 27.7466C15.628 27.9066 16.3746 27.9066 16.828 27.7466C20.0413 26.6533 26.5346 22.6666 28.6413 16C29.0813 14.64 29.3346 13.1733 29.3346 11.5866C29.3346 7.46663 26.0146 4.1333 21.9213 4.1333Z" fill="#A8A8A8"/>
                    </svg>

                </button>
                <button>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4053 7.11119C18.4053 4.65659 20.4042 2.66675 22.87 2.66675C25.3357 2.66675 27.3346 4.65659 27.3346 7.11119C27.3346 9.56579 25.3357 11.5556 22.87 11.5556C21.6249 11.5556 20.4997 11.048 19.6908 10.2314L13.5102 14.4394C13.5673 14.7234 13.5973 15.0167 13.5973 15.3163C13.5973 15.9097 13.48 16.4769 13.2674 16.9953L20.0444 21.4478C20.8136 20.8215 21.7977 20.4445 22.87 20.4445C25.3357 20.4445 27.3346 22.4343 27.3346 24.889C27.3346 27.3435 25.3357 29.3334 22.87 29.3334C20.4042 29.3334 18.4053 27.3435 18.4053 24.889C18.4053 24.2461 18.5429 23.6341 18.7902 23.0815L12.0681 18.665C11.2839 19.3465 10.2568 19.7607 9.13261 19.7607C6.66686 19.7607 4.66797 17.7709 4.66797 15.3163C4.66797 12.8617 6.66686 10.8719 9.13261 10.8719C10.5505 10.8719 11.8127 11.5297 12.6299 12.5537L18.6198 8.47531C18.4805 8.04487 18.4053 7.58621 18.4053 7.11119Z" fill="#A8A8A8"/>
                    </svg>
                </button>
            </div>

            <button class="w-full lg:w-[275px] bg-[#20395d] text-white font-semibold py-3 px-6 rounded-xl text-sm transition-colors whitespace-nowrap">
                Request Quotation
            </button>
        </div>
    </section>

    <section class="w-full lg:px-10 md:px-6 px-2 pb-16">
        <div>
            <div class="flex items-center gap-3 mb-5">
                <h2 class="text-lg font-bold text-gray-900 whitespace-nowrap">Completed Projects</h2>
                <span class="px-3 py-0.5 bg-[#826ea3] text-white text-xs font-semibold rounded-full whitespace-nowrap">50 Project</span>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start mx-auto">
                <div class="lg:col-span-2 rounded-2xl p-5 shadow-[0_0_15px_rgba(0,0,0,0.2)] min-h-full">


                    <div class="space-y-3">
                        <div class="flex items-center justify-between gap-4 border border-gray-200 min-h-[140px] rounded-2xl px-5 py-4 hover:shadow-sm transition-shadow cursor-pointer bg-white">
                            <div class="flex-1 space-y-3">
                                <p class="font-semibold text-sm mb-1">Project 1</p>
                                <p class="text-sm text-[#6b6b6b] leading-relaxed">Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.</p>
                            </div>
                            <button  class="w-[20px] md:w-[32px]" onclick="document.getElementById('projectPhotos').classList.remove('hidden')">
                                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="flex items-center justify-between gap-4 border border-gray-200 min-h-[140px] rounded-2xl px-5 py-4 hover:shadow-sm transition-shadow cursor-pointer bg-white">
                            <div class="flex-1 space-y-3">
                                <p class="font-semibold text-sm mb-1">Project 1</p>
                                <p class="text-sm text-[#6b6b6b] leading-relaxed">Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.</p>
                            </div>
                            <button class="w-[20px] md:w-[32px]" onclick="document.getElementById('projectPhotos').classList.remove('hidden')">
                                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                        </div>

                        <div class="flex items-center justify-between gap-4 border border-gray-200 min-h-[140px] rounded-2xl px-5 py-4 hover:shadow-sm transition-shadow cursor-pointer bg-white">
                            <div class="flex-1 space-y-3">
                                <p class="font-semibold text-sm mb-1">Project 1</p>
                                <p class="text-sm text-[#6b6b6b] leading-relaxed">Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.</p>
                            </div>
                            <button class="w-[20px] md:w-[32px]" onclick="document.getElementById('projectPhotos').classList.remove('hidden')">
                                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                        </div>

                        <div class="flex items-center justify-between gap-4 border border-gray-200 min-h-[140px] rounded-2xl px-5 py-4 hover:shadow-sm transition-shadow cursor-pointer bg-white">
                            <div class="flex-1 space-y-3">
                                <p class="font-semibold text-sm mb-1">Project 1</p>
                                <p class="text-sm text-[#6b6b6b] leading-relaxed">Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.</p>
                            </div>
                            <button class="w-[20px] md:w-[32px]" onclick="document.getElementById('projectPhotos').classList.remove('hidden')">
                                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                        </div>

                    </div>
                </div>

                <div class="w-full flex flex-col gap-4 rounded-2xl p-5 shadow-[0_0_15px_rgba(0,0,0,0.2)]">

                    <div class="bg-white shadow-lg rounded-2xl p-5">
                        <h3 class="font-bold text-gray-900 text-base mb-3">Description</h3>
                        <p class="text-xs text-[#6b6b6b] leading-relaxed uppercase tracking-wide">
                            Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.
                        </p>
                        <p class="text-xs text-[#6b6b6b] leading-relaxed uppercase tracking-wide mt-3">
                            Al-Kuwaitiya Construction and Development Company is a multi-specialized company. Al-Kuwaitiya Construction and Development Company operates in various fields and provides a wide range of specialized construction and development services.
                        </p>
                    </div>

                    <div class="bg-white w-full rounded-2xl shadow-lg overflow-hidden">

                        <!-- Map -->
                        <div class="w-full h-full lg:h-44">
                            <iframe class="w-full h-full" src="https://maps.google.com/maps?q=55%20Fahd%20Street%20Hawalli%20Kuwait&t=&z=15&ie=UTF8&iwloc=&output=embed">
                            </iframe>
                        </div>

                        <!-- Content -->
                        <div class="p-4 space-y-3 text-sm">

                            <div class="flex items-center gap-3 font-semibold">
                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 0C3.135 0 0 3.135 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.135 10.865 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#AAAAAA"/>
                                </svg>

                                <span>55 Fahd Street, Hawalli, Kuwait</span>
                            </div>

                            <div class="flex items-center gap-3 font-semibold">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.64859 20.9098C7.61859 20.9098 7.57859 20.9298 7.54859 20.9298C5.60859 19.9698 4.02859 18.3798 3.05859 16.4398C3.05859 16.4098 3.07859 16.3698 3.07859 16.3398C4.29859 16.6998 5.55859 16.9698 6.80859 17.1798C7.02859 18.4398 7.28859 19.6898 7.64859 20.9098Z" fill="#A8A8A8"/>
                                    <path d="M20.9391 16.4498C19.9491 18.4398 18.2991 20.0498 16.2891 21.0198C16.6691 19.7498 16.9891 18.4698 17.1991 17.1798C18.4591 16.9698 19.6991 16.6998 20.9191 16.3398C20.9091 16.3798 20.9391 16.4198 20.9391 16.4498Z" fill="#A8A8A8"/>
                                    <path d="M21.0191 7.70998C19.7591 7.32998 18.4891 7.01998 17.1991 6.79998C16.9891 5.50998 16.6791 4.22998 16.2891 2.97998C18.3591 3.96998 20.0291 5.63998 21.0191 7.70998Z" fill="#A8A8A8"/>
                                    <path d="M7.65047 3.09006C7.29047 4.31006 7.03047 5.55006 6.82047 6.81006C5.53047 7.01006 4.25047 7.33006 2.98047 7.71006C3.95047 5.70006 5.56047 4.05006 7.55047 3.06006C7.58047 3.06006 7.62047 3.09006 7.65047 3.09006Z" fill="#A8A8A8"/>
                                    <path d="M15.4917 6.59C13.1717 6.33 10.8317 6.33 8.51172 6.59C8.76172 5.22 9.08172 3.85 9.53172 2.53C9.55172 2.45 9.54172 2.39 9.55172 2.31C10.3417 2.12 11.1517 2 12.0017 2C12.8417 2 13.6617 2.12 14.4417 2.31C14.4517 2.39 14.4517 2.45 14.4717 2.53C14.9217 3.86 15.2417 5.22 15.4917 6.59Z" fill="#A8A8A8"/>
                                    <path d="M6.59 15.4898C5.21 15.2398 3.85 14.9198 2.53 14.4698C2.45 14.4498 2.39 14.4598 2.31 14.4498C2.12 13.6598 2 12.8498 2 11.9998C2 11.1598 2.12 10.3398 2.31 9.55977C2.39 9.54977 2.45 9.54977 2.53 9.52977C3.86 9.08977 5.21 8.75977 6.59 8.50977C6.34 10.8298 6.34 13.1698 6.59 15.4898Z" fill="#A8A8A8"/>
                                    <path d="M22.0002 11.9998C22.0002 12.8498 21.8802 13.6598 21.6902 14.4498C21.6102 14.4598 21.5502 14.4498 21.4702 14.4698C20.1402 14.9098 18.7802 15.2398 17.4102 15.4898C17.6702 13.1698 17.6702 10.8298 17.4102 8.50977C18.7802 8.75977 20.1502 9.07977 21.4702 9.52977C21.5502 9.54977 21.6102 9.55977 21.6902 9.55977C21.8802 10.3498 22.0002 11.1598 22.0002 11.9998Z" fill="#A8A8A8"/>
                                    <path d="M15.4917 17.4102C15.2417 18.7902 14.9217 20.1502 14.4717 21.4702C14.4517 21.5502 14.4517 21.6102 14.4417 21.6902C13.6617 21.8802 12.8417 22.0002 12.0017 22.0002C11.1517 22.0002 10.3417 21.8802 9.55172 21.6902C9.54172 21.6102 9.55172 21.5502 9.53172 21.4702C9.09172 20.1402 8.76172 18.7902 8.51172 17.4102C9.67172 17.5402 10.8317 17.6302 12.0017 17.6302C13.1717 17.6302 14.3417 17.5402 15.4917 17.4102Z" fill="#A8A8A8"/>
                                    <path d="M15.7633 15.7633C13.2622 16.0789 10.7378 16.0789 8.23667 15.7633C7.92111 13.2622 7.92111 10.7378 8.23667 8.23667C10.7378 7.92111 13.2622 7.92111 15.7633 8.23667C16.0789 10.7378 16.0789 13.2622 15.7633 15.7633Z" fill="#A8A8A8"/>
                                </svg>

                                <span>www.thiqqa.com</span>
                            </div>

                            <div class="flex items-center gap-3 font-semibold">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.05 14.95L9.2 16.8C8.81 17.19 8.19 17.19 7.79 16.81C7.68 16.7 7.57 16.6 7.46 16.49C6.43 15.45 5.5 14.36 4.67 13.22C3.85 12.08 3.19 10.94 2.71 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C10.83 13.32 10.94 13.42 11.04 13.52C11.44 13.91 11.45 14.55 11.05 14.95Z" fill="#A8A8A8"/>
                                    <path d="M21.9716 18.33C21.9716 18.61 21.9216 18.9 21.8216 19.18C21.7916 19.26 21.7616 19.34 21.7216 19.42C21.5516 19.78 21.3316 20.12 21.0416 20.44C20.5516 20.98 20.0116 21.37 19.4016 21.62C19.3916 21.62 19.3816 21.63 19.3716 21.63C18.7816 21.87 18.1416 22 17.4516 22C16.4316 22 15.3416 21.76 14.1916 21.27C13.0416 20.78 11.8916 20.12 10.7516 19.29C10.3616 19 9.97156 18.71 9.60156 18.4L12.8716 15.13C13.1516 15.34 13.4016 15.5 13.6116 15.61C13.6616 15.63 13.7216 15.66 13.7916 15.69C13.8716 15.72 13.9516 15.73 14.0416 15.73C14.2116 15.73 14.3416 15.67 14.4516 15.56L15.2116 14.81C15.4616 14.56 15.7016 14.37 15.9316 14.25C16.1616 14.11 16.3916 14.04 16.6416 14.04C16.8316 14.04 17.0316 14.08 17.2516 14.17C17.4716 14.26 17.7016 14.39 17.9516 14.56L21.2616 16.91C21.5216 17.09 21.7016 17.3 21.8116 17.55C21.9116 17.8 21.9716 18.05 21.9716 18.33Z" fill="#A8A8A8"/>
                                </svg>

                                <span>+965 6655 4433</span>
                            </div>

                            <div class="flex items-center gap-3 font-semibold">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 3.5H7C4 3.5 2 5 2 8.5V15.5C2 19 4 20.5 7 20.5H17C20 20.5 22 19 22 15.5V8.5C22 5 20 3.5 17 3.5ZM17.47 9.59L14.34 12.09C13.68 12.62 12.84 12.88 12 12.88C11.16 12.88 10.31 12.62 9.66 12.09L6.53 9.59C6.21 9.33 6.16 8.85 6.41 8.53C6.67 8.21 7.14 8.15 7.46 8.41L10.59 10.91C11.35 11.52 12.64 11.52 13.4 10.91L16.53 8.41C16.85 8.15 17.33 8.2 17.58 8.53C17.84 8.85 17.79 9.33 17.47 9.59Z" fill="#A8A8A8"/>
                                </svg>
                                <span>thiqqa22@gmail.com</span>
                            </div>

                            <!-- Social icons -->
                            <div class="flex pt-3 gap-[40px]">
                                <div>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_4_8045)">
                                            <rect width="32" height="32" fill="white"/>
                                            <path d="M14.8566 16.8353C14.4804 17.0708 14.2731 17.3621 14.2229 17.7261C14.1596 18.1851 14.3594 18.5073 14.5381 18.6973C14.9239 19.1068 15.5859 19.3181 16.3101 19.2608C17.8926 19.1378 18.4284 17.8621 18.5609 16.5836C17.9669 16.4423 17.3841 16.3716 16.8464 16.3716C16.0486 16.3716 15.3494 16.5266 14.8566 16.8353Z" fill="#20395D"/>
                                            <path d="M16.0202 0.23877H15.9822C7.27841 0.23877 0.222656 7.29452 0.222656 15.9983C0.222656 24.702 7.27841 31.7578 15.9822 31.7578H16.0202C24.7239 31.7578 31.7797 24.702 31.7797 15.9983C31.7797 7.29452 24.7239 0.23877 16.0202 0.23877ZM9.47416 16.5855C9.54091 18.7715 10.3222 23.856 16.1197 23.856C19.2877 23.856 21.6769 22.1518 21.6769 19.8915C21.6769 18.7103 21.3144 17.9118 20.4719 17.346C20.0529 19.6578 18.6219 21.0875 16.4679 21.2553C15.1289 21.36 13.8939 20.9275 13.0852 20.0693C12.4092 19.3518 12.1104 18.4228 12.2442 17.453C12.3744 16.5073 12.9264 15.686 13.7979 15.1403C14.9747 14.4038 16.6542 14.191 18.4619 14.5183C18.1204 13.0825 17.2049 12.6975 16.4104 12.6563C14.7887 12.5723 14.2012 13.4968 14.1394 13.6028L12.3812 12.65C12.4277 12.5623 13.5467 10.5068 16.5142 10.659C18.3569 10.7545 20.3179 11.9948 20.5719 15.1408C22.6594 16.0395 23.6769 17.6 23.6769 19.8915C23.6769 23.292 20.4282 25.856 16.1197 25.856C10.8829 25.856 7.65116 22.4133 7.47516 16.6465C7.36716 13.1173 8.24216 10.291 10.0052 8.47327C11.5062 6.92552 13.5877 6.14077 16.1917 6.14077C22.4579 6.14077 24.1399 10.923 24.5064 12.3888L22.5659 12.8735C22.2104 11.4505 20.8774 8.14077 16.1917 8.14077C14.1494 8.14077 12.5509 8.72102 11.4409 9.86552C9.70041 11.6598 9.41066 14.5103 9.47416 16.5855Z" fill="#20395D"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4_8045">
                                                <rect width="32" height="32" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32" height="32" rx="16" fill="#20395D"/>
                                        <g clip-path="url(#clip0_4_8051)">
                                            <mask id="mask0_4_8051" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="5" y="5" width="22" height="23">
                                                <path d="M26.6693 5.3335H5.33594V27.1468H26.6693V5.3335Z" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_4_8051)">
                                                <path d="M18.0322 14.5652L25.974 5.3335H24.092L17.1962 13.3493L11.6884 5.3335H5.33594L13.6647 17.4548L5.33594 27.1356H7.218L14.5002 18.6707L20.3168 27.1356H26.6693L18.0317 14.5652H18.0322ZM15.4544 17.5616L14.6106 16.3545L7.89613 6.75029H10.7869L16.2055 14.5012L17.0494 15.7082L24.0929 25.7833H21.2022L15.4544 17.562V17.5616Z" fill="white"/>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4_8051">
                                                <rect width="21.3333" height="21.8133" fill="white" transform="translate(5.33203 5.33252)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_4_8058)">
                                            <path d="M16 32C7.1648 32 0 24.8352 0 16C0 7.1648 7.1648 0 16 0C24.8352 0 32 7.1648 32 16C32 24.8352 24.8352 32 16 32Z" fill="#20395D"/>
                                            <path d="M15.999 7.04612C18.9142 7.04612 19.2598 7.05572 20.4118 7.11012C21.4774 7.15812 22.0566 7.33732 22.4406 7.48773C22.9494 7.68612 23.3142 7.92292 23.695 8.30372C24.0758 8.68452 24.3126 9.04933 24.511 9.55813C24.6614 9.94213 24.8374 10.5213 24.8886 11.5869C24.9398 12.7389 24.9526 13.0845 24.9526 15.9997C24.9526 18.9149 24.943 19.2605 24.8886 20.4125C24.8406 21.4781 24.6614 22.0573 24.511 22.4413C24.3126 22.9501 24.0758 23.3149 23.695 23.6957C23.3142 24.0765 22.9494 24.3133 22.4406 24.5117C22.0566 24.6621 21.4774 24.8381 20.4118 24.8893C19.2598 24.9405 18.9142 24.9533 15.999 24.9533C13.0838 24.9533 12.7382 24.9437 11.5862 24.8893C10.5206 24.8413 9.94142 24.6621 9.55742 24.5117C9.04862 24.3133 8.68382 24.0765 8.30302 23.6957C7.92222 23.3149 7.68542 22.9501 7.48702 22.4413C7.33662 22.0573 7.16062 21.4781 7.10942 20.4125C7.05822 19.2605 7.04542 18.9149 7.04542 15.9997C7.04542 13.0845 7.05502 12.7389 7.10942 11.5869C7.15742 10.5213 7.33662 9.94213 7.48702 9.55813C7.68542 9.04933 7.92222 8.68452 8.30302 8.30372C8.68382 7.92292 9.04862 7.68612 9.55742 7.48773C9.94142 7.33732 10.5206 7.16132 11.5862 7.11012C12.7382 7.05572 13.0838 7.04612 15.999 7.04612ZM15.999 5.07812C13.0326 5.07812 12.6614 5.09093 11.4966 5.14533C10.335 5.19973 9.54142 5.38212 8.84382 5.65412C8.12702 5.92932 7.51582 6.30373 6.91102 6.91172C6.30302 7.51972 5.93182 8.12772 5.65022 8.84772C5.38142 9.54212 5.19582 10.3357 5.14142 11.5005C5.08702 12.6653 5.07422 13.0365 5.07422 16.0029C5.07422 18.9693 5.08702 19.3405 5.14142 20.5053C5.19582 21.6669 5.37822 22.4605 5.65022 23.1581C5.92862 23.8717 6.30302 24.4829 6.91102 25.0877C7.51902 25.6957 8.12702 26.0669 8.84702 26.3485C9.54142 26.6173 10.335 26.8029 11.4998 26.8573C12.6646 26.9117 13.0358 26.9245 16.0022 26.9245C18.9686 26.9245 19.3398 26.9117 20.5046 26.8573C21.6662 26.8029 22.4598 26.6205 23.1574 26.3485C23.871 26.0701 24.4822 25.6957 25.087 25.0877C25.695 24.4797 26.0662 23.8717 26.3478 23.1517C26.6166 22.4573 26.8022 21.6637 26.8566 20.4989C26.911 19.3341 26.9238 18.9629 26.9238 15.9965C26.9238 13.0301 26.911 12.6589 26.8566 11.4941C26.8022 10.3325 26.6198 9.53892 26.3478 8.84132C26.0694 8.12772 25.695 7.51653 25.087 6.91172C24.479 6.30373 23.871 5.93253 23.151 5.65093C22.4566 5.38213 21.663 5.19652 20.4982 5.14212C19.3366 5.09092 18.9654 5.07812 15.999 5.07812Z" fill="white"/>
                                            <path d="M15.9963 10.3906C12.8987 10.3906 10.3867 12.9026 10.3867 16.0002C10.3867 19.0978 12.8987 21.6098 15.9963 21.6098C19.0939 21.6098 21.6059 19.0978 21.6059 16.0002C21.6059 12.9026 19.0939 10.3906 15.9963 10.3906ZM15.9963 19.6418C13.9867 19.6418 12.3547 18.013 12.3547 16.0002C12.3547 13.9874 13.9867 12.3586 15.9963 12.3586C18.0059 12.3586 19.6379 13.9874 19.6379 16.0002C19.6379 18.013 18.0059 19.6418 15.9963 19.6418Z" fill="white"/>
                                            <path d="M21.8315 11.4819C22.5561 11.4819 23.1435 10.8945 23.1435 10.1699C23.1435 9.44531 22.5561 8.85791 21.8315 8.85791C21.1069 8.85791 20.5195 9.44531 20.5195 10.1699C20.5195 10.8945 21.1069 11.4819 21.8315 11.4819Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4_8058">
                                                <rect width="32" height="32" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div id="projectPhotos" class="hidden fixed inset-0 z-50 flex items-center justify-center overflow-y-auto">
        <div class="fixed inset-0 bg-black/50" onclick="document.getElementById('projectPhotos').classList.add('hidden')"></div>

        <div class="relative bg-white rounded-2xl shadow-2xl w-full md:max-w-[120vh] lg:max-w-[150vh] mx-4 p-6 z-10 max-h-[98vh] overflow-y-auto">
            <button class="absolute bg-white rounded-full top-3 right-6" onclick="document.getElementById('projectPhotos').classList.add('hidden')"><i class="fa-regular fa-circle-xmark text-2xl"></i></button>
            <div>
                <h1 class="md:text-2xl font-bold my-4">Photos Of the Project</h1>
                <div class="grid grid-cols-1">
                    <div class="max-w-[215vh] min-h-[320px] md:min-h-[619px]">
                        <img src="{{ asset('images/vendor/productPhoto.png') }}" class="w-full h-full">
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-[15px] my-8">
                        <div class="max-w-full h-[130px] md:min-h-[237px] rounded">
                            <img src="{{ asset('images/vendor/productPhoto.png') }}" class="w-full h-full">
                        </div>
                        <div class="max-w-full h-[130px] md:min-h-[237px] rounded">
                            <img src="{{ asset('images/vendor/productPhoto.png') }}" class="w-full h-full">
                        </div>
                        <div class="max-w-full h-[130px] md:min-h-[237px] rounded">
                            <img src="{{ asset('images/vendor/productPhoto.png') }}" class="w-full h-full">
                        </div>
                        <div class="max-w-full h-[130px] md:min-h-[237px] rounded">
                            <img src="{{ asset('images/vendor/productPhoto.png') }}" class="w-full h-full">
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-3xl font-bold mb-[22px]">
                        Location
                    </h1>
                    <div class="bg-white w-full rounded-2xl shadow-lg overflow-hidden">

                        <!-- Map -->
                        <div class="w-full h-[22rem] md:min-h-[33rem]">
                            <iframe class="w-full h-full" src="https://maps.google.com/maps?q=55%20Fahd%20Street%20Hawalli%20Kuwait&t=&z=15&ie=UTF8&iwloc=&output=embed">
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
