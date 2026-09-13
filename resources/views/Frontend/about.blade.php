
@extends('layouts.frontend')
@section('title', 'About Us - Trusted Used Auto Parts Supplier | Cars Part Shop')
@section('meta_description', 'Learn about Cars Part Shop, your premier source for quality used auto parts, engines, and transmissions. Quality tested components with warranty.')
@section('meta_keywords', 'about car parts shop, used auto parts supplier, OEM car components, quality used engines, tested car parts')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://carspartshop.com/" },
    { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://carspartshop.com/about" }
  ]
}
</script>
@endpush

@section('content')
 <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/about-us-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">About Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Quality Used Auto Parts for Every Vehicle and Every Journey</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><b>Find reliable used automotive parts built to deliver the performance, fit, and dependability your vehicle deserves.</b></p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We offer a wide selection of quality tested used replacement parts, OEM components, and automotive assemblies for cars, trucks, and SUVs. From engines and transmissions to suspension, body, and electrical parts, our pre-owned products are thoroughly inspected to help keep your vehicle running safely and affordably.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Contact Item Start -->
                        <div class="about-us-contact-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-contact-item-image">
                                <figure class="image-anime">
                                    <img src="/frontend/images/author-4.jpg" alt="">
                                </figure>
                            </div>
                            <div class="about-us-contact-item-content">
                                <p>Need Help? Chat With An Expert</p>
                                <h3><a href="tel:+18556134411">+1 (855) 613-4411</a></h3>
                            </div>
                        </div>
                        <!-- About Us Contact Item End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

  

    <!-- Our Process Section Start -->
    <div class="our-process">
        <div class="container">
             <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Process</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">How We Deliver Quality Parts</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Process Item List Start -->
                    <div class="process-item-list">
                        <!-- Process Item Start -->
                        <div class="process-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-process-item-1.svg" alt="">
                            </div>
                            <div class="process-item-content">
                                <h3>Select Your Parts</h3>
                                <p>Browse our collection and find the right auto parts for your vehicle and needs.</p>
                            </div>
                            <div class="process-item-number">
                                <h2>01</h2>
                            </div>
                        </div>
                        <!-- Process Item End -->

                        <!-- Process Item Start -->
                        <div class="process-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-process-item-2.svg" alt="">
                            </div>
                            <div class="process-item-content">
                                <h3>Confirm Compatibility</h3>
                                <p>Verify fitment using product specification and compatibility  before purchasing.</p>
                            </div>
                            <div class="process-item-number">
                                <h2>02</h2>
                            </div>
                        </div>
                        <!-- Process Item End -->

                        <!-- Process Item Start -->
                        <div class="process-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-process-item-3.svg" alt="">
                            </div>
                            <div class="process-item-content">
                                <h3>Secure Checkout</h3>
                                <p>Place your order through our safe and easy checkout with payment options.</p>
                            </div>
                            <div class="process-item-number">
                                <h2>03</h2>
                            </div>
                        </div>
                        <!-- Process Item End -->

                        <!-- Process Item Start -->
                        <div class="process-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-process-item-4.svg" alt="">
                            </div>
                            <div class="process-item-content">
                                <h3>Receive Your Parts</h3>
                                <p>Receive your parts quickly and enjoy ongoing support from our expert needed.</p>
                            </div>
                            <div class="process-item-number">
                                <h2>04</h2>
                            </div>
                        </div>
                        <!-- Process Item End -->
                    </div>
                    <!-- Process Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Process Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Content Box Start -->
                    <div class="intro-video-content-box">
                        <!-- Video Start -->
                        <div class="intro-video-bg-video">
                            <!-- Selfhosted Video Start -->
                            <!-- <video autoplay muted loop id="introvideo"><source src="/frontend/images/intro-bg-video.mp4" type="video/mp4"></video> -->
                            <video autoplay="" muted="" playsinline="" loop="" id="introvideo"><source src="https://demo.awaikenthemes.com/assets/videos/autoas-intro-video.mp4" type="video/mp4"></video>
                            <!-- Selfhosted Video End -->

                            <!-- Youtube Video Start -->
                            <!-- <div id="youtubevideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                            <!-- Youtube Video End -->
                        </div>
                        <!-- Video End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button" data-cursor-text="Play">
                            <a href="https://demo.awaikenthemes.com/assets/videos/autoas-intro-video.mp4" class="popup-video">
                                <span class="bg-effect"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Content Box End -->
                </div>
            </div>                    
        </div>
    </div>
    <!-- Intro Video Section End -->

<!-- CTA Section Start -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <span class="section-sub-title">Need Help With Your Auto Parts?</span>
                <h2>Talk to Our Automotive Support Team</h2>
                <p>
                    Have questions about a part, compatibility, or your order?
                    Our team is ready to help you find the right solution for your vehicle.
                </p>
            </div>

            <div class="hero-body-btn cta-btn">
                <a href="tel:+18556134411" class="btn-default btn-border">
                    +1 (855) 613-4411
                </a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

<style>
    .cta-section {
        width: 100%;
        padding: 70px 0;
        background: #111111;
    }

    .cta-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        padding: 45px 50px;
        background: #074db1;
        border-radius: 12px;
    }

    .cta-text {
        max-width: 750px;
    }

    .cta-text .section-sub-title {
        display: block;
        margin-bottom: 10px;
        color: #ffffff;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .cta-text h2 {
        margin: 0 0 15px;
        color: #ffffff;
        font-size: 42px;
        line-height: 1.2;
    }

    .cta-text p {
        margin: 0;
        color: #ffffff;
        font-size: 17px;
        line-height: 1.7;
    }

    .cta-btn {
        flex-shrink: 0;
    }

    .cta-btn .btn-default {
        white-space: nowrap;
        background: #ffffff;
        color: #111111;
        border-color: #ffffff;
    }

    .cta-btn .btn-default:hover {
        background: #111111;
        color: #ffffff;
        border-color: #111111;
    }

    /* Tablet */
    @media (max-width: 991px) {
        .cta-section {
            padding: 55px 0;
        }

        .cta-content {
            padding: 40px 35px;
            gap: 30px;
        }

        .cta-text h2 {
            font-size: 34px;
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .cta-section {
            padding: 40px 0;
        }

        .cta-content {
            flex-direction: column;
            align-items: flex-start;
            padding: 35px 25px;
            gap: 25px;
        }

        .cta-text h2 {
            font-size: 28px;
        }

        .cta-text p {
            font-size: 15px;
        }

        .cta-btn {
            width: 100%;
        }

        .cta-btn .btn-default {
            width: 100%;
            text-align: center;
            justify-content: center;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .cta-content {
            padding: 30px 20px;
        }

        .cta-text h2 {
            font-size: 24px;
        }

        .cta-text .section-sub-title {
            font-size: 13px;
        }

        .cta-text p {
            font-size: 14px;
        }
    }
</style>


@endsection