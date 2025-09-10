<style>
    .book-btn-1 {
        width: 100%;
        background: #4ec0db !important;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: background-color 0.3s;
        margin-bottom: 15px;
    }

    .book-btn-1:hover {
        background: rgb(133, 210, 228);
    }
</style>


<style>
    /* Snowflake animation keyframes */
    @keyframes snowflake-fall {
        0% {
            top: -40px;
            opacity: 0.8;
            transform: translateX(0) scale(1) rotate(0deg);
        }
        80% {
            opacity: 1;
        }
        100% {
            top: 80%;
            opacity: 0.2;
            transform: translateX(20px) scale(1.2) rotate(360deg);
        }
    }
    .snowflake-anim {
        position: absolute;
        left: 50%;
        top: -40px;
        font-size: 2.5rem;
        color: #ffffff;
        z-index: 3;
        pointer-events: none;
        animation: snowflake-fall 2.5s linear infinite;
        /* Each snowflake can have a different delay for realism */
    }
    .swiper-slide {
        position: relative;
        overflow: hidden;
    }
</style>
<div class="container position-relative" style="padding-top: 40px;">
    <div class="my-5 position-absolute w-100" id="backpacking" style="z-index:2; top:200px; left:0;">
        <section id="shortbreak">
            <div class="container-fluid">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1 pulse mt-3" style="animation: bounceIn 0.7s; border-radius: 30px;">
                                    Register Now
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1 pulse mt-3" style="animation: bounceIn 0.7s; border-radius: 30px;">
                                    Register Now
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1 pulse mt-3" style="animation: bounceIn 0.7s; border-radius: 30px;">
                                    Register Now
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1 pulse mt-3" style="animation: bounceIn 0.7s; border-radius: 30px;">
                                    Register Now
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers" style="display:block; position:relative;">
                                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                                <button type="submit" class="book-btn-1 pulse mt-3" style="animation: bounceIn 0.7s; border-radius: 30px;">
                                    Register Now
                                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next" style="right: 46px;"></div>
                    <div class="swiper-button-prev" style="left: 46px;"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container position-relative" style="overflow: hidden;">
    <!-- Snowflake animation starts here -->
    <?php
    // Generate 12 snowflakes with random horizontal positions and animation delays
    for ($j = 0; $j < 12; $j++):
        $left = rand(5, 95); // percent
        $delay = round(0.2 * ($j % 6) + (rand(0, 10) / 20), 2); // seconds
        $size = rand(18, 32); // px
    ?>
        <i class="fa-solid fa-snowflake snowflake-anim"
           style="left: <?php echo $left; ?>%; font-size: <?php echo $size; ?>px; animation-delay: <?php echo $delay; ?>s;"></i>
    <?php endfor; ?>
    <a href="events.php">
        <img src="assets/img/event/banner/event-image-by-roamers-6.png" alt="" style="width:100%; display:block; position:relative; z-index:1;">
    </a>
</div>
<!-- Optionally, if you want more snowflakes per slide, you can add more <i> elements with different delays inside the .swiper-slide -->
<script>
    // Ensure Swiper is initialized with 4 slides per view
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            var swiperContainers = document.querySelectorAll('.swiper-container1');
            swiperContainers.forEach(function(container) {
                var options = {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: container.parentElement.querySelector('.swiper-button-next'),
                        prevEl: container.parentElement.querySelector('.swiper-button-prev'),
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        576: {
                            slidesPerView: 2
                        },
                        768: {
                            slidesPerView: 3
                        },
                        992: {
                            slidesPerView: 4
                        }
                    }
                };
                // If data-swiper-options is present, merge it
                if (container.dataset.swiperOptions) {
                    try {
                        var dataOptions = JSON.parse(container.dataset.swiperOptions);
                        options = Object.assign(options, dataOptions);
                    } catch (e) {}
                }
                new Swiper(container, options);
            });
        }
    });
</script>