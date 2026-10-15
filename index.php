<?php
$pageTitle = 'Vision Vivante | AI-Powered Digital Engineering';
$extraHead = <<<'HTML'
<link rel="stylesheet" href="assets/css/tafsol-inspired.css" />
HTML;
require __DIR__ . '/header.php';
?>

<!-- ================= AI HERO ================= -->
<section class="vv-ai-hero" id="home">
  <div class="hero-bg">
    <video
      autoplay
      muted
      loop
      playsinline
      preload="metadata"
      poster="assets/images/hero-banner-video.mp4">

      <source src="assets/images/hero-banner-video.mp4" type="video/mp4">

    </video>
  </div>
  <div class="hero-grid"></div>
  <div class="hero-noise"></div>
  <div class="cursor-glow" id="cursorGlow"></div>

  <div class="container position-relative">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <!-- <div class="vv-kicker reveal-up">
          <span class="live-dot"></span> AI-POWERED DIGITAL ENGINEERING
        </div> -->
        <h1 class="vv-hero-title reveal-up delay-1">
          We build the<br>
          <span class="gradient-text">intelligent future.</span>
        </h1>
        <p class="vv-hero-copy reveal-up delay-2">
          Engineering, AI, automation, and design—building digital products that perform.
        </p>
        <div class="vv-hero-actions reveal-up delay-3">
          <a class="vv-btn vv-btn-primary magnetic" href="#contactUs">Start a conversation <i class="bi bi-arrow-up-right"></i></a>
          <a class="vv-btn vv-btn-ghost magnetic" href="#work">Explore our work <i class="bi bi-arrow-down"></i></a>
        </div>
        <!-- <div class="hero-proof reveal-up delay-4">
          <span><i class="bi bi-stars"></i> AI + Product Engineering</span>
          <span><i class="bi bi-globe2"></i> Global delivery</span>
          <span><i class="bi bi-shield-check"></i> Built to scale</span>
        </div> -->
      </div>

      <!-- <div class="col-lg-6">
        <div class="agent-stage" id="agentStage">

          <div class="agent-orbit orbit-a"></div>
          <div class="agent-orbit orbit-b"></div>
          <div class="agent-orbit orbit-c"></div>

          <div class="agent-particles"></div>
          <div class="agent-core" data-tilt>
            <div class="core-halo"></div>

            <div class="core-ring ring-1"></div>
            <div class="core-ring ring-2"></div>
            <div class="core-ring ring-3"></div>

            <div class="core-logo">
              <img
                src="assets/images/ai-motion-gif.gif"
                alt="Vision Vivante AI">
            </div>
            <div class="core-pulse"></div>
          </div>

          <a
            href="ai-rag-services.php"
            class="agent-card agent-card-top service-agent-card"
            data-float
            data-service="rag">

            <span class="agent-status">
              <i></i> AI SERVICE
            </span>

            <div class="agent-service-icon">
              <i class="bi bi-database"></i>
            </div>

            <div class="agent-service-content">
              <strong>AI RAG System</strong>
              <small>
                Knowledge · Retrieval · Intelligence
              </small>
            </div>
          </a>

          <a
            href="ai-portal-services.php"
            class="agent-card agent-card-left service-agent-card"
            data-float
            data-service="portal">
            <div class="agent-card-icon">
              <i class="bi bi-grid-1x2"></i>
            </div>
            <div>
              <strong>AI Portal</strong>
              <small>
                AI Models · Data · Workflows
              </small>
            </div>
          </a>

          <a
            href="chatbot-integration-services.php"
            class="agent-card agent-card-right service-agent-card"
            data-float
            data-service="chatbot">

            <div class="agent-card-icon">
              <i class="bi bi-chat-dots"></i>
            </div>

            <div>
              <strong>Chatbot Integration</strong>

              <small>
                Conversations · APIs · Automation
              </small>
            </div>

          </a>

          <a
            href="agentic-ai-services.php"
            class="agent-card agent-card-bottom service-agent-card"
            data-float
            data-service="agentic">

            <div class="mini-wave">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div>
              <strong>Agentic AI</strong>

              <small>
                Reason · Plan · Execute
              </small>
            </div>

          </a>

          <div
            class="agent-node node-1"
            data-service-node="rag">
            <span>RAG</span>
          </div>

          <div
            class="agent-node node-2"
            data-service-node="portal">
            <span>LLM</span>
          </div>

          <div
            class="agent-node node-3"
            data-service-node="chatbot">
            <span>API</span>
          </div>

          <div
            class="agent-node node-4"
            data-service-node="agentic">
            <span>AGENT</span>
          </div>

          <div class="agent-connection connection-rag"></div>
          <div class="agent-connection connection-portal"></div>
          <div class="agent-connection connection-chatbot"></div>
          <div class="agent-connection connection-agentic"></div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="hero-marquee">
    <div class="marquee-track">
      <span>AI AGENTS</span><b>✦</b><span>WEB APPS</span><b>✦</b><span>MOBILE</span><b>✦</b><span>AUTOMATION</span><b>✦</b><span>SAAS</span><b>✦</b>
      <span>AI AGENTS</span><b>✦</b><span>WEB APPS</span><b>✦</b><span>MOBILE</span><b>✦</b><span>AUTOMATION</span><b>✦</b><span>SAAS</span><b>✦</b>
    </div>
  </div>
