<?php
$pageTitle = 'Web Development Services | Vision Vivante';
$extraHead = <<<'HTML'
<!-- Hero animation CSS -->
    <link rel="stylesheet" href="assets/css/animation.css" />
    <!-- Web Development page CSS -->
    <link rel="stylesheet" href="assets/css/web-development.css" />
HTML;
$bodyAttrs = <<<'HTML'
style="
      background:
        radial-gradient(
          60% 50% at 82% 15%,
          rgba(2, 191, 225, 0.14) 0%,
          rgba(2, 191, 225, 0) 70%
        ),
        radial-gradient(
          55% 55% at 8% 90%,
          rgba(39, 24, 135, 0.35) 0%,
          rgba(39, 24, 135, 0) 70%
        ),
        #000;
    "
HTML;
require __DIR__ . '/header.php';
?>

<!-- ============ HERO ============ -->
<section class="vv-webdev-hero" id="home">
  <canvas class="vv-webdev-hero-canvas" id="vvWebdevHeroCanvas"></canvas>

  <div class="container">
    <div class="row align-items-center vv-webdev-hero-grid">
      <div class="col-lg-6">
        <p class="eyebrow" id="wdEyebrow">WEB DEVELOPMENT</p>
        <h1 class="hero-heading">
          <span class="word text-white">Powerful Web Development</span>
          <span class="word text-white">for Exceptional</span>
          <span class="word grad-text">Digital Experiences</span>
        </h1>
        <p class="hero-lede text-white" id="wdLede">
          We build fast, secure, and scalable websites and web
          applications that combine stunning front-end interfaces with
          robust back-end architecture. From idea to deployment, we
          deliver end-to-end solutions that drive growth and engagement.
        </p>
        <div class="vv-cta-row d-flex align-items-center gap-3" id="wdCtaRow">
          <a href="index.php#contactUs" class="btn-vv-primary">
            Let's Discuss Your Project <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="vv-webdev-stage" id="wdStage">
          <svg class="vv-webdev-link-svg" id="wdLinkSvg" viewBox="0 0 600 460">
            <defs>
              <linearGradient id="vvWebdevLinkGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#40C77E"></stop>
                <stop offset="100%" stop-color="#7b6ef0"></stop>
              </linearGradient>
            </defs>
            <path id="wdLinkPath" d="M 470 90 C 540 110, 560 140, 560 170"></path>
          </svg>

          <div class="vv-webdev-api-badge" id="wdApiBadge">API</div>
          <div class="vv-webdev-server" id="wdServer">
            <span></span><span></span><span></span><span></span>
          </div>

          <div class="vv-webdev-stage-inner" id="wdStageInner">
            <div class="vv-webdev-laptop" id="wdLaptop">
              <div class="vv-webdev-browser-bar">
                <span></span><span></span><span></span>
              </div>
              <div class="vv-webdev-laptop-screen">
                <div class="vv-webdev-eyebrow-line"></div>
                <h6>Innovative Digital Solutions That Drive Business Growth</h6>
                <p>Strategic, scalable, and secure web platforms built around your goals.</p>
                <span class="vv-webdev-mini-btn">Get Started</span>
                <div class="vv-webdev-mini-cards">
                  <span></span><span></span><span></span>
                </div>
              </div>
            </div>

            <div class="vv-webdev-phone" id="wdPhone">
              <div class="vv-webdev-phone-screen">
                <div class="vv-webdev-eyebrow-line"></div>
                <p>Innovative Digital Solutions That Drive Business Growth</p>
                <div class="vv-webdev-mini-cards">
                  <span></span><span></span><span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ HERO END ============ -->

