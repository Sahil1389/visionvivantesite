(function() {
    const $ = (s, c = document) => c.querySelector(s);
    const $$ = (s, c = document) => [...c.querySelectorAll(s)];

    // Reveal sections with the same cinematic "enter" rhythm as the reference style.
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                if (entry.target.matches('.stat-modern')) {
                    const el = entry.target.querySelector('[data-count]');
                    if (el && !el.dataset.done) {
                        el.dataset.done = '1';
                        const target = Number(el.dataset.count);
                        let n = 0;
                        const step = Math.max(1, Math.ceil(target / 35));
                        const tick = () => {
                            n = Math.min(target, n + step);
                            el.textContent = n;
                            if (n < target) requestAnimationFrame(tick)
                        };
                        requestAnimationFrame(tick);
                    }
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: .16 });
    $$('.reveal-up,.reveal-card,.stat-modern').forEach(el => observer.observe(el));

    // Mouse-follow glow.
    const glow = $('#cursorGlow');
    if (glow && matchMedia('(pointer:fine)').matches) {
        window.addEventListener('pointermove', e => {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        }, { passive: true });
    }

    // Hero parallax / 3D AI agent.
    const stage = $('#agentStage'),
        core = stage && stage.querySelector('.agent-core');
    if (stage && matchMedia('(pointer:fine)').matches) {
        stage.addEventListener('pointermove', e => {
            const r = stage.getBoundingClientRect();
            const x = (e.clientX - r.left) / r.width - .5,
                y = (e.clientY - r.top) / r.height - .5;
            if (core) core.style.transform = `rotateX(${y * -8}deg) rotateY(${x * 10}deg)`;
            stage.querySelectorAll('.agent-node').forEach((n, i) => {
                const f = (i + 1) * 3;
                n.style.translate = `${x * f}px ${y * f}px`;
            });
        });
        stage.addEventListener('pointerleave', () => {
            if (core) core.style.transform = '';
            stage.querySelectorAll('.agent-node').forEach(n => n.style.translate = '');
        });
    }

    // Gentle floating cards with independent phases.
    $$('[data-float]').forEach((el, i) => {
        el.animate([
            { transform: 'translate3d(0,0,0)' },
            { transform: `translate3d(${i % 2 ? '-4' : '4'}px,-8px,0)` },
            { transform: 'translate3d(0,0,0)' }
        ], { duration: 4000 + i * 650, iterations: Infinity, easing: 'ease-in-out' });
    });

    // Magnetic buttons.
    if (matchMedia('(pointer:fine)').matches) {
        $$('.magnetic').forEach(btn => {
            btn.addEventListener('pointermove', e => {
                const r = btn.getBoundingClientRect(),
                    x = e.clientX - r.left - r.width / 2,
                    y = e.clientY - r.top - r.height / 2;
                btn.style.transform = `translate(${x * .12}px,${y * .12}px)`;
            });
            btn.addEventListener('pointerleave', () => btn.style.transform = '');
        });
    }

    // Smooth scrolling for local anchors.
    $$('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const id = a.getAttribute('href');
            if (id && id !== '#' && $(id)) {
                e.preventDefault();
                $(id).scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Make the service/work cards feel responsive to pointer position.
    if (matchMedia('(pointer:fine)').matches) {
        $$('.service-card,.work-card').forEach(card => {
            card.addEventListener('pointermove', e => {
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - .5,
                    y = (e.clientY - r.top) / r.height - .5;
                card.style.transform = `perspective(900px) rotateX(${y * -2.5}deg) rotateY(${x * 3}deg) translateY(-7px)`;
            });
            card.addEventListener('pointerleave', () => card.style.transform = '');
        });
    }

    // Tiny scroll progress line.
    let progress = document.getElementById('scrollProgress');
    if (progress) {
        progress.style.position = 'fixed';
        progress.style.top = '0';
        progress.style.left = '0';
        progress.style.height = '2px';
        progress.style.zIndex = '9999';
        progress.style.background = 'linear-gradient(90deg,#55e6ff,#7c5cff)';
        window.addEventListener('scroll', () => {
            const h = document.documentElement.scrollHeight - innerHeight;
            progress.style.width = (h ? scrollY / h * 100 : 0) + '%';
        }, { passive: true });
    }
})();


// =================== services-canvas-animations ======================
document.addEventListener("DOMContentLoaded", function() {

    const tabs = [
        ...document.querySelectorAll(".vv-service-tab")
    ];

    const panels = [
        ...document.querySelectorAll(".vv-service-panel")
    ];

    const tabsContainer =
        document.querySelector(".vv-service-tabs");


    /* =====================================================
       ACTIVATE TAB
    ====================================================== */

    function activateService(service, scrollTab = true) {

        tabs.forEach(tab => {

            const isActive =
                tab.dataset.service === service;

            tab.classList.toggle(
                "active",
                isActive
            );

        });


        panels.forEach(panel => {

            const isActive =
                panel.dataset.servicePanel === service;

            panel.classList.toggle(
                "active",
                isActive
            );

        });


        /* Keep active tab visible */

        if (scrollTab) {

            const activeTab =
                document.querySelector(
                    `.vv-service-tab[data-service="${service}"]`
                );

            if (
                activeTab &&
                tabsContainer
            ) {

                const tabTop =
                    activeTab.offsetTop;

                const tabBottom =
                    tabTop +
                    activeTab.offsetHeight;

                const visibleTop =
                    tabsContainer.scrollTop;

                const visibleBottom =
                    visibleTop +
                    tabsContainer.clientHeight;


                if (tabTop < visibleTop) {

                    tabsContainer.scrollTo({

                        top: tabTop - 20,

                        behavior: "smooth"

                    });

                } else if (
                    tabBottom >
                    visibleBottom
                ) {

                    tabsContainer.scrollTo({

                        top: tabBottom -
                            tabsContainer.clientHeight +
                            20,

                        behavior: "smooth"

                    });

                }

            }

        }

    }


    /* =====================================================
       FIND SERVICE CLOSEST TO VIEWPORT CENTER
    ====================================================== */

    function updateActiveService() {

        const viewportCenter =
            window.innerHeight / 2;

        let closestPanel = null;

        let closestDistance = Infinity;


        panels.forEach(panel => {

            const rect =
                panel.getBoundingClientRect();

            /*
             * Ignore panels completely outside
             * the useful viewport area.
             */

            if (
                rect.bottom < 0 ||
                rect.top > window.innerHeight
            ) {
                return;
            }


            const panelCenter =
                rect.top +
                (rect.height / 2);


            const distance =
                Math.abs(
                    panelCenter -
                    viewportCenter
                );


            if (
                distance <
                closestDistance
            ) {

                closestDistance =
                    distance;

                closestPanel =
                    panel;

            }

        });


        if (closestPanel) {

            activateService(
                closestPanel.dataset.servicePanel,
                true
            );

        }

    }


    /* =====================================================
       SCROLL HANDLING
    ====================================================== */

    let ticking = false;

    window.addEventListener(
        "scroll",
        function() {

            if (!ticking) {

                window.requestAnimationFrame(
                    function() {

                        updateActiveService();

                        ticking = false;

                    }
                );

                ticking = true;

            }

        }, {
            passive: true
        }
    );


    /* =====================================================
       INITIAL STATE
    ====================================================== */

    updateActiveService();


    /* =====================================================
       TAB CLICK
    ====================================================== */

    tabs.forEach(tab => {

        tab.addEventListener(
            "click",
            function() {

                const service =
                    this.dataset.service;

                const target =
                    document.querySelector(
                        `[data-service-panel="${service}"]`
                    );

                if (!target) {
                    return;
                }


                /*
                 * Activate immediately.
                 */

                activateService(
                    service,
                    true
                );


                /*
                 * Scroll the selected service
                 * into the visual center.
                 */

                const rect =
                    target.getBoundingClientRect();

                const targetCenter =
                    rect.top +
                    window.scrollY +
                    (rect.height / 2);

                const viewportCenter =
                    window.innerHeight / 2;


                window.scrollTo({

                    top: targetCenter -
                        viewportCenter,

                    behavior: "smooth"

                });

            }
        );

    });


    /* =====================================================
       SERVICE VIDEO AUTOPLAY
    ====================================================== */

    const videoObserver =
        new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    const video =
                        entry.target.querySelector(
                            "video"
                        );

                    if (!video) {
                        return;
                    }


                    if (
                        entry.isIntersecting &&
                        entry.intersectionRatio > .45
                    ) {

                        video
                            .play()
                            .catch(() => {});

                    } else {

                        video.pause();

                    }

                });

            }, {
                threshold: [
                    .45
                ]
            }
        );


    panels.forEach(panel => {

        videoObserver.observe(panel);

    });


    /* =====================================================
       VIDEO PLAY / PAUSE
    ====================================================== */

    document
        .querySelectorAll(".vv-service-video")
        .forEach(wrapper => {

            const video =
                wrapper.querySelector("video");

            const button =
                wrapper.querySelector(
                    ".vv-video-play"
                );


            if (!video ||
                !button
            ) {
                return;
            }


            button.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();

                    event.stopPropagation();


                    if (video.paused) {

                        video
                            .play()
                            .catch(() => {});

                    } else {

                        video.pause();

                    }

                }
            );


            video.addEventListener(
                "play",
                function() {

                    button.innerHTML =
                        '<i class="bi bi-pause-fill"></i>';

                }
            );


            video.addEventListener(
                "pause",
                function() {

                    button.innerHTML =
                        '<i class="bi bi-play-fill"></i>';

                }
            );

        });

});


