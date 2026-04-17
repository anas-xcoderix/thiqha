@extends('user.layouts.app')
@section('title', 'THIQAH – Products')

@section('content')

    <x-hero :image="asset('img/images/home/hero.png')" alt="Construction">
        <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
            Products
        </h1>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <x-button class="btn-leaf bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all" href="{{ route('products.index') }}">Explore</x-button>
            <x-button class="btn-leaf bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all" href="{{ route('about.index') }}">Contact Us</x-button>
        </div>
    </x-hero>

    <x-page-heading-search heading="Products"/>

    <section class="main-container w-full mx-auto flex xl:justify-center overflow-hidden">

        @include('user.partials.category-pills-row', [
            'categories' => $productCategories,
            'linkRoute' => 'products.index',
            'activeCategoryId' => $activeCategoryId,
            'extraButtonClass' => 'shadow-[0_0_30px_5px_rgba(0,0,0,0.10)]',
        ])
    </section>

    <section class="bg-[#FAF8F4] w-full main-container mx-auto py-16 px-4">
        <div id="product-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 xl:gap-[23px] justify-items-center">

            @forelse ($products as $product)
                @php
                    $thumb = $product->images->first();
                @endphp
                <x-product-card
                    :image="$thumb ? $thumb->url() : asset('img/images/home/product1.png')"
                    :alt="$product->displayName()"
                    :category="$product->category?->displayName() ?? ''"
                    :title="$product->displayName()"
                    :price="number_format($product->finalUnitPrice(), 2).' KWD'"
                    :detail-href="route('products.show', $product)"
                />
            @empty
                <p class="col-span-full text-center text-gray-500 py-8">{{ __('No products match this category.') }}</p>
            @endforelse

        </div>

        @if ($products->hasPages())
            <div class="mt-10 flex justify-center px-2">
                {{ $products->links() }}
            </div>
        @endif
    </section>

@endsection
