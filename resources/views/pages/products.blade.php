@extends('layouts.app')
@section('title', 'THIQAH – Products')

@section('content')

    <x-hero :image="asset('img/images/home/hero.png')" alt="Construction">
        <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
            Products
        </h1>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <x-button variant="leaf-primary" href="{{ route('products.index') }}">Explore</x-button>
            <x-button variant="leaf-secondary" href="{{ route('about.index') }}">Contact Us</x-button>
        </div>
    </x-hero>

    <x-page-heading-search heading="Products"/>

    <section class="bg-[#FFFFFF] main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        <div class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">

            <x-category-filter-pill active="true" :image="asset('img/images/home/all.png')" image-alt="All" label="All"
                extra-button-class="shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]"/>

            <x-category-filter-pill :image="asset('img/images/home/building.png')" image-alt="Construction" label="Building"
                extra-button-class="shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/electric.png')" image-alt="Electricity" label="Electrical"
                extra-button-class="shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/lighting.png')" image-alt="Plumbing" label="Lighting"
                extra-button-class="shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]"/>

            <x-category-filter-pill inactive-md-width-class="md:w-[251px]" :image="asset('img/images/home/plumbing.png')" image-alt="Plumbing" label="Plumbing"
                extra-button-class="shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]"/>

        </div>
    </section>

    <section class="bg-[#FAF8F4] w-full main-container mx-auto py-16 px-4">
        <div id="product-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 xl:gap-[23px] justify-items-center">

            @foreach ([
                ['id' => 1, 'name' => 'Product 1', 'img' => 'product1.png'],
                ['id' => 3, 'name' => 'Product 2', 'img' => 'product2.png'],
                ['id' => 4, 'name' => 'Product 3', 'img' => 'product3.png'],
                ['id' => 5, 'name' => 'Product 4', 'img' => 'product4.png'],
                ['id' => 6, 'name' => 'Product 5', 'img' => 'product5.png'],
                ['id' => 7, 'name' => 'Product 6', 'img' => 'product6.png'],
                ['id' => 8, 'name' => 'Product 7', 'img' => 'product7.png'],
            ] as $product)
                <x-product-card
                    :image="asset('img/images/home/' . $product['img'])"
                    :alt="$product['name']"
                    :title="$product['name']"
                    :detail-href="route('products.show', $product['id'])"/>
            @endforeach

        </div>
    </section>

    <x-pagination-inline/>

@endsection
