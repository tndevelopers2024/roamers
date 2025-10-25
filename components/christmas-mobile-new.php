    <style>
        /* Styles are omitted for brevity, keep yours as is */
        .event-container-2 {
            background-image: url('asstes/test/Christmas 1.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            min-height: 100vh;
            width: 100%;
            overflow: visible !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .event-card-2 {
            flex: 0 0 auto;
            width: 350px;
            min-width: 300px;
            max-width: 378px;
            /* height: 378px; */
            position: relative;
            border: 2px solid;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
            border-radius: 30px;
            background: transparent;
            scroll-snap-align: start;
            margin: 0 10px;
            overflow: visible !important;
        }

        .event-view {
            background-color: white;
            color: #4ec0db;
        }

        .event-image-2 {
            width: 100%;
            height: 450px;
            border-radius: 24px;
            overflow: visible !important;
        }

        .event-image-2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px;
            padding: 2px;
        }


        @media (max-width: 600px) {
            .event-image-2 {
                height: 500px !important;
                max-height: 100vw;
            }
        }

        @media (max-width: 400px) {
            .event-image-2 {
                height: 500px !important;
                max-height: 100vw;
            }
        }

        @media (max-width:600px) {
            .btn.btn-primary {
                font-size: 0.98rem !important;
                padding: 8px 18px !important;
                border-radius: 17px !important;
                min-width: 120px;
                width: 90vw;
                max-width: 400px;
            }

            .event-slider-wrapper+div {
                margin: 18px 0 !important;
            }
        }
    </style>

    <div class="event-container-2">
        <div class="event-slider-wrapper" id="event-slider-wrapper">
            <!-- Left Arrow -->
            <button class="event-slider-arrow left" aria-label="Scroll to previous trip" type="button" id="event-slider-prev">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="event-slider" id="event-slider-august">
                <!-- Your event cards (as previously in file) -->

                <div class="event-card-2" onclick="window.open('kodaikanal1-christmas-new-year.php','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2" >
                            <img src="https://www.roamers.in/assets/img/kodaikanal-backpacking/PineFores.jpeg" alt="Pottery WORK SHOP" style="filter: brightness(0.68);">
                        </div>
                        <!-- <div class="event-slot-badge">
                            <span class="event-dates-text" style="color: black;">
                                <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>

                            </span>
                        </div> -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 260px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">
                                KODAIKANAL BACKPACKING
                                <p class="mt-1" style="font-size: 10px; margin-bottom: 0px;color: #FFFFFF; text-transform: none;  
                            word-spacing: 1px;">Starting at 9,990/-</p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 14th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Coimbatore
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="kodaikanal1-christmas-new-year.php" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="https://roamers.in/assets/img/megalaya/Front%203.jpg" alt="Pottery WORK SHOP" style="filter: brightness(0.68);">
                        </div>
                        <!-- <div class="event-slot-badge">
                            <span class="event-dates-text" style="color: black;">
                                <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                                Slot: 30
                            </span>
                        </div> -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 260px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">
                                MAJESTIC MEGHALAYA
                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">Starting at 9,990/-
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 1st Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-1.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>
                <!-- <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-3-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event mt-1"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">

                                <p class="mt-1" style="font-size: 11px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;
                             word-spacing: 1px; "></p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 21st Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Bangalore
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="components\events\event-pages\events-nov-1.php" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-4-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">

                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-26.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-5-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>
    
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">

                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-26.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-6-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>

                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">

                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-26.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-7-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>

                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">

                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-26.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div>
                <div class="event-card-2" onclick="window.open('#','target:_blank')" style="cursor: pointer;">
                    <div class="event-content" style="position: relative;">
                        <div class="event-image-2">
                            <img src="assets/optimized-images/christmas&newyear/chirstmas&newyear-card-8-by-roamers.avif" alt="Pottery WORK SHOP">
                        </div>
   
                        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                            <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">

                                <p class="mt-1"
                                    style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                </p>
                            </h1>
                            <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                                <div class="event-dates">
                                    <span class="event-dates-text" style="font-weight:700"><i
                                            class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                        2025</span>
                                </div>
                                <div class="event-dates">
                                    <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                    <span class="event-dates-text" style="font-weight:700">Chennai
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="events-nov-26.php" target="_blank" class="event-view">Book Now</a>
                    </div>
                </div> -->

            </div>
            <!-- Right Arrow -->
            <button class="event-slider-arrow right" aria-label="Scroll to next trip" type="button" id="event-slider-next">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <script>
        /**
         * Simple universal event card slider with arrow scroll.
         * Fixes: left/right button not working (due to getCurrentIndex failing with overflow-x: hidden on .event-slider).
         * This version scrolls by precise card widths in both directions,
         * and keeps the interface reusable for multiple sliders on the same page.
         **/

        document.addEventListener('DOMContentLoaded', function() {
            // Find all evident slider wrappers (allow for multiple per page)
            var sliderWrappers = document.querySelectorAll('.event-slider-wrapper');
            sliderWrappers.forEach(function(wrapper) {
                var slider = wrapper.querySelector('.event-slider');
                var leftBtn = wrapper.querySelector('.event-slider-arrow.left');
                var rightBtn = wrapper.querySelector('.event-slider-arrow.right');
                if (!slider || !leftBtn || !rightBtn) return;

                let cards = Array.from(slider.getElementsByClassName('event-card-2'));
                // Fallback: When cards are not yet rendered
                if (!cards.length) return;

                // Helper: find width of full scroll (support odd margins)
                function getScrollAmount() {
                    // Find actual card width including margin
                    if (cards.length === 0) return 350; // fallback
                    // Use getBoundingClientRect to get margin too
                    let rectFirst = cards[0].getBoundingClientRect();
                    if (cards.length > 1) {
                        let rectSecond = cards[1].getBoundingClientRect();
                        return Math.abs(rectSecond.left - rectFirst.left);
                    } else {
                        return cards[0].offsetWidth;
                    }
                }

                // Helper: Check if fully scrolled left or right (for disabling arrows)
                function updateArrows() {
                    // If scrolled all the way to the left
                    leftBtn.disabled = slider.scrollLeft <= 2;
                    // If scrolled all the way to the right
                    rightBtn.disabled = Math.ceil(slider.scrollLeft + slider.offsetWidth) >= slider.scrollWidth - 2;
                }

                // Button click handler: scroll by card width step
                leftBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: -getScrollAmount(),
                        behavior: 'smooth'
                    });
                    setTimeout(updateArrows, 400); // allow scroll to finish
                });
                rightBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: getScrollAmount(),
                        behavior: 'smooth'
                    });
                    setTimeout(updateArrows, 400);
                });

                // Always update arrows on scroll
                slider.addEventListener('scroll', updateArrows);
                window.addEventListener('resize', updateArrows);

                // Touch/drag – keep as in your old code for swipe support, except with scrollBy instead of centering
                let isTouching = false;
                let startX = 0;
                let scrollLeftStart = 0;
                slider.addEventListener('touchstart', function(e) {
                    isTouching = true;
                    startX = e.touches[0].pageX;
                    scrollLeftStart = slider.scrollLeft;
                }, {
                    passive: true
                });

                slider.addEventListener('touchmove', function(e) {
                    if (!isTouching) return;
                    let x = e.touches[0].pageX;
                    let walk = startX - x;
                    slider.scrollLeft = scrollLeftStart + walk;
                }, {
                    passive: false
                });

                slider.addEventListener('touchend', function(e) {
                    isTouching = false;
                    // Snap to nearest card (optional: only if you want automatic snap, otherwise skip)
                    let amount = getScrollAmount();
                    let scrollPos = slider.scrollLeft;
                    let idx = Math.round(scrollPos / amount);
                    slider.scrollTo({
                        left: idx * amount,
                        behavior: 'smooth'
                    });
                    setTimeout(updateArrows, 400);
                });

                // For mouse dragging (desktop)
                let isDragging = false;
                let mouseStartX = 0;
                let mouseScrollLeft = 0;
                slider.addEventListener('mousedown', function(e) {
                    isDragging = true;
                    mouseStartX = e.pageX;
                    mouseScrollLeft = slider.scrollLeft;
                    slider.classList.add('dragging');
                });
                slider.addEventListener('mousemove', function(e) {
                    if (!isDragging) return;
                    e.preventDefault();
                    let x = e.pageX;
                    let walk = mouseStartX - x;
                    slider.scrollLeft = mouseScrollLeft + walk;
                });
                slider.addEventListener('mouseup', function(e) {
                    isDragging = false;
                    slider.classList.remove('dragging');
                    // Snap
                    let amount = getScrollAmount();
                    let idx = Math.round(slider.scrollLeft / amount);
                    slider.scrollTo({
                        left: idx * amount,
                        behavior: 'smooth'
                    });
                    setTimeout(updateArrows, 400);
                });
                slider.addEventListener('mouseleave', function(e) {
                    if (isDragging) {
                        isDragging = false;
                        slider.classList.remove('dragging');
                        let amount = getScrollAmount();
                        let idx = Math.round(slider.scrollLeft / amount);
                        slider.scrollTo({
                            left: idx * amount,
                            behavior: 'smooth'
                        });
                        setTimeout(updateArrows, 400);
                    }
                });

                // Init
                setTimeout(function() {
                    updateArrows();
                    // On mobile, reset scroll to left edge
                    if (window.innerWidth <= 600) slider.scrollLeft = 0;
                }, 100);
            });
        });
    </script>