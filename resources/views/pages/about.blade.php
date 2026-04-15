@extends('layouts.app')

@section('content')

    <!-- Header & Hero -->
    <section class="main-container">
        <main class="relative min-h-[521px] w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/images/About Us/Frame 1321315233.png') }}"
                     class="w-full h-full object-cover" alt="Construction">
            </div>


            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 mt-[110px]">
                <h1 class="text-white text-3xl md:text-[64px] font-bold leading-tight mb-8 tracking-tight">
                    About Us
                </h1>

                <p class="text-gray-100 text-sm md:text-[18px] xl:text-[32px] max-w-4xl mx-auto mb-12 opacity-90 font-lg leading-relaxed">
                    Know more about Us
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <button class="btn-leaf bg-[#474E79] text-white md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Send Request
                    </button>

                    <button class="btn-leaf bg-white text-[#21395D] md:w-[214px] md:h-[64px] w-36 md:py-5 py-4 font-bold transition-all">
                        Contact Us
                    </button>
                </div>
            </div>

        </main>
    </section>

    <!-- About Us -->
    <section class="main-container mx-auto px-4 py-12 md:py-20 font-sans">
        <h2 class="text-[40px] md:text-[56px] xl:text-[64px] font-bold text-black mb-10 tracking-tight">
            About Us
        </h2>

        <div class="flex flex-col gap-6 md:gap-8">
            <p class="text-[#555555] text-[15px] md:text-[18px] leading-[1.6] md:leading-[1.8]">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even
            </p>

            <p class="text-[#555555] text-[15px] md:text-[18px] leading-[1.6] md:leading-[1.8]">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even
            </p>

            <p class="text-[#555555] text-[15px] md:text-[18px] leading-[1.6] md:leading-[1.8]">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even
            </p>

            <p class="text-[#555555] text-[15px] md:text-[18px] leading-[1.6] md:leading-[1.8]">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even
            </p>
        </div>
    </section>

    <!-- Vision & Value -->
    <section
        class="main-container mx-auto">
        <div class="bg-[#F6F4F4] rounded-[20px] py-16 px-4 md:px-8 lg:px-16 font-sans overflow-hidden">
            <div class="space-y-16 md:space-y-32">
                <div class="relative flex flex-col md:block">
                    <div class="w-full rounded-[10px] overflow-hidden">
                        <img src="{{ asset('img/images/About Us/our-vision.png') }}" alt="Skyscrapers"
                             class="w-full md:w-[400px] lg:w-[400px] xl:w-[426px] h-[300px] md:h-[400px] xl:h-[501px] object-cover rounded-[10px]">
                    </div>

                    <div class="relative w-full mt-[-40px] md:mt-0 md:absolute md:right-0 md:top-1/2 md:-translate-y-1/2 bg-white rounded-[20px] p-6 xl:p-8 shadow-2xl z-10
                        md:w-[75%] lg:w-[612px] xl:w-[912px] lg:h-[250px] xl:h-[309px]">
                        <h2 class="text-[28px] md:text-[32px] lg:text-[40px] font-bold text-[#404040] mb-4 xl:mb-6 tracking-tight">
                            Our Vision
                        </h2>
                        <p class="text-[#555555] text-[14px] md:text-[15px] xl:text-[16px] leading-relaxed xl:leading-[1.8] font-normal">
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their
                            default model text.
                        </p>
                    </div>
                </div>

                <div class="relative flex flex-col md:block">

                    <div class="w-full rounded-[10px] overflow-hidden flex md:justify-end">
                        <img src="{{ asset('img/images/About Us/our-value.png') }}" alt="Skyscrapers"
                             class="w-full md:w-[400px] lg:w-[400px] xl:w-[426px] h-[300px] md:h-[400px] xl:h-[501px] object-cover rounded-[10px]">
                    </div>

                    <div class="relative w-full mt-[-40px] md:mt-0 md:absolute md:left-0 md:top-1/2 md:-translate-y-1/2 bg-white rounded-[20px] p-6 xl:p-8 shadow-2xl z-10
                        md:w-[75%] lg:w-[612px] xl:w-[912px] lg:h-[250px] xl:h-[309px]">
                        <h2 class="text-[28px] md:text-[32px] lg:text-[40px] font-bold text-[#404040] mb-4 xl:mb-6 tracking-tight">
                            Our Value
                        </h2>
                        <p class="text-[#555555] text-[14px] md:text-[15px] xl:text-[16px] leading-relaxed xl:leading-[1.8] font-normal">
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their
                            default model text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works? -->
    <section class="main-container mx-auto px-4 py-20 font-sans">

        <h1 class="text-4xl md:text-5xl font-extrabold text-black text-center mb-24 tracking-tight">
            How it Works?
        </h1>

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div class="lg:space-y-12 md:space-y-4 space-y-10 pl-4 border-l-1 relative">

                <div class="absolute left-[-2px] top-[62px] h-[34px] w-[2px] bg-[#007BFF]"></div>

                <div class="flex items-center gap-6 group">
                    <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full shadow-[0_5px_15px_rgba(0,0,0,0.06)] border border-gray-100 group-hover:shadow-lg transition-all">
                        <img src="{{ asset('img/images/About Us/consistency.png') }}" alt="Icon" class="w-8 h-8 opacity-80">
                    </div>
                    <p class="text-[17px] font-semibold text-gray-700 leading-snug">
                        Masters of Consistency and Quality.
                    </p>
                </div>

                <div class="flex items-center gap-6 group">
                    <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white shadow-[0_5px_15px_rgba(0,0,0,0.06)] border border-gray-100 group-hover:shadow-lg transition-all">
                        <img src="{{ asset('img/images/About Us/consistency2.png') }}" alt="Icon" class="w-8 h-8 opacity-80">
                    </div>
                    <p class="text-[17px] font-semibold text-gray-700 leading-snug">
                        Masters of Consistency and Quality.
                    </p>
                </div>

                <div class="flex items-center gap-6 group">
                    <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white shadow-[0_5px_15px_rgba(0,0,0,0.06)] border border-gray-100 group-hover:shadow-lg transition-all">
                        <img src="{{ asset('img/images/About Us/consistency3.png') }}" alt="Icon" class="w-8 h-8 opacity-80">
                    </div>
                    <p class="text-[17px] font-semibold text-gray-700 leading-snug">
                        Masters of Consistency and Quality.
                    </p>
                </div>

                <div class="flex items-center gap-6 group">
                    <div class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-white shadow-[0_5px_15px_rgba(0,0,0,0.06)] border border-gray-100 group-hover:shadow-lg transition-all">
                        <img src="{{ asset('img/images/About Us/consistency4.png') }}" alt="Icon" class="w-8 h-8 opacity-80">
                    </div>
                    <p class="text-[17px] font-semibold text-gray-700 leading-snug">
                        Masters of Consistency and Quality.
                    </p>
                </div>
            </div>

            <div class="relative w-full aspect-video md:aspect-[4/3] flex items-center justify-center 2xl:justify-end">

                <div class="absolute inset-0 z-0">
                    <div class="absolute w-[100px] h-[90px] top-[-8%] left-[1%] md:w-[100px] md:h-[90px] md:top-[-10%] md:left-[3%] lg:w-[120px] lg:h-[105px] lg:top-[0%] lg:left-[4%] xl:w-[200px] xl:h-[155px] xl:top-[-5%] 2xl:top-[20%] xl:left-[0%] 2xl:left-[44%] bg-[#826EA3] rounded-[20px] md:rounded-[30px]"></div>

                    <div class="absolute w-[100px] h-[90px] bottom-[-8%] right-[1%] md:w-[100px] md:h-[90px] md:bottom-[-10%] md:right-[3%] lg:w-[120px] lg:h-[105px] lg:bottom-[0%] lg:right-[4%] xl:w-[200px] xl:h-[155px] xl:right-[0%] xl:bottom-[-5%] 2xl:right-[1%] 2xl:bottom-[20%] bg-[#826EA3] rounded-[20px] md:rounded-[30px]"></div>
                </div>

                <div class="relative z-10 w-[85%] md:w-[80%] md:h-[100%] lg:w-[350px] lg:h-[300px] xl:w-[573px] xl:h-[449px] 2xl:right-[5%] bg-white rounded-[20px] overflow-hidden shadow-[0_15px_40px_rgba(0,0,0,0.1)]">

                    <img src="{{ asset('img/images/About Us/how-it-works.png') }}" alt="Cityscape"
                         class="w-full h-full object-cover rounded-[15px] min-h-[250px] md:min-h-[350px] xl:h-[449px]">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="main-container mx-auto xl:h-[603px]">
        <div class="font-sans bg-[#FAF8F4] rounded-[10px] overflow-hidden">
            <div class="grid md:grid-cols-12 gap-8 md:gap-0 items-center">

                <div class="md:col-span-12 lg:col-span-7 w-full lg:w-[433px] xl:w-[633px] lg:h-[354px] xl:h-[474px] bg-[#FFFFFF] rounded-[20px] p-6 md:p-8 lg:p-3 xl:p-5 shadow-[0_15px_40px_rgba(0,0,0,0.06)] border border-gray-100 lg:translate-x-[20px] xl:translate-x-[20px] my-6 md:my-10 mx-auto lg:mx-0">

                    <h2 class="text-[28px] md:text-[32px] lg:text-[24px] xl:text-[36px] font-bold text-black mb-4 tracking-tight">
                        Contact us
                    </h2>

                    <form class="xl:space-y-5 lg:space-y-2 space-y-4">
                        <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                            <div>
                                <label for="full_name" class="block text-[14px] font-bold text-gray-700 mb-2">Full
                                    Name</label>
                                <input type="text" id="full_name" placeholder="Enter name"
                                       class="w-full h-[40px] lg:h-[30px] xl:h-[44px] bg-[#FFFFFF] text-[12px] border border-gray-300 px-3 rounded-[10px] shadow-sm focus:outline-none placeholder:text-[#AAAAAA]">
                            </div>
                            <div>
                                <label for="email" class="block text-[14px] font-bold text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" placeholder="Enter mail"
                                       class="w-full h-[40px] lg:h-[30px] xl:h-[44px] bg-[#FFFFFF] text-[12px] border border-gray-300 px-3 rounded-[10px] shadow-sm focus:outline-none placeholder:text-[#AAAAAA]">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                            <div>
                                <label for="phone_number" class="block text-[14px] font-bold text-[#404040] mb-2">Phone
                                    Number</label>
                                <div class="relative flex items-center h-[40px] lg:h-[30px] xl:h-[44px] bg-[#FFFFFF] text-[12px] border border-gray-300 rounded-[12px] shadow-sm overflow-hidden">
                                    <div class="flex items-center gap-1.5 h-full px-3 shrink-0 bg-[#FFE6E9] border-r border-gray-200">
                                        <img src="{{ asset('img/images/About Us/kuwait-flag.png') }}" alt="KW" class="w-5 h-3 object-contain">
                                        <span class="text-[14px] font-medium text-black">+965</span>
                                    </div>
                                    <input type="tel" id="phone_number" placeholder="Enter Phone"
                                           class="flex-1 bg-transparent px-3 focus:outline-none placeholder:text-[#AAAAAA]">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-[14px] font-bold text-gray-700 mb-2">Subject</label>
                                <input type="text" id="subject" placeholder="Enter subject"
                                       class="w-full h-[40px] lg:h-[30px] xl:h-[44px] bg-[#FFFFFF] text-[12px] border border-gray-300 px-3 rounded-[10px] shadow-sm focus:outline-none placeholder:text-[#AAAAAA]">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[14px] font-bold text-gray-700 mb-2">Message</label>
                            <textarea id="message" rows="4" placeholder="Enter message"
                                      class="w-full h-[100px] lg:h-[60px] xl:h-[97px] bg-[#FFFFFF] text-[12px] border border-gray-300 py-3 px-3 rounded-[12px] shadow-sm focus:outline-none placeholder:text-[#AAAAAA] resize-none"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full h-[45px] lg:h-[30px] xl:h-[40px] bg-[#20395D] text-white text-[16px] font-bold rounded-[12px] shadow-md hover:shadow-lg transition-all">
                            Apply
                        </button>
                    </form>
                </div>

                <div class="md:col-span-12 lg:col-span-5 flex items-center justify-center 2xl:justify-end p-6 md:pb-12 lg:p-4">
                    <img src="{{ asset('img/images/About Us/contact-pic.png') }}" alt="Customer Service Illustration"
                         class="w-full h-auto max-w-[300px] md:max-w-[400px] lg:max-w-[480px] object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="max-w-[1228px] mx-auto px-4 py-12 md:py-20 font-sans overflow-hidden">
        <h2 class="text-[32px] md:text-[48px] xl:text-[56px] font-bold text-[#1A1A1A] text-center mb-8 md:mb-16">
            Our Team
        </h2>

        <div class="relative px-2 md:px-14">
            <div class="owl-carousel owl-theme team-slider">

                <div class="item pt-12 md:pt-20 pb-6 md:pb-10">
                    <div class="team-card relative w-[260px] h-[340px] md:w-[300px] md:h-[380px] xl:w-[326px] xl:h-[420px] mx-auto rounded-[20px] overflow-hidden bg-white transition-all duration-500 transform scale-90 origin-bottom shadow-md">
                        <img src="{{ asset('img/images/About Us/team1.png') }}" class="w-full h-full object-cover" alt="Jassem">
                        <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 w-[90%] md:w-[85%] bg-white rounded-[12px] p-3 md:p-5 text-center shadow-xl">
                            <h3 class="text-black font-bold text-[16px] md:text-[19px]">Jassem Al-Kandari</h3>
                            <p class="text-[#999999] text-[11px] md:text-[13px] font-bold uppercase mt-1">CEO</p>
                        </div>
                    </div>
                </div>

                <div class="item pt-12 md:pt-20 pb-6 md:pb-10">
                    <div class="team-card relative w-[260px] h-[340px] md:w-[300px] md:h-[380px] xl:w-[326px] xl:h-[420px] mx-auto rounded-[20px] overflow-hidden bg-white transition-all duration-500 transform scale-90 origin-bottom shadow-md">
                        <img src="{{ asset('img/images/About Us/team2.png') }}" class="w-full h-full object-cover" alt="Abdullah">
                        <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 w-[90%] md:w-[85%] bg-white rounded-[12px] p-3 md:p-5 text-center shadow-xl">
                            <h3 class="text-black font-bold text-[16px] md:text-[19px]">Abdullah Al-Sabah</h3>
                            <p class="text-[#999999] text-[11px] md:text-[13px] font-bold uppercase mt-1">Co-Founder</p>
                        </div>
                    </div>
                </div>

                <div class="item pt-12 md:pt-20 pb-6 md:pb-10">
                    <div class="team-card relative w-[260px] h-[340px] md:w-[300px] md:h-[380px] xl:w-[326px] xl:h-[420px] mx-auto rounded-[20px] overflow-hidden bg-white transition-all duration-500 transform scale-90 origin-bottom shadow-md">
                        <img src="{{ asset('img/images/About Us/team3.png') }}" class="w-full h-full object-cover" alt="Noura">
                        <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 w-[90%] md:w-[85%] bg-white rounded-[12px] p-3 md:p-5 text-center shadow-xl">
                            <h3 class="text-black font-bold text-[16px] md:text-[19px]">Noura Al-Rashidi</h3>
                            <p class="text-[#999999] text-[11px] md:text-[13px] font-bold uppercase mt-1">Executive
                                Director</p>
                        </div>
                    </div>
                </div>

            </div>

            <button class="prev-btn absolute left-[-10px] md:left-0 top-[60%] -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#C2C3C3] flex items-center justify-center z-50 hover:bg-[#20395D] transition-colors">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m15 19-7-7 7-7"/>
                </svg>
            </button>

            <button class="next-btn absolute right-[-10px] md:right-0 top-[60%] -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#C2C3C3] flex items-center justify-center z-50 hover:bg-[#20395D] transition-colors">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m9 5 7 7-7 7"/>
                </svg>
            </button>
        </div>
    </section>

    <!-- FAQ -->
    <section class="main-container mx-auto px-4 py-16 font-sans bg-[#F6F4F4]">
        <h2 class="text-[40px] md:text-[56px] font-bold text-black text-center mb-12">
            FAQ
        </h2>

        <div class="main-container mx-auto space-y-4">

            <div class="bg-white rounded-[10px] shadow-sm border border-gray-100 overflow-hidden">
                <button onclick="toggleFAQ(this)"
                        class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-[18px] md:text-[20px] font-bold text-black">Question 1</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 pointer-events-none" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content max-h-0 transition-[max-height] duration-500 ease-in-out overflow-hidden">
                    <div class="px-6 pb-6 text-gray-600 text-[16px] border-t border-gray-50 pt-4">
                        Welcome to the <i>Xcoderix.</i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[10px] shadow-sm border border-gray-100 overflow-hidden">
                <button onclick="toggleFAQ(this)"
                        class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-[18px] md:text-[20px] font-bold text-black">Question 2</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 pointer-events-none" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 transition-[max-height] duration-500 ease-in-out overflow-hidden">
                    <div class="px-6 pb-6 text-gray-600 text-[16px] border-t border-gray-50 pt-4">
                        Welcome to the <i>Xcoderix.</i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[10px] shadow-sm border border-gray-100 overflow-hidden">
                <button onclick="toggleFAQ(this)"
                        class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-[18px] md:text-[20px] font-bold text-black">Question 3</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 pointer-events-none" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 transition-[max-height] duration-500 ease-in-out overflow-hidden">
                    <div class="px-6 pb-6 text-gray-600 text-[16px] border-t border-gray-50 pt-4">
                        Welcome to the <i>Xcoderix.</i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[10px] shadow-sm border border-gray-100 overflow-hidden">
                <button onclick="toggleFAQ(this)"
                        class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-[18px] md:text-[20px] font-bold text-black">Question 4</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 pointer-events-none" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 transition-[max-height] duration-500 ease-in-out overflow-hidden">
                    <div class="px-6 pb-6 text-gray-600 text-[16px] border-t border-gray-50 pt-4">
                        Welcome to the <i>Xcoderix.</i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[10px] shadow-sm border border-gray-100 overflow-hidden">
                <button onclick="toggleFAQ(this)"
                        class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-[18px] md:text-[20px] font-bold text-black">Question 5</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 pointer-events-none" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 transition-[max-height] duration-500 ease-in-out overflow-hidden">
                    <div class="px-6 pb-6 text-gray-600 text-[16px] border-t border-gray-50 pt-4">
                        Welcome to the <i>Xcoderix.</i>
                    </div>
                </div>
            </div>

        </div>
    </section>

<script>
    // Our Team //
    $(document).ready(function () {
    let owl = $('.team-slider');

    owl.owlCarousel({
    center: true,
    loop: true,
    dots: false,
    smartSpeed: 700,
    margin: 10,
    responsive: {
    0: {items: 1.2},
    768: {items: 2},
    1024: {items: 3}
    },
    onInitialized: updateSlider,
    onTranslated: updateSlider
    });

    function updateSlider() {
    $('.team-card').removeClass('scale-110 z-50 shadow-2xl').addClass('scale-90 z-10');
    $('.owl-item.center .team-card').addClass('scale-110 z-50 shadow-2xl').removeClass('scale-90 z-10');
    }

    $('.next-btn').click(function () {
    owl.trigger('next.owl.carousel');
    });
    $('.prev-btn').click(function () {
    owl.trigger('prev.owl.carousel');
    });
    });

    // FAQ //
    function toggleFAQ(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('svg');

    if (content.style.maxHeight) {
    content.style.maxHeight = null;
    icon.classList.remove('rotate-180');
    } else {
    document.querySelectorAll('.faq-content').forEach(el => el.style.maxHeight = null);
    document.querySelectorAll('svg').forEach(el => el.classList.remove('rotate-180'));

    content.style.maxHeight = content.scrollHeight + "px";
    icon.classList.add('rotate-180');
    }
    }
    </script>
    @endsection
