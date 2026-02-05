<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
  <title>Roamers</title>
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
  <style>
    .trip-home {
      background: url(assets/img/kolukkumalai-img/Cover.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
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

    #readMoreLink {
      visibility: hidden;
    }

    .per-person {
      color: #7c7c7c;
      font-weight: 500;
      font-size: 13px;
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

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
    }

    .things-carry {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: max-height 0.5s, opacity 0.5s;
      margin: 36px auto 0px;
      width: 100%;
      padding: 15px 27px;
      border-radius: 14px;
      background: #fff;
      color: #555;
      font-size: 14px;
      line-height: 24px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .things-carry h2 {
      text-align: center;
      padding: 18px 0 10px 0;
    }

    .things-carry li {
      font-size: 15px;
      font-weight: 400;
      line-height: 32px;
      color: #5f6c7b;
    }

    .things-carry li::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/chexh\ 1.png);
      left: 33px;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    .privacy-policy {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: max-height 0.5s, opacity 0.5s;
      margin: 36px auto 0px;
      width: 100%;
      padding: 15px 27px;
      border-radius: 14px;
      background: #fff;
      color: #555;
      font-size: 14px;
      line-height: 24px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .privacy-policy h2 {
      text-align: center;
      padding: 18px 0 10px 0;
    }

    .privacy-policy li {
      font-size: 15px;
      font-weight: 400;
      line-height: 32px;
      color: #5f6c7b;
    }

    .privacy-policy li::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/chexh\ 1.png);
      left: 33px;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
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

    @media (max-width: 600px) {
      .events-container {
        overflow-y: scroll !important;
        height: 350px !important;
      }

      .calendar {
        padding: 13px !important;
      }

      .calendar-container {
        width: 100% !important;
        padding: 5px !important;
      }

      .large-btn {
        position: fixed !important;
        bottom: 80px !important;
        z-index: 999 !important;
        right: 15px !important;
        width: 30px !important;
        height: 57px !important;
      }

      .calendar-logo {
        font-size: 25px !important;
      }

      .kerala-overview {
        font-size: 20px !important;
      }

      .price-occupancy {
        padding: 10px 5px !important;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .things-carry li {
        font-size: 12px !important;
        line-height: 27px !important;
      }

      .things-carry li::before {
        width: 16px !important;
        height: 16px !important;
      }

      .things-carry ul {
        padding-left: 1.3rem !important;
      }

      .privacy-policy li {
        font-size: 12px !important;
        line-height: 27px !important;
      }

      .privacy-policy p {
        font-size: 13px !important;
        line-height: 20px !important;
      }

      .privacy-policy li::before {
        width: 16px !important;
        height: 16px !important;
      }

      .privacy-policy ul {
        padding-left: 1.3rem !important;
      }

      .accordion-button {
        font-size: 10px !important;
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

      #readMoreBtn {
        padding: 8px 12px !important;
        border-radius: 11px !important;
        font-size: 13px !important;
        margin-left: 20px;
      }

      #readMoreBtn1 {
        padding: 8px 12px !important;
        border-radius: 11px !important;
        font-size: 13px !important;
      }

      .kerala-overview {
        font-size: 20px !important;
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
    }

    .price-occupancy {
      padding: 12px 33px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
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

    #readMoreBtn {
      text-align: center;
      border: none;
      padding: 15px 20px;
      border-radius: 15px;
      position: absolute;
      margin-top: -100px;
      background: #d8eefe;
    }

    #readMoreBtn1 {
      text-align: center;
      border: none;
      padding: 15px 20px;
      border-radius: 15px;
      margin-left: 250px;
      position: absolute;
      margin-top: -100px;
      background: #d8eefe;
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




    /* Overall body and content */

    .content {
      padding: 20px 20px;
      height: 500px;
      position: relative;
      margin: 20px auto;
      background: #52A0FD;
      background: -moz-linear-gradient(right, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: -webkit-linear-gradient(right, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: linear-gradient(to left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      border-radius: 3px;
      box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      -moz-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      -webkit-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }

    /*  Events display */
    .events-container {
      overflow-y: scroll;
      height: 100%;
      padding: 20px;
      float: right;
      margin: 0px auto;
      font: 13px Helvetica, Arial, sans-serif;
      display: inline-block;
      padding: 0 10px;
      border-bottom-right-radius: 3px;
      border-top-right-radius: 3px;
    }

    /* Styling the scrollbar */
    .events-container::-webkit-scrollbar {
      width: 10px;
      background-color: #F5F5F5;
    }

    .events-container::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #F5F5F5;
    }

    .events-container::-webkit-scrollbar-thumb {
      background-color: #F90;
      background-image: -webkit-linear-gradient(45deg,
          rgba(255, 255, 255, .2) 25%,
          transparent 25%,
          transparent 50%,
          rgba(255, 255, 255, .2) 50%,
          rgba(255, 255, 255, .2) 75%,
          transparent 75%,
          transparent)
    }

    .events-container::-webkit-scrollbar-thumb:hover {
      background: #555;
      /* Color of the scrollbar thumb on hover */
    }

    .events-container:after {
      clear: both;
    }

    .event-content {
      display: grid;
      place-items: flex-start;
    }

    .event-none {
      font-size: 17px;
      padding: 10px;
    }

    .event-card {
      padding: 3px;
      width: 350px;
      margin: 20px auto;
      display: flex;
      gap: 10px;
      background: #fff;
      border-radius: 3px;
      box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      -moz-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      -webkit-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }

    .event-count,
    .event-name,
    .event-cancelled {
      display: inline;
      padding: 0 10px;
      font-size: 1rem;
    }

    .event-count {
      color: #52A0FD;
      text-align: right;
      margin-top: 20px;
      font-size: 13px;
      /* margin: 0; */
      padding: 0;
    }

    .event-name {
      padding-right: 0;
      text-align: left;
      margin-top: -7px;
      font-size: 16px;
      padding: 0;
    }

    .event-cancelled {
      color: #FF1744;
      text-align: right;
    }

    /*  Calendar wrapper */
    .calendar-container {
      float: left;
      position: relative;
      margin: 0px auto;
      height: 100%;
      background: #fff;
      font: 13px Helvetica, Arial, san-serif;
      display: inline-block;
      border-radius: 5px;
    }

    .calendar-container:after {
      clear: both;
    }

    .calendar {
      display: table;
      padding: 40px;
    }

    /* Calendar Header */
    .year-header {
      background: #52A0FD;
      background: -moz-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: -webkit-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: linear-gradient(to right, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      height: 40px;
      text-align: center;
      position: relative;
      color: #fff;
      border-top-left-radius: 3px;
    }

    .year-header span {
      display: inline-block;
      font-size: 20px;
      line-height: 30px;
    }

    .left-button,
    .right-button {
      cursor: pointer;
      width: 28px;
      text-align: center;
      position: absolute;
    }

    .left-button {
      left: 0;
      -webkit-border-top-left-radius: 5px;
      -moz-border-radius-topleft: 5px;
      border-top-left-radius: 5px;
    }

    .right-button {
      right: 0;
      top: 0;
      -webkit-border-top-right-radius: 5px;
      -moz-border-radius-topright: 5px;
      border-top-right-radius: 5px;
    }

    .left-button:hover {
      background: #3FADFF;
    }

    .right-button:hover {
      background: #00C1FF;
    }

    /* Buttons */
    .button {
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      font-size: 1rem;
      border-radius: 25px;
      padding: 0.65rem 1.9rem;
      transition: .2s ease all;
      color: white;
      border: none;
      box-shadow: -1px 10px 20px #9BC6FD;
      background: #52A0FD;
      background: -moz-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: -webkit-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      background: linear-gradient(to right, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
    }

    #cancel-button {
      box-shadow: -1px 10px 20px #FF7DAE;
      background: #FF1744;
      background: -moz-linear-gradient(left, #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
      background: -webkit-linear-gradient(left, #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
      background: linear-gradient(to right, #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
    }

    #add-button {
      display: block;
      position: absolute;
      right: 20px;
      bottom: 20px;
    }

    #add-button:hover,
    #ok-button:hover,
    #cancel-button:hover {
      transform: scale(1.03);
    }

    #add-button:active,
    #ok-button:active,
    #cancel-button:active {
      transform: translateY(3px) scale(.97);
    }

    /* Days/months tables */
    .days-table,
    .dates-table,
    .months-table {
      border-collapse: separate;
      text-align: center;
    }

    .day {
      height: 26px;
      width: 26px;
      padding: 0 10px;
      line-height: 26px;
      border: 2px solid transparent;
      text-transform: uppercase;
      font-size: 90%;
      color: #9e9e9e;
    }

    .month {
      cursor: pointer;
      height: 26px;
      width: 26px;
      padding: 0 2px;
      padding-top: 10px;
      line-height: 26px;
      text-transform: uppercase;
      font-size: 11px;
      color: #000;
      transition: all 250ms;
    }

    .active-month {
      font-weight: bold;
      font-size: 14px;
      color: #38e038;
      text-shadow: 0 1px 2px #38e038;
    }

    .month:hover {
      color: #38e038;
      text-shadow: 0 1px 2px #38e038;
    }

    /*  Dates table */
    .table-date {
      cursor: default;
      color: #2b2b2b;
      height: 26px;
      width: 26px;
      font-size: 15px;
      padding: 10px;
      line-height: 26px;
      text-align: center;
      border-radius: 50%;
      border: 2px solid transparent;
      transition: all 250ms;
    }

    .table-date:not(.nil):hover {
      border-color: #38e038;
      box-shadow: 1px 3px 8px #8BFF8A;
    }

    .event-date {
      border-color: #52A0FD;
      box-shadow: 0 2px 8px RGBA(130, 180, 255, .9);
    }

    .event-date:hover {
      border-color: #52A0FD !important;
      box-shadow: 0 2px 8px RGBA(130, 180, 255, .9) !important;
    }

    .active-date {
      background: #38e038;
      color: #fff;
      box-shadow: 1px 3px 8px #8BFF8A;
    }

    .event-date.active-date {
      background: #52A0FD;
      box-shadow: 0 2px 8px RGBA(130, 180, 255, .9);
    }

    /* input dialog */
    .dialog {
      z-index: 5;
      background: #fff;
      position: absolute;
      width: 415px;
      height: 500px;
      left: 387px;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
      display: none;
      border-left: 1px #aaa solid;
    }

    .dialog-header {
      margin: 20px;
      color: #333;
      text-align: center;
    }

    .form-container {
      margin-top: 25%;
    }

    .form-label {
      color: #333;
    }

    .input {
      border: none;
      background: none;
      border-bottom: 1px #aaa solid;
      display: block;
      margin-bottom: 50px;
      width: 200px;
      height: 20px;
      text-align: center;
      transition: border-color 250ms;
    }

    .input:focus {
      outline: none;
      border-color: #00C9FB;
    }

    .error-input {
      border-color: #FF1744;
    }

    .modal-content {
      background-color: transparent !important;
      border: none !important;
    }

    .closed-btn {
      color: white;
      font-size: 40px;
    }

    .event-image {
      width: 110px;
      object-fit: cover;
      height: 80px;
      border-radius: 3px;
    }

    /* Tablets and smaller */
    @media only screen and (max-width: 780px) {
      .content {
        overflow: visible;
        position: relative;
        max-width: 100%;
        width: 370px;
        padding: 0px;
        height: 100%;
        background: #52A0FD;
        background: -moz-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
        background: -webkit-linear-gradient(left, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
        background: linear-gradient(to right, #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
      }

      .dialog {
        width: 370px;
        height: 450px;
        border-radius: 3px;
        top: 0;
        left: 0;
      }

      .events-container {
        float: none;
        overflow: visible;
        margin: 0 auto;
        padding: 0;
        display: block;
        left: 0;
        border-radius: 3px;
      }

      .calendar-container {
        float: none;
        padding: 0;
        margin: 0 auto;
        margin-right: 0;
        display: block;
        left: 0;
        border-radius: 3px;
        box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        -moz-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        -webkit-box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      }

    }

    /* Small phone screens */
    @media only screen and (max-width: 400px) {



      .dialog {
        width: 320px;
      }

      .months-table {
        display: block;
        margin: 0 auto;
        width: 320px;
      }

      .event-card {
        width: 300px;
      }

      .day {
        padding: 0 7px;
      }

      .table-date {
        width: 20px;
        height: 20px;
        line-height: 20px;
      }

      .event-name,
      .event-count,
      .event-cancelled {
        font-size: .8rem;
      }

      .add-button {
        bottom: 10px;
        right: 10px;
        padding: 0.5rem 1.5rem;
      }

    }

    .large-btn {
      width: 40px;
      padding: 10px 24px !important;
      height: 54px;
      text-transform: uppercase !important;
      letter-spacing: 2.5px !important;
      font-weight: 500 !important;
      color: #000 !important;
      border: none !important;
      border-radius: 50% !important;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1) !important;
      transition: all 0.3s ease 0s !important;
      cursor: pointer !important;
      outline: none !important;
    }

    .large-btn:hover {
      background: #2EE59D !important;
      box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4) !important;
      color: #fff !important;
      height: 70px !important;
      transform: translateY(-0.5px) !important;
    }

    .large-btn {
      position: fixed !important;
      bottom: 83px;
      z-index: 999;
      right: 20px;
    }

    .calendar-logo {
      font-size: 27px;
      margin-left: -12px;
      color: #00C9FB !important;
    }
  </style>
</head>

<body>

  <button style="background-color: #fff !important;" type="button" class="btn large-btn btn-primary" data-toggle="modal"
    data-target=".bd-example-modal-xl"><i class="fa-solid fa-calendar-days calendar-logo"></i></button>

  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="closed-btn" aria-hidden="true">&times;</span>
        </button>
        <div class="content">
          <div class="calendar-container">
            <div class="calendar">
              <div class="year-header">
                <span class="left-button" id="prev"> &lang; </span>
                <span class="year" id="label"></span>
                <span class="right-button" id="next"> &rang; </span>
              </div>
              <table class="months-table">
                <tbody>
                  <tr class="months-row">
                    <td class="month">Jan</td>
                    <td class="month">Feb</td>
                    <td class="month">Mar</td>
                    <td class="month">Apr</td>
                    <td class="month">May</td>
                    <td class="month">Jun</td>
                    <td class="month">Jul</td>
                    <td class="month">Aug</td>
                    <td class="month">Sep</td>
                    <td class="month">Oct</td>
                    <td class="month">Nov</td>
                    <td class="month">Dec</td>
                  </tr>
                </tbody>
              </table>

              <table class="days-table">
                <td class="day">Sun</td>
                <td class="day">Mon</td>
                <td class="day">Tue</td>
                <td class="day">Wed</td>
                <td class="day">Thu</td>
                <td class="day">Fri</td>
                <td class="day">Sat</td>
              </table>
              <div class="frame">
                <table class="dates-table">
                  <tbody class="tbody">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="events-container">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== quotes End ======-->



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
  <script src="assets/js/dates.js"></script>
  <script src="assets/js/active.js"></script>

  <script>


    // Setup the calendar with the current date
    $(document).ready(function () {
      var date = new Date();
      var today = date.getDate();
      // Set click handlers for DOM elements
      $(".right-button").click({ date: date }, next_year);
      $(".left-button").click({ date: date }, prev_year);
      $(".month").click({ date: date }, month_click);
      $("#add-button").click({ date: date }, new_event);
      // Set current month as active
      $(".months-row").children().eq(date.getMonth()).addClass("active-month");
      init_calendar(date);
      var events = check_events(today, date.getMonth() + 1, date.getFullYear());
      show_events(events, months[date.getMonth()], today);
    });

    // Initialize the calendar by appending the HTML dates
    function init_calendar(date) {
      $(".tbody").empty();
      $(".events-container").empty();
      var calendar_days = $(".tbody");
      var month = date.getMonth();
      var year = date.getFullYear();
      var day_count = days_in_month(month, year);
      var row = $("<tr class='table-row'></tr>");
      var today = date.getDate();
      // Set date to 1 to find the first day of the month
      date.setDate(1);
      var first_day = date.getDay();
      // 35+firstDay is the number of date elements to be added to the dates table
      // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
      for (var i = 0; i < 35 + first_day; i++) {
        // Since some of the elements will be blank, 
        // need to calculate actual date from index
        var day = i - first_day + 1;
        // If it is a sunday, make a new row
        if (i % 7 === 0) {
          calendar_days.append(row);
          row = $("<tr class='table-row'></tr>");
        }
        // if current index isn't a day in this month, make it blank
        if (i < first_day || day > day_count) {
          var curr_date = $("<td class='table-date nil'>" + "</td>");
          row.append(curr_date);
        }
        else {
          var curr_date = $("<td class='table-date'>" + day + "</td>");
          var events = check_events(day, month + 1, year);
          if (today === day && $(".active-date").length === 0) {
            curr_date.addClass("active-date");
            show_events(events, months[month], day);
          }
          // If this date has any events, style it with .event-date
          if (events.length !== 0) {
            curr_date.addClass("event-date");
          }
          // Set onClick handler for clicking a date
          curr_date.click({ events: events, month: months[month], day: day }, date_click);
          row.append(curr_date);
        }
      }
      // Append the last row and set the current year
      calendar_days.append(row);
      $(".year").text(year);
    }

    // Get the number of days in a given month/year
    function days_in_month(month, year) {
      var monthStart = new Date(year, month, 1);
      var monthEnd = new Date(year, month + 1, 1);
      return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
    }

    // Event handler for when a date is clicked
    function date_click(event) {
      $(".events-container").show(250);
      $("#dialog").hide(250);
      $(".active-date").removeClass("active-date");
      $(this).addClass("active-date");
      show_events(event.data.events, event.data.month, event.data.day);
    };

    // Event handler for when a month is clicked
    function month_click(event) {
      $(".events-container").show(250);
      $("#dialog").hide(250);
      var date = event.data.date;
      $(".active-month").removeClass("active-month");
      $(this).addClass("active-month");
      var new_month = $(".month").index(this);
      date.setMonth(new_month);
      init_calendar(date);
    }

    // Event handler for when the year right-button is clicked
    function next_year(event) {
      $("#dialog").hide(250);
      var date = event.data.date;
      var new_year = date.getFullYear() + 1;
      $("year").html(new_year);
      date.setFullYear(new_year);
      init_calendar(date);
    }

    // Event handler for when the year left-button is clicked
    function prev_year(event) {
      $("#dialog").hide(250);
      var date = event.data.date;
      var new_year = date.getFullYear() - 1;
      $("year").html(new_year);
      date.setFullYear(new_year);
      init_calendar(date);
    }

    // Event handler for clicking the new event button
    function new_event(event) {
      // if a date isn't selected then do nothing
      if ($(".active-date").length === 0)
        return;
      // remove red error input on click
      $("input").click(function () {
        $(this).removeClass("error-input");
      })
      // empty inputs and hide events
      $("#dialog input[type=text]").val('');
      $("#dialog input[type=number]").val('');
      $(".events-container").hide(250);
      $("#dialog").show(250);
      // Event handler for cancel button
      $("#cancel-button").click(function () {
        $("#name").removeClass("error-input");
        $("#count").removeClass("error-input");
        $("#dialog").hide(250);
        $(".events-container").show(250);
      });
      // Event handler for ok button
      $("#ok-button").unbind().click({ date: event.data.date }, function () {
        var date = event.data.date;
        var name = $("#name").val().trim();
        var count = parseInt($("#count").val().trim());
        var day = parseInt($(".active-date").html());
        // Basic form validation
        if (name.length === 0) {
          $("#name").addClass("error-input");
        }
        else if (isNaN(count)) {
          $("#count").addClass("error-input");
        }
        else {
          $("#dialog").hide(250);
          console.log("new event");
          new_event_json(name, count, date, day);
          date.setDate(day);
          init_calendar(date);
        }
      });
    }

    // Adds a json event to event_data
    function new_event_json(name, count, date, day, image, link) {
      var event = {
        "occasion": name,
        "invited_count": count,
        "year": date.getFullYear(),
        "month": date.getMonth() + 1,
        "day": day,
        "image": image,
        "link": link
      };
      event_data["events"].push(event);
    }

    // Display all events of the selected date in card views
    function show_events(events, month, day) {
      // Clear the dates container
      $(".events-container").empty();
      $(".events-container").show(250);
      console.log(event_data["events"]);
      // If there are no events for this date, notify the user
      if (events.length === 0) {
        var event_card = $("<div class='event-card'></div>");
        var event_name = $("<div class='event-none'>" + month + " Trips not yet listed. Please stay tuned!" + ".</div>");
        $(event_card).css({ "border-left": "10px solid #FF1744" });
        $(event_card).append(event_name);
        $(".events-container").append(event_card);
      } else {
        // Go through and add each event as a card to the events container
        for (var i = 0; i < events.length; i++) {
          var event_card = $("<div class='event-card'></div>");
          var event_content = $("<div class='event-content'></div>");
          var event_name = $("<h2 class='event-name'>" + events[i]["occasion"] + "</h2>");
          var event_count = $("<h4 class='event-count'>" + events[i]["invited_count"] + "</h4>");
          var event_image = $("<img src='" + events[i]["image"] + "' class='event-image' />"); // Added image element
          var event_link = $("<a href=" + events[i]["link"] + "></a>");

          // Create and append the hyperlink tag before the event card

          $(event_link).append(event_card);

          $(event_card).append(event_image).append(event_content);
          $(event_content).append(event_count).append(event_name); // Appended image to the event card
          $(".events-container").append(event_link); // Append the link containing the event card
        }
      }
    }



    // Checks if a specific date has any events
    function check_events(day, month, year) {
      var events = [];
      for (var i = 0; i < event_data["events"].length; i++) {
        var event = event_data["events"][i];
        if (event["day"] === day &&
          event["month"] === month &&
          event["year"] === year) {
          events.push(event);
        }
      }
      return events;
    }

    // Given data for events in JSON format
    var event_data = {
      "events": [
  

        // jan 12
        {
          "occasion": "Wonders of Wayanad",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 1,
          "day": 12,
          "image": "assets/img/wayanad/900Kandi-1.jpg",
          "link": "https://www.roamers.in/wayanad"
        },
        {
          "occasion": " Munnar & Kolukkumalai Trek ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 1,
          "day": 12,
          "image": "assets/img/kolukkumalai-img/sunrise trek compress.jpg",
          "link": "https://www.roamers.in/kolukkumalai"
        },

        //////////

        // jan 26
        {
          "occasion": " Pondi Dive in ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 1,
          "day": 26,
          "image": "assets/img/short-trip/Lead-Auroville.webp",
          "link": "https://www.roamers.in/pondicherry"
        },
        {
          "occasion": " Kodaikanal Trek & Tour ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 1,
          "day": 26,
          "image": "assets/img/kodaikanal/Dolphin nose 2.jpg",
          "link": "https://www.roamers.in/kodaikanal"
        },
        {
          "occasion": " Ooty the Queen of Hills ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 1,
          "day": 26,
          "image": "assets/img/Ooty/Ooty photo.jpg",
          "link": "https://www.roamers.in/ooty"
        },
        //////
        
        // feb 9
        {
          "occasion": " Chikmagalur Trek ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 2,
          "day": 9,
          "image": "assets/img/testimonials/chikmagalur.avif",
          "link": "https://www.roamers.in/chikmagalur"
        },

        ////feb 16
        {
          "occasion": " Ooty the Queen of Hills ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 2,
          "day": 16,
          "image": "assets/img/Ooty/Ooty photo.jpg",
          "link": "https://www.roamers.in/ooty"
        },
        {
          "occasion": " Pondi Dive in ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 2,
          "day": 16,
          "image": "assets/img/short-trip/Lead-Auroville.webp",
          "link": "https://www.roamers.in/pondicherry"
        },

        ///feb 23
        {
          "occasion": " Munnar with Kolukkumalai Trek",
          "invited_count": "3D / 2N",
          "year": 2023,
          "month": 2,
          "day": 23,
          "image": "assets/img/kolukkumalai-img/sunrise trek compress.jpg",
          "link": "https://www.roamers.in/kolukkumalai-trek"
        },
        {
          "occasion": " Kodaikanal Trek with Poombarai ",
          "invited_count": "3D / 2N",
          "year": 2024,
          "month": 2,
          "day": 23,
          "image": "assets/img/kodaikanal/Dolphin nose 2.jpg",
          "link": "https://www.roamers.in/kodaikanal"
        }
      ]
    };

    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];


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