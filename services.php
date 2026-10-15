<?php
$pageTitle = 'AI, Software & Digital Growth Solutions | Vision Vivante';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/services.css" />
<link rel="stylesheet" href="assets/css/tafsol-inspired.css" />
HTML;
$bodyAttrs = 'class="vv-services-page"';
$navActive['Services'] = true;
require_once __DIR__ . '/header.php';
?>

<main class="vvsp-main">
    <section class="vvsp-hero" id="services-overview">
        <div class="vvsp-hero-grid" aria-hidden="true"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="vvsp-hero-copy">
                        <span class="vvsp-eyebrow">OUR SERVICES</span>
                        <h1>Ideas. Technology.<br><span>Real Business Growth.</span></h1>
                        <p>We design, develop and scale digital products with the power of AI, modern technology and data-driven strategies to help businesses grow faster.</p>
                        <a class="vvsp-button" href="index.php#contactUs">Discuss Your Project <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vvsp-services section-pad" id="service-catalog">
        <div class="container">
            <div class="vvsp-section-intro">
                <span class="vvsp-eyebrow">OUR SERVICES</span>
                <h2>What <span>We Do</span></h2>
                <p>End-to-end digital solutions to turn your ideas into scalable, high-performance products.</p>
            </div>
            <div class="vvsp-service-grid">
                <article class="vvsp-category-card">
                    <!-- <div class="vvsp-card-number">01</div> -->
                    <div class="vvsp-card-icon"><i class="bi bi-window-desktop"></i></div>
                    <div class="vvsp-card-content">
                        <h3>Development</h3>
                        <p>Modern, scalable and high-performance web applications tailored to your business goals.</p>
                    </div>
                </article>

                <article class="vvsp-category-card">
                    <!-- <div class="vvsp-card-number">03</div> -->
                    <div class="vvsp-card-icon"><i class="bi bi-cpu"></i></div>
                    <div class="vvsp-card-content">
                        <h3>AI </h3>
                        <p>Intelligent solutions to automate, analyze and accelerate your business growth.</p>
                    </div>
                </article>

                <article class="vvsp-category-card">
                    <!-- <div class="vvsp-card-number">
                        02
                    </div> -->
                    <div class="vvsp-card-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <div class="vvsp-card-content">
                        <h3>Design</h3>
                        <p>Modern, responsive interfaces with pixel-perfect design, seamless usability, and engaging user experiences.</p>
                    </div>
                </article>

                <article class="vvsp-category-card">
                    <!-- <div class="vvsp-card-number">04</div> -->
                    <div class="vvsp-card-icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="vvsp-card-content">
                        <h3>Digital Marketing</h3>
                        <p>Increase your online visibility, attract the right audience and drive measurable growth.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="vvsp-tech section-pad">
        <div class="container">
            <div class="vvsp-section-intro">
                <span class="vvsp-eyebrow">TECHNOLOGY STACK</span>
                <h2>Technologies <span>We Work With</span></h2>
                <p>We use modern and reliable technologies to build secure, scalable and future-ready solutions.</p>
            </div>
        </div>
        <div class="vvsp-tech-marquees">

            <!-- Row 1: Right to Left -->
            <marquee direction="left" scrollamount="5" loop="infinite">
                <div class="vvsp-tech-tile"><i class="devicon-laravel-plain colored"></i><span>Laravel</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-vuejs-plain colored"></i><span>Vue.js</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-react-original colored"></i><span>React.js</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-nextjs-original"></i><span>Next.js</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-nodejs-plain colored"></i><span>Node.js</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-flutter-plain colored"></i><span>Flutter</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-react-original colored"></i><span>React Native</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-php-plain colored"></i><span>PHP</span></div>
            </marquee>

            <!-- Row 2: Left to Right -->
            <marquee direction="right" scrollamount="5" loop="infinite">
                <div class="vvsp-tech-tile"><i class="devicon-mysql-plain colored"></i><span>MySQL</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-postgresql-plain colored"></i><span>PostgreSQL</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-amazonwebservices-plain-wordmark colored"></i><span>AWS</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-googlecloud-plain colored"></i><span>Google Cloud</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-docker-plain colored"></i><span>Docker</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-firebase-plain colored"></i><span>Firebase</span></div>
                <div class="vvsp-tech-tile"><i class="devicon-shopify-plain colored"></i><span>Shopify</span></div>
            </marquee>

        </div>
    </section>

    <section id="industries" aria-labelledby="ind-h" class="section-bg-warm vvsp-process">
        <div class="container">

            <!-- Section Heading -->
            <div class="vvsp-section-intro">
                <span class="vvsp-eyebrow">OUR PROCESS</span>
                <h2>A Simple, <span>Proven Process</span></h2>
                <p>We follow a structured approach to turn your ideas into successful digital products.</p>
            </div>

            <!-- Orbital Process -->
            <div class="ind-orbital-wrap reveal in" id="ind-orbital">

                <!-- JavaScript generates the connecting orbital arcs -->
                <svg class="ind-arcs-svg"
                    id="ind-arcs-svg"
                    aria-hidden="true">
                    <defs>
                        <linearGradient id="arcGrad"
                            x1="0%" y1="0%"
                            x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#075F48"></stop>
                            <stop offset="50%" stop-color="#10B981"></stop>
                            <stop offset="100%" stop-color="#059669"></stop>
                        </linearGradient>
                    </defs>
                </svg>

                <div class="ind-orbit-ring ind-orbit-ring-1"></div>
                <div class="ind-orbit-ring ind-orbit-ring-2"></div>

                <!-- Centre Hub -->
                <div class="ind-hub" aria-hidden="true">
                    <svg class="ind-hub-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M2 12h20"></path>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10
                             15.3 15.3 0 0 1-4 10
                             15.3 15.3 0 0 1-4-10
                             15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                    <span class="ind-hub-label">Our Process</span>
                </div>

                <!-- STEP 1: Discovery -->
                <div class="ind-node"
                    id="inode-0"
                    tabindex="0"
                    role="button"
                    aria-label="Discovery and Research"
                    data-title="Discovery &amp; Research"
                    data-desc="We understand your business goals, target audience, challenges and project requirements before defining the right solution."
                    data-color="#075F48"
                    data-bg="rgba(7,95,72,0.09)">
                    <span class="num-process">01</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <circle cx="27" cy="27" r="17"
                            stroke="#075F48" stroke-width="3"></circle>
                        <path d="M39 39L54 54"
                            stroke="#075F48" stroke-width="4"
                            stroke-linecap="round"></path>
                        <path d="M19 27h16M27 19v16"
                            stroke="#10B981" stroke-width="2.5"
                            stroke-linecap="round"></path>
                    </svg>

                    <span class="ind-node-label">Discovery</span>
                </div>

                <!-- STEP 2: Strategy -->
                <div class="ind-node"
                    id="inode-1"
                    tabindex="0"
                    role="button"
                    aria-label="Strategy and Planning"
                    data-title="Strategy &amp; Planning"
                    data-desc="We define the project scope, technical architecture, development roadmap, milestones and delivery priorities."
                    data-color="#10B981"
                    data-bg="rgba(16,185,129,0.09)">
                    <span class="num-process">02</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <rect x="12" y="9" width="40" height="46" rx="5"
                            stroke="#075F48" stroke-width="2.5"></rect>
                        <path d="M22 23h20M22 32h20M22 41h12"
                            stroke="#10B981" stroke-width="3"
                            stroke-linecap="round"></path>
                        <path d="M23 8v7M41 8v7"
                            stroke="#075F48" stroke-width="3"
                            stroke-linecap="round"></path>
                    </svg>

                    <span class="ind-node-label">Strategy</span>
                </div>

                <!-- STEP 3: UI/UX Design -->
                <div class="ind-node"
                    id="inode-2"
                    tabindex="0"
                    role="button"
                    aria-label="UI and UX Design"
                    data-title="UI/UX Design"
                    data-desc="We create intuitive user journeys, modern interfaces, responsive layouts and interactive prototypes aligned with your brand."
                    data-color="#059669"
                    data-bg="rgba(5,150,105,0.09)">
                    <span class="num-process">03</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <rect x="7" y="10" width="50" height="43" rx="5"
                            stroke="#075F48" stroke-width="2.5"></rect>
                        <path d="M7 21h50"
                            stroke="#075F48" stroke-width="2"></path>
                        <circle cx="15" cy="16" r="1.5" fill="#10B981"></circle>
                        <circle cx="21" cy="16" r="1.5" fill="#10B981"></circle>
                        <path d="M19 32h13v12H19z"
                            fill="rgba(16,185,129,.15)"
                            stroke="#10B981" stroke-width="2"></path>
                        <path d="M38 32h11M38 39h11M38 46h7"
                            stroke="#075F48" stroke-width="2"
                            stroke-linecap="round"></path>
                    </svg>

                    <span class="ind-node-label">UI/UX Design</span>
                </div>

                <!-- STEP 4: Development -->
                <div class="ind-node"
                    id="inode-3"
                    tabindex="0"
                    role="button"
                    aria-label="Development and Integration"
                    data-title="Development &amp; Integration"
                    data-desc="Our team builds scalable websites, mobile applications, backend systems and API integrations using the right technologies."
                    data-color="#F59E0B"
                    data-bg="rgba(245,158,11,0.09)">
                    <span class="num-process">04</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <path d="M22 19L9 32l13 13M42 19l13 13-13 13"
                            stroke="#075F48" stroke-width="3.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M37 13L27 51"
                            stroke="#10B981" stroke-width="3.5"
                            stroke-linecap="round"></path>
                    </svg>

                    <span class="ind-node-label">Development</span>
                </div>

                <!-- STEP 5: QA and Testing -->
                <div class="ind-node"
                    id="inode-4"
                    tabindex="0"
                    role="button"
                    aria-label="Quality Assurance and Testing"
                    data-title="Quality Assurance &amp; Testing"
                    data-desc="We test functionality, performance, security, responsiveness and browser compatibility to deliver a reliable user experience."
                    data-color="#8B5CF6"
                    data-bg="rgba(139,92,246,0.09)">
                    <span class="num-process">05</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <path d="M32 7L51 14v15c0 13-8 22-19 28C21 51 13 42 13 29V14L32 7z"
                            fill="rgba(16,185,129,.10)"
                            stroke="#075F48" stroke-width="2.5"
                            stroke-linejoin="round"></path>
                        <path d="M22 31l7 7 14-15"
                            stroke="#10B981" stroke-width="3.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="ind-node-label">QA &amp; Testing</span>
                </div>

                <!-- STEP 6: Deployment -->
                <div class="ind-node"
                    id="inode-5"
                    tabindex="0"
                    role="button"
                    aria-label="Deployment and Launch"
                    data-title="Deployment &amp; Launch"
                    data-desc="We prepare production environments, configure deployments, verify the release and launch your product smoothly."
                    data-color="#06B6D4"
                    data-bg="rgba(6,182,212,0.09)">
                    <span class="num-process">06</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <path d="M32 7c10 8 16 18 16 29L32 49 16 36C16 25 22 15 32 7z"
                            fill="rgba(6,182,212,.10)"
                            stroke="#075F48" stroke-width="2.5"
                            stroke-linejoin="round"></path>
                        <circle cx="32" cy="27" r="6"
                            stroke="#10B981" stroke-width="2.5"></circle>
                        <path d="M21 43l-4 11 15-5 15 5-4-11"
                            stroke="#075F48" stroke-width="2.5"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="ind-node-label">Launch</span>
                </div>

                <!-- STEP 7: SEO and Growth -->
                <div class="ind-node"
                    id="inode-6"
                    tabindex="0"
                    role="button"
                    aria-label="SEO and Digital Growth"
                    data-title="SEO &amp; Digital Growth"
                    data-desc="We improve search visibility, strengthen your digital presence and support sustainable growth through SEO and digital marketing."
                    data-color="#059669"
                    data-bg="rgba(5,150,105,0.09)">
                    <span class="num-process">07</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <path d="M10 52V34h10v18M27 52V23h10v29M44 52V12h10v40"
                            fill="rgba(16,185,129,.12)"
                            stroke="#075F48" stroke-width="2.5"
                            stroke-linejoin="round"></path>
                        <path d="M10 25l14-9 12 4 17-12"
                            stroke="#10B981" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M44 8h9v9"
                            stroke="#10B981" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="ind-node-label">SEO &amp; Growth</span>
                </div>

                <!-- STEP 8: Continuous Improvement -->
                <div class="ind-node"
                    id="inode-7"
                    tabindex="0"
                    role="button"
                    aria-label="Monitoring and Continuous Improvement"
                    data-title="Monitoring &amp; Improvement"
                    data-desc="We monitor performance, maintain your product, analyse user feedback and deliver ongoing improvements as your business evolves."
                    data-color="#10B981"
                    data-bg="rgba(16,185,129,0.09)">
                    <span class="num-process">08</span>

                    <svg width="34" height="34" viewBox="0 0 64 64" fill="none">
                        <path d="M52 24A21 21 0 0 0 15 17L10 23"
                            stroke="#075F48" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M10 12v11h11"
                            stroke="#075F48" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M12 40a21 21 0 0 0 37 7l5-6"
                            stroke="#10B981" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M54 52V41H43"
                            stroke="#10B981" stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="ind-node-label">Improvement</span>
                </div>

                <!-- Interactive Process Popup -->
                <div class="ind-popup" id="ind-popup"
                    role="tooltip" aria-live="polite">
                    <div class="ind-popup-inner">
                        <div class="ind-popup-bar" id="ind-popup-bar"></div>
                        <div class="ind-popup-body">
                            <div class="ind-popup-head">
                                <div class="ind-popup-ico" id="ind-popup-ico"></div>
                                <h3 id="ind-popup-title">Discovery &amp; Research</h3>
                            </div>
                            <p id="ind-popup-desc">
                                We understand your business goals and project requirements.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Responsive Fallback Cards -->
            <div class="ind-grid-fallback">

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>01</span>
                    </div>
                    <h3>Discovery &amp; Research</h3>
                    <p>Understand your business goals, audience, challenges and requirements.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>02</span>
                    </div>
                    <h3>Strategy &amp; Planning</h3>
                    <p>Define the project scope, technical roadmap, milestones and priorities.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>03</span>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Create intuitive user journeys, engaging interfaces and responsive designs.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>04</span>
                    </div>
                    <h3>Development &amp; Integration</h3>
                    <p>Build scalable websites, applications, backend systems and integrations.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>05</span>
                    </div>
                    <h3>Quality Assurance &amp; Testing</h3>
                    <p>Validate functionality, performance, security and device compatibility.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>06</span>
                    </div>
                    <h3>Deployment &amp; Launch</h3>
                    <p>Prepare production environments and launch your product confidently.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>07</span>
                    </div>
                    <h3>SEO &amp; Digital Growth</h3>
                    <p>Improve search visibility and build a stronger digital presence.</p>
                    <div class="tilt-shine"></div>
                </article>

                <article class="ind-card">
                    <div class="ind-ico-wrap">
                        <span>08</span>
                    </div>
                    <h3>Monitoring &amp; Improvement</h3>
                    <p>Monitor performance, maintain the product and continuously improve it.</p>
                    <div class="tilt-shine"></div>
                </article>

            </div>
        </div>
    </section>

    <!-- ================= CONTACT US ================= -->
    <section class="contact-us-section" id="contactUs">
        <div class="contact-glow"></div>
        <div class="container-xxl">
            <div class="vv-contact-main">
                <!-- LEFT: CONTACT INTRO -->
                <div class="vv-contact-intro reveal">

                    <span class="vv-contact-eyebrow">
                        GET IN TOUCH
                    </span>

                    <h2>
                        Let's Build
                        <span class="vv-contact-gradient">
                            What's Next.
                        </span>
                    </h2>

                    <p>
                        Have an idea, a business challenge, or an AI opportunity?
                        Let's talk and turn your vision into something remarkable.
                    </p>

                    <a href="mailto:sales@visionvivante.com"
                        class="vv-contact-primary">
                        <span>Start a Conversation</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


                <!-- RIGHT: GLOBAL OFFICES -->
                <div class="vv-contact-offices reveal">

                    <div class="vv-offices-heading">
                        <div class="vv-offices-title">
                            <span class="vv-contact-eyebrow">
                                OUR OFFICES
                            </span>
                            <h3>
                                Global Presence,
                                <span>Local Collaboration</span>
                            </h3>
                        </div>
                        <p>
                            Connecting businesses with AI, technology and
                            product engineering across global markets.
                        </p>
                    </div>

                    <div class="vv-branches-grid">
                        <!-- INDIA -->
                        <div class="vv-branch-card vv-branch-india">
                            <div class="vv-branch-top">
                                <div class="vv-branch-flag">
                                    <img
                                        src="assets/images/indian-flag.svg"
                                        alt="India flag">
                                </div>
                            </div>

                            <div class="vv-branch-content">
                                <h4>India</h4>
                            </div>

                            <!-- India -->
                            <div class="vv-branch-footer">
                                <a href="tel:+91XXXXXXXXXX" class="vv-branch-phone">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>+91 XXXXX XXXXX</span>
                                </a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>

                        <!-- DUBAI -->
                        <div class="vv-branch-card vv-branch-dubai">

                            <div class="vv-branch-top">
                                <div class="vv-branch-flag">
                                    <img
                                        src="assets/images/ae-flag.svg"
                                        alt="United Arab Emirates flag">
                                </div>
                            </div>

                            <div class="vv-branch-content">
                                <h4>Dubai</h4>
                            </div>

                            <!-- Dubai, UAE -->
                            <div class="vv-branch-footer">
                                <a href="tel:+971XXXXXXXXX" class="vv-branch-phone">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>+971 XX XXX XXXX</span>
                                </a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>

                        <!-- AUSTRALIA -->
                        <div class="vv-branch-card vv-branch-australia">
                            <div class="vv-branch-top">
                                <div class="vv-branch-flag">
                                    <img
                                        src="assets/images/au-flag.svg"
                                        alt="Australia flag">
                                </div>
                            </div>

                            <div class="vv-branch-content">
                                <h4>Australia</h4>
                            </div>

                            <!-- Australia -->
                            <div class="vv-branch-footer">
                                <a href="tel:+61XXXXXXXXX" class="vv-branch-phone">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>+61 X XXXX XXXX</span>
                                </a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOTTOM SOCIAL BAR -->
            <div class="vv-contact-bottom">
                <div class="vv-contact-social-group">
                    <span class="vv-contact-social-label">
                        FOLLOW VISION VIVANTE
                    </span>

                    <div class="vv-contact-socials">
                        <a href="https://in.linkedin.com/company/vision-vivante"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="https://www.instagram.com/visionvivante/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="https://www.youtube.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="vv-contact-response">
                    <span></span>
                    We usually respond within 24 hours.
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/services.js"></script>
</body>

</html>