</section>
<!-- ================= STATS ================= -->
<section class="vv-section vv-stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-modern reveal-up">
        <strong data-count="150">0</strong><span>+</span><small>Projects delivered</small>
      </div>
      <div class="stat-modern reveal-up">
        <strong data-count="100">0</strong><span>%</span><small>Client satisfaction</small>
      </div>
      <div class="stat-modern reveal-up">
        <strong data-count="10">0</strong><span>+</span><small>Years engineering</small>
      </div>
      <div class="stat-modern reveal-up">
        <strong>24</strong><span>/7</span><small>Digital possibilities</small>
      </div>
    </div>
  </div>
</section>



<!-- =========================================================
     SERVICES — STICKY CASE STUDY STYLE
========================================================= -->

<section class="vv-services-sticky" id="services">
  <div class="container-xxl">
    <div class="vv-services-layout">
      <!-- =================================================
                 LEFT — STICKY NAVIGATION
            ================================================== -->

      <aside class="vv-services-sidebar">
        <div class="vv-services-sidebar-inner">
          <div class="vv-services-eyebrow">
            OUR SERVICES
          </div>
          <h2 class="vv-services-title">
            AI That
            Drives <br><span>Growth</span>
          </h2>


          <!-- SERVICE TABS -->
          <div class="vv-service-tabs">
            <div class="vv-service-tab-group">
              <!-- <div class="vv-service-tab-group-title">
                AI SERVICES
              </div> -->
              <button
                class="vv-service-tab active"
                data-service="agents">
                <span>AI Agents & Agentic Systems</span>
              </button>
              <button
                class="vv-service-tab"
                data-service="rag">
                <span>RAG & Enterprise Knowledge</span>
              </button>
              <button
                class="vv-service-tab"
                data-service="digital-marketing">
                <span>Digital Marketing</span>
              </button>
              <button
                class="vv-service-tab"
                data-service="voice">
                <span>Voice & Conversational AI</span>
              </button>
              <button
                class="vv-service-tab"
                data-service="web">
                <span>Web & Application Development</span>
              </button>
            </div>
          </div>
        </div>
      </aside>


      <!-- =================================================
                 RIGHT — SERVICE CONTENT
            ================================================== -->
      <div class="vv-services-content">
        <!-- =================================================
                     01 AI AGENTS
                ================================================== -->
        <article
          class="vv-service-panel active"
          data-service-panel="agents">

          <div class="vv-service-panel-top">
            <!-- <div class="vv-service-panel-eyebrow">
              AI AGENTS & AGENTIC SYSTEMS
            </div> -->

            <div class="vv-service-panel-number">
              01
            </div>
          </div>

          <h3>
            AI Agents That
            <span>Execute Real Work</span>
          </h3>

          <div class="vv-service-video">

            <video
              muted
              loop
              playsinline
              preload="metadata"
              poster="assets/images/command-portal-loop.gif">
              <source
                src="assets/videos/services/ai-agents.mp4"
                type="video/mp4">

            </video>

            <div class="vv-service-video-overlay"></div>

            <div class="vv-video-status">
              <span></span>
              AUTONOMOUS AI SYSTEM
            </div>

            <!-- <button
              class="vv-video-play"
              type="button">

              <i class="bi bi-play-fill"></i>

            </button> -->

            <div class="vv-video-caption">
              <span>AI AGENT DEMO</span>
              <i class="bi bi-arrow-up-right"></i>
            </div>

          </div>
          <p>
            Build intelligent agents that reason, use tools,
            access business data and execute complex workflows
            with minimal human intervention.
          </p>
        </article>

        <!-- =================================================
                     02 RAG
                ================================================== -->
        <article
          class="vv-service-panel"
          data-service-panel="rag">

          <div class="vv-service-panel-top">

            <div class="vv-service-panel-eyebrow">
              RAG & ENTERPRISE KNOWLEDGE
            </div>

            <div class="vv-service-panel-number">
              02
            </div>

          </div>

          <h3>
            Turn Business Knowledge
            <span>Into Intelligent Answers</span>
          </h3>

          <div class="vv-service-video">

            <video
              muted
              loop
              playsinline
              preload="metadata"
              poster="assets/images/rag-pipeline.gif">

              <source
                src="assets/images/rag-pipeline.gif"
                type="video/gif">

            </video>

            <div class="vv-service-video-overlay"></div>

            <div class="vv-video-status">
              <span></span>
              RAG KNOWLEDGE SYSTEM
            </div>

            <!-- <button
              class="vv-video-play"
              type="button">
              <i class="bi bi-play-fill"></i>
            </button> -->

            <div class="vv-video-caption">
              <span>RAG SYSTEM DEMO</span>
              <i class="bi bi-arrow-up-right"></i>
            </div>

          </div>
          <p>
            Connect AI with private documents, databases and
            business knowledge using retrieval-augmented
            generation systems.
          </p>
        </article>


        <!-- =================================================
                     03 DIGITAL MARKETING
                ================================================== -->
        <article
          class="vv-service-panel"
          data-service-panel="digital-marketing">
          <div class="vv-service-panel-top">
            <div class="vv-service-panel-eyebrow">
              Digital Marketing
            </div>
            <div class="vv-service-panel-number">
              03
            </div>
          </div>
          <h3>
            Automate Workflows
            <span>With Intelligent AI</span>
          </h3>

          <div class="vv-service-video">

            <video
              muted
              loop
              playsinline
              preload="metadata"
              poster="assets/images/seo.gif">

              <source
                src="assets/images/seo.gif"
                type="video/gif">

            </video>

            <div class="vv-service-video-overlay"></div>

            <div class="vv-video-status">
              <span></span>
              AI WORKFLOW AUTOMATION
            </div>

            <!-- <button
              class="vv-video-play"
              type="button">

              <i class="bi bi-play-fill"></i>

            </button> -->

            <div class="vv-video-caption">
              <span>AUTOMATION DEMO</span>
              <i class="bi bi-arrow-up-right"></i>
            </div>

          </div>
          <p>
            Connect AI with workflows, APIs and business
            systems to eliminate repetitive manual operations.
          </p>
        </article>

        <!-- =================================================
                     04 VOICE
                ================================================== -->
        <article
          class="vv-service-panel"
          data-service-panel="voice">

          <div class="vv-service-panel-top">

            <div class="vv-service-panel-eyebrow">
              VOICE & CONVERSATIONAL AI
            </div>

            <div class="vv-service-panel-number">
              04
            </div>

          </div>

          <h3>
            Conversations That
            <span>Understand Your Customers</span>
          </h3>

          <div class="vv-service-video">

            <video
              muted
              loop
              playsinline
              preload="metadata"
              poster="assets/images/AI-Customer-Support.gif">

              <source
                src="assets/images/AI-Customer-Support.gif"
                type="video/mp4">

            </video>

            <div class="vv-service-video-overlay"></div>

            <div class="vv-video-status">
              <span></span>
              CONVERSATIONAL AI
            </div>

            <div class="vv-video-caption">
              <span>VOICE AI DEMO</span>
              <i class="bi bi-arrow-up-right"></i>
            </div>

          </div>
          <p>
            Create intelligent voice and chat experiences
            connected to your business systems.
          </p>
        </article>

        <!-- =================================================
                     05 WEB & DEVELOPMENT
                ================================================== -->
        <article
          class="vv-service-panel"
          data-service-panel="web">

          <div class="vv-service-panel-top">

            <div class="vv-service-panel-eyebrow">
              SOFTWARE & PRODUCT ENGINEERING
            </div>

            <div class="vv-service-panel-number">
              05
            </div>

          </div>

          <h3>
            Web & Mobile Applications
            <span>Built to Scale</span>
          </h3>

          <div class="vv-service-video">

            <video
              muted
              loop
              playsinline
              preload="metadata"
              poster="assets/images/web-mobile-application.gif">

              <source
                src="assets/images/web-mobile-application.gif"
                type="video/gif">

            </video>

            <div class="vv-service-video-overlay"></div>

            <div class="vv-video-status">
              <span></span>
              WEB APPLICATION
            </div>

            <!-- <button
              class="vv-video-play"
              type="button">
              <i class="bi bi-play-fill"></i>
            </button> -->

            <div class="vv-video-caption">
              <span>WEB DEVELOPMENT</span>
              <i class="bi bi-arrow-up-right"></i>
            </div>
          </div>
          <p>
            Fast, scalable web and mobile applications engineered around
            your business and AI capabilities.
          </p>
        </article>
      </div>

    </div>

  </div>

