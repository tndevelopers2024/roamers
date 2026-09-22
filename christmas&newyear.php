<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roamers - Christmas and New Year Trips</title>
  <meta name="description"
    content="Join Roamers for festive Christmas & New Year group trips! Solo travelers, couples, and friends welcome. Explore Manali, Goa, and more.">
  <meta name="keywords"
    content="christmas trips, new year travel, group trips india, solo travel, manali christmas, roamers">
  <meta name="author" content="Roamers">

  <!-- Open Graph -->
  <meta property="og:title" content="Roamers | Christmas & New Year Group Trips">
  <meta property="og:description"
    content="Celebrate Christmas & New Year with like-minded travelers. Book your festive getaway now!">
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
  <meta property="og:url" content="https://www.roamers.in/christmas-newyear">
  <link rel="canonical" href="https://www.roamers.in/christmas-newyear">

  <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon">

  <!-- Font Awesome for Chevron Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Global CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/color.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
    }

    .banner-swiper-container {
      width: 100vw;
      max-width: 100%;
      margin: 0 auto 2rem;
      overflow: visible;
      position: relative;
      z-index: 2;
      margin-top: 60px;
      /* Use hardware acceleration for smoothness (especially mobile) */
      will-change: transform;
      backface-visibility: hidden;
    }

    .banner-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #000;
      will-change: transform;
      backface-visibility: hidden;
    }

    .banner-swiper .slide-picture {
      width: 100%;
      height: 100%;
      object-fit: cover;
      will-change: transform;
      backface-visibility: hidden;
    }

    @media (max-width: 576px) {

      .banner-swiper-container,
      .banner-swiper .swiper-slide,
      .banner-swiper .slide-picture {
        height: 100vh !important;
        /* min-height: 60vw; */
        max-height: 40vh;
        border-radius: 0px;
      }

      /* Specific fix for the secondary wide banner on mobile */
      .banner-swiper-secondary,
      .banner-swiper-secondary .swiper-slide,
      .banner-swiper-secondary .slide-picture {
        height: auto !important;
        max-height: none !important;
      }
      
      .banner-swiper-secondary .slide-picture {
        object-fit: contain !important;
      }
    }

    .gallery-swiper-section-desktop {
      display: block;
      max-width: 1400px;
      margin: 0 auto 3rem;
      padding: 0 1rem;
    }

    .gallery-swiper {
      height: 520px;
      position: relative;
    }

    .gallery-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: stretch;
      padding: 16px 0;
    }

    .travel-card__img {
      width: 100%;
      height: 100%;
      aspect-ratio: 16/9;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .gallery-swiper-nav {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-between;
      z-index: 10;
      pointer-events: none;
      transform: translateY(-50%);
    }

    .gallery-swiper-nav button {
      pointer-events: auto;
      width: 44px;
      height: 44px;
      background: #4ec0db;
      color: white;
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      opacity: 0.9;
      transition: all 0.3s ease;
    }

    .gallery-swiper-section-mobile {
      display: none;
    }

    .christmas-mobile-swiper-container {
      width: 100vw;
      height: 60vw;
      min-height: 220px;
      max-height: 540px;
      margin: 0 auto 2rem;
      padding: 0 1rem;
      overflow: visible;
      will-change: transform;
      backface-visibility: hidden;
    }

    .christmas-mobile-swiper .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
      will-change: transform;
      backface-visibility: hidden;
    }

    .christmas-mobile-swiper .slide-picture {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
      will-change: transform;
      backface-visibility: hidden;
    }

    @media (max-width: 767px) {
      .gallery-swiper-section-desktop {
        display: none !important;
      }

      .gallery-swiper-section-mobile {
        display: block !important;
      }

      .christmas-mobile-swiper-container,
      .christmas-mobile-swiper .swiper-slide,
      .christmas-mobile-swiper .slide-picture {
        height: 60vh !important;
        min-height: 60vw;
        max-height: 100vh;
        will-change: transform;
        backface-visibility: hidden;
      }
    }

    @media (min-width: 768px) {
      .christmas-mobile-swiper-container {
        display: none !important;
      }
    }

    .faq {
      padding: 3rem 1rem;
      background: #f8f9fa;
    }

    .faq .head {
      text-align: center;
      margin-bottom: 2rem;
      color: #4ec0db;
    }

    .accordion-button {
      font-weight: 600 !important;
      color: #212529 !important;
      background-color: #fff !important;
      border-radius: 10px !important;
    }

    .accordion-button:not(.collapsed) {
      color: #4ec0db !important;
      box-shadow: none;
    }

    .accordion-body {
      font-size: 0.9rem;
      color: #555;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
      width: 56px;
      height: 56px;
      background: #25d366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .whatapp:hover {
      transform: scale(1.1);
    }

    .whatapp img {
      width: 32px;
      height: 32px;
    }

    @keyframes bounce {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }

      100% {
        transform: translateY(0);
      }
    }

    @keyframes float {
      0% {
        transform: translateY(0) rotate(0);
      }

      50% {
        transform: translateY(-14px) rotate(-6deg);
      }

      100% {
        transform: translateY(0) rotate(0);
      }
    }

    @keyframes shimmer {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.4;
      }

      100% {
        opacity: 1;
      }
    }

    .christmas-festive-header {
      position: relative;
      overflow: visible;
    }

    .christmas-festive-header .animated-emoji {
      display: inline-block;
      font-size: 2.4rem;
      margin: 0 0.05em;
      vertical-align: middle;
    }

    .christmas-festive-header .animated-emoji.snowflake {
      animation: float 1.7s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.gift {
      animation: bounce 1.5s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.tree {
      animation: bounce 1.2s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.firework {
      animation: shimmer 1.2s infinite alternate;
    }

    .christmas-festive-header .animated-emoji.champagne {
      animation: float 2s infinite alternate-reverse;
    }

    @media (max-width: 576px) {
      .banner-swiper-container img.slide-picture {
        border-radius: 0 !important;
      }
    }
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
      height: 390px !important;
      position: relative;
      border: 2px solid;
      border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
      border-radius: 30px;
      background: transparent;
      scroll-snap-align: start;
      margin: 0;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
    }
    
    .upcoming-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }    .upcoming-image {
      width: 100%;
      height: 250px; /* Kept 250px because xmas cards don't use 450px */
      border-radius: 24px;
      overflow: hidden;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 24px;
      padding: 2.2px; /* Inner padding like index.php */
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
      overflow: visible !important;
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
      color: #4CB9D3 !important;
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

    /* Ensure only ONE clear FontAwesome chevron is rendered and hide Swiper 11 auto-injected SVGs */
    .banner-swiper .swiper-button-next::after,
    .banner-swiper .swiper-button-prev::after {
      font-family: "Font Awesome 6 Free" !important;
      font-weight: 900 !important;
      font-size: 20px !important;
      color: #fff !important;
      display: block !important;
    }
    
    .banner-swiper .swiper-button-next::after {
        content: "\f054" !important;
    }
    
    .banner-swiper .swiper-button-prev::after {
        content: "\f053" !important;
    }

    .banner-swiper .swiper-button-next svg,
    .banner-swiper .swiper-button-prev svg {
        display: none !important;
    }

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
</style>
</head>

<body>

  <header>
    <?php include('includes/header.php'); ?>
  </header>

  <!-- Banner -->
  <div class="banner-swiper-container banner-swiper-secondary">
    <div class="swiper banner-swiper" style="will-change: transform; backface-visibility: hidden;">
      <div class="swiper-wrapper" style="will-change: transform; backface-visibility: hidden;">
        <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="assets/optimized-images/christmas&newyear/mobile-banner-1.avif" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async"
              src="assets/optimized-images/christmas&newyear/banner-2.avif" alt="Christmas in Manali - Snowy Adventure"
              style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div>
        <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="assets/optimized-images/christmas&newyear/mobile-banner-2.avif" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async"
              src="assets/optimized-images/christmas&newyear/banner-1.avif" alt="New Year Party in Goa"
              style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div>
        <!-- <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
          <picture>
            <source srcset="https://roamers.in/assets/img/sri-lanka/sri-lanka-gallery-06.avif" media="(max-width: 576px)">
            <img class="slide-picture" loading="eager" decoding="async" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif" alt="Himalayan Christmas Escape" style="will-change: transform; backface-visibility: hidden;">
          </picture>
        </div> -->
      </div>
      <!-- <div class="swiper-pagination"></div> -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <div>

    <h2 class="upcoming-header mt-5 christmas-festive-header">
      <span class="animated-emoji snowflake" aria-hidden="true" style="animation-delay: 0.1s;">🎄</span>
      Christmas &amp; New Year Trips
      <span class="animated-emoji snowflake" aria-hidden="true" style="animation-delay: 0.1s;">🎄</span>

    </h2>

    <div class="d-flex flex-wrap justify-content-center align-items-center m-0 p-0" style="row-gap: 50px; column-gap: 20px; padding-bottom: 20px !important;">
      <!-- SPITI WINTER EXPEDITION -->
      <div class="upcoming-card" onclick="window.open('spitivalley-winter-christmas&newyear.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/spiti-valley/cover/spiti-chandratal-trek.avif" alt="Spiti Winter Expedition">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai - Bangalore</span>
            </div>
          </div>
          <h1 class="upcoming-title">SPITI WINTER EXPEDITION </h1>
          <p class="upcoming-locations">DELHI, SHIMLA, KALPA, NAKO, KAZA, SANGLA/ CHITKUL</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 20,25,27</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹21,990 /-</div>
            </div>
          </div>
          <a href="spitivalley-winter-christmas&newyear.php" class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- MEGHALAYA -->
      <div class="upcoming-card" onclick="window.open('meghalaya-christmas-new-year.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/meghalaya/meghalaya-gallery-03.avif" alt="Mejestic Meghalaya">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>Ex: Guwahati </span>
            </div>
          </div>
          <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
          <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 20,23,28</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹21,990/-</div>
            </div>
          </div>
          <a href="meghalaya-christmas-new-year.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- CHIKMAGALUR -->
      <div class="upcoming-card" onclick="window.open('chikmagalur-christmas&newyear.php') "
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/testimonials/chikmagalur.avif" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai - Bangalore</span>
            </div>
          </div>
          <h1 class="upcoming-title">CHIKKAMAGALURU BACKPACKING </h1>
          <p class="upcoming-locations">Chikkamagaluru, Z point, Hebbe Falls</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,499/-</div>
            </div>
          </div>
          <a href="chikmagalur-christmas&newyear.php" class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- KERALA -->
      <div class="upcoming-card" onclick="window.open('kerala-chritsmas&newyear.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://www.roamers.in/assets/img/Kerala/Kerala-photos.jpg" alt="Onam Special – Kerala Getaway">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>5D/4N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">KERALA: GOD'S OWN COUNTRY</h1>
          <p class="upcoming-locations">Munnar, Thekkady, Alappuzha</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹16,990/-</div>
            </div>
          </div>
          <a href="kerala-chritsmas&newyear.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Kodaikanal -->
      <div class="upcoming-card" onclick="window.open('kodaikanal1-christmas&newyear.php')"
        style="cursor:pointer">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/kodaikanal/Kodai.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">KODAIKANAL BACKPACKING </h1>
          <p class="upcoming-locations">Kodaikanal , Vattakanal , Poombarai</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,990/-</div>
            </div>
          </div>
          <a href="kodaikanal1-christmas&newyear.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Wayanad Card -->
      <div class="upcoming-card" onclick="window.open('wayanad-christmas&newyear.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">Wonders of Wayanad</h1>
          <p class="upcoming-locations">Wayanad</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹8,990/-</div>
            </div>
          </div>
          <a href="wayanad-christmas&newyear.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Ooty Card -->
      <div class="upcoming-card" onclick="window.open('ooty-christmas&newyear.php')" style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://roamers.in/assets/img/Ooty/1-min.jpg" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">OOTY THE QUEEN OF HILLS </h1>
          <p class="upcoming-locations">Chennai, Coimbatore </p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹9,499/-</div>
            </div>
          </div>
          <a href="ooty-christmas&newyear.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Pondi Dive-in -->
      <div class="upcoming-card" onclick="window.open('pondi-christmas&newyear.php')" style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/pondicherry/Media/Pondi-cover-min.jpg" alt="Pondi Dive-in">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Direct, Chennai</span>
            </div>
          </div>
          <h1 class="upcoming-title">Pondi Dive-in</h1>
          <p class="upcoming-locations">Pondicherry</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 24,29</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹4,990</div>
            </div>
          </div>
          <a href="pondi-christmas&newyear.php" class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Sri Lanka -->
      <div class="upcoming-card" onclick="window.open('srilanka-christmas&newyear.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="assets/img/Sirlanka/srilanka-images-by-roamers (16).webp" alt="Sri Lanka">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Colombo</span>
            </div>
          </div>
          <h1 class="upcoming-title">Sri Lanka</h1>
          <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 13,20,27</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price">₹43,990/-</div>
            </div>
          </div>
          <a href="srilanka-christmas&newyear.php"  class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
      <!-- Andaman Island Hopping -->
      <div class="upcoming-card" onclick="window.open('andaman-christmas&newyear.php')"
        style="cursor: pointer;">
        <div class="upcoming-content">
          <div class="upcoming-image">
            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg" alt="Andaman Island Hopping">
          </div>
          <div class="upcoming-card-flex">
            <div class="upcoming-duration">
              <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
            </div>
            <div class="upcoming-from">
              <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
              <span>EX: Port Blair</span>
            </div>
          </div>
          <h1 class="upcoming-title">Andaman Island Hopping</h1>
          <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
          <div class="upcoming-price-section">
            <div class="upcoming-dates">
              <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
              <span class="upcoming-dates-text">Dec 25</span>
            </div>
            <div>
              <div class="upcoming-starts">Starts</div>
              <div class="upcoming-price andaman-price">₹29,990/-</div>
            </div>
          </div>
          <a href="andaman-christmas&newyear.php" class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View Trip</a>
        </div>
      </div>
    </div>

  </div>





  <div style="display:none">
    <?php include('components/upcoming-trips.php'); ?>
  </div>
  <!-- Desktop Gallery Swiper -->
  <!-- <div class="gallery-swiper-section-desktop">
    <div class="swiper gallery-swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-1-by-roamers.avif" alt="Manali Snow Christmas"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-2-by-roamers.avif" alt="Goa Beach New Year"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-3-by-roamers.avif" alt="Kasol Winter Camp"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-4-by-roamers.avif" alt="Rishikesh Yoga Retreat"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-5-by-roamers.avif" alt="Shimla Christmas Special"></div>
        <div class="swiper-slide"><img class="travel-card__img" src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-card-6-by-roamers.avif" alt="McLeod Ganj Tibetan New Year"></div>
      </div>
      <div class="gallery-swiper-nav">
        <button class="swiper-button-prev" aria-label="Previous"></button>
        <button class="swiper-button-next" aria-label="Next"></button>
      </div>
    </div>
  </div> -->

  <!-- Banner -3 -->
  <div class="container">
    <div class="banner-swiper-container banner-swiper-secondary">
      <div class="swiper banner-swiper" style="will-change: transform; backface-visibility: hidden;">
        <div class="swiper-wrapper" style="will-change: transform; backface-visibility: hidden;">
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="Christmas in Manali - Snowy Adventure"
                style="will-change: transform; backface-visibility: hidden;">
          </div>
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="New Year Party in Goa" style="will-change: transform; backface-visibility: hidden;">
          </div>
          <div class="swiper-slide" style="will-change: transform; backface-visibility: hidden;">
              <img class="slide-picture" loading="eager" decoding="async"
                src="https://roamers.in/assets/optimized-images/christmas&newyear/chirstmas&newyear-banner-by-roamers.avif"
                alt="Himalayan Christmas Escape" style="will-change: transform; backface-visibility: hidden;">
          </div>
        </div>
      </div>
    </div>
  </div>


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

  <!-- Footer -->

  <!-- WhatsApp Button -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" aria-label="Chat on WhatsApp">
      <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp">
    </a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      // --- Updated: Fix mobile swiper interaction issue with multiple Swiper instances ---

      function supportsPassive() {
        var supportsPassiveOption = false;
        try {
          var opts = Object.defineProperty({}, 'passive', {
            get: function () {
              supportsPassiveOption = true;
            }
          });
          window.addEventListener("test", null, opts);
        } catch (e) { }
        return supportsPassiveOption;
      }

      // Use global variables to keep track of Swiper instances
      window.swipers = {};

      function destroyAllSwipers() {
        // Safely destroy all Swiper instances
        if (window.swipers.bannerSwiper && typeof window.swipers.bannerSwiper.destroy === 'function') {
          window.swipers.bannerSwiper.destroy(true, true);
          window.swipers.bannerSwiper = null;
        }
        if (window.swipers.gallerySwiper && typeof window.swipers.gallerySwiper.destroy === 'function') {
          window.swipers.gallerySwiper.destroy(true, true);
          window.swipers.gallerySwiper = null;
        }
        if (window.swipers.christmasMobileSwiper && typeof window.swipers.christmasMobileSwiper.destroy === 'function') {
          window.swipers.christmasMobileSwiper.destroy(true, true);
          window.swipers.christmasMobileSwiper = null;
        }
      }

      function fixSwiperTouchLock(swiper) {
        // On mobile, allow multiple swipers to handle touch individually without blocking each other.
        // Remove Swiper's global touch-lock that can conflict when fast switching/swiping.
        if (swiper && swiper.touchEventsData) {
          swiper.touchEventsData.isTouched = false;
          swiper.touchEventsData.isMoved = false;
        }
      }

      function initSwipers() {
        const isMobile = window.innerWidth <= 767;

        destroyAllSwipers();

        // Banner Swiper (always active)
        window.swipers.bannerSwiper = new Swiper(".banner-swiper", {
          loop: true,
          speed: isMobile ? 650 : 700,
          autoplay: isMobile ? {
            delay: 1900,
            disableOnInteraction: false
          } : {
            delay: 3500,
            disableOnInteraction: false
          },
          cssMode: false, // Changed to false for better interop with other touch swipers
          effect: 'slide',
          simulateTouch: true,
          touchRatio: 1,
          observer: true,
          observeParents: true,
          pagination: {
            el: ".banner-swiper .swiper-pagination",
            clickable: true,
            dynamicBullets: isMobile ? true : false
          },
          navigation: isMobile ?
            false : {
              nextEl: ".banner-swiper .swiper-button-next",
              prevEl: ".banner-swiper .swiper-button-prev",
            },
          on: {
            init: function () {
              // Hardware acceleration for main swiper
              const ele = document.querySelector('.banner-swiper');
              if (ele) {
                ele.style.willChange = 'transform';
                ele.style.backfaceVisibility = 'hidden';
              }
            },
            touchStart: function (swiper, event) {
              // If any other swiper is being interacted with, break the touch lock to avoid conflict.
              for (const key in window.swipers) {
                if (window.swipers[key] && window.swipers[key] !== swiper) {
                  fixSwiperTouchLock(window.swipers[key]);
                }
              }
            }
          }
        });

        if (!isMobile) {
          window.swipers.gallerySwiper = new Swiper(".gallery-swiper.mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
              delay: 4000,
              disableOnInteraction: false
            },
            navigation: {
              nextEl: ".gallery-swiper-nav .swiper-button-next",
              prevEl: ".gallery-swiper-nav .swiper-button-prev",
            },
            observer: true,
            observeParents: true,
            breakpoints: {
              0: {
                slidesPerView: 1.2,
                spaceBetween: 10
              },
              480: {
                slidesPerView: 1.5,
                spaceBetween: 15
              },
              768: {
                slidesPerView: 2,
                spaceBetween: 20
              },
              992: {
                slidesPerView: 3,
                spaceBetween: 30
              },
              1200: {
                slidesPerView: 4,
                spaceBetween: 35
              },
            },
          });
        } else {
          window.swipers.christmasMobileSwiper = new Swiper(".christmas-mobile-swiper", {
            loop: true,
            speed: 500,
            autoplay: {
              delay: 2600,
              disableOnInteraction: false
            },
            effect: 'slide',
            pagination: {
              el: ".christmas-mobile-swiper .swiper-pagination",
              clickable: true
            },
            observer: true,
            observeParents: true,
            on: {
              touchStart: function (swiper, event) {
                // Ensure only one swiper handles touch at a time
                for (const key in window.swipers) {
                  if (window.swipers[key] && window.swipers[key] !== swiper) {
                    fixSwiperTouchLock(window.swipers[key]);
                  }
                }
              }
            }
          });
        }
      }

      // Improve touch event performance on mobile
      if (supportsPassive()) {
        window.addEventListener("touchstart", function () { }, {
          passive: true
        });
        window.addEventListener("touchmove", function () { }, {
          passive: true
        });
        window.addEventListener("wheel", function () { }, {
          passive: true
        });
      }

      // Initialize on load & resize
      window.addEventListener('load', initSwipers);
      window.addEventListener('resize', () => {
        clearTimeout(window.resizeTimer);
        window.resizeTimer = setTimeout(initSwipers, 300);
      });
    </script>

  <?php include('includes/footer.php'); ?>

</body>

</html>