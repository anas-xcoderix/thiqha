<header class="absolute top-2 z-50 w-full flex justify-center pt-6 px-4 md:pt-8 md:px-8">
    <nav class="bg-white w-full rounded-[30px] md:rounded-full md:px-6 px-4 py-4 md:py-4 flex flex-col md:flex-row items-center justify-between shadow-lg gap-4 xl:gap-0 relative">
        <div class="w-full xl:w-auto flex items-center justify-between gap-4">
            <div class="flex-shrink-0 xl:hidden">
                <img src="{{ asset('/img/images/header/headerlogo.png') }}" alt="Logo" class="h-8 md:h-12">
            </div>

            <div class="flex md:hidden items-center gap-2">
                <button class="text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </button>
                <button class="text-gray-500">
                    <svg class="w-6 md:w-9 h-6 md:h-9" viewBox="0 0 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2 8.66669H20.8C25.3334 8.66669 25.7867 10.7867 26.0934 13.3734L27.2934 23.3734C27.68 26.6534 26.6667 29.3334 22 29.3334H10.0134C5.33337 29.3334 4.32003 26.6534 4.72003 23.3734L5.92004 13.3734C6.21338 10.7867 6.6667 8.66669 11.2 8.66669Z" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6666 10.6667V6.00002C10.6666 4.00002 12 2.66669 14 2.66669H18C20 2.66669 21.3333 4.00002 21.3333 6.00002V10.6667" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27.2133 22.7064H10.6666" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="text-gray-600">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="1.2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </button>

                <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Desktop Left Links --}}
        <div class="hidden xl:flex items-center gap-12 text-[18px] text-gray-500">
            <a href="{{ route('home') }}" class="whitespace-nowrap transition {{ request()->routeIs('home') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                Home
            </a>
            <a href="{{ route('services') }}" class="whitespace-nowrap transition {{ request()->routeIs('services') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                Thiqah Services
            </a>
            <a href="{{ route('ServiceProvider') }}" class="whitespace-nowrap transition {{ request()->routeIs('ServiceProvider') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                Service Providers
            </a>
        </div>

        {{-- Center Logo --}}
        <div class="flex-shrink-0 hidden xl:block">
            <img src="{{ asset('img/images/header/headerlogo.png') }}" alt="Logo" class="h-12">
        </div>

        {{-- Desktop Right Links --}}
        <div class="hidden xl:flex items-center gap-12 text-[18px] text-gray-500">
            <a href="{{ route('products') }}" class="whitespace-nowrap transition {{ request()->routeIs('products') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                Products
            </a>
            <a href="{{ route('blog') }}" class="whitespace-nowrap transition {{ request()->routeIs('blog') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                Blogs
            </a>
            <a href="{{ route('about') }}" class="whitespace-nowrap transition {{ request()->routeIs('about') ? 'text-[#20395d] font-semibold' : 'text-gray-500 hover:font-semibold hover:text-[#20395d] ' }}">
                About Us
            </a>
        </div>

        <div class="hidden md:flex w-full xl:w-auto items-center pt-2 justify-center lg:justify-end gap-8 xl:w-auto">
            <div class="flex items-center gap-2 cursor-pointer">
                <img src="https://flagcdn.com/w20/us.png" alt="US" class="w-5 h-3.5">
                <span class="text-[13px] font-bold text-gray-700">ENGLISH</span>
            </div>

            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 23C18.9706 23 23 18.9706 23 14C23 9.02944 18.9706 5 14 5C9.02944 5 5 9.02944 5 14C5 18.9706 9.02944 23 14 23Z" stroke="#6B6B6B" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M27.0002 27L20.3662 20.366" stroke="#6B6B6B" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.2 8.66675H20.8C25.3334 8.66675 25.7867 10.7867 26.0934 13.3734L27.2934 23.3734C27.68 26.6534 26.6667 29.3334 22 29.3334H10.0134C5.33337 29.3334 4.32003 26.6534 4.72003 23.3734L5.92004 13.3734C6.21338 10.7867 6.6667 8.66675 11.2 8.66675Z" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.6665 10.6667V6.00008C10.6665 4.00008 11.9998 2.66675 13.9998 2.66675H17.9998C19.9998 2.66675 21.3332 4.00008 21.3332 6.00008V10.6667" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M27.2132 22.7063H10.6665" stroke="#626262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0002 16.0001C19.6821 16.0001 22.6668 13.0153 22.6668 9.33341C22.6668 5.65152 19.6821 2.66675 16.0002 2.66675C12.3183 2.66675 9.3335 5.65152 9.3335 9.33341C9.3335 13.0153 12.3183 16.0001 16.0002 16.0001Z" stroke="#0A0A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M27.453 29.3333C27.453 24.1733 22.3197 20 15.9997 20C9.67972 20 4.54639 24.1733 4.54639 29.3333" stroke="#0A0A0A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <button id="menu-toggle-md" class="hidden md:block xl:hidden text-gray-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white mt-2 rounded-2xl shadow-2xl p-6 xl:hidden flex-col gap-4 text-gray-600 font-medium z-[100]">
            <a href="{{ route('home') }}" class="py-2 border-b border-gray-50 transition {{ request()->routeIs('home') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                Home
            </a>
            <a href="{{ route('services') }}" class="py-2 border-b border-gray-50 transition {{ request()->routeIs('services') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                Thiqah Services
            </a>
            <a href="{{ route('ServiceProvider') }}" class="py-2 border-b border-gray-50 transition {{ request()->routeIs('ServiceProvider') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                Service Providers
            </a>
            <a href="{{ route('products') }}" class="py-2 border-b border-gray-50 transition {{ request()->routeIs('products') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                Products
            </a>
            <a href="{{ route('blog') }}" class="py-2 border-b border-gray-50 transition {{ request()->routeIs('blog') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                Blogs
            </a>
            <a href="{{ route('about') }}" class="py-2 transition {{ request()->routeIs('about') ? 'text-[#20395d] font-semibold' : 'hover:text-[#20395d]' }}">
                About Us
            </a>
        </div>
    </nav>
</header>
