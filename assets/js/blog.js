document.addEventListener("DOMContentLoaded", () => {
    const filterGroup = document.getElementById("filterGroup");
    const blogGrid = document.getElementById("blogGrid");
    const emptyMessage = document.getElementById("blogEmpty");

    if (!blogGrid) return;

    const cards = Array.from(blogGrid.querySelectorAll(".vv-blog-card"));
    const filters = filterGroup ?
        Array.from(filterGroup.querySelectorAll("[data-filter]")) :
        [];

    const sidebarFilters = document.querySelectorAll("[data-sidebar-filter]");
    const searchInputs = [
        document.getElementById("blogSearch"),
        document.getElementById("sidebarBlogSearch")
    ].filter(Boolean);

    let selectedCategory = "all";
    let searchQuery = "";

    function applyFilters() {
        let visibleCount = 0;

        cards.forEach(card => {
            const category = (card.dataset.category || "").toLowerCase();
            const text = card.textContent.toLowerCase();
            const matchesCategory =
                selectedCategory === "all" || category === selectedCategory;
            const matchesSearch = !searchQuery || text.includes(searchQuery);
            const visible = matchesCategory && matchesSearch;

            card.hidden = !visible;

            if (visible) visibleCount++;
        });

        if (emptyMessage) {
            emptyMessage.hidden = visibleCount !== 0;
        }
    }

    function selectCategory(category) {
        selectedCategory = category;

        filters.forEach(button => {
            const active = button.dataset.filter === category;
            button.classList.toggle("active", active);
            button.setAttribute("aria-pressed", String(active));
        });

        sidebarFilters.forEach(button => {
            button.classList.toggle(
                "active",
                button.dataset.sidebarFilter === category
            );
        });

        applyFilters();
    }

    filters.forEach(button => {
        button.addEventListener("click", () => {
            selectCategory(button.dataset.filter);
        });
    });

    sidebarFilters.forEach(button => {
        button.addEventListener("click", () => {
            selectCategory(button.dataset.sidebarFilter);
        });
    });

    searchInputs.forEach(input => {
        input.addEventListener("input", () => {
            searchQuery = input.value.trim().toLowerCase();

            searchInputs.forEach(otherInput => {
                if (otherInput !== input && otherInput.value !== input.value) {
                    otherInput.value = input.value;
                }
            });

            applyFilters();
        });
    });

    ["blogSearchForm", "sidebarSearchForm"].forEach(formId => {
        const form = document.getElementById(formId);
        if (form) {
            form.addEventListener("submit", event => {
                event.preventDefault();
                applyFilters();
            });
        }
    });

    // Optional scroll reveal, with a no-JavaScript-animation fallback.
    const revealItems = document.querySelectorAll(
        ".vv-blog-card, .vv-blog-sidebar-newsletter"
    );

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealItems.forEach(item => observer.observe(item));
    }
});