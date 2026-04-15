@props([
    'type' => 'text',
    'placeholder' => '',
])

<input type="{{ $type }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'w-full border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#20395D]']) }} />
