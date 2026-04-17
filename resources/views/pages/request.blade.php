@extends('layouts.app')

@section('title', 'add to cart')

@section('content')
    <div class="max-w-[90%] mx-auto py-10 px-4 mt-[130px]">

        <nav class="flex items-center gap-2 text-sm mb-6 text-gray-500">
            <a href="{{ route('home.index') }}" class="text-[18px] text-[#a7a7a7]">Home</a>
            <span class="text-[#a7a7a7]">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
            <span class="text-[#21395D] font-semibold underline text-[23px] md:text-[29px] whitespace-nowrap">Request Page</span>
        </nav>

        <h1 class="text-3xl font-bold text-black mb-8">Send Request</h1>

        <div class="bg-white rounded-2xl border border-gray-200 p-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-sm font-semibold mb-1">Services</label>
                    <div class="relative">
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D] appearance-none bg-white">
                            <option>General Contracting</option>
                            <option>Water Tank</option>
                            <option>Soil</option>
                            <option>Bricks</option>
                            <option>Insurance</option>
                        </select>
                        <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Service Type</label>
                    <div class="relative">
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400 outline-none focus:border-[#21395D] appearance-none bg-white">
                            <option value="">Choose Type</option>
                            <option>Type A</option>
                            <option>Type B</option>
                            <option>Type C</option>
                        </select>
                        <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[1px] max-w-full bg-gray-200 my-5"></div>

            <div class="mb-8">
                <h2 class="text-base font-bold text-[#21395D] mb-5 text-[29px]">Project Information</h2>

                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-2">Project Type</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="project-type" value="villa" class="accent-[#21395D] w-4 h-4"/> Villa
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="project-type" value="building" checked class="accent-[#21395D] w-4 h-4"/> Building
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="project-type" value="annex" class="accent-[#21395D] w-4 h-4"/> Annex
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="project-type" value="commercial" class="accent-[#21395D] w-4 h-4"/> Commercial
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Land Area</label>
                        <input type="text" placeholder="Enter Area" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Approximate Built-up Area</label>
                        <input type="text" placeholder="Enter Area" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D]"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Number of Floors</label>
                        <input type="text" placeholder="Enter Number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Location</label>
                        <div class="flex items-center gap-6 h-[46px]">
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                                <input type="radio" name="location" value="governorate" class="accent-[#21395D] w-4 h-4"/> Governorate
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                                <input type="radio" name="location" value="area" checked class="accent-[#21395D] w-4 h-4"/> Area
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Enter the Location</label>
                    <input type="text" placeholder="Enter Location" class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D]"/>
                </div>
            </div>

            <div class="h-[1px] max-w-full bg-gray-200 my-5"></div>


            <div class="mb-8">
                <h2 class="text-base font-bold text-[#21395D] mb-5 text-[29px]">Design Status</h2>

                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-2">Do you have ready drawings?</label>
                    <div class="flex gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="drawings" value="yes" checked class="accent-[#21395D] w-4 h-4"/> Yes
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="drawings" value="no" class="accent-[#21395D] w-4 h-4"/> No
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Upload file</label>
                    <label class="flex items-center justify-between border border-gray-300 rounded-lg px-4 py-3 w-full md:w-1/2 text-sm text-gray-400 cursor-pointer hover:border-[#21395D] transition-colors bg-white">
                        <span>Upload File</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16.44 8.9C20.04 9.21 21.51 11.06 21.51 15.11v.13c0 4.47-1.79 6.26-6.26 6.26H8.74c-4.47 0-6.26-1.79-6.26-6.26v-.13c0-4.02 1.45-5.87 4.99-6.2"/>
                            <path d="M12 15V3.62M15.35 5.85L12 2.5 8.65 5.85"/>
                        </svg>
                        <input type="file" class="hidden"/>
                    </label>
                </div>
            </div>

            <div class="mb-8">
                <h2 class="text-base font-bold text-[#21395D] mb-5 text-[29px]">Permits</h2>

                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-2">Is the permit issued?</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="permit" value="yes" checked class="accent-[#21395D] w-4 h-4"/> Yes
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="permit" value="no" class="accent-[#21395D] w-4 h-4"/> No
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="permit" value="inprogress" class="accent-[#21395D] w-4 h-4"/> In progress
                        </label>
                    </div>
                </div>

                <div class="h-[1px] max-w-full bg-gray-200 my-5"></div>

                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-2">Contractor Classification</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="classification" value="A" checked class="accent-[#21395D] w-4 h-4"/> A
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="classification" value="B" class="accent-[#21395D] w-4 h-4"/> B
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="classification" value="C" class="accent-[#21395D] w-4 h-4"/> C
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                            <input type="radio" name="classification" value="D" class="accent-[#21395D] w-4 h-4"/> D
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Estimated Budget</label>
                        <input type="text" placeholder="Enter Budget" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#21395D]"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Construction Materials</label>
                        <div class="flex items-center gap-6 h-[46px]">
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                                <input type="radio" name="materials" value="contractor" class="accent-[#21395D] w-4 h-4"/> from contractor
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium">
                                <input type="radio" name="materials" value="personal" checked class="accent-[#21395D] w-4 h-4"/> Personal funding
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Required Delivery Date</label>
                    <div class="relative w-full md:w-1/2">
                        <input type="date" id="dateInput" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-400  outline-none focus:border-[#21395D] bg-white appearance-none cursor-pointer"/>
                        <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66602 1.66699V4.16699" stroke="#111" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.334 1.66699V4.16699" stroke="#111" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.91602 7.5752H17.0827" stroke="#111" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 7.08366V14.167C17.5 16.667 16.25 18.3337 13.3333 18.3337H6.66667C3.75 18.3337 2.5 16.667 2.5 14.167V7.08366C2.5 4.58366 3.75 2.91699 6.66667 2.91699H13.3333C16.25 2.91699 17.5 4.58366 17.5 7.08366Z" stroke="#111" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.0781 11.4167H13.0856" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.0781 13.9167H13.0856" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99607 11.4167H10.0036" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99607 13.9167H10.0036" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.91209 11.4167H6.91957" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.91209 13.9167H6.91957" stroke="#111" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="document.getElementById('paymentModal').classList.remove('hidden')" class="w-full bg-[#21395D] text-white py-4 rounded-xl font-semibold text-base hover:bg-[#1a2e4a] transition-colors">
                Pay to Send Request
            </button>

        </div>
    </div>
    <div id="paymentModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" onclick="document.getElementById('paymentModal').classList.add('hidden')"></div>

        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-sm mx-4 p-6 z-10">

            <div class="flex flex-col gap-3 bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6">
                <div class="flex-shrink-0 mt-0.5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 8V13" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9961 16H12.0051" stroke="#20395D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-gray-500 leading-relaxed">
                    You Will Receive 6 Quotation From 6 Contractors To Choose Between. If You Want More Quotation You Will Pay 1 KD For Any Other Quotation
                </p>
            </div>

            <h3 class="text-base font-bold text-black mb-4">Payment Methods</h3>

            <div class="flex flex-col gap-3 mb-6 pb-6 border-b border-gray-200">

                <label class="flex items-center gap-3 cursor-pointer text-sm font-semibold">
                    <input type="radio" name="pay-method" class="accent-primary w-4 h-4" checked/>
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
                    KNET
                </label>

                <label class="flex items-center gap-3 cursor-pointer text-sm font-semibold">
                    <input type="radio" name="pay-method" class="accent-primary w-4 h-4"/>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#mc)"><path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#093A5A"/><path d="M14.2937 7.99609H9.39258V16.0025H14.2937V7.99609Z" fill="#F26122"/><path d="M9.92142 11.9991C9.91743 11.23 10.0882 10.4701 10.4208 9.77659C10.7534 9.08312 11.2391 8.47425 11.8414 7.99593C11.0902 7.40503 10.1878 7.03745 9.23748 6.93522C8.28716 6.833 7.32726 7.00024 6.46751 7.41783C5.60776 7.83543 4.88287 8.48652 4.37572 9.29667C3.86856 10.1068 3.59961 11.0433 3.59961 11.9991C3.59961 12.9549 3.86856 13.8914 4.37572 14.7016C4.88287 15.5117 5.60776 16.1628 6.46751 16.5804C7.32726 16.998 8.28716 17.1653 9.23748 17.063C10.1878 16.9608 11.0902 16.5932 11.8414 16.0023C11.2391 15.524 10.7534 14.9151 10.4208 14.2217C10.0882 13.5282 9.91743 12.7682 9.92142 11.9991Z" fill="#EA1D25"/><path d="M20.0786 11.9994C20.0779 12.9543 19.8087 13.8898 19.3018 14.6991C18.7949 15.5083 18.0707 16.1588 17.2118 16.5762C16.3529 16.9936 15.394 17.1612 14.4445 17.0598C13.495 16.9583 12.5931 16.592 11.8418 16.0026C12.902 15.1676 13.5875 13.9459 13.7477 12.6059C13.9079 11.2659 13.5297 9.91709 12.6962 8.8557C12.4472 8.53623 12.1603 8.24825 11.8418 7.9981C12.593 7.40878 13.4947 7.04248 14.444 6.94097C15.3934 6.83947 16.3521 7.00686 17.2109 7.42405C18.0697 7.84123 18.794 8.49141 19.301 9.3004C19.8081 10.1094 20.0775 11.0446 20.0786 11.9994Z" fill="#F69E1E"/></g><defs><clipPath id="mc"><rect width="23.68" height="16" fill="white" transform="translate(0 4)"/></clipPath></defs></svg>
                    Master Card
                </label>

                <label class="flex items-center gap-3 cursor-pointer text-sm font-semibold">
                    <input type="radio" name="pay-method" class="accent-primary w-4 h-4"/>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#visa)"><path d="M22.0803 4.31934H1.60031C0.893388 4.31934 0.320312 4.89241 0.320312 5.59934V18.3993C0.320312 19.1063 0.893388 19.6793 1.60031 19.6793H22.0803C22.7872 19.6793 23.3603 19.1063 23.3603 18.3993V5.59934C23.3603 4.89241 22.7872 4.31934 22.0803 4.31934Z" fill="#2A2A6C"/><path d="M12.8832 14.2796C12.4555 14.2799 12.0315 14.2 11.6333 14.044L11.84 13.084C12.1905 13.273 12.5823 13.3722 12.9805 13.3727H13.0112C13.353 13.3676 13.6979 13.2306 13.6979 12.9362C13.7024 12.748 13.5411 12.5983 13.1027 12.3839C12.6643 12.1695 12.0992 11.822 12.0992 11.182C12.0992 10.3173 12.889 9.70996 14.0192 9.70996C14.3865 9.711 14.7506 9.77776 15.0944 9.90708L14.8928 10.8671C14.6046 10.731 14.2899 10.6602 13.9712 10.6597C13.9008 10.6597 13.8298 10.6629 13.7594 10.67C13.4278 10.7141 13.2794 10.8876 13.2794 11.0399C13.2794 11.2261 13.5174 11.3503 13.8182 11.5084C14.2957 11.7586 14.8902 12.0696 14.887 12.8018L14.9114 12.7634C14.9069 13.685 14.1203 14.2802 12.9101 14.2802L12.8832 14.2796ZM16.064 14.2412H14.8544L16.5779 10.1279C16.6166 10.032 16.6829 9.94986 16.7683 9.89174C16.8538 9.83363 16.9546 9.80221 17.0579 9.80148H18.0179L18.9485 14.2412H17.8835L17.7446 13.5788H16.3008L16.064 14.2412ZM17.2064 11.0008L16.6016 12.6648H17.5565L17.2064 11.0008ZM10.8128 14.2264H9.6608L10.6208 9.78676H11.7728L10.8128 14.2264ZM8.29312 14.2124H7.04L6.1248 10.6648C6.11643 10.5818 6.08667 10.5024 6.03844 10.4343C5.99021 10.3662 5.92514 10.3118 5.8496 10.2764C5.48919 10.1045 5.1086 9.97876 4.7168 9.90196L4.7456 9.77396H6.7008C6.8281 9.77344 6.95145 9.81822 7.04877 9.9003C7.14608 9.98237 7.21103 10.0964 7.232 10.222L7.712 12.7896L8.90752 9.77396H10.1568L8.29312 14.2124Z" fill="white"/></g><defs><clipPath id="visa"><rect width="23.68" height="16" fill="white" transform="translate(0 4)"/></clipPath></defs></svg>
                    Visa
                </label>

            </div>

            <h3 class="text-base font-semibold text-black mb-4">Totals</h3>
            <div class="flex justify-between text-sm mb-2">
                <span class="text-red-400">REQUEST SERVICE</span>
                <span class="text-red-400">5 KWD</span>
            </div>
            <div class="flex justify-between text-sm mb-6">
                <span>TOTAL</span>
                <span>5 KWD</span>
            </div>

            <button onclick="document.getElementById('paymentModal').classList.add('hidden'); document.getElementById('successModal').classList.remove('hidden');" class="w-full bg-primary text-white py-3 rounded-xl font-bold text-sm hover:bg-[#1a2e4a] transition-colors">
                Pay
            </button>

        </div>
    </div>
@endsection
