<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('messages.Meetings') }}</title>
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

   <!-- search popup start -->
   <div class="search__popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-white.png" alt="">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup end -->

   <!-- tp-offcanvus-area-start -->
   <div class="tpoffcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tpoffcanvas__logo">
            <a href="index.html">
               <img src="assets/img/logo/logo-white.png" alt="">
            </a>
         </div>
         <div class="tpoffcanvas__title">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque ab cumque, porro maxime
               autem sed.</p>
         </div>
         <div class="tp-main-menu-mobile d-xl-none"></div>
         <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
               <h5>Contact us</h5>
            </div>
            <ul>
               <li>
                  <i class="fa-light fa-location-dot"></i>
                  <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Melbone st,
                     Australia, Ny 12099</a>
               </li>
               <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:solaredge@gmail.com">themepure@gmail.com</a>
               </li>
               <li>
                  <i class="fal fa-phone-alt"></i>
                  <a href="tel:+48555223224">+48 555 223 224</a>
               </li>
            </ul>
         </div>
         <div class="tpoffcanvas__input">
            <div class="tpoffcanvas__input-title">
               <h4>Get UPdate</h4>
            </div>
            <form action="#">
               <div class="p-relative">
                  <input type="text" placeholder="Enter mail">
                  <button>
                     <i class="fas fa-paper-plane"></i>
                  </button>
               </div>
            </form>
         </div>
         <div class="tpoffcanvas__social">
            <div class="social-icon">
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->

   @include('components.header')


   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="{{ asset('uploads/' . $branding->global_img) }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index text-center">
                     <h3 class="breadcrumb__title">{{ __('messages.Meetings') }}</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">{{ __('messages.Home') }}</a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span>{{ __('messages.Meetings') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- news area start -->
      <div class="tp-blog-2-area pt-120 pb-90">
         <div class="container">
            <div class="row">
               @foreach($meetings as $meeting)
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="tp-blog-2-item p-relative">
                     <div class="tp-blog-2-img fix">
                        <img src="{{ asset('uploads/' . $meeting->cover) }}" alt="{{ $meeting->title_en }}">
                     </div>
                     <div class="tp-blog-2-content-wrap z-index">
                        <div class="tp-blog-2-content">
                           <h4 class="tp-blog-2-title-sm">
                              <a href="{{ route('meetings.details', ['slug' => $meeting->slug]) }}">
                                 {{ app()->getLocale() == 'ar' ? $meeting->title_ar : $meeting->title_en }}
                              </a>
                           </h4>
                        </div>
                        <div class="tp-blog-2-link d-flex justify-content-between align-items-center">
                           <span>{{ app()->getLocale() == 'ar' ? $meeting->date_ar : $meeting->date_en }}</span>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- news area end -->


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