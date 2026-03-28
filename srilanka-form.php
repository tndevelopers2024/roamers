<?php
session_start();
?>


<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Say Hi to your new travel squad – your undiscovered Besties! Whether you join solo or in a group, you're all set for an epic adventure!">
  <title>Roamers - Discover Amazing Travel Destinations and Experiences</title>
  <!-- SEO Meta Description -->
  <meta name="description" content="Explore the world with Roamers. Find amazing travel
    destinations, tips, and experiences. Plan your perfect getaway with expert travel guides and
    inspiring stories." />
  <meta name="keywords" content="travel, travel destinations, travel tips, travel guides,
    vacation, explore, adventure, travel experiences, travel inspiration, Roamers">
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />
  <!-- Title  -->


  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <!-- slider css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <!-- script For SEO -->


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Product",
      "name": "Example Product",
      "image": "https://www.roamers.in/path-to-product-image.jpg",
      "description": "Example product description.",
      "sku": "EX12345",
      "brand": {
        "@type": "Brand",
        "name": "Example Brand"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://www.roamers.in/product-page",
        "priceCurrency": "USD",
        "price": "99.99",
        "itemCondition": "http://schema.org/NewCondition",
        "availability": "http://schema.org/InStock"
      },
      
      ]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "What is the return policy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can return the product within 30 days of purchase."
          }
        },
        {
          "@type": "Question",
          "name": "Does this product come with a warranty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, it comes with a 1-year warranty."
          }
        }
      ]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebPage",
      "mainEntity": {
        "@type": "Article",
        "headline": "How to Use the Example Product",
        "description": "A comprehensive guide on how to use the Example Product.",
        "author": {
          "@type": "Person",
          "name": "Alex Johnson"
        },
        "datePublished": "2024-07-09",
        "mainEntityOfPage": "https://www.roamers.in/how-to-use-example-product"
      }
    }
  </script>
  <!-- Google Analytics Code: -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];


    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-0MSFD4117B');
  </script>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');


    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    li,
    button,
    .btn,
    a,
    .head,
    div,
    th,
    td,
    tr {}


    .available-box {
      padding: 20px;
      /* box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; */
      border-radius: 10px;
      height: 65vh;
      overflow-y: scroll;
      overflow-x: hidden;
    }


    .available-box::-webkit-scrollbar {
      width: 10px;
      background-color: #a3a3a3;
      border-radius: 10px;
    }


    /* Track */
    .available-box::-webkit-scrollbar-thumb {
      background: #4ec0db;
      border-radius: 10px;
    }


    .available-box h3 {
      margin-bottom: 20px;
      text-align: center;
    }


    .cost-col h2 {
      margin-bottom: 20px;
    }


    .details-box {
      padding: 10px 30px;
      background: #4ec0db;
      color: #fff !important;
      border-radius: 10px;
      justify-content: space-between;
      transition: background 0.2s linear;
      position: relative;
    }


    .details-box:before {
      content: "";
      height: 15px;
      width: 15px;
      border: 4px solid #fff;
      border-left: transparent;
      border-top: transparent;
      position: absolute;
      right: 30px;
      /* top: 50%; */
      transform: rotate(45deg) translateY(-50%);
    }


    .details-box:hover {
      background-color: #094067;
    }


    .details-head h4 {
      color: #fff !important;
      font-size: 20px !important;

    }


    .price-box {
      border: 1px solid #4ec0db;
      border-radius: 10px;
      background-color: aliceblue;

    }


    .price-box .row {
      transition: 0.5s;
      cursor: pointer;
    }


    /* .price-box .row:hover {
      background-color: #e7e7e7;
    } */


    .price-box h5 {
      font-size: 14px
    }


    .price-box .col {
      place-content: center !important;
    }


    .costing-table {
      border: 1px solid #ddd;
      border-radius: 20px;
      overflow: hidden;
      background-color: aliceblue;


    }


    .costing-table th,
    .costing-table td {
      text-align: center;
      vertical-align: middle;
      border-radius: 20px;
      font-size: 16px;
    }

    /* Mobile optimization */
    @media (max-width: 768px) {

      .costing-table th,
      .costing-table td {
        font-size: 14px;
        padding: 10px 5px;
      }

      .cost-col {
        padding: 15px 10px !important;
        margin: 0 !important;
      }

      .costing-table {
        margin-bottom: 15px;
      }

      .starting-price {
        font-size: 18px !important;
        margin-top: 10px !important;
        text-align: center;
      }

      .starting-price-box {
        padding: 0 10px;
      }

      .package-info-box {
        margin-bottom: 15px;
      }

      .row.p-3 {
        padding: 10px !important;
      }

      .col.order-lg-2 {
        padding: 15px !important;
        position: relative !important;
        top: auto !important;
      }
    }

    @media (min-width: 992px) {
      .col.order-lg-2 {
        position: sticky;
        top: 100px;
        height: fit-content;
        z-index: 100;
      }
    }

    @media (max-width: 576px) {

      .costing-table th,
      .costing-table td {
        font-size: 12px;
        padding: 8px 4px;
      }

      .starting-price {
        font-size: 16px !important;
      }
    }


    .costing-table th {
      background-color: #4ec0db;
      font-weight: bold;
      font-size: 16px;
    }


    .starting-price {
      margin-top: 20px;
      font-size: 22px;
      font-weight: bold;
      color: #4ec0db;
    }

    .book-btn {
      border: none;
      padding: 10px 30px;
      background: #094067;
      border-radius: 2rem;
      color: #fff;
      font-size: 20px;
    }


    thead {
      background: #4ec0db;
      color: #fff;
    }


    .date h5 {
      font-size: 18px;
    }


    .price-col h4 {
      font-size: 16px;
    }


    .price-col {
      align-items: center
    }

    /* 
    .price-box .row {
      margin-bottom: 10px;
    }


    .price-box {
      padding-bottom: 10px;
    } */


    .price-box h5,
    p,
    h4 {
      margin-bottom: 0px !important;
    }


    /*.payment-banner {
      margin-top: 100px
    }*/


    .price-col {
      display: flex;
      gap: 5px;
    }


    .starting-price-box {
      display: flex;
      gap: 20px;
    }


    /* .glowing-text {
      color: green;
      font-size: 15px;
      font-weight: 600;
      text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 10px #00ff00;
      animation: glow 1.5s infinite alternate;
    } */


    /* .glowing-text{
      font-size:16px !important;
      background: #094067;
      color:#fff;
      position:absolute;
      left: 10px;
      top:-40px;
      padding:3px 6px;
    } */
    .glowing-text {
      font-size: 16px !important;
      background: #f857a6;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #ff5858, #f857a6);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #ff5858, #f857a6);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      color: #fff;
      position: absolute;
      left: 121%;
      transform: translate(-10%, 0);
      width: 150px;
      top: -40px;
      padding: 3px 6px;
      border-radius: 10px;
    }


    .glowing-text i {
      animation: blink-effect 1s infinite;
    }


    @keyframes blink-effect {
      0% {
        opacity: 1;
      }


      50% {
        opacity: 0;
      }


      100% {
        opacity: 1;
      }
    }


    .price-box .row {
      margin: 0px 20px;
      position: relative;
    }


    .price-box .row:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: 0;
      height: 2px;
      width: 100%;
      background: linear-gradient(90deg, rgba(2, 0, 36, 0) 0%, rgba(31, 130, 255, 1) 50%, rgba(0, 212, 255, 0) 100%);
    }


    .custom-date {
      position: relative;
      display: inline-block;
      width: 100%;
    }


    .custom-date input[type="date"] {
      padding: 10px 40px 10px 10px;
      font-size: 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
    }


    .custom-date i {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #666;
      pointer-events: none;
    }


    /* Remove the default calendar icon on Chrome */
    input[type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0;
      cursor: pointer;
      position: absolute;
      right: 0;
      width: 100%;
      height: 100%;
    }


    .details-box {
      cursor: pointer;
    }


    .details-box.active {
      background-color: #094067;
      color: white;
    }


    #per-details {
      display: none;
    }


    #full-details {
      display: none;
    }


    .input-field input {
      border: 1px solid #a3a3a3;
      outline: none !important;
      box-shadow: none !important;
    }


    .phone[type="number"]::-webkit-outer-spin-button,
    .phone[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }


    /* Hide number input arrows in Firefox */
    input[type="number"] {
      -moz-appearance: textfield;
    }


    label {
      margin-top: 20px !important;
      margin-right: 20px !important;
    }


    textarea {
      resize: none !important;
      height: 200px !important;
      outline: none !important;
      border: 1px solid #a3a3a3 !important;
      box-shadow: none !important;
      width: 100% !important;
    }


    select {
      width: 100% !important;
      padding: 20px !important;
      outline: none !important;
      box-shadow: none !important;


    }


    .span {
      display: block;
      font-size: 18px !important;
      line-height: 10px !important;
      margin-top: 24px;
      color: #000 !important;
      font-weight: 600 !important;
    }


    .form-img img {
      border-radius: 10px;
    }


    #full-details .div {
      color: #000;
      font-size: 18px !important;
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 20px !important;
    }


    #full-details .div i {
      font-size: 24px !important;
      color: #4ec0db;
      width: 20px !important;
    }


    #full-details .div i:hover {
      color: #4ec0db !important;
    }


    #full-details .div p {
      color: #000;
      font-size: 18px;
    }


    .step-container {
      position: relative;
      text-align: center;
      transform: translateY(-43%);
    }


    .step-circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #fff;
      border: 2px solid #4ec0db;
      line-height: 30px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      cursor: pointer;
      /* Added cursor pointer */
    }


    .step-line {
      position: absolute;
      top: 16px;
      left: 50px;
      width: calc(100% - 100px);
      height: 2px;
      background-color: #4ec0db;
      z-index: -1;
    }


    .booking-form-head {
      margin-top: 150px;
      font-weight: 800;
      font-size: 20px;
    }

    .booking-form-head {
      margin-top: 150px;
      font-weight: 800;
      font-size: 20px;
      /* Mobile default */
    }

    @media screen and (min-width: 768px) {
      .booking-form-head {
        margin-top: 200px;
        /* More space on desktop */
        font-size: 32px;
        /* Larger font for desktop */
      }
    }


    .radio-item [type="radio"] {
      display: none;
    }


    .radio-item+.radio-item {
      margin-top: 15px;
    }


    .radio-item label {
      display: block;
      padding: 20px 60px;
      border: 1px solid #a3a3a3;
      border-radius: 8px;
      cursor: pointer;
      font-size: 18px;
      font-weight: 400;
      min-width: 250px;
      width: 100%;
      white-space: nowrap;
      position: relative;
      transition: 0.4s ease-in-out 0s;
    }


    .radio-item label:after,
    .radio-item label:before {
      content: "";
      position: absolute;
      border-radius: 50%;
    }


    .radio-item label:after {
      height: 19px;
      width: 19px;
      border: 2px solidrgb(49, 173, 255);
      left: 21px;
      top: calc(50% - 13px);
    }


    .radio-item label:before {
      background: #4ec0db;
      height: 20px;
      width: 20px;
      left: 21px;
      top: calc(50%-5px);
      transform: scale(5);
      opacity: 0;
      visibility: hidden;
      transition: 0.4s ease-in-out 0s;
    }


    .radio-item [type="radio"]:checked~label {
      border-color: #4ec0db;
    }


    .radio-item [type="radio"]:checked~label::before {
      opacity: 1;
      visibility: visible;
      transform: scale(1);
    }


    .prev-step {
      background: #fff;
      color: black;
      border: 1px solid #094067;
    }


    .selected-date-div {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px;
      width: fit-content;
    }

    .selected-div-h4 {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #094067 !important;
      padding: 10px 20px;
      gap: 5px;
      border-radius: 16px;
    }

    .selected-date-div h4 {
      color: #fff;
    }

    @media (max-width: 600px) {
      /* .payment-banner {
        margin-top: 60px !important;
      } */

      .starting-price-box {
        display: flex;
        flex-direction: column !important;
        gap: 10px;
        text-align: center !important;
      }

      .starting-price {
        font-size: 16px !important;
      }

      .cost-col {
        /* height: 360px !important; */
        margin: 0 !important;
      }


      .cost-col h3 {
        text-align: center !important;
      }


      /* .available-box{
        height:auto;
      } */
      .available-box h3 {
        text-align: center !important;
      }


      .available-box {
        padding: 20px 10px !important;
        height: 40vh;
      }


      /* .price-box {
        padding: 10px 10px !important;
      } */


      .price-col p {
        font-size: 12px !important;
      }


      .price-box h5 {
        font-size: 14px !important;
      }


      .price-col h4 {
        font-size: 16px !important;
      }


      .price-box .col {
        padding: 0px !important;
        place-content: center !important;
      }


      .price-col {
        display: block !important;
      }


      .table>:not(:last-child)>:last-child>* {
        font-size: 10px !important;
      }


      .booking-form-head {
        margin-top: 100px;
      }


      .selected-div-h4 h4 {
        font-size: 14px;
      }
    }


    .package-info-box {
      position: relative;
      overflow: hidden;
      min-height: 120px;
      transition: all 0.3s ease-in-out;
      opacity: 0;
      transform: translateY(-20px);
    }

    .package-info-box.show {
      opacity: 1;
      transform: translateY(0);
    }

    .background-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('assets/img/sri-lanka/sri-lanka-gallery-17.avif');
      background-size: cover;
      background-position: center;
      filter: blur(4px);
      transform: scale(1.1);
    }

    .blur-overlay {
      position: relative;
      z-index: 1;
      /* background: rgba(0, 0, 0, 0.4); */
      border-radius: 15px;
    }

    .package-date {
      /* background: rgba(255, 255, 255, 0.1); */
      border-radius: 15px;
      padding: 1rem;
      margin-top: 1rem;
      text-align: center;
    }

    .date-label {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-bottom: 0;
    }

    .date-label i,
    .date-label span.text {
      color: #fff !important;
      /* text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); */
      font-size: 1.3rem;
      font-weight: 500;
    }

    .selected-date {
      font-size: 1.3rem !important;
      color: #fff !important;
      /* text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); */
      margin: 0;
    }

    .package-title {
      text-align: center;
      margin-bottom: 1rem;
      /* text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); */
    }

    .package-divider {
      background: #fff;
      height: 3px;
      width: 60px;
      margin: 1rem auto;
      border-radius: 2px;
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      .package-title {
        font-size: 1.3rem;
      }


      .package-icon {
        font-size: 2rem;
      }


      .selected-date {
        font-size: 1.1rem;
      }
    }

    /* Custom table styles */
    .custom-table thead {
      background-color: #4ec0db;
      color: #fff;

    }

    .custom-table th,
    .custom-table td {
      vertical-align: middle;
      text-align: center;
      border: 1px solid #dee2e6;
      border-radius: 8px;
    }

    .custom-table tbody tr:nth-child(even) {
      background-color: #f8f9fa;
      border-radius: 8px;
    }

    @media (max-width: 576px) {

      .custom-table th,
      .custom-table td {
        font-size: 14px;
        padding: 10px;

      }
    }
  </style>

