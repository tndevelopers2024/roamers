<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Description -->
    <meta name="description" content="" />
    <meta name="author" content="Themeland" />
    <!-- Title  -->
    <title>Roamers</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- slider css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- ***** All CSS Files ***** -->
    <!-- ***** Font Asesome cdn ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
        :root {
            --footer-bg: #4ec0db;
            --footer-dark: #3fb3cf;
            --footer-bottom: #35a5c1;
            --text-white: #ffffff;
            --text-light: rgba(255, 255, 255, 0.85);
        }

        .footer-section {
            background-color: var(--footer-bg);
            color: var(--text-white);
            font-family: 'Heebo', sans-serif;
            position: relative;
            padding: 0;
        }

        /* Top Features Bar */
        .footer-features {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-item i {
            font-size: 24px;
            color: rgba(255, 255, 255, 0.5);
        }

        .feature-content h4 {
            font-size: 14px;
            font-weight: 700;
            margin: 0;
            color: var(--text-white);
            letter-spacing: 0.5px;
        }

        .feature-content p {
            font-size: 11px;
            margin: 0;
            color: var(--text-light);
        }

        /* Main Footer */
        .footer-main {
            padding: 80px 0 60px;
        }

        .footer-brand-col .footer-logo img {
            max-width: 180px;
            margin-bottom: 25px;
        }

        .footer-brand-col p {
            font-size: 13px;
            line-height: 1.6;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .location-info {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            margin-bottom: 25px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: #fff;
            color: var(--footer-bg);
        }

        .footer-widget-heading h3 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--text-white);
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-list li {
            margin-bottom: 12px;
        }

        .footer-links-list a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 13px;
            transition: 0.2s;
        }

        .footer-links-list a:hover {
            color: #fff;
            padding-left: 5px;
        }

        /* Stay Updated & Trip Support */
        .newsletter-form {
            position: relative;
            margin-bottom: 30px;
        }

        .newsletter-form input {
            width: 100%;
            background: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 13px;
        }

        .newsletter-form button {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            background: transparent;
            border: none;
            padding: 0 15px;
            color: #ccc;
        }

        .trip-support-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
        }

        .support-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .support-header h4 {
            font-size: 13px;
            font-weight: 700;
            margin: 0;
            color: var(--text-light);
            text-transform: uppercase;
        }

        .support-hours {
            font-size: 12px;
        }

        .hour-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            color: var(--text-light);
        }

        .booking-status {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-label {
            font-size: 12px;
            font-weight: 700;
        }

        .status-value {
            font-size: 10px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
        }

        /* Contact Details Bar */
        .footer-contact-bar {
            background: var(--footer-dark);
            padding: 30px 0;
        }

        .contact-item-bar {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .contact-item-bar i {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.5);
        }

        .contact-content-bar span {
            display: block;
            font-size: 10px;
            color: var(--text-light);
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .contact-content-bar h5 {
            font-size: 13px;
            font-weight: 700;
            margin: 0;
            color: #fff;
        }

        /* Copyright Bar */
        .footer-bottom-bar {
            background: var(--footer-bottom);
            padding: 20px 0;
            font-size: 12px;
            color: var(--text-light);
        }

        .payment-icons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            opacity: 0.7;
        }

        /* Brand Badge */
        .footer-badge {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 60px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .footer-badge img {
            width: 35px;
            height: auto;
        }

        @media (max-width: 991px) {
            .footer-badge { width: 50px; height: 50px; top: -25px; }
            .footer-badge img { width: 28px; }
            .footer-features { padding: 40px 0 10px; }
            .footer-features .row > div { margin-bottom: 30px; }
            .footer-main { padding: 50px 0 20px; }
            .main-row > div { margin-bottom: 40px; }
            .contact-item-bar { margin-bottom: 25px; }
            .payment-icons { justify-content: center; margin-top: 20px; }
            .text-lg-left { text-align: center !important; }
        }

        @media (max-width: 767px) {
            .footer-features .row { display: flex; flex-wrap: wrap; }
            .footer-features .row > div { width: 50%; margin-bottom: 30px; }
            .feature-item { 
                flex-direction: column; 
                text-align: center; 
                gap: 8px;
            }
            .feature-item i { font-size: 20px; margin: 0; }
            .feature-content h4 { font-size: 11px; }
            .feature-content p { font-size: 9px; }

            .footer-brand-col { text-align: center; margin-bottom: 50px; }
            .footer-brand-col .footer-logo img { max-width: 150px; margin: 0 auto 20px; }
            .footer-brand-col p { font-size: 12px; }
            .location-info { justify-content: center; font-size: 11px; }
            .social-links { justify-content: center; gap: 10px; }
            .social-links a { width: 32px; height: 32px; font-size: 12px; }
            
            .footer-widget-heading { text-align: center; margin-bottom: 20px; }
            .footer-widget-heading h3 { font-size: 14px; }
            .footer-links-list { text-align: center; margin-bottom: 40px; }
            .footer-links-list a { font-size: 12px; }
            
            .newsletter-form { max-width: 280px; margin: 0 auto 25px; }
            .newsletter-form input { padding: 10px 15px; font-size: 12px; }
            .trip-support-card { max-width: 300px; margin: 0 auto; padding: 15px; }
            .support-header h4 { font-size: 11px; }
            .hour-row { font-size: 11px; }
            
            .footer-contact-bar { padding: 40px 0 10px; }
            .contact-item-bar { flex-direction: row; justify-content: flex-start; text-align: left; padding: 0 15px; margin-bottom: 25px; width: 100%; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px; }
            .contact-item-bar i { font-size: 18px; width: 30px; }
            .contact-content-bar h5 { font-size: 12px; }
            
            .footer-bottom-bar { text-align: center; padding: 25px 0; }
            .footer-bottom-bar p { font-size: 11px; margin-bottom: 15px; }
        }
    </style>
</head>

<body>

    <footer class="footer-section">
        <!-- Top Features Bar -->
        <div class="footer-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <i class="fa-solid fa-users"></i>
                            <div class="feature-content">
                                <h4>SOCIAL COMMUNITY</h4>
                                <p>Adventure with travelers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <div class="feature-content">
                                <h4>CURATED TRIPS</h4>
                                <p>Handcrafted itineraries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <i class="fa-solid fa-user-tie"></i>
                            <div class="feature-content">
                                <h4>EXPERT CAPTAINS</h4>
                                <p>Safe & professional lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <i class="fa-solid fa-shield-check"></i>
                            <div class="feature-content">
                                <h4>VERIFIED STAYS</h4>
                                <p>Reliable accommodations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Section -->
        <div class="footer-main">
            <div class="container">
                <div class="row main-row">
                    <div class="col-lg-3 footer-brand-col">
                        <div class="footer-logo">
                            <a href="index"><img src="assets/img/Logo/Roamers.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <p>
                            Looking for a unique travel experience that goes beyond just tourist spots? Join
                            Roamers - the ultimate Travel community that ignites your sense of adventure and
                            encourages social travel.
                        </p>
                        <div class="location-info">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Chennai, Delhi, India</span>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/roamers.in/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="footer-widget-heading">
                            <h3>Backpacking</h3>
                        </div>
                        <ul class="footer-links-list">
                            <li><a href="kerala">Kerala</a></li>
                            <li><a href="#">Leh Ladakh</a></li>
                            <li><a href="andaman">Andaman Island</a></li>
                            <li><a href="meghalaya">Meghalaya</a></li>
                            <li><a href="#">Spiti Valley</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="footer-widget-heading">
                            <h3>Short Breaks</h3>
                        </div>
                        <ul class="footer-links-list">
                            <li><a href="ooty">Ooty</a></li>
                            <li><a href="pondicherry">Pondicherry</a></li>
                            <li><a href="kolukkumalai">Kolukkumalai</a></li>
                            <li><a href="kodaikanal">Kodaikanal</a></li>
                            <li><a href="chikmagalur">Chikmagalur</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="footer-widget-heading">
                            <h3>Service</h3>
                        </div>
                        <ul class="footer-links-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="cancellation-policy">Cancellation Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget-heading">
                            <h3>Stay Updated</h3>
                        </div>
                        <p style="font-size: 11px; color: var(--text-light); margin-bottom: 15px;">Join our circle for exclusive trip updates and offers.</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Your email address">
                            <button><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        
                        <div class="trip-support-card">
                            <div class="support-header">
                                <i class="fa-solid fa-headset" style="color: rgba(255,255,255,0.3);"></i>
                                <h4>TRIP SUPPORT</h4>
                            </div>
                            <div class="support-hours">
                                <div class="hour-row">
                                    <span>Mon - Sat</span>
                                    <span>10 AM - 8 PM</span>
                                </div>
                                <div class="hour-row">
                                    <span>Sunday</span>
                                    <span>10 AM - 2 PM</span>
                                </div>
                            </div>
                            <div class="booking-status">
                                <span class="status-label">BOOKING STATUS</span>
                                <span class="status-value" style="color: #fff; font-size: 10px;">OPEN DAILY</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Details Bar -->
        <div class="footer-contact-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item-bar">
                            <i class="fa-solid fa-phone-volume"></i>
                            <div class="contact-content-bar">
                                <span>SUPPORT LINE</span>
                                <h5>+91 81221 21066</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item-bar">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <div class="contact-content-bar">
                                <span>EMAIL US</span>
                                <h5>info@roamers.in</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item-bar">
                            <i class="fa-solid fa-store"></i>
                            <div class="contact-content-bar">
                                <span>OUR STORE</span>
                                <h5>Chennai & Delhi, India</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item-bar">
                            <i class="fa-solid fa-award"></i>
                            <div class="contact-content-bar">
                                <span>QUALITY ASSURED</span>
                                <h5>Travel Excellence</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Bar -->
        <div class="footer-bottom-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <p style="margin: 0; color: var(--text-light); ">&copy; <script>document.write(new Date().getFullYear());</script> Roamers Travel Community. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-icons">
                            <i class="fa-brands fa-cc-visa"></i>
                            <i class="fa-brands fa-cc-mastercard"></i>
                            <i class="fa-brands fa-cc-amex"></i>
                            <i class="fa-brands fa-cc-paypal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== FOOTER END======-->
    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/dates.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/price.js"></script>
    <script src="assets/js/search.js"></script>

</body>

</html>