<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Mayorx - Municipal & City Government Template </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

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

   <!-- Header Component -->
   @include('components.header')

   <main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="{{ asset('uploads/' . $branding->global_img) }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index text-center">
                     <h3 class="breadcrumb__title">About Us</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span>About Us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- about area start -->
      <div class="tp-about-2-area pt-120 pb-120">
         <div class="container">
            <div class="row align-items-start">
               <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-about-2-thumb-wrap mr-40">
                     <div class="tp-about-2-thumb-main p-relative text-end">
                        <img src="assets/img/about/about-2-1.jpg" alt="">
                        <div class="tp-about-2-sub-img-1">
                           <img src="assets/img/about/about-2-2.jpg" alt="">
                        </div>
                        <div class="tp-about-2-sub-img-2 d-none d-md-block">
                           <img src="assets/img/about/ab-2-3.png" alt="">
                        </div>
                        <div class="tp-about-2-sub-img-3 d-none d-lg-block">
                           <img src="assets/img/about/ab-2-4.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-about-2-right-wrap pl-20">
                     <div class="tp-about-2-title-box">
                        <span class="tp-section-subtitle-2"><i class="flaticon-spark"></i>HEY WE ARE SATEX!</span>
                        <h4 class="tp-section-title mb-35">Statex is an Metropolitan <br> Municipality System</h4>
                        <p>We strive to understand what they’re going the what what their price points are, and
                           what’s
                           important to them and their customers. We connect
                           what they’re going the what and their customers. </p>
                     </div>
                     <div class="tp-about-2-tel-wrap">
                        <div class="row">
                           <div class="col-xl-6 col-lg-12 col-md-6 mb-10">
                              <div class="tp-about-tel-box d-flex align-items-center">
                                 <div class="tp-about-tel-icon">
                                    <span><i class="flaticon-bank"></i></span>
                                 </div>
                                 <div class="tp-about-tel-number">
                                    <span>Mayor Office</span>
                                    <a href="tel:(00)122456789">(00) 122 456 789</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-12 col-md-6 mb-10">
                              <div class="tp-about-tel-box d-flex align-items-center">
                                 <div class="tp-about-tel-icon">
                                    <span><i class="flaticon-siren"></i></span>
                                 </div>
                                 <div class="tp-about-tel-number">
                                    <span>Emergency</span>
                                    <a href="tel:811">811 (Police,Ambula..)</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-about-2-text">
                           <p>Great city & places to deveolo your carrer & business</p>
                        </div>
                        <div class="tp-about-2-btn-box d-flex align-items-center">
                           <a class="tp-btn-xl green-anim mr-60" href="#">Discover More</a>
                           <span><img src="assets/img/about/signature.png" alt=""></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about area end -->

      <!-- brand area start -->
      <div class="tp-brand-area pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-brand-title-box mb-60 text-center">
                     <i class="flaticon-spark"></i>
                     <span class="tp-section-subtitle-2">CHECK OUR PARTNER AND SUPPORTES</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-brand-slider-wrapper">
                     <div class="swiper-container tp-brand-slider-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-1.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-2.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-3.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-4.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-5.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-item text-center">
                                 <img src="assets/img/brand/brand-4.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- brand area end -->

      <!-- testimonial area start -->
      <div class="tp-testimonial-2-area grey-bg-2 pt-120 pb-120 p-relative">
         <div class="tp-testimonial-2-shape-1"><img src="assets/img/testimonial/testi-shape-2-1.png" alt=""></div>
         <div class="tp-testimonial-2-shape-2"><img src="assets/img/testimonial/testi-shape-2-2.png" alt=""></div>
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-testimonial-2-title-box mb-50 text-center">
                     <span class="tp-section-subtitle-2"><i class="flaticon-spark"></i>our testimonials</span>
                     <h4 class="tp-section-title">Some Clients Feedback</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-testimonial-2-slider-wrapper">
                     <div class="swiper-container tp-testimonial-2-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-testimonial-2-item z-index p-relative">
                                 <div class="tp-testimonial-2-ratting">
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                 </div>
                                 <div class="tp-testimonial-2-text">
                                    <p>It is a long established fact that a reader will be distracted by the read
                                       content of when looking at its layout. The point of using Lorem Ipsum is that
                                    </p>
                                 </div>
                                 <div class="tp-testimonial-2-avata d-none d-md-block">
                                    <img src="assets/img/avata/avata-2.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-2-avata-info">
                                    <h4 class="tp-testimonial-2-title-sm">Richarlison</h4>
                                    <span>Designer</span>
                                 </div>
                                 <div class="tp-testimonial-2-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-testimonial-2-item z-index p-relative">
                                 <div class="tp-testimonial-2-ratting">
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                 </div>
                                 <div class="tp-testimonial-2-text">
                                    <p>It is a long established fact that a reader will be distracted by the read
                                       content of when looking at its layout. The point of using Lorem Ipsum is that
                                    </p>
                                 </div>
                                 <div class="tp-testimonial-2-avata d-none d-md-block">
                                    <img src="assets/img/avata/avata-3.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-2-avata-info">
                                    <h4 class="tp-testimonial-2-title-sm">Daniel Alvarez</h4>
                                    <span>Designer</span>
                                 </div>
                                 <div class="tp-testimonial-2-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-testimonial-2-item z-index p-relative">
                                 <div class="tp-testimonial-2-ratting">
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                 </div>
                                 <div class="tp-testimonial-2-text">
                                    <p>It is a long established fact that a reader will be distracted by the read
                                       content of when looking at its layout. The point of using Lorem Ipsum is that
                                    </p>
                                 </div>
                                 <div class="tp-testimonial-2-avata d-none d-md-block">
                                    <img src="assets/img/avata/avata-4.png" alt="">
                                 </div>
                                 <div class="tp-testimonial-2-avata-info">
                                    <h4 class="tp-testimonial-2-title-sm">Belal Mahmud</h4>
                                    <span>Designer</span>
                                 </div>
                                 <div class="tp-testimonial-2-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial area end -->

      <!-- funfact area end -->
      <div class="tp-funfact-2-area tp-funfact-2-bg pt-120 pb-90 p-relative" data-background="assets/img/funfact/funfact-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-funfact-2-item z-index text-center">
                     <div class="tp-funfact-2-icon p-relative">
                        <span><i class="flaticon-foundation"></i></span>
                     </div>
                     <div class="tp-funfact-2-content">
                        <h4><em data-purecounter-duration="1" data-purecounter-end="820" class="purecounter">0</em>+</h4>
                        <span>Years of Foundation</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-funfact-2-item z-index text-center">
                     <div class="tp-funfact-2-icon p-relative">
                        <span><i class="flaticon-running-man"></i></span>
                     </div>
                     <div class="tp-funfact-2-content">
                        <h4><em data-purecounter-duration="1" data-purecounter-end="26" class="purecounter">0</em>k</h4>
                        <span>People in the City</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-funfact-2-item z-index text-center">
                     <div class="tp-funfact-2-icon p-relative">
                        <span><i class="flaticon-landscape"></i></span>
                     </div>
                     <div class="tp-funfact-2-content">
                        <h4><em data-purecounter-duration="1" data-purecounter-end="46" class="purecounter">0</em>%</h4>
                        <span>Private Gardens Lands</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                  <div class="tp-funfact-2-item z-index text-center">
                     <div class="tp-funfact-2-icon p-relative">
                        <span><i class="flaticon-windrose"></i></span>
                     </div>
                     <div class="tp-funfact-2-content">
                        <h4><em data-purecounter-duration="1" data-purecounter-end="920" class="purecounter">0</em>+</h4>
                        <span>Successful Rating</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- funfact area end -->

      <!-- team area start -->
      <div class="tp-team-2-area pt-115 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-team-section-title text-center mb-55">
                     <span class="tp-section-subtitle">our team members</span>
                     <h4 class="tp-section-title">Let’s Meet With Our Best <br>City Councl Member</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="tp-team-2-item fix p-relative">
                     <div class="tp-team-2-thumb-box">
                        <img class="w-100" src="assets/img/team/team-details-1.jpg" alt="">
                     </div>
                     <div class="tp-team-2-content text-center">
                        <h4 class="tp-team-2-title"><a href="team-details.html">Rose Gardner</a></h4>
                        <span>Advisor</span>
                        <div class="tp-team-2-social-box">
                           <button><i class="fa-solid fa-share-nodes"></i></button>
                           <div class="tp-team-2-social">
                              <a class="icon-1" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a class="icon-2" href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a class="icon-3" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="tp-team-2-item fix p-relative">
                     <div class="tp-team-2-thumb-box">
                        <img class="w-100" src="assets/img/team/team-details-2.jpg" alt="">
                     </div>
                     <div class="tp-team-2-content text-center">
                        <h4 class="tp-team-2-title"><a href="team-details.html">Tasha Baily</a></h4>
                        <span>Mayor</span>
                        <div class="tp-team-2-social-box">
                           <button><i class="fa-solid fa-share-nodes"></i></button>
                           <div class="tp-team-2-social">
                              <a class="icon-1" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a class="icon-2" href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a class="icon-3" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="tp-team-2-item fix p-relative">
                     <div class="tp-team-2-thumb-box">
                        <img class="w-100" src="assets/img/team/team-details-3.jpg" alt="">
                     </div>
                     <div class="tp-team-2-content text-center">
                        <h4 class="tp-team-2-title"><a href="team-details.html">Dan Hodges</a></h4>
                        <span>Councilor</span>
                        <div class="tp-team-2-social-box">
                           <button><i class="fa-solid fa-share-nodes"></i></button>
                           <div class="tp-team-2-social">
                              <a class="icon-1" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a class="icon-2" href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a class="icon-3" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- team area end -->


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
</body>

</html>