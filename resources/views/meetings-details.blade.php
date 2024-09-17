<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('messages.MeetingsـDetails') }}</title>
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
      <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
         data-background="{{ asset('uploads/' . $branding->global_img) }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index text-center">
                     <h3 class="breadcrumb__title">{{ __('messages.MeetingsـDetails') }}</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">{{ __('messages.Home') }}</a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span>{{ __('messages.MeetingsـDetails') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- postbox area start -->
      <section class="postbox__area pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="postbox__wrapper">
                     <article class="postbox__item format-image mb-50 transition-3">
                           <div class="postbox__thumb w-img">
                              <img src="{{ asset('uploads/' . $meeting->image) }}" alt="Meeting Image">
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta">
                                 @if(!empty($meeting->date_ar) || !empty($meeting->date_en))
                                    <span><i class="fa-light fa-calendar-days"></i> {{ app()->getLocale() == 'ar' ? $meeting->date_ar : $meeting->date_en }}</span>
                                 @endif
                              </div>
                              @if(!empty($meeting->title_ar) || !empty($meeting->title_en))
                                 <h3 class="postbox__title">{{ app()->getLocale() == 'ar' ? $meeting->title_ar : $meeting->title_en }}</h3>
                              @endif
                              <div class="postbox__text">
                                    @if(!empty($meeting->description_ar) || !empty($meeting->description_en))
                                       <p>{!! app()->getLocale() == 'ar' ? $meeting->description_ar : $meeting->description_en !!}</p>
                                    @endif
                                    @if((app()->getLocale() == 'ar' && !empty($meeting->meeting_idea_ar)) || (app()->getLocale() == 'en' && !empty($meeting->meeting_idea_en)))
                                       <div class="postbox__list">
                                          <h3 class="postbox__list-title">{{ app()->getLocale() == 'ar' ? $meeting->meeting_idea_title_ar : $meeting->meeting_idea_title_en }}</h3>
                                          <div class="row">
                                             <div class="col-xl-7 col-lg-12">
                                                   <div class="postbox__list-content">
                                                      <ul>
                                                         @foreach(app()->getLocale() == 'ar' ? $meeting->meeting_idea_ar : $meeting->meeting_idea_en as $idea)
                                                         <li>
                                                               <span>
                                                                  <svg width="14" height="14" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z" fill="currentColor"></path>
                                                                  </svg>
                                                               </span> 
                                                               {{ $idea['points'] }}
                                                         </li>
                                                         @endforeach
                                                      </ul>
                                                   </div>
                                             </div>
                                             <div class="col-xl-5 col-lg-12">
                                                   <div class="posbox__list-img">
                                                      <img src="{{ asset('uploads/' . $meeting->image) }}" alt="List Image">
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                    @endif
                                    <div class="postbox__details-share-wrapper">
                                       <div class="row">
                                          <div class="col-lg-5">
                                             <div class="postbox__details-share text-lg-end">
                                                <span>{{ __('messages.Share') }}:</span>
                                                <a href="https://api.whatsapp.com/send?text={{ urlencode($meeting->title_en) }}%20{{ urlencode(url()->current()) }}" target="_blank">
                                                   <i class="fa-brands fa-whatsapp"></i>
                                                </a>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">
                                                   <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($meeting->title_en) }}&url={{ urlencode(url()->current()) }}" target="_blank">
                                                   <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank">
                                                   <i class="fab fa-linkedin"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                     </article>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">{{ __('messages.RecentـPosts') }}</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">
                                 @foreach($recentMeetings as $recentMeeting)
                                    <div class="rc__post mb-20 d-flex align-items-center">
                                       <div class="rc__post-thumb mr-20">
                                             <a href="{{ route('meetings.details', ['slug' => $recentMeeting->slug]) }}">
                                                <img src="{{ asset('uploads/' . $recentMeeting->cover) }}" alt="{{ $recentMeeting->title_en }}">
                                             </a>
                                       </div>
                                       <div class="rc__post-content">
                                             <div class="rc__meta">
                                                <span> {{ app()->getLocale() == 'ar' ? $meeting->date_ar : $meeting->date_en }}</span>
                                             </div>
                                             <h3 class="rc__post-title">
                                                <a href="{{ route('meetings.details', ['slug' => $recentMeeting->slug]) }}">
                                                   {{ app()->getLocale() == 'ar' ? $recentMeeting->title_ar : $recentMeeting->title_en }}
                                                </a>
                                             </h3>
                                       </div>
                                    </div>
                                 @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Category</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="blog.html">Cleaning <span>03</span></a></li>
                              <li><a href="blog.html">Consultant <span>05</span></a></li>
                              <li><a href="blog.html">Creative <span>08</span></a></li>
                              <li><a href="blog.html">Technology <span>06</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- postbox area end -->

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