@extends('layouts.app')

@section('title', __('Profile'))

@section('content')
    <input type="radio" name="profile-tab" id="tab-edit-info" class="hidden" checked/>
    <input type="radio" name="profile-tab" id="tab-addresses" class="hidden"/>
    <input type="radio" name="profile-tab" id="tab-orders" class="hidden"/>
    <input type="radio" name="profile-tab" id="tab-requests" class="hidden"/>
    <input type="radio" name="profile-tab" id="tab-quotations" class="hidden"/>
    <input type="radio" name="profile-tab" id="tab-favourite" class="hidden"/>

    <div class="flex flex-col md:flex-row gap-6 lg:max-w-[95%] md:px-3 lg:px-0 mx-auto my-[180px]">

        <div class="w-full md:w-[311px] md:h-[660px]">
            <div class=" mx-3 md:mx-0 bg-[#f5f9ff] rounded-[20px] flex flex-col px-5 pt-8 pb-6 shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] shrink-0">
                <div class="flex flex-col items-center mb-7">
                    <div class="relative flex items-center justify-center mb-3 overflow-hidden">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 56C43.464 56 56 43.464 56 28C56 12.536 43.464 0 28 0C12.536 0 0 12.536 0 28C0 43.464 12.536 56 28 56Z" fill="#838383"/>
                            <g opacity="0.2">
                                <path d="M38.4158 41.6001C35.0724 40.1476 33.8509 37.8884 33.4781 35.9398C35.8861 34.0016 37.8033 30.9032 38.8576 27.5634C39.9418 26.1817 40.5726 24.7406 40.5726 23.5209C40.5726 22.6853 40.269 22.0806 39.737 21.6326C39.5594 14.5399 34.5378 8.84625 28.3279 8.75787C28.2806 8.75787 28.2334 8.75 28.1853 8.75C28.166 8.75 28.1476 8.7535 28.1284 8.7535C21.9579 8.78762 16.9433 14.3622 16.644 21.3614C15.8705 21.8234 15.4243 22.5033 15.4243 23.5217C15.4243 24.9576 16.2923 26.698 17.7544 28.2888C18.793 31.1999 20.4826 33.8713 22.5669 35.672C22.2571 37.6775 21.0802 40.0811 17.582 41.601C15.6929 42.4217 12.2401 43.1594 10.75 43.9189C14.5668 48.0918 21.796 50.7168 27.8904 50.7483L27.977 50.7509C27.984 50.7491 27.9919 50.75 27.9989 50.75C34.1361 50.75 41.4083 48.1163 45.2478 43.918C43.7576 43.1585 40.304 42.4209 38.4158 41.6001Z" fill="#838383"/>
                            </g>
                            <path d="M38.4158 39.8501C35.0724 38.3976 33.8509 36.1384 33.4781 34.1898C35.8861 32.2516 37.8033 29.1532 38.8576 25.8134C39.9418 24.4317 40.5726 22.9906 40.5726 21.7709C40.5726 20.9353 40.269 20.3306 39.737 19.8826C39.5603 12.7908 34.5386 7.09625 28.3296 7.00875C28.2806 7.00788 28.2334 7 28.1853 7C28.166 7 28.1476 7.0035 28.1284 7.0035C21.9579 7.03762 16.9433 12.6122 16.644 19.6114C15.8705 20.0734 15.4243 20.7533 15.4243 21.7717C15.4243 23.2076 16.2923 24.948 17.7544 26.5387C18.793 29.4499 20.4826 32.1213 22.5669 33.922C22.2571 35.9275 21.0802 38.3311 17.582 39.851C15.6929 40.6717 12.2401 41.4094 10.75 42.1689C14.5668 46.3418 21.796 48.9668 27.8904 48.9983L27.977 49.0009C27.984 48.9991 27.9919 49 27.9989 49C34.1361 49 41.4083 46.3663 45.2478 42.168C43.7576 41.4085 40.304 40.6709 38.4158 39.8501Z" fill="white"/>
                        </svg>
                        <div class="absolute bottom-0 right-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0418 3.02001L8.16183 10.9C7.86183 11.2 7.56183 11.79 7.50183 12.22L7.07183 15.23C6.91183 16.32 7.68183 17.08 8.77183 16.93L11.7818 16.5C12.2018 16.44 12.7918 16.14 13.1018 15.84L20.9818 7.96001C22.3418 6.60001 22.9818 5.02001 20.9818 3.02001C18.9818 1.02001 17.4018 1.66001 16.0418 3.02001Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    @include('profile.partials.sidebar-user', ['user' => $user])
                </div>

                <div class="flex flex-col gap-1 flex-1">
                    <label for="tab-edit-info" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.0418 3.02001L8.16183 10.9C7.86183 11.2 7.56183 11.79 7.50183 12.22L7.07183 15.23C6.91183 16.32 7.68183 17.08 8.77183 16.93L11.7818 16.5C12.2018 16.44 12.7918 16.14 13.1018 15.84L20.9818 7.96001C22.3418 6.60001 22.9818 5.02001 20.9818 3.02001C18.9818 1.02001 17.4018 1.66001 16.0418 3.02001Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Edit Info</span>
                    </label>
                    <label for="tab-addresses" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9989 13.4299C13.722 13.4299 15.1189 12.0331 15.1189 10.3099C15.1189 8.58681 13.722 7.18994 11.9989 7.18994C10.2758 7.18994 8.87891 8.58681 8.87891 10.3099C8.87891 12.0331 10.2758 13.4299 11.9989 13.4299Z" stroke-width="1.5"/>
                            <path d="M3.62166 8.49C5.59166 -0.169998 18.4217 -0.159997 20.3817 8.5C21.5317 13.58 18.3717 17.88 15.6017 20.54C13.5917 22.48 10.4117 22.48 8.39166 20.54C5.63166 17.88 2.47166 13.57 3.62166 8.49Z" stroke-width="1.5"/>
                        </svg>
                        <span>My Addresses</span>
                    </label>
                    <label for="tab-orders" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.17188 7.43994L12.0019 12.5499L20.7719 7.46991" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 21.61V12.54" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.9306 2.48L4.59061 5.45003C3.38061 6.12003 2.39062 7.80001 2.39062 9.18001V14.83C2.39062 16.21 3.38061 17.89 4.59061 18.56L9.9306 21.53C11.0706 22.16 12.9406 22.16 14.0806 21.53L19.4206 18.56C20.6306 17.89 21.6206 16.21 21.6206 14.83V9.18001C21.6206 7.80001 20.6306 6.12003 19.4206 5.45003L14.0806 2.48C12.9306 1.84 11.0706 1.84 9.9306 2.48Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0017 13.2401V9.58014L7.51172 4.1001" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>My Orders</span>
                    </label>
                    <label for="tab-requests" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.75 9H8.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.75 15H8.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>My Requests</span>
                    </label>
                    <label for="tab-quotations" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 10V15C22 20 20 22 15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 10H18C15 10 14 9 14 6V2L22 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 13H13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 17H11" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>My Quotations</span>
                    </label>
                    <label for="tab-favourite" class="nav-label flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Favourite</span>
                    </label>
                </div>

                <div class="mt-auto pt-4">
                    <div class="h-[0.5px] bg-primary opacity-15 mb-3"></div>
                    <a href="{{ route('logout') }}" class="inline-block text-[14px] text-gray-400 hover:text-primary cursor-pointer px-4 transition">{{ __('Log out') }}</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6 flex-1 px-3 md:px-0 max-h-full">

            <div id="panel-edit-info" class="flex flex-col space-y-6">
                @include('profile.partials.account-forms', ['user' => $user])
            </div>

            <div id="panel-addresses" class="gap-6">
                @include('profile.partials.addresses-panel', ['user' => $user])
            </div>

            <div id="panel-orders">
                <div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-7 w-full 2xl:max-w-[90rem] min-h-[169px]">
                    <p class="text-[20px] font-bold">My orders</p>
                    <div class="w-full xl:max-w-4xl 2xl:max-w-full mx-auto bg-white border rounded-xl p-2 flex flex-col lg:flex-row items-start gap-4 my-4">
                        <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full md:max-w-[328px] lg:max-w-[156px] h-[154px] rounded-lg object-cover"/>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div class="flex flex-col md:flex-row items-center justify-end gap-3">
                                    <h2 class="font-semibold text-[16px]">Products</h2>
                                    <span class="inline-block mt-1 px-3 py-1 text- lg:text-[18px] bg-[#FFF0B3] text-[#FF8D28] rounded-full whitespace-nowrap">On the way</span>
                                </div>
                                <div class="flex flex-col md:justify-between md:space-x-5 md:pl-10 lg:pl-0">
                                    <button class="px-5 py-1 border border-[#20395d] rounded-md font-bold text-md text-[#20395d]">View</button>
                                    <button class="text-gray-500 text-sm font-semibold hover:text-red-500 mt-4 md:mt-0 ml-5 md:ml-0 md:mt-4">cancel</button>
                                </div>
                            </div>
                            <div class="flex justify-between md:-mt-[2rem]">
                                <div class="mt-1 text-sm text-gray-600 space-y-1">
                                    <p>QTY : 2</p>
                                    <p>TOTAL PRICE : <span class="font-bold text-[#20395d]">200 KWD</span></p>
                                    <div class="flex items-center gap-2"><span>COLOR :</span><span class="w-3 h-3 bg-blue-600 rounded-full inline-block"></span></div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <span class="px-4 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Bricks</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:max-w-4xl 2xl:max-w-full mx-auto bg-white border rounded-xl p-2 flex flex-col lg:flex-row items-start gap-4 my-4">
                        <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full md:max-w-[328px] lg:max-w-[156px] h-[154px] rounded-lg object-cover"/>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div class="flex flex-col md:flex-row items-center justify-end gap-3">
                                    <h2 class="font-semibold text-[16px]">Products</h2>
                                    <span class="inline-block mt-1 px-3 py-1 text- lg:text-[18px] bg-[#c3efce] text-[#34c759] rounded-full whitespace-nowrap">On the way</span>
                                </div>
                                <div class="flex flex-col md:justify-between md:space-x-5 md:pl-10 lg:pl-0">
                                    <button class="px-5 py-1 border border-[#20395d] rounded-md font-bold text-md text-[#20395d]">View</button>
                                    <button class="text-gray-500 text-sm font-semibold hover:text-red-500 mt-4 md:mt-0 ml-5 md:ml-0 md:mt-4">cancel</button>
                                </div>
                            </div>
                            <div class="flex justify-between md:-mt-[2rem]">
                                <div class="mt-1 text-sm text-gray-600 space-y-1">
                                    <p>QTY : 2</p>
                                    <p>TOTAL PRICE : <span class="font-bold text-[#20395d]">200 KWD</span></p>
                                    <div class="flex items-center gap-2"><span>COLOR :</span><span class="w-3 h-3 bg-blue-600 rounded-full inline-block"></span></div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <span class="px-4 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Bricks</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:max-w-4xl 2xl:max-w-full mx-auto bg-white border rounded-xl p-2 flex flex-col lg:flex-row items-start gap-4 my-4">
                        <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full md:max-w-[328px] lg:max-w-[156px] h-[154px] rounded-lg object-cover"/>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div class="flex flex-col md:flex-row items-center justify-end gap-3">
                                    <h2 class="font-semibold text-[16px]">Products</h2>
                                    <span class="inline-block mt-1 px-3 py-1 text- lg:text-[18px] bg-[#ffc4c5] text-[#FF383c] rounded-full whitespace-nowrap">On the way</span>
                                </div>
                                <div class="flex flex-col justify-between md:space-x-5 md:pl-10 lg:pl-0">
                                    <button class="px-5 py-1 border border-[#20395d] rounded-md font-bold text-md text-[#20395d]">View</button>
                                    <button class="text-gray-500 text-sm font-semibold hover:text-red-500 mt-4 md:mt-0 ml-5 md:ml-0 md:mt-4">cancel</button>
                                </div>
                            </div>
                            <div class="flex justify-between md:-mt-[2rem]">
                                <div class="mt-1 text-sm text-gray-600 space-y-1">
                                    <p>QTY : 2</p>
                                    <p>TOTAL PRICE : <span class="font-bold text-[#20395d]">200 KWD</span></p>
                                    <div class="flex items-center gap-2"><span>COLOR :</span><span class="w-3 h-3 bg-blue-600 rounded-full inline-block"></span></div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <span class="px-4 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Bricks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-requests">
                <div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-6 py-6 w-full 2xl:max-w-[90rem] min-h-[200px] requests-wrapper">

                    <p class="text-[20px] font-bold mb-4">My Requests</p>
                    <h1 class="text-[#a6a6a6] text-[20px] font-bold mb-5">2/2/206</h1>
                    <div id="requests-list">
                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                        <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] font-bold"> Mohan Nasser </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] font-bold"> 200 KWD </span></p>
                                        <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] font-bold"> 3 weeks</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-3">
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                    </button>
                                    <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                    <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="w-[70px] max-w-[90px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="text-[#20395d] font-bold">
                                    1 KD
                                </div>
                                <button class="bg-[#20395d] text-white rounded-md px-4 py-1 md:px-6">
                                    pay
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="w-[70px] max-w-[90px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="text-[#20395d] font-bold">
                                    1 KD
                                </div>
                                <button class="bg-[#20395d] text-white rounded-md px-4 py-1 md:px-6">
                                    pay
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="w-[70px] max-w-[90px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="text-[#20395d] font-bold">
                                    1 KD
                                </div>
                                <button class="bg-[#20395d] text-white rounded-md px-4 py-1 md:px-6">
                                    pay
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between border rounded-xl p-4 mb-3 w-full">
                            <div>
                                <div class="flex items-center gap-2 md:gap-4">
                                    <img src="{{ asset('images/checkout/bricks.png') }}" class="w-[70px] max-w-[90px] rounded-full object-cover" />
                                    <div class="md:space-y-2">
                                        <h3 class="font-semibold text-[10px] md:text-[14px]">Company 1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="text-[#20395d] font-bold">
                                    1 KD
                                </div>
                                <button class="bg-[#20395d] text-white rounded-md px-4 py-1 md:px-6">
                                    pay
                                </button>
                            </div>
                        </div>

                    </div>

                    <div id="company-detail-panel" class="company-detail-panel">
                        <div class="flex items-center gap-2 mb-5">
                            <button id="back-btn" class="flex items-center gap-1 text-[#20395d] font-semibold text-[15px]">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 19L8 12L15 5" stroke="#20395D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <h2 id="detail-company-name" class="text-[18px] font-bold text-gray-800">Company 1</h2>
                        </div>

                        <div class="border border-gray-200 rounded-2xl p-5 mb-5">
                            <div class="flex items-start gap-4 mb-5">
                                <img src="{{ asset('images/checkout/bricks.png') }}" class="w-[80px] h-[80px] rounded-xl object-cover" />
                                <div class="space-y-1.5">
                                    <h3 id="detail-company-title" class="font-bold text-[10px] md:text-[14px] text-[#20395d] underline cursor-pointer">Company 1</h3>
                                    <p class="text-xs md:text-sm text-gray-500">Contractor Name : <span id="detail-contractor" class="text-[#20395d] font-semibold">Mohan Nasser</span></p>
                                    <p class="text-xs md:text-sm text-gray-500">Total Price : <span id="detail-price" class="text-[#20395d] font-bold">200 KWD</span></p>
                                    <p class="text-xs md:text-sm text-gray-500">Duration Of Implementation : <span id="detail-duration" class="font-semibold text-gray-800">3 weeks</span></p>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-3">
                                <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                </button>
                                <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                </button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-2xl p-3 md:p-5 flex items-center justify-between gap-4 md:gap-0">
                            <p class="text-[10px] whitespace-nowrap md:text-[14px] lg:text-[20px] font-bold text-gray-800">Price offer Attachment</p>
                            <button class="flex items-center gap-2 p-1 md:px-4 md:py-2 border border-[#20395d] text-[#20395d] text-[10px] whitespace-nowrap md:text-sm font-semibold rounded-lg hover:bg-[#20395d] hover:text-white transition-colors" >
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#pdf-clip)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8192 0.000488281V7.05931H21.878V24.0005H2.11328V0.000488281H14.8192ZM16.231 0.210963L21.6677 5.64768H16.231V0.210963Z" fill="currentColor"/>
                                    </g>
                                    <defs><clipPath id="pdf-clip"><rect width="24" height="24" fill="white"/></clipPath></defs>
                                </svg>
                                Price Offer
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div id="panel-quotations" class="gap-6">
                <div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-7 w-full 2xl:max-w-[90rem] min-h-[582px]">
                    <p class="text-[20px] font-bold mb-4">My Quotations yet.</p>
                    <input type="radio" name="subtab" id="t1" class="hidden" checked/>
                    <input type="radio" name="subtab" id="t2" class="hidden"/>
                    <div class="flex">
                        <label for="t1" class="cursor-pointer border-none mb-2">
                            <p class="mt-2 text-[10px] font-semibold md:text-sm text-gray-500 text-start mb-2">Price Offer</p>
                            <div class="h-2 rounded-full w-[95px] bg-gray-200 overflow-hidden"><div class="bar-1 h-full bg-[#20395d] transition-all"></div></div>
                        </label>
                        <label for="t2" class="cursor-pointer border-none mb-2">
                            <p class="mt-2 text-[10px] font-semibold md:text-sm text-gray-500 text-start mb-2">Products</p>
                            <div class="h-2 rounded-full w-[95px] bg-gray-200 overflow-hidden"><div class="bar-1 h-full bg-gray-200 transition-all"></div></div>
                        </label>
                    </div>
                    <h1 class="text-gray-400 mt-3 font-semibold">2/2/2026</h1>
                    <div class="subtab-content-1 hidden">
                        <div class="flex flex-col md:flex-row gap-5 mb-5">
                            <div class="flex justify-between border rounded-xl p-1 md:p-4 mb-3 w-full">
                                <div>
                                    <div class="flex items-center gap-2 md:gap-4">
                                        <img src="{{ asset('images/checkout/bricks.png') }}" class="size-[69px] md:w-[114.47px] md:h-[113px] rounded-full object-cover" />
                                        <div class="md:space-y-2">
                                            <h3 class="font-semibold text-[14px]">Company 1</h3>
                                            <p class="text-xs md:text-sm text-gray-500">Contractor name - <span class="text-[#20395d] text-xs md:text-auto font-bold"> Mohan Nasser </span></p>
                                            <p class="text-xs md:text-sm text-gray-500">Your Price: <span class="text-[#20395d] text-xs md:text-auto font-bold"> 200 KWD </span></p>
                                            <p class="text-xs md:text-sm text-gray-500">Duration for preparation:<span class="text-[#20395d] text-xs md:text-auto font-bold"> 3 weeks</span></p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 mt-3">
                                        <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 bg-[#20395d] text-white text-sm rounded-md" onclick="document.getElementById('offer').classList.remove('hidden')">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span class="text-[9px] md:text-sm whitespace-nowrap">Accept Offer</span>
                                        </button>
                                        <button class="flex items-center justify-center gap-1 lg:w-[223px] h-full h-[40px] px-2 md:px-4 py-1 border border-[#20395d] text-[#20395d] text-sm rounded-md">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10"/><path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 9C22 5.13 18.87 2 15 2" stroke="#20395D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span class="text-[9px] md:text-sm whitespace-nowrap"> Call Contractor </span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <button class="cursor-pointer open-detail-btn" data-company="Company 1" data-contractor="Mohan Nasser" data-price="200 KWD" data-duration="3 weeks">
                                        <svg class="w-[18px] md:w-auto" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M11.8789 26.5599L20.5722 17.8666C21.5989 16.8399 21.5989 15.1599 20.5722 14.1333L11.8789 5.43994" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subtab-content-2 hidden">
                        <div class="max-w-full mx-auto bg-white border rounded-xl p-2 flex flex-col lg:flex-row items-start gap-4 my-4">
                            <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-[328px] lg:w-[156px] h-[154px] rounded-lg object-cover"/>
                            <div class="flex-1">
                                <div class="flex flex-col lg:flex-row justify-between items-start">
                                    <h2 class="font-semibold text-[16px]">Products</h2>
                                    <button class="px-5 py-1 border bg-[#20395d] rounded-md font-semibold text-sm text-white">Proceed to pay</button>
                                </div>
                                <div class="mt-1 text-sm text-gray-600 space-y-1">
                                    <p>QTY : 2</p>
                                    <p>TOTAL PRICE : <span class="font-bold text-[#20395d]">200 KWD</span></p>
                                    <div class="flex items-center gap-2"><span>COLOR :</span><span class="w-3 h-3 bg-blue-600 rounded-full inline-block"></span></div>
                                </div>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="px-4 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Bricks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-favourite">
                <div class="flex-col bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-7 w-full 2xl:max-w-[90rem] min-h-[200px] flex">
                    <h2 class="text-xl font-semibold mb-4">Favourites</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                        <div class="bg-white rounded-2xl border-2 shadow-sm w-full max-w-[27rem] min-h-[351px]">
                            <div class="relative">
                                <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full max-w-[27rem] h-[226px] object-cover rounded-t-xl">
                                <button class="absolute top-2 right-2">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="22" fill="white"/><rect x="14.5" y="15.1001" width="15" height="18" rx="1.5" stroke="#FF0000" stroke-width="1.8"/><rect x="12.25" y="12.1001" width="19.5" height="3" rx="0.75" stroke="#FF0000" stroke-width="1.8" stroke-linejoin="round"/><path d="M19 10.8999L25 10.8999" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M22 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M25.75 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M18.25 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/></svg>
                                </button>
                            </div>
                            <div class="px-3">
                                <div class="mt-3"><span class="bg-gray-[#f2f0f6] text-[18px] py-1 rounded-full">Bricks</span></div>
                                <div class="flex justify-between items-center mt-5">
                                    <p class="text-[24px] font-semibold">Products</p>
                                    <p class="text-[#607595] text-[24px] font-bold">100 KD</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl border-2 shadow-sm w-full max-w-[27rem] min-h-[351px]">
                            <div class="relative">
                                <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full max-w-[27rem] h-[226px] object-cover rounded-t-xl">
                                <button class="absolute top-2 right-2">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="22" fill="white"/><rect x="14.5" y="15.1001" width="15" height="18" rx="1.5" stroke="#FF0000" stroke-width="1.8"/><rect x="12.25" y="12.1001" width="19.5" height="3" rx="0.75" stroke="#FF0000" stroke-width="1.8" stroke-linejoin="round"/><path d="M19 10.8999L25 10.8999" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M22 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M25.75 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M18.25 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/></svg>
                                </button>
                            </div>
                            <div class="px-3">
                                <div class="mt-3"><span class="bg-gray-[#f2f0f6] text-[18px] py-1 rounded-full">Bricks</span></div>
                                <div class="flex justify-between items-center mt-5">
                                    <p class="text-[24px] font-semibold">Products</p>
                                    <p class="text-[#607595] text-[24px] font-bold">100 KD</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl border-2 shadow-sm w-full max-w-[27rem] min-h-[351px]">
                            <div class="relative">
                                <img src="{{ asset('images/checkout/bricks.png') }}" alt="Bricks" class="w-full max-w-[27rem] h-[226px] object-cover rounded-t-xl">
                                <button class="absolute top-2 right-2">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="22" fill="white"/><rect x="14.5" y="15.1001" width="15" height="18" rx="1.5" stroke="#FF0000" stroke-width="1.8"/><rect x="12.25" y="12.1001" width="19.5" height="3" rx="0.75" stroke="#FF0000" stroke-width="1.8" stroke-linejoin="round"/><path d="M19 10.8999L25 10.8999" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M22 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M25.75 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/><path d="M18.25 19V29.5" stroke="#FF0000" stroke-width="1.8" stroke-linecap="round"/></svg>
                                </button>
                            </div>
                            <div class="px-3">
                                <div class="mt-3"><span class="bg-gray-[#f2f0f6] text-[18px] py-1 rounded-full">Bricks</span></div>
                                <div class="flex justify-between items-center mt-5">
                                    <p class="text-[24px] font-semibold">Products</p>
                                    <p class="text-[#607595] text-[24px] font-bold">100 KD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="offer" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" onclick="document.getElementById('offer').classList.add('hidden')"></div>

        <div class="relative bg-white rounded-2xl shadow-2xl md:w-[504px] h-[363px] mx-4 p-8 z-10 flex flex-col justify-center text-center space-y-5">

            <!-- Close Button top right -->
            <button onclick="document.getElementById('offer').classList.add('hidden')" class="absolute top-3 right-3 w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition-colors text-gray-500">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L13 13M13 1L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>


            <h2 class="text-lg font-bold text-start mb-3">Accept offer</h2>

            <p class="text-[9px] md:text-sm text-gray-500 leading-relaxed md:whitespace-nowrap text-start">
                Choose the appropriate communication method
            </p>
            <button class="md:w-full text-center border-2 border-[#20395d] rounded-lg text-[#20395d] text-[11px] md:text-[16px] p-3 font-bold">Continue Outside the app</button>
            <button class="md:w-full text-center border-2 bg-[#20395d] rounded-lg text-white text-[11px] md:text-[16px] p-3 font-bold">Continue within the app</button>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/checkout.js') }}"></script>
@endpush
