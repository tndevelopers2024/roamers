<style>
    /* Button Styles */
    .book-btn-1 {
        width: 100%;
        background: #4ec0db;
        color: #fff;
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
        background: #85d2e4;
    }

    /* Snowflake Animation */
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
        color: #fff;
        z-index: 3;
        pointer-events: none;
        animation: snowflake-fall 2.5s linear infinite;
    }

    /* Swiper Styles */
    .swiper-container {
        width: 100%;
        height: auto;
        overflow: hidden;
        position: relative;
    }

    .swiper-wrapper {
        display: flex;
        margin: 0;
        padding: 0;
    }

    .swiper-slide {
        position: relative;
        overflow: hidden;
        flex: 0 0 25%;
        max-width: 20%;
        min-width: 0;
        box-sizing: border-box;
        margin-right: 16px;
        /* height: 320px !important; */
    }

    .swiper-slide:last-child {
        margin-right: 0;
    }

    .swiper-slide a {
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        background: #fff;
        border-radius: 0.8vw 0.8vw 0 0;
        /* height: 320px !important; */
    }

    .swiper-slide img {
        width: 100%;
        /* height: 390px !important; */
        object-fit: fill !important;
        display: block;
        border-radius: 0.8vw 0.8vw 0 0;
    }

    /* Swiper Navigation Buttons */
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 61%;
        transform: translateY(-48%);
        opacity: 1;
        padding: 6px 18px;
        color: #fff;
        border: none;
        outline: none;
        text-align: center;
        border-radius: 100px;
        width: 45px;
        height: 45px;
        display: grid;
        background: #4ec0db;
        place-items: center;
        z-index: 10;
        cursor: pointer;
    }

    .swiper-button-next {
        right: 46px;
    }

    .swiper-button-prev {
        left: 46px;
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
        opacity: 1.35;
        cursor: pointer;
        pointer-events: visible;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-family: "Font Awesome 6 Free", "FontAwesome", Arial, sans-serif;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 0;
        content: '';
    }

    /* Responsive Swiper Slides */
    @media (max-width: 992px) {
        .swiper-slide {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
            margin-right: 16px;
        }

        .swiper-slide:last-child {
            margin-right: 0;
        }
    }

    @media (max-width: 768px) {
        .swiper-slide {
            flex: 0 0 50%;
            max-width: 50%;
            margin-right: 12px;
        }

        .swiper-slide:last-child {
            margin-right: 0;
        }
    }

    @media (max-width: 600px) {
        .swiper-slide {
            flex: 0 0 50%;
            max-width: 50%;
            margin-right: 12px;
        }

        .swiper-slide:last-child {
            margin-right: 0;
        }

        .height {
            z-index: 2;
            /* top: 30px; */
            left: 0;
        }
    }

    .height {
        z-index: 2;
        top: 290px;
        left: 0;
    }

    @media (max-width: 768px) {
        .height {
            top: 50px;
        }
    }

    @media (max-width: 600px) {
        .height {
            top: 20px;
        }
    }

    @media (max-width: 480px) {
        .height {
            top: 18px;
        }
    }
</style>

<div class="container position-relative">
    <div class="my-5 position-absolute w-100 height" id="backpacking">
        <section id="shortbreak">
            <div class="container-fluid">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="srilanka.php">
                                <img src="assets/img/event/cards/event-card-2.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="andaman.php">
                                <img src="assets/img/event/cards/event-card-3.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="kerala-onam.php">
                                <img src="assets/img/event/cards/event-card-4.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="kodaikanal.php">
                                <img src="assets/img/event/cards/event-card-5.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-2.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-3.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-4.png" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-5.png" alt="roamers-Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container position-relative" style="overflow: visible;">
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
<script>
    // Ensure Swiper is initialized with 4 slides per view
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            var swiperContainers = document.querySelectorAll('.swiper-container');
            swiperContainers.forEach(function(container) {
                var options = {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: container.querySelector('.swiper-button-next'),
                        prevEl: container.querySelector('.swiper-button-prev'),
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 12
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 12
                        },
                        992: {
                            slidesPerView: 4,
                            spaceBetween: 16
                        }
                    }
                };
                new Swiper(container, options);
            });
        }
    });
</script>