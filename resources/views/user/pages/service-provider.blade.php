@extends('user.layouts.app')

@section('content')

    <x-hero :image="asset('img/images/home/hero.png')" alt="Construction">
        <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
            Masters of Consistency and <br> Quality.
        </h1>

        <p class="text-gray-100 text-sm md:text-[18px] max-w-4xl mx-auto mb-12 opacity-90 font-lg leading-relaxed">
            Blessing welcomed ladyship she met humoured sir breeding her.
            Six curiosity day assurance bed necessary.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <x-button class="btn-leaf bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all" href="{{ route('products.index') }}">Explore</x-button>
            <x-button class="btn-leaf bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all" href="{{ route('about.index') }}">Contact Us</x-button>
        </div>
    </x-hero>

    <x-page-heading-search heading="Service Providers"/>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        @include('user.partials.category-pills-row', ['categories' => $serviceProviderCategories])
    </section>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto font-sans flex flex-col mt-16 px-4 md:px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 xl:gap-x-[24px] lg:gap-x-[14px] gap-x-6 xl:gap-y-[58px] lg:gap-y-[38px] gap-y-10 xl:px-8">

            @foreach ([
                'SP-card1.png',
                'SP-card2.png',
                'SP-card3.png',
                'SP-card4.png',
                'SP-card5.png',
                'SP-card6.png',
            ] as $card)
                <x-service-provider-card :image="asset('img/images/home/' . $card)"/>
            @endforeach

        </div>

        <x-pagination-inline class="mt-8"/>

    </section>

@endsection
