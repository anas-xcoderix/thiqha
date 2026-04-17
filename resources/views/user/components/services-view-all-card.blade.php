@props(['href'])

<a href="{{ $href }}"
   class="bg-white w-full rounded-[37.31px] p-8 md:p-12 flex flex-col items-center justify-center shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 border border-gray-50/50 cursor-pointer group">
    <svg class="w-[80px] h-[80px] md:w-[120px] md:h-[120px]" viewBox="0 0 120 120" fill="none">
        <path
            d="M60.0005 110C87.6147 110 110 87.6142 110 60C110 32.3858 87.6147 10 60.0005 10C32.3862 10 10.0005 32.3858 10.0005 60C10.0005 87.6142 32.3862 110 60.0005 110Z"
            stroke="#826EA3" stroke-width="7.5" stroke-miterlimit="10" stroke-linecap="round"
            stroke-linejoin="round"/>
        <path d="M53.7002 77.6501L71.3002 60.0001L53.7002 42.3501" stroke="#826EA3" stroke-width="7.5"
              stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="text-[26px] md:text-[32px] font-bold text-black mt-4 md:mt-6">View All</span>
</a>
