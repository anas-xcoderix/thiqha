@props([
    'image',
    'alt' => 'Product',
    'category' => 'Bricks',
    'title' => 'Products',
    'price' => '100 KD',
    'detailHref' => null,
    'wrapperClass' => '',
    'filterCategoryId' => null,
])

<div @class([
    $wrapperClass,
    'bg-white rounded-[20px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col group',
]) @if($filterCategoryId !== null) data-product-card data-product-category="{{ $filterCategoryId }}" @endif>

    <div class="relative w-full h-[200px] xl:h-[220px] overflow-hidden">
        @if($detailHref)
            <a href="{{ $detailHref }}" class="block w-full h-full">
                <img src="{{ $image }}" alt="{{ $alt }}"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </a>
        @else
            <img src="{{ $image }}" alt="{{ $alt }}"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        @endif

        <x-product-wishlist-button class="absolute top-4 right-4 z-10"/>
    </div>

    <div class="p-5 flex flex-col flex-grow">
        <div class="mb-3">
            <span class="bg-[#F3F4F6] lg:text-[18px] text-[12px] px-4 py-1 rounded-full font-medium">{{ $category }}</span>
        </div>

        <div class="flex justify-between items-center mb-6 gap-2">
            @if($detailHref)
                <h3 class="lg:text-[24px] text-[18px] font-medium">
                    <a href="{{ $detailHref }}" class="text-inherit no-underline hover:opacity-80">{{ $title }}</a>
                </h3>
            @else
                <h3 class="lg:text-[24px] text-[18px] font-medium">{{ $title }}</h3>
            @endif
            <span class="lg:text-[24px] text-[18px] font-bold text-[#5570A6] whitespace-nowrap">{{ $price }}</span>
        </div>

        <a href="{{ route('add-to-cart.index') }}"
           class="w-full xl:h-[40px] p-1 bg-[#223862] text-white rounded-[9.41px] font-bold lg:text-[18px] text-[16px] mt-auto hover:bg-[#1a2c4e] transition-colors shadow-lg shadow-[#223862]/20 flex items-center justify-center no-underline">
            Add To Cart
        </a>
    </div>
</div>
