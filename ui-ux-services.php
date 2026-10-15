<?php
$pageTitle = 'Vision Vivante | Enterprise Software & Digital Solutions';
$extraHead = <<<'HTML'
<!-- Hero animation CSS -->
    <link rel="stylesheet" href="assets/css/animation.css" />
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

<section class="vv-uiux-hero" id="home">
  <canvas class="vv-hero-canvas" id="vvHeroCanvas"></canvas>

  <div class="container vv-hero-inner">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <p class="eyebrow" id="vvEyebrow">UI / UX Design Services</p>
        <h1 class="hero-heading">
          <span class="word text-white">Interfaces people</span>
          <span class="word grad-text">actually enjoy using.</span>
        </h1>
        <p class="hero-lede text-white" id="vvLede">
          From the first wireframe to a shipped design system, we turn dense
          enterprise workflows into interfaces your users pick up in minutes
          — not manuals.
        </p>
        <div class="vv-cta-row d-flex align-items-center gap-3" id="vvCtaRow">
          <a href="#contactUs" class="btn-vv-primary">
            Start a Design Project <i class="bi bi-arrow-right"></i>
          </a>
          <a href="#work" class="btn-vv-primary">
            View Our Work <i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-5 vv-visual-col" id="vvVisualCol">
        <!-- Three.js canvas mounts here -->
      </div>
    </div>
  </div>
</section>

<section class="vv-uiux-tech-section">
  <canvas class="vv-tech-canvas" id="vvTechCanvas"></canvas>
  <div class="container position-relative">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <p class="eyebrow mb-2">OUR TOOLKIT</p>
        <h2 class="h1 text-white mb-3 reveal">
          UI/UX Design Solutions for Your Brand
        </h2>
        <p class="text-white reveal">
          UI/UX design is like the backbone of any mobile app, software, or
          website. As a leading UI/UX design company, we specialize in
          crafting visually stunning and highly functional apps that users
          love to explore and that make your app stand out in the market.
          Are you tired of the same old design with no enhanced ability and
          the boring formats followed? So, let our agency help you embark on
          your UI/UX.
        </p>
      </div>

      <div class="col-lg-6">
        <div class="vv-tool-grid" id="vvToolGrid">
          <div class="vv-tool-card reveal">
            <img src="assets/images/ps-icon.png" alt="Photoshop" class="img-fluid" />
            <span>Photoshop</span>
          </div>

          <div class="vv-tool-card reveal">
            <img src="assets/images/ai-icon.png" alt="Illustrator" class="img-fluid" />
            <span>Illustrator</span>
          </div>

          <div class="vv-tool-card reveal">
            <img src="assets/images/html-icon.png" alt="HTML" class="img-fluid" />
            <span>HTML</span>
          </div>

          <div class="vv-tool-card reveal">
            <img src="assets/images/css-icon.png" alt="CSS" class="img-fluid" />
            <span>CSS</span>
          </div>

          <div class="vv-tool-card reveal">
            <img src="assets/images/js-icon.png" alt="Javascript" class="img-fluid" />
            <span>Javascript</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vv-uiux-process-section">
  <canvas class="vv-process-canvas" id="vvProcessCanvas"></canvas>
  <div class="container position-relative">
    <p class="eyebrow text-center mb-2">HOW WE WORK</p>
    <h2 class="h1 text-white text-center mb-3 reveal">
      UX/UI Designing Process
    </h2>
    <p class="text-white text-center mx-auto reveal" style="max-width: 720px">
      As the Best UX/UI design company working with client offshore , we
      believe exceptional design goes deeper than aesthetics. We prioritize
      user-centric principles, seamlessly blending creative power with your
      business goals. Every element we design contributes to your success
      and resonates with your target audience, from the initial wireframes
      and prototypes to the final polished interfaces. We ensure your users
      can effortlessly navigate and appreciate the digital world you've
      created.
    </p>

    <div class="vv-process-track" id="vvProcessTrack">
      <svg class="vv-process-line" id="vvProcessLine" viewBox="0 0 1000 60" preserveAspectRatio="none">
        <path id="vvProcessLinePath" d="M 20 30 L 980 30" fill="none" stroke="url(#vvProcessLineGrad)" stroke-width="2"
          stroke-dasharray="1" stroke-dashoffset="1" pathLength="1" />
        <defs>
          <linearGradient id="vvProcessLineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#40C77E"></stop>
            <stop offset="100%" stop-color="#7b6ef0"></stop>
          </linearGradient>
        </defs>
      </svg>

      <div class="vv-process-steps">
        <div class="vv-process-step reveal">
          <span class="vv-process-num">01</span>
          <div class="vv-process-icon">
            <img src="assets/images/process-img1.png" alt="Project Definition" class="img-fluid" />
          </div>
          <span class="vv-process-label">Project Definition</span>
        </div>

        <div class="vv-process-step reveal">
          <span class="vv-process-num">02</span>
          <div class="vv-process-icon">
            <img src="assets/images/process-img2.png" alt="Research & Analysis" class="img-fluid" />
          </div>
          <span class="vv-process-label">Research & Analysis</span>
        </div>

        <div class="vv-process-step reveal">
          <span class="vv-process-num">03</span>
          <div class="vv-process-icon">
            <img src="assets/images/process-img3.png" alt="Sketching" class="img-fluid" />
          </div>
          <span class="vv-process-label">Sketching</span>
        </div>

        <div class="vv-process-step reveal">
          <span class="vv-process-num">04</span>
          <div class="vv-process-icon">
            <img src="assets/images/process-img4.png" alt="Mockups & Prototyping" class="img-fluid" />
          </div>
          <span class="vv-process-label">Mockups & Prototyping</span>
        </div>

        <div class="vv-process-step reveal">
          <span class="vv-process-num">05</span>
          <div class="vv-process-icon">
            <img src="assets/images/process-img5.png" alt="Delivery" class="img-fluid" />
          </div>
          <span class="vv-process-label">Delivery</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="testimonials-section-wrap">
  <canvas id="testimonials-bg-canvas"></canvas>
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4 reveal">
      <div>
        <p class="eyebrow mb-2">TESTIMONIALS</p>
        <h2 class="section-title text-white">What Our Clients Say</h2>
      </div>
    </div>
    <div class="testimonial-container">
      <div class="testimonial-grid">
        <div class="image-container" id="image-container"></div>
        <div class="testimonial-content">
          <div>
            <h3 class="name" id="name"></h3>
            <p class="designation" id="designation"></p>
            <p class="quote" id="quote"></p>
          </div>
          <div class="pagination-dots" id="pagination-dots"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ TESTIMONIALS END ============ -->

