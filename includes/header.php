<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon">

    <!-- SEO Meta Description -->
    <meta name="description" content="" />
    <meta name="author" content="Themeland" />

    <!-- Title  -->
    <title>Roamers</title>
    <!-- Feather Icons for cool arrow -->
    <!-- Removed dropdown icon CSS/feather link as per instruction -->
    <style>
        nav {
            transition: all 0.3s ease;
            position: sticky;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: white;

            padding: 19px 0;
        }

        nav.scrolled {
            padding: 50px 0;
            background: transparent;
            transform: translateY(0);
            color: #333;
            /* Dark text color when scrolled for better visibility */
        }

        nav.scrolled .nav-link {
            color: #333 !important;
            /* Dark text color for nav links when scrolled */
        }

        nav.scrolled .navbar-brand {
            color: #333;
            /* Dark text color for brand when scrolled */
        }

        /* nav::before {
            width: 100px;
            height: 102px;
            content: "";
            position: absolute;
            background: #4ec0db;
            bottom: -43px;
            left: 50%;
            border-radius: 10px 0 10px;
            transition: all 0.3s ease;
        } */

        nav.scrolled::before {
            height: 92px;
            bottom: 20px;
        }

        .navbar-brand img {
            width: 49px;
            height: auto;
            transition: all 0.3s ease;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
        }

        nav.scrolled .navbar-brand img {
            width: 49px !important;
            margin-top: 2px !important;
        }

        @media (max-width: 600px) {
            .navbar-brand img {
                width: 50px !important;
                position: relative;
                margin-top: -30px !important;
                margin-left: 0 !important;
                transform: none;
                left: auto;
            }
        }

        .fa-envelope:hover {
            color: brown !important;
        }

        .call-btn a {
            background-color: #fff;
            padding: 7px 15px;
            border-radius: 20px;
            color: #4ec0db;
            margin-left: 20px;
            transition: 0.3s all;
        }

        .call-btn i {
            margin-right: 5px;
        }

        .call-btn a:hover {
            background-color: #4ec0db;
            border: 2px solid #fff;
            color: #fff;
        }

        .navbar-collapse {
            flex-grow: 0;
        }

        .menu-none1 {
            display: flex;
        }

        .menu-none {
            display: none !important;
        }

        @media (min-width: 601px) {
            .navbar-nav.main-nav {
                align-items: center;
            }
        }

        /* Fix mobile menu overlay and stacking issues */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: rgba(0, 136, 255, 0.88) !important;
                backdrop-filter: blur(35px) !important;
                -webkit-backdrop-filter: blur(35px) !important;
                border: 1px solid rgba(255, 255, 255, 0.18);
                position: absolute;
                top: 56px;
                left: 0;
                width: 100vw;
                z-index: 1050;
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                border-radius: 16px;
            }

            .navbar-nav.main-nav {
                flex-direction: column !important;
                align-items: flex-start !important;
                padding: 1rem 0.5rem;
            }

            .navbar-nav .nav-item {
                width: 100%;
            }

            .navbar-nav .nav-link {
                width: 100%;
                text-align: left;
                padding: 0.75rem 1.5rem;
                color: #222;
            }

            .navbar-brand.d-none.d-lg-block {
                display: none !important;
            }
        }

        @media (max-width: 600px) {

            .navbar-brand img,
            .phone-logo {
                width: 48px !important;
                height: 62px !important;
            }

            .navbar-collapse {
                top: 48px;
            }
        }

        /* --- Cool Dropdown Animation Styles --- */
        @media (min-width: 992px) {
            .navbar-nav .dropdown-menu {
                display: block;
                opacity: 0;
                visibility: hidden;
                max-height: 0;
                overflow: hidden;
                transform: translateY(30px) scale(0.95) rotateX(-15deg);
                filter: blur(8px) brightness(0.95);
                transition:
                    opacity 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                    transform 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                    max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                    filter 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                    visibility 0.35s;
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                margin-top: 0.5rem;
                pointer-events: none;
                border-radius: 16px;
                background: rgba(143, 194, 239, 0.3) !important;
                backdrop-filter: blur(55px);
                -webkit-backdrop-filter: blur(55px);
                border: 1px solid rgba(255, 255, 255, 0.18);
                will-change: opacity, transform, max-height, filter, visibility;
            }

            .navbar-nav .dropdown.show>.dropdown-menu,
            .navbar-nav .dropdown:focus-within>.dropdown-menu,
            .navbar-nav .dropdown .dropdown-menu.cool-show {
                opacity: 1;
                visibility: visible;
                max-height: 600px;
                transform: translateY(0) scale(1) rotateX(0deg);
                filter: blur(0) brightness(1.05) saturate(1.1);
                pointer-events: auto;
                background: rgba(143, 194, 239, 0) !important;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                box-shadow:
                    0 8px 32px rgba(0, 0, 0, 0.12),
                    0 2px 8px rgba(0, 0, 0, 0.08),
                    inset 0 1px 0 rgba(255, 255, 255, 0.6);
                border-radius: 12px;
            }

            .navbar-nav .dropdown-menu {
                /* Remove Bootstrap's default show on hover/focus */
                position: absolute;
                left: 0;
                top: 100%;
            }

            .navbar-nav .dropdown-menu li {
                opacity: 0;
                transform: translateY(20px) scale(0.98);
                filter: blur(3px);
                transition:
                    opacity 0.25s cubic-bezier(0.4, 0, 0.2, 1),
                    transform 0.25s cubic-bezier(0.4, 0, 0.2, 1),
                    filter 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .navbar-nav .dropdown.show>.dropdown-menu li,
            .navbar-nav .dropdown:focus-within>.dropdown-menu li,
            .navbar-nav .dropdown .dropdown-menu.cool-show li {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }

            /* Staggered animation for dropdown items */
            .navbar-nav .dropdown-menu li:nth-child(1) {
                transition-delay: 0.08s;
            }

            .navbar-nav .dropdown-menu li:nth-child(2) {
                transition-delay: 0.16s;
            }

            .navbar-nav .dropdown-menu li:nth-child(3) {
                transition-delay: 0.24s;
            }

            .navbar-nav .dropdown-menu li:nth-child(4) {
                transition-delay: 0.32s;
            }

            .navbar-nav .dropdown-menu li:nth-child(5) {
                transition-delay: 0.40s;
            }
        }

        /* Make dropdown menus easier to access by increasing pointer area and delay hiding */
        @media (min-width: 992px) {
            .navbar-nav .dropdown-menu {
                pointer-events: auto !important;
            }
        }

        /* --- Fixed Dropdown Arrow Styles --- */
        /* Removed .dropdown-arrow styles as per instruction */

        /* --- Hot Patch Badge Styles --- */
        /* .hot-badge,
        .hot-badge-btn {
            display: inline-block;
            background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%);
            color: #fff;
            font-size: 10px;
            font-weight: bold;
            padding: 2px 7px;
            border-radius: 8px;
            margin-left: 6px;
            vertical-align: middle;
            letter-spacing: 0.5px;
            box-shadow: 0 1px 4px rgba(255, 80, 80, 0.18);
            position: relative;
            animation: hotPulse 1.2s infinite alternate;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .hot-badge-btn {
            transition: box-shadow 0.2s;
        }

        .hot-badge-btn:focus {
            box-shadow: 0 0 0 2px #ff512f55;
        }

        @keyframes hotPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 80, 80, 0.25), 0 1px 4px rgba(255, 80, 80, 0.18);
                transform: scale(1);
                background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%);
            }

            60% {
                box-shadow: 0 0 8px 4px rgba(255, 80, 80, 0.18), 0 1px 4px rgba(255, 80, 80, 0.18);
                transform: scale(1.08);
                background: linear-gradient(90deg, #ff512f 10%, #ff512f 90%);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 80, 80, 0.25), 0 1px 4px rgba(255, 80, 80, 0.18);
                transform: scale(1);
                background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%);
            }
        }

        .hot-badge.hot-badge-top {
            position: absolute;
            top: -16px;
            left: 0;
            font-size: 8px;
            padding: 1px 4px;
            border-radius: 6px;
            animation: hotPulse 1.2s infinite alternate;
            z-index: 10;
        }

        .hot-badge.hot-badge-flag,
        .hot-badge-btn.hot-badge-flag {
            position: absolute;
            left: -22px;
            top: -10px;
            font-size: 9px;
            font-weight: bold;
            padding: 2px 10px 2px 8px;
            border-radius: 4px 8px 8px 4px;
            background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(255, 80, 80, 0.18);
            z-index: 10;
            display: inline-block;
            transform: rotate(-10deg);
            animation: flagWave 1.2s infinite alternate;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.08));
            margin-right: 2px;
        }

        .hot-badge.hot-badge-flag::after,
        .hot-badge-btn.hot-badge-flag::after {
            content: "";
            position: absolute;
            right: -8px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 8px solid #dd2476;
        }

        @keyframes flagWave {
            0% {
                transform: rotate(-10deg) skewY(0deg) scaleY(1);
            }

            50% {
                transform: rotate(-10deg) skewY(-6deg) scaleY(1.05);
            }

            100% {
                transform: rotate(-10deg) skewY(0deg) scaleY(1);
            }
        }
        */

        /* --- Live Now Badge Styles --- */
        /* .live-now-badge {
            position: absolute;
            left: -10px !important;
            top: -19px;
            font-size: 8px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 4px;
            background: linear-gradient(90deg, rgb(255, 47, 47) 0%, rgb(221, 36, 36) 100%);
            color: #fff;
            box-shadow: 0 1px 4px rgba(255, 80, 80, 0.18);
            letter-spacing: 0.5px;
            z-index: 20;
            animation: liveNowBlink 1s infinite alternate;
            display: inline-block;
            white-space: nowrap;
        }

        @keyframes liveNowBlink {
            0% {
                opacity: 1;
                box-shadow: 0 0 8px 2px #ff512f66;
            }

            50% {
                opacity: 0.5;
                box-shadow: 0 0 16px 4px #ff512f99;
            }

            100% {
                opacity: 1;
                box-shadow: 0 0 8px 2px #ff512f66;
            }
        }

        @media (max-width: 991.98px) {
            .live-now-badge {
                left: 0;
                top: -14px;
                font-size: 9px;
                padding: 1.5px 7px;
            }
        }
        */
    </style>
    <!-- Bootstrap CSS (for navbar collapse functionality) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons CDN -->
    <!-- Removed feather-icons script as per instruction -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <!-- Mobile: Logo left, hamburger right -->
            <div class="d-flex w-100 align-items-center justify-content-between d-lg-none">
                <a class="navbar-brand m-0" href="https://roamers.in/">
                    <img src="assets/img/Logo/Roamers Logo-01.png" class="img-fluid phone-logo" alt="logo"
                        style="height:48px;">
                </a>
                <button class="navbar-toggler ms-auto" id="menubtn" type="button" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- Desktop: Brand center, menu left/right as before -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul
                    class="navbar-nav m-0 main-nav menu-none1 me-5 w-100 d-flex align-items-center justify-content-center flex-lg-row flex-column">
                    <!-- Desktop menu items -->
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle position-relative" href="trips" id="upcomingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                            <span style="position: relative; display: inline-block;">
                                <span style="position:relative; display:inline-block;">
                                    <!-- Live Now badge above the U -->
                                    <!-- <span class="live-now-badge" style="left: 2px; top: -18px;">HOT</span> -->
                                    <span>
                                        <span style="position:relative;">
                                            <span style="display:inline-block; position:relative;">
                                                <span style="display:inline-block; position:relative;">

                                                </span>
                                            </span>
                                        </span>
                                        Upcoming Trips
                                    </span>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="upcomingDropdown">
                            <li><a class="dropdown-item" href="#">Weekend 1</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 2</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                        </ul>
                        <style>
                            .dropdown-menu[aria-labelledby="upcomingDropdown"] .dropdown-item:hover,
                            .dropdown-menu[aria-labelledby="upcomingDropdown"] .dropdown-item:focus {
                                background-color: #36a2c2 !important;
                                color: #fff !important;
                            }
                        </style>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="backpacking-trips" id="weekendDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                            Weekend trips
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="weekendDropdown">
                            <li><a class="dropdown-item" href="#">Weekend 1</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 2</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                            <li><a class="dropdown-item" href="#">Weekend 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="shortbreak-trips" id="internationalDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                            International trips
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="internationalDropdown">
                            <li><a class="dropdown-item" href="#">Europe Tour</a></li>
                            <li><a class="dropdown-item" href="#">Asia Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Africa Safari</a></li>
                            <li><a class="dropdown-item" href="#">Australia Escape</a></li>
                            <li><a class="dropdown-item" href="#">Europe Tour</a></li>
                            <li><a class="dropdown-item" href="#">Asia Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Africa Safari</a></li>
                            <li><a class="dropdown-item" href="#">Australia Escape</a></li>
                        </ul>
                    </li>
                    <a class="navbar-brand d-none d-lg-block mx-3" href="https://roamers.in/">
                        <img src="assets/img/Logo/Roamers Logo-01.png" class="d-none d-md-block" alt="Romers-logo">
                        <img src="assets/img/Logo/Roamers Logo-01.png" class="img-fluid d-block d-md-none phone-logo"
                            alt="logo">
                    </a>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="domesticDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                            Domestic Trips
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="domesticDropdown">
                            <li><a class="dropdown-item" href="#">Trip 1</a></li>
                            <li><a class="dropdown-item" href="#">Trip 2</a></li>
                            <li><a class="dropdown-item" href="#">Trip 3</a></li>
                            <li><a class="dropdown-item" href="#">Trip 1</a></li>
                            <li><a class="dropdown-item" href="#">Trip 2</a></li>
                            <li><a class="dropdown-item" href="#">Trip 3</a></li>
                            <li><a class="dropdown-item" href="#">Trip 1</a></li>
                            <li><a class="dropdown-item" href="#">Trip 2</a></li>
                            <li><a class="dropdown-item" href="#">Trip 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="backpacking-trips">Corporate Trips</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="shortbreak-trips">Our Community</a>
                    </li>
                    <!-- <a href="https://www.instagram.com/roamers.in/" class="d-none d-lg-block"><i
                            class="fa-brands fa-instagram insta-bg"></i></a>
                    <a href="mailto:info@roamers.in" class="d-none d-lg-block">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    <a href="tel:+91 81221 21066" class="d-none d-lg-block">
                        <i class="fa-solid fa-phone"></i>
                    </a> -->
                    <!-- Mobile menu items (show only on mobile, hide on desktop) -->
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="trips">Upcoming Trips</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="backpacking-trips">Weekend Trips</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="shortbreak-trips">International Trips</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="shortbreak-trips"> Domestic Trips </a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="shortbreak-trips"> Corporate Trips </a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-center" href="shortbreak-trips">Our Community </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Removed feather-icons script as per instruction -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 700) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile hamburger menu open/close (own JS, not Bootstrap)
        document.addEventListener('DOMContentLoaded', function () {
            var menubtn = document.getElementById('menubtn');
            var navbarCollapse = document.getElementById('navbarNav');
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            // Helper: check if mobile
            function isMobile() {
                return window.innerWidth < 992;
            }

            // Toggle menu on hamburger click
            menubtn.addEventListener('click', function (e) {
                if (isMobile()) {
                    var expanded = menubtn.getAttribute('aria-expanded') === 'true';
                    if (expanded) {
                        navbarCollapse.classList.remove('show');
                        menubtn.setAttribute('aria-expanded', 'false');
                    } else {
                        navbarCollapse.classList.add('show');
                        menubtn.setAttribute('aria-expanded', 'true');
                    }
                }
            });

            // Close menu when clicking a nav-link (mobile only)
            navLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    if (isMobile() && navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                        menubtn.setAttribute('aria-expanded', 'false');
                    }
                });
            });

            // Optional: Close menu on resize if desktop
            window.addEventListener('resize', function () {
                if (!isMobile()) {
                    navbarCollapse.classList.remove('show');
                    menubtn.setAttribute('aria-expanded', 'false');
                }
            });

            // --- Improved Dropdown hover animation for desktop ---
            // Smoother and less buggy dropdowns
            function isDesktop() {
                return window.innerWidth >= 992;
            }
            var dropdowns = document.querySelectorAll('.navbar-nav .dropdown.d-lg-block');
            dropdowns.forEach(function (dropdown) {
                var menu = dropdown.querySelector('.dropdown-menu');
                if (!menu) return;

                let hideTimeout = null;
                let showTimeout = null;

                function showDropdown() {
                    if (isDesktop()) {
                        if (hideTimeout) {
                            clearTimeout(hideTimeout);
                            hideTimeout = null;
                        }
                        // Prevent rapid flicker by using a small delay before showing
                        if (showTimeout) clearTimeout(showTimeout);
                        showTimeout = setTimeout(function () {
                            menu.classList.add('cool-show');
                            dropdown.classList.add('show');
                            // Animate each li with stagger
                            var items = menu.querySelectorAll('li');
                            items.forEach(function (li, idx) {
                                li.style.transitionDelay = (0.08 * (idx + 1)) + 's';
                            });
                            // No dropdown arrow to update
                        }, 60); // 60ms delay for smoother intent
                    }
                }
                function hideDropdown() {
                    if (isDesktop()) {
                        if (showTimeout) {
                            clearTimeout(showTimeout);
                            showTimeout = null;
                        }
                        // Delay hiding to allow user to move mouse to dropdown
                        if (hideTimeout) clearTimeout(hideTimeout);
                        hideTimeout = setTimeout(function () {
                            menu.classList.remove('cool-show');
                            dropdown.classList.remove('show');
                            // Remove transition delays for next time
                            var items = menu.querySelectorAll('li');
                            items.forEach(function (li) {
                                li.style.transitionDelay = '';
                            });
                            // No dropdown arrow to update
                        }, 180); // 180ms delay for smoother exit
                    }
                }

                // Show on mouseenter/focusin, hide on mouseleave/focusout (with delay)
                dropdown.addEventListener('mouseenter', showDropdown);
                dropdown.addEventListener('mouseleave', hideDropdown);
                dropdown.addEventListener('focusin', showDropdown);
                dropdown.addEventListener('focusout', hideDropdown);

                // If mouse enters dropdown-menu itself, cancel hide
                menu.addEventListener('mouseenter', function () {
                    if (hideTimeout) {
                        clearTimeout(hideTimeout);
                        hideTimeout = null;
                    }
                });
                // If mouse leaves dropdown-menu, start hide
                menu.addEventListener('mouseleave', hideDropdown);

                // Prevent accidental flicker when moving between toggle and menu
                var toggle = dropdown.querySelector('.dropdown-toggle');
                if (toggle) {
                    toggle.addEventListener('mouseenter', showDropdown);
                    toggle.addEventListener('mouseleave', hideDropdown);
                }
            });

            // No feather icons to replace
        });
    </script>
</body>

</html>