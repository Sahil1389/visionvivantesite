<?php
$pageTitle = 'Our Portfolio | Vision Vivante Portfolio';
require __DIR__ . '/header.php';
?>

<section class="hero-section" id="work-hero">
    <!-- <canvas id="vv-canvas"></canvas> -->

    <div class="container">
        <div class="row align-items-center work-hero-row-wrap">
            <div class="col-lg-6">
                <p class="eyebrow">
                    <span class="dot"></span>OUR PORTFOLIO
                </p>
                <h1 class="hero-heading">
                    <span class="word" id="w1">Projects That</span><br />
                    <span class="word grad-text" id="w2">Drive Real Impact</span>
                </h1>
                <p class="hero-lede text-white" id="lede">
                    Explore a selection of our recent projects. Each solution is
                    crafted with precision, innovation and a focus on delivering
                    measurable results.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="tech-float-wrap" id="techFloatWrap">
                    <canvas id="techNetworkCanvas" class="tech-network-canvas"></canvas>

                    <div class="tech-orbit-rings" aria-hidden="true">
                        <span class="orbit-ring r1"></span>
                        <span class="orbit-ring r2"></span>
                        <span class="orbit-ring r3"></span>
                    </div>

                    <div class="tech-float-badge" style="top:4%; left:24%;">
                        <i class="devicon-nodejs-plain colored"></i>
                    </div>
                    <div class="tech-float-badge" style="top:0%; left:54%;">
                        <i class="devicon-react-original colored"></i>
                    </div>
                    <div class="tech-float-badge" style="top:16%; left:80%;">
                        <i class="devicon-github-original"></i>
                    </div>
                    <div class="tech-float-badge tech-float-badge--lg" style="top:38%; left:44%;">
                        <i class="devicon-javascript-plain colored"></i>
                    </div>
                    <div class="tech-float-badge" style="top:48%; left:12%;">
                        <i class="devicon-laravel-plain colored"></i>
                    </div>
                    <div class="tech-float-badge" style="top:54%; left:78%;">
                        <i class="devicon-php-plain colored"></i>
                    </div>
                    <div class="tech-float-badge" style="top:70%; left:48%;">
                        <i class="devicon-wordpress-plain colored"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ WORK FILTERS START ============ -->
<!-- <section class="work-filters-section">
    <div class="container">
        <div class="work-filter-tabs justify-content-center mb-4">
            <button type="button" class="filter-pill active" data-filter-btn="all">All Projects</button>
            <button type="button" class="filter-pill" data-filter-btn="web">Web Applications</button>
            <button type="button" class="filter-pill" data-filter-btn="mobile">Mobile Applications</button>
            <button type="button" class="filter-pill" data-filter-btn="dashboard">Dashboards</button>
            <button type="button" class="filter-pill" data-filter-btn="crm-erp">CRM / ERP</button>
            <button type="button" class="filter-pill" data-filter-btn="other">Other Solutions</button>
        </div>
    </div>
</section> -->
<!-- ============ WORK FILTERS END ============ -->

