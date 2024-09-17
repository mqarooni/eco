<!doctype html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('messages.CommitteeـDetails') }} </title>
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
                     <h3 class="breadcrumb__title">{{ __('messages.CommitteeـDetails') }}</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">{{ __('messages.Home') }}</a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span>{{ __('messages.CommitteeـDetails') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- team details area start -->
      <div class="tp-team-details-area pt-120 pb-120">
         <div class="container">
            <div class="tp-team-details-bg mb-80 p-relative">
               <div class="tp-team-details-bg-shape d-none d-md-block">
                  <img src="assets/img/team/team-bg-shape.png" alt="">
               </div>
               <div class="row align-items-end">
                  <div class="col-xl-5 col-lg-5">
                     <div class="tp-team-details-thumb text-center text-md-start p-relative">
                           <img src="{{ asset('uploads/' . $team->image) }}" alt="Team Image">
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-team-details-info-box">
                        <div class="tp-team-details-title-box">
                              @if(!empty($team->name_en) || !empty($team->name_ar))
                                 <h4 class="tp-team-details-title">
                                    {{ app()->getLocale() == 'ar' ? $team->name_ar : $team->name_en }}
                                 </h4>
                              @endif

                              @if(!empty($team->position_en) || !empty($team->position_ar))
                                 <span>
                                    {{ app()->getLocale() == 'ar' ? $team->position_ar : $team->position_en }}
                                 </span>
                              @endif

                              @if(!empty($team->title_en) || !empty($team->title_ar))
                                 <p>
                                    {{ app()->getLocale() == 'ar' ? $team->title_ar : $team->title_en }}
                                 </p>
                              @endif
                        </div>

                        <div class="tp-team-details-personal-info-wrap">
                              @if(!empty($team->experience_en) || !empty($team->experience_ar))
                                 <div class="tp-team-details-personal-info">
                                    <span><b>{{ __('messages.Experience') }}:</b> {{ app()->getLocale() == 'ar' ? $team->experience_ar : $team->experience_en }}</span>
                                 </div>
                              @endif

                              @if(!empty($team->email))
                                 <div class="tp-team-details-personal-info">
                                    <span><b>{{ __('messages.Email_Address') }}:</b>
                                          <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                                    </span>
                                 </div>
                              @endif

                              @if(!empty($team->phone))
                                 <div class="tp-team-details-personal-info">
                                    <span><b>{{ __('messages.Phone_Number') }}:</b>
                                          <a href="tel:{{ $team->phone }}">{{ $team->phone }}</a>
                                    </span>
                                 </div>
                              @endif
                        </div>

                        @if(!empty($team->social) && is_array($team->social))
                              <div class="tp-team-details-social">
                                 @foreach($team->social as $social)
                                    @if(!empty($social['link']) && !empty($social['icon']))
                                          <a href="{{ $social['link'] }}" target="_blank">
                                             <i class="fa-brands {{ $social['icon'] }}"></i>
                                          </a>
                                    @endif
                                 @endforeach
                              </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               @if(!empty($team->personal_information_ar) || !empty($team->personal_information_en))
                  <div class="col-xl-12">
                        <div class="tp-team-details-text-box mb-60">
                           <h4 class="tp-team-details-title">{{ __('messages.Personal_Information') }}</h4>
                           <p>
                              {!! app()->getLocale() == 'ar' ? $team->personal_information_ar : $team->personal_information_en !!}
                           </p>
                        </div>
                  </div>
               @endif

               @if(!empty($team->skills_ar) || !empty($team->skills_en))
                  <div class="col-xl-6 col-lg-6">
                        <div class="tp-team-details-text-box mb-60">
                           <h4 class="tp-team-details-title">{{ __('messages.Professional_Skills') }}</h4>
                           <p>
                              {!! app()->getLocale() == 'ar' ? $team->skills_ar : $team->skills_en !!}
                           </p>
                        </div>
                  </div>
               @endif

               @if(!empty($team->rating_ar) || !empty($team->rating_en))
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-team-details-progress-wrap mb-80">
                           @php
                              $ratings = app()->getLocale() == 'ar' ? $team->rating_ar : $team->rating_en;

                              if (is_string($ratings)) {
                                 $ratings = json_decode($ratings, true);
                              }
                           @endphp

                           @if(is_array($ratings))
                              @foreach($ratings as $rating)
                                 <div class="tp-about-progress p-relative">
                                       <span class="progress-label">{{ $rating['description'] }}</span>
                                       <span class="progress-count">
                                          {{ $rating['rating'] }}%
                                       </span>
                                       <div class="progress">
                                          <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s"
                                                role="progressbar" data-width="{{ $rating['rating'] }}%" 
                                                aria-valuenow="{{ $rating['rating'] }}" aria-valuemin="0" aria-valuemax="100"
                                                style="width: {{ $rating['rating'] }}%; visibility: visible; 
                                                      animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                          </div>
                                       </div>
                                 </div>
                              @endforeach
                           @endif
                     </div>
                  </div>
               @endif
            </div>
         </div>
      </div>
      <!-- team details area end -->

      <!-- cookie banner area start -->
      <div class="cookie-banner" id="cookieBanner">
         <p>{{ __('messages.cookie_text') }} <a href="/privacy-policy" style="color: #4CAF50;">{{ __('messages.privacy_policy') }}</a>.</p>
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