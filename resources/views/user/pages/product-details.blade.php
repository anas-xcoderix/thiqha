@extends('user.layouts.app')

@section('content')

    <main class="main-container mx-auto p-4 md:p-8 mt-[120px]">

        <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
            <nav class="text-[18px] text-gray-500 font-bold flex items-center flex-wrap gap-1">
                <a href="{{ route('home.index') }}" class="text-inherit no-underline hover:text-[#20395D]">Home</a>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                    <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                          stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

                <a href="{{ route('products.index') }}" class="text-inherit no-underline hover:text-[#20395D]">Products</a>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                    <path d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008"
                          stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

                <span class="text-[#20395D] font-semibold">Product Page</span>
            </nav>

        </header>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 xl:gap-20 mb-20">
            <div class="flex flex-col gap-5">
                <div class="w-full aspect-square overflow-hidden rounded-[20px] shadow-lg">
                    <img src="{{ asset('img/images/home/product2.png') }}" alt="Main Product Image" class="w-full h-full object-cover">
                </div>
                <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
                    <div class="min-w-[100px] aspect-square rounded-[15px] cursor-pointer">
                        <img src="{{ asset('img/images/home/product2.png') }}" alt="Thumbnail 1" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="min-w-[100px] aspect-square rounded-[15px] border border-gray-100 p-1 cursor-pointer">
                        <img src="{{ asset('img/images/home/product2.png') }}" alt="Thumbnail 2" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="min-w-[100px] aspect-square rounded-[15px] border border-gray-100 p-1 cursor-pointer">
                        <img src="{{ asset('img/images/home/product2.png') }}" alt="Thumbnail 3" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="min-w-[100px] aspect-square rounded-[15px] border border-gray-100 p-1 cursor-pointer">
                        <img src="{{ asset('img/images/home/product2.png') }}" alt="Thumbnail 4" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex justify-between items-center">
                    <h1 class="text-[40px] font-bold text-black mb-6">Products</h1>
                    <div class="flex items-center px-5 py-2">
                        <button onclick="event.preventDefault();"
                                class="items-center justify-center">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4347 36.9954C21.8302 37.2088 20.8347 37.2088 20.2302 36.9954C15.0747 35.2354 3.55469 27.8932 3.55469 15.4488C3.55469 9.95543 7.98135 5.51099 13.4391 5.51099C16.6747 5.51099 19.5369 7.07543 21.3325 9.49321C23.128 7.07543 26.008 5.51099 29.2258 5.51099C34.6836 5.51099 39.1102 9.95543 39.1102 15.4488C39.1102 27.8932 27.5902 35.2354 22.4347 36.9954Z"
                                      stroke="#3A3A3A" stroke-width="2.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-[24px] font-bold text-[#20395D]">300 KWD</span>
                    <span class="text-[16px] text-gray-400 line-through">350 KWD</span>
                    <span class="bg-[#F2F7FF] text-blue-900 text-[14px] font-bold px-2 py-1 rounded-[60px]">-15%</span>
                </div>

                <div class="relative flex gap-8 border-b border-gray-300 mb-8 text-[16px] font-medium w-fit">

                    <button class="relative pb-3 text-[#20395D] font-bold">
                        Product Details
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#20395D]"></span>
                    </button>

                    <button class="pb-3 text-gray-500 font-bold hover:text-[#20395D] transition-colors">
                        Specifications
                    </button>
                </div>

                <div class="text-[12px] text-gray-600 leading-[1.8] space-y-3 mb-12 flex flex-col h-[300px] overflow-y-auto pr-4">
                    <p>Reel body made from rust-resistant and galvanized sheet steel 
                        - With 3-way socket outlet 13 A BS with self-closing cover providing protection against dust and
                        contamination. 
                        - Ergonomic cable guide handle for perfect cable-management during winding. 
                        - With hinged rotary handle for comfortable rolling up. 
                        - With thermal cut-out protection against overheating. 
                        - Reel body made from rust-resistant and galvanized sheet steel 
                        - With 3-way socket outlet 13 A BS with self-closing cover providing protection against dust and
                        contamination. 
                        - Ergonomic cable guide handle for perfect cable-management during winding</p>
                    <p>Reel body made from rust-resistant and galvanized sheet steel 
                        - With 3-way socket outlet 13 A BS with self-closing cover providing protection against dust and
                        contamination. 
                        - Ergonomic cable guide handle for perfect cable-management during winding. 
                        - With hinged rotary handle for comfortable rolling up. 
                        - With thermal cut-out protection against overheating. 
                        - Reel body made from rust-resistant and galvanized sheet steel 
                        - With 3-way socket outlet 13 A BS with self-closing cover providing protection against dust and
                        contamination. 
                        - Ergonomic cable guide handle for perfect cable-management during winding</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-5 mb-5 items-stretch sm:items-center">
                    <div class="flex items-center justify-center gap-2 border border-gray-200 rounded-[10px] px-2 py-1 bg-[#F2F7FF] h-[56px] flex-shrink-0">
                        <button onclick="changeQty(-1)"
                                class="w-10 h-10 flex items-center justify-center rounded-full font-bold text-2xl hover:bg-blue-50">
                            <span class="px-2 rounded-md bg-white">−</span>
                        </button>
                        <input id="quantity" type="text" value="1"
                               class="w-12 text-center text-[24px] font-bold text-black outline-none" readonly>
                        <button onclick="changeQty(1)"
                                class="w-10 h-10 flex items-center justify-center rounded-full font-bold text-2xl hover:bg-blue-50">
                            <span class="px-2 rounded-md bg-white">+</span>
                        </button>
                    </div>
                    <a href="{{ route('cart.index') }}"
                       class="w-full h-[56px] bg-[#20395D] text-white rounded-[10px] font-bold text-[20px] shadow-lg shadow-[#20395D]/20 hover:bg-[#1a2c4e] transition-colors flex-grow flex items-center justify-center no-underline">
                        Add to cart
                    </a>
                </div>
                <button onclick="toggleModal()"
                        class="w-full h-[56px] border border-[#20395D] text-[#20395D] rounded-[15px] font-bold text-[20px] hover:bg-blue-50 transition-colors">
                    Send a Quotation
                </button>
            </div>
        </section>

        <!-- Related Products -->
        <section class="mt-20">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-[36px] font-bold text-black">Related Products</h2>
                <div class="flex gap-4">
                    <button class="flex items-center justify-center text-[#20395D] hover:bg-blue-50">
                        <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9997 39.8402L16.9597 26.8002C15.4197 25.2602 15.4197 22.7402 16.9597 21.2002L29.9997 8.16016"
                                  stroke="#292D32" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="flex items-center justify-center text-[#20395D] hover:bg-blue-50">
                        <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8203 39.8402L30.8603 26.8002C32.4003 25.2602 32.4003 22.7402 30.8603 21.2002L17.8203 8.16016"
                                  stroke="#292D32" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>

                    </button>
                </div>
            </div>

            <div id="related-product-grid"
                 class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide lg:grid lg:grid-cols-4 lg:gap-[23px]">
                <x-product-card
                    wrapper-class="min-w-[305px] max-w-[305px] lg:min-w-0 lg:max-w-none flex-shrink-0 h-[400px]"
                    :image="asset('img/images/home/product1.png')"
                    :detail-href="route('products.show', 1)"/>

                <x-product-card
                    wrapper-class="min-w-[305px] max-w-[305px] lg:min-w-0 lg:max-w-none flex-shrink-0 h-[400px]"
                    :image="asset('img/images/home/product1.png')"
                    :detail-href="route('products.show', 2)"/>
            </div>
        </section>

    </main>

    <div id="quote-modal" class="fixed inset-0 bg-black bg-opacity-50 z-[100] hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-[20px] xl:w-[504px] max-w-lg p-8 relative">
            <button onclick="toggleModal()"
                    class="absolute top-8 right-4 text-black text-2xl">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>

            </button>

            <h2 class="text-2xl font-bold mb-6">Send a Quotation</h2>

            <div class="space-y-4">
                <div class="flex gap-[8px]">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0013 18.3332C14.5846 18.3332 18.3346 14.5832 18.3346 9.99984C18.3346 5.4165 14.5846 1.6665 10.0013 1.6665C5.41797 1.6665 1.66797 5.4165 1.66797 9.99984C1.66797 14.5832 5.41797 18.3332 10.0013 18.3332Z"
                              stroke="#A8A8A8" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 6.6665V10.8332" stroke="#A8A8A8" stroke-width="1.25" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M9.99609 13.3335H10.0036" stroke="#A8A8A8" stroke-width="1.66667" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <p class="text-[14px] font-bold text-[#A8A8A8]">Enter the quantity and you will receive a quotation
                        price</p>
                </div>

                <p class="text-[18px] font-bold">Enter the quantity<span class="text-red-500 pl-[2px]">*</span></p>
                <x-input type="text" placeholder="Your Quantity"
                         class="w-full text-[12px] lg:h-[48px] border border-gray-300 p-3 rounded-lg outline-none focus:border-[#20395D]"/>

                <button type="submit" class="w-full bg-[#20395D] text-white py-3 rounded-lg font-bold">Submit</button>
            </div>
        </div>
    </div>

    <script>

        let id = {{ (int) $id }};

        let products = [
            {id: 1, name: "Product 1", price: "100", category: "Bricks", img: "images/product1.png"},
            {id: 2, name: "Product 2", price: "100", category: "Bricks", img: "images/product2.png"},
        ];


        let currentProduct = products.find(p => p.id == id);


        if (currentProduct) {

            let titleElement = document.getElementById('product-title');
            let priceElement = document.getElementById('product-price');
            let imgElement = document.getElementById('main-image');

            if (titleElement) titleElement.innerText = currentProduct.name;
            if (priceElement) priceElement.innerText = currentProduct.price + " KD";
            if (imgElement) imgElement.src = currentProduct.img;
        }


        function changeQty(amount) {
            let qtyInput = document.getElementById('quantity');
            let currentQty = parseInt(qtyInput.value);
            if (!isNaN(currentQty)) {
                let newQty = currentQty + amount;
                if (newQty < 1) newQty = 1;
                qtyInput.value = newQty;
            }
        }

        function toggleModal() {
            const modal = document.getElementById('quote-modal');
            modal.classList.toggle('hidden');
        }
    </script>
@endsection
