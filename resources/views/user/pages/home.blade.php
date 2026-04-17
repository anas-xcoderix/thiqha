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

    <x-section-title-band title="Thiqah Services" :background-image="asset('img/images/home/thiqah-services-bg.png')"/>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto font-sans px-4 py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 gap-8 xl:gap-[43px] justify-items-center">

            <x-thiqah-service-card
                :icon="asset('img/images/home/water-tank.png')"
                title="Water Tanker"/>

            <x-thiqah-service-card
                :icon="asset('img/images/home/soil.png')"
                title="Soil"/>

            <x-thiqah-service-card
                :icon="asset('img/images/home/bricks.png')"
                title="Bricks"/>

            <x-thiqah-service-card
                :icon="asset('img/images/home/contracts.png')"
                title="Contracts"/>

            <x-thiqah-service-card
                :icon="asset('img/images/home/insurance.png')"
                title="Insurance"/>

            <x-services-view-all-card href="{{ route('services.index') }}"/>

        </div>
    </section>

    <x-section-title-band title="Service Providers" :background-image="asset('img/images/home/thiqah-services-bg.png')"/>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        <div class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">

            <x-category-filter-pill active="true" :image="asset('img/images/home/all.png')" image-alt="All" label="All"/>

            <x-category-filter-pill :image="asset('img/images/home/construction.png')" image-alt="Construction" label="Construction"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/electricity.png')" image-alt="Electricity" label="Electricity"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/plumbing.png')" image-alt="Plumbing" label="Plumbing"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/carpentry.png')" image-alt="Carpentry" label="Carpentry"/>

        </div>
    </section>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto font-sans flex flex-col mt-16 px-4 md:px-6 xl:px-0">

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

        <div class="mt-12 md:mt-20 flex justify-center">
            <x-button class="bg-[#223862] xl:w-[247px] xl:h-[64px] text-white px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300" href="{{ route('service-providers.index') }}">See All</x-button>
        </div>

    </section>

    <section class="w-full mx-auto px-4 xl:px-0 py-16 font-sans flex justify-center overflow-hidden">

        <div class="w-full xl:w-[1228px] 2xl:w-[2480px] justify-center rounded-[30px] md:rounded-[45px] p-6 md:p-12 xl:p-10 flex flex-col xl:flex-row items-center gap-10 xl:gap-[86px] 2xl:gap-[350px] overflow-visible bg-center bg-cover"
             style="background-image: url('{{ asset('img/images/About Us/Frame 1321315233.png') }}');">

            <div class="w-full xl:w-[610px] flex flex-col items-center xl:items-start text-center xl:text-left text-white">

                <div class="flex items-center gap-3 mb-4 md:mb-6">
                    <img src="{{ asset('img/images/home/decor.png') }}" alt="decor" class="w-[12px] h-[18px] xl:w-[14px] xl:h-[22px]">
                    <span class="text-[12px] md:text-[16px] text-[#AAAAAA] uppercase font-medium tracking-wider">Send Requests</span>
                </div>

                <h2 class="text-[32px] md:text-[50px] xl:text-[53px] font-bold text-white mb-4 md:mb-8 leading-tight xl:whitespace-nowrap">
                    Big Projects <br class="hidden xl:inline"/> Await!
                </h2>

                <div class="mb-4 md:mb-8">
                    <span class="text-[40px] md:text-[70px] xl:text-[85px] font-extrabold text-[#D9D9D9] leading-none block md:inline"
                          style="font-family: 'Space Grotesk', sans-serif;">
                        200 Projects
                    </span>
                </div>

                <p class="text-[12px] md:text-[16px] text-[#AAAAAA] mb-8 md:mb-12 max-w-[530px] leading-relaxed">
                    Explore the latest opportunities and submit your price offer today.
                </p>

                <x-button class="xl:block hidden inline-flex items-center justify-center text-center bg-[#FFFFFF] w-full max-w-[247px] xl:w-[247px] xl:h-[64px] text-[#20395D] py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[16px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300" href="{{ route('request.index') }}">See All</x-button>

            </div>

            <div class="w-full xl:w-[532px] h-auto xl:h-[456px] flex flex-col items-center xl:items-end gap-6 xl:gap-0 relative">

                <div class="w-[260px] md:w-[320px] xl:w-[380px] h-[160px] md:h-[200px] xl:h-[231px] rounded-[100px] xl:mr-56 overflow-hidden shadow-2xl z-10 flex items-center justify-center">
                    <img src="{{ asset('img/images/home/banner1.png') }}" alt="Road Roller" class="w-full h-full object-cover">
                </div>

                <div class="w-[300px] md:w-[450px] xl:w-[550px] h-[180px] md:h-[220px] xl:h-[200px] rounded-full overflow-hidden shadow-2xl z-20 xl:mr-14 -mt-10 md:-mt-5 xl:mt-[20px] flex items-center justify-center">
                    <img src="{{ asset('img/images/home/banner2.png') }}" alt="Construction Site" class="w-full h-full object-cover">
                </div>

                <x-button class="xl:hidden block inline-flex items-center justify-center text-center bg-[#FFFFFF] w-full max-w-[247px] xl:w-[247px] xl:h-[64px] text-[#20395D] py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[16px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300" href="{{ route('request.index') }}">See All</x-button>
            </div>
        </div>
    </section>

    <x-section-title-band title="Products" :background-image="asset('img/images/home/thiqah-services-bg.png')"/>

    <section class="bg-[#FAF8F4] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        <div class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">

            <x-category-filter-pill active="true" :image="asset('img/images/home/all.png')" image-alt="All" label="All"/>

            <x-category-filter-pill :image="asset('img/images/home/building.png')" image-alt="Construction" label="Building"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/electric.png')" image-alt="Electricity" label="Electrical"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/lighting.png')" image-alt="Plumbing" label="Lighting"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/plumbing.png')" image-alt="Plumbing" label="Plumbing"/>

        </div>
    </section>

    <section class="bg-[#FAF8F4] w-full main-container mx-auto py-16 px-4">

        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-6 md:space-x-0 xl:gap-[23px] justify-items-center">

            @foreach ([
                'product1.png',
                'product2.png',
                'product3.png',
                'product4.png',
                'product5.png',
                'product6.png',
                'product7.png',
                'product1.png',
            ] as $index => $productImage)
                <x-product-card
                    :image="asset('img/images/home/' . $productImage)"
                    :detail-href="route('products.show', $index + 1)"/>
            @endforeach

        </div>

        <div class="mt-16 flex justify-center">
            <x-button class="bg-[#FFFFFF] xl:w-[247px] xl:h-[64px] text-[#20395D] px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300" href="{{ route('products.index') }}">See All</x-button>
        </div>

    </section>

@endsection
