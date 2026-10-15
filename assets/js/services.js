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



/* ==========================================
   INDUSTRIES ORBITAL INTERACTIONS
   ========================================== */

(function() {
    function initIndustriesOrbital() {
        const wrap = document.getElementById("ind-orbital");
        const svg = document.getElementById("ind-arcs-svg");
        const popup = document.getElementById("ind-popup");

        if (!wrap || !svg || !popup) return;

        const popupBar = document.getElementById("ind-popup-bar");
        const popupIcon = document.getElementById("ind-popup-ico");
        const popupTitle = document.getElementById("ind-popup-title");
        const popupDesc = document.getElementById("ind-popup-desc");

        const reducedMotion = window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

        const SIZE = 700;
        const CENTER = SIZE / 2;
        const HUB_RADIUS = 74;
        const ORBIT_RADIUS = 250;
        const NODE_RADIUS = 42;

        const nodes = [];
        let activeIndex = -1;
        let autoTimer = null;
        let hideTimer = null;
        let cycleIndex = 0;
        let paused = false;

        const svgElement = (tag) =>
            document.createElementNS(
                "http://www.w3.org/2000/svg",
                tag
            );

        function positionNodes() {
            nodes.forEach((node) => {
                const x =
                    CENTER +
                    ORBIT_RADIUS * Math.cos(node.angle) -
                    NODE_RADIUS;

                const y =
                    CENTER +
                    ORBIT_RADIUS * Math.sin(node.angle) -
                    NODE_RADIUS;

                node.el.style.left = x + "px";
                node.el.style.top = y + "px";

                node.cx = x + NODE_RADIUS;
                node.cy = y + NODE_RADIUS;
            });
        }

        function buildConnections() {
            svg.querySelectorAll(
                ".ind-arc-group[data-generated='true']"
            ).forEach((group) => group.remove());

            nodes.forEach((node, index) => {
                const hx =
                    CENTER + HUB_RADIUS * Math.cos(node.angle);
                const hy =
                    CENTER + HUB_RADIUS * Math.sin(node.angle);

                const opposite = node.angle + Math.PI;

                const ex =
                    node.cx + NODE_RADIUS * Math.cos(opposite);
                const ey =
                    node.cy + NODE_RADIUS * Math.sin(opposite);

                const mx = (hx + ex) / 2;
                const my = (hy + ey) / 2;
                const perpendicular = node.angle + Math.PI / 2;

                const controlX = mx + 18 * Math.cos(perpendicular);
                const controlY = my + 18 * Math.sin(perpendicular);

                const path =
                    `M ${hx} ${hy} ` +
                    `Q ${controlX} ${controlY} ${ex} ${ey}`;

                const group = svgElement("g");
                group.classList.add("ind-arc-group");
                group.dataset.idx = index;
                group.dataset.generated = "true";

                const background = svgElement("path");
                background.setAttribute("d", path);
                background.setAttribute("stroke", node.color);
                background.classList.add("ind-arc", "ind-arc-bg");

                const line = svgElement("path");
                line.setAttribute("d", path);
                line.setAttribute("stroke", node.color);
                line.classList.add("ind-arc", "ind-arc-line");

                const travel = svgElement("path");
                travel.setAttribute("d", path);
                travel.setAttribute("stroke", node.color);
                travel.classList.add("ind-arc", "ind-arc-travel");

                if (!reducedMotion) {
                    line.style.animation =
                        `ind-orbital-travel 4s linear ${index * 0.35}s infinite`;

                    travel.style.animation =
                        `ind-orbital-travel 1.7s linear ${index * 0.2}s infinite`;
                }

                group.append(background, line, travel);
                svg.appendChild(group);

                node.arcGroup = group;
                node.arcLine = line;
            });
        }

        function showPopup(index) {
            const node = nodes[index];
            if (!node) return;

            clearTimeout(hideTimer);
            activeIndex = index;

            popupTitle.textContent =
                node.el.dataset.title ||
                node.el.getAttribute("aria-label") ||
                "";

            // Use textContent to avoid interpreting descriptions as HTML.
            popupDesc.textContent = node.el.dataset.desc || "";

            popupBar.style.background = node.color;

            popupIcon.replaceChildren();

            const icon = node.el.querySelector("svg");
            if (icon) {
                popupIcon.appendChild(icon.cloneNode(true));
            }

            popupIcon.style.background = node.bg;

            const popupWidth = 220;
            const popupHeight = 126;

            let left;
            let top = node.cy - popupHeight / 2;

            if (node.cx >= CENTER) {
                left = node.cx - NODE_RADIUS - popupWidth - 14;
            } else {
                left = node.cx + NODE_RADIUS + 14;
            }

            left = Math.max(8, Math.min(SIZE - popupWidth - 8, left));
            top = Math.max(8, Math.min(SIZE - popupHeight - 8, top));

            popup.style.left = left + "px";
            popup.style.top = top + "px";
            popup.classList.add("visible");
            popup.setAttribute("aria-hidden", "false");

            nodes.forEach((item, i) => {
                const selected = i === index;

                item.el.classList.toggle("active", selected);

                if (item.arcGroup) {
                    item.arcGroup.classList.toggle(
                        "arc-active",
                        selected
                    );
                }

                if (item.arcLine) {
                    item.arcLine.style.strokeDasharray =
                        selected ? "none" : "5 8";
                }
            });
        }

        function hidePopup(delay = 180) {
            clearTimeout(hideTimer);

            hideTimer = setTimeout(() => {
                popup.classList.remove("visible");
                popup.setAttribute("aria-hidden", "true");

                nodes.forEach((node) => {
                    node.el.classList.remove("active");

                    if (node.arcGroup) {
                        node.arcGroup.classList.remove("arc-active");
                    }

                    if (node.arcLine) {
                        node.arcLine.style.strokeDasharray = "5 8";
                    }
                });

                activeIndex = -1;
            }, delay);
        }

        function stopAutoCycle() {
            paused = true;
            clearInterval(autoTimer);
            autoTimer = null;
        }

        function startAutoCycle() {
            if (reducedMotion || paused || autoTimer) return;

            autoTimer = setInterval(() => {
                if (document.hidden || activeIndex !== -1) return;

                showPopup(cycleIndex % nodes.length);
                cycleIndex++;

                setTimeout(() => {
                    if (activeIndex !== -1) hidePopup(0);
                }, 1700);
            }, 2400);
        }

        /* Load the eight existing HTML nodes. */
        for (let i = 0; i < 8; i++) {
            const el = document.getElementById("inode-" + i);
            if (!el) continue;

            nodes.push({
                el,
                angle: (2 * Math.PI * i / 8) - Math.PI / 2,
                cx: 0,
                cy: 0,
                color: el.dataset.color || "#075F48",
                bg: el.dataset.bg || "rgba(7,95,72,.09)",
                arcGroup: null,
                arcLine: null
            });
        }

        if (!nodes.length) return;

        positionNodes();
        buildConnections();

        nodes.forEach((node, index) => {
            node.el.addEventListener("mouseenter", () => {
                stopAutoCycle();
                showPopup(index);
            });

            node.el.addEventListener("mouseleave", () => {
                hidePopup(220);
            });

            node.el.addEventListener("focus", () => {
                stopAutoCycle();
                showPopup(index);
            });

            node.el.addEventListener("blur", () => {
                hidePopup(220);
            });

            node.el.addEventListener("click", () => {
                if (activeIndex === index) {
                    hidePopup(0);
                } else {
                    stopAutoCycle();
                    showPopup(index);
                }
            });

            node.el.addEventListener("keydown", (event) => {
                if (event.key === "Enter" || event.key === " ") {
                    event.preventDefault();
                    stopAutoCycle();
                    showPopup(index);
                }

                if (event.key === "Escape") {
                    hidePopup(0);
                    node.el.blur();
                }
            });
        });

        popup.addEventListener("mouseenter", () => {
            clearTimeout(hideTimer);
        });

        popup.addEventListener("mouseleave", () => {
            hidePopup(180);
        });

        wrap.addEventListener("mouseenter", stopAutoCycle);

        wrap.addEventListener("mouseleave", () => {
            if (!popup.matches(":hover")) hidePopup(0);

            paused = false;
            startAutoCycle();
        });

        let resizeTimer;

        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(() => {
                positionNodes();
                buildConnections();

                if (activeIndex >= 0) {
                    showPopup(activeIndex);
                }
            }, 120);
        });

        document.addEventListener("visibilitychange", () => {
            if (document.hidden) {
                clearInterval(autoTimer);
                autoTimer = null;
            } else {
                startAutoCycle();
            }
        });

        popup.classList.remove("visible");
        popup.setAttribute("aria-hidden", "true");

        startAutoCycle();
    }


    if (document.readyState === "loading") {
        document.addEventListener(
            "DOMContentLoaded",
            initIndustriesOrbital, { once: true }
        );
    } else {
        initIndustriesOrbital();
    }
})();