<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Roamers - Andaman-new</title>

    <!-- SEO Meta Description -->
    <meta name="description" content="andaman-new" />
    <meta name="author" content="Themeland" />
    <meta property="og:image" content="https://roamers.in/assets/img/andaman/Media/overview-2.jpg" />
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/andaman/Media/overview-2.jpg" />
    <meta property="og:image:width" content="700" />
    <meta property="og:image:height" content="500" />
    <meta property="og:title" content="Andaman-new Packages" />
    <meta property="og:description"
        content="Discover the best Andaman-new packages with Roamers. Explore stunning beaches, cliffs, and cultural experiences. Book your Andaman-new trip today!" />
    <meta property="og:url" content="https://roamers.in/andaman-new.php" />
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
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon">

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
            background: transparent;
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
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(78, 192, 219, 0.22), 0 4px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(78, 192, 219, 0.25);
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 45px rgba(78, 192, 219, 0.4);
            border-color: rgba(78, 192, 219, 0.5);
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

        /* Modern Package Card Styles - Light Glassmorphism */

        @media (min-width: 769px) {
            .packages-scroll-row {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 25px;
            }

            .packages-scroll-row>div[class*="col-"] {
                flex: 0 0 auto;
                width: 350px !important;
                padding: 0;
            }
        }

        .package-card-wrap {
            display: block;
            text-decoration: none;
            cursor: pointer;
        }

        .card-modern {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: 480px;
            max-width: 350px;
            margin: 0 auto 24px auto;
            display: block;
            background: #ffffff;
            border: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .package-card-wrap:hover .card-modern {
            box-shadow: 0 20px 45px rgba(78, 192, 219, 0.4);
            border-color: rgba(78, 192, 219, 0.5);
        }

     


        .card-modern .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            will-change: transform;
        }



        .card-top-badges {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            display: flex;
            justify-content: space-between;
            z-index: 10;
        }

        .badge-rating {
            background: #ffffff;
            color: #1a1a1a;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .badge-rating i {
            color: #ffb400;
            font-size: 12px;
        }

        .badge-wishlist {
            width: 32px;
            height: 32px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .badge-wishlist:hover {
            color: #ff4757;
        }

        .card-white-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(to top, #ffffff 0%, rgba(255, 255, 255, 0.95) 40%, rgba(255, 255, 255, 0.7) 65%, transparent 100%);
            z-index: 5;
        }

        .card-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 22px;
            z-index: 10;
            display: flex;
            flex-direction: column;
            height: 60%;
            justify-content: flex-end;
        }

        .card-title {
            color: #1a1a1a;
            font-size: 20px;
            font-weight: 800;
            margin: 0 0 4px 0;
            line-height: 1.25;
            text-shadow: none;
        }

        .card-location {
            color: #666;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-rating-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .card-rating-row .stars {
            color: #ffb400;
            font-size: 11px;
            letter-spacing: 1px;
        }

        .card-rating-row .rating-num {
            color: #1a1a1a;
            font-size: 13px;
            font-weight: 700;
        }

        .card-category-pill {
            align-self: flex-start;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            color: #444;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 16px;
        }

        .card-category-pill i {
            color: inherit;
            font-size: 12px;
        }

        .pill-group {
            background: #ecfdf5;
            color: #059669;
            border-color: #a7f3d0;
        }

        .pill-private {
            background: #eff6ff;
            color: #2563eb;
            border-color: #bfdbfe;
        }

        .pill-seasonal {
            background: #fff7ed;
            color: #ea580c;
            border-color: #fed7aa;
        }

        .pill-honeymoon {
            background: #fdf2f8;
            color: #db2777;
            border-color: #fbcfe8;
        }

        .card-bottom-row {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }

        .card-price {
            color: #1a1a1a;
            font-size: 20px;
            font-weight: 800;
        }

        .card-price span {
            font-size: 11px;
            color: #888;
            font-weight: 500;
            margin-left: 2px;
        }

        .card-book-btn {
            background: #ffffff;
            color: #1a1a1a;
            border: 1px solid #e0e0e0;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .card-book-btn:hover {
            background: #4EC0DB;
            color: #ffffff;
            border-color: #4EC0DB;
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

        /* Mobile Horizontal Scroll for Packages */
        @media (max-width: 991px) {
            .packages-scroll-row {
                display: flex !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                padding-bottom: 20px;
                gap: 15px;
                margin-left: -15px;
                margin-right: -15px;
                padding-left: 15px;
                padding-right: 15px;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none; /* Firefox */
            }
            
            .packages-scroll-row::-webkit-scrollbar {
                display: none; /* Safari and Chrome */
            }

            .packages-scroll-row>div {
                flex: 0 0 100% !important;
                max-width: 100% !important;
                margin-bottom: 0px;
                scroll-snap-align: center;
            }
            .packages-scroll-row>div .card-modern {
                max-width: 100% !important;
            }
        }

        /* Refactored Utility Classes */
        .banner-bg-static {
            background-image: url('https://miro.medium.com/v2/resize:fit:1400/1*71GCdeCXyEA9bxjdfigJAw.jpeg');
            height: 100vh;
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
            background: transparent;
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


        /* Rewind Section Redesign */
        .rewind-section {
            padding: 60px 20px 100px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .rewind-title-area {
            text-align: center;
            width: 100%;
        }

        .rewind-title-area h2 {
            font-size: 32px;
            font-weight: 800;
            color: #1a1a1a;
            margin: 0 0 8px 0;
            font-family: 'Outfit', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .rewind-title-area p {
            font-size: 16px;
            color: #666;
            margin: 0;
            font-weight: 500;
        }



        .journey-nav-container {
            display: flex !important;
            justify-content: center !important;
            gap: 20px !important;
            margin-top: 40px !important;
            width: 100% !important;
            position: relative !important;
            z-index: 1000 !important;
            padding-bottom: 20px !important;
        }

        .journey-nav-btn {
            width: 50px !important;
            height: 50px !important;
            border-radius: 50% !important;
            background: #4ec0db !important;
            color: #fff !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(78, 192, 219, 0.3) !important;
            border: none !important;
            position: relative !important;
            top: auto !important;
            left: auto !important;
            right: auto !important;
            bottom: auto !important;
            transform: none !important;
        }

        /* Hide any possible ghost buttons */
        .rewind-nav-btn {
            display: none !important;
        }

        .rewind-swiper .swiper-wrapper {
            height: 520px;
        }

        .rewind-swiper {
            overflow: visible !important;
            padding: 20px 0;
            width: 100%;
        }

        .rewind-card {
            position: relative;
            height: 500px;
            border-radius: 30px;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 15px 35px rgba(78, 192, 219, 0.25), 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(78, 192, 219, 0.3);
            background: #fff;
        }

        .rewind-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 50px rgba(78, 192, 219, 0.45);
        }

        .rewind-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        /* Removed glass panel styles */

        .card-overlay-top {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .arrow-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .rewind-nav {
                padding: 0 5px;
            }

            .prev-btn {
                margin-left: -10px;
            }

            .next-btn {
                margin-right: -10px;
            }

            .journey-nav-container {
                display: none !important;
            }

            .journey-nav-btn {
                width: 40px !important;
                height: 40px !important;
            }

            .rewind-card {
                height: 380px;
            }

            .rewind-swiper .swiper-wrapper {
                height: 400px !important;
            }

            .rewind-header {
                flex-direction: column;
                align-items: center;
            }

            .rewind-title-area h2 {
                font-size: 28px;
            }

            .rewind-section {
                padding: 20px 0 !important;
            }
        }

        /* Scroll Reveal Animation Framework */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.92);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-up.active,
        .reveal-left.active,
        .reveal-right.active,
        .reveal-scale.active {
            opacity: 1;
            transform: translate(0) scale(1);
        }

        .testimonial-section {
            padding: 80px 0;
            background-color: #f9f9f9;
            position: relative;
        }

        .testimonial-trust-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #ffffff;
            color: #333;
            border: 1px solid #ddd;
            padding: 8px 20px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            margin-top: 15px;
        }

        .testimonial-trust-badge i {
            color: #ffb400;
            font-size: 16px;
        }

        .testimonial-swiper {
            padding: 20px 10px 40px !important;
        }

        .testimonial-swiper .swiper-wrapper {
            align-items: stretch;
        }

        .testimonial-swiper .swiper-slide {
            height: auto !important;
            display: flex;
        }

        .testimonial-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            border: 1px solid #eaeaea;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .testimonial-quote-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            color: #f0f0f0;
        }

        .testimonial-stars {
            display: flex;
            gap: 4px;
            color: #ffb400;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .testimonial-comment {
            color: #555;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .testimonial-user {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
        }

        .swiper-slide img.testimonial-avatar {
            width: 50px !important;
            height: 50px !important;
            min-height: 50px !important;
            max-height: 50px !important;
            flex-shrink: 0;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #ddd;
        }

        .testimonial-user-info h4 {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0 0 2px;
        }

        .testimonial-user-info span {
            font-size: 13px;
            color: #777;
        }

        .testimonial-nav-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .testimonial-nav-btn {
            width: 40px;
            height: 40px;
            border-radius: 4px;
            background: #ffffff;
            color: #333;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .testimonial-nav-btn:hover {
            background: #f0f0f0;
        }

        @media (max-width: 768px) {
            .testimonial-section {
                padding: 60px 0;
            }

            .testimonial-card {
                padding: 20px;
            }
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
    <section class="trip-home banner-bg-static" id="tripSection"
        style="position: relative; overflow: hidden; height: 93vh;">
        <!-- Local Background Video -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; overflow: hidden; background: #000;">
            <video autoplay loop muted playsinline
                style="width: 100%; height: 100%; object-fit: cover; pointer-events: none;">
                <source src="assets/img/andaman/video/andaman-banner-video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="banner-overlay dark-overlay-flex"
            style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: transparent; display: flex; align-items: center; justify-content: center;">
            <div class="banner-content centered-white-text reveal-scale active">
                <h2 class="banner-title" style="text-shadow: 0 5px 15px rgba(0,0,0,0.4);">
                    ANDAMAN TRIPS</h2>
            </div>
        </div>
    </section>
    <!-- Banner Slider End -->

    <!-- About Us Section Start -->
    <style>
        .about-area {
            position: relative;
            z-index: 1;
            padding: 100px 0px 100px 0px;
            /* background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0)), url('assets/img/andaman/andaman-testimonial-bg.avif'); */
            background-size: cover;
            background-position: bottom center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            will-change: transform;
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

        .starfish-img {
            position: absolute;
            top: -30px;
            left: -30px;
            width: 100px;
            z-index: 5;
            animation: float 4s ease-in-out infinite;
            filter: drop-shadow(0 10px 10px rgba(0, 0, 0, 0.1));
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(5deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .jacket-img {
            position: absolute;
            bottom: -30px;
            right: calc(15% - 60px);
            width: 130px;
            z-index: 5;
            animation: float 5s ease-in-out infinite reverse;
            filter: drop-shadow(0 10px 10px rgba(0, 0, 0, 0.1));
        }

        @media (max-width: 768px) {
            .jacket-img {
                right: -20px;
                width: 100px;
            }

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
            background: linear-gradient(135deg, rgba(78, 192, 219, 0.7) 0%, rgba(78, 192, 219, 0.2) 100%);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            flex-shrink: 0;
            box-shadow: 0 8px 32px rgba(78, 192, 219, 0.3), inset 0 2px 5px rgba(255, 255, 255, 0.5);
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
            background: linear-gradient(135deg, rgba(78, 192, 219, 0.9) 0%, rgba(78, 192, 219, 0.4) 100%);
            box-shadow: 0 12px 40px rgba(78, 192, 219, 0.4), inset 0 2px 8px rgba(255, 255, 255, 0.7);
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

        .bg-tree-left {
            position: absolute;
            left: -320px;
            top: 50%;
            transform: translateY(-50%);
            width: 630px;
            z-index: -1;
            opacity: 0.8;
            pointer-events: none;
        }

        .bg-tree-right {
            position: absolute;
            right: -320px;
            top: 50%;
            transform: translateY(-50%);
            width: 630px;
            z-index: -1;
            opacity: 0.8;
            pointer-events: none;
        }

        @media (max-width: 1200px) {

            .bg-tree-left,
            .bg-tree-right {
                opacity: 0.3;
                width: 200px;
            }
        }
    </style>


    <!-- About Us Section End -->

    <section class="andaman-packages-section"
        style="padding: 50px 0px 50px 0px; background-color: #fff; position: relative; overflow: hidden;">

        <h2 class="head reveal-up" style="margin-bottom: 40px; position: relative; z-index: 2;">ANDAMAN TOUR PACKAGES
        </h2>
        <div class="container" style="position: relative; z-index: 2;">
            <!-- Background Trees attached to container -->
            <img src="assets/img/andaman/andaman-left -tree.png" alt="" class="bg-tree-left">
            <img src="assets/img/andaman/andaman-right-tree.png" alt="" class="bg-tree-right">

            <div class="row packages-scroll-row">
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="andaman-group-trip.php" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.9</span>

                            </div>
                            <img src="assets/img/andaman/Media/overview-2.jpg" alt="Andaman Island Hopping"
                                class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Andaman Island Hopping</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">4.9</span>
                                </div>

                                <div class="card-category-pill pill-group">
                                    <i class="fa-solid fa-users"></i> Group Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹29,223 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.8</span>

                            </div>
                            <img src="assets/img/andaman/Media/Andaman-cover-min.jpg" alt="Andaman Islands Gateway"
                                class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Andaman Islands Gateway</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">4.8</span>
                                </div>

                                <div class="card-category-pill pill-private">
                                    <i class="fa-solid fa-user"></i> Private Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹25,048 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.7</span>

                            </div>
                            <img src="https://roamers.in/assets/img/andaman/Media/bharatpur-beach-neil-island.jpg"
                                alt="Magical Andaman Trip" class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Magical Andaman Trip</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">4.7</span>
                                </div>

                                <div class="card-category-pill pill-private">
                                    <i class="fa-solid fa-user"></i> Private Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹12,656 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.9</span>

                            </div>
                            <img src="https://roamers.in/assets/img/andaman/Media/cellular-jail-in-andaman-reviews.jpg"
                                alt="Best of Andaman" class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Best of Andaman</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">4.9</span>
                                </div>

                                <div class="card-category-pill pill-private">
                                    <i class="fa-solid fa-user"></i> Private Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹18,500 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="#" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.8</span>

                            </div>
                            <img src="https://roamers.in/assets/img/andaman/Media/andaman-markets.jpg"
                                alt="Seasonal Andaman" class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Seasonal Andaman</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">4.8</span>
                                </div>

                                <div class="card-category-pill pill-seasonal">
                                    <i class="fa-solid fa-sun"></i> Seasonal Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹22,000 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-card-wrap">
                        <a href="andaman-honeymoon-trip.php" class="card-modern">
                            <div class="card-top-badges">
                                <span class="badge-rating"><i class="fa-solid fa-star"></i> 5.0</span>

                            </div>
                            <img src="assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg"
                                alt="Andaman Islands ~ Dreamy Honeymoon" class="card-img">
                            <div class="card-white-gradient"></div>

                            <div class="card-content">
                                <h3 class="card-title">Andaman Islands ~ Dreamy Honeymoon</h3>
                                <p class="card-location"><i class="fa-solid fa-location-dot"></i> Port Blair, Andaman
                                </p>

                                <div class="card-rating-row">
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rating-num">5.0</span>
                                </div>

                                <div class="card-category-pill pill-honeymoon">
                                    <i class="fa-solid fa-heart"></i> Honeymoon Trip
                                </div>

                                <div class="card-bottom-row">
                                    <div class="card-price">
                                        ₹35,000 <span>Per Person</span>
                                    </div>
                                    <div class="card-book-btn">Book</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image Composition -->
                <div class="col-lg-6 mb-5 mb-lg-0 reveal-left">
                    <div class="about-img-wrapper">
                        <img src="assets/img/andaman/andaman-star-fish.png" alt="Starfish" class="starfish-img">
                        <!-- Main Image -->
                        <div class="about-img-1">
                            <img src="assets/img/andaman/Media/overview-2.jpg" alt="Andaman Adventure">
                        </div>
                        <!-- Right Corner Image -->
                        <img src="assets/img/andaman/andaman-jacket.png" alt="Jacket" class="jacket-img">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6 reveal-right">
                    <div class="about-content">
                        <span class="section-subtitle">Explore Andaman</span>
                        <h2 class="section-title">Highlights of Andaman</h2>

                        <ul class="feature-list">
                            <li class="feature-item animate reveal-up" style="transition-delay: 0.1s;">
                                <div class="icon-box">
                                    <i class="fa-solid fa-water" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Crystal Clear Waters</h4>
                                    <p>Pristine turquoise waters perfect for diving, snorkeling and underwater
                                        exploration.</p>
                                </div>
                            </li>

                            <li class="feature-item animate reveal-up" style="transition-delay: 0.2s;">
                                <div class="icon-box">
                                    <i class="fa-solid fa-umbrella-beach" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Radhanagar Beach</h4>
                                    <p>Visit Asia's best beach, known for its stunning sunset views and sparkling white
                                        sands.</p>
                                </div>
                            </li>

                            <li class="feature-item animate reveal-up" style="transition-delay: 0.3s;">
                                <div class="icon-box">
                                    <i class="fa-solid fa-ship" style="font-size:24px; color:#fff;"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Island Hopping</h4>
                                    <p>Explore the unique vibes of Havelock, Neil, and Ross islands for a complete
                                        tropical retreat.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- rewind section  -->

    <section class="rewind-section" style="position: relative; overflow: hidden; padding: 80px 0px 60px 0px;">
        <div class="rewind-header reveal-up" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
                        class="align-start me-2">
                    Roamers Rewind
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
                        class="align-start">
                </h3>
            </div>
        </div>

        <div style="position: relative;" class="reveal-scale">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/overview-1.jpg" alt="Andaman Beach">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/cellular-jail-in-andaman-reviews.jpg"
                                alt="Cellular Jail">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/bharatpur-beach-neil-island.jpg" alt="Neil Island">
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/Portblair-group-min.jpg" alt="Port Blair">
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/overview-2.jpg" alt="Andaman Sunset">
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/andaman/Media/elephant beach.jpg" alt="Elephant Beach">
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="https://roamers.in/assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg"
                                alt="Coral Reef">
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="https://roamers.in/assets/img/andaman/Media/andaman-markets.jpg"
                                alt="Local Market">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Buttons - Relocated to bottom center with unique classes -->
        <div class="journey-nav-container">
            <div class="journey-nav-btn journey-prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="journey-nav-btn journey-next"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
    </section>
    <!--====== Gallery Section End ======-->

    <!--====== Testimonials Section Start ======-->
    <section class="testimonial-section reveal-up">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="head">WHAT OUR EXPLORERS SAY</h2>
                <div>
                    <span class="testimonial-trust-badge">
                        <i class="fa-solid fa-star"></i> 4.9/5 Rating from 500+ Happy Roamers
                    </span>
                </div>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                            <div>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-comment">
                                    "Joined the group trip with my sister, it was the best experience we could ask for!
                                    Everything was great about the trip, explored even the spots which were not
                                    mentioned in itinerary. Thanks to the awesome team!"
                                </p>
                            </div>
                            <div class="testimonial-user">
                                <img src="assets/img/testimonials/andaman.avif" alt="Shreya" class="testimonial-avatar">
                                <div class="testimonial-user-info">
                                    <h4>Shreya</h4>
                                    <span>Andaman Group Trip</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                            <div>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-comment">
                                    "The VIBE was unreal! Didn't expect I'd connect with everyone like this. Best trip I
                                    have gone, explored Havelock beaches, local food, and crystal blue waters. Thank you
                                    Roamers and trip captain!"
                                </p>
                            </div>
                            <div class="testimonial-user">
                                <img src="assets/img/testimonials/spiti.avif" alt="Vinayak" class="testimonial-avatar">
                                <div class="testimonial-user-info">
                                    <h4>Vinayak</h4>
                                    <span>Solo Explorer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                            <div>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-comment">
                                    "I joined solo and it was an unimaginable experience. My first time going on a group
                                    trip, truly knocked my expectations! Very cool people, awesome underwater scuba
                                    diving. Gonna miss you fam!"
                                </p>
                            </div>
                            <div class="testimonial-user">
                                <img src="assets/img/testimonials/chikmagalur.avif" alt="Naisha"
                                    class="testimonial-avatar">
                                <div class="testimonial-user-info">
                                    <h4>Naisha</h4>
                                    <span>Solo Traveller</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                            <div>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-comment">
                                    "Sunset at Radhanagar beach and island hopping with a bunch of crazy travellers!
                                    This was the trip which I'm gonna remember for long. Lots of memories to take
                                    back... definitely a must go!"
                                </p>
                            </div>
                            <div class="testimonial-user">
                                <img src="assets/img/testimonials/manali.avif" alt="Aadhya" class="testimonial-avatar">
                                <div class="testimonial-user-info">
                                    <h4>Aadhya</h4>
                                    <span>Island Hopper</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Navigation -->
                <div class="testimonial-nav-container">
                    <div class="testimonial-nav-btn testimonial-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="testimonial-nav-btn testimonial-next"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Testimonials Section End ======-->

    <!--====== faq Start ======-->
    <section class="faq">
        <h2 class="head reveal-up">FAQ</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item acc-item reveal-up" style="transition-delay: 0.1s;">
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
                        <div class="accordion-item acc-item reveal-up" style="transition-delay: 0.2s;">
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
                        <div class="accordion-item acc-item reveal-up" style="transition-delay: 0.3s;">
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
                        <div class="accordion-item acc-item reveal-up" style="transition-delay: 0.4s;">
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
                        <div class="accordion-item acc-item reveal-up" style="transition-delay: 0.5s;">
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

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/dates.js"></script>

    <script>
        // *****Sidebar tab content end*****        

        // *****Sidebar tab radio content start*****
        var sliders = document.querySelectorAll(".slider");
        sliders.forEach(function (slider) {
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

        window.onscroll = function () {

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
            select.addEventListener("change", function () {
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
            spaceBetween: 40, /* Add spacing between slides */
            loop: true, /* Enable infinite loop */
            loopedSlides: 6, /* Essential for smooth loop with auto slides */
            coverflowEffect: {
                rotate: 0, /* Flat coverflow for cleaner look */
                stretch: 0,
                depth: 150,
                modifier: 1.5,
                slideShadows: false, /* Remove heavy shadows for cleaner UI */
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Form benefit items animation
            const items = document.querySelectorAll('.benefit-item');
            items.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.5s cubic-bezier(0.16, 1, 0.3, 1)';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, 400 + (index * 100));
            });

            // Rewind Swiper Initialization
            const rewindSwiper = new Swiper('.rewind-swiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slideToClickedSlide: true,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: '.journey-next',
                    prevEl: '.journey-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.4,
                        spaceBetween: 1,
                        coverflowEffect: {
                            rotate: 15,
                            depth: 150,
                            modifier: 1,
                        }
                    },
                    640: {
                        slidesPerView: 2.5,
                        spaceBetween: 30,
                        coverflowEffect: {
                            rotate: 20,
                            depth: 100,
                            modifier: 1,
                        }
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                        coverflowEffect: {
                            rotate: 20,
                            depth: 100,
                            modifier: 1,
                        }
                    }
                }
            });

            // Testimonial Swiper Initialization
            const testimonialSwiper = new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: '.testimonial-next',
                    prevEl: '.testimonial-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 25,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });



            // Scroll Reveal Observer
            const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -40px 0px'
            });

            revealElements.forEach(el => revealObserver.observe(el));
        });
    </script>

    <style>
        .rewind-swiper .swiper-slide {
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .rewind-swiper .swiper-slide {
                padding: 0 15px;
            }
        }
    </style>
</body>

</html>