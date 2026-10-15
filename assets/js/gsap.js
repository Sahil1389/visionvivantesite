// ================ home-hero-section-bg-animation-start-here =================
(function () {
  const canvas = document.getElementById('vv-canvas');
  const section = document.querySelector('.hero-section');
  const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(55, section.clientWidth / section.clientHeight, 0.1, 1000);
  camera.position.z = 60;

  function size() {
    renderer.setSize(section.clientWidth, section.clientHeight);
    camera.aspect = section.clientWidth / section.clientHeight;
    camera.updateProjectionMatrix();
  }
  size();

  // particle field
  const COUNT = 160;
  const positions = new Float32Array(COUNT * 3);
  const velocities = [];
  const spread = { x: 90, y: 55, z: 40 };

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
    size: 0.8,        // was 1.6
    color: colorA,
    transparent: true,
    opacity: 0.45,     // was 0.85
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
  let mouseX = 0, mouseY = 0;
  section.addEventListener('mousemove', (e) => {
    const r = section.getBoundingClientRect();
    mouseX = ((e.clientX - r.left) / r.width - 0.5);
    mouseY = ((e.clientY - r.top) / r.height - 0.5);
  });

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

  window.addEventListener('resize', size);
})();

/* ================= GSAP — entrance sequence ================= */
window.addEventListener('DOMContentLoaded', () => {
  const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
  tl.to('.eyebrow', { opacity: 1, y: 0, duration: .6 }, 0)
    .fromTo('#w1', { opacity: 0, y: 26 }, { opacity: 1, y: 0, duration: .7 }, 0.05)
    .fromTo('#w2', { opacity: 0, y: 26 }, { opacity: 1, y: 0, duration: .7 }, 0.18)
    .to('#lede', { opacity: 1, duration: .7 }, 0.35)
    .to('#badge1', { opacity: 1, y: 0, duration: .6 }, 0.45)
    .to('#badge2', { opacity: 1, y: 0, duration: .6 }, 0.55)
    .to('#ctaRow', { opacity: 1, duration: .6 }, 0.6)
    .fromTo('.wrapper-upper-block', { opacity: 0, scale: 0.85 }, { opacity: 1, scale: 1, duration: 1 }, 0.2)
    .fromTo('.rotate', { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, duration: 1 }, 0.3);

  gsap.set('.eyebrow', { opacity: 0, y: -10 });
  gsap.set('#badge1, #badge2', { y: 16 });
});

// ============ home-hero-section-rotate-animation-start-here =================
document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".rotate");
  const boxes = document.querySelectorAll(".rotate > div");

  // =======================
  // ROTATE HERO IMAGE
  // =======================
  const speed = 30;
  const rotTl = gsap.timeline({ repeat: -1, ease: "none" });

  rotTl.to(wrapper, {
    rotation: 360,
    duration: speed,
    ease: "none",
    transformOrigin: "center center",
  }, 0);

  boxes.forEach((box) => {
    rotTl.to(box, {
      rotation: -360,
      duration: speed,
      ease: "none",
      transformOrigin: "center center",
    }, 0);
  });

  // =======================
  // FLIP — pauses the rotation while it plays
  // =======================
  const angleMap = {
    "top": 0, "side-1": 45, "right": 90, "side-3": 135,
    "bot": 180, "side-2": 225, "left": 270, "side-0": 315,
  };

  function getAngle(box) {
    for (const cls in angleMap) {
      if (box.classList.contains(cls)) return angleMap[cls];
    }
    return null;
  }

  const flipDuration = 0.9;
  const settleDuration = 0.45;
  const pauseHold = 0.4; // how long the ring stays frozen after the flip finishes

  function flipCard(card) {
    // Freeze the rotation the instant this card's flip begins
    rotTl.pause();

    gsap.timeline()
      .set(card, { zIndex: 30 })
      .fromTo(card,
        { scale: 1 },
        {
          rotationY: "+=360",
          scale: 1.2,
          duration: flipDuration,
          ease: "power2.inOut",
          transformOrigin: "center center",
        }
      )
      .to(card, {
        scale: 1,
        duration: settleDuration,
        ease: "power2.out",
      })
      .set(card, { zIndex: 1 })
      // hold the pause a beat longer, then resume the ring
      .call(() => rotTl.resume(), [], `+=${pauseHold}`);
  }

  boxes.forEach((box) => {
    const angle = getAngle(box);
    if (angle === null) return;

    const card = box.querySelector(".image-light-box") || box;

    // Time (within one rotation cycle) at which this box reaches the top
    const arrivalTime = speed * ((360 - angle) % 360) / 360;

    // Fire the flip exactly as the card arrives at the top
    rotTl.call(() => flipCard(card), [], arrivalTime);
  });
});
// ============ home-hero-section-rotate-animation-end-here =================

// ================ home-hero-section-bg-animation-end-here =================


// =========== recent-work-canvas-effect + scroll-effect (CORRECTED) ===========

