<?php
$pageTitle = 'Digital Marketing Services | Vision Vivante';
$extraHead = <<<'HTML'
<meta
      name="description"
      content="Performance-focused digital marketing services including SEO, social media, paid media, email and content marketing."
    />
    <style>
      body.dm-page {
        font-family: "Averta-Regular", Inter, Arial, sans-serif;
        background: #fff;
        overflow-x: hidden;
      }
      .dm-page .vv-navbar {
        position: absolute;
        background: linear-gradient(
          180deg,
          rgba(0, 0, 0, 0.82),
          rgba(0, 0, 0, 0)
        );
      }
      .min-vh-75 {
        min-height: 780px;
      }
      .section-pad {
        padding: 110px 0;
      }
      .dm-hero {
        position: relative;
        min-height: 780px;
        display: flex;
        align-items: center;
        overflow: hidden;
        background:
          radial-gradient(
            circle at 76% 26%,
            rgba(2, 191, 225, 0.18),
            transparent 30%
          ),
          linear-gradient(135deg, #030611 0%, #090d25 48%, #0f1241 100%);
        color: #fff;
      }
      .dm-hero #dm-hero-canvas,
      .dm-process #dm-process-canvas {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
      }
      .dm-hero .container {
        z-index: 2;
      }
      .dm-hero .eyebrow {
        display: inline-flex;
        padding: 7px 12px;
        border: 1px solid rgba(57, 182, 240, 0.28);
        border-radius: 999px;
        background: rgba(57, 182, 240, 0.08);
      }
      .dm-display {
        font-family: "Averta-Bold", Inter, Arial, sans-serif;
        font-size: clamp(3.1rem, 6.2vw, 6.4rem);
        line-height: 0.98;
        letter-spacing: -0.045em;
        max-width: 980px;
      }
      .dm-lead {
        font-size: 1.15rem;
        line-height: 1.75;
        color: rgba(230, 235, 247, 0.72);
        max-width: 760px;
      }
      .dm-hero .btn-vv-outline {
        background: rgba(255, 255, 255, 0.04);
        color: #fff;
        border-color: rgba(255, 255, 255, 0.18);
      }
      .dm-metrics {
        display: flex;
        gap: 34px;
        flex-wrap: wrap;
      }
      .dm-metrics div {
        display: flex;
        flex-direction: column;
      }
      .dm-metrics strong {
        font-size: 1.45rem;
      }
      .dm-metrics span {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.5);
      }
      .dm-hero-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(55px);
        opacity: 0.35;
      }
      .dm-orb-a {
        width: 320px;
        height: 320px;
        background: #40C77E;
        right: 5%;
        top: 22%;
      }
      .dm-orb-b {
        width: 260px;
        height: 260px;
        background: #064B3A;
        right: 28%;
        bottom: 5%;
      }
      .dm-3d-stage {
        position: relative;
        height: 520px;
        perspective: 1100px;
        transform-style: preserve-3d;
      }
      .dm-glass-panel {
        position: absolute;
        left: 8%;
        top: 16%;
        width: 82%;
        padding: 28px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 28px;
        background: linear-gradient(
          145deg,
          rgba(255, 255, 255, 0.12),
          rgba(255, 255, 255, 0.035)
        );
        box-shadow: 0 35px 90px rgba(0, 0, 0, 0.38);
        backdrop-filter: blur(16px);
        transform: rotateY(-10deg) rotateX(8deg);
        transform-style: preserve-3d;
      }
      .dm-panel-kicker {
        font-size: 0.72rem;
        letter-spacing: 0.18em;
        color: #76e8ff;
      }
      .dm-chart-bars {
        height: 210px;
        display: flex;
        align-items: end;
        gap: 13px;
        padding-top: 26px;
      }
      .dm-chart-bars i {
        flex: 1;
        border-radius: 8px 8px 2px 2px;
        background: linear-gradient(180deg, #40C77E, #064B3A);
        box-shadow: 0 0 20px rgba(2, 191, 225, 0.2);
      }
      .dm-chart-bars i:nth-child(1) {
        height: 32%;
      }
      .dm-chart-bars i:nth-child(2) {
        height: 48%;
      }
      .dm-chart-bars i:nth-child(3) {
        height: 43%;
      }
      .dm-chart-bars i:nth-child(4) {
        height: 66%;
      }
      .dm-chart-bars i:nth-child(5) {
        height: 59%;
      }
      .dm-chart-bars i:nth-child(6) {
        height: 82%;
      }
      .dm-chart-bars i:nth-child(7) {
        height: 95%;
      }
      .dm-float-card {
        position: absolute;
        display: flex;
        gap: 10px;
        align-items: center;
        padding: 13px 17px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        background: rgba(7, 12, 35, 0.76);
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.32);
        backdrop-filter: blur(12px);
      }
      .dm-float-card i {
        color: #42d8ef;
      }
      .card-seo {
        top: 7%;
        right: -2%;
      }
      .card-social {
        bottom: 17%;
        left: -3%;
      }
      .card-ppc {
        bottom: 5%;
        right: 7%;
      }
      .dm-section-head {
        max-width: 780px;
      }
      .dm-section-head .text-gray {
        font-size: 1.04rem;
        line-height: 1.7;
      }
      .dm-service-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 20px;
      }
      .dm-service-card {
        grid-column: span 4;
        position: relative;
        min-height: 310px;
        padding: 30px;
        border: 1px solid #e7ecf7;
        border-radius: 24px;
        background: #fff;
        box-shadow: 0 18px 50px rgba(12, 26, 74, 0.06);
        overflow: hidden;
        transition: 0.35s ease;
        transform-style: preserve-3d;
      }
      .dm-service-card:nth-child(4),
      .dm-service-card:nth-child(5) {
        grid-column: span 6;
      }
      .dm-service-card:before {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        right: -70px;
        top: -70px;
        background: radial-gradient(
          circle,
          rgba(2, 191, 225, 0.16),
          transparent 68%
        );
      }
      .dm-service-card:hover {
        transform: translateY(-8px) rotateX(2deg);
        box-shadow: 0 30px 65px rgba(18, 41, 122, 0.13);
        border-color: rgba(2, 191, 225, 0.4);
      }
      .dm-icon {
        width: 58px;
        height: 58px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        font-size: 1.5rem;
        color: #fff;
        background: linear-gradient(135deg, #40C77E, #064B3A);
        box-shadow: 0 12px 24px rgba(39, 24, 135, 0.2);
      }
      .dm-service-card h3 {
        font-size: 1.25rem;
        margin: 26px 0 12px;
      }
      .dm-service-card p {
        color: #667085;
        line-height: 1.65;
      }
      .dm-chip {
        position: absolute;
        bottom: 28px;
        left: 30px;
        font-size: 0.72rem;
        text-transform: uppercase;
        letter-spacing: 0.14em;
        color: #12297a;
      }
      .dm-process {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #050712, #0b102b);
        color: #fff;
      }
      .dm-muted {
        color: rgba(230, 235, 247, 0.62);
      }
      .dm-process-line {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 14px;
        position: relative;
      }
      .dm-process-line:before {
        content: "";
        position: absolute;
        height: 1px;
        left: 6%;
        right: 6%;
        top: 76px;
        background: linear-gradient(
          90deg,
          transparent,
          #40C77E,
          #4935d2,
          transparent
        );
        opacity: 0.5;
      }
      .dm-process-step {
        position: relative;
        text-align: center;
        padding: 0 10px;
      }
      .dm-process-step > span {
        font-size: 0.7rem;
        color: #5eddf2;
        letter-spacing: 0.15em;
      }
      .dm-process-icon {
        position: relative;
        z-index: 2;
        width: 92px;
        height: 92px;
        margin: 18px auto 24px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        font-size: 1.8rem;
        background: linear-gradient(145deg, #05c0df, #261887);
        box-shadow:
          0 0 0 9px #090d22,
          0 18px 45px rgba(2, 191, 225, 0.16);
      }
      .dm-process-step h3 {
        font-size: 1.02rem;
      }
      .dm-process-step p {
        font-size: 0.88rem;
        line-height: 1.6;
        color: rgba(230, 235, 247, 0.56);
      }
      .dm-work {
        background: #f8faff;
      }
      .dm-dashboard-grid {
        display: grid;
        grid-template-columns: 1.6fr 1fr;
        gap: 22px;
      }
      .dm-dashboard {
        background: #fff;
        border: 1px solid #e5eaf5;
        border-radius: 22px;
        padding: 24px;
        box-shadow: 0 18px 45px rgba(12, 26, 74, 0.06);
        min-height: 260px;
      }
      .dm-dashboard-wide {
        grid-row: span 2;
        min-height: 542px;
      }
      .dm-dash-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
      }
      .dm-dash-top b {
        color: #059a70;
      }
      .dm-dash-top small {
        color: #98a2b3;
      }
      .dm-line-chart {
        height: 360px;
        display: flex;
        align-items: center;
      }
      .dm-line-chart svg {
        width: 100%;
        height: 230px;
        filter: drop-shadow(0 10px 12px rgba(43, 87, 232, 0.16));
      }
      .dm-dash-labels {
        display: flex;
        justify-content: space-between;
        color: #98a2b3;
        font-size: 0.75rem;
      }
      .dm-donut {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        margin: 26px auto 18px;
        display: grid;
        place-items: center;
        background: conic-gradient(#40C77E 0 64%, #0B8259 64% 86%, #e8edf6 86%);
        position: relative;
      }
      .dm-donut:after {
        content: "";
        position: absolute;
        width: 94px;
        height: 94px;
        background: #fff;
        border-radius: 50%;
      }
      .dm-donut span {
        position: relative;
        z-index: 2;
        font-weight: 700;
      }
      .dm-legend {
        display: grid;
        grid-template-columns: 10px 1fr auto;
        gap: 9px;
        align-items: center;
        font-size: 0.8rem;
        color: #667085;
        margin-top: 9px;
      }
      .dm-legend i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #40C77E;
      }
      .dm-mini-bars {
        height: 140px;
        display: flex;
        gap: 11px;
        align-items: end;
        margin: 25px 0;
      }
      .dm-mini-bars i {
        flex: 1;
        background: linear-gradient(180deg, #40C77E, #087250);
        border-radius: 6px 6px 2px 2px;
      }
      .reveal {
        will-change: transform, opacity;
      }
      @media (max-width: 991px) {
        .dm-page .vv-navbar {
          background: #070b1c;
        }
        .min-vh-75 {
          min-height: auto;
          padding: 150px 0 90px;
        }
        .dm-3d-stage {
          height: 440px;
        }
        .dm-service-card,
        .dm-service-card:nth-child(4),
        .dm-service-card:nth-child(5) {
          grid-column: span 6;
        }
        .dm-process-line {
          grid-template-columns: 1fr 1fr;
        }
        .dm-process-line:before {
          display: none;
        }
        .dm-dashboard-grid {
          grid-template-columns: 1fr;
        }
        .dm-dashboard-wide {
          grid-row: auto;
          min-height: 420px;
        }
        .dm-line-chart {
          height: 260px;
        }
        .dm-process-step {
          padding: 20px;
        }
      }
      @media (max-width: 575px) {
        .section-pad {
          padding: 78px 0;
        }
        .dm-display {
          font-size: 3.1rem;
        }
        .dm-service-card,
        .dm-service-card:nth-child(4),
        .dm-service-card:nth-child(5) {
          grid-column: 1/-1;
        }
        .dm-process-line {
          grid-template-columns: 1fr;
        }
        .dm-3d-stage {
          height: 390px;
        }
        .dm-glass-panel {
          left: 4%;
          width: 92%;
          padding: 20px;
        }
        .dm-float-card {
          font-size: 0.8rem;
        }
        .card-social {
          left: 0;
        }
        .card-seo {
          right: 0;
        }
        .dm-metrics {
          gap: 20px;
        }
        .dm-dashboard-wide {
          min-height: 350px;
        }
      }
    </style>
HTML;
$bodyAttrs = <<<'HTML'
class="dm-page"
HTML;
$showPreloader = false;
require __DIR__ . '/header.php';
?>
<main>
  <section class="dm-hero" id="top">
    <canvas id="dm-hero-canvas" aria-hidden="true"></canvas>
    <div class="dm-hero-orb dm-orb-a"></div>
    <div class="dm-hero-orb dm-orb-b"></div>
    <div class="container position-relative">
      <div class="row align-items-center min-vh-75 g-5">
        <div class="col-lg-7 dm-hero-copy">
          <p class="eyebrow mb-3">DIGITAL MARKETING SERVICES</p>
          <h1 class="dm-display">
            Turn attention into
            <span class="grad-text">measurable growth.</span>
          </h1>
          <p class="dm-lead">
            Vision Vivante offers a comprehensive suite of digital marketing
            services built to grow your visibility, engage the right
            audience and generate tangible business results across local and
            global markets.
          </p>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="#contactUs" class="btn-vv-primary">Start a Campaign <i class="bi bi-arrow-up-right ms-2"></i></a>
            <a href="#dm-services" class="btn-vv-outline">Explore Services</a>
          </div>
          <div class="dm-metrics mt-5">
            <div><strong>5+</strong><span>Core channels</span></div>
            <div><strong>360°</strong><span>Growth strategy</span></div>
            <div><strong>ROI</strong><span>Focused reporting</span></div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="dm-3d-stage" id="dm-stage">
            <div class="dm-glass-panel">
              <span class="dm-panel-kicker">LIVE CAMPAIGN SIGNAL</span>
              <div class="dm-chart-bars">
                <i></i><i></i><i></i><i></i><i></i><i></i><i></i>
              </div>
              <div class="d-flex justify-content-between mt-3">
                <span>Organic + Paid</span><b>+38.4%</b>
              </div>
            </div>
            <div class="dm-float-card card-seo">
              <i class="bi bi-search"></i><span>SEO</span>
            </div>
            <div class="dm-float-card card-social">
              <i class="bi bi-share-fill"></i><span>Social</span>
            </div>
            <div class="dm-float-card card-ppc">
              <i class="bi bi-bullseye"></i><span>PPC</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="dm-services section-pad" id="dm-services">
    <canvas id="dm-services-canvas" aria-hidden="true"></canvas>
    <div class="container position-relative">
      <div class="dm-section-head reveal text-center mx-auto">
        <p class="eyebrow">WHAT WE DO</p>
        <h2 class="section-title">
          Digital Marketing <span class="grad-text">Services</span>
        </h2>
        <p class="text-gray">
          Bespoke strategies that amplify your brand's online presence,
          reach your target audience and turn marketing activity into clear
          business outcomes.
        </p>
      </div>
      <div class="dm-service-grid mt-5">
        <article class="dm-service-card reveal">
          <div class="dm-icon"><i class="bi bi-share-fill"></i></div>
          <h3>Social Media Marketing</h3>
          <p>
            Build communities and demand with channel-specific content,
            campaign planning and performance optimization.
          </p>
          <span class="dm-chip">Engage</span>
        </article>
        <article class="dm-service-card reveal">
          <div class="dm-icon"><i class="bi bi-search"></i></div>
          <h3>SEO</h3>
          <p>
            Improve discoverability through technical SEO, search intent
            mapping, content optimization and authority building.
          </p>
          <span class="dm-chip">Rank</span>
        </article>
        <article class="dm-service-card reveal">
          <div class="dm-icon"><i class="bi bi-cursor-fill"></i></div>
          <h3>Pay Per Click</h3>
          <p>
            Capture high-intent demand with tightly structured paid search
            and paid social campaigns built around conversion.
          </p>
          <span class="dm-chip">Convert</span>
        </article>
        <article class="dm-service-card reveal">
          <div class="dm-icon">
            <i class="bi bi-envelope-paper-fill"></i>
          </div>
          <h3>Email Marketing</h3>
          <p>
            Nurture leads and retain customers with segmented journeys,
            automation and creative that earns attention.
          </p>
          <span class="dm-chip">Nurture</span>
        </article>
        <article class="dm-service-card reveal">
          <div class="dm-icon"><i class="bi bi-journal-richtext"></i></div>
          <h3>Content Marketing</h3>
          <p>
            Turn expertise into useful content that builds trust, supports
            search visibility and moves buyers forward.
          </p>
          <span class="dm-chip">Influence</span>
        </article>
      </div>
    </div>
  </section>

  <section class="dm-process section-pad">
    <canvas id="dm-process-canvas" aria-hidden="true"></canvas>
    <div class="container position-relative">
      <div class="dm-section-head reveal text-center mx-auto">
        <p class="eyebrow">OUR METHOD</p>
        <h2 class="section-title text-white">Digital Marketing Process</h2>
        <p class="dm-muted">
          Every business is unique, so our process starts with your goals,
          audience and market before we build the channel mix.
        </p>
      </div>
      <div class="dm-process-line mt-5">
        <article class="dm-process-step reveal">
          <span>01</span>
          <div class="dm-process-icon">
            <i class="bi bi-clipboard-data"></i>
          </div>
          <h3>Audit & Analysis</h3>
          <p>
            Benchmark the website, audience, competitors and existing
            acquisition performance.
          </p>
        </article>
        <article class="dm-process-step reveal">
          <span>02</span>
          <div class="dm-process-icon"><i class="bi bi-diagram-3"></i></div>
          <h3>Strategy Framework</h3>
          <p>
            Define goals, positioning, channel roles, targeting and
            measurable KPIs.
          </p>
        </article>
        <article class="dm-process-step reveal">
          <span>03</span>
          <div class="dm-process-icon">
            <i class="bi bi-speedometer2"></i>
          </div>
          <h3>SEO Optimization</h3>
          <p>
            Strengthen technical foundations, content relevance and
            conversion paths.
          </p>
        </article>
        <article class="dm-process-step reveal">
          <span>04</span>
          <div class="dm-process-icon"><i class="bi bi-megaphone"></i></div>
          <h3>Promotion Tasks</h3>
          <p>
            Launch, test and iterate paid, social, email and content
            initiatives.
          </p>
        </article>
        <article class="dm-process-step reveal">
          <span>05</span>
          <div class="dm-process-icon">
            <i class="bi bi-bar-chart-line"></i>
          </div>
          <h3>Reporting</h3>
          <p>
            Translate performance data into decisions, next actions and
            growth opportunities.
          </p>
        </article>
      </div>
    </div>
  </section>

  <section class="dm-work section-pad" id="work">
    <canvas id="dm-work-canvas" aria-hidden="true"></canvas>
    <div class="container position-relative">
      <div class="row align-items-end mb-5 reveal">
        <div class="col-lg-7">
          <p class="eyebrow">OUR PAST WORK</p>
          <h2 class="section-title">
            Performance you can <span class="grad-text">see.</span>
          </h2>
        </div>
        <div class="col-lg-5">
          <p class="text-gray mb-0">
            A visual snapshot of the reporting views used to track search
            visibility, geography, engagement and campaign trends.
          </p>
        </div>
      </div>
      <div class="dm-dashboard-grid">
        <article class="dm-dashboard dm-dashboard-wide reveal">
          <div class="dm-dash-top">
            <span>Traffic Overview</span><b>+24.8%</b>
          </div>
          <div class="dm-line-chart">
            <svg viewBox="0 0 600 180" preserveAspectRatio="none">
              <polyline points="0,145 55,130 110,140 165,105 220,118 275,72 330,85 385,55 440,72 495,35 550,52 600,20"
                fill="none" stroke="url(#g1)" stroke-width="5" />
              <defs>
                <linearGradient id="g1">
                  <stop stop-color="#40C77E" />
                  <stop offset="1" stop-color="#5d45ff" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="dm-dash-labels">
            <span>Jan</span><span>Mar</span><span>May</span><span>Jul</span><span>Sep</span><span>Nov</span>
          </div>
        </article>
        <article class="dm-dashboard reveal">
          <div class="dm-dash-top">
            <span>Channel Mix</span><small>Last 30 days</small>
          </div>
          <div class="dm-donut"><span>64%</span></div>
          <div class="dm-legend"><i></i>Organic Search <b>64%</b></div>
          <div class="dm-legend"><i></i>Paid Media <b>22%</b></div>
          <div class="dm-legend"><i></i>Social <b>14%</b></div>
        </article>
        <article class="dm-dashboard reveal">
          <div class="dm-dash-top">
            <span>Campaign Reach</span><b>3.3K</b>
          </div>
          <div class="dm-mini-bars">
            <i style="height: 42%"></i><i style="height: 70%"></i><i style="height: 55%"></i><i
              style="height: 88%"></i><i style="height: 63%"></i><i style="height: 96%"></i><i style="height: 76%"></i>
          </div>
          <p class="text-gray small mb-0">
            Qualified engagement is trending upward across priority
            segments.
          </p>
        </article>
      </div>
    </div>
  </section>
</main>
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
            <a href="mailto:sales@visionvivante.com" target="_blank"
              class="contact-info-value">sales@visionvivante.com</a>
          </div>
        </div>

        <div class="contact-info-card reveal" data-delay=".1">
          <span class="contact-info-icon"><i class="bi bi-telephone-fill"></i></span>
          <div>
            <p class="contact-info-label">Call Us</p>
            <a href="tel:+919592493222" target="_blank" class="contact-info-value">
              +91 9592493222
            </a>
          </div>
        </div>

        <div class="contact-info-card reveal" data-delay=".2">
          <span class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></span>
          <div>
            <p class="contact-info-label">Visit Us</p>
            <a class="contact-info-value mb-0" target="_blank" href="https://maps.app.goo.gl/R2J7dQ7BoVFfWpk78">
              SCO 21, Second Floor, Swastik Vihar, Mansa Devi Complex,
              Sector 5, Panchkula, Haryana 134114
            </a>
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
<!-- <script src="assets/js/digital-marketing.js"></script> -->

<script>
  (() => {
    gsap.registerPlugin(ScrollTrigger);
    const reduce = matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Navbar + progress
    const nav = document.querySelector("#mainNav");
    addEventListener(
      "scroll",
      () => {
        nav?.classList.toggle("scrolled", scrollY > 30);
        const max = document.documentElement.scrollHeight - innerHeight;
        const p = document.querySelector("#scrollProgress");
        if (p) p.style.width = `${max ? (scrollY / max) * 100 : 0}%`;
      },
      { passive: true },
    );

    // Three.js: a subtle network behind the hero and process section.
    function network(canvas, count = 70, spread = 10) {
      if (!canvas || !window.THREE || reduce) return;
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(55, 1, 0.1, 100);
      camera.position.z = 9;
      const renderer = new THREE.WebGLRenderer({
        canvas,
        alpha: true,
        antialias: true,
      });
      renderer.setPixelRatio(Math.min(devicePixelRatio, 1.6));
      const geo = new THREE.BufferGeometry();
      const arr = new Float32Array(count * 3);
      for (let i = 0; i < count; i++) {
        arr[i * 3] = (Math.random() - 0.5) * spread;
        arr[i * 3 + 1] = (Math.random() - 0.5) * 6;
        arr[i * 3 + 2] = (Math.random() - 0.5) * 5;
      }
      geo.setAttribute("position", new THREE.BufferAttribute(arr, 3));
      const pts = new THREE.Points(
        geo,
        new THREE.PointsMaterial({
          color: 0x36cdeb,
          size: 0.055,
          transparent: true,
          opacity: 0.62,
        }),
      );
      scene.add(pts);
      const wire = new THREE.Mesh(
        new THREE.IcosahedronGeometry(2.2, 1),
        new THREE.MeshBasicMaterial({
          color: 0x392aa2,
          wireframe: true,
          transparent: true,
          opacity: 0.1,
        }),
      );
      wire.position.x = 3.4;
      wire.position.y = 0.2;
      scene.add(wire);
      const resize = () => {
        const box = canvas.getBoundingClientRect();
        renderer.setSize(box.width, box.height, false);
        camera.aspect = box.width / Math.max(box.height, 1);
        camera.updateProjectionMatrix();
      };
      resize();
      addEventListener("resize", resize);
      const tick = () => {
        pts.rotation.y += 0.0008;
        pts.rotation.x += 0.00025;
        wire.rotation.x += 0.0015;
        wire.rotation.y += 0.001;
        renderer.render(scene, camera);
        requestAnimationFrame(tick);
      };
      tick();
    }
    network(document.querySelector("#dm-hero-canvas"), 95, 12);
    network(document.querySelector("#dm-process-canvas"), 52, 13);

    if (!reduce) {
      gsap.from(".dm-hero-copy > *", {
        y: 34,
        opacity: 0,
        duration: 0.9,
        stagger: 0.1,
        ease: "power3.out",
        delay: 0.15,
      });
      gsap.from(".dm-glass-panel", {
        rotateY: -35,
        rotateX: 18,
        z: -160,
        opacity: 0,
        duration: 1.35,
        ease: "power3.out",
        delay: 0.25,
      });
      gsap.from(".dm-float-card", {
        scale: 0.7,
        opacity: 0,
        duration: 0.8,
        stagger: 0.16,
        ease: "back.out(1.7)",
        delay: 0.7,
      });
      gsap.to(".card-seo", {
        y: -14,
        x: 8,
        duration: 2.6,
        yoyo: true,
        repeat: -1,
        ease: "sine.inOut",
      });
      gsap.to(".card-social", {
        y: 14,
        x: -7,
        duration: 3.1,
        yoyo: true,
        repeat: -1,
        ease: "sine.inOut",
      });
      gsap.to(".card-ppc", {
        y: -10,
        x: -5,
        duration: 2.8,
        yoyo: true,
        repeat: -1,
        ease: "sine.inOut",
      });
      document
        .querySelector("#dm-stage")
        ?.addEventListener("pointermove", (e) => {
          const r = e.currentTarget.getBoundingClientRect(),
            rx = ((e.clientY - r.top - r.height / 2) / r.height) * 9,
            ry = ((e.clientX - r.left - r.width / 2) / r.width) * 13;
          gsap.to(".dm-glass-panel", {
            rotateX: 8 - rx,
            rotateY: -10 + ry,
            duration: 0.5,
            ease: "power2.out",
          });
        });
      document
        .querySelector("#dm-stage")
        ?.addEventListener("pointerleave", () =>
          gsap.to(".dm-glass-panel", {
            rotateX: 8,
            rotateY: -10,
            duration: 0.7,
            ease: "power2.out",
          }),
        );
      //   gsap.utils
      //     .toArray(".reveal")
      //     .forEach((el, i) =>
      //       gsap.from(el, {
      //         scrollTrigger: { trigger: el, start: "top 87%", once: true },
      //         y: 34,
      //         opacity: 0,
      //         duration: 0.8,
      //         delay: Math.min((i % 5) * 0.04, 0.16),
      //         ease: "power3.out",
      //       }),
      //     );
      //   gsap.from(".dm-process-icon", {
      //     scrollTrigger: { trigger: ".dm-process-line", start: "top 75%" },
      //     scale: 0,
      //     rotate: -45,
      //     stagger: 0.12,
      //     duration: 0.75,
      //     ease: "back.out(1.7)",
      //   });
    }


  })();
</script>

</body>

</html>