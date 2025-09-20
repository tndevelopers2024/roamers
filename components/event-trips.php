<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    * {
        font-family: 'Manrope', sans-serif;
        box-sizing: border-box;
    }

    html,
    body {
        overflow-x: hidden;
        max-width: 100%;
        margin: 0;
    }

    .event-container {
        position: relative;
        max-width: 1500px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .event-tabs {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    @media (max-width: 600px) {
        .event-tabs {
            gap: 6px;
            margin-bottom: 18px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 0 10px;
            justify-content: flex-start;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
        }

        .event-tabs::-webkit-scrollbar {
            display: none;
        }
    }

    .event-tab-btn {
        background: #fff;
        color: #4CB9D3;
        border: 2px solid #4CB9D3;
        border-radius: 20px;
        padding: 8px 24px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
        margin-bottom: 8px;
    }

    @media (max-width: 600px) {
        .event-tab-btn {
            padding: 5px 20px;
            font-size: 12px;
            border-radius: 14px;
            margin-bottom: 4px;
        }
    }

    .event-tab-btn.active,
    .event-tab-btn:hover {
        background: #4CB9D3;
        color: #fff;
    }

    .event-tab-content {
        display: none;
        margin-bottom: 80px;
    }

    .event-tab-content.active {
        display: block;
    }

    .event-card {
        flex: 0 0 auto;
        width: 350px;
        min-width: 367px;
        max-width: 378px;
        height: 350px;
        position: relative;
        border: 2px solid;
        border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        border-radius: 30px;
        background: transparent;
        scroll-snap-align: start;
        margin: 0 10px;
    }

    .event-image {
        width: 100%;
        height: 450px;
        border-radius: 24px;
        overflow: hidden;
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
        padding: 2px;
    }

    @media (max-width: 600px) {
        .event-image {
            height: 500px !important;
            max-height: 70vw;
        }
    }

    @media (max-width: 400px) {
        .event-image {
            height: 320px !important;
            max-height: 80vw;
        }
    }

    .event-content {
        background: white;
        padding: 1px 1px 1px 1px;
        margin: 1px 1px 25px 1px;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 600px) {
        .event-content {
            padding: 0px;
        }
    }

    @media (max-width: 400px) {
        .event-content {
            padding: 0px;
        }
    }

    .event-card-flex {
        display: flex;
        justify-content: space-between;
        /* margin: 5px 15px 3px 10px; */
        flex-wrap: wrap;
    }

    .event-duration {
        display: flex;
        align-items: center;
        background-color: #FFFFFF;
        color: #292929;
        padding: 2px 6px;
        border-radius: 30px;
        font-size: 10px;
        font-weight: bold;
    }

    .event-duration .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
        color: #7dd3e7;
    }

    .event-duration .icon img {
        width: 12px !important;
    }

    .event-from {
        display: flex;
        align-items: center;
        background-color: #4CB9D3;
        border-radius: 30px;
        padding: 3px 7px;
        font-size: 11px;
        color: #FFFFFF;
    }

    .event-from .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-from .icon img {
        width: 6px !important;
    }

    .event-title {
        font-size: 15px;
        text-transform: uppercase;
        color: white;
        text-align: start;
        margin: 5px 0px 0px 12px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .event-locations {
        font-size: 12px;
        color: black;
        margin: 1px 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .event-price-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0px 35px 07px 12px;
        flex-grow: 1;
        color: black;
    }

    .event-dates {
        display: flex;
        align-items: center;
        background-color: #fff;
        color: #333;
        padding: 5px 8px;
        border-radius: 19px;
        font-size: 8px;
        box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .event-dates .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-dates .icon img {
        width: 16px !important;
    }

    .event-starts {
        font-size: 12px;
        font-weight: 800;
    }

    .event-price {
        font-weight: bold;
        text-align: right;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .event-view {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        color: #333;
        border-radius: 18px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 5px 5px 44px 0px #3CADC9B2;
        font-size: 15px;
        z-index: 10;
        transition: all 0.3s ease;
        padding: 8px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .event-header {
        margin: 50px 0 60px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    .event-header-icon {
        color: #4CB9D3;
        font-size: 36px;
    }

    .event-slider-wrapper {
        position: relative;
        width: 100%;
        /* padding: 0 40px; */
        overflow: visible;
        contain: content;
    }

    .event-slider {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding: 0px 0px 30px 0px;
        overflow-x: auto;
        overflow-y: visible;
        scroll-snap-type: x mandatory;
        scroll-padding: 15px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
    }

    .event-slider::-webkit-scrollbar {
        display: none;
    }

    /* Drag cursor feedback */
    .event-slider {
        cursor: grab;
    }

    .event-slider.dragging {
        cursor: grabbing;
    }

    .event-slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: none;
        color: #4CB9D3;
        font-size: 1.5rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        cursor: pointer;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .event-slider-arrow.left {
        left: 0;
    }

    .event-slider-arrow.right {
        right: 0;
    }

    .event-slider-arrow:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    @media (max-width: 900px) {
        .event-container {
            padding: 0 10px;
        }

        .event-card {
            width: 320px;
            min-width: 320px;
            max-width: 320px;
            height: 330px;
        }

        .event-image {
            height: 180px;
        }

        .event-title {
            font-size: 16px;
        }

        .event-locations {
            font-size: 11px;
        }

        .event-price-section {
            flex-direction: row;
            gap: 10px;
        }

        .event-slider-wrapper {
            padding: 0 32px;
        }

        .event-view {
            bottom: -18px;
        }
    }

    @media (max-width: 600px) {
        .event-container {
            padding: 0 5px;
        }

        .event-tab-content {
            margin-bottom: 80px;
        }

        .event-slider-wrapper {
            padding: 0;
        }

        .event-slider {
            -webkit-overflow-scrolling: touch;
        }

        .event-card {
            width: 350px;
            min-width: 350px;
            max-width: 350px;
            height: 325px !important;
            margin: 0;
            scroll-snap-align: center;
        }

        .event-title {
            font-size: 14px;
        }

        .event-locations {
            font-size: 10px;
        }

        .event-price-section {
            margin: 0px 18px 10px 12px;
            gap: 8px;
            padding: auto;
        }

        .event-dates {
            font-size: 7px;
            padding: 4px 6px;
            max-width: 60%;
        }

        .event-starts {
            font-size: 10px;
        }

        .event-price {
            font-size: 16px;
        }

        .event-view {
            width: 110px;
            height: 36px;
            font-size: 13px;
            padding: 6px 12px;
            bottom: -18px;
        }

        .event-header {
            font-size: 1.1rem;
            margin: 25px 0 35px;
        }

        .event-header-icon {
            font-size: 22px;
        }

        .event-slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .event-slider-arrow.left {
            left: 5px;
        }

        .event-slider-arrow.right {
            right: 5px;
        }
    }

    @media (max-width: 400px) {
        .event-card {
            width: calc(92vw - 16px);
            min-width: calc(92vw - 16px);
            max-width: calc(92vw - 16px);
            height: 280px;
        }

        .event-title {
            font-size: 13px;
            margin: 10px 12px 0px 12px;
        }

        .event-locations {
            font-size: 9px;
            margin: 0px 12px 0px 12px;
        }

        .event-dates {
            font-size: 6px;
            padding: 3px 5px;
            max-width: 65%;
        }

        .event-starts {
            font-size: 9px;
        }

        .event-price {
            font-size: 14px;
        }

        .event-view {
            width: 100px;
            height: 32px;
            font-size: 12px;
            padding: 5px 10px;
            bottom: -16px;
        }

        .event-slider-wrapper {
            padding: 0;
        }
    }
</style>

<div class="event-container">
    <!-- August Tab Content -->
    <div class="event-tab-content active" id="tab-august">
        <div class="event-slider-wrapper">
            <button class="event-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="event-slider" id="event-slider-august">

                <!-- Card 1-->
                <div class="event-card">
                    <div class="event-content">
                        <div class="event-image">
                            <img src="assets\img\event\cards\event-card-11.png" alt="Valley of Flowers">
                            <!-- <h1 class="event-title" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center; color: #fff; background: rgba(0,0,0,0.4); margin: 0; padding: 8px 0;">Valley of Flowers Trek</h1> -->
                        </div>
                        <a href="valley-of-flowers.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>

                <!-- Card 2-->
                <div class="event-card">
                    <div class="event-content">
                        <div class="event-image">
                            <img src="assets\img\event\cards\event-card-10.png" alt="Valley of Flowers">
                            <!-- <h1 class="event-title" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center; color: #fff; background: rgba(0,0,0,0.4); margin: 0; padding: 8px 0;">Valley of Flowers Trek</h1> -->
                        </div>
                        <a href="valley-of-flowers.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>

                <!-- Card 3-->
                <div class="event-card">
                    <div class="event-content">
                        <div class="event-image">
                            <img src="assets\img\event\cards\event-card-12.png" alt="Sri Lanka">
                        </div>
                        <div style="position: absolute; top: 100; left: 0; width: 100%; z-index: 2; margin-top: 229px;">
                            <div class="event-card-flex" style=" padding: 10px 20px;">
                                <div class="event-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>5:00 Pm
                                </div>
                                <div class="event-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>Chennai</span>
                                </div>
                            </div>
                            <h1 class="event-title"
                                style=" margin: 0; padding: 5px 20px; font-size: 15px; font-weight: bold;">
                                Strangers Fun meetup
                            </h1>
                            <div class="event-price-section"
                                style=" margin: 0;  padding: 4px 20px 6px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text">Date: 21st Sep</span>
                                </div>
                                <div class="event-dates">
                                    <span class="event-dates-text">Slot&nbsp;Count:&nbsp;[25]</span>
                                </div>
                            </div>
                        </div>
                        <a href="srilanka.php" target="_blank" class="event-view">View Trip</a>
                    </div>
                </div>


                <!-- Left Arrow Button -->
                <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                    <i class="fa fa-chevron-left"></i>
                </button>

                <!-- Right Arrow Button -->
                <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                    <i class="fa fa-chevron-right"></i>
                </button>


                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const tabBtns = document.querySelectorAll('.event-tab-btn');
                        const tabContents = document.querySelectorAll('.event-tab-content');

                        // Tab switching (only August is active)
                        tabBtns.forEach(btn => {
                            btn.addEventListener('click', function() {
                                const tab = btn.getAttribute('data-tab');
                                if (!tab) {
                                    // Prevent multiple toasts
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

                                // Tab switching logic (if more tabs are enabled in future)
                                tabBtns.forEach(b => b.classList.remove('active'));
                                btn.classList.add('active');
                                tabContents.forEach(tc => tc.classList.remove('active'));
                                const content = document.getElementById('tab-' + tab);
                                if (content) {
                                    content.classList.add('active');
                                    // Initialize slider for the newly active tab once
                                    setupSlider(
                                        '#' + content.id + ' .event-slider-wrapper',
                                        '.event-slider',
                                        '.event-slider-arrow.left',
                                        '.event-slider-arrow.right'
                                    );
                                    // Center first card on mobile for the active tab
                                    const activeSlider = content.querySelector('.event-slider');
                                    if (activeSlider && window.innerWidth <= 600) {
                                        const cards = Array.from(activeSlider.querySelectorAll('.event-card'));
                                        if (cards.length > 0) {
                                            const cardLeft = cards[0].offsetLeft;
                                            const containerWidth = activeSlider.offsetWidth;
                                            const cardWidth = cards[0].offsetWidth;
                                            const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                                            activeSlider.scrollTo({
                                                left: scrollPosition,
                                                behavior: 'auto'
                                            });
                                        }
                                    }
                                }
                            });
                        });

                        // Slider logic
                        function setupSlider(wrapperSelector, sliderSelector, leftArrowSelector, rightArrowSelector) {
                            const wrapper = typeof wrapperSelector === 'string' ? document.querySelector(wrapperSelector) : wrapperSelector;
                            if (!wrapper || wrapper.dataset.initialized === 'true') return;
                            const slider = wrapper.querySelector(sliderSelector);
                            const leftArrow = wrapper.querySelector(leftArrowSelector);
                            const rightArrow = wrapper.querySelector(rightArrowSelector);
                            if (!slider || !leftArrow || !rightArrow) return;
                            const cards = Array.from(slider.querySelectorAll('.event-card'));

                            function updateArrows() {
                                if (!slider) return;
                                // Use Math.abs to avoid floating point issues
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

                            // Ensure arrows receive pointer events even if overlapping content
                            [leftArrow, rightArrow].forEach((btn) => {
                                btn.style.pointerEvents = 'auto';
                            });

                            slider.addEventListener('scroll', updateArrows);
                            window.addEventListener('resize', updateArrows);
                            updateArrows();

                            // Re-evaluate arrows after images load (layout/scrollWidth changes)
                            const sliderImages = Array.from(slider.querySelectorAll('img'));
                            sliderImages.forEach((img) => {
                                if (img.complete) return; // already loaded
                                img.addEventListener('load', updateArrows, {
                                    passive: true,
                                    once: true
                                });
                                img.addEventListener('error', updateArrows, {
                                    passive: true,
                                    once: true
                                });
                            });
                            // Fallback: also run once after next frame and shortly after
                            requestAnimationFrame(updateArrows);
                            setTimeout(updateArrows, 300);
                            wrapper.dataset.initialized = 'true';
                        }

                        setupSlider(
                            '.event-tab-content.active .event-slider-wrapper',
                            '.event-slider',
                            '.event-slider-arrow.left',
                            '.event-slider-arrow.right'
                        );

                        // Also initialize sliders for inactive tabs so arrows work when switched later
                        document.querySelectorAll('.event-slider-wrapper').forEach((wrapper) => {
                            setupSlider(wrapper, '.event-slider', '.event-slider-arrow.left', '.event-slider-arrow.right');
                        });

                        // Drag-to-scroll for sliders (mouse + touch)
                        function enableDragScroll(slider) {
                            let isDown = false;
                            let startX = 0;
                            let scrollLeftStart = 0;
                            let isDragging = false;
                            let lastX = 0;
                            let lastTime = 0;
                            let velocity = 0;
                            let momentumId = 0;

                            function stopMomentum() {
                                if (momentumId) {
                                    cancelAnimationFrame(momentumId);
                                    momentumId = 0;
                                }
                            }

                            function onPointerDown(clientX) {
                                isDown = true;
                                isDragging = false;
                                startX = clientX;
                                lastX = clientX;
                                lastTime = performance.now();
                                velocity = 0;
                                scrollLeftStart = slider.scrollLeft;
                                slider.classList.add('dragging');
                                stopMomentum();
                            }

                            function onPointerMove(clientX, evt) {
                                if (!isDown) return;
                                const now = performance.now();
                                const deltaX = clientX - startX;
                                const movedSinceLast = clientX - lastX;
                                const dt = Math.max(1, now - lastTime);
                                if (Math.abs(deltaX) > 3) {
                                    isDragging = true;
                                }
                                slider.scrollLeft = scrollLeftStart - deltaX;
                                velocity = (movedSinceLast) / dt; // px per ms
                                lastX = clientX;
                                lastTime = now;
                                if (evt) evt.preventDefault();
                            }

                            function onPointerUp() {
                                isDown = false;
                                slider.classList.remove('dragging');
                                // Apply momentum only if we were dragging
                                if (!isDragging) return;
                                const decay = 0.95; // friction
                                const minVelocity = 0.02; // px/ms threshold
                                let currentVelocity = velocity * 16; // approx px per frame (16ms)
                                function step() {
                                    // Stop if velocity is low
                                    if (Math.abs(currentVelocity) < minVelocity * 16) {
                                        momentumId = 0;
                                        return;
                                    }
                                    slider.scrollLeft -= currentVelocity;
                                    currentVelocity *= decay;
                                    momentumId = requestAnimationFrame(step);
                                }
                                momentumId = requestAnimationFrame(step);
                            }

                            // Mouse
                            slider.addEventListener('mousedown', (e) => {
                                // Only left button
                                if (e.button !== 0) return;
                                onPointerDown(e.clientX);
                            });
                            window.addEventListener('mousemove', (e) => onPointerMove(e.clientX, e));
                            window.addEventListener('mouseup', onPointerUp);

                            // Touch
                            slider.addEventListener('touchstart', (e) => {
                                if (!e.touches || e.touches.length === 0) return;
                                onPointerDown(e.touches[0].clientX);
                            }, {
                                passive: true
                            });
                            slider.addEventListener('touchmove', (e) => {
                                if (!e.touches || e.touches.length === 0) return;
                                onPointerMove(e.touches[0].clientX, e);
                            }, {
                                passive: false
                            });
                            slider.addEventListener('touchend', onPointerUp, {
                                passive: true
                            });

                            // Prevent link clicks while dragging
                            slider.querySelectorAll('a').forEach((link) => {
                                link.addEventListener('click', (e) => {
                                    if (isDragging) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                    }
                                });
                            });
                        }

                        document.querySelectorAll('.event-slider').forEach(enableDragScroll);

                        // Center first card on mobile
                        function scrollToFirstCard() {
                            const slider = document.querySelector('.event-slider');
                            if (slider && window.innerWidth <= 600) {
                                const cards = Array.from(slider.querySelectorAll('.event-card'));
                                if (cards.length > 0) {
                                    const cardLeft = cards[0].offsetLeft;
                                    const containerWidth = slider.offsetWidth;
                                    const cardWidth = cards[0].offsetWidth;
                                    const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                                    slider.scrollTo({
                                        left: scrollPosition,
                                        behavior: 'auto'
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
            </div>
        </div>
    </div>
</div>