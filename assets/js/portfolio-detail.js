document.addEventListener('DOMContentLoaded', () => {
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // GSAP entrance + scroll motion
    if (window.gsap) {
        if (window.ScrollTrigger) gsap.registerPlugin(ScrollTrigger);

        gsap.to('.vvpd-hero .vvpd-reveal', {
            opacity: 1,
            y: 0,
            duration: .8,
            stagger: .11,
            ease: 'power3.out',
            clearProps: 'transform'
        });

        gsap.utils.toArray('.vvpd-screens .vvpd-reveal, .vvpd-cta-section .vvpd-reveal').forEach(el => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: .8,
                ease: 'power3.out',
                scrollTrigger: { trigger: el, start: 'top 86%', once: true }
            });
        });

        if (!reduced) {
            gsap.to('#vvpdLaptop', {
                yPercent: -4,
                ease: 'none',
                scrollTrigger: { trigger: '.vvpd-hero', start: 'top top', end: 'bottom top', scrub: 1 }
            });
            gsap.to('.vvpd-ambient-a', { x: -90, y: 100, duration: 8, yoyo: true, repeat: -1, ease: 'sine.inOut' });
            gsap.to('.vvpd-ambient-b', { x: 110, y: -70, duration: 10, yoyo: true, repeat: -1, ease: 'sine.inOut' });
        }
    } else {
        document.querySelectorAll('.vvpd-reveal').forEach(el => { el.style.opacity = 1;
            el.style.transform = 'none'; });
    }

    // ===================================================================

    // Three.js background — same particle network as the homepage hero
    // (#vv-canvas): a drifting cyan/indigo point cloud with proximity-
    // based connecting lines and gentle mouse parallax, just resized to
    // cover this page's full scrollable height instead of one section.
    // ===================================================================
    const canvas = document.getElementById('vvpd-bg-canvas');
    const page = document.querySelector('.vvpd-page');
    if (!canvas || !page || !window.THREE || reduced) return;

    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(55, page.clientWidth / page.clientHeight, 0.1, 1000);
    camera.position.z = 60;

    function size() {
        renderer.setSize(page.clientWidth, page.scrollHeight, false);
        camera.aspect = page.clientWidth / page.scrollHeight;
        camera.updateProjectionMatrix();
    }
    size();

    // particle field — spread scales with page height so the pattern
    // still fills a very tall page instead of clustering near the top
    const COUNT = 160;
    const positions = new Float32Array(COUNT * 3);
    const velocities = [];
    const spread = { x: 90, y: Math.max(55, page.scrollHeight / 14), z: 40 };

    for (let i = 0; i < COUNT; i++) {
        positions[i * 3] = (Math.random() * 2 - 1) * spread.x;
        positions[i * 3 + 1] = (Math.random() * 2 - 1) * spread.y;
        positions[i * 3 + 2] = (Math.random() * 2 - 1) * spread.z;
        velocities.push(new THREE.Vector3(
            (Math.random() * 2 - 1) * 0.02,
            (Math.random() * 2 - 1) * 0.02,
            (Math.random() * 2 - 1) * 0.02
        ));
    }

    const geo = new THREE.BufferGeometry();
    geo.setAttribute('position', new THREE.BufferAttribute(positions, 3));

    const colorA = new THREE.Color(0x2fd8f0); // cyan
    const colorB = new THREE.Color(0x6a6ff0); // indigo-light

    const pointsMat = new THREE.PointsMaterial({
        size: 0.8,
        color: colorA,
        transparent: true,
        opacity: 0.45,
        depthWrite: false
    });
    const pointCloud = new THREE.Points(geo, pointsMat);
    scene.add(pointCloud);

    // connecting lines (redrawn each frame based on proximity)
    const lineGeo = new THREE.BufferGeometry();
    const maxLines = COUNT * 6;
    const linePositions = new Float32Array(maxLines * 3 * 2);
    lineGeo.setAttribute('position', new THREE.BufferAttribute(linePositions, 3));
    const lineMat = new THREE.LineBasicMaterial({ color: 0x4a55c8, transparent: true, opacity: 0.18 });
    const lineSegments = new THREE.LineSegments(lineGeo, lineMat);
    scene.add(lineSegments);

    const linkDist = 16;

    function updateLines() {
        let idx = 0;
        for (let i = 0; i < COUNT && idx < maxLines; i++) {
            const ix = i * 3;
            for (let j = i + 1; j < COUNT && idx < maxLines; j++) {
                const jx = j * 3;
                const dx = positions[ix] - positions[jx];
                const dy = positions[ix + 1] - positions[jx + 1];
                const dz = positions[ix + 2] - positions[jx + 2];
                const d = Math.sqrt(dx * dx + dy * dy + dz * dz);
                if (d < linkDist) {
                    const li = idx * 6;
                    linePositions[li] = positions[ix];
                    linePositions[li + 1] = positions[ix + 1];
                    linePositions[li + 2] = positions[ix + 2];
                    linePositions[li + 3] = positions[jx];
                    linePositions[li + 4] = positions[jx + 1];
                    linePositions[li + 5] = positions[jx + 2];
                    idx++;
                }
            }
        }
        // zero out unused segments
        for (let k = idx * 6; k < maxLines * 6; k++) linePositions[k] = 0;
        lineGeo.attributes.position.needsUpdate = true;
        lineGeo.setDrawRange(0, idx * 2);
    }

    // gentle mouse parallax
    let mouseX = 0,
        mouseY = 0;
    page.addEventListener('mousemove', (e) => {
        const r = page.getBoundingClientRect();
        mouseX = ((e.clientX - r.left) / r.width - 0.5);
        mouseY = ((e.clientY - r.top) / r.height - 0.5);
    });

    window.addEventListener('resize', size);
    if ('ResizeObserver' in window) new ResizeObserver(size).observe(page);

    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);
        const t = clock.getElapsedTime();

        for (let i = 0; i < COUNT; i++) {
            const ix = i * 3;
            positions[ix] += velocities[i].x;
            positions[ix + 1] += velocities[i].y;
            positions[ix + 2] += velocities[i].z;

            if (positions[ix] > spread.x || positions[ix] < -spread.x) velocities[i].x *= -1;
            if (positions[ix + 1] > spread.y || positions[ix + 1] < -spread.y) velocities[i].y *= -1;
            if (positions[ix + 2] > spread.z || positions[ix + 2] < -spread.z) velocities[i].z *= -1;
        }
        geo.attributes.position.needsUpdate = true;
        updateLines();

        // color drift indigo <-> cyan
        const mixT = (Math.sin(t * 0.15) + 1) / 2;
        pointsMat.color.copy(colorA).lerp(colorB, mixT);

        camera.position.x += (mouseX * 10 - camera.position.x) * 0.02;
        camera.position.y += (-mouseY * 6 - camera.position.y) * 0.02;
        camera.lookAt(scene.position);

        scene.rotation.y = Math.sin(t * 0.05) * 0.08;

        renderer.render(scene, camera);
    }
    animate();
});