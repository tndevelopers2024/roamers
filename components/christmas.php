<style>
    .backpacking-img {
        height: 430px !important;
    }

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
            transform: translateX(0) scale(0.9) rotate(0deg);
        }

        80% {
            opacity: 1;
        }

        100% {
            top: 80%;
            opacity: 0.2;
            transform: translateX(10px) scale(1.0) rotate(360deg);
        }
    }

    .snowflake-anim {
        position: absolute;
        left: 50%;
        top: -40px;
        font-size: 1.5rem;
        color: #fff;
        z-index: 3;
        pointer-events: none;
        animation: snowflake-fall 2.5s linear infinite;
    }

    /* Hide snowflakes on mobile for better performance */
    @media (max-width: 600px) {
        .snowflake-anim {
            display: none;
        }
    }

    .swiper {

        padding: 0px 24px 0px 24px !important;

    }

    /* Swiper Styles */
    .swiper-container {
        width: 100%;
        height: auto;
        overflow: hidden;
        position: relative;
        -webkit-overflow-scrolling: touch;
        margin: 0 auto;
    }

    .swiper-wrapper {
        display: flex;
        margin: 0;
        padding: 0;
    }

    .swiper-slide {
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
        width: 100%;
    }

    .swiper-slide a {
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 0.8vw 0.8vw 0 0;
        margin: 0 auto;
    }

    .swiper-slide img {
        width: 100%;
        max-width: 100%;
        object-fit: cover !important;
        display: block;
        border-radius: 0.8vw 0.8vw 0 0;
        border-radius: 12px;
    }

    @media (max-width: 575.98px) {
        .swiper-container {
            padding: 0;
            margin: 0 auto;
            width: 100%;
            overflow: hidden;
        }

        .swiper-slide {
            width: 100% !important;
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .swiper-slide a {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 100%;
        }

        .swiper-slide img {
            height: 553px !important;
            width: 100% !important;
            max-width: 100%;
            margin: 0 auto;
            border-radius: 12px;
        }
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
        opacity: 0.5;
        cursor: not-allowed;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-family: "Font Awesome 6 Free", "FontAwesome", Arial, sans-serif;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 0;
        content: '';
    }

    @media (max-width: 600px) {
        .swiper-button-next {
            right: 10px;
        }

        .swiper-button-prev {
            left: 10px;
        }
    }

    .height {
        z-index: 2;
        top: 200px;
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
        <!-- <section id="shortbreak">
            <div class="container-fluid">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="srilanka.php">
                                <img src="assets/img/event/cards/event-card-2.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="andaman.php">
                                <img src="assets/img/event/cards/event-card-3.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="kerala-onam.php">
                                <img src="assets/img/event/cards/event-card-4.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="kodaikanal.php">
                                <img src="assets/img/event/cards/event-card-5.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-2.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-3.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-4.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="valley-of-flowers">
                                <img src="assets/img/event/cards/event-card-5.png" class="backpacking-img" alt="roamers-Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section> -->

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="srilanka.php">
                        <img src="assets/img/event/cards/event-card-2.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="andaman.php">
                        <img src="assets/img/event/cards/event-card-3.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="kerala-onam.php">
                        <img src="assets/img/event/cards/event-card-4.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="kodaikanal.php">
                        <img src="assets/img/event/cards/event-card-5.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="valley-of-flowers">
                        <img src="assets/img/event/cards/event-card-2.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="valley-of-flowers">
                        <img src="assets/img/event/cards/event-card-3.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="valley-of-flowers">
                        <img src="assets/img/event/cards/event-card-4.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="valley-of-flowers">
                        <img src="assets/img/event/cards/event-card-5.png" class="backpacking-img" alt="roamers-Gallery">
                    </a>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</div>

<div class="container position-relative" style="overflow: visible;">
    <!-- Snowflake animation -->
    <?php
    for ($j = 0; $j < 12; $j++):
        $left = rand(5, 95);
        $delay = round(0.2 * ($j % 6) + (rand(0, 10) / 20), 2);
        $size = rand(18, 32);
    ?>
        <i class="fa-solid fa-snowflake snowflake-anim"
            style="left: <?php echo $left; ?>%; font-size: <?php echo $size; ?>px; animation-delay: <?php echo $delay; ?>s;"></i>
    <?php endfor; ?>
    <a href="events.php">
        <img src="assets/img/event/banner/event-image-by-roamers-6.png" alt="" style="width:100%; display:block; position:relative; z-index:1;">
    </a>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 16,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
    });
</script>