</head>


<body>


  <!--====== Preloader Area End ======-->
  <!--====== whatapp Area Start ======-->

  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1">
    <img src="assets/img/icon/whatsapp.svg" alt="">
  </a>


  <!--====== whatapp Area End ======-->
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->
  <div class="text-center mb-4">
    <h1 class="booking-form-head">
      Strangers to Stories: Sri Lanka</h1>
    <!-- <p>Explore the lush wonders of Sri Lanka's Sinharaja Forest Reserve, a UNESCO World Heritage Site teeming with vibrant biodiversity and tropical charm.
    </p> -->
  </div>

  <section class="">
    <div class="container">
      <form action="srilanka-mail-send.php" method="POST" autocomplete="off">
        <div class="row  row-cols-lg-2 row-cols-1 gy-4 px-0 mx-0 px-2 px-md-5" id="date-form">

          <div class="col order-lg-1 order-2 shadow-lg p-3" style="border-radius:20px">
            <div id="container" class="container" style="margin-top:30px;">
              <div class="progress px-1" style="height: 3px;">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <div class="step-container d-flex justify-content-between">
                <div class="step-circle" onclick="displayStep(1)">1</div>
                <div class="step-circle" onclick="displayStep(2)">2</div>
                <div class="step-circle" onclick="displayStep(3)">3</div>
              </div>
            </div>
            <div class=" p-3" style="border-radius: 20px;">
              <div class="dates" id="dates">
                <div id="monthly-data-container">


                  <h4 class="text-center fw-bold">Available Dates</h4>
                  <!-- Dynamic content will be inserted here -->
                </div>
                <div class="button-div d-flex justify-content-end mt-5">
                  <!-- <button class="book-btn next-step" id="book-btn">Next</button> -->
                </div>
              </div>
              <div class="row gy-4" id="per-details">
                <div>
                  <button id="pre-btn" class="btn rounded-pill"> <span class="me-1">←</span> Back</button>
                  <h4 class="text-center fw-bold">Traveller Details</h4>
                </div>

                <div class="per-form">
                  <div class="row">
                    <div class="col">
                      <div class="row row-cols-1 g-3">
                        <div class="col">
                          <div class="input-field">
                            <input type="text" id="name" placeholder="Full Name" name="name" autocomplete="off"
                              required>
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-field">
                            <input type="email" name="email" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-field">
                            <input type="number" class="phone" id="phone" name="phone" placeholder="Phone Number"
                              required oninput="this.value = this.value.slice(0, 10).replace(/[^0-9]/g, '');">
                          </div>
                        </div>
                        <span class="span mt-5">Date Of Birth</span>
                        <div class="col">
                          <div class="input-field">
                            <div class="custom-date">
                              <input type="date" name="dob" id="dob" placeholder="D.O.B" required>
                              <i class="fa-solid fa-calendar-days"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <span class="span mt-5">Gender</span>

                          <div class="radio-item"><input name="gender" id="radio1" type="radio" value="Male"><label
                              for="radio1">Male</label></div>
                          <div class="radio-item"><input name="gender" id="radio2" type="radio" value="Female"><label
                              for="radio2">Female</label></div>
                          <div class="radio-item"><input name="gender" id="radio3" type="radio" value="Others"><label
                              for="radio3">Others</label></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <span class="span mt-5">Sharing</span>
                          <div class="radio-item"><input name="sharing" id="radio4" type="radio"
                              value="Double Sharing"><label for="radio4">Double Sharing</label></div>
                          <div class="radio-item"><input name="sharing" id="radio5" type="radio"
                              value="Triple Sharing"><label for="radio5">Triple Sharing</label></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="travel-date" class="form-label span mt-5">Select Members:</label>
                          <!-- <select id="travel-date" name="date" class="form-select mt-4" required>
                                  <option value="" disabled selected>Select the Date</option>
                                  <option value=""></option> -->
                          <div class="input-field">
                            <input type="hidden" id="travel-date" name="date" readonly>
                          </div>
                          </select>
                        </div>
                      </div>
                      <div class="input-field mt-4">
                        <input type="number" id="traveller-count" name="person-count" placeholder="Traveller Count"
                          min="1" required>
                        <span class="span mt-5">PickUp & Drop Location</span>
                        <div class="input-field mt-4">
                          <select id="pickup" name="pickup" class="form-select mt-4" required>
                            <option value="" disabled selected>Select the Location</option>
                            <option value="Chennai">Colombo</option>
                          </select>
                        </div>
                        <span class="span mt-5">Address</span>
                        <div class="input-field mt-4">
                          <input type="text" placeholder="Address 1" name="address1" required>
                        </div>
                        <div class="input-field mt-4">
                          <input type="text" placeholder="Address 2" name="address2" required>
                        </div>
                        <div class="row mt-4 gx-4">
                          <div class="col">
                            <div class="input-field">
                              <input type="text" placeholder="City" name="city" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="input-field">
                              <input type="text" placeholder="Post Code" name="post-code" required
                                oninput="this.value = this.value.slice(0, 6).replace(/[^0-9]/g, '');">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="button-div d-flex justify-content-end gap-2 mt-4">
                        <button id="pre-btn" class="book-btn prev-step">Back</button>
                        <button class="book-btn next-step" id="next-btn2">Next</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div id="full-details">
                <h1>full details</h1>
              </div>
            </div>
          </div>

          <div class="col order-lg-2 order-1 shadow-lg p-4" style="border-radius:20px">
            <div class="row px-2 px-md-4">
              <div class="package-info-box" style="border-radius: 10px; display: none;" id="selected-date-box">
                <div class="background-image shadow"></div>
                <div class="blur-overlay">
                  <div class="package-date">
                    <div class="d-flex align-items-center justify-content-center border rounded">
                      <h5 class="text-white fw-bold py-2 me-2" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Your
                        adventure starts : </h5>
                      <h5 class="fw-bold text-white"
                        style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);  border-radius: 5px;"
                        id="selected-package-date">Date Not selected</h5>
                    </div>
                  </div>
                </div>
              </div>


              <div class="cost-col mt-3" style="border-radius: 20px;">
                <h4 class="text-center mb-3 fw-bold">Costing</h4>


                <div class="table-responsive">
                  <table class="table custom-table">
                    <thead>
                      <tr>
                        <th scope="col">Sharing</th>
                        <th scope="col">Offer Price</th>
                      </tr>
                    </thead>
                    <tbody id="costing-table-body">
                      <!-- Example static row -->
                      <tr>
                        <td>Double Sharing</td>
                        <td>$150</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="justify-content-center starting-price-box px-3">
                  <p id="starting-price" class="starting-price"></p>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    </form>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      fetch("./dynamic/database.json") // Check this path
        .then(response => {
          if (!response.ok) throw new Error("Network response was not ok");
          return response.json();
        })
        .then(data => {
          const locationKey = "srilanka";
          const locationData = data[locationKey];


          if (!locationData) {
            console.error(`No data found for location: ${locationKey}`);
            return;
          }


          if (!locationData.costing) {
            console.error("No costing data found for the selected location.");
            return;
          }


          const startingPriceElem = document.getElementById("starting-price");
          if (startingPriceElem) {
            startingPriceElem.textContent = `Starting Price: ₹43,990/- `;
          } else {
            console.warn("Element with id 'starting-price' not found.");
          }


          const tableBody = document.getElementById("costing-table-body");
          if (!tableBody) {
            console.error("Element with id 'costing-table-body' not found.");
            return;
          }


          // Build all rows at once for better performance
          let rows = "";
          locationData.costing.prices.forEach(price => {
            rows += `<tr>
            <td>${price.sharing || "N/A"}</td>
            <td>${price.offer || "N/A"} <strike style="margin-left:30px; color:#a3a3a3;"> ${price.mrp || "N/A"}</strike></td>
          </tr>`;
          });


          tableBody.innerHTML = rows;
        })
        .catch(error => console.error("Error loading costing data:", error));
    });
  </script>

  <!-- <script>
  document.addEventListener("DOMContentLoaded", () => {
  const dateForm = document.querySelector(".dates");
  const bookBtn = document.querySelector("#book-btn");
  const nextBtn = document.querySelector("#next-btnn");
  const nextBtn2 = document.querySelector("#next-btn2")
  const preBtn = document.querySelector("#pre-btn");
  const preBtn2 = document.querySelector("#pre-btn2");
  const confirmBtn = document.querySelector("#confirm-btn")
  const perDetails = document.querySelector("#per-details");
  const fullDetails = document.querySelector("#full-details");
 
  if (bookBtn && dateForm && perDetails) {
    bookBtn.addEventListener("click", (e) => {
      e.preventDefault();
      dateForm.style.display = "none";
      perDetails.style.display = "block";
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", (e) => {
      e.preventDefault();
      perDetails.style.display = "none";
      // Add logic to show the next section if available
    });
  }


  if (preBtn) {
    preBtn.addEventListener("click", (e) => {
      e.preventDefault();
      dateForm.style.display = "block";
      perDetails.style.display = "none";
    });
  }
  if (preBtn2) {
    preBtn2.addEventListener("click", (e) => {
      e.preventDefault();
      dateForm.style.display = "none";
      perDetails.style.display = "block";
      fullDetails.style.display = "none";
    });
  }


  nextBtn2.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent form submission if inside a form


   
    // Storing input values in constants
    const fullName = document.querySelector("#name").value.trim();
    const email = document.querySelector('input[type="email"]').value.trim();
    const phone = document.querySelector("#phone").value.trim();
    const dob = document.querySelector('input[placeholder="D.O.B"]').value.trim();
    const travellerCount = document.querySelector("#traveller-count").value.trim();
    const address1 = document.querySelector('input[placeholder="Address 1"]').value.trim();
    const address2 = document.querySelector('input[placeholder="Address 2"]').value.trim();
    const city = document.querySelector('input[placeholder="City"]').value.trim();
    const postCode = document.querySelector('input[placeholder="Post Code"]').value.trim();
    const gender = document.querySelector('input[name="gender"]:checked')?.value || "";
    // const sharing = document.querySelector('input[name="sharing"]:checked')?.value || "";
    const travelDate = document.querySelector("#travel-date").value.trim();
    const pickup = document.querySelector("#pickup").value.trim();
    let perPersonAmount = "₹9,990/-";


  // if (sharing === "Double Sharing" && pickup === "Chennai") {
  //   perPersonAmount = "₹9,990/-";
  // } else if (sharing === "Triple Sharing" && pickup === "Chennai") {
  //   perPersonAmount = "₹8,990/-";
  // } else if (sharing === "Double Sharing" && pickup === "Coimbatore") {
  //   perPersonAmount = "₹8,499/-";
  // } else if (sharing === "Triple Sharing" && pickup === "Coimbatore") {
  //   perPersonAmount = "₹7,499/-";
  // }
  //   document.addEventListener('DOMContentLoaded', function() {
  //   document.querySelectorAll('input').forEach(input => {
  //     input.setAttribute('autocomplete', 'off');
  //   });
  // });


    // Validation check (Ensuring all fields are filled)
    if (
      !travelDate || !fullName || !email || !phone || !dob || !travellerCount ||
      !address1 || !city || !postCode || !gender || !sharing || !pickup
    ) {
      alert("All fields are required! Please fill out all fields before proceeding.");
      return; // Stop execution if any field is empty
    }


    // Creating an object to store input values
    const formData = {
      travelDate,
      fullName,
      email,
      phone,
      dob,
      travellerCount,
      address1,
      address2,
      city,
      postCode,
      gender,
      sharing,
      pickup,
      perPersonAmount
    };


    // Store the object in local storage (optional)
    // localStorage.setItem("formData", JSON.stringify(formData));


    // Hide previous sections and show full details
    dateForm.style.display = "none";
    perDetails.style.display = "none";
    fullDetails.style.display = "block";


    // You can replace the console log with further processing
    // console.log("Form Data:", formData);
    const tableHTML = `
      <h3 class="text-center my-3">Confirm Details</h3>
      <div><i class="fa-regular fa-user"></i> <p><b>Name :</b>  ${formData.fullName}</p></div>
      <div><i class="fa-regular fa-envelope"></i> <p><b>Email :</b>  ${formData.email}</p></div>
      <div><i class="fa-solid fa-phone"></i> <p><b>Phone No. :</b>  ${formData.phone}</p></div>
      <div><i class="fa-solid fa-calendar-days"></i> <p><b>DOB :</b> ${formData.dob}</p></div>
      <div><i class="fa-solid fa-venus-mars"></i> <p><b>Gender :</b> ${formData.gender}</p></div>
      <div><i class="fa-solid fa-plane-departure"></i> <p><b>Trip :</b> Valley Of Flowers</p></div>
      <div><i class="fa-solid fa-calendar-check"></i> <p><b>Travel Date :</b> ${formData.travelDate}</p></div>
      <div><i class="fa-solid fa-handshake"></i> <p><b>Sharing :</b> ${formData.sharing}</p></div>
      <div><i class="fa-solid fa-person-hiking"></i> <p><b>Persons Count :</b> ${formData.travellerCount}</p></div>
      <div><i class="fa-solid fa-truck-pickup"></i> <p><b>Pickup and Drop :</b> ${formData.pickup}</p></div>
      <div><i class="fa-solid fa-location-dot"></i> <p><b>Address :</b> ${formData.address1}, ${formData.address2}, ${formData.city}, ${formData.postCode}</p></div>
      <div class="d-flex justify-content-between">
        <div style="background:#4ec0db; margin-top:20px; padding:20px 10px; border-radius:10px;" class="d-flex justify-content-center align-items-center">
          <h4 style="text-align:center;font-weight:bold; color:#000;">₹9,990/- (Per Person)</h4>
        </div>
        <div class="button-div d-flex justify-content-end mt-4">        
          <button class="book-btn prev-step me-2" id="pre-btn2" type="button">Cancel</button>
          <button type="submit" name="submit-btn" class="book-btn" id="confirm-btn">Confirm Booking</button>
        </div>
      </div>`;


    // Append the table to fullDetails container
    fullDetails.innerHTML = tableHTML;
    document.addEventListener("click", function (e) {
  if (e.target && e.target.id === "confirm-btn") {
        e.preventDefault();
        document.querySelector("form").submit();
      }
    });
  });
 });


