<?php
$pageTitle = 'Our Work | Vision Vivante';
$extraHead = <<<'HTML'
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="assets/css/work.css">
<link rel="stylesheet" href="assets/css/tafsol-inspired.css">
HTML;
require __DIR__ . '/header.php';

$projects = [
  ['num' => '01', 'title' => 'Real Estate CRM Platform', 'cat' => 'WEB & PLATFORMS', 'filter' => ['web', 'design'], 'image' => 'crm.png', 'alt' => 'Real estate CRM platform preview', 'description' => 'A connected workspace for property workflows, customer relationships and sales activity — bringing everyday operations into one clear experience.', 'tags' => ['CRM', 'Dashboard UX', 'Web app'], 'url' => '/portfolio-detail.php'],
  ['num' => '02', 'title' => 'FinTech Mobile Application', 'cat' => 'MOBILE APPS', 'filter' => ['mobile', 'design'], 'image' => 'fintech.png', 'alt' => 'FinTech mobile application preview', 'description' => 'A mobile-first financial experience focused on clarity, accessible interactions and a smoother customer journey.', 'tags' => ['Mobile UX', 'FinTech', 'Product design'], 'url' => '/portfolio-detail.php'],
  ['num' => '03', 'title' => 'AI-Powered Analytics Dashboard', 'cat' => 'AI & ANALYTICS', 'filter' => ['ai'], 'image' => 'ai.png', 'alt' => 'AI-powered analytics dashboard preview', 'description' => 'A data-led interface that makes complex information easier to explore, understand and use in decision-making.', 'tags' => ['AI', 'Analytics', 'Data visualisation'], 'url' => '/portfolio-detail.php'],
  ['num' => '04', 'title' => 'Trophy Outlet — E-commerce Store', 'cat' => 'E-COMMERCE', 'filter' => ['web', 'commerce'], 'image' => 'trophy.png', 'alt' => 'Trophy Outlet e-commerce store preview', 'description' => 'A retail experience designed to support a scalable storefront and make the customer journey simpler from browse to checkout.', 'tags' => ['E-commerce', 'Storefront', 'Conversion UX'], 'url' => '/portfolio-detail.php'],
  ['num' => '05', 'title' => 'SocialLand Digital Website', 'cat' => 'WEB & PLATFORMS', 'filter' => ['web'], 'image' => 'social.png', 'alt' => 'SocialLand digital website preview', 'description' => 'A flexible WordPress presence created to communicate agency services and support ongoing white-label collaboration.', 'tags' => ['WordPress', 'Agency', 'Support'], 'url' => '/portfolio-detail.php'],
  ['num' => '06', 'title' => 'Landscaping Services Website', 'cat' => 'WEB & PLATFORMS', 'filter' => ['web'], 'image' => 'landscape.png', 'alt' => 'Landscaping services website preview', 'description' => 'A focused digital presence that communicates services clearly and helps a local business reach prospective customers online.', 'tags' => ['Business website', 'Responsive', 'Lead generation'], 'url' => '/portfolio-detail.php'],
];
$filters = [
  'all' => 'All',
  'web' => 'Web Development',
  'design' => 'UI/UX Design',
  'ai' => 'AI & Automation',
  'mobile' => 'Mobile Apps',
  'commerce' => 'E-commerce'
];
$services = ['Web Development', 'UI/UX Design', 'AI Development', 'Mobile Apps', 'Digital Marketing', 'Quality Assurance'];
?>
<main class="vv-work-page">
  <section class="vv-work-hero" aria-labelledby="work-title">
    <div class="container">
      <div class="vv-work-kicker">PORTFOLIO <span>—</span> SELECTED PROJECTS</div>
      <div class="vv-work-hero-line vv-work-hero-line-one">
        <h1 id="work-title">Our</h1>
        <p class="vv-work-intro">Explore the digital products, websites, and applications we've built for forward-thinking brands. From concept to launch, we turn ideas into high-performing solutions.</p>
      </div>
      <div class="vv-work-hero-line vv-work-hero-line-two">
        <h2 aria-hidden="true">Work</h2>
        <div class="vv-work-hero-image"><img src="assets/images//hero.png" alt="Laptop and phone showing digital project screens" fetchpriority="high"></div>
      </div>
      <p class="vv-work-proof">We've delivered <strong>50+</strong> projects for <strong>30+</strong> happy clients across <strong>5+</strong> industries — with <strong>100%</strong> client satisfaction.</p>
    </div>
  </section>

  <div class="vv-work-marquee" aria-label="Our services">
    <div class="vv-work-marquee-track" aria-hidden="true">
      <?php foreach (array_merge($services, $services) as $service): ?><span><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?><i></i></span><?php endforeach; ?>
    </div>
  </div>

  <section class="vv-work-projects" id="work" aria-labelledby="selected-work-title">
    <div class="container">
      <div class="vv-work-section-head">
        <h2 id="selected-work-title">Selected work<span>.</span></h2>
        <div class="vv-work-controls">
          <div class="vv-work-filters" role="group" aria-label="Filter projects">
            <?php foreach ($filters as $key => $label): $count = $key === 'all' ? count($projects) : count(array_filter($projects, fn($project) => in_array($key, $project['filter'], true))); ?>
              <button type="button" class="vv-work-filter<?= $key === 'all' ? ' is-active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?><sup><?= $count ?></sup></button>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="vv-work-showcase" data-showcase>
        <?php foreach ($projects as $index => $project): ?>
          <article class="vv-work-case<?= $index % 2 ? ' is-reversed' : '' ?>" data-project data-categories="<?= htmlspecialchars(implode(' ', $project['filter']), ENT_QUOTES, 'UTF-8') ?>" data-project-index="<?= $index ?>">
            <a class="vv-work-case-image" href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Explore <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
              <img src="assets/images//<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
            </a>
            <div class="vv-work-case-copy">
              <div class="vv-work-case-meta"><span><?= $project['num'] ?></span><i></i><span><?= htmlspecialchars($project['cat'], ENT_QUOTES, 'UTF-8') ?></span></div>
              <h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
              <div class="vv-work-tags"><?= implode(' <b>/</b> ', array_map(fn($tag) => htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'), $project['tags'])) ?></div>
              <a class="vv-work-explore" href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>">Explore project <span>↗</span></a>
            </div>
          </article>
        <?php endforeach; ?>
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

<!-- ================= REDESIGN SCRIPTS ================= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/work.js" defer></script>

</body>

</html>