<!-- ============ WORK GRID START ============ -->
<section class="work-grid-section">
    <div class="container">
        <div class="row g-4" id="projectsGrid">
            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/0c1a4a/ffffff?text=Real+Estate+CRM"
                            alt="Real Estate CRM Platform" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Real Estate CRM Platform</h3>
                        <p class="project-desc">A complete CRM solution for real estate agencies to manage leads,
                            properties, deals and clients.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="mobile">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/12297a/ffffff?text=FinTech+App"
                            alt="FinTech Mobile Application" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Mobile Application</span>
                        <h3 class="project-title">FinTech Mobile Application</h3>
                        <p class="project-desc">Secure and feature-rich mobile banking app with transactions, analytics
                            and real-time notifications.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#61dafb">
                                    <i class="devicon-react-original"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#6fbf73">
                                    <i class="devicon-nodejs-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#f0d951">
                                    <i class="devicon-javascript-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="dashboard">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/271887/ffffff?text=Analytics+Dashboard"
                            alt="AI-Powered Analytics Dashboard" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Dashboard</span>
                        <h3 class="project-title">AI-Powered Analytics Dashboard</h3>
                        <p class="project-desc">Advanced analytics dashboard with AI insights, real-time data
                            visualization and predictive reporting.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-python-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#61dafb">
                                    <i class="devicon-react-original"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#f0a93b">
                                    <i class="devicon-amazonwebservices-plain-wordmark"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/0c1a4a/ffffff?text=Job+%26+Worker+Mgmt"
                            alt="Job & Worker Management" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Job & Worker Management</h3>
                        <p class="project-desc">Manage jobs, workers, schedules and clients efficiently with real-time
                            updates and reports.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/12297a/ffffff?text=Client+%26+Schedule"
                            alt="Client & Schedule Management" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Client & Schedule Management</h3>
                        <p class="project-desc">Organize clients and their schedules seamlessly with smart allocation
                            and notifications.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#f0d951">
                                    <i class="devicon-javascript-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/271887/ffffff?text=Order+Management"
                            alt="Daily Order Management" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Daily Order Management</h3>
                        <p class="project-desc">Streamline order processing, tracking and delivery management in one
                            powerful system.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/0c1a4a/ffffff?text=Insurance+Mgmt"
                            alt="Insurance Management System" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Insurance Management System</h3>
                        <p class="project-desc">End-to-end insurance management with policy tracking, claims and client
                            management.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/12297a/ffffff?text=HRM+Application"
                            alt="Complete HRM Application" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Complete HRM Application</h3>
                        <p class="project-desc">HR management solution with attendance, payroll, leaves and employee
                            self-service.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/271887/ffffff?text=Planting+%26+Install"
                            alt="Planting & Installation Management" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Planting & Installation Management</h3>
                        <p class="project-desc">Manage projects, tasks, teams and installation workflows efficiently
                            from start to finish.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#f0d951">
                                    <i class="devicon-javascript-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 project-card-col" data-filter="web,crm-erp">
                <div class="project-card">
                    <a href="portfolio-detail.php" class="project-card-media d-block">
                        <img src="https://placehold.co/800x500/0c1a4a/ffffff?text=Billing+%26+Ledger"
                            alt="Billing & Customer Ledger CRM" loading="lazy" />
                        <span class="project-play-btn"><i class="bi bi-play-fill"></i></span>
                    </a>
                    <div class="project-card-body">
                        <span class="project-tag">Web Application</span>
                        <h3 class="project-title">Billing & Customer Ledger CRM</h3>
                        <p class="project-desc">Billing, invoicing and customer ledger management with reports and
                            analytics.</p>
                        <div class="project-card-footer">
                            <a href="portfolio-detail.php" class="btn-vv-primary">
                                View Project <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="tech-badges">
                                <span class="tech-badge" style="--tb-color:#8892d8">
                                    <i class="devicon-php-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#ff6b5e">
                                    <i class="devicon-laravel-plain"></i>
                                </span>
                                <span class="tech-badge" style="--tb-color:#5aa7d6">
                                    <i class="devicon-mysql-plain"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 project-card-col" data-filter="all">
                <div class="work-cta-card">
                    <canvas id="workCtaGlobe" class="work-cta-globe-canvas" aria-hidden="true"></canvas>
                    <p class="eyebrow mb-2">HAVE A PROJECT IN MIND?</p>
                    <h3>Let's Build Something <br /> <span class="grad-text">Amazing</span> Together</h3>
                    <p>We help startups and enterprises turn ideas into powerful digital solutions.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="index.php#contactUs" class="btn-vv-primary d-inline-flex align-items-center gap-2">
                            Start a Project <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="index.php#contactUs" class="btn-vv-outline d-inline-flex align-items-center gap-2">
                            Contact Us <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <p class="no-projects-message" id="noProjectsMsg">
            No projects in this category yet — check back soon, or
            <a href="index.php#contactUs" class="text-decoration-underline" style="color: var(--vv-cyan-400)">tell us
                about yours</a>.
        </p>
    </div>
</section>
<!-- ============ WORK GRID END ============ -->

<?php require __DIR__ . '/footer.php'; ?>

<!-- Threejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Bootstrap Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- GSAP -->
<script src="assets/js/gsap.js"></script>

<script src="assets/js/portfolio-listing.js"></script>

</body>

</html>