<?php
$pageTitle = 'Industrial Project Management Application | Vision Vivante';
$bodyAttrs = 'class="vv-portfolio-detail-page"';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/tafsol-inspired.css" />
<link rel="stylesheet" href="assets/css/portfolio-detail.css" />
HTML;
require __DIR__ . '/header.php';
?>

<main class="vvpd-page">

  <section class="vvpd-hero">
    <div class="container position-relative">
      <a class="vvpd-back vvpd-reveal" href="portfolio-listing.php">
        <i class="bi bi-arrow-left"></i>
        <span>Back to Projects</span>
      </a>
    </div>

    <div class="container">
      <div class="row align-items-center vvpd-hero-grid">
        <div class="col-lg-7 vvpd-copy">
          <span class="vvpd-pill vvpd-reveal">WEB APPLICATION</span>
          <h1 class="vvpd-title vvpd-reveal text-white">Industrial Project<br>Management <span>Application</span></h1>
          <p class="vvpd-lede vvpd-reveal">A simple and efficient solution to manage industrial projects, track
            progress, assign tasks, and keep your team in sync.</p>

          <div class="vvpd-tech vvpd-reveal" aria-label="Technology stack">
            <div class="vvpd-tech-item">
              <div class="vvpd-tech-icon laravel">
                <i class="devicon-laravel-plain"></i>
              </div>
              <span>Laravel</span>
            </div>

            <div class="vvpd-tech-item">
              <div class="vvpd-tech-icon php">
                <i class="devicon-php-plain"></i>
              </div>
              <span>PHP</span>
            </div>

            <div class="vvpd-tech-item">
              <div class="vvpd-tech-icon mysql">
                <i class="devicon-mysql-original"></i>
              </div>
              <span>MySQL</span>
            </div>
          </div>

          <div class="vvpd-actions vvpd-reveal">
            <a href="#screenshots" class="btn-vv-primary">Live Preview <i class="bi bi-arrow-right"></i></a>
            <a href="#screenshots" class="btn-vv-outline">View Details <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-5 vvpd-visual-col">
          <div class="vvpd-laptop-wrap vvpd-reveal" id="vvpdLaptop">
            <div class="vvpd-laptop-glow"></div>
            <div class="vvpd-laptop-screen-shell">
              <div class="vvpd-camera"></div>
              <div class="vvpd-screen">
                <img src="assets/images/full-page-homepage.png" alt="Industrial project management dashboard"
                  class="img-fluid" />
              </div>
            </div>
            <div class="vvpd-laptop-base"><span></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section class="vvpd-overview" id="overview">
    <div class="container">
      <div class="vvpd-overview-grid">
        <div class="vvpd-overview-copy">
          <span class="vvpd-eyebrow">OVERVIEW</span>
          <h2>A Centralized Platform<br>
            for Industrial <span>Project Management</span>
          </h2>
          <p>
            We developed a robust and user-friendly project management
            application tailored for industrial businesses. The platform
            helps teams plan, execute, and monitor projects with complete
            visibility and control.
          </p>
        </div>

        <div class="vvpd-feature-grid">
          <article class="vvpd-feature">
            <div class="vvpd-feature-icon"><i class="bi bi-folder2-open"></i></div>
            <h3>Task Management</h3>
            <p>Assign tasks, set deadlines and track progress.</p>
          </article>

          <article class="vvpd-feature">
            <div class="vvpd-feature-icon"><i class="bi bi-people-fill"></i></div>
            <h3>Team Collaboration</h3>
            <p>Keep your team aligned and productive.</p>
          </article>

          <article class="vvpd-feature">
            <div class="vvpd-feature-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
            <h3>Progress Tracking</h3>
            <p>Get real-time insights and project milestones.</p>
          </article>

          <article class="vvpd-feature">
            <div class="vvpd-feature-icon"><i class="bi bi-shield-check"></i></div>
            <h3>Better Control</h3>
            <p>Manage resources and deliver projects on time.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="vvpd-screens" id="screenshots">
    <div class="container position-relative">
      <h2 class="vvpd-section-title vvpd-reveal">Application Screenshots</h2>

      <div class="vvpd-carousel-wrap vvpd-reveal">
        <button class="vvpd-arrow vvpd-arrow-prev" type="button" aria-label="Previous screenshots"><i
            class="bi bi-chevron-left"></i></button>
        <div class="vvpd-cards" id="vvpdCards">
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Dashboard"
                alt="Dashboard screen" /></div>
            <h3>Dashboard</h3>
            <p>Get an overview of your projects and tasks.</p>
          </article>
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Project+Management"
                alt="Project management screen" /></div>
            <h3>Project Management</h3>
            <p>Create and track projects with ease.</p>
          </article>
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Task+Management"
                alt="Task management screen" /></div>
            <h3>Task Management</h3>
            <p>Assign tasks and monitor progress.</p>
          </article>
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Dashboard"
                alt="Dashboard screen" /></div>
            <h3>Dashboard</h3>
            <p>Get an overview of your projects and tasks.</p>
          </article>
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Project+Management"
                alt="Project management screen" /></div>
            <h3>Project Management</h3>
            <p>Create and track projects with ease.</p>
          </article>
          <article class="vvpd-shot-card">
            <div class="vvpd-shot-media"><img src="https://placehold.co/700x460/f4f6fb/0e1530?text=Task+Management"
                alt="Task management screen" /></div>
            <h3>Task Management</h3>
            <p>Assign tasks and monitor progress.</p>
          </article>
        </div>
        <button class="vvpd-arrow vvpd-arrow-next" type="button" aria-label="Next screenshots"><i
            class="bi bi-chevron-right"></i></button>
      </div>

      <div class="vvpd-dots" id="vvpdDots" aria-label="Screenshot navigation"></div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/portfolio-detail.js"></script>

<script>
  // ===================================================================
  // SCREENSHOT SLIDER — Slick carousel
  // ===================================================================
  if (window.jQuery && jQuery.fn.slick) {
    jQuery('#vvpdCards').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 500,
      arrows: true,
      prevArrow: jQuery('.vvpd-arrow-prev'),
      nextArrow: jQuery('.vvpd-arrow-next'),
      dots: true,
      appendDots: jQuery('#vvpdDots'),
      customPaging: () => '<button type="button" class="dot"></button>',
      responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  }
</script>
</body>

</html>