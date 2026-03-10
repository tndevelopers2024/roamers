<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/ladakh/ladakh-banner.png" width="600"
    height="600" alt="image for ooty" />
  <title>Roamers - Leh Ladakh with Umling la</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Roamers - Leh Ladakh with Umling la" />
  <meta name="author" content="Themeland" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Basic Open Graph tags -->
  <meta property="og:title" content="Roamers - Leh Ladakh with Umling la" />
  <meta property="og:description"
    content="Join our Leh Ladakh with Umling la for an unforgettable adventure, curated experiences, and new friendships." />
  <meta property="og:image" content="https://roamers.in/assets/img/ladakh/ladakh-banner.png" />
  <meta property="og:url" content="https://roamers.in/assets/img/ladakh/ladakh-banner.png" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Roamers - Leh Ladakh with Umling la" />
  <meta name="twitter:description"
    content="Join our Leh Ladakh with Umling la for an unforgettable adventure, curated experiences, and new friendships." />
  <meta name="twitter:image" content="https://roamers.in/assets/img/ladakh/ladakh-banner.png" />

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
    .about-img {
      border-radius: 30px;
      height: 350px !important;
      object-fit: cover;
    }

    .scroll-section {
      background-image: url('assets/img/ladakh/elements/rewind-bg.avif');
      background-size: cover;
      background-position: center;
      padding: 80px 0;
    }

    html,
    body {
      overflow-x: clip !important;
      width: 100% !important;
      position: relative !important;
    }

    @media (min-width: 601px) {
      .main-content {
        padding-top: 85px;
      }
    }

    .ladakh-full-bg {
      background-image: url('assets/img/ladakh/dektop-bg.avif');
      background-size: 100% auto;
      background-position: top;
      background-repeat: no-repeat;
      /* top: 50px; */
    }

    @media (max-width: 767px) {
      .ladakh-full-bg {
        background-image: url('assets/img/ladakh/mobile-bg.avif');
        /* background-size: 100% auto; */
        top: 0px;
      }
    }

    .ladakh-banner-section {
      aspect-ratio: 5760 / 2808;
      margin-top: 68px;
    }

    .banner-hight-top {
      font-size: 49px;
      font-weight: 900;
      color: #fff;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
      letter-spacing: 1px;
    }

    @media (max-width: 768px) {
      .ladakh-banner-section {
        aspect-ratio: 2236 / 2464;
        margin-top: 0px !important;
      }

      .banner-hight-top {
        font-size: 20px;
      }
    }

    @media (max-width: 768px) {
      #accordionExample .accordion-item {
        margin-bottom: 16px !important;
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

  <main class="p-0 m-0 main-content">

    <!-- Full bg Image for Banner and Content -->
    <!-- <style>
      .ladakh-full-bg {
        /* aspect-ratio: 1440 / 4231; */
        /* max-width: 1750px; */
        margin: 0 auto;
        background-size: 100% 100%;
        background-position: top;
        background-repeat: no-repeat;
      }

      /* Mobile and small devices */
      @media (max-width: 767px) {
        .ladakh-full-bg {
          background-image: url('assets/img/ladakh/test/mobile.jpg');
          /* height: 900px; */
          background-size: contain;
          
        }
      }

      /* Tablets (Portrait & Landscape) */
      @media (min-width: 768px) and (max-width: 991px) {
        .ladakh-full-bg {
          background-image: url('assets/img/ladakh/test/a.png');
          /* Replace with tablet image if available */
        }
      }

      /* Desktops and Laptops */
      @media (min-width: 992px) and (max-width: 1199px) {
        .ladakh-full-bg {
          background-image: url('assets/img/ladakh/test/a.png');
          
        }
      }

      /* Large Screens / Extra Large Desktops */
      @media (min-width: 1200px) {
        .ladakh-full-bg {
          background-image: url('assets/img/ladakh/test/a.png');
                    margin-top: 100px !important;

        }
      }
    </style> -->

    <div class="mt-0 mt-md-5 ladakh-full-bg">
      <!-- Banner -->
      <section class="ladakh-banner-section"
        style="color: white; position: relative; display: flex; flex-direction: column; justify-content: center;">
        <!-- Banner Foreground Image -->
        <!-- <img src="assets/img/ladakh/banner-4.jpg" alt="Ladakh Banner" class="d-none d-md-block"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; object-position: top; z-index: 0; opacity: 1;">  -->
        <!-- <img src="assets/img/ladakh/mobile-banner.avif" alt="Ladakh Banner Mobile" class="d-block d-md-none"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; object-position: top; z-index: 0; opacity: 1;">  -->

        <div class="" style="position: relative; z-index: 1; text-align: center;">

          <h2 class="banner-hight-top ms-2">

            Leh Ladakh with Umling la

          </h2>

          <ul class="banner-hight-bottom p-0"
            style="list-style: none; ; display: flex; flex-wrap: wrap; justify-content: center;">
            <li class=" me-2 mobile-small-text" style="display: flex; align-items: center; font-weight: 800;">
              Leh
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>

            <li class="mobile-small-text me-2" style="display: flex; align-items: center; font-weight: 800;">
              Sham Valley
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>
            <li class="mobile-small-text m me-2"
              style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
              Khardung-la
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>
            <li class="mobile-small-text m me-2"
              style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
              Nubra
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>

            <!-- Force next items to a new line on mobile only -->
            <li class="w-100 d-block d-md-none"></li>
            <li class="mobile-small-text m me-2"
              style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
              Pangong
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>
            <li class="mobile-small-text m me-2"
              style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
              Hanle
              <span class="ms-2">
                <span><img src="assets\img\Sirlanka\arrow-icon-by-roamers.png" alt=""
                    style="width:13px; margin-bottom: 3px;"></span>
              </span>
            </li>
            <li class="mobile-small-text m me-2"
              style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
              Umling la
            </li>
          </ul>

          <!-- this is the dot pagination for the slider -->
          <div id="dotPagination">

          </div>

      </section>

      <!-- Tabs -->
      <section class="tab-sections mob-tab">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="tab-contentt">
                <a href="#overview" class="tab-box  active">Overview <span></span></a>
                <a href="#itinerary" class="tab-box ">Itinerary <span></span></a>
                <a href="#inclusion" class="tab-box ">Inclusion <span></span></a>
                <a href="#exclusion" class="tab-box ">Exclusion <span></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Banner Below -->
      <!-- Desktop Information -->
      <div class="container">
        <div class="desktop-inform my-4">
          <img src="assets/img/ladakh/elements/speedometer-1.svg" style="margin-bottom:10px" alt="">
          <section class="info-highlights py-2">
            <div class="container-fluid">
              <div class="row align-items-center">

                <div class="col-lg-3">
                  <div class="enhanced-box justify-content-center">
                    <div>
                      <img src="assets/img/ladakh/icons/rupee.svg" style="width:50px" alt="">
                    </div>
                    <div>
                      <div class="info-label">Starting Price</div>
                      <div class="info-value "><span>₹29,990/-</span></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="enhanced-box justify-content-center">
                    <div>
                      <img src="assets/img/ladakh/icons/time.svg" style="width:50px" alt="">
                    </div>
                    <div>
                      <div class="info-label">Duration</div>
                      <div class="info-value">7D / 6N</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="enhanced-box justify-content-center">
                    <div>
                      <img src="assets/img/ladakh/icons/location.svg" style="width:50px" alt="">
                    </div>
                    <div>
                      <div class="info-label">Pickup & Drop</div>
                      <div class="info-value">Leh - Leh
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 text-center">
                  <a href="#form" class="p-0 border-0 bg-transparent d-inline-block">
                    <img src="assets/img/ladakh/icons/get-itnerary.svg" alt="Get Itinerary"
                      style="width: 100%; max-width: 160px; object-fit: contain;"></a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!-- Mobile Information -->
      <div class="container">
        <div class="row mobile-inform mt-4 mb-5">
          <section class="info-highlights">
            <div class="container-fluid">
              <div class="row text-center">
                <div class="col-5 px-0">
                  <div class="enhanced-box">
                    <div class="icon-circle">
                      <img src="assets/img/ladakh/icons/time.svg" style="width:35px" alt="">
                    </div>
                    <div>
                      <div class="info-label">Duration</div>
                      <div class="info-value">7D / 6N</div>
                    </div>
                  </div>
                </div>

                <div class="col-7 px-0" style="border-left:1px solid #cbc9c9;">
                  <div class="enhanced-box">
                    <div class="icon-circle">
                      <img src="assets/img/ladakh/icons/location.svg" style="width:30px" alt="">
                    </div>
                    <div>
                      <div class="info-label">Pickup & Drop</div>
                      <div class="info-value">Leh - Leh

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col mt-4">
                  <a href="#form" class="p-0 border-0 bg-transparent text-center d-block"
                    style="width: 100%; border-radius: 15px;">
                    <img src="assets/img/ladakh/icons/get-itnerary.svg" alt="Get Itinerary"
                      style="width: 100%; height: 50px; object-fit: contain;"></a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!-- Tabs -->
      <div class="container">
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
      </div>

      <!-- Desktop & Mobile Description (full text) -->
      <div class="container">
        <section class="destination mt-0 mt-lg-5"
          style=" background-color: white; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-radius: 30px; position: relative; overflow: hidden;"
          id="overview">
          <img style="width:820px; margin-top:210px" src="assets/img/ladakh/elements/about-bg.png" class="about-bg-img"
            alt="">

          <div class="">
            <div class="row g-4 flex-column-reverse flex-md-row align-items-center">

              <!-- Text Section -->
              <div class="col-md-7">
                <div class="travel-des p-3 p-md-4">
                  <h2 class="mb-3 pt-3">
                    High Passes & Higher Vibes – Discover Ladakh
                  </h2>

                  <!-- Desktop description (full text) -->
                  <p style="color: #555;" class="desk-desc d-none d-md-block">
                    Get ready to experience Ladakh like never before! Whether you're riding through the rugged mountains
                    on a bike or joining the journey in a comfy Traveller, this adventure covers it all: Leh, Khardung
                    La, Nubra Valley, Pangong Lake, Hanle, Umling La, and more. From epic roads and dramatic landscapes
                    to starry nights and unforgettable memories, this trip is built for those who crave both adventure
                    and adventure only!
                    <br><br>
                    Ride through some of the world’s highest motorable passes, enjoy camel rides and ATVs in Nubra, and
                    feel the calm magic of Pangong’s crystal-clear waters. Reach Umling La, sitting even higher than
                    Everest Base Camp. This trip blends adventure, fun, and raw beauty into one epic experience. It’s
                    not just a Ride, it’s the kind of journey you’ll remember forever.

                  </p>

                  <!-- Mobile description (truncated with toggle) -->
                  <p style="color: #555;" class="mob-desc d-block d-md-none">
                    Get ready to experience Ladakh like never before! Whether you're riding through the rugged mountains
                    on a bike or joining the journey in a comfy Traveller, this adventure covers it all: Leh, Khardung
                    La, Nubra Valley, Pangong Lake, Hanle, Umling La, and more. From epic roads and dramatic landscapes
                    to starry nights and unforgettable memories, this trip is built for those who crave both adventure
                    and adventure only!

                    <br>
                    <span id="dots">...</span>
                    <span id="moreText" style="display: none;"><br><br>
                      Ride through some of the world’s highest motorable passes, enjoy camel rides and ATVs in Nubra,
                      and feel the calm magic of Pangong’s crystal-clear waters. Reach Umling La, sitting even higher
                      than Everest Base Camp. This trip blends adventure, fun, and raw beauty into one epic experience.
                      It’s not just a Ride, it’s the kind of journey you’ll remember forever.

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
                      <img src="assets/img/ladakh/ladakh-img2.jpg" class="img-fluid w-100 about-img" alt="Wayanad">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>

      <!-- Itinerary -->
      <section class="ilt-up" id="itinerary">
        <div class="container cont-fluid">
          <div class="row">

            <div class="col-md-8 mt-0 mt-md-5 ">
              <h3 class="mt-5 mt-md-0 head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">
                Trip Itinerary
              </h3>
              <div>
                <div class="accordion" id="accordionExample">
                  <!-- day 1 -->
                  <div class="accordion-item mb-4 border-0 overflow-hidden rounded-4"
                    style="border-radius: 30px !important;">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button text-dark fw-bold d-flex justify-content-between align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <div class="d-flex align-items-center">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 1</span>
                          <span>Arrival in Leh - Leisure Day for Accumilisation</span>
                        </div>
                        <i class="bi bi-chevron-down ms-auto transition-all"></i>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body" style="background-color: #f5fdff;">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Arrive at Leh airport after a stunning flight over the majestic Himalayas.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Meet Roamers representative who will assist you with a comfortable transfer to your hotel.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Complete the check-in formalities and meet your Co-Travellers & leisure
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Compulsory Accumilisation, Shanti Stupa optional Visit
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Go for a short walk around your hotel, Visit Leh Market, accumulate yourself to the altitude
                            better.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay in Leh
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day 2 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 2</span>
                          <span>Leh to Nubra Valley via Khardung La</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Start your day with a delicious breakfast at your hotel in Leh, get ready for the
                            adventure ahead.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Gear up for an unforgettable drive as you begin your ascent along one of the highest
                            motorable roads in the world.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Feel the thrill as you head towards Nubra Valley, nestled between the Karakoram and Ladakh
                            ranges, offering dramatic views all around.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            The first major stop is Khardung-La Pass, sitting at a staggering 5,359 meters, where
                            you'll have time to take in the sweeping mountain vistas.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Descend along the route tracing the Shyok River, entering the stunning landscapes of Nubra
                            Valley, also known as Ldorma or the Valley of Flowers.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            As you approach Diskit, the heart of Nubra, visit the famed Diskit Monastery, home to a
                            towering 106-foot statue of Maitreya Buddha overlooking the valley.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Later, head to the white-sand dunes of Hunder, a cold desert with surreal scenery straight
                            out of a dream.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Here, you can opt to enjoy unique experiences like a double-humped Bactrian camel ride or
                            an adventurous ATV ride across the dunes (at your own cost).
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            After a full day of exploration, make your way to the campsite or hotel where you’ll be
                            staying.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay in Nubra Valley.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day 3 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingFour">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 3</span>
                          <span>Transfer from Nubra to charming Pangong</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Wake up to the serene views of Nubra Valley and prepare for yet another adventurous drive.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            En route, pass through the picturesque villages of Agam and Shyok, known for their
                            untouched beauty and peaceful landscapes.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            As the journey unfolds, you'll be greeted by the first glimpses of ‘Pangong Lake’ an
                            awe-inspiring sight that makes the ride truly worthwhile.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Situated at an altitude of 4,300 meters, Pangong is the world’s highest saltwater lake,
                            stretching over 136 km with a width of around 4 km.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Spend time soaking in the tranquility of the lake and admiring how the surrounding
                            mountains reflect beautifully in its ever-changing blue waters.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Don't forget to stop by the famous "3 Idiots" movie spot, a perfect place for fun photos
                            and memories.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            After taking in the views, check in at your campsite by the lakeside and enjoy a warm,
                            delicious dinner.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay near Pangong Lake.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day 4 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingFive">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 4</span>
                          <span>Transfer from Pangong to Hanle via Rezang La War Memorial</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Wake up to the breathtaking beauty of Pangong Lake and enjoy a warm breakfast at your
                            lakeside campsite.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Afterward, gear up for an offbeat and adventurous drive to the remote village of Hanle,
                            nestled deep in the Changthang region of Ladakh.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Begin by passing through the quiet town of Chushul, with a stop at the historically
                            significant Rezang La War Memorial.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Built in memory of the brave soldiers who laid down their lives in the 1962 Indo-China
                            War, the memorial is a powerful reminder of their courage and sacrifice.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            After paying your respects, continue the journey with a lunch stop along the way,
                            depending on the time and location.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Drive across the scenic Loma Bridge spanning the Indus River and make your way through
                            Ladakh’s striking high-altitude terrain.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            By evening, arrive in the peaceful village of Hanle and check in to your welcoming
                            homestay for some well-deserved rest & a delicious dinner.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay in Hanle.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day 5 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingSix">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseSix">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 5</span>
                          <span>Day Excursion to Umling La</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Start your day with a hearty breakfast at the homestay and prepare for one of the most
                            exciting adventures of your Ladakh journey.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Buckle up and set out on a thrilling drive to Umling La, the highest motorable road in the
                            world.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Along the way, cross Photi La Pass, standing tall at 5,524 meters, offering dramatic views
                            of the rugged Ladakhi terrain.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Enjoy the raw beauty of the high-altitude desert as the road winds through surreal
                            landscapes and remote valleys.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Arrive at Umling La Pass, located at an astonishing altitude of 5,640 meters, even higher
                            than the Everest Base Camp.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            This high mountain pass is also the origin of the Umlung stream, a tributary of the
                            Kiungdul River which flows into the Indus.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            On the return journey, cross another spectacular pass 'Nurbu La' at an altitude of 5,282
                            meters.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Take time to soak in the panoramic views and click photos to capture this
                            once-in-a-lifetime experience.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Later, enjoy lunch and begin your drive back to Hanle.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            If time allows, visit the renowned Hanle Observatory, India's highest astronomical
                            observatory known for cutting-edge space research.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Reach your homestay by evening, where a warm dinner awaits and you can relax under the
                            vast night sky.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay in Hanle.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day 6 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingSeven">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 6</span>
                          <span>Transfer from Hanle to Leh via Chumathang</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Wake up early to witness the soft hues of sunrise painting the Ladakh mountains.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            After breakfast, it’s time to bid farewell to the peaceful village of Hanle and begin your
                            journey back to Leh.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Enjoy the drive through some of Ladakh’s most scenic landscapes as you pass through the
                            charming towns of Chumathang, Upshi, Karu, Thikshey, and Shey.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Arrive in Leh by evening and check in to your hotel, where you can relax and freshen up
                            after the long journey.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Later, head out to explore the vibrant Leh market at your own pace, perfect for shopping,
                            cafe hopping, and tasting local delicacies.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Overnight stay in Leh.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- day  -->
                  <!-- <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingSeven">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                        aria-controls="collapseEight">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 7</span>
                          <span>Explore Leh & Sham Valley - Evening at Leh Market</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Wake up to a refreshing morning in Leh and enjoy a hearty breakfast at the hotel to fuel up
                            for the day.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Begin your journey by visiting iconic sights, starting with the beautiful Shanti Stupa,
                            offering panoramic views of Leh town and the surrounding mountains.

                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Drive towards the scenic Sham Valley, beginning with the Sangam viewpoint where the Indus
                            and Zanskar rivers meet in a mesmerizing confluence.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Continue to Magnetic Hill, a place famous for its fascinating optical illusion that makes
                            vehicles appear to roll uphill.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Visit the revered Pathar Sahib Gurudwara, where you'll hear the fascinating legend of Guru
                            Nanak Dev Ji and the sacred boulder that carries his imprint.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            On the way back to Leh, visit the Hall of Fame, a moving museum and memorial that honors the
                            bravery and sacrifice of Indian soldiers in the Indo-Pak conflict.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;">

                            </i>
                            In the evening, enjoy your free time exploring the lively Leh market, buy souvenirs for
                            your loved ones and relax at one of the cozy cafés.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;">
                            </i>
                            Overnight stay in Leh.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> -->
                  <!-- day 7 -->
                  <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 30px  !important;;">
                    <h2 class="accordion-header" id="headingNine">
                      <button
                        class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                        aria-controls="collapseNine">
                        <div class="d-flex align-items-center w-100">
                          <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 7</span>
                          <span>Ladakh #MeTime | Farewell</span>
                          <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                        </div>
                      </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body bg-white px-4 py-3">
                        <ul class="ps-lg-3 ps-0">
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Wake up and get ready for a relaxed morning as we prepare to enjoy a delightful breakfast,
                            your final day in Ladakh.
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                            Bid goodbye to Ladakh. Cherishing countless memories, incredible
                            experiences and new friendships. Drop to leh Airport (shuttle)
                          </li>
                          <li>
                            <i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;">
                            </i>
                            If you have late flights visit Leh Gurudhwara or magnetic hill. Bye Roamers, What an
                            adventure! Will see next time.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Inclusion section -->
              <section id="inclusion">
                <div class="important-notes shadow" style="border-radius: 30px; background-color:rgb(245, 255, 246);">
                  <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Inclusion</h3>
                  <div>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Bike rental for 8 days for those opting for the biking experience
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Fuel included for the entire bike journey, covering the route from Leh to Leh
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Comfortable travel in a Tempo Traveler or cab for those selecting the non-biking option
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Accommodation for 6 nights:
                    <ul>
                      <li>
                        <p>2 nights in a hotel in Leh</p>
                      </li>
                      <li>
                        <p>1 night in Swiss tents at Nubra Valley</p>
                      </li>
                      <li>
                        <p>1 night in lakeside camps at Pangong Tso</p>
                      </li>
                      <li>
                        <p>2 nights in a traditional homestay in Hanle (triple or quad sharing basis)</p>
                      </li>
                    </ul>
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      12 meals throughout the trip:
                    <ul>
                      <li>
                        <p>Day 1 – Dinner</p>
                      </li>
                      <li>
                        <p>Day 2 to Day 6 – Breakfast and Dinner</p>
                      </li>
                      <li>
                        <p>Day 7 – Breakfast</p>
                      </li>
                    </ul>
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Mechanical support team available for biking routes
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      All necessary inner line permits arranged for the entire itinerary
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Charges covered for driver stay, tolls, parking, and other on-road expenses
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Trip led by an experienced team captain
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Oxygen cylinder available 24/7 in the vehicle for emergency use
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Riding safety gear provided including helmets (standard size 58-60 cm), riding jackets, gloves
                      (for riders), and knee guards
                      <br>
                      <span style="font-size: 0.95em; color: #555;">

                      </span>
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      Airport pick-up or drop included based on group flight timings
                      <br>
                      <span style="font-size: 0.95em; color: #555;">

                      </span>
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      <span style="font-size: 0.95em; color: #555;">
                        (Kindly note: Private taxi service for individual transfers will not be provided; group
                        shuttles will operate at fixed time slots based on flight schedules)
                      </span>
                    </p>
                    <p>
                      <i class="fa-solid fa-circle-check me-2 pulse" style="color: #1fa463;"></i>
                      <span style="font-size: 0.95em; color: #555;">
                        <b>Note:</b> It's advisable to carry your own helmet for better fit and comfort
                      </span>
                    </p>
                    <span class="mobile-br"><br></span>
                  </div>
                </div>
              </section>

              <!-- Exclusion Section -->
              <div class="important-notes shadow" style="border-radius: 30px; background-color: rgb(255, 244, 244);"
                id="exclusion">
                <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Exclusion</h3>
                <div>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Applicable 5% GST will be charged over and above the package cost.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Any meals, snacks, or beverages not specifically mentioned in the inclusions, such as lunch during
                    travel days, mineral water, or alcoholic drinks.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Personal expenses including but not limited to laundry, telephone bills, souvenirs, entry fees to
                    monasteries or monuments, camera/video charges, tips, camel rides, or river rafting.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Expenses incurred due to unforeseen circumstances like natural disasters, landslides, or road
                    closures. Such costs are to be handled directly by the traveler on-site.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Any services or items not explicitly listed under the inclusions section.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: #ff6b6b;"></i>
                    Any damage caused to the motorcycle (excluding engine damage) during the trip will be the
                    responsibility of the rider and must be covered by them.
                  </p>
                </div>
              </div>

            </div>

            <!-- Side Sticky Section -->
            <div class="col-md-4">

              <div class="price-sticky" style="position: sticky;">
                <!-- Side Slider Section -->
                <div class="priceCard shadow" style="border-radius: 30px;">
                  <video src="assets/video/ladakh.mov" autoplay loop muted playsinline alt="Wayanad Banner"
                    style="object-fit:cover; border-radius: 30px;">
                  </video>
                </div>

                <!-- >> Pricing Box Section << -->
                <div class="price-card shadow p-1" style="border-radius: 30px;">
                  <div class="p-2">
                    <!-- Inner box with light grey background -->
                    <div class="inner-box" style="background-color: #f0f0f0; padding: 15px; border-radius: 10px;">
                      <h3 style="text-align: center; margin-bottom: 20px;">Starting Price</h3>
                      <h5 class="special-offer">
                        <span class="old-price">
                          <strike>₹ 30,000/-</strike>
                        </span>
                        <span class="new-price">₹29,990/-</span>
                      </h5>

                      <p>Perfect for group adventures and shared <br> memories.</p>
                      <div class="trip-form p-0">
                        <a href="ladakh-form.php" class="p-0 border-0 text-center d-block"
                          style="background: transparent !important; border-radius: 30px;"><img
                            src="assets/img/ladakh/icons/date&costing.svg" alt="Dates & Costing"
                            style="height: 38px; width: 100%; object-fit: contain;"></a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- >> Ladakh Form Section << -->
                <div id="form" class="shadow"
                  style="border: 1px solid #00aaff; border-radius: 30px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 450px; background-color: #fff; background-image: url('assets/img/ladakh/elements/form.svg'); background-size: contain; background-position: bottom; background-repeat: no-repeat;">
                  <form>
                    <h3 style="text-align: center; margin-bottom: 30px; color: #333;">
                      Let's Map Your Dream Trip</h3>

                    <div class="input-field mb-3" style="margin-bottom: 20px;">
                      <label for="name" style="font-size: 16px; color: #333;">Name</label>
                      <input placeholder="Your Name" type="text" id="name" name="name" required
                        style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 30px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                    </div>

                    <div class="input-field mb-3" style="margin-bottom: 20px;">
                      <label for="email" style="font-size: 16px; color: #333;">Email</label>
                      <input placeholder="Your Email" type="email" id="email" name="email" required
                        style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 30px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                    </div>

                    <div class="input-field mb-3" style="margin-bottom: 20px;">
                      <label for="phone" style="font-size: 16px; color: #333;">Phone Number</label>
                      <input placeholder="Your Phone Number" type="tel" id="phone" name="phone" required
                        style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 30px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                    </div>

                    <div class="trip-form p-0">
                      <button type="submit" class="btn butn butn__new bg- w-100"
                        style="border-radius: 30px; width: 100%;">Submit</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>


    </div>

    <!-- Rewind -->
    <section class="scroll-section">
      <h3 class="head" style="text-align: center; margin-bottom: 50px;"> <img
          src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
          class="align-start me-2">Roamers Rewind <img src="assets/img/valley-of-flowers/fast-backward.png"
          alt="rewind icon" style="width: 25px;" class="align-start"></h3>
      <div class="swiper-container two">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img3.jpg" alt="ladakh-img-1">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladak-img1.jpg" alt="ladakh-img-2">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img5.jpg" alt="ladakh-img-3">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img6.jpg" alt="ladakh-img-4">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img4.jpeg" alt="ladakh-img-5">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img10.webp" alt="ladakh-img-6">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-img6.jpeg" alt="ladakh-img-7">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-image">
              <img src="assets/img/ladakh/ladakh-image12.jpg" alt="ladakh-img-8">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination d-none d-md-none"></div>
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
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                  aria-controls="collapseOne">
                  <span class="ms-3" style="font-size: 1rem;">Can I Join solo ?</span>
                  <i class="fa-solid fa-chevron-down d-block"></i>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.875rem; margin-bottom: 0;">Absolutely! Whether you're joining solo, with
                    friends,
                    or as a couple, these group trips are
                    designed to accommodate all types of travelers. Join us for budget-friendly adventures and check off
                    more items from your bucket list!</p>
                </div>
              </div>
            </div>

            <!--| Second |-->
            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  <span class="ms-3" style="font-size: 1rem;">How about safety for female travelers?</span>
                  <i class="fa-solid fa-chevron-down d-block"></i>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.875rem; margin-bottom: 0;">Yes, female solo travelers can confidently join our
                    group trips. We prioritize their safety by
                    ensuring a secure environment with trusted trip captains, verified hosts, and reliable transport
                    vendors. Your safety is our top priority; any concerns during the trip will be promptly addressed by
                    our team. So relax and make the most of your journey!</p>
                </div>
              </div>
            </div>

            <!--| Third |-->
            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 10px;">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  <span class="ms-3" style="font-size: 1rem;">What is the age requirement to Join?</span>
                  <i class="fa-solid fa-chevron-down d-block"></i>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.875rem; margin-bottom: 0;">The trips is for 18-39 year olds</p>
                </div>
              </div>
            </div>

            <!--| Four |-->
            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
              <h2 class="accordion-header" id="headingFour">
                <button
                  class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  <span class="ms-3" style="font-size: 1rem;">How do confirm my bookings ?</span>
                  <i class="fa-solid fa-chevron-down d-block"></i>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.875rem; margin-bottom: 0;">Send the payment screenshot to info@roamers.in and
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
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                  aria-controls="collapseFive">
                  <span class="ms-3" style="font-size: 1rem;">How do trust Roamers?</span>
                  <i class="fa-solid fa-chevron-down d-block"></i>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.875rem; margin-bottom: 0;">You can absolutely trust us! We've nailed over 500
                    awesome trips. Check out the great reviews,
                    speak to our travel consultants, and check the website for further details. Our offices are in
                    Chennai and Delhi – we're all about being upfront and reliable all the way… Feel free to connect.
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
            <span class="price-amount ">₹29,990/-</span>
            <span class="per-person">(Per Person)</span>
          </div>
        </div>
        <a href="ladakh-form.php" class="p-0 border-0 text-center d-block"
          style="background: transparent !important; border-radius: 30px; width: 100%; max-width: 180px;"><img
            src="assets/img/ladakh/icons/date&costing.svg" alt="Dates & Costing"
            style="height: 38px; width: 100%; object-fit: contain;"></a>
      </div>
    </div>

  </main>

  <!-- Trips -->
  <?php include('includes/trips.php'); ?>

  <!-- Footer -->
  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>

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
          modifier: 1,
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

    // const images = [
    //   "assets/img/ladakh/banner.png",
    // ];

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

</body>

</html>