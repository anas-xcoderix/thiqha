@props([
    'image',
    'title' => 'Products',
    'linePrice' => '120 KWD',
    'category' => 'Bricks',
    'quantity' => '1',
    'borderBottom' => true,
])

<article class="flex flex-col sm:flex-row items-center sm:items-center gap-6 p-4 md:p-6 {{ $borderBottom ? 'border-b' : '' }}">
    <div class="w-full sm:w-[158px] h-[154px] overflow-hidden rounded-[10px] flex-shrink-0">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
    </div>

    <div class="flex flex-col flex-grow gap-3 w-full">
        <div class="flex justify-between items-start">
            <h3 class="text-[18px] font-bold">{{ $title }}</h3>
            <span class="text-[18px] font-bold whitespace-nowrap hidden sm:block">{{ $linePrice }}</span>
        </div>
        <span class="text-[16px] text-gray-400">{{ $linePrice }}</span>
        <div>
            <span class="bg-[#F3F4F6] text-[14px] md:text-[18px] px-4 py-1.5 rounded-full font-medium w-fit">{{ $category }}</span>
        </div>

        <div class="flex items-center justify-between sm:justify-start gap-4">
            <div class="flex items-center justify-center gap-2 border border-gray-200 rounded-[10px] bg-white h-[31px]">
                <button type="button" class="w-8 h-8 flex items-center justify-center text-[#20395D] font-medium text-xl hover:bg-blue-50">
                    −
                </button>
                <input type="text" value="{{ $quantity }}"
                       class="w-10 text-center text-[18px] font-bold text-black outline-none" readonly>
                <button type="button" class="w-8 h-8 flex items-center justify-center text-[#20395D] font-medium text-xl hover:bg-blue-50">
                    +
                </button>
            </div>

            <span class="text-[18px] font-bold sm:hidden">{{ $linePrice }}</span>

            <button type="button" class="w-11 h-11 flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="3.3999" width="10" height="12" rx="1" stroke="currentColor"
                          stroke-width="1.2"/>
                    <rect x="1.5" y="1.3999" width="13" height="2" rx="0.5" stroke="currentColor"
                          stroke-width="1.2"/>
                    <path d="M6 0.600098L10 0.600098M8 6V13M10.5 6V13M5.5 6V13" stroke="currentColor"
                          stroke-width="1.2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
</article>
