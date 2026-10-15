// ---- banner-animation-start ----
/* =========================================================================
   TECH FLOATING STACK — particle network (Three.js) + floating badges (GSAP)
   Requires: three.js and gsap already loaded on the page.
   Markup: #techFloatWrap containing #techNetworkCanvas + .tech-float-badge elements
   ========================================================================= */

(function () {
    const wrap = document.getElementById('techFloatWrap');
    const canvas = document.getElementById('techNetworkCanvas');
    if (!wrap || !canvas) return;

    /* -------------------------------------------------------------------
       PART 1 — particle network background (Three.js, flat/2D style)
    ------------------------------------------------------------------- */
    if (typeof THREE !== 'undefined') {
        const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        const scene = new THREE.Scene();
        let W = wrap.clientWidth, H = wrap.clientHeight;
        const camera = new THREE.OrthographicCamera(0, W, 0, H, -10, 10);

        const COUNT = 55;
        const LINK_DIST = 130;

        const particles = Array.from({ length: COUNT }, () => ({
            x: Math.random() * W,
            y: Math.random() * H,
            vx: (Math.random() - 0.5) * 0.25,
            vy: (Math.random() - 0.5) * 0.25,
        }));

        // dots
        const dotGeo = new THREE.BufferGeometry();
        dotGeo.setAttribute('position', new THREE.Float32BufferAttribute(new Float32Array(COUNT * 3), 3));
        const dotMat = new THREE.PointsMaterial({ color: 0x5fc9ff, size: 3, transparent: true, opacity: 0.85 });
        const dots = new THREE.Points(dotGeo, dotMat);
        scene.add(dots);

        // lines (rebuilt each frame from live connections)
        const lineMat = new THREE.LineBasicMaterial({ color: 0x3f7cf0, transparent: true, opacity: 0.18 });
        let lines = new THREE.LineSegments(new THREE.BufferGeometry(), lineMat);
        scene.add(lines);

        /* ---- twinkling sparkles (soft glow + subtle flare) --------------- */
        const sparkleTex = (() => {
            const c = document.createElement('canvas');
            c.width = c.height = 50;
            const ctx = c.getContext('2d');
            ctx.globalCompositeOperation = 'lighter';

            const glow = ctx.createRadialGradient(25, 25, 0, 25, 25, 25);
            glow.addColorStop(0, 'rgba(255,255,255,1)');
            glow.addColorStop(0.35, 'rgba(180,225,255,0.7)');
            glow.addColorStop(1, 'rgba(180,225,255,0)');
            ctx.fillStyle = glow;
            ctx.fillRect(0, 0, 50, 50);

            // thin cross flare for a "shine" look
            ctx.strokeStyle = 'rgba(255,255,255,0.55)';
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(4, 32); ctx.lineTo(60, 32);
            ctx.moveTo(32, 4); ctx.lineTo(32, 60);
            ctx.stroke();

            return new THREE.CanvasTexture(c);
        })();

        const SPARKLE_COUNT = 45;
        const sparkles = Array.from({ length: SPARKLE_COUNT }, () => ({
            x: Math.random() * W,
            y: Math.random() * H,
            vx: (Math.random() - 0.5) * 0.06,
            vy: (Math.random() - 0.5) * 0.06,
            phase: Math.random() * Math.PI * 2,
            speed: 0.02 + Math.random() * 0.05,
            size: 6 + Math.random() * 14,
        }));

        const sparkleGeo = new THREE.BufferGeometry();
        sparkleGeo.setAttribute('position', new THREE.Float32BufferAttribute(new Float32Array(SPARKLE_COUNT * 3), 3));
        sparkleGeo.setAttribute('color', new THREE.Float32BufferAttribute(new Float32Array(SPARKLE_COUNT * 3), 3));

        const sparkleMat = new THREE.PointsMaterial({
            map: sparkleTex,
            size: 16,
            transparent: true,
            vertexColors: true,
            depthWrite: false,
            sizeAttenuation: false,
            blending: THREE.AdditiveBlending,
        });
        const sparklePoints = new THREE.Points(sparkleGeo, sparkleMat);
        scene.add(sparklePoints);

        function resize() {
            W = wrap.clientWidth; H = wrap.clientHeight;
            renderer.setSize(W, H, false);
            camera.right = W; camera.bottom = H;
            camera.updateProjectionMatrix();
        }
        window.addEventListener('resize', resize);
        resize();

        function step() {
            const pos = dotGeo.attributes.position.array;
            const linkPositions = [];

            particles.forEach((p, i) => {
                p.x += p.vx; p.y += p.vy;
                if (p.x < 0 || p.x > W) p.vx *= -1;
                if (p.y < 0 || p.y > H) p.vy *= -1;
                pos[i * 3] = p.x;
                pos[i * 3 + 1] = p.y;
                pos[i * 3 + 2] = 0;
            });
            dotGeo.attributes.position.needsUpdate = true;

            for (let i = 0; i < COUNT; i++) {
                for (let j = i + 1; j < COUNT; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < LINK_DIST) {
                        linkPositions.push(particles[i].x, particles[i].y, 0, particles[j].x, particles[j].y, 0);
                    }
                }
            }
            lines.geometry.dispose();
            lines.geometry = new THREE.BufferGeometry();
            lines.geometry.setAttribute('position', new THREE.Float32BufferAttribute(linkPositions, 3));

            // twinkling sparkles: drift + pulse brightness via vertex color
            const sPos = sparkleGeo.attributes.position.array;
            const sCol = sparkleGeo.attributes.color.array;
            sparkles.forEach((s, i) => {
                s.x += s.vx; s.y += s.vy;
                if (s.x < 0 || s.x > W) s.vx *= -1;
                if (s.y < 0 || s.y > H) s.vy *= -1;
                s.phase += s.speed;

                sPos[i * 3] = s.x;
                sPos[i * 3 + 1] = s.y;
                sPos[i * 3 + 2] = 0.5;

                const t = 0.25 + 0.75 * Math.abs(Math.sin(s.phase));
                sCol[i * 3] = t;
                sCol[i * 3 + 1] = t;
                sCol[i * 3 + 2] = t;
            });
            sparkleGeo.attributes.position.needsUpdate = true;
            sparkleGeo.attributes.color.needsUpdate = true;

            renderer.render(scene, camera);
            requestAnimationFrame(step);
        }
        step();
    }

    /* -------------------------------------------------------------------
       PART 2 — floating badges + orbit rings (GSAP)
    ------------------------------------------------------------------- */
    if (typeof gsap === 'undefined') return;

    const badges = wrap.querySelectorAll('.tech-float-badge');
    const rings = wrap.querySelectorAll('.orbit-ring');

    gsap.set(badges, { opacity: 0, scale: 0.6, y: 20 });
    gsap.set(rings, { opacity: 0 });

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            io.disconnect();

            // entrance
            gsap.to(rings, { opacity: 1, duration: 1.2, ease: 'power2.out' });
            gsap.to(badges, {
                opacity: 1, scale: 1, y: 0,
                duration: 0.7, ease: 'back.out(1.7)', stagger: 0.12,
                onComplete: startFloating,
            });
        });
    }, { threshold: 0.25 });
    io.observe(wrap);

    function startFloating() {
        badges.forEach((badge, i) => {
            gsap.to(badge, {
                y: `+=${12 + (i % 3) * 4}`,
                duration: 2.4 + (i % 4) * 0.4,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                delay: i * 0.15,
            });
            gsap.to(badge, {
                rotate: (i % 2 === 0 ? 1 : -1) * (3 + (i % 3)),
                duration: 3.2 + (i % 3) * 0.5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                delay: i * 0.2,
            });
        });
    }

    // slow ring rotation
    rings.forEach((ring, i) => {
        gsap.to(ring, {
            rotate: 360,
            duration: 40 + i * 15,
            repeat: -1,
            ease: 'none',
            transformOrigin: '50% 50%',
        });
    });
})();


