<?php
$pageTitle = 'Vision Vivante | AI-Powered Digital Engineering';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/work.css" />
HTML;
require __DIR__ . '/header.php';
?>

<main class="work-page">

  <section class="work-hero">
    <div class="work-container">
      <div class="work-hero-grid">
        <div class="work-hero-copy-col">
          <span class="work-eyebrow">PORTFOLIO <span>/</span> OUR WORK</span>

          <h1>Our <span class="work-gradient">Work</span></h1>

          <p class="work-hero-copy">
            Explore the digital products, websites, and applications
            we've built for forward-thinking brands. From concept to
            launch, we turn ideas into high-performing solutions.
          </p>

          <div class="work-hero-stats">
            <div class="work-stat">
              <span class="work-stat-icon"><i class="bi bi-briefcase"></i></span>
              <div><strong>50+</strong><small>Projects Delivered</small></div>
            </div>
            <div class="work-stat">
              <span class="work-stat-icon"><i class="bi bi-heart"></i></span>
              <div><strong>30+</strong><small>Happy Clients</small></div>
            </div>
            <div class="work-stat">
              <span class="work-stat-icon"><i class="bi bi-grid"></i></span>
              <div><strong>5+</strong><small>Industries</small></div>
            </div>
            <div class="work-stat">
              <span class="work-stat-icon"><i class="bi bi-people"></i></span>
              <div><strong>100%</strong><small>Client Satisfaction</small></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="work-section" id="work">
    <div class="work-container">
      <div class="work-section-heading">
        <div>
          <span class="work-eyebrow">A closer look</span>
          <h2>Selected work<span class="work-heading-dot">.</span><br><span class="work-muted-heading">Built for what’s next.</span></h2>
        </div>
        <p>Different challenges. Thoughtful solutions. Explore a selection of digital experiences shaped by strategy, craft and dependable engineering.</p>
      </div>


      <div class="work-filter-row">
        <div class="work-filters" role="group" aria-label="Filter projects">
          <button class="work-filter active" type="button"
            data-filter="all" aria-pressed="true">All</button>
          <button class="work-filter" type="button"
            data-filter="web" aria-pressed="false">Web Development</button>
          <button class="work-filter" type="button"
            data-filter="design" aria-pressed="false">UI/UX Design</button>
          <button class="work-filter" type="button"
            data-filter="ai" aria-pressed="false">AI &amp; Automation</button>
          <button class="work-filter" type="button"
            data-filter="mobile" aria-pressed="false">Mobile Apps</button>
          <button class="work-filter" type="button"
            data-filter="commerce" aria-pressed="false">Branding</button>
        </div>
      </div>


      <div class="work-project-grid">
        <article class="work-project work-project-featured" data-category="web">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View Real Estate CRM Platform">
            <img src="https://framerusercontent.com/images/d5vwYD1dUJW4hBh9UT2mRmUo.jpg?width=1400&height=900" alt="Real estate CRM platform preview" loading="lazy">
            <span class="work-project-number">01 <i>/ 06</i></span>
            <span class="work-media-badge">WEB PLATFORM</span>
            <span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">Web &amp; Platforms</span><span class="work-project-year">Case study / 01</span></div>
            <h3><a href="/portfolio-detail.php">Real Estate CRM Platform</a></h3>
            <p>A connected workspace for property workflows, customer relationships and sales activity — bringing everyday operations into one clear experience.</p>
            <div class="work-project-footer">
              <div class="work-tags"><span>CRM</span><span>Dashboard UX</span><span>Web app</span></div><a class="work-case-link" href="/portfolio-detail.php">Explore project <span>↗</span></a>
            </div>
          </div>
        </article>

        <article class="work-project" data-category="mobile">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View FinTech Mobile Application">
            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1200&q=85" alt="Mobile application displayed on a smartphone" loading="lazy">
            <span class="work-project-number">02 <i>/ 06</i></span><span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">Mobile Apps</span><span class="work-project-year">Case study / 02</span></div>
            <h3><a href="/portfolio-detail.php">FinTech Mobile Application</a></h3>
            <p>A mobile-first financial experience focused on clarity, accessible interactions and a smoother customer journey.</p>
            <div class="work-tags"><span>Mobile UX</span><span>FinTech</span><span>Product design</span></div>
          </div>
        </article>

        <article class="work-project" data-category="ai">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View AI-Powered Analytics Dashboard">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=85" alt="Analytics charts on a digital dashboard" loading="lazy">
            <span class="work-project-number">03 <i>/ 06</i></span><span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">AI &amp; Analytics</span><span class="work-project-year">Case study / 03</span></div>
            <h3><a href="/portfolio-detail.php">AI-Powered Analytics Dashboard</a></h3>
            <p>A data-led interface that makes complex information easier to explore, understand and use in decision-making.</p>
            <div class="work-tags"><span>AI</span><span>Analytics</span><span>Data visualisation</span></div>
          </div>
        </article>

        <article class="work-project" data-category="commerce">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View Trophy Outlet E-commerce Store">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1200&q=85" alt="E-commerce shopping and payment experience" loading="lazy">
            <span class="work-project-number">04 <i>/ 06</i></span><span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">E-commerce</span><span class="work-project-year">Case study / 04</span></div>
            <h3><a href="/portfolio-detail.php">Trophy Outlet — E-commerce Store</a></h3>
            <p>A retail experience designed to support a scalable storefront and make the customer journey simpler from browse to checkout.</p>
            <div class="work-tags"><span>E-commerce</span><span>Storefront</span><span>Conversion UX</span></div>
          </div>
        </article>

        <article class="work-project" data-category="web">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View SocialLand Digital Website">
            <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?auto=format&fit=crop&w=1200&q=85" alt="Digital agency website on a laptop" loading="lazy">
            <span class="work-project-number">05 <i>/ 06</i></span><span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">Web &amp; Platforms</span><span class="work-project-year">Case study / 05</span></div>
            <h3><a href="/portfolio-detail.php">SocialLand Digital Website</a></h3>
            <p>A flexible WordPress presence created to communicate agency services and support ongoing white-label collaboration.</p>
            <div class="work-tags"><span>WordPress</span><span>Agency</span><span>Support</span></div>
          </div>
        </article>

        <article class="work-project" data-category="web">
          <a class="work-project-media" href="/portfolio-detail.php" aria-label="View Landscaping Services Website">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=85" alt="Landscaping and property exterior" loading="lazy">
            <span class="work-project-number">06 <i>/ 06</i></span><span class="work-project-open" aria-hidden="true">↗</span>
          </a>
          <div class="work-project-content">
            <div class="work-project-meta"><span class="work-project-category">Web &amp; Platforms</span><span class="work-project-year">Case study / 06</span></div>
            <h3><a href="/portfolio-detail.php">Landscaping Services Website</a></h3>
            <p>A focused digital presence that communicates services clearly and helps a local business reach prospective customers online.</p>
            <div class="work-tags"><span>Business website</span><span>Responsive</span><span>Lead generation</span></div>
          </div>
        </article>
      </div>
      <div class="work-project-count"><span class="work-count-line"></span><span>End of selected work</span><span class="work-count-line"></span></div>
    </div>
  </section>

  <section class="work-cta" id="contactUs">
    <div class="work-container">
      <div class="work-cta-inner">
        <div class="work-cta-symbol" aria-hidden="true">↗</div>
        <div class="work-cta-copy">
          <span class="work-eyebrow">YOUR NEXT CHAPTER STARTS HERE</span>
          <h2>Have a bold idea?<br><span class="work-gradient">Let’s make it real.</span></h2>
          <p>Tell us what you’re building. We’ll help you find the right way forward.</p>
        </div>
        <a class="work-btn" href="/contact.php">Start a conversation <span aria-hidden="true">↗</span></a>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
<!-- ================= REDESIGN SCRIPTS ================= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/gsap.js"></script>
<script>
  (function() {
    const filters = document.querySelectorAll('.work-filter');
    const cards = document.querySelectorAll('.work-project');

    filters.forEach((button) => {
      button.addEventListener('click', () => {
        const category = button.dataset.filter;
        filters.forEach((item) => {
          const active = item === button;
          item.classList.toggle('active', active);
          item.setAttribute('aria-pressed', String(active));
        });
        cards.forEach((card) => {
          card.hidden = category !== 'all' && card.dataset.category !== category;
        });
      });
    });

    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.12
      });
      cards.forEach((card) => observer.observe(card));
    } else {
      cards.forEach((card) => card.classList.add('is-visible'));
    }
  })();
</script>
</body>

</html>