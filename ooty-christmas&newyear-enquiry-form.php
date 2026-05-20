<?php
session_start();
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquire Now: Ooty Christmas & New Year Trip - Roamers</title>
    <!-- SEO Meta Description -->
    <meta name="description" content="Book your Ooty Christmas & New Year trip with Roamers. Fill out the enquiry form to join our curated adventure and explore vibrant alpine meadows, rare Himalayan flora, and breathtaking landscapes in Tamil Nadu, India." />
    <meta name="author" content="Roamers" />

    <!-- Open Graph tags -->
    <meta property="og:site_name" content="Roamers" />
    <meta property="og:title" content="Enquire Now: Ooty Christmas & New Year Trip - Roamers" />
    <meta property="og:description" content="Book your Ooty Christmas & New Year trip with Roamers. Fill out the enquiry form to join our curated adventure and explore vibrant alpine meadows, rare Himalayan flora, and breathtaking landscapes in Tamil Nadu, India." />
    <meta property="og:image" content="https://roamers.in/assets/img/Ooty/Ooty%20pic%201.jpg" />
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Ooty/Ooty%20pic%201.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ooty Trek - Roamers Ooty Christmas & New Year Trip Adventure" />
    <meta property="og:url" content="https://roamers.in/ooty-christmas&newyear-enquiry-form.php" />
    <meta property="og:type" content="website" />

    <!-- Twitter / X Card tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Enquire Now: Ooty Christmas & New Year Trip - Roamers" />
    <meta name="twitter:description" content="Book your Ooty Christmas & New Year trip with Roamers. Fill out the enquiry form to join our curated adventure and explore vibrant alpine meadows, rare Himalayan flora, and breathtaking landscapes in Tamil Nadu, India." />
    <meta name="twitter:image" content="https://roamers.in/assets/img/Ooty/Ooty%20pic%201.jpg" />
    <meta name="twitter:image:alt" content="Ooty Trek - Roamers Ooty Christmas & New Year Trip Adventure" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
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
            background-color: #f8fbff;
            background-image:
                radial-gradient(at 0% 0%, rgba(78, 192, 219, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(9, 64, 103, 0.05) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(78, 192, 219, 0.05) 0px, transparent 50%);
            margin: 0;
            padding: 0;
            color: var(--text);
            overflow-x: hidden;
        }



        .page-wrapper {
            padding: 80px  80px;
            min-height: 100vh;
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

        .side-info {
            flex: 1;
            background: var(--primary);
            padding: 60px 45px;
            color: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            /* Mesh Gradient Effect */
            background: linear-gradient(135deg, #094067 0%, #0b5082 100%);
        }

        .side-info::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(circle at 70% 20%, rgba(78, 192, 219, 0.2) 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, rgba(78, 192, 219, 0.15) 0%, transparent 40%);
            animation: meshMove 15s ease-in-out infinite alternate;
            pointer-events: none;
        }

        @keyframes meshMove {
            0% {
                transform: rotate(0deg) scale(1);
            }

            100% {
                transform: rotate(10deg) scale(1.1);
            }
        }

        .side-info h2 {
            font-size: 36px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            font-family: 'Outfit', sans-serif;
            position: relative;
            z-index: 1;
        }

        .side-info p {
            font-size: 17px;
            line-height: 1.7;
            opacity: 0.85;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .benefits-list {
            position: relative;
            z-index: 1;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 18px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s;
        }

        /* .benefit-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(8px);
        } */

        .benefit-item i {
            width: 36px;
            height: 36px;
            background: rgba(78, 192, 219, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            color: var(--secondary);
            font-size: 16px;
        }

        .benefit-item span {
            font-weight: 500;
            font-size: 15px;
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
            /* color: var(--primary); */
            margin: 0 0 8px 0;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
        }

        .section-header p {
            font-size: 15px;
            margin: 0;
            color: var(--text);
            opacity: 0.6;
            text-align: center;
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
            border-radius: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .input-wrapper i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #b0bec5;
            transition: all 0.3s;
            font-size: 16px;
            pointer-events: none;
            z-index: 2;
        }

        .input-wrapper input,
        .input-wrapper select {
            width: 100% !important;
            height: 100% !important;
            padding: 0 45px 0 52px; /* Increased right padding for select arrow */
            border: none !important;
            border-radius: 30px !important;
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
            border-radius: 30px;
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



        /* WhatsApp Input Group */
        .whatsapp-wrapper {
            display: flex;
            align-items: center;
            border: 1.5px solid #cbd5e1;
            border-radius: 30px;
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

        /* Radio Group */
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
            border-radius: 30px !important;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            min-height: 100px;
        }

        .radio-box i {
            font-size: 24px;
            margin-bottom: 12px;
            color: #ccd6dd;
            transition: all 0.3s;
        }

        .radio-box span {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            transition: all 0.3s;
        }

        /* .radio-card:hover .radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.02);
            transform: translateY(-2px);
        } */

        .radio-card input:checked+.radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.06);
            box-shadow: var(--glow);
        }

        .radio-card input:checked+.radio-box i {
            color: var(--secondary);
            transform: scale(1.2);
        }

        /* 
        .radio-card input:checked + .radio-box span {
            color: var(--primary);
        } */

        .submit-btn {
            width: 100%;
            padding: 15px 20px;
            background: #4ec0db;
            color: var(--white);
            border: none;
            border-radius: 30px !important;
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

        /* .submit-btn:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 20px 40px rgba(9, 64, 103, 0.35);
            background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
        } */

        .submit-btn:active {
            transform: translateY(-1px) scale(1);
        }

        .submit-btn i {
            transition: transform 0.4s ease;
        }

        /* .submit-btn:hover i {
            transform: translateX(6px) rotate(-10deg);
        } */

        @media (max-width: 950px) {
            .enquiry-container {
                flex-direction: column;
                max-width: 600px;
            }

            .side-info {
                padding: 50px 40px;
            }

            .form-section {
                padding: 45px 35px;
            }
        }

        @media (max-width: 600px) {
            .page-wrapper {
                padding: 100px 15px 50px;
            }

            .form-section {
                padding: 35px 20px;
            }

            .radio-group {
                grid-template-columns: 1fr 1fr;
            }

            .side-info h2 {
                font-size: 28px;
            }
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



        .rewind-nav-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #4ec0db;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(78, 192, 219, 0.3);
            pointer-events: auto;
            border: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 110;
        }

        .rewind-nav-btn:hover {
            background: #094067;
            transform: translateY(-50%) scale(1.1);
        }



        /* .rewind-nav-btn:hover {
            background: #4ec0db;
            color: #fff;
            transform: scale(1.1);
        } */

        .prev-btn {
            left: -25px;
            left: auto !important;
            background-color: #4ec0db !important;
            color: white !important;
        }

        .next-btn {
            right: -25px;
            background-color: #4ec0db !important;
            color: white !important;
        }

        .rewind-swiper .swiper-wrapper {
            height: 520px !important;
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .rewind-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .rewind-card:hover img {
            transform: scale(1.1);
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

        /* .rewind-card:hover .arrow-icon {
            background: #4ec0db;
            border-color: #4ec0db;
            transform: rotate(45deg);
        } */

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

            .rewind-nav-btn {
                width: 40px;
                height: 40px;
            }

            .rewind-card {
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            .rewind-header {
                flex-direction: column;
                align-items: center;
            }

            .rewind-title-area h2 {
                font-size: 28px;
            }

            .rewind-card {
                height: 380px;
            }
        }
    </style>
</head>

<body>

    <section>

        <!-- <img src="assets/img/ladakh/banner-4.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: top; z-index: 0; opacity: 1;"> -->
        <!-- mobile -->

        <!-- Banner Foreground Image -->
        <!-- <img src="assets/img/ladakh/banner-4.jpg" alt="Ladakh Banner" class="d-none d-md-block"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; object-position: top; z-index: 0; opacity: 1;"> 
                <img src="assets/img/ladakh/mobile-banner.avif" alt="Ladakh Banner Mobile" class="d-block d-md-none"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; object-position: top; z-index: 0; opacity: 1;">  -->
        <img src="assets/img/Ooty/Ooty%20pic%201.jpg" alt=""
            style="width: 100%; height: 50vh; object-fit: cover; object-position: center; z-index: 0; opacity: 1; margin-top: 68px;">
    </section>


    <div class="page-wrapper">
        <div class="enquiry-container">
            <!-- Side Information Area -->
            <!-- <div class="side-info">
                <div>
                    <h2>Ready for your next adventure?</h2>
                    <p>Unlock curated travel experiences. Our experts are ready to craft your dream itinerary.</p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fa-solid fa-bolt"></i>
                            <span>Fast Response (24h)</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <span>Bespoke Itineraries</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-users"></i>
                            <span>Solo & Group Experts</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>Top Rated Services</span>
                        </div>
                    </div>
                </div>
                
                <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.15); position: relative; z-index: 1;">
                    <p style="font-size: 13px; margin-bottom: 8px; opacity: 0.7;">Direct Assistance</p>
                    <a href="tel:+918122121066" style="color: var(--secondary); text-decoration: none; font-weight: 800; font-size: 20px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-phone-volume" style="font-size: 16px;"></i>
                        +91 81221 21066
                    </a>
                </div>
            </div> -->

            <!-- Main Form Section -->
            <div class="form-section">
                <div class="section-header">
                    <h1>Ooty Christmas & New Year Plan Your Trip</h1>
                    <!-- <p>Start your journey with a few simple details.</p> -->
                </div>

                <form action="ooty-christmas&newyear-enquiry-mail-send.php" method="POST">

                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 0;">
                        <!-- Full Name -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Full Name" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <!-- <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Email Address</label>
                            <div class="input-wrapper ">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                            </div>
                        </div> -->
                    </div>

                    <!-- WhatsApp Number -->
                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <div class="whatsapp-wrapper">
                            <div class="country-code">
                                <img src="https://flagcdn.com/w40/in.png" alt="India Flag">
                                <span>+91</span>
                            </div>
                            <input type="tel" name="phone" placeholder="Enter WhatsApp Number" required>
                        </div>
                    </div>

                    <!-- Destination interested -->
                    <!-- <div class="form-group">
                        <label>Which destination are you interested in?</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-earth-asia"></i>
                            <select name="destination" required>
                                <option value="Ooty">Ooty</option>
                            </select>
                            <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                        </div>
                    </div> -->

                    <!-- Number of People -->
                    <div class="form-group">
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

                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <!-- Type of Trip -->
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

                        <!-- Month -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Travel Month</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-calendar-days"></i>
                                <select name="month" required>
                                    <option value="" disabled selected>Select Month</option>
                                    <!-- <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option> -->
                                    <!-- <option value="June">June</option> -->
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <!-- <option value="November">November</option>
                                    <option value="December">December</option> -->
                                </select>
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                        <!-- <div class="form-group">
                            <label>Additional Information (Optional)</label>
                            <textarea class="input-wrapper-textarea" name="message"
                                placeholder="Any specific requirements or travel goals?"></textarea>
                        </div> -->

                    <!-- Submit -->
                    <button type="submit" class="submit-btn" name="submit">
                        <span>Submit</span>
                        <!-- <i class="fa-solid fa-paper-plane"></i> -->
                    </button>

                </form>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>

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
                    nextEl: '.next-btn',
                    prevEl: '.prev-btn',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 2.5,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    }
                }
            });
        });
    </script>


</body>

</html>