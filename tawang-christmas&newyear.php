<?php
include_once('includes/site-config.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content="https://www.roamers.in/assets/img/tawang/home-festive-card.avif"
    width="600" height="600" alt="Tawang Christmas & New Year Special" />
  <title>Roamers - Tawang with Sangti Valley (Christmas & New Year Special)</title>

  <!-- SEO Meta Description -->
  <meta name="description"
    content="Celebrate Christmas & New Year in Tawang & Sangti Valley with Roamers! Explore Bhalukpong, Dirang, Sela Pass, Bumla Pass, Tawang Monastery, and Tezpur on a 7D/6N festive Himalayan trip." />
  <meta name="author" content="Roamers" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Basic Open Graph tags -->
  <meta property="og:title" content="Tawang with Sangti Valley Christmas & New Year Trip - Roamers" />
  <meta property="og:description"
    content="Celebrate Christmas and New Year in Tawang and Sangti Valley! Sela Pass (13,700 ft), Bumla Pass, Madhuri Lake, ancient monasteries, riverside stays, and Himalayan snow with Roamers." />
  <meta property="og:image" content="https://www.roamers.in/assets/img/tawang/home-festive-card.avif" />
  <meta property="og:url" content="https://www.roamers.in/tawang-christmas&newyear.php" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Tawang with Sangti Valley Christmas & New Year Trip - Roamers" />
  <meta name="twitter:description"
    content="Join our exclusive Christmas & New Year festive departure to Tawang & Sangti Valley. Small groups, Tempo Traveller, curated stays, and unforgettable winter mountain magic!" />
  <meta name="twitter:image" content="https://www.roamers.in/assets/img/tawang/home-festive-card.avif" />

  <!-- Title  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/valley-of-flowers.css" />

  <!-- Favicon  -->
  <link rel="shortcut icon" href="assets/img/Logo/Logo mark-01.png" type="image/x-icon">
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- ***** All CSS Files ***** -->
  <link rel="stylesheet" href="assets/css/srilanka.css">
  <!-- ***** Font Awesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="assets/css/christmas.css?v=<?php echo filemtime(__DIR__ . '/assets/css/christmas.css'); ?>">

  <!-- Google Analytics Code -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-0MSFD4117B');
  </script>

  <style>
    .accordion-bg {
      background-color: rgb(245, 245, 245);
    }

    .butn:link,
    .butn:visited {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
      text-decoration: none;
      background-color: #5e16bd;
      background-image: linear-gradient(90deg, #501aa8, #870de8);
      padding: 1rem 2.5rem;
      width: 25.1rem;
      margin-right: 13px;
      border-radius: 4px;
      border: none;
      color: #fff;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease-in-out;
    }

    .trip-form button.submit-btn,
    .submit-btn {
      width: 100% !important;
      background-color: #094067 !important;
      background-image: none !important;
      color: #ffffff !important;
      font-size: 16px !important;
      font-weight: 600 !important;
      padding: 12px 25px !important;
      border-radius: 10px !important;
      border: none !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      cursor: pointer !important;
      transition: all 0.3s ease-in-out !important;
    }

    .trip-form button.submit-btn:hover,
    .submit-btn:hover {
      background-color: #063152 !important;
      background-image: none !important;
      color: #ffffff !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 18px rgba(9, 64, 103, 0.35) !important;
    }

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
    }

    .butn::before {
      background: #fff;
      content: "";
      height: 55px;
      opacity: 0;
      position: absolute;
      top: 0px;
      transform: rotate(35deg);
      width: 20px;
      transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .butn::after {
      background: #fff;
      content: "";
      height: 8rem;
      opacity: 0;
      position: absolute;
      top: -50px;
      transform: rotate(35deg);
      transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
      width: 2rem;
    }

    .butn__new::before {
      left: -50%;
    }

    .butn__new::after {
      left: -100%;
    }

    .butn:hover,
    .butn:active {
      transform: translateY(-3px);
      color: #fff;
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
    }

    .butn__new:hover::before {
      left: 50%;
      opacity: 0.5;
    }

    .butn__new:hover::after {
      left: 150%;
      opacity: 0.6;
    }

    .itinerary-logo-content p {
      font-size: 14px;
      background: #d8eefe !important;
      margin: 4px;
      color: black !important;
      border-radius: 31px;
      padding: 5px 10px;
      text-transform: capitalize;
    }

    .acc-inner li::before {
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-left: 10px solid #4ec0db !important;
      border-bottom: 5px solid transparent;
      position: absolute;
      left: 0;
      content: "";
      margin-top: 5px;
    }

    .acc-inner li:hover::before {
      border-left: 10px solid #555 !important;
    }

    .travel-des {
      padding: 30px !important;
    }

    .travel-des h2 {
      margin-top: 10px !important;
      line-height: 1.3 !important;
    }

    .travel-des a {
      max-width: 200px;
    }

    .faq .accordion-button {
      display: flex !important;
      justify-content: space-between !important;
      align-items: center !important;
      position: relative;
    }

    .faq .accordion-button::after {
      display: none !important;
    }

    .faq .faq-arrow {
      transition: transform 0.3s ease;
      font-size: 16px;
      flex-shrink: 0;
      color: inherit;
    }

    .faq .accordion-button:not(.collapsed) .faq-arrow {
      transform: rotate(180deg);
      color: inherit;
    }

    .price-occupancy {
      padding: 10px 21px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
    }

    .trip-form a {
      width: 100% !important;
      background: #094067 !important;
      color: #fff !important;
    }

    .mobile-bottom-bar {
      display: none;
    }

    .desk-desc {
      display: block !important;
      line-height: 1.7rem;
    }

    .mob-desc {
      display: none !important;
    }

    #dotPagination {
      display: flex;
      justify-content: center;
      gap: 4px;
      margin-top: 20px;
      position: absolute;
      left: 50%;
      transform: translate(-50%, 150px);
      z-index: 10;
      padding: 0;
      align-items: center;
    }

    .dot {
      width: 3px;
      height: 3px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.4);
      cursor: pointer;
      transition: all 0.2s ease;
      margin: 0;
      padding: 0;
    }

    .dot.active {
      background-color: #fff;
      width: 6px;
      height: 6px;
      opacity: 1;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
    }

    .whatapp img {
      width: 50px;
    }

    .faq {
      background-image: url(assets/img/images/world2.png) !important;
    }

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
      background: #4ec0db !important;
      color: #fff !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      cursor: pointer !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 4px 15px rgba(78, 192, 219, 0.3) !important;
      border: none !important;
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
      border-radius: 30px;
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

    .festive-tag-pill {
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(8px);
      padding: 6px 16px;
      border-radius: 50px;
      border: 1px solid rgba(255, 255, 255, 0.4);
      color: #fff;
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }

    .vehicle-spec-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #eef9fc;
      color: #094067;
      border: 1px solid #c9ecf5;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 700;
      margin-top: 6px;
    }

    @media screen and (max-width: 768px) {
      .mobile-bottom-bar {
        display: block !important;
        position: fixed !important;
        bottom: 15px !important;
        left: 5% !important;
        right: 5% !important;
        width: 90% !important;
        background: #fff !important;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2) !important;
        z-index: 2147483647 !important;
        border-radius: 120px !important;
        padding: 8px 12px 6px 14px !important;
        border: 1px solid rgba(0, 0, 0, 0.08) !important;
      }

      .bottom-bar-content {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        max-width: 600px;
        margin: 0 auto;
      }

      .price-box {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .price-box .label {
        margin: 0 !important;
        font-size: 12px !important;
        color: #333 !important;
        font-weight: 700 !important;
        line-height: 1.1 !important;
      }

      .price-amount {
        font-size: 20px !important;
        font-weight: 900 !important;
        color: #4ec0db !important;
        margin: 0 !important;
        line-height: 1 !important;
      }

      .per-person {
        font-size: 9px !important;
        color: #777 !important;
        font-weight: 500 !important;
        margin-top: 2px !important;
      }

      .btn-book {
        background-color: #4ec0db !important;
        color: #fff !important;
        padding: 10px 22px !important;
        border-radius: 100px !important;
        font-weight: 800 !important;
        text-decoration: none !important;
        font-size: 14px !important;
        box-shadow: 0 4px 15px rgba(78, 192, 219, 0.4) !important;
      }

      .whatapp {
        bottom: 100px !important;
      }

      .desk-desc {
        display: none !important;
      }

      .mob-desc {
        display: block !important;
      }

      #dotPagination {
        display: none !important;
      }

      .rewind-card {
        height: 380px !important;
      }

      .rewind-swiper .swiper-wrapper {
        height: 400px !important;
      }
    }
  </style>
