<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Join Roamers, a social travel agency offering exciting solo trip packages, weekend getaways,
and group travel experiences. Explore, connect, and create unforgettable memories with
like-minded travelers!
">
  <title>Roamers - Dubai 7Days 6Nights</title>
  <meta name="title" content="Roamers - Dubai Packages" />
  <!-- SEO Meta Description -->
  <meta name="description" content="Join Roamers, a social travel agency offering exciting solo trip packages, weekend getaways,
and group travel experiences. Explore, connect, and create unforgettable memories with
like-minded travelers!
" />
  <meta name="keywords" content="travel, travel destinations, travel tips, travel guides,
    vacation, explore, adventure, travel experiences, travel inspiration, Roamers">
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/dubai/1.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/dubai/1.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />
  <!-- Title  -->

  <!-- Title  -->

  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->

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
      background: url(assets/img/dubai/banner.png);
      background-position: bottom !important;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
    }

    .trip-home::before {
      background: rgb(0 0 0 / 18%) !important;
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
        margin-left: 105px !important;
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

    .munnar-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .kolukku-dates {
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
      <h1>DREAMY DUBAI WITH ABU DHABI</h1>
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
                <img class="cus-img" src="assets/img/dubai/image2.avif" alt="roamers-Gallery">
              </div>
              <div class="col-6">
                <img class="cus-img" src="assets/img/dubai/1.jpg" alt="roamers-Gallery">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center;">
          <div class="travel-des">
            <h2 style="text-align:left !important;" class="head text-center text-md-left kerala-overview">
              Habibi Welcome to Dubai!
            </h2>
            <p>
              Step into the dazzling city of Dubai, where every corner offers something exciting. We’re covering the
              best of the city, from the iconic Burj Khalifa to the stunning Palm Jumeirah, the lively Dubai Marina, and
              the breathtaking desert. Each spot offers something unique and unforgettable.
            </p>
            <p>
              The adventure continues with dune bashing, skydiving over the Palm, and exploring the Dubai Aquarium.
              Enjoy a relaxing dinner on a Dubai Marina cruise, unwind on beautiful beaches, and take in panoramic views
              from the Burj Al Arab. For thrill-seekers, venture to Ferrari World in Abu Dhabi, home to the world’s
              fastest roller coaster and adrenaline-pumping rides.
            </p>
            <div class="varkala-trek-button mt-5">
              <a style="width: 200px" href="#" class="btn butn butn__new"> <i style="margin-right: 8px"
                  class="fa-solid fa-cloud-arrow-down"></i>Get Itinerary </a>
              <a href="https://wa.me/message/QYDBK5TO42TGH1" class="btn inquiry butn butn__new">Send Inquiry</a>
            </div>

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
      <div style="justify-content:center;" class="row">
        <div class="col-md-11">
          <h2 class="head text-center text-md-left head1">
            Itinerary
          </h2>
          <div class="acc-container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="days"> Day 1 </div>: Habibi Welcome to Dubai!
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="acc-inner">
                      <li>
                        Pick-up from Airport
                      </li>
                      <li>
                        Hotel Check-in & Leisure
                      </li>
                      <li>Dubai Marina Cruise with Dinner
                      </li>
                      <li>Tanoura Show, Belly Dance, etc.</li>
                      <li>Overnight stay at Hotel</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 2</div>: Dubai City Tour & Burj Khalifa
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="acc-inner">
                      <li>
                        Burj Al Arab Hotel & Palm View
                      </li>
                      <li>
                        Jumeriah Beach & Mosque
                      </li>
                      <li>
                        Dubai Mall & Musical fountain show
                      </li>
                      <li>
                        Burj Khalifa, 124th floor Top view
                      </li>
                      <li>Hotel stay at Dubai</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days"> Day 3 </div>: Desert Safari with BBQ Dinner
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="acc-inner">
                      <li>
                        Spend First half in Local Explore
                      </li>
                      <li>
                        Post Lunch depart for Desert Safari
                      </li>
                      <li>
                        Explore Arabian Desert in SUV
                      </li>
                      <li>
                        Indulge in Camel Safari, Shisha and other cultural activities <small>[own cost]</small>
                      </li>
                      <li>Savour Buffet Dinner & BBQ
                      </li>
                      <li>Hotel stay at Dubai</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">Day 4</div>: Abu Dhabi Tour with Ferrari World
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <ul class="acc-inner">
                      <li>
                        Abu Dhabi City Tour
                      </li>
                      <li>
                        Sheik Zayed Mosque
                      </li>
                      <li>
                        Ferrari World Park
                      </li>
                      <li>
                        Hotel Stay in Dubai / Abu Dhabi
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">Day 5</div>: Dive into Dubai Water World
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
                        Aquaventure Water Park
                      </li>
                      <li>
                        Lost Chamber Aquarium
                      </li>
                      <li>
                        Leisure & Overnight stay in Hotel
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">Day 6</div>: Dubai Frame & Future Museum
                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Picture Yourself in Dubai Frame
                      </li>
                      <li>
                        Step into Dubai's Future Museum
                      </li>
                      <li>
                        Explore Global Village
                      </li>
                      <li>
                        Hotel Stay in Dubai
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">Day 7</div>: Bid Farewell to Golden City
                  </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                      </div>
                    </div>
                    <ul class="acc-inner">
                      <li>
                        Check out from Hotel
                      </li>
                      <li>
                        Farewell & Depart From Dubai
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
                  <p>Covers Transportation and Complementary Canoe Ride
                  </p>
                  <p>
                    Includes Accommodation + Breakfast
                  </p>
                  <p>
                    Experienced Driver who are super friendly & knowledgeable.
                  </p>
                  <p>
                    Permit, Local tax. No hidden charges.
                  </p>
                  <p>
                    A-Z trip assistance from our Travel experts.
                  </p>
                </div>

                <div id="tab2">
                  <p>Personal expenses like shopping and optional activities such as kayaking or ziplining.
                  </p>
                  <p>Any other costs involved due to a natural calamity or any other forced circumstances that are out
                    of our control.

                  </p>
                  <p>
                    GST (5%) is applicable extra.
                  </p>
                  <p>
                    Anything not mentioned in the above inclusions.
                  </p>
                </div>
              </section>
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
      perperson.style.fontSize = "12px";
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
        price.innerHTML = "₹12,499";
        // bbb.style.display = "block";
      } else if (selectedValue == "triple" && selectedValue1 == "direct") {
        price.innerHTML = "₹8,499";
        // bbb.style.display = "none";
      } else if (selectedValue == "triple" && selectedValue1 == "chennai") {
        price.innerHTML = "₹11,499";
        // bbb.style.display = "block";
      } else if (selectedValue == "double" && selectedValue1 == "direct") {
        price.innerHTML = "₹9,499";
        // bbb.style.display = "none";
      }
    }

    // Initial price update when the page loads
    updatePrice();
  </script>
  <!-- ***** Itinerary end***** -->

  <!-- ***** Itinerary & Upcoming Dates end***** -->

  <!-- ***** why choose us start***** -->

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
              <img class="cus-img" src="assets/img/dubai/image2.avif" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>dubai Cliff</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/1.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>dubai Cliff</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/2.png" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Jatayu</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2 slider-item2-image">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/3.png" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Munroe Island</h2> -->
            </div>
          </div>
        </div>

        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/4.jpg
              " alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Cable Car</h2> -->
            </div>
          </div>
        </div>


        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/5.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Black Beach</h2> -->
            </div>
          </div>
        </div>


        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/dubai/6.jpg" alt="roamers-Gallery">
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Temple</h2> -->
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