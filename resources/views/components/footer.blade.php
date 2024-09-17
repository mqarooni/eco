<footer>
    <!-- footer area start -->
    <div class="tp-footer-area theme-bg-2 pt-110 pb-60 p-relative z-index">
        <div class="tp-footer-shape">
            @if(!empty($footer->footer_shape_image))
            <img src="{{ asset('uploads/' . $footer->footer_shape_image) }}" alt="Footer Shape">
            @endif
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <!-- Logo and content section -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-50 wow tpfadeUp d-flex flex-column align-items-center"
                    data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="tp-footer-widget footer-col-1 text-center">
                        <div class="tp-footer-widget-logo">
                            <a href="/">
                                <img src="{{ asset('uploads/' . $branding->logo01_dark) }}" alt="Logo"
                                    class="custom-logo" style="height: 60px; width: auto;">
                            </a>
                        </div>
                        <!-- custom content -->
                        <div class="tp-footer-widget-content">
                            @if(app()->getLocale() == 'ar')
                            <p class="mb-40">{{ $footer->custom_content_ar }}</p>
                            @else
                            <p class="mb-40">{{ $footer->custom_content_en }}</p>
                            @endif
                        </div>
                    </div>
                </div>

       

                <!-- Social media -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-50 wow tpfadeUp d-flex flex-column align-items-center"
                    data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-footer-widget footer-col-3 text-center">
                        <h4 class="tp-footer-widget-title">{{ __('messages.follow_us') }}</h4>
                        <div class="tp-footer-widget-social">
                            <ul class="social-icons d-flex justify-content-center flex-wrap" style="gap: 10px;">
                                @if(!empty($footer->social_channels))
                                @foreach($footer->social_channels as $url)
                                <li style="list-style: none; flex: 0 0 33%; text-align: center;">
                                    <a href="{{ $url }}" target="_blank"
                                        style="font-size: 30px; display: inline-block;">
                                        @if (strpos($url, 'instagram') !== false)
                                        <i class="fa-brands fa-instagram"></i>
                                        @elseif (strpos($url, 'twitter') !== false)
                                        <i class="fa-brands fa-twitter"></i>
                                        @elseif (strpos($url, 'facebook') !== false)
                                        <i class="fa-brands fa-facebook"></i>
                                        @elseif (strpos($url, 'youtube') !== false)
                                        <i class="fa-brands fa-youtube"></i>
                                        @elseif (strpos($url, 'whatsapp') !== false)
                                        <i class="fa-brands fa-whatsapp"></i>
                                        @elseif (strpos($url, 'mailto:') !== false)
                                        <i class="fa-solid fa-envelope"></i>
                                        @elseif (strpos($url, 'linkedin') !== false)
                                        <i class="fa-brands fa-linkedin"></i>
                                        @elseif (strpos($url, 'tiktok') !== false)
                                        <i class="fa-brands fa-tiktok"></i>
                                        @elseif (strpos($url, 'snapchat') !== false)
                                        <i class="fa-brands fa-snapchat"></i>
                                        @elseif (strpos($url, 'pinterest') !== false)
                                        <i class="fa-brands fa-pinterest"></i>
                                        @else
                                        <i class="fa-brands fa-globe"></i>
                                        @endif
                                    </a>
                                </li>
                                @endforeach
                                @else
                                <li>No social channels available</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer general logos -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-50 wow tpfadeUp d-flex flex-column align-items-center"
                    data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="tp-footer-widget footer-col-4 text-center">
                        <h4 class="tp-footer-widget-title">
                            @if(App::getLocale() === 'en')
                            {{ $footer->custom_title_en }}
                            @else
                            {{ $footer->custom_title_ar }}
                            @endif
                        </h4>
                        <div class="tp-footer-widget-logos">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                @if(!empty($footer->general_logos) && is_array($footer->general_logos))
                                @foreach($footer->general_logos as $logo)
                                <div class="p-2">
                                    <img src="{{ asset('uploads/' . $logo) }}" alt="Partner Logo"
                                        style="width: 100px; height: auto;">
                                </div>
                                @endforeach
                                @else
                                <p>No logos available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- copy-right area start -->
    <div class="tp-copyright-area tp-copyright-space green-bg pt-25 pb-25">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <!-- Left side: Copyright -->
                <div class="col-auto">
                    <div class="tp-copyright-left-text">
                        @if(App::getLocale() === 'en')
                        <p class="mb-0 ms-3">{!! $footer->copyrights_en !!}</p>
                        @else
                        <p class="mb-0 ms-3">{!! $footer->copyrights_ar !!}</p>
                        @endif
                    </div>
                </div>

                <!-- Right side: Custom Pages -->
                @if(!empty($customPagesInFooter))
                <div class="col-auto">
                    <ul class="list-inline mb-0 me-3 text-end">
                        @foreach($customPagesInFooter as $index => $page)
                        @if($page->show_in_footer)
                        <li class="list-inline-item">
                            <a href="{{ route('custom.page.show', $page->slug) }}" class="fw-bold text-light">
                                {{ app()->getLocale() === 'ar' ? $page->page_name_ar : $page->page_name_en }}
                            </a>
                        </li>
                        @if(!$loop->last)
                        <li class="list-inline-item">|</li>
                        @endif
                        @endif
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- copy-right area end -->

</footer>