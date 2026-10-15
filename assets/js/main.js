$(function() {

    // Preloader
    $(window).on('load', function() {
        setTimeout(function() { $('#preloader').addClass('loaded'); }, 5000);
    });
    // Fallback in case 'load' fires late for cached assets
    setTimeout(function() { $('#preloader').addClass('loaded'); }, 1800);

    // Navbar shrink on scroll + scroll progress bar
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 40) {
            $('#mainNav').addClass('scrolled');
        } else {
            $('#mainNav').removeClass('scrolled');
        }

        // Back to top button
        if ($(window).scrollTop() > 500) {
            $('#backToTop').addClass('show');
        } else {
            $('#backToTop').removeClass('show');
        }

        // Scroll progress bar
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height() - $(window).height();
        var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        $('#scrollProgress').css('width', pct + '%');
    });

    // Button ripple effect
    $(document).on('click', '.btn-vv-primary, .btn-vv-outline, .btn-light-vv', function(e) {
        var $btn = $(this);
        var offset = $btn.offset();
        var size = Math.max($btn.outerWidth(), $btn.outerHeight());
        var x = e.pageX - offset.left - size / 2;
        var y = e.pageY - offset.top - size / 2;
        var $ripple = $('<span class="ripple"></span>').css({
            width: size,
            height: size,
            left: x,
            top: y
        });
        $btn.append($ripple);
        setTimeout(function() { $ripple.remove(); }, 650);
    });

    // 3D tilt effect on cards (skipped on touch devices)
    if (window.matchMedia('(hover: hover)').matches) {
        $('.tilt-card').on('mouseenter', function() {
            $(this).removeClass('tilt-resetting');
        }).on('mousemove', function(e) {
            var $el = $(this);
            var rect = this.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var rotateX = ((y / rect.height) - 0.5) * -10;
            var rotateY = ((x / rect.width) - 0.5) * 10;
            $el.css('transform', 'perspective(700px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-6px)');
        }).on('mouseleave', function() {
            var $el = $(this);
            $el.addClass('tilt-resetting');
            $el.css('transform', '');
        });
    }

    // Back to top click
    $('#backToTop').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
    });

    // Smooth scroll for in-page anchors
    $('a[href^="#"]').on('click', function(e) {
        var target = $(this).attr('href');
        if (target.length > 1 && $(target).length) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $(target).offset().top - 70 }, 700);
        }
    });

    // Scroll reveal using IntersectionObserver, triggered via jQuery-selected elements
    var revealEls = document.querySelectorAll('.reveal, .reveal-stagger');
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                $(entry.target).addClass('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });
    revealEls.forEach(function(el) { observer.observe(el); });

    // Stagger delay for grid items inside reveal-stagger sections
    $('.reveal-stagger').each(function() {
        $(this).find('.stagger-item').each(function(i) {
            $(this).css('transition-delay', (i * 0.08) + 's');
        });
    });



    // ================= HERO MOTION SYSTEM =================
    // A single requestAnimationFrame loop drives idle floating motion,
    // cursor parallax, and scroll parallax together on the V-mark and badges,
    // so nothing fights over the transform property.
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var canHover = window.matchMedia('(hover: hover)').matches;
    var mouseX = 0,
        mouseY = 0,
        targetMouseX = 0,
        targetMouseY = 0;
    var heroEl = document.querySelector('.hero-section');
    var blobEl = document.querySelector('.hero-blob');
    var badgeEls = document.querySelectorAll('.floating-badge');

    if (heroEl && canHover) {
        heroEl.addEventListener('mousemove', function(e) {
            var rect = heroEl.getBoundingClientRect();
            targetMouseX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
            targetMouseY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
        });
        heroEl.addEventListener('mouseleave', function() {
            targetMouseX = 0;
            targetMouseY = 0;
        });
    }

    if (!reduceMotion && blobEl) {
        (function loop(t) {
            // ease mouse position toward target for smooth trailing motion
            mouseX += (targetMouseX - mouseX) * 0.06;
            mouseY += (targetMouseY - mouseY) * 0.06;

            var idleY = Math.sin(t / 900) * 10;
            var idleRot = Math.sin(t / 1400) * 1.4;
            var scrollY = window.scrollY || window.pageYOffset || 0;
            var scrollParallax = Math.min(scrollY * 0.08, 60);

            blobEl.style.transform =
                'translate(' + (mouseX * 16) + 'px,' + (idleY + (mouseY * 16) - scrollParallax) + 'px) rotate(' + idleRot + 'deg)';

            // badgeEls.forEach(function (el, i) {
            // var depth = 6 + i * 3;
            // var bx = mouseX * depth;
            // var by = Math.sin(t / (700 + i * 150)) * 8 + mouseY * depth - scrollY * 0.04;
            // el.style.transform = 'translate(' + bx + 'px,' + by + 'px)';
            // });

            requestAnimationFrame(loop);
        })(0);
    }

    // ================= PARTICLE NETWORK CANVAS =================
    // A lightweight node-and-line network drifting in the hero background —
    // the kind of ambient depth effect a WebGL/Three.js scene gives, done in 2D canvas.
    var herocanvas = document.getElementById("heroNetwork");

    if (herocanvas) {
        var heroCtx = herocanvas.getContext("2d");
        var heroParticles = [];
        var HERO_PARTICLE_COUNT = window.innerWidth < 768 ? 26 : 50;
        var HERO_LINK_DIST = 130;
        var heroDpr = Math.min(window.devicePixelRatio || 1, 2);

        function heroResizeCanvas() {
            var rect = heroEl.getBoundingClientRect();

            herocanvas.width = rect.width * heroDpr;
            herocanvas.height = rect.height * heroDpr;

            herocanvas.style.width = rect.width + "px";
            herocanvas.style.height = rect.height + "px";

            heroCtx.setTransform(heroDpr, 0, 0, heroDpr, 0, 0);
        }

        function heroMakeParticles() {
            var rect = heroEl.getBoundingClientRect();

            heroParticles = [];

            for (var i = 0; i < HERO_PARTICLE_COUNT; i++) {
                heroParticles.push({
                    x: Math.random() * rect.width,
                    y: Math.random() * rect.height,
                    vx: (Math.random() - 0.5) * 0.35,
                    vy: (Math.random() - 0.5) * 0.35,
                    r: Math.random() * 3.6 + 1
                });
            }
        }

        function heroDrawFrame() {
            var rect = heroEl.getBoundingClientRect();

            heroCtx.clearRect(0, 0, rect.width, rect.height);

            for (var i = 0; i < heroParticles.length; i++) {

                var p = heroParticles[i];

                p.x += p.vx;
                p.y += p.vy;

                if (p.x < 0 || p.x > rect.width) p.vx *= -1;
                if (p.y < 0 || p.y > rect.height) p.vy *= -1;

                heroCtx.beginPath();
                heroCtx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                heroCtx.fillStyle = "rgba(43, 87, 232, 0.14)";
                heroCtx.fill();

                for (var j = i + 1; j < heroParticles.length; j++) {

                    var q = heroParticles[j];
                    var dx = p.x - q.x;
                    var dy = p.y - q.y;
                    var dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < HERO_LINK_DIST) {
                        heroCtx.beginPath();
                        heroCtx.moveTo(p.x, p.y);
                        heroCtx.lineTo(q.x, q.y);
                        heroCtx.strokeStyle =
                            "rgba(0,0,0," +
                            (0.25 * (1 - dist / HERO_LINK_DIST)) +
                            ")";
                        heroCtx.lineWidth = 1;
                        heroCtx.stroke();
                    }
                }
            }
            // Draw particles on top
            for (var i = 0; i < heroParticles.length; i++) {

                var p = heroParticles[i];

                heroCtx.beginPath();
                heroCtx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                heroCtx.fillStyle = "rgba(43, 87, 232, 0.14)";
                heroCtx.fill();
            }
        }

        heroResizeCanvas();
        heroMakeParticles();

        if (!reduceMotion) {
            (function heroAnimate() {
                heroDrawFrame();
                requestAnimationFrame(heroAnimate);
            })();
        } else {
            heroDrawFrame();
        }

        var heroResizeTimer;

        $(window).on("resize", function() {
            clearTimeout(heroResizeTimer);

            heroResizeTimer = setTimeout(function() {
                heroResizeCanvas();
                heroMakeParticles();

                if (reduceMotion) heroDrawFrame();
            }, 200);
        });
    }



    var preloadercanvas = document.getElementById("preloaderNetwork");

    if (preloadercanvas) {

        var preloaderCtx = preloadercanvas.getContext("2d");
        var preloaderParticles = [];

        var PRELOADER_PARTICLE_COUNT = window.innerWidth < 768 ? 26 : 50;
        var PRELOADER_LINK_DIST = 130;
        var preloaderDpr = Math.min(window.devicePixelRatio || 1, 2);

        function preloaderResizeCanvas() {

            var rect = preloadercanvas.getBoundingClientRect();

            preloadercanvas.width = rect.width * preloaderDpr;
            preloadercanvas.height = rect.height * preloaderDpr;

            preloadercanvas.style.width = rect.width + "px";
            preloadercanvas.style.height = rect.height + "px";

            preloaderCtx.setTransform(preloaderDpr, 0, 0, preloaderDpr, 0, 0);
        }

        function preloaderMakeParticles() {

            var rect = preloadercanvas.getBoundingClientRect();

            preloaderParticles = [];

            for (var i = 0; i < PRELOADER_PARTICLE_COUNT; i++) {

                preloaderParticles.push({
                    x: Math.random() * rect.width,
                    y: Math.random() * rect.height,
                    vx: (Math.random() - 0.5) * 0.35,
                    vy: (Math.random() - 0.5) * 0.35,
                    r: Math.random() * 2 + 1.5
                });

            }
        }

        function preloaderDrawFrame() {

            var rect = preloadercanvas.getBoundingClientRect();

            preloaderCtx.clearRect(0, 0, rect.width, rect.height);

            for (var i = 0; i < preloaderParticles.length; i++) {

                var p = preloaderParticles[i];

                p.x += p.vx;
                p.y += p.vy;

                if (p.x < 0 || p.x > rect.width) p.vx *= -1;
                if (p.y < 0 || p.y > rect.height) p.vy *= -1;

                preloaderCtx.beginPath();
                preloaderCtx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                preloaderCtx.fillStyle = "rgba(43,87,232,0.45)";
                preloaderCtx.fill();

                for (var j = i + 1; j < preloaderParticles.length; j++) {

                    var q = preloaderParticles[j];

                    var dx = p.x - q.x;
                    var dy = p.y - q.y;
                    var dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < PRELOADER_LINK_DIST) {

                        preloaderCtx.beginPath();
                        preloaderCtx.moveTo(p.x, p.y);
                        preloaderCtx.lineTo(q.x, q.y);

                        preloaderCtx.strokeStyle =
                            "rgba(255,255,255," +
                            (0.50 * (1 - dist / PRELOADER_LINK_DIST)) +
                            ")";

                        preloaderCtx.lineWidth = 1;
                        preloaderCtx.stroke();
                    }
                }
            }
        }

        preloaderResizeCanvas();
        preloaderMakeParticles();

        if (!reduceMotion) {
            (function preloaderAnimate() {
                preloaderDrawFrame();
                requestAnimationFrame(preloaderAnimate);
            })();
        } else {
            preloaderDrawFrame();
        }

        var preloaderResizeTimer;

        $(window).on("resize", function() {

            clearTimeout(preloaderResizeTimer);

            preloaderResizeTimer = setTimeout(function() {

                preloaderResizeCanvas();
                preloaderMakeParticles();

                if (reduceMotion) preloaderDrawFrame();

            }, 200);

        });
    }
});

