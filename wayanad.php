<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content=”https://roamers.in/assets/img/wayanad/Heartshape.jpg” />
  <title>Roamers</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Wayanad" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/wayanad/Heartshape.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/wayanad/Heartshape.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
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
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

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

    .butn span {
      z-index: 20;
    }

    .trip-home {
      background: url(assets/img/wayanad/Chembra-Peak-Wayanad.jpg) !important;
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      position: relative !important;
      background-attachment: fixed !important;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
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

    .travel-des {
      padding: 30px;
    }

    .travel-des a {
      max-width: 200px;
    }

    .upcoming-slot h4 {
      font-weight: 400;
      padding: 3px 8px 3px 8px;
      background: white;
      border-radius: 10px;
      box-shadow: rgb(255 255 255 / 30%) 0px 1px 2px 0px, rgb(125 128 130 / 15%) 0px 2px 6px !important;
      font-size: 14px !important;
      line-height: 26px;
      color: #878686 !important;
      margin: 0;
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

    .price-occupancy {
      padding: 10px 30px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
      font-family: "Heebo", sans-serif;
    }

    .trip-about img {
      transition: 0.5s all;
      border-radius: 5px;
    }

    .trip-about img:hover {
      transform: scale(1.04) !important;
    }

    .price-occupancy1 {
      border: none;
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      /* border: 2px solid #4ec1db0d !important; */
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
    }


    .occupancy {
      display: flex;
      justify-content: center;
    }

    .itinerary-logo-content p {
      font-size: 14px;
      background: #d8eefe !important;
      margin: 4px;
      color: black !important;
      color: black !important;
      border-radius: 31px;
      padding: 5px 10px;
      text-transform: capitalize;
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

    .trip-home {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      padding: 280px 280px 150px !important;
      margin-top: -127px;
      position: relative;
    }

    .trip-home h1 {
      text-align: center;
      color: #fff;
      text-transform: capitalize;
      font-weight: 800;
      line-height: 1.1 !important;
      font-size: 46px;
      margin: 86px 0px 54px !important;
    }

    @media (max-width: 600px) {
      .kerala-overview {
        font-size: 20px !important;
      }

      #price {
        margin-left: 105px !important;
      }

      .price-occupancy {
        padding: 10px 20px !important;
        font-size: 14px !important;
        box-shadow: rgb(0 207 264 / 35%) 0px 6px 10px, rgba(0, 0, 0, 0.23) 0px 2px 5px;
      }


      #moreText {
        visibility: visible !important;
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

      #readMoreLink {
        visibility: visible !important;
      }

      .readless {
        display: none;
      }

      .trip-home h1 {
        margin: 77px 0px 25px !important;
      }

      #tab1 p {
        font-size: 11px;
      }


      .accordion-button {
        font-size: 10px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 10px !important;
      }

      #tab2 p {
        font-size: 11px;
      }

      .occupancy {
        font-size: 10px !important;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .slider-item2 {
        flex: 0 0 calc(96%) !important;
        padding: 15px;
      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      .slider-item2 img {
        height: 380px !important;
      }

      .slider-item2-image {
        margin-left: 0px !important;
      }

      .trek-sec {
        display: block !important;
      }

      .desktop-inform {
        display: none !important;
      }

      .diff-sec {
        display: none !important;
      }
    }

    .des-sub {
      display: flex;
      justify-content: center;
      margin-left: -43px !important;
      margin-bottom: 43px;
    }

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
    }

    .with-travel {
      text-align: center;
      font-size: 18px;
      margin-top: 25px;
      display: none;
    }

    .with-travel-price {
      color: #4ec0db;
      font-weight: 800;
      margin-right: 5px;
      margin-left: 5px;
    }

    .accordion-button:not(.collapsed) {
      color: #0c63e4;
      background-color: #094067 !important;
    }

    #moreText {
      visibility: hidden;
    }

    #readMoreLink {
      visibility: hidden;
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

    .munnar-dates {
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
      <h1 style="line-height: 1.1;"> WONDERS OF WAYANAD</h1>

      <!-- <ul class="des-sub">
        <li>
          Edakkal Caves <img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Glass Bridge<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        <li>
          Pookode Lake
        </li>
      </ul> -->
      <div class="row desktop-inform">
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i></h3>
            <p style="color:white !important;">Starting Price</p>
            <h2> <span class="wayanad-price"></span>/-</h2>
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
            <h2>Direct Wayanad / Chennai</h2>
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
            <h2 style="color: black;">₹7,990 /-</h2>
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
            <h2 style="color: black;">Direct/Chennai
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

  <style>
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
  </style>

  <!-- ***** Welcome Area end ***** -->


  <!-- ***** Travel Desitination***** -->
  <section class="Desitination">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="trip-about">
            <div class="row">
              <div class="col-6">
                <img style="height:261px" src="assets/img/wayanad/Edakkal caves.jpg" alt="roamers-trip">
              </div>
              <div class="col-6">
                <img src="assets/img/wayanad/chembara peak.jpg" alt="roamers-trip" style="margin-top:70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center;">
          <div class="travel-des">
            <h2 style="text-align:left !important;" class="head text-center text-md-left kerala-overview">
              Let’s Unlock Wayanad…
            </h2>
            <p>
              Get ready for an exciting Wayanad adventure, Roamers! Picture trekking to Chembra Peak, where the
              heart-shaped lake unfolds its magic. The trip loaded with adrenaline-pumping Jeep safari, Zipline
              adventures, nature & wildlife spotting, Waterfall chasing, and surprises at every turn.
            </p>
            <p>
              <span class="readless">
                Days are filled with immersive local experiences, scenic exploration, team sessions, exhilarating
                adventures, and, of course, feasting on Kerala cuisine. Wayanad isn’t just a destination; it's a nature
                retreat ready to be unlocked. Ready for the ride, Roamers?</span>
              <span id="moreText" style="display:none">
                Days are filled with immersive local experiences, scenic exploration, team sessions, exhilarating
                adventures, and, of course, feasting on Kerala cuisine. Wayanad isn’t just a destination; it's a nature
                retreat ready to be unlocked. Ready for the ride, Roamers?</span>
              <a href="javascript:void(0);" id="readMoreLink" onclick="toggleReadMore()">...Read More</a>
            </p>
            <a style="width: 200px" href="wayanad-form" class="btn butn butn__new"> <i style="margin-right: 9px"
                class="fa-solid fa-cloud-arrow-down"></i><span>Get Itinerary </span></a>

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
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <div class="days">
                      Day 0 </div>: Overnight journey to Wayanad
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="acc-inner">
                      <li>
                        Hey Roamers! Meet your team and trip leader at the given point, and let’s kick-start our Wayanad
                        journey.
                      </li>
                      <li>Overnight journey: We’ll travel from Chennai to Bangalore (Sleeper A/C Bus)
                      </li>
                      <li>
                        We’ll reach Bangalore early in the morning, grab a quick tea, and continue our journey to this
                        amazing hill station.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>



              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="days">
                      Day 1 </div>: Wayanad Arrival, Karapuzha Adventures& more
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <!-- <p>Bangalore</p> -->
                        <p>Jain Temple
                        </p>
                        <p>Karapuzha dam
                        </p>
                        <P>Longest zipline</P>
                        <p>Manjappara Viewpoint</p>
                        <p>Campfire</p>

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
                          Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        We’ll reach Wayanad by morning. On the way, let’s stop at the Jain Temple, famous for its
                        ancient architecture and historical charm.
                      </li>
                      <li>Next, we’ll visit the peaceful Karapuzha Dam & adventure park
                      </li>
                      <li>
                        Explore the serene Dam and try the Longest zipline, a giant swing, and other thrilling
                        activities or just relax in the scenic surroundings.
                      </li>
                      <li>
                        Later, we’ll stop at Manjappara Viewpoint to soak in stunning views and capture some beautiful
                        pictures.
                      </li>
                      <li>
                        Let’s return to the resort, where it’s time for some fun and bonding. Campfire, music, games,
                        and dance.
                      </li>
                      <li>Relish a delicious dinner with the team and overnight stay at Resort
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 2 </div>: Edakkal Caves, Glass Bridge Adventures | Camping
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Edakkal Caves
                        </p>
                        <p>Jeep safari</p>
                        <p>900 Kandi Glass Bridge</p>
                        <p>Waterfall </p>
                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">
                          Transportation
                        </p>
                        <p>
                          <img style="width:50px;" class="itinerary-logo-img1" src="assets/img/icon/Camp.png" alt="">
                          Camp
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Breakfast + Dinner
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        After a quick freshen-up and breakfast, we’ll begin our day with a hike to the Edakkal Caves.
                      <li>
                        Let’s explore this ancient wonder and take in the epic views from the top.
                      </li>
                      <li>
                        After lunch, we’ll jump into a jeep safari and head to the stunning 900 Kandi Glass Bridge. Opt
                        for optional activities nearby for extra fun
                      </li>
                      <li>
                        From here, we’ll drive to the campsite in a jeep. If time permits, we can go on a short hike to
                        a hidden waterfall nearby.
                      </li>
                      <li>
                        Let’s gather for a team dinner around the campfire, enjoy music and dance, and camp under the
                        stars.
                      </li>
                      <li>
                        We’ll relish a scrumptious dinner before settling into our tents for the night.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 3</div>: Tea Estate Zipline, Banasura Boating, and Farewell
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Zipline</p>
                        <p>Banasura Sagar Dam</p>
                        <p>Boating</p>
                        <p>Meenmutty Waterfalls </p>
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
                          Breakfast
                        </p>
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        We’ll wake up to stunning views at the campsite and enjoy a hearty breakfast.
                      </li>
                      <li>
                        Our next stop is the zipline spot, where we can try the thrilling cycle zipline over lush tea
                        estates or simply relax in the peaceful surroundings.
                      </li>
                      <li>
                        Then, we’ll head to Banasura Sagar Dam, one of the largest earthen dams in the world.
                      </li>
                      <p>Let’s hop on a speedboat ride for an exhilarating experience and sneak some time for souvenir
                        shopping.</p>
                      <li>
                        Finally, we’ll visit the magical Meenmutty Waterfalls, surrounded by rocky green mountains like
                        paradise setting
                      </li>
                      <li>
                        After quick refreshments, we’ll wrap up this unforgettable Wayanad trip and depart with
                        incredible memories.
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
                        Goodbyes are never easy, but what a ride
                        it has been! See you guys, more Hugs!
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- *****tab section start***** -->
          <div class="tab-section">
            <div class="wrapper">
              <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li><a href="#tab1" class="active"><i class="fa-solid fa-check"></i>Inclusions</a></li>
                <li><a href="#tab2"><i class="fa-solid fa-xmark"></i>Exclusions</a></li>
              </ul>
              <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                  <p>Cover all Transportation as mentioned in itinerary.
                  </p>
                  <p>
                    Includes Hotels or Camps. Solo travellers can share with a person of same gender travellers.
                  </p>
                  <p>
                    4 Meals: 2 Breakfast, 2 Dinner
                  </p>
                  <p>
                    Experienced Team Leaders who are super friendly & knowledgeable
                  </p>
                  <p>
                    Jeep Safari included.
                  </p>
                  <p>
                    Entry fees for Included places and local tax. No hidden charges.
                  </p>
                  <p>
                    A-Z Trip assistance from our Travel Experts.
                  </p>
                </div>
                <div id="tab2">
                  <p>
                    GST (5%) is applicable extra.
                  </p>
                  <p>Personal Expenses like shopping and for other optional activities like Kayaking or zipline.
                  </p>
                  <p>Any other costing involved due to natural calamity or any other forced circumstance which are
                    out of our control.
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

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Nov</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-aug-tab" data-bs-toggle="pill" data-bs-target="#pills-aug"
                    type="button" role="tab" aria-controls="pills-aug" aria-selected="false">Dec</button>
                </li>
              </ul>
              <div class="tab-content tab-con" id="pills-tabContent">

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="upcoming-slot ">
                    <h3> Nov 14</h3>
                    <h4>Closed</h4>
                  </div>
                </div>

                <div class="tab-pane fade show active" id="pills-aug" role="tabpanel" aria-labelledby="pills-aug-tab">
                  <div class="upcoming-slot ">
                    <h3> Dec 21</h3>
                  </div>
                  <div class="upcoming-slot ">
                    <h3> Dec 29</h3>
                    <h4 style="background:#ff9500 !important; color:#fff !important;">New Year Trip</h4>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="upcoming-slot ">
                    <h3> Sep 27</h3>
                  </div>
                </div>

              </div>
            </div>

            <h2 style="font-size: 21px; margin-top: 32px;" class="head text-center text-md-left">
              Sharing Occupancy Type
            </h2>
            <!-- <div style="position:relative;">
              <h3 class="bird-offer">EARLY BIRD OFFER FROM CHENNAI!..</h3>
              <img class="siren" src="assets/img/bg/siren.gif" alt="">
            </div> -->
            <div class="occupancy">
              <div class="price-occupancy">
                <select class="price-occupancy1" name="" id="price-occp">
                  <option value="double">Double Sharing</option>
                  <option selected value="triple">Triple Sharing</option>
                </select>
              </div>
              <div class="price-occupancy">
                <i class="fa-solid fa-location-dot" style="color: #adadad; font-size: 10px; padding: 0px 0 0 4px;"></i>
                <select class="price-occupancy1" name="" id="price-occp1">
                  <option value="chennai">Chennai</option>
                  <option selected value="direct">Direct</option>
                </select>
              </div>
            </div>
            <style>
              .bird-offer {
                color: red;
                font-size: 16px;
                font-weight: 900;
                text-align: center;
                animation: smooth-blink 0.9s infinite;
              }

              @keyframes smooth-blink {

                0%,
                100% {
                  opacity: 1;
                }

                50% {
                  opacity: 0;
                }
              }

              .siren {
                width: 8%;
                position: absolute;
                top: -30px;
                left: 35px;
                transform: rotate(-31deg);
              }

              @media(max-width:600px) {
                .siren {
                  width: 9% !important;
                  position: absolute;
                  top: -29px !important;
                  left: 9px !important;
                }
              }
            </style>

            <div class="price">
              <h4>Price</h4>
              <p style="margin-left: 190px;" id="price">₹7,999 </p><span id="per-person"></span>
            </div>
            <h3 id="withtravel" class="with-travel">With Travel - <span class="with-travel-price"> Sleeper bus
                (AC)</span> </h3>


            <div class="trip-form">
              <a href="https://wa.me/message/QYDBK5TO42TGH1" class="btn inquiry butn butn__new">Send Inquiry</a>
              <a href="wayanad-form" class="btn butn butn__new">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var perperson = document.getElementById('per-person');
      perperson.innerHTML = " per person";
      perperson.style.fontWeight = "500";
      perperson.style.fontSize = "13px";
      perperson.style.color = "#7c7c7c";
    });


    var selectElements = document.getElementById("price-occp");
    var selectElements1 = document.getElementById("price-occp1");
    var price = document.getElementById('price');
    var bbb = document.getElementById('withtravel');

    selectElements.addEventListener("change", updatePrice);
    selectElements1.addEventListener("change", updatePrice);

    function updatePrice() {
      var selectedValue = selectElements.value;
      var selectedValue1 = selectElements1.value;

      if (selectedValue == "double" && selectedValue1 == "chennai") {
        price.innerHTML = "₹10,990";
        bbb.style.display = "block";
      } else if (selectedValue == "triple" && selectedValue1 == "direct") {
        price.innerHTML = "₹7,990";
        bbb.style.display = "none";
      } else if (selectedValue == "triple" && selectedValue1 == "chennai") {
        price.innerHTML = "₹9,990";
        bbb.style.display = "block";
      } else if (selectedValue == "double" && selectedValue1 == "direct") {
        price.innerHTML = "₹8,990";
        bbb.style.display = "none";
      }
    }

    // Initial price update when the page loads
    updatePrice();
  </script>

  <!-- ***** Itinerary end***** -->

  <!-- ***** Itinerary & Upcoming Dates end***** -->


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
              <img class="cus-img" src="assets/img/wayanad/900Kandi.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>900 Kandi</h2> -->
            </div>
          </div>
        </div>


        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Karapuzhadam.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Karapuzha Dam</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/EdakkalCaves.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Edakkal Caves</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Kanthanparawaterfalls.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Waterfalls</h2> -->
            </div>
          </div>
        </div>
        <!-- <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Enoorutribalvillage.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2>En Ooru Tribal Village </h2>
            </div>
          </div>
        </div> -->

        <div class="slider-item2 ">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Kurumbalakotta.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Sunrise point</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Bansuradam.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Bansura Dam </h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/wayanad/Pookodelake.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Pookode Lake</h2> -->
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

  <!-- *****short break trips end ***** -->

  <?php include('includes/trips.php'); ?>


  <!--====== quotes End ======-->

  <!--====== FOOTER START======-->
  <footer class="footer-section">
    <?php include('includes/footer.php'); ?>

    <!--====== FOOTER END======-->

    <!-- ***** All jQuery Plugins ***** -->
    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    </head>
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
    <script src="assets/js/price.js"></script>

    <script>

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
            1550: {
              slidesPerView: 4,
            },
            640: {
              slidesPerView: 4,
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
            nextBtn.style.display = "none";
          }
        }
      });



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
    </script>


</body>

</html>