document.addEventListener("DOMContentLoaded", () => {

  // =======================================================
  // THREE.JS — subtle floating particle background
  // =======================================================
  const canvas = document.querySelector("#work-bg-canvas");
  const section = document.querySelector("#work");

  if (canvas && section && window.THREE) {
    const renderer = new THREE.WebGLRenderer({
      canvas,
      alpha: true,
      antialias: true,
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
      50,
      section.clientWidth / section.clientHeight,
      0.1,
      1000
    );
    camera.position.z = 30;

    function resizeCanvas() {
      const { clientWidth, clientHeight } = section;
      renderer.setSize(clientWidth, clientHeight);
      camera.aspect = clientWidth / clientHeight;
      camera.updateProjectionMatrix();
    }
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    // Particle field
    const particleCount = 220;
    const positions = new Float32Array(particleCount * 3);
    const speeds = new Float32Array(particleCount);

    for (let i = 0; i < particleCount; i++) {
      positions[i * 3] = (Math.random() - 0.5) * 60;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 40;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 30;
      speeds[i] = 0.05 + Math.random() * 0.15;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));

    const material = new THREE.PointsMaterial({
      color: 0x02bfe1,
      size: 0.35,
      transparent: true,
      opacity: 0.5,
      depthWrite: false,
    });

    const particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Pause when off-screen
    let isVisible = true;
    const io = new IntersectionObserver(
      ([entry]) => { isVisible = entry.isIntersecting; },
      { threshold: 0 }
    );
    io.observe(section);

    const clock = new THREE.Clock();

    function animate() {
      requestAnimationFrame(animate);
      if (!isVisible) return;

      const t = clock.getElapsedTime();
      const posAttr = geometry.attributes.position;

      for (let i = 0; i < particleCount; i++) {
        posAttr.array[i * 3 + 1] += Math.sin(t * speeds[i]) * 0.002;
      }
      posAttr.needsUpdate = true;

      particles.rotation.y = t * 0.02;
      renderer.render(scene, camera);
    }
    animate();
  }

  // =======================================================
  // GSAP — 3D ALTERNATING SCROLL REVEAL + 3D HOVER TILT
  // Works on both Home page and Portfolio page
  // =======================================================
  if (typeof gsap === "undefined") return;

  gsap.registerPlugin(ScrollTrigger);

  const cards = gsap.utils.toArray(".recent-work-reveal-stagger .stagger-item-wrapper");

  console.log('cards', cards);

  if (!cards.length) return;

  // ---- 3D Alternating Scroll Reveal ----
  cards.forEach((card, i) => {
    const fromLeft = i % 2 === 0;
    console.log('card', card)
    gsap.fromTo(card,
      {
        opacity: 0,
        x: fromLeft ? -120 : 120,
        z: -300,
        rotationY: fromLeft ? 55 : -55,
        transformOrigin: fromLeft ? "left center" : "right center",
      },
      {
        opacity: 1,
        x: 0,
        z: 0,
        rotationY: 0,
        duration: 0.5,
        ease: "power3.out",
        scrollTrigger: {
          trigger: card,
          start: "top 85%",
          toggleActions: "play none none reverse",
        },
      }
    );
  });
});

// =========== recent-work-canvas-effect + scroll-effect END ===========



// =========================== services-card-animation Start ===========================

