<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Open Graph Meta Tags for Link Preview -->
  <meta property="og:title" content="Roamers - Explore Leh Ladakh with Umling La" />
  <meta property="og:description" content="Join Roamers for an unforgettable trip to Leh Ladakh, including the world’s highest motorable pass Umling La." />
  <meta property="og:image" content="https://roamers.in/assets/img/ladakh/ride.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/ladakh/ride.png" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://roamers.in/ladakh-umlingla" />

  <title>Roamers - Leh Ladakh with Umling La</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Join Roamers, a social travel agency offering exciting solo trip packages, weekend getaways, and group travel experiences." />
  <meta name="keywords" content="travel, travel destinations, travel tips, vacation, adventure, Roamers" />
  <meta name="author" content="Themeland" />


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

  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

  <style>
    body{
      position: relative;
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
      opacity: 0.5s;
    }

    .butn__new:hover::after {
      left: 150%;
      opacity: 0.6;
    }

    .trip-home {
      /* background: url(assets/img/Ooty/1-min.jpg) !important; */
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      position: relative !important;
      background-attachment: fixed !important;
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


    .travel-des {
      padding: 30px;
    }

    .travel-des a {
      max-width: 200px;
    }

    .price-occupancy {
      padding: 10px 21px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
      font-family: "Heebo", sans-serif;
    }

    .price-occupancy1 {
      border: none;
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      border: 2px solid #4ec1db0d !important;
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
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

    .occupancy {
      display: flex;
      justify-content: center;
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
    .inquiry i{
      margin-left:20px;
      font-size:24px;
    }
    @media (max-width: 600px) {
      .kerala-overview {
        font-size: 20px !important;
      }

      .price-occupancy {
        padding: 10px 18px !important;
        font-size: 14px !important;
        box-shadow: rgb(0 207 264 / 35%) 0px 6px 10px, rgba(0, 0, 0, 0.23) 0px 2px 5px;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      #tab1 p {
        font-size: 16px;
      }

      .trip-home h1 {
        margin: 90px 0px 25px !important;
      }

      .accordion-button {
        font-size: 10px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 10px !important;
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

      #price {
        margin-left: 105px !important;
      }

      .readless {
        display: none;
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

      .travel-des1 p {
        text-align: justify;
        margin-bottom: 1.2rem !important;
      }

      .occupancy {
        font-size: 10px !important;
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

      .diff-sec {
        display: none !important;
      }

      .desktop-inform {
        display: none !important;
      }
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
    .tabgroup h6{
        color: #5F6C7B;
        position: relative;
        margin-left:40px;
        font-size:14px;
    }
    .tabgroup h6::before {
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-left: 10px solid #4ec0db !important;
            border-bottom: 5px solid transparent;
            position: absolute;
            left: -15px;
            content: "";
            margin-top: 6px;
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
    #tab3 p {
      padding-left: 30px;
      position: relative;
    }

    #tab3 p::before {
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
    .important-notes{
      padding:30px;
      background:#fff;
      margin-top:30px;
      box-shadow:0 3px 10px rgba(0, 0, 0, 0.1);
    }
    .important-notes h3{
      margin-bottom:20px;
    }
    .notes-list p {
      padding-left: 30px;
      position: relative;
    }

    .notes-list p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/important.png);
      top:-2px;
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
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
      flex-wrap:wrap;
      gap:10px;
    }

    .accordion-button:not(.collapsed) {
      color: #0c63e4;
      background-color: #094067 !important;
    }

    .whatapp {
      position: fixed;
      bottom: 120px;
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
    .price-sticky {
      position: sticky;
      top: 100px; 
      margin-top:90px;
    }
    .trip-form a{
      width:100% !important;
    }
    .mobile-bottom-bar{
      display:none;
    }
    @media screen and (max-width:732px){      
      .mobile-bottom-bar {
        display:block;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 999; /* ensure it's above other elements */
        background-color: #fff;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        overflow:hidden !important;
      }
      .mob-price{
        display:flex;
        align-items:center;
        justify-content:center;
        background:#fff;
        gap:10px;
        padding:15px;
      }
      .mob-price .price-box{
        flex:2;
      }
      .price-box h6{
        font-size:20px !important;
      }
      .price-box h6 span{
        font-size:16px !important;
      }
      /* .mob-price .butn{
        flex:1;
      } */
      .mob-price .price-amount{
        margin-bottom:0 !important;
        font-size:20px;
        font-weight:700;
        color:#4ec0db;
      }
    }
    /*  */
  </style>
</head>

<body>
  <!--====== Preloader Area Start ======-->



  <!--====== Preloader Area End ======-->
  <!--====== whatapp Area Start ======-->


  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

  <!--====== whatapp Area End ======-->
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="trip-home" style="background-image: url('assets/img/ladakh/ladakh-banner.png');">
    <div class="container" style="position: relative">
      <h1>Leh Ladakh with Umling la
      </h1>
      <ul class="des-sub">
        <li>
          Leh<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Sham Valley<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Khardung-la<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Nubra<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
        pangong<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
        <li>
          Hanle<img src="assets/img/icon/Arrow-head.png" class="arrow-right" alt="roamers-trip">
        </li>
          <li>
          Umling la
          </li>
        
        
      </ul>
      <div class="row desktop-inform">
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-indian-rupee-sign"></i></h3>
            <p style="color:white !important;">Starting Price</p>
            <h2><span class="ladakh-price"></span>/-</h2>
          </div>
        </div>
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="color:white !important;">Duration</p>
            <h2>8 Days - 7 Nights</h2>
          </div>
        </div>
        <div class="col-md-4 col-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="color:white !important;">Pickup & Drop</p>
            <h2>Leh - Leh
            </h2>
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
            <h2 style="color: black;">₹29,990</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-calendar-days"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Duration</p>
            <h2 style="color: black;">8D - 7N</h2>
          </div>
        </div>
        <div class="col-4 col-md-4">
          <div class="trip-inner">
            <h3><i class="fa-solid fa-location-dot"></i></h3>
            <p style="margin: 1px 0px 0px 0 !important;">Pickup & Drop</p>
            <h2 style="color: black;">Leh - Leh
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
                <img src="assets/img/ladakh/ladakh-img7.jpg" alt="roamers-trip" style="object-fit:cover; height:100%;" />
              </div>
              <div class="col-6">
                <img src="assets/img/ladakh/ladakh-img2.jpg" alt="roamers-trip" style="margin-top: 70px; object-fit:cover; height:90%;" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="display: grid; place-items: center">
          <div class="travel-des travel-des1">
            <h2 style="text-align:left !important;" class="head text-center text-md-left kerala-overview">High Passes & Higher Vibes – Discover Ladakh</h2>
            <p class='mb-4'>Get ready to experience Ladakh like never before! Whether you're riding through the rugged mountains on a bike or joining the journey in a comfy Traveller, this adventure covers it all: Leh, Khardung La, Nubra Valley, Pangong Lake, Hanle, Umling La, and more. From epic roads and dramatic landscapes to starry nights and unforgettable memories, this trip is built for those who crave both adventure and adventure only! <br><br>
              <span class="readless">
              Ride through some of the world’s highest motorable passes, enjoy camel rides and ATVs in Nubra, and feel the calm magic of Pangong’s crystal-clear waters. Reach Umling La, sitting even higher than Everest Base Camp. This trip blends adventure, fun, and raw beauty into one epic experience. It’s not just a Ride, it’s the kind of journey you’ll remember forever.
              </span>
              <span id="moreText" style="display:none">
              Ride through some of the world’s highest motorable passes, enjoy camel rides and ATVs in Nubra, and feel the calm magic of Pangong’s crystal-clear waters. Reach Umling La, sitting even higher than Everest Base Camp. This trip blends adventure, fun, and raw beauty into one epic experience. It’s not just a Ride, it’s the kind of journey you’ll remember forever.
              </span>
              <a href="javascript:void(0);" id="readMoreLink" onclick="toggleReadMore()">...Read More</a>
            </p>
            <a style="width:200px" href="#" class="btn butn butn__new"> <i style="margin-right: 8px"
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
          <h2 class="head text-center text-md-left head1">Itinerary</h2>
          <div class="acc-container">
            <div class="accordion" id="accordionExample">
              

                   
              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="days">
                      DAY 1</div>: Arrival in Leh - Leisure Day for Acclimatization
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                    
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
                      Arrive at Leh airport after a stunning flight over the majestic Himalayas.
                      </li>
                      <li>
                      Meet Roamers representative who will assist you with a comfortable transfer to your hotel.
                      </li>
                      <li>
                      Complete the check-in process and unwind for a while.
                      </li>
                      <li>
                      Spend the rest of the day in Leisure with the team
                      </li>
                      <li>
                      Relax and take a stroll nearby to help your body acclimatize to the altitude.
                      </li>
                      <li>Overnight stay in Leh.
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
                      DAY 2</div>:  Explore Leh & Sham Valley - Evening at Leh Market

                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                    
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
                      Wake up to a refreshing morning in Leh and enjoy a hearty breakfast at the hotel to fuel up for the day.
                      </li>
                      <li>
                      Let's begin our journey by visiting iconic sights, starting with the beautiful Shanti Stupa, offering panoramic views of Leh town and the surrounding mountains.
                      </li>
                      <li>
                      We'll then drive towards the scenic Sham Valley, beginning with the Sangam viewpoint where the Indus and Zanskar rivers meet in a mesmerizing confluence.
                      </li>
                      <li>
                      Continue to Magnetic Hill, a place famous for its fascinating optical illusion that makes vehicles appear to roll uphill.
                      </li>
                      <li>
                      Our journey continues to the revered Pathar Sahib Gurudwara, where you'll hear the fascinating legend of Guru Nanak Dev Ji and the sacred boulder that carries his imprint.
                      </li>
                      <li>
                      On our way back to Leh, we'll visit the Hall of Fame, a moving museum and memorial that honors the bravery and sacrifice of Indian soldiers in the Indo-Pak conflict.
                      </li>
                      <li>In the evening, enjoy your free time exploring the lively Leh market, buy souvenirs to your loved ones and relax at one of the cozy cafés.
                      </li>
                      <li>
                      Overnight stay in Leh.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordion-item ai1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="days">
                      DAY 3 </div>: Leh to Nubra Valley via Khardung La

                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="itinerary-logo-group">
                      <div class="itinerary-logo-content">
                        <p>Distance: 125 km | Duration: 5-6 Hours</p>
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
                      Start your day with a delicious breakfast at your hotel in Leh,get ready for the adventure ahead.
                      </li>
                      <li>
                      Gear up for an unforgettable drive as we begin our ascent along one of the highest motorable roads in the world.
                      </li>
                      <li>
                      Feel the thrill as we head towards Nubra Valley, nestled between the Karakoram and Ladakh ranges, offering dramatic views all around.
                      </li>
                      <li>
                      Our first major stop is Khardung-La Pass, sitting at a staggering 5,359 meters, where you'll have time to take in the sweeping mountain vistas.
                      </li>
                      <li>
                      We then descend along the route tracing the Shyok River, entering the stunning landscapes of Nubra Valley also known as Ldorma or the Valley of Flowers.
                      </li>
                      <li>As we approach Diskit, the heart of Nubra, we'll visit the famed Diskit Monastery, home to a towering 106-foot statue of Maitreya Buddha overlooking the valley.
                      </li>
                      <li>
                      Later, head to the white-sand dunes of Hunder, a cold desert with surreal scenery straight out of a dream.
                      </li>
                      <li>
                      Here, you can opt to enjoy unique experiences like a double-humped Bactrian camel ride or an adventurous ATV ride across the dunes (at your own cost).
                      </li>
                      <li>
                      After a full day of exploration, make your way to the campsite or hotel where you’ll be staying.
                      </li>
                      <li>
                      Overnight stay in Nubra Valley.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>



<!-- DAY 4 -->
<div class="accordion-item ai1">
  <h2 class="accordion-header" id="headingFour">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      <div class="days">DAY 4</div>: Transfer from Nubra to charming Pangong

    </button>
  </h2>
  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <div class="itinerary-logo-group">
        <div class="itinerary-logo-content">
          <p>Distance: 160 km | Duration: 5-6 Hours</p>
        </div>
        <div class="itinerary-logo">
          <p><img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">Transportation</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">Hotel</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">Breakfast</p>
        </div>
      </div>
      <ul class="acc-inner">
        <li>Wake up to the serene views of Nubra Valley and prepare for yet another adventurous drive. 
        </li>
        <li>En route, we'll pass through the picturesque villages of Agam and Shyok, known for their untouched beauty and peaceful landscapes.
        </li>
        <li>As the journey unfolds, you'll be greeted by the first glimpses of ‘Pangong Lake’ an awe-inspiring sight that makes the ride truly worthwhile.
        </li>
        <li>Situated at an altitude of 4,300 meters, Pangong is the world’s highest saltwater lake, stretching over 136 km with a width of around 4 km.
        </li>
        <li>Spend time soaking in the tranquility of the lake and admiring how the surrounding mountains reflect beautifully in its ever-changing blue waters.
        </li>
        <li>Don't forget to stop by the famous "3 Idiots" movie spot, a perfect place for fun photos and memories.
        </li>
        <li>After taking in the views, we’ll check in at our campsite by the lakeside and enjoy a warm, delicious dinner.

        </li>
        <li>Overnight stay near Pangong Lake.

        </li>
      </ul>
    </div>
  </div>
</div>

<!-- DAY 5 -->
<div class="accordion-item ai1">
  <h2 class="accordion-header" id="headingFive">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      <div class="days">DAY 5</div>: Transfer from Pangong to Hanle via Rezang La War Memorial

    </button>
  </h2>
  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <div class="itinerary-logo-group">
        <div class="itinerary-logo-content">
          <p>Distance: 165 km | Duration: 8–9 Hours
          </p>
        </div>
        <div class="itinerary-logo">
          <p><img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">Transportation</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">Camp</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">Breakfast & Dinner</p>
        </div>
      </div>
      <ul class="acc-inner">
      <li>Wake up to the breathtaking beauty of Pangong Lake and enjoy a warm breakfast at your lakeside campsite.</li>
  <li>Afterward, gear up for an offbeat and adventurous drive to the remote village of Hanle, nestled deep in the Changthang region of Ladakh.</li>
  <li>We begin by passing through the quiet town of Chushul, with a stop at the historically significant Rezang La War Memorial.</li>
  <li>Built in memory of the brave soldiers who laid down their lives in the 1962 Indo-China War, the memorial is a powerful reminder of their courage and sacrifice.</li>
  <li>After paying your respects, continue the journey with a lunch stop along the way, depending on the time and location.</li>
  <li>Drive across the scenic Loma Bridge spanning the Indus River and make your way through Ladakh’s striking high-altitude terrain.</li>
  <li>By evening, arrive in the peaceful village of Hanle and check in to your welcoming homestay for some well-deserved rest & a delicious dinner.</li>
  <li>Overnight stay in Hanle.</li>
      </ul>
    </div>
  </div>
</div>

<!-- DAY 6 -->
<div class="accordion-item ai1">
  <h2 class="accordion-header" id="headingSix">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      <div class="days">DAY 6</div>: Day Excursion to Umling La

    </button>
  </h2>
  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <div class="itinerary-logo-group">
        <div class="itinerary-logo-content">
          <p> Distance: approx. 150 km | Duration: 7–8 Hours
          </p>
        </div>
        <div class="itinerary-logo">
          <p><img class="itinerary-logo-img1" src="assets/img/icon/transportation.png" alt="">Transportation</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/Hotel.png" alt="">Hotel</p>
          <p><img class="itinerary-logo-img1" src="assets/img/icon/meals.png" alt="">Breakfast</p>
        </div>
      </div>
      <ul class="acc-inner">
      <li>Start your day with a hearty breakfast at the homestay and prepare for one of the most exciting adventures of your Ladakh journey.</li>
  <li>Buckle up and set out on a thrilling drive to Umling La, the highest motorable road in the world.</li>
  <li>Along the way, cross Photi La Pass, standing tall at 5,524 meters, offering dramatic views of the rugged Ladakhi terrain.</li>
  <li>Enjoy the raw beauty of the high-altitude desert as the road winds through surreal landscapes and remote valleys.</li>
  <li>Arrive at Umling La Pass, located at an astonishing altitude of 5,640 meters, even higher than the Everest Base Camp.</li>
  <li>This high mountain pass is also the origin of the Umlung stream, a tributary of the Kiungdul River which flows into the Indus.</li>
  <li>On the return journey, we will cross another spectacular pass, Nurbu La, at an altitude of 5,282 meters.</li>
  <li>Take time to soak in the panoramic views and click photos to capture this once-in-a-lifetime experience.</li>
  <li>Later, enjoy lunch and begin your drive back to Hanle.</li>
  <li>If time allows, we will visit the renowned Hanle Observatory, India's highest astronomical observatory known for cutting-edge space research.</li>
  <li>Reach your homestay by evening, where a warm dinner awaits and you can relax under the vast night sky.</li>
  <li>Overnight stay in Hanle.</li>
      </ul>
    </div>
  </div>
</div>


<div class="accordion-item ai1">
  <h2 class="accordion-header" id="headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <div class="days">DAY 7</div>: Transfer from Hanle to Leh via Chumathang
    </button>
  </h2>
  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <div class="itinerary-logo-group">
        <div class="itinerary-logo-content">
          <p>Distance: approx. 260 km | Duration: 6–7 Hours
          </p>
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
      <li>Wake up early to witness the soft hues of sunrise painting the Ladakh mountains.</li>
  <li>After breakfast, it’s time to bid farewell to the peaceful village of Hanle and begin your journey back to Leh.</li>
  <li>Enjoy the drive through some of Ladakh’s most scenic landscapes as we pass through the charming towns of Chumathang, Upshi, Karu, Thikshey, and Shey.</li>
  <li>Arrive in Leh by evening and check in to your hotel, where you can relax and freshen up after the long journey.</li>
  <li>Later, head out to explore the vibrant Leh market at your own pace, perfect for shopping, cafe hopping, and tasting local delicacies.</li>
  <li>Overnight stay in Leh.</li>
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
                <li>
                  <a href="#tab1" class="active"><i class="fa-solid fa-check"></i>Inclusions</a>
                </li>
                <li>
                  <a href="#tab2"><i class="fa-solid fa-xmark"></i>Exclusions</a>
                </li>
              </ul>
              <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                  <p>Bike rental for 6 days for those opting for the biking experience</p>

                  <p>Fuel included for the entire bike journey, covering the route from Leh to Leh</p>

                  <p>Comfortable travel in a Tempo Traveler or cab for those selecting the non-biking option</p>

                  <p>Accommodation for 7 nights</p>
                  <h6>3 nights in a hotel in Leh</h6>
                  <h6>1 night in Swiss tents at Nubra Valley</h6>
                  <h6>1 night in lakeside camps at Pangong Tso</h6>
                  <h6>2 nights in a traditional homestay in Hanle (triple or quad sharing basis)</h6>

                  <p>14 meals throughout the trip</p>
                  <h6>Day 1 – Dinner</h6>
                  <h6>Day 2 to Day 7 – Breakfast and Dinner</h6>
                  <h6>Day 8 – Breakfast</h6>
                  <p>Mechanical support team available for biking routes</p>
                  <p>All necessary inner line permits arranged for the entire itinerary</p>
                  <p>Charges covered for driver stay, tolls, parking, and other on-road expenses</p>
                  <p>Trip led by an experienced team captain</p>
                  <p>Oxygen cylinder available 24/7 in the vehicle for emergency use</p>
                  <p>Riding safety gear provided including helmets (standard size 58–60 cm), riding jackets, gloves (for riders), and knee guards (Note: It’s advisable to carry your own helmet for better fit and comfort)</p>
                  <p>Airport pick-up or drop included based on group flight timings
                  (Kindly note: Private taxi service for individual transfers will not be provided; group shuttles will operate at fixed time slots based on flight schedules)</p>
                </div>

                <div id="tab2">
                  <p>Applicable 5% GST will be charged over and above the package cost</p>

                  <p>Any meals, snacks, or beverages not specifically mentioned in the inclusions, such as lunch during travel days, mineral water, or alcoholic drinks</p>

                  <p>Personal expenses including but not limited to laundry, telephone bills, souvenirs, entry fees to monasteries or monuments, camera/video charges, tips, camel rides, or river rafting</p>

                  <p>Expenses incurred due to unforeseen circumstances like natural disasters, landslides, or road closures. Such costs are to be handled directly by the traveler on-site</p>

                  <p>Any services or items not explicitly listed under the inclusions section</p>

                  <p>Any damage caused to the motorcycle (excluding engine damage) during the trip will be the responsibility of the rider and must be covered by them.</p>
                </div>
              </section>
            </div>
          </div>
          <div class="important-notes">
            <h3 class="">Important Notes</h3>
            <div class="notes-list">
              <p>Group trips are designed for ages 18 to 40 due to high packed adventure. Custom trips can be arranged for other age groups.</p>
              <p>This is a high-altitude trip. Please consult your doctor before travelling. Limited medical facilities are available in remote areas.</p>
              <p>Itinerary may be subjected to change due to weather, road conditions, or health concerns. Changes will be made keeping your safety and comfort in mind.</p>
              <p>Inform us of any pre-existing health conditions in advance.</p>
              <p>A ₹7,000 refundable security deposit is required per bike. Damages (excluding engine issues) are chargeable.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-sticky">
            <div class="price">
              <h4>Starting Price (Per Person)</h4>
              <p style="margin-left: 0px;" id="price">₹29,990</p><span id="per-person"></span>
            </div>
            <div class="trip-form"> <a href="https://wa.me/message/QYDBK5TO42TGH1"
                class="btn inquiry butn butn__new">Send Inquiry<i class="fa-brands fa-whatsapp"></i></a>
              <a href="ladakh-booking-form.php" class="btn butn butn__new">Dates & Costing</a>
            </div>
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

  <section class="customise_your_trip">
    <h2 class="head">Explore Exciting Adventures</h2>
    <div class="slider">
      <div class="slider-container">
        <div class="slider-item2 ">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img3.jpg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Conoor Tea Estate</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladak-img1.jpg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Ooty Lake</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img5.jpg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Botanical Garden</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img6.jpg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Pykara Falls</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img4.jpeg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Pykara Falls</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img10.webp" style="transform:scale(1.1);" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Pykara Falls</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-img6.jpeg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2> Pykara Falls</h2> -->
            </div>
          </div>
        </div>
        <div class="slider-item2">
          <div class="silder-pad">
            <div class="slid-img">
              <img class="cus-img" src="assets/img/ladakh/ladakh-image12.jpg" alt="roamers-Gallery" />
            </div>
            <div class="cust-inner">
              <h3> </h3>
              <!-- <h2>Lamb's Rock Hike</h2> -->
            </div>
          </div>
        </div>
      </div>
      <button class="prev-btn">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button class="next-btn">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
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
  <div class="mobile-bottom-bar">
    <div class="mob-price">
      <div class="price-box">
      <h6>Starting price <br><span>(Per Person)</span></h6>
      <p class="price-amount" >₹29,990</p>
      </div>
      <a href="ladakh-booking-form.php" class="btn butn butn__new">Dates & Costing</a>
    </div>
  </div>
  <!--====== faq END ======-->
  <!-- *****short break trips end ***** -->


  <?php include('includes/trips.php'); ?>

  <!--====== quotes End ======-->

  <!--====== FOOTER START======-->
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
    window.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper(".swiper-container", {
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


    // var selectElements = document.getElementById("price-occ");
    // var selectElements1 = document.getElementById("price-occ1");
    // var price = document.getElementById('price');
    // var perperson = document.getElementById('per-person');
    // var bbb = document.getElementById('withtravel');

    // selectElements.addEventListener("change", updatePrice);
    // selectElements1.addEventListener("change", updatePrice);

    // function updatePrice() {
    //   var selectedValue = selectElements.value;
    //   var selectedValue1 = selectElements1.value;

    //   if (selectedValue == "double" && selectedValue1 == "chennai") {
    //     price.innerHTML = "₹10,490";
    //     perperson.innerHTML = " per person";
    //     perperson.style.fontSize = "14px";
    //     perperson.style.fontWeight = "500";
    //     perperson.style.color = "#7c7c7c";
    //     bbb.style.display = "block";
    //   } else if (selectedValue == "triple" && selectedValue1 == "coimbatore") {
    //     price.innerHTML = "₹7,490";
    //     perperson.innerHTML = " per person";
    //     perperson.style.fontSize = "14px";
    //     perperson.style.fontWeight = "500";
    //     perperson.style.color = "#7c7c7c";
    //     bbb.style.display = "none";
    //   } else if (selectedValue == "triple" && selectedValue1 == "chennai") {
    //     price.innerHTML = "₹9,490";
    //     perperson.innerHTML = " per person";
    //     perperson.style.fontSize = "14px";
    //     perperson.style.fontWeight = "500";
    //     perperson.style.color = "#7c7c7c";
    //     bbb.style.display = "block";
    //   } else if (selectedValue == "double" && selectedValue1 == "coimbatore") {
    //     price.innerHTML = "₹8,490";
    //     perperson.innerHTML = " per person";
    //     perperson.style.fontSize = "14px";
    //     perperson.style.fontWeight = "500";
    //     perperson.style.color = "#7c7c7c";
    //     bbb.style.display = "none ";
    //   }
    // }

    // // Initial price update when the page loads
    // updatePrice();
  </script>
  <script>
    var navbar = document.querySelector("nav");

    window.onscroll = function () {
      // pageYOffset or scrollY
      if (window.scrollY > 100) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    };



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
  </script>
</body>

</html>