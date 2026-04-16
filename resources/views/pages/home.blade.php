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

    <div class="pt-20 bg-[#FAF8F4]">
        <div class="relative mb-16 h-[9rem]"
             style="background-image: url('{{ asset ('img/images/home/thiqah-services-bg.png')}}');">

            <div class="main-container mx-auto relative z-10">
                <h2 class="absolute top-[55px] text-3xl md:text-[48px] font-bold text-black">
                    Thiqah Services
                </h2>
            </div>
        </div>
    </div>


    <section class="bg-[#FAF8F4] main-container w-full mx-auto font-sans px-4 py-16">

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 gap-8 xl:gap-[43px] justify-items-center">

            <!-- Card 1 -->
            <div
                class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50">
                <div
                    class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg shadow-[#9381BB]/20 flex-shrink-0">
                    <div class="-rotate-45">
                        <img src="{{ asset('img/images/home/water-tank.png') }}" alt="Water Tanker"
                             class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                    </div>
                </div>

                <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Water Tanker</h3>

                <button
                    class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors">
                    Order Now
                </button>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50">
                <div
                    class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg shadow-[#9381BB]/20 flex-shrink-0">
                    <div class="-rotate-45">
                        <img src="{{ asset('img/images/home/soil.png') }}" alt="Water Tanker"
                             class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                    </div>
                </div>

                <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Soil</h3>

                <button
                    class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors">
                    Order Now
                </button>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50">
                <div
                    class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg shadow-[#9381BB]/20 flex-shrink-0">
                    <div class="-rotate-45">
                        <img src="{{ asset('img/images/home/bricks.png') }}" alt="Water Tanker"
                             class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                    </div>
                </div>

                <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Bricks</h3>

                <button
                    class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors">
                    Order Now
                </button>
            </div>

            <!-- Card 4 -->
            <div
                class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50">
                <div
                    class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg shadow-[#9381BB]/20 flex-shrink-0">
                    <div class="-rotate-45">
                        <img src="{{ asset('img/images/home/contracts.png') }}" alt="Water Tanker"
                             class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                    </div>
                </div>

                <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Contracts</h3>

                <button
                    class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors">
                    Order Now
                </button>
            </div>


            <!-- Card 5 -->
            <div
                class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50">
                <div
                    class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg shadow-[#9381BB]/20 flex-shrink-0">
                    <div class="-rotate-45">
                        <img src="{{ asset('img/images/home/insurance.png') }}" alt="Water Tanker"
                             class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                    </div>
                </div>

                <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Insurance</h3>

                <button
                    class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors">
                    Order Now
                </button>
            </div>

            <a href="{{ route('services') }}"
               class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center justify-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50 cursor-pointer group">
                <svg class="w-[80px] h-[80px] md:w-[120px] md:h-[120px]" viewBox="0 0 120 120" fill="none">
                    <path
                        d="M60.0005 110C87.6147 110 110 87.6142 110 60C110 32.3858 87.6147 10 60.0005 10C32.3862 10 10.0005 32.3858 10.0005 60C10.0005 87.6142 32.3862 110 60.0005 110Z"
                        stroke="#826EA3" stroke-width="7.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path d="M53.7002 77.6501L71.3002 60.0001L53.7002 42.3501" stroke="#826EA3" stroke-width="7.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-[26px] md:text-[32px] font-bold text-black mt-4 md:mt-6">View All</span>
            </a>

        </div>
    </section>

    {{--<section>
        <div class="services font-sans px-4 py-16 lg:max-w-[80%] mx-auto">
            <div class="flex flex-col">
                <h2 class="font-bold text-black text-3xl mb-10">Thiqah Services</h2>
                <div class="flex flex-wrap justify-center w-full gap-14">

                    <div onclick="showPage('page-water')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <div class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0">
                            <div class="-rotate-45">
                                <img src="{{ asset('images/thiqah-services/water-tank.png') }}" alt="Water Tanker" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                            </div>
                        </div>
                        <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Water Tank</h3>
                        <button class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors whitespace-nowrap">
                            Order Now
                        </button>
                    </div>

                    <div onclick="showPage('page-soil')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <div class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0">
                            <div class="-rotate-45">
                                <img src="{{ asset('images/thiqah-services/soil.png') }}" alt="Water Tanker" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                            </div>
                        </div>
                        <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Soil</h3>
                        <button class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors whitespace-nowrap">
                            Order Now
                        </button>
                    </div>

                    <div onclick="showPage('page-bricks')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <div class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0">
                            <div class="-rotate-45">
                                <img src="{{ asset('images/thiqah-services/bricks.png') }}" alt="Water Tanker" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                            </div>
                        </div>
                        <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Bricks</h3>
                        <button class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors whitespace-nowrap">
                            Order Now
                        </button>
                    </div>

                    <div onclick="showPage('page-contracts')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <div class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0">
                            <div class="-rotate-45">
                                <img src="{{ asset('images/thiqah-services/contracts.png') }}" alt="Water Tanker" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                            </div>
                        </div>
                        <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Contracts</h3>
                        <button class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors whitespace-nowrap">
                            Order Now
                        </button>
                    </div>

                    <div onclick="showPage('page-insurance')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <div class="w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0">
                            <div class="-rotate-45">
                                <img src="{{ asset('images/thiqah-services/insurance.png') }}" alt="Water Tanker" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
                            </div>
                        </div>
                        <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">Insurance</h3>
                        <button class="border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors whitespace-nowrap">
                            Order Now
                        </button>
                    </div>

                    <div onclick="showPage('page-insurance')" class="cursor-pointer bg-white w-full md:w-[45%] xl:w-[30%] max-w-[460px] min-h-[358px] rounded-[37px] p-8 md:p-12 flex flex-col items-center shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] border border-gray-50/50 hover:shadow-[0_0_25px_8px_rgba(129,110,162,0.2)] transition-all">
                        <svg class="w-[80px] h-[80px] md:w-[120px] md:h-[120px]" viewBox="0 0 120 120" fill="none">
                            <path d="M60.0005 110C87.6147 110 110 87.6142 110 60C110 32.3858 87.6147 10 60.0005 10C32.3862 10 10.0005 32.3858 10.0005 60C10.0005 87.6142 32.3862 110 60.0005 110Z"
                                  stroke="#826EA3" stroke-width="7.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M53.7002 77.6501L71.3002 60.0001L53.7002 42.3501" stroke="#826EA3" stroke-width="7.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-[26px] md:text-[32px] font-bold text-black mt-4 md:mt-6">View All</span>
                    </div>


                </div>
            </div>
        </div>
    </section>--}}

    <div class="pt-20 bg-[#FAF8F4]">
        <div class="relative mb-16 h-[9rem]"
             style="background-image: url('{{ asset ('img/images/home/thiqah-services-bg.png')}}');">

            <div class="main-container mx-auto relative z-10">
                <h2 class="absolute top-[55px] text-3xl md:text-[48px] font-bold text-black">
                    Service Providers
                </h2>
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
                    <img src="{{ asset('img/images/home/construction.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Construction">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Construction</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/electricity.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Electricity">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Electricity</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/plumbing.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Plumbing</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/carpentry.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
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
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card1.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card2.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card3.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card4.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card5.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 6 -->
            <div
                class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
                <img src="{{ asset('img/images/home/SP-card6.png') }}" alt="Construction"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                <div
                    class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

                    <div class="flex flex-col overflow-hidden w-full">
                        <div class="flex items-center gap-1.5 mb-0.5">
                            <span
                                class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                            <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                                 class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
                        </div>

                        <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

                        <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                            <span
                                class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
                        </div>
                    </div>

                    <button
                        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
                        <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <a href="{{ route('ServiceProvider') }}" class="mt-12 md:mt-20 flex justify-center">
            <button
                class="bg-[#223862] xl:w-[247px] xl:h-[64px] text-white px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300">
                See All
            </button>
        </a>

    </section>


    <!-- Banner -->
    <section class="w-full mx-auto px-4 xl:px-0 py-16 font-sans flex justify-center overflow-hidden">

        <div
            class="w-full xl:w-[1228px] 2xl:w-[2480px] justify-center rounded-[30px] md:rounded-[45px] p-6 md:p-12 xl:p-10 flex flex-col xl:flex-row items-center gap-10 xl:gap-[86px] 2xl:gap-[350px] overflow-visible bg-center bg-cover"
            style="background-image: url('{{ asset ('img/images/About Us/Frame 1321315233.png')}}');">

            <div
                class="w-full xl:w-[610px] flex flex-col items-center xl:items-start text-center xl:text-left text-white">

                <div class="flex items-center gap-3 mb-4 md:mb-6">
                    <img src="{{ asset('img/images/home/decor.png') }}" alt="decor"
                         class="w-[12px] h-[18px] xl:w-[14px] xl:h-[22px]">
                    <span class="text-[12px] md:text-[16px] text-[#AAAAAA] uppercase font-medium tracking-wider">Send Requests</span>
                </div>

                <h2 class="text-[32px] md:text-[50px] xl:text-[53px] font-bold text-white mb-4 md:mb-8 leading-tight xl:whitespace-nowrap">
                    Big Projects <br class="hidden xl:inline"/> Await!
                </h2>

                <div class="mb-4 md:mb-8">
                <span
                    class="text-[40px] md:text-[70px] xl:text-[85px] font-extrabold text-[#D9D9D9] leading-none block md:inline"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    200 Projects
                </span>
                </div>

                <p class="text-[12px] md:text-[16px] text-[#AAAAAA] mb-8 md:mb-12 max-w-[530px] leading-relaxed">
                    Explore the latest opportunities and submit your price offer today.
                </p>

                <button
                    class="bg-[#FFFFFF] w-full max-w-[247px] xl:w-[247px] xl:h-[64px] text-[#20395D] py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[16px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300">
                    Send Request
                </button>
            </div>

            <div
                class="w-full xl:w-[532px] h-auto xl:h-[456px] flex flex-col items-center xl:items-end gap-6 xl:gap-0 relative">

                <div
                    class="w-[260px] md:w-[320px] xl:w-[380px] h-[160px] md:h-[200px] xl:h-[231px] rounded-[100px] xl:mr-56 overflow-hidden shadow-2xl z-10 flex items-center justify-center">
                    <img src="{{ asset('img/images/home/banner1.png') }}" alt="Road Roller"
                         class="w-full h-full object-cover">
                </div>

                <div
                    class="w-[300px] md:w-[450px] xl:w-[550px] h-[180px] md:h-[220px] xl:h-[200px] rounded-full overflow-hidden shadow-2xl z-20 xl:mr-14 -mt-10 md:-mt-5 xl:mt-[20px] flex items-center justify-center">
                    <img src="{{ asset('img/images/home/banner2.png') }}" alt="Construction Site"
                         class="w-full h-full object-cover">
                </div>

            </div>
        </div>
    </section>


    <div class="bg-[#FAF8F4]">
        <div class="relative mb-16 h-[9rem]"
             style="background-image: url('{{ asset ('img/images/home/thiqah-services-bg.png')}}');">

            <div class="main-container mx-auto relative z-10">
                <h2 class="absolute top-[55px] text-3xl md:text-[48px] font-bold text-black">
                    Products
                </h2>
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
                    <img src="{{ asset('img/images/home/building.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Construction">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Building</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/electric.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Electricity">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Electrical</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/lighting.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Lighting</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/plumbing.png') }}"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Plumbing</span>
            </button>

        </div>
    </section>


    <section class="bg-[#FAF8F4] w-full main-container mx-auto py-16 px-4">

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-6 xl:gap-[23px] justify-items-center">

            <!-- Card 1 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product1.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>


            <!-- Card 2 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product2.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>


            <!-- Card 3 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product3.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>


            <!-- Card 4 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product4.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>


            <!-- Card 5 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product5.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product6.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>


            <!-- Card 7 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product7.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('ProductDetails') }}"
               class="bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group">

                <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
                    <img src="{{ asset('img/images/home/product1.png') }}" alt="Product"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <button
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="44" height="44" rx="22" fill="white"/>
                            <path
                                d="M22.8265 33.7461C22.3732 33.9061 21.6265 33.9061 21.1732 33.7461C17.3065 32.4261 8.6665 26.9195 8.6665 17.5861C8.6665 13.4661 11.9865 10.1328 16.0798 10.1328C18.5065 10.1328 20.6532 11.3061 21.9998 13.1195C23.3465 11.3061 25.5065 10.1328 27.9198 10.1328C32.0132 10.1328 35.3332 13.4661 35.3332 17.5861C35.3332 26.9195 26.6932 32.4261 22.8265 33.7461Z"
                                stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="mb-3">
                        <span
                            class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">Bricks</span>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="lg:text-[24px] text-[18px] font-medium">Products</h3>
                        <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6]">100 KD</span>
                    </div>

                    <button
                        class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20">
                        Add To Cart
                    </button>
                </div>
            </a>
        </div>

        <a href="{{ route('products') }}" class="mt-16 flex justify-center">
            <button
                class="bg-[#FFFFFF] xl:w-[247px] xl:h-[64px] text-[#20395D] px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300">
                See All
            </button>
        </a>

    </section>

@endsection