/* =========================================================
   FAQ ACCORDION
========================================================= */

document.querySelectorAll('.vv-faq-question').forEach(function(button) {

    button.addEventListener('click', function() {

        const item = this.closest('.vv-faq-item');
        const wasActive = item.classList.contains('active');

        document.querySelectorAll('.vv-faq-item').forEach(function(faq) {
            faq.classList.remove('active');
        });

        if (!wasActive) {
            item.classList.add('active');
        }

    });

});

// ==== Testimonial-slider-js ====
// Simple testimonial carousel: shuffle order on arrow click
var testiData = [
    { stars: 5, text: "Vision Vivante delivered beyond our expectations. Their expertise and dedication helped us achieve remarkable results.", name: "John Smith", role: "CEO, TechCorp", img: "https://placehold.co/100x100/12297a/ffffff?text=JS" },
    { stars: 5, text: "Professional, reliable, and innovative team. They turned our ideas into a powerful digital solution.", name: "Sarah Johnson", role: "CTO, InnovateLabs", img: "https://placehold.co/100x100/2b57e8/ffffff?text=SJ" },
    { stars: 5, text: "The quality of work and attention to detail is outstanding. Highly recommended for any digital project.", name: "Michael Brown", role: "Founder, StartUpX", img: "https://placehold.co/100x100/39b6f0/ffffff?text=MB" },
    { stars: 5, text: "A truly collaborative partner. They understood our vision and executed it flawlessly from day one.", name: "Emily Davis", role: "COO, BrightWave", img: "https://placehold.co/100x100/1a3fc4/ffffff?text=ED" }
];
var testiIndex = 0;

function renderTestimonials() {
    var $row = $('#testiRow');
    $row.fadeOut(150, function() {
        $row.empty();
        for (var i = 0; i < 3; i++) {
            var t = testiData[(testiIndex + i) % testiData.length];
            var stars = '★★★★★'.slice(0, t.stars);
            var card = $(
                '<div class="col-md-4 stagger-item in-view">' +
                '<div class="testi-card tilt-card">' +
                '<div class="stars mb-2">' + stars + '</div>' +
                '<p class="mb-4">' + t.text + '</p>' +
                '<div class="d-flex align-items-center gap-2">' +
                '<img class="testi-avatar" src="' + t.img + '">' +
                '<div>' +
                '<div class="fw-semibold small">' + t.name + '</div>' +
                '<div class="text-gray small">' + t.role + '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'
            );
            $row.append(card);
        }
        $row.fadeIn(250);
    });
}

$('#testiNext').on('click', function() {
    testiIndex = (testiIndex + 1) % testiData.length;
    renderTestimonials();
});
$('#testiPrev').on('click', function() {
    testiIndex = (testiIndex - 1 + testiData.length) % testiData.length;
    renderTestimonials();
});