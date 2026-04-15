@props([
    'variant' => 'leaf-primary',
    'href' => null,
    'type' => 'button',
])

@php
    $classes = match ($variant) {
        'leaf-primary' => 'btn-leaf bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all',
        'leaf-secondary' => 'btn-leaf bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all',
        'rounded-leaf-primary' => 'rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all',
        'rounded-leaf-secondary' => 'rounded-tl-[2.5rem] rounded-br-[2.5rem] bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all',
        'order-now' => 'border-[1.5px] border-[#816EA2] text-[#816EA2] px-10 py-2.5 rounded-tl-[20px] rounded-br-[20px] font-bold text-[15px] hover:bg-[#816EA2] hover:text-white transition-colors',
        'see-all-dark' => 'bg-[#223862] xl:w-[247px] xl:h-[64px] text-white px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300',
        'see-all-white' => 'bg-[#FFFFFF] xl:w-[247px] xl:h-[64px] text-[#20395D] px-12 md:px-20 py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[18px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300',
        'see-all-banner' => 'bg-[#FFFFFF] w-full max-w-[247px] xl:w-[247px] xl:h-[64px] text-[#20395D] py-3 md:py-4 rounded-tl-[35px] rounded-br-[35px] font-bold text-[16px] md:text-[18px] shadow-lg hover:shadow-[#223862]/30 hover:-translate-y-1 transition-all duration-300',
        default => 'btn-leaf bg-[#21395D] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->class([$classes]) }}>{{ $slot }}</button>
@endif