</section>

<!-- ================= INTRO / WHAT WE DO ================= -->
<!-- <section class="vv-section vv-intro" id="about">
  <div class="container">

    <div class="row gy-4 align-items-end">
      <div class="col-lg-7">
        <div class="section-eyebrow reveal-up">WHAT WE DO</div>

        <h2 class="display-title reveal-up">
          From a bold idea to a
          <br>
          <span>working advantage.</span>
        </h2>
      </div>

      <div class="col-lg-5">
        <p class="section-copy reveal-up">
          We don't just ship screens. We design intelligent systems that
          connect your customers, data and operations into one seamless
          digital experience.
        </p>
      </div>
    </div>

    
    <div class="vv-pillars">
      
      <div class="vv-pillar reveal-up">
        <div class="vv-pillar-number">01</div>

        <div class="vv-pillar-content">
          <h3>AI Engineering</h3>

          <p>
            Design and build AI-powered products, LLM applications,
            agents, RAG systems, recommendation engines, computer vision
            solutions, and intelligent workflows.
          </p>
        </div>

        <div class="vv-pillar-arrow">↗</div>
      </div>
      
      <div class="vv-pillar reveal-up">
        <div class="vv-pillar-number">02</div>

        <div class="vv-pillar-content">
          <h3>Product Engineering</h3>

          <p>
            Turn ideas into scalable SaaS platforms, web applications,
            mobile apps, dashboards, marketplaces, and enterprise systems.
          </p>
        </div>

        <div class="vv-pillar-arrow">↗</div>
      </div>
      
      <div class="vv-pillar reveal-up">
        <div class="vv-pillar-number">03</div>

        <div class="vv-pillar-content">
          <h3>Intelligent Automation</h3>

          <p>
            Connect AI with your existing tools, APIs, databases, and
            workflows to automate processes that previously required
            manual effort.
          </p>
        </div>

        <div class="vv-pillar-arrow">↗</div>
      </div>
      
      <div class="vv-pillar reveal-up">
        <div class="vv-pillar-number">04</div>

        <div class="vv-pillar-content">
          <h3>AI Transformation</h3>

          <p>
            Identify opportunities to introduce AI across your business —
            from customer experience and operations to sales, support,
            analytics, and internal workflows.
          </p>
        </div>

        <div class="vv-pillar-arrow">↗</div>
      </div>
    </div>
  </div>