const testimonials = [{
        quote: "I was impressed by the food — every dish is bursting with flavor! And I could really tell that they use high-quality ingredients. The staff was friendly and attentive, going the extra mile. I'll definitely be back for more!",
        name: "Tamar Mendelson",
        designation: "Restaurant Critic",
        src: "https://images.unsplash.com/photo-1512316609839-ce289d3eba0a?q=80&w=1368&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
    {
        quote: "This place exceeded all expectations! The atmosphere is inviting, and the staff truly goes above and beyond to ensure a fantastic visit. I'll definitely keep returning for more exceptional dining experience.",
        name: "Joe Charlescraft",
        designation: "Frequent Visitor",
        src: "https://images.unsplash.com/photo-1628749528992-f5702133b686?q=80&w=1368&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fA%3D%3D",
    },
    {
        quote: "Shining Yam is a hidden gem! From the moment I walked in, I knew I was in for a treat. The impeccable service and overall attention to detail created a memorable experience. I highly recommend it!",
        name: "Martina Edelweist",
        designation: "Satisfied Customer",
        src: "https://images.unsplash.com/photo-1524267213992-b76e8577d046?q=80&w=1368&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fA%3D%3D",
    },
];

let activeIndex = 0;
const imageContainer = document.getElementById('image-container');
const nameElement = document.getElementById('name');
const designationElement = document.getElementById('designation');
const quoteElement = document.getElementById('quote');
const dotsContainer = document.getElementById('pagination-dots');

// Only run this slider if all required elements exist
if (imageContainer && nameElement && designationElement && quoteElement && dotsContainer) {

    let autoplayInterval;

    function calculateGap(width) {
        const minWidth = 1024;
        const maxWidth = 1456;
        const minGap = 60;
        const maxGap = 86;

        if (width <= minWidth) return minGap;
        if (width >= maxWidth) return Math.max(minGap, maxGap + 0.06018 * (width - maxWidth));
        return minGap + (maxGap - minGap) * ((width - minWidth) / (maxWidth - minWidth));
    }

    function buildDots() {
        dotsContainer.innerHTML = '';
        testimonials.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            dot.type = 'button';
            dot.dataset.index = index;
            dot.setAttribute('aria-label', `Go to testimonial ${index + 1}`);
            dot.addEventListener('click', () => {
                stopAutoplay();
                goToSlide(index);
            });
            dotsContainer.appendChild(dot);
        });
        updateDots();
    }

    function updateDots() {
        dotsContainer.querySelectorAll('.dot').forEach((dot) => {
            dot.classList.toggle('active', Number(dot.dataset.index) === activeIndex);
        });
    }

    function updateTestimonial(direction) {
        activeIndex = (activeIndex + direction + testimonials.length) % testimonials.length;
        renderSlide();
    }

    function goToSlide(index) {
        activeIndex = ((index % testimonials.length) + testimonials.length) % testimonials.length;
        renderSlide();
    }

    function renderSlide() {
        const containerWidth = imageContainer.offsetWidth;
        const gap = calculateGap(containerWidth);
        const maxStickUp = gap * 0.8;

        testimonials.forEach((testimonial, index) => {
            let img = imageContainer.querySelector(`[data-index="${index}"]`);
            if (!img) {
                img = document.createElement('img');
                img.src = testimonial.src;
                img.alt = testimonial.name;
                img.classList.add('testimonial-image');
                img.dataset.index = index;
                img.draggable = false;
                imageContainer.appendChild(img);
            }

            const offset = (index - activeIndex + testimonials.length) % testimonials.length;
            const zIndex = testimonials.length - Math.abs(offset);
            const scale = index === activeIndex ? 1 : 0.85;

            let translateX, translateY, rotateY;
            if (offset === 0) {
                translateX = '0%';
                translateY = '0%';
                rotateY = 0;
            } else if (offset === 1 || offset === -2) {
                translateX = '20%';
                translateY = `-${maxStickUp / (img.offsetHeight || 1) * 100}%`;
                rotateY = -15;
            } else {
                translateX = '-20%';
                translateY = `-${maxStickUp / (img.offsetHeight || 1) * 100}%`;
                rotateY = 15;
            }

            gsap.to(img, {
                zIndex: zIndex,
                opacity: 1,
                scale: scale,
                x: translateX,
                y: translateY,
                rotateY: rotateY,
                duration: 0.8,
                ease: "power3.out"
            });
        });

        gsap.to([nameElement, designationElement], {
            opacity: 0,
            y: -20,
            duration: 0.3,
            ease: "power2.in",
            onComplete: () => {
                nameElement.textContent = testimonials[activeIndex].name;
                designationElement.textContent = testimonials[activeIndex].designation;
                gsap.to([nameElement, designationElement], {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });

        gsap.to(quoteElement, {
            opacity: 0,
            y: -20,
            duration: 0.3,
            ease: "power2.in",
            onComplete: () => {
                quoteElement.innerHTML = testimonials[activeIndex].quote
                    .split(' ')
                    .map(word => `<span class="word">${word}</span>`)
                    .join(' ');
                gsap.to(quoteElement, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
                animateWords();
            }
        });

        updateDots();
    }

    function animateWords() {
        gsap.from('.word', {
            opacity: 0,
            y: 10,
            stagger: 0.02,
            duration: 0.2,
            ease: "power2.out"
        });
    }

    function handleNext() { updateTestimonial(1); }

    function handlePrev() { updateTestimonial(-1); }

    function startAutoplay() {
        autoplayInterval = setInterval(handleNext, 5000);
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    // ---- Drag / swipe support ----
    let isDragging = false;
    let startX = 0;
    let currentX = 0;
    const dragThreshold = 50; // px needed to trigger a slide change

    function onDragStart(clientX) {
        isDragging = true;
        startX = clientX;
        currentX = clientX;
        stopAutoplay();
    }

    function onDragMove(clientX) {
        if (!isDragging) return;
        currentX = clientX;
    }

    function onDragEnd() {
        if (!isDragging) return;
        isDragging = false;
        const deltaX = currentX - startX;

        if (deltaX > dragThreshold) {
            handlePrev(); // dragged right -> previous
        } else if (deltaX < -dragThreshold) {
            handleNext(); // dragged left -> next
        }
    }

    // Pointer events cover mouse + touch + pen in one API
    imageContainer.addEventListener('pointerdown', (e) => {
        onDragStart(e.clientX);
    });

    window.addEventListener('pointermove', (e) => {
        onDragMove(e.clientX);
    });

    window.addEventListener('pointerup', () => {
        onDragEnd();
    });

    imageContainer.addEventListener('pointerleave', () => {
        if (isDragging) onDragEnd();
    });

    buildDots();
    renderSlide();
    startAutoplay();

    window.addEventListener('resize', () => renderSlide());
}

// WhatsApp chat support widget
var $waWidget = $('#whatsappWidget');
var $waPopup = $('#whatsappPopup');
var $waToggle = $('#whatsappToggle');
var $waClose = $('#whatsappClose');

if ($waWidget.length) {
    // Auto-open once on first load, like the reference screenshot
    setTimeout(function() {
        $waPopup.addClass('hide');
    }, 2500);

    $waToggle.on('click', function() {
        $waPopup.toggleClass('show');
    });

    $waClose.on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $waPopup.removeClass('show');
    });

    // Close popup when clicking outside it
    $(document).on('click', function(e) {
        if (!$waWidget.is(e.target) && $waWidget.has(e.target).length === 0) {
            $waPopup.removeClass('show');
        }
    });
}