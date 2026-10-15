<?php
$pageTitle = 'SocialLand Digital — Blog Detail';
$extraHead = <<<'HTML'
<style>
:root {
  --vv-blue-900: #0c1a4a;
  --vv-blue-700: #12297a;
  --vv-blue-600: #40C77E;
  --vv-blue-500: #2b57e8;
  --vv-blue-400: #3f7cf0;
  --vv-cyan-400: #39b6f0;
  --vv-radius: 14px;
  --vv-bg-deep: #000;
  --vv-panel: rgba(18, 41, 122, .22);
  --vv-panel-border: rgba(63, 124, 240, .25);
  --vv-text-soft: rgba(230, 235, 247, .72);
  --vv-text-faint: rgba(230, 235, 247, .45);
}

* {
  box-sizing: border-box
}

html {
  scroll-behavior: smooth
}

body {
  font-family: "Plus Jakarta Sans", sans-serif;
  color: #eef1fb;
  background: #000;
  overflow-x: hidden;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Manrope", sans-serif;
  font-weight: 800;
  letter-spacing: .02em
}

a {
  text-decoration: none
}

#bg-canvas {
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: -2;
  background: #000
}

.bg-veil {
  position: fixed;
  inset: 0;
  z-index: -1;
  pointer-events: none;
  background:
    radial-gradient(ellipse 60% 50% at 50% 0%, rgba(18, 41, 122, .35), transparent 65%),
    radial-gradient(ellipse 70% 60% at 85% 100%, rgba(2, 191, 225, .12), transparent 70%),
    radial-gradient(ellipse 70% 60% at 10% 85%, rgba(43, 87, 232, .10), transparent 70%), #000;
}

.blog-detail-hero {
  padding: 9rem 0 4rem;
  position: relative
}

.eyebrow {
  font-size: .75rem;
  font-weight: 600;
  letter-spacing: .32em;
  text-transform: uppercase;
  color: var(--vv-cyan-400);
  display: inline-flex;
  align-items: center;
  gap: .6rem
}

.eyebrow:before {
  content: "";
  width: 26px;
  height: 1px;
  background: var(--vv-cyan-400)
}

.blog-detail-title {
  font-size: clamp(1.4rem,4vw,3rem);
  color: #f6f8ff;
  margin: 1.2rem 0 1.4rem
}

.blog-detail-intro {
  max-width: 760px;
  color: var(--vv-text-soft);
  font-size: 1.08rem;
  line-height: 1.85
}

.blog-meta-detail {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: .65rem;
  color: var(--vv-text-faint);
  font-size: .82rem;
  margin-top: 1.6rem
}

.meta-dot {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: var(--vv-text-faint)
}

.detail-cover {
  position: relative;
  overflow: hidden;
  border-radius: 22px;
  border: 1px solid var(--vv-panel-border);
  background: var(--vv-panel);
  margin-top: 2.5rem;
  box-shadow: 0 30px 100px rgba(2, 191, 225, .10)
}

.detail-cover img {
  width: 100%;
  display: block;
  aspect-ratio: 21/10;
  object-fit: cover
}

.detail-cover:after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 45%, rgba(0, 0, 0, .4))
}

.article-layout {
  padding: 2rem 0 6rem
}

.article-content {
  margin: 0 auto;
  font-size: 1.03rem;
  line-height: 1.95;
  color: var(--vv-text-soft)
}

.article-content h2,
.article-content h3 {
  color: #f4f7ff;
  line-height: 1.25;
  margin: 3rem 0 1rem
}

.article-content h2 {
  font-size: 2rem
}

.article-content h3 {
  font-size: 1.4rem
}

.article-content p {
  margin: 0 0 1.35rem
}

.article-content strong {
  color: #fff
}

.article-content a {
  color: var(--vv-cyan-400)
}

.article-content ul {
  padding-left: 1.2rem;
  margin: 0 0 1.5rem
}

.article-content li {
  margin: .55rem 0
}