// =======================================================
// THREE.JS — glowing signal network with traveling data pulses
// =======================================================
(function () {
  const section = document.querySelector("#servicesModern");
  const canvas = document.querySelector("#services-modern-canvas");
  if (!section || !canvas || !window.THREE) return;

  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(55, 1, 0.1, 1000);
  camera.position.z = 60;

  function resize() {
    const { clientWidth: w, clientHeight: h } = section;
    renderer.setSize(w, h);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
  }
  resize();
  window.addEventListener("resize", resize);

  // ---- soft circular sprite texture for glowing nodes ----
  function makeGlowTexture() {
    const c = document.createElement("canvas");
    c.width = c.height = 64;
    const ctx = c.getContext("2d");
    const grad = ctx.createRadialGradient(32, 32, 0, 32, 32, 32);
    grad.addColorStop(0, "rgba(255,255,255,1)");
    grad.addColorStop(0.4, "rgba(180,230,255,0.6)");
    grad.addColorStop(1, "rgba(180,230,255,0)");
    ctx.fillStyle = grad;
    ctx.fillRect(0, 0, 64, 64);
    return new THREE.CanvasTexture(c);
  }
  const glowTexture = makeGlowTexture();

  const NODE_COUNT = 50;
  const LINK_DIST = 15;
  const bounds = { x: 55, y: 32, z: 20 };

  const nodes = [];
  const colorA = new THREE.Color(0x4436c7); // indigo
  const colorB = new THREE.Color(0x18d2f0); // cyan

  for (let i = 0; i < NODE_COUNT; i++) {
    nodes.push({
      pos: new THREE.Vector3(
        (Math.random() - 0.5) * bounds.x * 2,
        (Math.random() - 0.5) * bounds.y * 2,
        (Math.random() - 0.5) * bounds.z * 2
      ),
      vel: new THREE.Vector3(
        (Math.random() - 0.5) * 0.03,
        (Math.random() - 0.5) * 0.03,
        (Math.random() - 0.5) * 0.02
      ),
    });
  }

  // ---- glowing point nodes with per-node color gradient ----
  const pointPositions = new Float32Array(NODE_COUNT * 3);
  const pointColors = new Float32Array(NODE_COUNT * 3);
  nodes.forEach((n, i) => {
    const c = colorA.clone().lerp(colorB, Math.random());
    pointColors[i * 3] = c.r;
    pointColors[i * 3 + 1] = c.g;
    pointColors[i * 3 + 2] = c.b;
  });

  const pointGeo = new THREE.BufferGeometry();
  pointGeo.setAttribute("position", new THREE.BufferAttribute(pointPositions, 3));
  pointGeo.setAttribute("color", new THREE.BufferAttribute(pointColors, 3));

  const pointMat = new THREE.PointsMaterial({
    size: 2.2,
    map: glowTexture,
    vertexColors: true,
    transparent: true,
    opacity: 0.95,
    depthWrite: false,
    blending: THREE.AdditiveBlending,
  });
  const points = new THREE.Points(pointGeo, pointMat);
  scene.add(points);

  // ---- glowing connection lines ----
  const maxLines = NODE_COUNT * 6;
  const linePositions = new Float32Array(maxLines * 2 * 3);
  const lineGeo = new THREE.BufferGeometry();
  lineGeo.setAttribute("position", new THREE.BufferAttribute(linePositions, 3));
  lineGeo.setDrawRange(0, 0);
  const lineMat = new THREE.LineBasicMaterial({
    color: 0x6ee3f5,
    transparent: true,
    opacity: 0.22,
    depthWrite: false,
    blending: THREE.AdditiveBlending,
  });
  const lines = new THREE.LineSegments(lineGeo, lineMat);
  scene.add(lines);

  // ---- traveling data pulses along active connections ----
  const MAX_PULSES = 14;
  const pulseGeo = new THREE.SphereGeometry(0.55, 8, 8);
  const pulseMat = new THREE.MeshBasicMaterial({
    color: 0xbdf3ff,
    transparent: true,
    opacity: 0.9,
    blending: THREE.AdditiveBlending,
    depthWrite: false,
  });
  const pulseMesh = new THREE.InstancedMesh(pulseGeo, pulseMat, MAX_PULSES);
  const dummy = new THREE.Object3D();
  dummy.scale.setScalar(0);
  for (let i = 0; i < MAX_PULSES; i++) {
    dummy.updateMatrix();
    pulseMesh.setMatrixAt(i, dummy.matrix);
  }
  scene.add(pulseMesh);

  const pulses = Array.from({ length: MAX_PULSES }, () => ({ active: false, from: null, to: null, t: 0, speed: 0 }));
  let currentLinks = [];

  function spawnPulse() {
    if (!currentLinks.length) return;
    const slot = pulses.find(p => !p.active);
    if (!slot) return;
    const [i, j] = currentLinks[Math.floor(Math.random() * currentLinks.length)];
    slot.active = true;
    slot.from = nodes[i].pos;
    slot.to = nodes[j].pos;
    slot.t = 0;
    slot.speed = 0.012 + Math.random() * 0.014;
  }

  // ---- gentle cursor parallax ----
  let mouseX = 0, mouseY = 0;
  section.addEventListener("mousemove", (e) => {
    const rect = section.getBoundingClientRect();
    mouseX = (e.clientX - rect.left) / rect.width - 0.5;
    mouseY = (e.clientY - rect.top) / rect.height - 0.5;
  });

  let isVisible = true;
  new IntersectionObserver(([entry]) => { isVisible = entry.isIntersecting; }, { threshold: 0 }).observe(section);

  let frame = 0;

  function animate() {
    requestAnimationFrame(animate);
    if (!isVisible) return;
    frame++;

    nodes.forEach((n, i) => {
      n.pos.add(n.vel);
      if (Math.abs(n.pos.x) > bounds.x) n.vel.x *= -1;
      if (Math.abs(n.pos.y) > bounds.y) n.vel.y *= -1;
      if (Math.abs(n.pos.z) > bounds.z) n.vel.z *= -1;
      pointPositions[i * 3] = n.pos.x;
      pointPositions[i * 3 + 1] = n.pos.y;
      pointPositions[i * 3 + 2] = n.pos.z;
    });
    pointGeo.attributes.position.needsUpdate = true;

    if (frame % 3 === 0) {
      let idx = 0;
      currentLinks = [];
      for (let i = 0; i < NODE_COUNT && idx < maxLines; i++) {
        for (let j = i + 1; j < NODE_COUNT && idx < maxLines; j++) {
          const d = nodes[i].pos.distanceTo(nodes[j].pos);
          if (d < LINK_DIST) {
            linePositions[idx * 6] = nodes[i].pos.x;
            linePositions[idx * 6 + 1] = nodes[i].pos.y;
            linePositions[idx * 6 + 2] = nodes[i].pos.z;
            linePositions[idx * 6 + 3] = nodes[j].pos.x;
            linePositions[idx * 6 + 4] = nodes[j].pos.y;
            linePositions[idx * 6 + 5] = nodes[j].pos.z;
            idx++;
            currentLinks.push([i, j]);
          }
        }
      }
      lineGeo.setDrawRange(0, idx * 2);
      lineGeo.attributes.position.needsUpdate = true;
    }

    // occasionally spawn a new pulse
    if (frame % 20 === 0 && Math.random() < 0.7) spawnPulse();

    pulses.forEach((p, i) => {
      if (!p.active) return;
      p.t += p.speed;
      if (p.t >= 1) {
        p.active = false;
        dummy.scale.setScalar(0);
        dummy.updateMatrix();
        pulseMesh.setMatrixAt(i, dummy.matrix);
        return;
      }
      const pos = p.from.clone().lerp(p.to, p.t);
      dummy.position.copy(pos);
      // fade in/out at the ends of the journey
      const fade = Math.sin(p.t * Math.PI);
      dummy.scale.setScalar(0.6 + fade * 0.8);
      dummy.updateMatrix();
      pulseMesh.setMatrixAt(i, dummy.matrix);
    });
    pulseMesh.instanceMatrix.needsUpdate = true;

    // subtle parallax + slow ambient rotation
    camera.position.x += (mouseX * 12 - camera.position.x) * 0.03;
    camera.position.y += (-mouseY * 8 - camera.position.y) * 0.03;
    camera.lookAt(0, 0, 0);
    scene.rotation.y = Math.sin(Date.now() * 0.00008) * 0.15;

    renderer.render(scene, camera);
  }
  animate();
})();

