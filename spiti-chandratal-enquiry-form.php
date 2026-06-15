<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form – Roamers | Spiti Chandratal Trek</title>
    <meta name="description" content="Embark on the ultimate Spiti Chandratal trek with Roamers. Experience high-altitude passes, ancient monasteries, and the mesmerizing Chandratal Lake in Himachal Pradesh. Join our curated adventure for an unforgettable Himalayan journey.">
    <meta name="author" content="Roamers">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Roamers">
    <meta property="og:url" content="https://roamers.in/spiti-chandratal-enquiry-form.php">
    <meta property="og:title" content="Roamers - Spiti Chandratal: High-Altitude Adventure to Chandratal Lake">
    <meta property="og:description" content="Embark on the ultimate Spiti Chandratal trek with Roamers. Experience high-altitude passes, ancient monasteries, and the mesmerizing Chandratal Lake in Himachal Pradesh. Join our curated adventure for an unforgettable Himalayan journey.">
    <meta property="og:image" content="https://roamers.in/assets/img/spiti-valley/cover/spiti-chandratal-trek.avif">
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/spiti-valley/cover/spiti-chandratal-trek.avif">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Spiti Chandratal Trek – Chandratal Lake, Himachal Pradesh">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Roamers - Spiti Chandratal: High-Altitude Adventure to Chandratal Lake">
    <meta name="twitter:description" content="Embark on the ultimate Spiti Chandratal trek with Roamers. Experience high-altitude passes, ancient monasteries, and the mesmerizing Chandratal Lake in Himachal Pradesh. Join our curated adventure for an unforgettable Himalayan journey.">
    <meta name="twitter:image" content="https://roamers.in/assets/img/spiti-valley/cover/spiti-chandratal-trek.avif">
    <meta name="twitter:image:alt" content="Spiti Chandratal Trek – Chandratal Lake, Himachal Pradesh">

    <link rel="canonical" href="https://roamers.in/spiti-chandratal-enquiry-form.php">
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #4ec0db;
            --secondary: #4ec0db;
            --accent: #ef4565;
            --text: #5f6c7b;
            --bg: #fffffe;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.92);
            --border: rgba(78, 192, 219, 0.2);
            /* --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); */
            --glow: 0 0 15px rgba(78, 192, 219, 0.3);
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            color: var(--text);
            overflow-x: hidden;
        }

        .page-wrapper {
            padding: 30px 30px 30px 30px;
            min-height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .enquiry-container {
            width: 100%;
            max-width: 550px;
            background: var(--glass);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 40px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
            display: flex;
            flex-direction: row;
            animation: containerReveal 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes containerReveal {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .form-section {
            flex: 1.6;
            padding: 60px;
            background: var(--white);
            position: relative;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-header h1 {
            font-size: 28px;
            margin: 0 0 8px 0;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 700;
            color: #4ec0db;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 52px;
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .input-wrapper i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #4ec0db;
            transition: all 0.3s;
            font-size: 16px;
            pointer-events: none;
            z-index: 2;
        }

        .input-wrapper input,
        .input-wrapper select {
            width: 100% !important;
            height: 100% !important;
            padding: 0 45px 0 52px;
            border: none !important;
            border-radius: 0 !important;
            font-size: 15px;
            font-weight: 500;
            background: transparent !important;
            outline: none !important;
            color: var(--text);
            position: relative;
            z-index: 1;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .input-wrapper .dropdown-icon {
            position: absolute;
            right: 20px;
            left: auto;
            top: 50%;
            transform: translateY(-50%);
            color: #b0bec5;
            font-size: 14px;
            pointer-events: none;
            z-index: 2;
            transition: all 0.3s;
        }

        .input-wrapper:focus-within .dropdown-icon {
            color: var(--secondary);
            transform: translateY(-50%) rotate(180deg);
        }

        .input-wrapper:focus-within {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .input-wrapper:focus-within i {
            color: var(--secondary);
            transform: translateY(-50%) scale(1.1);
        }

        .input-wrapper-textarea {
            width: 100% !important;
            padding: 15px 20px;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            font-size: 15px;
            font-weight: 500;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
            min-height: 120px;
            resize: vertical;
        }

        .input-wrapper-textarea:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .whatsapp-wrapper {
            display: flex;
            align-items: center;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            overflow: hidden;
            background: #ffffff;
            transition: all 0.3s;
            height: 52px;
        }

        .whatsapp-wrapper input {
            width: 95% !important;
        }

        .whatsapp-wrapper:focus-within {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .country-code {
            display: flex;
            align-items: center;
            padding: 0 18px;
            height: 52px;
            background: #fdfdfd;
            border-right: 1.5px solid #cbd5e1;
            font-weight: 700;
            font-size: 14px;
        }

        .country-code img {
            width: 22px;
            margin-right: 10px;
            border-radius: 2px;
        }

        .whatsapp-wrapper input {
            flex: 1;
            border: none !important;
            padding: 15px 20px;
            background: transparent !important;
            font-size: 15px;
            font-weight: 500;
            outline: none;
            height: 52px;
        }

        .whatsapp-wrapper input:focus {
            box-shadow: none !important;
        }

        .radio-group {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .radio-card {
            position: relative;
            cursor: pointer;
        }

        .radio-card input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .radio-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px 10px;
            background: #fff;
            border: 1.5px solid #cbd5e1;
            border-radius: 18px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            min-height: 100px;
        }

        .radio-box i {
            font-size: 24px;
            margin-bottom: 12px;
            color: #4ec0db;
            transition: all 0.3s;
        }

        .radio-box span {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            transition: all 0.3s;
        }

        .radio-card input:checked+.radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.06);
            box-shadow: var(--glow);
        }

        .radio-card input:checked+.radio-box i {
            color: var(--secondary);
            transform: scale(1.2);
        }

        .submit-btn {
            width: 100%;
            padding: 20px;
            background: #4ec0db;
            color: var(--white);
            border: none;
            border-radius: 20px;
            font-size: 18px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-top: 10px;
            box-shadow: 0 12px 30px rgba(9, 64, 103, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-family: 'Outfit', sans-serif;
        }

        .submit-btn:active {
            transform: translateY(-1px) scale(1);
        }

        @media (max-width: 950px) {
            .enquiry-container {
                flex-direction: column;
                max-width: 600px;
            }

            .form-section {
                padding: 45px 35px;
            }
        }

        @media (max-width: 600px) {
            .page-wrapper {
                padding: 10px 10px 10px 10px;
            }

            .form-section {
                padding: 35px 20px;
            }

            .radio-group {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* .head class (mirrors style.css) */
        .head {
            position: relative;
            font-weight: 700;
            font-size: 32px;
            text-transform: capitalize;
            margin: 0 0 2rem;
            color: #1f2327;
            line-height: 1.4;
            text-align: center;
            font-family: 'Outfit', sans-serif;
        }

        /* Rewind Section */
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
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .rewind-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

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

        .rewind-swiper .swiper-slide {
            cursor: pointer;
        }

        /* ── Keyframes ── */
        @keyframes bannerReveal {
            from {
                opacity: 0;
                transform: scale(1.04);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulseGlow {

            0%,
            100% {
                box-shadow: 0 12px 30px rgba(78, 192, 219, 0.25);
            }

            50% {
                box-shadow: 0 12px 40px rgba(78, 192, 219, 0.5);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        /* ── Banner ── */
        .banner-img {
            animation: bannerReveal 1.2s ease-out both;
        }

        /* ── Scroll-reveal: all elements fade + gentle rise ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.75s ease-out, transform 0.75s ease-out;
            will-change: opacity, transform;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Input focus lift ── */
        .input-wrapper:focus-within,
        .whatsapp-wrapper:focus-within,
        .input-wrapper-textarea:focus {
            transform: translateY(-2px);
        }

        /* ── Radio cards ── */
        .radio-box {
            transition: all 0.3s ease-out;
        }

        /* ── Submit button hover ── */
        .submit-btn:hover {
            transform: translateY(-2px);
            animation: pulseGlow 1.5s infinite;
        }

        /* ── Shimmer on submit btn ── */
        .submit-btn::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 20px;
            background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.15) 50%, transparent 100%);
            background-size: 200% auto;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .submit-btn:hover::after {
            opacity: 1;
            animation: shimmer 1.2s linear infinite;
        }

        /* WhatsApp FAB */
        .whatapp {
            background: rgba(180, 193, 180, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 6px;
            border-radius: 10px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 2147483646;
            display: block;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: fadeInUp1 0.5s ease-in-out forwards;
        }

        .whatapp img {
            width: 30px;
            height: auto;
            animation: zoomPulse 2s infinite ease-in-out;
            transition: transform 0.3s;
            display: block;
        }

        .whatapp:hover {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        @keyframes zoomPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        @keyframes fadeInUp1 {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
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
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <section>
        <!-- Desktop View -->

        <div>
            <img src="https://images.exoticamp.com/vendors/images/profile/9_20260210T114529731Z.jpg" alt="Spiti Chandratal Banner"
                class="banner-img d-none d-md-block"
                style="width: 100%; height: 50vh; object-fit: cover; object-position: top; z-index: 0; opacity: 1; margin-top: 68px;">
        </div>

        <!-- Mobile View -->
        <div>
            <img src="assets/img/enquiry-forms/spiti-chandratal-enquiry-form/mobile-banner.avif" alt="Spiti Chandratal Banner Mobile"
                class="banner-img d-block d-md-none"
                style="width: 100%; height: 50vh; object-fit: cover; object-position: top; z-index: 0; opacity: 1; margin-top: 68px;">
        </div>

    </section>

    <div class="page-wrapper">
        <div class="enquiry-container reveal">
            <div class="form-section">
                <div class="section-header reveal">
                    <h1>Spiti & Chandratal</h1>
                    <p class="text-center">  Plan Your Trip</p>
                </div>

                <form action="spiti-chandratal-enquiry-mail.send.php" method="POST">
                    <div class="row reveal" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 0;">
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Full Name" required>
                            </div>
                        </div>

                        <!-- <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Email Address</label>
                            <div class="input-wrapper ">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                            </div>
                        </div> -->
                    </div>

                    <div class="form-group reveal">
                        <label>WhatsApp Number</label>
                        <div class="whatsapp-wrapper">
                            <div class="country-code">
                                <img src="https://flagcdn.com/w40/in.png" alt="India Flag">
                                <span>+91</span>
                            </div>
                            <input type="tel" name="phone" placeholder="Enter WhatsApp Number" required>
                        </div>
                    </div>

                    <!-- <div class="form-group reveal">
                        <label>Which destination are you interested in?</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-earth-asia"></i>
                            <select name="destination" required>
                                <option value="Spiti Chandratal">Spiti Chandratal</option>
                            </select>
                            <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                        </div>
                    </div> -->

                    <div class="form-group reveal">
                        <label>Number of People</label>
                        <div class="radio-group">
                            <label class="radio-card">
                                <input type="radio" name="pax" value="Solo" checked>
                                <div class="radio-box">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Solo</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="Couple">
                                <div class="radio-box">
                                    <i class="fa-solid fa-heart"></i>
                                    <span>Couple</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="3-5">
                                <div class="radio-box">
                                    <i class="fa-solid fa-users"></i>
                                    <span>3-5 Pax</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="6+">
                                <div class="radio-box">
                                    <i class="fa-solid fa-people-group"></i>
                                    <span>6+ Group</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="row reveal" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Trip Preference</label>
                            <div class="input-wrapper">
                                <i class="fa-solid fa-suitcase"></i>
                                <select name="trip_type" required>
                                    <option value="Group Trip">Group Trip / Fixed Departure</option>
                                    <option value="Private Trip">Private / Customized Trip</option>
                                </select>
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>

                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Travel Month</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-calendar-days"></i>
                                <select name="month" required>
                                    <option value="" disabled selected>Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group reveal">
                        <label>Additional Information (Optional)</label>
                        <textarea class="input-wrapper-textarea" name="message"
                            placeholder="Any specific requirements or travel goals?"></textarea>
                    </div> -->

                    <button type="submit" class="submit-btn reveal" name="submit">
                        <span>Send My Enquiry</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <section class="rewind-section reveal" style="position: relative; overflow: hidden; padding: 0px 0px 0px 0px ;">
        <div class="rewind-header reveal" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start me-2">
                    Roamers Rewind
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start">
                </h3>
            </div>
        </div>

        <div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/SnapInsta.to_608664771_18344659423239707_7928058349127373431_n.jpg" alt="Ladakh Adventure">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0000_1.jpg" alt="Ladakh Trip">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0002_3.jpg" alt="Ladakh Scenic">
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0003_5.jpg" alt="Ladakh Journey">
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0004_6.jpg" alt="Ladakh Beauty">
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0005_7.jpg" alt="Ladakh Vibes">
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti _0006_8.jpg" alt="Ladakh Memories">
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/for carcosuel/spiti_0007_9.jpg" alt="Ladakh Memories">
                        </div>
                    </div>

                    <!-- Slide 9 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/spiti-chandratal/Spiti-chandaratal.jpg" alt="Ladakh Memories">
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
        </div>
    </section>

    <!-- WhatsApp FAB -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" target="_blank" rel="noopener">
        <img src="assets/img/icon/whatsapp.svg" alt="Chat on WhatsApp">
    </a>

    <?php include('includes/footer.php'); ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reveals = document.querySelectorAll('.reveal');

            /* assign staggered delays so siblings feel sequential, not simultaneous */
            let groupIndex = 0;
            reveals.forEach((el) => {
                el.style.transitionDelay = (groupIndex * 0.08) + 's';
                groupIndex++;
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -30px 0px'
            });

            reveals.forEach(el => observer.observe(el));
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
                        spaceBetween: 30,
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
        });
    </script>

</body>

</html>