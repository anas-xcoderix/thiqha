@props([
    'image',
    'imageAlt' => 'Construction',
])

<div class="relative group mx-auto w-full xl:rounded-[20px] lg:rounded-[30px] rounded-[25px] overflow-hidden shadow-md bg-white">
    <img src="{{ $image }}" alt="{{ $imageAlt }}"
         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

    <div class="absolute bottom-3 left-3 right-3 lg:bottom-4 lg:left-4 lg:right-4 xl:bottom-1 xl:left-1 xl:right-1 bg-white h-auto min-h-[80px] xl:min-h-[92px] rounded-[22px] xl:rounded-full 2xl:rounded-[25px] px-4 py-3 xl:px-6 xl:py-4 2xl:px-2 2xl:py-2 flex items-center justify-between shadow-[0_10px_25px_rgba(0,0,0,0.1)]">

        <div class="flex flex-col overflow-hidden w-full">
            <div class="flex items-center gap-1.5 mb-0.5">
                <span class="xl:text-[17px] lg:text-[15px] text-[14px] font-bold text-black tracking-tight truncate">Provider Name</span>
                <img src="{{ asset('img/images/home/tick.png') }}" alt="Tick"
                     class="xl:w-[20px] xl:h-[20px] lg:w-[16px] lg:h-[16px] w-[15px] h-[15px]">
            </div>

            <span class="text-[11px] text-[#AAAAAA] font-medium mb-1.5">Building</span>

            <div class="flex gap-1 xl:gap-2 2xl:gap-1 items-center">
                <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Bricks</span>
                <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Electrical</span>
                <span class="bg-[#D9D3E3] text-[#000000] text-[8px] xl:text-[10px] px-2 xl:px-3 2xl:px-2 py-0.5 xl:py-1 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">Lighting</span>
            </div>
        </div>

        <button type="button" class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center text-gray-400 hover:text-[#223862] transition-colors ml-2">
            <svg class="xl:w-6 xl:h-6 lg:w-5 lg:h-5 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>
</div>
