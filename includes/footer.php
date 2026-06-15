<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Roamers" />
    <title>Roamers</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
        /* ===== FOOTER ===== */
        .roamers-footer {
            background: #ffffff;
            padding: 36px 28px 0;
            font-family: 'Plus Jakarta Sans', 'Heebo', sans-serif;
        }

        /* Blue liquid glass card */
        .f-card {
            background: linear-gradient(135deg, #4ec0db 0%, #3aafca 100%);
            border-radius: 28px;
            padding: 74px 76px 76px;
            position: relative;
            overflow: hidden;
            box-shadow:
                0 20px 60px rgba(78, 192, 219, 0.35),
                0 4px 20px rgba(0, 0, 0, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.45),
                inset 0 -1px 0 rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.35);
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Glass sheen overlay */
        .f-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(145deg,
                    rgba(255, 255, 255, 0.18) 0%,
                    rgba(255, 255, 255, 0.04) 40%,
                    rgba(0, 0, 0, 0.03) 100%);
            border-radius: inherit;
            pointer-events: none;
        }

        /* Subtle glow blob top-right */
        .f-card::after {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, transparent 65%);
            pointer-events: none;
        }

        /* ── Col 1: Brand ── */
        .f-logo-wrap {
            margin-bottom: 18px;
        }

        .f-logo-wrap img {
            max-width: 130px;
        }

        .f-tagline {
            font-size: 13px;
            font-weight: 500;
            line-height: 1.75;
            color: rgba(255, 255, 255, 0.78);
            margin-bottom: 18px;
        }

        .f-location-line {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.65);
            margin-bottom: 22px;
        }

        .f-location-line i {
            color: #fff;
            font-size: 12px;
        }

        .f-socials {
            display: flex;
            gap: 10px;
        }

        .f-socials a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.85);
            font-size: 13px;
            transition: all 0.22s;
        }

        .f-socials a:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            transform: translateY(-2px);
        }

        /* ── Col headings ── */
        .f-col-heading {
            font-size: 15px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.25);
            letter-spacing: 0.2px;
        }

        .f-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .f-nav-list li {
            margin-bottom: 11px;
        }

        .f-nav-list a {
            font-size: 13.5px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.78);
            text-decoration: none;
            transition: color 0.2s;
        }

        .f-nav-list a:hover {
            color: #fff;
        }

        /* ── Contact Info ── */
        .f-contact-list {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .f-ci {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .f-ci-icon {
            width: 38px;
            height: 38px;
            flex-shrink: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .f-ci-icon i {
            font-size: 14px;
            color: #fff;
        }

        .f-ci-title {
            font-size: 13px;
            font-weight: 800;
            color: #fff;
            margin: 0 0 3px;
            line-height: 1.2;
        }

        .f-ci-detail {
            font-size: 12px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
            line-height: 1.5;
            text-decoration: none;
        }

        .f-ci-detail:hover {
            color: #ffffff;
            text-decoration: none;
        }

        /* ── Divider ── */
        .f-divider {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin: 36px 0 0;
        }

        /* ── Bottom bar ── */
        .f-bottom {
            background: #ffffff;
            padding: 16px 20px;
        }

        .f-bottom-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            max-width: 1280px;
            margin: 0 auto;
        }

        .f-copyright {
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            margin: 0;
        }

        .f-bottom-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .f-bottom-links a {
            font-size: 12px;
            font-weight: 600;
            color: #6b7280;
            text-decoration: none;
            transition: color 0.2s;
        }

        .f-bottom-links a:hover {
            color: #4ec0db;
        }

        .f-bottom-sep {
            color: #d1d5db;
            font-size: 12px;
        }

        /* ── Stats Bar (desktop only) ── */
        .f-stats-bar {
            align-items: center;
            justify-content: center;
            gap: 0;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 16px;
            padding: 16px 32px;
            margin-bottom: 36px;
            backdrop-filter: blur(8px);
        }

        .f-stat {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            padding: 4px 16px;
        }

        .f-stat-num {
            font-size: 22px;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            margin-bottom: 5px;
        }

        .f-stat-label {
            font-size: 11px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.68);
            white-space: nowrap;
            text-align: center;
        }

        .f-stat-sep {
            width: 1px;
            height: 32px;
            background: rgba(255, 255, 255, 0.22);
            flex-shrink: 0;
        }

        /* ── Newsletter Strip (desktop only) ── */
        .f-newsletter-strip {
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            background: rgba(255, 255, 255, 0.10);
            border: 1px solid rgba(255, 255, 255, 0.20);
            border-radius: 16px;
            padding: 20px 28px;
            margin-top: 36px;
        }

        .f-nl-title {
            font-size: 14.5px;
            font-weight: 800;
            color: #fff;
            margin: 0 0 3px;
        }

        .f-nl-sub {
            font-size: 12px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.70);
            margin: 0;
        }

        .f-nl-form {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
        }

        .f-nl-input {
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.32);
            border-radius: 10px;
            padding: 9px 16px;
            font-size: 13px;
            font-weight: 500;
            color: #fff;
            outline: none;
            width: 240px;
        }

        .f-nl-input::placeholder {
            color: rgba(255, 255, 255, 0.52);
        }

        .f-nl-input:focus {
            border-color: rgba(255, 255, 255, 0.55);
            background: rgba(255, 255, 255, 0.20);
        }

        .f-nl-btn {
            background: #fff;
            color: #3aafca;
            border: none;
            border-radius: 10px;
            padding: 9px 20px;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .f-nl-btn:hover {
            background: #f0f9ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
        }

        /* ── Payment / Trust Row (desktop only) ── */
        .f-payment-row {
            align-items: center;
            gap: 8px;
        }

        .f-pay-label {
            font-size: 11px;
            font-weight: 600;
            color: #9ca3af;
            margin-right: 2px;
        }

        .f-pay-badge {
            font-size: 11px;
            font-weight: 700;
            color: #6b7280;
            background: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 3px 8px;
            letter-spacing: 0.2px;
        }

        .f-pay-secure {
            color: #059669 !important;
            background: #ecfdf5 !important;
            border-color: #a7f3d0 !important;
        }

        /* ===================================================
           TABLET
        =================================================== */
        @media (max-width: 991px) {
            .f-card {
                padding: 48px 36px 40px;
            }
        }

        /* ===================================================
           MOBILE
        =================================================== */
        @media (max-width: 767px) {
            .roamers-footer {
                padding: 20px 14px 0;
            }

            .f-card {
                padding: 36px 24px 36px;
                border-radius: 22px;
            }

            .f-logo-wrap img {
                max-width: 110px;
            }

            .f-tagline {
                font-size: 13px;
            }

            .f-brand-col {
                text-align: center;
                margin-bottom: 28px;
            }

            .f-brand-col .f-socials {
                justify-content: center;
            }

            .f-brand-col .f-location-line {
                justify-content: center;
            }

            /* 2-col top link grid on mobile */
            .f-links-mobile {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                margin-bottom: 20px;
            }

            /* Service + Contact side by side on mobile */
            .f-mobile-bottom-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                margin-bottom: 28px;
            }

            .f-col-heading {
                font-size: 13px;
                margin-bottom: 14px;
                color: #fff;
            }

            .f-nav-list a {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.78);
            }

            .f-nav-list li {
                margin-bottom: 9px;
            }

            /* Contact list: 2-col grid */
            .f-contact-list {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 16px;
            }

            .f-ci {
                gap: 10px;
            }

            .f-ci-icon {
                width: 34px;
                height: 34px;
            }

            .f-ci-icon i {
                font-size: 13px;
            }

            .f-ci-title {
                font-size: 12px;
            }

            .f-ci-detail {
                font-size: 11px;
            }

            .f-divider {
                margin: 24px 0 0;
            }

            /* Bottom bar */
            .f-bottom {
                padding: 14px 12px;
            }

            .f-bottom-inner {
                flex-direction: column;
                align-items: center;
                padding: 0;
                gap: 8px;
            }

            .f-copyright {
                font-size: 11px;
                text-align: center;
            }

            .f-bottom-links {
                gap: 10px 16px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .f-bottom-links a {
                font-size: 11px;
                white-space: nowrap;
            }

            .f-bottom-sep {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .f-mobile-bottom-row {
                grid-template-columns: 1fr 1fr;
            }

            .f-contact-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <footer class="roamers-footer">

        <!-- ── Rounded Card ─────────────────────────────── -->
        <div class="container-fluid px-0">
            <div class="f-card mx-auto" style="max-width: 1480px;">
                <!-- Stats Bar — desktop only -->
                <div class="d-none d-lg-flex f-stats-bar">
                    <div class="f-stat">
                        <span class="f-stat-num">500+</span>
                        <span class="f-stat-label">Trips Completed</span>
                    </div>
                    <div class="f-stat-sep"></div>
                    <div class="f-stat">
                        <span class="f-stat-num">10K+</span>
                        <span class="f-stat-label">Happy Travelers</span>
                    </div>
                    <div class="f-stat-sep"></div>
                    <div class="f-stat">
                        <span class="f-stat-num">40+</span>
                        <span class="f-stat-label">Destinations</span>
                    </div>
                    <div class="f-stat-sep"></div>
                    <div class="f-stat">
                        <span class="f-stat-num">4.9 ★</span>
                        <span class="f-stat-label">Average Rating</span>
                    </div>
                    <div class="f-stat-sep"></div>
                    <div class="f-stat">
                        <span class="f-stat-num">5+</span>
                        <span class="f-stat-label">Years of Adventure</span>
                    </div>
                </div>

                <div class="row g-4 g-lg-5 position-relative">

                    <!-- Brand -->
                    <div class="col-lg-3 col-12 f-brand-col">
                        <div class="f-logo-wrap">
                            <a href="index">
                                <img src="assets/img/Logo/Roamers.png" alt="Roamers">
                            </a>
                        </div>
                        <p class="f-tagline">
                            Looking for a unique travel experience beyond just tourist spots? Join Roamers — the
                            ultimate travel community that ignites your sense of adventure.
                        </p>
                        <div class="f-location-line">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Chennai, Delhi, India</span>
                        </div>
                        <div class="f-socials">
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/roamers.in/" aria-label="Instagram"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                    <!-- Backpacking — desktop -->
                    <div class="col-lg-2 d-none d-lg-block">
                        <p class="f-col-heading">Backpacking</p>
                        <ul class="f-nav-list">
                            <li><a href="kerala">Kerala</a></li>
                            <li><a href="#">Leh Ladakh</a></li>
                            <li><a href="andaman">Andaman Island</a></li>
                            <li><a href="meghalaya">Meghalaya</a></li>
                            <li><a href="#">Spiti Valley</a></li>
                        </ul>
                    </div>

                    <!-- Short Breaks — desktop -->
                    <div class="col-lg-2 d-none d-lg-block">
                        <p class="f-col-heading">Short Breaks</p>
                        <ul class="f-nav-list">
                            <li><a href="ooty">Ooty</a></li>
                            <li><a href="pondicherry">Pondicherry</a></li>
                            <li><a href="kolukkumalai">Kolukkumalai</a></li>
                            <li><a href="kodaikanal">Kodaikanal</a></li>
                            <li><a href="chikmagalur">Chikmagalur</a></li>
                        </ul>
                    </div>

                    <!-- Service — desktop -->
                    <div class="col-lg-2 d-none d-lg-block">
                        <p class="f-col-heading">Service</p>
                        <ul class="f-nav-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="cancellation-policy">Cancellation Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>

                    <!-- Mobile: links grid -->
                    <div class="col-12 d-lg-none">
                        <!-- Backpacking + Short Breaks -->
                        <div class="f-links-mobile">
                            <div>
                                <p class="f-col-heading">Backpacking</p>
                                <ul class="f-nav-list">
                                    <li><a href="kerala">Kerala</a></li>
                                    <li><a href="#">Leh Ladakh</a></li>
                                    <li><a href="andaman">Andaman Island</a></li>
                                    <li><a href="meghalaya">Meghalaya</a></li>
                                    <li><a href="#">Spiti Valley</a></li>
                                </ul>
                            </div>
                            <div>
                                <p class="f-col-heading">Short Breaks</p>
                                <ul class="f-nav-list">
                                    <li><a href="ooty">Ooty</a></li>
                                    <li><a href="pondicherry">Pondicherry</a></li>
                                    <li><a href="kolukkumalai">Kolukkumalai</a></li>
                                    <li><a href="kodaikanal">Kodaikanal</a></li>
                                    <li><a href="chikmagalur">Chikmagalur</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Service + Contact Info side by side -->
                        <div class="f-mobile-bottom-row">
                            <div>
                                <p class="f-col-heading">Service</p>
                                <ul class="f-nav-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="cancellation-policy">Cancellation Policy</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                            <div>
                                <p class="f-col-heading">Contact Info</p>
                                <div class="f-contact-list" style="grid-template-columns:1fr;">
                                    <div class="f-ci">
                                        <div>
                                            <p class="f-ci-title">Support Line</p>
                                            <a class="f-ci-detail" href="tel:+918122121066">+91 81221 21066</a>
                                        </div>
                                    </div>
                                    <div class="f-ci">
                                        <div>
                                            <p class="f-ci-title">WhatsApp Us</p>
                                            <a class="f-ci-detail" href="https://wa.me/918122121066" target="_blank"
                                                rel="noopener">+91 81221 21066</a>
                                        </div>
                                    </div>
                                    <div class="f-ci">
                                        <div>
                                            <p class="f-ci-title">Email Us</p>
                                            <a class="f-ci-detail" href="mailto:info@roamers.in">info@roamers.in</a>
                                        </div>
                                    </div>
                                    <div class="f-ci">
                                        <div>
                                            <p class="f-ci-title">Our Offices</p>
                                            <a class="f-ci-detail" href="https://maps.google.com/?q=Chennai,India"
                                                target="_blank" rel="noopener">Chennai &amp; Delhi, India</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info — desktop only -->
                    <div class="col-lg-3 d-none d-lg-block">
                        <p class="f-col-heading">Contact Info</p>
                        <div class="f-contact-list">

                            <div class="f-ci">
                                <div class="f-ci-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <p class="f-ci-title">Support Line</p>
                                    <a class="f-ci-detail" href="tel:+918122121066">+91 81221 21066</a>
                                </div>
                            </div>

                            <div class="f-ci">
                                <div class="f-ci-icon">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div>
                                    <p class="f-ci-title">WhatsApp Us</p>
                                    <a class="f-ci-detail" href="https://wa.me/918122121066" target="_blank"
                                        rel="noopener">+91 81221 21066</a>
                                </div>
                            </div>

                            <div class="f-ci">
                                <div class="f-ci-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="f-ci-title">Email Us</p>
                                    <a class="f-ci-detail" href="mailto:info@roamers.in">info@roamers.in</a>
                                </div>
                            </div>

                            <div class="f-ci">
                                <div class="f-ci-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="f-ci-title">Our Offices</p>
                                    <a class="f-ci-detail" href="https://maps.google.com/?q=Chennai,India"
                                        target="_blank" rel="noopener">Chennai &amp; Delhi, India</a>
                                </div>
                            </div>

                            <div class="f-ci">
                                <div class="f-ci-icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <p class="f-ci-title">Office Hours</p>
                                    <span class="f-ci-detail">Mon – Sat: 9 AM – 7 PM IST</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Newsletter Strip — desktop only -->
                <div class="d-none d-lg-flex f-newsletter-strip">
                    <div>
                        <p class="f-nl-title">
                            <i class="fa-solid fa-envelope-open-text me-2" style="opacity:0.85;"></i>Stay updated with our latest trips
                        </p>
                        <p class="f-nl-sub">New destinations, exclusive deals &amp; travel tips — delivered to your inbox.</p>
                    </div>
                    <form class="f-nl-form" onsubmit="return false;">
                        <input type="email" class="f-nl-input" placeholder="Your email address">
                        <button type="submit" class="f-nl-btn">Subscribe</button>
                    </form>
                </div>

                <hr class="f-divider">
            </div>
        </div>

        <!-- ── Bottom Bar ───────────────────────────────── -->
        <div class="f-bottom">
            <div class="f-bottom-inner">
                <p class="f-copyright">
                    &copy;
                    <script>document.write(new Date().getFullYear());</script> Roamers Travel Community. All Rights
                    Reserved.
                </p>

                <!-- Payment / Trust — desktop only -->
                <div class="d-none d-lg-flex f-payment-row">
                    <span class="f-pay-label">Secure Payments:</span>
                    <span class="f-pay-badge">UPI</span>
                    <span class="f-pay-badge">Visa</span>
                    <span class="f-pay-badge">Mastercard</span>
                    <span class="f-pay-badge">Net Banking</span>
                    <span class="f-pay-badge f-pay-secure">
                        <i class="fa-solid fa-shield-halved" style="font-size:9px;margin-right:3px;"></i>SSL Secured
                    </span>
                </div>

                <div class="f-bottom-links">
                    <a href="#">About Us</a>
                    <span class="f-bottom-sep">|</span>
                    <a href="cancellation-policy">Cancellation Policy</a>
                    <span class="f-bottom-sep">|</span>
                    <a href="#">FAQs</a>
                    <span class="f-bottom-sep">|</span>
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>

    </footer>

    <!--====== FOOTER END ======-->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/dates.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/price.js"></script>
    <script src="assets/js/search.js"></script>

</body>

</html>