<!-- ============ FEATURE STRIP ============ -->
<section class="vv-webdev-feature-strip">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-6 col-lg-3">
        <div class="vv-webdev-feature-item reveal">
          <span class="vv-webdev-feature-icon"><i class="bi bi-phone"></i></span>
          <div>
            <h6>Responsive UI</h6>
            <p>Pixel-perfect across devices</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="vv-webdev-feature-item reveal">
          <span class="vv-webdev-feature-icon"><i class="bi bi-shield-check"></i></span>
          <div>
            <h6>Full-Stack Architecture</h6>
            <p>Seamless front-end &amp; back-end integration</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="vv-webdev-feature-item reveal">
          <span class="vv-webdev-feature-icon"><i class="bi bi-lock"></i></span>
          <div>
            <h6>Secure &amp; Scalable</h6>
            <p>Built with security &amp; future-ready scalability</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="vv-webdev-feature-item reveal">
          <span class="vv-webdev-feature-icon"><i class="bi bi-rocket-takeoff"></i></span>
          <div>
            <h6>Performance Optimized</h6>
            <p>Lightning-fast websites for better conversions</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ FEATURE STRIP END ============ -->

<!-- ============ TECH STACK ============ -->
<section class="vv-webdev-tech-section">
  <canvas class="vv-webdev-tech-canvas" id="wdTechCanvas"></canvas>
  <div class="container">
    <p class="eyebrow text-center mb-2">TECHNOLOGIES WE WORK WITH</p>
    <h2 class="h1 text-white text-center mb-3 reveal">
      Web Development <span class="grad-text">Technologies</span>
    </h2>
    <p class="text-white text-center mx-auto reveal" style="max-width: 640px">
      Modern tools and frameworks to build powerful, secure, and scalable
      web solutions.
    </p>

    <div class="mt-5">
      <p class="vv-webdev-stack-label">FRONTEND</p>
      <div class="vv-webdev-stack-grid" id="wdFrontendGrid">
        <div class="vv-webdev-stack-card reveal"><i class="devicon-react-original colored"></i><span>React</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-angular-plain colored"></i><span>Angular</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-vuejs-plain colored"></i><span>Vue.js</span></div>
        <div class="vv-webdev-stack-card reveal"><i
            class="devicon-nextjs-original vv-icon-invert"></i><span>Next.js</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-html5-plain colored"></i><span>HTML5</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-css3-plain colored"></i><span>CSS3</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-javascript-plain colored"></i><span>JavaScript</span>
        </div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-typescript-plain colored"></i><span>TypeScript</span>
        </div>
      </div>

      <p class="vv-webdev-stack-label">BACKEND</p>
      <div class="vv-webdev-stack-grid" id="wdBackendGrid">
        <div class="vv-webdev-stack-card reveal"><i class="devicon-nodejs-plain colored"></i><span>Node.js</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-laravel-plain colored"></i><span>Laravel</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-php-plain colored"></i><span>PHP</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-wordpress-plain colored"></i><span>WordPress</span>
        </div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-mysql-plain colored"></i><span>MySQL</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-postgresql-plain colored"></i><span>PostgreSQL</span>
        </div>
        <div class="vv-webdev-stack-card reveal"><i class="devicon-mongodb-plain colored"></i><span>MongoDB</span></div>
        <div class="vv-webdev-stack-card reveal"><i class="bi bi-cloud-arrow-up-fill"
            style="color:#40C77E"></i><span>REST API</span></div>
      </div>
    </div>
  </div>
</section>
<!-- ============ TECH STACK END ============ -->

