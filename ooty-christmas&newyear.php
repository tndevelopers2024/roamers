<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/wayanad/Chembra-Peak-Wayanad.jpg"
        width="600" height="600" alt="image for ooty" />
    <title>Roamers - Ooty Trip</title>

    <!-- SEO Meta Description -->
    <meta name="description" content="Roamers - Ooty Trip" />
    <meta name="author" content="Themeland" />
    <meta property="og:image:width" content="700" />
    <meta property="og:image:height" content="500" />

    <!-- Basic Open Graph tags -->
    <meta property="og:title" content="Roamers - Ooty Trip" />
    <meta property="og:description"
        content="Join our Ooty trip for an unforgettable adventure, curated experiences, and new friendships." />
    <meta property="og:image" content="https://roamers.in/assets/img/wayanad/Chembra-Peak-Wayanad.jpg" />
    <meta property="og:url" content="https://roamers.in/assets/img/wayanad/Chembra-Peak-Wayanad.jpg" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Roamers - Ooty Trip" />
    <meta name="twitter:description"
        content="Join our Ooty trip for an unforgettable adventure, curated experiences, and new friendships." />
    <meta name="twitter:image" content="https://roamers.in/assets/img/wayanad/Chembra-Peak-Wayanad.jpg" />

    <!-- Title  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/valley-of-flowers.css" />

    <!-- Favicon  -->
    <link rel="shortcut icon" href="assets/img/Logo/Logo mark-01.png" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ***** All CSS Files ***** -->
    <link rel="stylesheet" href="assets/css/srilanka.css">
    <!-- ***** Font Asesome cdn ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

    <style>
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
            border-radius: 20px;
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

    <!-- Whats app  -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

    <!-- Header -->
    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <main>

        <!-- Banner -->
        <section class="trip-home" class="banner-marigin-section" id="tripSection"
            style="  padding: 350px 0; color: white; position: relative;  ">



            <div class="container-lg" style="position: relative; text-align: center;">

                <h2 class="banner-hight-top ms-2"
                    style="font-size:49px; font-weight: 900; color: #fff; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); letter-spacing: 1px;">
                    <p class="text-white"><?php echo $new_year_text; ?> 🎅</p>
                    OOTY THE QUEEN OF HILLS
                </h2>

                <ul class="banner-hight-bottom p-0"
                    style="list-style: none; ; display: flex; flex-wrap: wrap; justify-content: center;">
                    <li class=" me-2 mobile-small-text" style="display: flex; align-items: center; font-weight: 800;">

                        <span class="ms-2">
                            <span>
                            </span>
                    </li>

                    <li class="mobile-small-text me-2" style="display: flex; align-items: center; font-weight: 800;">

                    </li>
                    <li class="mobile-small-text  me-2"
                        style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">

                    </li>
                    <li class="mobile-small-text  me-2"
                        style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">

                    </li>
                    <li class="mobile-small-text me-2"
                        style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">

                    </li>
                    <li class="mobile-small-text me-2" style="display: flex; align-items: center; font-weight: 800;">

                    </li>
                </ul>

                <!-- this is the dot pagination for the slider -->
                <div id="dotPagination">

                </div>

        </section>

        <!-- Tab -->
        <section class="tab-sections mob-tab">
            <div class="">
                <div class="">
                    <div class="tab-contentt">
                        <a href="#overview" class="tab-box  active">Overview <span></span></a>
                        <a href="#itinerary" class="tab-box ">Itinerary <span></span></a>
                        <a href="#inclusion" class="tab-box ">Inclusion <span></span></a>
                        <a href="#exclusion" class="tab-box ">Exclusion <span></span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner Below -->
        <div class="container">
            <div class="row desktop-inform my-4 g-3">
                <section class="info-highlights">
                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-4 g-4 text-center">

                            <div class="col">
                                <div class="enhanced-box">
                                    <div class="icon-circle">
                                        <!-- <i class='bx  bx-rupee'></i>  -->
                                        <img src="assets/img/icon/rupees.png" alt="">
                                    </div>
                                    <div>
                                        <div class="info-label">Starting Price</div>
                                        <div class="info-value "><span>₹9,499/-</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="enhanced-box">
                                    <div class="icon-circle">
                                        <!-- <i class='bx  bx-hourglass'></i>  -->
                                        <img src="assets/img/icon/duration.png" style="width:35px" alt="">
                                    </div>
                                    <div>
                                        <div class="info-label">Duration</div>
                                        <div class="info-value">3D / 2N</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="enhanced-box">
                                    <div class="icon-circle">
                                        <!-- <i class="fa-solid fa-location-dot"></i> -->
                                        <img src="assets/img/icon/location.png" alt="">
                                    </div>
                                    <div>
                                        <div class="info-label">Pickup & Drop</div>
                                        <div class="info-value">Chennai, Coimbatore</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center">
                                <a href="#" class="btn butn butn__new"
                                    style="width: 100%; max-width: 200px; border-radius: 15px;">
                                    Get Itinerary <i class="fa-solid fa-download ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row mobile-inform mt-4">
                <section class="info-highlights">
                    <div class="">
                        <div class="row text-center">
                            <div class="col-5 px-0">
                                <div class="enhanced-box">
                                    <div class="icon-circle">
                                        <img src="assets/img/icon/duration.png" style="width:35px" alt="">
                                    </div>
                                    <div>
                                        <div class="info-label">Duration</div>
                                        <div class="info-value">3D / 2N</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-7 px-0" style="border-left:1px solid #cbc9c9;">
                                <div class="enhanced-box">
                                    <div class="icon-circle">
                                        <img src="assets/img/icon/location.png" alt="">
                                    </div>
                                    <div>
                                        <div class="info-label">Pickup & Drop</div>
                                        <div class="info-value">Chennai, Coimbatore
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4">
                                <a href="#" class="get-iti-btn" style="width: 100%; border-radius: 15px;">
                                    Get Itinerary <i class="fa-solid fa-download ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <section class="tab-sections desc-tab">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="tab-contentt">
                            <a href="#overview" class="tab-box  active">Overview <span></span></a>
                            <a href="#itinerary" class="tab-box ">Itinerary <span></span></a>
                            <a href="#inclusion" class="tab-box ">Inclusion <span></span></a>
                            <a href="#exclusion" class="tab-box ">Exclusion <span></span></a>
                            <a href="#notes" class="tab-box border-end-0">Notes</a>
                        </div>
                    </div>
                </div>
            </section>

            <br><br>

            <section class="destination mt-0 mt-lg-5"
                style="background-color: white; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-radius: 20px;"
                id="overview">

                <div class="">
                    <div class="row g-4 flex-column-reverse flex-md-row align-items-center">

                        <!-- Text Section -->
                        <div class="col-md-7">
                            <div class="travel-des p-3 p-md-4">
                                <h2 class="mb-3 pt-3">
                                    Ooty: Stay In, Stay Wild, Stay Happy!
                                </h2>

                                <!-- Desktop description (full text) -->
                                <p style="color: #555;" class="desk-desc d-none d-md-block">
                                    Hey there, team! Welcome to Ooty, the Queen of Hills! This trip isn't just about
                                    ticking off tourist spots; it's about soaking up the mountain paradise vibes. We're
                                    talking about wandering through the magical pine forests, feeling the mist at Pykara
                                    Falls, and cruising on Ooty Lake.
                                    <br><br>
                                    Of course, we can't forget about Doddabetta Peak, Lamb's Rock, and camping on
                                    hilltops. And let's not kid ourselves; we're here for some epic South Indian
                                    feasting too. So, let's dive into this adventure and make the most of our time in
                                    this mountain haven! 🏞️🚣‍♂️🏕🍛
                                </p>

                                <!-- Mobile description (truncated with toggle) -->
                                <p style="color: #555;" class="mob-desc d-block d-md-none">
                                    Hey there, team! Welcome to Ooty, the Queen of Hills! This trip isn't just about
                                    ticking off tourist spots; it's about soaking up the mountain paradise vibes. We're
                                    talking about wandering through the magical pine forests, feeling the mist at Pykara
                                    Falls, and cruising on Ooty Lake.
                                    <br>
                                    <span id="dots">...</span>
                                    <span id="moreText" style="display: none;"><br><br>
                                        Of course, we can't forget about Doddabetta Peak, Lamb's Rock, and camping on
                                        hilltops. And let's not kid ourselves; we're here for some epic South Indian
                                        feasting too. So, let's dive into this adventure and make the most of our time
                                        in this mountain haven! 🏞️🚣‍♂️🏕🍛
                                    </span>
                                </p>

                                <!-- Positioned Read More Icon -->
                                <div onclick="toggleReadMore()"
                                    class="position-absolute bottom-1 start-50 translate-middle-x d-block d-md-none">
                                    <span id="readMoreBtn" class="read-more-icon" style="cursor: pointer;">
                                        <i class="fa-solid fa-circle-chevron-down shadow" style="
     color: #4ec0db; 
       background-color:rgb(255, 255, 255); 
     font-size: 16px;
     width: 30px;
     height: 30px;
     display: flex;
     align-items: center;
     justify-content: center;
     border-radius: 50%;
     margin-top: 5px;">
                                        </i>

                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="col-md-5 mt-0">
                            <div class="swiper miniSlider px-px-md-0 py-3">
                                <div class="swiper-wrapper">
                                    <!-- <div class="swiper-slide">
                    <img src="assets/img/wayanad/Edakkal%20caves.jpg" class="img-fluid w-100"
                      alt="Wayanad" style="border-radius: 10px; height: 350px; object-fit: cover;">
                  </div> -->
                                    <div class="swiper-slide">
                                        <img src="assets/img/Ooty/2.JPG" class="img-fluid w-100" alt="Wayanad"
                                            style="border-radius: 10px; height: 350px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- >> Itinerary << -->

            <section class="ilt-up" id="itinerary">
                <div class="container cont-fluid">
                    <div class="row">

                        <div class="col-md-8">
                            <h3 class="mt-5 text-center mt-md-0"
                                style="text-align: start; margin-bottom: 20px; margin-left: 10px;"
                                class="text-center head">Trip Itinerary
                            </h3>
                            <div class="">

                                <div class="accordion" id="accordionExample">

                                    <!-- day 1 -->
                                    <div class="accordion-item mb-4 border-0 overflow-hidden rounded-4">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button
                                                class="accordion-button text-dark fw-bold d-flex justify-content-between align-items-center"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day
                                                        1</span>
                                                    <span> Scenic Drive to Ooty
                                                    </span>
                                                </div>
                                                <i class="bi bi-chevron-down ms-auto transition-all"></i>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="background-color: #f5fdff;">
                                                <ul class="ps-lg-3 ps-0">
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Hey there, Roamers! Meet your team and trip captain at a
                                                        designated point in Chennai, and our journey to the Queen of
                                                        Hills begins!
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        For those joining from Coimbatore, we'll see you in the morning
                                                        at the assigned spot. Get ready for an epic adventure gang
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- day 2 -->
                                    <div class="accordion-item mb-4 border overflow-hidden"
                                        style="border-radius: 10px !important;">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button
                                                class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="d-flex align-items-center w-100">
                                                    <span
                                                        class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day
                                                        2</span>
                                                    <span>Arrival | Tea Estate, Lake & Boating
                                                    </span>
                                                    <i class="bi bi-chevron-down ms-auto transition-arrow"
                                                        style="color:#0c63e4;"></i>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="background-color: #f5fdff;">
                                                <div
                                                    class="d-flex justify-content-start mb-3 gap-4 itinerary-logo-group">
                                                </div>
                                                <ul class="ps-lg-3 ps-0">
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Enjoy the scenic drive, and upon reaching Coonoor, let’s visit
                                                        the largest tea estate, a fresh start for an exhilarating
                                                        adventure.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Immerse yourselves in the beauty of Wellington Lake.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Enjoy a delicious lunch and check in to the hotel in Ooty.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Next, we'll visit the magical Ooty Lake. Revel in its scenic
                                                        surroundings and engage in boating, paddle boating, and other
                                                        adventurous activities with your team.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Indulge in nearby shopping and buy souvenirs for your loved
                                                        ones.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Back to the hotel, relish a delicious dinner, and enjoy the
                                                        night with a campfire, music, games, dance, and lots of fun with
                                                        the whole gang.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- day 3 -->
                                    <div class="accordion-item mb-4 border overflow-hidden"
                                        style="border-radius: 10px;">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button
                                                class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <div class="d-flex align-items-center w-100">
                                                    <span
                                                        class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day
                                                        3</span>
                                                    <span>Ooty, Pine Forest, Pykara & More
                                                    </span>
                                                    <i class="bi bi-chevron-down ms-auto transition-arrow"
                                                        style="color:#0c63e4;"></i>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-white px-4 py-3">
                                                <ul class="ps-lg-3 ps-0">
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Start the day with a refreshing breakfast and let’s resume our
                                                        journey.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        In the morning, we'll head to Doddabetta Peak, the highest point
                                                        in the Nilgiri Mountains, offering panoramic views that will
                                                        leave us spellbound.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        After lunch, let’s take a leisurely stroll through the
                                                        enchanting Pine Forests. Immerse yourself in the serene
                                                        surroundings and relish the tranquility of nature.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Explore Pykara's charm! Witness the beautiful Pykara Falls and
                                                        stunning landscapes. Then let's head to Pykara Lake, relax in
                                                        this peaceful atmosphere, or opt for an exhilarating speed boat
                                                        ride.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Return to the hotel for a scrumptious dinner and unwind in our
                                                        cozy accommodation.
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- day 4 -->
                                    <div class="accordion-item mb-4 border overflow-hidden"
                                        style="border-radius: 10px;">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button
                                                class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <div class="d-flex align-items-center w-100">
                                                    <span
                                                        class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day
                                                        4</span>
                                                    <span>Coonor Sightseeing, Isha & Light Show
                                                    </span>
                                                    <i class="bi bi-chevron-down ms-auto transition-arrow"
                                                        style="color:#0c63e4;"></i>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-white px-4 py-3">
                                                <ul class="ps-lg-3 ps-0">
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Wake up to the breathtaking landscape, and relish breakfast.
                                                        We're heading to beautiful Coonoor, team!
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Our first stop is Lamb's Rock. Go on a short hike surrounded by
                                                        nature and witness the stunning viewpoint.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Next, let’s visit Dolphin's Nose, a stunning viewpoint to make
                                                        nature our best friend.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Alright, Roamers, let's bid farewell to these queenly hills and
                                                        head back to Coimbatore to visit our last point, Isha.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Let's visit Adiyogi and get ready to experience the
                                                        mind-boggling light show.
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        We'll reach our first drop point in Coimbatore, and we'll arrive
                                                        in Chennai by morning. Bye for now, Roamers. Reunion plans for
                                                        next year? You bet!
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                                                            style="font-size: 0.65rem;"></i>
                                                        Goodbyes are never easy, but what a ride it has been! See you
                                                        guys, more hugs!
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- >> Inclusion section << -->
                            <section id="inclusion">
                                <div class="important-notes shadow"
                                    style="border-radius: 10px; background-color:rgb(245, 255, 246);">
                                    <h3 class="head"
                                        style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Inclusion
                                    </h3>
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            Cover all Transportation as mentioned in itinerary.
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            Includes Hotels / Camps. Solo travellers can share with a persons of same
                                            gender travellers.
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            2 Breakfast & 2 Dinner
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            Experienced Team Leaders who are super friendly & knowledgeable
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            Entry fees for Included places and local tax. No hidden charges.
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                                            A-Z Trip assistance from our Travel Experts.
                                        </p>
                                        <span class="mobile-br"><br></span>
                                    </div>
                                </div>
                            </section>

                            <!-- >> Exclusion Section << -->
                            <div class="important-notes shadow"
                                style="border-radius: 10px; background-color: rgb(255, 244, 244);" id="exclusion">
                                <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">
                                    Exclusion</h3>
                                <div>
                                    <p>
                                        <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                                        Personal Expenses like shopping and for optional activities.
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                                        Any other costing involved due to natural calamity or any other forced
                                        circumstance which are out of our control.
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                                        GST (5%) is applicable extra.
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                                        Anything which is not mentioned in the above Inclusions
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- >> Side Sticky Section << -->

                        <div class="col-md-4">

                            <div class="price-sticky" style="position: sticky;">
                                <!-- >> Side Slider Section << -->
                                <div class="priceCard shadow" style="border-radius: 10px;">
                                    <img src="assets/img/Ooty/Ooty%20pic%201.jpg" alt="Wayanad Banner"
                                        style=" object-fit:cover; border-radius: 10px;">
                                </div>

                                <!-- >> Pricing Box Section << -->
                                <div class="price-card shadow p-1" style="border-radius: 10px;">
                                    <div class="p-2">
                                        <!-- Inner box with light grey background -->
                                        <div class="inner-box"
                                            style="background-color: #f0f0f0; padding: 15px; border-radius: 10px;">
                                            <h3 style="text-align: center; margin-bottom: 20px;">Starting Price</h3>
                                            <h5 class="special-offer">
                                                <span class="old-price">
                                                    <strike>₹ 10,000/-</strike>
                                                </span>
                                                <span class="new-price"></span><span class="new-price">₹9,499/-</span>
                                            </h5>

                                            <p>perfect for group adventures and shared <br> memories.</p>
                                            <div class="trip-form p-0">
                                                <a href="ooty-form-christmas&newyear-special.php"
                                                    class="btn butn butn__new bg-" style="border-radius: 10px;">Dates
                                                    & Costing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- >> Ladakh Form Section << -->
                                <div id="form" class="shadow"
                                    style="border: 1px solid #00aaff; border-radius: 10px; padding: 20px; margin: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 450px; background-color: #fff;">
                                    <form>
                                        <h3
                                            style="text-align: center; margin-bottom: 30px; color: #333;">
                                            Let's Map Your Dream Trip</h3>

                                        <div class="input-field mb-3" style="margin-bottom: 20px;">
                                            <label for="name" style="font-size: 16px; color: #333;">Name</label>
                                            <input placeholder="Your Name" type="text" id="name" name="name" required
                                                style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                                        </div>

                                        <div class="input-field mb-3" style="margin-bottom: 20px;">
                                            <label for="email" style="font-size: 16px; color: #333;">Email</label>
                                            <input placeholder="Your Email" type="email" id="email" name="email"
                                                required
                                                style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                                        </div>

                                        <div class="input-field mb-3" style="margin-bottom: 20px;">
                                            <label for="phone" style="font-size: 16px; color: #333;">Phone
                                                Number</label>
                                            <input placeholder="Your Phone Number" type="tel" id="phone" name="phone"
                                                required
                                                style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                                        </div>

                                        <div class="trip-form p-0">
                                            <a href="" class="btn butn butn__new bg-"
                                                style="border-radius: 10px;">Submit</a>
                                        </div>

                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!-- Rewind -->
        <!-- <section class="scroll-section">
            <h3 class="head" style="text-align: center; margin-bottom: 20px;"> <img
                    src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
                    class="align-start me-2">Roamers Rewind <img src="assets/img/valley-of-flowers/fast-backward.png"
                    alt="rewind icon" style="width: 25px;" class="align-start">
            </h3>
            <div class="swiper-container two">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/1-min.jpg" alt="Sri Lanka 1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/ootylake.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/6.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/pykara-lake.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/Ooty%20pic%201.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/Ooty%20photo.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/2.JPG" alt="Sri Lanka 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/Aadhiyogi.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/Tea%20factory-min.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/4.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="assets/img/Ooty/Webp.net-compress-image-57.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-none d-md-none"></div>
            </div>
        </section> -->

        <section class="rewind-section" style="position: relative; overflow: hidden; padding: 60px 0 100px;">
        <div class="rewind-header" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;"> <img
                  src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
                  class="align-start me-2">Roamers Rewind <img src="assets/img/valley-of-flowers/fast-backward.png"
                  alt="rewind icon" style="width: 25px;" class="align-start">
              </h3>
            </div>
        </div>

        <div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/1-min.jpg" alt="Sri Lanka 1">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/ootylake.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/6.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/pykara-lake.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Ooty%20pic%201.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Ooty%20photo.jpg" alt="Sri Lanka 3">
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/2.JPG" alt="Sri Lanka 4">
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Aadhiyogi.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>

                    <!-- slide 9 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Tea%20factory-min.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>

                    <!-- slide 10 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/4.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>

                    <!-- slide 11 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Webp.net-compress-image-57.jpg" alt="Sri Lanka 4">
                        </div>
                    </div>

                </div>

                <!-- Navigation Buttons - Now Inside Swiper for better sync -->
                <div class="rewind-nav-btn prev-btn"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="rewind-nav-btn next-btn"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
        </div>
    </section>

        <!-- Faq Seciton -->
        <section class="faq" id="notes">
            <h2 class="head">FAQ</h2>
            <div class="container">
                <div class="row">
                    <div class="accordion" id="accordionFlushExample">
                        <!--| First |-->
                        <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    class="accordion-button collapsed text-dark fw-bold d-flex justify-content-between align-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    <span class="ms-3" style="font-size: 1rem;">Can I Join solo ?</span>
                                    <i class="fa-solid fa-chevron-down d-block"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white px-4 py-3">
                                    <p style="font-size: 0.875rem; margin-bottom: 0;">Absolutely! Whether you're joining
                                        solo, with friends,
                                        or as a couple, these group trips are
                                        designed to accommodate all types of travelers. Join us for budget-friendly
                                        adventures and check off
                                        more items from your bucket list!</p>
                                </div>
                            </div>
                        </div>

                        <!--| Second |-->
                        <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="headingTwo">
                                <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="ms-3" style="font-size: 1rem;">How about safety for female
                                        travelers?</span>
                                    <i class="fa-solid fa-chevron-down d-block"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white px-4 py-3">
                                    <p style="font-size: 0.875rem; margin-bottom: 0;">Yes, female solo travelers can
                                        confidently join our
                                        group trips. We prioritize their safety by
                                        ensuring a secure environment with trusted trip captains, verified hosts, and
                                        reliable transport
                                        vendors. Your safety is our top priority; any concerns during the trip will be
                                        promptly addressed by
                                        our team. So relax and make the most of your journey!</p>
                                </div>
                            </div>
                        </div>

                        <!--| Third |-->
                        <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="headingThree">
                                <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <span class="ms-3" style="font-size: 1rem;">What is the age requirement to
                                        Join?</span>
                                    <i class="fa-solid fa-chevron-down d-block"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white px-4 py-3">
                                    <p style="font-size: 0.875rem; margin-bottom: 0;">The trips is for 18-39 year olds
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--| Four |-->
                        <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
                            <h2 class="accordion-header" id="headingFour">
                                <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <span class="ms-3" style="font-size: 1rem;">How do confirm my bookings ?</span>
                                    <i class="fa-solid fa-chevron-down d-block"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white px-4 py-3">
                                    <p style="font-size: 0.875rem; margin-bottom: 0;">Send the payment screenshot to
                                        info@roamers.in and
                                        you'll get the confirmation email within 24
                                        hours.</p>
                                </div>
                            </div>
                        </div>

                        <!--| Five |-->
                        <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="headingFive">
                                <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <span class="ms-3" style="font-size: 1rem;">How do trust Roamers?</span>
                                    <i class="fa-solid fa-chevron-down d-block"></i>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white px-4 py-3">
                                    <p style="font-size: 0.875rem; margin-bottom: 0;">You can absolutely trust us! We've
                                        nailed over 500
                                        awesome trips. Check out the great reviews,
                                        speak to our travel consultants, and check the website for further details. Our
                                        offices are in
                                        Chennai and Delhi – we're all about being upfront and reliable all the way… Feel
                                        free to connect.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Mobile Price -->
        <div class="mobile-bottom-bar">
            <div class="bottom-bar-content">
                <div class="price-box ">
                    <h6 class="label">Starts at</h6>
                    <div class="price-info">
                        <span class="price-amount ">₹7,490/-</span>
                        <span class="per-person">(Per Person)</span>
                    </div>
                </div>
                <a href="ooty-form-christmas&newyear-special.php" class="btn-book">Dates & Costing</a>
            </div>
        </div>

    </main>

    <!-- Trips -->
    <?php include('includes/trips.php'); ?>

    <!-- Footer -->
    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>


    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
    <script src="assets/js/active.js"></script>
    <script src="assets/js/dates.js"></script>

    <script src="https://hammerjs.github.io/dist/hammer.js"></script>

    <!-- >> Banner Below << -->
    <script>
        var swiper = new Swiper(".miniSlider", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- Rewind Section -->
    <script>
        var swiper = new Swiper('.swiper-container.two', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            effect: 'coverflow',
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 0,
                stretch: 100,
                depth: 150,
                modifier: 1.5,
                slideShadows: false,
            }
        });
    </script>

    <script>
        window.addEventListener('load', function () {
            const scrollSection = document.querySelector('.scroll-section');
            const swiperContainer = document.querySelector('.swiper-container.two');

            // Initialize Swiper
            const swiper = new Swiper('.swiper-container.two', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                initialSlide: 2,
                loop: true,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 2.5,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                on: {
                    init: function () {
                        // Add initialization classes after Swiper is ready
                        setTimeout(() => {
                            scrollSection.classList.add('loaded');
                            swiperContainer.classList.add('initialized');
                        }, 100);
                    }
                }
            });
        });
    </script>

    <!-- Banner -->
    <script>
        const section = document.getElementById("tripSection");
        const dotContainer = document.getElementById("dotPagination");

        const images = [
            "assets/img/Ooty/1-min.jpg",
        ];

        let index = 0;
        let interval;

        // Create dots
        images.forEach((_, i) => {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            dot.style.opacity = "0";
            dot.addEventListener("click", () => {
                changeImage(i);
                resetInterval();
            });
            dotContainer.appendChild(dot);
            setTimeout(() => {
                dot.style.transition = "opacity 0.3s ease";
                dot.style.opacity = "1";
            }, i * 100);
        });

        const dots = document.querySelectorAll(".dot");

        function changeImage(newIndex) {
            if (newIndex === index) return; // Prevent unnecessary change

            section.classList.add("fade-in");

            // Preload image before applying for smoother transition
            const img = new Image();
            img.src = images[newIndex];
            img.onload = () => {
                requestAnimationFrame(() => {
                    section.style.backgroundImage = `url('${images[newIndex]}')`;
                    section.classList.remove("fade-in");
                    index = newIndex;
                    updateDots();
                });
            };
        }

        function updateDots() {
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === index);
            });
        }

        function nextImage() {
            const nextIndex = (index + 1) % images.length;
            changeImage(nextIndex);
        }

        function startInterval() {
            interval = setInterval(nextImage, 5000); // Slightly longer for breathing space
        }

        function resetInterval() {
            clearInterval(interval);
            startInterval();
        }

        // Init
        section.style.backgroundImage = `url('${images[index]}')`;
        updateDots();
        startInterval();
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

</html>