</script> -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      fetch("./dynamic/database.json") // to change the price ... 
        .then(response => response.json())
        .then(data => {
          const locationKey = "srilanka"; // Change to "ooty" if needed
          const locationData = data[locationKey];

          if (!locationData) {
            console.error("No data found for the selected location.");
            return;
          }

          const container = document.getElementById("monthly-data-container");
          let firstMonth = true;

          for (const [month, details] of Object.entries(locationData)) {
            if (month === "costing") continue;

            const monthBox = document.createElement("div");
            monthBox.className = "details-box d-flex align-items-center mt-4";
            monthBox.onclick = () => togglePriceBox(monthBox);

            const monthHeader = document.createElement("div");
            monthHeader.className = "details-head d-flex gap-2";
            monthHeader.innerHTML = `<div class="icon"><i class="fa-solid fa-calendar-days mb-2"></i></div><h4>${month}</h4>`;

            monthBox.appendChild(monthHeader);

            const priceBox = document.createElement("div");
            priceBox.className = "price-box mt-3";
            priceBox.style.display = firstMonth ? "block" : "none";

            if (firstMonth) {
              monthBox.classList.add("active");
            }

            details.forEach(detail => {
              const row = document.createElement("div");
              row.className = "row";
              row.innerHTML = `
              <div class="col text-center my-3 position-relative"><h5>${detail.date}</h5>
              ${detail.special ? `<span class="glowing-text"><i class="fa-solid fa-angles-down"></i> ${detail.special} <i class="fa-solid fa-angles-down"></i></span>` : ""}</div>
              <div class="col text-center">
                <p style="color:${detail.statusColor};">${detail.status}</p>
              </div>
              <div class="col price-col text-center"><p>Starts at:</p><h4>${detail.price}</h4></div>
            `;
              priceBox.appendChild(row);
            });

            container.appendChild(monthBox);
            container.appendChild(priceBox);
            firstMonth = false;
          }
        })
        .catch(error => console.error("Error fetching data:", error));
    });


    function togglePriceBox(element) {
      const priceBox = element.nextElementSibling;
      const isVisible = priceBox.style.display === "block";


      // Hide all price boxes and remove red background
      document.querySelectorAll('.price-box').forEach(box => box.style.display = 'none');
      document.querySelectorAll('.details-box').forEach(box => box.classList.remove('active'));


      // Toggle current one
      if (!isVisible) {
        priceBox.style.display = 'block';
        element.classList.add('active');
      } else {
        priceBox.style.display = 'none';
        element.classList.remove('active');
      }
    }
  </script>

  <br><br><br>
  <?php include('includes/footer.php'); ?>

  <script src="index.js"></script>

  <!-- form Steps -->

  <!-- <script>
    var currentStep = 1;
    var updateProgressBar;


    $(document).ready(function () {
      $(".next-step").click(function () {
        if (currentStep === 2) {
          // Validate form fields before proceeding
          let isValid = true;
          $("#per-details input[required], #per-details select[required]").each(function () {
            if (!$(this).val()) {
              isValid = false;
              $(this).addClass("is-invalid"); // Highlight empty fields
            } else {
              $(this).removeClass("is-invalid");
            }
          });


          if (!isValid) {
            return; // Stop the function if validation fails
          }
        }


        if (currentStep < 3) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
          currentStep++;
          setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
          }, 50);
        }
      });


      $("#pre-btn").click(function (e) {
        e.preventDefault(); // Prevent form submission if it's inside a form


        if (currentStep > 1) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
          currentStep--;
          setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
            updateProgressBar();
          }, 50);
        }
      });


      updateProgressBar = function () {
        var progressPercentage = ((currentStep - 1) / 2) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
      };
    });


  </script> -->
  <!-- Date populate -->
  <script>
    fetch('./dynamic/database.json')
      .then(response => response.json())
      .then(data => {
        function populateDates(location) {
          const select = document.getElementById('travel-date');
          select.innerHTML = '<option value="" disabled selected>Select the Date</option>';


          if (!data[location]) {
            console.error('Invalid location');
            return;
          }


          Object.keys(data[location]).forEach(month => {
            if (Array.isArray(data[location][month])) {
              data[location][month].forEach(item => {
                const option = document.createElement('option');
                option.value = `${month} ${item.date}`;
                option.textContent = `${month} (${item.date})`;
                select.appendChild(option);
              });
            }
          });
        }


        // Example: Call the function for Varkala or Ooty
        populateDates('valley'); // or populateDates('ooty');
      })
      .catch(error => console.error('Error fetching data:', error));
  </script>


  <!-- date selecting script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      let currentStep = 1;


      const dateForm = document.querySelector(".dates");
      const perDetails = document.querySelector("#per-details");
      const fullDetails = document.querySelector("#full-details");
      const travelDateSelect = document.querySelector("#travel-date");
      const selectedPackageDateElement = document.getElementById("selected-package-date");
      const bookBtn = document.querySelector("#book-btn");
      const nextBtn2 = document.querySelector("#next-btn2");
      const preBtn = document.querySelector("#pre-btn");


      function updateProgressBar() {
        const totalSteps = 3;
        const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
        const progressBar = document.querySelector(".progress-bar");
        if (progressBar) {
          progressBar.style.width = progressPercentage + "%";
        }
      }


      updateProgressBar();


      document.addEventListener("click", (e) => {
        const row = e.target.closest(".price-box .row");
        if (row) {
          const dateText = row.querySelector("h5")?.innerText?.trim() || "";
          const priceBox = row.closest(".price-box");
          const detailsBox = priceBox?.previousElementSibling;
          let monthText = "";
          if (detailsBox && detailsBox.classList.contains("details-box")) {
            monthText = detailsBox.querySelector("h4")?.innerText?.trim() || "";
          }

          const selectedFullDate = `${monthText} ${dateText}`;

          // Show and animate the date box
          const dateBox = document.getElementById("selected-date-box");
          if (dateBox) {
            dateBox.style.display = "block";
            setTimeout(() => {
              dateBox.classList.add("show");
            }, 50);
          }

          // Update the selected date in the package section
          if (selectedPackageDateElement) {
            selectedPackageDateElement.textContent = selectedFullDate;
          }

          // Update hidden input for form submission
          if (travelDateSelect) {
            travelDateSelect.value = selectedFullDate;
          }

          if (dateForm && perDetails) {
            dateForm.style.display = "none";
            perDetails.style.display = "block";
            currentStep = 2;
            updateProgressBar();
          }
        }
      });


      if (bookBtn && dateForm && perDetails) {
        bookBtn.addEventListener("click", (e) => {
          e.preventDefault();
          dateForm.style.display = "none";
          perDetails.style.display = "block";
          currentStep = 2;
          updateProgressBar();
        });
      }


      if (nextBtn2) {
        nextBtn2.addEventListener("click", (e) => {
          e.preventDefault();


          const fullName = document.querySelector("#name")?.value.trim() || "";
          const email = document.querySelector('input[type="email"]')?.value.trim() || "";
          const phone = document.querySelector("#phone")?.value.trim() || "";
          const dob = document.querySelector('input[placeholder="D.O.B"]')?.value.trim() || "";
          const travellerCount = document.querySelector("#traveller-count")?.value.trim() || "";
          const address1 = document.querySelector('input[placeholder="Address 1"]')?.value.trim() || "";
          const address2 = document.querySelector('input[placeholder="Address 2"]')?.value.trim() || "";
          const city = document.querySelector('input[placeholder="City"]')?.value.trim() || "";
          const postCode = document.querySelector('input[placeholder="Post Code"]')?.value.trim() || "";
          const gender = document.querySelector('input[name="gender"]:checked')?.value || "";
          const sharing = document.querySelector('input[name="sharing"]:checked')?.value || "";
          const travelDate = travelDateSelect?.value.trim() || "";
          const pickup = document.querySelector("#pickup")?.value.trim() || "";


          if (
            !travelDate || !fullName || !email || !phone || !dob || !travellerCount ||
            !address1 || !city || !postCode || !gender || !sharing || !pickup
          ) {
            alert("All fields are required! Please fill out all fields before proceeding.");
            return;
          }


          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return;
          }


          if (!/^\d{7,15}$/.test(phone.replace(/\D/g, ""))) {
            alert("Please enter a valid phone number (7-15 digits).");
            return;
          }


          // Set amount using if statements
          let perPersonAmount = 0;
          if (sharing === "Triple Sharing") {
            perPersonAmount = 43990;
          } else if (sharing === "Double Sharing") {
            perPersonAmount = 46990;
          }


          const formData = {
            travelDate,
            fullName,
            email,
            phone,
            dob,
            travellerCount,
            address1,
            address2,
            city,
            postCode,
            gender,
            sharing,
            pickup,
            perPersonAmount,
          };


          dateForm.style.display = "none";
          perDetails.style.display = "none";
          fullDetails.style.display = "block";


          const confirmationHTML = `
            <h3 class="text-center my-3">Confirm Details</h3>
            <div class="div"><i class="fa-regular fa-user"></i> <p><b>Name :</b>  ${formData.fullName}</p></div>
            <div class="div"><i class="fa-regular fa-envelope"></i> <p><b>Email :</b>  ${formData.email}</p></div>
            <div class="div"><i class="fa-solid fa-phone"></i> <p><b>Phone No. :</b>  ${formData.phone}</p></div>
            <div class="div"><i class="fa-solid fa-calendar-days"></i> <p><b>DOB :</b> ${formData.dob}</p></div>
            <div class="div"><i class="fa-solid fa-venus-mars"></i> <p><b>Gender :</b> ${formData.gender}</p></div>
            <div class="div"><i class="fa-solid fa-plane-departure"></i> <p><b>Trip :</b> Srilanka</p></div>
            <div class="div"><i class="fa-solid fa-calendar-check"></i> <p><b>Travel Date :</b> ${formData.travelDate}</p></div>
            <div class="div"><i class="fa-solid fa-handshake"></i> <p><b>Sharing :</b> ${formData.sharing}</p></div>
            <div class="div"><i class="fa-solid fa-person-hiking"></i> <p><b>Persons Count :</b> ${formData.travellerCount}</p></div>
            <div class="div"><i class="fa-solid fa-truck-pickup"></i> <p><b>Pickup and Drop :</b> ${formData.pickup}</p></div>
            <div class="div"><i class="fa-solid fa-location-dot"></i> <p><b>Address :</b> ${formData.address1}, ${formData.address2}, ${formData.city}, ${formData.postCode}</p></div>
            <div class="d-flex justify-content-between flex-wrap">
              <div style="background:#4ec0db; margin-top:20px; padding:20px 10px; border-radius:10px;" class="d-flex justify-content-center align-items-center">
                <h4 style="text-align:center;font-weight:bold; color:#000;">₹${formData.perPersonAmount.toLocaleString()}/-</h4>
              </div>
              <div class="button-div d-flex justify-content-end mt-4">
                <button class="book-btn prev-step me-2" id="pre-btn2" type="button">Back</button>
                <button type="submit" name="submit-btn" class="book-btn" id="confirm-btn">Book Now</button>
              </div>
            </div>`;


          fullDetails.innerHTML = confirmationHTML;


          currentStep = 3;
          updateProgressBar();


          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        });
      }


      document.addEventListener("click", (e) => {
        if (e.target.id === "pre-btn2") {
          e.preventDefault();
          fullDetails.style.display = "none";
          perDetails.style.display = "block";
          currentStep = 2;
          updateProgressBar();
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        }


        if (e.target.id === "confirm-btn") {
          e.preventDefault();
          const form = document.querySelector("form");
          if (form) {
            form.submit();
          } else {
            alert("Form not found!");
          }
        }
      });


      if (preBtn) {
        preBtn.addEventListener("click", (e) => {
          e.preventDefault();
          // Hide and reset the date box
          const dateBox = document.getElementById("selected-date-box");
          if (dateBox) {
            dateBox.classList.remove("show");
            setTimeout(() => {
              dateBox.style.display = "none";
            }, 300); // Match the transition duration
          }

          perDetails.style.display = "none";
          dateForm.style.display = "block";
          currentStep = 1;
          updateProgressBar();
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        });
      }
    });
  </script>


  <script>
    function goBack() {
      window.history.back();
    }
  </script>



  <!--  All jQuery Plugins  -->
  <!-- jQuery(necessary for all JavaScript plugins) -->


  <script src="assets/js/dates.js"></script>
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




  <!-- Bootstrap js -->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins js -->
  <script src="assets/js/plugins/plugins.min.js"></script>


  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>


  <!-- Active js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="assets/js/main.js"></script> -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="assets/js/active.js"></script>


</body>




</html>