<!-- ============ PROCESS ============ -->
<section class="vv-webdev-process-section">
  <canvas class="vv-webdev-process-canvas" id="wdProcessCanvas"></canvas>
  <div class="container">
    <p class="eyebrow text-center mb-2">OUR WEB DEVELOPMENT PROCESS</p>
    <h2 class="h1 text-white text-center mb-3 reveal">
      A Clear Path <span class="grad-text">From Idea to Launch</span>
    </h2>

    <div class="vv-webdev-process-track" id="wdProcessTrack">
      <svg class="vv-webdev-process-line" id="wdProcessLine" viewBox="0 0 1000 60" preserveAspectRatio="none">
        <path id="wdProcessLinePath" d="M 20 30 L 980 30" fill="none" stroke="url(#wdProcessLineGrad)" stroke-width="2"
          stroke-dasharray="1" stroke-dashoffset="1" pathLength="1" />
        <defs>
          <linearGradient id="wdProcessLineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#40C77E"></stop>
            <stop offset="100%" stop-color="#7b6ef0"></stop>
          </linearGradient>
        </defs>
      </svg>

      <div class="vv-webdev-process-steps">
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">01</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-bullseye"></i></div>
          <span class="vv-webdev-process-label">Discovery &amp; Planning</span>
        </div>
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">02</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-palette2"></i></div>
          <span class="vv-webdev-process-label">UI/UX &amp; Frontend</span>
        </div>
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">03</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-hdd-stack-fill"></i></div>
          <span class="vv-webdev-process-label">Backend Development</span>
        </div>
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">04</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-plug-fill"></i></div>
          <span class="vv-webdev-process-label">API Integration</span>
        </div>
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">05</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-shield-check"></i></div>
          <span class="vv-webdev-process-label">Testing &amp; Optimization</span>
        </div>
        <div class="vv-webdev-process-step reveal">
          <span class="vv-webdev-process-num">06</span>
          <div class="vv-webdev-process-icon"><i class="bi bi-rocket-takeoff-fill"></i></div>
          <span class="vv-webdev-process-label">Deployment &amp; Support</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ PROCESS END ============ -->

<!-- ============ WHAT WE BUILD ============ -->
<section class="vv-webdev-build-section">
  <div class="container">
    <p class="eyebrow text-center mb-2">WHAT WE BUILD</p>
    <h2 class="h1 text-white text-center mb-3 reveal">
      End-to-End <span class="grad-text">Web Solutions</span> for Every
      Business Need
    </h2>

    <div class="vv-webdev-build-grid" id="wdBuildGrid">
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-globe2"></i></div>
        <h5>Corporate Websites</h5>
        <p>Professional, responsive websites that build trust and showcase your brand effectively.</p>
      </div>
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-code-slash"></i></div>
        <h5>Custom Web Applications</h5>
        <p>Tailored web apps that automate processes and solve complex business challenges.</p>
      </div>
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-cart-fill"></i></div>
        <h5>E-commerce Platforms</h5>
        <p>Secure, scalable online stores with seamless shopping and payment experiences.</p>
      </div>
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-wordpress"></i></div>
        <h5>CMS Websites</h5>
        <p>Easy-to-manage websites using WordPress and headless CMS solutions for flexibility.</p>
      </div>
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-cloud-fill"></i></div>
        <h5>SaaS Products</h5>
        <p>Scalable SaaS platforms with robust architecture for long-term business growth.</p>
      </div>
      <div class="vv-webdev-build-card reveal">
        <div class="vv-webdev-build-icon"><i class="bi bi-diagram-3-fill"></i></div>
        <h5>API &amp; Backend Systems</h5>
        <p>Powerful APIs and backend systems that integrate and drive your digital ecosystem.</p>
      </div>
    </div>
  </div>
</section>
<!-- ============ WHAT WE BUILD END ============ -->

