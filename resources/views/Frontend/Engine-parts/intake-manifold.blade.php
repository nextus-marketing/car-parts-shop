@extends('layouts.frontend')
@section('title', 'Used Intake Manifolds for Sale | Cars Part Shop')
@section('meta_description', 'Browse quality used intake manifolds for improved air airflow and engine output. Fast fast delivery and warranty included.')
@section('meta_keywords', 'used intake manifold, car intake manifold, OEM intake manifold replacement')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://carspartshop.com/" },
    { "@type": "ListItem", "position": 2, "name": "Engine Parts", "item": "https://carspartshop.com/engine-parts" },
    { "@type": "ListItem", "position": 3, "name": "Intake Manifold", "item": "https://carspartshop.com/engine-parts/intake-manifold" }
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Intake Manifold</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/engine-parts">Engine Parts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Intake Manifold</li>
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
                            <img src="/frontend/images/my-img/main/intake_manifold.jpg" alt="High-Flow Engine Intake Manifold Assembly">
                        </figure>
                    </div>
                    <!-- Engine Parts Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Engine Parts Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Airflow Optimization & Combustion Efficiency</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Precision OEM & Performance Intake Manifolds</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><b>Maximize engine horsepower, low-end torque, and airflow distribution across all cylinders with our OEM direct-fit and performance intake manifolds.</b></p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">The intake manifold evenly channels clean air (or air-fuel mixture) into each cylinder head intake port. Common issues like cracked composite runners, warped aluminum flanges, stuck swirl flaps, or vacuum leaks can cause lean misfires and poor acceleration. Our replacement intake manifolds feature reinforced high-temp nylon composite or cast aluminum construction, pre-installed runner gaskets, and integrated sensor mounts for reliable, leak-free engine breathability.</p>
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
                        <p>All intake manifolds are covered by up to 1-year warranty protecting against runner seam cracks, coolant crossover leaks, and runner flap actuator failures.</p>
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
                        <h3>Fast Shipping</h3>
                        <p>Fast delivery directly to your door across all 48 US states, with heavy-duty foam corner protection to preserve plastic vacuum ports and delicate sensor bungs.</p>
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
                        <h2 class="text-anime-style-3">Our Intake Manifold Range</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>OEM Composite Intake Manifolds</h4>
                        <p>Factory-equivalent composite intake manifolds designed with smooth inner runner walls to maximize air velocity and fuel efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4>Performance Cast Aluminum Manifolds</h4>
                        <p>Heavy-duty cast aluminum intake manifolds capable of withstanding high boost pressure in forced-induction turbo/supercharged applications.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4>Variable Intake Assemblies (DISA / Runner Flaps)</h4>
                        <p>Complete assemblies outfitted with variable length intake runner control motors and actuators for optimized torque across the RPM range.</p>
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
                                Everything you need to know about intake manifolds
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Read common answers regarding vacuum leak symptoms, composite vs aluminum manifolds, and installation instructions.
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
                                    01. What are the symptoms of a bad or cracked intake manifold?
                                </button>
                            </h2>

                            <div id="collapse1"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading1"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Symptoms include erratic high idling, engine misfires (P0300, P0171 lean codes), whistling or huffing vacuum leak noises from the engine bay, coolant leaks near the intake gasket crossover, and reduced fuel economy.
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
                                    02. Do your intake manifolds include fresh gaskets?
                                </button>
                            </h2>

                            <div id="collapse2"
                                class="accordion-collapse collapse show"
                                role="region"
                                aria-labelledby="heading2"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Yes! Most of our replacement intake manifold units come with molded silicon intake runner gaskets, throttle body seal rings, and mounting hardware pre-packaged for quick installation.
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
                                    03. Why do composite plastic intake manifolds warp or crack over time?
                                </button>
                            </h2>

                            <div id="collapse3"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading3"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Composite plastic manifolds endure constant thermal heat soak from the engine block combined with oil vapor and vibration. Over years of driving, the plastic turns brittle and cracks near coolant passages or mounting bolt holes.
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
                                    04. Can I upgrade from a plastic manifold to an aluminum intake manifold?
                                </button>
                            </h2>

                            <div id="collapse4"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading4"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Yes, for many engines, aftermarket cast aluminum intake manifolds are available. They eliminate plastic cracking permanently and handle higher boost levels in modified vehicles.
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
                                    05. Should I clean the intake ports on the cylinder head during installation?
                                </button>
                            </h2>

                            <div id="collapse5"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading5"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Yes. Cleaning carbon deposits off cylinder head intake ports and scraping old gasket residue ensures a smooth mating surface and prevents vacuum leaks on the new gasket.
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
                                    06. How can I confirm fitment for my specific vehicle model?
                                </button>
                            </h2>

                            <div id="collapse6"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading6"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Call our engine specialists at +1 (855) 613-4411 with your vehicle's VIN, engine displacement, and year to confirm exact manifold specs.
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
                        <h2>Ready to Replace Your Intake Manifold?</h2>
                        <p>Browse our extensive inventory of OEM and performance intake manifolds or speak with an expert today.</p>
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
