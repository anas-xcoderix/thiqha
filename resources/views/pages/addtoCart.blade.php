@extends('layouts.app')

@section('body-class', 'm-0 p-0 font-sans')

@section('title', 'add to cart')

@push('head-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endpush

@section('content')
    <section>
        <div class="grid place-items-center justify-items-center h-screen mt-[75px]">
            <div class="grid grid-cols-1 place-items-center justify-items-center mx-2 space-y-6">
                <div>
                    <img src="{{ asset('images/cart/img.png') }}" alt="" class="max-w-[141px]">
                </div>
                <div>
                    <h2 class="text-xl font-bold text-center">Your Cart is Empty</h2>
                </div>
                <div>
                    <p class="text-gray-600 text-center text-md">Browse our categories and discover our best deals!</p>
                </div>
                <div>
                    <button class="bg-[#20395d] text-white px-4 md:p-1 w-full md:w-[376px] h-[56px] text-lg font-semibold rounded-lg">
                        Start Shopping
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
