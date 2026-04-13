@props(['class' => 'w-[200px] md:w-full md:max-w-[306px] md:aspect-[306/144.42]'])
<div {{ $attributes->merge(['class' => 'mb-10 flex justify-center md:justify-start']) }}>
    <img src="{{ asset('images/auth/header.png') }}" alt="{{ config('app.name', 'THIQAH') }}" class="{{ $class }}">
</div>