// Cursor-following spotlight across the grid
const servicesModernGrid = document.querySelector(".services-modern-grid");
const servicesModernSpotlightEl = document.getElementById("servicesModernSpotlight");
if (servicesModernGrid && servicesModernSpotlightEl) {
  servicesModernGrid.addEventListener("mousemove", (e) => {
    const rect = servicesModernGrid.getBoundingClientRect();
    const mx = ((e.clientX - rect.left) / rect.width) * 100;
    const my = ((e.clientY - rect.top) / rect.height) * 100;
    servicesModernSpotlightEl.style.setProperty("--mx", `${mx}%`);
    servicesModernSpotlightEl.style.setProperty("--my", `${my}%`);
  });
}

// Scroll reveal
const servicesModernCards = document.querySelectorAll('.services-modern-card.reveal');
const servicesModernIO = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add('in-view'), i * 80);
      servicesModernIO.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
servicesModernCards.forEach(c => servicesModernIO.observe(c));

// =========================== services-card-animation End ===========================


// ========== TESTIMONIALS CARD ANIMATION START ==========
document.addEventListener("DOMContentLoaded", () => {

  // =======================================================
  // THREE.JS - FLOATING SPARKLES AROUND THE IMAGE (not full bg)
  // =======================================================
  function initImageSparkles(imageContainer) {

    if (!imageContainer || !window.THREE) return;

    const MARGIN = 46;        // how far sparkles can drift outside the image edges
    const SPARKLE_COUNT = 40; // total sparkles floating around the image

    // Make sure sparkles aren't clipped by the container and sit above the image
    imageContainer.style.position = imageContainer.style.position || "relative";
    imageContainer.style.overflow = "visible";

    const canvas = document.createElement("canvas");
    canvas.className = "image-sparkle-canvas";
    canvas.style.position = "absolute";
    canvas.style.inset = `-${MARGIN}px`;
    canvas.style.pointerEvents = "none";
    canvas.style.zIndex = "3";
    imageContainer.appendChild(canvas);

    const pixelRatio = Math.min(window.devicePixelRatio, 2);
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(pixelRatio);

    const scene = new THREE.Scene();
    let width, height, camera;

    function resize() {
      width = imageContainer.clientWidth + MARGIN * 2;
      height = imageContainer.clientHeight + MARGIN * 2;
      renderer.setSize(width, height);
      // Orthographic camera mapped 1:1 to pixel space, y-down to match screen coords
      camera = new THREE.OrthographicCamera(0, width, 0, height, -10, 10);
      camera.position.z = 5;
    }

    resize();
    window.addEventListener("resize", resize);

    const colors = [0x02bfe1, 0x2b57e8, 0x7d6cff, 0xffffff];
    const tmpColor = new THREE.Color();

    const positions = new Float32Array(SPARKLE_COUNT * 3);
    const starColors = new Float32Array(SPARKLE_COUNT * 3);
    const sizes = new Float32Array(SPARKLE_COUNT);
    const phases = new Float32Array(SPARKLE_COUNT);
    const speeds = new Float32Array(SPARKLE_COUNT);
    const floatAmps = new Float32Array(SPARKLE_COUNT);

    // Rough "keep clear" zone where the image itself sits, so sparkles mostly
    // hug the edges/corners rather than sitting on top of the photo.
    const innerX0 = MARGIN + 14;
    const innerY0 = MARGIN + 14;

    function placeSparkle(i) {
      let x, y, tries = 0;
      do {
        x = Math.random() * width;
        y = Math.random() * height;
        tries++;
      } while (
        tries < 12 &&
        x > innerX0 && x < width - innerX0 &&
        y > innerY0 && y < height - innerY0
      );

      positions[i * 3] = x;
      positions[i * 3 + 1] = y;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 4;
    }

    for (let i = 0; i < SPARKLE_COUNT; i++) {
      placeSparkle(i);

      tmpColor.set(colors[Math.floor(Math.random() * colors.length)]);
      starColors[i * 3] = tmpColor.r;
      starColors[i * 3 + 1] = tmpColor.g;
      starColors[i * 3 + 2] = tmpColor.b;

      sizes[i] = Math.random() < 0.2 ? Math.random() * 3 + 4 : Math.random() * 2 + 1.6;
      phases[i] = Math.random() * Math.PI * 2;
      speeds[i] = Math.random() * 1.2 + 0.5;
      floatAmps[i] = Math.random() * 10 + 4; // how far each sparkle drifts
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute("aColor", new THREE.BufferAttribute(starColors, 3));
    geometry.setAttribute("aSize", new THREE.BufferAttribute(sizes, 1));
    geometry.setAttribute("aPhase", new THREE.BufferAttribute(phases, 1));
    geometry.setAttribute("aSpeed", new THREE.BufferAttribute(speeds, 1));
    geometry.setAttribute("aFloatAmp", new THREE.BufferAttribute(floatAmps, 1));

    const material = new THREE.ShaderMaterial({
      uniforms: {
        uTime: { value: 0 },
        uPixelRatio: { value: pixelRatio }
      },
      transparent: true,
      depthWrite: false,
      blending: THREE.AdditiveBlending,
      vertexShader: `
        uniform float uTime;
        uniform float uPixelRatio;
        attribute float aSize;
        attribute float aPhase;
        attribute float aSpeed;
        attribute float aFloatAmp;
        attribute vec3 aColor;
        varying float vTwinkle;
        varying vec3 vColor;
        void main() {
          vColor = aColor;

          float twinkle = 0.35 + 0.65 * (0.5 + 0.5 * sin(uTime * aSpeed + aPhase));
          vTwinkle = twinkle;

          // gentle floating drift, independent per sparkle
          vec3 pos = position;
          pos.x += sin(uTime * aSpeed * 0.6 + aPhase) * aFloatAmp;
          pos.y += cos(uTime * aSpeed * 0.5 + aPhase * 1.3) * aFloatAmp;

          vec4 mvPosition = modelViewMatrix * vec4(pos, 1.0);
          gl_PointSize = aSize * twinkle * uPixelRatio;
          gl_Position = projectionMatrix * mvPosition;
        }
      `,
      fragmentShader: `
        varying float vTwinkle;
        varying vec3 vColor;
        void main() {
          vec2 c = gl_PointCoord - vec2(0.5);
          float dist = length(c);
          float glow = smoothstep(0.5, 0.0, dist);
          float core = smoothstep(0.12, 0.0, dist);
          float alpha = (glow * 0.6 + core) * vTwinkle;
          gl_FragColor = vec4(vColor, alpha);
        }
      `
    });

    const sparkles = new THREE.Points(geometry, material);
    scene.add(sparkles);

    let visible = true;
    new IntersectionObserver(([entry]) => {
      visible = entry.isIntersecting;
    }).observe(imageContainer);

    const clock = new THREE.Clock();

    function animate() {
      requestAnimationFrame(animate);
      if (!visible) return;
      material.uniforms.uTime.value = clock.getElapsedTime();
      renderer.render(scene, camera);
    }

    animate();
  }

  // =======================================================
  // TESTIMONIAL DATA
  // =======================================================

  const testimonials = [

    {
      name: "Sarah Johnson",
      designation: "CEO, Nexora Inc.",
      quote:
        "Working with this team transformed how we ship product. Communication was clear, timelines were respected, and the quality spoke for itself.",
      image:
        "https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600&q=80"
    },

    {
      name: "David Chen",
      designation: "CTO, Fintra Labs",
      quote:
        "Their engineering rigor is rare to find. Every release felt production-ready, and our QA cycles shrank dramatically.",
      image:
        "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80"
    },

    {
      name: "Amara Osei",
      designation: "Head of Product, Loopwell",
      quote:
        "They didn't just build what we asked for — they challenged our assumptions in ways that made the final product genuinely better.",
      image:
        "https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&q=80"
    }

  ];

  let current = 0;

  const nameEl = document.getElementById("name");
  const designationEl = document.getElementById("designation");
  const quoteEl = document.getElementById("quote");
  const imageContainer = document.getElementById("image-container");
  const dotsContainer = document.getElementById("pagination-dots");

  // Guard: only run this slider if all required elements exist on the page
  if (nameEl && designationEl && quoteEl && imageContainer && dotsContainer) {

    // Kick off the sparkles around this image container
    initImageSparkles(imageContainer);

    let imgEl = document.createElement("img");
    imgEl.className = "testimonial-image";
    imageContainer.appendChild(imgEl);

    function updateDots() {
      dotsContainer.querySelectorAll(".dot").forEach((dot) => {
        dot.classList.toggle("active", Number(dot.dataset.index) === current);
      });
    }

    function buildDots() {
      dotsContainer.innerHTML = "";
      testimonials.forEach((_, index) => {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "dot";
        dot.dataset.index = index;
        dot.setAttribute("aria-label", `Go to testimonial ${index + 1}`);
        dot.addEventListener("click", () => {
          if (index === current) return;
          const direction = index > current ? 1 : -1;
          current = index;
          renderTestimonial(current, direction);
        });
        dotsContainer.appendChild(dot);
      });
      updateDots();
    }

    function renderTestimonial(index, direction = 1) {

      const t = testimonials[index];

      gsap.timeline()

        .to([nameEl, designationEl, quoteEl], {
          opacity: 0,
          y: -20,
          duration: .35,
          ease: "power2.in"
        })

        .call(() => {

          nameEl.textContent = t.name;
          designationEl.textContent = t.designation;
          quoteEl.textContent = t.quote;
          updateDots();

        })

        .fromTo(
          [nameEl, designationEl, quoteEl],

          {
            opacity: 0,
            y: 20
          },

          {
            opacity: 1,
            y: 0,
            duration: .45,
            stagger: .08,
            ease: "power3.out"
          }
        );

      const newImg = document.createElement("img");

      newImg.className = "testimonial-image";
      newImg.src = t.image;

      imageContainer.appendChild(newImg);

      gsap.to(imgEl, {

        opacity: 0,
        x: -direction * 60,
        rotateY: -direction * 25,
        duration: .5,
        ease: "power2.in",

        onComplete() {
          imgEl.remove();
        }

      });

      gsap.fromTo(

        newImg,

        {
          opacity: 0,
          x: direction * 60,
          rotateY: direction * 25
        },

        {
          opacity: 1,
          x: 0,
          rotateY: 0,
          duration: .6,
          ease: "power3.out"
        }

      );

      imgEl = newImg;

    }

    buildDots();
    renderTestimonial(current);

  }

});
// ========== TESTIMONIALS CARD ANIMATION END ==========

// ========== CONTACT US: THREE.JS BG + GSAP FORM/REVEAL START ==========
(function () {

  var section = document.getElementById('contactUs');
  if (!section || typeof gsap === 'undefined') return;

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Three.js: globe + ambient particles on solid black bg ---------- */
  var canvas = document.getElementById('contact-bg-canvas');

  if (canvas && typeof THREE !== 'undefined') {

    var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
    renderer.setClearColor(0x000000, 0);
    var scene = new THREE.Scene();
    scene.background = null;
    scene.fog = new THREE.FogExp2(0x000000, 0.028);

    var camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
    camera.position.set(0, 0.5, 11);

    var dpr = Math.min(window.devicePixelRatio || 1, 2);
    var globeGroup = new THREE.Group();
    scene.add(globeGroup);

    // ---- 1. Wireframe globe ----
    var GLOBE_RADIUS = 3.6;
    var wireGeo = new THREE.IcosahedronGeometry(GLOBE_RADIUS, 3);
    var wireMat = new THREE.MeshBasicMaterial({
      color: 0x271887,
      wireframe: true,
      transparent: true,
      opacity: 0.3
    });
    globeGroup.add(new THREE.Mesh(wireGeo, wireMat));

    var coreGeo = new THREE.SphereGeometry(GLOBE_RADIUS * 0.985, 32, 32);
    var coreMat = new THREE.MeshBasicMaterial({
      color: 0x03080f,
      transparent: true,
      opacity: 0.5
    });
    globeGroup.add(new THREE.Mesh(coreGeo, coreMat));

    // ---- 2. Node points on globe surface ----
    var NODE_COUNT = window.innerWidth < 768 ? 18 : 32;
    var nodeMarkers = [];
    var nodePositions3 = [];

    for (var i = 0; i < NODE_COUNT; i++) {
      var phi = Math.acos(-1 + (2 * i) / NODE_COUNT);
      var theta = Math.sqrt(NODE_COUNT * Math.PI) * phi + Math.random() * 0.6;

      var x = GLOBE_RADIUS * Math.cos(theta) * Math.sin(phi);
      var y = GLOBE_RADIUS * Math.cos(phi);
      var z = GLOBE_RADIUS * Math.sin(theta) * Math.sin(phi);

      nodePositions3.push(x, y, z);
      nodeMarkers.push(new THREE.Vector3(x, y, z));
    }

    var nodeGeo = new THREE.BufferGeometry();
    nodeGeo.setAttribute('position', new THREE.Float32BufferAttribute(nodePositions3, 3));

    var nodeMat = new THREE.PointsMaterial({
      color: 0x02bfe1,
      size: 0.11,
      transparent: true,
      opacity: 0.9,
      blending: THREE.AdditiveBlending,
      depthWrite: false
    });

    globeGroup.add(new THREE.Points(nodeGeo, nodeMat));

    // ---- 3. Curved connection arcs ----
    var ARC_COUNT = window.innerWidth < 768 ? 6 : 12;
    var arcLines = [];

    function makeArc(p1, p2) {
      var mid = p1.clone().add(p2).multiplyScalar(0.5);
      mid.normalize().multiplyScalar(GLOBE_RADIUS * 1.35);

      var curve = new THREE.QuadraticBezierCurve3(p1, mid, p2);
      var points = curve.getPoints(40);
      var geo = new THREE.BufferGeometry().setFromPoints(points);

      var mat = new THREE.LineBasicMaterial({
        color: 0x39b6f0,
        transparent: true,
        opacity: 0,
        blending: THREE.AdditiveBlending
      });

      var line = new THREE.Line(geo, mat);
      globeGroup.add(line);

      return { line: line, life: 0, duration: 180 + Math.random() * 120, delay: Math.random() * 200 };
    }

    for (var a = 0; a < ARC_COUNT; a++) {
      var p1 = nodeMarkers[Math.floor(Math.random() * nodeMarkers.length)];
      var p2 = nodeMarkers[Math.floor(Math.random() * nodeMarkers.length)];
      if (p1 !== p2) arcLines.push(makeArc(p1, p2));
    }

    // ---- 4. Ambient background particles (starfield around the globe) ----
    var PARTICLE_COUNT = window.innerWidth < 768 ? 140 : 320;
    var particlePos = new Float32Array(PARTICLE_COUNT * 3);
    var particleVel = [];

    for (var pI = 0; pI < PARTICLE_COUNT; pI++) {
      // spread particles in a wide box around/behind the globe
      particlePos[pI * 3] = (Math.random() - 0.5) * 30;
      particlePos[pI * 3 + 1] = (Math.random() - 0.5) * 18;
      particlePos[pI * 3 + 2] = (Math.random() - 0.5) * 20 - 4;

      particleVel.push({
        vy: 0.0025 + Math.random() * 0.004,
        twinklePhase: Math.random() * Math.PI * 2,
        twinkleSpeed: 0.5 + Math.random() * 1.2
      });
    }

    var particleGeo = new THREE.BufferGeometry();
    particleGeo.setAttribute('position', new THREE.BufferAttribute(particlePos, 3));

    var particleMat = new THREE.PointsMaterial({
      color: 0x5ecbe6,
      size: 0.045,
      transparent: true,
      opacity: 0.55,
      blending: THREE.AdditiveBlending,
      depthWrite: false,
      sizeAttenuation: true
    });

    var particleField = new THREE.Points(particleGeo, particleMat);
    scene.add(particleField);

    // second, larger/dimmer far-layer for parallax depth
    var FAR_COUNT = window.innerWidth < 768 ? 70 : 150;
    var farPos = new Float32Array(FAR_COUNT * 3);

    for (var fI = 0; fI < FAR_COUNT; fI++) {
      farPos[fI * 3] = (Math.random() - 0.5) * 40;
      farPos[fI * 3 + 1] = (Math.random() - 0.5) * 24;
      farPos[fI * 3 + 2] = (Math.random() - 0.5) * 10 - 16;
    }

    var farGeo = new THREE.BufferGeometry();
    farGeo.setAttribute('position', new THREE.BufferAttribute(farPos, 3));

    var farMat = new THREE.PointsMaterial({
      color: 0x271887,
      size: 0.06,
      transparent: true,
      opacity: 0.35,
      blending: THREE.AdditiveBlending,
      depthWrite: false
    });

    var farField = new THREE.Points(farGeo, farMat);
    scene.add(farField);

    function resizeContactCanvas() {
      var rect = section.getBoundingClientRect();
      renderer.setSize(rect.width, rect.height, false);
      renderer.setPixelRatio(dpr);
      camera.aspect = rect.width / rect.height;
      camera.updateProjectionMatrix();

      var scale = rect.width < 600 ? 0.65 : 1;
      globeGroup.scale.set(scale, scale, scale);
    }

    resizeContactCanvas();

    var cFrame;
    var mouseNX = 0, mouseNY = 0;

    section.addEventListener('mousemove', function (e) {
      var rect = section.getBoundingClientRect();
      mouseNX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
      mouseNY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
    });

    function animateContact(t) {

      globeGroup.rotation.y += 0.0016;
      globeGroup.rotation.x += (mouseNY * 0.15 - globeGroup.rotation.x) * 0.03;

      camera.position.x += (mouseNX * 0.8 - camera.position.x) * 0.02;
      camera.lookAt(0, 0, 0);

      // arcs: fade in/hold/fade out on staggered loops
      arcLines.forEach(function (arc) {
        arc.life += 1;

        if (arc.life < arc.delay) {
          arc.line.material.opacity = 0;
        } else {
          var progress = (arc.life - arc.delay) / arc.duration;

          if (progress >= 1) {
            arc.life = 0;
            arc.delay = Math.random() * 100;
          } else {
            arc.line.material.opacity = Math.sin(progress * Math.PI) * 0.55;
          }
        }
      });

      // ambient particles: slow upward drift + twinkle, wrap around
      var posArray = particleGeo.attributes.position.array;

      for (var k = 0; k < PARTICLE_COUNT; k++) {
        posArray[k * 3 + 1] += particleVel[k].vy;

        if (posArray[k * 3 + 1] > 9) posArray[k * 3 + 1] = -9;
      }

      particleGeo.attributes.position.needsUpdate = true;
      particleMat.opacity = 0.45 + Math.sin(t / 1200) * 0.15;

      particleField.rotation.y += 0.0002;
      farField.rotation.y -= 0.00012;

      renderer.render(scene, camera);
      cFrame = requestAnimationFrame(animateContact);
    }

    if (!reduceMotion) {
      cFrame = requestAnimationFrame(animateContact);
    } else {
      renderer.render(scene, camera);
    }

    var resizeTimer;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(resizeContactCanvas, 200);
    });
  }

  /* ---------- GSAP: staggered entrance for info cards + form ---------- */
  var revealTargets = section.querySelectorAll('.reveal');

  var contactObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target;
        var delay = parseFloat(el.dataset.delay || 0);

        gsap.fromTo(el,
          { opacity: 0, y: 26 },
          { opacity: 1, y: 0, duration: .7, delay: delay, ease: 'power3.out' }
        );

        contactObserver.unobserve(el);
      }
    });
  }, { threshold: .2 });

  revealTargets.forEach(function (el) { contactObserver.observe(el); });

  /* ---------- GSAP: field focus glow + select "has value" label ---------- */
  section.querySelectorAll('.vv-field').forEach(function (field) {
    var control = field.querySelector('input, textarea, select');
    if (!control) return;

    control.addEventListener('focus', function () {
      gsap.to(field, { scale: 1.015, duration: .25, ease: 'power2.out' });
    });

    control.addEventListener('blur', function () {
      gsap.to(field, { scale: 1, duration: .25, ease: 'power2.out' });
    });

    if (control.tagName === 'SELECT') {
      control.addEventListener('change', function () {
        control.classList.toggle('has-value', !!control.value);
      });
    }
  });

  /* ---------- Contact form: real email submission ---------- */
