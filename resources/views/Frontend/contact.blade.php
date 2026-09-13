@extends('layouts.frontend')

@section('title', 'Contact Us - Cars Part Shop | Call +1 (855) 613-4411')
@section('meta_description', 'Contact Cars Part Shop for expert help finding used car parts, engines, transmissions, and accessories. Call +1 (855) 613-4411 for immediate assistance and quote.')
@section('meta_keywords', 'contact car parts shop, auto parts phone number, order used car parts, car part inquiry, Cars Part Shop contact')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Cars Part Shop",
  "description": "Contact info for Cars Part Shop customer support and quote team.",
  "url": "https://carspartshop.com/contact",
  "mainEntity": {
    "@type": "Organization",
    "name": "Cars Part Shop",
    "telephone": "+1 (855) 613-4411",
    "url": "https://carspartshop.com/"
  }
}
</script>
@endpush

@section('content')

<!-- Page Header Start -->
<div class="page-header dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">
                        Contact Us
                    </h1>

                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact Us
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row align-items-center">

            <!-- Contact Content Start -->
            <div class="col-xl-6">
                <div class="contact-now-content">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">
                            We're Here to Help
                        </span>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Get the Auto Parts Support You Need
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Have questions about a part, vehicle compatibility, or your
                            order? Our support team is ready to help you find the right
                            solution and make your auto parts shopping experience simple.
                        </p>
                    </div>
                    <!-- Section Title End -->


                    <!-- Contact Now Info Box Start -->
                    <div class="contact-now-info-box">

                        <div class="contact-now-info-item-list wow fadeInUp"
                            data-wow-delay="0.4s">

                            <!-- Email Item Start -->
                            <div class="contact-now-info-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-mail-primary.svg"
                                        alt="Email Support">
                                </div>

                                <div class="contact-now-info-item-content">
                                    <h3>Email Address</h3>

                                    <p>
                                        <a href="mailto:support@carspartshop.com">
                                            support@carspartshop.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- Email Item End -->


                            <!-- Phone Item Start -->
                            <div class="contact-now-info-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone-primary.svg"
                                        alt="Phone Support">
                                </div>

                                <div class="contact-now-info-item-content">
                                    <h3>Phone Number</h3>

                                    <p>
                                        <a href="tel:+18556134411">
                                            +1 (855) 613-4411
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- Phone Item End -->


                            <!-- Location Item Start -->
                            <div class="contact-now-info-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-location-primary.svg"
                                        alt="Store Location">
                                </div>

                                <div class="contact-now-info-item-content">
                                    <h3>Our Location</h3>

                                    <p>
                                        <a href="https://maps.app.goo.gl/Je4tzVRXAcZ6Cxvh7"
                                            target="_blank" rel="noopener noreferrer">
                                            7340 Lee Hwy, Falls Church,<br>
                                            VA, 22046
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- Location Item End -->

                        </div>

                    </div>
                    <!-- Contact Now Info Box End -->

                </div>
            </div>
            <!-- Contact Content End -->


            <!-- Contact Support Card Start -->
            <div class="col-xl-6">
                <div class="contact-support-card wow fadeInUp"
                    data-wow-delay="0.2s">

                    <!-- Support Card Header Start -->
                    <div class="support-card-header">

                        <div class="support-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <div>
                            <span>Need Assistance?</span>

                            <h3>
                                Talk to Our Auto Parts Experts
                            </h3>
                        </div>

                    </div>
                    <!-- Support Card Header End -->


                    <p class="support-card-text">
                        Need help choosing the right part? Give us a call or
                        send us an email. Our team is here to assist you with
                        product information, compatibility, orders, and more.
                    </p>


                    <!-- Phone Contact Box Start -->
                    <div class="support-contact-box">

                        <div class="support-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="support-contact-content">
                            <span>Call Us Today</span>

                            <a href="tel:+18556134411">
                                +1 (855) 613-4411
                            </a>

                            <p>
                                Speak with our automotive support team.
                            </p>
                        </div>

                    </div>
                    <!-- Phone Contact Box End -->


                    <!-- Email Contact Box Start -->
                    <div class="support-contact-box">

                        <div class="support-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="support-contact-content">
                            <span>Email Support</span>

                            <a href="mailto:support@carspartshop.com">
                                support@carspartshop.com
                            </a>

                            <p>
                                Send us your questions and we'll assist you.
                            </p>
                        </div>

                    </div>
                    <!-- Email Contact Box End -->


                    <!-- Location Contact Box Start -->
                    <div class="support-contact-box">

                        <div class="support-contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="support-contact-content">
                            <span>Visit Our Store</span>

                            <a href="https://maps.app.goo.gl/Je4tzVRXAcZ6Cxvh7"
                                target="_blank" rel="noopener noreferrer">
                                7340 Lee Hwy, Falls Church, VA, 22046
                            </a>

                            <p>
                                Come see our parts inventory in person.
                            </p>
                        </div>

                    </div>
                    <!-- Location Contact Box End -->


                    <!-- Call To Action Start -->
                    <div class="support-card-btn">

                        <a href="tel:+18556134411"
                            class="btn-default">

                            <i class="fa-solid fa-phone"></i>

                            Call +1 (855) 613-4411

                        </a>

                    </div>
                    <!-- Call To Action End -->

                </div>
            </div>
            <!-- Contact Support Card End -->

        </div>
    </div>
</div>
<!-- Page Contact Us End -->


