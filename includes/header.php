<?php
$pathPrefix = isset($pathPrefix) ? $pathPrefix : '';
?>
<style>
    nav {
        transition: all 0.3s ease;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        background: #4ec0db;
        /* Set blue background */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 15px 0 !important;
        /* Override style.css */
    }

    nav.scrolled {
        padding: 15px 0 !important;
        background: #4ec0db;
        /* Keep blue on scroll */
    }

    nav::before {
        width: 100px;
        height: 102px;
        content: "";
        position: absolute;
        background: #4ec0db;
        bottom: -43px;
        left: 50% !important;
        right: auto !important;
        /* Reset style.css override */
        margin: 0 !important;
        /* Reset style.css override */
        border-radius: 10px 0 10px;
        transition: all 0.3s ease;
        transform: translateX(-50%) rotate(45deg) !important;
        /* Force transform */
        /* Create V shape */
        /* Correct centering */
        z-index: -1;
        /* Ensure behind logo */
    }

    nav.scrolled::before {
        height: 92px;
        bottom: 20px;
    }

    .navbar-brand img {
        width: 80px;
        height: auto;
        transition: all 0.3s ease;
        position: absolute;
        left: 50% !important;
        transform: translateX(-50%);
        top: 5px;
        /* Adjust top position */
        z-index: 1001;
        /* Ensure on top */
    }

    nav.scrolled .navbar-brand img {
        width: 50px !important;
        margin-top: -1px !important;
    }

    @media (max-width: 600px) {
        .navbar-brand img {
            width: 50px !important;
            position: relative;
            margin-top: -30px !important;
            margin-left: 0 !important;
            transform: none;
            left: auto;
            top: auto;
        }
    }

    /* .fa-envelope:hover {
            color: brown !important;
        } */

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

    /* .call-btn a:hover {
            background-color: #4ec0db;
            border: 2px solid #fff;
            color: #fff;
        } */

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

    .nav-link {
        color: #fff !important;
        /* Force white text */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light" id="mynav">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-0 main-nav menu-none1">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pathPrefix; ?>trips">Upcoming Trips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pathPrefix; ?>backpacking-trips">Backpacking trips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pathPrefix; ?>shortbreak-trips">Short Break trips</a>
                </li>
            </ul>
        </div>

        <a class="navbar-brand" href="https://roamers.in/">
            <img src="<?php echo $pathPrefix; ?>assets/img/Logo/Roamers%20Logo-01.png" class="d-none d-md-block"
                alt="Romers-logo">
            <img src="<?php echo $pathPrefix; ?>assets/img/Logo/Roamers%20Logo-01.png"
                class="img-fluid d-block d-md-none phone-logo" alt="logo">
        </a>

        <button class="navbar-toggler" id="menubtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
            onclick="toggleMenuIcon(this)">
            <span id="menu-icon" style="display: inline-block; transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);">
                <i class="fa-solid fa-bars"
                    style="color: #ffffff; transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);"></i>
            </span>
        </button>
        <script>
            function toggleMenuIcon(btn) {
                var iconSpan = btn.querySelector('#menu-icon');
                var nav = document.getElementById('navbarNav');
                // Animate icon with rotation
                iconSpan.style.transform = 'rotate(180deg)';
                setTimeout(function () {
                    if (nav.classList.contains('show')) {
                        iconSpan.innerHTML = '<i class="fa-solid fa-xmark" style="color: #ffffff; transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);"></i>';
                    } else {
                        iconSpan.innerHTML = '<i class="fa-solid fa-bars" style="color: #ffffff; transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);"></i>';
                    }
                    // Reset rotation after icon change for smoothness
                    iconSpan.style.transform = 'rotate(0deg)';
                }, 350); // Bootstrap collapse transition duration
            }
        </script>

        <div class="collapse navbar-collapse animated-mobile-menu" id="navbarNav">
            <ul class="navbar-nav m-0 main-nav">
                <li class="nav-item menu-none">
                    <a class="nav-link text-center" href="<?php echo $pathPrefix; ?>trips">Upcoming Trips</a>
                </li>
                <li class="nav-item menu-none">
                    <a class="nav-link text-center" href="<?php echo $pathPrefix; ?>backpacking-trips">Backpacking
                        trips</a>
                </li>
                <li class="nav-item menu-none">
                    <a class="nav-link text-center" href="<?php echo $pathPrefix; ?>shortbreak-trips">Short Break
                        trips</a>
                </li>
                <li class="nav-item nav-bar">
                    <a class="nav-link text-center" href="<?php echo $pathPrefix; ?>#travelgram">Community</a>
                </li>
                <li class="nav-item" id='contact'>
                    <a class="nav-link text-center" href="<?php echo $pathPrefix; ?>#contact-roamers">Contact</a>
                </li>
            </ul>
            <div
                class="w-100 d-flex flex-column flex-md-row align-items-center align-items-md-start justify-content-center justify-content-md-start p-5 p-md-0">
                <div class="header-social-icon pb-2 pb-md-0 text-center text-md-start w-100 w-md-auto mb-2 mb-md-0">
                    <a href="https://www.instagram.com/roamers.in/"><i class="fa-brands fa-instagram insta-bg"></i></a>
                    <a href="mailto:info@roamers.in">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                <div class="call-btn text-center text-md-start w-100 w-md-auto">
                    <a href="tel:+91 8122121066" class="text-decoration-none"><i class="fa-solid fa-phone"></i>+91
                        8122121066</a>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 600px) {
                .animated-mobile-menu {
                    animation: slideDownFadeIn 0.7s cubic-bezier(0.23, 1, 0.32, 1);
                    /* For when menu opens */
                    background: rgba(255, 255, 255, 0.98);
                    box-shadow: 0 12px 32px rgba(78, 192, 219, 0.12), 0 2px 8px rgba(0, 0, 0, 0.08);
                    border-radius: 0 0 24px 24px;
                    overflow: hidden;
                }

                @keyframes slideDownFadeIn {
                    0% {
                        opacity: 0;
                        transform: translateY(-40px) scale(0.98) skewY(-3deg);
                        filter: blur(8px);
                    }

                    60% {
                        opacity: 1;
                        transform: translateY(8px) scale(1.02) skewY(1deg);
                        filter: blur(2px);
                    }

                    100% {
                        opacity: 1;
                        transform: translateY(0) scale(1) skewY(0deg);
                        filter: blur(0);
                    }
                }

                .animated-mobile-menu .nav-link {
                    animation: fadeInUp 0.6s cubic-bezier(0.23, 1, 0.32, 1) both;
                    animation-delay: 0.2s;
                }

                .animated-mobile-menu .nav-item:nth-child(2) .nav-link {
                    animation-delay: 0.3s;
                }

                .animated-mobile-menu .nav-item:nth-child(3) .nav-link {
                    animation-delay: 0.4s;
                }

                .animated-mobile-menu .nav-item:nth-child(4) .nav-link {
                    animation-delay: 0.5s;
                }

                .animated-mobile-menu .nav-item:nth-child(5) .nav-link {
                    animation-delay: 0.6s;
                }

                @keyframes fadeInUp {
                    0% {
                        opacity: 0;
                        transform: translateY(30px) scale(0.95);
                    }

                    100% {
                        opacity: 1;
                        transform: translateY(0) scale(1);
                    }
                }

                .animated-mobile-menu .header-social-icon a,
                .animated-mobile-menu .call-btn a {
                    animation: fadeInUp 0.7s cubic-bezier(0.23, 1, 0.32, 1) both;
                    animation-delay: 0.7s;
                }
            }
        </style>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 700) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>