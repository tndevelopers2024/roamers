<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Roamers - Yelagiri</title>

    <!-- SEO Meta Description -->
    <meta name="description" content="Yelagiri" />
    <meta name="author" content="Themeland" />
    <meta property="og:image" content="#" />
    <meta property="og:image:secure_url" content="#" />
    <meta property="og:image:width" content="700" />
    <meta property="og:image:height" content="500" />
    <meta property="og:title" content="Yelagiri Packages" />
    <meta property="og:description"
        content="Discover the best Yelagiri packages with Roamers. Explore stunning beaches, cliffs, and cultural experiences. Book your Yelagiri trip today!" />
    <meta property="og:url" content="#" />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->

    <!-- Favicon  -->
    <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->
    <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

    <!-- ***** All CSS Files ***** -->
    <!-- ***** Font Asesome cdn ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Damion&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Responsive css -->

    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            font-family: 'Lato', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .section-title,
        .head,
        .banner-title,
        .card-title,
        .accordion-button {
            font-family: 'Montserrat', sans-serif;
            color: #094067;
        }

        .head {
            color: #094067 !important;
            position: relative;
            padding-bottom: 15px;
            text-align: center !important;
        }

        /* Centered expanding bar */
        .head::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            height: 4px;
            width: 50px;
            /* background-color: #094067; */
            border-radius: 2px;
            animation: expandBar 3s ease-in-out infinite alternate;
        }

        @keyframes expandBar {
            0% {
                width: 40px;
                opacity: 0.7;
            }

            100% {
                width: 90px;
                opacity: 1;
            }
        }


        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.7) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .banner-content {
            text-align: center;
            color: #fff;
            padding: 20px;
            max-width: 800px;
            z-index: 10;
        }

        .banner-title {
            font-size: 3.5rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5);
            /* opacity: 0; */
            /* transform: translateY(30px); */
            /* animation: fadeInUp 1s ease forwards 0.5s; */
            color: #fff !important;
            position: relative;
            z-index: 20;
        }

        .banner-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 30px;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
            /* opacity: 0; */
            /* transform: translateY(20px); */
            /* animation: fadeInUp 1s ease forwards 0.8s; */
            color: #fff !important;
            position: relative;
            z-index: 20;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .banner-nav-btn {
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
        }

        .banner-nav-btn:hover {
            color: #4EC0DB;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            nav::before {
                display: none;
            }

            .banner-slider {
                height: 70vh;
                min-height: 500px;
            }

            .banner-title {
                font-size: 2rem !important;
                padding: 0 15px;
            }

            .banner-subtitle {
                font-size: 1rem !important;
                padding: 0 15px;
            }
        }

        .swiper-container2 {
            width: 100%;
            height: 500px !important;
        }

        .swiper-slide {
            height: 100% !important;
        }

        .swiper-slide a {
            height: 85% !important;
            position: relative;
            border-radius: 10px !important;
            overflow: hidden;
            transform: scale(100%) !important;
        }

        .swiper-slide a:hover {
            transform: scale(100%) !important;
        }

        .swiper-slide a .slide-bg {
            position: absolute;
            left: 0;
            bottom: 0;
            padding: 10px;
            width: 100%;
            height: 100% !important;
            background: linear-gradient(rgba(0, 0, 0, 0) 46.67%, rgb(0 0 0 / 50%) 86.21%);
        }

        .slide-text h5 {
            text-align: left !important;
            font-size: 18px;
            color: #fff;
        }

        .slide-text p {
            color: #fff !important;
            margin-bottom: 10px !important;
        }

        .slide-text span {
            color: #fff !important;
        }

        .swiper-slide a:hover {
            box-shadow: rgba(48, 212, 245, 0.24) 0px 6px 8px;
        }


        .swiper-slide a {
            width: 97% !important;
        }

        .swiper-slide a .img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover;
            border-radius: 0 !important;
        }

        .slide-text {
            position: absolute;
            bottom: 10px;
            left: 0;
            padding: 20px;
        }

        @media (max-width: 600px) {
            .trip-home h1 {
                margin: 90px 0px 27px !important;
            }

            .swiper-slide {
                height: 100% !important;
            }

            .swiper-container2 {
                height: auto !important;
                margin-bottom: 20px !important;
            }

            .swiper-slide img {
                min-height: 400px !important;
            }

            .swiper-slide a .slide-bg {
                position: absolute;
                left: 0;
                bottom: 0;
                padding: 10px;
                width: 100%;
                height: 100% !important;
                background: rgb(0, 0, 0);
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 30%, rgba(0, 0, 0, 0.1) 50%) !important;
            }

            .slide-text h5 {
                text-align: left !important;
                font-size: 16px;
                color: #fff;
            }

            .swiper-slide a .img {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover;
                border-radius: 0 !important;
            }

            .slide-text {
                position: absolute;
                bottom: 10px;
                left: 0;
                padding: 20px;
            }
        }

        .inner {
            display: flex;
            padding-top: 5px;
            margin-bottom: 5px;
            gap: 20px;
        }

        .fa-calendar-days,
        .fa-location-dot {
            color: #4EC0DB;
            margin-right: 6px;
        }

        .exicon {
            width: 12px !important;
            height: 14px !important;
            margin: 0;
            padding-top: 3px;
        }

        .inner h3 {
            font-size: 15px;
            color: #fff;
            font-weight: 500;
        }

        .inner h4 {
            font-size: 15px;
            color: #fff;
            font-weight: 500;
        }

        .picture h4 {
            background-color: #4da7bbff;
            color: #ffffffff;
            position: absolute;
            border: 0px solid #fff;
            z-index: 99 !important;
            top: 3%;
            right: 4%;
            font-size: 12px;
            padding: 3px 10px 3px 10px;
            border-radius: 5px;
            margin-bottom: 0px !important;
            overflow: hidden;

        }

        .picture h4::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            transform: skewX(-30deg);
            animation: shine 2s infinite linear;
            z-index: 10;
        }

        /* Keyframes for shine effect */
        @keyframes shine {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        /* Highlights Section Styles */
        .highlights-section {
            background-color: #f9f9f9;
            padding: 60px 0;
            margin-top: 50px;
        }

        .highlight-card {
            background: #fff;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .highlight-icon {
            width: 70px;
            height: 70px;
            background: #e0f7fa;
            color: #4EC0DB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .highlight-card:hover .highlight-icon {
            background: #4EC0DB;
            color: #fff;
        }

        .highlight-card h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .highlight-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Gallery Section Styles */
        .gallery-section {
            padding: 60px 0;
            background: #fff;
            overflow: hidden;
        }

        .swiper-container-gallery {
            width: 100%;
            padding-top: 60px;
            /* More space for top elements */
            padding-bottom: 70px;
            /* More space for shadows */
            overflow: visible !important;
            /* Allow shadows to bleed */
        }

        .swiper-container-gallery .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 450px !important;
            /* Slightly reduced height for better aspect ratio */
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            filter: none !important;
            /* Remove blur */
            opacity: 1 !important;
            /* Full visibility */
            transition: all 0.5s ease;
            /* margin-top: 30px; Removed manual margin, let swiper handle it */
        }

        @media (max-width: 600px) {
            .swiper-container-gallery .swiper-slide {
                width: 75vw !important;
                height: 350px !important;
            }

            .section-title {
                font-size: 28px !important;
            }
        }

        .swiper-container-gallery .swiper-slide-active {
            filter: blur(0px);
            opacity: 1;
            /* transform: scale(1.1); Removed to prevent conflict with Swiper */
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .swiper-container-gallery .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: #fff;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .swiper-container-gallery .swiper-slide-active .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay h5 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Custom Book Now Button Styles */
        .btn-custom-book {
            background-color: #4EC0DB;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 10px 10px 10px 30px;
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom-book:hover,
        .package-card-wrap:hover .btn-custom-book {
            background-color: #094067;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            color: #fff;
        }

        .btn-custom-book .icon-circle {
            background-color: #fff;
            color: #000;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 15px;
            transition: transform 0.3s ease;
        }

        .btn-custom-book:hover .icon-circle,
        .package-card-wrap:hover .icon-circle {
            transform: rotate(45deg);
            color: #4EC0DB;
        }

        /* Modern Package Card Styles */
        .package-card-wrap {
            display: block;
            text-decoration: none;
            cursor: pointer;
        }

        .card-modern {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 450px;
            margin-bottom: 20px;
            display: block;
            border: 1px solid rgba(255, 255, 255, 0.4);
            /* Glass Border */
        }

        /* Glossy Sheen Overlay */
        .card-modern::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(125deg, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 60%);
            z-index: 6;
            /* Above gradient */
            pointer-events: none;
        }

        .card-modern:hover,
        .package-card-wrap:hover .card-modern {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card-modern .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .card-modern:hover .card-img,
        .package-card-wrap:hover .card-img {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            color: #4EC0DB;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 70%;
            background: linear-gradient(to top, #000 0%, rgba(0, 0, 0, 0.5) 50%, transparent 100%);
            z-index: 5;
        }

        .card-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 25px;
            z-index: 10;
        }

        @media (max-width: 991px) {
            .card-meta {
                flex-wrap: wrap;
                gap: 10px;
            }
        }

        /* Stronger Overrides for Mobile FAQ */
        @media (max-width: 768px) {
            .faq {
                padding: 40px 15px !important;
                margin: 0 !important;
                background-image: none !important;
            }

            .faq .accordion-item {
                border-radius: 16px !important;
                margin-bottom: 15px !important;
            }

            .faq .accordion-button {
                border-radius: 16px !important;
                font-size: 16px !important;
                /* Restore readable font size */
                padding: 20px !important;
            }

            .accordion-flush .accordion-item .accordion-button {
                border-radius: 16px !important;
                /* Override responsive.css */
            }
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 500;
        }

        .meta-item i {
            color: #4EC0DB;
            margin-right: 6px;
        }

        .card-title {
            color: #fff;
            font-size: 24px;
            font-weight: 800;
            margin: 0;
            line-height: 1.3;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* FAQ Section Styles - Premium Modern */
        .faq .accordion-item {
            border: none !important;
            margin-bottom: 20px !important;
            border-radius: 16px !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05) !important;
            overflow: hidden !important;
            background: #fff !important;
            transition: all 0.3s ease !important;
        }

        .faq .accordion-item:hover {
            transform: translateY(-3px);
            /* box-shadow: 0 20px 40px rgba(78, 192, 219, 0.1) !important; Removed hover shadow */
        }

        .faq .accordion-button {
            border-radius: 16px !important;
            font-weight: 700 !important;
            font-size: 1.15rem !important;
            font-size: 1.15rem !important;
            color: #2c3e50 !important;
            background-color: #fff !important;
            box-shadow: none !important;
            padding: 25px 30px !important;
            text-transform: capitalize;
            transition: all 0.3s ease !important;
        }

        .faq .accordion-button:not(.collapsed) {
            background-color: transparent !important;
            background: transparent !important;
            color: #4EC0DB !important;
            box-shadow: none !important;
            border: 0 !important;
            border-bottom: 0 !important;
        }

        .faq .accordion-button:focus,
        .faq .accordion-button:active {
            background-color: transparent !important;
            background: transparent !important;
            box-shadow: none !important;
            border-color: transparent !important;
            outline: none !important;
            color: #4EC0DB !important;

        }

        .faq .accordion-collapse {
            border: 0 !important;
            border-width: 0 !important;
            box-shadow: none !important;
        }

        .faq .accordion-button:focus {
            box-shadow: none !important;
            border-color: transparent !important;
        }

        .faq .accordion-body {
            padding: 30px !important;
            color: #555 !important;
            line-height: 1.7 !important;
            background-color: #fff !important;
            font-size: 1rem !important;
            border-top: 0 !important;
        }

        /* Modern Plus/Minus Icon */
        .faq .accordion-button::after {
            width: 40px;
            height: 40px;
            background-position: center;
            background-size: 16px !important;
            background-color: #fff;
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55) !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232c3e50' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='12' y1='5' x2='12' y2='19'%3e%3c/line%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
            border: 1px solid rgba(0, 0, 0, 0.05);
            padding: 2px;

        }

        @media (max-width: 768px) {
            .faq .accordion-button:not(.collapsed)::after {
                background-color: #4EC0DB;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
                transform: rotate(180deg) !important;
                box-shadow: 0 6px 20px rgba(78, 192, 219, 0.4);
                border-color: transparent;
                padding: 2px;
            }
        }

        .faq .accordion-button:not(.collapsed)::after {
            background-color: #4EC0DB;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
            transform: rotate(180deg) !important;
            box-shadow: 0 6px 20px rgba(78, 192, 219, 0.4);
            border-color: transparent;
            padding: 7px;
        }

        /* Mobile List View for Packages */
        @media (max-width: 991px) {
            .packages-scroll-row {
                display: flex !important;
                flex-wrap: wrap !important;
                /* Enable wrapping */
                overflow-x: visible !important;
                /* Disable scroll */
                padding-bottom: 0px;
                gap: 20px;
                /* Vertical gap */
                margin-left: 0px;
                margin-right: 0px;
            }

            .packages-scroll-row>.col-lg-3 {
                flex: 0 0 100% !important;
                /* Full width */
                max-width: 100% !important;
                margin-bottom: 20px;
            }
        }

        /* Refactored Utility Classes */
        .banner-bg-static {
            background-image: url('assets/img/yelagiri/banner/yelagiri-banner.jpeg');
            height: 90vh;
            padding: 0;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .dark-overlay-flex {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .centered-white-text {
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero-title-large {
            font-size: 3.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }

        .hero-subtitle-medium {
            font-size: 1.3rem;
            font-weight: 500;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        .img-brightness-dim {
            filter: brightness(0.9);
        }

        .meta-spacing {
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>
    <!-- ***** Header Start ***** -->
    <?php include('includes/header.php'); ?>
    <!-- ***** Header End -->

    <!-- Banner Slider Start -->
    <!-- Banner Slider Start -->
    <section class="trip-home banner-bg-static" id="tripSection">
        <div class="banner-overlay dark-overlay-flex">
            <div class="banner-content centered-white-text">
                <h2 class="banner-title">
                    Yelagiri Tour Packages</h2>
                <p class="banner-subtitle hero-subtitle-medium">Experience
                    the magic of cliffs and waves</p>
            </div>
        </div>
    </section>
    <!-- Banner Slider End -->

    <!-- About Us Section Start -->
    <style>
        .about-area {
            position: relative;
            z-index: 1;
            padding: 120px 0 60px;
            background-color: #f9f9f9;
            overflow: hidden;
        }

        .about-img-wrapper {
            position: relative;
            z-index: 1;
            /* padding-right: 30px;
            padding-bottom: 30px; */
        }

        .about-img-1 {
            width: 85%;
            border-radius: 20px;
            overflow: hidden;
        }

        .about-img-1 img {
            width: 100%;
            transition: all 0.4s ease;
        }

        .about-img-2 {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 55%;
            border-radius: 20px;
            overflow: hidden;
            border: 5px solid #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-img-2 img {
            width: 100%;
        }

        @media (max-width: 768px) {
            .about-img-1 {
                width: 100%;
                margin-bottom: 20px;
            }

            .about-img-2 {
                position: relative;
                width: 90%;
                margin: -40px auto 0;
                right: auto;
                bottom: auto;
                display: block;
            }

            .about-img-wrapper {
                padding-bottom: 0;
                text-align: center;
            }

            .experience-badge {
                position: relative;
                bottom: auto;
                left: auto;
                margin: -30px auto 20px;
                width: fit-content;
                right: auto;
            }
        }

        .experience-badge {
            position: absolute;
            bottom: 30px;
            left: 30px;
            background: #4EC0DB;
            padding: 20px 25px;
            border-radius: 15px;
            color: #fff;
            box-shadow: 0 10px 20px rgba(78, 192, 219, 0.3);
            text-align: center;
            z-index: 2;
        }

        .experience-badge h3 {
            font-size: 35px;
            font-weight: 800;
            margin: 0;
            line-height: 1;
        }

        .experience-badge p {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            opacity: 0.9;
        }

        .video-btn-wrap {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 3;
        }

        .about-content {
            padding-left: 30px;
        }

        .section-subtitle {
            color: #4EC0DB;
            font-family: 'Damion', cursive;
            /* Assuming handwriting font */
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
        }

        .section-title {
            font-size: 42px;
            font-weight: 800;
            color: #2c3e50;
            line-height: 1.2;
            margin-bottom: 40px;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            position: relative;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            position: relative;
        }

        /* Connecting Dotted Line */
        .feature-item:not(:last-child)::before {
            content: "";
            position: absolute;
            left: 32px;
            top: 65px;
            height: calc(100% - 30px);
            border-left: 2px dashed #e0e0e0;
        }

        .icon-box {
            width: 65px;
            height: 65px;
            background: #4EC0DB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(78, 192, 219, 0.2);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        /* White ring effect */
        .icon-box::after {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 1px solid rgba(78, 192, 219, 0.3);
            border-radius: 50%;
        }

        .feature-item:hover .icon-box {
            transform: translateY(-5px);
            /* background: #094067; */
        }

        .icon-box img {
            width: 32px;
            filter: brightness(0) invert(1);
        }

        .feature-text h4 {
            font-size: 20px;
            font-weight: 700;
            margin: 0 0 8px;
            color: #2c3e50;
        }

        .feature-text p {
            font-size: 15px;
            color: #777;
            margin: 0;
            line-height: 1.6;
        }

        .travel-bg-figure {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
            opacity: 0.1;
            width: 300px;
        }
    </style>

    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image Composition -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-img-wrapper">
                        <!-- Main Image -->
                        <div class="about-img-1">
                            <img src="assets\img\yelagiri\yelagiri-008.jpg"
                                alt="Yelagiri Adventure">
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="section-subtitle">Explore Yelagiri</span>
                        <h2 class="section-title">Highlights of Yelagiri</h2>

                        <ul class="feature-list">
                            <li class="feature-item animate">
                                <div class="icon-box">
                                    <i class="fa-solid fa-mountain-sun" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Majestic Cliff</h4>
                                    <p>The only place in southern Kerala where cliffs are found adjacent to the Arabian
                                        Sea.</p>
                                </div>
                            </li>

                            <li class="feature-item animate">
                                <div class="icon-box">
                                    <i class="fa-solid fa-umbrella-beach" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Pristine Beaches</h4>
                                    <p>Relax on the golden sands of Papanasam Beach, known for its holy waters and
                                        stunning sunsets.</p>
                                </div>
                            </li>

                            <li class="feature-item animate">
                                <div class="icon-box">
                                    <i class="fa-solid fa-om" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Spiritual &amp; Cultural Hub</h4>
                                    <p>Home to the ancient Janardanaswamy Temple and the Sivagiri Mutt, inviting peace
                                        and wellness.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <section
        style="padding: 80px 0; background-image: url('') ; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <h2 class="head"> YELAGIRI TOUR PACKAGES</h2>
        <div class="container">

            <div class="row packages-scroll-row">
                <div class="col-lg-3">
                    <div class="package-card-wrap">
                        <a href="yelagiri-group-trip.php" class="card-modern">
                            <div class="card-badge bg-success text-white">Group Trip</div>
                            <img src="assets\img\yelagiri\yelagiri-008.jpg" alt="Yelagiri"
                                class="card-img img-brightness-dim">
                            <div class="card-gradient"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <span class="meta-item mb-2"><i class="fa-solid fa-calendar-days"></i> 3D / 2N</span>
                                </div>
                                <div class="card-meta meta-spacing">
                                    <span class="meta-item"><i class="fa-solid fa-location-dot"></i> EX: Trivandrum,
                                        Kochi</span>
                                </div>
                                <h3 class="card-title">Yelagiri - 1</h3>
                            </div>
                        </a>
                        <!-- <button class="btn-custom-book w-100">
                            Book Now
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </button> -->
                    </div>
                </div>

                <!-- <div class="col-lg-3">
          <div class="swiper-container2">
            <div class="swiper-slide">
              <a href="varkala-3days-2nights-1.php">
                <div class="picture">
                  <h4>Private Trip</h4>
                </div>
                <img class="img" src="assets/img/varkala/varkala-bg1.jpg" alt="Image 1">
                <div class="slide-bg">
                  <div class="slide-text">
                    <div class="inner">
                      <h3><i class="fa-solid fa-calendar-days"> </i>3D / 2N</h3>
                      <h4><i class="fa-solid fa-location-dot"></i>
                        EX: Trivandrum,
                        Kochi
                      </h4>
                    </div>
                    <h5 class="fw-bold">Classic Varkala with<br> Trivandrum</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div> -->

                <div class="col-lg-3">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-badge">Private Trip</div>
                            <img src="assets\img\yelagiri\yelagiri-018.jpg" alt="Yelagiri" class="card-img"
                                style="filter:brightness(0.9)">
                            <div class="card-gradient"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <span class="meta-item mb-2"><i class="fa-solid fa-calendar-days"></i> 4D / 3N</span>
                                </div>
                                <div class="card-meta" style="margin-top: -10px; margin-bottom: 10px;">
                                    <span class="meta-item"><i class="fa-solid fa-location-dot"></i> EX: Trivandrum,
                                        Kochi</span>
                                </div>
                                <h3 class="card-title"> Yelagiri - 2</h3>
                            </div>
                        </a>
                        <!-- <button class="btn-custom-book w-100">
                            Book Now
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </button> -->
                    </div>

                </div>



                <div class="col-lg-3">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-badge">Private Trip</div>
                            <img src="assets\img\yelagiri\yelagiri-010.jpg" alt="Magical Yelagiri" class="card-img"
                                style="filter:brightness(0.9)">
                            <div class="card-gradient"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <span class="meta-item mb-2"><i class="fa-solid fa-calendar-days"></i> 4D / 3N</span>
                                </div>
                                <div class="card-meta" style="margin-top: -10px; margin-bottom: 10px;">
                                    <span class="meta-item"><i class="fa-solid fa-location-dot"></i> EX: Trivandrum,
                                        Kochi</span>
                                </div>
                                <h3 class="card-title"> Yelagiri - 3</h3>
                            </div>
                        </a>
                        <!-- <button class="btn-custom-book w-100">
                            Book Now
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </button> -->
                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-badge">Private Trip</div>
                            <img src="assets\img\yelagiri\yelagiri-014.jpg" alt="Yelagiri All-In-One" class="card-img"
                                style="filter:brightness(0.9)">
                            <div class="card-gradient"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <span class="meta-item mb-2"><i class="fa-solid fa-calendar-days"></i> 5D / 4N</span>
                                </div>
                                <div class="card-meta" style="margin-top: -10px; margin-bottom: 10px;">
                                    <span class="meta-item"><i class="fa-solid fa-location-dot"></i> EX: Trivandrum,
                                        Kochi</span>
                                </div>
                                <h3 class="card-title">Yelagiri - 4</h3>
                            </div>
                        </a>
                        <!-- <button class="btn-custom-book w-100">
                            Book Now
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </button> -->
                    </div>

                </div>

            </div>

            <!-- <div class="swiper-container swiper-container2">
                
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <a href="varkala-3days-2nights-2.php">
              <div class="picture">
                <h4>Group Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/Munroesland.jpg" alt="Image 1">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>3D / 2N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Varkala and Munroe<br> Flashpacking</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-grouptrip.php">
              <div class="picture">
                <h4>Private Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/black-beach.jpg" alt="Image 2">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>3D / 2N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Vibrant Varkala with<br> Munroe</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-3days-2nights-1.php">
              <div class="picture">
                <h4>Private Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/varkala-bg1.jpg" alt="Image 1">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>3D / 2N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Classic Varkala with<br> Trivandrum</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-4days-3nights-1.php">
              <div class="picture">
                <h4>Private Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/kerala-1.jpg" alt="Image 3">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>4D / 3N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Adventurous Varkala with<br> Trivandrum</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-4days-3nights-2.php">
              <div class="picture">
                <h4>Private Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/4days-3nights.jpg" alt="Image 4">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>4D / 3N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Magical Varkala with<br> Munroe Island</h5>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-5days-4nights.php">
              <div class="picture">
                <h4>Private Trip</h4>
              </div>
              <img class="img" src="assets/img/varkala/5days-4nights.jpg" alt="Image 4">
              <div class="slide-bg">
                <div class="slide-text">
                  <div class="inner">
                    <h3><i class="fa-solid fa-calendar-days"> </i>5D / 4N</h3>
                    <h4><i class="fa-solid fa-location-dot"></i>
                      EX: Trivandrum,
                      Kochi
                    </h4>
                  </div>
                  <h5>Varkala All-In-One</h5>
                </div>
              </div>
            </a>
          </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div> -->
        </div>

    </section>

    <!--====== Highlights Section Start ======-->
    <!-- <section class="highlights-section">
        <div class="container">
            <h2 class="head">Highlights of Varkala</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-4 d-flex">
                    <div class="highlight-card w-100">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-umbrella-beach"></i>
                        </div>
                        <h4>Cliff & Beach</h4>
                        <p>Experience the unique geological formation where cliffs meet the Arabian Sea, offering
                            breathtaking views and sunset spots.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 d-flex">
                    <div class="highlight-card w-100">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-gopuram"></i>
                        </div>
                        <h4>Spiritual Vibes</h4>
                        <p>Visit the 2,000-year-old Janardana Swami Temple and immerse yourself in the spiritual aura of
                            the Sivagiri Mutt.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 d-flex">
                    <div class="highlight-card w-100">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-swimmer"></i>
                        </div>
                        <h4>Water Sports</h4>
                        <p>A haven for adventure seekers! Try surfing, paragliding, and jet skiing along the pristine
                            coastline.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 d-flex">
                    <div class="highlight-card w-100">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-coffee"></i>
                        </div>
                        <h4>Cafe Culture</h4>
                        <p>Relax at vibrant cliff-top cafes serving delicious seafood, continental cuisines, and a
                            laid-back hippie atmosphere.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> -->
    <!--====== Highlights Section End ======-->

    <!--====== Gallery Section Start ======-->
    <section class="gallery-section">
        <div class="container">
            <h2 class="head">Glimpses of Yelagiri</h2>
            <div class="swiper-container-gallery">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new1.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Black Sand Beach</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new2.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Yelagiri Cliff</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new3.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Sunset Views</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new4.webp" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Palm Groves</h5>
                        </div>
                    </div>

                    <!-- Duplicated Slides for Loop Stability -->
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new1.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Black Sand Beach</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new2.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Yelagiri Cliff</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new3.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Sunset Views</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new4.webp" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Palm Groves</h5>
                        </div>
                    </div>

                    <!-- Duplicated Slides for Loop Stability 2 -->
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new1.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Black Sand Beach</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new2.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Varkala Cliff</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new3.jpeg" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Sunset Views</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/yelagiri/yelagiri-new/yelagir-new4.webp" alt="Black Beach">
                        <div class="gallery-overlay">
                            <h5>Palm Groves</h5>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!--====== Gallery Section End ======-->

    <!--====== faq Start ======-->
    <section class="faq">
        <h2 class="head">FAQ</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item acc-item">
                            <h2 class="accordion-header acco-head" id="flush-headingOne">
                                <button class="accordion-button acc-btn collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Can I Join solo?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Absolutely! Whether you're joining solo, with friends, or as a couple, these group
                                    trips
                                    are designed to
                                    accommodate all types of travelers. Join us for budget-friendly adventures and check
                                    off
                                    more items from
                                    your bucket list! </div>
                            </div>
                        </div>
                        <div class="accordion-item acc-item">
                            <h2 class="accordion-header acco-head" id="flush-headingTwo">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How about a safety for female Travellers?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, female solo travelers can confidently join our group trips. We prioritize their
                                    safety by ensuring
                                    a secure environment with trusted trip captains, verified hosts, and reliable
                                    transport
                                    vendors. Your
                                    safety is our top priority any safety concerns during the trip will be promptly
                                    addressed by our team.
                                    So relax and make the most of your journey!</div>
                            </div>
                        </div>
                        <div class="accordion-item acc-item">
                            <h2 class="accordion-header  acco-head" id="flush-headingThree">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    What is the age requirement to Join?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The trips is for 18-35 year olds
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item acc-item">
                            <h2 class="accordion-header acco-head" id="flush-headingFour">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    How do I confirm my booking?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Send the payment screenshot to info@roamers.in and you’ll get the confirmation email
                                    within 24 hours.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item acc-item">
                            <h2 class="accordion-header acco-head" id="flush-headingFive">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    How do I trust Roamers?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    You can absolutely trust us! We've nailed over 500 awesome trips. Check out the
                                    great
                                    reviews, speak to
                                    our travel consultants, and check the website for further details. Our offices are
                                    in
                                    Chennai and Delhi
                                    – we're all about being upfront and reliable all the way… Feel free to connect.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--====== faq END ======-->



    <!--====== FOOTER START======-->
    <?php include('includes/footer.php'); ?>
    <!--====== FOOTER END======-->

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/dates.js"></script>

    <script>
        // *****Sidebar tab content end*****        

        // *****Sidebar tab radio content start*****
        var sliders = document.querySelectorAll(".slider");
        sliders.forEach(function(slider) {
            var sliderContainer = slider.querySelector(".slider-container");
            var prevBtn = slider.querySelector(".prev-btn1");
            var nextBtn = slider.querySelector(".next-btn1");

            var slideWidth = slider.offsetWidth / 5; // Default slide width for desktop
            var slidesToShow = 5; // Number of slides to show at a time on desktop
            var currentSlide = 0;
            var totalSlides = sliderContainer.childElementCount;
            var touchStartX = 0;
            var touchEndX = 0;
            var isDesktop = window.innerWidth >= 768; // Adjust the breakpoint as needed

            if (!isDesktop) {
                slideWidth = slider.offsetWidth / 1; // Slide width for mobile
                slidesToShow = 1; // Number of slides to show at a time on mobile
            }

            prevBtn.addEventListener("click", handlePrevClick);
            nextBtn.addEventListener("click", handleNextClick);
            sliderContainer.addEventListener("touchstart", handleTouchStart);
            sliderContainer.addEventListener("touchmove", handleTouchMove);
            sliderContainer.addEventListener("touchend", handleTouchEnd);

            updateButtonVisibility();

            function handlePrevClick() {
                if (isDesktop) {
                    currentSlide = Math.max(currentSlide - 1, 0);
                } else {
                    currentSlide = Math.max(currentSlide - 1, 0);
                    currentSlide = Math.min(currentSlide, totalSlides - 1);
                }
                sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
                updateButtonVisibility();
            }

            function handleNextClick() {
                if (isDesktop) {
                    currentSlide = Math.min(currentSlide + 1, totalSlides - slidesToShow);
                } else {
                    currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
                }
                sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
                updateButtonVisibility();
            }

            function handleTouchStart(e) {
                touchStartX = e.touches[0].clientX;
            }

            function handleTouchMove(e) {
                touchEndX = e.touches[0].clientX;
                var touchDistance = touchStartX - touchEndX;

                // Smooth scrolling by adjusting the transform value based on touch distance
                sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth - touchDistance}px)`;
            }

            function handleTouchEnd() {
                var touchDistance = touchStartX - touchEndX;

                if (touchDistance > slideWidth / 2) {
                    handleNextClick();
                } else if (touchDistance < -slideWidth / 2) {
                    handlePrevClick();
                } else {
                    // Reset the transform value if swipe distance is not significant
                    sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
                }
            }

            function updateButtonVisibility() {
                if (currentSlide === 0) {
                    prevBtn.style.display = "none";
                    nextBtn.style.display = "none";
                } else if (currentSlide >= totalSlides - slidesToShow) {
                    prevBtn.style.display = "none";
                    nextBtn.style.display = "none";
                } else {
                    prevBtn.style.display = "none";
                    nextBtn.style.display = "none ";
                }
            }
        });
    </script>
    <script>
        var navbar = document.querySelector('nav')

        window.onscroll = function() {

            // pageYOffset or scrollY
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled')
            } else {
                navbar.classList.remove('scrolled')
            }
        }
        const selectElements = document.getElementsByClassName("price-occupancy1");

        // Get the price element
        const price = document.getElementById('price');
        const person = document.querySelector('.per-person');

        // Add a change event listener to each select element
        for (const select of selectElements) {
            select.addEventListener("change", function() {
                // Get the selected option
                const selectedOption = select.options[select.selectedIndex];

                // Update the value
                const selectedValue = parseInt(selectedOption.value); // Parse as an integer

                // You can do something with the selected value here
                price.innerHTML = `₹${selectedValue.toLocaleString()} <span class="per-person">Per Person</span>`;
            });
        }
    </script>
    <script>
        var gallerySwiper = new Swiper('.swiper-container-gallery', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            spaceBetween: 40,
            /* Add spacing between slides */
            loop: true,
            /* Enable infinite loop */
            loopedSlides: 6,
            /* Essential for smooth loop with auto slides */
            coverflowEffect: {
                rotate: 0,
                /* Flat coverflow for cleaner look */
                stretch: 0,
                depth: 150,
                modifier: 1.5,
                slideShadows: false,
                /* Remove heavy shadows for cleaner UI */
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>