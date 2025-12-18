<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roamers - Christmas and New Year Trips</title>
  <meta name="description"
    content="Join Roamers for festive Christmas & New Year group trips! Solo travelers, couples, and friends welcome. Explore Manali, Goa, and more.">
  <meta name="keywords"
    content="christmas trips, new year travel, group trips india, solo travel, manali christmas, roamers">
  <meta name="author" content="Roamers">

  <!-- Open Graph -->
  <meta property="og:title" content="Roamers | Christmas & New Year Group Trips">
  <meta property="og:description"
    content="Celebrate Christmas & New Year with like-minded travelers. Book your festive getaway now!">
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
  <meta property="og:url" content="https://www.roamers.in/christmas-newyear">
  <link rel="canonical" href="https://www.roamers.in/christmas-newyear">

  <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon">

  <!-- Font Awesome for Chevron Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
    }

    .banner-swiper-container {
      width: 100vw;
      max-width: 100%;
      margin: 0 auto 2rem;
      overflow: visible;
      position: relative;
      z-index: 2;
      margin-top: 40px;
      /* Use hardware acceleration for smoothness (especially mobile) */
      will-change: transform;
      backface-visibility: hidden;
    }

    .banner-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #000;
      will-change: transform;
      backface-visibility: hidden;
    }

    .banner-swiper .slide-picture {
      width: 100%;
      height: 100%;
      object-fit: cover;
      will-change: transform;
      backface-visibility: hidden;
    }

    @media (max-width: 576px) {

      .banner-swiper-container,
      .banner-swiper .swiper-slide,
      .banner-swiper .slide-picture {
        height: 100vh !important;
        /* min-height: 60vw; */
        max-height: 40vh;
        border-radius: 0px;
      }
    }

    .gallery-swiper-section-desktop {
      display: block;
      max-width: 1400px;
      margin: 0 auto 3rem;
      padding: 0 1rem;
    }

    .gallery-swiper {
      height: 520px;
      position: relative;
    }

    .gallery-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: stretch;
      padding: 16px 0;
    }

    .travel-card__img {
      width: 100%;
      height: 100%;
      aspect-ratio: 16/9;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .gallery-swiper-nav {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-between;
      z-index: 10;
      pointer-events: none;
      transform: translateY(-50%);
    }

    .gallery-swiper-nav button {
      pointer-events: auto;
      width: 44px;
      height: 44px;
      background: #4ec0db;
      color: white;
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      opacity: 0.9;
      transition: all 0.3s ease;
    }

    .gallery-swiper-section-mobile {
      display: none;
    }

    .christmas-mobile-swiper-container {
      width: 100vw;
      height: 60vw;
      min-height: 220px;
      max-height: 540px;
      margin: 0 auto 2rem;
      padding: 0 1rem;
      overflow: visible;
      will-change: transform;
      backface-visibility: hidden;
    }

    .christmas-mobile-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
      will-change: transform;
      backface-visibility: hidden;
    }

    .christmas-mobile-swiper .slide-picture {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
      will-change: transform;
      backface-visibility: hidden;
    }

    @media (max-width: 767px) {
      .gallery-swiper-section-desktop {
        display: none !important;
      }

      .gallery-swiper-section-mobile {
        display: block !important;
      }

      .christmas-mobile-swiper-container,
      .christmas-mobile-swiper .swiper-slide,
      .christmas-mobile-swiper .slide-picture {
        height: 60vh !important;
        min-height: 60vw;
        max-height: 100vh;
        will-change: transform;
        backface-visibility: hidden;
      }
    }

    @media (min-width: 768px) {
      .christmas-mobile-swiper-container {
        display: none !important;
      }
    }

    .faq {
      padding: 3rem 1rem;
      background: #f8f9fa;
    }

    .faq .head {
      text-align: center;
      margin-bottom: 2rem;
      color: #4ec0db;
    }

    .accordion-button {
      font-weight: 600 !important;
      color: #212529 !important;
      background-color: #fff !important;
      border-radius: 10px !important;
    }

    .accordion-button:not(.collapsed) {
      color: #4ec0db !important;
      box-shadow: none;
    }

    .accordion-body {
      font-size: 0.9rem;
      color: #555;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
      width: 56px;
      height: 56px;
      background: #25d366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .whatapp:hover {
      transform: scale(1.1);
    }

    .whatapp img {
      width: 32px;
      height: 32px;
    }

    @keyframes bounce {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }

      100% {
        transform: translateY(0);
      }
    }

    @keyframes float {
      0% {
        transform: translateY(0) rotate(0);
      }

      50% {
        transform: translateY(-14px) rotate(-6deg);
      }

      100% {
        transform: translateY(0) rotate(0);
      }
    }

    @keyframes shimmer {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.4;
      }

      100% {
        opacity: 1;
      }
    }

    .christmas-festive-header {
      position: relative;
      overflow: visible;
    }

    .christmas-festive-header .animated-emoji {
      display: inline-block;
      font-size: 2.4rem;
      margin: 0 0.05em;
      vertical-align: middle;
    }

    .christmas-festive-header .animated-emoji.snowflake {
      animation: float 1.7s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.gift {
      animation: bounce 1.5s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.tree {
      animation: bounce 1.2s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.firework {
      animation: shimmer 1.2s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.champagne {
      animation: float 2s infinite alternate-reverse;
    }

    @media (max-width: 576px) {
      .banner-swiper-container img.slide-picture {
        border-radius: 0 !important;
      }
    }
  </style>
</head>

<body>

  <header>
    <!-- <?php include('includes/header.php'); ?> -->
  </header>

  <!-- Banner -->
  <div class="banner-swiper-container banner-swiper-secondary">
    <div class="swiper banner-swiper" style="will-change: transform; backface-visibility: hidden;">
      <div class="swiper-wrapper" style="will-change: transform; backface-visibility: hidden;">
        <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="assets/optimized-images/christmas&newyear/mobile-banner-1.avif" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async"
              src="assets/optimized-images/christmas&newyear/banner-2.avif" alt="Christmas in Manali - Snowy Adventure"
              style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div>
        <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="assets/optimized-images/christmas&newyear/mobile-banner-2.avif" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async"
              src="assets/optimized-images/christmas&newyear/banner-1.avif" alt="New Year Party in Goa"
              style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div>
        <!-- <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(6).webp" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif" alt="Himalayan Christmas Escape" style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div> -->
      </div>
      <!-- <div class="swiper-pagination"></div> -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <div>

    <h2 class="upcoming-header mt-5 christmas-festive-header">
      <span class="animated-emoji snowflake" aria-hidden="true" style="animation-delay: 0.1s;">🎄</span>
      Christmas &amp; New Year Trips
      <span class="animated-emoji snowflake" aria-hidden="true" style="animation-delay: 0.1s;">🎄</span>

    </h2>

    <div class="d-flex flex-wrap justify-content-center align-items-center m-0 p-0">
      <!-- SPITI WINTER EXPEDITION -->
      <div class="upcoming-card mt-3" onclick="window.open('spitivalley-winter-christmas&newyear.php','_blank')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://roamers.in/assets/img/spiti-valley/p5.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai - Bangalore</span>
            </div>
          </div>
          <h1 class="upcoming-title">SPITI WINTER EXPEDITION </h1>
          <p class="upcoming-locations">DELHI, SHIMLA, KALPA, NAKO, KAZA, SANGLA/ CHITKUL</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 20,25,27</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹21,990 /-</div>
            </div>
          </div>
          <a href="spitivalley-winter-christmas-new-year.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- MEGHALAYA -->
      <div class="upcoming-card mt-3" onclick="window.open('meghalaya-christmas-new-year.php','_blank')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/megalaya/Front%203.jpg" alt="Valley of Flowers">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>Ex: Guwahati </span>
            </div>
          </div>
          <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
          <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 20,23,28</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹21,990/-</div>
            </div>
          </div>
          <a href="meghalaya-christmas-new-year.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- CHIKMAGALUR -->
      <div class="upcoming-card mt-3" onclick="window.open('chikmagalur-christmas&newyear.php','_blank') "
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai - Bangalore</span>
            </div>
          </div>
          <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING </h1>
          <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,499/-</div>
            </div>
          </div>
          <a href="chikmagalur-christmas-new-year.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- KERALA -->
      <div class="upcoming-card mt-3" onclick="window.open('kerala-chritsmas&newyear.php','_blank')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://www.roamers.in/assets/img/Kerala/Kerala-photos.jpg" alt="Onam Special – Kerala Getaway">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>5D/4N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">KERALA: TO GOD’s OWN PLACE</h1>
          <p class="upcoming-locations">Munnar, Thekkady, Alappuzha</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹16,990/-</div>
            </div>
          </div>
          <a href="kerala-chritsmas-newyear.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Kodaikanal -->
      <div class="upcoming-card mt-5" onclick="window.open('kodaikanal1-christmas&newyear.php','_blank')"
        style="cursor:pointer">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/kodaikanal/Kodai.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">KODAIKANAL BACKPACKING </h1>
          <p class="upcoming-locations">Kodaikanal , Vattakanal , Poombarai</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price kodaikanal-price">₹9,990/-</div>
            </div>
          </div>
          <a href="kodaikanal1-christmas-new-year.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Wayanad Card -->
      <div class="upcoming-card mt-5" onclick="window.open('wayanad-christmas&newyear.php','_blank')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">Wonders of Wayanad</h1>
          <p class="upcoming-locations">Wayanad</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,499/-</div>
            </div>
          </div>
          <a href="wayanad-christmas-newyear.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Ooty Card -->
      <div class="upcoming-card mt-5" onclick="window.open('ooty-christmas&newyear.php')" style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://roamers.in/assets/img/Ooty/1-min.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">OOTY THE QUEEN OF HILLS </h1>
          <p class="upcoming-locations">Chennai, Coimbatore </p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,499/-</div>
            </div>
          </div>
          <a href="ooty-christmas&newyear-special.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Pondi Dive-in -->
      <div class="upcoming-card mt-5" onclick="window.open('pondi-christmas&newyear.php')" style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Direct, Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">Pondi Dive-in</h1>
          <p class="upcoming-locations">Pondicherry</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹4,990</div>
            </div>
          </div>
          <a href="pondi-christmas&newyear-special.php" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Sri Lanka -->
      <div class="upcoming-card mt-5" onclick="window.open('srilanka-christmas&newyear.php','_blank')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Colombo</span>
            </div>
          </div>
          <h1 class="upcoming-title">Sri Lanka</h1>
          <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 13,20,27</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹43,999</div>
            </div>
          </div>
          <a href="srilanka-christmas&newyear-special.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
      <!-- Andaman Island Hopping -->
      <div class="upcoming-card mt-5" onclick="window.open('andaman-christmas&newyear.php','_blank')" style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg" alt="Andaman Island Hopping">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Port Blair</span>
            </div>
          </div>
          <h1 class="upcoming-title">Andaman Island Hopping</h1>
          <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 25</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price andaman-price">₹34,500/- </div>
            </div>
          </div>
          <a href="andaman-christmas&newyear.php" target="_blank" class="upcoming-view">View Trip</a>
        </div>
      </div>
    </div>

  </div>





  <div style="display:none">
    <?php include('components/upcoming-trips.php'); ?>
  </div>
  <!-- Desktop Gallery Swiper -->
  <!-- <div class="gallery-swiper-section-desktop">
    <div class="swiper gallery-swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-1-by-roamers.avif" alt="Manali Snow Christmas"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-2-by-roamers.avif" alt="Goa Beach New Year"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-3-by-roamers.avif" alt="Kasol Winter Camp"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-4-by-roamers.avif" alt="Rishikesh Yoga Retreat"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-5-by-roamers.avif" alt="Shimla Christmas Special"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-6-by-roamers.avif" alt="McLeod Ganj Tibetan New Year"></div>
      </div>
      <div class="gallery-swiper-nav">
        <button class="swiper-button-prev" aria-label="Previous"></button>
        <button class="swiper-button-next" aria-label="Next"></button>
      </div>
    </div>
  </div> -->

  <!-- Banner -3 -->
  <div class="container">
    <div class="banner-swiper-container banner-swiper-secondary" sty>
      <div class="swiper banner-swiper" style="will-change: transform; backface-visibility: hidden;">
        <div class="swiper-wrapper" style="will-change: transform; backface-visibility: hidden;">
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
            <picture>
              <source srcset="https://roamers.in/assets/img/megalaya/cover.jpg" media="(max-width: 576px)">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="Christmas in Manali - Snowy Adventure"
                style="will-change: transform; backface-visibility: hidden;">
            </picture>
          </div>
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
            <picture>
              <source srcset="https://roamers.in/assets/img/megalaya/cover.jpg" media="(max-width: 576px)">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="New Year Party in Goa" style="will-change: transform; backface-visibility: hidden;">
            </picture>
          </div>
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
            <picture>
              <source srcset="https://roamers.in/assets/img/megalaya/cover.jpg" media="(max-width: 576px)">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="Himalayan Christmas Escape" style="will-change: transform; backface-visibility: hidden;">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>


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
                <p style="font-size: 0.875rem; margin-bottom: 0;">Absolutely! Whether you're joining solo, with friends,
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

  <!-- Footer -->
  <footer>
    <!-- <?php include('includes/footer.php'); ?>
  </footer>

  <!-- WhatsApp Button -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" target="_blank" aria-label="Chat on WhatsApp">
      <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp">
    </a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      // --- Updated: Fix mobile swiper interaction issue with multiple Swiper instances ---

      function supportsPassive() {
        var supportsPassiveOption = false;
        try {
          var opts = Object.defineProperty({}, 'passive', {
            get: function () {
              supportsPassiveOption = true;
            }
          });
          window.addEventListener("test", null, opts);
        } catch (e) { }
        return supportsPassiveOption;
      }

      // Use global variables to keep track of Swiper instances
      window.swipers = {};

      function destroyAllSwipers() {
        // Safely destroy all Swiper instances
        if (window.swipers.bannerSwiper && typeof window.swipers.bannerSwiper.destroy === 'function') {
          window.swipers.bannerSwiper.destroy(true, true);
          window.swipers.bannerSwiper = null;
        }
        if (window.swipers.gallerySwiper && typeof window.swipers.gallerySwiper.destroy === 'function') {
          window.swipers.gallerySwiper.destroy(true, true);
          window.swipers.gallerySwiper = null;
        }
        if (window.swipers.christmasMobileSwiper && typeof window.swipers.christmasMobileSwiper.destroy === 'function') {
          window.swipers.christmasMobileSwiper.destroy(true, true);
          window.swipers.christmasMobileSwiper = null;
        }
      }

      function fixSwiperTouchLock(swiper) {
        // On mobile, allow multiple swipers to handle touch individually without blocking each other.
        // Remove Swiper's global touch-lock that can conflict when fast switching/swiping.
        if (swiper && swiper.touchEventsData) {
          swiper.touchEventsData.isTouched = false;
          swiper.touchEventsData.isMoved = false;
        }
      }

      function initSwipers() {
        const isMobile = window.innerWidth <= 767;

        destroyAllSwipers();

        // Banner Swiper (always active)
        window.swipers.bannerSwiper = new Swiper(".banner-swiper", {
          loop: true,
          speed: isMobile ? 650 : 700,
          autoplay: isMobile ? {
            delay: 1900,
            disableOnInteraction: false
          } : {
            delay: 3500,
            disableOnInteraction: false
          },
          cssMode: false, // Changed to false for better interop with other touch swipers
          effect: 'slide',
          simulateTouch: true,
          touchRatio: 1,
          observer: true,
          observeParents: true,
          pagination: {
            el: ".banner-swiper .swiper-pagination",
            clickable: true,
            dynamicBullets: isMobile ? true : false
          },
          navigation: isMobile ?
            false : {
              nextEl: ".banner-swiper .swiper-button-next",
              prevEl: ".banner-swiper .swiper-button-prev",
            },
          on: {
            init: function () {
              // Hardware acceleration for main swiper
              const ele = document.querySelector('.banner-swiper');
              if (ele) {
                ele.style.willChange = 'transform';
                ele.style.backfaceVisibility = 'hidden';
              }
            },
            touchStart: function (swiper, event) {
              // If any other swiper is being interacted with, break the touch lock to avoid conflict.
              for (const key in window.swipers) {
                if (window.swipers[key] && window.swipers[key] !== swiper) {
                  fixSwiperTouchLock(window.swipers[key]);
                }
              }
            }
          }
        });

        if (!isMobile) {
          window.swipers.gallerySwiper = new Swiper(".gallery-swiper.mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
              delay: 4000,
              disableOnInteraction: false
            },
            navigation: {
              nextEl: ".gallery-swiper-nav .swiper-button-next",
              prevEl: ".gallery-swiper-nav .swiper-button-prev",
            },
            observer: true,
            observeParents: true,
            breakpoints: {
              0: {
                slidesPerView: 1.2,
                spaceBetween: 10
              },
              480: {
                slidesPerView: 1.5,
                spaceBetween: 15
              },
              768: {
                slidesPerView: 2,
                spaceBetween: 20
              },
              992: {
                slidesPerView: 3,
                spaceBetween: 30
              },
              1200: {
                slidesPerView: 4,
                spaceBetween: 35
              },
            },
          });
        } else {
          window.swipers.christmasMobileSwiper = new Swiper(".christmas-mobile-swiper", {
            loop: true,
            speed: 500,
            autoplay: {
              delay: 2600,
              disableOnInteraction: false
            },
            effect: 'slide',
            pagination: {
              el: ".christmas-mobile-swiper .swiper-pagination",
              clickable: true
            },
            observer: true,
            observeParents: true,
            on: {
              touchStart: function (swiper, event) {
                // Ensure only one swiper handles touch at a time
                for (const key in window.swipers) {
                  if (window.swipers[key] && window.swipers[key] !== swiper) {
                    fixSwiperTouchLock(window.swipers[key]);
                  }
                }
              }
            }
          });
        }
      }

      // Improve touch event performance on mobile
      if (supportsPassive()) {
        window.addEventListener("touchstart", function () { }, {
          passive: true
        });
        window.addEventListener("touchmove", function () { }, {
          passive: true
        });
        window.addEventListener("wheel", function () { }, {
          passive: true
        });
      }

      // Initialize on load & resize
      window.addEventListener('load', initSwipers);
      window.addEventListener('resize', () => {
        clearTimeout(window.resizeTimer);
        window.resizeTimer = setTimeout(initSwipers, 300);
      });
    </script>



</body>

</html>