@php
    /** @var \App\Models\Product|null $product */
    $showStock = $showStock ?? false;
@endphp

<div class="grid gap-5 sm:grid-cols-2">
    <div class="sm:col-span-2">
        <label for="category_id" class="block text-sm font-medium text-navy">{{ __('Category') }}</label>
        <select name="category_id" id="category_id" required
                class="mt-1.5 w-full rounded-xl border border-gray-200 bg-white px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
            <option value="">{{ __('Select category') }}</option>
            @foreach ($productCategories as $cat)
                <option value="{{ $cat->id }}" @selected((int) old('category_id', $product?->category_id) === $cat->id)>
                    {{ $cat->name_en }} — {{ $cat->name_ar }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="name_en" class="block text-sm font-medium text-navy">{{ __('Name (EN)') }}</label>
        <input type="text" name="name_en" id="name_en" value="{{ old('name_en', $product?->name_en) }}" required
               class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
        @error('name_en')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="name_ar" class="block text-sm font-medium text-navy">{{ __('Name (AR)') }}</label>
        <input type="text" name="name_ar" id="name_ar" value="{{ old('name_ar', $product?->name_ar) }}" dir="rtl" required
               class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
        @error('name_ar')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-5">
    <label for="detail_en" class="block text-sm font-medium text-navy">{{ __('Detail (EN)') }}</label>
    <textarea name="detail_en" id="detail_en" rows="5" required
              class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">{{ old('detail_en', $product?->detail_en) }}</textarea>
    @error('detail_en')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mt-5">
    <label for="detail_ar" class="block text-sm font-medium text-navy">{{ __('Detail (AR)') }}</label>
    <textarea name="detail_ar" id="detail_ar" rows="5" dir="rtl" required
              class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">{{ old('detail_ar', $product?->detail_ar) }}</textarea>
    @error('detail_ar')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mt-5">
    <label for="specification_en" class="block text-sm font-medium text-navy">{{ __('Specification (EN)') }}</label>
    <textarea name="specification_en" id="specification_en" rows="4"
              class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">{{ old('specification_en', $product?->specification_en) }}</textarea>
    @error('specification_en')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mt-5">
    <label for="specification_ar" class="block text-sm font-medium text-navy">{{ __('Specification (AR)') }}</label>
    <textarea name="specification_ar" id="specification_ar" rows="4" dir="rtl"
              class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">{{ old('specification_ar', $product?->specification_ar) }}</textarea>
    @error('specification_ar')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
    <div>
        <label for="price" class="block text-sm font-medium text-navy">{{ __('Price') }}</label>
        <input type="number" name="price" id="price" step="0.01" min="0" value="{{ old('price', $product?->price) }}" required
               class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
        @error('price')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="discount_type" class="block text-sm font-medium text-navy">{{ __('Discount type') }}</label>
        <select name="discount_type" id="discount_type" required
                class="mt-1.5 w-full rounded-xl border border-gray-200 bg-white px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
            @foreach (\App\Enums\DiscountType::cases() as $dt)
                <option value="{{ $dt->value }}" @selected(old('discount_type', $product?->discount_type?->value ?? \App\Enums\DiscountType::Fixed->value) === $dt->value)>
                    {{ $dt->label() }}
                </option>
            @endforeach
        </select>
        @error('discount_type')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="discount" class="block text-sm font-medium text-navy">{{ __('Discount') }}</label>
        <input type="number" name="discount" id="discount" step="0.01" min="0" value="{{ old('discount', $product?->discount ?? 0) }}" required
               class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
        <p class="mt-1 text-xs text-gray-500">{{ __('Fixed: amount off price. Percentage: 0–100.') }}</p>
        @error('discount')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @if ($showStock)
        <div>
            <label for="stock" class="block text-sm font-medium text-navy">{{ __('Initial stock') }}</label>
            <input type="number" name="stock" id="stock" min="0" step="1" value="{{ old('stock', 0) }}" required
                   class="mt-1.5 w-full rounded-xl border border-gray-200 px-3 py-2.5 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
            @error('stock')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    @endif
</div>

<div class="mt-5">
    <label for="images" class="block text-sm font-medium text-navy">{{ $showStock ? __('Images') : __('Add images') }}</label>
    <input type="file" name="images[]" id="images" accept="image/*" multiple @if($showStock) required @endif
           class="mt-1.5 block w-full text-sm text-gray-600 file:mr-3 file:rounded-lg file:border-0 file:bg-primary/10 file:px-3 file:py-2 file:text-sm file:font-semibold file:text-primary hover:file:bg-primary/15">
    <p class="mt-1 text-xs text-gray-500">{{ $showStock ? __('Upload one or more images (required).') : __('Optional — keep at least one image total.') }}</p>
    @error('images')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

@if (! $showStock && $product && $product->images->isNotEmpty())
    <div class="mt-5">
        <p class="mb-2 text-sm font-medium text-navy">{{ __('Remove images') }}</p>
        <div class="flex flex-wrap gap-4">
            @foreach ($product->images as $img)
                <label class="flex cursor-pointer flex-col items-center gap-2 rounded-xl border border-gray-200 bg-white p-3 shadow-sm hover:border-red-200">
                    <img src="{{ $img->url() }}" alt="" class="h-20 w-20 rounded-lg object-cover">
                    <span class="flex items-center gap-1 text-xs text-gray-600">
                        <input type="checkbox" name="delete_image_ids[]" value="{{ $img->id }}" class="rounded border-gray-300 text-primary focus:ring-primary/30">
                        {{ __('Remove') }}
                    </span>
                </label>
            @endforeach
        </div>
        @error('delete_image_ids')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
@endif
