<?php
$pageTitle = 'Vision Vivante | AI-Powered Digital Engineering';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/blog.css" />
HTML;
require __DIR__ . '/header.php';
?>



<!-- BLOG HERO -->
<section class="vv-blog-hero">
  <div class="container vv-blog-hero-inner">
    <div class="vv-blog-hero-copy">
      <div class="vv-blog-breadcrumb">
        INSIGHTS <span>/</span> IDEAS <span>/</span> INSPIRATION
      </div>

      <h1>Our <span>Blog</span></h1>

      <p>
        Explore the latest insights, tips, and ideas on technology,
        design, development, and digital innovation.
      </p>

      <form class="vv-blog-search vv-blog-hero-search" id="blogSearchForm">
        <i class="bi bi-search"></i>
        <input id="blogSearch" type="search"
          placeholder="Search articles..."
          aria-label="Search articles">
        <button type="submit" aria-label="Search">
          <i class="bi bi-arrow-right"></i>
        </button>
      </form>
    </div>

    <div class="vv-blog-hero-image">
      <img
        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85"
        alt="Modern development workspace with computer code">
      <div class="vv-blog-hero-image-overlay"></div>
      <div class="vv-blog-hero-code">&lt;/&gt;</div>
    </div>
  </div>
</section>

<!-- BLOG LISTING -->
<section class="vv-blog-content" id="blogArticles">
  <div class="container">

    <div class="vv-blog-layout">
      <main class="vv-blog-main">

        <!-- Category filters -->
        <div class="vv-blog-filter-wrap">
          <div class="vv-blog-filters" id="filterGroup"
            aria-label="Filter articles">
            <button class="vv-blog-filter active"
              type="button" data-filter="all"
              aria-pressed="true">All Posts</button>
            <button class="vv-blog-filter" type="button"
              data-filter="engineering"
              aria-pressed="false">Web Development</button>
            <button class="vv-blog-filter" type="button"
              data-filter="design"
              aria-pressed="false">UI/UX Design</button>
            <button class="vv-blog-filter" type="button"
              data-filter="ai"
              aria-pressed="false">AI &amp; Automation</button>
            <button class="vv-blog-filter" type="button"
              data-filter="company"
              aria-pressed="false">Business Technology</button>
            <button class="vv-blog-filter" type="button"
              data-filter="tutorials"
              aria-pressed="false">Tips &amp; Guides</button>
          </div>
        </div>

        <div class="vv-blog-grid" id="blogGrid">

          <article class="vv-blog-card"
            data-category="engineering">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80"
                alt="Code displayed on a developer's laptop"
                loading="lazy">
              <span class="vv-blog-category">Web Development</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  Why Modern Businesses Need Custom Web Applications
                </a></h3>
              <p>
                Discover how custom web solutions help businesses
                scale, improve efficiency and stay competitive.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Oct 12, 2026</span>
                <span><i class="bi bi-clock"></i> 5 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

          <article class="vv-blog-card" data-category="design">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=800&q=80"
                alt="Digital interface and design concepts"
                loading="lazy">
              <span class="vv-blog-category">UI/UX Design</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  10 UI/UX Trends Shaping Digital Experiences
                </a></h3>
              <p>
                Explore interface patterns and personalization
                approaches reshaping digital products.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Oct 8, 2026</span>
                <span><i class="bi bi-clock"></i> 6 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

          <article class="vv-blog-card" data-category="ai">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80"
                alt="Artificial intelligence technology"
                loading="lazy">
              <span class="vv-blog-category">AI &amp; Automation</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  How AI Agents Are Transforming Business Operations
                </a></h3>
              <p>
                Learn how AI agents can automate workflows,
                boost productivity and support better decisions.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Sep 30, 2026</span>
                <span><i class="bi bi-clock"></i> 7 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

          <article class="vv-blog-card" data-category="engineering">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80"
                alt="Technology team collaborating"
                loading="lazy">
              <span class="vv-blog-category">Web Development</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  Frontend vs Backend: What You Need to Know
                </a></h3>
              <p>
                Understand how frontend and backend technologies
                work together to power your digital product.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Sep 24, 2026</span>
                <span><i class="bi bi-clock"></i> 5 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

          <article class="vv-blog-card" data-category="tutorials">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80"
                alt="Technology hardware and tools"
                loading="lazy">
              <span class="vv-blog-category">Tips &amp; Guides</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  5 Tools Every Developer Should Use
                </a></h3>
              <p>
                Explore practical tools that help development
                teams work faster and more efficiently.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Sep 18, 2026</span>
                <span><i class="bi bi-clock"></i> 6 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

          <article class="vv-blog-card" data-category="company">
            <a href="/blog-detail.php" class="vv-blog-card-image">
              <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80"
                alt="Modern business buildings and city"
                loading="lazy">
              <span class="vv-blog-category">Business Technology</span>
            </a>
            <div class="vv-blog-card-body">
              <h3><a href="/blog-detail.php">
                  The Future of Digital Products in an AI World
                </a></h3>
              <p>
                Discover how AI, automation and human creativity
                are influencing the next generation of products.
              </p>
              <div class="vv-blog-card-footer">
                <span><i class="bi bi-calendar3"></i> Sep 12, 2026</span>
                <span><i class="bi bi-clock"></i> 5 min read</span>
                <a href="/blog-detail.php" aria-label="Read article">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </article>

        </div>

        <p class="vv-blog-empty" id="blogEmpty" hidden>
          No articles match your search. Try another keyword or category.
        </p>

        <nav class="vv-blog-pagination" aria-label="Blog pagination">
          <button type="button" disabled aria-label="Previous page">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button type="button" class="active" aria-current="page">1</button>
          <button type="button">2</button>
          <button type="button">3</button>
          <button type="button" aria-label="Next page">
            <i class="bi bi-chevron-right"></i>
          </button>
        </nav>
      </main>

      <!-- RIGHT SIDEBAR -->
      <aside class="vv-blog-sidebar">

        <form class="vv-blog-search vv-blog-sidebar-search"
          id="sidebarSearchForm">
          <i class="bi bi-search"></i>
          <input id="sidebarBlogSearch" type="search"
            placeholder="Search blog posts..."
            aria-label="Search blog posts">
        </form>

        <div class="vv-blog-sidebar-block">
          <h3>Categories</h3>

          <div class="vv-blog-category-list">
            <button type="button" data-sidebar-filter="all" class="active">
              <i class="bi bi-grid"></i><span>All Posts</span><b>6</b>
            </button>
            <button type="button" data-sidebar-filter="engineering">
              <i class="bi bi-code-square"></i><span>Web Development</span><b>2</b>
            </button>
            <button type="button" data-sidebar-filter="design">
              <i class="bi bi-palette"></i><span>UI/UX Design</span><b>1</b>
            </button>
            <button type="button" data-sidebar-filter="ai">
              <i class="bi bi-cpu"></i><span>AI &amp; Automation</span><b>1</b>
            </button>
            <button type="button" data-sidebar-filter="company">
              <i class="bi bi-building"></i><span>Business Technology</span><b>1</b>
            </button>
            <button type="button" data-sidebar-filter="tutorials">
              <i class="bi bi-lightbulb"></i><span>Tips &amp; Guides</span><b>1</b>
            </button>
          </div>
        </div>

        <div class="vv-blog-sidebar-newsletter">
          <div class="vv-blog-sidebar-newsletter-icon">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <span class="vv-blog-sidebar-kicker">Stay Updated</span>
          <h3>Get the latest insights in your inbox.</h3>
          <p>
            Be the first to know about new articles, resources
            and updates.
          </p>

          <form id="newsletterForm" novalidate>
            <input type="email" id="nl-email" name="email"
              placeholder="Your email address"
              aria-label="Your email address" required>
            <button type="submit">
              Subscribe <i class="bi bi-arrow-right"></i>
            </button>
          </form>
          <div class="contact-form-status" id="newsletterStatus"
            aria-live="polite"></div>
        </div>
      </aside>
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
<script src="assets/js/blog.js"></script>

</body>

</html>