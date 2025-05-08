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


</head>
<style>
    nav::before {
        width: 100px;
        height: 102px;
        content: "";
        position: absolute;
        background: #4ec0db;
        bottom: -43px;
        left: -15px !important;
        right: 0;
        margin: 0 auto;
        border-radius: 10px 0 10px;
        transform: rotateZ(45deg);
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
        width: 80px !important;
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
</style>

<body>
    <!-- ***** Header Start ***** -->
    <!-- <section class="first-header">
        <div class="container">
            <div class="first-section ">
                <div class="fs1 d-none d-md-flex">
                    <a href="tel:+91 81221 21066">
                        <i class="fa-solid fa-phone"></i>+91 81221 21066
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
                            <a href="tel:+91 81221 21066">
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
        <div class="container ">
            <div class="collapse navbar-collapse" id="navbarNav"
                style="justify-content: end; width: 30%; margin-right: 30px;">
                <ul class="navbar-nav m-0 main-nav menu-none1">
                    <li class="nav-item">
                        <a class="nav-link" href="trips"> Upcoming Trips </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="backpacking-trips"> Backpacking trips</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-right: -55px;" class="nav-link" href="shortbreak-trips">Short Break trips</a>
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
                    <li class="nav-item menu-none">
                        <a class="nav-link" href="trips"> Upcoming Trips </a>
                    </li>
                    <li class="nav-item menu-none">
                        <a class="nav-link" href="backpacking-trips"> Backpacking trips</a>
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
                    <!-- <a href="tel:+91 81221 21066">
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


</body>

</html>