<!-- ============ CONTACT US ============ -->
<section class="contact-us-section" id="contactUs">
  <canvas id="contact-bg-canvas"></canvas>
  <div class="contact-glow"></div>

  <div class="container">
    <div class="contact-header text-center reveal">
      <p class="eyebrow mb-2">GET IN TOUCH</p>
      <h2 class="section-title text-white mb-3">
        Let's Build <span class="grad-text">Something Great.</span>
      </h2>
      <p class="text-gray mx-auto" style="max-width: 560px">
        Have a project in mind? Tell us about it and our team will get back
        to you within one business day.
      </p>
    </div>

    <div class="contact-grid">
      <!-- LEFT: Info cards -->
      <div class="contact-info-col">
        <div class="contact-info-card reveal" data-delay="0">
          <span class="contact-info-icon"><i class="bi bi-envelope-paper-fill"></i></span>
          <div>
            <p class="contact-info-label">Email Us</p>
            <a href="mailto:sales@visionvivante.com" class="contact-info-value">sales@visionvivante.com</a>
          </div>
        </div>

        <div class="contact-info-card reveal" data-delay=".1">
          <span class="contact-info-icon"><i class="bi bi-telephone-fill"></i></span>
          <div>
            <p class="contact-info-label">Call Us</p>
            <a href="tel:+919592493222" class="contact-info-value">
              +91 9592493222
            </a>
          </div>
        </div>

        <div class="contact-info-card reveal" data-delay=".2">
          <span class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></span>
          <div>
            <p class="contact-info-label">Visit Us</p>
            <p class="contact-info-value mb-0">
              SCO 21, Second Floor, Swastik Vihar, Mansa Devi Complex,
              Sector 5, Panchkula, Haryana 134114
            </p>
          </div>
        </div>

        <div class="contact-socials reveal" data-delay=".3">
          <a href="https://www.facebook.com/visionvivante/" target="_blank" class="contact-social-icon">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://in.linkedin.com/company/vision-vivante" target="_blank" class="contact-social-icon">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/visionvivante/" target="_blank" class="contact-social-icon">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="contact-form-col reveal" data-delay=".15">
        <form class="contact-form" id="contactForm"  method="POST">
          <div class="contact-form-status" id="contactStatus"></div>

          <div class="row g-3">
            <div class="col-md-6">
              <div class="vv-field">
                <input type="text" id="cf-name" name="name" placeholder=" " required />
                <label for="cf-name">Your Name</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="vv-field">
                <input type="email" id="cf-email" name="email" placeholder=" " required />
                <label for="cf-email">Email Address</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="vv-field">
                <input type="text" id="cf-phone" name="phone" placeholder=" " />
                <label for="cf-phone">Phone Number</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="vv-field">
                <select id="cf-service" name="service" required>
                  <option value="" disabled selected></option>
                  <option>Web Development</option>
                  <option>AI Development</option>
                  <option>Mobile App Development</option>
                  <option>UI/UX Design</option>
                  <option>IoT Development</option>
                  <option>Quality Assurance</option>
                </select>
                <label for="cf-service">Service Needed</label>
              </div>
            </div>

            <div class="col-12">
              <div class="vv-field">
                <textarea id="cf-message" name="message" rows="4" placeholder=" " required></textarea>
                <label for="cf-message">Tell us about your project</label>
              </div>
            </div>
          </div>

          <button type="submit" class="btn-vv-primary contact-submit-btn d-inline-flex align-items-center gap-2 mt-4">
            <span class="btn-label">Send Message</span>
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- ============ CONTACT US END ============ -->

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

