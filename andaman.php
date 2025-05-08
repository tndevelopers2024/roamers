<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content=”https://roamers.in/assets/img/andaman/Media/elephant-beach.jpg” />
  <title>Roamers</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Andaman" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/andaman/Media/elephant-beach.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/andaman/Media/elephant-beach.jpg" />
  <meta property="og:image:width" content="500" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon"  sizes="192x192" />
  
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
  <!-- <?php include('mail-pages/form.php'); ?> -->

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

    .trip-about img {
      transition: 0.5s all;
      border-radius: 5px;
    }

    .trip-about img:hover {
      transform: scale(1.04) !important;
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
      background: url(assets/img/andaman/Media/Andaman-cover-min.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
    }

    @media (max-width: 600px) {

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

      .kerala-overview {
        font-size: 20px !important;
      }

      .price-occupancy {
        padding: 10px 20px !important;
        font-size: 14px !important;
        box-shadow: rgb(0 207 264 / 35%) 0px 6px 10px, rgba(0, 0, 0, 0.23) 0px 2px 5px;
      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      #price {
        margin-left: 105px !important;
      }

      #tab1 p {
        font-size: 11px;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .accordion-button {
        font-size: 9.5px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 10px !important;
      }

      #tab2 p {
        font-size: 11px;
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

      .trip-home h1 {
        margin: 72px 0px 20px !important;
      }

      .des-sub {
        margin-bottom: 20px !important;
      }

      .occupancy {
        font-size: 10px !important;
        justify-content: center !important;
      }


      .slider-item2 {
        flex: 0 0 calc(96%) !important;
        padding: 15px;
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
      .diff-sec{
        display: none !important;
      }
      .desktop-inform {
        display: none !important;
      }
    }


    .travel-des {
      padding: 30px;
    }

    .travel-des a {
      max-width: 200px;
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

    .price-occupancy {
      padding: 10px 30px;
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
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      border: 2px solid #4ec1db0d !important;
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
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

    #moreText {
      visibility: hidden;
    }

    #readMoreLink {
      visibility: hidden;
    }

    .arrow-right {
      height: 20px;
      width: 30px;
      margin-left: 10px;
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

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
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

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
    }

    .goa-dates {
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
  <!--====== Preloader Area Start ======-->

  <!--====== Preloader Area end ======-->
  <!-- ***** Header Start ***** -->

  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="trip-home">
    <div class="container" style="  position: relative;">
      <h1>ANDAMAN ISLAND HOPPING </h1>
      <ul class="des-sub">
        <li>
          Havelock Island <img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Neil Island<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        <li>
          Port Blair
        </li>
      </ul>
      <div class="row desktop-inform">
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i></h3>
            <p style="color:white !important;">Starting Price</p>
            <h2><span class="andaman-price"></span>/-</h2>
          </div>
        </div>
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="color:white !important;">Duration</p>
            <h2>7 Days - 6 Nights</h2>
          </div>
        </div>
        <div class="col-md-4 col-4 ">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="color:white !important;">Pickup & Drop</p>
            <h2>Port Blair</h2>
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
            <h2 style="color: black;">₹24,490 /-</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Duration</p>
            <h2 style="color: black;">5D - 4N</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Pickup & Drop</p>
            <h2 style="color: black;">Port Blair
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
                <img src="assets/img/andaman/Media/overview-1.jpg" alt="roamers-trip">
              </div>
              <div class="col-6">
                <img src="assets/img/andaman/Media/overview-2.jpg" alt="roamers-trip" style="margin-top:70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center;">
          <div class="travel-des">
            <h2 class="head text-left text-md-left "
              style=" margin-bottom: 12px !important; font-size: 24px !important;">
              Let’s Rule the King of beaches!
            </h2>
            <p>
              Hey, adventure squad! Get ready to unwind in the Andaman Islands. We're talking endless beaches,
              jaw-dropping coral reefs, and sunsets that'll leave you speechless. No rushing here – it's all about that
              laid-back island life. Grab your swim suits and let's dive into paradise, one beach at a time! haha</p>
            <p>
              <span class="readless">
                Imagine scuba diving, snorkeling, parasailing, glass-bottom Boats, treks, and bucket list moments. Plus,
                get ready for seafood feasts that'll tantalise your taste buds. It's not just a trip; it's a
                nature-filled
                retreat where we'll chill, explore, and create unforgettable memories together. Andaman, here we come!
                🌴🦀🚤</span>
              <span id="moreText" style="display:none">
                Imagine scuba diving, snorkeling, parasailing, glass-bottom Boats, treks, and bucket list moments. Plus,
                get ready for seafood feasts that'll tantalise your taste buds. It's not just a trip; it's a
                nature-filled
                retreat where we'll chill, explore, and create unforgettable memories together. Andaman, here we come!
                🌴🦀🚤</span>
              <a href="javascript:void(0);" id="readMoreLink" onclick="toggleReadMore()">...Read More</a>

            </p>
            <a href="assets/brochures/Andaman-Itinerary.pdf" class="btn mt-4 butn butn__new"> <i
                style="margin-right: 6px;" class="fa-solid fa-cloud-arrow-down"></i> Get Itinerary</a>
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
                    <div class="days">
                      Day 1</div>: Arrival in Port blair | Meet up | Cellular jail
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Port Blair</p>
                        <p>Sound and Light Show</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Feel the thrill as you touch down in Port Blair, the lively gateway to the Andaman Islands.
                      </li>
                      <li>
                        Spot your enthusiastic Roamers representative at Veer Savarkar Airport, ready to guide you
                        through an immersive experience.
                      </li>
                      <li>
                        Dump your stuff, relax at the hotel and meet the Team captains & cot ravellers. Enjoy delicious
                        food, play games, Share stories, and laugh. Get pumped for an epic Andaman Adventure.
                      </li>
                      <li>
                        Post a pleasant breezy isl and Walk and late eve let's head out to visit the famous Cellular
                        Jail and witness the heroic saga of the Indian freedom struggle through Sound and light show.
                      </li>
                      <li>
                        Get back to our comfy hotel for a hearty dinner and restful overnight stay. Engage in Games,
                        music and fun-filled activities.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">
                      Day 2</div>: Havelock Island: Ferry Tranfer, Beach evenings & cafe Hopping
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Havelock Island</p>
                        <p>Radhanagar Beach</p>
                        <p>Mangrove Forest</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Let's start our day with a delightful breakfast and Depart from Port Blair to Havelock Island on
                        ascenic Ferry ride, soaking in the mesmerising views of the sea.
                      </li>
                      <li>
                        Upon reaching Havelock Island , we'll check-into a beachside resort and settle into our
                        accommodation, allowing the island vibes to embrace us.
                      </li>
                      <li>
                        Then, let's head out to explore the renowned Rad hanagar Beach , known for its pristine white
                        sands and crystal-clear waters. Go for Swim or stroll a long the beach, discover charming &
                        lnstagram-worthy cafes and treat yourself enjoying the coastal ambience.
                      </li>
                      <li>
                        Embark on a short trail to capture the breathtaking sunset views and immerse in the serene
                        atmosphere of the island.
                      </li>
                      <li>
                        Go back to the resort and let's get ready for an island-style Moon lit Party with the squad.
                        Loose, dance, and create unforgettable memories under the enchanting moon light
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 3</div>: Scuba diving, Trek & Island explore
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Kalapathar Beach</p>
                        <p>Scuba diving</p>
                        <p>snorkelling</p>
                        <P>Sea Walk</P>
                        <p>Elephant Beach</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Post breakfast, let's venture out to the blissful Kalapathar Beach and Get ready to explore its
                        breath taking views and sports adventures.
                      </li>
                      <li>Experience the thrill of scuba diving, snorkelling or sea walk. Immerse yourself into crysta
                        l-clear water and discover a vibrant underwater world. Say hi to our friendly Sea Roamer 'Nemo'
                        and make your coral adventure unforgettable!
                      </li>
                      <li>
                        For those who aren't into sporty activities, take a leisurely stroll a long the shoreline. Find
                        a cozy spot on the beach and soak yourself in the tranquil atmosphere. You're in a paradise!
                      </li>
                      <li>
                        After, let's Trek into the lush jungle and uncover the secluded Elephant Beach, Where you can
                        ride on a glass bottom boat ride. It's an absolute sight on our journey. </li>
                      <li>
                        Return to our comfortable resort for a satisfying dinner with the team and an over night stay.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 4</div>: Neil Island:Premium ferry | Beach & Cafe hopping
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Bharatpur Beach</p>
                        <p>Laxmanpur Beach</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Settle into the calm atmosphere of the resort. Then, let's head towards Bharatpur Beach, a
                        hidden gem. Capture lnstagra m-worthy shots of the picture sque beach surroundings and relax
                        under the shade of swaying palm trees.
                      </li>
                      <li>Afterward, make your way to Laxmanpur Beach, another secluded paradise lying 2km north of Neil
                        jetty known for its own unique charm
                      </li>
                      <li>
                        As the day draws to a close, prepare to capture the enth ralling sunset and satisfy your taste
                        buds with flavour some meal </li>
                      <li>
                        After settling at the resort, let's play some games, music and dance.
                      </li>
                      <li>
                        Group Polling will be held by Team captains with the gang to decide what activity they'll want
                        to do tomorrow? You're in for a surprise!
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 5</div>: Unplanned day by group poll
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Neil Island</p>
                        <p>Corbyn's Cove Beach</p>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        The team must've been given the choice for the day to be decided; the spot choices will be given
                        by the team captains the day prior to the poll. So let's have breakfast and start exploring
                      </li>
                      <li>
                        Late noon, let's say good bye to the Neil islands gang, we're returning back to Port Blair via
                        Ferry.
                      </li>
                      <li>
                        Indulge in the resort's cosy ambiance, and if we get time we'll visit Port Blair's Corbyn's Cove
                        Beach and stroll near by.
                      </li>
                      <li>
                        Come back to the resort to enjoy a hearty dinner, and unwind with an over­ night stay in
                        comfort.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 6</div>: City Tour & Farewell Dinner
                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Anthropological Museum</p>
                        <p>Fisheries Museum</p>
                        <p>Cellular Jail</p>
                        <P>shopping</P>

                      </div>
                      <div class="itinerary-logo">
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Andamantransportation.png"
                            alt="clint-img">
                          Transportation
                        </p>
                        <p>
                          <img class="itinerary-logo-img" src="assets/img/icon/Hotel.png" alt="">
                          Hotel
                        </p>
                        <p>
                          <img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">
                          Meals
                        </p>

                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Wake up and enjoy breakfast and let's start touring Port Blair.
                      </li>
                      <li>
                        We'll explore the Anth ropological Museum, which showcases the tools, pictures, and history of
                        the in digenous tribes in the Andaman and Nicobar Islands.
                      </li>
                      <li>
                        Afterwards, we will discover the Fisheries Museum, known for its impressive collection of divers
                        fish species found in the Andaman Islands.
                      </li>
                      <li>Let's refuel with a quick Lunch before heading to the famous Cellular Jail, once home to
                        India's most not able political prisoners.
                      </li>
                      <li>
                        Get time to go shopping and buy souvenirs to your loved ones, and in Andaman there's plenty you
                        can buy home, get the help of a team leader to get to know what to get.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 7</div>: Bye all & Back to home!
                  </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="bye-bye text-center">
                        <!-- <p>Supa Dam</p>
                        <p>River Rafting</p> -->
                        <p>Bye Bye and Take Care!</p>
                        <!-- <P>crocodile park</P>
                        <P>kAIL river</P> -->
                      </div>

                    </div>
                    <ul class="acc-inner">
                      <li>
                        In just 7 days, we shared thrills, spills, and countless good times. Let's plan a reunion
                        trip next year to continue the adventure. 100% guaranteed!
                      </li>
                      <li>
                        Good byes are never easy, but what ride it has been! See you guys, more Hugs!
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
                  <p>
                    Covers all the Local Transportations including Airport Pick up & Drop off.
                  </p>
                  <p>
                    Resorts or Hotels on Twin share basis. Solo travellers can share with a person of same gender
                    travellers.
                  </p>
                  <p>
                    6 Breakfast & '2 Dinner(Including Farewell Dinner).
                  </p>
                  <p>
                    Experienced Team Leaders who are super friendly & knowledge.
                  </p>
                  <p>
                    Entry fees for the Spots, Local Tax and Port charges. No hidden charges.
                  </p>
                  <p>
                    A-Z Trip assistance from our Travel Experts.
                  </p>
                </div>
                <div id="tab2">
                  <p>
                    Flights to Port Blair & Return. You can book flights personally by yourself or through our
                    services seperately.
                  </p>
                  <p>
                    Personal expenses like shopping and for optional activities such as Scuba diving, Bike rental etc.
                  </p>
                  <p>
                    Any other costing involved due to natural calamity or any other forced circumstances which are out
                    of our control.
                  </p>
                  <p>
                    GST(5%) is applicable extra.
                  </p>
                  <p>
                    Anything which is not mentioned in inclusions
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
                  <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Jan</button>
                </li> -->
                    <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Feb</button>
                </li> -->
                <li class="nav-item " role="presentation">
                  <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mar</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Apr</button>
                </li> -->
              </ul>
              <div class="tab-content tab-con" id="pills-tabContent">

              <!-- <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                  aria-labelledby="pills-profile-tab">
                  <div class="upcoming-slot ">
                    <h3> Jan 14 </h3>
                  </div>
                </div> -->
                <!-- <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="upcoming-slot ">
                    <h3>Feb 08</h3>
                  </div>
                  <div class="upcoming-slot ">
                    <h3>Feb 22</h3>
                  </div>
                </div> -->
       
                <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="upcoming-slot ">
                    <h3> Mar 14</h3>
                  </div>
                  <div class="upcoming-slot ">
                    <h3> Mar 29</h3>
                  </div>
                </div>
                <!-- <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="upcoming-slot ">
                    <h3> Apr 10</h3>                    
                  </div>
                  <div class="upcoming-slot ">
                    <h3> Apr 17</h3>                    
                  </div>
                </div> -->
              </div>
            </div>
            <h2 style="font-size: 21px; margin-top: 32px;" class="head text-center text-md-left">
              Sharing Occupancy Type
            </h2>
            <div class="occupancy">
              <div class="price-occupancy">
                <select class="price-occupancy1" name="" id="">
                  <option value="" selected>Double Sharing</option>
                  <option value="" disabled>Triple Sharing</option>
                </select>
              </div>
              <div class="price-occupancy">
                <i class="fa-solid fa-location-dot" style="color: #adadad; font-size: 11px; padding: 0px 0 0 4px;"></i>
                <select class="price-occupancy1" name="" id="">
                  <option value="">Port Blair</option>
                </select>
              </div>
            </div>
            <div class="price">
              <h4>Price</h4>
              <p id="price">₹24,490 <span class="per-person">Per Person</span></p>
            </div>

            <div class="trip-form">

              <a href="https://wa.me/message/QYDBK5TO42TGH1" class="btn inquiry butn butn__new">Send Inquiry</a>
              <a href="andaman-form" class="btn butn butn__new">Book Now</a>

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
              <img class="cus-img" src="assets/img/andaman/Media/61af5c4e959d8191_28.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <h2> Scuba Diving</h2>
            </div>
          </div>
        </div>
        <!-- <div class="slider-item2">
          <div class="silder-pad">
              <div class="slid-img">
                <img class="cus-img" src="assets/img/andaman/Media/61b1b4cb48339141_light_jail.jpg"
                  alt="roamers-Gallery">
              </div>
              <div class="cust-inner">
                <h3> </h3>
                <h2>Cellular jail</h2>
              </div>  
          </div>
        </div> -->
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/610a5c749433a121_images-anthropological3-500x500.jpeg"
                alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Anthropology Museum</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/bharatpur-beach-neil-island.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Bharatpur Beach </h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/cellular-jail-in-andaman-reviews.jpg"
                alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Cellular jail </h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg"
                alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>laxmanpur beach </h2> -->
            </div>
          </div>
        </div>
        <!-- <div class="slider-item2">
          <div class="silder-pad">
              <div class="slid-img">
                <img class="cus-img" src="assets/img/andaman/Media/andaman-and-nicobar.jpg" alt="roamers-Gallery">
              </div>
              <div class="cust-inner">
                <h3> </h3>
                <h2> Scuba Diving </h2>
              </div>  
          </div>
        </div> -->

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/andaman-markets.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Andaman Local Tour</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/elephant-beach.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Elephant beach</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/andaman/Media/Portblair-group-min.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Port blair </h2> -->
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
            1440: {
              slidesPerView: 4,
            },
            940: {
              slidesPerView: 3,
            },
            640: {
              slidesPerView: 2,
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
      // Get all elements with the class "price-occupancy1"
      const selectElements = document.getElementsByClassName("price-occupancy1");

      // Get the price element
      const price = document.getElementById('price');

      // Add a change event listener to each select element
      for (const select of selectElements) {
        select.addEventListener("change", function () {
          // Get the selected option
          const selectedOption = select.options[select.selectedIndex];

          // Update the value
          const selectedValue = selectedOption.value;

          // You can do something with the selected value here
          price.innerHTML = selectedValue;
        });
      }



    </script>

</body>

</html>