.article-quote {
  margin: 2rem 0;
  padding: 1.5rem 1.6rem;
  border-left: 2px solid var(--vv-cyan-400);
  background: linear-gradient(90deg, rgba(18, 41, 122, .32), rgba(18, 41, 122, .08));
  border-radius: 0 14px 14px 0;
  color: #dfe7fb;
  font-size: 1.1rem
}

.article-image {
  width: 100%;
  border-radius: 18px;
  border: 1px solid var(--vv-panel-border);
  margin: 1.5rem 0 2rem;
  display: block
}

.author-box {
  max-width: 790px;
  margin: 4rem auto 0;
  padding: 1.5rem;
  border: 1px solid var(--vv-panel-border);
  border-radius: 18px;
  background: rgba(18, 41, 122, .18);
  display: flex;
  gap: 1rem;
  align-items: center
}

.author-avatar {
  width: 58px;
  height: 58px;
  flex: 0 0 58px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, var(--vv-cyan-400), var(--vv-blue-400));
  color: #06122b;
  font-weight: 800
}

.author-box h4 {
  margin: 0 0 .25rem;
  color: #fff;
  font-size: 1rem
}

.author-box p {
  margin: 0;
  color: var(--vv-text-soft);
  font-size: .86rem;
  line-height: 1.6
}

.related-section {
  padding: 1rem 0 6rem
}

.section-title {
  font-size: 2.4rem;
  color: #f4f7ff
}

.blog-related-card {
  height: 100%;
  border: 1px solid var(--vv-panel-border);
  border-radius: var(--vv-radius);
  overflow: hidden;
  background: var(--vv-panel);
  transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease
}

.blog-related-card:hover {
  transform: translateY(-8px);
  border-color: var(--vv-blue-400);
  box-shadow: 0 22px 55px rgba(2, 191, 225, .18)
}

.blog-related-card img {
  width: 100%;
  aspect-ratio: 16/10;
  object-fit: cover;
  display: block
}

.blog-related-body {
  padding: 1.25rem 1.3rem 1.4rem
}

.blog-related-category {
  font-size: .68rem;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--vv-cyan-400);
  margin-bottom: .55rem
}

.blog-related-body h4 {
  font-size: 1.1rem;
  line-height: 1.35;
  color: #fff;
  margin: 0 0 .55rem
}

.blog-related-body p {
  font-size: .84rem;
  line-height: 1.65;
  color: var(--vv-text-soft);
  margin: 0
}

.back-blog {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  color: var(--vv-text-soft);
  font-size: .86rem;
  transition: color .25s ease
}

.back-blog:hover {
  color: #fff
}

.detail-cta {
  max-width: 1140px;
  margin: 0 auto 6rem;
  padding: 3rem;
  border: 1px solid var(--vv-panel-border);
  border-radius: 22px;
  background: linear-gradient(120deg, rgba(18, 41, 122, .65), rgba(2, 191, 225, .14));
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem
}

.detail-cta h3 {
  color: #fff;
  font-size: 1.8rem;
  margin: 0 0 .45rem
}

.detail-cta p {
  color: var(--vv-text-soft);
  margin: 0
}

.detail-cta .btn-vv-primary {
  white-space: nowrap
}

@media(max-width:767px) {
  .blog-detail-hero {
    padding-top: 8rem
  }

  .blog-detail-title {
    font-size: 2.5rem
  }

  .article-content {
    font-size: .96rem
  }

  .detail-cta {
    padding: 2rem;
    display: block
  }

  .detail-cta .btn-vv-primary {
    margin-top: 1.3rem
  }
}

@media(prefers-reduced-motion:reduce) {
  * {
    animation-duration: .001ms !important;
    transition-duration: .001ms !important
  }
}
</style>
HTML;
require __DIR__ . '/header.php';
?>

<canvas id="bg-canvas" aria-hidden="true"></canvas>
<div class="bg-veil" aria-hidden="true"></div>

