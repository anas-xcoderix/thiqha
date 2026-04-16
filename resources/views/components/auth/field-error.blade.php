@props(['name', 'bag' => null])
@if ($bag)
    @error($name, $bag)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
@else
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
@endif
