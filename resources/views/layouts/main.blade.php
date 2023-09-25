<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shwe Wutt Hmone Kha Co.,Ltd - @yield('title')</title>

    <meta name="keywords" content="Shwe Wutt Hmone Kha Co.,Ltd" />
    <meta name="author" content="Shwe Wutt Hmone Kha Co.,Ltd" />
    <meta name="robots" content="Shwe Wutt Hmone Kha Co.,Ltd" />
    <meta name="description" content="Shwe Wutt Hmone Kha Co.,Ltd" />
    <link rel="shortcut icon" href="{{ asset('data/logo_png.png') }}" />

    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Themify icons css -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="pageWrapper">
        @include('layouts.menu')

        @if (URL::current() == route('home'))
            @include('layouts.slider')
            {{-- @include('layouts.slider.nova_slider') --}}
        @endif

        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3 6 0 Min Js -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

</body>

@yield('script')

</html>
