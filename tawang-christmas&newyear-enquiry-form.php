<?php
session_start();
include_once('includes/site-config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form &#8211; Roamers | Tawang Christmas &amp; New Year</title>
    <meta name="description" content="Ring in Christmas &amp; New Year in Tawang and Sangti Valley with Roamers. Sela Pass, Bumla Pass, Tawang Monastery, and riverside celebration in Sangti Valley.">
    <meta name="author" content="Roamers">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Roamers">
    <meta property="og:url" content="https://roamers.in/tawang-christmas&newyear-enquiry-form.php">
    <meta property="og:title" content="Roamers - Tawang Christmas &amp; New Year: Plan Your Trip">
    <meta property="og:description" content="Ring in Christmas &amp; New Year in Tawang and Sangti Valley with Roamers. 7D/6N Tempo Traveller journey with approx. ₹24,000/- per person.">
    <meta property="og:image" content="https://roamers.in/assets/img/tawang/home-festive-card.avif">

    <link rel="canonical" href="https://roamers.in/tawang-christmas&newyear-enquiry-form.php">
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .banner-hero-img {
            width: 100%;
            height: 45vh;
            min-height: 280px;
            object-fit: cover;
            object-position: center;
            margin-top: 68px;
        }

        .page-wrapper {
            padding: 60px 20px 40px;
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
            border: 1px solid var(--border);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
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
            padding: 60px 45px;
            background: var(--white);
            position: relative;
        }

        .section-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .section-header h1 {
            font-size: 24px;
            margin: 0 0 8px 0;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            color: #1a1a1a;
        }

        .christmas-badge {
            display: inline-block;
            background: linear-gradient(135deg, #e63946, #c1121f);
            color: white;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 50px;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
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
            padding: 0 45px 0 52px;
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
            width: 95% !important;
            flex: 1;
            border: none !important;
            padding: 15px 20px;
            background: transparent !important;
            font-size: 15px;
            font-weight: 500;
            outline: none;
            height: 52px;
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
            background: linear-gradient(135deg, #e63946 0%, #c1121f 100%);
            color: var(--white);
            border: none;
            border-radius: 20px !important;
            font-size: 18px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-top: 10px;
            box-shadow: 0 12px 30px rgba(198, 18, 31, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-family: 'Outfit', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 40px rgba(198, 18, 31, 0.4);
        }

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
            padding: 40px 20px 80px;
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
            background: #e63946 !important;
            color: #fff !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(230, 57, 70, 0.3) !important;
            border: none !important;
            position: relative !important;
            top: auto !important;
            left: auto !important;
            right: auto !important;
            bottom: auto !important;
            transform: none !important;
        }

        .journey-nav-btn:hover {
            background: #c1121f !important;
            transform: scale(1.05) !important;
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

        .rewind-card:hover img {
            transform: scale(1.05);
        }

        .rewind-swiper .swiper-slide {
            cursor: pointer;
        }

        @media (max-width: 950px) {
            .enquiry-container {
                max-width: 600px;
            }
            .form-section {
                padding: 45px 35px;
            }
        }

        @media (max-width: 600px) {
            .page-wrapper {
                padding: 20px 15px 40px;
            }
            .form-section {
                padding: 35px 20px;
            }
            .radio-group {
                grid-template-columns: 1fr 1fr;
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

        .whatapp {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        .whatapp img {
            width: 45px;
        }
    </style>
</head>

<body>
    <!-- WhatsApp FAB -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" target="_blank" rel="noopener">
        <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp Roamers">
    </a>

    <?php include('includes/header.php'); ?>

    <section>
        <div>
            <img src="assets/img/tawang/home-festive-card.avif" alt="Tawang Festive Special" class="banner-hero-img">
        </div>
    </section>

    <div class="page-wrapper">
        <div class="enquiry-container">
            <div class="form-section">
                <div class="section-header">
                    <span class="christmas-badge">&#127876; Christmas &amp; New Year Special</span>
                    <h1>Tawang Christmas &amp; New Year</h1>
                    <p class="text-center">&nbsp; Plan Your Holiday Trip</p>
                </div>

                <form action="tawang-christmas&newyear-enquiry-mail.send.php" method="POST">
                    <input type="hidden" name="destination" value="Tawang Christmas &amp; New Year">

                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 0;">
                        <!-- Full Name -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Full Name" required>
                            </div>
                        </div>
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
                                    <option value="December">December</option>
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
                                </select>
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="submit-btn" name="submit">
                        <span>&#127876; Book My Holiday Trip</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Roamers Rewind Gallery -->
    <section class="rewind-section" style="position: relative; overflow: hidden; padding: 20px 0 60px;">
        <div class="rewind-header" style="margin-bottom: 40px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 10px;">
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start me-2">
                    Roamers Rewind
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start ms-2">
                </h3>
                <p>Memories captured across Arunachal Pradesh &amp; Tawang</p>
            </div>
        </div>

        <div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-1.avif" alt="Tawang Sela Pass">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-2.avif" alt="Tawang Snow Mountains">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-3.avif" alt="Tawang Monastery">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-4.avif" alt="Bumla Border Pass">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-5.avif" alt="Sangetsar Lake">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-6.avif" alt="Sangti Valley River">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-7.avif" alt="Tawang Travel Squad">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/tawang/tawang-image-8.avif" alt="Dirang River Views">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="journey-nav-container">
            <div class="journey-nav-btn journey-prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="journey-nav-btn journey-next"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.rewind-swiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slideToClickedSlide: true,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false
                },
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false
                },
                navigation: {
                    nextEl: '.journey-next',
                    prevEl: '.journey-prev'
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.4,
                        spaceBetween: 20
                    },
                    640: {
                        slidesPerView: 2.2,
                        spaceBetween: 25
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });
        });
    </script>
</body>
</html>