// ---- banner-animation-end ----  

(function () {
    var filterBtns = document.querySelectorAll('[data-filter-btn]');
    var cardCols = document.querySelectorAll('.project-card-col');
    var noProjectsMsg = document.getElementById('noProjectsMsg');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var chosen = btn.dataset.filterBtn;
            var visibleCount = 0;

            cardCols.forEach(function (col) {
                var cats = (col.dataset.filter || '').split(',');
                var show = chosen === 'all' || cats.indexOf(chosen) !== -1;

                if (show) {
                    col.style.display = '';
                    visibleCount++;
                    if (typeof gsap !== 'undefined') {
                        gsap.fromTo(col, { opacity: 0, y: 14 }, { opacity: 1, y: 0, duration: 0.45, ease: 'power2.out' });
                    }
                } else {
                    col.style.display = 'none';
                }
            });

            noProjectsMsg.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });

    if ('IntersectionObserver' in window && typeof gsap !== 'undefined') {
        gsap.set('.project-card-col', { opacity: 0, y: 24 });

        var cardObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    gsap.to(entry.target, { opacity: 1, y: 0, duration: 0.6, delay: (i % 3) * 0.08, ease: 'power2.out' });
                    cardObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        cardCols.forEach(function (col) { cardObserver.observe(col); });
    }
})();