<script>
  /* ============================================================
Section-level 3D / motion enhancements
- Hero: existing floating UI-panel scene (unchanged) + a
 lightweight animated node field on the background canvas.
- Toolkit section: an orbiting three.js ring behind the tool
 cards, plus a single staggered entrance for the cards.
- Process section: a slow drifting particle field behind the
 step track, plus a scroll-scrubbed line draw connecting the
 five steps (the content is a genuine sequence, so the
 connecting line and numbering earn their place).
All scenes respect prefers-reduced-motion and are skipped
gracefully if three.js / GSAP fail to load.
============================================================ */

  (function () {
    var reduceMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;
    var hasThree = typeof THREE !== "undefined";
    var hasGSAP = typeof gsap !== "undefined";

    if (hasGSAP && typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);
    }

    /* ============================================================
 HERO — floating UI panels (original scene, unchanged)
 ============================================================ */
    (function heroScene() {
      var visualCol = document.getElementById("vvVisualCol");
      if (!visualCol || !hasThree) return;

      function makeScreenTexture(opts) {
        var w = 512,
          h = 640;
        var c = document.createElement("canvas");
        c.width = w;
        c.height = h;
        var ctx = c.getContext("2d");

        ctx.fillStyle = opts.bg;
        roundRect(ctx, 0, 0, w, h, 28);
        ctx.fill();

        ctx.strokeStyle = "rgba(255,255,255,0.10)";
        ctx.lineWidth = 2;
        roundRect(ctx, 1, 1, w - 2, h - 2, 28);
        ctx.stroke();

        ctx.fillStyle = opts.accent;
        ctx.beginPath();
        ctx.arc(48, 48, 8, 0, Math.PI * 2);
        ctx.fill();
        ctx.fillStyle = "rgba(255,255,255,0.18)";
        ctx.beginPath();
        ctx.arc(76, 48, 8, 0, Math.PI * 2);
        ctx.fill();
        ctx.beginPath();
        ctx.arc(104, 48, 8, 0, Math.PI * 2);
        ctx.fill();

        ctx.fillStyle = "rgba(255,255,255,0.22)";
        ctx.fillRect(40, 96, 220, 22);
        ctx.fillStyle = "rgba(255,255,255,0.10)";
        ctx.fillRect(40, 128, 320, 14);
        ctx.fillRect(40, 150, 260, 14);

        for (var i = 0; i < opts.blocks; i++) {
          var y = 210 + i * 98;
          ctx.fillStyle = opts.blockFill;
          roundRect(ctx, 40, y, w - 80, 74, 14);
          ctx.fill();
          ctx.fillStyle = "rgba(255,255,255,0.16)";
          ctx.fillRect(64, y + 22, 140, 12);
          ctx.fillRect(64, y + 44, 90, 10);
          ctx.fillStyle = opts.accent;
          roundRect(ctx, w - 140, y + 22, 76, 30, 8);
          ctx.fill();
        }

        ctx.strokeStyle = opts.accent;
        ctx.lineWidth = 3;
        ctx.setLineDash([6, 8]);
        roundRect(ctx, 40, h - 96, w - 80, 56, 16);
        ctx.stroke();
        ctx.setLineDash([]);

        var tex = new THREE.CanvasTexture(c);
        tex.needsUpdate = true;
        return tex;
      }

      function roundRect(ctx, x, y, w, h, r) {
        ctx.beginPath();
        ctx.moveTo(x + r, y);
        ctx.arcTo(x + w, y, x + w, y + h, r);
        ctx.arcTo(x + w, y + h, x, y + h, r);
        ctx.arcTo(x, y + h, x, y, r);
        ctx.arcTo(x, y, x + w, y, r);
        ctx.closePath();
      }

      var scene = new THREE.Scene();
      var width = visualCol.clientWidth || 560;
      var height = visualCol.clientHeight || 460;

      var camera = new THREE.PerspectiveCamera(
        38,
        width / height,
        0.1,
        100,
      );
      camera.position.set(0, 0, 9);

      var renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true,
      });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(width, height);
      renderer.setClearColor(0x000000, 0);
      visualCol.appendChild(renderer.domElement);
      renderer.domElement.style.position = "relative";
      renderer.domElement.style.zIndex = "2";

      var group = new THREE.Group();
      scene.add(group);

      var panelConfigs = [
        {
          bg: "#0e1440",
          accent: "#40C77E",
          blockFill: "rgba(2,191,225,0.10)",
          blocks: 2,
          x: -1.6,
          y: 0.6,
          z: 0.4,
          rz: 0.06,
        },
        {
          bg: "#141033",
          accent: "#7b6ef0",
          blockFill: "rgba(123,110,240,0.12)",
          blocks: 1,
          x: 1.7,
          y: -0.3,
          z: -0.6,
          rz: -0.08,
        },
        {
          bg: "#0a0f2e",
          accent: "#064B3A",
          blockFill: "rgba(39,24,135,0.20)",
          blocks: 2,
          x: 0.1,
          y: -1.1,
          z: 0.9,
          rz: 0.03,
        },
      ];

      var panels = [];
      panelConfigs.forEach(function (cfg) {
        var tex = makeScreenTexture(cfg);
        var geo = new THREE.PlaneGeometry(2.35, 2.9);
        var mat = new THREE.MeshBasicMaterial({
          map: tex,
          transparent: true,
          opacity: 0,
        });
        var mesh = new THREE.Mesh(geo, mat);
        mesh.position.set(cfg.x, cfg.y, cfg.z);
        mesh.rotation.z = cfg.rz;
        mesh.rotation.y = -0.18;
        group.add(mesh);
        panels.push({
          mesh: mesh,
          baseY: cfg.y,
          phase: Math.random() * Math.PI * 2,
        });
      });

      var dotCount = window.innerWidth < 768 ? 140 : 260;
      var dotGeo = new THREE.BufferGeometry();
      var positions = new Float32Array(dotCount * 3);
      for (var i = 0; i < dotCount; i++) {
        positions[i * 3] = (Math.random() - 0.5) * 14;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 10;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 6 - 2;
      }
      dotGeo.setAttribute(
        "position",
        new THREE.BufferAttribute(positions, 3),
      );
      var dotMat = new THREE.PointsMaterial({
        color: 0x4fd6e8,
        size: 0.02,
        transparent: true,
        opacity: 0.35,
      });
      var dots = new THREE.Points(dotGeo, dotMat);
      scene.add(dots);

      var mouseX = 0,
        mouseY = 0,
        targetRotY = -0.15,
        targetRotX = 0.05;
      window.addEventListener("mousemove", function (e) {
        mouseX = e.clientX / window.innerWidth - 0.5;
        mouseY = e.clientY / window.innerHeight - 0.5;
      });

      var clock = new THREE.Clock();

      function animate() {
        requestAnimationFrame(animate);
        var t = clock.getElapsedTime();

        panels.forEach(function (p, i) {
          p.mesh.position.y = p.baseY + Math.sin(t * 0.6 + p.phase) * 0.12;
          p.mesh.rotation.z += Math.sin(t * 0.2 + i) * 0.00025;
        });

        dots.rotation.y = t * 0.02;

        if (!reduceMotion) {
          targetRotY = -0.15 + mouseX * 0.35;
          targetRotX = 0.05 + mouseY * 0.2;
        }
        group.rotation.y += (targetRotY - group.rotation.y) * 0.04;
        group.rotation.x += (targetRotX - group.rotation.x) * 0.04;

        renderer.render(scene, camera);
      }
      animate();

      window.addEventListener("resize", function () {
        var w = visualCol.clientWidth || 560;
        var h = visualCol.clientHeight || 460;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
      });

      if (hasGSAP) {
        var tl = gsap.timeline({ defaults: { ease: "power3.out" } });
        tl.from("#vvEyebrow", { opacity: 0, y: 14, duration: 0.6 })
          .from(
            ".hero-heading .word",
            { opacity: 0, y: 22, duration: 0.8, stagger: 0.08 },
            "-=0.35",
          )
          .from("#vvLede", { opacity: 0, y: 18, duration: 0.7 }, "-=0.5")
          .from("#vvCtaRow", { opacity: 0, y: 16, duration: 0.6 }, "-=0.45")
          .to(
            panels.map(function (p) {
              return p.mesh.material;
            }),
            {
              opacity: 1,
              duration: 1.1,
              stagger: 0.15,
              ease: "power2.out",
            },
            "-=0.6",
          );

        if (reduceMotion) {
          tl.progress(1);
          panels.forEach(function (p) {
            p.mesh.material.opacity = 1;
          });
        }
      } else {
        panels.forEach(function (p) {
          p.mesh.material.opacity = 1;
        });
      }
    })();

    /* ============================================================
 HERO BACKGROUND — quiet drifting node field on the canvas
 that previously sat empty behind the panels.
 ============================================================ */
    (function heroBackdrop() {
      var canvas = document.getElementById("vvHeroCanvas");
      var section = document.querySelector(".vv-uiux-hero");
      if (!canvas || !section || reduceMotion) return;

      var ctx = canvas.getContext("2d");
      var w, h, nodes;
      var NODE_COUNT = window.innerWidth < 768 ? 30 : 55;
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
              ctx.strokeStyle =
                "rgba(2,191,225," + 0.12 * (1 - dist / LINK_DIST) + ")";
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
 TOOLKIT SECTION — orbiting ring of nodes behind the tool
 cards, plus a single staggered card entrance.
 ============================================================ */
    (function techScene() {
      var canvas = document.getElementById("vvTechCanvas");
      var section = document.querySelector(".vv-uiux-tech-section");
      if (!canvas || !section || !hasThree) return;

      var scene = new THREE.Scene();
      var w = section.clientWidth,
        h = section.clientHeight;
      var camera = new THREE.PerspectiveCamera(45, w / h, 0.1, 100);
      camera.position.set(0, 0.4, 7.5);

      var renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true,
        alpha: true,
      });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(w, h);
      renderer.setClearColor(0x000000, 0);

      var ring = new THREE.Group();
      scene.add(ring);

      var colors = [0x02bfe1, 0x7b6ef0, 0x39b6f0, 0x2b57e8, 0x271887];
      var radius = 3.4;
      var nodeCount = 18;
      for (var i = 0; i < nodeCount; i++) {
        var angle = (i / nodeCount) * Math.PI * 2;
        var geo = new THREE.IcosahedronGeometry(0.05 + (i % 3) * 0.02, 0);
        var mat = new THREE.MeshBasicMaterial({
          color: colors[i % colors.length],
          transparent: true,
          opacity: 0.7,
        });
        var mesh = new THREE.Mesh(geo, mat);
        mesh.position.set(
          Math.cos(angle) * radius,
          Math.sin(angle * 1.4) * 0.9,
          Math.sin(angle) * radius,
        );
        ring.add(mesh);
      }

      var wireGeo = new THREE.TorusGeometry(radius, 0.01, 8, 64);
      var wireMat = new THREE.MeshBasicMaterial({
        color: 0x2b57e8,
        transparent: true,
        opacity: 0.18,
      });
      var wire = new THREE.Mesh(wireGeo, wireMat);
      wire.rotation.x = Math.PI / 2.4;
      ring.add(wire);

      var clock = new THREE.Clock();
      function animate() {
        requestAnimationFrame(animate);
        var t = clock.getElapsedTime();
        ring.rotation.y = t * 0.15;
        ring.rotation.x = Math.sin(t * 0.2) * 0.12;
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
        gsap.set(ring.rotation, { z: -0.3 });
        gsap.from(".vv-tool-card", {
          scrollTrigger: { trigger: "#vvToolGrid", start: "top 82%" },
          opacity: 0,
          y: 26,
          duration: 0.7,
          stagger: 0.09,
          ease: "power3.out",
        });
      }
    })();

    /* ============================================================
 PROCESS SECTION — drifting particle field + scroll-scrubbed
 connector line across the five steps (a genuine sequence).
 ============================================================ */
    (function processScene() {
      var canvas = document.getElementById("vvProcessCanvas");
      var section = document.querySelector(".vv-uiux-process-section");
      if (!canvas || !section || !hasThree) return;

      var scene = new THREE.Scene();
      var w = section.clientWidth,
        h = section.clientHeight;
      var camera = new THREE.PerspectiveCamera(50, w / h, 0.1, 100);
      camera.position.set(0, 0, 6);

      var renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true,
        alpha: true,
      });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      renderer.setSize(w, h);
      renderer.setClearColor(0x000000, 0);

      var count = window.innerWidth < 768 ? 60 : 120;
      var geo = new THREE.BufferGeometry();
      var pos = new Float32Array(count * 3);
      var speeds = new Float32Array(count);
      for (var i = 0; i < count; i++) {
        pos[i * 3] = (Math.random() - 0.5) * 12;
        pos[i * 3 + 1] = (Math.random() - 0.5) * 5;
        pos[i * 3 + 2] = (Math.random() - 0.5) * 4;
        speeds[i] = 0.05 + Math.random() * 0.1;
      }
      geo.setAttribute("position", new THREE.BufferAttribute(pos, 3));
      var mat = new THREE.PointsMaterial({
        color: 0x39b6f0,
        size: 0.035,
        transparent: true,
        opacity: 0.5,
      });
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

      /* connector line + step reveal, scrubbed to scroll position */
      if (hasGSAP) {
        var linePath = document.getElementById("vvProcessLinePath");
        if (linePath) {
          gsap.set(linePath, { strokeDashoffset: 1 });
          gsap.to(linePath, {
            strokeDashoffset: 0,
            ease: "none",
            scrollTrigger: {
              trigger: "#vvProcessTrack",
              start: "top 75%",
              end: "bottom 60%",
              scrub: 0.6,
            },
          });
        }
      }
    })();
  })();
</script>

</body>

</html>