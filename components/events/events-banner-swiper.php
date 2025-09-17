<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #000;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            /* Set a fixed aspect ratio for the banner, e.g. 16:7 */
            aspect-ratio: 16 / 7;
            max-height: 420px;
            min-height: 220px;
            border-radius: 24px;
            overflow: hidden;
            /* Ensure proper container sizing */
            position: relative;
            background: #000;
        }

        .swiper-wrapper {
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            text-align: center;
            font-size: 18px;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 100%;
            width: 100%;
            /* Ensure proper slide sizing */
            flex-shrink: 0;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            /* Prevent image drag ghosting */
            user-select: none;
            -webkit-user-drag: none;
            /* Ensure proper image scaling */
            min-width: 100%;
            min-height: 100%;
            max-width: none;
            max-height: none;
        }

        /* Responsive adjustments */
        @media (max-width: 900px) {
            .swiper {
                aspect-ratio: 16 / 9;
                max-height: 300px;
                min-height: 160px;
            }
        }

        @media (max-width: 600px) {
            .swiper {
                aspect-ratio: 16 / 11;
                max-height: 280px;
                min-height: 100px;
                border-radius: 12px;
                /* margin-top: 50px; */
            }
        }
    </style>
</head>


<!-- Swiper -->
<!-- <div class="event-banner-wrapper p-4 p-md-2  container " style="margin-top:80px; margin-bottom: 50px; ">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets\img\event\banner\event-image-by-roamers-8.png"
                    alt="Pool Party" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div> -->

<div class="container event-banner-mobile">
    <img src="assets\img\event\banner\event-image-by-roamers-8.png"
        alt="Pool Party" />
</div>
<style>
    .event-banner-mobile img {
        margin-top: 80px;
        border-radius: 20px;
    }

@media (max-width: 600px) {
    .event-banner-mobile {
        padding: 0;
        margin: 0 auto 20px auto;
        max-width: 100%;
    }
    .event-banner-mobile img {
        margin-top: 100px;
        width: 100%;
        height: 320px;
        object-fit: cover;
        border-radius: 12px;
        display: block;
    }
}
</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>