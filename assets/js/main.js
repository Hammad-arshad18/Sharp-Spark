(function () {
    "use strict";

    document.documentElement.classList.add("js");

    var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var header = document.querySelector("[data-header]");

    function updateHeader() {
        if (!header) return;
        header.classList.toggle("is-scrolled", window.scrollY > 20);
    }

    updateHeader();
    window.addEventListener("scroll", updateHeader, { passive: true });

    var toggle = document.querySelector("[data-nav-toggle]");
    var panel = document.getElementById("mobile-nav");
    var lastFocused = null;

    function navLabel(key, fallback) {
        var api = window.sharpSparkI18n;
        if (api && api.lang() === "ar") return api.t(key) || fallback;
        return fallback;
    }

    function openNav() {
        if (!panel || !toggle) return;
        lastFocused = document.activeElement;
        panel.hidden = false;
        toggle.setAttribute("aria-expanded", "true");
        toggle.setAttribute("aria-label", navLabel("nav.close", "Close menu"));
        document.body.classList.add("nav-open");
        var firstLink = panel.querySelector("a");
        if (firstLink) firstLink.focus();
        document.addEventListener("keydown", onKeydown);
    }

    function closeNav(restoreFocus) {
        if (!panel || !toggle) return;
        panel.hidden = true;
        toggle.setAttribute("aria-expanded", "false");
        toggle.setAttribute("aria-label", navLabel("nav.open", "Open menu"));
        document.body.classList.remove("nav-open");
        document.removeEventListener("keydown", onKeydown);
        if (restoreFocus !== false && lastFocused) lastFocused.focus();
        updateHeader();
    }

    function onKeydown(event) {
        if (event.key === "Escape") {
            closeNav(true);
        }
    }

    if (toggle && panel) {
        toggle.addEventListener("click", function () {
            if (toggle.getAttribute("aria-expanded") === "true") {
                closeNav(true);
            } else {
                openNav();
            }
        });
        panel.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                closeNav(false);
            });
        });
    }

    if (!reduceMotion && "IntersectionObserver" in window) {
        var reveal = document.querySelectorAll("[data-reveal]");
        var io = new IntersectionObserver(
            function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: "0px 0px -8% 0px", threshold: 0.12 }
        );
        reveal.forEach(function (el) {
            io.observe(el);
        });
    } else {
        document.querySelectorAll("[data-reveal]").forEach(function (el) {
            el.classList.add("is-visible");
        });
    }
})();
