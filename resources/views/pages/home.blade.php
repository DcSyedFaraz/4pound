@extends('layouts.web')
@section('title', '4 Pound Essay: #1 Cheap Essay Writing Service in UK at £4')
@section('description', 'Take help from British Essay Writers who have command on writing any type of academic tasks,
    Get cheap essay writing service in UK to attain good grades.')
@section('canonical', config('app.app_url'))

@section('styles')
    <style>
        .g-color {
            background: -webkit-linear-gradient(right, #73c04e, #26ACE2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tabs .active {
            background-color: #fff;
            color: #30b4b5;
        }
    </style>
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-gradient-to-r from-primary-one to-primary-two px-4 lg:px-20">
        <div class="container mx-auto grid grid-cols-12 py-8">
            <div class="col-span-12 lg:col-span-7 xl:col-span-7 my-auto mx-auto">
                <div class="relative max-w-screen-xl my-auto mx-auto">
                    <div class="relative space-y-4">
                        <div class=" text-center lg:text-left space-y-4">
                            <h1>
                                <span class="text-3xl font-bold lg:font-medium lg:text-5xl text-white">
                                    Cheap Essay Writing Service UK
                                </span>
                                <span class="text-2xl lg:text-4xl text-white px-2">
                                    for Your Immediate Help
                                </span>
                            </h1>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 py-4 px-4 md:px-0">
                                <div class="flex text-white">
                                    <i class="fa fa-check rounded-tl-xl rounded-br-xl border border-white p-2 mr-2 my-auto"
                                        aria-hidden="true" style="font-size:30px"></i>
                                    <p class="my-auto text-xl">Authentic & Quality Essay Writing Help</p>
                                </div>
                                <div class="flex text-white">
                                    <i class="fa fa-pencil rounded-tl-xl rounded-br-xl border border-white p-2 mr-2 my-auto"
                                        aria-hidden="true" style="font-size:30px"></i>
                                    <p class="my-auto text-xl">Essays Written by Expert Academic Writers</p>
                                </div>
                                <div class="flex text-white">
                                    <i class="fa fa-usd rounded-tl-xl rounded-br-xl border border-white py-2 px-4 mr-2 my-auto"
                                        aria-hidden="true" style="font-size:30px"></i>
                                    <p class="my-auto text-xl">One of the Cheapest Essay Writing Services UK</p>
                                </div>
                                <div class="flex text-white">
                                    <i class="fa fa-repeat rounded-tl-xl rounded-br-xl border border-white p-2 mr-2 my-auto"
                                        aria-hidden="true" style="font-size:30px"></i>
                                    <p class="my-auto text-xl">Unlimited Revisions with 24/7 Customer Support</p>
                                </div>
                            </div>
                            <div
                                class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row items-center justify-center lg:justify-start text-secondary">
                                <div class="p-5">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('imgs/sitejabbarimg.png') }}" alt="4 Pound Essay"
                                            class="mx-auto h-14">
                                    </a>
                                    <ul class="flex justify-center">
                                        <li class="text-white mr-1">4.9</li>
                                        <li class="my-auto text-cyan-600">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="w-4 text-yellow-500" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-5">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('imgs/trustpilot-2.png') }}" alt="4 Pound Essay"
                                            class="mx-auto h-14">
                                    </a>
                                    <ul class="flex justify-center">
                                        <li class="text-white  mr-1">4.9</li>
                                        <li class="my-auto text-cyan-600">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="w-4 text-yellow-500" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-5">
                                    <a href="https://reviewsbank.org/best-assignment-writing-services-uk/" target="_blank">
                                        <img src="{{ asset('imgs/reviewsbank.png') }}" alt="4 Pound Essay"
                                            class="mx-auto h-14">
                                    </a>
                                    <ul class="flex justify-center">
                                        <li class="text-white mr-1">4.9</li>
                                        <li class="my-auto text-cyan-600">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-500 mr-1" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="my-auto">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="w-4 text-yellow-500" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="mt-6 flex flex-col justify-center lg:justify-start items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                                <a href="javascript:void(Tawk_API.toggle())" class="btn-sec">
                                    Live Chat
                                </a>
                                <a href="{{ route('order') }}" class="btn-pri">
                                    Order Now
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-5 xl:col-span-5  px-3">
                <div class="mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg relative text-white rounded-[2.5rem] ">
                    <div class=" text-center ">
                        <span
                            class="relative top-3 md:text-2xl text-primary-two text-sm font-bold bg-white p-2 md:p-2 rounded px-4 lg:px-10">
                            Calculate Your Price
                        </span>
                    </div>
                    <div class="bg-[#174a4e] border-2 border-primary-one mx-auto sm:mx-0 rounded-[1rem] p-4 px-6 space-y-4">
                        <div class="flex flex-col">
                            <label class="text-primary-two font-semibold">Academic Level</label>
                            <select name="academic_level" id="academic_level" class="get-fare form-select">
                                <option hidden="" value="0" disabled="" selected="">Select Academic Level</option>
                                @foreach ($academic_levels as $academic_level)
                                    <option {{ old('$academic_level') == $academic_level->id ? 'selected' : '' }}
                                        value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-primary-two font-semibold">Deadline</label>
                            <select id="deadline" name="deadline" class="get-fare form-select">
                                <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                @foreach ($deadlines as $deadline)
                                    <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                        value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-primary-two font-semibold">Number of Pages</label>
                            <select name="number_of_pages" id="no_of_pages" class=" form-select get-fare">
                                <option hidden="" value="0" disabled="" selected="">Number of Pages</option>
                                @for ($i = 1; $i <= 200; $i++)
                                    <option  {{ old('number_of_pages') == $i ? 'selected' : '' }} value="{{ $i }}"  >{{ 250 * $i . ' Words ' . ' / ' . $i . ' Pages ' }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="flex flex-col mt-2 md:mt-5">
                            <label class="text-primary-two font-semibold">Paper Type</label>
                            <select name="paper_type" class=" form-select">
                                <option hidden="" value="0" disabled="" selected="">Select Document Type</option>
                                @foreach ($paper_types as $paper_type)
                                    <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                                        value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col space-y-4 lg:flex-row lg:space-y-0 lg:space-x-4 justify-between items-center text-black ">
                            <div class="border-primary-one border leading-[46px] py-1 text-white rounded w-full text-center">
                                <span class="">Per Page: £ </span><span id="cost-per-page">0 .00</span>
                            </div>
                            <div class="border-primary-one border leading-[46px] py-1 text-white rounded w-full text-center">
                                <span class="">Total: £ </span><span id="total-cost">0 .00</span>
                            </div>
                            <div class="bg-primary-one p-4 text-white rounded w-full text-center"><a href={{ route('order') }}>Order Now</a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cheap Essay Writers UK -->
    <section class="py-6 container mx-auto px-4 lg:px-20">
        <div class="text-center space-y-4">
            <h2 class=" text-2xl lg:text-3xl font-semibold g-color px-2">Hire Our <strong> Cheap Essay Writers UK
                </strong> and Get Quality Essay Help</b>
            </h2>
            <p>If you’re looking for quality, affordability and unmatchable essay help on one platform then our
                <br>essay writing service in UK is the best for you.
            </p>
            <p class="bg-[#e4e4e4] py-4 font-semibold text-primary-two text-lg mx-8 px-2 rounded-tl-xl rounded-br-xl">No
                more stress, no more midnight panics and no more incomplete essays. Keep the peace within by hiring
                <br>our affordable writing services. We Can Help!
            </p>
        </div>
    </section>

    <!-- Services -->
    <section class="py-8 px-4 lg:px-20">
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto gap-x-6 gap-y-6 lg:gap-y-0">

            <div
                class="text-center text-white p-6 bg-gradient-to-r from-primary-one to-primary-two rounded-tl-xl rounded-br-xl space-y-4">
                <i class="fa fa-graduation-cap rounded-tl-xl rounded-br-xl border-2 border-white py-6 px-2"
                    aria-hidden="true" style="font-size: 40px;"></i>
                <p class="text-lg font-semibold">University Essay<br>
                    Writing</p>
                <hr class="w-16 border-2 mx-auto">
                <p class="text-lg">We offer the essay writing to help you with complicated subjects, whether it’s for
                    your college or university essay help.</p>
            </div>

            <div
                class="text-center text-white p-6 bg-gradient-to-r from-primary-one to-primary-two rounded-tl-xl rounded-br-xl space-y-4">
                <i class="fa fa-pencil rounded-tl-xl rounded-br-xl border-2 border-white py-6 px-4" aria-hidden="true"
                    style="font-size: 40px;"></i>
                <p class="text-lg font-semibold">British Essay<br>
                    Writing</p>
                <hr class="w-16 border-2 mx-auto">
                <p class="text-lg">Our British essay writers and researchers work together to craft an essay that lets you
                    score outstanding grades in your academics.</p>
            </div>

            <div
                class="text-center text-white p-6 bg-gradient-to-r from-primary-one to-primary-two rounded-tl-xl rounded-br-xl space-y-4">
                <i class="fa fa-bullhorn rounded-tl-xl rounded-br-xl border-2 border-white py-6 px-3" aria-hidden="true"
                    style="font-size: 40px;"></i>
                <p class="text-lg font-semibold">Marketing Essay<br>
                    Writing</p>
                <hr class="w-16 border-2 mx-auto">
                <p class="text-lg">We also have marketing essay writers who are expert in all the digital mediums. They can
                    help you ace your results.</p>
            </div>

            <div
                class="text-center text-white p-6 bg-gradient-to-r from-primary-one to-primary-two rounded-tl-xl rounded-br-xl space-y-4">
                <i class="fa fa-user rounded-tl-xl rounded-br-xl border-2 border-white py-6 px-4" aria-hidden="true"
                    style="font-size: 40px;"></i>
                <p class="text-lg font-semibold">Essay Writing<br>
                    Support</p>
                <hr class="w-16 border-2 mx-auto">
                <p class="text-lg">Already written your essay but not sure about it? Let our essay writing expert do the
                    job for you. Get your papers edited by us.</p>
            </div>

        </div>
    </section>

    <!-- Hire Our Cheap Essay Writers -->
    <section class="hidden bg-gradient-to-r from-primary-one to-primary-two px-4 lg:px-20">
        <div class="container mx-auto text-center text-white py-8 space-y-8">
            <h3 class="text-2xl lg:text-3xl">
                Our Cheap Reliable <b>Essay Writing Service UK Brings the Best For You</b>
            </h3>
            <p class="text-2xl">
                Bury All Your Worries with Our <b>Result-Driven and Brilliant Essay Writing</b>
            </p>
            <div>
                <span
                    class="bg-white border-2 text-primary-one border-primary-two px-1 md:px-6 py-1 pb-2 text-base md:text-3xl rounded-tl-xl rounded-br-xl">
                    Hire Our<b class=" g-color"> Cheap </b> Essay Writers
                </span>
            </div>
            <p class="text-2xl">
                & Avail the Online Help for Your Ease
            </p>
            <div class="text-center mt-8">
                <a href="{{ route('order') }}" class="btn-pri">
                    Order Now
                </a>
            </div>
        </div>
    </section>

    <!-- How Do We Help  -->
    <section class="bg-[#dfdfdf] px-4 lg:px-20">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-20 gap-y-6 lg:gap-y-0">
            <div
                class="bg-[#174a4e] text-center py-6 rounded-br-xl mx-auto px-10 md:px-20 lg:mx-0 lg:px-0 w-[250px] md:w-auto">
                <p class="g-color font-bold text-5xl"><span class="counter">50</span></p>
                <p class="text-white"> Professional Writers </p>
            </div>
            <div
                class="bg-[#174a4e] text-center py-6 rounded-br-xl mx-auto px-10 md:px-20 lg:mx-0 lg:px-0 w-[250px] md:w-auto">
                <p class="g-color font-bold text-5xl"><span class="countertwo">1500</span></p>
                <p class="text-white"> Orders Completed </p>
            </div>
            <div
                class="bg-[#174a4e] text-center py-6 rounded-br-xl w-[250px] md:w-[290px] lg:w-auto md:col-span-2 lg:col-span-1 mx-auto px-10 md:px-20 lg:mx-0 lg:px-0">
                <p class="g-color font-bold text-5xl"><span class="counterthree">95</span></p>
                <p class="text-white"> Success Rate </p>
            </div>
        </div>

        <div class="container mx-auto space-y-3 py-8">

            <h3 class=" text-2xl lg:text-3xl font-semibold text-primary-one px-2">How Do We Help Students with Our
                <strong class="g-color"> Cheap Essay Writing Help UK? </strong>
            </h3>
            <p>If you’re studying in the best universities of London, Manchester, Cambridge, Oxford, Southampton,
                Durham, and Birmingham then you must know that you have to keep your performance up to meet their
                education standards. Sometimes, the pile of assignments and UK essays can be so heavy that it can bury
                your mental peace underneath. The overwhelm can cause you to suffer. That’s why we launched our essay
                writing website to share the burden with students and give them time to focus on the important tasks.
            </p>
            <p>Even when you need urgent essay writing, you can ask for our help and we won’t disappoint despite the
                short time.</p>
            <p>Get the top essay writing for prices as low as 4 pound. Talk to our <a class="g-color text-2xl font-bold"
                    href="javascript:void(Tawk_API.toggle())">
                    customer support services </a> and get all your doubts resolved
                before you hire. <a class="g-color text-2xl font-bold" href="{{ route('order') }}"> We are just a click
                    away. </a> </p>

        </div>
    </section>

    <!-- Why Our 4 Pound Essays are Best -->
    <section class="container mx-auto py-8 px-4 lg:px-20">
        <div class="bg-gradient-to-r from-primary-one to-primary-two rounded-tl-xl rounded-br-xl text-center py-4">
            <p class="text-3xl text-white">Why Our <b> 4 Pound Essays </b> are Best than the Rest?</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 py-6 lg:gap-x-8 gap-y-6">

            <div class="space-y-4">
                <div class="flex space-x-4">
                    <i class="fa fa-star bg-[#174A4E] p-4 text-white rounded-tl-3xl rounded-br-3xl"
                        style="font-size:30px;" aria-hidden="true"></i>
                    <p class="my-auto text-2xl font-semibold">We Focus on Quality</p>
                </div>

                <hr class="border border-primary-two">

                <p>Although we provide cheap reliable essay writing UK but that doesn’t mean we compromise on quality.
                    Our writers understand the importance of good grades in academic life and that’s why they make sure
                    to always provide the best essay papers to students. Whether you want us to write from scratch or
                    edit your existing paper, our writers are always on the front to help you complete your pending
                    assignments with a sure-shot quality. We believe that quality services are missing the most from all
                    the academic writing experts, that’s why we have made Quality our forte. Get in touch to see samples
                    of our previous work.</p>
            </div>

            <div class="space-y-4">
                <div class="flex space-x-4">
                    <i class="fa fa-pencil bg-[#174A4E] p-4 text-white rounded-tl-3xl rounded-br-3xl"
                        style="font-size:30px;" aria-hidden="true"></i>
                    <p class="my-auto text-2xl font-semibold">We Have Expert Essay Writers
                    </p>
                </div>

                <hr class="border border-primary-two">

                <p>An essay isn’t a simple piece which you can start with an introduction and end with the conclusion. It
                    requires research, structure, and data to prove your point. Without enough information, it’s tough to
                    impress your professors. That’s why it’s always a wise decision to take help from any genuine writing
                    service UK who are experienced in crafting the papers. So, here at our platform, we have expert writers
                    from all niches who can help you with your essays. Whether you need help from an English essay writer or
                    marketing or science, we will let you connect with the writers so you can get the best essay help from
                    them.</p>
            </div>

            <div class="space-y-4">
                <div class="flex space-x-4">
                    <i class="fa fa-user bg-[#174A4E] p-4 text-white rounded-tl-3xl rounded-br-3xl"
                        style="font-size:30px;" aria-hidden="true"></i>
                    <p class="my-auto text-2xl font-semibold">We Offer Last Minute Essay Writing Support</p>
                </div>

                <hr class="border border-primary-two">

                <p>Do you wake up at midnight sweating and worrying about the incomplete list of essays? Then, it’s time to
                    stop the panic as we are here to help you get away with this. Our platform also provides urgent essay
                    help to students who are running short of deadlines and have nobody to help in their surroundings. We
                    have a separate team dedicated to this task. You only need to get in touch with our customer support and
                    our writers will be at your service. Note that this service is open to all the students in London,
                    Manchester, Oxford, and Cambridge UK. So, never hesitate to ask help from our professional essay writers
                    anytime.</p>
            </div>

            <div class="space-y-4">
                <div class="flex space-x-4">
                    <i class="fa fa-usd bg-[#174A4E] p-4 text-white rounded-tl-3xl rounded-br-3xl" style="font-size:30px;"
                        aria-hidden="true"></i>
                    <p class="my-auto text-2xl font-semibold">We Offer Cheapest Rates</p>
                </div>

                <hr class="border border-primary-two">

                <p>Do you know any UK essay writing online who provides essays for as low as 4 pound? No? Meet Us! We are 4
                    pound essay which means our essay writing rates start from 4 pound only. The vision of our platform is
                    to help students with pocket-friendly rates so they don’t need to think twice before hiring us. If
                    you’re looking for a cheap essay help UK, then you can stop your search right here. No matter if you’re
                    a college or university student in Southampton, Durham or Birmingham, our rates are the same for
                    everyone. Your best essay help UK is only 4 pound away.</p>
            </div>

        </div>

        <div class="mt-6 flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri">
                Live Chat
            </a>
            <a href="{{ route('order') }}" class="btn-sec-2">
                Order Now
            </a>
        </div>

    </section>

    <!-- Tabs -->
    <section class="bg-gradient-to-r from-primary-one to-primary-two px-4 lg:px-20">

        <p class="text-white text-center text-2xl lg:text-3xl py-10">
            Let’s Hear <b>Our Stories</b> from Our Clients
        </p>

        <div class="">
            <nav class="tabs flex flex-col sm:flex-row justify-center space-x-4 ">
                <button data-target="panel-1"
                    class="tab active text-white py-4 px-6 block rounded-tl-3xl rounded-br-3xl hover:bg-white hover:text-primary-one focus:outline-none font-medium ">
                    One of the Cheapest Writing Platform in UK
                </button>
                <button data-target="panel-2"
                    class="tab text-white py-4 px-6 block rounded-tl-3xl rounded-br-3xl hover:bg-white hover:text-primary-one focus:outline-none font-medium ">
                    They Did my College Essay
                </button>
                <button data-target="panel-3"
                    class="tab text-white py-4 px-6 block rounded-tl-3xl rounded-br-3xl hover:bg-white hover:text-primary-one focus:outline-none font-medium ">
                    Recommended for UK Essay Help
                </button>
                <button data-target="panel-4"
                    class="tab text-white py-4 px-6 block rounded-tl-3xl rounded-br-3xl hover:bg-white hover:text-primary-one focus:outline-none font-medium ">
                    I was Disappointed at First
                </button>
            </nav>
        </div>

        <div id="panels" class="px-4 lg:px-24 py-10">

            <div class="panel-1 tab-content active py-5 px-3 md:px-16 text-center bg-white rounded-tl-3xl rounded-br-3xl">
                <p class="g-color font-semibold text-lg"> I work part-time to pay my university fees and don’t have
                    enough money to afford the UK essay prices. But in my last semester, I was short of time and had 3
                    essays to submit in a couple of days. I was in urgent need of cheap essay help and thankfully luck
                    connected me to them. They provide me good services in a small amount, I must say. </p>
            </div>
            <div class="panel-2 tab-content py-5 px-16 text-center bg-white rounded-tl-3xl rounded-br-3xl">
                <p class="g-color font-semibold text-lg"> I was looking for someone to do my college essay and found
                    them. I was a bit scared and had a lot of doubts but their customer support answered all my
                    questions with great patience. </p>
            </div>
            <div class="panel-3 tab-content py-5 px-16 text-center bg-white rounded-tl-3xl rounded-br-3xl">
                <p class="g-color font-semibold text-lg"> I’m taking their services for 2 continuous years. They are
                    trustworthy and reliable. Plus, the amount of research and quality they put to the essays make them
                    the best essay writing service in London. I vouch for them.</p>
            </div>
            <div class="panel-4 tab-content py-5 px-16 text-center bg-white rounded-tl-3xl rounded-br-3xl">
                <p class="g-color font-semibold text-lg"> One of my friends recommended this cheap essay help UK but I
                    was disappointed to receive my first order. They mess it but thankfully they admit their mistake and
                    give me a complimentary essay for free. I love their active and kind customer support.</p>
            </div>
        </div>
    </section>

    <!-- Get Your Best Essays -->
    <section class="container mx-auto py-8 px-4 lg:px-20">

        <p class=" text-center text-2xl lg:text-3xl pb-10">
            Quality & Affordability Wrap Together with Our Leading Essays Help! Ready to Hire?
        </p>

        <div class="text-center">
            <span
                class="bg-gradient-to-r from-primary-one to-primary-two text-white px-3 md:px-16 py-3 pb-3 md:py-1 md:pb-2 text-lg md:text-4xl rounded-tl-3xl rounded-br-3xl">
                Get Your<b> Best </b> Essays
            </span>
        </div>

        <div class="mt-10 flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri">
                Live Chat
            </a>
            <a href="{{ route('order') }}" class="btn-sec-2">
                Order Now
            </a>
        </div>

    </section>

    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            // deactivate existing active tabs and panel

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }
    </script>
@endsection

@section('scripts')
    <script>
        const fares = @json($fares);

        $(".get-fare").change(function() {
            const academic_level    = $('#academic_level').val();
            const deadline          = $('#deadline').val();
            const no_of_pages       = $('#no_of_pages').val() == null ? 1 : $('#no_of_pages').val();
            fares.forEach(fare => {
                if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
                    $('#cost-per-page').html(fare.per_page_price);
                    $('#total-cost').html(fare.per_page_price * no_of_pages);
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp({
            'time': 2000,
            'delay': 10
        });

        $('.countertwo').countUp({
            'time': 2000,
            'delay': 10
        });

        $('.counterthree').countUp({
            'time': 2000,
            'delay': 10
        });
    </script>
@endsection