/* =========================================================================
WORK CTA GLOBE — wireframe + glowing dots + connecting arcs
Requires: three.js (r1xx) and gsap already loaded on the page.
Usage: <canvas id="workCtaGlobe"></canvas> inside .work-cta-card
========================================================================= */

(function () {
    const canvas = document.getElementById('workCtaGlobe');
    if (!canvas || typeof THREE === 'undefined') return;

    const container = canvas.closest('.work-cta-card') || canvas.parentElement;
    const RADIUS = 2.2;

    // ---- renderer / scene / camera --------------------------------------
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
    camera.position.set(0, 0.2, 6.5);

    const globe = new THREE.Group();
    globe.rotation.z = 0.35; // tilt, like the reference
    scene.add(globe);

    // ---- helpers -----------------------------------------------------------
    function latLonToVec3(lat, lon, r) {
        const phi = (90 - lat) * (Math.PI / 180);
        const theta = (lon + 180) * (Math.PI / 180);
        return new THREE.Vector3(
            -r * Math.sin(phi) * Math.cos(theta),
            r * Math.cos(phi),
            r * Math.sin(phi) * Math.sin(theta)
        );
    }

    // ---- 1) wireframe sphere (lat/long grid) --------------------------------
    const wireGeo = new THREE.SphereGeometry(RADIUS, 28, 18);
    const wireMat = new THREE.MeshBasicMaterial({
        color: 0x3f7cf0,
        wireframe: true,
        transparent: true,
        opacity: 0.18,
    });
    globe.add(new THREE.Mesh(wireGeo, wireMat));

    // faint solid core so the grid reads as a sphere, not a tangle of lines
    const coreMat = new THREE.MeshBasicMaterial({ color: 0x050a1f, transparent: true, opacity: 0.55 });
    globe.add(new THREE.Mesh(new THREE.SphereGeometry(RADIUS * 0.985, 32, 24), coreMat));

    // outer glow rim
    const rimGeo = new THREE.SphereGeometry(RADIUS * 1.03, 32, 24);
    const rimMat = new THREE.MeshBasicMaterial({
        color: 0x02bfe1, transparent: true, opacity: 0.06, side: THREE.BackSide,
    });
    globe.add(new THREE.Mesh(rimGeo, rimMat));

    // ---- 2) landmass dots (rough continent clusters) ------------------------
    const CONTINENTS = [
        { lat: [15, 60], lon: [-130, -60], n: 90 },   // N. America
        { lat: [-55, 10], lon: [-80, -35], n: 60 },   // S. America
        { lat: [35, 70], lon: [-10, 40], n: 70 },     // Europe
        { lat: [-35, 35], lon: [-15, 50], n: 80 },    // Africa
        { lat: [5, 55], lon: [55, 140], n: 120 },     // Asia
        { lat: [-45, -10], lon: [112, 155], n: 30 },  // Australia
    ];

    const dotPositions = [];
    const dotVecs = [];
    CONTINENTS.forEach((c) => {
        for (let i = 0; i < c.n; i++) {
            const lat = c.lat[0] + Math.random() * (c.lat[1] - c.lat[0]);
            const lon = c.lon[0] + Math.random() * (c.lon[1] - c.lon[0]);
            const v = latLonToVec3(lat, lon, RADIUS * 1.005);
            dotVecs.push(v);
            dotPositions.push(v.x, v.y, v.z);
        }
    });

    const dotsGeo = new THREE.BufferGeometry();
    dotsGeo.setAttribute('position', new THREE.Float32BufferAttribute(dotPositions, 3));

    // soft round sprite for each dot
    const dotTex = (() => {
        const c = document.createElement('canvas');
        c.width = c.height = 64;
        const ctx = c.getContext('2d');
        const g = ctx.createRadialGradient(32, 32, 0, 32, 32, 32);
        g.addColorStop(0, 'rgba(120,220,255,1)');
        g.addColorStop(0.4, 'rgba(57,182,240,0.8)');
        g.addColorStop(1, 'rgba(57,182,240,0)');
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, 64, 64);
        return new THREE.CanvasTexture(c);
    })();

    const dotsMat = new THREE.PointsMaterial({
        map: dotTex, size: 0.055, transparent: true, opacity: 0,
        depthWrite: false, blending: THREE.AdditiveBlending,
    });
    const dots = new THREE.Points(dotsGeo, dotsMat);
    globe.add(dots);

    // ---- 3) connecting arcs (flight-path style) -----------------------------
    const arcGroup = new THREE.Group();
    globe.add(arcGroup);
    const arcMat = new THREE.LineBasicMaterial({
        color: 0x39b6f0, transparent: true, opacity: 0, blending: THREE.AdditiveBlending,
    });

    const ARC_COUNT = 10;
    for (let i = 0; i < ARC_COUNT; i++) {
        const a = dotVecs[Math.floor(Math.random() * dotVecs.length)];
        const b = dotVecs[Math.floor(Math.random() * dotVecs.length)];
        const mid = a.clone().add(b).multiplyScalar(0.5).normalize().multiplyScalar(RADIUS * 1.35);
        const curve = new THREE.QuadraticBezierCurve3(a, mid, b);
        const geo = new THREE.BufferGeometry().setFromPoints(curve.getPoints(40));
        arcGroup.add(new THREE.Line(geo, arcMat.clone()));
    }

    // ---- 4) pulsing highlight nodes (bright cities) -------------------------
    const highlightIdx = [12, 90, 160, 210].filter((i) => i < dotVecs.length);
    const pulses = highlightIdx.map((i) => {
        const sprite = new THREE.Sprite(new THREE.SpriteMaterial({
            map: dotTex, transparent: true, opacity: 0, depthWrite: false, blending: THREE.AdditiveBlending,
        }));
        sprite.position.copy(dotVecs[i]);
        sprite.scale.setScalar(0.001);
        globe.add(sprite);
        return sprite;
    });

    // ---- background starfield (subtle depth) --------------------------------
    const starGeo = new THREE.BufferGeometry();
    const starPos = [];
    for (let i = 0; i < 200; i++) {
        starPos.push((Math.random() - 0.5) * 20, (Math.random() - 0.5) * 20, -5 - Math.random() * 10);
    }
    starGeo.setAttribute('position', new THREE.Float32BufferAttribute(starPos, 3));
    const stars = new THREE.Points(starGeo, new THREE.PointsMaterial({
        color: 0x8fd6ff, size: 0.02, transparent: true, opacity: 0.5,
    }));
    scene.add(stars);

    // ---- resize --------------------------------------------------------------
    function resize() {
        const w = container.clientWidth || 400;
        const h = container.clientHeight || 400;
        renderer.setSize(w, h, false);
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
    }
    window.addEventListener('resize', resize);
    resize();

    // ---- entrance + pulse animation (GSAP) ------------------------------------
    gsap.set(globe.scale, { x: 0.85, y: 0.85, z: 0.85 });

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            io.disconnect();

            gsap.to(globe.scale, { x: 1, y: 1, z: 1, duration: 1.4, ease: 'power3.out' });
            gsap.to(dotsMat, { opacity: 0.95, duration: 1.2, ease: 'power2.out', delay: 0.2 });
            arcGroup.children.forEach((line, i) => {
                gsap.to(line.material, { opacity: 0.35, duration: 0.8, delay: 0.3 + i * 0.08 });
            });

            pulses.forEach((sprite, i) => {
                gsap.to(sprite.material, { opacity: 0.9, duration: 0.4, delay: 0.5 + i * 0.2 });
                gsap.to(sprite.scale, {
                    x: 0.5, y: 0.5, z: 0.5,
                    duration: 1.6,
                    repeat: -1,
                    delay: 0.5 + i * 0.2,
                    ease: 'power1.out',
                    onRepeat: () => gsap.set(sprite.scale, { x: 0.05, y: 0.05, z: 0.05 }),
                });
                gsap.to(sprite.material, {
                    opacity: 0,
                    duration: 1.6,
                    repeat: -1,
                    delay: 0.5 + i * 0.2,
                    ease: 'power1.out',
                    onRepeat: () => gsap.set(sprite.material, { opacity: 0.9 }),
                });
            });
        });
    }, { threshold: 0.2 });
    io.observe(container);

    // ---- render loop -----------------------------------------------------------
    const clock = new THREE.Clock();
    function animate() {
        requestAnimationFrame(animate);
        const dt = clock.getDelta();
        globe.rotation.y += dt * 0.18;   // slow continuous spin
        stars.rotation.y += dt * 0.01;
        renderer.render(scene, camera);
    }
    animate();
})();