(() => {
  gsap.registerPlugin(ScrollTrigger);
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Navbar + progress
  const nav = document.querySelector('#mainNav');
  addEventListener('scroll', () => {
    nav?.classList.toggle('scrolled', scrollY > 30);
    const max = document.documentElement.scrollHeight - innerHeight;
    const p = document.querySelector('#scrollProgress');
    if (p) p.style.width = `${max ? (scrollY / max) * 100 : 0}%`;
  }, { passive: true });

  // Three.js: a subtle network behind the hero and process section.
  function network(canvas, count = 70, spread = 10) {
    if (!canvas || !window.THREE || reduce) return;
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(55, 1, .1, 100);
    camera.position.z = 9;
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(Math.min(devicePixelRatio, 1.6));
    const geo = new THREE.BufferGeometry();
    const arr = new Float32Array(count * 3);
    for (let i = 0; i < count; i++) { arr[i * 3] = (Math.random() - .5) * spread; arr[i * 3 + 1] = (Math.random() - .5) * 6; arr[i * 3 + 2] = (Math.random() - .5) * 5; }
    geo.setAttribute('position', new THREE.BufferAttribute(arr, 3));
    const pts = new THREE.Points(geo, new THREE.PointsMaterial({ color: 0x36cdeb, size: .055, transparent: true, opacity: .62 }));
    scene.add(pts);
    const wire = new THREE.Mesh(new THREE.IcosahedronGeometry(2.2, 1), new THREE.MeshBasicMaterial({ color: 0x392aa2, wireframe: true, transparent: true, opacity: .10 }));
    wire.position.x = 3.4; wire.position.y = .2; scene.add(wire);
    const resize = () => { const box = canvas.getBoundingClientRect(); renderer.setSize(box.width, box.height, false); camera.aspect = box.width / Math.max(box.height, 1); camera.updateProjectionMatrix() };
    resize(); addEventListener('resize', resize);
    const tick = () => { pts.rotation.y += .0008; pts.rotation.x += .00025; wire.rotation.x += .0015; wire.rotation.y += .001; renderer.render(scene, camera); requestAnimationFrame(tick) }; tick();
  }
  network(document.querySelector('#dm-hero-canvas'), 95, 12);
  network(document.querySelector('#dm-process-canvas'), 52, 13);

  if (!reduce) {
    gsap.from('.dm-hero-copy > *', { y: 34, opacity: 0, duration: .9, stagger: .1, ease: 'power3.out', delay: .15 });
    gsap.from('.dm-glass-panel', { rotateY: -35, rotateX: 18, z: -160, opacity: 0, duration: 1.35, ease: 'power3.out', delay: .25 });
    gsap.from('.dm-float-card', { scale: .7, opacity: 0, duration: .8, stagger: .16, ease: 'back.out(1.7)', delay: .7 });
    gsap.to('.card-seo', { y: -14, x: 8, duration: 2.6, yoyo: true, repeat: -1, ease: 'sine.inOut' });
    gsap.to('.card-social', { y: 14, x: -7, duration: 3.1, yoyo: true, repeat: -1, ease: 'sine.inOut' });
    gsap.to('.card-ppc', { y: -10, x: -5, duration: 2.8, yoyo: true, repeat: -1, ease: 'sine.inOut' });
    document.querySelector('#dm-stage')?.addEventListener('pointermove', e => { const r = e.currentTarget.getBoundingClientRect(), rx = (e.clientY - r.top - r.height / 2) / r.height * 9, ry = (e.clientX - r.left - r.width / 2) / r.width * 13; gsap.to('.dm-glass-panel', { rotateX: 8 - rx, rotateY: -10 + ry, duration: .5, ease: 'power2.out' }) });
    document.querySelector('#dm-stage')?.addEventListener('pointerleave', () => gsap.to('.dm-glass-panel', { rotateX: 8, rotateY: -10, duration: .7, ease: 'power2.out' }));
    gsap.utils.toArray('.reveal').forEach((el, i) => gsap.from(el, { scrollTrigger: { trigger: el, start: 'top 87%', once: true }, y: 34, opacity: 0, duration: .8, delay: Math.min((i % 5) * .04, .16), ease: 'power3.out' }));
    gsap.from('.dm-process-icon', { scrollTrigger: { trigger: '.dm-process-line', start: 'top 75%' }, scale: 0, rotate: -45, stagger: .12, duration: .75, ease: 'back.out(1.7)' });
  }

  // Testimonials: fills the original index.html placeholders without changing its markup.
  const testimonials = [
    { name: 'Evelyn M.', designation: 'Product Lead', quote: 'Vision Vivante brought structure, speed and clarity to our digital roadmap. Communication stayed sharp from discovery through delivery.', img: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=600&q=80' },
    { name: 'Daniel R.', designation: 'Founder & CEO', quote: 'The team combines strong execution with a clear understanding of business goals. We always knew what was happening and why.', img: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80' },
    { name: 'Nina K.', designation: 'Marketing Director', quote: 'A thoughtful, dependable partner. The work felt polished, measurable and aligned with the customer experience we wanted to create.', img: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80' }
  ];
  let ti = 0; const imgBox = document.querySelector('#image-container'), name = document.querySelector('#name'), des = document.querySelector('#designation'), quote = document.querySelector('#quote'), dots = document.querySelector('#pagination-dots');
  function renderTestimonial(i) { if (!name) return; const t = testimonials[i]; name.textContent = t.name; des.textContent = t.designation; quote.textContent = t.quote; imgBox.innerHTML = `<img src="${t.img}" alt="${t.name}" style="width:100%;height:100%;object-fit:cover;border-radius:inherit">`; dots.innerHTML = testimonials.map((_, j) => `<button aria-label="View testimonial ${j + 1}" class="${j === i ? 'active' : ''}" data-i="${j}"></button>`).join(''); dots.querySelectorAll('button').forEach(b => b.onclick = () => { ti = +b.dataset.i; renderTestimonial(ti) }); }
  renderTestimonial(0); setInterval(() => { ti = (ti + 1) % testimonials.length; renderTestimonial(ti) }, 5500);

  // Contact form demo validation.
  const form = document.querySelector('#contactForm'), status = document.querySelector('#contactStatus');
  form?.addEventListener('submit', e => { e.preventDefault(); if (!form.checkValidity()) { form.classList.add('was-validated'); if (status) status.textContent = 'Please complete the required fields.'; return; } if (status) status.textContent = 'Thanks — your message is ready to send once this form is connected to your backend.'; form.reset(); });

  // WhatsApp widget from index markup.
  const w = document.querySelector('#whatsappWidget'), toggle = document.querySelector('#whatsappToggle'), close = document.querySelector('#whatsappClose');
  toggle?.addEventListener('click', () => w?.classList.toggle('open')); close?.addEventListener('click', () => w?.classList.remove('open'));
})();
