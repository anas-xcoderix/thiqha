@extends('layouts.app')

@section('title', 'THIQAH – ' . $post['title'])

@section('content')
    <section class="p-6 w-full box-border">
        <main class="relative rounded-[40px] overflow-hidden shadow-2xl flex flex-col min-h-[400px]">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset($post['hero_image']) }}" class="w-full h-full object-cover" alt="{{ $post['title'] }}"/>
                <div class="absolute inset-0 bg-black/45"></div>
            </div>
            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 py-28">
                <h1 class="text-white text-3xl md:text-[56px] font-bold leading-tight tracking-tight">
                    {{ $post['title'] }}
                </h1>
            </div>
        </main>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-12 py-10 max-w-[90%]">

        <div class="flex items-center gap-1 mb-6 flex-wrap">
            <a href="{{ route('home.index') }}" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">
                Home
            </a>
            <span class="text-[#A7A7A7] text-[29px] mx-1.5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <a href="{{ route('blog.index') }}" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">
                Blogs
            </a>
            <span class="text-[#A7A7A7] text-[29px] mx-1.5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <span class="text-[#20395d] text-[29px] font-medium">
                {{ $post['title'] }}
            </span>
        </div>

        <h1 class="text-[40px] font-bold text-gray-900 mb-2">{{ $post['title'] }}</h1>
        <p class="text-[20px] text-gray-400 mb-8">{{ $post['date'] }} · {{ $post['read_time'] }}</p>

        @include('pages.partials.blog-article-body')

    </section>

    @if($related->isNotEmpty())
        <section class="max-w-[90%] mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <h2 class="text-[40px] font-bold text-gray-900 mb-6">Relevant Blogs</h2>
            <div class="cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($related as $item)
                    <a href="{{ route('blog.show', $item['id']) }}" class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 cursor-pointer block no-underline">
                        <div class="overflow-hidden h-[180px]">
                            <img src="{{ asset($item['card_image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                        </div>
                        <div class="p-4">
                            <h4 class="text-sm font-bold text-gray-900 text-center mb-1 text-inherit">{{ $item['title'] }}</h4>
                            <p class="text-xs text-gray-400 text-center mb-2">{{ $item['date'] }} · {{ $item['read_time'] }}</p>
                            <p class="text-xs text-gray-600 text-center line-clamp-2">{{ $item['excerpt'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
