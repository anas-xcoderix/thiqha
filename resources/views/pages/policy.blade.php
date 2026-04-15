@extends('layouts.app')


@section('title', 'Our Privacy-Policy')

@section('content')
    <section class="p-6 w-full box-border">
        <main class="relative max-w-full min-h-[521px] mx-auto w-full rounded-[40px] overflow-hidden shadow-2xl flex flex-col">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/policy/hero.png') }}" class="max-w-full min-h-[521px] object-cover" alt="Construction">
            </div>

            <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 mt-10">
                <h1 class="text-white text-2xl md:text-[64px] font-bold leading-tight tracking-tight">
                    Our Privacy Policy
                </h1>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mt-10 text-center text-white text-xl md:text-3xl">
                    <p>Know more about our privacy policy</p>
                </div>
            </div>

        </main>
    </section>
    <section>
        <div class="w-full md:max-w-[96%] mx-auto px-6 py-12 flex flex-col lg:flex-row items-center gap-10">

            <div class="flex-1">
                <h2 class="text-4xl font-bold mb-14">Our Privacy Policy</h2>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-[#20395d] mb-2 flex items-center gap-2">
                        Our Privacy Policy
                    </h3>
                    <p class="text-sm text-[#838383] leading-relaxed">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-[#20395d] mb-2 flex items-center gap-2">
                        Our Privacy Policy
                    </h3>
                    <p class="text-sm text-[#838383] leading-relaxed">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-[#20395d] mb-2 flex items-center gap-2">
                        Our Privacy Policy
                    </h3>
                    <p class="text-sm text-[#838383] leading-relaxed">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its Alayout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-[#20395d] mb-2 flex items-center gap-2">
                        Our Privacy Policy
                    </h3>
                    <p class="text-sm text-[#838383] leading-relaxed">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center gap-6 pt-4">
                <div class="relative">
                    <img src="{{ asset('images/policy/side.png') }}" alt="" class="w-full max-w-[465px]">A
                </div>
            </div>
        </div>
    </section>
@endsection
