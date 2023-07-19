@extends('layouts.web')

@section('title', 'Woops! 404 Not Found')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

<div class="bg-primary-one">
    <div class="container  mx-auto   py-8">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 text-left">
                <p>
                    <b class=" text-4xl text-white bg-primary-one px-8"></b>
                </p>
            </div>
        </div>
    </div>
</div>

    <section class="container mx-auto my-10 px-4">

        {{-- <h1 class="text-primary text-4xl my-4"><strong>About</strong></h1> --}}

        <img class="mx-auto h-40 md:h-96" src="{{ asset('imgs/404-error-rafiki.svg') }}" alt="Not Found">

        <div class="text-center mt-3 space-y-2 text-xl md:text-3xl">
            <div class="text-primary"><strong>Woops</strong></div>
            <div class="text-secondary"><strong>This page got lost in conversation</strong></div>
        </div>
        <div class="text-center mt-10">
            <a class="bg-primary-two py-2 px-8 text-white font-semibold rounded-lg shadow-lg border-2 border-white focus:outline-none focus:ring-2 focus:ring-primary-dark focus:ring-opacity-75 transform transition hover:-translate-y-1 cursor-pointer text-center " href="{{ route('home') }}">
                Back to Home
            </a>
        </div>
    </section>

@endsection
