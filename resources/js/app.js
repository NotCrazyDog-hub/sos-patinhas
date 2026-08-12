const modal = document.querySelector('#donationModal');
const form = document.querySelector('#donationForm');
const feedback = document.querySelector('#donationFeedback');
const customAmountWrap = document.querySelector('#customAmountWrap');
const customAmount = document.querySelector('#customAmount');
const category = document.querySelector('#donationCategory');
const mobileMenu = document.querySelector('[data-mobile-menu]');

const openDonation = (selectedCategory = '') => {
    if (!modal) return;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('overflow-hidden');
    if (selectedCategory && category) category.value = selectedCategory;
    document.querySelector('#amountOptions .amount-option')?.focus();
};

const closeDonation = () => {
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('overflow-hidden');
    form?.classList.remove('hidden');
    feedback?.classList.add('hidden');
};

document.querySelectorAll('[data-open-donation]').forEach((button) => {
    button.addEventListener('click', () => {
        if (mobileMenu) mobileMenu.classList.add('hidden');
        openDonation(button.dataset.category || '');
    });
});

document.querySelectorAll('[data-close-donation]').forEach((button) => button.addEventListener('click', closeDonation));
modal?.addEventListener('click', (event) => { if (event.target === modal) closeDonation(); });
document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeDonation(); });

document.querySelectorAll('.amount-option').forEach((button) => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.amount-option').forEach((option) => option.classList.remove('is-selected'));
        button.classList.add('is-selected');
        const isCustom = button.dataset.amount === 'custom';
        customAmountWrap?.classList.toggle('hidden', !isCustom);
        if (isCustom) customAmount?.focus();
    });
});

form?.addEventListener('submit', (event) => {
    event.preventDefault();
    const selectedAmount = document.querySelector('.amount-option.is-selected')?.dataset.amount;
    if (!selectedAmount || (selectedAmount === 'custom' && !customAmount?.value)) {
        document.querySelector('#amountOptions')?.classList.add('ring-2', 'ring-[var(--color-red)]', 'rounded-xl');
        setTimeout(() => document.querySelector('#amountOptions')?.classList.remove('ring-2', 'ring-[var(--color-red)]', 'rounded-xl'), 900);
        return;
    }
    form.classList.add('hidden');
    feedback?.classList.remove('hidden');
});

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

    let progress = 0;
    let fullyExpanded = false;
    let touchStartY = 0;
    let rafId = null;

    const clamp = (n, min, max) => Math.min(Math.max(n, min), max);

    const getIsMobile = () => window.innerWidth < 768;

    const getMediaSizes = () => {
        const mobile = getIsMobile();
        const baseW = 300;
        const baseH = 400;
        const maxW = mobile ? 95 : 95;
        const maxH = mobile ? 82 : 82;
        const addW = mobile ? 620 : 1400;
        const addH = mobile ? 200 : 460;
        const vw = window.innerWidth;
        const vh = window.innerHeight;
        const targetW = Math.min(baseW + progress * addW, vw * (maxW / 100));
        const targetH = Math.min(baseH + progress * addH, vh * (maxH / 100));
        return { w: targetW, h: targetH, vw, vh };
    };

    const render = () => {
        rafId = null;
        const { w, h, vw } = getMediaSizes();
        if (mediaWrap) {
            mediaWrap.style.width = `${w}px`;
            mediaWrap.style.height = `${h}px`;
        }
        if (bgImg) {
            bgImg.parentElement.style.opacity = `${1 - progress}`;
        }
        if (mediaOverlay) {
            mediaOverlay.style.opacity = `${0.5 - progress * 0.35}`;
        }
        const mobile = getIsMobile();
        const shiftVw = progress * (mobile ? 26 : 18);
        if (wordLeft) wordLeft.style.transform = `translateX(calc(-1 * ${shiftVw}vw))`;
        if (wordRight) wordRight.style.transform = `translateX(${shiftVw}vw)`;
        if (copy) copy.style.opacity = `${clamp(1 - progress * 1.2, 0, 1)}`;
        if (scrollHint) scrollHint.style.opacity = `${clamp(1 - progress * 1.6, 0, 1)}`;

        if (progress >= 1 && !fullyExpanded) {
            fullyExpanded = true;
            heroContent?.classList.add('is-visible');
        } else if (fullyExpanded && progress < 0.75) {
            fullyExpanded = false;
            heroContent?.classList.remove('is-visible');
        }
    };

    const schedule = () => {
        if (rafId != null) return;
        rafId = window.requestAnimationFrame(render);
    };

    if (reduced) {
        progress = 1;
        fullyExpanded = true;
        render();
        heroContent?.classList.add('is-visible');
        return;
    }

    const onWheel = (e) => {
        if (fullyExpanded) {
            if (e.deltaY < 0 && window.scrollY <= 5) {
                fullyExpanded = false;
                heroContent?.classList.remove('is-visible');
                progress = clamp(progress - 0.05, 0, 1);
                schedule();
                e.preventDefault();
            }
            return;
        }
        e.preventDefault();
        const delta = e.deltaY * 0.0009;
        progress = clamp(progress + delta, 0, 1);
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
                progress = clamp(progress - 0.05, 0, 1);
                schedule();
                e.preventDefault();
            }
            return;
        }
        e.preventDefault();
        const factor = d < 0 ? 0.008 : 0.005;
        progress = clamp(progress + d * factor, 0, 1);
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