<!-- ============ RECENT PROJECTS ============ -->
<section class="vv-webdev-portfolio-section" id="work">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 reveal">
      <div>
        <p class="eyebrow mb-2">RECENT WEB DEVELOPMENT PROJECTS</p>
        <h2 class="h1 text-white mb-0">
          Our Latest <span class="grad-text">Success Stories</span>
        </h2>
      </div>
      <a href="portfolio-listing.php" class="fw-semibold text-decoration-none d-inline-flex align-items-center gap-2"
        style="color:#40C77E">
        View All Projects <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="vv-webdev-portfolio-grid">
      <div class="vv-webdev-portfolio-card reveal">
        <div class="vv-webdev-portfolio-thumb">
          <img src="https://placehold.co/400x260/0d1442/39b6f0?text=Fintech+Dashboard" alt="Fintech Dashboard Platform"
            class="img-fluid" />
        </div>
        <div class="vv-webdev-portfolio-body">
          <h6>Fintech Dashboard Platform</h6>
          <p>Web Application · React, Node.js, MongoDB</p>
        </div>
      </div>
      <div class="vv-webdev-portfolio-card reveal">
        <div class="vv-webdev-portfolio-thumb">
          <img src="https://placehold.co/400x260/141033/7b6ef0?text=E-commerce+Store" alt="E-commerce Store"
            class="img-fluid" />
        </div>
        <div class="vv-webdev-portfolio-body">
          <h6>E-commerce Store</h6>
          <p>Web Application · Next.js, Stripe, PostgreSQL</p>
        </div>
      </div>
      <div class="vv-webdev-portfolio-card reveal">
        <div class="vv-webdev-portfolio-thumb">
          <img src="https://placehold.co/400x260/0a0f2e/02bfe1?text=SaaS+Analytics" alt="SaaS Analytics Platform"
            class="img-fluid" />
        </div>
        <div class="vv-webdev-portfolio-body">
          <h6>SaaS Analytics Platform</h6>
          <p>Web Application · Vue.js, Laravel, MySQL</p>
        </div>
      </div>
      <div class="vv-webdev-portfolio-card reveal">
        <div class="vv-webdev-portfolio-thumb">
          <img src="https://placehold.co/400x260/271887/ffffff?text=Corporate+Website" alt="Corporate Website"
            class="img-fluid" />
        </div>
        <div class="vv-webdev-portfolio-body">
          <h6>Corporate Website</h6>
          <p>WordPress Development · PHP, MySQL</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ RECENT PROJECTS END ============ -->

<!-- ============ CTA BANNER ============ -->
<section>
  <div class="container">
    <div class="vv-webdev-cta-banner reveal">
      <canvas class="vv-webdev-cta-canvas" id="wdCtaCanvas"></canvas>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8 d-flex align-items-center gap-3">
            <span class="vv-webdev-cta-icon"><i class="bi bi-rocket-takeoff-fill"></i></span>
            <div>
              <h3>Have a web project in mind? Let's <span style="color:#7fe3ff">Build Something Great.</span></h3>
              <p>Tell us your idea and we'll turn it into a powerful digital solution that drives real results for your
                business.</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex justify-content-lg-end">
            <a href="index.php#contactUs" class="btn-vv-white d-inline-flex align-items-center gap-2">
              Let's Discuss Your Project <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ CTA BANNER END ============ -->

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

