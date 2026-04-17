@extends('user.layouts.app')

@section('content')

    <main class="main-container mx-auto p-4 md:p-8 mt-[90px]">

        <div class="grid grid-cols-1 xl:grid-cols-[1fr_304px] gap-6">

            <section class="w-full bg-white rounded-[5px] shadow-sm border border-gray-100 p-4 md:p-8">

                <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                    <h1 class="text-[32px] md:text-[40px] font-bold text-black">Cart</h1>
                    <a href="{{ route('products.index') }}"
                       class="text-[18px] md:text-[24px] underline text-[#294035] font-medium hover:underline flex items-center gap-1.5">
                        Continue Shopping
                    </a>
                </header>

                <div id="cart-items-container">
                    <x-cart-line-item
                        :image="asset('img/images/home/cart-pic1.png')"
                        line-price="120 KWD"
                        :border-bottom="true"/>

                    <x-cart-line-item
                        :image="asset('img/images/home/cart-pic1.png')"
                        line-price="120 KWD"
                        :border-bottom="false"/>
                </div>
            </section>

            <aside class="flex flex-col md:flex-row xl:flex-col gap-6 w-full">

                <section class="rounded-[5px] w-full bg-white shadow-sm border border-gray-100 p-6 md:p-4 flex-1">
                    <h3 class="text-[16px] font-bold text-black mb-6">Coupon</h3>
                    <div class="relative mb-6 flex items-center">
                        <div class="absolute left-5 pointer-events-none">
                            <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.7945 3.3999H11.3508C11.2258 3.3999 11.107 3.4499 11.0195 3.5374L9.28203 5.2749L7.56953 3.5624C7.48203 3.4749 7.36328 3.4249 7.23828 3.4249H3.20703C2.95078 3.4249 2.73828 3.6374 2.73828 3.89365V18.1062C2.73828 18.3624 2.95078 18.5749 3.20703 18.5749H7.23828C7.36328 18.5749 7.48203 18.5249 7.56953 18.4374L9.28203 16.7249L11.0195 18.4624C11.107 18.5499 11.2258 18.5999 11.3508 18.5999H22.7945C23.0508 18.5999 23.2633 18.3874 23.2633 18.1312V3.86865C23.2633 3.60615 23.0508 3.3999 22.7945 3.3999ZM22.3258 17.6624H11.5445L9.61328 15.7312C9.43203 15.5499 9.13203 15.5499 8.95078 15.7312L7.04453 17.6374H3.67578V4.3624H7.04453L8.95078 6.26865C9.13203 6.4499 9.43203 6.4499 9.61328 6.26865L11.5445 4.3374H22.3258V17.6624Z"
                                      fill="#EAEAEA"/>
                                <path d="M14.3047 9.69995C15.2672 9.69995 16.0547 8.91245 16.0547 7.94995C16.0547 6.98745 15.2672 6.19995 14.3047 6.19995C13.3422 6.19995 12.5547 6.98745 12.5547 7.94995C12.5547 8.91245 13.3359 9.69995 14.3047 9.69995ZM14.3047 7.13745C14.7547 7.13745 15.1172 7.49995 15.1172 7.94995C15.1172 8.39995 14.7547 8.76245 14.3047 8.76245C13.8547 8.76245 13.4922 8.39995 13.4922 7.94995C13.4922 7.49995 13.8547 7.13745 14.3047 7.13745Z"
                                      fill="#EAEAEA"/>
                                <path d="M19.5 11.3999C18.5375 11.3999 17.75 12.1874 17.75 13.1499C17.75 14.1124 18.5375 14.8999 19.5 14.8999C20.4625 14.8999 21.25 14.1124 21.25 13.1499C21.25 12.1874 20.4625 11.3999 19.5 11.3999ZM19.5 13.9624C19.05 13.9624 18.6875 13.5999 18.6875 13.1499C18.6875 12.6999 19.05 12.3374 19.5 12.3374C19.95 12.3374 20.3125 12.6999 20.3125 13.1499C20.3125 13.5999 19.95 13.9624 19.5 13.9624Z"
                                      fill="#EAEAEA"/>
                                <path d="M13.0391 14.4187C13.1328 14.5125 13.2516 14.5562 13.3703 14.5562C13.4891 14.5562 13.6078 14.5125 13.7016 14.4187L20.7703 7.34995C20.9516 7.1687 20.9516 6.8687 20.7703 6.68745C20.5891 6.5062 20.2891 6.5062 20.1078 6.68745L13.0391 13.7562C12.8516 13.9375 12.8516 14.2312 13.0391 14.4187Z"
                                      fill="#EAEAEA"/>
                                <path d="M9.28125 7.65625C9.15625 7.65625 9.0375 7.70625 8.95 7.79375C8.8625 7.88125 8.8125 8 8.8125 8.125C8.8125 8.25 8.8625 8.36875 8.95 8.45625C9.0375 8.54375 9.15625 8.59375 9.28125 8.59375C9.40625 8.59375 9.525 8.54375 9.6125 8.45625C9.7 8.36875 9.75 8.25 9.75 8.125C9.75 8 9.7 7.88125 9.6125 7.79375C9.525 7.70625 9.4 7.65625 9.28125 7.65625Z"
                                      fill="#EAEAEA"/>
                                <path d="M9.28125 9.57495C9.15625 9.57495 9.0375 9.62495 8.95 9.71245C8.8625 9.79995 8.8125 9.9187 8.8125 10.0437C8.8125 10.1687 8.8625 10.2875 8.95 10.375C9.0375 10.4625 9.15625 10.5125 9.28125 10.5125C9.40625 10.5125 9.525 10.4625 9.6125 10.375C9.7 10.2875 9.75 10.1687 9.75 10.0437C9.75 9.9187 9.7 9.79995 9.6125 9.71245C9.525 9.62495 9.4 9.57495 9.28125 9.57495Z"
                                      fill="#EAEAEA"/>
                                <path d="M9.28125 11.4873C9.15625 11.4873 9.0375 11.5373 8.95 11.6248C8.8625 11.7123 8.8125 11.8311 8.8125 11.9561C8.8125 12.0811 8.8625 12.1998 8.95 12.2873C9.0375 12.3748 9.15625 12.4248 9.28125 12.4248C9.40625 12.4248 9.525 12.3748 9.6125 12.2873C9.7 12.1998 9.75 12.0811 9.75 11.9561C9.75 11.8311 9.7 11.7123 9.6125 11.6248C9.525 11.5373 9.4 11.4873 9.28125 11.4873Z"
                                      fill="#EAEAEA"/>
                                <path d="M9.28125 13.4062C9.15625 13.4062 9.0375 13.4563 8.95 13.5438C8.8625 13.6313 8.8125 13.75 8.8125 13.875C8.8125 14 8.8625 14.1187 8.95 14.2062C9.0375 14.2937 9.15625 14.3438 9.28125 14.3438C9.40625 14.3438 9.525 14.2937 9.6125 14.2062C9.7 14.1187 9.75 14 9.75 13.875C9.75 13.75 9.7 13.6313 9.6125 13.5438C9.525 13.4563 9.4 13.4062 9.28125 13.4062Z"
                                      fill="#EAEAEA"/>
                            </svg>
                        </div>

                        <input type="text" placeholder="Enter Your Coupon"
                               class="w-full h-[32px] border border-gray-200 rounded-[5px] pl-14 pr-6 text-[12px] outline-none focus:border-[#20395D]">
                    </div>
                    <button class="w-full h-[40px] bg-[#223862] text-white rounded-[5px] font-bold text-[14px] hover:bg-[#1a2c4e] transition-colors">
                        Apply
                    </button>
                </section>

                <section class="bg-white rounded-[5px] shadow-sm border border-gray-100 p-6 md:p-4 w-full flex-1">
                    <h3 class="text-[16px] font-bold text-black mb-8">Cart Totals</h3>

                    <div class="space-y-4 mb-10 text-[14px]">
                        <div class="flex justify-between items-center">
                            <span>SUBTOTAL</span>
                            <span class="font-semibold text-black">2000 KWD</span>
                        </div>
                        <div class="flex justify-between items-center text-[#E62830]">
                            <span>COUPON DISCOUNT</span>
                            <span class="font-semibold">0 KWD</span>
                        </div>
                        <div class="flex justify-between items-center text-black pt-4 border-t border-gray-100">
                            <span>TOTAL</span>
                            <span class="font-bold">2000 KWD</span>
                        </div>
                    </div>

                    <a href="{{ route('checkout.index') }}" class="block w-full h-[40px] bg-[#223862] text-white rounded-[5px] font-bold text-[14px] shadow-lg shadow-[#223862]/20 hover:bg-[#1a2c4e] transition-colors text-center leading-[40px] no-underline">
                        Proceed to checkout
                    </a>
                </section>
            </aside>
        </div>

    </main>

    <script>
        function changeQty(amount, inputId) {
            const qtyInput = document.getElementById(inputId);
            let currentQty = parseInt(qtyInput.value);
            if (!isNaN(currentQty)) {
                let newQty = currentQty + amount;
                if (newQty < 1) newQty = 1;
                qtyInput.value = newQty;
            }
        }
    </script>
@endsection
