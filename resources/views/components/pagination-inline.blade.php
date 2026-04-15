<div {{ $attributes->merge(['class' => 'main-container flex items-center gap-3 font-sans lg:justify-end justify-center']) }}>

    <button type="button"
            class="md:w-[125px] w-24 md:h-[42px] flex items-center md:gap-2 md:p-2 pr-[6px] md:pr-[0px] border border-[#20395D] md:rounded-[10px] rounded-[6px] text-[#20395D] font-bold hover:bg-gray-50 transition-colors">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.0898 19.9201L8.56984 13.4001C7.79984 12.6301 7.79984 11.3701 8.56984 10.6001L15.0898 4.08008"
                stroke="#20395D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"/>
        </svg>
        <span class="md:text-[18px] text-[10px]">Previous</span>
    </button>

    <div class="flex gap-[12px]">
        <button type="button"
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
            <span class="md:text-[18px] text-[10px]">1</span>
        </button>

        <button type="button"
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full bg-[#20395D] text-white font-bold shadow-md">
            <span class="md:text-[18px] text-[10px]">2</span>
        </button>

        <button type="button"
                class="md:w-[32px] w-[24px] md:h-[32px] h-[24px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
            <span class="md:text-[18px] text-[10px]">3</span>
        </button>

        <div class="md:block hidden flex items-center px-1 tracking-[2px] font-bold text-gray-800">
            ....................
        </div>

        <button type="button"
                class="md:block hidden w-[32px] h-[32px] flex items-center justify-center rounded-full border border-gray-300 text-gray-400 font-bold hover:border-gray-300 transition-all">
            10
        </button>
    </div>

    <button type="button"
            class="md:w-[125px] w-24 md:h-[42px] flex items-center text-center justify-center md:gap-2  bg-[#20395D] md:rounded-[10px] rounded-[6px] text-white font-bold hover:bg-[#1a2c4e] transition-all shadow-md">
        <span class="md:text-[18px] text-[10px]">Next</span>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"/>
        </svg>
    </button>
</div>