var form = document.getElementById('contactForm');
var statusBox = document.getElementById('contactStatus');
var submitBtn = form ? form.querySelector('.contact-submit-btn') : null;

if (form && submitBtn) {

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    var requiredFields = form.querySelectorAll('[required]');
    var isValid = true;

    requiredFields.forEach(function (control) {
      var wrapper = control.closest('.vv-field');
      var filled = control.value && control.value.trim().length > 0;

      if (wrapper) {
        wrapper.classList.toggle('field-error', !filled);

        if (!filled && typeof gsap !== 'undefined') {
          gsap.fromTo(
            wrapper,
            { x: -6 },
            {
              x: 0,
              duration: .4,
              ease: 'elastic.out(1, .3)'
            }
          );
        }
      }

      if (!filled) {
        isValid = false;
      }
    });

    if (!isValid) return;

    submitBtn.classList.add('is-loading');
    submitBtn.disabled = true;

    var formData = new FormData(form);

    fetch('send-contact.php', {
      method: 'POST',
      body: formData
    })
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {

      submitBtn.classList.remove('is-loading');
      submitBtn.disabled = false;

      if (data.success) {

        statusBox.textContent =
          "Thanks! Your message has been sent — we'll be in touch shortly.";

        statusBox.classList.remove('error');
        statusBox.classList.add('show', 'success');

        if (typeof gsap !== 'undefined') {
          gsap.fromTo(
            statusBox,
            { opacity: 0, y: -10 },
            {
              opacity: 1,
              y: 0,
              duration: .4,
              ease: 'power2.out'
            }
          );
        }

        form.reset();

        form.querySelectorAll('.has-value').forEach(function (el) {
          el.classList.remove('has-value');
        });

      } else {

        statusBox.textContent =
          data.message || 'Something went wrong. Please try again.';

        statusBox.classList.remove('success');
        statusBox.classList.add('show', 'error');
      }
    })
    .catch(function (error) {

      console.error(error);

      submitBtn.classList.remove('is-loading');
      submitBtn.disabled = false;

      statusBox.textContent =
        'Unable to send your message right now. Please try again later.';

      statusBox.classList.remove('success');
      statusBox.classList.add('show', 'error');
    });
  });
}

})();
// ========== CONTACT US: THREE.JS BG + GSAP FORM/REVEAL START END ==========


// ============ stats-bar-count-up-animation-start-here =================
document.addEventListener("DOMContentLoaded", () => {

  const statsSection = document.querySelector(".stats-bar-section");
  if (!statsSection) return;

  const counters = statsSection.querySelectorAll('[data-stat="counter"]');
  let hasRun = false;

  gsap.set(statsSection.querySelectorAll(".stat-item"), { opacity: 0, y: 16 });

  function runCountUp() {
    if (hasRun) return;
    hasRun = true;

    counters.forEach((item) => {
      const target = parseFloat(item.dataset.target || "0");
      const numberEl = item.querySelector(".stat-number");
      const counterObj = { value: 0 };

      gsap.to(counterObj, {
        value: target,
        duration: 1.8,
        ease: "power2.out",
        onUpdate() {
          numberEl.textContent = Math.round(counterObj.value);
        },
        onComplete() {
          numberEl.textContent = target;
        }
      });
    });

    gsap.to(statsSection.querySelectorAll(".stat-item"),
      { opacity: 1, y: 0, duration: 0.6, stagger: 0.12, ease: "power2.out" }
    );
  }

  new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) runCountUp();
    });
  }, { threshold: 0.35 }).observe(statsSection);

});

// ============ stats-bar-count-up-animation-end-here =================
