@props([
    /** @var \Illuminate\Support\Collection<int, \App\Models\Category>|\Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories */
    'categories',
    'extraButtonClass' => '',
    'filterGridId' => null,
    'linkRoute' => null,
    'activeCategoryId' => null,
])

@php
    $allImage = asset('img/images/home/all.png');
@endphp

@if ($filterGridId)
    <div data-product-pill-bar="{{ $filterGridId }}" class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">
        <x-category-filter-pill
            :active="false"
            :image="$allImage"
            image-alt="All"
            label="All"
            :extra-button-class="$extraButtonClass"
            :product-category-filter="''"
            data-selected="1"
        />
        @foreach ($categories as $category)
            <x-category-filter-pill
                :active="false"
                inactive-md-width-class="md:w-[251px]"
                :image="$category->logoUrl() ?? $allImage"
                :image-alt="$category->name_en"
                :label="$category->displayName()"
                :extra-button-class="$extraButtonClass"
                :product-category-filter="(string) $category->id"
                data-selected="0"
            />
        @endforeach
    </div>
@elseif ($linkRoute)
    <div class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">
        <x-category-filter-pill
            :active="$activeCategoryId === null"
            :href="route($linkRoute)"
            :image="$allImage"
            image-alt="All"
            label="All"
            :extra-button-class="$extraButtonClass"
        />
        @foreach ($categories as $category)
            <x-category-filter-pill
                :active="(int) $activeCategoryId === (int) $category->id"
                :href="route($linkRoute, ['category_id' => $category->id])"
                inactive-md-width-class="md:w-[251px]"
                :image="$category->logoUrl() ?? $allImage"
                :image-alt="$category->name_en"
                :label="$category->displayName()"
                :extra-button-class="$extraButtonClass"
            />
        @endforeach
    </div>
@else
    <div class="flex items-center gap-3 md:gap-[31.71px] px-4 xl:px-0 pb-4 xl:pb-0 overflow-x-auto xl:overflow-visible no-scrollbar w-full xl:w-auto">
        <x-category-filter-pill
            active="true"
            :image="$allImage"
            image-alt="All"
            label="All"
            :extra-button-class="$extraButtonClass"
        />

        @foreach ($categories as $category)
            <x-category-filter-pill
                inactive-md-width-class="md:w-[251px]"
                :image="$category->logoUrl() ?? $allImage"
                :image-alt="$category->name_en"
                :label="$category->displayName()"
                :extra-button-class="$extraButtonClass"
            />
        @endforeach
    </div>
@endif

@if ($filterGridId)
    @once
        @push('scripts')
            <style>
                [data-product-pill-bar] [data-product-category][data-selected="1"] {
                    box-shadow: 0 0 0 3px #223862, 0 0 0 6px rgba(34, 56, 98, 0.12);
                    border-radius: 25px;
                }
            </style>
            <script>
                (function () {
                    document.querySelectorAll('[data-product-pill-bar]').forEach(function (bar) {
                        var gridId = bar.getAttribute('data-product-pill-bar');
                        var grid = document.getElementById(gridId);
                        if (!grid) return;
                        bar.addEventListener('click', function (e) {
                            var btn = e.target.closest('[data-product-category]');
                            if (!btn || !bar.contains(btn)) return;
                            var cat = btn.getAttribute('data-product-category');
                            bar.querySelectorAll('[data-product-category]').forEach(function (b) {
                                b.setAttribute('data-selected', b === btn ? '1' : '0');
                            });
                            grid.querySelectorAll('[data-product-card]').forEach(function (card) {
                                var cid = card.getAttribute('data-product-category');
                                var show = (cat === '' || cat == null) ? true : String(cid) === String(cat);
                                card.style.display = show ? '' : 'none';
                            });
                        });
                    });
                })();
            </script>
        @endpush
    @endonce
@endif
