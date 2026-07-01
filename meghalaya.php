<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/optimized-images/og-img/megalaya.avif"
    width="600" height="600" alt="image for ooty" />
  <title>Roamers - Meghalaya</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Roamers - Meghalaya" />
  <meta name="author" content="Themeland" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Basic Open Graph tags -->
  <meta property="og:title" content="Roamers - Meghalaya" />
  <meta property="og:description" content="Discover the beauty of Meghalaya with our detailed travel guide and tips." />
  <meta property="og:image" content="https://roamers.in/assets/optimized-images/og-img/megalaya.avif" />
  <meta property="og:url" content="https://roamers.in/assets/optimized-images/og-img/megalaya.avif" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Roamers - Meghalaya" />
  <meta name="twitter:description"
    content="Discover the beauty of Meghalaya with our detailed travel guide and tips." />
  <meta name="twitter:image" content="https://roamers.in/assets/optimized-images/og-img/megalaya.avif" />

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

    /* @media screen and (max-width: 991px) {
    .bottom-bar-content {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        padding: 5px 10px !important;
    }
} */

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
        padding: 8px 0px 5px 10px !important;
        border: 1px solid rgba(0, 0, 0, 0.08) !important;
        animation: none !important;
        /* Removed animation */
      }

      .bottom-bar-content {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        max-width: 600px;
        margin: 0 auto;
        animation: none !important;
        /* Removed animation */

      }

      .price-box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        animation: none !important;
        /* Removed animation */

      }

      .price-box .label {
        margin: 0 !important;
        font-size: 13px !important;
        color: #333 !important;
        font-weight: 700 !important;
        line-height: 1.1 !important;
        text-transform: none !important;
      }

      .price-info {
        display: flex !important;
        flex-direction: column !important;
        /* Stack price and per-person */
        align-items: flex-start !important;
        gap: 0 !important;
        margin-top: 1px !important;
      }

      .price-amount {
        font-size: clamp(20px, 5.5vw, 24px) !important;
        font-weight: 900 !important;
        color: #4ec0db !important;
        margin: 0 !important;
        line-height: 1 !important;
      }

      .per-person {
        font-size: 9px !important;
        /* Made it smaller */
        color: #777 !important;
        font-weight: 500 !important;
        margin-top: 2px !important;
        white-space: nowrap !important;
      }

      .btn-book {
        background-color: #4ec0db !important;
        color: #fff !important;
        padding: 12px clamp(15px, 4vw, 28px) !important;
        border-radius: 100px !important;
        font-weight: 800 !important;
        text-decoration: none !important;
        font-size: clamp(14px, 4vw, 15px) !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 15px rgba(78, 192, 219, 0.4) !important;
        border: none !important;
        white-space: nowrap !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
      }

      .whatapp {
        bottom: 100px !important;
        z-index: 2147483646 !important;
      }

      @media (max-height: 450px) {
        .mobile-bottom-bar {
          bottom: 10px !important;
          padding: 6px 15px !important;
        }

        .price-amount {
          font-size: 18px !important;
        }

        .btn-book {
          padding: 8px 20px !important;
        }
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

    @keyframes slideUpBottom {
      from {
        transform: translateY(100px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
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
      border-radius: 100% !important;
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


      .swiper-3d {
        perspective: 100px !important;
      }

    }

    /* Perspective of Journey in Frames  */

    .swiper-3d {
      perspective: 1400px !important;
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
      position: relative !important;
      top: auto !important;
      left: auto !important;
      right: auto !important;
      bottom: auto !important;
      transform: none !important;
    }

    /* .journey-nav-btn:hover {
      background: #094067 !important;
      color: #fff !important;
      transform: scale(1.1) !important;
    } */

    /* Hide any possible ghost buttons */
    .rewind-nav-btn {
      display: none !important;
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

    /* .rewind-card:hover img {
      transform: scale(1.1);
    } */

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

      .journey-nav-container {
        display: none !important;
      }

      .journey-nav-btn {
        width: 40px !important;
        height: 40px !important;
      }

      .rewind-card {
        height: 380px;
      }

      .rewind-swiper .swiper-wrapper {
        height: 400px !important;
      }

      .rewind-header {
        flex-direction: column;
        align-items: center;
      }

      .rewind-title-area h2 {
        font-size: 28px;
      }
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
        MAGICAL MEGHALAYA
      </h2>

      <ul class="banner-hight-bottom p-0"
        style="list-style: none; ; display: flex; flex-wrap: wrap; justify-content: center;">
        <li class=" me-2 mobile-small-text" style="display: flex; align-items: center; font-weight: 800;">

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
                  <div class="info-value meghalaya-price"><span>/-</span></div>
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
                  <div class="info-value">6D / 5N</div>
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
                  <div class="info-value">Guwahati</div>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-center">
              <a href="#" class="btn butn butn__new" style="width: 100%; max-width: 200px; border-radius: 30px;">
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
                <div class="info-value meghalaya-price"><span>/-</span></div>
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
                  <div class="info-value">6D / 5N</div>
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
                  <div class="info-value">Guwahati</div>
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
        document.addEventListener('DOMContentLoaded', () => {
          const tabs = document.querySelectorAll('.tab-box');
          const sections = Array.from(tabs)
            .map(tab => document.querySelector(tab.getAttribute('href')))
            .filter(Boolean); // Skip nulls

          function updateActiveTabOnScroll() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            let bestMatchIndex = -1;

            sections.forEach((section, i) => {
              const rect = section.getBoundingClientRect();
              const sectionTop = rect.top + scrollTop;
              const sectionBottom = sectionTop + section.offsetHeight;

              // Trigger active tab if section is at least halfway visible
              if (scrollTop + window.innerHeight / 2 >= sectionTop && scrollTop < sectionBottom) {
                bestMatchIndex = i;
              }
            });

            if (bestMatchIndex !== -1) {
              tabs.forEach(tab => tab.classList.remove('active'));
              tabs[bestMatchIndex].classList.add('active');
            }
          }

          // Throttle scroll events for performance
          let ticking = false;
          window.addEventListener('scroll', () => {
            if (!ticking) {
              window.requestAnimationFrame(() => {
                updateActiveTabOnScroll();
                ticking = false;
              });
              ticking = true;
            }
          });

          // Run once on load
          updateActiveTabOnScroll();
        });
      </script>



    </section>
    <br><br>

    <section class="destination mt-0 mt-lg-5"
      style="background-color: white; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-radius: 30px;" id="overview">

      <div class="">
        <div class="row g-4 flex-column-reverse flex-md-row align-items-center">

          <!-- Text Section -->
          <div class="col-md-7">
            <div class="travel-des p-3 p-md-4">
              <h2 class="mb-3 pt-3">Let’s unveil the world of Meghalaya </h2>

              <!-- Desktop description (full text) -->
              <p style="color: #555;" class="desk-desc d-none d-md-block">
                Think Meghalaya is all about those picturesque waterfalls, root bridges, and endless rivers? Well, it's
                that and so much more! Join us for an action-packed 7-day adventure where you'll dive deep into
                Meghalaya's unique culture, embrace thrilling experiences, and uncover a world that defies Instagram's
                limits. It's all about exploring with a tight-knit group of fellow travellers who are ready to create
                unforgettable memories
              </p>

              <!-- Mobile description (truncated with toggle) -->
              <p style="color: #555;" class="mob-desc d-block d-md-none">
                Think Meghalaya is all about those picturesque waterfalls, root bridges, and endless rivers? Well, it's
                that and so much more! Join us for an action-packed 7-day adventure where you'll dive deep into
                Meghalaya's unique culture, embrace thrilling experiences,<br>
                <span id="dots">...</span>
                <span id="moreText" style="display: none;"><br><br>
                  and uncover a world that defies Instagram's
                  limits. It's all about exploring with a tight-knit group of fellow travellers who are ready to create
                  unforgettable memories
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
                <?php
                for ($i = 1; $i <= 32; $i++) {
                  $imgNum = sprintf("%02d", $i);
                  echo '<div class="swiper-slide">';
                  echo '  <img src="assets/img/meghalaya/meghalaya-gallery-' . $imgNum . '.avif" class="img-fluid w-100" alt="Meghalaya Gallery Image ' . $i . '" style="border-radius: 30px; height: 350px; object-fit: cover;">';
                  echo '</div>';
                }
                ?>
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
            <h3 class="mt-5 text-center mt-md-0" style="text-align: start; margin-bottom: 20px; margin-left: 10px;"
              class="text-center head">Trip Itinerary
            </h3>
            <div class="">

              <div class="accordion" id="accordionExample">
                <!-- day 1 -->
                <div class="accordion-item mb-4 border-0 overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-dark fw-bold d-flex justify-content-between align-items-center"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      <div class="d-flex align-items-center">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2">Day 1</span>
                        <span> Guwahati arrival | Umiam Lake | Shillong chill scenes</span>
                      </div>
                      <i class="bi bi-chevron-down ms-auto transition-all"></i>
                    </button>
                  </h2>

                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #f5fdff;">

                      <ul class="ps-lg-3 ps-0">
                        <!-- <li class=""><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                            style="font-size: 0.65rem;"></i>
                          Meet the Roamers team & trip captain at the designated point in Guwahati and get ready to
                          kick-start our journey to Shillong.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Enjoy the breathtaking views of lush green hills and the mesmerising Umiam Lake while
                          socializing with the co-travelers. Music on and let the fun begin!
                          </span>
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll check in to our comfy accommodation in Shillong, freshen up, and it's time for some
                          leisure.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's chill at quaint cafes, soak in the colonial charm of Shillong, and feel free to take a
                          stroll through the vibrant streets.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight stay in Shillong, where the good times continue!
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3"
                            style="font-size: 0.65rem;"></i>Hey Welcome to Meghalaya! Meet your fellow travellers & Roamers Trip Captain at the designated pickup point in Guwahati.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's kickstart our Meghalaya expedition with a scenic drive towards Shillong, enjoy the stunning scenery & socialize with co-travellers on our way!</li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                         We'll make a stop at the stunning Umiam Lake Viewpoint, one of Meghalaya's most iconic landscapes & the perfect lake views to capture.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                           Reach Shillong by evening, check in to the hotel and take some time to freshen up before heading out to explore the lively Police Bazaar with our team.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Enjoy shopping, local cafés and explore the vibrant market of Shillong. Return to the hotel, more games & fun night awaits Roamers!</li>
                          <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight stay in Shillong.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- day 2 -->
                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 2</span>
                        <!-- <span>Laitlum Grand Canyon | Cherrapunjee | Wei Sawdong Waterfall</span> -->
                         <span>Shillong to Shnongpdeng (Dawki) | Laitlum & KrangSuri Waterfalls</span>
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
                        <!-- <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Rise and shine for an epic day! After breakfast, we're off to the stunning Laitlum Canyons for
                          panoramic valley views of Meghalaya.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's Begin our drive towards Cherrapunjee,
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Upon arrival check-in to our cozy hotel
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Upon arrival check-in to our cozy hotel
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Next, we'll visit the majestic Wei Sawdong Waterfall which is a threetiered waterfall, one of Meghalaya's gems.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight Stay in Cherrapunjee, team extravaganza! Prepare for a night of pure fun and loads of unforgettable memories
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight Stay in Cherrapunjee.
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight Stay in Cherrapunjee, team extravaganza! Prepare for a night of pure fun and loads
                          of unforgettable memories
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                           Wake up to a beautiful Shillong morning, enjoy breakfast and get ready for another exciting day ahead.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Our first stop is the breathtaking Laitlum Canyon, explore the endless valleys & dramatic cliffs offering some of the best views in Meghalaya.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          On our way towards the long journey we'll visit the famous Krang Suri Waterfalls and get ready to swim in the icy crystal-clear blue waters just like a paradise.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                         By evening, we'll arrive at the beautiful riverside campsite in Shnongpdeng, located beside the famous Umngot River.</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          As the sun sets, enjoy a memorable evening around the campsite with dinner, music, conversations and countless memories with the best travellers around!</li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight riverside camping in Shnongpdeng (Dawki).</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- day 3 -->
                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                      aria-controls="collapse3">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 3</span>
                        <!-- <span>Trek Living Root Bridges of Meghalaya</span> -->
                         <span>Shnongpdeng to Cherrapunji | Water Adventures & Caves</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Wake up early and post-breakfast, we're heading to Tyrna Village for a thrilling living
                          double-decker root bridge trek.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Let's take a pause at the Ritymmen Root Bridge known for it's longest living root.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Trek ahead to make our visit to the resplendent Umshiang double-decker bridge and capture
                          those insta-worthy moments.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          In the evening, we'll return to our comfy Cherrapunjee accommodation for some well-deserved leisure. Overnight stay at Cherrapunjeе!!!
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>In
                          the evening, we'll return to our comfy Cherrapunjee accommodation for some well-deserved
                          leisure.
                          Overnight stay at Cherrapunjee!!!
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Rise early to witness the magical morning views of the crystal-clear Umngot River before enjoying breakfast at the campsite.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          It's time for some adventure! Enjoy exciting water activities like boating, kayaking or Cliff Jumping at the Umngot River (activities may vary and are subject to weather conditions).
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                           Later, we'll begin our scenic drive towards Cherrapunji, one of the wettest places & adventurous Land of India!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Explore the fascinating Mawsmai Cave, famous for its naturally formed limestone passages and unique rock formations.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          End the day at the spectacular Seven Sisters Waterfall Viewpoint, where the sunset creates a picture-perfect backdrop, hey a group pic is must here :)
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Late evening reach your Hotel, Overnight stay in Cherrapunji.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- day 4 -->
                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                      aria-controls="collapse4">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 4</span>
                        <!-- <span>Nohkalikai Falls | Mawsmai Caves | Dawki</span> -->
                         <span>Double Decker Root Bridge Trek | Blue Lagoon Waterfalls</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Rise and shine again! We're diving into the picturesque beauty of Meghalaya, starting with Nohkalikai Falls (the tallest plunge waterfall in India) and Seven Sister Falls.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Next up, we'll head to the majestic Mawsmai Caves. Let's stroll inside and explore.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After a fantastic exploration day, we'll begin our drive towards Dawki.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Visit the pristine Mawlynnong village, know as Asia's cleanest village, take a relaxing walk through its beautiful surroundings
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Gather for a delicious group Dinner & Overnight Camping in Dawki
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Fuel up with a delicious breakfast because today brings one of Meghalaya's biggest adventures!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                           Begin the trek to the world-famous Double Decker Living Root Bridge, passing through lush forests, hanging bridges and beautiful village trails.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll take a short break at the famous Ritymmen Living Root Bridge, known for being one of the longest living root bridges in the region.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          The adventure doesn't stop there! Trek further to witness the one and only Umshiang Double Decker Living Root Bridge, a true wonder crafted by nature over centuries.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Not finished yet, gang! Let's continue our trek to the stunning Blue Lagoon Waterfalls. Take a refreshing dip, relax by the crystal-clear waters and capture those Insta-worthy moments!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After an unforgettable day of adventure, we'll begin our Return Trek, back with our Team!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Reach the hotel and relax after the long day, Overnight stay in Cherrapunji.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- day 5 -->
                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                      aria-controls="collapse5">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 5</span>
                        <!-- <span>Umngot River | Boat Ride | Krang Shuri Waterfall</span> -->
                         <span>Nohkalikai, Wei Sawdong Falls, Garden of Caves | Farewell Night</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Alright team! get ready for an exhilarating Boat ride on the crystal-clear waters of Umngot
                          River in Dawki.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Visit the peaceful India-Bangladesh border checkpost, an unbarbed area perfect for unique
                          photo ops!
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          On the way back to Shillong, we'll visit the enchanting Krang Shuri Waterfall, an absolute
                          must-see waterfall of Meghalaya known for its silky cascading water.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll check in to our comfy Shillong accommodation and enjoy some leisure time.
                          Overnight stay in Shillong, where the adventure never ends!
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast, we'll continue exploring some of Meghalaya's most beautiful natural attractions before heading back to Shillong.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Visit the magnificent Nohkalikai Falls Viewpoint and witness the breathtaking views from one of India's tallest plunge waterfalls. (A falls with history & mystery behind).
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Next, we'll make a short hike to the stunning Wei Sawdong Waterfall, famous for its crystal-clear turquoise pools.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Before leaving Cherrapunji, we'll explore the peaceful Garden of Caves, a hidden gem filled with streams, caves and lush greenery.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          By late evening, we'll arrive back in Shillong, relax after the day's adventures and get ready for the Farewell night & dinner with the team organised by Roamers team!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Overnight stay in Shillong.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- day 6 -->
                <div class="accordion-item mb-4 border  overflow-hidden" style="border-radius: 30px;">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed d-flex justify-content-between align-items-center text-dark fw-bold"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                      aria-controls="collapse6">

                      <div class="d-flex align-items-center w-100">
                        <span class="badge bg-primary rounded-pill me-3 px-3 py-2 animated-badge">Day 6</span>
                        <!-- <span>Shillong #MeTime | Farewell</span> -->
                         <span>Shillong to Guwahati | Back to home!</span>
                        <i class="bi bi-chevron-down ms-auto transition-arrow" style="color:#0c63e4;"></i>
                      </div>
                    </button>
                  </h2>
                  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white px-4 py-3">
                      <ul class="ps-lg-3 ps-0">
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Wake up and get ready for a relaxed morning as we prepare to enjoy a delightful breakfast,
                          fueling up for your last day in Meghalaya.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Bid goodbye to Meghalaya as we drive back to Guwahati, cherishing countless memories,
                          incredible experiences, and new friendships.
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Our fantastic trip ends, leaving us with hearts full of joy and adventure! Until next time,
                          team!
                        </li>
                        <li><i class="fa-regular fa-circle-dot me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Goodbyes are never easy, but what ride it has been! See you guys, more Hugs!
                        </li> -->
                        <!-- <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll reach our first drop point Coimbatore at 7 PM, and we'll arrive at Chennai by 6 AM. Bye
                          for now, Roamers. Reunion plans for next year? You bet!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Goodbyes are never easy, but what ride it has been! See you guys, more Hugs!
                        </li> -->
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          After breakfast, we'll bid goodbye to Meghalaya and begin our scenic drive back to Guwahati.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          On the way, let's make one final stop at the beautiful Umiam Lake if time permits, to soak
                          in the last views of Meghalaya.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          We'll reach Guwahati by afternoon & drop everyone at the Airport/Station with hearts full of memories & cameras full of beautiful moments.
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Our Meghalaya expedition comes to an end, but the friendships, adventures and stories will
                          stay with us forever. Until the next adventure with Roamers!
                        </li>
                        <li><i class="fa-regular fa-circle-dot  me-2 icon-blue mb-3" style="font-size: 0.65rem;"></i>
                          Bye Bye! More Hugs! Will see you all soon in our next adventure…
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- >> Inclusion section << -->
            <section id="inclusion">
              <div class="important-notes shadow " style="border-radius: 30px; background-color:rgb(245, 255, 246) ;">
                <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Inclusion</h3>
                <div id="">

                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Cover all Transportation as mentioned in itinerary.
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    6 Meals - 5 Breakfast & 1 Farewell Dinner
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Experienced driver who is super friendly & knowledgeable
                  </p>
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Entry fees for Included places and local tax. No hidden charges.

                  </p>
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    A-Z Trip assistance from our Travel Experts.

                  </p>
                  <p>
                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                    Guide Treak, Boating, Bonfire (if Weather Permits)
                  </p>

                </div>
              </div>
            </section>

            <!-- >> Exclusion Section << -->
            <div class="important-notes shadow" style="border-radius: 30px; background-color: rgb(255, 244, 244);"
              id="exclusion">
              <h3 class="head" style="text-align: center; margin-bottom: 20px; margin-left: 10px;">Exclusion</h3>
              <div>
                <p>
                  <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Personal Expenses like shopping and other optional activities.

                </p>
                <p>
                  <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Any other costing involved due to natural calamity or any other forced circumstance which are out of
                  our control.
                </p>
                <p>
                  <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  GST (5%) is applicable extra.
                </p>
                <p>
                  <i class="fa-solid fa-circle-xmark me-2 pulse" style="color: red;"></i>
                  Anything which is not mentioned in the above Inclusions
                </p>
              </div>
            </div>
          </div>

          <!-- Side Sticky Section -->
          <div class="col-md-4">
            <div class="price-sticky" style="position: sticky;">
              <!-- Side Slider Section -->
              <div class="priceCard shadow" style="border-radius: 30px;">
                <img src="assets/img/meghalaya/meghalaya-gallery-10.avif" alt="Meghalaya Landscape"
                  style=" object-fit:cover; border-radius: 30px;">
              </div>

              <!-- >> Pricing Box Section << -->
              <div class="price-card shadow p-1" style="border-radius: 30px;">
                <div class="p-2">
                  <!-- Inner box with light grey background -->
                  <div class="inner-box" style="background-color: #f0f0f0; padding: 15px; border-radius: 30px;">
                    <h3 style="text-align: center; margin-bottom: 20px;">Starting Price</h3>
                    <h5 class="special-offer">
                      <span class="old-price">
                        <strike>₹ 20,990/-</strike>
                      </span>
                      <span class="meghalaya-price new-price"></span><span class="new-price">/-</span>
                    </h5>

                    <p>perfect for group adventures and shared <br> memories.</p>
                    <div class="trip-form p-0">
                      <a href="meghalaya-form.php" class="btn butn butn__new bg-" style="border-radius: 30px;">Dates
                        & Costing</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- >> Ladakh Form Section << -->
              <div id="form" class="shadow"
                style="border: 1px solid #00aaff; border-radius: 30px; padding: 20px; margin: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 450px; background-color: #fff;">
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
                    <a href="" class="btn butn butn__new bg-" style="border-radius: 30px;">Submit</a>
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
        <?php
        for ($i = 1; $i <= 32; $i++) {
          $imgNum = sprintf("%02d", $i); // Formats number to 01, 02, etc.
          echo '<div class="swiper-slide">';
          echo '  <div class="slider-image">';
          echo '    <img src="assets/img/meghalaya/meghalaya-gallery-' . $imgNum . '.avif" alt="Meghalaya Gallery Image ' . $i . '">';
          echo '  </div>';
          echo '</div>';
        }
        ?>
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
                            <img src="assets/img/meghalaya/meghalaya-gallery-29.avif" alt="Meghalaya Gallery Image 29">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                           <img src="assets/img/meghalaya/meghalaya-gallery-30.avif" alt="Meghalaya Gallery Image 30">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-31.avif" alt="Meghalaya Gallery Image 31">
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-32.avif" alt="Meghalaya Gallery Image 32">
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-01.avif" alt="Meghalaya Gallery Image 1">
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-02.avif" alt="Meghalaya Gallery Image 2">
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-03.avif" alt="Meghalaya Gallery Image 3">
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-04.avif" alt="Meghalaya Gallery Image 4">
                        </div>
                    </div>

                    <!-- Slide 9 -->
                     <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-05.avif" alt="Meghalaya Gallery Image 5">
                        </div>
                    </div>

                    <!-- Slide 10 -->
                     <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-06.avif" alt="Meghalaya Gallery Image 6">
                        </div>
                    </div>

                    <!-- Slide 11 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-07.avif" alt="Meghalaya Gallery Image 7">
                        </div>
                    </div>

                    <!-- Slide 12 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-08.avif" alt="Meghalaya Gallery Image 8">
                        </div>
                    </div>

                    <!-- Slide 13 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-09.avif" alt="Meghalaya Gallery Image 9">
                        </div>
                    </div>

                    <!-- Slide 14 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-10.avif" alt="Meghalaya Gallery Image 10">
                        </div>
                    </div>

                    <!-- Slide 15 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-11.avif" alt="Meghalaya Gallery Image 11">
                        </div>
                    </div>

                    <!-- Slide 16 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-12.avif" alt="Meghalaya Gallery Image 12">
                        </div>
                    </div>

                    <!-- Slide 17 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-13.avif" alt="Meghalaya Gallery Image 13">
                        </div>
                    </div>

                    <!-- Slide 18 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-14.avif" alt="Meghalaya Gallery Image 14">
                        </div>
                    </div>

                    <!-- Slide 19 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-15.avif" alt="Meghalaya Gallery Image 15">
                        </div>
                    </div>

                    <!-- Slide 20 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-16.avif" alt="Meghalaya Gallery Image 16">
                        </div>
                    </div>

                    <!-- Slide 21 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-17.avif" alt="Meghalaya Gallery Image 17">
                        </div>
                    </div>

                    <!-- Slide 22 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-18.avif" alt="Meghalaya Gallery Image 18">
                        </div>
                    </div>

                    <!-- Slide 23 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-19.avif" alt="Meghalaya Gallery Image 19">
                        </div>
                    </div>

                    <!-- Slide 24 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-20.avif" alt="Meghalaya Gallery Image 20">
                        </div>
                    </div>

                    <!-- Slide 25 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-21.avif" alt="Meghalaya Gallery Image 21">
                        </div>
                    </div>

                    <!-- Slide 26 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-22.avif" alt="Meghalaya Gallery Image 22">
                        </div>
                    </div>

                    <!-- Slide 27 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-23.avif" alt="Meghalaya Gallery Image 23">
                        </div>
                    </div>

                    <!-- Slide 28 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-24.avif" alt="Meghalaya Gallery Image 24">
                        </div>
                    </div>

                    <!-- Slide 29 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-25.avif" alt="Meghalaya Gallery Image 25">
                        </div>
                    </div>

                    <!-- Slide 30 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-26.avif" alt="Meghalaya Gallery Image 26">
                        </div>
                    </div>

                    <!-- Slide 31 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-27.avif" alt="Meghalaya Gallery Image 27">
                        </div>
                    </div>

                    <!-- Slide 32 -->
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/meghalaya/meghalaya-gallery-28.avif" alt="Meghalaya Gallery Image 28">
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons - Now Inside Swiper for better sync -->
                
    <div class="journey-nav-container">
      <div class="journey-nav-btn journey-prev"><i class="fa-solid fa-chevron-left"></i></div>
      <div class="journey-nav-btn journey-next"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

                
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

  <!-- Mobile Price -->
  <div class="mobile-bottom-bar">
    <div class="bottom-bar-content">
      <div class="price-box ">
        <h6 class="label">Starts at</h6>
        <div class="price-info">
          <span class="price-amount meghalaya-price">/-</span>
          <span class="per-person">(Per Person)</span>
        </div>
      </div>
      <a href="meghalaya-form.php" class="btn-book">Dates & Costing</a>
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

  <script src="https://hammerjs.github.io/dist/hammer.js"></script>

  <script>
    window.addEventListener("DOMContentLoaded", function() {
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
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Swiper with a slight delay to ensure proper positioning
      setTimeout(function() {
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
            init: function() {
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

    window.onscroll = function() {
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
    sliders.forEach(function(slider) {
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
      "assets/img/meghalaya/meghalaya-gallery-13.avif",
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
    $(document).ready(function() {
      $(".custom-carousel .item").click(function() {
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
            spaceBetween: 1,
            coverflowEffect: {
              rotate: 15,
              depth: 150,
              modifier: 1,
            }
          },
          640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
            coverflowEffect: {
              rotate: 20,
              depth: 100,
              modifier: 1,
            }
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            coverflowEffect: {
              rotate: 20,
              depth: 100,
              modifier: 1,
            }
          }
        }
      });
    });
  </script>

  <style>
    .rewind-swiper .swiper-slide {
      cursor: pointer;
    }
  </style>

</body>

</html>