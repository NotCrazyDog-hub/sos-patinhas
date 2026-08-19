const mobileMenu = document.querySelector('[data-mobile-menu]');

document.querySelector('[data-toggle-menu]')?.addEventListener('click', () => mobileMenu?.classList.toggle('hidden'));
mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));

/* ---------- Scroll Expansion Hero ---------- */
(function initScrollHero() {
    const hero = document.querySelector('[data-scroll-hero]');
    if (!hero) return;

    const mediaWrap = hero.querySelector('[data-hero-media-wrap]');
    const mediaOverlay = hero.querySelector('[data-hero-overlay]');
    const bgImg = hero.querySelector('[data-hero-bg]');
    const copy = hero.querySelector('[data-hero-copy]');
    const wordLeft = hero.querySelector('[data-word-left]');
    const wordRight = hero.querySelector('[data-word-right]');
    const scrollHint = hero.querySelector('[data-scrollhint]');
    const heroContent = hero.querySelector('[data-hero-content]');

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    let targetProgress = 0;
    let progress = 0;
    let fullyExpanded = false;
    let touchStartY = 0;
    let rafId = null;

    const clamp = (n, min, max) => Math.min(Math.max(n, min), max);
    const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);
    const lerp = (a, b, t) => a + (b - a) * t;

    const getIsMobile = () => window.innerWidth < 768;

    const getMediaSizes = () => {
        const mobile = getIsMobile();
        const baseW = 260;
        const baseH = 460;
        const maxW = mobile ? 90 : 85;
        const maxH = mobile ? 86 : 86;
        const addW = mobile ? 300 : 600;
        const addH = mobile ? 220 : 520;
        const vw = window.innerWidth;
        const vh = window.innerHeight;
        const rawW = baseW + progress * addW;
        const rawH = baseH + progress * addH;
        const capW = vw * (maxW / 100);
        const capH = vh * (maxH / 100);
        let targetW = Math.min(rawW, capW);
        let targetH = Math.min(rawH, capH);
        const ratio = 9 / 16;
        if (targetW / targetH > ratio) {
            targetW = targetH * ratio;
        } else {
            targetH = targetW / ratio;
        }
        return { w: targetW, h: targetH, vw, vh };
    };

    const render = () => {
        rafId = null;
        progress = lerp(progress, targetProgress, 0.11);
        if (Math.abs(targetProgress - progress) < 0.002) progress = targetProgress;

        const eased = easeOutCubic(progress);
        const { w, h, vw } = getMediaSizes();
        if (mediaWrap) {
            mediaWrap.style.width = `${w}px`;
            mediaWrap.style.height = `${h}px`;
            const rotation = (1 - eased) * -1.2;
            mediaWrap.style.transform = `translate(-50%, -50%) rotate(${rotation}deg)`;
            const radius = 24 - eased * 8;
            mediaWrap.querySelector('.scroll-hero-media').style.borderRadius = `${radius}px`;
        }
        if (bgImg) {
            bgImg.parentElement.style.opacity = `${1 - eased}`;
            const scale = 1 + eased * 0.06;
            bgImg.style.transform = `scale(${scale})`;
        }
        if (mediaOverlay) {
            mediaOverlay.style.opacity = `${0.55 - eased * 0.4}`;
        }
        const mobile = getIsMobile();
        const shiftVw = eased * (mobile ? 26 : 18);
        if (wordLeft) wordLeft.style.transform = `translateX(calc(-1 * ${shiftVw}vw)) translateY(calc(-1 * ${eased * 2}vh))`;
        if (wordRight) wordRight.style.transform = `translateX(${shiftVw}vw) translateY(calc(${eased * 2}vh))`;
        if (copy) copy.style.opacity = `${clamp(1 - eased * 1.25, 0, 1)}`;
        if (scrollHint) scrollHint.style.opacity = `${clamp(1 - eased * 1.8, 0, 1)}`;
        if (scrollHint) scrollHint.style.transform = `translateX(-50%) translateY(${eased * 10}px)`;

        if (eased >= 0.98 && !fullyExpanded) {
            fullyExpanded = true;
            heroContent?.classList.add('is-visible');
        } else if (fullyExpanded && eased < 0.72) {
            fullyExpanded = false;
            heroContent?.classList.remove('is-visible');
        }

        if (Math.abs(targetProgress - progress) > 0.001) {
            schedule();
        }
    };

    const schedule = () => {
        if (rafId != null) return;
        rafId = window.requestAnimationFrame(render);
    };


    const onWheel = (e) => {
        let deltaY = e.deltaY;
        // Normalize deltaMode for Firefox (lines vs pixels)
        if (e.deltaMode === 1) deltaY *= 33;
        else if (e.deltaMode === 2) deltaY *= window.innerHeight;

        if (fullyExpanded) {
            if (deltaY < 0 && window.scrollY <= 5) {
                fullyExpanded = false;
                heroContent?.classList.remove('is-visible');
                targetProgress = clamp(targetProgress - 0.05, 0, 1);
                schedule();
                e.preventDefault();
            }
            return;
        }
        e.preventDefault();
        const delta = deltaY * 0.001;
        targetProgress = clamp(targetProgress + delta, 0, 1);
        schedule();
    };

    const onTouchStart = (e) => {
        touchStartY = e.touches[0].clientY;
    };

    const onTouchMove = (e) => {
        if (!touchStartY) return;
        const y = e.touches[0].clientY;
        const d = touchStartY - y;

        if (fullyExpanded) {
            if (d < -20 && window.scrollY <= 5) {
                fullyExpanded = false;
                heroContent?.classList.remove('is-visible');
                targetProgress = clamp(targetProgress - 0.05, 0, 1);
                schedule();
                e.preventDefault();
            }
            return;
        }
        e.preventDefault();
        const factor = d < 0 ? 0.009 : 0.006;
        targetProgress = clamp(targetProgress + d * factor, 0, 1);
        touchStartY = y;
        schedule();
    };

    const onTouchEnd = () => {
        touchStartY = 0;
    };

    const onScroll = () => {
        if (!fullyExpanded) window.scrollTo(0, 0);
    };

    window.addEventListener('wheel', onWheel, { passive: false });
    window.addEventListener('scroll', onScroll);
    window.addEventListener('touchstart', onTouchStart, { passive: false });
    window.addEventListener('touchmove', onTouchMove, { passive: false });
    window.addEventListener('touchend', onTouchEnd);

    window.addEventListener('resize', schedule);

    schedule();
})();

/* ---------- Reveal on scroll (simples, sem libs) ---------- */
(function initReveal() {
    const els = document.querySelectorAll('[data-reveal]');
    if (!('IntersectionObserver' in window) || !els.length) {
        els.forEach((el) => el.classList.remove('opacity-0', 'translate-y-4'));
        return;
    }
    els.forEach((el) => {
        el.classList.add('opacity-0', 'translate-y-4', 'transition-all', 'duration-700', 'ease-out');
    });
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-4');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach((el) => io.observe(el));
})();
