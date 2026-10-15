<?php
$pageTitle = 'Vision Vivante | AI-Powered Digital Engineering';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/contact-us.css" />
<link rel="stylesheet" href="assets/css/tafsol-inspired.css" />
HTML;
require __DIR__ . '/header.php';
?>

<section class="hero">
    <div class="container">

        <div class="contact-hero-visual reveal" aria-label="Let's build something remarkable">
            <div class="contact-visual-glow"></div>

            <div class="contact-visual-content">
                <span class="visual-kicker">Get in Touch</span>

                <div class="visual-icon">
                    <svg viewBox="0 0 64 64" fill="none"
                        stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="9" y="14" width="46" height="36" rx="5" />
                        <path d="M10 19l22 17 22-17" />
                        <circle cx="49" cy="13" r="7" fill="#38e6b1" stroke="none" />
                    </svg>
                </div>

                <h3>Let's create something <span>remarkable.</span></h3>
                <p>Ideas start with a conversation.</p>

                <div class="visual-line"></div>

                <div class="visual-tags">
                    <span>Web Development</span>
                    <span>AI Solutions</span>
                    <span>Digital Growth</span>
                </div>
            </div>

            <span class="visual-orbit orbit-a"></span>
            <span class="visual-orbit orbit-b"></span>
            <span class="visual-dot dot-a"></span>
            <span class="visual-dot dot-b"></span>
            <span class="visual-dot dot-c"></span>
        </div>

    </div>
</section>

<section class="contact-section" id="project">
    <div class="container">
        <div class="contact-intro reveal text-center">
            <span class="eyebrow">Contact us</span>
            <h2>Tell Us About<br><span class="gradient-text">Your Project</span></h2>
            <p>
                Share your requirements and our team will get back to you with the best solution for your business.
            </p>
        </div>
    </div>
    <div class="container contact-grid">
        <div class="contact-intro reveal">
            <div class="contact-info-col">
                <div class="contact-info-card reveal in-view" data-delay="0" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <span class="contact-info-icon"><i class="bi bi-envelope-paper-fill"></i></span>
                    <div>
                        <p class="contact-info-label">Email Us</p>
                        <a href="mailto:sales@visionvivante.com" class="contact-info-value">sales@visionvivante.com</a>
                    </div>
                </div>

                <div class="contact-info-card reveal in-view" data-delay=".1" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <span class="contact-info-icon"><i class="bi bi-telephone-fill"></i></span>
                    <div>
                        <p class="contact-info-label">Call Us</p>
                        <a href="tel:+919592493222" class="contact-info-value">
                            +91 9592493222
                        </a>
                    </div>
                </div>

                <div class="contact-info-card reveal in-view" data-delay=".2" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <span class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <div>
                        <p class="contact-info-label">Visit Us</p>
                        <p class="contact-info-value mb-0">
                            SCO 21, Second Floor, Swastik Vihar, Mansa Devi Complex,
                            Sector 5, Panchkula, Haryana 134114
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <form class="form-card reveal" id="contactForm">
                <div class="form-grid">
                    <div class="field mb-3">
                        <label class="form-label" for="fullName">Full Name *</label>
                        <input class="form-control" id="fullName" name="fullName" type="text" placeholder="Your full name" autocomplete="name"
                            required>
                    </div>
                    <div class="field mb-3">
                        <label class="form-label" for="email">Work Email *</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="you@company.com" autocomplete="email" required>
                    </div>
                    <div class="field mb-3">
                        <label class="form-label" for="company">Company Name</label>
                        <input class="form-control" id="company" name="company" type="text" placeholder="Your company" autocomplete="organization">
                    </div>
                    <div class="field mb-3">
                        <label class="form-label" for="service">Service Interested In *</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="" disabled selected>Select a service</option>
                            <option>Web Development</option>
                            <option>Mobile App Development</option>
                            <option>AI &amp; Automation</option>
                            <option>UI/UX Design</option>
                            <option>E-commerce Solutions</option>
                            <option>SEO &amp; Digital Marketing</option>
                            <option>Cloud &amp; API Integration</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="field full mb-3">
                        <label class="form-label" for="details">Project Details *</label>
                        <textarea class="form-control" id="details" name="details" placeholder="Tell us about your project, goals and requirements..."
                            required></textarea>
                    </div>
                </div>
                <div class="form-bottom">
                    <button class="btn" type="submit">Send Message
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M4 12h15M13 5l7 7-7 7" />
                        </svg>
                    </button>
                    <span class="privacy"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="5" y="10" width="14" height="11" rx="2" />
                            <path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3" />
                        </svg>We respect your privacy. Your information is safe with us.</span>
                </div>
                <div class="form-status" id="formStatus" role="status" aria-live="polite"></div>
            </form>
        </div>
    </div>
</section>

<section class="offices" id="offices">
    <div class="container office-grid">
        <div class="office-intro reveal">
            <span class="eyebrow">Our offices</span>
            <h2>Global Presence,<br><span class="gradient-text">Local Collaboration</span></h2>
            <p>Connecting businesses with technology and product engineering across global markets.</p>
        </div>
        <div class="vv-branches-grid">
            <!-- INDIA -->
            <div class="vv-branch-card vv-branch-india">
                <div class="vv-branch-top">
                    <div class="vv-branch-flag">
                        <img src="assets/images/indian-flag.svg" alt="India flag">
                    </div>
                    <div class="vv-branch-content">
                        <h4>India</h4>
                    </div>
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
                        <img src="assets/images/ae-flag.svg" alt="United Arab Emirates flag">
                    </div>
                    <div class="vv-branch-content">
                        <h4>Dubai</h4>
                    </div>
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
                        <img src="assets/images/au-flag.svg" alt="Australia flag">
                    </div>
                    <div class="vv-branch-content">
                        <h4>Australia</h4>
                    </div>
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
</section>

<?php
require __DIR__ . '/footer.php';
?>
<!-- ================= REDESIGN SCRIPTS ================= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/gsap.js"></script>

</body>

</html>