@extends('layouts.frontend')
@section('title', 'Used Shock Absorbers for Sale | Cars Part Shop')
@section('meta_description', 'Enhance ride comfort with tested used shock absorbers. Great prices on genuine OEM suspension shocks.')
@section('meta_keywords', 'used shock absorbers, car shocks, OEM shock absorber, suspension shock')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://carspartshop.com/" },
    { "@type": "ListItem", "position": 2, "name": "Suspension Parts", "item": "https://carspartshop.com/suspension-parts" },
    { "@type": "ListItem", "position": 3, "name": "Shock Absorber", "item": "https://carspartshop.com/suspension-parts/shock-absorber" }
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Shock Absorber</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/suspension-parts">Suspension Parts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shock Absorber</li>
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
                            <img src="/frontend/images/my-img/main/shock_absorber.jpg" alt="OEM Heavy-Duty Gas-Charged Shock Absorber">
                        </figure>
                    </div>
                    <!-- Engine Parts Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Engine Parts Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Ride Comfort & Highway Body Roll Stability</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">OEM Heavy-Duty & Gas-Charged Shock Absorbers</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><b>Dampen road impacts, eliminate excessive vehicle bouncing, and maintain tire contact with the road using our premium gas-charged shock absorbers.</b></p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Shock absorbers control spring oscillations by converting kinetic suspension bounce into heat dissipated through hydraulic fluid. Blown fluid seals, rusted piston rods, or worn rubber mounting bushings cause vehicle nose-diving under braking, swaying in crosswinds, rear-end squating under acceleration, and cupped tire tread wear. Our replacement shock absorbers feature nitrogen gas charging, chrome-plated piston rods, and multi-stage velocity sensitive valving.</p>
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
                        <p>All shock absorbers come with up to 1-year warranty coverage protecting against fluid seal weeping, nitrogen pressure loss, and piston rod bending.</p>
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
                        <p>Fast dispatch across all 48 continental states, packaged securely with nylon retaining straps holding gas pistons compressed inside sturdy shipping boxes.</p>
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
                        <h2 class="text-anime-style-3">Our Shock Absorber Product Range</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-compress-arrows-alt"></i>
                        </div>
                        <h4>Twin-Tube Gas-Charged Shocks</h4>
                        <p>OEM direct-fit twin-tube nitrogen gas charged shocks offering plush everyday highway ride comfort and low impact harshness.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <h4>Monotube High-Performance Shocks</h4>
                        <p>Heavy-duty monotube shocks engineered for trucks, towing heavy loads, and off-road applications with superior heat dissipation.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="spec-item">
                        <div class="spec-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Electronic & Air Ride Dampers</h4>
                        <p>Replacement active magnetic ride control (MRC) dampers and electronic adaptive shocks for luxury and sports vehicles.</p>
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
                                Everything you need to know about shock absorbers
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Read common questions about bounce tests, oil leakage signs, shock vs strut differences, and fitment.
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
                                    01. What is the difference between a shock absorber and a strut assembly?
                                </button>
                            </h2>

                            <div id="collapse1"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading1"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        A shock absorber purely dampens spring bounce. A MacPherson strut is a structural component of the vehicle's suspension that supports vehicle weight, houses the coil spring, and pivots with steering knuckles.
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
                                    02. How do I perform a manual bumper bounce test to check shock condition?
                                </button>
                            </h2>

                            <div id="collapse2"
                                class="accordion-collapse collapse show"
                                role="region"
                                aria-labelledby="heading2"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Push down firmly on one corner of the bumper and release. A healthy shock absorber will allow the vehicle to rebound once and immediately settle. If it continues bouncing 2 or 3 times, the shock is blown.
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
                                    03. Why is wet hydraulic oil leaking down the side of my shock absorber body?
                                </button>
                            </h2>

                            <div id="collapse3"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading3"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Fluid weeping around the upper shaft seal indicates internal seal failure. Once hydraulic oil escapes, dampening pressure is lost and the shock must be replaced.
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
                                    04. Should shock absorbers always be replaced in pairs across the axle?
                                </button>
                            </h2>

                            <div id="collapse4"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading4"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Yes, replacing shock absorbers in pairs (both rear or both front) ensures equal damping rate, stable braking performance, and symmetrical emergency lane-change control.
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
                                    05. Do replacement shocks include new rubber mounting bushings and hardware?
                                </button>
                            </h2>

                            <div id="collapse5"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading5"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Yes, all our shock absorber units come pre-fitted with vulcanized rubber eyelet bushings, metal sleeves, and top stem washer hardware.
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
                                    06. How can I confirm part fitment for my car?
                                </button>
                            </h2>

                            <div id="collapse6"
                                class="accordion-collapse collapse"
                                role="region"
                                aria-labelledby="heading6"
                                data-bs-parent="#accordion">

                                <div class="accordion-body">
                                    <p>
                                        Call our parts line at +1 (855) 613-4411 with your vehicle's VIN, drive type (FWD, RWD, 4WD), and suspension package code for exact verification.
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
                        <h2>Ready to Replace Your Shock Absorbers?</h2>
                        <p>Browse our extensive selection of OEM twin-tube and monotube gas-charged shock absorbers or speak with an expert today.</p>
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
