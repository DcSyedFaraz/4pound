@extends('layouts.web')
@section('title', 'Reviews - 4 Pound Essay')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section class="px-4 md:px-16 lg:px-24 py-14 ">
        <div class="container mx-auto">

        <div class="mt-10 grid gap-6 lg:grid-cols-3 ">
            @php
                $reviews = [
                    [
                        "category"  => "Economics",
                        "stars" => 5,
                        "name"      => "Las Vegas",
                        "message"   => "“ I remember nagging the writers here, but they were always very respectful and considerate of my panic and urgency. They completed my assignments before the set deadline and helped me greatly all throughout my college life. ”",
                    ],
                    [
                        "category"  => "Journalism",
                        "stars" => 5,
                        "name"      => "London",
                        "message"   => "“ I was worried about the quality and uniqueness of my papers because journalism is a field where half the things are similar, but I wanted my assignment to be 100% plagiarism-free. However, they delivered according to my requirements and left me satisfied. ”",
                    ],
                    [
                        "category"  => "Psychology",
                        "stars" => 5,
                        "name"      => "Bristol",
                        "message"   => "“This service is the true representation of professionalism and the highest quality. These guys have saved me from late submissions and failing assignments numerous times, and I am forever indebted to them.”",
                    ],

                    [
                        "category"  => "Law",
                        "stars" => 5,
                        "name"      => "Camden",
                        "message"   => "“ Law students are burdened with difficult tasks, and so was I. My friend who used their services before suggested me this website to and I gave them a shot. I must say I haven’t come across such professional and helpful people in the online writing industry. They helped me greatly. ”",
                    ],
                    [
                        "category"  => "International Relations",
                        "stars" => 5,
                        "name"      => "Liverpool",
                        "message"   => "“ My classmate asked me to try this website for my academic help, so I visited their website and contacted their customer support. I was immediately impressed with the way they made me understand everything. Their services prove that they are actually in the market to help people and not just for financial gain. ”",
                    ],
                    [
                        "category"  => "Nursing",
                        "stars" => 5,
                        "name"      => "Cleveland",
                        "message"   => "“ Nursing assignments and papers are not easy to write because they require a lot of research and medical knowledge. If I didn’t have help from a cheap assignment writing website, I wouldn’t have been able to complete their efficiency. ”",
                    ],
                    [
                        "category"  => "Human Resources",
                        "stars" => 5,
                        "name"      => "Utica",
                        "message"   => "“ This website is a lifesaver. I don’t know what I would do without them. With the excellence and qualifications of the writers of this website, I scored the highest marks in most of my subjects, and I will continue taking their help in future. ”",
                    ],
                    [
                        "category"  => "Marketing",
                        "stars" => 5,
                        "name"      => "Fremont",
                        "message"   => "“ I was reluctant to approach them, but when I finally got my paperback, I was delighted and satisfied with their services; since then, I have kept on coming back to their reliable service. ”",
                    ],

                    [
                        "category"  => "Sociology",
                        "stars" => 5,
                        "name"      => "Richmond",
                        "message"   => "“ I tried such service for the first time, and I scored an A grade on my assignment. I have asked for their assistance a couple of times, and they have delivered the best content each time. Therefore, I rate their services a 10/10. ”",
                    ],
                    [
                        "category"  => "Philosophy",
                        "stars" => 5,
                        "name"      => "Chicago",
                        "message"   => "“ This is among the greatest online writing services I've found for getting high-quality assignments at reasonable prices. So many services charge exorbitant fees, but this is really great for students because it is quite reasonable. ”",
                    ],
                    [
                        "category"  => "English",
                        "stars" => 5,
                        "name"      => "Ankara",
                        "message"   => "“ I was worried sick about my English literature assignment when I came across this website, and I must say I am completely satisfied with their process, and I have suggested their services to many of my friends. ”",
                    ],
                    [
                        "category"  => "Medical",
                        "stars" => 5,
                        "name"      => "Poznan",
                        "message"   => "“ I was looking for high quality but affordable writing services, and I came across this one. Their prices are amazing and inexpensive, which is why I tried them in the first place. Their quality proved that they are a no joke agency that takes their work very seriously. ”",
                    ],
                ];
            @endphp

            @foreach ($reviews as $review)

                <div class="flex items-center border-2 py-3 hover:bg-primary-one-dark transition duration-300 ease-out border-primary-one rounded-xl">
                    <div class="w-full px-4">
                        <h4 class="text-3xl capitalize text-primary-one font-bold">
                            {{ $review['category'] }}
                        </h4>
                        <div class="flex items-center">
                            <p class="font-semibold text-xl mr-2 my-2"> {{ $review['name'] }}</p>
                            @for ($i = 0; $i < $review['stars']; $i++)
                                <img class="h-4" src="{{ asset('imgs/svg/star.png') }}" alt="Star">
                            @endfor
                        </div>
                        <p class= italic mt-2">
                            {{ $review['message'] }}
                        </p>
                    </div>
                </div>

            @endforeach
        </div>

    </section>
@endsection
