@extends('user.layouts.app')

@php
    use App\Enums\DiscountType;
    $mainImage = $product->images->first();
    $final = $product->finalUnitPrice();
    $orig = (float) $product->price;
    $hasDiscount = (float) $product->discount > 0.00001;
    $stock = $product->inventory?->stock ?? 0;
@endphp

@section('title', $product->name_en.' — '.__('Products'))

@section('content')

    <main class="main-container mx-auto p-4 md:p-8 mt-[120px]">

        <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
            <nav class="text-[18px] text-gray-500 font-bold flex items-center flex-wrap gap-1">
                <a href="{{ route('home.index') }}" class="text-inherit no-underline hover:text-[#20395D]">{{ __('Home') }}</a>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" aria-hidden="true">
                    <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                          stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

                <a href="{{ route('products.index') }}" class="text-inherit no-underline hover:text-[#20395D]">{{ __('Products') }}</a>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" aria-hidden="true">
                    <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                          stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

                <span class="text-[#20395D] font-semibold">{{ $product->displayName() }}</span>
            </nav>

        </header>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 xl:gap-20 mb-20">
            <div class="flex flex-col gap-5">
                <div class="w-full aspect-square overflow-hidden rounded-[20px] shadow-lg bg-gray-100">
                    <img id="product-main-image"
                         src="{{ $mainImage ? $mainImage->url() : asset('img/images/home/product1.png') }}"
                         alt="{{ $product->displayName() }}"
                         class="w-full h-full object-cover">
                </div>
                @if ($product->images->count() > 1)
                    <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
                        @foreach ($product->images as $img)
                            <button type="button"
                                    class="min-w-[100px] aspect-square rounded-[15px] cursor-pointer border border-gray-100 p-1 hover:border-[#20395D] transition-colors"
                                    data-thumb-src="{{ $img->url() }}"
                                    onclick="document.getElementById('product-main-image').src=this.getAttribute('data-thumb-src')">
                                <img src="{{ $img->url() }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="flex flex-col">
                <div class="flex justify-between items-center gap-4">
                    <h1 class="text-[32px] md:text-[40px] font-bold text-black mb-2 leading-tight">{{ $product->displayName() }}</h1>
                    <div class="flex items-center px-2 py-2 shrink-0">
                        <button type="button" class="items-center justify-center" aria-label="{{ __('Wishlist') }}">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M22.4347 36.9954C21.8302 37.2088 20.8347 37.2088 20.2302 36.9954C15.0747 35.2354 3.55469 27.8932 3.55469 15.4488C3.55469 9.95543 7.98135 5.51099 13.4391 5.51099C16.6747 5.51099 19.5369 7.07543 21.3325 9.49321C23.128 7.07543 26.008 5.51099 29.2258 5.51099C34.6836 5.51099 39.1102 9.95543 39.1102 15.4488C39.1102 27.8932 27.5902 35.2354 22.4347 36.9954Z"
                                      stroke="#3A3A3A" stroke-width="2.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <p class="text-sm text-gray-500 mb-4">{{ $product->category?->displayName() ?? '' }} · {{ __('In stock') }}: <span class="font-semibold text-navy">{{ $stock }}</span></p>

                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="text-[24px] font-bold text-[#20395D]">{{ number_format($final, 2) }} KWD</span>
                    @if ($hasDiscount)
                        <span class="text-[16px] text-gray-400 line-through">{{ number_format($orig, 2) }} KWD</span>
                        @if ($product->discount_type === DiscountType::Percentage)
                            <span class="bg-[#F2F7FF] text-blue-900 text-[14px] font-bold px-2 py-1 rounded-[60px]">-{{ number_format(min(100, (float) $product->discount), 0) }}%</span>
                        @else
                            <span class="bg-[#F2F7FF] text-blue-900 text-[14px] font-bold px-2 py-1 rounded-[60px]">-{{ number_format((float) $product->discount, 2) }} KWD</span>
                        @endif
                    @endif
                </div>

                <div class="relative flex gap-8 border-b border-gray-300 mb-8 text-[16px] font-medium w-fit">
                    <button type="button" id="tab-details" class="relative pb-3 text-[#20395D] font-bold tab-btn" data-panel="panel-details">
                        {{ __('Product details') }}
                        <span class="tab-underline absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#20395D]"></span>
                    </button>

                    <button type="button" id="tab-specs" class="pb-3 text-gray-500 font-bold hover:text-[#20395D] transition-colors tab-btn" data-panel="panel-specs">
                        {{ __('Specifications') }}
                        <span class="tab-underline absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#20395D] hidden"></span>
                    </button>
                </div>

                <div id="panel-details" class="tab-panel text-[12px] md:text-[14px] text-gray-600 leading-[1.8] space-y-3 mb-12 flex flex-col max-h-[300px] overflow-y-auto pr-4">
                    <div class="whitespace-pre-wrap">{{ app()->getLocale() === 'ar' ? $product->detail_ar : $product->detail_en }}</div>
                </div>

                <div id="panel-specs" class="tab-panel hidden text-[12px] md:text-[14px] text-gray-600 leading-[1.8] space-y-3 mb-12 flex flex-col max-h-[300px] overflow-y-auto pr-4">
                    @if ($product->specification_en || $product->specification_ar)
                        <div class="whitespace-pre-wrap">{{ app()->getLocale() === 'ar' ? ($product->specification_ar ?? $product->specification_en) : ($product->specification_en ?? $product->specification_ar) }}</div>
                    @else
                        <p class="text-gray-400">{{ __('No specifications provided.') }}</p>
                    @endif
                </div>

                <div class="flex flex-col sm:flex-row gap-5 mb-5 items-stretch sm:items-center">
                    <div class="flex items-center justify-center gap-2 border border-gray-200 rounded-[10px] px-2 py-1 bg-[#F2F7FF] h-[56px] flex-shrink-0">
                        <button type="button" onclick="changeQty(-1)"
                                class="w-10 h-10 flex items-center justify-center rounded-full font-bold text-2xl hover:bg-blue-50">
                            <span class="px-2 rounded-md bg-white">−</span>
                        </button>
                        <input id="quantity" type="text" value="1" inputmode="numeric"
                               class="w-12 text-center text-[24px] font-bold text-black outline-none bg-transparent" readonly>
                        <button type="button" onclick="changeQty(1)"
                                class="w-10 h-10 flex items-center justify-center rounded-full font-bold text-2xl hover:bg-blue-50">
                            <span class="px-2 rounded-md bg-white">+</span>
                        </button>
                    </div>
                    <a href="{{ route('cart.index') }}"
                       class="w-full h-[56px] bg-[#20395D] text-white rounded-[10px] font-bold text-[20px] shadow-lg shadow-[#20395D]/20 hover:bg-[#1a2c4e] transition-colors flex-grow flex items-center justify-center no-underline">
                        {{ __('Add to cart') }}
                    </a>
                </div>
                <button type="button" onclick="toggleModal()"
                        class="w-full h-[56px] border border-[#20395D] text-[#20395D] rounded-[15px] font-bold text-[20px] hover:bg-blue-50 transition-colors">
                    {{ __('Send a quotation') }}
                </button>
            </div>
        </section>

        @if ($relatedProducts->isNotEmpty())
            <section class="mt-20">
                <div class="flex justify-between items-center mb-12">
                    <h2 class="text-[28px] md:text-[36px] font-bold text-black">{{ __('Related products') }}</h2>
                </div>

                <div id="related-product-grid"
                     class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide lg:grid lg:grid-cols-4 lg:gap-[23px]">
                    @foreach ($relatedProducts as $rel)
                        @php $rthumb = $rel->images->first(); @endphp
                        <x-product-card
                            wrapper-class="min-w-[305px] max-w-[305px] lg:min-w-0 lg:max-w-none flex-shrink-0 h-[400px]"
                            :image="$rthumb ? $rthumb->url() : asset('img/images/home/product1.png')"
                            :alt="$rel->displayName()"
                            :category="$rel->category?->displayName() ?? ''"
                            :title="$rel->displayName()"
                            :price="number_format($rel->finalUnitPrice(), 2).' KWD'"
                            :detail-href="route('products.show', $rel)"
                        />
                    @endforeach
                </div>
            </section>
        @endif

    </main>

    <div id="quote-modal" class="fixed inset-0 bg-black bg-opacity-50 z-[100] hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-[20px] xl:w-[504px] max-w-lg p-8 relative">
            <button type="button" onclick="toggleModal()"
                    class="absolute top-8 right-4 text-black text-2xl" aria-label="{{ __('Close') }}">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
            </button>

            <h2 class="text-2xl font-bold mb-6">{{ __('Send a quotation') }}</h2>

            <div class="space-y-4">
                <div class="flex gap-[8px]">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M10.0013 18.3332C14.5846 18.3332 18.3346 14.5832 18.3346 9.99984C18.3346 5.4165 14.5846 1.6665 10.0013 1.6665C5.41797 1.6665 1.66797 5.4165 1.66797 9.99984C1.66797 14.5832 5.41797 18.3332 10.0013 18.3332Z"
                              stroke="#A8A8A8" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 6.6665V10.8332" stroke="#A8A8A8" stroke-width="1.25" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M9.99609 13.3335H10.0036" stroke="#A8A8A8" stroke-width="1.66667" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <p class="text-[14px] font-bold text-[#A8A8A8]">{{ __('Enter the quantity and you will receive a quotation price') }}</p>
                </div>

                <p class="text-[18px] font-bold">{{ __('Enter the quantity') }}<span class="text-red-500 pl-[2px]">*</span></p>
                <x-input type="text" placeholder="{{ __('Your quantity') }}"
                         class="w-full text-[12px] lg:h-[48px] border border-gray-300 p-3 rounded-lg outline-none focus:border-[#20395D]"/>

                <button type="button" class="w-full bg-[#20395D] text-white py-3 rounded-lg font-bold">{{ __('Submit') }}</button>
            </div>
        </div>
    </div>

    <script>
        var maxQty = {{ max(1, (int) $stock) }};

        document.querySelectorAll('.tab-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var panelId = btn.getAttribute('data-panel');
                document.querySelectorAll('.tab-panel').forEach(function (p) {
                    p.classList.add('hidden');
                });
                var panel = document.getElementById(panelId);
                if (panel) panel.classList.remove('hidden');

                document.querySelectorAll('.tab-underline').forEach(function (u) {
                    u.classList.add('hidden');
                });
                document.querySelectorAll('.tab-btn').forEach(function (b) {
                    b.classList.remove('text-[#20395D]', 'font-bold');
                    b.classList.add('text-gray-500');
                });
                btn.classList.remove('text-gray-500');
                btn.classList.add('text-[#20395D]', 'font-bold');
                var u2 = btn.querySelector('.tab-underline');
                if (u2) u2.classList.remove('hidden');
            });
        });

        function changeQty(amount) {
            var qtyInput = document.getElementById('quantity');
            var currentQty = parseInt(qtyInput.value, 10);
            if (isNaN(currentQty)) currentQty = 1;
            var newQty = currentQty + amount;
            if (newQty < 1) newQty = 1;
            if (newQty > maxQty) newQty = maxQty;
            qtyInput.value = newQty;
        }

        function toggleModal() {
            var modal = document.getElementById('quote-modal');
            modal.classList.toggle('hidden');
        }
    </script>
@endsection
