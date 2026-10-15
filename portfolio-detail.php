<?php
$pageTitle = 'Industrial Project Management Application | Vision Vivante';
$bodyAttrs = 'class="vv-portfolio-detail-page"';
$showPreloader = false;
require __DIR__ . '/header.php';
?>

<main class="vvpd-page">
  <canvas id="vvpd-bg-canvas" aria-hidden="true"></canvas>

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

  <section class="vvpd-cta-section">
    <div class="container">
      <div class="vvpd-cta vvpd-reveal">
        <div class="vvpd-cta-icon"><i class="bi bi-gear-wide-connected"></i></div>
        <div class="vvpd-cta-copy">
          <h2>Interested in a Similar Solution?</h2>
          <p>Let’s discuss how we can build a custom solution for your business.</p>
        </div>
        <a href="index.php#contactUs" class="btn-vv-primary">Get in Touch <i class="bi bi-arrow-right"></i></a>
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
      responsive: [
        { breakpoint: 992, settings: { slidesToShow: 2 } },
        { breakpoint: 576, settings: { slidesToShow: 1 } }
      ]
    });
  }
</script>
</body>

</html>