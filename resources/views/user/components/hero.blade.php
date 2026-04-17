@props([
    'image',
    'alt' => '',
    'minHeightClass' => 'min-h-[800px]',
])

<section class="main-container">
    <main class="relative {{ $minHeightClass }} w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

        <div class="absolute inset-0 z-0">
            <img src="{{ $image }}" class="w-full h-full object-cover" alt="{{ $alt }}">
        </div>

        <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6">
            {{ $slot }}
        </div>

    </main>
</section>
