@php
    /** @var \App\Models\Service|null $service */
@endphp

<div>
    <label for="name_en" class="block text-sm font-medium text-navy">{{ __('Name (EN)') }}</label>
    <input type="text" name="name_en" id="name_en" value="{{ old('name_en', $service?->name_en) }}"
           class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
           required>
    @error('name_en')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="name_ar" class="block text-sm font-medium text-navy">{{ __('Name (AR)') }}</label>
    <input type="text" name="name_ar" id="name_ar" value="{{ old('name_ar', $service?->name_ar) }}"
           class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
           dir="rtl" required>
    @error('name_ar')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="sort_order" class="block text-sm font-medium text-navy">{{ __('Sort order') }}</label>
    <input type="number" name="sort_order" id="sort_order" min="0" step="1"
           value="{{ old('sort_order', $service?->sort_order ?? 0) }}"
           class="mt-1.5 w-full max-w-xs rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
    <p class="mt-1 text-xs text-gray-500">{{ __('Lower numbers appear first on the home page.') }}</p>
    @error('sort_order')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="logo" class="block text-sm font-medium text-navy">{{ __('Icon / logo') }}</label>
    <input type="file" name="logo" id="logo" accept="image/*"
           class="mt-1.5 block w-full text-sm text-gray-600 file:mr-3 file:rounded-lg file:border-0 file:bg-primary/10 file:px-3 file:py-2 file:text-sm file:font-semibold file:text-primary hover:file:bg-primary/15 {{ $service ? '' : 'required' }}">
    <p class="mt-1 text-xs text-gray-500">{{ $service ? __('Leave empty to keep the current image.') : __('PNG, JPG, or WebP up to 2 MB.') }}</p>
    @error('logo')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
