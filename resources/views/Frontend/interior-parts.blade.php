@extends('layouts.frontend')
@section('title', 'Used Interior Car Parts & Cabin Accessories | Cars Part Shop')
@section('meta_description', 'Buy premium OEM used car interior parts including car seats, seat belts, center consoles, sun visors, airbags & steering wheels at discounted prices.')
@section('meta_keywords', 'used interior car parts, car seats, seat belts, center console, sun visor, rear view mirror, airbags, car steering wheel')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://carspartshop.com/" },
    { "@type": "ListItem", "position": 2, "name": "Interior Parts", "item": "https://carspartshop.com/interior-parts" }
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Interior Parts</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Interior Parts</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Interior Parts Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Interior Parts Image Start -->
                    <div class="about-us-image">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/my-img/main/interor.png" alt="">
                        </figure>
                    </div>
                    <!-- Interior Parts Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Interior Parts Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Quality Used Interior Parts for Comfort and Style</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Used Interior Parts</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><b>We provide quality inspected used interior parts designed to enhance your vehicle’s comfort, appearance, and functionality.</b></p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We offer a wide range of OEM pre-owned interior components such as replacement seats, center consoles, sun visors, steering wheels, seat belts, and air bag assemblies for various makes and models. Each part is checked for clean condition, durability, and exact fit.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Interior Parts Contact Item Start -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Interior Parts Section End -->

     <!-- Our Product Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Shop by Products</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Find the Right Used Interior Parts for Your Vehicle</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="tel:+18556134411" class="btn-black btn-border">Always-On Customer Support</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Product Item List Start -->
                    <div class="product-item-list">
                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/seats.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/seats">Seats</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                            
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/seat_belt.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/seat-belts/">Seat Belts</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/car_center_console.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/center-console/">Center Console</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/sun_visor.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/sun-visor/">Sun Visor</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/mirror.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/mirrors/">Mirrors</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="1s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/air_bag.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/air-bag/">Air Bag</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="1.2s">
                            <div class="product-item-header">
                                <div class="product-item-image">
                                    <a href="tel:+18556134411">
                                        <figure>
                                            <img src="/frontend/images/my-img/main/sterring_wheel.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-content">
                                <h2><a href="/interior-parts/car-steering/">Car Steering</a></h2>
                                <a href="tel:+18556134411" class="btn-default mt-3" contenteditable="false" style="cursor: pointer;">Enquire Now</a>
                            </div>
                        </div>
                        <!-- Product Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Product Section End -->

 <div class="our-faqs">
    <div class="container">
        <div class="row">

            <div class="col-xl-5">
                <!-- FAQ'S Content Start -->
                <div class="faqs-content">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">
                            Frequently Asked Questions
                        </span>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Everything you need to know about our Interior Parts
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Find answers to common questions about Interior Parts,
                            compatibility, ordering, shipping, returns, and customer support.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- FAQ'S Content Button Start -->
                    <div class="faqs-content-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="tel:+18556134411" class="btn-default">
                            Call Now
                        </a>
                    </div>
                    <!-- FAQ'S Content Button End -->

                </div>
                <!-- FAQ'S Content End -->
            </div>


            <div class="col-xl-7">

                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="accordion">

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp">

                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse1"
                                aria-expanded="false"
                                aria-controls="collapse1">

                                01. How do I find the right interior part for my vehicle?

                            </button>
                        </h2>

                        <div id="collapse1"
                            class="accordion-collapse collapse"
                            role="region"
                            aria-labelledby="heading1"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">
                                <p>
                                    Provide your vehicle's make, model, year, and the specific
                                    interior component you need. This information helps identify
                                    the correct part for your vehicle. If you're unsure, our
                                    support team can assist you.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- FAQ Item End -->


                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">

                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse2"
                                aria-expanded="true"
                                aria-controls="collapse2">

                                02. What Interior Parts do you offer?

                            </button>
                        </h2>

                        <div id="collapse2"
                            class="accordion-collapse collapse show"
                            role="region"
                            aria-labelledby="heading2"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">
                                <p>
                                    We offer a variety of automotive interior parts and components,
                                    including dashboards, door panels, seats, center consoles,
                                    floor mats, interior trim, switches, handles, and other
                                    replacement parts depending on vehicle availability.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- FAQ Item End -->


                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">

                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse3"
                                aria-expanded="false"
                                aria-controls="collapse3">

                                03. How can I check if an interior part is compatible?

                            </button>
                        </h2>

                        <div id="collapse3"
                            class="accordion-collapse collapse"
                            role="region"
                            aria-labelledby="heading3"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">
                                <p>
                                    Compatibility depends on your vehicle's make, model, year,
                                    trim level, body style, and the specific part specifications.
                                    Check the product details or contact our support team with
                                    your vehicle information before placing an order.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- FAQ Item End -->


                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">

                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse4"
                                aria-expanded="false"
                                aria-controls="collapse4">

                                04. Can you help me choose the right interior component?

                            </button>
                        </h2>

                        <div id="collapse4"
                            class="accordion-collapse collapse"
                            role="region"
                            aria-labelledby="heading4"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">
                                <p>
                                    Yes. Our team can help you identify the appropriate interior
                                    component based on your vehicle details and the specific part
                                    you need. Contact us with your vehicle information for
                                    assistance.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- FAQ Item End -->


                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">

                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse5"
                                aria-expanded="false"
                                aria-controls="collapse5">

                                05. What if I receive the wrong interior part?

                            </button>
                        </h2>

                        <div id="collapse5"
                            class="accordion-collapse collapse"
                            role="region"
                            aria-labelledby="heading5"
                            data-bs-parent="#accordion">

                            <div class="accordion-body">
                                <p>
                                    If you receive an incorrect interior part, contact our
                                    support team with your order and vehicle details. Our team
                                    will assist you with the applicable return or exchange process.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- FAQ Item End -->

                </div>
                <!-- FAQ Accordion End -->

            </div>

        </div>
    </div>
</div>
    <!-- CTA Section Start -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <span class="section-sub-title">Need Help With Your Interior Parts?</span>
                <h2>Talk to Our Interior Parts Experts</h2>
                <p>
                   Have questions about Interior Parts, compatibility, or finding the right component for your vehicle? Our team is ready to help you identify the right Interior part and get the best solution for your vehicle.
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