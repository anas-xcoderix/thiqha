@extends('layouts.app')

@section('title', 'THIQAH – Blog')

@section('content')
    <div id="app">
    <div id="page-list" class="block">

        <section class="p-6 w-full box-border">
            <main class="relative min-h-screen w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/blog/hero.png') }}" class="min-h-screen object-cover" alt="Construction">
                </div>

                <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6">
                    <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-20 tracking-tight">
                        Blog
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

        <section id="blogs" class="2xl:max-w-[90%] mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold">Blogs</h2>
                <div class="flex items-center gap-3">
                    <div class="relative border border-gray-300 rounded-lg flex items-center px-3 gap-2">
                        <input type="text" placeholder="search" class="outline-none text-sm bg-transparent text-gray-600 w-[265px] h-[48px] pl-5 text-[14px]"/>
                        <span class="absolute">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66927 14.0002C11.1671 14.0002 14.0026 11.1646 14.0026 7.66683C14.0026 4.16903 11.1671 1.3335 7.66927 1.3335C4.17147 1.3335 1.33594 4.16903 1.33594 7.66683C1.33594 11.1646 4.17147 14.0002 7.66927 14.0002Z" stroke="#A8A8A8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M14.6693 14.6668L13.3359 13.3335" stroke="#A8A8A8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
                    </div>
                    <button class="w-[48px] h-[48px] rounded-lg flex items-center justify-center transition text-gray-500">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="4.5" fill="white"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="4.5" stroke="#20395D"/>
                            <path d="M15.1979 11.2998H32.7979C34.2646 11.2998 35.4646 12.4998 35.4646 13.9665V16.8998C35.4646 17.9665 34.7979 19.2998 34.1313 19.9665L28.3979 25.0331C27.5979 25.6998 27.0646 27.0331 27.0646 28.0998V33.8331C27.0646 34.6331 26.5313 35.6998 25.8646 36.0998L23.9979 37.2998C22.2646 38.3665 19.8646 37.1665 19.8646 35.0331V27.9665C19.8646 27.0331 19.3313 25.8331 18.7979 25.1665L13.7313 19.8331C13.0646 19.1665 12.5312 17.9665 12.5312 17.1665V14.0998C12.5312 12.4998 13.7313 11.2998 15.1979 11.2998Z" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.5733 11.2998L16 21.8331" stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>
            </div>

            <div class="cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8">

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(1)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img.png') }}" alt="Construction workers" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">The Future of Smart Construction</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 24, 2022 · 5 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(2)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_1.png') }}" alt="Construction site" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_1.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Safety Standards in Modern Projects</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 20, 2022 · 4 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(3)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_2.png') }}" alt="Workers in safety gear" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_2.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Engineering Excellence & Innovation</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 18, 2022 · 6 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(4)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img.png') }}" alt="Building construction" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Sustainable Building Materials</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 15, 2022 · 5 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(5)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_1.png') }}" alt="Infrastructure project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_1.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Infrastructure Development Trends</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 12, 2022 · 7 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(6)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_2.png') }}" alt="Team of engineers" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_2.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Project Management Best Practices</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 10, 2022 · 4 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(7)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img.png') }}" alt="Construction workers" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src=''{{ asset('images/blog/img.png') }}"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Digital Transformation in Construction</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 7, 2022 · 5 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(8)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_1.png') }}" alt="Construction site aerial" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_1.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Urban Planning & Smart Cities</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 5, 2022 · 6 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

                <article class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] max-w-[445px] cursor-pointer" onclick="showDetail(9)">
                    <div class="overflow-hidden h-[292px]">
                        <img src="{{ asset('images/blog/img_2.png') }}" alt="Safety team" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ asset('images/blog/img_2.png') }}'"/>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-gray-900 text-center mb-1">Worker Safety & Health Guidelines</h3>
                        <p class="text-xs text-gray-400 mb-3 text-center my-4">April 2, 2022 · 3 min read</p>
                        <p class="text-sm leading-relaxed text-center line-clamp-3">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id lorem.</p>
                    </div>
                </article>

            </div>

            <div class="flex items-center justify-end gap-2 mt-12 flex-wrap">
                <a href="#" class="flex items-center px-3 py-2 gap-3 rounded-lg w-[125px] border border-[#20395d] text-sm text-gray-600 hover:bg-gray-50 transition">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15.0938 19.9201L8.57375 13.4001C7.80375 12.6301 7.80375 11.3701 8.57375 10.6001L15.0938 4.08008" stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-[#20395D] font-bold">Previous</span>
                </a>
                <a href="#" class="size-[32px] rounded-full text-[#A7A7A7] border border-[#A7A7A7] text-sm font-semibold flex items-center justify-center">1</a>
                <a href="#" class="size-[32px] rounded-full border bg-[#20395d] border-gray-300 text-sm text-white flex items-center justify-center">2</a>
                <a href="#" class="size-[32px] rounded-full text-[#A7A7A7] border border-[#A7A7A7] text-sm flex items-center justify-center">3</a>
                <span class="text-gray-300 px-1">• • • • •</span>
                <a href="#" class="size-[32px] rounded-full text-[#A7A7A7] border border-[#A7A7A7] text-sm flex items-center justify-center">10</a>
                <a href="#" class="flex items-center justify-center gap-3 px-3 py-2 rounded-lg bg-[#20395d] text-sm transition w-[125px]">
                    <span class="text-white">Next</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </section>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/blog.js') }}"></script>
@endpush
