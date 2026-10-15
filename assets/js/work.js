(() => {
    const root = document.querySelector('.vv-work-page');
    if (!root) return;

    const filterButtons = [...root.querySelectorAll('.vv-work-filter')];
    const viewButtons = [...root.querySelectorAll('[data-view]')];
    const showcase = root.querySelector('[data-showcase]');
    const index = root.querySelector('[data-index]');
    const showcaseCards = [...root.querySelectorAll('[data-project]')];
    const indexRows = [...root.querySelectorAll('[data-index-project]')];
    const preview = root.querySelector('.vv-work-index-preview');
    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    let currentFilter = 'all';

    const matches = (element, filter) =>
        filter === 'all' ||
        (element.dataset.categories || '').split(/\s+/).includes(filter);

    // General scroll reveal — do not animate the project parent.
    const revealTargets = [
        ...root.querySelectorAll(
            '.vv-work-kicker, .vv-work-hero-line-one, ' +
            '.vv-work-hero-line-two, .vv-work-proof, ' +
            '.vv-work-section-head, .vv-work-index-row, ' +
            '.vv-work-marquee, .contact-us-section .reveal'
        )
    ];

    // Assign alternating slide directions to project columns.
    const projectColumns = [];

    showcaseCards.forEach((card, i) => {
        const image = card.querySelector('.vv-work-case-image');
        const copy = card.querySelector('.vv-work-case-copy');
        const reversed = card.classList.contains('is-reversed');

        card.style.setProperty(
            '--vv-reveal-delay',
            `${Math.min(i % 3, 2) * 100}ms`
        );

        if (image) {
            image.classList.add(
                'vv-scroll-column',
                reversed ? 'vv-slide-from-right' : 'vv-slide-from-left'
            );
            projectColumns.push(image);
        }

        if (copy) {
            copy.classList.add(
                'vv-scroll-column',
                reversed ? 'vv-slide-from-left' : 'vv-slide-from-right'
            );
            projectColumns.push(copy);
        }
    });

    // Observe elements entering the viewport.
    if (!reduceMotion && 'IntersectionObserver' in window) {
        revealTargets.forEach(element => {
            element.classList.add('vv-motion-ready');
        });

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                entry.target.classList.add('vv-motion-in');
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -45px 0px'
        });

        revealTargets.forEach(element => revealObserver.observe(element));

        // Separate observer for the left/right project columns.
        const columnObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                entry.target.classList.add('is-in-view');
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        projectColumns.forEach(column => {
            columnObserver.observe(column);
        });
    } else {
        revealTargets.forEach(element => element.classList.add('vv-motion-in'));
        projectColumns.forEach(column => column.classList.add('is-in-view'));
    }

    function applyFilter(filter) {
        currentFilter = filter;

        filterButtons.forEach(button => {
            const active = button.dataset.filter === filter;
            button.classList.toggle('is-active', active);
            button.setAttribute('aria-pressed', String(active));
        });

        showcaseCards.forEach(card => {
            card.hidden = !matches(card, filter);
        });

        indexRows.forEach(row => {
            row.hidden = !matches(row, filter);
        });

        if (index && preview) {
            index.classList.remove('has-preview');
        }
    }

    function setView(view) {
        const isShowcase = view === 'showcase';

        if (showcase) showcase.hidden = !isShowcase;
        if (index) index.hidden = isShowcase;

        viewButtons.forEach(button => {
            const active = button.dataset.view === view;
            button.classList.toggle('is-active', active);
            button.setAttribute('aria-pressed', String(active));
        });

        // Ensure index rows are visible when switching to Index view.
        if (!isShowcase && index) {
            indexRows.filter(row => !row.hidden).forEach(row => {
                row.classList.add('vv-motion-ready', 'vv-motion-in');
            });
        }
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            applyFilter(button.dataset.filter);
        });
    });

    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            setView(button.dataset.view);
        });
    });

    // Cursor-following image preview for Index view.
    if (
        index &&
        preview &&
        window.matchMedia('(hover: hover) and (pointer: fine)').matches
    ) {
        indexRows.forEach(row => {
            const showPreview = () => {
                if (row.hidden) return;

                const card = showcaseCards.find(
                    item => item.dataset.projectIndex === row.dataset.projectIndex
                );
                const image = card && card.querySelector('img');

                if (!image) return;

                preview.src = image.currentSrc || image.src;
                preview.alt = image.alt || '';
                index.classList.add('has-preview');
            };

            row.addEventListener('mouseenter', showPreview);
            row.addEventListener('focusin', showPreview);
        });

        index.addEventListener('mousemove', event => {
            const rect = index.getBoundingClientRect();
            preview.style.left = `${event.clientX - rect.left}px`;
            preview.style.top = `${event.clientY - rect.top}px`;
        });

        index.addEventListener('mouseleave', () => {
            index.classList.remove('has-preview');
        });

        index.addEventListener('focusout', event => {
            if (!index.contains(event.relatedTarget)) {
                index.classList.remove('has-preview');
            }
        });
    }

    // Gentle hero image parallax.
    if (!reduceMotion &&
        window.matchMedia('(hover: hover) and (pointer: fine)').matches
    ) {
        const heroImage = root.querySelector('.vv-work-hero-image');
        let ticking = false;

        const updateHero = () => {
            if (heroImage) {
                const rect = heroImage.getBoundingClientRect();
                const viewport = window.innerHeight || 1;

                if (rect.bottom > 0 && rect.top < viewport) {
                    const progress =
                        (viewport - rect.top) / (viewport + rect.height);
                    const offset = (progress - 0.5) * 14;

                    heroImage.style.setProperty(
                        '--vv-hero-parallax',
                        `${offset.toFixed(2)}px`
                    );
                }
            }

            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(updateHero);
        }, { passive: true });

        updateHero();
    }

    // Pause marquee when the browser tab is hidden.
    const track = root.querySelector('.vv-work-marquee-track');

    document.addEventListener('visibilitychange', () => {
        if (!track || reduceMotion) return;

        track.style.animationPlayState =
            document.hidden ? 'paused' : '';
    });

    if (reduceMotion && track) {
        track.style.animation = 'none';
    }

    applyFilter(currentFilter);

    if (showcase && index) {
        setView('showcase');
    }
})();