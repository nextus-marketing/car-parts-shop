@extends('layouts.frontend')
@section('title', 'Used Car Doors - Front, Rear & Hatch | Cars Part Shop')
@section('meta_description', 'Shop complete used car doors, side doors, tailgate and hatch doors. Inspected rust-free body panels.')
@section('meta_keywords', 'used car doors, front door assembly, rear door, tailgate, hatchback door')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://carspartshop.com/" },
    { "@type": "ListItem", "position": 2, "name": "Exterior Parts", "item": "https://carspartshop.com/exterior-parts" },
    { "@type": "ListItem", "position": 3, "name": "Doors", "item": "https://carspartshop.com/exterior-parts/doors" }
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Car Doors</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/exterior-parts">Exterior Parts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Car Doors</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Engine Parts Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Engine Parts Image Start -->
                    <div class="about-us-image">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/my-img/main/car_doors.jpg" alt="OEM Car Door Shell Assembly">
                        </figure>
                    </div>
                    <!-- Engine Parts Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Engine Parts Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Side Collision Safety & Weather Sealing</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">OEM Bare Door Shells & Complete Door Assemblies</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><b>Repair collision damage, structural side-impact beam distortion, and rust perforation with our genuine OEM replacement car doors.</b></p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Vehicle doors shield passengers during side impacts while housing power window regulators, latch actuators, speakers, and door glass. Severe T-bone collision damage or deep rust along lower inner door seams compromise structural integrity. Our inventory features rust-free bare metal door shells and loaded complete assemblies with hinges, power latches, and window glass for front driver, front passenger, rear left, and rear right positions.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Engine Parts Contact Item Start -->
                        <div class="about-us-contact-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-contact-item-image">
                                <figure class="image-anime">
                                    <img src="/frontend/images/author-4.jpg" alt="Expert Support">
                                </figure>
                            </div>
                            <div class="about-us-contact-item-content">
                                <p>Need Help? Chat With An Expert</p>
                                <h3><a href="tel:+18556134411">+1 (855) 613-4411</a></h3>
                            </div>
                        </div>
                        <!-- Engine Parts Contact Item End -->
                    </div>
                    <!-- Engine Parts Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Engine Parts Section End -->

    <!-- Feature Cards Section Start -->
    <div class="engine-features">
        <div class="container">
            <div class="row">
                <!-- Warranty Card Start -->
                <div class="col-md-6 col-lg-6 wow fadeInUp">
                    <div class="feature-card warranty-card">
                        <div class="feature-card-icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 2L5 12V25C5 38.5 25 47 25 47C25 47 45 38.5 45 25V12L25 2Z" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path d="M17 25L22 30L33 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Up to 1 Year Warranty</h3>
                        <p>All door shells and complete door assemblies come backed by up to 1-year warranty coverage against structural weld seam defects, door skin denting, and hinge alignment flaws.</p>
                        <a href="tel:+18556134411" class="feature-card-link">Call Now <span>→</span></a>
                    </div>
                </div>
                <!-- Warranty Card End -->

                <!-- Fast Shipping Card Start -->
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-card shipping-card">
                        <div class="feature-card-icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 20H45V38C45 40.2091 43.2091 42 41 42H9C6.79086 42 5 40.2091 5 38V20Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M14 20V12C14 10.8954 14.8954 10 16 10H34C35.1046 10 36 10.8954 36 12V20" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="35" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                <circle cx="38" cy="35" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <h3>Fast Freight Shipping</h3>
                        <p>Fast freight delivery with liftgate option directly to your body shop or residential address, packaged on custom wooden pallets with heavy foam edge wrapping.</p>
                        <a href="tel:+18556134411" class="feature-card-link">Call Now <span>→</span></a>
                    </div>
                </div>
                <!-- Fast Shipping Card End -->
            </div>
        </div>
    </div>
    <!-- Feature Cards Section End -->

    <!-- Engine Specifications Section Start -->
    <div class="engine-specs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInUp">
                        <span class="section-sub-title">What We Offer</span>
                        <h2 class="text-anime-style-3">Our Car Door Product Range</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <h4>Bare Metal OEM Door Shells</h4>
                        <p>Rust-free factory door skins and inner frame structures pre-primed for custom paint matching at your body shop.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>Loaded Door Assemblies</h4>
                        <p>Complete pre-owned door assemblies including glass, power window motor, latch actuator, hinges, and interior trim panel.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h4>Door Latches & Power Actuators</h4>
                        <p>OEM door lock latch mechanisms and electronic central locking actuators for trouble-free keyless entry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Engine Specifications Section End -->

    <!-- FAQ Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- FAQ's Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>

                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                Everything you need to know about car doors
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Read common questions about bare vs loaded doors, color matching, shipping freight, and door latch installation.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ's Content Button Start -->
                        <div class="faqs-content-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="tel:+18556134411" class="btn-default">Call Now</a>
                        </div>
                        <!-- FAQ's Content Button End -->
                    </div>
                    <!-- FAQ's Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse1"
                                    aria-expanded="false"
                                    aria-controls="collapse1">
                                    01. What is the difference between a bare door shell and a loaded door?
                                </button>
                            </h2>

                            <div id="collapse1"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading1"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        A bare door shell is strictly the metal outer skin and inner frame without interior components. A loaded door comes complete with door glass, window regulator, motor, lock latch, wiring harness, and interior panel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse2"
                                    aria-expanded="true"
                                    aria-controls="collapse2">
                                    02. Can I get a replacement door in my vehicle's exact factory paint color?
                                </button>
                            </h2>

                            <div id="collapse2"
                                class="accordion-collapse collapse show"
                                role="region"
                                aria-labelledby="heading2"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Our pre-owned loaded doors are sourced in factory color finishes. Provide your vehicle paint code (found on the driver door jamb sticker) to our team to check matching color inventory.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse3"
                                    aria-expanded="false"
                                    aria-controls="collapse3">
                                    03. How are large car doors shipped to avoid denting?
                                </button>
                            </h2>

                            <div id="collapse3"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading3"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Doors are secured standing upright on wooden pallets, wrapped in heavy-duty foam corner guards, and shrink-wrapped for safe LTL freight truck shipping directly to your body shop.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse4"
                                    aria-expanded="false"
                                    aria-controls="collapse4">
                                    04. Do replacement doors come with hinges and weatherstripping?
                                </button>
                            </h2>

                            <div id="collapse4"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading4"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Loaded door assemblies include factory mounting hinges and rubber perimeter weatherstripping. Bare door shells allow transfer of your existing hinges and seals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse5"
                                    aria-expanded="false"
                                    aria-controls="collapse5">
                                    05. How do I know if a 2-door or 4-door model shares the same front doors?
                                </button>
                            </h2>

                            <div id="collapse5"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading5"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        2-door coupe doors are significantly longer than 4-door sedan front doors and are not interchangeable. Always verify body style when ordering.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse6"
                                    aria-expanded="false"
                                    aria-controls="collapse6">
                                    06. How can I confirm fitment for my car?
                                </button>
                            </h2>

                            <div id="collapse6"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading6"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Call our body parts team at +1 (855) 613-4411 with your vehicle's VIN, model year, and door position (FL, FR, RL, RR) for exact verification.
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
    <!-- FAQ Section End -->

    <!-- Final CTA Section Start -->
    <div class="engine-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="engine-cta-content text-center wow fadeInUp">
                        <h2>Ready to Replace Your Car Doors?</h2>
                        <p>Browse our extensive selection of OEM bare door shells and complete loaded door assemblies or speak with a specialist today.</p>
                        <div class="engine-cta-buttons">
                            <a href="tel:+18556134411" class="btn-default" style="background-color: #ffffffff !important; color: #074db1 !important;">Call Our Experts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Final CTA Section End -->

