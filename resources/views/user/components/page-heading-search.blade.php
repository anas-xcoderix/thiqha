@props(['heading'])

<div class="pt-10 font-sans">
    <div class="main-container mx-auto px-4">
        <div class="flex flex-col-reverse md:flex-row justify-between items-start md:items-center mb-12 gap-6">

            <h2 class="lg:text-[48px] md:text-[40px] text-[32px] font-bold text-[#000000]">
                {{ $heading }}
            </h2>

            <div class="flex items-center gap-3 w-full md:w-auto">
                <x-search-field/>
                <x-filter-tool-button/>
            </div>
        </div>
    </div>
</div>