</section> -->

<!-- ================= WHY US ================= -->
<section class="vv-section vv-why">
  <div class="container">
    <div class="why-layout">
      <div class="why-sticky reveal-up">
        <div class="section-eyebrow">WHY VISION VIVANTE</div>
        <h2 class="display-title">Engineering <br> with <span> intent.</span></h2>
        <p class="section-copy">Senior engineering thinking, modern AI capabilities and a product mindset—without layers of unnecessary process.</p>
      </div>
      <div class="why-list">
        <div class="why-item reveal-up"><span>01</span>
          <div>
            <h3>AI-native thinking</h3>
            <p>We look for places where intelligent automation can create a real business advantage.</p>
          </div><i class="bi bi-stars"></i>
        </div>
        <div class="why-item reveal-up"><span>02</span>
          <div>
            <h3>Built for scale</h3>
            <p>Clean architecture, observability and infrastructure choices that support your next stage.</p>
          </div><i class="bi bi-arrow-up-right-circle"></i>
        </div>
        <div class="why-item reveal-up"><span>03</span>
          <div>
            <h3>Design meets engineering</h3>
            <p>One team connects product strategy, UX and implementation so nothing gets lost in translation.</p>
          </div><i class="bi bi-bezier2"></i>
        </div>
        <div class="why-item reveal-up"><span>04</span>
          <div>
            <h3>Outcome over output</h3>
            <p>We measure success by what the product changes for your users and your business.</p>
          </div><i class="bi bi-bullseye"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="testimonials-section-wrap">
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

