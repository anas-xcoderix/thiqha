@extends('layouts.app')

@section('title', 'THIQAH – Blog')

@section('content')
    <section class="p-[7px] md:p-[24px] w-full box-border">
        <main class="relative min-h-screen w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/blog/hero.png') }}" class="min-h-screen object-cover w-full"
                     alt="Construction">
            </div>

            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 mt-[100px]">
                <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight my-6 tracking-tight">
                    Blog
                </h1>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mt-10">
                    <x-button
                        class="rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all"
                        href="{{ route('products.index') }}">Explore
                    </x-button>
                    <x-button
                        class="rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all"
                        href="{{ route('about.index') }}">Contact Us
                    </x-button>
                </div>
            </div>

        </main>
    </section>

    <section id="blogs" class="mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <div class="pt-10 bg-[#FFFFFF] font-sans">
            <div class="main-container mx-auto px-4">
                <div class="flex flex-col-reverse md:flex-row justify-between items-start md:items-center mb-12 gap-6">

                    <h2 class="lg:text-[48px] md:text-[40px] text-[32px] font-bold text-[#000000]">
                        Blogs
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
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="w-6 h-6 md:w-8 md:h-8">
                                <path
                                    d="M7.19987 2.7998H24.7999C26.2665 2.7998 27.4665 3.9998 27.4665 5.46647V8.39981C27.4665 9.46647 26.7999 10.7998 26.1332 11.4665L20.3999 16.5331C19.5999 17.1998 19.0665 18.5331 19.0665 19.5998V25.3331C19.0665 26.1331 18.5332 27.1998 17.8665 27.5998L15.9999 28.7998C14.2665 29.8665 11.8665 28.6665 11.8665 26.5331V19.4665C11.8665 18.5331 11.3332 17.3331 10.7999 16.6665L5.7332 11.3331C5.06654 10.6665 4.5332 9.46647 4.5332 8.66647V5.5998C4.5332 3.9998 5.7332 2.7998 7.19987 2.7998Z"
                                    stroke="#20395D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path d="M14.5733 2.7998L8 13.3331" stroke="#20395D" stroke-width="2"
                                      stroke-miterlimit="10"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @for($i = 0; $i < $posts->count(); $i++)
                @php($post = $posts[$i])
                <a href="{{ route('blog.show', $post['id']) }}" class="block max-w-[445px] mx-auto sm:mx-0">
                    <article
                        class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 max-h-[518px] h-full">
                        <div class="overflow-hidden h-[292px]">
                            <img src="{{ asset($post['card_image']) }}" alt="{{ $post['title'] }}"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                        </div>
                        <div class="p-5">
                            <h3 class="text-base font-bold text-gray-900 text-center mb-1">{{ $post['title'] }}</h3>
                            <p class="text-xs text-gray-400 mb-3 text-center my-4">{{ $post['date'] }}
                                · {{ $post['read_time'] }}</p>
                            <p class="text-sm leading-relaxed text-center line-clamp-3">{{ $post['excerpt'] }}</p>
                        </div>
                    </article>
                </a>
            @endfor
        </div>

        <div class="flex items-center gap-3 font-sans lg:justify-end justify-center mt-[40px]">

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
    </section>
@endsection
