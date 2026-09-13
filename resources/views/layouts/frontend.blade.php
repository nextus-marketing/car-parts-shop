<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="robots" content="@yield('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')" />
    <meta name="google-site-verification" content="0mAr5Enre3Ti2o3LGK8HuVK-Z1iuIV20sO6AuWj7IP0" />

    <!-- Primary SEO Meta Tags -->
    <title>@yield('title', 'Used Car Parts Shop | Classic to Modern Brands - Cars Part Shop')</title>
    <meta name="description" content="@yield('meta_description', 'We are the leading used car parts shop. Get genuine car body parts with our same day shipping service. Call Now: +1 (855) 613-4411 for best deals!')" />
    <meta name="keywords" content="@yield('meta_keywords', 'used car parts, auto parts shop, OEM car parts, used engine, used transmission, car body parts, recycled auto parts, OEM replacement parts, Cars Part Shop')" />
    <link rel="canonical" href="@yield('canonical', url()->current())" />

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:title" content="@yield('og_title', View::yieldContent('title', 'Used Car Parts Shop | Classic to Modern Brands - Cars Part Shop'))" />
    <meta property="og:description" content="@yield('og_description', View::yieldContent('meta_description', 'We are the leading used car parts shop. Get genuine car body parts with our same day shipping service. Call Now: +1 (855) 613-4411 for best deals!'))" />
    <meta property="og:url" content="@yield('canonical', url()->current())" />
    <meta property="og:site_name" content="Cars Part Shop" />
    <meta property="og:image" content="@yield('og_image', asset('frontend/images/my-img/logo/logo.jpg'))" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@CarspartShop" />
    <meta name="twitter:title" content="@yield('og_title', View::yieldContent('title', 'Used Car Parts Shop | Classic to Modern Brands - Cars Part Shop'))" />
    <meta name="twitter:description" content="@yield('og_description', View::yieldContent('meta_description', 'We are the leading used car parts shop. Get genuine car body parts with our same day shipping service. Call Now: +1 (855) 613-4411 for best deals!'))" />
    <meta name="twitter:image" content="@yield('og_image', asset('frontend/images/my-img/logo/logo.jpg'))" />

    @stack('meta')
    @stack('schema')
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/images/my-img/logo/favicon.jpg">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
        rel="stylesheet">
    <!-- Custom Fonts Css-->
    <link href="/frontend/css/fonts.css" rel="stylesheet" media="screen">
    <!-- Bootstrap Css -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/frontend/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animated Css -->
    <link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/frontend/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="/frontend/css/custom.css" rel="stylesheet" media="screen">

    <!-- My Css File -->
    <link href="/frontend/css/my.css" rel="stylesheet" media="screen">

    <style>
        /* Floating Call Button (unique class to avoid theme CSS conflicts) */
        .cps-floating-call-btn {
            position: fixed !important;
            bottom: 30px !important;
            left: 30px !important;
            width: auto !important;
            height: 62px !important;
            background: linear-gradient(135deg, #2f6bf0 0%, #1a4fc4 100%) !important;
            color: #ffffff !important;
            padding: 0 22px 0 0 !important;
            border-radius: 50px !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 12px !important;
            text-decoration: none !important;
            box-shadow: 0 6px 20px rgba(26, 79, 196, 0.45) !important;
            transition: all 0.3s ease !important;
            z-index: 999 !important;
            animation: cps-pulse-ring 2s infinite !important;
        }

        .cps-floating-call-btn .cps-call-icon-circle {
            flex-shrink: 0;
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.18);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cps-floating-call-btn .cps-call-icon-circle i {
            font-size: 22px;
            color: #ffffff !important;
        }

        .cps-floating-call-btn .cps-call-number-text {
            display: inline-block !important;
            font-size: 17px;
            font-weight: 700;
            white-space: nowrap;
            letter-spacing: 0.01em;
            color: #ffffff !important;
        }

        .cps-floating-call-btn:hover {
            box-shadow: 0 8px 26px rgba(26, 79, 196, 0.6) !important;
            transform: scale(1.05);
            text-decoration: none !important;
            color: #ffffff !important;
        }

        @keyframes cps-pulse-ring {
            0% {
                box-shadow: 0 6px 20px rgba(26, 79, 196, 0.45);
            }
            50% {
                box-shadow: 0 6px 28px rgba(26, 79, 196, 0.65);
            }
            100% {
                box-shadow: 0 6px 20px rgba(26, 79, 196, 0.45);
            }
        }

        /* Floating Call Button — Responsive */
        @media (max-width: 480px) {
            .cps-floating-call-btn {
                height: 52px !important;
                bottom: 18px !important;
                left: 18px !important;
                padding-right: 16px !important;
                gap: 10px !important;
            }

            .cps-floating-call-btn .cps-call-icon-circle {
                width: 52px;
                height: 52px;
            }

            .cps-floating-call-btn .cps-call-icon-circle i {
                font-size: 18px;
            }

            .cps-floating-call-btn .cps-call-number-text {
                font-size: 14px;
            }
        }

        @media (max-width: 360px) {
            .cps-floating-call-btn .cps-call-number-text {
                display: none !important; /* icon-only on very small screens */
            }

            .cps-floating-call-btn {
                padding-right: 0 !important;
                width: 52px !important;
                justify-content: center !important;
            }
        }

        /* ============================================
           Special Offer Popup — clean, modern, responsive
           ============================================ */
        .special-offer-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(10, 15, 25, 0.55);
            backdrop-filter: blur(3px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .special-offer-overlay.show {
            display: flex;
            opacity: 1;
        }

        /* Card */
        .special-offer-popup {
            position: relative;
            display: block;
            width: 100%;
            max-width: 560px;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 25px 60px rgba(7, 25, 60, 0.28);
            transform: translateY(16px) scale(0.98);
            opacity: 0;
            animation: offerPopIn 0.35s ease forwards;
        }

        .special-offer-popup:hover {
            text-decoration: none;
            color: inherit;
        }

        @keyframes offerPopIn {
            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        /* Top accent header */
        .special-offer-popup .offer-header {
            background: linear-gradient(135deg, #074db1 0%, #063f92 100%);
            padding: 34px 44px 30px;
            text-align: center;
            position: relative;
        }

        .special-offer-popup .offer-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.03em;
            color: #063f92;
            background: #ffc107;
            padding: 7px 16px;
            border-radius: 100px;
            margin-bottom: 16px;
        }

        .special-offer-popup .offer-header h2 {
            color: #ffffff;
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            line-height: 1.3;
        }

        .special-offer-popup .offer-header h2 .discount-amount {
            color: #ffc107;
        }

        /* Body */
        .special-offer-popup .offer-body {
            padding: 30px 44px 34px;
            text-align: center;
        }

        .special-offer-popup .offer-body > p {
            font-size: 15px;
            color: #4b5563;
            line-height: 1.65;
            margin: 0 0 24px;
        }

        /* Feature list */
        .special-offer-popup .offer-features {
            list-style: none;
            margin: 0 0 28px;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
            text-align: left;
        }

        .special-offer-popup .offer-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14.5px;
            font-weight: 500;
            color: #1f2937;
        }

        .special-offer-popup .offer-features li .feature-icon {
            flex-shrink: 0;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #e8f1fd;
            color: #074db1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }

        /* Countdown */
        .special-offer-popup .offer-countdown {
            background: #f6f8fb;
            border: 1px solid #e7ebf1;
            border-radius: 12px;
            padding: 16px 18px;
            margin-bottom: 26px;
        }

        .special-offer-popup .offer-countdown .countdown-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.03em;
            color: #6b7280;
            margin-bottom: 10px;
        }

        .special-offer-popup .countdown-timer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .special-offer-popup .countdown-unit {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 56px;
            background: #0b1220;
            border-radius: 8px;
            padding: 8px 6px 6px;
        }

        .special-offer-popup .countdown-unit .countdown-value {
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .special-offer-popup .countdown-unit .countdown-caption {
            font-size: 9.5px;
            font-weight: 600;
            letter-spacing: 0.04em;
            color: #9ca9c2;
            margin-top: 4px;
        }

        .special-offer-popup .countdown-sep {
            font-size: 20px;
            font-weight: 700;
            color: #0b1220;
            padding-bottom: 12px;
        }

        .special-offer-popup .offer-call-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #074db1;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            padding: 15px 24px;
            border-radius: 10px;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .special-offer-popup .offer-call-btn i {
            font-size: 15px;
        }

        .special-offer-popup:hover .offer-call-btn {
            background: #053a8c;
            transform: translateY(-1px);
        }

        .special-offer-popup .offer-note {
            margin-top: 14px;
            font-size: 12.5px;
            color: #9ca3af;
        }

        /* Close button */
        .popup-close-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.2s ease, transform 0.2s ease;
            z-index: 1001;
        }

        .popup-close-btn:hover {
            background-color: rgba(255, 255, 255, 0.32);
            transform: scale(1.08);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .special-offer-popup {
                max-width: 420px;
            }

            .special-offer-popup .offer-header {
                padding: 28px 26px 24px;
            }

            .special-offer-popup .offer-header h2 {
                font-size: 21px;
            }

            .special-offer-popup .offer-body {
                padding: 26px 24px 28px;
            }

            .special-offer-popup .countdown-unit {
                min-width: 46px;
                padding: 7px 4px 5px;
            }

            .special-offer-popup .countdown-unit .countdown-value {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .special-offer-popup {
                max-width: 100%;
                border-radius: 14px;
            }

            .special-offer-popup .offer-header {
                padding: 24px 20px 20px;
            }

            .special-offer-popup .offer-header h2 {
                font-size: 19px;
            }

            .special-offer-popup .offer-body {
                padding: 22px 20px 24px;
            }

            .special-offer-popup .offer-body > p {
                font-size: 13.5px;
            }

            .special-offer-popup .offer-features li {
                font-size: 13.5px;
            }

            .special-offer-popup .countdown-unit {
                min-width: 40px;
            }

            .special-offer-popup .countdown-unit .countdown-value {
                font-size: 16px;
            }

            .special-offer-popup .countdown-sep {
                font-size: 16px;
                padding-bottom: 10px;
            }

            .special-offer-popup .offer-call-btn {
                font-size: 14px;
                padding: 13px 18px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .special-offer-popup {
                animation: none;
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- Floating Call Button -->
    <a href="tel:+1(855)613-4411" class="cps-floating-call-btn" title="Call Us Now">
        <span class="cps-call-icon-circle">
            <i class="fa-solid fa-phone"></i>
        </span>
        <span class="cps-call-number-text">+1 (855) 613-4411</span>
    </a>

    <!-- Special Offer Popup -->
    <div class="special-offer-overlay" id="specialOfferPopup">
        <a href="tel:+18556134411" class="special-offer-popup">
            <button type="button" class="popup-close-btn" onclick="closeSpecialOfferPopup(event)" aria-label="Close">
                <i class="fa-solid fa-times"></i>
            </button>

            <div class="offer-header">
                <span class="offer-tag"><i class="fa-solid fa-bolt"></i> Exclusive Deal Alert</span>
                <h2>Unlock Up To <span class="discount-amount">35% OFF</span> Auto Parts!</h2>
            </div>

            <div class="offer-body">
                <p>Speak directly with our certified auto parts specialists right now to claim your exclusive discount and check live inventory.</p>

                <ul class="offer-features">
                    <li><span class="feature-icon"><i class="fa-solid fa-check"></i></span> Genuine OEM &amp; Aftermarket Parts</li>
                    <li><span class="feature-icon"><i class="fa-solid fa-check"></i></span> Express Nationwide Delivery</li>
                    <li><span class="feature-icon"><i class="fa-solid fa-check"></i></span> Guaranteed Exact Vehicle Fitment</li>
                </ul>

                <div class="offer-countdown">
                    <span class="countdown-label">Offer Expires In:</span>
                    <div class="countdown-timer" id="offerCountdown">
                        <div class="countdown-unit">
                            <span class="countdown-value" id="countdownHours">01</span>
                            <span class="countdown-caption">Hours</span>
                        </div>
                        <span class="countdown-sep">:</span>
                        <div class="countdown-unit">
                            <span class="countdown-value" id="countdownMinutes">45</span>
                            <span class="countdown-caption">Min</span>
                        </div>
                        <span class="countdown-sep">:</span>
                        <div class="countdown-unit">
                            <span class="countdown-value" id="countdownSeconds">05</span>
                            <span class="countdown-caption">Sec</span>
                        </div>
                    </div>
                </div>

                <span class="offer-call-btn">
                    <i class="fa-solid fa-phone"></i> Call +1 (855) 613-4411
                </span>

                <p class="offer-note">Tap anywhere on this card to call us directly</p>
            </div>
        </a>
    </div>

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <!-- Header Action Box Start -->
                <div class="header-action-box">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="/">
                        <img src="/frontend/images/my-img/logo/carspartshop-logo.png" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Header Search Form Box Start -->
                    <div class="header-search-form-box">
                        <div class="header-call-box">
                            <div class="header-call-content">
                                <span class="call-small-text">Get Exciting Deals on</span>
                                <h4>Second Hand Auto Parts</h4>
                                <a href="tel:+18556134411" class="call-now-btn">
                                    <i class="fa-solid fa-phone"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Search Form Box End -->

                    <div class="header-search-form-box">
                        <a href="tel:+18556134411" class="mobile-call-btn">
                            <i class="fa-solid fa-phone"></i>
                            <span>+1 (855) 613-4411</span>
                        </a>
                    </div>

                </div>
                <!-- Header Action Box End -->

                <!-- Main Menu Start -->
                <div class="main-menu">
                    <div class="collapse navbar-collapse">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                                <li class="nav-item mega-menu submenu position-static">
                                    <a class="nav-link" href="#0">Shop</a>
                                    <!-- Dropdown Menu Start -->
                                    <ul class="dropdown-menu">
                                        <!-- Mega Menu Box Start -->
                                        <li class="mega-menu-box">
                                            <div class="mega-menu-links-box">
                                                <!-- Mega Menu Link Start -->
                                                <div class="mega-menu-link">
                                                    <h2>Auto Parts Selection</h2>
                                                    <ul>
                                                        <li><a href="/engine-parts">Engine Parts</a></li>
                                                        <li><a href="/transmission-parts">Transmission Parts</a></li>
                                                        <li><a href="/suspension-parts">Suspension Parts</a></li>
                                                       
                                                    </ul>
                                                </div>
                                                <!-- Mega Menu Link End -->

                                                <!-- Mega Menu Link Start -->
                                                <div class="mega-menu-link">
                                                    <h2>Auto Parts Selection</h2>
                                                    <ul>
                                                        <li><a href="/electrical-parts">Electrical Parts</a></li>
                                                        <li><a href="/exterior-parts">Exterior Parts</a></li>
                                                        <li><a href="/interior-parts">Interior Parts</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Mega Menu Link End -->
                                            </div>

                                            <!-- Mega Menu Items List Start -->
                                            <div class="mega-menu-items-list">
                                                <!-- Mega Menu Item Start -->
                                                <div class="mega-menu-item">
                                                    <!-- Mega Menu Item Image Start -->
                                                    <div class="mega-menu-item-image">
                                                        <a href="/engine-parts">
                                                            <figure class="image-anime">
                                                                <img src="/frontend/images/my-img/engine-menu.avif"
                                                                    alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <!-- Mega Menu Item Image End -->

                                                    <!-- Mega Menu Item Content Start -->
                                                    <div class="mega-menu-item-content">
                                                        <h2><a href="/engine-parts">Engine Parts</a></h2>
                                                        <p>Premium components for reliable engine performance and smooth vehicle operation.</p>
                                                    </div>
                                                    <!-- Mega Menu Item Content End -->
                                                </div>
                                                <!-- Mega Menu Item End -->

                                                <!-- Mega Menu Item Start -->
                                                <div class="mega-menu-item">
                                                    <!-- Mega Menu Item Image Start -->
                                                    <div class="mega-menu-item-image">
                                                        <a href="/transmission-parts">
                                                            <figure class="image-anime">
                                                                <img src="/frontend/images/my-img/transmission-menu.webp"
                                                                    alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <!-- Mega Menu Item Image End -->

                                                    <!-- Mega Menu Item Content Start -->
                                                    <div class="mega-menu-item-content">
                                                        <h2><a href="/transmission-parts">Transmission Parts</a></h2>
                                                        <p>Quality components for smooth gear shifting, reliable performance, and enhanced driving comfort.</p>
                                                    </div>
                                                    <!-- Mega Menu Item Content End -->
                                                </div>
                                                <!-- Mega Menu Item End -->

                                                <!-- Mega Menu Item Start -->
                                                <div class="mega-menu-item big-offer-box">
                                                    <!-- Mega Menu Item Image Start -->
                                                    <div class="mega-menu-item-image">
                                                        <figure>
                                                            <img src="/frontend/images/mega-menu-item-image-3.jpg"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <!-- Mega Menu Item Image End -->

                                                    <!-- Mega Menu Item Content Start -->
                                                    <div class="mega-menu-item-content">
                                                        <span>-special offer-</span>
                                                        <h2>Big Sale</h2>
                                                        <h3>35% Off</h3>
                                                         <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                                                    </div>
                                                    <!-- Mega Menu Item Content End -->
                                                </div>
                                                <!-- Mega Menu Item End -->
                                            </div>
                                            <!-- Mega Menu Items List End -->
                                        </li>
                                        <!-- Mega Menu Box End -->
                                    </ul>
                                    <!-- Dropdown Menu End -->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Info Box Start -->
                        <div class="header-info-box">
                            <!-- Header Contact Info Start -->
                            <div class="header-contact-info">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone-primary.svg" alt="">
                                </div>
                                <div class="header-contact-info-content">
                                    <p>Get Support</p>
                                    <span><a href="tel:+18556134411">+1 (855) 613-4411</a></span>
                                </div>
                            </div>
                            <!-- Header Contact Info End -->
                        </div>
                        <!-- Header Info Box End -->
                    </div>
                    <div class="navbar-toggle"></div>
                </div>
                <!-- Main Menu End -->
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Main Footer Start -->
   <footer class="main-footer dark-section" style="background-color: #ffffff !important;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="/frontend/images/my-img/logo/carspartshop-logo.png" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>We provide high-quality auto parts and accessories for all types of vehicles. Our mission
                                is to deliver reliable products, competitive prices,</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Links Start  -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://in.pinterest.com/carspartshop/" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="https://twitter.com/CarspartShop" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/people/Cars-Part-Shop/100086937047143/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/carspartshop/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Links End  -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-xl-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                                <li><a href="/terms-of-conditions">Terms of Conditions</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Find By Parts</h2>
                            <ul>
                                <li><a href="/engine-parts">Engine Parts</a></li>
                                <li><a href="/transmission-parts">Transmission Parts</a></li>
                                <li><a href="/suspension-parts">Suspension Parts</a></li>
                                <li><a href="/electrical-parts">Electrical Parts</a></li>
                                <li><a href="/exterior-parts">Exterior Parts</a></li>
                                <li><a href="/interior-parts">Interior Parts</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links footer-newsletter-box">
                            <h2>Contact Us</h2>

                            <!-- Footer Newsletter Form Start -->
                            <div class="footer-newsletter-form">
                                <ul>
                                    <li><img src="/frontend/images/icon-mail-accent.svg" alt=""><a
                                            href="mailto:support@carspartshop.com">support@carspartshop.com</a></li>
                                            <li><img src="/frontend/images/icon-mail-accent.svg" alt=""><a
                                            href="mailto:sales@carspartshop.com">sales@carspartshop.com</a></li>
                                    <li><img src="/frontend/images/icon-phone-accent.svg" alt=""><a
                                            href="tel:+18556134411">+1 (855) 613-4411</a></li>
                                            <li><img src="/frontend/images/icon-phone-accent.svg" alt=""><a
                                            href="tel:+18556134411">+1 (855) 613-4411</a></li>
                                            <li><img src="/frontend/images/icon-phone-accent.svg" alt=""><a
                                            href="tel:+18556134411">+1 (855) 613-4411</a></li>
                                </ul>
                            </div>
                            <!-- Footer Newsletter Form End -->

                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © 2026 carspartshop |  All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.min.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>

    <script>
        // Offer Countdown Timer — restarts fresh on every page load/refresh
        function initOfferCountdown() {
            const totalStartSeconds = (1 * 60 * 60) + (45 * 60) + 5; // 01:45:05
            let remaining = totalStartSeconds;

            const hoursEl = document.getElementById('countdownHours');
            const minutesEl = document.getElementById('countdownMinutes');
            const secondsEl = document.getElementById('countdownSeconds');

            if (!hoursEl || !minutesEl || !secondsEl) return;

            function pad(num) {
                return String(num).padStart(2, '0');
            }

            function render() {
                const h = Math.floor(remaining / 3600);
                const m = Math.floor((remaining % 3600) / 60);
                const s = remaining % 60;
                hoursEl.textContent = pad(h);
                minutesEl.textContent = pad(m);
                secondsEl.textContent = pad(s);
            }

            render();

            const timerInterval = setInterval(() => {
                remaining -= 1;
                if (remaining <= 0) {
                    remaining = totalStartSeconds; // loop the offer countdown
                }
                render();
            }, 1000);
        }

        // Initialize Special Offer Popup
        function initSpecialOfferPopup() {
            const popupKey = 'specialOfferPopupShown_' + new Date().toDateString();

            // Check if popup was already shown today
            if (!localStorage.getItem(popupKey)) {
                // Show popup after 2 seconds
                setTimeout(() => {
                    document.getElementById('specialOfferPopup').classList.add('show');
                }, 2000);

                // Mark as shown for today
                localStorage.setItem(popupKey, 'true');
            }
        }

        // Close Special Offer Popup (Only with X button)
        function closeSpecialOfferPopup(event) {
            event.preventDefault();
            event.stopPropagation();
            document.getElementById('specialOfferPopup').classList.remove('show');
        }

        // Prevent closing when clicking on the popup card itself
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('specialOfferPopup');

            // Close only when clicking the overlay background (not the card)
            popup.addEventListener('click', function(event) {
                if (event.target === popup) {
                    // Don't close - user must click X button
                    event.preventDefault();
                }
            });

            // Initialize popup on page load
            initSpecialOfferPopup();

            // Start the countdown timer (resets fresh on every refresh)
            initOfferCountdown();
        });
    </script>
</body>

</html>