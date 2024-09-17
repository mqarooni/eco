<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<!-- Start of Phone APP sidebar  -->
<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="index.html">
                <img src="{{ asset('uploads/' . $branding->logo01_dark) }}" alt="">
            </a>
        </div>
        <div class="tpoffcanvas__title">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque ab cumque, porro
                maxime
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
<!-- End of Phone APP sidebar  -->

<!-- search popup start -->
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="index.html">
                                <img src="{{ asset('uploads/' . $branding->logo01_dark) }}" alt="" class="img-fluid"
                                    style="max-width: 500px;">
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
                                <input class="search-input-field" type="text"
                                    placeholder="{{ __('messages.type_here_to_search') }}">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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

<header class="tp-header-height">
    <!-- header area start -->
    <div id="header-sticky" class="tp-header-area tp-header-plr">
        <div class="container-fluid">
            <!-- Top Row: Logo and Other Elements -->
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-8 d-flex align-items-center">

                    <div class="tp-header-logo mx-auto my-3">
                        <!-- Added margin for spacing -->
                        <a href="/">
                            <img src="{{ asset('uploads/' . $branding->logo01) }}" alt="Logo" class="custom-logo"
                                style="height: 60px; width: auto;">
                        </a>
                    </div>
                    <div class="tp-header-right-box">
                        <div class="tp-header-right-action d-flex align-items-center justify-content-end">
                            <div class="tp-header-bar d-xl-none text-end">
                                <button class="tp-menu-bar">
                                    <i class="fa-light fa-bars-staggered"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Other Elements like Search, Tel Icon, etc. -->
                <div class="col-xxl-10 col-xl-10 col-lg-6 col-md-6 col-4">
                    <div class="tp-header-right-box">
                        <div class="tp-header-right-action d-flex align-items-center justify-content-end">
                            <!-- Language Toggle button -->
                            @if (App::getLocale() == 'en')
                            <a href="{{ route('lang.switch', 'ar') }}" class="language-btn">AR</a>
                            @else
                            <a href="{{ route('lang.switch', 'en') }}" class="language-btn">EN</a>
                            @endif
                            <!-- Here Will be the elemnt with the logo for example (Dark mood - text resize - language ) -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Row: Navigation Menu -->
        <div class="row align-items-center">
            <div class="col-xxl-12 d-none d-xl-block">
                <div class="tp-header-menu">
                    <nav class="tp-main-menu-content">
                        <ul class="justify-content-between align-items-center">
                            <li><a href="/">{{ __('messages.Home') }}</a></li>
                            <li class="has-dropdown">
                                <a href="/about">{{ __('messages.Who_We_Are') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="/aboutCommittee">{{ __('messages.About_Committee') }}</a></li>
                                    <li><a href="/team">{{ __('messages.Committee') }}</a></li>
                                    <li><a href="/development-goals">{{ __('messages.Sustainable_development_goals') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="service.html">{{ __('messages.Media_Center') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="service.html">{{ __('messages.Radio_interviews') }}</a></li>
                                    <li><a
                                            href="service-details.html">{{ __('messages.Content_from_our_social_media') }}</a>
                                    </li>
                                    <li><a
                                            href="service-details.html">{{ __('messages.Educational_and_awareness_content') }}</a>
                                    </li>
                                    <li><a href="service-details.html">{{ __('messages.TV_interviews') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">{{ __('messages.Governance_standards') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="team.html">{{ __('messages.Justice') }}</a></li>
                                    <li><a href="team-details.html">{{ __('messages.Equality') }}</a></li>
                                    <li><a href="departments.html">{{ __('messages.Transparency') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="blog.html">{{ __('messages.Laws_and_legislation') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="blog.html">{{ __('messages.Executive_regulations') }}</a></li>
                                    <li><a href="blog-standard.html">{{ __('messages.Decisions') }}</a></li>
                                    <li><a href="blog-details.html">{{ __('messages.Laws') }}</a></li>
                                    <li><a href="blog-details.html">{{ __('messages.Agreements') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="blog.html">{{ __('messages.Posts_and_coverage') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="/festivals">{{ __('messages.Festivals') }}</a></li>
                                    <li><a href="/meetings">{{ __('messages.Meetings') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="blog.html">{{ __('messages.Contact_us') }}</a>
                                <ul class="tp-submenu submenu">
                                    <li><a href="blog.html">{{ __('messages.Contact_us') }}</a></li>
                                    <li><a href="blog.html">{{ __('messages.Share_with_us') }}</a></li>
                                </ul>
                            </li>
                            @if(!empty($customPagesInHeader) && $customPagesInHeader->count() > 0)
                            <li class="has-dropdown">
                                <a href="javascript:void(0);">{{ __('messages.more') }}</a>
                                <ul class="tp-submenu submenu">
                                    @foreach($customPagesInHeader as $page)
                                    <li>
                                        <a href="{{ route('custom.page.show', $page->slug) }}">
                                            {{ app()->getLocale() === 'ar' ? $page->page_name_ar : $page->page_name_en }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            
                            <!-- Search button on the right -->
                            <li class="tp-header-right-search">
                                <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->
</header>