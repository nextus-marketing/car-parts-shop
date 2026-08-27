<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!-- Page Title -->
    <title>@yield('title')</title>
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
        /* Floating Call Button */
        .floating-call-button {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: #074db1;
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(7, 77, 177, 0.4);
            transition: all 0.3s ease;
            z-index: 999;
            animation: pulse-ring 2s infinite;
        }

        .floating-call-button:hover {
            background-color: #053a8c;
            box-shadow: 0 6px 20px rgba(7, 77, 177, 0.6);
            transform: scale(1.1);
            text-decoration: none;
            color: white;
        }

        .floating-call-button i {
            font-size: 28px;
        }

        @keyframes pulse-ring {
            0% {
                box-shadow: 0 4px 15px rgba(7, 77, 177, 0.4);
            }
            50% {
                box-shadow: 0 4px 25px rgba(7, 77, 177, 0.6);
            }
            100% {
                box-shadow: 0 4px 15px rgba(7, 77, 177, 0.4);
            }
        }

        /* Special Offer Popup Overlay */
        .special-offer-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        .special-offer-overlay.show {
            display: flex;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Special Offer Popup Card */
        .special-offer-popup {
            background: linear-gradient(135deg, #074db1 0%, #053a8c 100%);
            border-radius: 15px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            position: relative;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.4s ease;
            text-decoration: none;
            color: inherit;
            display: block;
            transition: transform 0.3s ease;
        }

        .special-offer-popup:hover {
            transform: translateY(-5px);
            text-decoration: none;
            color: inherit;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Close Button */
        .popup-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .popup-close-btn:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        /* Popup Icon */
        .popup-icon {
            font-size: 48px;
            color: #ffc107;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Popup Content */
        .popup-content {
            color: white;
        }

        .popup-content h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            color: white;
        }

        .popup-content .discount-badge {
            display: inline-block;
            background-color: #ffc107;
            color: #074db1;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .popup-content p {
            font-size: 16px;
            margin-bottom: 15px;
            line-height: 1.6;
            opacity: 0.95;
        }

        .popup-content .offer-note {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 4px solid #ffc107;
            font-size: 14px;
        }

        .popup-call-button {
            display: inline-block;
            background-color: #ffc107;
            color: #074db1;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            margin-top: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .special-offer-popup:hover .popup-call-button {
            background-color: #ffb300;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .floating-call-button {
                width: 60px;
                height: 60px;
                bottom: 20px;
                right: 20px;
            }

            .floating-call-button i {
                font-size: 24px;
            }

            .special-offer-popup {
                padding: 30px 25px;
                max-width: 90%;
            }

            .special-offer-popup h2 {
                font-size: 24px;
            }

            .popup-content p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- Floating Call Button -->
    <a href="tel:+1(855)613-4411" class="floating-call-button" title="Call Us Now">
        <i class="fa-solid fa-phone"></i>
    </a>

    <!-- Special Offer Popup -->
    <div class="special-offer-overlay" id="specialOfferPopup">
        <a href="tel:+1(855)613-4411" class="special-offer-popup">
            <button type="button" class="popup-close-btn" onclick="closeSpecialOfferPopup(event)">
                <i class="fa-solid fa-times"></i>
            </button>
            
            <div class="popup-content">
                <div class="popup-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                
                <div class="discount-badge">LIMITED TIME OFFER</div>
                
                <h2>Exclusive Deal</h2>
                <h2 style="color: #ffc107; font-size: 36px; margin-bottom: 15px;">50% OFF</h2>
                
                <p>On Selected Auto Parts & Accessories</p>
                
                <div class="offer-note">
                    <i class="fa-solid fa-info-circle"></i> Call us now at <strong>+1-855-613-4411</strong> to claim your exclusive discount!
                </div>
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
                                            href="tel:+18883707485">+1 (888) 370-7485</a></li>
                                            <li><img src="/frontend/images/icon-phone-accent.svg" alt=""><a
                                            href="tel:+18883709806">+1 (888) 370-9806</a></li>
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
            const popupCard = document.querySelector('.special-offer-popup');
            
            // Close only when clicking the overlay background (not the card)
            popup.addEventListener('click', function(event) {
                if (event.target === popup) {
                    // Don't close - user must click X button
                    event.preventDefault();
                }
            });

            // Prevent default behavior when clicking the card
            popupCard.addEventListener('click', function(event) {
                // Allow link behavior only on close button
                if (!event.target.closest('.popup-close-btn')) {
                    // The link will still work due to href, but prevent overlay close
                }
            });

            // Initialize popup on page load
            initSpecialOfferPopup();
        });
    </script>
</body>

</html>