<!-- ================= FAQ SECTION ================= -->
<section class="vv-faq-section" id="faq">

  <div class="vv-faq-glow vv-faq-glow-one"></div>
  <div class="vv-faq-glow vv-faq-glow-two"></div>

  <div class="container">

    <div class="vv-faq-header reveal">

      <div class="vv-faq-heading-wrap">
        <span class="vv-faq-eyebrow">
          <span class="vv-faq-dot"></span>
          KNOWLEDGE BASE
        </span>

        <h2>
          Everything
          <span class="vv-faq-gradient">you need to know.</span>
        </h2>
      </div>

      <div class="vv-faq-intro">
        <p>
          Everything you need to know about working with
          Vision Vivante to build, integrate and scale
          AI-powered digital solutions.
        </p>

        <div class="vv-faq-status">
          <span class="vv-faq-status-dot"></span>
          AI • TECHNOLOGY • ENGINEERING
        </div>
      </div>

    </div>


    <div class="vv-faq-layout">
      <!-- LEFT -->
      <div class="vv-faq-side">
        <div class="vv-faq-side-card">
          <div class="vv-faq-ai-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <span class="vv-faq-side-label">
            NEED SOMETHING ELSE?
          </span>

          <h3>
            Let's talk about
            your next idea.
          </h3>

          <p>
            Tell us what you're building. We'll help you
            identify the right technology, architecture
            and AI strategy.
          </p>

          <a href="#contact" class="vv-faq-contact-btn">
            Start a conversation
            <i class="fas fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>

      <!-- RIGHT FAQ -->
      <div class="vv-faq-list">
        <div class="vv-faq-item active">

          <button class="vv-faq-question" type="button">

            <span class="vv-faq-number">01</span>

            <span class="vv-faq-question-text">
              What kind of AI solutions does Vision Vivante build?
            </span>

            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>

          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                We build AI agents, agentic systems, RAG and
                enterprise knowledge platforms, AI chatbots,
                conversational AI, voice solutions and
                custom AI integrations. We can also integrate
                AI capabilities into existing websites,
                applications and business platforms.
              </p>
            </div>
          </div>

        </div>

        <div class="vv-faq-item">

          <button class="vv-faq-question" type="button">

            <span class="vv-faq-number">02</span>

            <span class="vv-faq-question-text">
              Can you integrate AI into our existing application?
            </span>

            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>

          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                Yes. We can integrate AI into existing web
                applications, mobile apps, portals, CRMs,
                eCommerce platforms and internal business
                systems without requiring a complete rebuild.
              </p>
            </div>
          </div>

        </div>

        <div class="vv-faq-item">

          <button class="vv-faq-question" type="button">

            <span class="vv-faq-number">03</span>

            <span class="vv-faq-question-text">
              What is a RAG system and when should we use one?
            </span>

            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>
          </button>
          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                Retrieval-Augmented Generation (RAG) allows
                an AI system to retrieve relevant information
                from your business data before generating an
                answer. It is especially useful when you need
                AI to work with company documents, knowledge
                bases, policies, product information or other
                continuously changing data.
              </p>
            </div>
          </div>
        </div>

        <div class="vv-faq-item">
          <button class="vv-faq-question" type="button">
            <span class="vv-faq-number">04</span>
            <span class="vv-faq-question-text">
              Can you build custom AI agents for our business?
            </span>
            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>
          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                Yes. We can design AI agents around specific
                business workflows, allowing them to reason,
                access information, use tools and interact
                with your existing systems according to
                clearly defined business rules.
              </p>
            </div>
          </div>
        </div>

        <div class="vv-faq-item">
          <button class="vv-faq-question" type="button">
            <span class="vv-faq-number">05</span>
            <span class="vv-faq-question-text">
              Do you develop websites and mobile applications?
            </span>
            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>
          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                Yes. Our engineering team develops scalable
                websites, web applications, mobile apps and
                custom digital platforms, with AI capabilities
                integrated where they provide measurable value.
              </p>
            </div>
          </div>
        </div>

        <!-- <div class="vv-faq-item">
          <button class="vv-faq-question" type="button">
            <span class="vv-faq-number">06</span>
            <span class="vv-faq-question-text">
              How do you approach a new project?
            </span>
            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>
          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                We typically start by understanding your
                business objectives, users and existing
                technology. From there we define the
                architecture, technology stack, development
                roadmap and AI opportunities before moving
                into implementation and continuous
                improvement.
              </p>
            </div>
          </div>
        </div>

        <div class="vv-faq-item">
          <button class="vv-faq-question" type="button">
            <span class="vv-faq-number">07</span>
            <span class="vv-faq-question-text">
              Can you work with our existing development team?
            </span>
            <span class="vv-faq-icon">
              <i class="fas fa-plus"></i>
            </span>
          </button>

          <div class="vv-faq-answer">
            <div class="vv-faq-answer-inner">
              <p>
                Absolutely. We can work as an extension of
                your existing team, provide dedicated
                engineering resources, or take ownership of
                specific AI, product engineering or
                development initiatives.
              </p>
            </div>
          </div>
        </div> -->
      </div>
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
<script src="assets/js/tafsol-inspired.js"></script>

</body>

</html>