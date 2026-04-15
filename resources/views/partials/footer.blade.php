


<footer class="w-full bg-[#1D3256] bg-center bg-contain relative flex flex-col justify-between overflow-hidden" style="background-image: url('{{ asset ('img/images/footer/footerBG.png')}}');">
    <div class="px-4 pt-10">
        <div class=" mx-auto w-full flex flex-col lg:flex-row xl:justify-between gap-12 xl:gap-0 items-start">

            <div class="flex flex-col gap-8 w-full xl:w-auto">
                <img src="{{ asset('img/images/footer/footer-logo.png') }}" alt="THIQAH Logo" class="w-[240px] xl:w-[280px] 2xl:w-[380px] object-contain">

                <div class="flex items-center gap-4">
                    <a href="#" class="xl:w-[32px] xl:h-[32px] rounded-full flex items-center justify-center">
                        <img src="{{ asset('img/images/footer/snapchat.png') }}" alt="Snapchat" class="w-6 h-6">
                    </a>
                    <a href="#"
                       class="xl:w-[32px] xl:h-[32px] rounded-full flex items-center justify-center hover:bg-white/20 transition-all">
                        <img src="{{ asset('img/images/footer/X.png') }}" alt="X" class="w-5 h-5">
                    </a>
                    <a href="#"
                       class="xl:w-[32px] xl:h-[32px] rounded-full flex items-center justify-center hover:bg-white/20 transition-all">
                        <img src="{{ asset('img/images/footer/instagram.png') }}" alt="Instagram" class="w-6 h-6">
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-4 xl:gap-[32px] text-white font-medium text-[18px] 2xl:text-[24px] min-w-[150px]">
                <a href="#" class="hover:text-gray-300 transition-colors">Home</a>
                <a href="#" class="hover:text-gray-300 transition-colors">Thiqah Services</a>
                <a href="#" class="hover:text-gray-300 transition-colors">Service Providers</a>
                <a href="#" class="hover:text-gray-300 transition-colors">Products</a>
                <a href="#" class="hover:text-gray-300 transition-colors">Blogs</a>
                <a href="#" class="hover:text-gray-300 transition-colors">About Us</a>
            </div>

            <div class="flex flex-col gap-6 xl:gap-[32px] text-white text-[16px] xl:text-[18px] 2xl:text-[24px] max-w-[300px]">
                <div class="flex items-start gap-4">
                    <div class="xl:w-[16px] w-[12px] xl:h-[16px] mt-1 flex-shrink-0">
                        <img src="{{ asset('img/images/footer/location.png') }}" alt="Location" class="w-full object-contain">
                    </div>
                    <span class="text-[#BBBBBB]">Washington NY, United States.</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="xl:w-[16px] xl:h-[16px] w-[16px] flex-shrink-0">
                        <img src="{{ asset('img/images/footer/email.png') }}" alt="Email" class="w-full object-contain">
                    </div>
                    <span class="text-[#BBBBBB]">info@example.com</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="xl:w-[16px] xl:h-[16px] w-[16px] flex-shrink-0">
                        <img src="{{ asset('img/images/footer/phone.png') }}" alt="Phone" class="w-full object-contain">
                    </div>
                    <span class="text-[#BBBBBB]">(123)+124-45-67-678</span>
                </div>
            </div>

            <div class="flex flex-col gap-6 xl:gap-[16px]">
                <h4 class="text-white font-bold text-[18px] 2xl:text-[24px]">Download App Now</h4>
                <div class="flex flex-col gap-[24px]">
                    <a href="#" class="hover:opacity-80 transition-opacity w-[200px] xl:w-[269px] xl:h-[80px] 2xl:w-[320px] 2xl:h-[100px]">
                        <img src="{{ asset('img/images/footer/google-play.png') }}" alt="Google Play"
                             class="w-full object-contain">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity w-[200px] xl:w-[269px] xl:h-[80px] 2xl:w-[320px] 2xl:h-[100px]">
                        <img src="{{ asset('img/images/footer/app-store.png') }}" alt="App Store"
                             class="w-full object-contain">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full py-6">
            <div class="main-container mx-auto border-t border-white pt-2 flex flex-col md:flex-row justify-between items-center gap-4 px-4 xl:px-0">
                <p class="text-white text-[14px]">
                    Powered by: <span class="font-bold">Cloud lift solutions</span>
                </p>
                <div class="flex gap-8 text-white text-[14px]">
                    <a href="#" class="text-white underline font-bold">Privacy Policy</a>
                    <a href="#" class="text-white underline font-bold">Terms & Condition</a>
                </div>
            </div>
        </div>
    </div>
</footer>
