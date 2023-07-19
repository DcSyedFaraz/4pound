<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  Index --}}
    <meta name="robots" content="index,follow">
    
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="xFfFMm0UfLUjLAT6s3EW3gIZplo9RTcKeiBHRHCz">

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff"/>

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')"/>

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('title', '')"/>
    <meta name="twitter:description" content="@yield('description',)"/>
    <meta name="twitter:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    {{-- swiper cdn --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- AOS CSS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style> .iti { width: 100%;  } </style>

    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> --}}
    @yield('links')

    @yield('styles')
    <style>
        .g-color {
            background: -webkit-linear-gradient(right, #73c04e, #26ACE2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        a#priceTag::after {
            content: "";
            border-top-color: #30b4b5 !important;
            position: absolute;
            left: 50%;
            margin-left: -10px;
            border-width: 10px 10px 0;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            top: 5px;
        }

        @media (max-width: 1024px) {
            a#priceTag::after {
                display: none;
            }
        }

      
    </style>
</head>

<body class="">

    @include('partials.frontend.navbar')
    @if ( !Route::is('home') )
        @include('partials.bottom-bar')
    @endif
    @yield('content')

    

    {{-- Footer --}}
    @include('partials.frontend.footer')

    {{-- Tawto --}}
     {{ TawkTo::widgetCode('https://embed.tawk.to/5f1dc03d5e51983a11f5d499/default') }} 

    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- AOS JS CDN --}}
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script> --}}

   
    {{-- <script src="jquery.countup.js"></script> --}}

    @yield('scripts')
</body>

</html>