</head>

<body>

  <!-- WhatsApp Button -->
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" target="_blank" rel="noopener">
    <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp Roamers">
  </a>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- Banner Section -->
  <section class="trip-home banner-marigin-section" id="tripSection"
    style="padding: 340px 0; color: white; position: relative; background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.65)), url('assets/img/tawang/banner/tawang-image-13.avif') center/cover no-repeat;">

    <div class="container-lg text-center" style="position: relative;">
      <div class="festive-tag-pill">
        🎅 Christmas &amp; New Year Festive Special
      </div>

      <h1 class="banner-hight-top ms-2 text-white"
        style="font-size: clamp(32px, 6vw, 54px); font-weight: 900; text-shadow: 2px 2px 12px rgba(0,0,0,0.85); letter-spacing: 1px; margin-bottom: 15px;">
        Tawang with Sangti Valley
      </h1>

      <p class="text-white mb-3"
        style="font-size: clamp(16px, 2.5vw, 20px); font-weight: 600; text-shadow: 1px 1px 6px rgba(0,0,0,0.7);">
        7 Days / 6 Nights &bull; Tempo Traveller &bull; Guwahati to Guwahati
      </p>

      <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
        <span class="badge bg-light text-dark px-3 py-2 rounded-pill fw-bold">Sela Pass (13,700 ft)</span>
        <span class="badge bg-light text-dark px-3 py-2 rounded-pill fw-bold">Bumla Pass Indo-China Border</span>
        <span class="badge bg-light text-dark px-3 py-2 rounded-pill fw-bold">Sangetsar (Madhuri) Lake</span>
        <span class="badge bg-light text-dark px-3 py-2 rounded-pill fw-bold">Sangti Valley Riverside</span>
        <span class="badge bg-light text-dark px-3 py-2 rounded-pill fw-bold">Tawang Monastery</span>
      </div>

      <div id="dotPagination"></div>
    </div>
  </section>

  <!-- Mobile Tab Nav -->
  <section class="tab-sections mob-tab">
    <div>
      <div>
        <div class="tab-contentt">
          <a href="#overview" class="tab-box active">Overview <span></span></a>
          <a href="#itinerary" class="tab-box">Itinerary <span></span></a>
          <a href="#inclusion" class="tab-box">Inclusion <span></span></a>
          <a href="#exclusion" class="tab-box">Exclusion <span></span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Highlight Stats Bar -->
  <div class="container">
    <div class="row desktop-inform my-4 g-3">
      <section class="info-highlights">
        <div class="container p-3">
          <div class="row row-cols-1 row-cols-lg-4 g-4 text-center">

            <div class="col">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <img src="assets/img/icon/rupees.png" alt="Rupees icon">
                </div>
                <div>
                  <div class="info-label">Approx Cost / Person</div>
                  <div class="info-value tawang-price"><span style="color:#4ec0db;">₹24,000/-</span></div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <img src="assets/img/icon/duration.png" style="width:35px" alt="Duration icon">
                </div>
                <div>
                  <div class="info-label">Duration</div>
                  <div class="info-value">7D / 6N</div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <img src="assets/img/icon/location.png" alt="Location icon">
                </div>
                <div>
                  <div class="info-label">Pickup &amp; Drop</div>
                  <div class="info-value">Guwahati</div>
                </div>
              </div>
            </div>

            <div class="col d-flex align-items-center">
              <a href="tawang-christmas&newyear-enquiry-form.php" class="btn butn butn__new"
                style="width: auto; min-width: 215px; padding: 12px 24px; border-radius: 10px; font-size: 15px; white-space: nowrap; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                <span>Get Itinerary</span> <i class="fa-solid fa-download ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Mobile Highlights -->
    <div class="row mobile-inform mt-4">
      <section class="info-highlights">
        <div>
          <div class="row text-center">
            <div class="col-5 px-0">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <img src="assets/img/icon/duration.png" style="width:35px" alt="Duration">
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
                  <img src="assets/img/icon/location.png" alt="Location">
                </div>
                <div>
                  <div class="info-label">Pickup &amp; Drop</div>
                  <div class="info-value">Guwahati</div>
                </div>
              </div>
            </div>

            <div class="col mt-4">
              <a href="tawang-christmas&newyear-enquiry-form.php" class="get-iti-btn"
                style="width: 100%; border-radius: 10px;">
                Check Dates &amp; Book (₹24,000/-) <i class="fa-solid fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Sticky Section Nav for Desktop -->
    <section class="tab-sections desc-tab">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="tab-contentt">
            <a href="#overview" class="tab-box active">Overview <span></span></a>
            <a href="#itinerary" class="tab-box">Itinerary <span></span></a>
            <a href="#inclusion" class="tab-box">Inclusion <span></span></a>
            <a href="#exclusion" class="tab-box">Exclusion <span></span></a>
            <a href="#notes" class="tab-box border-end-0">FAQ</a>
          </div>
        </div>
      </div>
    </section>

    <br><br>

    <!-- Overview Section -->
    <section class="destination mt-0 mt-lg-5"
      style="background-color: white; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-radius: 30px;" id="overview">

      <div>
        <div class="row g-4 flex-column-reverse flex-md-row align-items-center">

          <!-- Text Section -->
          <div class="col-md-7">
            <div class="travel-des p-3 p-md-4">
              <span class="badge bg-danger text-white mb-2 px-3 py-1 rounded-pill"
                style="font-size: 13px; display: inline-block; margin-bottom: 12px !important;">Festive Edition</span>
              <h2 class="mb-3" style="margin-top: 10px !important;">Christmas &amp; New Year in Tawang &amp; Sangti
                Valley</h2>

              <!-- Desktop description -->
              <p style="color: #555;" class="desk-desc d-none d-md-block">
                Ring in this festive season amidst snow-dusted peaks, fluttering Tibetan prayer flags, and enchanting
                Himalayan valleys. This curated <strong>7-Day / 6-Night Christmas &amp; New Year Special</strong> takes
                you deep into Arunachal Pradesh — from the entry gate of Bhalukpong and the scenic riverbanks of Dirang,
                across the jaw-dropping <strong>Sela Pass (13,700 ft)</strong>, all the way to legendary Tawang.
                <br><br>
                Experience the thrill of the <strong>Bumla Pass Indo-China Border excursion</strong> and the crystal
                reflections of Madhuri Lake (Sangetsar Lake). Then, escape the crowds to unwind in the peaceful,
                picturesque paradise of <strong>Sangti Valley</strong> with riverside stays and cozy bonfire nights
                under starry Himalayan skies, before finishing in historic Tezpur and returning to Guwahati.
              </p>

              <!-- Mobile description -->
              <p style="color: #555;" class="mob-desc d-block d-md-none">
                Ring in this Christmas &amp; New Year with Roamers across Tawang &amp; Sangti Valley! 7 Days of
                snow-capped peaks, crossing Sela Pass at 13,700 ft, visiting Bumla Pass near the Indo-China border, and
                relaxing by the river in Sangti Valley.
                <span id="dots">...</span>
                <span id="moreText" style="display: none;"><br><br>
                  Travel comfortably in a dedicated Tempo Traveller with cozy mountain stays, festive vibes, and
                  memories to welcome the New Year with a joyful travel squad!
                </span>
              </p>

              <div onclick="toggleReadMore()"
                class="position-absolute bottom-1 start-50 translate-middle-x d-block d-md-none">
                <span id="readMoreBtn" class="read-more-icon" style="cursor: pointer;">
                  <i class="fa-solid fa-circle-chevron-down shadow"
                    style="color: #4ec0db; background-color:#fff; font-size: 16px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-top: 5px;"></i>
                </span>
              </div>

              <div class="mt-3 d-flex flex-wrap gap-2">
                <span class="vehicle-spec-badge"><i class="fa-solid fa-van-shuttle"></i> Vehicle: Tempo Traveller</span>
                <span class="vehicle-spec-badge"><i class="fa-solid fa-users"></i> Guests: 7 Adults Group</span>
                <span class="vehicle-spec-badge"><i class="fa-solid fa-tag"></i> Approx: ₹24,000/- Per Person</span>
              </div>
            </div>
          </div>

          <!-- Image Section -->
          <div class="col-md-5 mt-0">
            <div class="swiper miniSlider px-px-md-0 py-3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/tawang/home-festive-card.avif" class="img-fluid w-100"
                    alt="Tawang Festive Special" style="border-radius: 30px; height: 350px; object-fit: cover;">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section class="ilt-up" id="itinerary">
      <div class="container cont-fluid">
        <div class="row">

          <div class="col-md-8">
            <h3 class="mt-5 text-center mt-md-0" style="text-align: start; margin-bottom: 20px; margin-left: 10px;"
              class="text-center head">Trip Itinerary
            </h3>

            <div>
              <div class="accordion" id="accordionExample">

                <!-- Day 1 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 1</span>
                      <span style="font-size: 14px;">Arrival in Guwahati —- Transfer to Kaziranga (195 km / 5 hrs )</span>
                    </button>
                  </h2>

                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Hey, welcome Roamers! Meet your fellow travellers &amp; Roamers Trip Captain at designated meeting point in Guwahati.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll start our trip by 11:00 am, we request everyone to be there by 10:30 for a quick Meet-up!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's drive our way towards Kaziranga. Socialize with the travellers &amp; enjoy the scenic countryside drive.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Visit Rhino Point and soak in the natural surroundings of Kaziranga, the nature will leave you in awe.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Arrive at your resort, check in &amp; Leisure.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Enjoy Games, Music &amp; savour overnight dinner with our team!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Overnight stay in Kaziranga.</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 2 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 2</span>
                      <span style="font-size: 14px;">Kaziranga National park &amp; Jeep Safari | To Dirang (250 Km | 7 hrs)</span>
                    </button>
                  </h2>

                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Wake up early guys! Let's head out for a Wild Jeep safari in Kaziranga National Park</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Keep your eyes open for rhinos, deer, Wild elephants, Birds and other wildlife animals.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Optional elephant safari for those who're interested.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Return to our resort for breakfast, check out &amp; get ready to begin the long journey!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's begin our drive towards Dirang, enjoying the scenic landscapes &amp; kameng river views.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Arrive in Dirang/Bomdila, check in to your hotel &amp; relax.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Savour Delicious Dinner &amp; Comfy Overnight stay.</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 3 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 3</span>
                      <span style="font-size: 14px;">Dirang —- Tawang (100 km | 1 hrs)</span>
                    </button>
                  </h2>

                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast, check out &amp; let's kickstart our journey towards Tawang.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll cross and stop by the spectacular Sela Pass &amp; Sela Lake. A Dreamy getaway!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's visit Jaswantgarh War Memorial, built in honour of the brave Indian soldier Jaswant Singh Rawat.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Continue our journey towards Tawang, on the way stop by Jang Waterfalls.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Arrive in Tawang, check in to your hotel and relax for the evening.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Explore the Markets of Tawang with our team followed by Overnight stay in Tawang.</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 4 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 4</span>
                      <span style="font-size: 14px;">Tawang - Bumla Pass Excursion</span>
                    </button>
                  </h2>

                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Early breakfast and proceed for the Bumla Circuit.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Get into 4x4 Vehicle &amp; we'll start our adventure to Bumla, on the way stop by PTSO Lake.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Explore Bumla Pass, located near the India–China border <em>(Entry is subject to the required permits &amp; local weather conditions)</em>.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Continue to the scenic Madhuri Lake, surrounded by mountains and dramatic rocky landscapes.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After a day filled with mountain views and incredible sights we'll return to Tawang.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          By evening, visit the famous Giant Buddha &amp; sip the Black tea!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Explore the markets, cafe nearby &amp; Overnight stay in Tawang.</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 5 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 5</span>
                      <span style="font-size: 14px;">Tawang Local Sightseeing &amp; Celebrations Sangti Valley</span>
                    </button>
                  </h2>

                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast, check out and let's begin the day by visiting the famous Tawang Monastery, one of the largest Buddhist monasteries in India.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Up next, we'll explore the historic Chakzam Bridge, known for its traditional iron-chain construction.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Continue our journey through the impressive Sela Tunnel, an all weather road connection through the mountains.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's make our way towards Sangti Valley, a peaceful destination known for its green surroundings, river views, and beautiful mountain scenery.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Arrive at your accommodation, check in and spend the evening relaxing in the valley.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Ready for the BIG Celebrations gang! Lit the Bonfire, Team Dinner, Music &amp; more celebrations.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Overnight stay in Sangti Valley nearby River, your best night!</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 6 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 6</span>
                      <span style="font-size: 14px;">Sangti Valley —-- Bhairabkunda (Bhutan Border) (175km / 5 hrs )</span>
                    </button>
                  </h2>

                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Wake up to a peaceful morning in Sangti Valley &amp; enjoy a relaxing walk along the riverside.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast check out and let's kickstart our journey towards Bhairabkunda.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          En route, visit ‘Dirang Dzong’ a historic settlement known for its traditional architecture and local culture.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Next, let's stop at the beautiful local Sheep Farms.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Enjoy the scenic drive through the hills and countryside as we continue towards Bhairabkunda.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Arrive at your resort, check in and unwind after the day's journey.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>Our Farewell Dinner team! Lets enjoy the last night &amp; Overnight stay in Bhairabkunda.</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Day 7 -->
                <div class="accordion-item mb-4 border overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 7</span>
                      <span style="font-size: 14px;">Bhairabkunda — Guwahati Departure (130 kms / 3.50 hrs)</span>
                    </button>
                  </h2>

                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-light">
                      <ul class="mb-0">
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast, check out from your resort and let's explore Bhairabkunda.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Up next, visit the nearby Bhutan Border (subject to border access &amp; applicable entry requirements)</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          It's time to begin our return journey towards Guwahati.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Upon arrival, we'll drop you at Guwahati Airport for your departure (Before 6:00pm we will arrive).</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          And with that, our Tawang Expedition comes to an end Roamers!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          <strong>What a journey it has been...goodbye guys until next time! More hugs!</strong>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Inclusions Section -->
            <section id="inclusion">
              <div class="important-notes shadow"
                style="border-radius: 30px; background-color: rgb(245, 255, 246); padding: 25px;">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">Inclusions</h3>
                <div>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    6 Nights accommodation in handpicked hotels &amp; Sangti Valley riverside/valley stay.</p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Dedicated Tempo Traveller for all transfers and sightseeing as per itinerary (Guwahati to Guwahati).
                  </p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Daily Breakfast &amp; Dinner as per standard trip plan.</p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Inner Line Permit (ILP) assistance &amp; document processing for Arunachal Pradesh.</p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Bumla Pass &amp; Madhuri Lake excursion (subject to permits &amp; weather).</p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Experienced driver, fuel, tolls, parking fees, and driver allowances.</p>
                  <p><i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    24/7 Roamers trip coordinator support throughout your travel.</p>
                </div>
              </div>
            </section>

            <!-- Exclusion Section -->
            <div class="important-notes shadow mt-4"
              style="border-radius: 30px; background-color: rgb(255, 244, 244); padding: 25px;" id="exclusion">
              <h3 class="head" style="text-align: center; margin-bottom: 20px;">Exclusions</h3>
              <div>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Airfare or Train tickets to and from Guwahati.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Lunches and any personal snacks, beverages, or shopping.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Expenses arising from landslides, roadblock delays, severe winter snow closures, strikes, or any
                  unforeseen emergencies.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  GST 5% as applicable.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Any service or entry fee not explicitly mentioned in the Inclusions.</p>
              </div>
            </div>

          </div>

          <!-- Sticky Sidebar -->
          <div class="col-md-4">
            <div class="price-sticky" style="position: sticky; top: 90px;">

              <!-- Side Card Banner -->
              <div class="priceCard shadow mb-3" style="border-radius: 30px; overflow: hidden;">
                <img src="assets/img/tawang/twang-image-15.jpeg" alt="Tawang Winter Escape"
                  style="width: 100%; height: 220px; object-fit: cover; border-radius: 20px;">
              </div>

              <!-- Pricing Box -->
              <div class="price-card shadow p-1 mb-4" style="border-radius: 30px;">
                <div class="p-2">
                  <div class="inner-box"
                    style="background-color: #f0f0f0; padding: 15px; border-radius: 10px; text-align: center;">
                    <h3 style="text-align: center; margin-bottom: 20px;">Starting Price</h3>
                    <h5 class="special-offer">
                      <span class="old-price">
                        <strike>₹ 28,000/-</strike>
                      </span>
                      <span class="new-price">₹24,000 /-</span>
                    </h5>

                    <p>perfect for group adventures and shared <br> memories.</p>
                    <div class="trip-form p-0">
                      <a href="tawang-form-christmas-new-year.php" class="btn butn butn__new bg-"
                        style="border-radius: 10px; width: 100%;">
                        Dates &amp; Costing
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Quick Enquiry Form -->
              <div id="form" class="shadow"
                style="border: 1px solid #4ec0db; border-radius: 30px; padding: 25px; max-width: 450px; background-color: #fff;">
                <form action="tawang-enquiry-mail.send.php" method="POST">
                  <h3 style="text-align: center; margin-bottom: 30px; color: #333;">Let's Map Your Dream Trip</h3>

                  <input type="hidden" name="destination" value="Tawang Christmas &amp; New Year Special">

                  <div class="input-field mb-3">
                    <label for="name" style="font-size: 14px; font-weight: 600; color: #333;">Full Name</label>
                    <input placeholder="Your Name" type="text" id="name" name="name" required
                      style="width: 100%; padding: 10px 15px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px;">
                  </div>

                  <div class="input-field mb-3">
                    <label for="phone" style="font-size: 14px; font-weight: 600; color: #333;">WhatsApp Number</label>
                    <input placeholder="+91 Your Phone" type="tel" id="phone" name="phone" required
                      style="width: 100%; padding: 10px 15px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px;">
                  </div>

                  <div class="input-field mb-3" style="margin-bottom: 20px;">
                                            <label for="phone" style="font-size: 16px; color: #333;">Phone
                                                Number</label>
                                            <input placeholder="Your Phone Number" type="tel" id="phone" name="phone"
                                                required
                                                style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 10px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                                        </div>

                  <!-- <div class="input-field mb-3">
                    <label for="pax" style="font-size: 14px; font-weight: 600; color: #333;">Group Size</label>
                    <select id="pax" name="pax"
                      style="width: 100%; padding: 10px 15px; border-radius: 25px; border: 1px solid #ccc; font-size: 14px;">
                      <option value="7 Adults (Tempo Traveller)" selected>7 Adults (Tempo Traveller)</option>
                      <option value="4-6 Adults">4-6 Adults</option>
                      <option value="Couple / 2 Adults">Couple / 2 Adults</option>
                      <option value="Solo Traveler">Solo Traveler</option>
                      <option value="8+ Adults Group">8+ Adults Group</option>
                    </select>
                  </div> -->

                  <div class="trip-form p-0 mt-3">
                    <button type="submit" class="btn submit-btn" style="border-radius: 10px;">Submit</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <!-- Roamers Rewind Gallery -->
  <section class="rewind-section" style="position: relative; overflow: hidden; padding: 60px 0 100px;">
    <div class="rewind-header" style="margin-bottom: 40px;">
      <div class="rewind-title-area">
        <h3 class="head" style="text-align: center; margin-bottom: 10px;">
          <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
            class="align-start me-2">
          Roamers Rewind
          <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
            class="align-start ms-2">
        </h3>
        <p>Memories captured across Arunachal Pradesh &amp; Tawang</p>
      </div>
    </div>

    <div style="position: relative;">
      <div class="swiper rewind-swiper" style="overflow: visible !important;">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-1.avif" alt="Tawang Sela Pass"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-2.avif" alt="Tawang Snow Mountains"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-3.avif" alt="Tawang Monastery"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-4.avif" alt="Bumla Border Pass"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-5.avif" alt="Sangetsar Lake"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-6.avif" alt="Sangti Valley River"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-7.avif" alt="Tawang Travel Squad"></div>
          </div>
          <div class="swiper-slide">
            <div class="rewind-card"><img src="assets/img/tawang/tawang-image-8.avif" alt="Dirang River Views"></div>
          </div>
        </div>
      </div>
      <div class="journey-nav-container">
        <div class="journey-nav-btn journey-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="journey-nav-btn journey-next"><i class="fa-solid fa-chevron-right"></i></div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq" id="notes" style="padding: 60px 0;">
    <h2 class="head text-center">Frequently Asked Questions</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="accordion" id="accordionFlushExample">

            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-dark fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFaq1" aria-expanded="true">
                  <span>What permits are needed for Tawang and Bumla Pass?</span>
                  <i class="fa-solid fa-chevron-down faq-arrow ms-2"></i>
                </button>
              </h2>
              <div id="collapseFaq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.9rem; margin-bottom: 0;">
                    An Inner Line Permit (ILP) is mandatory for Indian nationals entering Arunachal Pradesh, which
                    Roamers arranges for you before the trip. For Bumla Pass and Madhuri Lake, a special military and
                    civil permit is obtained locally in Tawang, subject to weather conditions and army approval.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed text-dark fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFaq2" aria-expanded="false">
                  <span>How cold does it get during Christmas &amp; New Year?</span>
                  <i class="fa-solid fa-chevron-down faq-arrow ms-2"></i>
                </button>
              </h2>
              <div id="collapseFaq2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.9rem; margin-bottom: 0;">
                    Late December experiences winter weather across Arunachal Pradesh. Day temperatures in Tawang range
                    between 3°C to 10°C, while nights can drop below freezing (-2°C to -8°C). Warm thermals, heavy
                    jackets, fleece, gloves, and woolen beanies are essential.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed text-dark fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFaq3" aria-expanded="false">
                  <span>Can solo travelers or couples join this group departure?</span>
                  <i class="fa-solid fa-chevron-down faq-arrow ms-2"></i>
                </button>
              </h2>
              <div id="collapseFaq3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.9rem; margin-bottom: 0;">
                    Yes! While this itinerary is optimized for a 7-adult group in a private Tempo Traveller at approx
                    ₹24,000/- per person, solo travelers and smaller groups can join scheduled festive batches. You will
                    travel with verified, like-minded travelers.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed text-dark fw-bold" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFaq4" aria-expanded="false">
                  <span>How do I confirm my booking?</span>
                  <i class="fa-solid fa-chevron-down faq-arrow ms-2"></i>
                </button>
              </h2>
              <div id="collapseFaq4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-white px-4 py-3">
                  <p style="font-size: 0.9rem; margin-bottom: 0;">
                    Fill out the booking form or reach out on WhatsApp. Once you transfer the advance booking token and
                    share the payment receipt with info@roamers.in, you will receive an official booking confirmation
                    and ILP documentation checklist within 24 hours.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mobile Bottom Sticky Bar -->
  <div class="mobile-bottom-bar shadow">
    <div class="bottom-bar-content">
      <div class="price-box">
        <span class="label">Approx. / Person</span>
        <div class="price-amount">₹24,000/-</div>
        <span class="per-person">7 Adults &bull; Tempo Traveller</span>
      </div>
      <a href="tawang-christmas&newyear-enquiry-form.php" class="btn-book">
        Book Now <i class="fa-solid fa-arrow-right ms-1"></i>
      </a>
    </div>
  </div>

  <!-- Popular Trips Section -->
  <?php include('includes/trips.php'); ?>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/dates.js"></script>

  <script>
    function toggleReadMore() {
      const moreText = document.getElementById('moreText');
      const dots = document.getElementById('dots');
      const readMoreBtn = document.getElementById('readMoreBtn');

      if (moreText.style.display === 'none' || moreText.style.display === '') {
        moreText.style.display = 'inline';
        dots.style.display = 'none';
        readMoreBtn.innerHTML = '<i class="fa-solid fa-circle-chevron-up shadow" style="color: #4ec0db; background-color:#fff; font-size: 16px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%;"></i>';
      } else {
        moreText.style.display = 'none';
        dots.style.display = 'inline';
        readMoreBtn.innerHTML = '<i class="fa-solid fa-circle-chevron-down shadow" style="color: #4ec0db; background-color:#fff; font-size: 16px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%;"></i>';
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      // Allow closing open accordion items when clicked
      document.querySelectorAll('#accordionExample .accordion-button').forEach(button => {
        button.addEventListener('click', function (e) {
          const targetSelector = this.getAttribute('data-bs-target');
          const target = document.querySelector(targetSelector);
          if (target && target.classList.contains('show')) {
            e.preventDefault();
            e.stopPropagation();
            const bsCollapse = bootstrap.Collapse.getInstance(target) || new bootstrap.Collapse(target, { toggle: false });
            bsCollapse.hide();
            this.classList.add('collapsed');
            this.setAttribute('aria-expanded', 'false');
          }
        });
      });

      // Popular Destinations Swiper Slider
      new Swiper(".swiper-container", {
        slidesPerView: "auto",
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          1300: {
            slidesPerView: 4,
          },
          640: {
            slidesPerView: 3,
          },
          240: {
            slidesPerView: 1.1,
          },
        },
      });

      // Rewind Swiper
      new Swiper('.rewind-swiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slideToClickedSlide: true,
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
          nextEl: '.journey-next',
          prevEl: '.journey-prev',
        },
        breakpoints: {
          320: {
            slidesPerView: 1.4,
            spaceBetween: 10,
          },
          640: {
            slidesPerView: 2.2,
            spaceBetween: 25,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 40,
          }
        }
      });
    });
  </script>

</body>

</html>