<style>
/* Feature Cards Styling */
.engine-features {
    padding: 60px 0;
    background-color: #f8f8f8;
}

.feature-card {
    background: white;
    padding: 40px 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    text-align: center;
     margin-bottom: 30px
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}

.feature-card-icon {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    color: #074db1;
    font-size: 24px;
}

.feature-card h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #1a1a1a;
}

.feature-card p {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 25px;
}

.feature-card-link {
    display: inline-flex;
    align-items: center;
    color: #074db1;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.feature-card-link:hover {
    color: #b71c1c;
}

.feature-card-link span {
    margin-left: 8px;
    transition: transform 0.3s ease;
}

.feature-card-link:hover span {
    transform: translateX(3px);
}

/* Engine Specs Section */
.engine-specs {
    padding: 60px 0;
}

.spec-item {
    text-align: center;
    padding: 30px 20px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.spec-item:hover {
    background-color: #f8f8f8;
}

.spec-icon {
    font-size: 40px;
    color: #074db1;
    margin-bottom: 20px;
}

.spec-item h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #1a1a1a;
}

.spec-item p {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
}


/* =========================================
   Interactive Engine CTA Section
========================================= */
.engine-cta-section {
    position: relative;
    overflow: hidden;
    padding: 80px 0;
    background: linear-gradient(135deg, #074db1 0%, #0b6fe8 55%, #1b8cff 100%);
    color: #fff;
}

/* Decorative glow */
.engine-cta-section::before {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.10);
    top: -180px;
    left: -100px;
}

.engine-cta-section::after {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
    bottom: -170px;
    right: -80px;
}

.engine-cta-content {
    position: relative;
    z-index: 2;
}

.engine-cta-content h2 {
    font-size: 40px;
    line-height: 1.2;
    font-weight: 700;
    margin-bottom: 15px;
    color: #fff;
}

.engine-cta-content p {
    max-width: 700px;
    margin: 0 auto 30px;
    font-size: 17px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.92);
}


/* Mobile */
@media (max-width: 768px) {

    .engine-cta-section {
        padding: 60px 20px;
    }

    .engine-cta-content h2 {
        font-size: 28px;
        line-height: 1.3;
    }

    .engine-cta-content p {
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .engine-cta-buttons {
        flex-direction: column;
        gap: 12px;
    }

    .engine-cta-buttons .btn-default {
        width: 100%;
        max-width: 320px;
    }
}
</style>
@endsection
