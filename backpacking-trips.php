<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- SEO Meta Description -->
  <meta name="description"
    content="Discover the best solo trips, weekend getaways, and group adventures in Chennai with Roamers. Explore curated travel packages designed for unforgettable experiences!" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="200" />

  <!-- Title  -->
  <title>Solo, Weekend, and Group Trips in Chennai | Roamers</title>
  <meta name="title" content="Solo, Weekend, and Group Trips in Chennai | Roamers" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.roamers.in/trips" />

  <!-- Open Graph Title & Description-->
  <meta property="og:title" content="Trips from Chennai | Solo, Weekend, and Group Travel with Roamers" />
  <meta property="og:description"
    content="Plan your next adventure with Roamers! From solo trips to group getaways and weekend escapes in Chennai, we’ve got you covered. Start exploring today!" />

  <!-- Favicon  -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

  <!--  Font Asesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/form.css" />

  <!-- Responsive css -->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

  <style>
    /* Mobile view — stack vertically */
    @media (max-width: 768px) {
      .nav-pills {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }

      .nav-pills li {
        list-style: none;
        width: 80%;
        /* control button width */
      }

      .nav-pills li a {
        display: block;
        width: 100%;
        text-align: center;
        padding: 12px 0;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        font-size: 14px !important;
        /* increased font size */
      }

      /* active pill */
      .nav-pills li a.active {
        background-color: #4ec0db;
        color: #fff;
      }

      /* hover effect */
      /* .nav-pills li a:hover {
        transform: translateY(-2px);
      } */
    }

    @media (max-width: 600px) {
      #event-slider-august {
        display: flex !important;
        flex-direction: column !important;
        gap: 62px;
      }

      #event-slider-august .event-card {
        min-width: 0 !important;
        width: 100% !important;
        margin: 0 !important;
      }
    }

    .trips-page-images {
      height: 343px !important;
      width: 100% !important;
      object-fit: cover !important;
    }

    .form-home {
      background: url(assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      padding: 200px 0px 150px;
      background-attachment: fixed;
    }

    .form-home::after {
      content: '';
      position: absolute;
      background: url(assets/img/overlay/shape8.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      bottom: -3px;
      width: 100%;
      height: 218px;
      transform: rotate(180deg);
      z-index: 3;
    }

    .form-home::before {
      content: '';
      position: absolute;
      background-color: rgba(0, 0, 0, 0.5);
      inset: 0;
    }

    .booking-head {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      color: #fff;
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

    .section-shape {
      position: absolute;
      top: -96px;
      left: 0;
      width: 100%;
      height: 96px;
      background-size: contain;
      background-repeat: repeat-x;
      z-index: 1;
    }

    .banner-nav {
      display: flex;
      gap: 20px;
      justify-content: center;
      padding: 0;
    }

    .banner-nav li {
      position: relative;
    }

    .banner-nav li>a {
      color: #4ec0db;
    }

    .banner-nav li:last-child {
      color: #fff;
    }



    .banner-nav li:first-child::before {
      background-color: #fff;
      position: absolute;
      content: '';
      width: 2px;
      height: 59%;
      margin-top: 4px;
      right: -13px;
    }

    .form-img img {
      height: 770px;
      object-fit: cover;
      border-radius: 12px;
    }

    .check-box {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-right: 20px;
    }

    .check-box input {
      margin: 0 !important;
    }

    .form-heading {
      margin-bottom: 40px;
    }

    .check-box input[type="radio"]:checked {
      background: #4ec0db;
      color: white;
    }

    .trip-page h1 {
      text-align: center;
      color: #fff;
      position: absolute;
      text-transform: capitalize;
      font-weight: 800;
      line-height: 1.1 !important;
      font-size: 46px;
      margin: 40px 0px 60px 504px;
    }

    .check-box input[type="radio"] {
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: 0;
      background: lightgray;
      height: 16px;
      width: 16px;
      border: 1px solid white;
      color: white;
    }

    .trip-page {
      background-image: url('assets/img/bg/Trips-page cover.jpg') !important;
      background-repeat: no-repeat;
      background-position: bottom !important;
      object-fit: cover !important;
      background-size: cover;
      background-attachment: local !important;
      padding: 225px 0 278px 0;
      margin-top: -30px !important;
      position: relative;
    }

    .check-box input[type="radio"]:after {
      content: ' ';
      position: relative;
      left: 40%;
      top: 30%;
      width: 15%;
      height: 40%;
      border: solid #fff;
      border-width: 0 2px 2px 0;
      transform: rotate(50deg);
      display: none;
    }

    .check-box input[type="radio"]:checked:after {
      display: block;
    }

    @media (max-width:600px) {
      .nav-pills a {
        font-size: 8px !important;
        padding: 8px !important;
      }

      .nav-pills {
        padding: 10px !important;
      }

      .swiper-slide {
        margin-bottom: 40px !important;
      }

      .upper-nav {
        margin-bottom: 3rem !important;
      }

      .silder-inner h4 {
        font-size: 9px !important;
      }

      .trip-page {
        margin-top: 0;
        padding: 99px 21px 193px 65px !important;
        background-attachment: local !important;
      }

      .trip-page h1 {
        margin: 77px 0px 25px !important;
        text-shadow: 0px 2px 2px rgba(255, 255, 255, 0.4) !important;
        font-size: 30px !important;
      }
    }

    /* Style for the pills */
    .nav-pills {
      display: flex;
      list-style: none;
      padding: 0 100px 0 100px;
    }

    .nav-pills li {
      flex: 1;
      text-align: center;
    }


    .nav-pills a {
      text-decoration: none;
      padding: 10px;
      background-color: #4ec0db1f;
      color: black;
      display: block;
      border: 1px solid #eee;
    }

    .trip-1 {
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
    }

    .trip-3 {
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    .bg-smoke {
      background-color: #fff !important;
    }

    /* .nav-pills a:hover {
      background-color: #094067;
      color: white;
    } */

    .nav-pills a.active {
      background-color: #4ec0db;
      color: white;
    }


    /* Style for the content sections */
    .section {
      display: none;
    }

    .section.active {
      display: block;
    }

    .testi-box {
      box-shadow: 0px 10px 15px 0px rgb(220 177 0 / 30%);
    }

    /* dates update */
    .kodai-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .kodai1-dates {
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


    .munnar-dates {
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

    .ladakh-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    /*  */


    * {
      box-sizing: border-box;
    }

    html,
    body {
      overflow-x: hidden;
      max-width: 100%;
      margin: 0;
    }

    .upcoming-container {
      position: relative;
      max-width: 1500px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .upcoming-tabs {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }

    @media (max-width: 600px) {
      .upcoming-tabs {
        gap: 6px;
        margin-bottom: 18px;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding: 0 10px;
        justify-content: flex-start;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
      }

      .upcoming-tabs::-webkit-scrollbar {
        display: none;
      }
    }

    .upcoming-tab-btn {
      background: #fff;
      color: #4CB9D3;
      border: 2px solid #4CB9D3;
      border-radius: 20px;
      padding: 8px 24px;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.2s, color 0.2s;
      margin-bottom: 8px;
    }

    @media (max-width: 600px) {
      .upcoming-tab-btn {
        padding: 5px 20px;
        font-size: 12px;
        border-radius: 14px;
        margin-bottom: 4px;
      }
    }

    /* .upcoming-tab-btn.active,
    .upcoming-tab-btn:hover {
      background: #4CB9D3;
      color: #fff;
    } */

    .upcoming-tab-content {
      display: none;
      margin-bottom: 80px;
      opacity: 0;
      transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-tab-content.active {
      display: block;
      opacity: 1;
      transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-card {
      flex: 0 0 auto;
      width: 350px;
      min-width: 367px;
      max-width: 378px;
      height: 350px;
      position: relative;
      border: 2px solid;
      border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
      border-radius: 30px;
      background: transparent;
      scroll-snap-align: start;
      margin: 0 10px;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover {


    .upcoming-image {
      width: 100%;
      height: 450px;
      border-radius: 24px;
      overflow: hidden;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 24px;
      padding: 2px;
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover .upcoming-image img {
  transform: scale(1.04);
  } */

    @media (max-width: 600px) {
      .upcoming-image {
        height: 500px !important;
        max-height: 70vw;
      }
    }

    @media (max-width: 400px) {
      .upcoming-image {
        height: 320px !important;
        max-height: 80vw;
      }
    }

    .upcoming-content {
      background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
      padding: 1px 1px 1px 1px;
      margin: 1px 1px 25px 1px;
      color: white;
      position: relative;
      z-index: 1;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      border-radius: 24px;
      height: 100%;
      display: flex;
      flex-direction: column;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @media (max-width: 600px) {
      .upcoming-content {
        padding: 0px;
      }
    }

    @media (max-width: 400px) {
      .upcoming-content {
        padding: 0px;
      }
    }

    .upcoming-card-flex {
      display: flex;
      justify-content: space-between;
      margin: 5px 15px 3px 10px;
      flex-wrap: wrap;
    }

    .upcoming-duration {
      display: flex;
      align-items: center;
      background-color: #FFFFFF;
      color: #292929;
      padding: 2px 6px;
      border-radius: 30px;
      font-size: 10px;
      font-weight: bold;
    }

    .upcoming-duration .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
      color: #7dd3e7;
    }

    .upcoming-duration .icon img {
      width: 12px !important;
    }

    .upcoming-from {
      display: flex;
      align-items: center;
      background-color: #4CB9D3;
      border-radius: 30px;
      padding: 3px 7px;
      font-size: 11px;
      color: #FFFFFF;
    }

    .upcoming-from .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .upcoming-from .icon img {
      width: 6px !important;
    }

    .upcoming-title {
      font-size: 17px;
      text-transform: uppercase;
      color: white;
      text-align: start;
      margin: 5px 0px 0px 12px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      text-overflow: ellipsis;
      white-space: nowrap;
      transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover .upcoming-title {
  color: #32EEE7;
  } */

    .upcoming-locations {
      font-size: 12px;
      color: white;
      margin: 1px 12px;
      text-overflow: ellipsis;
      white-space: nowrap;
      transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover .upcoming-locations {
  color: #b2f7f7;
  } */

    .upcoming-price-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0px 35px 17px 12px;
      flex-grow: 1;
    }

    .upcoming-dates {
      display: flex;
      align-items: center;
      background-color: #fff;
      color: #333;
      padding: 5px 8px;
      border-radius: 19px;
      font-size: 8px;
      box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      transition: background 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover .upcoming-dates {
  background: #4CB9D3;
  color: #fff;
  } */

    .upcoming-dates .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .upcoming-dates .icon img {
      width: 16px !important;
    }

    .upcoming-starts {
      font-size: 12px;
      font-weight: 800;
    }

    .upcoming-price {
      font-weight: bold;
      text-align: right;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* .upcoming-card:hover .upcoming-price {
  color: #32EEE7;
  } */

    .upcoming-view {
      position: absolute;
      bottom: -20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #fff;
      color: #333;
      border-radius: 18px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 5px 5px 44px 0px #3CADC9B2;
      font-size: 15px;
      z-index: 10;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      padding: 8px 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* .upcoming-view:hover,
    .upcoming-view:focus {
      background: #4CB9D3;
      color: #fff;
      box-shadow: 0 8px 32px 0 rgba(76, 185, 211, 0.18), 0 1.5px 8px 0 rgba(50, 238, 231, 0.10);
      transform: scale(1.05) translateX(-50%);
    } */

    .upcoming-header {
      margin: 0px 0px 30px 0px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }

    .upcoming-header-icon {
      color: #4CB9D3;
      font-size: 30px;
    }

    .upcoming-slider-wrapper {
      position: relative;
      width: 100%;
      padding: 0 40px;
      overflow: visible;
      contain: content;
    }

    .upcoming-slider {
      display: flex;
      gap: 20px;
      padding: 0px 0px 30px 0px;
      overflow-x: auto;
      overflow-y: visible;
      scroll-snap-type: x mandatory;
      scroll-padding: 15px;
      scrollbar-width: none;
      -ms-overflow-style: none;
      -webkit-overflow-scrolling: touch;
      will-change: scroll-position;
      scroll-behavior: smooth;
      transition: gap 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-slider::-webkit-scrollbar {
      display: none;
    }

    .upcoming-slider-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: #fff;
      border: none;
      color: #4CB9D3;
      font-size: 1.5rem;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s, box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-slider-arrow.left {
      left: 0;
    }

    .upcoming-slider-arrow.right {
      right: 0;
    }

    .upcoming-slider-arrow:disabled {
      opacity: 0.4;
      cursor: not-allowed;
    }
/* 
    .upcoming-slider-arrow:hover:not(:disabled) {
      background: #4CB9D3;
      color: #fff;
      box-shadow: 0 4px 16px 0 rgba(76, 185, 211, 0.18);
    } */

    @media (max-width: 900px) {
      .upcoming-container {
        padding: 0 10px;
      }

      .upcoming-card {
        width: 320px;
        min-width: 320px;
        max-width: 320px;
        height: 330px;
      }

      .upcoming-image {
        height: 180px;
      }

      .upcoming-title {
        font-size: 16px;
      }

      .upcoming-locations {
        font-size: 11px;
      }

      .upcoming-price-section {
        flex-direction: row;
        gap: 10px;
      }

      .upcoming-slider-wrapper {
        padding: 0 32px;
      }

      .upcoming-view {
        bottom: -18px;
      }
    }

    @media (max-width: 600px) {
      .upcoming-container {
        padding: 0 5px;
      }

      .upcoming-tab-content {
        margin-bottom: 80px;
      }

      .upcoming-slider-wrapper {
        padding: 0;
      }

      .upcoming-slider {
        -webkit-overflow-scrolling: touch;
      }

      .upcoming-card {
        width: 350px;
        min-width: 350px;
        max-width: 350px;
        height: 325px !important;
        margin: 0;
        scroll-snap-align: center;
      }

      .upcoming-title {
        font-size: 14px;
      }

      .upcoming-locations {
        font-size: 10px;
      }

      .upcoming-price-section {
        margin: 0px 18px 10px 12px;
        gap: 8px;
        padding: auto;
      }

      .upcoming-dates {
        font-size: 7px;
        padding: 4px 6px;
        max-width: 60%;
      }

      .upcoming-starts {
        font-size: 10px;
      }

      .upcoming-price {
        font-size: 16px;
      }

      .upcoming-view {
        width: 110px;
        height: 36px;
        font-size: 13px;
        padding: 6px 12px;
        bottom: -18px;
      }

      .upcoming-header {
        font-size: 1.1rem;
        margin: 25px 0 35px;
      }

      .upcoming-header-icon {
        font-size: 22px;
      }

      .upcoming-slider-arrow {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
      }

      .upcoming-slider-arrow.left {
        left: 5px;
      }

      .upcoming-slider-arrow.right {
        right: 5px;
      }
    }

    @media (max-width: 400px) {
      .upcoming-slider {}

      .upcoming-card {
        width: calc(92vw - 16px);
        min-width: calc(92vw - 16px);
        max-width: calc(92vw - 16px);
        height: 280px;
      }

      .upcoming-title {
        font-size: 13px;
        margin: 0px 12px 0px 12px;
      }

      .upcoming-locations {
        font-size: 9px;
        margin: 0px 12px 0px 12px;
      }

      .upcoming-dates {
        font-size: 6px;
        padding: 3px 5px;
        max-width: 65%;
      }

      .upcoming-starts {
        font-size: 9px;
      }

      .upcoming-price {
        font-size: 14px;
      }

      .upcoming-view {
        width: 100px;
        height: 32px;
        font-size: 12px;
        padding: 5px 10px;
        bottom: -16px;
      }

      .upcoming-slider-wrapper {
        padding: 0;
      }
    }




    * {}

    html,


    .event-card {
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      /* Smoother easing curve (ease-out-back like) */
      will-change: transform, box-shadow;
      /* Prepares for smooth GPU rendering */
      backface-visibility: hidden;
      /* Prevents flickering on some browsers */
    }



    /* Optional: Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
      .event-card {
        transition: none;
      }

      /* .event-card:hover {
        transform: none;
        box-shadow: none;
      } */
    }

    .event-container {
      position: relative;
      max-width: 1500px;
      margin: 0 auto;
      padding: 0 15px;
      overflow: visible !important;
    }

    .event-card {
      flex: 0 0 auto;
      width: 350px;
      min-width: 300px;
      max-width: 378px;
      height: 350px;
      position: relative;
      border: 2px solid;
      border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
      border-radius: 30px;
      background: transparent;
      scroll-snap-align: start;
      margin: 0 10px;
      overflow: visible !important;
    }

    .event-image {
      width: 100%;
      height: 450px;
      border-radius: 24px;
      overflow: visible !important;
    }

    .event-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 24px;
      padding: 2px;
    }

    @media (max-width: 600px) {
      .event-image {
        height: 500px !important;
        max-height: 100vw;
      }
    }

    @media (max-width: 400px) {
      .event-image {
        height: 320px !important;
        max-height: 100vw;
      }
    }

    .event-content {
      background: white;
      padding: 1px 1px 1px 1px;
      margin: 1px 1px 25px 1px;
      color: white;
      position: relative;
      z-index: 1;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      border-radius: 24px;
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: visible;
    }

    @media (max-width: 600px) {
      .event-content {
        padding: 0px;
      }
    }

    @media (max-width: 400px) {
      .event-content {
        padding: 0px;
      }
    }

    .event-card-flex {
      display: flex;
      justify-content: space-between;
      /* margin: 5px 15px 3px 10px; */
      flex-wrap: wrap;
    }

    .event-duration {
      display: flex;
      align-items: center;
      background-color: #FFFFFF;
      color: #292929;
      padding: 2px 6px;
      border-radius: 30px;
      font-size: 10px;
      font-weight: bold;
    }

    .event-duration .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
      color: #7dd3e7;
    }

    .event-duration .icon img {
      width: 12px !important;
    }

    .event-from {
      display: flex;
      align-items: center;
      background-color: #4CB9D3;
      border-radius: 30px;
      padding: 3px 7px;
      font-size: 11px;
      color: #FFFFFF;
    }

    .event-from .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .event-from .icon img {
      width: 6px !important;
    }

    .event-title {
      font-size: 15px;
      text-transform: uppercase;
      color: white;
      text-align: start;
      margin: 5px 0px 0px 12px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }

    .event-locations {
      font-size: 12px;
      color: black;
      margin: 1px 12px;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }

    .event-price-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0px 35px 07px 12px;
      flex-grow: 1;
      color: black;
    }

    .event-dates {
      display: flex;
      align-items: center;
      /* background-color: #fff; */
      color: white;
      padding: 5px 8px;
      border: 1px solid white;
      border-radius: 19px;
      font-size: 8px;
      box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .event-dates .icon {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .event-dates .icon img {
      width: 16px !important;
    }

    .event-starts {
      font-size: 12px;
      font-weight: 800;
    }

    .event-price {
      font-weight: bold;
      text-align: right;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .event-view {
      position: absolute;
      bottom: -20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #fff;
      color: #333;
      border-radius: 18px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 5px 5px 44px 0px #3CADC9B2;
      font-size: 15px;
      z-index: 10;
      transition: all 0.3s ease;
      padding: 8px 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .event-slider-wrapper {
      position: relative;
      width: 100%;
      /* padding: 0 40px; */
      overflow: visible;
      contain: content;
    }

    .event-slider {
      display: flex;
      justify-content: space-evenly;
      gap: 20px;
      padding: 20px 0px 30px 0px;
      overflow-x: hidden;
      overflow-y: visible;
      scroll-snap-type: x mandatory;
      scroll-padding: 15px;
      scrollbar-width: none;
      -ms-overflow-style: none;
      -webkit-overflow-scrolling: touch;
      will-change: scroll-position;
      flex-wrap: nowrap;
    }

    .event-slider::-webkit-scrollbar {
      display: none;
    }

    /* Drag cursor feedback */
    .event-slider {
      cursor: grab;
    }

    .event-slider.dragging {
      cursor: grabbing;
    }

    .event-slider-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: #fff;
      border: none;
      color: #4CB9D3;
      font-size: 1.5rem;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }

    .event-slider-arrow.left {
      left: 0;
    }

    .event-slider-arrow.right {
      right: 0;
    }

    .event-slider-arrow:disabled {
      /* opacity: 0.4; */
      /* cursor: not-allowed; */
      z-index: 999;
    }

    @media (max-width: 900px) {
      .event-container {
        padding: 0 10px;
      }

      .event-card {
        width: 320px;
        min-width: 320px;
        max-width: 320px;
        height: 330px;
      }

      .event-image {
        height: 180px;
      }

      .event-title {
        font-size: 16px;
      }

      .event-locations {
        font-size: 11px;
      }

      .event-price-section {
        flex-direction: row;
        gap: 10px;
      }

      .event-slider-wrapper {
        padding: 0 32px;
      }

      .event-view {
        bottom: -18px;
      }
    }

    @media (max-width: 600px) {
      .event-container {
        padding: 0 5px;
      }

      .event-slider-wrapper {
        padding: 0;
      }

      .event-slider {
        -webkit-overflow-scrolling: touch;
      }

      .event-card {
        width: 350px;
        min-width: 350px;
        max-width: 350px;
        height: 325px !important;
        margin: 0;
        scroll-snap-align: center;
      }

      .event-title {
        font-size: 14px;
      }

      .event-locations {
        font-size: 10px;
      }

      .event-price-section {
        margin: 0px 18px 10px 12px;
        gap: 8px;
        padding: auto;
      }

      .event-dates {
        font-size: 7px;
        padding: 4px 6px;
        max-width: 60%;
      }

      .event-starts {
        font-size: 10px;
      }

      .event-price {
        font-size: 16px;
      }

      .event-view {
        width: 110px;
        height: 36px;
        font-size: 9px !important;
        padding: 6px 12px;
        bottom: -37px;
      }

      .event-slider-arrow {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
      }

      .event-slider-arrow.left {
        left: 5px;
      }

      .event-slider-arrow.right {
        right: 5px;
      }
    }

    @media (max-width: 400px) {
      .event-card {
        width: calc(92vw - 16px);
        min-width: calc(92vw - 16px);
        max-width: calc(92vw - 16px);
        height: 280px;
      }

      .event-title {
        font-size: 13px;
        margin: 0px 12px 0px 12px;
      }

      .event-locations {
        font-size: 9px;
        margin: 0px 12px 0px 12px;
      }

      .event-dates {
        font-size: 6px;
        padding: 3px 5px;
        max-width: 65%;
      }

      .event-starts {
        font-size: 9px;
      }

      .event-price {
        font-size: 14px;
      }

      .event-view {
        width: 100px;
        height: 32px;
        font-size: 12px;
        padding: 5px 10px;
        bottom: -16px;
      }

      .event-slider-wrapper {
        padding: 0;
      }
    }

    .trips-page-images,
    .swiper-slide img,
    .silder-inner img,
    .inner img {
      border-radius: 16px !important;
    }
  </style>
</head>

<header>
  <?php include('includes/header.php'); ?>
</header>

<main>
  <section class="trip-page" style="background-image: url('assets/img/bg/trips-cover.jpg');">
    <div class="container" style="  position: relative;">
      <h1>ROAMERS TRIPS</h1>
    </div>
  </section>

  <div class=container>

    <ul class="nav-pills upper-nav mt-5 ">
      <li><a class=" trip-1 rounded-pill me-3 shadow" href="#section1">ALL</a></li>
      <li><a class="trip-2 active rounded-pill me-3 shadow" href="#section2">Backpacking Trips</a></li>
      <li><a class="trip-3 rounded-pill me-3 shadow" href="#section3 ">Short Break Trips</a></li>
      <li><a class="trip-4 rounded-pill me-3 shadow" href="#section4">Events</a></li>
    </ul>

    <!-- Trips -->
    <div id="section1" class="section active  mb-5">
      <div class="container">
        <div class="row">

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kolukkumalai-img/2.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai
                    </h4>
                  </div>
                  <h2>Munnar with Kolukkumalai
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="munnar-dates">Jan
                        12, Feb 16 </span>
                    </h4>
                    <h4><span class="munnar-price">₹7,990</span> </h4>
                  </div>
                </div>

              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="wayanad">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/bg/waya-cover.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Wonders of Wayanad
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Wayanad</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="wayanad-dates"> Jan 12 </span>
                    </h4>
                    <h4><span class="kolukku-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="ooty">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/bg/ooty-cove.jpeg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon"> EX :Chennai,
                      Coimbatore
                    </h4>
                  </div>
                  <h2>Ooty the Queen of Hills
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Nilgiri,
                      Coonoor, Coimbatore
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="ooty-dates">Nov 3, 24, Dec 8, 15, 22, Jan 26 </span>
                    </h4>
                    <h4><span class="ooty-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/testimonials/chikmagalur.avif"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Bangalore
                    </h4>
                  </div>
                  <h2>Chikmagalur Trek
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Chikmagalur,
                      Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="chik-dates"> Dec
                        15 </span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="andaman">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Port Blair
                    </h4>
                  </div>
                  <h2>Andaman Island Hopping
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Havelock
                      Island, Neil Island, Port
                      Blair
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="andaman-dates"> Dec 23 </span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="ladakh-umlingla.php">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/ladakh/ladakh-mail.jpeg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>8 DAYS / 7 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Leh
                    </h4>
                  </div>
                  <h2>Leh Ladakh with Umling la
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon"> Leh, Nubra,
                      Pangong, Hanle, Umling la</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      (Open Soon)
                    </h4>
                    <h4><span class="ladakh-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2D / 1N</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon"> EX : Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Pondicherry
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="pondi-dates">Nov
                        24, Dec 09, 23 </span>
                    </h4>
                    <h4><span class="pondi-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <!-- <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="#home-form">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/Kerala/goa-cover.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;" alt="second location-icon">EX : Direct, Bangalore
                    </h4>
                  </div>
                  <h2>Goa Escape
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">North Goa, South Goa </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;" alt="second location-icon">
                      <span class="goa-dates">Opens Soon</span>
                    </h4>
                    <h4><span class="goa-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div> -->

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="meghalaya">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/meghalaya/meghalaya-gallery-16.avif "
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>6 DAYS / 5 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg " class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Guwahati
                    </h4>
                  </div>
                  <h2>Mejestic Meghalaya</h2>
                  <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Guwahati,
                    Shillong, Cherrapunjee</p>
                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      Opens Soon</h4>
                    <h4>Starts at <span class="meghalaya-price">₹19,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kodaikanal">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kodaikanal/Kodai.jpg"" alt="
                  roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai
                    </h4>
                  </div>
                  <h2>Kodaikanal Trek with Poombarai
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Perumal
                      peak, Vattakanal, Poombarai
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="kodai-dates">Jan
                        26, Feb 10 </span>
                    </h4>
                    <h4><span class="kodai-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kedarkantha">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kedarkantha/main-sub.avif "
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>5 DAYS / 4 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon"> EX: Dehradun
                    </h4>
                  </div>
                  <h2>Kedarkantha Trek
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Kedarkantha
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="kedar-dates">Open Soon</span>
                    </h4>
                    <h4><span class="kedar-price">₹8,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kodaikanal1">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kodaikanal/perumal-peak.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai
                    </h4>
                  </div>
                  <h2>Kodaikanal Backpacking</h2>
                  <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Kodaikanal,
                    Vattakanal, Poombarai
                  </p>
                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="kodai1-dates"></span>
                    </h4>
                    <h4><span class="kodai1-price">₹8,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="varkala-grouptrip">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/valley-of-flowers/avif/img-4.avif" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai,
                      Trivandrum
                    </h4>
                  </div>
                  <h2>Varkala & Munroe Flashpacking
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Varkala,
                      Munroe Island, Trivandrum</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="varkala-dates">Jan
                        12, Feb 16 </span>
                    </h4>
                    <h4><span class="varkala-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-5 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="spiti-valley">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/spiti-valley/spiti-cover.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg " class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Delhi
                    </h4>
                  </div>
                  <h2>Spiti Winter Expedition</h2>
                  <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Spiti Valley
                  </p>
                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="spiti-dates"> Dec 23 </span>
                    </h4>
                    <h4><span class="spiti-price">₹21,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <!-- <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kerala">
                <img src="assets/img/Kerala/Kerala photos.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>5 DAYS / 4 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX : Kochi,
                      Chennai
                    </h4>
                  </div>
                  <h2>Kerala: To God’s Own Country

                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Vagamon, Varkala, Alleppey</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                      <span class="kerala-dates"> Nov
                        25, Dec 23 </span>
                    </h4>
                    <h4><span class="kerala-price">₹14,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Backpacking Trips -->
    <div id="section2" class="section mb-5">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-lg-2">

          </div>
          <!-- <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kerala">
                <img src="assets/img/Kerala/Kerala photos.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>5 DAYS / 4 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX : Kochi,
                      Chennai
                    </h4>
                  </div>
                  <h2>Kerala: To God’s Own Country

                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Vagamon, Varkala, Alleppey</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                      <span class="kerala-dates"> Nov
                        25, Dec 23 </span>
                    </h4>
                    <h4><span class="kerala-price">₹14,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div> -->
          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="andaman">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Port Blair
                    </h4>
                  </div>
                  <h2>Andaman Island Hopping
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Havelock
                      Island, Neil Island, Port
                      Blair
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="andaman-dates"> Dec 23 </span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="#home-form">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/meghalaya/meghalaya-gallery-16.avif "
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>6 DAYS / 5 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Guwahati
                    </h4>
                  </div>
                  <h2>Mejestic Meghalaya
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Guwahati,
                      Shillong, Cherrapunjee</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="ladakh-dates"></span>
                    </h4>
                    <h4><span class="meghalaya-price">₹19,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- row2 -->
      <div style="margin-bottom: 3rem;" class="container mt-5">
        <div class="row">
          <div class="col-12 col-lg-2">

          </div>

          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="ladakh-umlingla.php">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/ladakh/ladakh-mail.jpeg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>8 DAYS / 7 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Leh
                    </h4>
                  </div>
                  <h2>Leh Ladakh with Umling la
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon"> Leh, Nubra,
                      Pangong, Hanle, Umling la</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="ladakh-dates"></span>
                    </h4>
                    <h4><span class="ladakh-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="varkala-grouptrip">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/valley-of-flowers/avif/img-4.avif" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai,
                      Trivandrum
                    </h4>
                  </div>
                  <h2>Varkala & Munroe Flashpacking
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Varkala,
                      Munroe Island, Trivandrum</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="varkala-dates">Jan
                        12, Feb 16 </span>
                    </h4>
                    <h4><span class="varkala-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>


        </div>
      </div>


      <!-- row3 -->

      <div style="margin-bottom: 3rem;" class="container">
        <div class="row">
          <div class="col-12 col-lg-2">

          </div>




        </div>
      </div>

      <!-- row4 -->

      <div style="margin-bottom: 6rem;" class="container">
        <div class="row">
          <div class="col-12 col-lg-2">

          </div>
          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="spiti-valley">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/spiti-valley/spiti-cover.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg " class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Delhi
                    </h4>
                  </div>
                  <h2>Spiti Winter Expedition</h2>
                  <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Spiti Valley
                  </p>
                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="spiti-dates"> Dec 23 </span>
                    </h4>
                    <h4><span class="spiti-price">₹21,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Short Break Trips -->
    <div id="section3" class="section  mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="swiper-slide">
              <a href="ooty">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/bg/ooty-cove.jpeg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon"> EX :Chennai,
                      Coimbatore
                    </h4>
                  </div>
                  <h2>Ooty the Queen of Hills
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Nilgiri,
                      Coonoor, Coimbatore
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="ooty-dates">Nov 3, 24, Dec 8, 15, 22, Jan 26 </span>
                    </h4>
                    <h4><span class="ooty-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img class="trips-page-images" style="border-radius:16px;"
                  src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon"> EX : Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Pondicherry
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="pondi-dates">Nov
                        24, Dec 09, 23 </span>
                    </h4>
                    <h4><span class="pondi-price">₹6,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mt-5">
            <div class="swiper-slide">
              <a href="#home-form">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/Kerala/goa-cover.jpeg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Direct, Bangalore
                    </h4>
                  </div>
                  <h2>Goa Escape
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">North Goa,
                      South Goa </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="goa-dates">Opens Soon</span>
                    </h4>
                    <h4><span class="goa-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- row 2 -->
      <div style="margin-bottom: 6rem;" class="container mt-5">
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/munnar/Cover.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX :Direct, Chennai
                    </h4>
                  </div>
                  <h2>Munnar with Kolukkumalai
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;"
                        alt="location-icon">Kolukkumalai, Munnar </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="munnar-dates">Jan
                        12, Feb 16 </span>
                    </h4>
                    <h4><span class="munnar-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-4">
            <div class="swiper-slide">
              <a href="wayanad">
                <!-- <img class="new-year" src="assets/img/bg/Pongal-gif.gif" alt=""> -->
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/bg/waya-cover.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Wonders of Wayanad
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Wayanad</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="wayanad-dates"> Jan 12 </span>
                    </h4>
                    <h4><span class="kolukku-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-6">
            <div class="swiper-slide">
              <a href="kodaikanal">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kodaikanal/perumal-peak.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX: Chennai
                    </h4>
                  </div>
                  <h2>Kodaikanal Trek with Poombarai
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Perumal
                      peak, Vattakanal, Poombarai
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="kodai-dates">Jan
                        26, Feb 10 </span>
                    </h4>
                    <h4><span class="kodai-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-6 mt-5">
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/kolukkumalai-img/2.jpg"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX:Direct, Chennai
                    </h4>
                  </div>
                  <h2>Munnar with Kolukkumalai
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="munnar-dates">Jan
                        12, Feb 16 </span>
                    </h4>
                    <h4><span class="munnar-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-6 mt-5">
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img class="trips-page-images" style="border-radius:16px;" src="assets/img/testimonials/chikmagalur.avif"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" style="border-radius:16px;"
                        alt="second location-icon">EX : Bangalore
                    </h4>
                  </div>
                  <h2>Chikmagalur Trek
                  </h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" style="border-radius:16px;" alt="location-icon">Chikmagalur,
                      Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>

                  <div class="inner">
                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" style="border-radius:16px;"
                        alt="second location-icon">
                      <span class="chik-dates"> Dec
                        15 </span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- Events -->
    <div id="section4" class="section  mb-5">
      <div class="container">
        <div class="row">
          <div class="event-container">
            <div class="event-slider-wrapper" id="event-slider-wrapper">
              <style>
                /* Responsive slot badge for event cards */
                .event-slot-badge {
                  position: absolute;
                  top: 15px;
                  right: 18px;
                  z-index: 3;
                  background-color: #fff;
                  border: none;
                  border-radius: 20px;
                  padding: 4px 8px;
                  display: flex;
                  align-items: center;
                  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
                  min-width: 70px;
                }

                .event-slot-badge .event-dates-text {
                  font-weight: 700;
                  font-size: 10px;
                  color: #4ec0db;
                  display: flex;
                  align-items: center;
                }

                @media (max-width: 768px) {
                  .event-slot-badge {
                    top: 10px;
                    right: 10px;
                    padding: 3px 7px;
                    min-width: 60px;
                  }

                  .event-slot-badge .event-dates-text {
                    font-size: 9px;
                  }
                }

                @media (max-width: 480px) {
                  .event-slot-badge {
                    top: unset;
                    bottom: 287px;
                    right: 18px;
                    left: unset;
                    padding: 2px 6px;
                    min-width: 54px;
                  }

                  .event-slot-badge .event-dates-text {
                    font-size: 8px;
                  }
                }
              </style>
              <div class="event-slider" id="event-slider-august">
                <!-- Event Card 1 -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-11.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 12
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        DINE WITH Strangers <p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">Share a meal,
                          swap stories, make new friends</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i>11th Oct <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Anna Nagar, Chennai
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="event-view">Closed</a>
                  </div>
                </div>
                <!-- Event Card 2 -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-12.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 15
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        Pottery WORK SHOP <p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">Shape, mold,
                          Heal, create, laugh together</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i>25th Oct
                            <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Anna Nagar, Chennai
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="event-view">Register</a>
                  </div>
                </div>
                <!-- Event Card 3  -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-15.avif" alt="Pottery WORK SHOP">
                    </div>
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 30
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        Strangers Fun meetup <p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">
                          Games, icebreakers, laughs, future buddies</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i> 1st Nov
                            <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Chennai
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#"  class="event-view">Register</a>
                  </div>
                </div>
              </div>

              <div class="event-slider mt-5" id="event-slider-august">
                <!-- Event Card 4 -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-13.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 15
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        Mystery Movie Night<p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">
                          Watch a surprise film, popcorn, laughs, discussions</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i> 14th Nov
                            <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Coimbatore
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="event-view">Comming Soon !</a>
                  </div>
                </div>
                <!-- Event Card 5 -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-14.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 16
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        Coffee & Conversations<p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">Sip, chat,
                          share stories, meet like-minded people</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i>21st Nov
                            <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Bangalore
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="event-view">Comming Soon !</a>
                  </div>
                </div>
                <!-- Event Card 3  -->
                <div class="event-card">
                  <div class="event-content" style="position: relative;">
                    <div class="event-image">
                      <img src="assets/img/event/cards/event-card-15.avif" alt="Pottery WORK SHOP">
                    </div>
                    <div class="event-slot-badge">
                      <span class="event-dates-text">
                        <i class="fa-solid fa-users me-1" style="color: #4ec0db; margin-right: 4px;"></i>
                        Slot: 30
                      </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 229px; ">
                      <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                      <h1 class="event-title event-title-responsive-on-event"
                        style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 5px;">
                        Strangers Fun meetup <p
                          style="font-size: 10px; font-weight: bold; margin-bottom: 0px; color: #FFFFFF;">
                          Games, icebreakers, laughs, future buddies</p>
                      </h1>
                      <div class="event-price-section " style=" margin: 0;  padding: 0px 20px 10px 20px;">
                        <div class="event-dates">
                          <span class="event-dates-text" style="font-weight:700"><i class="fa-solid fa-calendar me-1"
                              style="color: #4ec0db;"></i> 1st Nov
                            <?php echo $current_year; ?></span>
                        </div>
                        <div class="event-dates">
                          <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                          <span class="event-dates-text" style="font-weight:700">Chennai
                          </span>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="event-view">Comming Soon !</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</main>


<!--====== FOOTER START======-->
<footer>
  <?php include('includes/footer.php'); ?>
</footer>


<!--====== FOOTER END======-->


<!--====== quotes End ======-->


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

<script>
  window.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 10,
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
  const pills = document.querySelectorAll('.nav-pills a');
  const sections = document.querySelectorAll('.section');

  pills.forEach((pill, index) => {
    pill.addEventListener('click', (e) => {
      e.preventDefault();
      pills.forEach((p) => p.classList.remove('active'));
      sections.forEach((section) => section.classList.remove('active'));
      pill.classList.add('active');
      sections[index].classList.add('active');
    });
  });

  document.getElementById("changecon").innerHTML = localStorage.getItem('second');
  document.getElementById("changecon").innerHTML = localStorage.getItem('three');
  document.getElementById("changecon").innerHTML = localStorage.getItem('four');
  document.getElementById("changecon").innerHTML = localStorage.getItem('five');
</script>

</body>

</html>