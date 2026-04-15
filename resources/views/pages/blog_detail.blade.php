@extends('layouts.app')

@section('content')

    <section class="p-6 w-full box-border">
        <main class="relative rounded-[40px] overflow-hidden shadow-2xl flex flex-colm min-h-[400px]">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/blog/hero.png') }}" class="w-full h-full object-cover" alt="The Future of Smart Construction"/>
                <div class="absolute inset-0 bg-black/45"></div>
            </div>
            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 py-28">
                <h1 class="text-white text-3xl md:text-[56px] font-bold leading-tight tracking-tight">
                    The Future of Smart Construction
                </h1>
            </div>
        </main>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-12 py-10 max-w-[90%]">

        <div class="flex items-center gap-1 mb-6 flex-wrap">
            <a href="#" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">
                Home
            </a>
            <span class="text-[#A7A7A7] text-[29px] mx-1.5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <a href="#" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">
                Blogs
            </a>
            <span class="text-[#A7A7A7] text-[29px] mx-1.5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <span class="text-[#20395d] text-[29px] font-medium">
                The Future of Smart Construction
            </span>
        </div>

        <h1 class="text-[40px] font-bold text-gray-900 mb-2">
            The Future of Smart Construction
        </h1>
        <p class="text-[20px] text-gray-400 mb-8">
            April 24, 2022 · 5 min read
        </p>

        <div>
            <h2 class="text-[32px] font-bold mb-3 text-[#20395d]">
                Lorom ipsum dolor
            </h2>
            <p class="text-[16px] text-gray-500 mb-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>

            <h2 class="text-[32px] font-bold mb-3 text-[#20395d]">
                Lorom ipsum dolor
            </h2>
            <p class="text-[16px] text-gray-500 mb-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\
            </p>

            <h2 class="text-[32px] font-bold mb-3 text-[#20395d]">
                Lorom ipsum dolor
            </h2>
            <p class="text-[16px] text-gray-500 mb-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\
            </p>

            <h2 class="text-[32px] font-bold mb-3 text-[#20395d]">
                Lorom ipsum dolor
            </h2>
            <p class="text-[16px] text-gray-500 mb-6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
        </div>

    </section>

    <section class="max-w-[90%] mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-[40px] font-bold text-gray-900 mb-6">
            Relevant Blogs
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 cursor-pointer">
                <div class="overflow-hidden h-[180px]">
                    <img src="{{ asset('images/blog/card_1.png') }}" alt="Safety Standards in Modern Projects" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                </div>
                <div class="p-4">
                    <h4 class="text-sm font-bold text-gray-900 text-center mb-1">
                        Safety Standards in Modern Projects
                    </h4>
                    <p class="text-xs text-gray-400 text-center mb-2">
                        April 20, 2022 · 4 min read
                    </p>
                    <p class="text-xs text-gray-600 text-center line-clamp-2">
                        Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id.
                    </p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 cursor-pointer">
                <div class="overflow-hidden h-[180px]">
                    <img src="{{ asset('images/blog/card_2.png') }}" alt="Engineering Excellence & Innovation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                </div>
                <div class="p-4">
                    <h4 class="text-sm font-bold text-gray-900 text-center mb-1">
                        Engineering Excellence & Innovation
                    </h4>
                    <p class="text-xs text-gray-400 text-center mb-2">
                        April 18, 2022 · 6 min read
                    </p>
                    <p class="text-xs text-gray-600 text-center line-clamp-2">
                        Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id.
                    </p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 cursor-pointer">
                <div class="overflow-hidden h-[180px]">
                    <img src="{{ asset('images/blog/card_3.png') }}" alt="Sustainable Building Materials" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                </div>
                <div class="p-4">
                    <h4 class="text-sm font-bold text-gray-900 text-center mb-1">
                        Sustainable Building Materials
                    </h4>
                    <p class="text-xs text-gray-400 text-center mb-2">
                        April 15, 2022 · 5 min read
                    </p>
                    <p class="text-xs text-gray-600 text-center line-clamp-2">
                        Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection
