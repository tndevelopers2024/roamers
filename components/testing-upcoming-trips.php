<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ooty Travel Package</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<style>
/* ... (all your CSS remains unchanged) ... */
</style>

<div class="upcoming-container">
    <h2 class="upcoming-header">
        <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
        Upcoming Group Trips
    </h2>
    <!-- Tab -->
    <div class="upcoming-tabs" id="upcoming-tabs">
        <button class="upcoming-tab-btn active" data-tab="sep">
            <i class="fa-solid fa-cloud-sun-rain"></i> September
        </button>
        <button class="upcoming-tab-btn" data-tab="oct">
            <i class="fa-solid fa-cloud-showers-heavy"></i> October
        </button>
        <button class="upcoming-tab-btn" data-tab="nov">
            <i class="fa-solid fa-cloud-bolt"></i> November
        </button>
        <button class="upcoming-tab-btn" data-tab="dec">
            <i class="fa-solid fa-cloud-sun"></i> December
        </button>
        <button class="upcoming-tab-btn" data-tab="">
            <i class="fa-solid fa-snowflake"></i> January
        </button>
        <button class="upcoming-tab-btn" data-tab="">
            <i class="fa-solid fa-heart"></i> February
        </button>
    </div>
    <!-- September Tab Content -->
    <div class="upcoming-tab-content active" id="tab-sep">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- ... (cards remain unchanged) ... -->
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- October Tab Content -->
    <div class="upcoming-tab-content" id="tab-oct">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-oct">
                <!-- ... (cards remain unchanged) ... -->
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- November Tab Content -->
    <div class="upcoming-tab-content" id="tab-nov">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-nov">
                <!-- ... (cards remain unchanged) ... -->
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- December Tab Content -->
    <div class="upcoming-tab-content" id="tab-dec">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-dec">
                <!-- ... (cards remain unchanged) ... -->
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    // --- Swiper-like mouse drag with momentum for all .upcoming-slider ---
    document.addEventListener('DOMContentLoaded', function() {
        // Tab logic (unchanged)
        const tabBtns = document.querySelectorAll('.upcoming-tab-btn');
        const tabContents = document.querySelectorAll('.upcoming-tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tab = btn.getAttribute('data-tab');
                if (!tab) {
                    if (document.getElementById('coming-soon-toast')) return;
                    const toast = document.createElement('div');
                    toast.id = 'coming-soon-toast';
                    toast.innerText = 'Coming Soon!';
                    toast.style.position = 'fixed';
                    toast.style.top = '80px';
                    toast.style.left = '50%';
                    toast.style.transform = 'translateX(-50%) scale(0.95)';
                    toast.style.background = '#4CB9D3';
                    toast.style.color = '#fff';
                    toast.style.padding = '10px 12px';
                    toast.style.borderRadius = '20px';
                    toast.style.fontWeight = 'bold';
                    toast.style.fontSize = '16px';
                    toast.style.zIndex = 9999;
                    toast.style.boxShadow = '0 2px 12px rgba(0,0,0,0.15)';
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.35s, transform 0.35s';
                    document.body.appendChild(toast);

                    setTimeout(() => {
                        toast.style.opacity = '1';
                        toast.style.transform = 'translateX(-50%) scale(1)';
                    }, 10);

                    setTimeout(() => {
                        toast.style.opacity = '0';
                        toast.style.transform = 'translateX(-50%) scale(0.95)';
                        setTimeout(() => {
                            if (toast.parentNode) toast.parentNode.removeChild(toast);
                        }, 350);
                    }, 1000);
                    return;
                }

                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                tabContents.forEach(tc => {
                    if (tc.classList.contains('active')) {
                        tc.classList.remove('active');
                        setTimeout(() => {
                            if (!tc.classList.contains('active')) tc.style.display = 'none';
                        }, 500);
                    }
                });
                const content = document.getElementById('tab-' + tab);
                if (content) {
                    content.style.display = 'block';
                    void content.offsetWidth;
                    setTimeout(() => content.classList.add('active'), 10);

                    // Setup slider for new tab
                    setupSlider(
                        '#' + content.id + ' .upcoming-slider-wrapper',
                        '.upcoming-slider',
                        '.upcoming-slider-arrow.left',
                        '.upcoming-slider-arrow.right'
                    );
                    // Center first card on mobile
                    const activeSlider = content.querySelector('.upcoming-slider');
                    if (activeSlider && window.innerWidth <= 600) {
                        const cards = Array.from(activeSlider.querySelectorAll('.upcoming-card'));
                        if (cards.length > 0) {
                            const cardLeft = cards[0].offsetLeft;
                            const containerWidth = activeSlider.offsetWidth;
                            const cardWidth = cards[0].offsetWidth;
                            const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                            activeSlider.scrollTo({
                                left: scrollPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                }
            });
        });

        // Slider arrow logic (unchanged)
        function setupSlider(wrapperSelector, sliderSelector, leftArrowSelector, rightArrowSelector) {
            const wrapper = typeof wrapperSelector === 'string' ? document.querySelector(wrapperSelector) : wrapperSelector;
            if (!wrapper || wrapper.dataset.initialized === 'true') return;
            const slider = wrapper.querySelector(sliderSelector);
            const leftArrow = wrapper.querySelector(leftArrowSelector);
            const rightArrow = wrapper.querySelector(rightArrowSelector);
            if (!slider || !leftArrow || !rightArrow) return;
            const cards = Array.from(slider.querySelectorAll('.upcoming-card'));

            function updateArrows() {
                if (!slider) return;
                leftArrow.disabled = slider.scrollLeft <= 10;
                rightArrow.disabled = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 10;
            }

            function smoothScrollTo(position) {
                slider.scrollTo({
                    left: position,
                    behavior: 'smooth'
                });
            }

            function getCurrentIndex() {
                const center = slider.scrollLeft + slider.offsetWidth / 2;
                let closestIndex = 0;
                let closestDiff = Infinity;
                cards.forEach((card, index) => {
                    const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                    const diff = Math.abs(cardCenter - center);
                    if (diff < closestDiff) {
                        closestDiff = diff;
                        closestIndex = index;
                    }
                });
                return closestIndex;
            }

            function getCenteredPosition(index) {
                const card = cards[index];
                const cardLeft = card.offsetLeft;
                const containerWidth = slider.offsetWidth;
                const cardWidth = card.offsetWidth;
                return cardLeft - (containerWidth - cardWidth) / 2;
            }

            leftArrow.addEventListener('click', function() {
                const currentIndex = getCurrentIndex();
                const targetIndex = Math.max(0, currentIndex - 1);
                const scrollPosition = getCenteredPosition(targetIndex);
                smoothScrollTo(scrollPosition);
            });

            rightArrow.addEventListener('click', function() {
                const currentIndex = getCurrentIndex();
                const targetIndex = Math.min(cards.length - 1, currentIndex + 1);
                const scrollPosition = getCenteredPosition(targetIndex);
                smoothScrollTo(scrollPosition);
            });

            slider.addEventListener('scroll', updateArrows);
            window.addEventListener('resize', updateArrows);
            updateArrows();
            wrapper.dataset.initialized = 'true';
        }

        setupSlider(
            '.upcoming-tab-content.active .upcoming-slider-wrapper',
            '.upcoming-slider',
            '.upcoming-slider-arrow.left',
            '.upcoming-slider-arrow.right'
        );

        // Swiper-like drag with momentum for all .upcoming-slider
        function enableSwiperLikeDrag(slider) {
            let isDragging = false;
            let startX = 0;
            let scrollLeft = 0;
            let lastX = 0;
            let lastTime = 0;
            let velocity = 0;
            let rafId = null;

            function stopMomentum() {
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
            }

            function onPointerDown(e) {
                isDragging = true;
                slider.classList.add('dragging');
                stopMomentum();
                startX = (e.touches ? e.touches[0].clientX : e.clientX);
                lastX = startX;
                lastTime = performance.now();
                scrollLeft = slider.scrollLeft;
                velocity = 0;
            }

            function onPointerMove(e) {
                if (!isDragging) return;
                const x = (e.touches ? e.touches[0].clientX : e.clientX);
                const now = performance.now();
                const dx = x - lastX;
                const dt = now - lastTime;
                if (dt > 0) velocity = dx / dt;
                slider.scrollLeft -= dx;
                lastX = x;
                lastTime = now;
                if (e.cancelable) e.preventDefault();
            }

            function onPointerUp(e) {
                if (!isDragging) return;
                isDragging = false;
                slider.classList.remove('dragging');
                // Momentum
                let momentum = velocity * 100; // px/sec
                let current = slider.scrollLeft;
                let decay = 0.95;
                function momentumStep() {
                    if (Math.abs(momentum) < 0.5) return;
                    current -= momentum;
                    slider.scrollLeft = current;
                    momentum *= decay;
                    rafId = requestAnimationFrame(momentumStep);
                }
                if (Math.abs(momentum) > 1) {
                    momentumStep();
                }
            }

            // Mouse
            slider.addEventListener('mousedown', (e) => {
                if (e.button !== 0) return;
                onPointerDown(e);
                window.addEventListener('mousemove', onPointerMove);
                window.addEventListener('mouseup', onPointerUpOnce);
            });
            function onPointerUpOnce(e) {
                onPointerUp(e);
                window.removeEventListener('mousemove', onPointerMove);
                window.removeEventListener('mouseup', onPointerUpOnce);
            }

            // Touch
            slider.addEventListener('touchstart', onPointerDown, {passive: false});
            slider.addEventListener('touchmove', onPointerMove, {passive: false});
            slider.addEventListener('touchend', onPointerUp, {passive: true});

            // Prevent link clicks while dragging
            slider.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', (e) => {
                    if (isDragging) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                });
            });
        }

        document.querySelectorAll('.upcoming-slider').forEach(enableSwiperLikeDrag);

        // Center first card on mobile
        function scrollToFirstCard() {
            const slider = document.querySelector('.upcoming-slider');
            if (slider && window.innerWidth <= 600) {
                const cards = Array.from(slider.querySelectorAll('.upcoming-card'));
                if (cards.length > 0) {
                    const cardLeft = cards[0].offsetLeft;
                    const containerWidth = slider.offsetWidth;
                    const cardWidth = cards[0].offsetWidth;
                    const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                    slider.scrollTo({
                        left: scrollPosition,
                        behavior: 'smooth'
                    });
                }
            }
        }

        // Debounce resize handler
        let resizeTimeout;
        function debounceResize() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                scrollToFirstCard();
            }, 100);
        }

        scrollToFirstCard();
        window.addEventListener('resize', debounceResize);
    });
</script>
<script src="assets/js/upcoming-dates.js"></script>