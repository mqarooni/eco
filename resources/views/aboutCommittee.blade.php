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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/flaticon_statex.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Load RTL CSS if the language is Arabic -->
    @if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="assets/css/rtl.css">
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
                            <h3 class="breadcrumb__title">{{ __('messages.About_Committee') }}</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">{{ __('messages.Home') }}</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>{{ __('messages.About_Committee') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- vision and mission area start -->
        <div class="tp-service-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="tp-service-details-right-wrap">
                            <div class="tp-service-details-right-text mb-30">
                                @foreach ($committees as $index => $committee)
                                <div id="content-{{ $index }}" class="content-block">
                                    <h4 class="tp-service-details-right-title mb-15">
                                        {{ app()->getLocale() === 'ar' ? $committee->title_ar : $committee->title_en }}
                                    </h4>
                                    <p>
                                        {!! app()->getLocale() === 'ar' ? $committee->content_ar :
                                        $committee->content_en !!}
                                    </p>
                                </div>
                                @if (!$loop->last)
                                <hr> <!-- Horizontal line after each block except the last one -->
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- vision and mission area end -->

        <!-- cookie banner area start -->
        <div class="cookie-banner" id="cookieBanner">
            <p>{{ __('messages.cookie_text') }} <a href="/privacy-policy" style="color: #4CAF50;">{{ __('messages.privacy_policy') }}</a>.</p>
            <button id="acceptCookies">{{ __('messages.accept_button') }}</button>
        </div>
        <!-- cookie banner area end -->
    </main>

    @include('components.footer')

    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/split-text.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/jequery-knob.js"></script>
    <script src="assets/js/jequery-appear.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/cookie-script.js"></script>
    <script>
        const cookieSettings = {
            cookieName: "{{ $cookie_settings->cookie_name }}",
            cookieValue: "{{ $cookie_settings->cookie_value }}",
            cookieDuration: {{ $cookie_settings->cookie_duration }},
            durationUnit: "{{ $cookie_settings->cookie_duration_unit }}",
            cookiePath: "{{ $cookie_settings->cookie_path }}",
            cookieDomain: "{{ $cookie_settings->cookie_domain }}",
            secureFlag: {{ $cookie_settings->cookie_secure ? 'true' : 'false' }}
        };
    </script>
</body>

</html>