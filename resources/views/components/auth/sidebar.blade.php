@props([
    'wrapperClass' => 'hidden lg:block',
    'imgClass' => 'lg:w-[25rem] xl:w-[35.5rem] 2xl:w-[50rem] h-full object-cover min-h-screen',
])
<div {{ $attributes->merge(['class' => $wrapperClass]) }}>
    <img src="{{ asset('images/auth/sidebar.png') }}" alt="" class="{{ $imgClass }}">
</div>
