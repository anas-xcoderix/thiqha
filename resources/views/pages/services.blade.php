
@extends('layouts.app')

@section('title', 'THIQAH – Services')

@section('content')

<div id="page-main">
    <section class="p-6 w-full box-border">
        <main class="relative min-h-screen w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/thiqah-services/hero.png') }}" class="min-h-screen object-cover w-full" alt="Construction">
            </div>

            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6">
                <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-20 tracking-tight">
                    Thiqah Services
                </h1>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mt-10">
                    <button class="rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Explore
                    </button>
                    <button class="rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Contact Us
                    </button>
                </div>
            </div>

        </main>
    </section>

    <section>
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

                </div>
            </div>
        </div>
    </section>
</div>

<div id="page-water" class="hidden bg-white p-6 max-w-[99%] md:max-w-[90%] mx-auto mt-[140px]">
    <button onclick="showPage('page-main')" class="mb-6 flex items-center gap-2 text-[#21395D] font-semibold hover:opacity-70 transition-opacity">
        <i class='fas fa-arrow-left text-black text-[36px]'></i>
    </button>
    <div class="flex flex-col lg:flex-row gap-6 max-w-full">
        <div class="flex-1 flex flex-col gap-4 max-w-full">
            <div class="border border-gray-200 rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-black mb-8">Water Tank Order</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden w-full md:w-1/2">
                        <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
              <span>
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                 <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                 <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                 <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
               </svg>
              </span>
                            <span>+965</span>
                        </div>
                        <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Region <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm  text-gray-400 outline-none focus:border-[#816EA2]">
                                <option value="">Choose Region</option>
                            </select>

                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">District Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Address Type</label>
                    <div class="flex flex-col md:flex-row gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="wt-address" value="house" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> House
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="wt-address" value="farm" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Farm
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="wt-address" value="construction" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Construction area
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Street Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Building Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Additional information</label>
                    <textarea placeholder="Enter Information" rows="4" class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2] resize-none"></textarea>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Tanker Size</h3>
                <div class="flex flex-col md:flex-row gap-8">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-size" value="3000" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 3000 Gallon
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-size" value="5000" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 5000 Gallon
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-size" value="6000" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 6000 Gallon
                    </label>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Time Slot</h3>
                <div class="flex flex-col md:flex-row gap-8">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-time" value="now" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Now
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-time" value="24h" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> In 24 H
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="wt-time" value="date" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Time and Date
                    </label>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 w-full lg:w-[304px]">
            <div class=" border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4_3643)">
                <path d="M22.0785 4.32007H1.60134C0.893847 4.32007 0.320312 4.8936 0.320312 5.60109V18.3985C0.320312 19.106 0.893847 19.6796 1.60134 19.6796H22.0785C22.786 19.6796 23.3595 19.106 23.3595 18.3985V5.60109C23.3595 4.8936 22.786 4.32007 22.0785 4.32007Z" fill="#0873B9"/>
                <path d="M0.339844 8.40858C8.01916 8.40645 15.6989 8.40645 23.3791 8.40858V15.5368C15.6998 15.539 8.02001 15.539 0.339844 15.5368V8.40858ZM4.57171 8.96775C4.56146 10.9373 4.57811 12.9075 4.57171 14.8778C4.71567 14.9 4.86097 14.9124 5.00662 14.9149C6.2159 14.9149 7.42583 14.9149 8.63448 14.9149C8.80229 14.9149 8.96819 14.8912 9.13472 14.8771C9.13856 14.1726 9.13472 13.468 9.13792 12.7634C9.17169 12.4097 9.18388 12.0542 9.17443 11.6989C9.46074 11.9359 9.69837 12.2209 9.96226 12.4797C10.6028 13.1266 11.2343 13.787 11.8838 14.4307C12.0046 14.5729 12.1403 14.7018 12.2886 14.815C12.3765 14.8231 12.4649 14.826 12.5531 14.824C14.6483 14.815 16.7434 14.8336 18.8385 14.815C18.7797 14.7305 18.7104 14.6539 18.6322 14.587C18.0173 14.0822 17.4191 13.5577 16.81 13.0497C16.2931 12.6379 15.8005 12.1991 15.2945 11.7751C15.2478 11.7156 15.1325 11.6553 15.1869 11.5695C15.4149 11.3947 15.6628 11.2435 15.8838 11.0571C16.4263 10.6087 17.0213 10.2244 17.5671 9.7812C17.9082 9.54823 18.2358 9.29611 18.5483 9.02604C16.6076 9.00362 14.6662 9.02604 12.7254 9.01579C12.6241 9.01062 12.5226 9.01794 12.4231 9.03757C11.5591 9.67168 10.7315 10.3525 9.87195 10.9931C9.66569 11.1729 9.44359 11.3336 9.20838 11.4734C9.17379 10.6408 9.20838 9.80106 9.19044 8.96583C7.64809 8.96903 6.10958 8.96327 4.57171 8.96583V8.96775Z" fill="#0873B9"/>
                <path d="M11.8398 17.5788C11.963 17.4213 12.1259 17.2997 12.3119 17.2264C12.4978 17.1531 12.6999 17.1308 12.8973 17.1618C13.0532 17.1547 13.2077 17.193 13.3422 17.272C13.4767 17.351 13.5854 17.4674 13.6551 17.6069C13.0504 17.6127 12.4432 17.6249 11.8398 17.5788Z" fill="#0873B9"/>
                <path d="M2.88631 4.97592C3.17198 4.97592 3.45829 4.9708 3.74396 4.97913C3.59792 5.40123 3.38399 5.79578 3.22066 6.21147C4.95005 6.23261 6.67623 6.21147 8.40305 6.22236C8.55103 6.22411 8.699 6.21769 8.84628 6.20315C8.83565 6.00076 8.83886 5.79789 8.85589 5.59594C9.07238 5.59594 9.28888 5.59594 9.50601 5.59594C9.52138 5.78809 9.52394 5.98345 9.52138 6.17753C9.61554 6.17753 9.71354 6.17112 9.80641 6.166C9.82114 5.98025 9.83011 5.79514 9.84356 5.60939C10.0394 5.59674 10.2358 5.59674 10.4316 5.60939C10.4348 6.11155 10.4386 6.61372 10.4316 7.11524C8.16222 7.13253 5.89288 7.11524 3.62354 7.12292C3.41281 7.12292 3.20273 7.12292 2.992 7.11524C2.75052 6.82252 2.51161 6.52853 2.26758 6.23837C2.45973 5.80987 2.67366 5.3929 2.88631 4.97592Z" fill="#FDFEFD"/>
                <path d="M18.5689 4.93058C19.4016 4.93058 20.2381 4.91777 21.0727 4.93763C21.1137 5.0305 21.156 5.12337 21.1963 5.21625C20.6199 5.23995 20.0434 5.26172 19.4669 5.26493C19.4618 5.36421 19.4567 5.46477 19.4522 5.56469C20.1376 5.5871 20.8248 5.53971 21.5089 5.59351C21.6516 5.79674 21.7728 6.01417 21.8708 6.24235C21.7318 6.42297 21.5717 6.58759 21.4167 6.75476C21.3526 6.84827 21.2322 6.8297 21.1342 6.83418C20.1734 6.83418 19.2127 6.83418 18.2519 6.83418C18.0072 6.84443 17.8259 6.65548 17.6159 6.56325C17.5947 6.94755 17.6095 7.33506 17.605 7.72065C16.2727 7.7309 14.9392 7.73602 13.6069 7.72065C13.6069 6.99623 13.6037 6.27117 13.6069 5.54675C14.5561 5.54675 15.506 5.54995 16.4552 5.54675C16.4604 5.80296 16.4591 6.06237 16.4552 6.32113C15.8295 6.33458 15.2024 6.32113 14.576 6.32818C14.5504 6.58749 14.5478 6.84856 14.5683 7.10832C15.303 7.12882 16.0383 7.11857 16.7723 7.11281C16.7845 6.59207 16.7723 6.07069 16.7755 5.54995C17.2239 5.54995 17.6722 5.54995 18.1161 5.54995C18.3223 5.76196 18.4882 6.00664 18.6874 6.22441C18.7412 6.30832 18.8514 6.28078 18.9366 6.28847C19.6098 6.28526 20.2817 6.28847 20.9574 6.28847C20.9151 6.17189 20.869 6.05788 20.8197 5.94387C20.2304 5.94387 19.6412 5.94387 19.0519 5.94387C18.8495 5.97269 18.7713 5.75172 18.6676 5.62682C18.4966 5.42954 18.5709 5.16309 18.5689 4.93058Z" fill="#FDFEFD"/>
                <path d="M4.10534 5.00994C4.31132 4.9853 4.51925 4.98144 4.726 4.99841C4.726 5.09321 4.72216 5.19056 4.71767 5.28344C4.51079 5.28728 4.3039 5.28728 4.09766 5.28344C4.09766 5.1912 4.10022 5.10089 4.10534 5.00994Z" fill="#FDFEFD"/>
                <path d="M5.13443 5.00284C5.33736 4.98293 5.5417 4.98186 5.74483 4.99964C5.74483 5.09443 5.74483 5.19179 5.74483 5.28402C5.54115 5.28402 5.33619 5.28402 5.1325 5.28402C5.1293 5.18923 5.13123 5.09635 5.13443 5.00284Z" fill="#FDFEFD"/>
                <path d="M9.79916 5.00181C10.0015 4.98214 10.2053 4.98214 10.4076 5.00181C10.4076 5.09469 10.4076 5.18756 10.4076 5.2798C10.204 5.28556 9.99965 5.28556 9.79532 5.2798C9.79404 5.18948 9.79596 5.09853 9.79916 5.00181Z" fill="#FDFEFD"/>
                <path d="M11.4062 5.8927C11.8149 5.87285 12.2235 5.88566 12.6322 5.88566C12.6668 6.19951 12.6565 6.51592 12.6616 6.83105C12.2447 6.83554 11.829 6.84194 11.4107 6.82721C11.4088 6.51272 11.4101 6.20399 11.4062 5.8927Z" fill="#FDFEFD"/>
                <path d="M18.1153 7.39233C18.3075 7.39233 18.506 7.39233 18.7014 7.40258C18.7014 7.4961 18.7014 7.58897 18.7014 7.68249C18.4938 7.69017 18.2863 7.69209 18.0801 7.68249C18.091 7.58513 18.1031 7.48905 18.1153 7.39233Z" fill="#FDFEFD"/>
                <path d="M19.0451 7.39938C19.2495 7.38868 19.4543 7.38868 19.6587 7.39938C19.6587 7.4961 19.6587 7.59154 19.6587 7.68953C19.4557 7.68953 19.2527 7.68953 19.0503 7.68505C19.0451 7.58897 19.0445 7.49418 19.0451 7.39938Z" fill="#FDFEFD"/>
                <path d="M0.339844 8.23706C8.01916 8.2392 15.6989 8.2392 23.3791 8.23706V8.40616C15.6998 8.40231 8.02001 8.40231 0.339844 8.40616V8.23706Z" fill="#FDFEFD"/>
                <path d="M0.339844 15.5349C8.01916 15.5388 15.6989 15.5388 23.3791 15.5349V15.7053C15.6998 15.7032 8.02001 15.7032 0.339844 15.7053V15.5349Z" fill="#FDFEFD"/>
                <path d="M19.7704 16.2136C20.1771 16.2136 20.5839 16.2136 20.9912 16.2136C20.9852 16.3896 20.9884 16.5658 21.0008 16.7414C21.2615 16.7369 21.5229 16.7414 21.7836 16.7414C21.7868 16.8695 21.7835 16.9976 21.7746 17.1257C21.5056 17.1257 21.2372 17.1257 20.9694 17.1308C20.9694 17.5593 20.9662 17.9885 20.9694 18.417C21.227 18.409 21.4848 18.4139 21.7419 18.4317C21.7398 18.5829 21.7398 18.7347 21.7419 18.8871C21.3852 18.914 21.0271 18.8935 20.6703 18.9012C20.4207 18.9288 20.1688 18.8749 19.9523 18.7475C19.8962 18.7037 19.8508 18.6477 19.8195 18.5838C19.7882 18.5199 19.7719 18.4497 19.7717 18.3786C19.7499 17.977 19.7909 17.5721 19.7474 17.1712C19.5482 17.1763 19.3489 17.1782 19.1504 17.1712C19.1504 17.0277 19.1515 16.8847 19.1536 16.742C19.3541 16.7369 19.5552 16.7388 19.7563 16.7363C19.7659 16.5633 19.7659 16.3885 19.7704 16.2136Z" fill="#FDFEFD"/>
                <path d="M3.44684 17.0423C3.80672 16.8412 4.20569 16.7199 4.61661 16.6868C5.02754 16.6536 5.44079 16.7094 5.82826 16.8502C6.12866 16.9744 6.45917 17.2018 6.47454 17.5509C6.48863 17.98 6.47454 18.4098 6.48222 18.8396C6.08254 18.8652 5.68158 18.8511 5.28126 18.8473C5.27101 18.4681 5.28831 18.0883 5.2755 17.7097C5.27461 17.6242 5.25025 17.5406 5.20507 17.4679C5.15989 17.3953 5.09563 17.3365 5.0193 17.2979C4.69599 17.1566 4.33347 17.1328 3.99447 17.2306C3.7799 17.2908 3.52178 17.4112 3.48655 17.6508C3.46861 18.0556 3.48655 18.4617 3.48014 18.8678C3.08367 18.8716 2.68847 18.8678 2.29199 18.8678C2.26637 18.1856 2.28175 17.5009 2.28367 16.8181C2.66285 16.8181 3.04139 16.8124 3.41993 16.8181C3.4289 16.8943 3.43851 16.968 3.44684 17.0423Z" fill="#FDFEFD"/>
                <path d="M10.7947 17.2341C11.234 16.9016 11.7659 16.7142 12.3166 16.698C12.9726 16.6223 13.6372 16.7103 14.251 16.9542C14.451 17.0355 14.6228 17.1737 14.745 17.3516C14.8673 17.5295 14.9347 17.7394 14.9389 17.9553C13.8974 17.9822 12.854 17.9355 11.8138 17.9784C11.8274 18.0552 11.8573 18.1282 11.9015 18.1925C11.9457 18.2568 12.0032 18.3109 12.07 18.3511C12.3475 18.4727 12.6527 18.5169 12.9533 18.4792C13.2428 18.4792 13.4657 18.2333 13.7597 18.257C14.1312 18.2621 14.5033 18.2493 14.8748 18.2698C14.5269 18.6373 14.0568 18.8651 13.5528 18.9103C12.9404 19.0026 12.3167 18.9878 11.7094 18.8668C11.5038 18.8396 11.3057 18.7719 11.1265 18.6674C10.9474 18.5629 10.7909 18.4238 10.666 18.2583C10.5633 18.0997 10.5199 17.91 10.5433 17.7225C10.5667 17.5351 10.6555 17.3619 10.7941 17.2335M11.8388 17.5787C12.4421 17.6242 13.0493 17.6126 13.654 17.6069C13.5843 17.4673 13.4757 17.3509 13.3412 17.2719C13.2067 17.1929 13.0521 17.1546 12.8963 17.1617C12.6989 17.1311 12.497 17.1537 12.3113 17.2272C12.1256 17.3008 11.9629 17.4225 11.8401 17.58L11.8388 17.5787Z" fill="#FDFEFD"/>
                <path d="M4.57155 8.9646C6.10878 8.9646 7.64601 8.9678 9.18324 8.9646C9.20245 9.79727 9.16659 10.637 9.20117 11.4722C9.43638 11.3324 9.65848 11.1716 9.86475 10.9918C10.7243 10.3513 11.5519 9.67045 12.4159 9.03634C12.5154 9.0167 12.6169 9.00938 12.7182 9.01456C14.659 9.02289 16.601 9.00239 18.5411 9.02481C18.2299 9.2932 17.9038 9.54383 17.5643 9.77549C17.0186 10.22 16.4236 10.6024 15.8811 11.0514C15.6601 11.2365 15.4122 11.3877 15.1842 11.5638C15.1298 11.6496 15.2483 11.7098 15.2918 11.7694C15.7978 12.1928 16.2904 12.6322 16.8073 13.044C17.4164 13.5564 18.0146 14.0791 18.6295 14.5813C18.7077 14.6482 18.777 14.7248 18.8358 14.8093C16.7406 14.8279 14.6455 14.8093 12.5504 14.8182C12.4621 14.8203 12.3738 14.8173 12.2859 14.8093C12.1376 14.6961 12.0018 14.5672 11.8811 14.425C11.2348 13.7845 10.6058 13.1209 9.95954 12.474C9.69565 12.2178 9.45802 11.9302 9.17171 11.6932C9.18116 12.0484 9.16897 12.4039 9.1352 12.7577C9.1288 13.4623 9.1352 14.1668 9.132 14.8714C8.96547 14.8855 8.79957 14.9086 8.63176 14.9092C7.42311 14.9092 6.21318 14.9092 5.00389 14.9092C4.85825 14.9067 4.71295 14.8943 4.56899 14.8721C4.57796 12.9044 4.56194 10.9342 4.57155 8.9646Z" fill="#FAE80C"/>
              </g>
              <defs>
              <clipPath id="clip0_4_3643">
              <rect width="23.6797" height="16" fill="white" transform="translate(0 4)"/>
              </clipPath>
              </defs>
              </svg>
              </span>
                        <span> KNET </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_3668)">
                      <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/>
                      <path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/>
                      <path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/>
                      <path d="M19.7322 15.1538H19.6989V14.9561H19.7482L19.8122 15.0949L19.8666 14.9561H19.9146V15.1525H19.8813V15.0041L19.8288 15.1321H19.7898L19.7322 15.0041V15.1538ZM19.5882 15.1532H19.5594V14.99H19.4922V14.9561H19.6605V14.99H19.5882V15.1532Z" fill="#F69E1E"/>
                      <path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/>
                    </g>
                  <defs>
                  <clipPath id="clip0_4_3668">
                  <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                  </clipPath>
                  </defs>
                </svg>
              </span>
                        <span> Master Card </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_3684)">
                <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/>
                <path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_4_3684">
                <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                </clipPath>
                </defs>
              </svg>
            </span>
                        <span>
               Visa
             </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.067 8.72078C12.067 9.40758 11.6477 9.8029 10.909 9.8029H9.93871V7.63866H10.913C11.6477 7.63866 12.067 8.02998 12.067 8.72078ZM13.9637 11.2204C13.9637 11.5519 14.2512 11.7675 14.7024 11.7675C15.2774 11.7675 15.7087 11.4041 15.7087 10.893V10.5855L14.7703 10.6454C14.2392 10.6814 13.9637 10.877 13.9637 11.2204ZM23 3.15446V17.21C23 18.2682 22.1415 19.1267 21.0833 19.1267H1.91667C0.858507 19.1267 0 18.2682 0 17.21V3.15446C0 2.0963 0.858507 1.23779 1.91667 1.23779H21.0833C22.1415 1.23779 23 2.0963 23 3.15446ZM5.10313 7.87425C5.43854 7.9022 5.77396 7.70654 5.98559 7.45897C6.19323 7.20342 6.32899 6.86002 6.29306 6.51262C5.99757 6.5246 5.63021 6.70828 5.41858 6.96383C5.22691 7.18345 5.06319 7.53883 5.10313 7.87425ZM7.52292 10.8491C7.51493 10.8411 6.74028 10.5456 6.73229 9.65116C6.72431 8.90446 7.34323 8.54508 7.37118 8.52512C7.01979 8.00602 6.47674 7.95012 6.28906 7.93814C5.80191 7.91019 5.38663 8.21366 5.15504 8.21366C4.91944 8.21366 4.56806 7.95012 4.18472 7.95811C3.68559 7.96609 3.2184 8.2496 2.96684 8.70081C2.44375 9.60324 2.83108 10.9369 3.33819 11.6716C3.58576 12.035 3.88524 12.4343 4.27656 12.4183C4.64792 12.4024 4.79566 12.1788 5.24288 12.1788C5.6941 12.1788 5.82188 12.4183 6.21319 12.4144C6.62049 12.4064 6.87205 12.051 7.12361 11.6876C7.39913 11.2723 7.51493 10.873 7.52292 10.8491ZM12.9295 8.71679C12.9295 7.65463 12.1908 6.9279 11.1366 6.9279H9.09219V12.3744H9.93871V10.5137H11.1087C12.1788 10.5137 12.9295 9.77894 12.9295 8.71679ZM16.5233 9.66314C16.5233 8.87651 15.8924 8.36939 14.926 8.36939C14.0276 8.36939 13.3648 8.88449 13.3408 9.58727H14.1035C14.1674 9.25186 14.4788 9.03224 14.9021 9.03224C15.4212 9.03224 15.7087 9.27182 15.7087 9.71904V10.0185L14.6545 10.0824C13.6722 10.1423 13.1411 10.5456 13.1411 11.2444C13.1411 11.9512 13.6882 12.4183 14.4748 12.4183C15.0059 12.4183 15.497 12.1508 15.7207 11.7236H15.7366V12.3784H16.5193V9.66314H16.5233ZM20.6042 8.4213H19.7457L18.7514 11.6397H18.7354L17.7411 8.4213H16.8507L18.2842 12.3864L18.2083 12.626C18.0806 13.0333 17.8689 13.193 17.4936 13.193C17.4257 13.193 17.2979 13.185 17.246 13.181V13.8359C17.2939 13.8519 17.5056 13.8558 17.5694 13.8558C18.396 13.8558 18.7833 13.5404 19.1227 12.5861L20.6042 8.4213Z" fill="black"/>
              </svg>
            </span>
                        <span> Apple Pay</span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4_3702)">
                  <g clip-path="url(#clip1_4_3702)">
                  <path d="M0.0349266 12.9237C0.208927 16.7667 1.20393 19.8067 3.49993 21.4647C5.78393 23.1127 9.49593 23.6357 13.4089 23.4707C17.2069 23.3107 20.2919 22.3027 21.9439 20.0027C23.5929 17.7057 24.1189 14.3157 23.9779 10.2017C23.8449 6.37073 22.8389 3.28773 20.5699 1.60373C18.3009 -0.080265 14.8899 -0.665265 10.6039 -0.460265C8.65793 -0.367265 6.90193 -0.114265 5.47693 0.456735C4.00693 1.04674 2.87093 1.87873 2.03993 3.03673C0.368927 5.36273 -0.148073 8.87573 0.0349266 12.9237ZM21.3149 9.04873L17.8889 16.0247H16.7079L20.1339 9.04873H21.3149ZM16.6279 9.04974L17.9889 11.8387L17.3969 13.0427L15.4479 9.04974H16.6279ZM12.5209 8.87173C13.9099 8.87173 15.2599 10.0377 15.3039 11.4917V14.2737H14.2599V11.4917C14.2389 10.7077 13.4069 9.92573 12.5209 9.92573C11.5249 9.92573 10.7919 10.7767 10.7919 11.5727C10.7919 12.6997 11.5859 13.2147 12.5209 13.2147H12.8889V14.2737H12.5209C10.9829 14.2727 9.73593 13.2877 9.73593 11.5727C9.73593 10.1737 10.9829 8.87173 12.5209 8.87173ZM3.84893 10.0277C3.84893 9.38873 4.36593 8.87173 5.00393 8.87173H6.60293C8.09293 8.87173 9.32793 10.0807 9.32793 11.5717C9.32793 13.0627 8.17493 14.2727 6.60193 14.2727H6.10693V13.2087H6.60193C7.54793 13.2087 8.23793 12.4757 8.23793 11.5717C8.23793 10.6677 7.50593 9.93474 6.60193 9.93474H5.00293C4.97514 9.9348 4.9481 9.94378 4.92579 9.96033C4.90347 9.97689 4.88705 10.0002 4.87893 10.0267V15.8337H3.84893V10.0277Z" fill="#2F55CC"/>
                  </g>
                  </g>
                  <defs>
                  <clipPath id="clip0_4_3702">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  <clipPath id="clip1_4_3702">
                  <rect width="24" height="24" fill="white" transform="translate(0 -0.5)"/>
                  </clipPath>
                  </defs>
                  </svg>
            </span>
                        <span> Samsung Pay </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="wt-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1675 0.467285C10.9755 0.467226 9.81032 0.820626 8.81922 1.4828C7.82812 2.14497 7.05564 3.08616 6.59946 4.18737C6.14328 5.28857 6.02389 6.50032 6.25639 7.66937C6.48889 8.83843 7.06284 9.91228 7.90566 10.7551C8.74847 11.598 9.8223 12.172 10.9913 12.4046C12.1604 12.6371 13.3721 12.5178 14.4734 12.0617C15.5746 11.6055 16.5158 10.8331 17.1781 9.84204C17.8403 8.85097 18.1937 7.68579 18.1937 6.49384C18.1937 4.89555 17.5588 3.36272 16.4287 2.23253C15.2986 1.10234 13.7658 0.467365 12.1675 0.467285ZM11.6956 6.06712H12.6221C13.0374 6.06673 13.4357 6.23131 13.7296 6.52465C14.0235 6.81799 14.1888 7.21606 14.1892 7.63129C14.1896 8.04651 14.025 8.44489 13.7317 8.73878C13.4384 9.03266 13.0403 9.19798 12.6251 9.19837V9.96971C12.6267 10.0372 12.6148 10.1044 12.5901 10.1672C12.5654 10.23 12.5284 10.2873 12.4813 10.3356C12.4341 10.3839 12.3777 10.4223 12.3155 10.4486C12.2533 10.4748 12.1865 10.4883 12.119 10.4883C12.0514 10.4883 11.9846 10.4748 11.9224 10.4486C11.8602 10.4223 11.8038 10.3839 11.7566 10.3356C11.7095 10.2873 11.6725 10.23 11.6478 10.1672C11.6231 10.1044 11.6112 10.0372 11.6129 9.96971V9.19856H10.5567C10.4224 9.19856 10.2937 9.14522 10.1987 9.05028C10.1038 8.95534 10.0505 8.82658 10.0505 8.69231C10.0505 8.55804 10.1038 8.42928 10.1987 8.33434C10.2937 8.2394 10.4224 8.18606 10.5567 8.18606H12.6221C12.6953 8.18691 12.7679 8.17323 12.8358 8.14582C12.9036 8.11841 12.9654 8.0778 13.0174 8.02635C13.0695 7.9749 13.1108 7.91364 13.139 7.84611C13.1672 7.77858 13.1817 7.70612 13.1817 7.63294C13.1817 7.55975 13.1672 7.48729 13.139 7.41976C13.1108 7.35223 13.0695 7.29097 13.0174 7.23952C12.9654 7.18807 12.9036 7.14747 12.8358 7.12005C12.7679 7.09264 12.6953 7.07896 12.6221 7.07981H11.6956C11.2667 7.08075 10.8544 6.91381 10.5469 6.61467C10.2395 6.31554 10.0613 5.90798 10.0505 5.47916C10.0397 5.05034 10.1971 4.63431 10.4891 4.32006C10.781 4.00581 11.1844 3.8183 11.6129 3.79762V3.01804C11.6112 2.95054 11.6231 2.88339 11.6478 2.82055C11.6725 2.75771 11.7095 2.70044 11.7566 2.65212C11.8038 2.6038 11.8602 2.5654 11.9224 2.53919C11.9846 2.51297 12.0514 2.49946 12.119 2.49946C12.1865 2.49946 12.2533 2.51297 12.3155 2.53919C12.3777 2.5654 12.4341 2.6038 12.4813 2.65212C12.5284 2.70044 12.5654 2.75771 12.5901 2.82055C12.6148 2.88339 12.6267 2.95054 12.6251 3.01804V3.78907H13.7783C13.9125 3.78907 14.0413 3.84241 14.1362 3.93735C14.2312 4.03229 14.2845 4.16106 14.2845 4.29532C14.2845 4.42959 14.2312 4.55836 14.1362 4.6533C14.0413 4.74824 13.9125 4.80157 13.7783 4.80157H11.6956C11.5278 4.80157 11.3669 4.86824 11.2482 4.9869C11.1295 5.10556 11.0629 5.2665 11.0629 5.43431C11.0629 5.60212 11.1295 5.76306 11.2482 5.88172C11.3669 6.00038 11.5278 6.06712 11.6956 6.06712Z" fill="black"/>
                <path d="M5.66494 13.7761H3.20577C3.15436 13.7761 3.10346 13.7862 3.05597 13.8059C3.00848 13.8256 2.96533 13.8544 2.92899 13.8908C2.89265 13.9271 2.86383 13.9703 2.84418 14.0178C2.82452 14.0653 2.81442 14.1162 2.81445 14.1676V22.5605C2.81446 22.6643 2.85569 22.7638 2.92908 22.8372C3.00246 22.9106 3.10199 22.9518 3.20577 22.9518H5.66494C5.89113 22.9518 6.10804 22.8619 6.26796 22.7019C6.42789 22.542 6.51773 22.3251 6.51773 22.0989V14.6289C6.51768 14.4027 6.42781 14.1858 6.2679 14.0259C6.10798 13.866 5.8911 13.7762 5.66494 13.7761Z" fill="black"/>
                <path d="M21.1228 14.7616C20.9928 14.5637 20.8155 14.4012 20.607 14.2889C20.3986 14.1765 20.1654 14.1179 19.9286 14.1182H18.9648C18.5513 14.1173 18.1469 14.2397 17.8032 14.4696C17.4596 14.6996 17.1922 15.0267 17.0352 15.4093C16.9421 15.6317 16.8122 15.8368 16.6512 16.0163C16.3775 16.4366 16.0071 16.7852 15.5711 17.0331C15.135 17.2809 14.646 17.4208 14.1448 17.441L11.2902 17.4412C11.1559 17.4412 11.0272 17.3878 10.9322 17.2929C10.8373 17.1979 10.784 17.0692 10.784 16.9349C10.784 16.8006 10.8373 16.6719 10.9322 16.5769C11.0272 16.482 11.1559 16.4287 11.2902 16.4287H14.1313C14.4963 16.4193 14.8509 16.3052 15.1529 16.0999V16.0828C15.1539 15.8252 15.1041 15.5699 15.0062 15.3316C14.9083 15.0933 14.7643 14.8767 14.5825 14.6941C14.4007 14.5116 14.1846 14.3668 13.9467 14.2679C13.7088 14.1691 13.4537 14.1182 13.1961 14.1182H11.1013C10.7186 14.1171 10.3394 14.1917 9.98557 14.3378C9.63178 14.4839 9.3104 14.6986 9.03995 14.9694L8.98647 15.0227C8.59013 15.4184 8.08119 15.6821 7.5293 15.7775V21.3693H15.1686C16.3012 21.37 17.4092 21.0383 18.3551 20.4153C19.301 19.7922 20.0433 18.9052 20.4898 17.8643L21.2424 16.1127C21.3362 15.8953 21.3744 15.6579 21.3535 15.422C21.3327 15.1861 21.2534 14.9592 21.1228 14.7616Z" fill="black"/>
              </svg>
            </span>
                        <span> Cash </span>
                    </label>
                </div>
            </div>
            <div class="border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Totals</h3>
                <div class="flex justify-between text-sm mb-4">
                    <span>TOTAL</span>
                    <span class="font-bold">2000 KWD</span>
                </div>
                <button class="w-full bg-[#21395D] text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<div id="page-soil" class="hidden bg-white p-6 max-w-[99%] md:max-w-[90%] mx-auto mt-[140px]">
    <button onclick="showPage('page-main')" class="mb-6 flex items-center gap-2 text-[#21395D] font-semibold hover:opacity-70 transition-opacity">
        <i class='fas fa-arrow-left text-black text-[36px]'></i>
    </button>

    <div class="flex flex-col lg:flex-row gap-6">
        <div class="flex-1 flex flex-col gap-4 max-w-full">
            <div class="border border-gray-200 rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-black mb-8">Soil Order</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#816EA2]"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden w-full md:w-1/2">
                        <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
              <span>
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                      <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                      <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                      <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
                    </svg>
              </span>
                            <span>+965</span>
                        </div>
                        <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Address Type</label>
                    <div class="flex flex-col md:flex-row gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="soil-address" value="house" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> House</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="soil-address" value="farm" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Farm</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="soil-address" value="construction" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Construction area</label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Region <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 outline-none">
                                <option value="" selected>Choose Region</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">District Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Street Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Building Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Additional Information</label>
                    <textarea placeholder="Enter Information" rows="4" class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none resize-none"></textarea>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Soil Type</h3>
                <div class="flex flex-col md:flex-row gap-8">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="soil-type" value="sand" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Sand</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="soil-type" value="agriculture" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Agriculture</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="soil-type" value="rocks" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Rocks</label>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Time Slot</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Date</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-3 cursor-pointer">
                            <input type="date" placeholder="Enter Date" class="flex-1 text-sm outline-none text-gray-400"/>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Time</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-3 cursor-pointer">
                            <input type="date" placeholder="Enter Time" class="flex-1 text-sm outline-none text-gray-400"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 w-full lg:w-[304px]">
            <div class=" border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4_3643)">
              <path d="M22.0785 4.32007H1.60134C0.893847 4.32007 0.320312 4.8936 0.320312 5.60109V18.3985C0.320312 19.106 0.893847 19.6796 1.60134 19.6796H22.0785C22.786 19.6796 23.3595 19.106 23.3595 18.3985V5.60109C23.3595 4.8936 22.786 4.32007 22.0785 4.32007Z" fill="#0873B9"/>
              <path d="M0.339844 8.40858C8.01916 8.40645 15.6989 8.40645 23.3791 8.40858V15.5368C15.6998 15.539 8.02001 15.539 0.339844 15.5368V8.40858ZM4.57171 8.96775C4.56146 10.9373 4.57811 12.9075 4.57171 14.8778C4.71567 14.9 4.86097 14.9124 5.00662 14.9149C6.2159 14.9149 7.42583 14.9149 8.63448 14.9149C8.80229 14.9149 8.96819 14.8912 9.13472 14.8771C9.13856 14.1726 9.13472 13.468 9.13792 12.7634C9.17169 12.4097 9.18388 12.0542 9.17443 11.6989C9.46074 11.9359 9.69837 12.2209 9.96226 12.4797C10.6028 13.1266 11.2343 13.787 11.8838 14.4307C12.0046 14.5729 12.1403 14.7018 12.2886 14.815C12.3765 14.8231 12.4649 14.826 12.5531 14.824C14.6483 14.815 16.7434 14.8336 18.8385 14.815C18.7797 14.7305 18.7104 14.6539 18.6322 14.587C18.0173 14.0822 17.4191 13.5577 16.81 13.0497C16.2931 12.6379 15.8005 12.1991 15.2945 11.7751C15.2478 11.7156 15.1325 11.6553 15.1869 11.5695C15.4149 11.3947 15.6628 11.2435 15.8838 11.0571C16.4263 10.6087 17.0213 10.2244 17.5671 9.7812C17.9082 9.54823 18.2358 9.29611 18.5483 9.02604C16.6076 9.00362 14.6662 9.02604 12.7254 9.01579C12.6241 9.01062 12.5226 9.01794 12.4231 9.03757C11.5591 9.67168 10.7315 10.3525 9.87195 10.9931C9.66569 11.1729 9.44359 11.3336 9.20838 11.4734C9.17379 10.6408 9.20838 9.80106 9.19044 8.96583C7.64809 8.96903 6.10958 8.96327 4.57171 8.96583V8.96775Z" fill="#0873B9"/>
              <path d="M11.8398 17.5788C11.963 17.4213 12.1259 17.2997 12.3119 17.2264C12.4978 17.1531 12.6999 17.1308 12.8973 17.1618C13.0532 17.1547 13.2077 17.193 13.3422 17.272C13.4767 17.351 13.5854 17.4674 13.6551 17.6069C13.0504 17.6127 12.4432 17.6249 11.8398 17.5788Z" fill="#0873B9"/>
              <path d="M2.88631 4.97592C3.17198 4.97592 3.45829 4.9708 3.74396 4.97913C3.59792 5.40123 3.38399 5.79578 3.22066 6.21147C4.95005 6.23261 6.67623 6.21147 8.40305 6.22236C8.55103 6.22411 8.699 6.21769 8.84628 6.20315C8.83565 6.00076 8.83886 5.79789 8.85589 5.59594C9.07238 5.59594 9.28888 5.59594 9.50601 5.59594C9.52138 5.78809 9.52394 5.98345 9.52138 6.17753C9.61554 6.17753 9.71354 6.17112 9.80641 6.166C9.82114 5.98025 9.83011 5.79514 9.84356 5.60939C10.0394 5.59674 10.2358 5.59674 10.4316 5.60939C10.4348 6.11155 10.4386 6.61372 10.4316 7.11524C8.16222 7.13253 5.89288 7.11524 3.62354 7.12292C3.41281 7.12292 3.20273 7.12292 2.992 7.11524C2.75052 6.82252 2.51161 6.52853 2.26758 6.23837C2.45973 5.80987 2.67366 5.3929 2.88631 4.97592Z" fill="#FDFEFD"/>
              <path d="M18.5689 4.93058C19.4016 4.93058 20.2381 4.91777 21.0727 4.93763C21.1137 5.0305 21.156 5.12337 21.1963 5.21625C20.6199 5.23995 20.0434 5.26172 19.4669 5.26493C19.4618 5.36421 19.4567 5.46477 19.4522 5.56469C20.1376 5.5871 20.8248 5.53971 21.5089 5.59351C21.6516 5.79674 21.7728 6.01417 21.8708 6.24235C21.7318 6.42297 21.5717 6.58759 21.4167 6.75476C21.3526 6.84827 21.2322 6.8297 21.1342 6.83418C20.1734 6.83418 19.2127 6.83418 18.2519 6.83418C18.0072 6.84443 17.8259 6.65548 17.6159 6.56325C17.5947 6.94755 17.6095 7.33506 17.605 7.72065C16.2727 7.7309 14.9392 7.73602 13.6069 7.72065C13.6069 6.99623 13.6037 6.27117 13.6069 5.54675C14.5561 5.54675 15.506 5.54995 16.4552 5.54675C16.4604 5.80296 16.4591 6.06237 16.4552 6.32113C15.8295 6.33458 15.2024 6.32113 14.576 6.32818C14.5504 6.58749 14.5478 6.84856 14.5683 7.10832C15.303 7.12882 16.0383 7.11857 16.7723 7.11281C16.7845 6.59207 16.7723 6.07069 16.7755 5.54995C17.2239 5.54995 17.6722 5.54995 18.1161 5.54995C18.3223 5.76196 18.4882 6.00664 18.6874 6.22441C18.7412 6.30832 18.8514 6.28078 18.9366 6.28847C19.6098 6.28526 20.2817 6.28847 20.9574 6.28847C20.9151 6.17189 20.869 6.05788 20.8197 5.94387C20.2304 5.94387 19.6412 5.94387 19.0519 5.94387C18.8495 5.97269 18.7713 5.75172 18.6676 5.62682C18.4966 5.42954 18.5709 5.16309 18.5689 4.93058Z" fill="#FDFEFD"/>
              <path d="M4.10534 5.00994C4.31132 4.9853 4.51925 4.98144 4.726 4.99841C4.726 5.09321 4.72216 5.19056 4.71767 5.28344C4.51079 5.28728 4.3039 5.28728 4.09766 5.28344C4.09766 5.1912 4.10022 5.10089 4.10534 5.00994Z" fill="#FDFEFD"/>
              <path d="M5.13443 5.00284C5.33736 4.98293 5.5417 4.98186 5.74483 4.99964C5.74483 5.09443 5.74483 5.19179 5.74483 5.28402C5.54115 5.28402 5.33619 5.28402 5.1325 5.28402C5.1293 5.18923 5.13123 5.09635 5.13443 5.00284Z" fill="#FDFEFD"/>
              <path d="M9.79916 5.00181C10.0015 4.98214 10.2053 4.98214 10.4076 5.00181C10.4076 5.09469 10.4076 5.18756 10.4076 5.2798C10.204 5.28556 9.99965 5.28556 9.79532 5.2798C9.79404 5.18948 9.79596 5.09853 9.79916 5.00181Z" fill="#FDFEFD"/>
              <path d="M11.4062 5.8927C11.8149 5.87285 12.2235 5.88566 12.6322 5.88566C12.6668 6.19951 12.6565 6.51592 12.6616 6.83105C12.2447 6.83554 11.829 6.84194 11.4107 6.82721C11.4088 6.51272 11.4101 6.20399 11.4062 5.8927Z" fill="#FDFEFD"/>
              <path d="M18.1153 7.39233C18.3075 7.39233 18.506 7.39233 18.7014 7.40258C18.7014 7.4961 18.7014 7.58897 18.7014 7.68249C18.4938 7.69017 18.2863 7.69209 18.0801 7.68249C18.091 7.58513 18.1031 7.48905 18.1153 7.39233Z" fill="#FDFEFD"/>
              <path d="M19.0451 7.39938C19.2495 7.38868 19.4543 7.38868 19.6587 7.39938C19.6587 7.4961 19.6587 7.59154 19.6587 7.68953C19.4557 7.68953 19.2527 7.68953 19.0503 7.68505C19.0451 7.58897 19.0445 7.49418 19.0451 7.39938Z" fill="#FDFEFD"/>
              <path d="M0.339844 8.23706C8.01916 8.2392 15.6989 8.2392 23.3791 8.23706V8.40616C15.6998 8.40231 8.02001 8.40231 0.339844 8.40616V8.23706Z" fill="#FDFEFD"/>
              <path d="M0.339844 15.5349C8.01916 15.5388 15.6989 15.5388 23.3791 15.5349V15.7053C15.6998 15.7032 8.02001 15.7032 0.339844 15.7053V15.5349Z" fill="#FDFEFD"/>
              <path d="M19.7704 16.2136C20.1771 16.2136 20.5839 16.2136 20.9912 16.2136C20.9852 16.3896 20.9884 16.5658 21.0008 16.7414C21.2615 16.7369 21.5229 16.7414 21.7836 16.7414C21.7868 16.8695 21.7835 16.9976 21.7746 17.1257C21.5056 17.1257 21.2372 17.1257 20.9694 17.1308C20.9694 17.5593 20.9662 17.9885 20.9694 18.417C21.227 18.409 21.4848 18.4139 21.7419 18.4317C21.7398 18.5829 21.7398 18.7347 21.7419 18.8871C21.3852 18.914 21.0271 18.8935 20.6703 18.9012C20.4207 18.9288 20.1688 18.8749 19.9523 18.7475C19.8962 18.7037 19.8508 18.6477 19.8195 18.5838C19.7882 18.5199 19.7719 18.4497 19.7717 18.3786C19.7499 17.977 19.7909 17.5721 19.7474 17.1712C19.5482 17.1763 19.3489 17.1782 19.1504 17.1712C19.1504 17.0277 19.1515 16.8847 19.1536 16.742C19.3541 16.7369 19.5552 16.7388 19.7563 16.7363C19.7659 16.5633 19.7659 16.3885 19.7704 16.2136Z" fill="#FDFEFD"/>
              <path d="M3.44684 17.0423C3.80672 16.8412 4.20569 16.7199 4.61661 16.6868C5.02754 16.6536 5.44079 16.7094 5.82826 16.8502C6.12866 16.9744 6.45917 17.2018 6.47454 17.5509C6.48863 17.98 6.47454 18.4098 6.48222 18.8396C6.08254 18.8652 5.68158 18.8511 5.28126 18.8473C5.27101 18.4681 5.28831 18.0883 5.2755 17.7097C5.27461 17.6242 5.25025 17.5406 5.20507 17.4679C5.15989 17.3953 5.09563 17.3365 5.0193 17.2979C4.69599 17.1566 4.33347 17.1328 3.99447 17.2306C3.7799 17.2908 3.52178 17.4112 3.48655 17.6508C3.46861 18.0556 3.48655 18.4617 3.48014 18.8678C3.08367 18.8716 2.68847 18.8678 2.29199 18.8678C2.26637 18.1856 2.28175 17.5009 2.28367 16.8181C2.66285 16.8181 3.04139 16.8124 3.41993 16.8181C3.4289 16.8943 3.43851 16.968 3.44684 17.0423Z" fill="#FDFEFD"/>
              <path d="M10.7947 17.2341C11.234 16.9016 11.7659 16.7142 12.3166 16.698C12.9726 16.6223 13.6372 16.7103 14.251 16.9542C14.451 17.0355 14.6228 17.1737 14.745 17.3516C14.8673 17.5295 14.9347 17.7394 14.9389 17.9553C13.8974 17.9822 12.854 17.9355 11.8138 17.9784C11.8274 18.0552 11.8573 18.1282 11.9015 18.1925C11.9457 18.2568 12.0032 18.3109 12.07 18.3511C12.3475 18.4727 12.6527 18.5169 12.9533 18.4792C13.2428 18.4792 13.4657 18.2333 13.7597 18.257C14.1312 18.2621 14.5033 18.2493 14.8748 18.2698C14.5269 18.6373 14.0568 18.8651 13.5528 18.9103C12.9404 19.0026 12.3167 18.9878 11.7094 18.8668C11.5038 18.8396 11.3057 18.7719 11.1265 18.6674C10.9474 18.5629 10.7909 18.4238 10.666 18.2583C10.5633 18.0997 10.5199 17.91 10.5433 17.7225C10.5667 17.5351 10.6555 17.3619 10.7941 17.2335M11.8388 17.5787C12.4421 17.6242 13.0493 17.6126 13.654 17.6069C13.5843 17.4673 13.4757 17.3509 13.3412 17.2719C13.2067 17.1929 13.0521 17.1546 12.8963 17.1617C12.6989 17.1311 12.497 17.1537 12.3113 17.2272C12.1256 17.3008 11.9629 17.4225 11.8401 17.58L11.8388 17.5787Z" fill="#FDFEFD"/>
              <path d="M4.57155 8.9646C6.10878 8.9646 7.64601 8.9678 9.18324 8.9646C9.20245 9.79727 9.16659 10.637 9.20117 11.4722C9.43638 11.3324 9.65848 11.1716 9.86475 10.9918C10.7243 10.3513 11.5519 9.67045 12.4159 9.03634C12.5154 9.0167 12.6169 9.00938 12.7182 9.01456C14.659 9.02289 16.601 9.00239 18.5411 9.02481C18.2299 9.2932 17.9038 9.54383 17.5643 9.77549C17.0186 10.22 16.4236 10.6024 15.8811 11.0514C15.6601 11.2365 15.4122 11.3877 15.1842 11.5638C15.1298 11.6496 15.2483 11.7098 15.2918 11.7694C15.7978 12.1928 16.2904 12.6322 16.8073 13.044C17.4164 13.5564 18.0146 14.0791 18.6295 14.5813C18.7077 14.6482 18.777 14.7248 18.8358 14.8093C16.7406 14.8279 14.6455 14.8093 12.5504 14.8182C12.4621 14.8203 12.3738 14.8173 12.2859 14.8093C12.1376 14.6961 12.0018 14.5672 11.8811 14.425C11.2348 13.7845 10.6058 13.1209 9.95954 12.474C9.69565 12.2178 9.45802 11.9302 9.17171 11.6932C9.18116 12.0484 9.16897 12.4039 9.1352 12.7577C9.1288 13.4623 9.1352 14.1668 9.132 14.8714C8.96547 14.8855 8.79957 14.9086 8.63176 14.9092C7.42311 14.9092 6.21318 14.9092 5.00389 14.9092C4.85825 14.9067 4.71295 14.8943 4.56899 14.8721C4.57796 12.9044 4.56194 10.9342 4.57155 8.9646Z" fill="#FAE80C"/>
              </g>
              <defs>
              <clipPath id="clip0_4_3643">
              <rect width="23.6797" height="16" fill="white" transform="translate(0 4)"/>
              </clipPath>
              </defs>
              </svg>
              </span>
                        <span> KNET </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_3668)">
                      <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/>
                      <path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/>
                      <path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/>
                      <path d="M19.7322 15.1538H19.6989V14.9561H19.7482L19.8122 15.0949L19.8666 14.9561H19.9146V15.1525H19.8813V15.0041L19.8288 15.1321H19.7898L19.7322 15.0041V15.1538ZM19.5882 15.1532H19.5594V14.99H19.4922V14.9561H19.6605V14.99H19.5882V15.1532Z" fill="#F69E1E"/>
                      <path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/>
                    </g>
                  <defs>
                  <clipPath id="clip0_4_3668">
                  <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                  </clipPath>
                  </defs>
                </svg>
              </span>
                        <span> Master Card </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_3684)">
                <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/>
                <path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_4_3684">
                <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                </clipPath>
                </defs>
              </svg>
            </span>
                        <span>
               Visa
             </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.067 8.72078C12.067 9.40758 11.6477 9.8029 10.909 9.8029H9.93871V7.63866H10.913C11.6477 7.63866 12.067 8.02998 12.067 8.72078ZM13.9637 11.2204C13.9637 11.5519 14.2512 11.7675 14.7024 11.7675C15.2774 11.7675 15.7087 11.4041 15.7087 10.893V10.5855L14.7703 10.6454C14.2392 10.6814 13.9637 10.877 13.9637 11.2204ZM23 3.15446V17.21C23 18.2682 22.1415 19.1267 21.0833 19.1267H1.91667C0.858507 19.1267 0 18.2682 0 17.21V3.15446C0 2.0963 0.858507 1.23779 1.91667 1.23779H21.0833C22.1415 1.23779 23 2.0963 23 3.15446ZM5.10313 7.87425C5.43854 7.9022 5.77396 7.70654 5.98559 7.45897C6.19323 7.20342 6.32899 6.86002 6.29306 6.51262C5.99757 6.5246 5.63021 6.70828 5.41858 6.96383C5.22691 7.18345 5.06319 7.53883 5.10313 7.87425ZM7.52292 10.8491C7.51493 10.8411 6.74028 10.5456 6.73229 9.65116C6.72431 8.90446 7.34323 8.54508 7.37118 8.52512C7.01979 8.00602 6.47674 7.95012 6.28906 7.93814C5.80191 7.91019 5.38663 8.21366 5.15504 8.21366C4.91944 8.21366 4.56806 7.95012 4.18472 7.95811C3.68559 7.96609 3.2184 8.2496 2.96684 8.70081C2.44375 9.60324 2.83108 10.9369 3.33819 11.6716C3.58576 12.035 3.88524 12.4343 4.27656 12.4183C4.64792 12.4024 4.79566 12.1788 5.24288 12.1788C5.6941 12.1788 5.82188 12.4183 6.21319 12.4144C6.62049 12.4064 6.87205 12.051 7.12361 11.6876C7.39913 11.2723 7.51493 10.873 7.52292 10.8491ZM12.9295 8.71679C12.9295 7.65463 12.1908 6.9279 11.1366 6.9279H9.09219V12.3744H9.93871V10.5137H11.1087C12.1788 10.5137 12.9295 9.77894 12.9295 8.71679ZM16.5233 9.66314C16.5233 8.87651 15.8924 8.36939 14.926 8.36939C14.0276 8.36939 13.3648 8.88449 13.3408 9.58727H14.1035C14.1674 9.25186 14.4788 9.03224 14.9021 9.03224C15.4212 9.03224 15.7087 9.27182 15.7087 9.71904V10.0185L14.6545 10.0824C13.6722 10.1423 13.1411 10.5456 13.1411 11.2444C13.1411 11.9512 13.6882 12.4183 14.4748 12.4183C15.0059 12.4183 15.497 12.1508 15.7207 11.7236H15.7366V12.3784H16.5193V9.66314H16.5233ZM20.6042 8.4213H19.7457L18.7514 11.6397H18.7354L17.7411 8.4213H16.8507L18.2842 12.3864L18.2083 12.626C18.0806 13.0333 17.8689 13.193 17.4936 13.193C17.4257 13.193 17.2979 13.185 17.246 13.181V13.8359C17.2939 13.8519 17.5056 13.8558 17.5694 13.8558C18.396 13.8558 18.7833 13.5404 19.1227 12.5861L20.6042 8.4213Z" fill="black"/>
              </svg>
            </span>
                        <span> Apple Pay</span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4_3702)">
                  <g clip-path="url(#clip1_4_3702)">
                  <path d="M0.0349266 12.9237C0.208927 16.7667 1.20393 19.8067 3.49993 21.4647C5.78393 23.1127 9.49593 23.6357 13.4089 23.4707C17.2069 23.3107 20.2919 22.3027 21.9439 20.0027C23.5929 17.7057 24.1189 14.3157 23.9779 10.2017C23.8449 6.37073 22.8389 3.28773 20.5699 1.60373C18.3009 -0.080265 14.8899 -0.665265 10.6039 -0.460265C8.65793 -0.367265 6.90193 -0.114265 5.47693 0.456735C4.00693 1.04674 2.87093 1.87873 2.03993 3.03673C0.368927 5.36273 -0.148073 8.87573 0.0349266 12.9237ZM21.3149 9.04873L17.8889 16.0247H16.7079L20.1339 9.04873H21.3149ZM16.6279 9.04974L17.9889 11.8387L17.3969 13.0427L15.4479 9.04974H16.6279ZM12.5209 8.87173C13.9099 8.87173 15.2599 10.0377 15.3039 11.4917V14.2737H14.2599V11.4917C14.2389 10.7077 13.4069 9.92573 12.5209 9.92573C11.5249 9.92573 10.7919 10.7767 10.7919 11.5727C10.7919 12.6997 11.5859 13.2147 12.5209 13.2147H12.8889V14.2737H12.5209C10.9829 14.2727 9.73593 13.2877 9.73593 11.5727C9.73593 10.1737 10.9829 8.87173 12.5209 8.87173ZM3.84893 10.0277C3.84893 9.38873 4.36593 8.87173 5.00393 8.87173H6.60293C8.09293 8.87173 9.32793 10.0807 9.32793 11.5717C9.32793 13.0627 8.17493 14.2727 6.60193 14.2727H6.10693V13.2087H6.60193C7.54793 13.2087 8.23793 12.4757 8.23793 11.5717C8.23793 10.6677 7.50593 9.93474 6.60193 9.93474H5.00293C4.97514 9.9348 4.9481 9.94378 4.92579 9.96033C4.90347 9.97689 4.88705 10.0002 4.87893 10.0267V15.8337H3.84893V10.0277Z" fill="#2F55CC"/>
                  </g>
                  </g>
                  <defs>
                  <clipPath id="clip0_4_3702">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  <clipPath id="clip1_4_3702">
                  <rect width="24" height="24" fill="white" transform="translate(0 -0.5)"/>
                  </clipPath>
                  </defs>
                  </svg>
            </span>
                        <span> Samsung Pay </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="soil-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1675 0.467285C10.9755 0.467226 9.81032 0.820626 8.81922 1.4828C7.82812 2.14497 7.05564 3.08616 6.59946 4.18737C6.14328 5.28857 6.02389 6.50032 6.25639 7.66937C6.48889 8.83843 7.06284 9.91228 7.90566 10.7551C8.74847 11.598 9.8223 12.172 10.9913 12.4046C12.1604 12.6371 13.3721 12.5178 14.4734 12.0617C15.5746 11.6055 16.5158 10.8331 17.1781 9.84204C17.8403 8.85097 18.1937 7.68579 18.1937 6.49384C18.1937 4.89555 17.5588 3.36272 16.4287 2.23253C15.2986 1.10234 13.7658 0.467365 12.1675 0.467285ZM11.6956 6.06712H12.6221C13.0374 6.06673 13.4357 6.23131 13.7296 6.52465C14.0235 6.81799 14.1888 7.21606 14.1892 7.63129C14.1896 8.04651 14.025 8.44489 13.7317 8.73878C13.4384 9.03266 13.0403 9.19798 12.6251 9.19837V9.96971C12.6267 10.0372 12.6148 10.1044 12.5901 10.1672C12.5654 10.23 12.5284 10.2873 12.4813 10.3356C12.4341 10.3839 12.3777 10.4223 12.3155 10.4486C12.2533 10.4748 12.1865 10.4883 12.119 10.4883C12.0514 10.4883 11.9846 10.4748 11.9224 10.4486C11.8602 10.4223 11.8038 10.3839 11.7566 10.3356C11.7095 10.2873 11.6725 10.23 11.6478 10.1672C11.6231 10.1044 11.6112 10.0372 11.6129 9.96971V9.19856H10.5567C10.4224 9.19856 10.2937 9.14522 10.1987 9.05028C10.1038 8.95534 10.0505 8.82658 10.0505 8.69231C10.0505 8.55804 10.1038 8.42928 10.1987 8.33434C10.2937 8.2394 10.4224 8.18606 10.5567 8.18606H12.6221C12.6953 8.18691 12.7679 8.17323 12.8358 8.14582C12.9036 8.11841 12.9654 8.0778 13.0174 8.02635C13.0695 7.9749 13.1108 7.91364 13.139 7.84611C13.1672 7.77858 13.1817 7.70612 13.1817 7.63294C13.1817 7.55975 13.1672 7.48729 13.139 7.41976C13.1108 7.35223 13.0695 7.29097 13.0174 7.23952C12.9654 7.18807 12.9036 7.14747 12.8358 7.12005C12.7679 7.09264 12.6953 7.07896 12.6221 7.07981H11.6956C11.2667 7.08075 10.8544 6.91381 10.5469 6.61467C10.2395 6.31554 10.0613 5.90798 10.0505 5.47916C10.0397 5.05034 10.1971 4.63431 10.4891 4.32006C10.781 4.00581 11.1844 3.8183 11.6129 3.79762V3.01804C11.6112 2.95054 11.6231 2.88339 11.6478 2.82055C11.6725 2.75771 11.7095 2.70044 11.7566 2.65212C11.8038 2.6038 11.8602 2.5654 11.9224 2.53919C11.9846 2.51297 12.0514 2.49946 12.119 2.49946C12.1865 2.49946 12.2533 2.51297 12.3155 2.53919C12.3777 2.5654 12.4341 2.6038 12.4813 2.65212C12.5284 2.70044 12.5654 2.75771 12.5901 2.82055C12.6148 2.88339 12.6267 2.95054 12.6251 3.01804V3.78907H13.7783C13.9125 3.78907 14.0413 3.84241 14.1362 3.93735C14.2312 4.03229 14.2845 4.16106 14.2845 4.29532C14.2845 4.42959 14.2312 4.55836 14.1362 4.6533C14.0413 4.74824 13.9125 4.80157 13.7783 4.80157H11.6956C11.5278 4.80157 11.3669 4.86824 11.2482 4.9869C11.1295 5.10556 11.0629 5.2665 11.0629 5.43431C11.0629 5.60212 11.1295 5.76306 11.2482 5.88172C11.3669 6.00038 11.5278 6.06712 11.6956 6.06712Z" fill="black"/>
                <path d="M5.66494 13.7761H3.20577C3.15436 13.7761 3.10346 13.7862 3.05597 13.8059C3.00848 13.8256 2.96533 13.8544 2.92899 13.8908C2.89265 13.9271 2.86383 13.9703 2.84418 14.0178C2.82452 14.0653 2.81442 14.1162 2.81445 14.1676V22.5605C2.81446 22.6643 2.85569 22.7638 2.92908 22.8372C3.00246 22.9106 3.10199 22.9518 3.20577 22.9518H5.66494C5.89113 22.9518 6.10804 22.8619 6.26796 22.7019C6.42789 22.542 6.51773 22.3251 6.51773 22.0989V14.6289C6.51768 14.4027 6.42781 14.1858 6.2679 14.0259C6.10798 13.866 5.8911 13.7762 5.66494 13.7761Z" fill="black"/>
                <path d="M21.1228 14.7616C20.9928 14.5637 20.8155 14.4012 20.607 14.2889C20.3986 14.1765 20.1654 14.1179 19.9286 14.1182H18.9648C18.5513 14.1173 18.1469 14.2397 17.8032 14.4696C17.4596 14.6996 17.1922 15.0267 17.0352 15.4093C16.9421 15.6317 16.8122 15.8368 16.6512 16.0163C16.3775 16.4366 16.0071 16.7852 15.5711 17.0331C15.135 17.2809 14.646 17.4208 14.1448 17.441L11.2902 17.4412C11.1559 17.4412 11.0272 17.3878 10.9322 17.2929C10.8373 17.1979 10.784 17.0692 10.784 16.9349C10.784 16.8006 10.8373 16.6719 10.9322 16.5769C11.0272 16.482 11.1559 16.4287 11.2902 16.4287H14.1313C14.4963 16.4193 14.8509 16.3052 15.1529 16.0999V16.0828C15.1539 15.8252 15.1041 15.5699 15.0062 15.3316C14.9083 15.0933 14.7643 14.8767 14.5825 14.6941C14.4007 14.5116 14.1846 14.3668 13.9467 14.2679C13.7088 14.1691 13.4537 14.1182 13.1961 14.1182H11.1013C10.7186 14.1171 10.3394 14.1917 9.98557 14.3378C9.63178 14.4839 9.3104 14.6986 9.03995 14.9694L8.98647 15.0227C8.59013 15.4184 8.08119 15.6821 7.5293 15.7775V21.3693H15.1686C16.3012 21.37 17.4092 21.0383 18.3551 20.4153C19.301 19.7922 20.0433 18.9052 20.4898 17.8643L21.2424 16.1127C21.3362 15.8953 21.3744 15.6579 21.3535 15.422C21.3327 15.1861 21.2534 14.9592 21.1228 14.7616Z" fill="black"/>
              </svg>
            </span>
                        <span> Cash </span>
                    </label>
                </div>
            </div>
            <div class="border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Totals</h3>
                <div class="flex justify-between text-sm mb-4">
                    <span>TOTAL</span>
                    <span class="font-bold">2000 KWD</span>
                </div>
                <button class="w-full bg-[#21395D] text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<div id="page-bricks" class="hidden bg-white p-6 max-w-[99%] md:max-w-[90%] mx-auto mt-[140px]">
    <button onclick="showPage('page-main')" class="mb-6 flex items-center gap-2 text-[#21395D] font-semibold hover:opacity-70 transition-opacity">
        <i class='fas fa-arrow-left text-black text-[36px]'></i>
    </button>
    <div class="flex flex-col lg:flex-row gap-6">
        <div class="flex-1 flex flex-col gap-4 max-w-full">
            <div class="border border-gray-200 rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-black mb-8">Bricks Order</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden w-full md:w-1/2">
                        <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
              <span>
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                      <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                      <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                      <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
                    </svg>
              </span>
                            <span>+965</span>
                        </div>
                        <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Address Type</label>
                    <div class="flex flex-col md:flex-row gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="bricks-address" value="house" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> House</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="bricks-address" value="farm" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Farm</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="bricks-address" value="construction" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Construction area</label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Region <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 outline-none">
                                <option value="" selected>Choose Region</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">District Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Street Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Building Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Brick Type</h3>
                <div class="flex flex-col md:flex-row gap-8 mb-6">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-type" value="isolated" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Isolated</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-type" value="white" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> White</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-type" value="regular" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Regular</label>
                </div>
                <h3 class="text-base font-bold text-black mb-4">Quantity</h3>
                <div class="flex flex-col md:flex-row gap-8">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-qty" value="1000" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 1000</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-qty" value="2000" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 2000</label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                        <input type="radio" name="brick-qty" value="5000" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 5000</label>
                </div>
            </div>

            <div class="border border-gray-200 rounded-2xl p-8">
                <h3 class="text-base font-bold text-black mb-4">Time Slot</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Date</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-3 cursor-pointer">
                            <input type="date" placeholder="Enter Date" class="flex-1 text-sm outline-none text-gray-400"/>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Time</label>
                        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-3 cursor-pointer">
                            <input type="date" placeholder="Enter Time" class="flex-1 text-sm outline-none text-gray-400"/>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Note</label>
                    <textarea placeholder="Enter Notes" rows="4" class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none resize-none"></textarea>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 w-full lg:w-[304px]">
            <div class=" border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4_3643)">
              <path d="M22.0785 4.32007H1.60134C0.893847 4.32007 0.320312 4.8936 0.320312 5.60109V18.3985C0.320312 19.106 0.893847 19.6796 1.60134 19.6796H22.0785C22.786 19.6796 23.3595 19.106 23.3595 18.3985V5.60109C23.3595 4.8936 22.786 4.32007 22.0785 4.32007Z" fill="#0873B9"/>
              <path d="M0.339844 8.40858C8.01916 8.40645 15.6989 8.40645 23.3791 8.40858V15.5368C15.6998 15.539 8.02001 15.539 0.339844 15.5368V8.40858ZM4.57171 8.96775C4.56146 10.9373 4.57811 12.9075 4.57171 14.8778C4.71567 14.9 4.86097 14.9124 5.00662 14.9149C6.2159 14.9149 7.42583 14.9149 8.63448 14.9149C8.80229 14.9149 8.96819 14.8912 9.13472 14.8771C9.13856 14.1726 9.13472 13.468 9.13792 12.7634C9.17169 12.4097 9.18388 12.0542 9.17443 11.6989C9.46074 11.9359 9.69837 12.2209 9.96226 12.4797C10.6028 13.1266 11.2343 13.787 11.8838 14.4307C12.0046 14.5729 12.1403 14.7018 12.2886 14.815C12.3765 14.8231 12.4649 14.826 12.5531 14.824C14.6483 14.815 16.7434 14.8336 18.8385 14.815C18.7797 14.7305 18.7104 14.6539 18.6322 14.587C18.0173 14.0822 17.4191 13.5577 16.81 13.0497C16.2931 12.6379 15.8005 12.1991 15.2945 11.7751C15.2478 11.7156 15.1325 11.6553 15.1869 11.5695C15.4149 11.3947 15.6628 11.2435 15.8838 11.0571C16.4263 10.6087 17.0213 10.2244 17.5671 9.7812C17.9082 9.54823 18.2358 9.29611 18.5483 9.02604C16.6076 9.00362 14.6662 9.02604 12.7254 9.01579C12.6241 9.01062 12.5226 9.01794 12.4231 9.03757C11.5591 9.67168 10.7315 10.3525 9.87195 10.9931C9.66569 11.1729 9.44359 11.3336 9.20838 11.4734C9.17379 10.6408 9.20838 9.80106 9.19044 8.96583C7.64809 8.96903 6.10958 8.96327 4.57171 8.96583V8.96775Z" fill="#0873B9"/>
              <path d="M11.8398 17.5788C11.963 17.4213 12.1259 17.2997 12.3119 17.2264C12.4978 17.1531 12.6999 17.1308 12.8973 17.1618C13.0532 17.1547 13.2077 17.193 13.3422 17.272C13.4767 17.351 13.5854 17.4674 13.6551 17.6069C13.0504 17.6127 12.4432 17.6249 11.8398 17.5788Z" fill="#0873B9"/>
              <path d="M2.88631 4.97592C3.17198 4.97592 3.45829 4.9708 3.74396 4.97913C3.59792 5.40123 3.38399 5.79578 3.22066 6.21147C4.95005 6.23261 6.67623 6.21147 8.40305 6.22236C8.55103 6.22411 8.699 6.21769 8.84628 6.20315C8.83565 6.00076 8.83886 5.79789 8.85589 5.59594C9.07238 5.59594 9.28888 5.59594 9.50601 5.59594C9.52138 5.78809 9.52394 5.98345 9.52138 6.17753C9.61554 6.17753 9.71354 6.17112 9.80641 6.166C9.82114 5.98025 9.83011 5.79514 9.84356 5.60939C10.0394 5.59674 10.2358 5.59674 10.4316 5.60939C10.4348 6.11155 10.4386 6.61372 10.4316 7.11524C8.16222 7.13253 5.89288 7.11524 3.62354 7.12292C3.41281 7.12292 3.20273 7.12292 2.992 7.11524C2.75052 6.82252 2.51161 6.52853 2.26758 6.23837C2.45973 5.80987 2.67366 5.3929 2.88631 4.97592Z" fill="#FDFEFD"/>
              <path d="M18.5689 4.93058C19.4016 4.93058 20.2381 4.91777 21.0727 4.93763C21.1137 5.0305 21.156 5.12337 21.1963 5.21625C20.6199 5.23995 20.0434 5.26172 19.4669 5.26493C19.4618 5.36421 19.4567 5.46477 19.4522 5.56469C20.1376 5.5871 20.8248 5.53971 21.5089 5.59351C21.6516 5.79674 21.7728 6.01417 21.8708 6.24235C21.7318 6.42297 21.5717 6.58759 21.4167 6.75476C21.3526 6.84827 21.2322 6.8297 21.1342 6.83418C20.1734 6.83418 19.2127 6.83418 18.2519 6.83418C18.0072 6.84443 17.8259 6.65548 17.6159 6.56325C17.5947 6.94755 17.6095 7.33506 17.605 7.72065C16.2727 7.7309 14.9392 7.73602 13.6069 7.72065C13.6069 6.99623 13.6037 6.27117 13.6069 5.54675C14.5561 5.54675 15.506 5.54995 16.4552 5.54675C16.4604 5.80296 16.4591 6.06237 16.4552 6.32113C15.8295 6.33458 15.2024 6.32113 14.576 6.32818C14.5504 6.58749 14.5478 6.84856 14.5683 7.10832C15.303 7.12882 16.0383 7.11857 16.7723 7.11281C16.7845 6.59207 16.7723 6.07069 16.7755 5.54995C17.2239 5.54995 17.6722 5.54995 18.1161 5.54995C18.3223 5.76196 18.4882 6.00664 18.6874 6.22441C18.7412 6.30832 18.8514 6.28078 18.9366 6.28847C19.6098 6.28526 20.2817 6.28847 20.9574 6.28847C20.9151 6.17189 20.869 6.05788 20.8197 5.94387C20.2304 5.94387 19.6412 5.94387 19.0519 5.94387C18.8495 5.97269 18.7713 5.75172 18.6676 5.62682C18.4966 5.42954 18.5709 5.16309 18.5689 4.93058Z" fill="#FDFEFD"/>
              <path d="M4.10534 5.00994C4.31132 4.9853 4.51925 4.98144 4.726 4.99841C4.726 5.09321 4.72216 5.19056 4.71767 5.28344C4.51079 5.28728 4.3039 5.28728 4.09766 5.28344C4.09766 5.1912 4.10022 5.10089 4.10534 5.00994Z" fill="#FDFEFD"/>
              <path d="M5.13443 5.00284C5.33736 4.98293 5.5417 4.98186 5.74483 4.99964C5.74483 5.09443 5.74483 5.19179 5.74483 5.28402C5.54115 5.28402 5.33619 5.28402 5.1325 5.28402C5.1293 5.18923 5.13123 5.09635 5.13443 5.00284Z" fill="#FDFEFD"/>
              <path d="M9.79916 5.00181C10.0015 4.98214 10.2053 4.98214 10.4076 5.00181C10.4076 5.09469 10.4076 5.18756 10.4076 5.2798C10.204 5.28556 9.99965 5.28556 9.79532 5.2798C9.79404 5.18948 9.79596 5.09853 9.79916 5.00181Z" fill="#FDFEFD"/>
              <path d="M11.4062 5.8927C11.8149 5.87285 12.2235 5.88566 12.6322 5.88566C12.6668 6.19951 12.6565 6.51592 12.6616 6.83105C12.2447 6.83554 11.829 6.84194 11.4107 6.82721C11.4088 6.51272 11.4101 6.20399 11.4062 5.8927Z" fill="#FDFEFD"/>
              <path d="M18.1153 7.39233C18.3075 7.39233 18.506 7.39233 18.7014 7.40258C18.7014 7.4961 18.7014 7.58897 18.7014 7.68249C18.4938 7.69017 18.2863 7.69209 18.0801 7.68249C18.091 7.58513 18.1031 7.48905 18.1153 7.39233Z" fill="#FDFEFD"/>
              <path d="M19.0451 7.39938C19.2495 7.38868 19.4543 7.38868 19.6587 7.39938C19.6587 7.4961 19.6587 7.59154 19.6587 7.68953C19.4557 7.68953 19.2527 7.68953 19.0503 7.68505C19.0451 7.58897 19.0445 7.49418 19.0451 7.39938Z" fill="#FDFEFD"/>
              <path d="M0.339844 8.23706C8.01916 8.2392 15.6989 8.2392 23.3791 8.23706V8.40616C15.6998 8.40231 8.02001 8.40231 0.339844 8.40616V8.23706Z" fill="#FDFEFD"/>
              <path d="M0.339844 15.5349C8.01916 15.5388 15.6989 15.5388 23.3791 15.5349V15.7053C15.6998 15.7032 8.02001 15.7032 0.339844 15.7053V15.5349Z" fill="#FDFEFD"/>
              <path d="M19.7704 16.2136C20.1771 16.2136 20.5839 16.2136 20.9912 16.2136C20.9852 16.3896 20.9884 16.5658 21.0008 16.7414C21.2615 16.7369 21.5229 16.7414 21.7836 16.7414C21.7868 16.8695 21.7835 16.9976 21.7746 17.1257C21.5056 17.1257 21.2372 17.1257 20.9694 17.1308C20.9694 17.5593 20.9662 17.9885 20.9694 18.417C21.227 18.409 21.4848 18.4139 21.7419 18.4317C21.7398 18.5829 21.7398 18.7347 21.7419 18.8871C21.3852 18.914 21.0271 18.8935 20.6703 18.9012C20.4207 18.9288 20.1688 18.8749 19.9523 18.7475C19.8962 18.7037 19.8508 18.6477 19.8195 18.5838C19.7882 18.5199 19.7719 18.4497 19.7717 18.3786C19.7499 17.977 19.7909 17.5721 19.7474 17.1712C19.5482 17.1763 19.3489 17.1782 19.1504 17.1712C19.1504 17.0277 19.1515 16.8847 19.1536 16.742C19.3541 16.7369 19.5552 16.7388 19.7563 16.7363C19.7659 16.5633 19.7659 16.3885 19.7704 16.2136Z" fill="#FDFEFD"/>
              <path d="M3.44684 17.0423C3.80672 16.8412 4.20569 16.7199 4.61661 16.6868C5.02754 16.6536 5.44079 16.7094 5.82826 16.8502C6.12866 16.9744 6.45917 17.2018 6.47454 17.5509C6.48863 17.98 6.47454 18.4098 6.48222 18.8396C6.08254 18.8652 5.68158 18.8511 5.28126 18.8473C5.27101 18.4681 5.28831 18.0883 5.2755 17.7097C5.27461 17.6242 5.25025 17.5406 5.20507 17.4679C5.15989 17.3953 5.09563 17.3365 5.0193 17.2979C4.69599 17.1566 4.33347 17.1328 3.99447 17.2306C3.7799 17.2908 3.52178 17.4112 3.48655 17.6508C3.46861 18.0556 3.48655 18.4617 3.48014 18.8678C3.08367 18.8716 2.68847 18.8678 2.29199 18.8678C2.26637 18.1856 2.28175 17.5009 2.28367 16.8181C2.66285 16.8181 3.04139 16.8124 3.41993 16.8181C3.4289 16.8943 3.43851 16.968 3.44684 17.0423Z" fill="#FDFEFD"/>
              <path d="M10.7947 17.2341C11.234 16.9016 11.7659 16.7142 12.3166 16.698C12.9726 16.6223 13.6372 16.7103 14.251 16.9542C14.451 17.0355 14.6228 17.1737 14.745 17.3516C14.8673 17.5295 14.9347 17.7394 14.9389 17.9553C13.8974 17.9822 12.854 17.9355 11.8138 17.9784C11.8274 18.0552 11.8573 18.1282 11.9015 18.1925C11.9457 18.2568 12.0032 18.3109 12.07 18.3511C12.3475 18.4727 12.6527 18.5169 12.9533 18.4792C13.2428 18.4792 13.4657 18.2333 13.7597 18.257C14.1312 18.2621 14.5033 18.2493 14.8748 18.2698C14.5269 18.6373 14.0568 18.8651 13.5528 18.9103C12.9404 19.0026 12.3167 18.9878 11.7094 18.8668C11.5038 18.8396 11.3057 18.7719 11.1265 18.6674C10.9474 18.5629 10.7909 18.4238 10.666 18.2583C10.5633 18.0997 10.5199 17.91 10.5433 17.7225C10.5667 17.5351 10.6555 17.3619 10.7941 17.2335M11.8388 17.5787C12.4421 17.6242 13.0493 17.6126 13.654 17.6069C13.5843 17.4673 13.4757 17.3509 13.3412 17.2719C13.2067 17.1929 13.0521 17.1546 12.8963 17.1617C12.6989 17.1311 12.497 17.1537 12.3113 17.2272C12.1256 17.3008 11.9629 17.4225 11.8401 17.58L11.8388 17.5787Z" fill="#FDFEFD"/>
              <path d="M4.57155 8.9646C6.10878 8.9646 7.64601 8.9678 9.18324 8.9646C9.20245 9.79727 9.16659 10.637 9.20117 11.4722C9.43638 11.3324 9.65848 11.1716 9.86475 10.9918C10.7243 10.3513 11.5519 9.67045 12.4159 9.03634C12.5154 9.0167 12.6169 9.00938 12.7182 9.01456C14.659 9.02289 16.601 9.00239 18.5411 9.02481C18.2299 9.2932 17.9038 9.54383 17.5643 9.77549C17.0186 10.22 16.4236 10.6024 15.8811 11.0514C15.6601 11.2365 15.4122 11.3877 15.1842 11.5638C15.1298 11.6496 15.2483 11.7098 15.2918 11.7694C15.7978 12.1928 16.2904 12.6322 16.8073 13.044C17.4164 13.5564 18.0146 14.0791 18.6295 14.5813C18.7077 14.6482 18.777 14.7248 18.8358 14.8093C16.7406 14.8279 14.6455 14.8093 12.5504 14.8182C12.4621 14.8203 12.3738 14.8173 12.2859 14.8093C12.1376 14.6961 12.0018 14.5672 11.8811 14.425C11.2348 13.7845 10.6058 13.1209 9.95954 12.474C9.69565 12.2178 9.45802 11.9302 9.17171 11.6932C9.18116 12.0484 9.16897 12.4039 9.1352 12.7577C9.1288 13.4623 9.1352 14.1668 9.132 14.8714C8.96547 14.8855 8.79957 14.9086 8.63176 14.9092C7.42311 14.9092 6.21318 14.9092 5.00389 14.9092C4.85825 14.9067 4.71295 14.8943 4.56899 14.8721C4.57796 12.9044 4.56194 10.9342 4.57155 8.9646Z" fill="#FAE80C"/>
              </g>
              <defs>
              <clipPath id="clip0_4_3643">
              <rect width="23.6797" height="16" fill="white" transform="translate(0 4)"/>
              </clipPath>
              </defs>
              </svg>
              </span>
                        <span> KNET </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_3668)">
                      <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/>
                      <path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/>
                      <path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/>
                      <path d="M19.7322 15.1538H19.6989V14.9561H19.7482L19.8122 15.0949L19.8666 14.9561H19.9146V15.1525H19.8813V15.0041L19.8288 15.1321H19.7898L19.7322 15.0041V15.1538ZM19.5882 15.1532H19.5594V14.99H19.4922V14.9561H19.6605V14.99H19.5882V15.1532Z" fill="#F69E1E"/>
                      <path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/>
                    </g>
                  <defs>
                  <clipPath id="clip0_4_3668">
                  <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                  </clipPath>
                  </defs>
                </svg>
              </span>
                        <span> Master Card </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_3684)">
                <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/>
                <path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_4_3684">
                <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                </clipPath>
                </defs>
              </svg>
            </span>
                        <span>
               Visa
             </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.067 8.72078C12.067 9.40758 11.6477 9.8029 10.909 9.8029H9.93871V7.63866H10.913C11.6477 7.63866 12.067 8.02998 12.067 8.72078ZM13.9637 11.2204C13.9637 11.5519 14.2512 11.7675 14.7024 11.7675C15.2774 11.7675 15.7087 11.4041 15.7087 10.893V10.5855L14.7703 10.6454C14.2392 10.6814 13.9637 10.877 13.9637 11.2204ZM23 3.15446V17.21C23 18.2682 22.1415 19.1267 21.0833 19.1267H1.91667C0.858507 19.1267 0 18.2682 0 17.21V3.15446C0 2.0963 0.858507 1.23779 1.91667 1.23779H21.0833C22.1415 1.23779 23 2.0963 23 3.15446ZM5.10313 7.87425C5.43854 7.9022 5.77396 7.70654 5.98559 7.45897C6.19323 7.20342 6.32899 6.86002 6.29306 6.51262C5.99757 6.5246 5.63021 6.70828 5.41858 6.96383C5.22691 7.18345 5.06319 7.53883 5.10313 7.87425ZM7.52292 10.8491C7.51493 10.8411 6.74028 10.5456 6.73229 9.65116C6.72431 8.90446 7.34323 8.54508 7.37118 8.52512C7.01979 8.00602 6.47674 7.95012 6.28906 7.93814C5.80191 7.91019 5.38663 8.21366 5.15504 8.21366C4.91944 8.21366 4.56806 7.95012 4.18472 7.95811C3.68559 7.96609 3.2184 8.2496 2.96684 8.70081C2.44375 9.60324 2.83108 10.9369 3.33819 11.6716C3.58576 12.035 3.88524 12.4343 4.27656 12.4183C4.64792 12.4024 4.79566 12.1788 5.24288 12.1788C5.6941 12.1788 5.82188 12.4183 6.21319 12.4144C6.62049 12.4064 6.87205 12.051 7.12361 11.6876C7.39913 11.2723 7.51493 10.873 7.52292 10.8491ZM12.9295 8.71679C12.9295 7.65463 12.1908 6.9279 11.1366 6.9279H9.09219V12.3744H9.93871V10.5137H11.1087C12.1788 10.5137 12.9295 9.77894 12.9295 8.71679ZM16.5233 9.66314C16.5233 8.87651 15.8924 8.36939 14.926 8.36939C14.0276 8.36939 13.3648 8.88449 13.3408 9.58727H14.1035C14.1674 9.25186 14.4788 9.03224 14.9021 9.03224C15.4212 9.03224 15.7087 9.27182 15.7087 9.71904V10.0185L14.6545 10.0824C13.6722 10.1423 13.1411 10.5456 13.1411 11.2444C13.1411 11.9512 13.6882 12.4183 14.4748 12.4183C15.0059 12.4183 15.497 12.1508 15.7207 11.7236H15.7366V12.3784H16.5193V9.66314H16.5233ZM20.6042 8.4213H19.7457L18.7514 11.6397H18.7354L17.7411 8.4213H16.8507L18.2842 12.3864L18.2083 12.626C18.0806 13.0333 17.8689 13.193 17.4936 13.193C17.4257 13.193 17.2979 13.185 17.246 13.181V13.8359C17.2939 13.8519 17.5056 13.8558 17.5694 13.8558C18.396 13.8558 18.7833 13.5404 19.1227 12.5861L20.6042 8.4213Z" fill="black"/>
              </svg>
            </span>
                        <span> Apple Pay</span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4_3702)">
                  <g clip-path="url(#clip1_4_3702)">
                  <path d="M0.0349266 12.9237C0.208927 16.7667 1.20393 19.8067 3.49993 21.4647C5.78393 23.1127 9.49593 23.6357 13.4089 23.4707C17.2069 23.3107 20.2919 22.3027 21.9439 20.0027C23.5929 17.7057 24.1189 14.3157 23.9779 10.2017C23.8449 6.37073 22.8389 3.28773 20.5699 1.60373C18.3009 -0.080265 14.8899 -0.665265 10.6039 -0.460265C8.65793 -0.367265 6.90193 -0.114265 5.47693 0.456735C4.00693 1.04674 2.87093 1.87873 2.03993 3.03673C0.368927 5.36273 -0.148073 8.87573 0.0349266 12.9237ZM21.3149 9.04873L17.8889 16.0247H16.7079L20.1339 9.04873H21.3149ZM16.6279 9.04974L17.9889 11.8387L17.3969 13.0427L15.4479 9.04974H16.6279ZM12.5209 8.87173C13.9099 8.87173 15.2599 10.0377 15.3039 11.4917V14.2737H14.2599V11.4917C14.2389 10.7077 13.4069 9.92573 12.5209 9.92573C11.5249 9.92573 10.7919 10.7767 10.7919 11.5727C10.7919 12.6997 11.5859 13.2147 12.5209 13.2147H12.8889V14.2737H12.5209C10.9829 14.2727 9.73593 13.2877 9.73593 11.5727C9.73593 10.1737 10.9829 8.87173 12.5209 8.87173ZM3.84893 10.0277C3.84893 9.38873 4.36593 8.87173 5.00393 8.87173H6.60293C8.09293 8.87173 9.32793 10.0807 9.32793 11.5717C9.32793 13.0627 8.17493 14.2727 6.60193 14.2727H6.10693V13.2087H6.60193C7.54793 13.2087 8.23793 12.4757 8.23793 11.5717C8.23793 10.6677 7.50593 9.93474 6.60193 9.93474H5.00293C4.97514 9.9348 4.9481 9.94378 4.92579 9.96033C4.90347 9.97689 4.88705 10.0002 4.87893 10.0267V15.8337H3.84893V10.0277Z" fill="#2F55CC"/>
                  </g>
                  </g>
                  <defs>
                  <clipPath id="clip0_4_3702">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  <clipPath id="clip1_4_3702">
                  <rect width="24" height="24" fill="white" transform="translate(0 -0.5)"/>
                  </clipPath>
                  </defs>
                  </svg>
            </span>
                        <span> Samsung Pay </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="bricks-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1675 0.467285C10.9755 0.467226 9.81032 0.820626 8.81922 1.4828C7.82812 2.14497 7.05564 3.08616 6.59946 4.18737C6.14328 5.28857 6.02389 6.50032 6.25639 7.66937C6.48889 8.83843 7.06284 9.91228 7.90566 10.7551C8.74847 11.598 9.8223 12.172 10.9913 12.4046C12.1604 12.6371 13.3721 12.5178 14.4734 12.0617C15.5746 11.6055 16.5158 10.8331 17.1781 9.84204C17.8403 8.85097 18.1937 7.68579 18.1937 6.49384C18.1937 4.89555 17.5588 3.36272 16.4287 2.23253C15.2986 1.10234 13.7658 0.467365 12.1675 0.467285ZM11.6956 6.06712H12.6221C13.0374 6.06673 13.4357 6.23131 13.7296 6.52465C14.0235 6.81799 14.1888 7.21606 14.1892 7.63129C14.1896 8.04651 14.025 8.44489 13.7317 8.73878C13.4384 9.03266 13.0403 9.19798 12.6251 9.19837V9.96971C12.6267 10.0372 12.6148 10.1044 12.5901 10.1672C12.5654 10.23 12.5284 10.2873 12.4813 10.3356C12.4341 10.3839 12.3777 10.4223 12.3155 10.4486C12.2533 10.4748 12.1865 10.4883 12.119 10.4883C12.0514 10.4883 11.9846 10.4748 11.9224 10.4486C11.8602 10.4223 11.8038 10.3839 11.7566 10.3356C11.7095 10.2873 11.6725 10.23 11.6478 10.1672C11.6231 10.1044 11.6112 10.0372 11.6129 9.96971V9.19856H10.5567C10.4224 9.19856 10.2937 9.14522 10.1987 9.05028C10.1038 8.95534 10.0505 8.82658 10.0505 8.69231C10.0505 8.55804 10.1038 8.42928 10.1987 8.33434C10.2937 8.2394 10.4224 8.18606 10.5567 8.18606H12.6221C12.6953 8.18691 12.7679 8.17323 12.8358 8.14582C12.9036 8.11841 12.9654 8.0778 13.0174 8.02635C13.0695 7.9749 13.1108 7.91364 13.139 7.84611C13.1672 7.77858 13.1817 7.70612 13.1817 7.63294C13.1817 7.55975 13.1672 7.48729 13.139 7.41976C13.1108 7.35223 13.0695 7.29097 13.0174 7.23952C12.9654 7.18807 12.9036 7.14747 12.8358 7.12005C12.7679 7.09264 12.6953 7.07896 12.6221 7.07981H11.6956C11.2667 7.08075 10.8544 6.91381 10.5469 6.61467C10.2395 6.31554 10.0613 5.90798 10.0505 5.47916C10.0397 5.05034 10.1971 4.63431 10.4891 4.32006C10.781 4.00581 11.1844 3.8183 11.6129 3.79762V3.01804C11.6112 2.95054 11.6231 2.88339 11.6478 2.82055C11.6725 2.75771 11.7095 2.70044 11.7566 2.65212C11.8038 2.6038 11.8602 2.5654 11.9224 2.53919C11.9846 2.51297 12.0514 2.49946 12.119 2.49946C12.1865 2.49946 12.2533 2.51297 12.3155 2.53919C12.3777 2.5654 12.4341 2.6038 12.4813 2.65212C12.5284 2.70044 12.5654 2.75771 12.5901 2.82055C12.6148 2.88339 12.6267 2.95054 12.6251 3.01804V3.78907H13.7783C13.9125 3.78907 14.0413 3.84241 14.1362 3.93735C14.2312 4.03229 14.2845 4.16106 14.2845 4.29532C14.2845 4.42959 14.2312 4.55836 14.1362 4.6533C14.0413 4.74824 13.9125 4.80157 13.7783 4.80157H11.6956C11.5278 4.80157 11.3669 4.86824 11.2482 4.9869C11.1295 5.10556 11.0629 5.2665 11.0629 5.43431C11.0629 5.60212 11.1295 5.76306 11.2482 5.88172C11.3669 6.00038 11.5278 6.06712 11.6956 6.06712Z" fill="black"/>
                <path d="M5.66494 13.7761H3.20577C3.15436 13.7761 3.10346 13.7862 3.05597 13.8059C3.00848 13.8256 2.96533 13.8544 2.92899 13.8908C2.89265 13.9271 2.86383 13.9703 2.84418 14.0178C2.82452 14.0653 2.81442 14.1162 2.81445 14.1676V22.5605C2.81446 22.6643 2.85569 22.7638 2.92908 22.8372C3.00246 22.9106 3.10199 22.9518 3.20577 22.9518H5.66494C5.89113 22.9518 6.10804 22.8619 6.26796 22.7019C6.42789 22.542 6.51773 22.3251 6.51773 22.0989V14.6289C6.51768 14.4027 6.42781 14.1858 6.2679 14.0259C6.10798 13.866 5.8911 13.7762 5.66494 13.7761Z" fill="black"/>
                <path d="M21.1228 14.7616C20.9928 14.5637 20.8155 14.4012 20.607 14.2889C20.3986 14.1765 20.1654 14.1179 19.9286 14.1182H18.9648C18.5513 14.1173 18.1469 14.2397 17.8032 14.4696C17.4596 14.6996 17.1922 15.0267 17.0352 15.4093C16.9421 15.6317 16.8122 15.8368 16.6512 16.0163C16.3775 16.4366 16.0071 16.7852 15.5711 17.0331C15.135 17.2809 14.646 17.4208 14.1448 17.441L11.2902 17.4412C11.1559 17.4412 11.0272 17.3878 10.9322 17.2929C10.8373 17.1979 10.784 17.0692 10.784 16.9349C10.784 16.8006 10.8373 16.6719 10.9322 16.5769C11.0272 16.482 11.1559 16.4287 11.2902 16.4287H14.1313C14.4963 16.4193 14.8509 16.3052 15.1529 16.0999V16.0828C15.1539 15.8252 15.1041 15.5699 15.0062 15.3316C14.9083 15.0933 14.7643 14.8767 14.5825 14.6941C14.4007 14.5116 14.1846 14.3668 13.9467 14.2679C13.7088 14.1691 13.4537 14.1182 13.1961 14.1182H11.1013C10.7186 14.1171 10.3394 14.1917 9.98557 14.3378C9.63178 14.4839 9.3104 14.6986 9.03995 14.9694L8.98647 15.0227C8.59013 15.4184 8.08119 15.6821 7.5293 15.7775V21.3693H15.1686C16.3012 21.37 17.4092 21.0383 18.3551 20.4153C19.301 19.7922 20.0433 18.9052 20.4898 17.8643L21.2424 16.1127C21.3362 15.8953 21.3744 15.6579 21.3535 15.422C21.3327 15.1861 21.2534 14.9592 21.1228 14.7616Z" fill="black"/>
              </svg>
            </span>
                        <span> Cash </span>
                    </label>
                </div>
            </div>
            <div class="border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Totals</h3>
                <div class="flex justify-between text-sm mb-4">
                    <span>TOTAL</span>
                    <span class="font-bold">2000 KWD</span>
                </div>
                <button class="w-full bg-[#21395D] text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<div id="page-contracts" class="hidden bg-white p-6 max-w-[99%] md:max-w-[90%] mx-auto mt-[140px]">
    <button onclick="showPage('page-main')" class="mb-6 flex items-center gap-2 text-[#21395D] font-semibold hover:opacity-70 transition-opacity">
        <i class='fas fa-arrow-left text-black text-[36px]'></i>
    </button>
    <div class="flex flex-col lg:flex-row gap-6">
        <div class="flex-1 flex flex-col gap-4 max-w-full">
            <div class="border border-gray-200 rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-black mb-6">Contracts Order</h1>

                <div class="flex flex-col md:flex-row gap-8 mb-8">
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold font-medium">
                        <input type="radio" name="contract-mode" value="review" id="contract-review" onchange="switchContractMode('review')" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Review Contract
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold font-medium">
                        <input type="radio" name="contract-mode" value="new" id="contract-new" checked onchange="switchContractMode('new')" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> New Contract
                    </label>
                </div>

                <div id="contract-new-fields">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1">Email</label>
                            <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                            <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                                <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
                  <span>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                      <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                      <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                      <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
                    </svg>
                  </span>
                                    <span>+965</span>
                                </div>
                                <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1">Type of contract <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 outline-none">
                                    <option value="" selected>Choose Type</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <label class="block text-sm font-semibold mb-1">Number of copies required <span class="text-red-500">*</span></label>
                        <input type="number" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div id="contract-review-fields" class="hidden">
                    <div class="mb-6">
                        <label class="block text-sm font-bold mb-1">Copy of Commercial Registration (valid) <span class="text-red-500">*</span></label>
                        <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 w-full md:w-1/2 text-sm text-gray-400 cursor-pointer hover:border-[#1e2d5a] transition-colors bg-white">
                            <span>Upload File</span>
                            <<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4405 8.8999C20.0405 9.2099 21.5105 11.0599 21.5105 15.1099V15.2399C21.5105 19.7099 19.7205 21.4999 15.2505 21.4999H8.74047C4.27047 21.4999 2.48047 19.7099 2.48047 15.2399V15.1099C2.48047 11.0899 3.93047 9.2399 7.47047 8.9099" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 15.0001V3.62012" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.3504 5.85L12.0004 2.5L8.65039 5.85" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="file" class="hidden"/>
                        </label>
                    </div>
                    <div class="flex items-center gap-2 my-6 rounded-xl md:w-3/4">
            <span class="text-blue-500 mt-0.5 text-sm">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 8V13" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.9941 16H12.0031" stroke="#A8A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
                        <p class="text-xs text-gray-600">Thiqah Will Review The Contract And Reply With Email Address (To Receive A Copy Of The Contract)</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1">Email</label>
                            <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                        <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                            <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
                <span>
                 <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                      <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                      <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                      <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
                    </svg>
                </span>
                                <span>+965</span>
                            </div>
                            <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col gap-4 w-full lg:w-[304px]">
            <div class=" border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4_3643)">
              <path d="M22.0785 4.32007H1.60134C0.893847 4.32007 0.320312 4.8936 0.320312 5.60109V18.3985C0.320312 19.106 0.893847 19.6796 1.60134 19.6796H22.0785C22.786 19.6796 23.3595 19.106 23.3595 18.3985V5.60109C23.3595 4.8936 22.786 4.32007 22.0785 4.32007Z" fill="#0873B9"/>
              <path d="M0.339844 8.40858C8.01916 8.40645 15.6989 8.40645 23.3791 8.40858V15.5368C15.6998 15.539 8.02001 15.539 0.339844 15.5368V8.40858ZM4.57171 8.96775C4.56146 10.9373 4.57811 12.9075 4.57171 14.8778C4.71567 14.9 4.86097 14.9124 5.00662 14.9149C6.2159 14.9149 7.42583 14.9149 8.63448 14.9149C8.80229 14.9149 8.96819 14.8912 9.13472 14.8771C9.13856 14.1726 9.13472 13.468 9.13792 12.7634C9.17169 12.4097 9.18388 12.0542 9.17443 11.6989C9.46074 11.9359 9.69837 12.2209 9.96226 12.4797C10.6028 13.1266 11.2343 13.787 11.8838 14.4307C12.0046 14.5729 12.1403 14.7018 12.2886 14.815C12.3765 14.8231 12.4649 14.826 12.5531 14.824C14.6483 14.815 16.7434 14.8336 18.8385 14.815C18.7797 14.7305 18.7104 14.6539 18.6322 14.587C18.0173 14.0822 17.4191 13.5577 16.81 13.0497C16.2931 12.6379 15.8005 12.1991 15.2945 11.7751C15.2478 11.7156 15.1325 11.6553 15.1869 11.5695C15.4149 11.3947 15.6628 11.2435 15.8838 11.0571C16.4263 10.6087 17.0213 10.2244 17.5671 9.7812C17.9082 9.54823 18.2358 9.29611 18.5483 9.02604C16.6076 9.00362 14.6662 9.02604 12.7254 9.01579C12.6241 9.01062 12.5226 9.01794 12.4231 9.03757C11.5591 9.67168 10.7315 10.3525 9.87195 10.9931C9.66569 11.1729 9.44359 11.3336 9.20838 11.4734C9.17379 10.6408 9.20838 9.80106 9.19044 8.96583C7.64809 8.96903 6.10958 8.96327 4.57171 8.96583V8.96775Z" fill="#0873B9"/>
              <path d="M11.8398 17.5788C11.963 17.4213 12.1259 17.2997 12.3119 17.2264C12.4978 17.1531 12.6999 17.1308 12.8973 17.1618C13.0532 17.1547 13.2077 17.193 13.3422 17.272C13.4767 17.351 13.5854 17.4674 13.6551 17.6069C13.0504 17.6127 12.4432 17.6249 11.8398 17.5788Z" fill="#0873B9"/>
              <path d="M2.88631 4.97592C3.17198 4.97592 3.45829 4.9708 3.74396 4.97913C3.59792 5.40123 3.38399 5.79578 3.22066 6.21147C4.95005 6.23261 6.67623 6.21147 8.40305 6.22236C8.55103 6.22411 8.699 6.21769 8.84628 6.20315C8.83565 6.00076 8.83886 5.79789 8.85589 5.59594C9.07238 5.59594 9.28888 5.59594 9.50601 5.59594C9.52138 5.78809 9.52394 5.98345 9.52138 6.17753C9.61554 6.17753 9.71354 6.17112 9.80641 6.166C9.82114 5.98025 9.83011 5.79514 9.84356 5.60939C10.0394 5.59674 10.2358 5.59674 10.4316 5.60939C10.4348 6.11155 10.4386 6.61372 10.4316 7.11524C8.16222 7.13253 5.89288 7.11524 3.62354 7.12292C3.41281 7.12292 3.20273 7.12292 2.992 7.11524C2.75052 6.82252 2.51161 6.52853 2.26758 6.23837C2.45973 5.80987 2.67366 5.3929 2.88631 4.97592Z" fill="#FDFEFD"/>
              <path d="M18.5689 4.93058C19.4016 4.93058 20.2381 4.91777 21.0727 4.93763C21.1137 5.0305 21.156 5.12337 21.1963 5.21625C20.6199 5.23995 20.0434 5.26172 19.4669 5.26493C19.4618 5.36421 19.4567 5.46477 19.4522 5.56469C20.1376 5.5871 20.8248 5.53971 21.5089 5.59351C21.6516 5.79674 21.7728 6.01417 21.8708 6.24235C21.7318 6.42297 21.5717 6.58759 21.4167 6.75476C21.3526 6.84827 21.2322 6.8297 21.1342 6.83418C20.1734 6.83418 19.2127 6.83418 18.2519 6.83418C18.0072 6.84443 17.8259 6.65548 17.6159 6.56325C17.5947 6.94755 17.6095 7.33506 17.605 7.72065C16.2727 7.7309 14.9392 7.73602 13.6069 7.72065C13.6069 6.99623 13.6037 6.27117 13.6069 5.54675C14.5561 5.54675 15.506 5.54995 16.4552 5.54675C16.4604 5.80296 16.4591 6.06237 16.4552 6.32113C15.8295 6.33458 15.2024 6.32113 14.576 6.32818C14.5504 6.58749 14.5478 6.84856 14.5683 7.10832C15.303 7.12882 16.0383 7.11857 16.7723 7.11281C16.7845 6.59207 16.7723 6.07069 16.7755 5.54995C17.2239 5.54995 17.6722 5.54995 18.1161 5.54995C18.3223 5.76196 18.4882 6.00664 18.6874 6.22441C18.7412 6.30832 18.8514 6.28078 18.9366 6.28847C19.6098 6.28526 20.2817 6.28847 20.9574 6.28847C20.9151 6.17189 20.869 6.05788 20.8197 5.94387C20.2304 5.94387 19.6412 5.94387 19.0519 5.94387C18.8495 5.97269 18.7713 5.75172 18.6676 5.62682C18.4966 5.42954 18.5709 5.16309 18.5689 4.93058Z" fill="#FDFEFD"/>
              <path d="M4.10534 5.00994C4.31132 4.9853 4.51925 4.98144 4.726 4.99841C4.726 5.09321 4.72216 5.19056 4.71767 5.28344C4.51079 5.28728 4.3039 5.28728 4.09766 5.28344C4.09766 5.1912 4.10022 5.10089 4.10534 5.00994Z" fill="#FDFEFD"/>
              <path d="M5.13443 5.00284C5.33736 4.98293 5.5417 4.98186 5.74483 4.99964C5.74483 5.09443 5.74483 5.19179 5.74483 5.28402C5.54115 5.28402 5.33619 5.28402 5.1325 5.28402C5.1293 5.18923 5.13123 5.09635 5.13443 5.00284Z" fill="#FDFEFD"/>
              <path d="M9.79916 5.00181C10.0015 4.98214 10.2053 4.98214 10.4076 5.00181C10.4076 5.09469 10.4076 5.18756 10.4076 5.2798C10.204 5.28556 9.99965 5.28556 9.79532 5.2798C9.79404 5.18948 9.79596 5.09853 9.79916 5.00181Z" fill="#FDFEFD"/>
              <path d="M11.4062 5.8927C11.8149 5.87285 12.2235 5.88566 12.6322 5.88566C12.6668 6.19951 12.6565 6.51592 12.6616 6.83105C12.2447 6.83554 11.829 6.84194 11.4107 6.82721C11.4088 6.51272 11.4101 6.20399 11.4062 5.8927Z" fill="#FDFEFD"/>
              <path d="M18.1153 7.39233C18.3075 7.39233 18.506 7.39233 18.7014 7.40258C18.7014 7.4961 18.7014 7.58897 18.7014 7.68249C18.4938 7.69017 18.2863 7.69209 18.0801 7.68249C18.091 7.58513 18.1031 7.48905 18.1153 7.39233Z" fill="#FDFEFD"/>
              <path d="M19.0451 7.39938C19.2495 7.38868 19.4543 7.38868 19.6587 7.39938C19.6587 7.4961 19.6587 7.59154 19.6587 7.68953C19.4557 7.68953 19.2527 7.68953 19.0503 7.68505C19.0451 7.58897 19.0445 7.49418 19.0451 7.39938Z" fill="#FDFEFD"/>
              <path d="M0.339844 8.23706C8.01916 8.2392 15.6989 8.2392 23.3791 8.23706V8.40616C15.6998 8.40231 8.02001 8.40231 0.339844 8.40616V8.23706Z" fill="#FDFEFD"/>
              <path d="M0.339844 15.5349C8.01916 15.5388 15.6989 15.5388 23.3791 15.5349V15.7053C15.6998 15.7032 8.02001 15.7032 0.339844 15.7053V15.5349Z" fill="#FDFEFD"/>
              <path d="M19.7704 16.2136C20.1771 16.2136 20.5839 16.2136 20.9912 16.2136C20.9852 16.3896 20.9884 16.5658 21.0008 16.7414C21.2615 16.7369 21.5229 16.7414 21.7836 16.7414C21.7868 16.8695 21.7835 16.9976 21.7746 17.1257C21.5056 17.1257 21.2372 17.1257 20.9694 17.1308C20.9694 17.5593 20.9662 17.9885 20.9694 18.417C21.227 18.409 21.4848 18.4139 21.7419 18.4317C21.7398 18.5829 21.7398 18.7347 21.7419 18.8871C21.3852 18.914 21.0271 18.8935 20.6703 18.9012C20.4207 18.9288 20.1688 18.8749 19.9523 18.7475C19.8962 18.7037 19.8508 18.6477 19.8195 18.5838C19.7882 18.5199 19.7719 18.4497 19.7717 18.3786C19.7499 17.977 19.7909 17.5721 19.7474 17.1712C19.5482 17.1763 19.3489 17.1782 19.1504 17.1712C19.1504 17.0277 19.1515 16.8847 19.1536 16.742C19.3541 16.7369 19.5552 16.7388 19.7563 16.7363C19.7659 16.5633 19.7659 16.3885 19.7704 16.2136Z" fill="#FDFEFD"/>
              <path d="M3.44684 17.0423C3.80672 16.8412 4.20569 16.7199 4.61661 16.6868C5.02754 16.6536 5.44079 16.7094 5.82826 16.8502C6.12866 16.9744 6.45917 17.2018 6.47454 17.5509C6.48863 17.98 6.47454 18.4098 6.48222 18.8396C6.08254 18.8652 5.68158 18.8511 5.28126 18.8473C5.27101 18.4681 5.28831 18.0883 5.2755 17.7097C5.27461 17.6242 5.25025 17.5406 5.20507 17.4679C5.15989 17.3953 5.09563 17.3365 5.0193 17.2979C4.69599 17.1566 4.33347 17.1328 3.99447 17.2306C3.7799 17.2908 3.52178 17.4112 3.48655 17.6508C3.46861 18.0556 3.48655 18.4617 3.48014 18.8678C3.08367 18.8716 2.68847 18.8678 2.29199 18.8678C2.26637 18.1856 2.28175 17.5009 2.28367 16.8181C2.66285 16.8181 3.04139 16.8124 3.41993 16.8181C3.4289 16.8943 3.43851 16.968 3.44684 17.0423Z" fill="#FDFEFD"/>
              <path d="M10.7947 17.2341C11.234 16.9016 11.7659 16.7142 12.3166 16.698C12.9726 16.6223 13.6372 16.7103 14.251 16.9542C14.451 17.0355 14.6228 17.1737 14.745 17.3516C14.8673 17.5295 14.9347 17.7394 14.9389 17.9553C13.8974 17.9822 12.854 17.9355 11.8138 17.9784C11.8274 18.0552 11.8573 18.1282 11.9015 18.1925C11.9457 18.2568 12.0032 18.3109 12.07 18.3511C12.3475 18.4727 12.6527 18.5169 12.9533 18.4792C13.2428 18.4792 13.4657 18.2333 13.7597 18.257C14.1312 18.2621 14.5033 18.2493 14.8748 18.2698C14.5269 18.6373 14.0568 18.8651 13.5528 18.9103C12.9404 19.0026 12.3167 18.9878 11.7094 18.8668C11.5038 18.8396 11.3057 18.7719 11.1265 18.6674C10.9474 18.5629 10.7909 18.4238 10.666 18.2583C10.5633 18.0997 10.5199 17.91 10.5433 17.7225C10.5667 17.5351 10.6555 17.3619 10.7941 17.2335M11.8388 17.5787C12.4421 17.6242 13.0493 17.6126 13.654 17.6069C13.5843 17.4673 13.4757 17.3509 13.3412 17.2719C13.2067 17.1929 13.0521 17.1546 12.8963 17.1617C12.6989 17.1311 12.497 17.1537 12.3113 17.2272C12.1256 17.3008 11.9629 17.4225 11.8401 17.58L11.8388 17.5787Z" fill="#FDFEFD"/>
              <path d="M4.57155 8.9646C6.10878 8.9646 7.64601 8.9678 9.18324 8.9646C9.20245 9.79727 9.16659 10.637 9.20117 11.4722C9.43638 11.3324 9.65848 11.1716 9.86475 10.9918C10.7243 10.3513 11.5519 9.67045 12.4159 9.03634C12.5154 9.0167 12.6169 9.00938 12.7182 9.01456C14.659 9.02289 16.601 9.00239 18.5411 9.02481C18.2299 9.2932 17.9038 9.54383 17.5643 9.77549C17.0186 10.22 16.4236 10.6024 15.8811 11.0514C15.6601 11.2365 15.4122 11.3877 15.1842 11.5638C15.1298 11.6496 15.2483 11.7098 15.2918 11.7694C15.7978 12.1928 16.2904 12.6322 16.8073 13.044C17.4164 13.5564 18.0146 14.0791 18.6295 14.5813C18.7077 14.6482 18.777 14.7248 18.8358 14.8093C16.7406 14.8279 14.6455 14.8093 12.5504 14.8182C12.4621 14.8203 12.3738 14.8173 12.2859 14.8093C12.1376 14.6961 12.0018 14.5672 11.8811 14.425C11.2348 13.7845 10.6058 13.1209 9.95954 12.474C9.69565 12.2178 9.45802 11.9302 9.17171 11.6932C9.18116 12.0484 9.16897 12.4039 9.1352 12.7577C9.1288 13.4623 9.1352 14.1668 9.132 14.8714C8.96547 14.8855 8.79957 14.9086 8.63176 14.9092C7.42311 14.9092 6.21318 14.9092 5.00389 14.9092C4.85825 14.9067 4.71295 14.8943 4.56899 14.8721C4.57796 12.9044 4.56194 10.9342 4.57155 8.9646Z" fill="#FAE80C"/>
              </g>
              <defs>
              <clipPath id="clip0_4_3643">
              <rect width="23.6797" height="16" fill="white" transform="translate(0 4)"/>
              </clipPath>
              </defs>
              </svg>
              </span>
                        <span> KNET </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_3668)">
                      <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/>
                      <path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/>
                      <path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/>
                      <path d="M19.7322 15.1538H19.6989V14.9561H19.7482L19.8122 15.0949L19.8666 14.9561H19.9146V15.1525H19.8813V15.0041L19.8288 15.1321H19.7898L19.7322 15.0041V15.1538ZM19.5882 15.1532H19.5594V14.99H19.4922V14.9561H19.6605V14.99H19.5882V15.1532Z" fill="#F69E1E"/>
                      <path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/>
                    </g>
                  <defs>
                  <clipPath id="clip0_4_3668">
                  <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                  </clipPath>
                  </defs>
                </svg>
              </span>
                        <span> Master Card </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_3684)">
                <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/>
                <path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_4_3684">
                <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                </clipPath>
                </defs>
              </svg>
            </span>
                        <span>
               Visa
             </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.067 8.72078C12.067 9.40758 11.6477 9.8029 10.909 9.8029H9.93871V7.63866H10.913C11.6477 7.63866 12.067 8.02998 12.067 8.72078ZM13.9637 11.2204C13.9637 11.5519 14.2512 11.7675 14.7024 11.7675C15.2774 11.7675 15.7087 11.4041 15.7087 10.893V10.5855L14.7703 10.6454C14.2392 10.6814 13.9637 10.877 13.9637 11.2204ZM23 3.15446V17.21C23 18.2682 22.1415 19.1267 21.0833 19.1267H1.91667C0.858507 19.1267 0 18.2682 0 17.21V3.15446C0 2.0963 0.858507 1.23779 1.91667 1.23779H21.0833C22.1415 1.23779 23 2.0963 23 3.15446ZM5.10313 7.87425C5.43854 7.9022 5.77396 7.70654 5.98559 7.45897C6.19323 7.20342 6.32899 6.86002 6.29306 6.51262C5.99757 6.5246 5.63021 6.70828 5.41858 6.96383C5.22691 7.18345 5.06319 7.53883 5.10313 7.87425ZM7.52292 10.8491C7.51493 10.8411 6.74028 10.5456 6.73229 9.65116C6.72431 8.90446 7.34323 8.54508 7.37118 8.52512C7.01979 8.00602 6.47674 7.95012 6.28906 7.93814C5.80191 7.91019 5.38663 8.21366 5.15504 8.21366C4.91944 8.21366 4.56806 7.95012 4.18472 7.95811C3.68559 7.96609 3.2184 8.2496 2.96684 8.70081C2.44375 9.60324 2.83108 10.9369 3.33819 11.6716C3.58576 12.035 3.88524 12.4343 4.27656 12.4183C4.64792 12.4024 4.79566 12.1788 5.24288 12.1788C5.6941 12.1788 5.82188 12.4183 6.21319 12.4144C6.62049 12.4064 6.87205 12.051 7.12361 11.6876C7.39913 11.2723 7.51493 10.873 7.52292 10.8491ZM12.9295 8.71679C12.9295 7.65463 12.1908 6.9279 11.1366 6.9279H9.09219V12.3744H9.93871V10.5137H11.1087C12.1788 10.5137 12.9295 9.77894 12.9295 8.71679ZM16.5233 9.66314C16.5233 8.87651 15.8924 8.36939 14.926 8.36939C14.0276 8.36939 13.3648 8.88449 13.3408 9.58727H14.1035C14.1674 9.25186 14.4788 9.03224 14.9021 9.03224C15.4212 9.03224 15.7087 9.27182 15.7087 9.71904V10.0185L14.6545 10.0824C13.6722 10.1423 13.1411 10.5456 13.1411 11.2444C13.1411 11.9512 13.6882 12.4183 14.4748 12.4183C15.0059 12.4183 15.497 12.1508 15.7207 11.7236H15.7366V12.3784H16.5193V9.66314H16.5233ZM20.6042 8.4213H19.7457L18.7514 11.6397H18.7354L17.7411 8.4213H16.8507L18.2842 12.3864L18.2083 12.626C18.0806 13.0333 17.8689 13.193 17.4936 13.193C17.4257 13.193 17.2979 13.185 17.246 13.181V13.8359C17.2939 13.8519 17.5056 13.8558 17.5694 13.8558C18.396 13.8558 18.7833 13.5404 19.1227 12.5861L20.6042 8.4213Z" fill="black"/>
              </svg>
            </span>
                        <span> Apple Pay</span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4_3702)">
                  <g clip-path="url(#clip1_4_3702)">
                  <path d="M0.0349266 12.9237C0.208927 16.7667 1.20393 19.8067 3.49993 21.4647C5.78393 23.1127 9.49593 23.6357 13.4089 23.4707C17.2069 23.3107 20.2919 22.3027 21.9439 20.0027C23.5929 17.7057 24.1189 14.3157 23.9779 10.2017C23.8449 6.37073 22.8389 3.28773 20.5699 1.60373C18.3009 -0.080265 14.8899 -0.665265 10.6039 -0.460265C8.65793 -0.367265 6.90193 -0.114265 5.47693 0.456735C4.00693 1.04674 2.87093 1.87873 2.03993 3.03673C0.368927 5.36273 -0.148073 8.87573 0.0349266 12.9237ZM21.3149 9.04873L17.8889 16.0247H16.7079L20.1339 9.04873H21.3149ZM16.6279 9.04974L17.9889 11.8387L17.3969 13.0427L15.4479 9.04974H16.6279ZM12.5209 8.87173C13.9099 8.87173 15.2599 10.0377 15.3039 11.4917V14.2737H14.2599V11.4917C14.2389 10.7077 13.4069 9.92573 12.5209 9.92573C11.5249 9.92573 10.7919 10.7767 10.7919 11.5727C10.7919 12.6997 11.5859 13.2147 12.5209 13.2147H12.8889V14.2737H12.5209C10.9829 14.2727 9.73593 13.2877 9.73593 11.5727C9.73593 10.1737 10.9829 8.87173 12.5209 8.87173ZM3.84893 10.0277C3.84893 9.38873 4.36593 8.87173 5.00393 8.87173H6.60293C8.09293 8.87173 9.32793 10.0807 9.32793 11.5717C9.32793 13.0627 8.17493 14.2727 6.60193 14.2727H6.10693V13.2087H6.60193C7.54793 13.2087 8.23793 12.4757 8.23793 11.5717C8.23793 10.6677 7.50593 9.93474 6.60193 9.93474H5.00293C4.97514 9.9348 4.9481 9.94378 4.92579 9.96033C4.90347 9.97689 4.88705 10.0002 4.87893 10.0267V15.8337H3.84893V10.0277Z" fill="#2F55CC"/>
                  </g>
                  </g>
                  <defs>
                  <clipPath id="clip0_4_3702">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  <clipPath id="clip1_4_3702">
                  <rect width="24" height="24" fill="white" transform="translate(0 -0.5)"/>
                  </clipPath>
                  </defs>
                  </svg>
            </span>
                        <span> Samsung Pay </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="contracts-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1675 0.467285C10.9755 0.467226 9.81032 0.820626 8.81922 1.4828C7.82812 2.14497 7.05564 3.08616 6.59946 4.18737C6.14328 5.28857 6.02389 6.50032 6.25639 7.66937C6.48889 8.83843 7.06284 9.91228 7.90566 10.7551C8.74847 11.598 9.8223 12.172 10.9913 12.4046C12.1604 12.6371 13.3721 12.5178 14.4734 12.0617C15.5746 11.6055 16.5158 10.8331 17.1781 9.84204C17.8403 8.85097 18.1937 7.68579 18.1937 6.49384C18.1937 4.89555 17.5588 3.36272 16.4287 2.23253C15.2986 1.10234 13.7658 0.467365 12.1675 0.467285ZM11.6956 6.06712H12.6221C13.0374 6.06673 13.4357 6.23131 13.7296 6.52465C14.0235 6.81799 14.1888 7.21606 14.1892 7.63129C14.1896 8.04651 14.025 8.44489 13.7317 8.73878C13.4384 9.03266 13.0403 9.19798 12.6251 9.19837V9.96971C12.6267 10.0372 12.6148 10.1044 12.5901 10.1672C12.5654 10.23 12.5284 10.2873 12.4813 10.3356C12.4341 10.3839 12.3777 10.4223 12.3155 10.4486C12.2533 10.4748 12.1865 10.4883 12.119 10.4883C12.0514 10.4883 11.9846 10.4748 11.9224 10.4486C11.8602 10.4223 11.8038 10.3839 11.7566 10.3356C11.7095 10.2873 11.6725 10.23 11.6478 10.1672C11.6231 10.1044 11.6112 10.0372 11.6129 9.96971V9.19856H10.5567C10.4224 9.19856 10.2937 9.14522 10.1987 9.05028C10.1038 8.95534 10.0505 8.82658 10.0505 8.69231C10.0505 8.55804 10.1038 8.42928 10.1987 8.33434C10.2937 8.2394 10.4224 8.18606 10.5567 8.18606H12.6221C12.6953 8.18691 12.7679 8.17323 12.8358 8.14582C12.9036 8.11841 12.9654 8.0778 13.0174 8.02635C13.0695 7.9749 13.1108 7.91364 13.139 7.84611C13.1672 7.77858 13.1817 7.70612 13.1817 7.63294C13.1817 7.55975 13.1672 7.48729 13.139 7.41976C13.1108 7.35223 13.0695 7.29097 13.0174 7.23952C12.9654 7.18807 12.9036 7.14747 12.8358 7.12005C12.7679 7.09264 12.6953 7.07896 12.6221 7.07981H11.6956C11.2667 7.08075 10.8544 6.91381 10.5469 6.61467C10.2395 6.31554 10.0613 5.90798 10.0505 5.47916C10.0397 5.05034 10.1971 4.63431 10.4891 4.32006C10.781 4.00581 11.1844 3.8183 11.6129 3.79762V3.01804C11.6112 2.95054 11.6231 2.88339 11.6478 2.82055C11.6725 2.75771 11.7095 2.70044 11.7566 2.65212C11.8038 2.6038 11.8602 2.5654 11.9224 2.53919C11.9846 2.51297 12.0514 2.49946 12.119 2.49946C12.1865 2.49946 12.2533 2.51297 12.3155 2.53919C12.3777 2.5654 12.4341 2.6038 12.4813 2.65212C12.5284 2.70044 12.5654 2.75771 12.5901 2.82055C12.6148 2.88339 12.6267 2.95054 12.6251 3.01804V3.78907H13.7783C13.9125 3.78907 14.0413 3.84241 14.1362 3.93735C14.2312 4.03229 14.2845 4.16106 14.2845 4.29532C14.2845 4.42959 14.2312 4.55836 14.1362 4.6533C14.0413 4.74824 13.9125 4.80157 13.7783 4.80157H11.6956C11.5278 4.80157 11.3669 4.86824 11.2482 4.9869C11.1295 5.10556 11.0629 5.2665 11.0629 5.43431C11.0629 5.60212 11.1295 5.76306 11.2482 5.88172C11.3669 6.00038 11.5278 6.06712 11.6956 6.06712Z" fill="black"/>
                <path d="M5.66494 13.7761H3.20577C3.15436 13.7761 3.10346 13.7862 3.05597 13.8059C3.00848 13.8256 2.96533 13.8544 2.92899 13.8908C2.89265 13.9271 2.86383 13.9703 2.84418 14.0178C2.82452 14.0653 2.81442 14.1162 2.81445 14.1676V22.5605C2.81446 22.6643 2.85569 22.7638 2.92908 22.8372C3.00246 22.9106 3.10199 22.9518 3.20577 22.9518H5.66494C5.89113 22.9518 6.10804 22.8619 6.26796 22.7019C6.42789 22.542 6.51773 22.3251 6.51773 22.0989V14.6289C6.51768 14.4027 6.42781 14.1858 6.2679 14.0259C6.10798 13.866 5.8911 13.7762 5.66494 13.7761Z" fill="black"/>
                <path d="M21.1228 14.7616C20.9928 14.5637 20.8155 14.4012 20.607 14.2889C20.3986 14.1765 20.1654 14.1179 19.9286 14.1182H18.9648C18.5513 14.1173 18.1469 14.2397 17.8032 14.4696C17.4596 14.6996 17.1922 15.0267 17.0352 15.4093C16.9421 15.6317 16.8122 15.8368 16.6512 16.0163C16.3775 16.4366 16.0071 16.7852 15.5711 17.0331C15.135 17.2809 14.646 17.4208 14.1448 17.441L11.2902 17.4412C11.1559 17.4412 11.0272 17.3878 10.9322 17.2929C10.8373 17.1979 10.784 17.0692 10.784 16.9349C10.784 16.8006 10.8373 16.6719 10.9322 16.5769C11.0272 16.482 11.1559 16.4287 11.2902 16.4287H14.1313C14.4963 16.4193 14.8509 16.3052 15.1529 16.0999V16.0828C15.1539 15.8252 15.1041 15.5699 15.0062 15.3316C14.9083 15.0933 14.7643 14.8767 14.5825 14.6941C14.4007 14.5116 14.1846 14.3668 13.9467 14.2679C13.7088 14.1691 13.4537 14.1182 13.1961 14.1182H11.1013C10.7186 14.1171 10.3394 14.1917 9.98557 14.3378C9.63178 14.4839 9.3104 14.6986 9.03995 14.9694L8.98647 15.0227C8.59013 15.4184 8.08119 15.6821 7.5293 15.7775V21.3693H15.1686C16.3012 21.37 17.4092 21.0383 18.3551 20.4153C19.301 19.7922 20.0433 18.9052 20.4898 17.8643L21.2424 16.1127C21.3362 15.8953 21.3744 15.6579 21.3535 15.422C21.3327 15.1861 21.2534 14.9592 21.1228 14.7616Z" fill="black"/>
              </svg>
            </span>
                        <span> Cash </span>
                    </label>
                </div>
            </div>
            <div class="border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Totals</h3>
                <div class="flex justify-between text-sm mb-4">
                    <span>TOTAL</span>
                    <span class="font-bold">2000 KWD</span>
                </div>
                <button class="w-full bg-[#21395D] text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<div id="page-insurance" class="hidden bg-white p-6 max-w-[99%] md:max-w-[90%] mx-auto mt-[140px]">
    <button onclick="showPage('page-main')" class="mb-6 flex items-center gap-2 text-[#21395D] font-semibold hover:opacity-70 transition-opacity">
        <i class='fas fa-arrow-left text-black text-[36px]'></i>
    </button>
    <div class="flex flex-col lg:flex-row gap-6">
        <div class="flex-1 flex flex-col gap-4 max-w-full">
            <div class="border border-gray-200 rounded-2xl p-8">
                <h1 class="text-3xl font-bold text-black mb-8">Insurance Order</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" placeholder="Enter Mail" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden w-full md:w-1/2">
                        <div class="flex items-center gap-2 px-3 py-3 bg-white border-r border-gray-300 text-sm font-medium text-gray-700 whitespace-nowrap">
              <span>
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 6.6687H0V12.8687H32V6.6687Z" fill="#429976"/>
                      <path d="M32 12.8687H0V19.0999H32V12.8687Z" fill="white"/>
                      <path d="M32 19.1001H0V25.3313H32V19.1001Z" fill="#BD1F34"/>
                      <path d="M0 6.6687V25.3375L9.33125 19.1V12.8687L0.04375 6.6687H0Z" fill="#1E1F24"/>
                    </svg>
              </span>
                            <span>+965</span>
                        </div>
                        <input type="tel" placeholder="Enter Phone" class="flex-1 px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">State Type</label>
                    <div class="flex flex-col md:flex-row gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-state" value="home" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Home</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-state" value="villa" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Villa</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-state" value="project" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Project</label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Region <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 outline-none">
                                <option value="" selected>Choose Region</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">District Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Street Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Building Number <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                    </div>
                </div>

                <div class="mb-6 md:w-1/2">
                    <label class="block text-sm font-semibold mb-1">Starte Square or Estimated value</label>
                    <input type="text" placeholder="Enter Value" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none"/>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Covering options</label>
                    <div class="flex flex-col md:flex-row gap-8">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-cover" value="fire" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Fire</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-cover" value="natural" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Natural Disasters</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-cover" value="full" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> Full Insurance</label>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Duration</label>
                    <div class="flex flex-col md:flex-row gap-8">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-dur" value="1year" class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 1 Year</label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold">
                            <input type="radio" name="ins-dur" value="2year" checked class="accent-[#21395D] w-[20px] h-[20px] border-2 border-black"/> 2 Year</label>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <label class="block text-sm font-semibold mb-1">Note</label>
                    <textarea placeholder="Enter Notes" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none resize-none"></textarea>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 w-full lg:w-[304px]">
            <div class=" border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4_3643)">
              <path d="M22.0785 4.32007H1.60134C0.893847 4.32007 0.320312 4.8936 0.320312 5.60109V18.3985C0.320312 19.106 0.893847 19.6796 1.60134 19.6796H22.0785C22.786 19.6796 23.3595 19.106 23.3595 18.3985V5.60109C23.3595 4.8936 22.786 4.32007 22.0785 4.32007Z" fill="#0873B9"/>
              <path d="M0.339844 8.40858C8.01916 8.40645 15.6989 8.40645 23.3791 8.40858V15.5368C15.6998 15.539 8.02001 15.539 0.339844 15.5368V8.40858ZM4.57171 8.96775C4.56146 10.9373 4.57811 12.9075 4.57171 14.8778C4.71567 14.9 4.86097 14.9124 5.00662 14.9149C6.2159 14.9149 7.42583 14.9149 8.63448 14.9149C8.80229 14.9149 8.96819 14.8912 9.13472 14.8771C9.13856 14.1726 9.13472 13.468 9.13792 12.7634C9.17169 12.4097 9.18388 12.0542 9.17443 11.6989C9.46074 11.9359 9.69837 12.2209 9.96226 12.4797C10.6028 13.1266 11.2343 13.787 11.8838 14.4307C12.0046 14.5729 12.1403 14.7018 12.2886 14.815C12.3765 14.8231 12.4649 14.826 12.5531 14.824C14.6483 14.815 16.7434 14.8336 18.8385 14.815C18.7797 14.7305 18.7104 14.6539 18.6322 14.587C18.0173 14.0822 17.4191 13.5577 16.81 13.0497C16.2931 12.6379 15.8005 12.1991 15.2945 11.7751C15.2478 11.7156 15.1325 11.6553 15.1869 11.5695C15.4149 11.3947 15.6628 11.2435 15.8838 11.0571C16.4263 10.6087 17.0213 10.2244 17.5671 9.7812C17.9082 9.54823 18.2358 9.29611 18.5483 9.02604C16.6076 9.00362 14.6662 9.02604 12.7254 9.01579C12.6241 9.01062 12.5226 9.01794 12.4231 9.03757C11.5591 9.67168 10.7315 10.3525 9.87195 10.9931C9.66569 11.1729 9.44359 11.3336 9.20838 11.4734C9.17379 10.6408 9.20838 9.80106 9.19044 8.96583C7.64809 8.96903 6.10958 8.96327 4.57171 8.96583V8.96775Z" fill="#0873B9"/>
              <path d="M11.8398 17.5788C11.963 17.4213 12.1259 17.2997 12.3119 17.2264C12.4978 17.1531 12.6999 17.1308 12.8973 17.1618C13.0532 17.1547 13.2077 17.193 13.3422 17.272C13.4767 17.351 13.5854 17.4674 13.6551 17.6069C13.0504 17.6127 12.4432 17.6249 11.8398 17.5788Z" fill="#0873B9"/>
              <path d="M2.88631 4.97592C3.17198 4.97592 3.45829 4.9708 3.74396 4.97913C3.59792 5.40123 3.38399 5.79578 3.22066 6.21147C4.95005 6.23261 6.67623 6.21147 8.40305 6.22236C8.55103 6.22411 8.699 6.21769 8.84628 6.20315C8.83565 6.00076 8.83886 5.79789 8.85589 5.59594C9.07238 5.59594 9.28888 5.59594 9.50601 5.59594C9.52138 5.78809 9.52394 5.98345 9.52138 6.17753C9.61554 6.17753 9.71354 6.17112 9.80641 6.166C9.82114 5.98025 9.83011 5.79514 9.84356 5.60939C10.0394 5.59674 10.2358 5.59674 10.4316 5.60939C10.4348 6.11155 10.4386 6.61372 10.4316 7.11524C8.16222 7.13253 5.89288 7.11524 3.62354 7.12292C3.41281 7.12292 3.20273 7.12292 2.992 7.11524C2.75052 6.82252 2.51161 6.52853 2.26758 6.23837C2.45973 5.80987 2.67366 5.3929 2.88631 4.97592Z" fill="#FDFEFD"/>
              <path d="M18.5689 4.93058C19.4016 4.93058 20.2381 4.91777 21.0727 4.93763C21.1137 5.0305 21.156 5.12337 21.1963 5.21625C20.6199 5.23995 20.0434 5.26172 19.4669 5.26493C19.4618 5.36421 19.4567 5.46477 19.4522 5.56469C20.1376 5.5871 20.8248 5.53971 21.5089 5.59351C21.6516 5.79674 21.7728 6.01417 21.8708 6.24235C21.7318 6.42297 21.5717 6.58759 21.4167 6.75476C21.3526 6.84827 21.2322 6.8297 21.1342 6.83418C20.1734 6.83418 19.2127 6.83418 18.2519 6.83418C18.0072 6.84443 17.8259 6.65548 17.6159 6.56325C17.5947 6.94755 17.6095 7.33506 17.605 7.72065C16.2727 7.7309 14.9392 7.73602 13.6069 7.72065C13.6069 6.99623 13.6037 6.27117 13.6069 5.54675C14.5561 5.54675 15.506 5.54995 16.4552 5.54675C16.4604 5.80296 16.4591 6.06237 16.4552 6.32113C15.8295 6.33458 15.2024 6.32113 14.576 6.32818C14.5504 6.58749 14.5478 6.84856 14.5683 7.10832C15.303 7.12882 16.0383 7.11857 16.7723 7.11281C16.7845 6.59207 16.7723 6.07069 16.7755 5.54995C17.2239 5.54995 17.6722 5.54995 18.1161 5.54995C18.3223 5.76196 18.4882 6.00664 18.6874 6.22441C18.7412 6.30832 18.8514 6.28078 18.9366 6.28847C19.6098 6.28526 20.2817 6.28847 20.9574 6.28847C20.9151 6.17189 20.869 6.05788 20.8197 5.94387C20.2304 5.94387 19.6412 5.94387 19.0519 5.94387C18.8495 5.97269 18.7713 5.75172 18.6676 5.62682C18.4966 5.42954 18.5709 5.16309 18.5689 4.93058Z" fill="#FDFEFD"/>
              <path d="M4.10534 5.00994C4.31132 4.9853 4.51925 4.98144 4.726 4.99841C4.726 5.09321 4.72216 5.19056 4.71767 5.28344C4.51079 5.28728 4.3039 5.28728 4.09766 5.28344C4.09766 5.1912 4.10022 5.10089 4.10534 5.00994Z" fill="#FDFEFD"/>
              <path d="M5.13443 5.00284C5.33736 4.98293 5.5417 4.98186 5.74483 4.99964C5.74483 5.09443 5.74483 5.19179 5.74483 5.28402C5.54115 5.28402 5.33619 5.28402 5.1325 5.28402C5.1293 5.18923 5.13123 5.09635 5.13443 5.00284Z" fill="#FDFEFD"/>
              <path d="M9.79916 5.00181C10.0015 4.98214 10.2053 4.98214 10.4076 5.00181C10.4076 5.09469 10.4076 5.18756 10.4076 5.2798C10.204 5.28556 9.99965 5.28556 9.79532 5.2798C9.79404 5.18948 9.79596 5.09853 9.79916 5.00181Z" fill="#FDFEFD"/>
              <path d="M11.4062 5.8927C11.8149 5.87285 12.2235 5.88566 12.6322 5.88566C12.6668 6.19951 12.6565 6.51592 12.6616 6.83105C12.2447 6.83554 11.829 6.84194 11.4107 6.82721C11.4088 6.51272 11.4101 6.20399 11.4062 5.8927Z" fill="#FDFEFD"/>
              <path d="M18.1153 7.39233C18.3075 7.39233 18.506 7.39233 18.7014 7.40258C18.7014 7.4961 18.7014 7.58897 18.7014 7.68249C18.4938 7.69017 18.2863 7.69209 18.0801 7.68249C18.091 7.58513 18.1031 7.48905 18.1153 7.39233Z" fill="#FDFEFD"/>
              <path d="M19.0451 7.39938C19.2495 7.38868 19.4543 7.38868 19.6587 7.39938C19.6587 7.4961 19.6587 7.59154 19.6587 7.68953C19.4557 7.68953 19.2527 7.68953 19.0503 7.68505C19.0451 7.58897 19.0445 7.49418 19.0451 7.39938Z" fill="#FDFEFD"/>
              <path d="M0.339844 8.23706C8.01916 8.2392 15.6989 8.2392 23.3791 8.23706V8.40616C15.6998 8.40231 8.02001 8.40231 0.339844 8.40616V8.23706Z" fill="#FDFEFD"/>
              <path d="M0.339844 15.5349C8.01916 15.5388 15.6989 15.5388 23.3791 15.5349V15.7053C15.6998 15.7032 8.02001 15.7032 0.339844 15.7053V15.5349Z" fill="#FDFEFD"/>
              <path d="M19.7704 16.2136C20.1771 16.2136 20.5839 16.2136 20.9912 16.2136C20.9852 16.3896 20.9884 16.5658 21.0008 16.7414C21.2615 16.7369 21.5229 16.7414 21.7836 16.7414C21.7868 16.8695 21.7835 16.9976 21.7746 17.1257C21.5056 17.1257 21.2372 17.1257 20.9694 17.1308C20.9694 17.5593 20.9662 17.9885 20.9694 18.417C21.227 18.409 21.4848 18.4139 21.7419 18.4317C21.7398 18.5829 21.7398 18.7347 21.7419 18.8871C21.3852 18.914 21.0271 18.8935 20.6703 18.9012C20.4207 18.9288 20.1688 18.8749 19.9523 18.7475C19.8962 18.7037 19.8508 18.6477 19.8195 18.5838C19.7882 18.5199 19.7719 18.4497 19.7717 18.3786C19.7499 17.977 19.7909 17.5721 19.7474 17.1712C19.5482 17.1763 19.3489 17.1782 19.1504 17.1712C19.1504 17.0277 19.1515 16.8847 19.1536 16.742C19.3541 16.7369 19.5552 16.7388 19.7563 16.7363C19.7659 16.5633 19.7659 16.3885 19.7704 16.2136Z" fill="#FDFEFD"/>
              <path d="M3.44684 17.0423C3.80672 16.8412 4.20569 16.7199 4.61661 16.6868C5.02754 16.6536 5.44079 16.7094 5.82826 16.8502C6.12866 16.9744 6.45917 17.2018 6.47454 17.5509C6.48863 17.98 6.47454 18.4098 6.48222 18.8396C6.08254 18.8652 5.68158 18.8511 5.28126 18.8473C5.27101 18.4681 5.28831 18.0883 5.2755 17.7097C5.27461 17.6242 5.25025 17.5406 5.20507 17.4679C5.15989 17.3953 5.09563 17.3365 5.0193 17.2979C4.69599 17.1566 4.33347 17.1328 3.99447 17.2306C3.7799 17.2908 3.52178 17.4112 3.48655 17.6508C3.46861 18.0556 3.48655 18.4617 3.48014 18.8678C3.08367 18.8716 2.68847 18.8678 2.29199 18.8678C2.26637 18.1856 2.28175 17.5009 2.28367 16.8181C2.66285 16.8181 3.04139 16.8124 3.41993 16.8181C3.4289 16.8943 3.43851 16.968 3.44684 17.0423Z" fill="#FDFEFD"/>
              <path d="M10.7947 17.2341C11.234 16.9016 11.7659 16.7142 12.3166 16.698C12.9726 16.6223 13.6372 16.7103 14.251 16.9542C14.451 17.0355 14.6228 17.1737 14.745 17.3516C14.8673 17.5295 14.9347 17.7394 14.9389 17.9553C13.8974 17.9822 12.854 17.9355 11.8138 17.9784C11.8274 18.0552 11.8573 18.1282 11.9015 18.1925C11.9457 18.2568 12.0032 18.3109 12.07 18.3511C12.3475 18.4727 12.6527 18.5169 12.9533 18.4792C13.2428 18.4792 13.4657 18.2333 13.7597 18.257C14.1312 18.2621 14.5033 18.2493 14.8748 18.2698C14.5269 18.6373 14.0568 18.8651 13.5528 18.9103C12.9404 19.0026 12.3167 18.9878 11.7094 18.8668C11.5038 18.8396 11.3057 18.7719 11.1265 18.6674C10.9474 18.5629 10.7909 18.4238 10.666 18.2583C10.5633 18.0997 10.5199 17.91 10.5433 17.7225C10.5667 17.5351 10.6555 17.3619 10.7941 17.2335M11.8388 17.5787C12.4421 17.6242 13.0493 17.6126 13.654 17.6069C13.5843 17.4673 13.4757 17.3509 13.3412 17.2719C13.2067 17.1929 13.0521 17.1546 12.8963 17.1617C12.6989 17.1311 12.497 17.1537 12.3113 17.2272C12.1256 17.3008 11.9629 17.4225 11.8401 17.58L11.8388 17.5787Z" fill="#FDFEFD"/>
              <path d="M4.57155 8.9646C6.10878 8.9646 7.64601 8.9678 9.18324 8.9646C9.20245 9.79727 9.16659 10.637 9.20117 11.4722C9.43638 11.3324 9.65848 11.1716 9.86475 10.9918C10.7243 10.3513 11.5519 9.67045 12.4159 9.03634C12.5154 9.0167 12.6169 9.00938 12.7182 9.01456C14.659 9.02289 16.601 9.00239 18.5411 9.02481C18.2299 9.2932 17.9038 9.54383 17.5643 9.77549C17.0186 10.22 16.4236 10.6024 15.8811 11.0514C15.6601 11.2365 15.4122 11.3877 15.1842 11.5638C15.1298 11.6496 15.2483 11.7098 15.2918 11.7694C15.7978 12.1928 16.2904 12.6322 16.8073 13.044C17.4164 13.5564 18.0146 14.0791 18.6295 14.5813C18.7077 14.6482 18.777 14.7248 18.8358 14.8093C16.7406 14.8279 14.6455 14.8093 12.5504 14.8182C12.4621 14.8203 12.3738 14.8173 12.2859 14.8093C12.1376 14.6961 12.0018 14.5672 11.8811 14.425C11.2348 13.7845 10.6058 13.1209 9.95954 12.474C9.69565 12.2178 9.45802 11.9302 9.17171 11.6932C9.18116 12.0484 9.16897 12.4039 9.1352 12.7577C9.1288 13.4623 9.1352 14.1668 9.132 14.8714C8.96547 14.8855 8.79957 14.9086 8.63176 14.9092C7.42311 14.9092 6.21318 14.9092 5.00389 14.9092C4.85825 14.9067 4.71295 14.8943 4.56899 14.8721C4.57796 12.9044 4.56194 10.9342 4.57155 8.9646Z" fill="#FAE80C"/>
              </g>
              <defs>
              <clipPath id="clip0_4_3643">
              <rect width="23.6797" height="16" fill="white" transform="translate(0 4)"/>
              </clipPath>
              </defs>
              </svg>
              </span>
                        <span> KNET </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_3668)">
                      <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/>
                      <path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/>
                      <path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/>
                      <path d="M19.7322 15.1538H19.6989V14.9561H19.7482L19.8122 15.0949L19.8666 14.9561H19.9146V15.1525H19.8813V15.0041L19.8288 15.1321H19.7898L19.7322 15.0041V15.1538ZM19.5882 15.1532H19.5594V14.99H19.4922V14.9561H19.6605V14.99H19.5882V15.1532Z" fill="#F69E1E"/>
                      <path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/>
                    </g>
                  <defs>
                  <clipPath id="clip0_4_3668">
                  <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                  </clipPath>
                  </defs>
                </svg>
              </span>
                        <span> Master Card </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_3684)">
                <path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/>
                <path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_4_3684">
                <rect width="23.68" height="16" fill="white" transform="translate(0 4)"/>
                </clipPath>
                </defs>
              </svg>
            </span>
                        <span>
               Visa
             </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.067 8.72078C12.067 9.40758 11.6477 9.8029 10.909 9.8029H9.93871V7.63866H10.913C11.6477 7.63866 12.067 8.02998 12.067 8.72078ZM13.9637 11.2204C13.9637 11.5519 14.2512 11.7675 14.7024 11.7675C15.2774 11.7675 15.7087 11.4041 15.7087 10.893V10.5855L14.7703 10.6454C14.2392 10.6814 13.9637 10.877 13.9637 11.2204ZM23 3.15446V17.21C23 18.2682 22.1415 19.1267 21.0833 19.1267H1.91667C0.858507 19.1267 0 18.2682 0 17.21V3.15446C0 2.0963 0.858507 1.23779 1.91667 1.23779H21.0833C22.1415 1.23779 23 2.0963 23 3.15446ZM5.10313 7.87425C5.43854 7.9022 5.77396 7.70654 5.98559 7.45897C6.19323 7.20342 6.32899 6.86002 6.29306 6.51262C5.99757 6.5246 5.63021 6.70828 5.41858 6.96383C5.22691 7.18345 5.06319 7.53883 5.10313 7.87425ZM7.52292 10.8491C7.51493 10.8411 6.74028 10.5456 6.73229 9.65116C6.72431 8.90446 7.34323 8.54508 7.37118 8.52512C7.01979 8.00602 6.47674 7.95012 6.28906 7.93814C5.80191 7.91019 5.38663 8.21366 5.15504 8.21366C4.91944 8.21366 4.56806 7.95012 4.18472 7.95811C3.68559 7.96609 3.2184 8.2496 2.96684 8.70081C2.44375 9.60324 2.83108 10.9369 3.33819 11.6716C3.58576 12.035 3.88524 12.4343 4.27656 12.4183C4.64792 12.4024 4.79566 12.1788 5.24288 12.1788C5.6941 12.1788 5.82188 12.4183 6.21319 12.4144C6.62049 12.4064 6.87205 12.051 7.12361 11.6876C7.39913 11.2723 7.51493 10.873 7.52292 10.8491ZM12.9295 8.71679C12.9295 7.65463 12.1908 6.9279 11.1366 6.9279H9.09219V12.3744H9.93871V10.5137H11.1087C12.1788 10.5137 12.9295 9.77894 12.9295 8.71679ZM16.5233 9.66314C16.5233 8.87651 15.8924 8.36939 14.926 8.36939C14.0276 8.36939 13.3648 8.88449 13.3408 9.58727H14.1035C14.1674 9.25186 14.4788 9.03224 14.9021 9.03224C15.4212 9.03224 15.7087 9.27182 15.7087 9.71904V10.0185L14.6545 10.0824C13.6722 10.1423 13.1411 10.5456 13.1411 11.2444C13.1411 11.9512 13.6882 12.4183 14.4748 12.4183C15.0059 12.4183 15.497 12.1508 15.7207 11.7236H15.7366V12.3784H16.5193V9.66314H16.5233ZM20.6042 8.4213H19.7457L18.7514 11.6397H18.7354L17.7411 8.4213H16.8507L18.2842 12.3864L18.2083 12.626C18.0806 13.0333 17.8689 13.193 17.4936 13.193C17.4257 13.193 17.2979 13.185 17.246 13.181V13.8359C17.2939 13.8519 17.5056 13.8558 17.5694 13.8558C18.396 13.8558 18.7833 13.5404 19.1227 12.5861L20.6042 8.4213Z" fill="black"/>
              </svg>
            </span>
                        <span> Apple Pay</span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4_3702)">
                  <g clip-path="url(#clip1_4_3702)">
                  <path d="M0.0349266 12.9237C0.208927 16.7667 1.20393 19.8067 3.49993 21.4647C5.78393 23.1127 9.49593 23.6357 13.4089 23.4707C17.2069 23.3107 20.2919 22.3027 21.9439 20.0027C23.5929 17.7057 24.1189 14.3157 23.9779 10.2017C23.8449 6.37073 22.8389 3.28773 20.5699 1.60373C18.3009 -0.080265 14.8899 -0.665265 10.6039 -0.460265C8.65793 -0.367265 6.90193 -0.114265 5.47693 0.456735C4.00693 1.04674 2.87093 1.87873 2.03993 3.03673C0.368927 5.36273 -0.148073 8.87573 0.0349266 12.9237ZM21.3149 9.04873L17.8889 16.0247H16.7079L20.1339 9.04873H21.3149ZM16.6279 9.04974L17.9889 11.8387L17.3969 13.0427L15.4479 9.04974H16.6279ZM12.5209 8.87173C13.9099 8.87173 15.2599 10.0377 15.3039 11.4917V14.2737H14.2599V11.4917C14.2389 10.7077 13.4069 9.92573 12.5209 9.92573C11.5249 9.92573 10.7919 10.7767 10.7919 11.5727C10.7919 12.6997 11.5859 13.2147 12.5209 13.2147H12.8889V14.2737H12.5209C10.9829 14.2727 9.73593 13.2877 9.73593 11.5727C9.73593 10.1737 10.9829 8.87173 12.5209 8.87173ZM3.84893 10.0277C3.84893 9.38873 4.36593 8.87173 5.00393 8.87173H6.60293C8.09293 8.87173 9.32793 10.0807 9.32793 11.5717C9.32793 13.0627 8.17493 14.2727 6.60193 14.2727H6.10693V13.2087H6.60193C7.54793 13.2087 8.23793 12.4757 8.23793 11.5717C8.23793 10.6677 7.50593 9.93474 6.60193 9.93474H5.00293C4.97514 9.9348 4.9481 9.94378 4.92579 9.96033C4.90347 9.97689 4.88705 10.0002 4.87893 10.0267V15.8337H3.84893V10.0277Z" fill="#2F55CC"/>
                  </g>
                  </g>
                  <defs>
                  <clipPath id="clip0_4_3702">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  <clipPath id="clip1_4_3702">
                  <rect width="24" height="24" fill="white" transform="translate(0 -0.5)"/>
                  </clipPath>
                  </defs>
                  </svg>
            </span>
                        <span> Samsung Pay </span>
                    </label>
                    <label class="flex items-center gap-1.5 cursor-pointer text-md font-bold">
                        <input type="radio" name="ins-pay" class="accent-[#21395D] w-[16px] h-[16px] border border-[#b9bbc6]"/>
                        <span>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1675 0.467285C10.9755 0.467226 9.81032 0.820626 8.81922 1.4828C7.82812 2.14497 7.05564 3.08616 6.59946 4.18737C6.14328 5.28857 6.02389 6.50032 6.25639 7.66937C6.48889 8.83843 7.06284 9.91228 7.90566 10.7551C8.74847 11.598 9.8223 12.172 10.9913 12.4046C12.1604 12.6371 13.3721 12.5178 14.4734 12.0617C15.5746 11.6055 16.5158 10.8331 17.1781 9.84204C17.8403 8.85097 18.1937 7.68579 18.1937 6.49384C18.1937 4.89555 17.5588 3.36272 16.4287 2.23253C15.2986 1.10234 13.7658 0.467365 12.1675 0.467285ZM11.6956 6.06712H12.6221C13.0374 6.06673 13.4357 6.23131 13.7296 6.52465C14.0235 6.81799 14.1888 7.21606 14.1892 7.63129C14.1896 8.04651 14.025 8.44489 13.7317 8.73878C13.4384 9.03266 13.0403 9.19798 12.6251 9.19837V9.96971C12.6267 10.0372 12.6148 10.1044 12.5901 10.1672C12.5654 10.23 12.5284 10.2873 12.4813 10.3356C12.4341 10.3839 12.3777 10.4223 12.3155 10.4486C12.2533 10.4748 12.1865 10.4883 12.119 10.4883C12.0514 10.4883 11.9846 10.4748 11.9224 10.4486C11.8602 10.4223 11.8038 10.3839 11.7566 10.3356C11.7095 10.2873 11.6725 10.23 11.6478 10.1672C11.6231 10.1044 11.6112 10.0372 11.6129 9.96971V9.19856H10.5567C10.4224 9.19856 10.2937 9.14522 10.1987 9.05028C10.1038 8.95534 10.0505 8.82658 10.0505 8.69231C10.0505 8.55804 10.1038 8.42928 10.1987 8.33434C10.2937 8.2394 10.4224 8.18606 10.5567 8.18606H12.6221C12.6953 8.18691 12.7679 8.17323 12.8358 8.14582C12.9036 8.11841 12.9654 8.0778 13.0174 8.02635C13.0695 7.9749 13.1108 7.91364 13.139 7.84611C13.1672 7.77858 13.1817 7.70612 13.1817 7.63294C13.1817 7.55975 13.1672 7.48729 13.139 7.41976C13.1108 7.35223 13.0695 7.29097 13.0174 7.23952C12.9654 7.18807 12.9036 7.14747 12.8358 7.12005C12.7679 7.09264 12.6953 7.07896 12.6221 7.07981H11.6956C11.2667 7.08075 10.8544 6.91381 10.5469 6.61467C10.2395 6.31554 10.0613 5.90798 10.0505 5.47916C10.0397 5.05034 10.1971 4.63431 10.4891 4.32006C10.781 4.00581 11.1844 3.8183 11.6129 3.79762V3.01804C11.6112 2.95054 11.6231 2.88339 11.6478 2.82055C11.6725 2.75771 11.7095 2.70044 11.7566 2.65212C11.8038 2.6038 11.8602 2.5654 11.9224 2.53919C11.9846 2.51297 12.0514 2.49946 12.119 2.49946C12.1865 2.49946 12.2533 2.51297 12.3155 2.53919C12.3777 2.5654 12.4341 2.6038 12.4813 2.65212C12.5284 2.70044 12.5654 2.75771 12.5901 2.82055C12.6148 2.88339 12.6267 2.95054 12.6251 3.01804V3.78907H13.7783C13.9125 3.78907 14.0413 3.84241 14.1362 3.93735C14.2312 4.03229 14.2845 4.16106 14.2845 4.29532C14.2845 4.42959 14.2312 4.55836 14.1362 4.6533C14.0413 4.74824 13.9125 4.80157 13.7783 4.80157H11.6956C11.5278 4.80157 11.3669 4.86824 11.2482 4.9869C11.1295 5.10556 11.0629 5.2665 11.0629 5.43431C11.0629 5.60212 11.1295 5.76306 11.2482 5.88172C11.3669 6.00038 11.5278 6.06712 11.6956 6.06712Z" fill="black"/>
                <path d="M5.66494 13.7761H3.20577C3.15436 13.7761 3.10346 13.7862 3.05597 13.8059C3.00848 13.8256 2.96533 13.8544 2.92899 13.8908C2.89265 13.9271 2.86383 13.9703 2.84418 14.0178C2.82452 14.0653 2.81442 14.1162 2.81445 14.1676V22.5605C2.81446 22.6643 2.85569 22.7638 2.92908 22.8372C3.00246 22.9106 3.10199 22.9518 3.20577 22.9518H5.66494C5.89113 22.9518 6.10804 22.8619 6.26796 22.7019C6.42789 22.542 6.51773 22.3251 6.51773 22.0989V14.6289C6.51768 14.4027 6.42781 14.1858 6.2679 14.0259C6.10798 13.866 5.8911 13.7762 5.66494 13.7761Z" fill="black"/>
                <path d="M21.1228 14.7616C20.9928 14.5637 20.8155 14.4012 20.607 14.2889C20.3986 14.1765 20.1654 14.1179 19.9286 14.1182H18.9648C18.5513 14.1173 18.1469 14.2397 17.8032 14.4696C17.4596 14.6996 17.1922 15.0267 17.0352 15.4093C16.9421 15.6317 16.8122 15.8368 16.6512 16.0163C16.3775 16.4366 16.0071 16.7852 15.5711 17.0331C15.135 17.2809 14.646 17.4208 14.1448 17.441L11.2902 17.4412C11.1559 17.4412 11.0272 17.3878 10.9322 17.2929C10.8373 17.1979 10.784 17.0692 10.784 16.9349C10.784 16.8006 10.8373 16.6719 10.9322 16.5769C11.0272 16.482 11.1559 16.4287 11.2902 16.4287H14.1313C14.4963 16.4193 14.8509 16.3052 15.1529 16.0999V16.0828C15.1539 15.8252 15.1041 15.5699 15.0062 15.3316C14.9083 15.0933 14.7643 14.8767 14.5825 14.6941C14.4007 14.5116 14.1846 14.3668 13.9467 14.2679C13.7088 14.1691 13.4537 14.1182 13.1961 14.1182H11.1013C10.7186 14.1171 10.3394 14.1917 9.98557 14.3378C9.63178 14.4839 9.3104 14.6986 9.03995 14.9694L8.98647 15.0227C8.59013 15.4184 8.08119 15.6821 7.5293 15.7775V21.3693H15.1686C16.3012 21.37 17.4092 21.0383 18.3551 20.4153C19.301 19.7922 20.0433 18.9052 20.4898 17.8643L21.2424 16.1127C21.3362 15.8953 21.3744 15.6579 21.3535 15.422C21.3327 15.1861 21.2534 14.9592 21.1228 14.7616Z" fill="black"/>
              </svg>
            </span>
                        <span> Cash </span>
                    </label>
                </div>
            </div>
            <div class="border border-gray-200 rounded-2xl p-6">
                <h3 class="text-base font-bold text-black mb-4">Totals</h3>
                <div class="flex justify-between text-sm mb-4">
                    <span>TOTAL</span>
                    <span class="font-bold">2000 KWD</span>
                </div>
                <button class="w-full bg-[#21395D] text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">Pay Now</button>
            </div>
        </div>
    </div>
</div>

@endsection
