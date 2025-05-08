<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/kolukkumalai-img/Top-station.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/kolukkumalai-img/Top-station.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
  <title>Roamers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

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


  <style>
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
      opacity: 0.5s;
    }

    .butn__new:hover::after {
      left: 150%;
      opacity: 0.6;
    }

    .trip-home {
      background: url(assets/img/kolukkumalai-img/Cover.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
    }

    .new-year {
      position: absolute;
      height: 28px !important;
      width: 160px;
      transition: all 0.7s;
      border-radius: 0px !important;
    }

    .christmas {
      position: absolute;
      height: 28px !important;
      width: 160px;
      transition: all 0.7s;
      border-radius: 0px !important;
    }

    .trip-home h1 {
      text-align: center;
      color: #fff;
      text-transform: capitalize;
      font-weight: 800;
      line-height: 1.1 !important;
      font-size: 46px;
      margin: 90px 0px 54px !important;
    }

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
    }

    #readMoreLink {
      visibility: hidden;
    }

    .trip-home {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      padding: 280px 280px 150px !important;
      margin-top: -127px;
      position: relative;
    }

    .trip-about img {
      transition: 0.5s all;
      border-radius: 5px;
    }

    .trip-about img:hover {
      transform: scale(1.04) !important;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
    }

    @media (max-width: 600px) {
      .kerala-overview {
        font-size: 20px !important;
      }

      .butn:link,
      .butn:visited {
        margin-right: auto !important;
        width: auto !important;
      }

      .butn::after {
        top: -21px !important;
        width: 1rem !important;
      }


      .butn__new::after {
        left: 6% !important;
      }

      .butn__new::before {
        left: -7% !important;
      }

      .price-occupancy {
        padding: 10px 20px !important;
        font-size: 14px !important;
        box-shadow: rgb(0 207 264 / 35%) 0px 6px 10px, rgba(0, 0, 0, 0.23) 0px 2px 5px;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .accordion-button {
        font-size: 9px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 10px !important;
      }

      #tab1 p {
        font-size: 11px;
      }

      #tab2 p {
        font-size: 11px;
      }

      .occupancy {
        font-size: 10px !important;
      }

      .trip-home h1 {
        margin: 90px 0px 27px !important;
      }

      .kerala-overview {
        font-size: 20px !important;
      }

      #price {
        margin-left: 145px !important;
      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      .slider-item2 {
        flex: 0 0 calc(96%) !important;
        padding: 15px;
      }

      .slider-item2 img {
        height: 380px !important;
      }

      #moreText {
        visibility: visible !important;
      }

      #readMoreLink {
        visibility: visible !important;
      }

      .readless {
        display: none;
      }

      .slider-item2-image {
        margin-left: 0px !important;
      }

      .trek-sec {
        display: block !important;
      }

      .diff-sec {
        display: none !important;
      }

      .desktop-inform {
        display: none !important;
      }
    }

    .price-occupancy {
      padding: 12px 33px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
      font-family: "Heebo", sans-serif;
    }

    .price-occupancy1 {
      border: none;
    }

    .occupancy {
      display: flex;
      justify-content: center;
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      border: 2px solid #4ec1db0d !important;
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
    }

    .travel-des {
      padding: 30px;
    }

    .travel-des a {
      max-width: 200px;
    }

    .ai1::before {
      background-image: url(assets/img/images/line.svg) !important;
    }

    .accordion-button::after {
      background-image: url(assets/img/images/arrow-down.svg) !important;
    }

    .accordion-button:not(.collapsed)::after {
      background-image: url(assets/img/images/arrow-up.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .why-us {
      background: url(assets/img/images/sea-travel.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      padding: 60px 0px;
    }

    .why-us::before {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .why-para {
      color: #fff;
      text-align: center;
      font-size: 16px;
      margin-bottom: 60px;
    }

    .why-us .trip-inner>h3 {
      margin-bottom: 30px;
      padding: 20px 24px;
    }

    .silder-inner h3 {
      font-size: 11px;
      color: #4EC0DB;
      font-weight: 700;
    }

    .silder-inner h2 {
      color: #094067;
      font-size: 20px;
      margin-bottom: 0.7rem;
    }

    .silder-inner h4 {
      display: flex;
      align-items: center;
      color: #5F6C7B;
      font-size: 12px;
      font-weight: 400;
    }

    .silder-inner h4>img {
      width: 20px;
      height: 20px;
      display: inline-block;
      margin-right: 15px;
      margin-top: -7px;
    }

    .silder-inner1 p {
      border: none !important;
      margin-bottom: 0px !important;
      font-size: 12px;
      font-weight: 400;
      color: #5F6C7B;
      padding-bottom: 10px;
    }



    .silder-inner span {
      display: flex;
      align-items: center;
      color: #4EC0DB;
      font-size: 16px;
      margin-left: 5px;
      font-weight: 600;
    }

    .silder-inner {
      padding: 30px 20px;
      background: #ffff;
    }

    .short-trips {
      background: none;
      padding-bottom: 60px;
    }

    .container-fluid {
      width: 96%;
      padding-right: var(--bs-gutter-x, .75rem);
      padding-left: var(--bs-gutter-x, .75rem);
      margin-right: auto;
      margin-left: auto;
    }

    .acc-btn::after {
      background-image: url(assets/img/images/arroww\ Black.svg) !important;
    }

    .acc-btn:not(.collapsed)::after {
      background-image: url(assets/img/images/arroww\ white.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .trip-nav {
      grid-template-columns: repeat(4, 1fr) !important;
    }

    #tab1 p {
      padding-left: 30px;
      position: relative;
    }

    #tab1 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/chexh\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    #tab2 p {
      padding-left: 30px;
      position: relative;
    }

    #tab2 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/Close\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    .arrow-right {
      height: 20px;
      width: 30px;
      margin-left: 10px;
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

    .trip-about img {
      width: 264px !important;
      height: 315px !important;
      object-fit: cover !important;
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

    .des-sub {
      display: flex;
      justify-content: center;
      margin-left: -43px !important;
      margin-bottom: 43px;
    }

    .accordion-button:not(.collapsed) {
      color: #0c63e4;
      background-color: #094067 !important;
    }

    .faq {
      background-image: url(assets/img/images/world2.png) !important;
    }

    /* dates update */
    .kodai-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .andaman-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .kerala-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .ooty-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .pondi-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .wayanad-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .chik-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .goa-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }
    .munnar-dates{
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .diff i {
      padding: 0 6px 0 0px;
      color: #4ec0db;
      text-shadow: -1.3px 1px #000;
    }

    .difficulty {
      font-size: 14px;
      font-weight: 700;
    }

    .sub-diff {
      font-size: 14px;
      font-weight: 600;
    }

    .diff {
      padding-bottom: 10px;
    }

    .diff-sec {
      margin-top: 20px;
      padding-top: 20px;
      padding-bottom: 10px;
    }

    .trek-sec {
      display: none;
    }

    .trek {
      padding-top: 15px !important;
      padding-bottom: 15px !important;
      background-color: #fff;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      border-radius: 10px;
    }

    /*  */
  </style>
</head>

<body>
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="trip-home">
    <div class="container" style="  position: relative;">
      <h1>MUNNAR WITH KOLUKKUMALAI</h1>
      <!-- <ul class="des-sub">
        <li>
          Zipline <img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
         Kolukkumalai Peak<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        <li>
         Top Station
        </li>
      </ul> -->

      <div class="row desktop-inform">
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i></h3>
            <p style="color:white !important;">Starting Price</p>
            <h2> <span class="munnar-price"></span>/-</h2>
          </div>
        </div>
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="color:white !important;">Duration</p>
            <h2>3 Days - 2 Nights</h2>
          </div>
        </div>
        <div class="col-md-4 col-4 ">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="color:white !important;">Pickup & Drop</p>
            <h2>Chennai</h2>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="trek-sec">
    <div class="container trek">
      <div class="row">
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i>
            </h3>
            <p style="margin: 1px 0px 0px 0 !important;">Starting Price</p>
            <h2 style="color: black;">₹8,499 /-</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Duration</p>
            <h2 style="color: black;">3D - 2N</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Pickup & Drop</p>
            <h2 style="color: black;">Chennai
            </h2>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="container">
      <div class="row diff-sec">
        <div style="margin:0px !important;text-align: left;
    padding-left: 40px;" class="col-md-6 col-6">
          <div class="diff">
            <i class="fa-solid fa-person-hiking"></i><span class="difficulty">Altitude: </span><span
              class="sub-diff">12000ft</span>
          </div>
          <div class="diff">
            <i class="fa-solid fa-map-location-dot"></i><span class="difficulty">Trek Length: </span><span
              class="sub-diff">20km</span>
          </div>
        </div>

        <div style="margin:0px !important; padding:0px; text-align:left;" class="col-md-6 col-6">
          <div class="diff">
            <i class="fa-solid fa-mountain"></i><span class="difficulty">Trek Difficulty: </span><span
              class="sub-diff">Moderate</span>
          </div>
          <div class="diff">
            <i class="fa-solid fa-tents"></i><span class="difficulty"> Base Camp: </span><span class="sub-diff">Sankri
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Welcome Area end ***** -->


  <!-- ***** Travel Desitination***** -->
  <section class="Desitination">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="trip-about">
            <div class="row">
              <div class="col-6">
                <img src="assets/img/kolukkumalai-img/1.jpg" alt="roamers-trip">
              </div>
              <div class="col-6">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-trip" style="margin-top:70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center;">
          <div class="travel-des">
            <h2 style="text-align:left !important;" class="head text-center text-md-left kerala-overview">
              Get Ready to Munnar & Trek Kolukkumalai: Where Fun Meets Adventure
            </h2>
            <p>
              Hey there, fellow adventurers! Get ready to embark on an epic journey through Munnar and Kolukkumalai.
              This trip is all about soaking up the views, chasing waterfalls, conquering peaks, sunrise and sunset
              treks, wildlife spotting in, and sipping tea at the world's highest plantation.
            </p>
            <p>
              <span class="readless">
                But hold onto your hats, because we're also revving up for some heart-pounding jeep safaris, relaxing
                boat
                rides, and a whole lot of super camping fun. It's going to be an adventure to remember, and we can't
                wait
                to make awesome memories together. Let's roll!</span>
              <span id="moreText" style="display:none">
                But hold onto your hats, because we're also revving up for some heart-pounding jeep safaris, relaxing
                boat
                rides, and a whole lot of super camping fun. It's going to be an adventure to remember, and we can't
                wait
                to make awesome memories together. Let's roll!
              </span>
              <a href="javascript:void(0);" id="readMoreLink" onclick="toggleReadMore()">...Read More</a>
            </p>
            <a style="width: 200px" href="#" class="btn mt-5 butn butn__new"> <i style="margin-right: 8px"
                class="fa-solid fa-cloud-arrow-down"></i>Get Itinerary </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Travel Desitination end***** -->

  <!-- ***** Itinerary & Upcoming Dates start***** -->

  <!-- ***** Itinerary start***** -->
  <section class="ilt-up">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="head text-center text-md-left head1">
            Itinerary
          </h2>
          <div class="acc-container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="days"> DAY 0 </div>: CHENNAI TO MUNNAR OVER NIGHT JOURNEY
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                      </div>

                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          N / A
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          N / A
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Hello Roamers! Let's assemble at 9 PM on the designated point in Chennai
                        and gear up for an exciting adventure!
                      </li>
                      <li>
                        Chennai to Munnar overnight journey ahead, floks! Get comfy, let's enjoy some music,
                        play games, share stories, and laugh the night away!
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 1</div>: ARRIVAL | ZIPLINE | SUNSET TREK & CAMPSTAY
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Sunset trek</p>
                        <p>Zipline</p>
                        <p>kayaking</p>
                        <p>Campsite</p>


                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img style="width: 50px;" class="itinerary-logo-img1" src="assets/img/icon/Camp.png" alt="">
                          Camp
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Rise and shine, team! We've arrived in Suryanelli which is the base point for the Kolukkumalai
                        Trek.
                      </li>
                      <li>
                        After refreshments, let's hit our adventure spot. Gear up for the Zipline thrill over tea
                        estates and enjoy nearby kayaking
                      </li>
                      <li>
                        Check-in at our beautiful Campstay destination and take some time to relax and fresh up,
                        then let's go on a short Sunset Trek to a scenic viewpoint.</li>
                      <li>
                        When we get back to Campsite, it's all about fun. Enjoy a delish dinner by the bonfire, play
                        games, music and let's dance under the stars.</li>
                      <li>
                        Retire to your comfortable Camps for a peaceful overnight stay, surrounded by the stunning
                        mountains.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> DAY 2 </div>: KOLUKKUMALAI TREK | MUNNAR EXPLORATION
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <P>Kolukkumalai Peak</P>
                        <p>Jeep Safari</p>
                        <p>Mattupetty</p>
                        <p>Top Station</p>
                        <p>Kundala Lake</p>


                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast + Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Wake Up early team! As our day begins with an epic Sunrise Trek to Kolukkumalai Peak, experience
                        the
                        wild jeep safari at untamed roads leading us to the peak.</li>
                      <li>
                        Let's return back to our campsite, and after hearty breakfast, let's check out and head
                        to explore Munnar.
                      </li>
                      <!-- <li>
                        Next, we'll make our way to the stunning Attukad waterfalls. Don't forget to sip the Elachi tea,
                        which is available nearby - it's quite rare!
                      </li>
                      <li>
                        We'll then proceed to our Zipline adventure spot. Get ready for an adrenaline-pumping zipline
                        experience amidst the clouds with mesmerizing views.
                      </li>
                      <li>
                        On the way, let's make a pit stop at a Munnar farm where we can shop for our favorites — from
                        chocolates to coffee to traditional items. You can find everything here.
                      </li>
                      <li>
                        Rest and recharge fam! Dinner & overnight stay at the hotel.
                      </li> -->
                      <li>
                        We'll start our adventure at the charming Photo Point to capture the beauty of Munnar. Then,
                        we'll proceed to beautiful Mattupetty Dam, opt for a thrilling speedboat ride or take
                        a leisure stroll.
                      </li>
                      <li>
                        Next, we'll visit serene Kundala Lake, surrounded by lush greenery, with options for kayaking
                        or paddle boating.
                      </li>
                      <li>Our final destination is Top Station, one of the highest points in Munnar. Get ready to be
                        mesmerised by the panoramic views. It's like being on top of the world!
                      </li>
                      <li>
                        After a long day, it's time to savor a delicious dinner and enjoy an overnight
                        stay at our hotel.
                      </li>



                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">Day 3</div>: ERAVIKULAM & LAKKOM WATERFALLS | RETURN
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p> Eravikulam National Park</p>
                        <p>Lakkom Waterfalls</p>
                        <p>Tea Museum</p>
                        <p style="text-transform:math-auto;">Return to Chennai</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Hey team, get ready for a fun-filled day. After breakfast, we'll start our journey. Our stop is
                        KDHP Tea Museum. Enjoy the green surroundings, pick up some tea-making tricks, and
                        savour a delicious sip of fresh tea.
                      </li>

                      <li>
                        Next up, let’s head to the Eravikulam National Park for a hike! Enjoy the stunning scenery and
                        keep your eyes peeled for the Neelgiri Tahwr
                      </li>
                      <li>
                        After that, we're heading to the magical Lakkom Waterfalls. Get ready for an immersive
                        experience surrounded by nature's beauty
                      </li>
                      <li>
                        if you're up for it, take a swim in the refreshing cold waters or simply relax with the view.
                      </li>
                      <li>
                        Bid farewell to this awesome hill station, and by evening, we’ll start our journey back home,
                        roamers!
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                    BYE ALL AND BACK TO HOME!
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        We'll aim to arrive in Chennai by 8 am in the morning. Bye for now Roamers. Reunion plans for
                        next year? You bet!
                      </li>
                      <li>
                        Goodbyes are never easy, but what ride
                        it has been! See you guys, more Hugs!
                      </li>

                    </ul>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div class="tab-section">
            <div class="wrapper">
              <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li><a href="#tab1" class="active"><i class="fa-solid fa-check"></i>Inclusions</a></li>
                <li><a href="#tab2"><i class="fa-solid fa-xmark"></i>Exclusions</a></li>
              </ul>
              <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                  <p>Covers Transportation and Jeep Safari.
                  </p>
                  <p>
                    Includes Hotels or Camps. Solo travellers
                    can share with a person of same gender travellers.
                  </p>
                  <p>
                    4 Meals: 2 Breakfast & 2 Dinner
                  </p>
                  <p>
                    Experienced Team Leaders who are super friendly & knowledgeable
                  </p>
                  <p>
                    Entry fees for Included places and local tax. No hidden charges.
                  </p>
                  <p>
                    A-Z Trip assistance from our Travel Experts.
                  </p>
                </div>
                <div id="tab2">
                  <p>Personal Expenses like shopping and for optional activities.
                  </p>
                  <p>Any other costing involved due to natural calamity or any other forced circumstance which are
                    out of our control.
                  </p>
                  <p>
                    GST (5%) is applicable extra.
                  </p>
                  <p>
                    Anything which is not mentioned in the above Inclusions
                  </p>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sticky-sidebar">
            <h2 class="head text-center text-md-left ">
              Upcoming Slots
            </h2>
            <div class="trip-tab">
              <ul class="nav nav-pills trip-nav mb-3" id="pills-tab" role="tablist">
              
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sep</button>
                </li> -->
              
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-mar-tab" data-bs-toggle="pill" data-bs-target="#pills-mar"
                    type="button" role="tab" aria-controls="pills-mar" aria-selected="false">Mar</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-apr-tab" data-bs-toggle="pill" data-bs-target="#pills-apr"
                    type="button" role="tab" aria-controls="pills-apr" aria-selected="false">Apr</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-may-tab" data-bs-toggle="pill" data-bs-target="#pills-may"
                    type="button" role="tab" aria-controls="pills-may" aria-selected="false">May</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-jun-tab" data-bs-toggle="pill" data-bs-target="#pills-jun"
                    type="button" role="tab" aria-controls="pills-jun" aria-selected="false">Jun</button>
                </li>
              </ul>
              <div class="tab-content tab-con" id="pills-tabContent">

               

                <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="upcoming-slot ">
                    <h3> Sep 13</h3>
                  </div>
                </div> -->

              

                <div class="tab-pane fade show active" id="pills-mar" role="tabpanel" aria-labelledby="pills-mar-tab">
                  <div class="upcoming-slot ">
                    <h3> Mar 07</h3>
                    <h3> Mar 14</h3>
                    <h3> Mar 28</h3>
                    <!-- <h4>Closed</h4> -->
                  </div>
                </div>

                <div class="tab-pane " id="pills-apr" role="tabpanel" aria-labelledby="pills-apr-tab">
                  <div class="upcoming-slot ">
                    <h3> Apr 11</h3>
                    <h3> Apr 17</h3>
                    <h3> Apr 25</h3>
                    <!-- <h4>Closed</h4> -->
                  </div>
                </div>

                <div class="tab-pane " id="pills-may" role="tabpanel" aria-labelledby="pills-may-tab">
                  <div class="upcoming-slot ">
                  <h3> May 09</h3>
                  <h3> May 16</h3>
                  <h3> May 23</h3>
                  <h3> May 30</h3>
                    <!-- <h4>Closed</h4> -->
                  </div>
                </div>

                <div class="tab-pane " id="pills-jun" role="tabpanel" aria-labelledby="pills--tab">
                  <div class="upcoming-slot ">
                    <h3> Jun 5</h3>
                    <!-- <h4>Closed</h4> -->
                  </div>
                </div>
              </div>
            </div>
            <h2 style="font-size: 21px; margin-top: 32px;" class="head text-center text-md-left">
              Sharing Occupancy Type
            </h2>
            <div class="occupancy">
              <div class="price-occupancy">
                <select class="price-occupancy1" name="" id="">
                  <option value="9499">Double Sharing</option>
                  <!-- <option value="">Quad Sharing</option> -->
                  <option value="8499" selected>Triple Sharing</option>
                </select>
              </div>
              <div class="price-occupancy">
                <i class="fa-solid fa-location-dot" style="color: #adadad; font-size: 11px; padding: 0px 0 0 4px;"></i>
                <select class="price-occupancy1" name="" id="">
                  <!-- <option value="" selected>Chennai</option> -->
                  <option value="">Chennai</option>
                  <!-- <option value="">Coimbatore</option> -->
                </select>
              </div>
            </div>
            <div class="price">
              <h4>Price</h4>
              <p id="price">₹8,499 <span class="per-person">Per Person</span></p>
            </div>

            <div class="trip-form">
              <a href="https://wa.me/message/QYDBK5TO42TGH1" class="btn inquiry butn butn__new">Send Inquiry</a>
              <a href="kolukkumalai-form" class="btn butn butn__new">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Itinerary end***** -->

  <!-- ***** Itinerary & Upcoming Dates end***** -->

  <!-- ***** why choose us start***** -->

  <!-- <section class="why-us">
    <div class="container position-relative">
      <h2 class="head text-white mb-2">
        why choose us
      </h2>

      <p class="why-para">
        Choose us for your travel needs because we offer extensive knowledge, a user-friendly experience, trustworthy recommendations, and exclusive deals and discounts. 
      </p>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-briefcase"></i></h3>
            <h2>affordable price available</h2>
            <p>
              At our travel site, we prioritize affordability, ensuring that you have access to a wide range of travel options at competitive prices.            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner trip-inner1">
            <h3><i class="fa-solid fa-earth-americas"></i></h3>
            <h2>wide variety of designation</h2>
            <p>
              Embark on your next adventure with our travel site, offering a wide variety of destinations to suit every traveler's taste. From tropical paradises to bustling cities, explore breathtaking landscapes and immerse yourself in diverse cultures around the world.            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-thumbs-up"></i></h3>
            <h2>highly quality of service</h2>
            <p>
              Experience the highest quality of service with our travel site. From personalized assistance to reliable support, we are committed to delivering excellence at every step of your journey.            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ***** why choose us end***** -->


  <!--====== CUSTOMISE YOUR TRIP Start ======-->

  <section class="customise_your_trip  ">
    <h2 class="head">
      Spots/activity
    </h2>
    <div class="slider">
      <div class="slider-container">

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/zip line.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Zip line</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/sunrise trek compress.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Kolukkumalai Peak</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/aadu.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Eravikulam National Park</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2 slider-item2-image">
          <div class="silder-pad">
            <div class="slid-img">

              <img class="cus-img" src="assets/img/kolukkumalai-img/Camp-site.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Camp Site</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/Top-station.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Top Station</h2> -->
            </div>
          </div>
        </div>


        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/chinnakanal-falls.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Chinnakanal Falls</h2> -->
            </div>
          </div>
        </div>


        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/sunset trek.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>sunset Trek</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/Jungle-Safari4.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Jungle Safari</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/Kolukkumalai-tea-estate.jpeg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Kolukkumalai Tea Estate</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/Mattupetty-Dam.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Mattupetty Dam</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/Kundala-lake.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Kundala Lake</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Tiger Rock</h2> -->
            </div>
          </div>
        </div>

      </div>
      <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
      <button class="prev-btn1"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="next-btn1"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
  </section>

  <!-- ***** Gallery start ***** -->

  <!--====== faq Start ======-->
  <section class="faq">
    <h2 class="head">FAQ</h2>
    <div class="container">
      <div class="row">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingOne">
              <button class="accordion-button acc-btn collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Can I Join solo?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Absolutely! Whether you're joining solo, with friends, or as a couple, these group trips are designed to
                accommodate all types of travelers. Join us for budget-friendly adventures and check off more items from
                your bucket list! </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingTwo">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                How about a safety for female Travellers?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, female solo travelers can confidently join our group trips. We prioritize their safety by ensuring
                a secure environment with trusted trip captains, verified hosts, and reliable transport vendors. Your
                safety is our top priority any safety concerns during the trip will be promptly addressed by our team.
                So relax and make the most of your journey!</div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header  acco-head" id="flush-headingThree">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                What is the age requirement to Join?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                The trips is for 18-35 year olds
              </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingFour">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                How do I confirm my booking?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Send the payment screenshot to info@roamers.in and you’ll get the confirmation email within 24 hours.
              </div>
            </div>
          </div>
          <div class="accordion-item acc-item">
            <h2 class="accordion-header acco-head" id="flush-headingFive">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                How do I trust Roamers?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                You can absolutely trust us! We've nailed over 500 awesome trips. Check out the great reviews, speak to
                our travel consultants, and check the website for further details. Our offices are in Chennai and Delhi
                – we're all about being upfront and reliable all the way… Feel free to connect.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== faq END ======-->


  <?php include('includes/trips.php'); ?>
  <!--====== quotes End ======-->

  <!--====== FOOTER START======-->
  <?php include('includes/footer.php'); ?>
  <!--====== FOOTER END======-->

  <!-- ***** All jQuery Plugins ***** -->

  <!-- jQuery(necessary for all JavaScript plugins) -->
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap js -->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>

  <!-- Plugins js -->
  <script src="assets/js/plugins/plugins.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Active js -->
  <script src="assets/js/active.js"></script>
  <script src="assets/js/dates.js"></script>
  <script src="assets/js/price.js"></script>

  <script>
    function toggleReadMore() {

      var moreText = document.getElementById('moreText');
      var readMoreLink = document.getElementById('readMoreLink');

      if (moreText.style.display === 'none') {
        moreText.style.display = 'inline';
        readMoreLink.textContent = '...Read Less';
      } else {
        moreText.style.display = 'none';
        readMoreLink.textContent = '...Read More';
      }
    }


    window.addEventListener('DOMContentLoaded', function () {
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
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

    });


    // *****Sidebar tab content end*****    

    // *****Sidebar tab radio content start*****
    var sliders = document.querySelectorAll(".slider");
    sliders.forEach(function (slider) {
      var sliderContainer = slider.querySelector(".slider-container");
      var prevBtn = slider.querySelector(".prev-btn1");
      var nextBtn = slider.querySelector(".next-btn1");

      var slideWidth = slider.offsetWidth / 5; // Default slide width for desktop
      var slidesToShow = 5; // Number of slides to show at a time on desktop
      var currentSlide = 0;
      var totalSlides = sliderContainer.childElementCount;
      var touchStartX = 0;
      var touchEndX = 0;
      var isDesktop = window.innerWidth >= 768; // Adjust the breakpoint as needed

      if (!isDesktop) {
        slideWidth = slider.offsetWidth / 1; // Slide width for mobile
        slidesToShow = 1; // Number of slides to show at a time on mobile
      }

      prevBtn.addEventListener("click", handlePrevClick);
      nextBtn.addEventListener("click", handleNextClick);
      sliderContainer.addEventListener("touchstart", handleTouchStart);
      sliderContainer.addEventListener("touchmove", handleTouchMove);
      sliderContainer.addEventListener("touchend", handleTouchEnd);

      updateButtonVisibility();

      function handlePrevClick() {
        if (isDesktop) {
          currentSlide = Math.max(currentSlide - 1, 0);
        } else {
          currentSlide = Math.max(currentSlide - 1, 0);
          currentSlide = Math.min(currentSlide, totalSlides - 1);
        }
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        updateButtonVisibility();
      }

      function handleNextClick() {
        if (isDesktop) {
          currentSlide = Math.min(currentSlide + 1, totalSlides - slidesToShow);
        } else {
          currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
        }
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        updateButtonVisibility();
      }

      function handleTouchStart(e) {
        touchStartX = e.touches[0].clientX;
      }

      function handleTouchMove(e) {
        touchEndX = e.touches[0].clientX;
        var touchDistance = touchStartX - touchEndX;

        // Smooth scrolling by adjusting the transform value based on touch distance
        sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth - touchDistance}px)`;
      }

      function handleTouchEnd() {
        var touchDistance = touchStartX - touchEndX;

        if (touchDistance > slideWidth / 2) {
          handleNextClick();
        } else if (touchDistance < -slideWidth / 2) {
          handlePrevClick();
        } else {
          // Reset the transform value if swipe distance is not significant
          sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
        }
      }

      function updateButtonVisibility() {
        if (currentSlide === 0) {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none";
        } else if (currentSlide >= totalSlides - slidesToShow) {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none";
        } else {
          prevBtn.style.display = "none";
          nextBtn.style.display = "none ";
        }
      }
    });
  </script>
  <script>
    var navbar = document.querySelector('nav')

    window.onscroll = function () {

      // pageYOffset or scrollY
      if (window.scrollY > 100) {
        navbar.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled')
      }
    }
    const selectElements = document.getElementsByClassName("price-occupancy1");

    // Get the price element
    const price = document.getElementById('price');
    const person = document.querySelector('.per-person');

    // Add a change event listener to each select element
    for (const select of selectElements) {
      select.addEventListener("change", function () {
        // Get the selected option
        const selectedOption = select.options[select.selectedIndex];

        // Update the value
        const selectedValue = parseInt(selectedOption.value); // Parse as an integer

        // You can do something with the selected value here
        price.innerHTML = `₹${selectedValue.toLocaleString()} <span class="per-person">Per Person</span>`;
      });
    }
  </script>
</body>

</html>