<main>
    <section class="blog-detail-hero">
        <div class="container">
            <a href="/blog.php" class="back-blog reveal">
                <i class="bi bi-arrow-left"></i> Back to Blog
            </a>

            <div class="mt-5 reveal">
                <span class="eyebrow">Digital Marketing · Case Study</span>

                <h1 class="blog-detail-title">
                    SocialLand Digital Scalable WordPress Website &amp; 2-Year White-Label Support
                </h1>

                <p class="blog-detail-intro">
                    SocialLand partnered with us for their first UK white-label website project.
                    We delivered a scalable build with ongoing support — combining a strong digital
                    foundation with a flexible development process designed for long-term growth.
                </p>

                <div class="blog-meta-detail">
                    <span>By Vision Vivante</span>
                    <span class="meta-dot"></span>
                    <span>Case Study</span>
                    <span class="meta-dot"></span>
                    <span>8 min read</span>
                </div>
            </div>

            <div class="detail-cover reveal">
                <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?w=1600&q=85"
                    alt="SocialLand Digital website project">
            </div>
        </div>
    </section>

    <section class="article-layout">
        <div class="container">
            <article class="article-content reveal">

                <p>
                    A successful digital project is more than launching a website. It needs to give
                    a business a reliable platform that can evolve as its customers, services and
                    goals change.
                </p>

                <p>
                    SocialLand came to us for their first UK white-label website project. The goal
                    was to create a professional WordPress experience that could scale while giving
                    their team a dependable technical partner for ongoing development and support.
                </p>

                <h2>The challenge</h2>

                <p>
                    The project needed to balance speed, flexibility and long-term maintainability.
                    Rather than treating the website as a one-off delivery, we approached it as
                    the foundation of an ongoing digital partnership.
                </p>

                <div class="article-quote">
                    “The best website builds are designed for what the business needs next — not
                    just what it needs on launch day.”
                </div>

                <h2>Building a scalable WordPress foundation</h2>

                <p>
                    We structured the build around reusable components and a clear content system,
                    making it easier to expand pages and functionality without repeatedly rebuilding
                    the same interface patterns.
                </p>

                <p>
                    This approach also made the handover and future white-label work more efficient.
                    New requirements could be introduced into the existing system while preserving
                    consistency across the site.
                </p>

                <img class="article-image" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1400&q=85"
                    alt="Digital project workspace">

                <h3>Designed for ongoing support</h3>

                <p>
                    The relationship continued beyond the initial launch. A two-year support
                    approach meant the platform could be improved as new requirements appeared,
                    helping the website remain useful rather than becoming a static deliverable.
                </p>

                <ul>
                    <li>Reusable WordPress page and content patterns</li>
                    <li>Scalable structure for future features</li>
                    <li>Ongoing development and technical support</li>
                    <li>Consistent experience across the digital platform</li>
                </ul>

                <h2>The result</h2>

                <p>
                    SocialLand received a scalable WordPress website backed by a long-term support
                    model. The project established a stronger digital foundation while giving the
                    team a development partner they could continue working with.
                </p>

                <p>
                    For us, that is the real measure of a successful build: creating something that
                    works today and is ready for tomorrow.
                </p>
            </article>

            <div class="author-box reveal">
                <div class="author-avatar">VV</div>
                <div>
                    <h4>Vision Vivante</h4>
                    <p>
                        Product engineering, web development and digital experiences built with
                        long-term thinking.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="related-section">
        <div class="container">
            <div class="mb-4 reveal">
                <span class="eyebrow">Keep exploring</span>
                <h2 class="section-title mt-3">You may also like</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <article class="portfolio-card reveal">
                        <div class="portfolio-card-media">
                            <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?w=800&q=80"
                                alt="SocialLand Digital" />
                            <span class="portfolio-tag">Case Study</span>
                        </div>
                        <div class="portfolio-card-body">
                            <a href="#" class="d-block">
                                <p class="portfolio-card-category">Digital Marketing</p>
                                <h5>
                                    SocialLand Digital Scalable WordPress Website &amp; 2-Year
                                    White-Label Support
                                </h5>
                                <p class="portfolio-card-desc">
                                    SocialLand partnered with us for their first UK white-label
                                    website project. We delivered a scalable build with ongoing
                                    support.
                                </p>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="portfolio-card reveal">
                        <div class="portfolio-card-media">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80"
                                alt="Trophy Outlet" />
                            <span class="portfolio-tag featured">Featured Case Study</span>
                        </div>
                        <div class="portfolio-card-body">
                            <a href="#" class="d-block">
                                <p class="portfolio-card-category">E-Commerce</p>
                                <h5>Trophy Outlet – BigCommerce E-Commerce Store</h5>
                                <p class="portfolio-card-desc">
                                    We developed the Trophy Outlet online store on BigCommerce and
                                    provided full support for a 35-year-old legacy brand's digital
                                    relaunch.
                                </p>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="portfolio-card reveal">
                        <div class="portfolio-card-media">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80"
                                alt="TS Landscaping" />
                            <span class="portfolio-tag">Case Study</span>
                        </div>
                        <div class="portfolio-card-body">
                            <a href="#" class="d-block">
                                <p class="portfolio-card-category">Landscaping Services</p>
                                <h5>Large Scale Landscaping in Raleigh, NC</h5>
                                <p class="portfolio-card-desc">
                                    TS Landscaping NC had no online presence and relied entirely on
                                    word-of-mouth. We delivered a site in just 2 weeks.
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="detail-cta reveal">
            <div>
                <h3>Have a project in mind?</h3>
                <p>Let's build a digital experience designed to grow with your business.</p>
            </div>
            <a href="/contact.php" class="btn btn-vv-primary d-inline-flex align-items-center gap-2">
                Get in Touch <i class="bi bi-arrow-right"></i>
            </a>
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

