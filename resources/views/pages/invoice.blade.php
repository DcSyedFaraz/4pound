@extends('layouts.web')

@section('title', 'Invoice')
@section('description', '')
@section('canonical', config('app.url') . Request::path())



@section('content')
    <section>
        <div class="lg:mx-12 pb-4">
            <div class="container mx-auto px-4 pb-4">
                @if (session('userData'))
                    <div class="md:w-1/2 my-4 mx-auto bg-[#FACE85] border-t-4 border-primary-dark rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div class="py-1">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                                    <polyline
                                        style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                        points="
                38,15 22,33 12,25 " />
                                </svg>
                            </div>
                            <div>
                                <p class="text-center font-bold">{{ session('userData.userEmail') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <p class="text-4xl text-center   font-bold ">
                    Check Order Details Proceed With Payment
                </p>
                <hr class="border border-primary-dark bg-primary-dark w-full sm:w-48 h-[0.35rem] my-3 mx-auto">
            </div>
            <div class="mx-auto">
                <div class=" px-4 space-y-4">
                    <div class="border rounded-2xl max-w-sm mx-auto" style="box-shadow: 0 0 5px 2px rgb(0 0 0 / 16%);">
                        <h4
                            class="py-2 text-xl text-center px-6  bg-primary rounded-t-2xl font-bold text-white">
                            Order Summary</h4>
                        <hr class="border-[2px]">
                        <ul class="my-2 space-y-1 ">
                            <li class="space-x-3 px-6"><span>Paper Type:</span> <strong class="float-right">
                                    {{ $order->paperType->name ?? '-' }} </strong></li>
                            <li class="space-x-3 px-6"><span>Paper Topic:</span> <strong class="float-right">
                                    {{ $order->paper_topic ?? '-' }} </strong></li>
                            <li class="space-x-3 px-6"><span>Subject:</span> <strong class="float-right">
                                    {{ $order->subject_area ?? '-' }} </strong></li>
                            <li class="space-x-3 px-6"><span>Level:</span> <strong
                                    class="float-right">{{ $order->academic_level ?? '-' }}</strong></li>
                            <li class="space-x-3 px-6"><span>deadline:</span> <strong
                                    class="float-right">{{ $order->deadline ?? '-' }}</strong></li>
                            <hr class="border-[2px]">
                            <li class="space-x-3 text-xl text-primary-two py-3 px-6"><strong>Total Amount:</strong><strong
                                    class="float-right ">{{ addCurrency($invoice->amount) }}</strong></li>


                        </ul>

                        <hr class="border-[2px]">
                        <style>
                            .mbtn {
                                        display:block;
                                        background-color: #04AA6D;
                                        color: #ffffff;
                                        font-size:x-larg;
                                        font-weight:bold;
                                        border-color: #04AA6D;
                                        width:80px;
                                        height:40px;
                                        padding-top:8px;
                                        margin-right:auto; margin-left:auto;
                                        border-radius: 10px;
                                        text-align:center;
                                    }

                        </style>


                        <div class="w-full px-6 py-4 " >
                            <a href="{{ url('https://checkout.cheapresumewriter.com/payment?reference='.$invoice->ref_no.'&gateway=stripe&source=4studio') }}"
                                class="mbtn">

                                {{ 'Pay ' . addCurrency($invoice->amount) }}

                            </a>
                        </div>

                        <div class="flex flex-row justify-center space-x-6">
                            <img src="{{ asset('imgs/payments/professional-cv.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/clutch.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/top-rated.png') }}" class="h-14 w-14">
                        </div>

                        <p class="text-lg text-center my-4 ">We Accept</p>
                        <img src="{{ asset('imgs/payments/payment-logos.png') }}" class="mx-auto my-4 px-2">

                        <p class="text-lg text-center my-2 px-2">By proceeding to checkout you accept our</p>
                        <div class="text-black font-bold text-lg text-center mb-6">
                            <a href="{{ route('policy.terms-and-conditions') }}">
                                Terms & Conditions
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection