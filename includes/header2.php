<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- SEO Meta Description -->
    <meta name="description" content="" />
    <meta name="author" content="Themeland" />

    <!-- Title  -->
    <title>Roamers</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        /* Global Font Family */
        * {
            font-family: "Urbanist", sans-serif !important;
        }

        /* Specific element font declarations */
        body, html {
            font-family: "Urbanist", sans-serif !important;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Urbanist", sans-serif !important;
        }

        p, span, div, a, li, ul, ol {
            font-family: "Urbanist", sans-serif !important;
        }

        input, textarea, select, button {
            font-family: "Urbanist", sans-serif !important;
        }

        .nav-link, .dropdown-item, .navbar-brand {
            font-family: "Urbanist", sans-serif !important;
        }

        /* Override any Bootstrap or other framework fonts */
        .btn, .form-control, .navbar, .dropdown-menu {
            font-family: "Urbanist", sans-serif !important;
        }

        /* Exclude icons from font-family override */
        .fa, .fas, .far, .fab, .fal, .fad,
        [class*="fa-"], [class*="fas-"], [class*="far-"], [class*="fab-"],
        .icon, .flaticon, [class*="flaticon-"],
        .material-icons, .glyphicon,
        i[class*="fa"], i[class*="fas"], i[class*="far"], i[class*="fab"] {
            font-family: inherit !important;
        }

        /* Ensure Font Awesome icons display properly */
        .fa-instagram:before,
        .fa-envelope:before,
        .fa-phone:before,
        .fa-solid:before,
        .fa-brands:before,
        .fa-regular:before {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", "Font Awesome 6 Regular", "FontAwesome" !important;
        }

        /* Specific icon overrides */
        .fa-brands.fa-instagram,
        .fa-solid.fa-envelope,
        .fa-solid.fa-phone,
        .fa-brands,
        .fa-solid,
        .fa-regular {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", "Font Awesome 6 Regular", "FontAwesome" !important;
        }

        /* Override external CSS files with higher specificity */
        body, html, 
        body *, html *,
        .container *, .section *,
        .navbar *, .nav *,
        .footer *, .header *,
        .main *, .content *,
        .wrapper *, .page * {
            font-family: "Urbanist", sans-serif !important;
        }

        /* Specific overrides for common elements */
        h1, h2, h3, h4, h5, h6,
        p, span, div, a, li, ul, ol,
        input, textarea, select, button,
        .nav-link, .dropdown-item, .navbar-brand,
        .btn, .form-control, .navbar, .dropdown-menu,
        .footer-text, .footer-widget, .copyright-text,
        .header-social-icon, .call-btn {
            font-family: "Urbanist", sans-serif !important;
        }

        nav::before {
            /* width: 100px;
            height: 102px;
            content: "";
            position: absolute;
            background: #4ec0db;
            bottom: -43px;
            left: -15px !important;
            right: 0;
            margin: 0 auto;
            border-radius: 10px 0 10px;
            transform: rotateZ(45deg); */
            display:none !important;
        }

        @media (max-width: 600px) {
            .navbar-brand img {
                width: 100px;
                height: auto;
                padding: 0;
                position: relative;
                margin-top: -8px !important;
                margin-left: -35px !important;
            }

            .navbar-brand {
                width: 125px !important;
            }

            #navbarNav {
                margin-top: -26px;
                padding-bottom: 35px !important;
            }

            .call-btn a {
                margin-left: 10px !important;
            }

            .call-btn {
                margin-top: 15px !important;
            }

            #contact {
                display: none;
            }

            .header-social-icon {
                margin-left: 12px !important;
            }

            #navbarNav{
                margin-left: 0px !important;
            }
        }

        .navbar-brand img {
            width: 50px !important;
            height: auto;
            padding: 0;
            position: absolute;
            left: -12px !important;
            right: 0;
            margin: -35px auto 0;
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
        .navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl{
          background:#4ec0db !important;
        }

        /* Dropdown Styles */
        .dropdown-menu {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            padding: 10px 0;
            margin-top: 5px;
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            color: #333;
            padding: 8px 20px;
            transition: all 0.3s ease;
            border-radius: 4px;
            margin: 2px 10px;
            display: block;
            text-decoration: none;
        }

        .dropdown-item:hover {
            background-color: #4ec0db;
            color: white;
            transform: translateX(5px);
            text-decoration: none;
        }

        .nav-item.dropdown {
            position: relative;
        }

        .dropdown-toggle::after {
            content: '▼';
            margin-left: 5px;
            font-size: 10px;
            transition: transform 0.3s ease;
        }

        .dropdown.show .dropdown-toggle::after {
            transform: rotate(180deg);
        }

        @media (max-width: 991px) {
            .dropdown-menu {
                background: transparent;
                border: none;
                box-shadow: none;
                padding-left: 20px;
            }

            .dropdown-item {
                color: #666;
                padding: 5px 15px;
                margin: 0;
            }

            .dropdown-item:hover {
                background-color: transparent;
                color: #4ec0db;
                transform: none;
            }
        }
    </style>
</head>

<body>
    <!-- ***** Header Start ***** -->
    <!-- <section class="first-header">
        <div class="container">
            <div class="first-section ">
                <div class="fs1 d-none d-md-flex">
                    <a href="tel:+91 81221 21066">
                        <i class="fa-solid fa-phone"></i>+91 81221 21066
                    </a>
                    <a href="mailto:info@roamers.in">
                        <i class="fa-solid fa-envelope"></i>info@roamers.in
                    </a>
                </div>
                <div class="fs2">

                    <ul class="fs-list">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/roamers.in/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="ms-2 thread-bg"><img src="assets/img/icon/Threads.svg"
                                    style="width: 14px;" /></a>
                        </li>
                        <li class="d-block d-md-none">
                            <a href="tel:+91 81221 21066">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </li>
                        <li class="d-block d-md-none">
                            <a href="mailto:info@roamers.in">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <nav class="navbar navbar-expand-lg navbar-light " id="mynav">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav"
                style="justify-content: end; width: 30%; margin-right: 30px;">
                <ul class="navbar-nav m-0 main-nav menu-none1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Upcoming Trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ladakh-umlingla">Ladakh Umlingla</a></li>
                            <li><a class="dropdown-item" href="valley-of-flowers">Valley of Flowers</a></li>
                            <li><a class="dropdown-item" href="kedarkantha">Kedarkantha Trek</a></li>
                            <li><a class="dropdown-item" href="spiti-valley">Spiti Valley</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Backpacking trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="andaman">Andaman Islands</a></li>
                            <li><a class="dropdown-item" href="kerala">Kerala Backwaters</a></li>
                            <li><a class="dropdown-item" href="meghalaya">Meghalaya</a></li>
                            <li><a class="dropdown-item" href="srilanka">Sri Lanka</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="margin-right: -55px;" class="nav-link dropdown-toggle" href="#">
                            Short Break trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ooty">Ooty Weekend</a></li>
                            <li><a class="dropdown-item" href="kodaikanal">Kodaikanal</a></li>
                            <li><a class="dropdown-item" href="pondicherry">Pondicherry</a></li>
                            <li><a class="dropdown-item" href="varkala-packages">Varkala Beach</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="https://roamers.in/">
                <img src="assets/img/Logo/Roamers Logo-01.png" class="d-none d-md-block" alt="Romers-logo">
                <img src="assets/img/Logo/Roamers Logo-01.png"
                    style="width: 53px !important; margin-top: -8px !important;"
                    class="img-fluid d-block d-md-none phone-logo" alt="logo"></a>
            <button class="navbar-toggler" id="menubtn" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="margin-left: 100px;" class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-0 main-nav">
                    <li class="nav-item dropdown menu-none">
                        <a class="nav-link dropdown-toggle" href="#">
                            Upcoming Trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ladakh-umlingla">Ladakh Umlingla</a></li>
                            <li><a class="dropdown-item" href="valley-of-flowers">Valley of Flowers</a></li>
                            <li><a class="dropdown-item" href="kedarkantha">Kedarkantha Trek</a></li>
                            <li><a class="dropdown-item" href="spiti-valley">Spiti Valley</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-none">
                        <a class="nav-link dropdown-toggle" href="#">
                            Backpacking trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="andaman">Andaman Islands</a></li>
                            <li><a class="dropdown-item" href="kerala">Kerala Backwaters</a></li>
                            <li><a class="dropdown-item" href="meghalaya">Meghalaya</a></li>
                            <li><a class="dropdown-item" href="srilanka">Sri Lanka</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-none">
                        <a class="nav-link dropdown-toggle" href="#">
                            Short Break trips
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ooty">Ooty Weekend</a></li>
                            <li><a class="dropdown-item" href="kodaikanal">Kodaikanal</a></li>
                            <li><a class="dropdown-item" href="pondicherry">Pondicherry</a></li>
                            <li><a class="dropdown-item" href="varkala-packages">Varkala Beach</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-bar">
                        <a class="nav-link" href="#travelgram">Community</a>
                    </li>
                    <li class="nav-item" id='contact'>
                        <a class="nav-link" href="#contact-roamers">Contact</a>
                    </li>
                </ul>
                <div class="header-social-icon pb-2 pb-md-0">
                    <!-- <a href="tel:+91 81221 21066">
                        <i class="fa-solid fa-phone"></i>
                    </a> -->
                    <a href="https://www.instagram.com/roamers.in/"><i class="fa-brands fa-instagram insta-bg"></i></a>

                    <a href="mailto:info@roamers.in">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                <div class="call-btn">
                    <a href="tel:+91 8122121066"> <i class="fa-solid fa-phone"> </i>+91 8122121066</a>
                </div>
            </div>

            <!-- <div class="nav-button">
        <a href="" class="nav-btn btn"><i class="fa-solid fa-user-group"></i> Register</a>
      </div> -->
        </div>
    </nav>
    <!-- ***** Header End ***** -->

    <!-- <script>
        var navbar = document.querySelector('nav')

        window.onscroll = function () {

            // pageYOffset or scrollY
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled')
            } else {
                navbar.classList.remove('scrolled')
            }
        }
        const sidemenu = document.querySelector('#navbarNav');
        const menubtn = document.querySelector('#menubtn');

        menubtn.addEventListener('click', () => {
            if (sidemenu.style.display === "block") {
                sidemenu.style.display = "none !important";
            } else {
                sidemenu.style.display = "block !important";
            }
        })

    </script> -->

    <script>
        // Dropdown functionality
        document.addEventListener('DOMContentLoaded', function () {
            console.log('DOM loaded, initializing dropdowns in header2...');
            
            // Get all dropdown toggles
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            console.log('Found dropdown toggles:', dropdownToggles.length);
            
            dropdownToggles.forEach(function (toggle) {
                console.log('Adding click listener to:', toggle.textContent.trim());
                
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    console.log('Dropdown clicked:', this.textContent.trim());
                    
                    const dropdown = this.closest('.dropdown');
                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                    
                    // Close all other dropdowns first
                    document.querySelectorAll('.dropdown').forEach(function (otherDropdown) {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('show');
                            const otherMenu = otherDropdown.querySelector('.dropdown-menu');
                            if (otherMenu) {
                                otherMenu.classList.remove('show');
                            }
                        }
                    });
                    
                    // Toggle current dropdown
                    dropdown.classList.toggle('show');
                    dropdownMenu.classList.toggle('show');
                    
                    console.log('Dropdown toggled, show class:', dropdown.classList.contains('show'));
                });
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.dropdown')) {
                    document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                        dropdown.classList.remove('show');
                        const menu = dropdown.querySelector('.dropdown-menu');
                        if (menu) {
                            menu.classList.remove('show');
                        }
                    });
                }
            });
            
            // Close dropdowns on escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                        dropdown.classList.remove('show');
                        const menu = dropdown.querySelector('.dropdown-menu');
                        if (menu) {
                            menu.classList.remove('show');
                        }
                    });
                }
            });
        });

        // Scroll effect
        var navbar = document.querySelector('nav')
        window.onscroll = function () {
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled')
            } else {
                navbar.classList.remove('scrolled')
            }
        }
    </script>

    <!-- Bootstrap JavaScript -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Global Dropdown JavaScript -->
    <script src="assets/js/dropdowns.js"></script>

</body>

</html>