<script>
  /* ============================================================
WEB DEVELOPMENT PAGE — 3D / motion enhancements
- Hero: quiet drifting node field behind a CSS 3D laptop + phone
 mockup, with mouse-parallax tilt and an animated dashed link
 to a small "server" glyph (genuine data-flow visual, not
 decoration for its own sake).
- Tech section: an orbiting three.js ring behind the stack
 grids, plus a staggered card entrance.
- Process section: a drifting particle field behind the 6-step
 track, with a scroll-scrubbed connector line across the
 sequence.
- CTA banner: a soft moving particle wash behind the gradient
 panel.
All scenes respect prefers-reduced-motion and are skipped
gracefully if three.js / GSAP fail to load.
============================================================ */
  (function () {
    var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var hasThree = typeof THREE !== "undefined";
    var hasGSAP = typeof gsap !== "undefined";

    if (hasGSAP && typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);
    }

    /* ============================================================
 HERO — CSS 3D device stage + canvas node field + link line
 ============================================================ */
    (function heroScene() {
      var stage = document.getElementById("wdStage");
      var stageInner = document.getElementById("wdStageInner");
      var laptop = document.getElementById("wdLaptop");
      var phone = document.getElementById("wdPhone");
      var badge = document.getElementById("wdApiBadge");
      var server = document.getElementById("wdServer");
      var linkPath = document.getElementById("wdLinkPath");

      if (hasGSAP) {
        var tl = gsap.timeline({ defaults: { ease: "power3.out" } });
        tl.from("#wdEyebrow", { opacity: 0, y: 14, duration: 0.6 })
          .from(".hero-heading .word", { opacity: 0, y: 22, duration: 0.8, stagger: 0.08 }, "-=0.35")
          .from("#wdLede", { opacity: 0, y: 18, duration: 0.7 }, "-=0.5")
          .from("#wdCtaRow", { opacity: 0, y: 16, duration: 0.6 }, "-=0.45")
          .from(laptop, { opacity: 0, x: 40, duration: 0.9, ease: "power2.out" }, "-=0.6")
          .from(phone, { opacity: 0, y: 30, duration: 0.8, ease: "power2.out" }, "-=0.55")
          .from([badge, server], { opacity: 0, scale: 0.6, duration: 0.6, stagger: 0.1 }, "-=0.4");

        if (reduceMotion) tl.progress(1);
      }

      // gentle float for badge + server
      if (hasGSAP && !reduceMotion) {
        gsap.to(badge, { y: -8, duration: 2.2, ease: "sine.inOut", yoyo: true, repeat: -1 });
        gsap.to(server, { y: 8, duration: 2.6, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.3 });
      }

      // mouse parallax tilt on the 3D stage
      if (stage && stageInner && !reduceMotion) {
        var rotX = 4, rotY = -14, targetX = rotX, targetY = rotY;
        stage.addEventListener("mousemove", function (e) {
          var r = stage.getBoundingClientRect();
          var px = (e.clientX - r.left) / r.width - 0.5;
          var py = (e.clientY - r.top) / r.height - 0.5;
          targetY = -14 + px * 14;
          targetX = 4 - py * 10;
        });
        stage.addEventListener("mouseleave", function () {
          targetX = 4;
          targetY = -14;
        });
        (function tick() {
          requestAnimationFrame(tick);
          rotX += (targetX - rotX) * 0.06;
          rotY += (targetY - rotY) * 0.06;
          if (laptop) laptop.style.transform = "rotateY(" + rotY + "deg) rotateX(" + rotX + "deg) rotateZ(-1deg)";
          if (phone) phone.style.transform = "rotateY(" + (rotY * 0.7) + "deg) rotateX(" + (rotX * 0.5) + "deg) translateZ(60px)";
        })();
      }

      // animated dashed line pulsing from badge toward server
      if (linkPath && hasGSAP && !reduceMotion) {
        gsap.set(linkPath, { strokeDashoffset: 0 });
        gsap.to(linkPath, {
          strokeDashoffset: -22,
          duration: 1.1,
          ease: "none",
          repeat: -1,
        });
      }
    })();

    /* ============================================================
 HERO BACKGROUND — quiet drifting node field
 ============================================================ */
    (function heroBackdrop() {
      var canvas = document.getElementById("vvWebdevHeroCanvas");
      var section = document.querySelector(".vv-webdev-hero");
      if (!canvas || !section || reduceMotion) return;

      var ctx = canvas.getContext("2d");
      var w, h, nodes;
      var NODE_COUNT = window.innerWidth < 768 ? 26 : 50;
      var LINK_DIST = 130;

      function resize() {
        w = canvas.width = section.clientWidth;
        h = canvas.height = section.clientHeight;
      }
      resize();
      window.addEventListener("resize", resize);

      nodes = Array.from({ length: NODE_COUNT }, function () {
        return {
          x: Math.random() * w,
          y: Math.random() * h,
          vx: (Math.random() - 0.5) * 0.18,
          vy: (Math.random() - 0.5) * 0.18,
        };
      });

      function tick() {
        requestAnimationFrame(tick);
        ctx.clearRect(0, 0, w, h);

        nodes.forEach(function (n) {
          n.x += n.vx;
          n.y += n.vy;
          if (n.x < 0 || n.x > w) n.vx *= -1;
          if (n.y < 0 || n.y > h) n.vy *= -1;
        });

        for (var i = 0; i < nodes.length; i++) {
          for (var j = i + 1; j < nodes.length; j++) {
            var dx = nodes[i].x - nodes[j].x;
            var dy = nodes[i].y - nodes[j].y;
            var dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < LINK_DIST) {
              ctx.strokeStyle = "rgba(2,191,225," + 0.12 * (1 - dist / LINK_DIST) + ")";
              ctx.lineWidth = 1;
              ctx.beginPath();
              ctx.moveTo(nodes[i].x, nodes[i].y);
              ctx.lineTo(nodes[j].x, nodes[j].y);
              ctx.stroke();
            }
          }
          ctx.fillStyle = "rgba(79,214,232,0.4)";
          ctx.beginPath();
          ctx.arc(nodes[i].x, nodes[i].y, 1.4, 0, Math.PI * 2);
          ctx.fill();
        }
      }
      tick();
    })();

    /* ============================================================
 TECH STACK SECTION — orbiting ring of nodes behind the stack
 grids, plus a staggered card entrance.
 ============================================================ */
    (function techScene() {
      var canvas = document.getElementById("wdTechCanvas");
      var section = document.querySelector(".vv-webdev-tech-section");
      if (!canvas || !section || !hasThree) return;

      var scene = new THREE.Scene();
      var w = section.clientWidth, h = section.clientHeight;
      var camera = new THREE.PerspectiveCamera(45, w / h, 0.1, 100);
      camera.position.set(0, 0.4, 8.5);

      var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(w, h);
      renderer.setClearColor(0x000000, 0);

      var ring = new THREE.Group();
      scene.add(ring);

      var colors = [0x02bfe1, 0x7b6ef0, 0x39b6f0, 0x2b57e8, 0x271887];
      var radius = 4.2;
      var nodeCount = 22;
      for (var i = 0; i < nodeCount; i++) {
        var angle = (i / nodeCount) * Math.PI * 2;
        var geo = new THREE.IcosahedronGeometry(0.05 + (i % 3) * 0.02, 0);
        var mat = new THREE.MeshBasicMaterial({ color: colors[i % colors.length], transparent: true, opacity: 0.7 });
        var mesh = new THREE.Mesh(geo, mat);
        mesh.position.set(Math.cos(angle) * radius, Math.sin(angle * 1.4) * 1.1, Math.sin(angle) * radius);
        ring.add(mesh);
      }

      var wireGeo = new THREE.TorusGeometry(radius, 0.01, 8, 64);
      var wireMat = new THREE.MeshBasicMaterial({ color: 0x2b57e8, transparent: true, opacity: 0.16 });
      var wire = new THREE.Mesh(wireGeo, wireMat);
      wire.rotation.x = Math.PI / 2.4;
      ring.add(wire);

      var clock = new THREE.Clock();
      function animate() {
        requestAnimationFrame(animate);
        var t = clock.getElapsedTime();
        ring.rotation.y = t * 0.14;
        ring.rotation.x = Math.sin(t * 0.2) * 0.1;
        renderer.render(scene, camera);
      }
      if (!reduceMotion) animate();
      else renderer.render(scene, camera);

      window.addEventListener("resize", function () {
        w = section.clientWidth;
        h = section.clientHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
      });

      // Card entrance is already handled by the site-wide .reveal +
      // IntersectionObserver system (main.js) — the stack cards carry
      // .reveal, so no separate GSAP opacity tween is added here.
      // (A duplicate gsap.from() on a .reveal element fights the
      // .reveal.in-view CSS rule: GSAP snapshots the element's
      // opacity — 0, since .reveal starts hidden — as the tween's own
      // end value, then leaves that as a permanent inline style that
      // outranks the CSS class, so the element never becomes visible.)
    })();

    /* ============================================================
 PROCESS SECTION — drifting particle field + scroll-scrubbed
 connector line across the six steps.
 ============================================================ */
    (function processScene() {
      var canvas = document.getElementById("wdProcessCanvas");
      var section = document.querySelector(".vv-webdev-process-section");
      if (!canvas || !section || !hasThree) return;

      var scene = new THREE.Scene();
      var w = section.clientWidth, h = section.clientHeight;
      var camera = new THREE.PerspectiveCamera(50, w / h, 0.1, 100);
      camera.position.set(0, 0, 6);

      var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(w, h);
      renderer.setClearColor(0x000000, 0);

      var count = window.innerWidth < 768 ? 60 : 130;
      var geo = new THREE.BufferGeometry();
      var pos = new Float32Array(count * 3);
      for (var i = 0; i < count; i++) {
        pos[i * 3] = (Math.random() - 0.5) * 13;
        pos[i * 3 + 1] = (Math.random() - 0.5) * 5;
        pos[i * 3 + 2] = (Math.random() - 0.5) * 4;
      }
      geo.setAttribute("position", new THREE.BufferAttribute(pos, 3));
      var mat = new THREE.PointsMaterial({ color: 0x39b6f0, size: 0.035, transparent: true, opacity: 0.5 });
      var points = new THREE.Points(geo, mat);
      scene.add(points);

      var clock = new THREE.Clock();
      function animate() {
        requestAnimationFrame(animate);
        var t = clock.getElapsedTime();
        var arr = geo.attributes.position.array;
        for (var i = 0; i < count; i++) {
          arr[i * 3] += Math.sin(t * 0.3 + i) * 0.0006;
          arr[i * 3 + 1] += Math.cos(t * 0.25 + i) * 0.0005;
        }
        geo.attributes.position.needsUpdate = true;
        points.rotation.y = t * 0.03;
        renderer.render(scene, camera);
      }
      if (!reduceMotion) animate();
      else renderer.render(scene, camera);

      window.addEventListener("resize", function () {
        w = section.clientWidth;
        h = section.clientHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
      });

      if (hasGSAP) {
        var linePath = document.getElementById("wdProcessLinePath");
        if (linePath) {
          gsap.set(linePath, { strokeDashoffset: 1 });
          gsap.to(linePath, {
            strokeDashoffset: 0,
            ease: "none",
            scrollTrigger: {
              trigger: "#wdProcessTrack",
              start: "top 75%",
              end: "bottom 60%",
              scrub: 0.6,
            },
          });
        }
        // Step entrance uses the site-wide .reveal system (each step
        // carries .reveal already) — intentionally no GSAP opacity
        // tween here, see note in techScene() above for why that
        // would conflict and leave the steps stuck invisible.
      }
    })();

    /* ============================================================
 CTA BANNER — soft moving particle wash behind the gradient
 panel.
 ============================================================ */
    (function ctaScene() {
      var canvas = document.getElementById("wdCtaCanvas");
      var section = document.querySelector(".vv-webdev-cta-banner");
      if (!canvas || !section || !hasThree) return;

      var scene = new THREE.Scene();
      var w = section.clientWidth, h = section.clientHeight;
      var camera = new THREE.PerspectiveCamera(50, w / h, 0.1, 100);
      camera.position.set(0, 0, 6);

      var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(w, h);
      renderer.setClearColor(0x000000, 0);

      var count = window.innerWidth < 768 ? 40 : 80;
      var geo = new THREE.BufferGeometry();
      var pos = new Float32Array(count * 3);
      for (var i = 0; i < count; i++) {
        pos[i * 3] = (Math.random() - 0.5) * 12;
        pos[i * 3 + 1] = (Math.random() - 0.5) * 4;
        pos[i * 3 + 2] = (Math.random() - 0.5) * 3;
      }
      geo.setAttribute("position", new THREE.BufferAttribute(pos, 3));
      var mat = new THREE.PointsMaterial({ color: 0xffffff, size: 0.03, transparent: true, opacity: 0.35 });
      var points = new THREE.Points(geo, mat);
      scene.add(points);

      var clock = new THREE.Clock();
      function animate() {
        requestAnimationFrame(animate);
        var t = clock.getElapsedTime();
        points.rotation.y = t * 0.04;
        points.position.x = Math.sin(t * 0.15) * 0.4;
        renderer.render(scene, camera);
      }
      if (!reduceMotion) animate();
      else renderer.render(scene, camera);

      window.addEventListener("resize", function () {
        w = section.clientWidth;
        h = section.clientHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
      });
    })();
  })();
</script>
</body>

</html>