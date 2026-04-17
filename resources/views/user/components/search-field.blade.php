@props([
    'placeholder' => 'Search...',
])

<div {{ $attributes->merge(['class' => 'relative w-full']) }}>
    <input type="text" placeholder="{{ $placeholder }}"
           class="lg:w-[265px] lg:h-[48px] md:w-[200px] md:h-[42px] w-full h-[40px] bg-white border border-gray-200 py-3.5 px-12 rounded-[5px] shadow-sm focus:outline-none placeholder:text-[#A8A8A8]">

    <span class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none">
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
