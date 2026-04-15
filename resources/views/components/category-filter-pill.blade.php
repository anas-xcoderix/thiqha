@props([
    'active' => false,
    'image',
    'imageAlt' => '',
    'label',
    'inactiveMdWidthClass' => 'md:w-[252px]',
    'extraButtonClass' => '',
])

@php
    $base = 'flex flex-col items-center justify-center flex-shrink-0 transition-all';
    $activeClasses = 'min-w-[120px] h-[120px] md:w-[151px] md:h-[156px] bg-[#223862] rounded-[25px] shadow-sm hover:shadow-md';
    $inactiveClasses = 'min-w-[180px] h-[120px] ' . $inactiveMdWidthClass . ' md:h-[156px] bg-white rounded-[25px] shadow-sm border border-gray-50 hover:shadow-md';
    $sizeClass = $active ? $activeClasses : $inactiveClasses;
@endphp

<button type="button" {{ $attributes->merge(['class' => trim($base . ' ' . $sizeClass . ' ' . $extraButtonClass)]) }}>
    <div class="mb-2">
        <img src="{{ $image }}" alt="{{ $imageAlt ?: $label }}"
             class="w-10 h-10 md:w-[63px] md:h-[63px] object-contain {{ $active ? 'invert brightness-0' : '' }}">
    </div>
    @if($active)
        <span class="text-white font-bold text-[18px] lg:text-[24px]">{{ $label }}</span>
    @else
        <span class="text-gray-500 font-semibold text-[18px] lg:text-[24px]">{{ $label }}</span>
    @endif
</button>
