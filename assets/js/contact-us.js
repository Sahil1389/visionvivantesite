(() => {
    // Mobile navigation
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('navLinks');
    toggle.addEventListener('click', () => {
        const open = nav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(open));
        toggle.textContent = open ? '✕' : '☰';
    });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.textContent = '☰';
    }));

    // Reveal sections as they enter the viewport
    const revealItems = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealItems.forEach(item => observer.observe(item));
    } else {
        revealItems.forEach(item => item.classList.add('in-view'));
    }

    // Front-end form validation/demo. Connect this to your backend or form service to send messages.
    const form = document.getElementById('contactForm');
    const status = document.getElementById('formStatus');
    form.addEventListener('submit', event => {
        event.preventDefault();
        if (!form.reportValidity()) return;
        status.textContent = 'Thanks for reaching out! The form is validated, but message delivery is not configured yet. Connect this form to your backend to receive submissions.';
        status.classList.add('show');
    });
})();