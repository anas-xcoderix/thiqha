@extends('layouts.app')

@section('title', 'add to cart')

@section('content')
    <div class="max-w-[90%] mx-auto py-10 px-4 mt-[130px]">

        <nav class="flex items-center gap-2 text-sm mb-6 text-gray-500">
            <a href="{{ route('home') }}" class="text-[18px] text-[#a7a7a7]">Home</a>
            <span class="text-[#a7a7a7]">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
            <span class="text-[#21395D] font-semibold underline text-[29px]">Request Page</span>
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

            <button class="w-full bg-[#21395D] text-white py-4 rounded-xl font-semibold text-base hover:bg-[#1a2e4a] transition-colors">
                Pay to Send Request
            </button>

        </div>
    </div>

@endsection
