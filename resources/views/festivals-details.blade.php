<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('messages.Festivals') }} |
        {{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}</title>
    <meta name="description" content="{{ $festival->overview_en }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/' . $branding->favicon) }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                            <!-- Dynamically render the page name (title) based on locale -->
                            <h3 class="breadcrumb__title">
                                {{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}
                            </h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>{{ __('messages.Festivals') }}</span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>
                                    <!-- Dynamically render the page name again in the breadcrumb -->
                                    {{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- event area start -->
        <div class="evn-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="evn-thumb-wrap mb-45 p-relative">
                            <div class="evn-thumb" style="max-height: 600px; overflow: hidden;">
                                <!-- Dynamically display the festival image -->
                                <img src="{{ asset('uploads/' . $festival->image) }}" alt="{{ $festival->title_en }}"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            @if($festival->date_en || $festival->date_ar)
                            <div class="evn-meta z-index">
                                <!-- Dynamically display the date based on locale -->
                                <span>
                                    {!! app()->getLocale() === 'ar' ? $festival->date_ar : $festival->date_en !!}
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="evn-avatar-box d-flex align-items-center">
                        <div class="evn-avatar">
                            <img src="assets/img/event/event-avata-2.png" alt="">
                        </div>
                        <div class="evn-avatar-info">
                            <h4 class="evn-avatar-name">
                                {{ app()->getLocale() === 'ar' ? $festival->title_ar : $festival->title_en }}
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        @if($festival->overview_en || $festival->overview_ar)
                        <div class="evn-text-box mb-30">
                            <p>
                                {!! app()->getLocale() === 'ar' ? $festival->overview_ar : $festival->overview_en !!}
                            </p>
                        </div>
                        @endif

                        @php
                        $requirements = app()->getLocale() === 'ar' ? $festival->requirments_ar :
                        $festival->requirments_en;
                        @endphp

                        @if(is_array($requirements) && !empty($requirements))
                        <div class="evn-list-box">
                            <h4 class="tp-inner-title mb-20">{{ __('messages.Festival_requirements') }}</h4>
                            <ul>
                                @foreach($requirements as $requirement)
                                <li>
                                    <span><i class="fa-regular fa-check"></i></span>
                                    {{ $requirement }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="col-xl-4">
                        <div class="evn-sidebar">
                            <div class="evn-user-wrap">

                                @if($festival->time_en || $festival->time_ar)
                                <div class="evn-user-item d-flex align-items-start">
                                    <div class="evn-user-icon">
                                        <span><i class="fa-light fa-clock"></i></span>
                                    </div>
                                    <div class="evn-user-info">
                                        <p>{{ __('messages.Festival_time') }}:</p>
                                        <span>{{ app()->getLocale() === 'ar' ? $festival->time_ar : $festival->time_en }}</span>
                                    </div>
                                </div>
                                @endif

                                @if($festival->date_en || $festival->date_ar)
                                <div class="evn-user-item d-flex align-items-start">
                                    <div class="evn-user-icon">
                                        <span><i class="fa-light fa-calendar"></i></span>
                                    </div>
                                    <div class="evn-user-info">
                                        <p>{{ __('messages.date') }}:</p>
                                        <span>{{ app()->getLocale() === 'ar' ? $festival->date_ar : $festival->date_en }}</span>
                                    </div>
                                </div>
                                @endif

                                @if($festival->phone_en || $festival->phone_ar)
                                <div class="evn-user-item d-flex align-items-start">
                                    <div class="evn-user-icon">
                                        <span><i class="fa-sharp fa-light fa-phone-volume"></i></span>
                                    </div>
                                    <div class="evn-user-info">
                                        <p>{{ __('messages.phone') }}:</p>
                                        <span>
                                            <a
                                                href="tel:{{ app()->getLocale() === 'ar' ? $festival->phone_ar : $festival->phone_en }}">
                                                {{ app()->getLocale() === 'ar' ? $festival->phone_ar : $festival->phone_en }}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                @endif

                                @if($festival->catagory_en || $festival->catagory_ar)
                                <div class="evn-user-item d-flex align-items-start">
                                    <div class="evn-user-icon">
                                        <span><i class="fa-light fa-folder-open"></i></span>
                                    </div>
                                    <div class="evn-user-info">
                                        <p>{{ __('messages.category') }}:</p>
                                        <span>{{ app()->getLocale() === 'ar' ? $festival->catagory_ar : $festival->catagory_en }}</span>
                                    </div>
                                </div>
                                @endif

                                @if($festival->location_en || $festival->location_ar)
                                <div class="evn-user-item d-flex align-items-start">
                                    <div class="evn-user-icon">
                                        <span><i class="fa-regular fa-location-dot"></i></span>
                                    </div>
                                    <div class="evn-user-info">
                                        <p>{{ __('messages.location') }}:</p>
                                        <span>
                                            {{ app()->getLocale() === 'ar' ? $festival->location_ar : $festival->location_en }}
                                        </span>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
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

<!-- Social Media Share Buttons -->
<div class="social-share">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" class="social-icon facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="social-icon twitter">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="https://wa.me/?text={{ urlencode(Request::fullUrl()) }}" target="_blank" class="social-icon whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://telegram.me/share/url?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="social-icon telegram">
        <i class="fab fa-telegram-plane"></i>
    </a>
    <a href="https://www.instagram.com/?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="social-icon instagram">
        <i class="fab fa-instagram"></i>
    </a>
</div>



</body>

</html>