@extends('layouts.app')

@section('content')

    <section class="main-container">
        <main class="relative min-h-[800px] w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/images/home/hero.png') }}"
                     class="w-full h-full object-cover" alt="Construction">
            </div>


            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6">
                <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
                    Masters of Consistency and <br> Quality.
                </h1>

                <p class="text-gray-100 text-sm md:text-[18px] max-w-4xl mx-auto mb-12 opacity-90 font-lg leading-relaxed">
                    Blessing welcomed ladyship she met humoured sir breeding her.
                    Six curiosity day assurance bed necessary.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <button
                        class="btn-leaf bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Explore
                    </button>

                    <button
                        class="btn-leaf bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Contact Us
                    </button>
                </div>
            </div>

        </main>
    </section>


    <div class="pt-10 bg-[#FFFFFF] font-sans">
        <div class="main-container mx-auto px-4">
            <div class="flex flex-col-reverse md:flex-row justify-between items-start md:items-center mb-12 gap-6">

                <h2 class="lg:text-[48px] md:text-[40px] text-[32px] font-bold text-[#000000]">
                    Service Providers
                </h2>

                <div class="flex items-center gap-3 w-full md:w-auto">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search..."
                               class="lg:w-[265px] lg:h-[48px] md:w-[200px] md:h-[42px] w-full h-[40px] bg-white border border-gray-200 py-3.5 px-12 rounded-[5px] shadow-sm focus:outline-none placeholder:text-[#A8A8A8]">

                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.66732 14.0002C11.1651 14.0002 14.0007 11.1646 14.0007 7.66683C14.0007 4.16903 11.1651 1.3335 7.66732 1.3335C4.16951 1.3335 1.33398 4.16903 1.33398 7.66683C1.33398 11.1646 4.16951 14.0002 7.66732 14.0002Z"
                                  stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.6673 14.6668L13.334 13.3335" stroke="#A8A8A8" stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </span>
                    </div>

                    <button class="bg-white lg:w-[48px] lg:h-[48px] md:w-[40px] md:h-[40px] w-[40px] h-[40px] border border-[#20395D] flex-shrink-0 p-1 rounded-[5px] shadow-sm flex items-center justify-center">
                        <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 md:w-8 md:h-8">
                            <path d="M7.19987 2.7998H24.7999C26.2665 2.7998 27.4665 3.9998 27.4665 5.46647V8.39981C27.4665 9.46647 26.7999 10.7998 26.1332 11.4665L20.3999 16.5331C19.5999 17.1998 19.0665 18.5331 19.0665 19.5998V25.3331C19.0665 26.1331 18.5332 27.1998 17.8665 27.5998L15.9999 28.7998C14.2665 29.8665 11.8665 28.6665 11.8665 26.5331V19.4665C11.8665 18.5331 11.3332 17.3331 10.7999 16.6665L5.7332 11.3331C5.06654 10.6665 4.5332 9.46647 4.5332 8.66647V5.5998C4.5332 3.9998 5.7332 2.7998 7.19987 2.7998Z"
                                  stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M14.5733 2.7998L8 13.3331" stroke="#20395D" stroke-width="2" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        <div
            class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[120px] h-[120px] md:w-[151px] md:h-[156px] bg-[#223862] rounded-[25px] shadow-sm hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/all.png') }}" alt="All"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain invert brightness-0">
                </div>
                <span class="text-white font-bold text-[18px] lg:text-[24px]">All</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[252px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/construction.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Construction">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Construction</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/electricity.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Electricity">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Electricity</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/plumbing.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Plumbing</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/carpentry.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Carpentry">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Carpentry</span>
            </button>

        </div>
    </section>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto font-sans flex flex-col mt-16 px-4 md:px-6 xl:px-0">

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 xl:gap-x-[24px] lg:gap-x-[14px] gap-x-6 xl:gap-y-[58px] lg:gap-y-[38px] gap-y-10 xl:px-8">

            <!-- Card 1 -->
            <a href="{{ route('vendor') }}" class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card1.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('vendor') }}"
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card2.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('vendor') }}"
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card3.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('vendor') }}"
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card4.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('vendor') }}"
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card5.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('vendor') }}"
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card6.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </a>
        </div>

        <div class="main-container flex items-center gap-3 font-sans lg:justify-end justify-center">

            <button class="md:w-[125px] w-24 md:h-[42px] flex items-center md:gap-2 md:p-2 pr-[6px] md:pr-[0px] border border-[#20395D] md:rounded-[10px] rounded-[6px] text-[#20395D] font-bold hover:bg-gray-50 transition-colors">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.0898 19.9201L8.56984 13.4001C7.79984 12.6301 7.79984 11.3701 8.56984 10.6001L15.0898 4.08008"
                          stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                <span class="md:text-[18px] text-[10px]">Previous</span>
            </button>

            <div class="flex gap-[12px]">
                <button class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                    <span class="md:text-[18px] text-[10px]">1</span>
                </button>

                <button class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full bg-[#20395D] text-white font-bold shadow-md">
                    <span class="md:text-[18px] text-[10px]">2</span>
                </button>

                <button class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                    <span class="md:text-[18px] text-[10px]">3</span>
                </button>

                <div class="md:block hidden flex items-center px-1 tracking-[2px] font-bold text-gray-800">
                    ....................
                </div>

                <button class="md:block hidden w-[32px] h-[32px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                    10
                </button>
            </div>

            <button class="md:w-[125px] w-24 md:h-[42px] flex items-center text-center justify-center md:gap-2  bg-[#20395D] md:rounded-[10px] rounded-[6px] text-white font-bold hover:bg-[#1a2c4e] transition-all shadow-md">
                <span class="md:text-[18px] text-[10px]">Next</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                          stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

    </section>

@endsection
