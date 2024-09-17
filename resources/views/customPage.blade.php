<!doctype html>
<html class="no-js" lang="{{ App::getLocale() == 'ar' ? 'ar' : 'en' }}">

<head>
    <!-- Basic SEO -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <title>
        {{ App::getLocale() === 'ar' ? ($customPage->seo_title_ar ?? $customPage->page_name_ar) : ($customPage->seo_title_en ?? $customPage->page_name_en) }}
    </title>
    <meta name="keywords"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_keywords_ar : $customPage->seo_keywords_en }}">
    <meta name="description"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_description_ar : $customPage->seo_description_en }}">
    <meta name="author"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_author_ar : $customPage->seo_author_en }}">
    <meta name="robots" content="{{ $customPage->seo_robots }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_title_ar : $customPage->seo_title_en }}">
    <meta property="og:description"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_description_ar : $customPage->seo_description_en }}">
    <meta property="og:image" content="{{ asset('uploads/' . $branding->favicon) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="{{ App::getLocale() == 'ar' ? 'ar_AR' : 'en_US' }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_title_ar : $customPage->seo_title_en }}">
    <meta name="twitter:description"
        content="{{ App::getLocale() === 'ar' ? $customPage->seo_description_ar : $customPage->seo_description_en }}">
    <meta name="twitter:image" content="{{ asset('uploads/' . $branding->favicon) }}">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:creator" content="@YourTwitterHandle">

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
                            <h3 class="breadcrumb__title">
                                {{ app()->getLocale() === 'ar' ? $customPage->page_name_ar : $customPage->page_name_en }}
                            </h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>{{ __('messages.more') }}</span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>{{ app()->getLocale() === 'ar' ? $customPage->page_name_ar : $customPage->page_name_en }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
<!-- page content area start -->
<div class="tp-service-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="tp-service-details-right-wrap">
                    <div class="tp-service-details-right-text mb-30">
                        <div id="content-{{ $customPage->slug }}">
                            <!-- Make the title smaller and center it -->
                            <h4 class="tp-service-details-right-title mb-15">
                                {{ app()->getLocale() === 'ar' ? $customPage->title_ar : $customPage->title_en }}
                            </h4>
                            <p>
                                {!! app()->getLocale() === 'ar' ? $customPage->content_ar : $customPage->content_en !!}
                            </p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content area end -->


        <!-- cookie banner area start -->
        <div class="cookie-banner" id="cookieBanner">
            <p>{{ __('messages.cookie_text') }} <a href="/privacy-policy"
                    style="color: #4CAF50;">{{ __('messages.privacy_policy') }}</a>.</p>
            <button id="acceptCookies">{{ __('messages.accept_button') }}</button>
        </div>
        <!-- cookie banner area end -->
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
    <script src="{{ asset('assets/js/cookie-script.js') }}"></script>
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