<script>
    (function () {
        const canvas = document.getElementById('bg-canvas');
        if (!canvas || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(55, innerWidth / innerHeight, 0.1, 1000);
        camera.position.z = 38;

        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            antialias: true,
            alpha: true
        });
        renderer.setPixelRatio(Math.min(devicePixelRatio, 1.7));
        renderer.setSize(innerWidth, innerHeight);

        const count = innerWidth < 768 ? 180 : 320;
        const geo = new THREE.BufferGeometry();
        const positions = new Float32Array(count * 3);

        for (let i = 0; i < count; i++) {
            positions[i * 3] = (Math.random() - .5) * 70;
            positions[i * 3 + 1] = (Math.random() - .5) * 45;
            positions[i * 3 + 2] = (Math.random() - .5) * 35;
        }

        geo.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const points = new THREE.Points(
            geo,
            new THREE.PointsMaterial({
                size: 1.2,
                color: 0x39b6f0,
                transparent: true,
                opacity: .45,
                depthWrite: false
            })
        );

        scene.add(points);

        function resize() {
            camera.aspect = innerWidth / innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(innerWidth, innerHeight);
        }

        addEventListener('resize', resize);

        let t = 0;
        function animate() {
            requestAnimationFrame(animate);
            t += .0018;
            points.rotation.y = t * .65;
            points.rotation.x = Math.sin(t) * .08;
            renderer.render(scene, camera);
        }
        animate();
    })();
</script>

<script>
    (function () {
        if (typeof gsap === 'undefined') return;

        if (typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }

        gsap.utils.toArray('.reveal').forEach(function (el, index) {
            gsap.fromTo(el,
                { opacity: 0, y: 35 },
                {
                    opacity: 1,
                    y: 0,
                    duration: .8,
                    delay: index < 3 ? index * .08 : 0,
                    ease: 'power3.out',
                    scrollTrigger: typeof ScrollTrigger !== 'undefined' ? {
                        trigger: el,
                        start: 'top 88%',
                        once: true
                    } : undefined
                }
            );
        });
    })();
</script>

</body>

</html>