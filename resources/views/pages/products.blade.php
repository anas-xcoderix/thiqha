@extends('layouts.app')
@section('content')

    <!-- Header & Hero -->
    <section class="main-container">
        <main class="relative min-h-[800px] w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/images/home/hero.png') }}"
                     class="w-full h-full object-cover" alt="Construction">
            </div>

            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6">
                <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
                    Products
                </h1>

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

    <!-- Product Heading -->
    <div class="pt-10 bg-[#FFFFFF] font-sans">
        <div class="main-container mx-auto px-4">
            <div class="flex flex-col-reverse md:flex-row justify-between items-start md:items-center mb-12 gap-6">

                <h2 class="lg:text-[48px] md:text-[40px] text-[32px] font-bold text-[#000000]">
                    Products
                </h2>

                <div class="flex items-center gap-3 w-full md:w-auto">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search..."
                               class="lg:w-[265px] lg:h-[48px] md:w-[200px] md:h-[42px] w-full h-[40px] bg-white border border-gray-200 py-3.5 px-12 rounded-[5px] shadow-sm focus:outline-none placeholder:text-[#A8A8A8]">

                        <span class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.66732 14.0002C11.1651 14.0002 14.0007 11.1646 14.0007 7.66683C14.0007 4.16903 11.1651 1.3335 7.66732 1.3335C4.16951 1.3335 1.33398 4.16903 1.33398 7.66683C1.33398 11.1646 4.16951 14.0002 7.66732 14.0002Z"
                                stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.6673 14.6668L13.334 13.3335" stroke="#A8A8A8" stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </span>
                    </div>

                    <button
                        class="bg-white lg:w-[48px] lg:h-[48px] md:w-[40px] md:h-[40px] w-[40px] h-[40px] border border-[#20395D] flex-shrink-0 p-1 rounded-[5px] shadow-sm flex items-center justify-center">
                        <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 md:w-8 md:h-8">
                            <path
                                d="M7.19987 2.7998H24.7999C26.2665 2.7998 27.4665 3.9998 27.4665 5.46647V8.39981C27.4665 9.46647 26.7999 10.7998 26.1332 11.4665L20.3999 16.5331C19.5999 17.1998 19.0665 18.5331 19.0665 19.5998V25.3331C19.0665 26.1331 18.5332 27.1998 17.8665 27.5998L15.9999 28.7998C14.2665 29.8665 11.8665 28.6665 11.8665 26.5331V19.4665C11.8665 18.5331 11.3332 17.3331 10.7999 16.6665L5.7332 11.3331C5.06654 10.6665 4.5332 9.46647 4.5332 8.66647V5.5998C4.5332 3.9998 5.7332 2.7998 7.19987 2.7998Z"
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

    <!-- Products -->
    <section class="bg-[#FFFFFF] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        <div
            class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[120px] h-[120px] md:w-[151px] md:h-[156px] bg-[#223862] rounded-[25px] shadow-[0_0_30px_5px_rgba(0,0,0,0.10)] hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/all.png') }}" alt="All"
                         class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain invert brightness-0">
                </div>
                <span class="text-white font-bold text-[18px] lg:text-[24px]">All</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[252px] md:h-[156px] bg-white rounded-[25px] shadow-[0_0_30px_5px_rgba(0,0,0,0.10)] border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/building.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Construction">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Building</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-[0_0_30px_5px_rgba(0,0,0,0.10)] border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/electric.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Electricity">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Electrical</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-[0_0_30px_5px_rgba(0,0,0,0.10)] border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/lighting.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Lighting</span>
            </button>

            <button
                class="flex flex-col items-center justify-center flex-shrink-0 min-w-[180px] h-[120px] md:w-[251px] md:h-[156px] bg-white rounded-[25px] shadow-[0_0_30px_5px_rgba(0,0,0,0.10)] border border-gray-50 hover:shadow-md transition-all">
                <div class="mb-2">
                    <img src="{{ asset('img/images/home/plumbing.png') }}" class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain"
                         alt="Plumbing">
                </div>
                <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">Plumbing</span>
            </button>

        </div>
    </section>

    <!-- Products Cards -->
    <section class="bg-[#FAF8F4] w-full main-container mx-auto py-16 px-4">
        <div id="product-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 xl:gap-[23px] justify-items-center">
        </div>
    </section>

    <div class="main-container flex items-center gap-3 font-sans lg:justify-end justify-center">

        <button
            class="md:w-[125px] w-24 md:h-[42px] flex items-center md:gap-2 md:p-2 pr-[6px] md:pr-[0px] border border-[#20395D] md:rounded-[10px] rounded-[6px] text-[#20395D] font-bold hover:bg-gray-50 transition-colors">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.0898 19.9201L8.56984 13.4001C7.79984 12.6301 7.79984 11.3701 8.56984 10.6001L15.0898 4.08008"
                    stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
            <span class="md:text-[18px] text-[10px]">Previous</span>
        </button>

        <div class="flex gap-[12px]">
            <button
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                <span class="md:text-[18px] text-[10px]">1</span>
            </button>

            <button
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full bg-[#20395D] text-white font-bold shadow-md">
                <span class="md:text-[18px] text-[10px]">2</span>
            </button>

            <button
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                <span class="md:text-[18px] text-[10px]">3</span>
            </button>

            <div class="md:block hidden flex items-center px-1 tracking-[2px] font-bold text-gray-800">
                ....................
            </div>

            <button
                class="md:block hidden w-[32px] h-[32px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
                10
            </button>
        </div>

        <button
            class="md:w-[125px] w-24 md:h-[42px] flex items-center text-center justify-center md:gap-2  bg-[#20395D] md:rounded-[10px] rounded-[6px] text-white font-bold hover:bg-[#1a2c4e] transition-all shadow-md">
            <span class="md:text-[18px] text-[10px]">Next</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                    stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>

        </button>
    </div>

    <script>
        // Product //
        let products = [
            {
                id: 1,
                name: "Product 1",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product1.png') }}"
            },
            {
                id: 3,
                name: "Product 2",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product2.png') }}"
            },
            {
                id: 4,
                name: "Product 3",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product3.png') }}"
            },
            {
                id: 5,
                name: "Product 4",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product4.png') }}"
            },
            {
                id: 6,
                name: "Product 5",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product5.png') }}"
            },
            {
                id: 7,
                name: "Product 6",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product6.png') }}"
            },
            {
                id: 8,
                name: "Product 7",
                price: "100",
                category: "Bricks",
                img: "{{ asset ('img/images/home/product7.png') }}"
            },

        ];

        let productGrid = document.getElementById('product-grid');

        products.forEach(product => {
            productGrid.innerHTML += `
    <a href="Product-Detail.html?id=${product.id}" class="group block bg-white rounded-[20px] overflow-hidden shadow-md transition-all hover:shadow-xl">

        <div class="relative w-full h-[220px] overflow-hidden">
            <img src="${product.img}" alt="${product.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

            <button onclick="event.preventDefault();" class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-red-50 transition-colors z-10">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="22" fill="white"/>
                    <path d="M22.828 33.7466C22.3746 33.9066 21.628 33.9066 21.1746 33.7466C17.308 32.4266 8.66797 26.92 8.66797 17.5866C8.66797 13.4666 11.988 10.1333 16.0813 10.1333C18.508 10.1333 20.6546 11.3066 22.0013 13.12C23.348 11.3066 25.508 10.1333 27.9213 10.1333C32.0146 10.1333 35.3346 13.4666 35.3346 17.5866C35.3346 26.92 26.6946 32.4266 22.828 33.7466Z" stroke="#20395D" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </button>
        </div>

        <div class="p-5 flex flex-col">
            <span class="bg-[#F3F4F6] text-[12px] px-4 py-1 rounded-full font-medium w-fit mb-3">${product.category}</span>

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-[20px] font-medium text-[#20395D]">${product.name}</h3>
                <span class="text-[20px] font-bold text-[#223862]">${product.price} KD</span>
            </div>

            <button class="w-full bg-[#223862] text-white py-2 rounded-lg font-bold hover:bg-[#1a2c4e] transition-colors">
                Add To Cart
            </button>
        </div>
    </a>
    `;
        });
    </script>
@endsection
