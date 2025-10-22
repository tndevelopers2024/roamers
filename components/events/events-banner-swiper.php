<head>



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


