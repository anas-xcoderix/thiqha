@props([
    'title',
    'backgroundImage',
    'wrapperClass' => 'pt-20 bg-[#FAF8F4]',
])

<div class="{{ $wrapperClass }}">
    <div class="relative mb-16 h-[9rem]" style="background-image: url('{{ $backgroundImage }}');">

        <div class="main-container mx-auto relative z-10">
            <h2 class="absolute top-[55px] text-3xl md:text-[48px] font-bold text-black">
                {{ $title }}
            </h2>
        </div>
    </div>
</div>
