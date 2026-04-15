@props([
    'icon',
    'iconAlt' => '',
    'title',
    'wrapperClass' => 'bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50',
    'purpleIconGlow' => true,
])

<div {{ $attributes->merge(['class' => $wrapperClass]) }}>
    <div @class([
        'w-[80px] h-[80px] md:w-[100px] md:h-[100px] bg-[#816EA2] rotate-45 flex items-center justify-center rounded-[22px] mb-8 md:mb-10 shadow-lg flex-shrink-0',
        'shadow-[#9381BB]/20' => $purpleIconGlow,
    ])>
        <div class="-rotate-45">
            <img src="{{ $icon }}" alt="{{ $iconAlt ?: $title }}" class="w-10 h-10 md:w-12 md:h-12 object-contain brightness-0 invert">
        </div>
    </div>

    <h3 class="text-[26px] md:text-[32px] font-bold text-black mb-6 md:mb-8 text-center">{{ $title }}</h3>

    <x-button variant="order-now" type="button">Order Now</x-button>
</div>
