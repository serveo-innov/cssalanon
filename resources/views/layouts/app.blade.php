<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Complexe Scolaire SALANON">
    <meta name="description" content="Complexe Scolaire SALANON – Un cadre d'apprentissage sûr et épanouissant">

    <title>@yield('title', 'Complexe Scolaire SALANON')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

<div class="page-wrapper">

    {{-- Preloader SALANON --}}
    <div class="preloader">
        <div class="loader-salanon">
            <svg class="loader-ring" viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
                <circle class="loader-ring__track" cx="80" cy="80" r="70"/>
                <circle class="loader-ring__fill" cx="80" cy="80" r="70"/>
            </svg>
            <img src="{{ asset('assets/img/logo/salanon-logo.png') }}" alt="CS SALANON">
        </div>
    </div>

    {{-- Back To Top --}}
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    {{-- Custom Cursor --}}
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>

    {{-- Header --}}
    @include('partials.header')

    {{-- Search Popup --}}
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" name="search" placeholder="Rechercher...">
                <button type="submit" aria-label="search submit" class="search-btn">
                    <span><i class="fa-regular fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
    </div>

    {{-- Smooth Scroll Wrapper (requis par GSAP ScrollSmoother) --}}
    <div id="smooth-wrapper">
        <div id="smooth-content">

            @yield('content')

            @include('partials.footer')

        </div>
    </div>

</div>{{-- /.page-wrapper --}}

{{-- jQuery (en premier, obligatoire) --}}
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>

{{-- Bootstrap --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

{{-- GSAP & plugins (premium – dans vos fichiers achetés) --}}
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/TextPlugin.js') }}"></script>

{{-- Autres plugins --}}
<script src="{{ asset('assets/js/chroma.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/parallaxie.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

{{-- Script principal --}}
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>