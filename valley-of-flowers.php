<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/valley-of-flowers/img3.jpg" width="600"
    height="600" alt="image for ooty" />
  <title>Roamers - Valley of Flowers</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Valley of Flowers" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/valley-of-flowers/img3.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/valley-of-flowers/img3.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />


  <!-- Title  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/valley-of-flowers.css" />


  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- ***** All CSS Files ***** -->
  <!-- ***** Font Asesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/srilanka.css">

  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

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

    /* .trip-home {
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      position: relative !important;
      background-attachment: fixed !important;
    } */

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
      padding: 30px !important;
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

    .inquiry i {
      margin-left: 20px;
      font-size: 24px;
    }

    .price-sticky {
      position: sticky;
      top: 100px;
      margin-top: 65px;
    }

    .desktop-inform {
      display: block;
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
        font-size: 11px;
      }

      .trip-home {
        height: 100%;
      }

      .trip-home h1 {
        margin: 230px 90px !important;
        font-size: 52px !important;
      }

      .accordion-button {
        font-size: 10px !important;
        /* padding: 10px 20px !important; */
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
        font-size: 14px !important;
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

    /* .trip-home {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      position: relative;
    } */

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
      /* margin-left: -43px !important; */
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
      /* Added to vertically align dots of different sizes */
    }

    .dot {
      width: 3px;
      /* Smaller inactive dots */
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
      /* Larger active dot */
      height: 6px;
      opacity: 1;
    }

    @media screen and (max-width:732px) {
      .mobile-bottom-bar {
        display: block;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        /* ensure it's above other elements */
        background-color: #fff;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden !important;
      }

      .mobile-bottom-bar .btn {
        background-color: #4ec0db !important;
        border-radius: 2rem;
        padding: 8px 12px !important;
        color: #fff !important;
      }

      .mob-price {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        gap: 10px;
        padding: 10px;
      }

      .mob-price .price-box {
        flex: 2;
      }

      .price-box h6 {
        font-size: 16px !important;
        margin-bottom: 0 !important;
      }

      .mob-price .butn {
        flex: 2;
        border-radius: 2rem !important;
        padding: 10px 4px !important;
      }

      .mob-price .price-amount {
        margin-bottom: 0 !important;
        font-size: 25px;
        font-weight: 700;
        color: #4ec0db;
        margin-right: 4px;
      }

      .mob-price .price-amount span {
        font-size: 14px;
        font-weight: 400;
        color: #000;
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
    }

    /* Mobile Price  */

    .mobile-bottom-bar {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: #fff;
      box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
      animation: slideUp 0.6s ease-out forwards;
      transform: translateY(100%);
      z-index: 1000;
    }

    @keyframes slideUp {
      to {
        transform: translateY(0);
      }
    }

    .bottom-bar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 20px;
      animation: fadeIn 0.8s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .price-box {
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-4px);
      }
    }

    .price-amount {
      font-size: 18px;
      font-weight: bold;
      color: #e63946;
    }

    .per-person {
      font-size: 12px;
      color: #555;
      display: block;
    }

    .btn-book {
      background-color: #1d3557;
      color: #fff;
      padding: 10px 16px;
      border-radius: 6px;
      font-weight: 600;
      text-decoration: none;
      transition: background-color 0.3s ease, transform 0.2s ease;

    }

    .btn-book:hover {
      background-color: #457b9d;
      transform: scale(1.05);
    }

    .mobile-bottom-bar {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: #fff;
      box-shadow: 0 -2px 12px rgba(0, 0, 0, 0.1);
      padding: 12px 16px;
      z-index: 1000;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .bottom-bar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .price-box .label {
      margin: 0;
      font-size: 12px;
      color: rgb(0, 0, 0);
      font-weight: bold;
    }

    .price-info {
      display: flex;
      align-items: baseline;
      gap: 6px;
    }

    .price-amount {
      font-size: 20px;
      font-weight: bolder;
      color: #4ec0db;
    }

    .per-person {
      font-size: 12px;
      color: #777;
    }

    .btn-book {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      transition: background-color 0.3s ease;
    }

    .btn-book:hover {
      background-color: #43a047;
      color: white;
    }

    /* Modal Box */

    .popup-modal {
      background: white;
      padding: 24px;
      border-radius: 12px;
      width: 90%;
      max-width: 400px;
      position: relative;
      text-align: center;
      animation: fadeInUp 0.3s ease-out;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .close-btn {
      position: absolute;
      top: 12px;
      right: 16px;
      background: none;
      border: none;
      font-size: 22px;
      cursor: pointer;
    }

    .popup-modal h3 {
      margin-bottom: 16px;
    }

    .popup-list {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
      text-align: left;
    }

    .popup-list li {
      margin-bottom: 8px;
      font-size: 15px;
    }


    .btn-book.full {
      display: inline-block;
      width: 100%;
      margin-top: 10px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }


    /* fab button  */
    .whatsapp-fab {
      position: fixed;
      bottom: 100px;
      right: 20px;
      background: #25d366;
      color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      font-size: 28px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .whatsapp-fab:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.4);
    }

    .swiper-container.two {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-container.two .swiper-slide {
      width: 300px;
      height: 400px;
      position: relative;
    }

    .swiper-container.two .slider-image {
      width: 100%;
      height: 100%;
      overflow: hidden;
      border-radius: 8px;
    }

    .swiper-container.two .slider-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-container.two .swiper-slide-shadow-left,
    .swiper-container.two .swiper-slide-shadow-right {
      background-image: none;
    }

    .accordion-button:not(.collapsed) {
      background: #094067 !important;
      color: #fff !important;
    }

    .accordion-button:focus {
      box-shadow: none !important;
      border: none !important;
    }

    .accordion-button::after {
      background-color: #fff;
      border-radius: 100%;
      background-size: 75%;
    }

    .animated-badge {
      transition: all 0.3s ease;
    }

    .accordion-button:hover .animated-badge {
      transform: scale(1.02);
    }

    @media (max-width: 768px) {
      .animated-badge {
        font-size: 14px !important;
      }
    }

    .scroll-section {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s;
    }

    .scroll-section.initialized {
      opacity: 1;
      visibility: visible;
    }

    .swiper-container.two {
      padding-top: 50px;
      padding-bottom: 50px;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s;
    }

    .swiper-container.two.initialized {
      opacity: 1;
      visibility: visible;
    }

    .swiper-container.two .swiper-slide {
      width: 300px;
      height: 400px;
      position: relative;
      opacity: 0;
      transform: scale(0.8);
      transition: all 0.5s ease;
    }

    .swiper-container.two.initialized .swiper-slide {
      opacity: 1;
      transform: scale(1);
    }

    .swiper-container.two .slider-image {
      width: 100%;
      height: 100%;
      overflow: hidden;
      border-radius: 8px;
    }

    .swiper-container.two .slider-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <!-- Whats app  -->
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- Banner -->
  <section class="trip-home" class="banner-marigin-section" id="tripSection"
    style="  padding: 350px 0; color: white; position: relative;  ">



    <div class="container-lg" style="position: relative; text-align: center;">

      <h2 class="banner-hight-top ms-2"
        style="font-size:49px; font-weight: 900; color: #fff; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); letter-spacing: 1px;">
      
        VALLEY OF FLOWERS TREK
      
      </h2>

      <ul class="banner-hight-bottom p-0"
        style="list-style: none; ; display: flex; flex-wrap: wrap; justify-content: center;">
        <li class=" me-2 mobile-small-text" style="display: flex; align-items: center; font-weight: 800;">
          
          <span class="ms-2">
            <span></span>
          </span>
        </li>

        <li class="mobile-small-text me-2" style="display: flex; align-items: center; font-weight: 800;">
           <span class="ms-2"> 
        </li>
        <li class="mobile-small-text  me-2"
          style="display: flex; align-items: center; font-weight: 800; margin-bottom: 2px;">
          <span class="ms-2"><span>
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
                  <div class="info-value valley-price"><span>/-</span></div>
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
                  <div class="info-value">5D - 6N</div>
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
                  <div class="info-value">Rishikesh - Rishikesh</div>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-center">
              <a href="#" class="btn butn butn__new" style="width: 100%; max-width: 200px; border-radius: 15px;">
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

            <!-- <div class="col">
              <div class="enhanced-box">
                <div class="icon-circle">
                  
                   <img src="assets/img/icon/rupees.png" alt="">
                </div>
                <div>
                <div class="info-label">Starting Price</div>
                <div class="info-value valley-price"><span>/-</span></div>
                </div>
              </div>
            </div> -->

            <div class="col-5 px-0">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <!-- <i class='bx  bx-hourglass'></i>  -->
                  <img src="assets/img/icon/duration.png" style="width:35px" alt="">
                </div>
                <div>
                  <div class="info-label">Duration</div>
                  <div class="info-value">5D - 6N</div>
                </div>
              </div>
            </div>

            <div class="col-7 px-0" style="border-left:1px solid #cbc9c9;">
              <div class="enhanced-box">
                <div class="icon-circle">
                  <!-- <i class="fa-solid fa-location-dot"></i> -->
                  <img src="assets/img/icon/location.png" alt="">
                </div>
                <div>
                  <div class="info-label">Pickup & Drop</div>
                  <div class="info-value">Rishikesh - Rishikesh</div>
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
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const tabs = document.querySelectorAll('.tab-box');

          tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {

              // Remove 'active' class from all tabs
              tabs.forEach(t => t.classList.remove('active'));

              // Add 'active' class to the clicked tab
              this.classList.add('active');

              // Scroll smoothly to the linked section
              const targetId = this.getAttribute('href');
              const target = document.querySelector(targetId);
              if (target) {
                target.scrollIntoView({
                  behavior: 'smooth'
                });
              }
            });
          });
        });
      </script>
    </section>
    <br><br>
    <section class="destination mt-0 mt-lg-5"
      style="background-color: white; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-radius: 20px;" id="overview">

      <div class="">
        <div class="row g-4 flex-column-reverse flex-md-row align-items-center">

          <!-- Text Section -->
          <div class="col-md-7">
            <div class="travel-des p-3 p-md-4">
              <h2 class="mb-3">Enchanting bloom paradise awaits for you.</h2>

              <!-- Desktop description (full text) -->
              <p style="color: #555;" class="desk-desc d-none d-md-block">
                Hey there, team! Welcome to the Valley of Flowers, nature's very own canvas bursting with color! This
                trip
                isn't just about checking off a national park—it's about losing ourselves in a wildflower wonderland,
                breathing in the fresh Himalayan air, and trekking through landscapes that look straight out of a dream.
                <br> We'll wander through vibrant meadows, feel the chill of glacial streams, and soak in the serene
                vibes
                at Hemkund Sahib. And hey, don't forget to pack your appetite—we're diving into some hearty mountain
                grub
                too. Let's embrace this high-altitude magic and make memories that bloom forever!
              </p>

              <!-- Mobile description (truncated with toggle) -->
              <p style="color: #555;" class="mob-desc d-block d-md-none">
                Hey there, team! Welcome to the Valley of Flowers, nature's very own canvas bursting with color! This
                trip
                isn't just about checking off a national park—it's about losing ourselves in a wildflower wonderland,
                breathing in the fresh Himalayan air<span id="dots">...</span>
                <span id="moreText" style="display: none;">
                  , and trekking through landscapes that look straight out of a dream.
                  <br> We'll wander through vibrant meadows, feel the chill of glacial streams, and soak in the serene
                  vibes
                  at Hemkund Sahib. And hey, don't forget to pack your appetite—we're diving into some hearty mountain
                  grub
                  too. Let's embrace this high-altitude magic and make memories that bloom forever!
                </span>
              </p>

              <!-- Positioned Read More Icon -->
              <div class="position-absolute bottom-1 start-50 translate-middle-x d-block d-md-none">
                <span onclick="toggleReadMore()" id="readMoreBtn" class="read-more-icon" style="cursor: pointer;">
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
                <div class="swiper-slide">
                  <img src="assets/img/valley-of-flowers/img1.jpg" class="img-fluid w-100" alt="Ladakh 1"
                    style="border-radius: 20px; height: 350px; object-fit: cover;">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/valley-of-flowers/img2.jpg" class="img-fluid w-100" alt="Ladakh 2"
                    style="border-radius: 20px; height: 350px; object-fit: cover;">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/valley-of-flowers/img3.jpg" class="img-fluid w-100" alt="Ladakh 3"
                    style="border-radius: 20px; height: 350px; object-fit: cover;">
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
            <h3 style="text-align: start; margin-bottom: 20px; margin-left: 10px;" class="text-center head">Trip
              Itinerary
            </h3>
            <div class="">

              <div class="accordion" id="accordionExample">


                <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingSeven">
                    <button
                      class="accordion-button collapsed text-dark fw-bold d-flex justify-content-between align-items-center"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false"
                      aria-controls="collapse7">
                      <div class="d-flex align-items-center">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Overview</span>
                        <span>Valley of Flowers Trek – 6 Days Overview</span>
                      </div>
                      <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                    </button>
                  </h2>
                  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #f5fdff;">
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 1: Rishikesh ➝
                          Joshimath (260 km | 8 hrs drive) Scenic mountain drive via Devprayag, Rudraprayag & more.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 2: Joshimath ➝ Pulna
                          (drive) + Pulna ➝ Ghangaria (9 km | 5 hrs trek) Start your trek through lush valleys and river
                          views.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 3: Ghangaria ➝
                          Valley of Flowers ➝ Ghangaria (8 km | 7 hrs trek) Explore the iconic Valley of Flowers – a
                          UNESCO site in full bloom.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 4: Ghangaria ➝
                          Hemkund Sahib ➝ Ghangaria (12 km | 9 hrs trek) Trek to the world's highest Gurudwara at 14,100
                          ft.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 5: Ghangaria ➝ Pulna
                          (9 km | 4 hrs trek) + Drive to Joshimath Easy descent followed by a relaxed evening in
                          Joshimath.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Day 6: Joshimath ➝
                          Rishikesh (260 km | 8 hrs drive) Return with memories, new friendships & a trek completion
                          certificate.</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border-0 overflow-hidden rounded-4">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-dark fw-bold d-flex justify-content-between align-items-center"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      <div class="d-flex align-items-center">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 1</span>
                        <span>Drive from Rishikesh to Joshimath (260 Kms | 8 Hrs)</span>
                      </div>
                      <i class="bi bi-chevron-down ms-auto transition-all"></i>
                    </button>
                  </h2>

                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #f5fdff;">

                      <ul class="ps-lg-3 ps-0">
                        <li class=""><i class="fa-regular fa-circle-dot fs-6 fs-md-6 me-2 text-primary mb-3"></i>Meet
                          your fellow trekkers at the ISBT Bus Stand, Rishikesh early in the morning.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Meet Set off on a scenic
                          drive, passing through lush green landscapes and the stunning four sacred river confluences:
                          Devprayag, Rudraprayag, Karnaprayag, and Nandprayag.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Arrive in Joshimath by
                          the evening. Check-in to your Hotel & relax</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Explore this charming
                          Himalayan town at your leisure and socialise with your co trekkers</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Enjoy home-style cooked
                          dinner and overnight stay in a comfortable hotel in Joshimath</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 2</span>
                        <span>Drive to Pulna & Trek to Ghangaria (9 Kms | 5 Hrs)</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>

                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #f5fdff;">
                      <div class="d-flex justify-content-start mb-3 gap-4 itinerary-logo-group">
                      </div>
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>After a wholesome
                          breakfast, drive from Joshimath to Pulna, where your trek begins.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>The journey takes you
                          through the mesmerizing Bhyundar Valley alongside the pristine Pushpavati River. Along the
                          way, enjoy serene views of waterfalls and lush mountains.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Reach Ghangaria, the
                          base camp for both the Valley of Flowers and Hemkund Sahib. Check-in to your Hotel, unwind,
                          and attend a briefing about the next day's trek.
                        </li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Savor a warm,
                          home-cooked dinner and get a good night's rest in Ghangaria.</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                      aria-controls="collapse3">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 3</span>
                        <span>Trek to Valley of Flowers & Return (8 Kms | 7 Hrs)</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Enroute pass by the
                          Pushpavati River and the beautiful Laxman Waterfall, you'll be surrounded by vibrant blooms
                          like Blue Poppy, Himalayan Rose, and the famous Brahmakamal.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>If the weather is clear,
                          the view of the Himalayan peaks like Nilgiri Parvat and Rattaban will take your breath away.
                        </li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Spend time marveling at
                          nature's masterpiece & Post Lunch we'll begin Trek down from VOF to Ghangaria.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Reach back to your stay
                          and have a Leisure evening, followed by a hearty dinner and overnight stay in your Hotel at
                          Ghangaria</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                      aria-controls="collapse4">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 4</span>
                        <span>Trek to Hemkund Sahib & Back (12 Kms | 9 Hrs)</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Begin your day early
                          with breakfast and head out for the trek to Hemkund Sahib, the world's highest Gurudwara at
                          14,100 ft.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>The challenging uphill
                          trek is worth every step as you reach this sacred place. Pay your homage at the Gurudwara</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Visit the serene Hemkund
                          Sarovar, a glacial lake surrounded by the majestic Saptarishi Peaks.and Laxman temple built
                          beside the gurudwara</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>After a peaceful visit
                          at the Gurudwara, Post Lunch, trek back down to Ghangaria.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Enjoy a relaxing evening
                          with the Roamers team, followed by a lovely dinner and an overnight stay at Ghangaria</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                      aria-controls="collapse5">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 5</span>
                        <span>Trek Down to Pulna (9 Kms) | Drive to Joshimath</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>

                  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary"></i>After breakfast, begin your
                          descent from Ghangaria to Pulna. Enjoy the ease of the downhill trek through the beautiful
                          landscape.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Once you reach Pulna,
                          take a scenic drive back to Joshimath via Govindghat.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Upon arrival in
                          Joshimath, check in to your hotel, enjoy lunch, and explore the town at your leisure. Visit
                          Narsingh Temple or relax in the local market with the team</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>Indulge in a cozy dinner
                          and enjoy your last night stay with the Roamers fam at Joshimath</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 20px;">
                  <h2 class="accordion-header" id="headingSix">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                      aria-controls="collapse6">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 6</span>
                        <span>Joshimath to Rishikesh | Trek Ends & Certification</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>

                  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>After breakfast, bid
                          farewell to Joshimath as you begin your drive back to Rishikesh.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary"></i>Arrive in Rishikesh by
                          evening, where the group disperses with incredible memories from this unforgettable trek.</li>
                        <li><i class="fa-regular fa-circle-dot fs-6 me-2 text-primary mb-3"></i>(If you've got some
                          time, explore the famous spots and cafes around Rishikesh or indulge in some adventure
                          activities like river rafting or bungee jumping)</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
            </div>

            <!-- >> Inclusion section << -->
            <section id="inclusion">
              <div class="important-notes shadow " style="border-radius: 15px; background-color:rgb(245, 255, 246) ;">
                <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Inclusion</h3>
                <div id="">
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Transportation by Tempo Traveler or cabs like Bolero/Sumo (Rishikesh to Joshimath and back).
                  </p>

                  <p> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>5 nights accommodation on
                    a sharing basis: 2 nights in Hotel/guesthouse at Joshimath, 3 nights in Hotel/guesthouse at
                    Ghangaria.</p>

                  <p class="mb-0"> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>Meals : All
                    Veg meals from Day 1st Dinner to Day 6th morning Tea. </p>
                  <p>(Complimentary evening tea and snacks provided. Lunch may be packed or served hot depending on the
                    day and place)</p>

                  <p> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>Experienced and qualified
                    trek leader and support staff.
                  </p>
                  <p> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>All entry fees and forest
                    permits included
                  </p>
                  <p> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>First-aid kit available
                    for emergencies.</p>
                  <p> <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>Driver allowances, tolls,
                    parking, and state taxes covered.</p>
                </div>
              </div>
            </section>


            <!-- >> Exclusion Section << -->

            <div class="important-notes shadow" style="border-radius: 15px; background-color: rgb(255, 244, 244);"
              id="exclusion">
              <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Exclusion</h3>
              <div>
                <p> <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Any meals beyond those
                  mentioned in inclusions.</p>

                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Travel insurance and personal
                  expenses like porter charges, tips, laundry, etc.</p>

                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Extra entry fees or expenses
                  for optional activities not listed in inclusions</p>

                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Cost for snow chains or 4x4
                  vehicles if required due to heavy snowfall.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Any additional costs caused by
                  natural disasters, weather, riots, roadblocks, landslides, or other unavoidable situations.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>GST (5%) extra.</p>
                <p><i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>Anything not mentioned in the
                  inclusions above.</p>
              </div>
            </div>

            <!-- >> Important Notes Section << -->

            <div class="important-notes shadow" style="border-radius: 15px;" id="notes">
              <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Important Notes</h3>
              <div>
                <p><i class="fa-solid fa-circle-exclamation me-2" style="color: #00aaff;"></i>Group trips are designed
                  for
                  ages 18 to 40 due to high packed adventure. Custom trips can be arranged for other age groups.</p>
                <p><i class="fa-solid fa-circle-exclamation me-2" style="color: #00aaff;"></i>This is a high-altitude
                  trip. Please consult your doctor before travelling. Limited medical facilities are available in remote
                  areas.</p>
                <p><i class="fa-solid fa-circle-exclamation me-2" style="color: #00aaff;"></i>Itinerary may be subjected
                  to change due to weather, road conditions, or health concerns. Changes will be made keeping your
                  safety
                  and comfort in mind.</p>
                <p><i class="fa-solid fa-circle-exclamation me-2" style="color: #00aaff;"></i>Inform us of any
                  pre-existing health conditions in advance.</p>
                <p><i class="fa-solid fa-circle-exclamation me-2" style="color: #00aaff;"></i>A ₹7,000 refundable
                  security
                  deposit is required per bike. Damages (excluding engine issues) are chargeable.</p>
              </div>
            </div>

          </div>

          <!-- >> Side Sticky Section << -->

          <div class="col-md-4">

            <div class="price-sticky" style="position: sticky; top: 120px;">

              <!-- >> Side Slider Section << -->

              <div class="priceCard shadow " style="border-radius: 20px;">
                <img src="assets/img/valley-of-flowers/valley-bg3.avif" alt="Ladakh Banner 3" style=" object-fit:cover;">
              </div>

              <!-- >> Pricing Box Section << -->

              <div class="price-card shadow p-1" style="border-radius: 20px;">
                <div class="p-2">
                  <!-- Inner box with light grey background -->
                  <div class="inner-box" style="background-color: #f0f0f0; padding: 15px; border-radius: 15px;">
                    <h3 style="text-align: center; margin-bottom: 20px;">Starting Price</h3>
                    <h5 class="special-offer">
                      <span class="old-price">
                        <strike>₹ 11,499/-</strike>
                      </span>
                      <span class="valley-price new-price"></span><span class="new-price">/-</span>
                    </h5>

                    <p>Catch the Blooms before it fades, Book your slots now!</p>
                    <div class="trip-form p-0">
                      <a href="valley-of-flowers-booking-form.php" class="btn butn butn__new bg-"
                        style="border-radius: 15px;">Dates
                        & Costing</a>
                    </div>
                  </div>
                </div>
              </div>


              <!-- >> Ladakh Form Section << -->

              <div class="shadow"
                style="border: 1px solid #00aaff; border-radius: 20px; padding: 20px; margin: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 450px; background-color: #fff;">
                <form>
                  <h3 style="text-align: center; margin-bottom: 30px; font-family: 'Arial', sans-serif; color: #333;">
                    Let's Map Your Dream Trip</h3>

                  <div class="input-field mb-3" style="margin-bottom: 20px;">
                    <label for="name" style="font-size: 16px; color: #333;">Name</label>
                    <input placeholder="Your Name" type="text" id="name" name="name" required
                      style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                  </div>

                  <div class="input-field mb-3" style="margin-bottom: 20px;">
                    <label for="email" style="font-size: 16px; color: #333;">Email</label>
                    <input placeholder="Your Email" type="email" id="email" name="email" required
                      style="width: 100%; padding: 12px; margin-bottom: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                  </div>

                  <div class="input-field mb-3" style="margin-bottom: 20px;">
                    <label for="phone" style="font-size: 16px; color: #333;">Phone Number</label>
                    <input placeholder="Your Phone Number" type="tel" id="phone" name="phone" required
                      style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; transition: border 0.3s ease;">
                  </div>

                  <div class="trip-form p-0">
                    <a href="" class="btn butn butn__new bg-" style="border-radius: 15px;">Submit</a>
                  </div>

                </form>
              </div>


              <!-- >> Ladakh Form Section End << -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </div>

  <!-- Rewind -->
  <section class="scroll-section">
    <h3 class="head" style="text-align: center; margin-bottom: 20px;">Roamers Rewind <img
        src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start">
    </h3>
    <div class="swiper-container two">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="assets/img/valley-of-flowers/img3.jpg" alt="slide 2">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="assets/img/valley-of-flowers/img14.jpg" alt="slide 5">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="assets/img/valley-of-flowers/img18.jpg" alt="slide 5">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="assets/img/valley-of-flowers/img15.jpg" alt="slide 5">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="assets/img/valley-of-flowers/img13.jpg" alt="slide 5">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Faq Seciton -->
  <section class="faq" id="notes">
    <h2 class="head">FAQ</h2>
    <div class="container">
      <div class="row">
        <div class="accordion" id="accordionFlushExample">
          <!--| First |-->
          <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
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
          <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
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
          <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
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
                <p style="font-size: 0.875rem; margin-bottom: 0;">The trips is for 18-35 year olds</p>
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
          <div class="accordion-item mb-4 border overflow-hidden" style="border-radius: 20px;">
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
          <span class="price-amount ">₹9,990/-</span>
          <span class="per-person">(Per Person)</span>
        </div>
      </div>
      <a href="valley-of-flowers-booking-form.php" class="btn-book">Dates & Costing</a>
    </div>
  </div>

  <!-- Trips -->
  <?php include('includes/trips.php'); ?>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

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
  <script src="assets/js/price.js"></script>

  <script src="https://hammerjs.github.io/dist/hammer.js"></script>

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





    var selectElements = document.getElementById("price-occ");
    var selectElements1 = document.getElementById("price-occ1");
    var price = document.getElementById('price');
    var perperson = document.getElementById('per-person');
    var bbb = document.getElementById('withtravel');

    selectElements.addEventListener("change", updatePrice);
    selectElements1.addEventListener("change", updatePrice);

    function updatePrice() {
      var selectedValue = selectElements.value;
      var selectedValue1 = selectElements1.value;

      if (selectedValue == "double" && selectedValue1 == "chennai") {
        price.innerHTML = "₹10,490";
        perperson.innerHTML = " per person";
        perperson.style.fontSize = "14px";
        perperson.style.fontWeight = "500";
        perperson.style.color = "#7c7c7c";
        bbb.style.display = "block";
      } else if (selectedValue == "triple" && selectedValue1 == "coimbatore") {
        price.innerHTML = "₹7,490";
        perperson.innerHTML = " per person";
        perperson.style.fontSize = "14px";
        perperson.style.fontWeight = "500";
        perperson.style.color = "#7c7c7c";
        bbb.style.display = "none";
      } else if (selectedValue == "triple" && selectedValue1 == "chennai") {
        price.innerHTML = "₹9,490";
        perperson.innerHTML = " per person";
        perperson.style.fontSize = "14px";
        perperson.style.fontWeight = "500";
        perperson.style.color = "#7c7c7c";
        bbb.style.display = "block";
      } else if (selectedValue == "double" && selectedValue1 == "coimbatore") {
        price.innerHTML = "₹8,490";
        perperson.innerHTML = " per person";
        perperson.style.fontSize = "14px";
        perperson.style.fontWeight = "500";
        perperson.style.color = "#7c7c7c";
        bbb.style.display = "none ";
      }
    }

    // Initial price update when the page loads
    updatePrice();
  </script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize Swiper with a slight delay to ensure proper positioning
      setTimeout(function () {
        var swiper = new Swiper('.swiper-container.two', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          initialSlide: 2,
          coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 150,
            modifier: 1.5,
            slideShadows: false
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          on: {
            init: function () {
              document.querySelector('.scroll-section').classList.add('initialized');
              document.querySelector('.swiper-container.two').classList.add('initialized');
            }
          }
        });
      }, 100);
    });
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

  <script>
    const section = document.getElementById("tripSection");
    const dotContainer = document.getElementById("dotPagination");

    const images = [
      "assets/img/valley-of-flowers/valley-bg.avif",
      "assets/img/valley-of-flowers/valley-bg2.avif",
      "assets/img/valley-of-flowers/valley-bg3.avif"
    ];

    let index = 0;
    let interval;

    // Create dots with fade-in animation
    images.forEach((_, i) => {
      const dot = document.createElement("span");
      dot.classList.add("dot");
      dot.style.opacity = "0";
      dot.addEventListener("click", () => {
        changeImage(i);
        resetInterval();
      });
      dotContainer.appendChild(dot);
      // Fade in dots one by one
      setTimeout(() => {
        dot.style.transition = "opacity 0.2s ease";
        dot.style.opacity = "1";
      }, i * 50); // Faster animation
    });

    const dots = document.querySelectorAll(".dot");

    function changeImage(newIndex) {
      section.classList.add("fade-in");
      setTimeout(() => {
        index = newIndex;
        section.style.backgroundImage = `url('${images[index]}')`;
        section.classList.remove("fade-in");
        updateDots();
      }, 300); // Faster transition
    }

    function updateDots() {
      dots.forEach((dot, i) => {
        if (i === index) {
          dot.classList.add("active");
        } else {
          dot.classList.remove("active");
        }
      });
    }

    function nextImage() {
      index = (index + 1) % images.length;
      changeImage(index);
    }

    function startInterval() {
      interval = setInterval(nextImage, 4000);
    }

    function resetInterval() {
      clearInterval(interval);
      startInterval();
    }

    // Initialize
    section.style.backgroundImage = `url('${images[index]}')`;
    updateDots();
    startInterval();
  </script>

  <script>
    $(".custom-carousel").owlCarousel({
      autoWidth: true,
      loop: true
    });
    $(document).ready(function () {
      $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
      });
    });
  </script>

  <script>
    var ladakhSlider = new Swiper(".ladakhSwiper", {
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

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

  <script>
    const cardSwiper = new Swiper(".custom-swiper-container", {
      loop: true,
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
        nextEl: ".custom-swiper-button-next",
        prevEl: ".custom-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4, // Optional: scale up at larger screen sizes
        },

      }
    });
  </script>

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
    function toggleReadMore() {
      const moreText = document.getElementById('moreText');
      const readMoreBtn = document.getElementById('readMoreBtn');

      if (moreText.style.display === 'none' || moreText.style.display === '') {
        moreText.style.display = 'inline';
        readMoreBtn.innerHTML = `
  <i class="fa-solid fa-circle-chevron-up shadow"
     style="
        color: #4ec0db; 
       background-color:rgb(255, 255, 255); 
       font-size: 16px; 
      width: 30px; 
       height: 30px; 
       display: flex; 
       align-items: center; 
       justify-content: center; 
       border-radius: 50%; 
       margin-top: 0px;">
  </i>`;

      } else {
        moreText.style.display = 'none';
        readMoreBtn.innerHTML = `
  <i class="fa-solid fa-circle-chevron-down shadow" 
     style="
          color: #4ec0db; 
       background-color:rgb(255, 255, 255); 
     font-size: 16px;
     width: 30px;
     height: 30px;
     display: flex;
     align-items: center;
     justify-content: center;
     border-radius: 50%;
     margin-top: 0px;">
  </i>`;

      }
    }
  </script>

</body>

</html>

</html>