<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mayorx - Municipal & City Government Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/' . $branding->favicon) }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_statex.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Load RTL CSS if the language is Arabic -->
    @if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif
</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- Header Component -->
    @include('components.header')
    <main>

        <!-- breadcrumb area start -->
        <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
            data-background="{{ asset('uploads/' . $branding->global_img) }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content z-index text-center">
                            <h3 class="breadcrumb__title">{{ __('messages.Festivals') }}</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">{{ __('messages.Home') }}</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>{{ __('messages.Festivals') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- event area start -->
        <div class="tp-event-3-area pt-120 pb-90 p-relative fix">
            <div class="container">
                <div class="row">
                    @foreach($festivals as $festival)
                    @php
                    $overview = app()->getLocale() === 'ar' ? $festival->overview_ar : $festival->overview_en;
                    $charLimit = 120; // Limit to 120 characters
                    if (strlen($overview) > $charLimit) {
                    $overview = substr($overview, 0, $charLimit - 3) . '...'; // Cut last 3 characters and append '...'
                    }
                    @endphp
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                        <div class="tp-event-3-item" style="height: 500px;">
                            <!-- Image Handling -->
                            <div class="tp-event-3-thumb fix" style="height: 250px; overflow: hidden; border-radius: 13px;">
                                <img src="{{ asset('uploads/' . $festival->image) }}"
                                    alt="{{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="tp-event-3-content-wrap">
                                <div class="tp-event-3-content" style="height: 160px; overflow: hidden;">
                                    <div class="tp-event-3-meta">
                                        <span class="mr-50">
                                            <i class="fa-light fa-location-dot"></i>
                                                {{ app()->getLocale() === 'ar' ? $festival->location_ar : $festival->location_en }}
                                        </span>
                                        <span>
                                            <i class="fa-regular fa-clock"></i>
                                            {{ app()->getLocale() === 'ar' ? $festival->date_ar : $festival->date_en }}
                                        </span>
                                    </div>
                                    <!-- Title Handling -->
                                    <h4 class="tp-event-title-sm">
                                        <a href="{{ route('festival.details', $festival->slug) }}">
                                            {{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}
                                        </a>
                                    </h4>
                                    <!-- Overview Text trimmed with ellipsis -->
                                    <p>
                                        {!! $overview !!}
                                    </p>
                                </div>
                                <div class="tp-event-3-btn-box">
                                    <a class="tp-btn-border-sm" href="{{ route('festival.details', $festival->slug) }}">
                                        {{ __('messages.read_more') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- event area end -->
    </main>

    @include('components.footer')

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/split-text.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jequery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/jequery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>