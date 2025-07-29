<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

    <!-- SEO Meta Description -->
    <meta name="description" content="" />
    <meta name="author" content="Themeland" />

    <!-- Title  -->
    <title>Roamers</title>
    <style>
        nav {
            transition: all 0.3s ease;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        nav.scrolled {
            padding: 50px 0;
        }

        nav::before {
            width: 100px;
            height: 102px;
            content: "";
            position: absolute;
            background: #4ec0db;
            bottom: -43px;
            left: 50%;
            border-radius: 10px 0 10px;
            transition: all 0.3s ease;
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
            left: 50%;
            transform: translateX(-50%);
            top: 0;

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

        nav {
            position: sticky;
            top: 0;
            width: 100%;
            background: transparent;
            backdrop-filter: none;
            transition: all 0.4s ease;
            z-index: 1000;
        }

        nav.scrolled {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transform: translateY(0);
        }

        .navbar-brand img {
            width: 80px;
            transition: all 0.3s ease;
        }

        nav.scrolled .navbar-brand img {
            width: 60px;
        }
    </style>
</head>

<style>
    nav::before {
        width: 100px;
        height: 102px;
        content: "";
        position: absolute;
        background: #4ec0db;
        bottom: -43px;
        left: 0%;
        border-radius: 10px 0 10px;
        transition: all 0.3s ease;
    }


</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-0 main-nav menu-none1">
                    <li class="nav-item">
                        <a class="nav-link" href="trips">Upcoming Trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="backpacking-trips">Backpacking trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shortbreak-trips">Short Break trips</a>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand" href="https://roamers.in/">
                <img src="assets/img/Logo/Roamers Logo-01.png" class="d-none d-md-block" alt="Romers-logo">
                <img src="assets/img/Logo/Roamers Logo-01.png" class="img-fluid d-block d-md-none phone-logo"
                    alt="logo">
            </a>

            <button class="navbar-toggler" id="menubtn" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-0 main-nav">
                    <li class="nav-item menu-none">
                        <a class="nav-link" href="trips">Upcoming Trips</a>
                    </li>
                    <li class="nav-item menu-none">
                        <a class="nav-link" href="backpacking-trips">Backpacking trips</a>
                    </li>
                    <li class="nav-item menu-none">
                        <a class="nav-link" href="shortbreak-trips">Short Break trips</a>
                    </li>
                    <li class="nav-item nav-bar">
                        <a class="nav-link" href="#travelgram">Community</a>
                    </li>
                    <li class="nav-item" id='contact'>
                        <a class="nav-link" href="#contact-roamers">Contact</a>
                    </li>
                </ul>
                <div class="header-social-icon pb-2 pb-md-0">
                    <a href="https://www.instagram.com/roamers.in/"><i class="fa-brands fa-instagram insta-bg"></i></a>
                    <a href="mailto:info@roamers.in">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                <div class="call-btn">
                    <a href="tel:+91 8122121066"><i class="fa-solid fa-phone"></i>+91 8122121066</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 700) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>