<!-- Google Map Start -->
<div class="google-map">
    <div class="container">

        <div class="row section-row">
            <div class="col-lg-12">

                <!-- Section Title Start -->
                <div class="section-title section-title-center">

                    <span class="section-sub-title wow fadeInUp">
                        How to Reach Us?
                    </span>

                    <h2 class="text-anime-style-3"
                        data-cursor="-opaque">
                        Find Our Auto Parts Store Location
                    </h2>

                </div>
                <!-- Section Title End -->

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">

                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe-box rounded-4 overflow-hidden mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.9977415102744!2d-77.1961429!3d38.8782935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64b4b6728993d%3A0x84046135090b6a29!2s7340%20Lee%20Hwy%2C%20Falls%20Church%2C%20VA%2022046%2C%20USA!5e0!3m2!1sen!2sin!4v1789334835318!5m2!1sen!2sin"
                        width="600"
                        height="450"
                        style="border:0; width: 100%;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                </div>
                <!-- Google Map Iframe End -->

                <!-- Contact Call Banner Start -->
                <div class="contact-support-banner text-center py-5 px-4 my-4 rounded-4" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: #fff;">
                    <h3 class="mb-3 text-white fw-bold">Need Immediate Auto Parts Assistance?</h3>
                    <p class="mb-4 text-white-50">Speak directly with our expert auto parts specialists for instant fitment verification and price quotes.</p>
                    <a href="tel:+18556134411" class="btn btn-light btn-lg rounded-pill px-4 fw-bold text-primary shadow">
                        <i class="fa-solid fa-phone me-2"></i> Call +1 (855) 613-4411
                    </a>
                </div>
                <!-- Contact Call Banner End -->

            </div>
        </div>

    </div>
</div>
<!-- Google Map End -->


<!-- Contact Support Card CSS Start -->
<style>

    /* =========================================
       CONTACT SUPPORT CARD
    ========================================= */

    .contact-support-card {
        position: relative;
        height: 100%;
        padding: 45px;
        background: #f5f5f5;
        border-radius: 15px;
        overflow: hidden;
    }


    .contact-support-card::before {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        top: -80px;
        right: -70px;
        background: #074db1;
        opacity: 0.08;
        border-radius: 50%;
        pointer-events: none;
    }


    /* Header */

    .support-card-header {
        position: relative;
        display: flex;
        align-items: center;
        gap: 18px;
        margin-bottom: 20px;
    }


    .support-icon {
        width: 65px;
        height: 65px;
        min-width: 65px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #074db1;
        color: #ffffff;

        border-radius: 50%;

        font-size: 26px;
    }


    .support-card-header span {
        display: block;
        margin-bottom: 5px;

        color: #074db1;

        font-size: 14px;
        font-weight: 600;

        text-transform: uppercase;
        letter-spacing: 1px;
    }


    .support-card-header h3 {
        margin: 0;

        color: #111111;

        font-size: 28px;
        line-height: 1.2;
    }


    /* Description */

    .support-card-text {
        position: relative;

        margin: 0 0 30px;

        color: #666666;

        font-size: 16px;
        line-height: 1.7;
    }


    /* Contact Boxes */

    .support-contact-box {
        position: relative;

        display: flex;
        align-items: center;

        gap: 18px;

        padding: 20px;
        margin-bottom: 15px;

        background: #ffffff;

        border: 1px solid #e8e8e8;

        border-radius: 10px;

        transition: all 0.3s ease;
    }


    .support-contact-box:hover {
        border-color: #074db1;

        transform: translateY(-3px);

        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    }


    .support-contact-icon {
        width: 48px;
        height: 48px;
        min-width: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

       background: rgb(26 115 232 / 16%);

        color: #074db1;

        border-radius: 8px;

        font-size: 18px;
    }


    .support-contact-content {
        min-width: 0;
    }


    .support-contact-content span {
        display: block;

        margin-bottom: 3px;

        color: #777777;

        font-size: 13px;
        font-weight: 500;
    }


    .support-contact-content a {
        display: inline-block;

        color: #111111;

        font-size: 20px;
        font-weight: 700;

        text-decoration: none;

        transition: color 0.3s ease;

        word-break: break-word;
    }


    .support-contact-content a:hover {
        color: #074db1;
    }


    .support-contact-content p {
        margin: 3px 0 0;

        color: #888888;

        font-size: 13px;
    }


    /* CTA Button */

    .support-card-btn {
        position: relative;

        margin-top: 25px;
    }


    .support-card-btn .btn-default {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        width: 100%;

        text-align: center;
    }


    /* Google Map Iframe */

    .google-map-iframe-box iframe {
        display: block;
        width: 100%;
        min-height: 450px;
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 1199px) {

        .contact-support-card {
            padding: 35px;
        }

        .support-card-header h3 {
            font-size: 25px;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 767px) {

        .contact-support-card {
            margin-top: 35px;

            padding: 30px 20px;
        }


        .support-card-header {
            gap: 14px;
        }


        .support-icon {
            width: 55px;
            height: 55px;

            min-width: 55px;

            font-size: 22px;
        }


        .support-card-header h3 {
            font-size: 23px;
        }


        .support-card-text {
            font-size: 15px;
        }


        .support-contact-box {
            padding: 16px;

            gap: 14px;
        }


        .support-contact-content a {
            font-size: 17px;
        }


        .support-contact-content p {
            font-size: 12px;
        }


        .google-map-iframe-box iframe {
            min-height: 300px;
        }

    }


    /* =========================================
       SMALL MOBILE
    ========================================= */

    @media (max-width: 480px) {

        .contact-support-card {
            padding: 25px 15px;
        }


        .support-card-header h3 {
            font-size: 21px;
        }


        .support-card-header span {
            font-size: 12px;
        }


        .support-contact-box {
            align-items: flex-start;
        }


        .support-contact-icon {
            width: 44px;
            height: 44px;

            min-width: 44px;
        }


        .support-contact-content a {
            font-size: 16px;
        }


        .support-contact-content p {
            font-size: 11px;
        }

    }

</style>
<!-- Contact Support Card CSS End -->

@endsection