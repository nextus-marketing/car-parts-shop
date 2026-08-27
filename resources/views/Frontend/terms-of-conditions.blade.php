@extends('layouts.frontend')
@section('title') Terms and Conditions | Car Parts Shop @endsection
@section('content')

<style>
    :root {
        --primary-dark: #1a2a3a;
        --primary-blue: #0052cc;
        --accent-gray: #f5f5f5;
        --border-gray: #e0e0e0;
        --text-dark: #333333;
        --text-light: #666666;
    }

    .privacy-container {
        max-width: 1200px;
        margin: 0 auto;
        background-color: #ffffff;
    }

    /* Hero Section */
    .privacy-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #2d4055 100%);
        color: white;
        padding: 60px 40px;
        text-align: center;
        margin-bottom: 60px;
    }

    .privacy-hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin: 0 0 15px 0;
        letter-spacing: -0.5px;
    }

    .privacy-hero .last-updated {
        font-size: 0.95rem;
        opacity: 0.9;
        margin: 0;
    }

    .content-wrapper {
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 40px;
        padding: 0 40px 60px 40px;
    }

    /* Sidebar Navigation */
    .toc-sidebar {
        position: sticky;
        top: 100px;
        height: fit-content;
    }

    .toc-title {
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--primary-dark);
        margin-bottom: 20px;
        letter-spacing: 0.5px;
    }

    .toc-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .toc-nav li {
        margin-bottom: 12px;
    }

    .toc-nav a {
        font-size: 0.9rem;
        color: var(--text-light);
        text-decoration: none;
        display: block;
        padding: 8px 0;
        border-left: 3px solid transparent;
        padding-left: 12px;
        transition: all 0.3s ease;
    }

    .toc-nav a:hover {
        color: var(--primary-blue);
        border-left-color: var(--primary-blue);
    }

    /* Main Content */
    .privacy-content {
        font-size: 1rem;
        line-height: 1.8;
        color: var(--text-dark);
    }

    .policy-section {
        margin-bottom: 50px;
        padding-bottom: 40px;
        border-bottom: 1px solid var(--border-gray);
    }

    .policy-section:last-child {
        border-bottom: none;
    }

    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 20px;
        padding-top: 20px;
        scroll-margin-top: 100px;
    }

    .subsection-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--primary-dark);
        margin-top: 30px;
        margin-bottom: 15px;
    }

    .subsection-title.small {
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .policy-section p {
        margin-bottom: 15px;
        color: var(--text-light);
    }

    .policy-section ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }

    .policy-section li {
        margin-bottom: 10px;
        color: var(--text-light);
    }

    .policy-section strong {
        color: var(--primary-dark);
        font-weight: 600;
    }

    /* Highlight Box */
    .highlight-box {
        background-color: var(--accent-gray);
        border-left: 4px solid var(--primary-blue);
        padding: 20px 20px;
        margin: 25px 0;
        border-radius: 4px;
    }

    .highlight-box p {
        margin: 0;
        font-size: 0.95rem;
    }

    /* Definition List */
    .definitions-list {
        background-color: #fafafa;
        padding: 20px;
        border-radius: 4px;
        margin: 20px 0;
    }

    .definition-item {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border-gray);
    }

    .definition-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .definition-term {
        font-weight: 600;
        color: var(--primary-dark);
        margin-bottom: 8px;
        font-size: 1.05rem;
    }

    .definition-description {
        color: var(--text-light);
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* Contact Section */
    .contact-section {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #2d4055 100%);
        color: white;
        padding: 40px;
        border-radius: 4px;
        margin-top: 50px;
    }

    .contact-section h3 {
        font-size: 1.4rem;
        margin-top: 0;
        margin-bottom: 25px;
    }

    .contact-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .contact-method {
        padding: 20px 0;
    }

    .contact-method strong {
        display: block;
        margin-bottom: 8px;
        font-size: 1.05rem;
    }

    .contact-method a {
        color: #74b5ff;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }

    .contact-method a:hover {
        opacity: 0.8;
        text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .content-wrapper {
            grid-template-columns: 1fr;
            padding: 0 20px 40px 20px;
            gap: 30px;
        }

        .toc-sidebar {
            position: static;
            background-color: var(--accent-gray);
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .privacy-hero {
            padding: 40px 20px;
            margin-bottom: 40px;
        }

        .privacy-hero h1 {
            font-size: 2.2rem;
        }

        .section-title {
            font-size: 1.4rem;
        }

        .contact-info {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .privacy-hero h1 {
            font-size: 1.8rem;
        }

        .section-title {
            font-size: 1.2rem;
        }

        .subsection-title {
            font-size: 1rem;
        }
    }
</style>

 <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Terms and Conditions</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Last updated: October 12, 2022</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<div class="privacy-container pt-5 ">
    <div class="content-wrapper">
        <!-- Table of Contents Sidebar -->
        <aside class="toc-sidebar">
            <div class="toc-title">Contents</div>
            <nav class="toc-nav">
                <ul>
                    <li><a href="#interpretation">Interpretation & Definitions</a></li>
                    <li><a href="#acknowledgment">Acknowledgment</a></li>
                    <li><a href="#links">Links to Other Websites</a></li>
                    <li><a href="#termination">Termination</a></li>
                    <li><a href="#liability">Limitation of Liability</a></li>
                    <li><a href="#disclaimer">AS IS & AS AVAILABLE</a></li>
                    <li><a href="#governing">Governing Law</a></li>
                    <li><a href="#disputes">Disputes Resolution</a></li>
                    <li><a href="#eu">EU Users</a></li>
                    <li><a href="#us-compliance">US Legal Compliance</a></li>
                    <li><a href="#severability">Severability & Waiver</a></li>
                    <li><a href="#translation">Translation Interpretation</a></li>
                    <li><a href="#changes">Changes to Terms</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="privacy-content">

            <!-- Introduction -->
            <div class="policy-section">
                <p style="font-size: 1.05rem; color: var(--primary-dark); margin-bottom: 20px;">
                    Please read these terms and conditions carefully before using our Service.
                </p>
                <p style="color: var(--text-light);">
                    These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service. By accessing or using the Service, you agree to be bound by these Terms and Conditions.
                </p>
            </div>

            <!-- Interpretation and Definitions -->
            <div class="policy-section" id="interpretation">
                <h2 class="section-title">Interpretation and Definitions</h2>

                <h3 class="subsection-title">Interpretation</h3>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

                <h3 class="subsection-title">Definitions</h3>
                <p>For the purposes of these Terms and Conditions:</p>

                <div class="definitions-list">
                    <div class="definition-item">
                        <div class="definition-term">Affiliate</div>
                        <div class="definition-description">An entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Country</div>
                        <div class="definition-description">Alaska, United States</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Company</div>
                        <div class="definition-description">Carspartshop, located at 1014 Retreat Avenue, Birmingham, Alaska. Referred to as "the Company", "We", "Us" or "Our" in this Agreement.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Device</div>
                        <div class="definition-description">Any device that can access the Service such as a computer, a cellphone or a digital tablet.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Service</div>
                        <div class="definition-description">Refers to our Website accessible from https://carspartshop.com/</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Terms and Conditions</div>
                        <div class="definition-description">These Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Third-party Social Media Service</div>
                        <div class="definition-description">Any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">You</div>
                        <div class="definition-description">The individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</div>
                    </div>
                </div>
            </div>

            <!-- Acknowledgment -->
            <div class="policy-section" id="acknowledgment">
                <h2 class="section-title">Acknowledgment</h2>

                <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>

                <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>

                <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>

                <div class="highlight-box">
                    <p><strong>You represent that you are over the age of 18.</strong> The Company does not permit those under 18 to use the Service.</p>
                </div>

                <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Please read Our Privacy Policy carefully before using Our Service.</p>
            </div>

            <!-- Links to Other Websites -->
            <div class="policy-section" id="links">
                <h2 class="section-title">Links to Other Websites</h2>

                <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>

                <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

                <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
            </div>

            <!-- Termination -->
            <div class="policy-section" id="termination">
                <h2 class="section-title">Termination</h2>

                <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>

                <div class="highlight-box">
                    <p>Upon termination, Your right to use the Service will cease immediately.</p>
                </div>
            </div>

            <!-- Limitation of Liability -->
            <div class="policy-section" id="liability">
                <h2 class="section-title">Limitation of Liability</h2>

                <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>

                <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>

                <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
            </div>

            <!-- AS IS and AS AVAILABLE Disclaimer -->
            <div class="policy-section" id="disclaimer">
                <h2 class="section-title">AS IS and AS AVAILABLE Disclaimer</h2>

                <p>The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice.</p>

                <p>Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>

                <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied:</p>
                <ul>
                    <li>As to the operation or availability of the Service, or the information, content, and materials or products included thereon</li>
                    <li>That the Service will be uninterrupted or error-free</li>
                    <li>As to the accuracy, reliability, or currency of any information or content provided through the Service</li>
                    <li>That the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components</li>
                </ul>

                <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
            </div>

            <!-- Governing Law -->
            <div class="policy-section" id="governing">
                <h2 class="section-title">Governing Law</h2>

                <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
            </div>

            <!-- Disputes Resolution -->
            <div class="policy-section" id="disputes">
                <h2 class="section-title">Disputes Resolution</h2>

                <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>

                <h3 class="subsection-title">For European Union (EU) Users</h3>
                <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p>
            </div>

            <!-- United States Legal Compliance -->
            <div class="policy-section" id="us-compliance">
                <h2 class="section-title">United States Legal Compliance</h2>

                <p>You represent and warrant that:</p>
                <ul>
                    <li>You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a "terrorist supporting" country</li>
                    <li>You are not listed on any United States government list of prohibited or restricted parties</li>
                </ul>
            </div>

            <!-- Severability and Waiver -->
            <div class="policy-section" id="severability">
                <h2 class="section-title">Severability and Waiver</h2>

                <h3 class="subsection-title">Severability</h3>
                <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>

                <h3 class="subsection-title">Waiver</h3>
                <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.</p>
            </div>

            <!-- Translation Interpretation -->
            <div class="policy-section" id="translation">
                <h2 class="section-title">Translation Interpretation</h2>

                <p>These Terms and Conditions may have been translated if We have made them available to You on our Service. You agree that the original English text shall prevail in the case of a dispute.</p>
            </div>

            <!-- Changes to These Terms and Conditions -->
            <div class="policy-section" id="changes">
                <h2 class="section-title">Changes to These Terms and Conditions</h2>

                <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>

                <p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
            </div>

            <!-- Contact Us -->
            <div class="contact-section" id="contact">
                <h3 style="color:#ffffff;">Questions About Our Terms and Conditions?</h3>
                <p>If you have any questions about these Terms and Conditions, please don't hesitate to contact us:</p>

                <div class="contact-info">
                    <div class="contact-method">
                        <strong>📧 Email</strong>
                        <a href="mailto:support@carspartshop.com">support@carspartshop.com</a>
                    </div>
                    <div class="contact-method">
                        <strong>📞 Phone</strong>
                        <a href="tel:+18556134411">+1 (855) 613-4411</a>
                    </div>
                    <div class="contact-method">
                        <strong>🏢 Address</strong>
                        <p>1014 Retreat Avenue<br>Birmingham, Alaska</p>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

@endsection