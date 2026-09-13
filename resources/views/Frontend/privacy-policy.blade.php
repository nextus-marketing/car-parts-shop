@extends('layouts.frontend')
@section('title', 'Privacy Policy - Cars Part Shop')
@section('meta_description', 'Read the Privacy Policy of Cars Part Shop. Learn how we collect, protect, and use your personal information when purchasing used auto parts.')
@section('meta_keywords', 'privacy policy, Cars Part Shop privacy, data protection, auto parts shop privacy')
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

    /* Cookie Table */
    .cookie-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.95rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-radius: 4px;
        overflow: hidden;
    }

    .cookie-table thead {
        background-color: var(--primary-dark);
        color: white;
    }

    .cookie-table th {
        padding: 15px;
        text-align: left;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .cookie-table td {
        padding: 15px;
        border-bottom: 1px solid var(--border-gray);
    }

    .cookie-table tbody tr:hover {
        background-color: var(--accent-gray);
    }

    .cookie-table tbody tr:last-child td {
        border-bottom: none;
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

        .cookie-table {
            font-size: 0.85rem;
        }

        .cookie-table th,
        .cookie-table td {
            padding: 10px;
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Privacy Policy</h1>
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
                    <li><a href="#collecting">Collecting Your Data</a></li>
                    <li><a href="#cookies">Cookies & Tracking</a></li>
                    <li><a href="#use-data">Use of Your Data</a></li>
                    <li><a href="#retention">Data Retention</a></li>
                    <li><a href="#transfer">Data Transfer</a></li>
                    <li><a href="#delete">Delete Your Data</a></li>
                    <li><a href="#disclosure">Disclosure</a></li>
                    <li><a href="#security">Security</a></li>
                    <li><a href="#children">Children's Privacy</a></li>
                    <li><a href="#links">External Links</a></li>
                    <li><a href="#changes">Changes to Policy</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="privacy-content">

            <!-- Introduction -->
            <div class="policy-section">
                <p style="font-size: 1.05rem; color: var(--primary-dark); margin-bottom: 20px;">
                    This Privacy Policy describes our policies and procedures on the collection, use and disclosure of your information when you use our Service. It also tells you about your privacy rights and how the law protects you.
                </p>
                <p style="color: var(--text-light);">
                    We use your Personal Data to provide and improve our Service. By using the Service, you agree to the collection and use of information in accordance with this Privacy Policy.
                </p>
            </div>

            <!-- Interpretation and Definitions -->
            <div class="policy-section" id="interpretation">
                <h2 class="section-title">Interpretation and Definitions</h2>

                <h3 class="subsection-title">Key Terms</h3>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. These definitions shall apply whether they appear in singular or plural form.</p>

                <div class="definitions-list">
                    <div class="definition-item">
                        <div class="definition-term">Account</div>
                        <div class="definition-description">A unique account created for you to access our Service or parts of our Service.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Company</div>
                        <div class="definition-description">Cars Part Shop, referred to as "the Company", "We", "Us" or "Our" in this Agreement.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Cookies</div>
                        <div class="definition-description">Small files placed on your computer, mobile device or any other device by a website, containing the details of your browsing history on that website among its many uses.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Personal Data</div>
                        <div class="definition-description">Any information that relates to an identified or identifiable individual.</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Service</div>
                        <div class="definition-description">Refers to our Website accessible from https://carspartshop.com/</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">Usage Data</div>
                        <div class="definition-description">Data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</div>
                    </div>

                    <div class="definition-item">
                        <div class="definition-term">You</div>
                        <div class="definition-description">The individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</div>
                    </div>
                </div>
            </div>

            <!-- Collecting and Using Your Personal Data -->
            <div class="policy-section" id="collecting">
                <h2 class="section-title">Collecting and Using Your Personal Data</h2>

                <h3 class="subsection-title">Types of Data Collected</h3>

                <h4 class="subsection-title small">Personal Data</h4>
                <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. This may include:</p>
                <ul>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>First name and last name</li>
                    <li>Address and location information</li>
                </ul>

                <h4 class="subsection-title small">Usage Data</h4>
                <p>Usage Data is collected automatically when using the Service. It may include information such as:</p>
                <ul>
                    <li>Your Device's Internet Protocol address (IP address)</li>
                    <li>Browser type and version</li>
                    <li>Pages of our Service that you visit</li>
                    <li>Time and date of your visit</li>
                    <li>Time spent on those pages</li>
                    <li>Unique device identifiers and other diagnostic data</li>
                </ul>

                <div class="highlight-box">
                    <p>When you access the Service through a mobile device, we may collect information about the type of mobile device, mobile operating system, and mobile Internet browser you use.</p>
                </div>
            </div>

            <!-- Tracking Technologies and Cookies -->
            <div class="policy-section" id="cookies">
                <h2 class="section-title">Tracking Technologies and Cookies</h2>

                <p>We use Cookies and similar tracking technologies to track the activity on our Service and store certain information. Tracking technologies used include beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</p>

                <h3 class="subsection-title">Types of Cookies</h3>

                <p><strong>Cookies or Browser Cookies:</strong> A cookie is a small file placed on your Device. You can instruct your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if you do not accept Cookies, you may not be able to use some parts of our Service.</p>

                <p><strong>Web Beacons:</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company to count users who have visited those pages or opened an email and for other related website statistics.</p>

                <h3 class="subsection-title">Cookie Categories</h3>
                <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your device when you go offline, while Session Cookies are deleted as soon as you close your web browser.</p>

                <table class="cookie-table">
                    <thead>
                        <tr>
                            <th>Cookie Type</th>
                            <th>Duration</th>
                            <th>Administered By</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Necessary / Essential Cookies</strong></td>
                            <td>Session</td>
                            <td>Us</td>
                            <td>Essential to provide services available through the Website and to enable you to use some of its features. Help authenticate users and prevent fraudulent use.</td>
                        </tr>
                        <tr>
                            <td><strong>Policy Acceptance Cookies</strong></td>
                            <td>Persistent</td>
                            <td>Us</td>
                            <td>Identify if users have accepted the use of cookies on the Website.</td>
                        </tr>
                        <tr>
                            <td><strong>Functionality Cookies</strong></td>
                            <td>Persistent</td>
                            <td>Us</td>
                            <td>Allow us to remember your choices when you use the Website, such as login details or language preference.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Use of Your Personal Data -->
            <div class="policy-section" id="use-data">
                <h2 class="section-title">Use of Your Personal Data</h2>

                <p>The Company may use Personal Data for the following purposes:</p>

                <ul>
                    <li><strong>To provide and maintain our Service:</strong> Including to monitor the usage of our Service.</li>
                    <li><strong>To manage Your Account:</strong> To manage your registration as a user of the Service.</li>
                    <li><strong>For performance of a contract:</strong> Development, compliance and undertaking of the purchase contract for the products, items or services you have purchased.</li>
                    <li><strong>To contact You:</strong> By email, telephone calls, SMS, or other equivalent forms of electronic communication regarding updates or informative communications.</li>
                    <li><strong>To provide news and offers:</strong> Special offers and general information about other goods, services and events which we offer.</li>
                    <li><strong>To manage Your requests:</strong> To attend and manage your requests to us.</li>
                    <li><strong>For business transfers:</strong> We may use your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, or other sale or transfer of some or all of our assets.</li>
                    <li><strong>For other purposes:</strong> Data analysis, identifying usage trends, determining the effectiveness of promotional campaigns and to evaluate and improve our Service.</li>
                </ul>

                <div class="highlight-box">
                    <p><strong>We may share your personal information:</strong> With Service Providers, for business transfers, with Affiliates, with business partners, with other users in public areas, and with your consent for other purposes.</p>
                </div>
            </div>

            <!-- Retention of Your Personal Data -->
            <div class="policy-section" id="retention">
                <h2 class="section-title">Retention of Your Personal Data</h2>

                <p>The Company will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations.</p>

                <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>
            </div>

            <!-- Transfer of Your Personal Data -->
            <div class="policy-section" id="transfer">
                <h2 class="section-title">Transfer of Your Personal Data</h2>

                <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>

                <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>

                <div class="highlight-box">
                    <p>The Company will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy. No transfer of Personal Data will take place to an organization or a country unless there are adequate controls in place.</p>
                </div>
            </div>

            <!-- Delete Your Personal Data -->
            <div class="policy-section" id="delete">
                <h2 class="section-title">Delete Your Personal Data</h2>

                <p>You have the right to delete or request that we assist in deleting the Personal Data that we have collected about you.</p>

                <p>Our Service may give you the ability to delete certain information about you from within the Service. You may update, amend, or delete your information at any time by signing in to your Account and visiting the account settings section that allows you to manage your personal information.</p>

                <p>You may also contact us to request access to, correct, or delete any personal information that you have provided to us.</p>

                <p><em>Please note that we may need to retain certain information when we have a legal obligation or lawful basis to do so.</em></p>
            </div>

            <!-- Disclosure of Your Personal Data -->
            <div class="policy-section" id="disclosure">
                <h2 class="section-title">Disclosure of Your Personal Data</h2>

                <h3 class="subsection-title">Business Transactions</h3>
                <p>If the Company is involved in a merger, acquisition or asset sale, your Personal Data may be transferred. We will provide notice before your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>

                <h3 class="subsection-title">Law Enforcement</h3>
                <p>Under certain circumstances, the Company may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>

                <h3 class="subsection-title">Other Legal Requirements</h3>
                <p>The Company may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
                <ul>
                    <li>Comply with a legal obligation</li>
                    <li>Protect and defend the rights or property of the Company</li>
                    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
                    <li>Protect the personal safety of Users of the Service or the public</li>
                    <li>Protect against legal liability</li>
                </ul>
            </div>

            <!-- Security of Your Personal Data -->
            <div class="policy-section" id="security">
                <h2 class="section-title">Security of Your Personal Data</h2>

                <p>The security of your Personal Data is important to us. However, remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

                <div class="highlight-box">
                    <p>We take data security seriously and employ industry-standard encryption and security measures. However, no system is completely immune to security breaches.</p>
                </div>
            </div>

            <!-- Children's Privacy -->
            <div class="policy-section" id="children">
                <h2 class="section-title">Children's Privacy</h2>

                <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If you are a parent or guardian and you are aware that your child has provided us with Personal Data, please contact us.</p>

                <p>If we become aware that we have collected Personal Data from anyone under the age of 13 without verification of parental consent, we take steps to remove that information from our servers.</p>

                <p>If we need to rely on consent as a legal basis for processing your information and your country requires consent from a parent, we may require your parent's consent before we collect and use that information.</p>
            </div>

            <!-- Links to Other Websites -->
            <div class="policy-section" id="links">
                <h2 class="section-title">Links to Other Websites</h2>

                <p>Our Service may contain links to other websites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>

                <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
            </div>

            <!-- Changes to this Privacy Policy -->
            <div class="policy-section" id="changes">
                <h2 class="section-title">Changes to this Privacy Policy</h2>

                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>

                <p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>

                <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
            </div>

            <!-- Contact Us -->
            <div class="contact-section" id="contact">
                <h3 style="color:#ffffff;">Have Questions About Our Privacy Policy?</h3>
                <p>If you have any questions about this Privacy Policy, please don't hesitate to contact us:</p>

                <div class="contact-info">
                    <div class="contact-method">
                        <strong>📧 Email</strong>
                        <a href="mailto:support@carspartshop.com">support@carspartshop.com</a>
                    </div>
                    <div class="contact-method">
                        <strong>📞 Phone</strong>
                        <a href="tel:+18556134411">+1 (855) 613-4411</a>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

@endsection